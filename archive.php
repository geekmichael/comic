<?php
get_template_part( 'templates/header' );
global $cat_status, $cat_audience, $cat_area, $cat;

$cat_status = sanitising($_GET['comic-status']);
$cat_audience = sanitising($_GET['comic-audience']);
$cat_area = sanitising($_GET['comic-area']);
$cat = (int)(sanitising($_GET['cat']));
if (!$cat) $cat=COMICTHEME_CAT_ID;

//parse_str($querystr, $queryarr);

//$queryurl = ($querystr ? ('/?'.$querystr) : '/');
//$queryurl = esc_url(home_url('/')) . $queryurl; 
// $queryurl = comic_filter_url(array(
// 			'cat'=>$cat,
// 			'status'=>$cat_status,
// 			'audience'=>$cat_audience,
// 			'area'=>$cat_area,
// 			));
?>
	<div class="container post-content">
		<div class="row">
			<div class="col-md-9" role="main">
				<?php
				get_template_part('templates/comic', 'filter');
				?>
				<div class="row comic-section-main">
						<ul class="nav nav-tabs">
							<li><strong>排序方式</strong></li>
							<li role="sortby" class="current"><a href="#">热门</a></li>
							<li role="sortby"><a href="#">最新</a></li>
						</ul>
						<div class="col-md-12 comic-list">
						<?php
							while (have_posts()) : the_post();
								get_template_part('templates/content', 'comic');
							endwhile;
						?>
						</div>
					</div>
			</div>
			<div class="col-md-3 widget-area">
				<?php get_template_part('templates/comic', 'ranking'); ?>
				<div class="clearfix"><p>&nbsp;</p></div>
				<?php dynamic_sidebar( 'sidebar' ); ?>
			</div>
		</div>
	</div>

<?php get_template_part( 'templates/footer' ); ?>
<?php echo $queryurl; ?>
