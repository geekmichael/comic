<?php
global $cat_status, $cat_audience, $cat_area, $cat;

$queryurl = $_SERVER['QUERY_STRING'];
?>
				<div class="row comic-filter-box">
						<div class="comic-section-title">
							<h2>动漫筛选</h2>
							<span class="count">全站共收录<?php echo wp_count_posts('comic')->publish; ?>部漫画</span>
						</div>
						<div class="comic-section-criteria">
							<ul>
								<li>
									<span class="key">状态：</span><a href="#">全部</a>
									<?php 
										echo acf_select_list(array(
											'field_key'=>COMIC_STATUS_KEY,
											'class'=>'cat-link',
											'active'=>$cat_status,
											'activeclass'=>'cat-active',
											));
									?>
								</li>
								<li>
									<span class="key">受众：</span><a href="#">全部</a>
									<?php 
										echo acf_select_list(array(
											'field_key'=>COMIC_AUDIENCE_KEY,
											'class'=>'cat-link',
											'active'=>$cat_audience,
											'activeclass'=>'cat-active',
											)); 
									?>
								<li>
									<span class="key">地域：</span>
									<a href="#">全部</a>
									<?php 
										echo acf_select_list(array(
											'field_key'=>COMIC_AREA_KEY,
											'class'=>'cat-link',
											'active'=>$cat_area,
											'activeclass'=>'cat-active',
											)); 
									?>
								<li>
									<span class="key">题材：</span>
									<a href="<?php echo esc_url(home_url('/')).'?cat='.COMICTHEME_CAT_ID; ?>" class="cat-link<?php if(empty($_GET['cat'])||($cat==COMICTHEME_CAT_ID)) echo " cat-active"; ?>">全部</a>
									<?php
										$args = array(
											'orderby' => 'slug',
											'parent' => COMICTHEME_CAT_ID
										); 
										$categories = get_categories ($args);
										foreach($categories as $category) {
											echo '<a href="'.get_category_link($category->term_id).'" class="cat-link';
											if ($cat == $category->term_id) 
												echo ' cat-active';
											echo '">'.$category->name.'</a>';
										}
										//wp_list_categories(array('title_li'=>'', 'style'=>'none')); 
									?>
								</li>
							</ul>
						</div>
					</div>
