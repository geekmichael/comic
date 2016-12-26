<?php if ( ! defined( 'ABSPATH' ) ) exit;

/**
 * Clean up wp_head().
 *
 * Remove unnecessary <link>'s
 * Remove inline CSS used by Recent Comments widget
 * Remove inline CSS used by posts with galleries
 * Remove self-closing tag and change ''s to "'s on rel_canonical()
 * Remove comment reply script
 */
add_action( 'init', function () {
	remove_action( 'wp_head', 'feed_links', 2 );
	remove_action( 'wp_head', 'feed_links_extra', 3 );
	remove_action( 'wp_head', 'rsd_link' );
	remove_action( 'wp_head', 'wlwmanifest_link' );
	remove_action( 'wp_head', 'adjacent_posts_rel_link_wp_head', 10, 0 );
	remove_action( 'wp_head', 'wp_generator' );
	remove_action( 'wp_head', 'wp_shortlink_wp_head', 10, 0 );

	global $wp_widget_factory;
	remove_action( 'wp_head', array(
		$wp_widget_factory->widgets['WP_Widget_Recent_Comments'],
		'recent_comments_style',
	) );
} );

/**
 * Remove the WordPress logo in Admin Area.
 */
add_action('wp_before_admin_bar_render', function() {
        global $wp_admin_bar;
        /* Remove their stuff */
        $wp_admin_bar->remove_menu('wp-logo');
} );

/**
 * Remove the Welcome panel in Admin Area.
 */
add_action( 'load-index.php', function() {
    remove_action('welcome_panel', 'wp_welcome_panel');
    $user_id = get_current_user_id();
    if (0 !== get_user_meta( $user_id, 'show_welcome_panel', true ) ) {
        update_user_meta( $user_id, 'show_welcome_panel', 0 );
	}
} );

/**
 * Disable Access to the WordPress Dashboard for Non-Admins
 */
add_action('admin_init', 'no_mo_dashboard');
function no_mo_dashboard() {
  if (!current_user_can('manage_options') && $_SERVER['DOING_AJAX'] != '/wp-admin/admin-ajax.php') {
  wp_redirect(home_url()); exit;
  }
}

/**
 * Remove the WordPress version from RSS feeds.
 */
add_filter( 'the_generator', '__return_false' );

/**
 * Clean up language_attributes() used in <html> tag.
 *
 * Remove dir="ltr"
 */
add_filter( 'language_attributes', function () {
	$attributes = array();
	$output     = '';

	if ( is_rtl() ) {
		$attributes[] = 'dir="rtl"';
	}

	$lang = get_bloginfo( 'language' );

	if ( $lang ) {
		$attributes[] = "lang=\"$lang\"";
	}

	$output = implode( ' ', $attributes );
	$output = apply_filters( 'roots_language_attributes', $output );

	return $output;
} );

/**
 * Clean up output of stylesheet <link> tags.
 */
add_filter( 'style_loader_tag', function ( $input ) {
	preg_match_all( "!<link rel='stylesheet'\s?(id='[^']+')?\s+href='(.*)' type='text/css' media='(.*)' />!", $input, $matches );
	// Only display media if it is meaningful
	$media = $matches[3][0] !== '' && $matches[3][0] !== 'all' ? ' media="' . $matches[3][0] . '"' : '';
	return '<link rel="stylesheet" href="' . $matches[2][0] . '"' . $media . '>' . "\n";
} );

/**
 * Manage output of wp_title()
 */
add_filter( 'wp_title', function ( $title ) {
	if ( is_feed() ) {
		return $title;
	}

	$title .= get_bloginfo( 'name' );

	return $title;
}, 10 );

/**
 * Add and remove body_class() classes
 */
add_filter( 'body_class', function ( $classes ) {
	// Add post/page slug
	if ( is_single() || is_page() && ! is_front_page() ) {
		$classes[] = basename( get_permalink() );
	}

	// Remove unnecessary classes
	return array_diff( $classes, array(
		'page-template-default',
		'page-id-' . get_option( 'page_on_front' )
	) );
} );

/**
 * Remove unnecessary dashboard widgets and menu items.
 */
add_action( 'admin_init', function () {
	remove_meta_box( 'dashboard_incoming_links', 'dashboard', 'normal' );
	remove_meta_box( 'dashboard_plugins', 'dashboard', 'normal' );
	remove_meta_box( 'dashboard_primary', 'dashboard', 'normal' );
	remove_meta_box( 'dashboard_secondary', 'dashboard', 'normal' );
	remove_submenu_page ('themes.php', 'theme-editor.php');
	remove_submenu_page ('themes.php', 'themes.php');
	remove_menu_page ('plugins.php', 'plugins.php');
} );

/**
 * Remove unnecessary self-closing tags.
 */
add_filters( array(
	'get_avatar',
	'comment_id_fields',
	'post_thumbnail_html',
), function ( $input ) {
	return str_replace( ' />', '>', $input );
} );

/**
 * Prevent WP admin styles from loading
 */
add_action( 'wp_print_styles', 'my_deregister_styles', 100 );
 
function my_deregister_styles() {
	wp_deregister_style( 'wp-admin' );
}

/**
 * Relative URLs.
 */
if ( ! ( is_admin() || in_array( $GLOBALS['pagenow'], array( 'wp-login.php', 'wp-register.php' ) ) ) ) {
	add_filters( array(
		'bloginfo_url',
		'the_permalink',
		'wp_list_pages',
		'wp_list_categories',
		'roots_wp_nav_menu_item',
		'the_content_more_link',
		'the_tags',
		'get_pagenum_link',
		'get_comment_link',
		'month_link',
		'day_link',
		'year_link',
		'tag_link',
		'the_author_posts_link',
		'script_loader_src',
		'style_loader_src',
	), function ( $input ) {
		preg_match( '|https?://([^/]+)(/.*)|i', $input, $matches );

		if ( ! isset( $matches[1] ) || ! isset( $matches[2] ) ) {
			return $input;
		}
		elseif ( ( $matches[1] === $_SERVER['SERVER_NAME'] ) || $matches[1] === $_SERVER['SERVER_NAME'] . ':' . $_SERVER['SERVER_PORT'] ) {
			return str_replace( home_url(), '', $input );
		}
		else {
			return $input;
		}
	} );
}