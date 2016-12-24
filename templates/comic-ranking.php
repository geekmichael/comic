			<div class="ranking">
			<div class="head-wrap clearfix">
				<h2 class="green-title">推荐排行</h2>
			</div>
			<div class="list-wrap clear-margin">
				<div class="list-page">
					<?php
					$ranking_posts = '<div class="list">';
					$i = 1;
					$the_query = new WP_Query(array(
					  'numberposts' => 10,
					  'post_per_page' => -1, 
					  'post_type' => 'comic',
					  'meta_key' => 'comic-recom',
					  'orderby' => 'meta_value',
					  'order' => 'DESC',
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
							<p class="des">简介：<?php echo get_field('comic-slogan'); ?></p>
						</div>
					</div>
					<?php
					 	else:
						$i++;
						$ranking_posts .= '<a href="'.get_permalink().'" class="item" target="_blank">';
						$ranking_posts .= '<span class="sort text-overflow high">'.$i.'</span>';
						$ranking_posts .= '<span class="title text-overflow">'.get_the_title().'</span>';
						$ranking_posts .= '<span class="des text-overflow">'.get_field('comic-slogan').'</span>';
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
		</div><!-- .ranking -->