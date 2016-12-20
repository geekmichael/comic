</div><!-- .wrapper -->
<footer class="site-footer clearfix">
	<div class="site-footer-container">
		<div class="footer-logo">
			<a class="footer-logo-link" href="<?php echo esc_url( home_url( '/' ) ); ?>" title="<?php echo esc_attr( get_bloginfo( 'name' ) ); ?>" rel="home">
				<?php if ( $logotype = comic_options( 'header_logotype' ) ): ?>
					<?php $logotype_src = wp_make_link_relative( $logotype ); ?>
					<?php $logotype_size = getimagesize( str_replace( '/cn', '', ABSPATH . $logotype_src ) ); ?>
					<?php printf( '<img class="footer-logo-image" src="%s" %s alt="%s">',
						$logotype_src,
						$logotype_size[3],
						esc_attr( get_bloginfo( 'name' ) )
					); ?>
				<?php else: ?>
					<img class="footer-logo-image" src="<?php echo THEME_IMAGES_URI; ?>logo.png" width="180" height="60" alt="<?php echo esc_attr( get_bloginfo( 'name' ) ); ?>">
				<?php endif; ?>
			</a>
		</div>
		<?php
		echo '<p>&copy; 版权所有 '.date('Y').' 保留所有权利</p>';
		?>
	</div>
</footer>
<?php wp_footer(); ?>
</body>
</html>
