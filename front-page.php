<?php
$slides = array();
$slideindicator = 0;
if (have_rows('slideshows')) {
//	die (var_dump(get_field('slideshows')));
	while (have_rows('slideshows')):the_row();
		$slidegroups = get_sub_field('slidegroups');
		$slideindicator ++;
		//die (var_dump($slidegroups));
		foreach ($slidegroups as $groupkey => $slidegroup) {
			//echo '<p>group:'.$slideindicator.'</p>';
			foreach ($slidegroup as $postkey => $slidepost) {
				$slides[$slideindicator][] = $slidepost->ID;
				//echo $slidepost->ID;
				//echo '<br />';
			}
		}
	endwhile;
}

//die ();
//die (var_dump($slides));

get_template_part( 'templates/header' );


$current_url = home_url() . '/?cat='.COMICTHEME_CAT_ID;

?>
	<div class="row hotspot">
		<div class="col-md-9 hotspot-slider">
			<div id="carousel-comic" class="carousel slide" data-ride="carousel">
				<!--
				<ol class="carousel-indicators">
					<?php foreach ( $slides as $key => $slide ): ?>
					<li <?php if ($key==1): ?>class="active"<?php endif; ?> data-target="#carousel-comic" data-slide-to="<?php echo esc_attr( $key ); ?>"></li>
					<?php endforeach; ?>
				</ol>
				-->
				<div class="carousel-inner" role="listbox">
					<?php foreach ( $slides as $key => $slide ): ?>
						<div class="item <?php if ($key==1): ?>active<?php endif; ?>">
							<?php 
							foreach ($slide as $slidekey => $slidepost):
							$slideimage = wp_get_attachment_image_url(get_post_thumbnail_id($slidepost),'large');
							//die ($slideimage);
							?>
							<div class="slide-item<?php echo esc_attr($slidekey); ?>">
							<a href="<?php echo get_the_permalink($slidepost); ?>" title="<?php echo get_the_title($slidepost) ?>">
							<img id="post-thumbnail-<?php echo $slidepost; ?>" src="<?php echo $slideimage; ?>" class="slide-pic" />
							</a>
							<div class="carousel-caption">
								<h3><?php echo get_the_title($slidepost) ?></h3>
								<p><?php echo get_field('comic-slogan',$slidepost); ?></p>
							</div>
							</div>
							<?php endforeach; ?>
						</div>
					<?php endforeach; ?>
				</div>
				<a class="left carousel-control" href="#carousel-comic" role="button" data-slide="prev">
					<span class="glyphicon glyphicon-chevron-left" aria-hidden="true"></span>
					<span class="sr-only">Previous</span>
				</a>
				<a class="right carousel-control" href="#carousel-comic" role="button" data-slide="next">
					<span class="glyphicon glyphicon-chevron-right" aria-hidden="true"></span>
					<span class="sr-only">Next</span>
				</a>
			</div>		
		</div>
		<div class="col-md-3 hotspot-sidebar pull-right">
			<?php get_template_part('templates/comic', 'ranking'); ?>
		</div><!-- .hotspot-sidebar -->
	</div><!-- .hotspot -->
	<div class="row classify-box">
		<div class="col-md-9 classify-wrap">
			<div class="row">
			<div class="col-md-7 classify-box-item" monkey="shaixuanticai">
				<div class="row">
				<div class="col-sm-2">
				<h3 class="classify-title">按题材</h3>
				</div>
				<div class="col-sm-10 pull-right classify-list">
					<ul>
					<?php wp_list_categories( array(
						'child_of' => COMICTHEME_CAT_ID,
						'orderby' => 'name',
						'title_li' => '',
					)); ?>
					</ul>
				</div>
				</div>
			</div>
			<div class="col-md-3 classify-box-item" monkey="shaixuandiyu">
				<div class="row">
				<div class="col-sm-3">
				<h3 class="classify-title">按地域</h3>
				</div>
				<div class="col-sm-9 pull-right classify-list">
					<ul>
					<?php
					echo acf_select_list(array(
											'field_key'=>'field_585607cece62d',
											'active'=>'area',
											'prefix'=>'<li>',
											'suffix'=>'</li>',
											'url' => $current_url,
											)); 
					?>
					</ul>
				</div>
				</div>
			</div>
			<div class="col-md-2 classify-box-item" monkey="shaixuanstate">
				<div class="row">
				<div class="col-sm-4">
				<h3 class="classify-title">按状态</h3>
				</div>
				<div class="col-sm-8 pull-right classify-list">
					<ul>
					<?php
					echo acf_select_list(array(
											'field_key'=>'field_58560eaf1fa66',
											'active'=>'status',
											'prefix'=>'<li>',
											'suffix'=>'</li>',
											'url' => $current_url,
											)); 
					?>
					</ul>
				</div>
				</div>
			</div>
			</div>
		</div>
		<div class="col-md-3">
		<a href="#" target="_blank" title="#" class="ad">
			<img src="http://s0.hao123img.com/res/img/moe/0605mengzhuye.jpg" alt="">
		</a>
		</div>
	</div><!-- .classify-box -->
	<div class="row comic-section">
		<div class="col-md-9 row">
			<div class="tabbable comic-section-head">
				<h2>热门漫画</h2>
				<ul id="PopularTab" class="nav nav-tabs" role="popularlist">
					<li role="presentation" class="active"><a href="#popular" role="tab" data-toggle="tab">热门漫画</a></li>
					<li role="presentation"><a href="#domestic" role="tab" data-toggle="tab">国内漫画</a></li>
					<li role="presentation"><a href="#girls" role="tab" data-toggle="tab">少女革命</a></li>
					<li role="presentation"><a href="#japan" role="tab" data-toggle="tab">日本漫画</a></li>
					<li role="presentation"><a href="#bonus" role="tab" data-toggle="tab">福利漫画</a></li>
				</ul>
				<div id="PopularTabContent" class="clearfix tab-content">
					<div class="tab-pane active featured-list" role="tabpanel" id="popular">
					<?php
						echo homepage_popular ('homepage_populars', 'homepage_popular_comics');
					?>
					</div>
					<div class="tab-pane featured-list" role="tabpanel" id="domestic">
					<?php
						echo homepage_popular ('homepage_domestic', 'homepage_domestic_comics');
					?>
					</div>
					<div class="tab-pane featured-list" role="tabpanel" id="girls">
					<?php
						echo homepage_popular ('homepage_girl', 'homepage_girl_comics');
					?>
					</div>
					<div class="tab-pane featured-list" role="tabpanel" id="japan">
					<?php
						echo homepage_popular ('homepage_japan', 'homepage_japan_comics');
					?>
					</div>
					<div class="tab-pane featured-list" role="tabpanel" id="bonus">
					<?php
						echo homepage_popular ('homepage_bonus', 'homepage_bonus_comics');
					?>
					</div>
				</div><!-- .tab-content -->
			</div>
		</div>
		<div class="col-md-3 pull-right comic-sidebar">
			<div class="ranking ranking-light">
				<div class="head-wrap clearfix">
					<h2 class="title">漫画人气排行</h2>
				</div>
				<div class="list-wrap">
					<div class="list-page">
					<?php
					$ranking_posts = '<div class="list">';
					$i = 1;
					$the_query = new WP_Query(array(
					  'numberposts' => 10,
					  'post_per_page' => -1, 
					  'post_type' => 'comic',
					  'meta_key' => 'comic-bookmarks',
					  'orderby' => 'meta_value',
					  'order' => 'DESC'
					));
					if ($the_query->have_posts()):
					 	while ($the_query->have_posts()): $the_query->the_post();
						if($the_query->current_post == 0 && !is_paged()):
					?>
					<div class="topone">
						<a href="<?php the_permalink(); ?>" class="pic-wrap" title="#" target="_blank">
							<?php the_post_thumbnail(array(94,125), array('class'=>'pic')); ?>
							<span class="sort">1</span>
						</a>
						<div class="info-wrap">
							<a href="<?php the_permalink(); ?>" class="title" target="_blank"><?php the_title(); ?></a>
							<p class="info text-overflow">
								<span class="key">作者：</span><span class="value"><?php echo get_field('comic-author'); ?></span>
							</p>
							<p class="des2">话数：<span class="value"><?php echo count(get_field('comic-chapters')); ?></span></p>
							<p class="des2">简介：<span class="value"><?php echo get_field('comic-slogan'); ?></span></p>
						</div>
					</div>
					<?php
					 	else:
						$i++;
						$ranking_posts .= '<a href="'.get_permalink().'" class="item" target="_blank">';
						$ranking_posts .= '<span class="sort text-overflow high">'.$i.'</span>';
						$ranking_posts .= '<span class="title text-overflow">'.get_the_title().'</span>';
						$ranking_posts .= '<span class="des text-overflow">'.get_field('comic-bookmarks').'</span>';
						$ranking_posts .= '</a>';
						endif;
						endwhile; // end of the loop
					else:
						$ranking_posts .= '暂无内容';
					endif;
						$ranking_posts .= '</div>';
					wp_reset_query(); 
					echo $ranking_posts;						
					?>
					</div><!-- .list-page -->
				</div><!-- .list-wrap -->
			</div>
			<div class="ad">
				<a href="http://haokan.baidu.com/school" target="_blank" title="网红养成">
					<img src="http://s0.hao123img.com/res/img/moe/0623mht1.PNG" alt="">
				</a>
			</div>
		</div><!-- .comic-sidebar -->
	</div><!-- .comic-section -->
	<!--
	<div class="row comic-row-ad">
		<h2>AD</h2>
	</div>
	-->
	<div class="row comic-section">
		<div class="row col-md-9">
			<div class="comic-section-head">
				<h2>最近更新</h2>
			</div>
			<div class="featured-list latest-comic clearfix">
				<?php
					$the_query = new WP_Query(array(
						'post_type' => 'comic',
						'posts_per_page' => 10,
						'numberposts' => 10,
						'orderby' => 'modified',
						'order' => 'DESC'
					));
					if ($the_query->have_posts()):
				?>
				<div class="row">
					<?php
					$i = 0;
					$latestlist = '';
					while($the_query->have_posts()):$the_query->the_post();
						$comic_chapters = get_field('comic-chapters');
						if ($comic_chapters) {
							$last_chapter = acf_last_row('comic-chapters');
							$last_chapter_title = $last_chapter['comic-chapters-title'];
							$last_chapter_url = $last_chapter['comic-chapters-url'];
						}
						if ($i < 5) {
					?>
					<div class="col-lg-2dot4 thumb-list-item">
						<a href="<?php the_permalink(); ?>" class="pic-wrap" target="_blank" title="<?php the_title(); ?>">
						<?php the_post_thumbnail(array(94,125), array('class'=>'pic')); ?>
						</a>
						<a href="<?php the_permalink(); ?>" class="title" target="_blank"><?php the_title(); ?></a>
						<p class="des text-overflow">
							作者：<?php echo get_field('comic-author'); ?>
						</p>
						<p class="des text-overflow">
							最新：<?php echo $last_chapter_title; ?>
						</p>
					</div>
					<?php
					}
					$latestlist .= '<a href="'.get_permalink().'" class="item">';
					$latestlist .= '<span class="sort high text-overflow">'.($i+1).'</span>';
					$latestlist .= '<span class="title text-overflow">'.get_the_title().'</span>';
					$latestlist .= '<span class="des text-overflow">'.$last_chapter_title.'</span>';
					$latestlist .= '</a>';
					$i++;
					endwhile;
					?>
				</div>
				<?php
					endif;
					wp_reset_query();
				?>
			</div><!-- .featured-list -->
		</div>
		<div class="col-md-3 comic-sidebar">
			<div class="ranking ranking-light">
				<div class="head-wrap clearfix">
					<h2 class="title">漫画更新表</h2>
				</div>
				<div class="list-wrap clear-margin">
					<div class="list-page" style="display: block;">
						<div class="list">
							<?php echo $latestlist; ?>
						</div>
					</div>
				</div>
			</div>
		</div><!-- .comic-sidebar -->
	</div><!-- .comic-section -->
<?php get_template_part( 'templates/footer' ); ?>