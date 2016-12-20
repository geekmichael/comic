<?php

// theme constants
define( 'THEME_NAME', 'comic' );

// uri constants
//define( 'THEME_URI', wp_make_link_relative( get_stylesheet_directory_uri() . DIRECTORY_SEPARATOR ) );
define( 'THEME_URI', get_stylesheet_directory_uri() . DIRECTORY_SEPARATOR );
define( 'THEME_ASSETS_URI', THEME_URI . 'assets' . DIRECTORY_SEPARATOR );
define( 'THEME_IMAGES_URI', THEME_ASSETS_URI . 'images' . DIRECTORY_SEPARATOR );
define( 'THEME_STYLESHEETS_URI', THEME_ASSETS_URI . 'css' . DIRECTORY_SEPARATOR );
define( 'THEME_JAVASCRIPTS_URI', THEME_ASSETS_URI . 'js' . DIRECTORY_SEPARATOR );

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
