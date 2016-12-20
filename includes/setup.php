<?php if ( ! defined( 'ABSPATH' ) ) exit;

/**
 * Setup class auto-loader.
 */
spl_autoload_register( function ( $class ) {
	$class = strtolower( $class );

	if ( strpos( $class, 'walker' ) === 0 ):
		$path = THEME_INCLUDES_DIR . 'walkers' . DIRECTORY_SEPARATOR;
		$file = str_replace( '_', '-', $class ) . '.php';
		if ( is_file( $path . $file ) ):
			include_once( $path . $file );
			return;
		endif;
	elseif ( strpos( $class, 'widget' ) === 0 ):
		$path = THEME_INCLUDES_DIR . 'widgets' . DIRECTORY_SEPARATOR;
		$file = str_replace( '_', '-', $class ) . '.php';
		if ( is_file( $path . $file ) ):
			include_once( $path . $file );
			return;
		endif;
	endif;
} );

/**
 * Setup theme.
 */
add_action( 'after_setup_theme', function () {
	// theme text domain
	load_theme_textdomain( THEME_NAME, THEME_LANGUAGES_DIR );

	// menus
	register_nav_menus( array(
		'header' => __( '顶部菜单', THEME_NAME ),
	) );

	// thumbnails & post formats
	add_theme_support( 'post-thumbnails' );
} );

/**
 *  Setup widgets.
 */
add_action( 'widgets_init', function () {
	register_sidebar( array(
		'id'            => 'sidebar',
		'name'          => __( '侧边栏区域', THEME_NAME ),
		'description'   => __( '显示在侧边的小部件', THEME_NAME ),
		'before_widget' => null,
		'after_widget'  => null,
	) );
} );

function acf_comic_status($comic_status) {
	if ($comic_status == 'serializing')
		return '连载中...';
	elseif ($comic_status == 'finish')
		return '已完结';
	else
		return '未知';
}

function comic_terms ($postID) {
	$terms = get_the_terms ($postID, 'post-comic');
	if ($terms) {
		foreach ($terms as $term) {
			echo '<a href="#">'.$term->name.'</a>';
		}
	} 
}

function acf_choice_label ($field) {
	$field = get_field_object($field);
	$value = $field['value'];
	$label = $field['choices'][$value];
	return $label;
}

function acf_first_row ($repeaters) {
	$rows = get_field($repeaters);
	$first_row = $rows[0];
	return $first_row;
}

function acf_last_row ($repeaters) {
	$rows = get_field($repeaters);
	$last_row = end($rows);
	return $last_row;
}

function last_chapter_title ($repeaters) {
	$last_chapter = acf_last_row($repeaters);
	$title = $last_chapter['comic-chapters-title'];
	return $title;
}

function getPostViews($postID){   
    $count_key = 'post_views_count';   
    $count = get_post_meta($postID, $count_key, true);   
    if($count==''){   
        delete_post_meta($postID, $count_key);   
        add_post_meta($postID, $count_key, '0');   
        return "0";   
    }   
    return $count;   
}   
function setPostViews($postID) {   
    $count_key = 'post_views_count';   
    $count = get_post_meta($postID, $count_key, true);   
    if($count==''){   
        $count = 0;   
        delete_post_meta($postID, $count_key);   
        add_post_meta($postID, $count_key, '0');   
    }else{   
        $count++;   
        update_post_meta($postID, $count_key, $count);   
    }   
}  

/*
 * Gravatar.com is blocked by GFW in China Mainland, change to Duoshuo.com
 */
function duoshuo_avatar($avatar) {
    $avatar = str_replace(array("www.gravatar.com","0.gravatar.com","1.gravatar.com","2.gravatar.com"),"gravatar.duoshuo.com",$avatar);
    return $avatar;
}
add_filter( 'get_avatar', 'duoshuo_avatar', 10, 3 );
