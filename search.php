<?php
global $query_string, $wp;
get_template_part( 'templates/header' );

$current_url = home_url(add_query_arg(array(),$wp->request));

$query_args = explode("&", $query_string);
$search_query = array();

if( strlen($query_string) > 0 ) {
	foreach($query_args as $key => $string) {
		$query_split = explode("=", $string);
		$search_query[$query_split[0]] = urldecode($query_split[1]);
	} // foreach
} //if
echo $current_url.'/'.$_SERVER['QUERY_STRING'];
$search = new WP_Query($search_query);
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
