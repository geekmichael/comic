<?php get_template_part( 'templates/header' ); ?>

	<div class="post-content">
		<div class="post-content-container">
			<div class="widget-area pull-right">
			<?php dynamic_sidebar( 'sidebar' ); ?>
			</div>
			<div class="breadcrumb">
				<?php the_breadcrumb(); ?>
			</div>
			<div class="post-main">
				<div class="post-main-wrapper">
					<?php if (have_posts()) : ?>
					<div class="archive-header">
						<h1 class="archive-title"><?php echo single_cat_title('', false); ?></h1>
					</div><!-- .archive-header -->
					<?php endif; ?>
					<ul class="archive-list">
					<?php
						while (have_posts()) : the_post();
							get_template_part('templates/content', 'comic');
						endwhile;
					?>
					</ul>
				</div><!-- .comic-detail-wrapper -->
			</div><!-- .comic-detail -->
		</div><!-- .post-content-containter -->
	</div><!-- .post-content -->

<?php get_template_part( 'templates/footer' ); ?>
