</div><!-- .wrapper -->
<footer class="site-footer clearfix">
	<div class="container">
		<div class="col-lg-2 footer-logo">
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
					<img class="footer-logo-image" src="<?php echo THEME_IMAGES_URI; ?>logo.png" width="120" height="40" alt="<?php echo esc_attr( get_bloginfo( 'name' ) ); ?>">
				<?php endif; ?>
			</a>
		</div>
		<div class="col-lg-10">
		<?php
		echo '<h4>'.get_bloginfo('name').' - '.get_bloginfo('description').'</h4>';
		printf( '<p>&copy; 版权所有 %1$s. %2$s 保留所有权利</p>',
				date( 'Y' ),
				comic_options ('footer_company')
		); 
//		echo '<p>&copy; 版权所有 '.date('Y').' 保留所有权利</p>';
		?>
		</div>
	</div>
</footer>
<?php wp_footer(); ?>
<!-- jQuery (necessary for Bootstrap's JavaScript plugins) -->
<script src="<?php echo THEME_JAVASCRIPTS_URI ?>jquery.min.js"></script>
<!-- Include all compiled plugins (below), or include individual files as needed -->
<script src="<?php echo THEME_JAVASCRIPTS_URI ?>bootstrap.min.js"></script>
</body>
</html>
