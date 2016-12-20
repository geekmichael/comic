<?php if ( ! defined( 'ABSPATH' ) ) exit;

/**
 * Add filters.
 *
 * @param array  $tags
 * @param string $function
 */
function add_filters( array $tags, $function ) {
	foreach ( $tags as $tag ) {
		add_filter( $tag, $function );
	}
}

/**
 * Add actions.
 *
 * @param array  $tags
 * @param string $function
 */
function add_actions( array $tags, $function ) {
	foreach ( $tags as $tag ) {
		add_action( $tag, $function );
	}
}

/**
 * Theme options.
 *
 * @param string $name
 * @param bool   $default
 *
 * @return string
 */
function comic_options( $name, $default = false ) {
	$options = get_option( THEME_NAME . '_options' );

	if ( isset( $options[$name] ) )
		return apply_filters( THEME_NAME . '_options_' . $name, $options[$name] );

	return apply_filters( THEME_NAME . '_options_' . $name, $default );
}

// Advancd Custom Filed Image
function comic_acf_gravatar ($field_name) {
	$image = get_field($field_name);
	$htmlstr = '<img src="'.THEME_IMAGES_URI.'images/misc/default_gravatar.gif'.'" width="150" height="150" alt="未上传图片" />';
	if (!empty($image)) {
		$htmlstr = '<img src="'.$image['url'].'" alt="'.$image['alt'].'" />';
	}
	return $htmlstr;
}

// add a new logo to the login page
function wptutsplus_login_logo() { 
    echo '<style type="text/css">';
    echo '    .login #login h1 a {';
    echo '        background-image: url( '.THEME_IMAGES_URI.'/logo.png );';
	echo '        background-size: 180px 60px;';
	echo '        width:180px; height:60px;';
    echo '    }';
	echo '    .login {';
	echo '        background-color:#fff;';
	echo '     }';
    echo '</style>';
}
add_action( 'login_enqueue_scripts', 'wptutsplus_login_logo' );

function my_login_logo_url() {
return get_bloginfo( 'url' );
}
add_filter( 'login_headerurl', 'my_login_logo_url' );

function my_login_logo_url_title() {
return get_bloginfo();
}
add_filter( 'login_headertitle', 'my_login_logo_url_title' );


function wpjam_minify_html($html) {

    $search = array(
        '/\>[^\S ]+/s',  // 删除标签后面空格
        '/[^\S ]+\</s',  // 删除标签前面的空格
        '/(\s)+/s'       // 将多个空格合并成一个
    );

    $replace = array(
        '>',
        '<',
        '\\1'
    );

    $html = preg_replace($search, $replace, $html);

    return $html;
}

if(!is_admin()){
	add_action("wp_loaded", 'wp_loaded_minify_html');
	function wp_loaded_minify_html(){
		ob_start('wpjam_minify_html');
	}
}
