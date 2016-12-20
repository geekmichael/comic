<?php get_template_part( 'templates/header' ); ?>

	<div class="post-content">
		<div class="post-content-container">
			<div class="widget-area pull-right">
			<?php dynamic_sidebar( 'sidebar' ); ?>
			</div>
			<?php while ( have_posts() ) : the_post();?>
			<div class="breadcrumb">
				<?php the_breadcrumb(); ?>
			</div>
			<div class="post-main">
				<div class="post-main-wrapper">
					<div class="clearfix">
					<div class="comic-detail-thumb">
					<?php
					if (has_post_thumbnail())
						the_post_thumbnail();
					else
						echo '<img src="'.THEME_IMAGES_URI.'no-image.png" title="未设置漫画封面" />'; 
					?>
					</div>
					<div class="comic-detail-right">
						<h1 class="comic-title">
							<?php the_title(); ?>
							<span class="comic-status"><?php echo acf_comic_status(get_field('comic-status')); ?></span>
						</h1>
						<ul class="comic-attributes clearfix">
							<li>
								<span class="key">作者：</span>
								<span class="value"><?php the_field('comic-author'); ?></span>
							</li>
							<li>
								<span class="key">地域：</span>
								<span class="value">
									<?php
									echo acf_choice_label ('comic-national');
									?>
								</span>
							</li>
							<li>
								<span class="key">类型：</span>
								<span class="value"><?php echo acf_choice_label('comic-audience'); ?></span>
							</li>
							<li>
								<span class="key">题材：</span>
								<span class="value"><?php echo get_the_ID(); ?></span>
							</li>
							<li>
								<span class="key">人气：</span>
								<span class="value"><?php echo getPostViews( get_the_ID()); ?></span>
							</li>
						</ul>
						<div class="comic-des">
							<?php echo the_field('comic-des'); ?>
						</div>
						<div class="comic-des-links">
							<?php
							if (get_field('comic-chapters')) {
							$comic_chapters = acf_first_row('comic-chapters');
							$comic_chapter_url = $comic_chapters['comic-chapters-url'];
							// var_dump($comic_chapters);
							?>
							<a href="<?php echo $comic_chapter_url; ?>" class="readbtn">开始阅读</a>
							<?php } else { ?>
							<a href="#" class="readbtn">暂无章节</a>
							<?php 
							} 
							?>
							<div class="resource-provider">
							<span class="key">当前资源方：</span>
							<?php
							if (get_field('comic-source-site'))
								echo '<a href="'. get_field('comic-source-url'). '" target="_blank">'.acf_choice_label('comic-source-site').'</a>';
							else
								echo '暂无';
							?>
							</div>
						</div>
					</div>
					</div>
					<div class="comic-chapter-list">
						<div class="comic-chapter-wrapper">
							<div class="clearfix">
								<h2 class="title">章节列表</h2>
								<span class="subtitle">
								<?php
								$comic_chapters = get_field('comic-chapters');
								if ($comic_chapters) {
									$last_chapter = acf_last_row('comic-chapters');
									$last_chapter_title = $last_chapter['comic-chapters-title'];
									$last_chapter_url = $last_chapter['comic-chapters-url'];
									$chapter_list = '<ul class="chapter-list">';
									foreach ($comic_chapters as $chapters_array)
									{
										$chapter_list .= '<li><a href="'.$chapters_array['comic-chapters-url'].'" target="_blank">'.$chapters_array['comic-chapters-title'];
										if ($chapters_array == end($comic_chapters))
											$chapter_list .= '<span class="new"></span>';
										$chapter_list .='</a></li>';
									}
									 $chapter_list .= '</ul>';
								} else {
									$chapter_list = '暂无内容';
								}
								?>
								<a href="<?php echo $last_chapter_url; ?>" target="_blank">最新话：<?php echo $last_chapter_title; ?></a>
								</span>
							</div>
							<div class="clearfix" data-hook="chapterTab" data-id="<?php echo get_the_ID(); ?>">
								<?php 
								 echo $chapter_list; 
								?>
							</div>
						</div>
					</div>
				</div>
			</div><!-- .comic-detail -->
			<div class="clearfix"></div>
			<div class="comic-row">
				<div class="comic-section w910 pull-left">
					<div class="comic-section-head clearfix">
						<h2>贴吧吐槽</h2>
					</div>
					<div class="comic-section-main">
						<?php
						echo '<iframe scrolling="no" frameborder="0" id="tieba-iframe" style="width: 100%; height: 900px;" src="http://tieba.baidu.com/f?ie=utf-8&kw='.get_the_title().'&innerfr=vbaidu&rn=8&width=910"></iframe>';
						?>
					</div><!-- .comic-section-main -->
				</div><!-- .comic-section -->
			<?php setPostViews(get_the_ID()); ?>
			<?php endwhile; ?>
			</div><!-- .comic-row -->
		</div><!-- .post-content-containter -->
	</div>

<?php get_template_part( 'templates/footer' ); ?>