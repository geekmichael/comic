<?php

get_template_part( 'templates/header' ); 

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
//echo '<pre>';
//print_r (get_the_category());
//print_r (comic_category_filter(get_the_category(), 31, ''));
//echo '</pre>';

// 仅显示漫画所在的题材分类
$comicthemes = comic_category_filter(get_the_category(), COMICTHEME_CAT_ID, '');
?>
<div class="row post-content">
	<div class="post-content-wrapper">
		<div class="breadcrumb">
				<?php the_breadcrumb(); ?>
		</div>
		<div class="row">
		<div class="col-lg-3 pull-right">
			<div class="widget-area">
				<?php get_template_part('templates/comic', 'ranking'); ?>
				<div class="clearfix"><p>&nbsp;</p></div>
				<?php dynamic_sidebar( 'sidebar' ); ?>
			</div>
		</div>
		<div class="col-lg-9">
			<?php while ( have_posts() ) : the_post();?>
			<div class="row post-main">
				<div class="row post-main-wrapper">
					<div class="col-md-3 comic-detail-thumb">
					<?php
					if (has_post_thumbnail())
						the_post_thumbnail();
					else
						echo '<img src="'.THEME_IMAGES_URI.'no-image.png" title="未设置漫画封面" />'; 
					?>
					</div>
					<div class="col-md-8 pull-right comic-detail-profile">
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
								<span class="value"><?php echo the_comic_themes ($comicthemes); ?></span>
							</li>
							<li>
								<span class="key">人气：</span>
								<span class="value"><?php echo getPostViews( get_the_ID()); ?></span>
							</li>
						</ul>
						<div class="comic-des">
						<?php echo the_field('comic-des'); ?>
						</div><!-- .comic-des -->
						<div class="row comic-des-links">
							<div class="col-md-3">
								<?php
								if (get_field('comic-chapters')) {
								$comic_chapters = acf_first_row('comic-chapters');
								$comic_chapter_url = $comic_chapters['comic-chapters-url'];
								// var_dump($comic_chapters);
								?>
								<a href="<?php echo $comic_chapter_url; ?>" class="btn btn-success btn-lg">开始阅读</a>
								<?php } else { ?>
								<a href="#" class="readbtn">暂无章节</a>
								<?php 
								} 
								?>
							</div>
							<div class="col-md-8 resource-provider">
								<span class="key">当前资源方：</span>
								<?php
								if (get_field('comic-source-site'))
									echo '<a href="'. get_field('comic-source-url'). '" target="_blank">'.acf_choice_label('comic-source-site').'</a>';
								else
									echo '暂无';
								?>
							</div>
						</div><!-- .comic-des-links -->
					</div><!-- .comic-detail-profile -->
					<div class="row comic-chapter-list">
						<div class="comic-chapter-wrapper">
							<div class="row">
								<h2 class="title">章节列表</h2>
								<span class="subtitle">
								<a href="<?php echo $last_chapter_url; ?>" target="_blank">最新话：<?php echo $last_chapter_title; ?></a>
								</span>
							</div>
							<div class="row" data-id="<?php echo get_the_ID(); ?>">
								<?php 
								 echo $chapter_list; 
								?>
							</div>
						</div>
					</div>
				</div><!-- .wrapper -->
			</div><!-- .post-main -->
			<div class="row comic-section">
				<div class="comic-section-head">
					<h2>贴吧吐槽</h2>
				</div>
				<div class="comic-section-main tieba-container">
					<?php
					echo '<iframe scrolling="no" frameborder="0" id="tieba-iframe" style="width: 100%; height: 800px;" src="http://tieba.baidu.com/f?ie=utf-8&kw='.get_the_title().'&innerfr=vbaidu&rn=8&width=910"></iframe>';
					?>
				</div><!-- .comic-section-main -->
			<?php setPostViews(get_the_ID()); ?>
			<?php endwhile; ?>
			</div><!-- .comic-row -->
		</div>
		</div>
	</div><!-- .post-content-containter -->
</div>

<?php get_template_part( 'templates/footer' ); ?>