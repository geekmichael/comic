<?php

// theme constants
define( 'THEME_NAME', 'comic' );
define( 'URL_SEPARATOR', '/');
//漫画题材分类ID
define( 'COMICTHEME_CAT_ID', 31);
//Advanced Custom Fields 自定义字段密钥
define( 'COMIC_STATUS_KEY', 'field_58560eaf1fa66');
define( 'COMIC_AREA_KEY', 'field_585607cece62d' );
define( 'COMIC_AUDIENCE_KEY', 'field_585608f7ce62f' );

// uri constants
//define( 'THEME_URI', wp_make_link_relative( get_stylesheet_directory_uri() . URL_SEPARATOR ) );
define( 'THEME_URI', get_stylesheet_directory_uri() . URL_SEPARATOR );
define( 'THEME_ASSETS_URI', THEME_URI . 'assets' . URL_SEPARATOR );
define( 'THEME_IMAGES_URI', THEME_ASSETS_URI . 'images' . URL_SEPARATOR );
define( 'THEME_STYLESHEETS_URI', THEME_ASSETS_URI . 'css' . URL_SEPARATOR );
define( 'THEME_JAVASCRIPTS_URI', THEME_ASSETS_URI . 'js' . URL_SEPARATOR );

// dir constants
define( 'THEME_DIR', get_stylesheet_directory() . DIRECTORY_SEPARATOR );
define( 'THEME_INCLUDES_DIR', THEME_DIR . 'includes' . DIRECTORY_SEPARATOR );
define( 'THEME_LANGUAGES_DIR', THEME_DIR . 'languages' );
define( 'THEME_ASSETS_DIR', THEME_DIR . 'assets' . DIRECTORY_SEPARATOR );
define( 'THEME_STYLESHEETS_DIR', THEME_ASSETS_DIR . 'css' . DIRECTORY_SEPARATOR );
define( 'THEME_JAVASCRIPTS_DIR', THEME_ASSETS_DIR . 'js' . DIRECTORY_SEPARATOR );

// functions
require_once THEME_INCLUDES_DIR . 'helpers.php';
require_once THEME_INCLUDES_DIR . 'shortcodes.php';
require_once THEME_INCLUDES_DIR . 'setup.php';
require_once THEME_INCLUDES_DIR . 'custom-post.php';
if (!WP_DEBUG) {
	require_once THEME_INCLUDES_DIR . 'cleanup.php';
}
require_once THEME_INCLUDES_DIR . 'assets.php';
require_once THEME_INCLUDES_DIR . 'customize.php';
require_once THEME_INCLUDES_DIR . 'ajax.php';
require_once THEME_INCLUDES_DIR . 'breadcrumbs.php';
