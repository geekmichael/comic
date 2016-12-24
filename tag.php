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
				<div class="comic-section post-main-wrapper">
					<?php if (have_posts()) : ?>
					<div class="comic-section-head archive-header">
						<h1 class="archive-title"><?php echo single_cat_title('', false); ?></h1>
					</div><!-- .archive-header -->
					<?php endif; ?>
					<div class="comic-section-main">
						<div class="list-wrap"><div class="list-page">
						<div class="archive-list">
						<?php
							while (have_posts()) : the_post();
								get_template_part('templates/content', 'comic');
							endwhile;
						?>
						</div>
						</div></div>
					</div>
				</div><!-- .comic-detail-wrapper -->
			</div><!-- .comic-detail -->
		</div><!-- .post-content-containter -->
	</div><!-- .post-content -->

<?php get_template_part( 'templates/footer' ); ?>
