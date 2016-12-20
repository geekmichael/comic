<!DOCTYPE html>
<html <?php language_attributes(); ?>>
<head>
	<meta charset="<?php bloginfo( 'charset' ); ?>">
    <meta http-equiv="x-ua-compatible" content="ie=edge">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<title><?php wp_title( '&middot;', true, 'right' ); ?></title>
	<link rel="stylesheet" href="<?php echo THEME_STYLESHEETS_URI; ?>normalize.css" />
	<link rel="stylesheet" href="<?php echo THEME_STYLESHEETS_URI; ?>h5bp.css" />
	<?php wp_head(); ?>
</head>
<body>
<div id="site-header" class="header">
	<div class="header-wrapper">
		<div class="header-container clearfix">
			<div class="site-logo">
				<a class="header-logo-link" href="<?php echo esc_url( home_url( '/' ) ); ?>" title="<?php echo esc_attr( get_bloginfo( 'name' ) ); ?>" rel="home">
					<?php if ( $logotype = comic_options( 'header_logotype' ) ): ?>
						<?php $logotype_src = wp_make_link_relative( $logotype ); ?>
						<?php $logotype_size = getimagesize( str_replace( '/cn', '', ABSPATH . $logotype_src ) ); ?>
						<?php printf( '<img class="header-logo-image" src="%s" %s alt="%s">',
							$logotype_src,
							$logotype_size[3],
							esc_attr( get_bloginfo( 'name' ) )
						); ?>
					<?php else: ?>
						<img class="header-logo-image" src="<?php echo THEME_IMAGES_URI; ?>logo.png" width="180" height="60" alt="<?php echo esc_attr( get_bloginfo( 'name' ) ); ?>">
					<?php endif; ?>
				</a>
			</div><!-- .site-logo -->
			<div class="header-search-box">
				<form class="search-form clearfix" data-hook="search-form" action="/" method="get">
					<input type="text" name="s" class="search-keywords" id="search" value="<?php the_search_query(); ?>" placeholder="搜索你感兴趣的漫画或作者名" />
					<input type="submit" name="submit" class="submit" value="搜索" />
				</form>
			</div><!-- .header-search-box -->
		</div><!-- .header-container -->
	</div><!-- .header-wrapper -->
</div>
<div class="navmenu clearfix">
	<?php wp_nav_menu( array(
		'theme_location'  => 'header',
		'container_class' => 'navmenu-container',
		'menu_class'      => 'navmenu-header-list',
		'items_wrap'      => '<ul class="%2$s">%3$s</ul>',
//		'walker'          => new Walker_Header_Menu,
	) ); ?>
</div><!-- .menu -->
<div class="wrapper">
