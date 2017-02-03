<?php if ( ! defined( 'ABSPATH' ) ) exit;
error_reporting(0);
/**
 * Setup class auto-loader.
 */
spl_autoload_register( function ( $class ) {
	$class = strtolower( $class );

	if ( strpos( $class, 'walker' ) === 0 ):
		$path = THEME_INCLUDES_DIR . 'walkers' . DIRECTORY_SEPARATOR;
		$file = str_replace( '_', '-', $class ) . '.php';
		if ( is_file( $path . $file ) ):
			include_once( $path . $file );
			return;
		endif;
	elseif ( strpos( $class, 'widget' ) === 0 ):
		$path = THEME_INCLUDES_DIR . 'widgets' . DIRECTORY_SEPARATOR;
		$file = str_replace( '_', '-', $class ) . '.php';
		if ( is_file( $path . $file ) ):
			include_once( $path . $file );
			return;
		endif;
	endif;
} );

// Sanitising query data
function sanitising($input) {
	return htmlspecialchars(stripslashes($input));
}

/**
 * Setup theme.
 */
add_action( 'after_setup_theme', function () {
	// theme text domain
	load_theme_textdomain( THEME_NAME, THEME_LANGUAGES_DIR );

	// menus
	register_nav_menus( array(
		'header' => __( '顶部菜单', THEME_NAME ),
	) );

	// thumbnails & post formats
	add_theme_support( 'post-thumbnails' );
} );

/**
 *  Setup widgets.
 */
add_action( 'widgets_init', function () {
	register_sidebar( array(
		'id'            => 'sidebar',
		'name'          => __( '侧边栏区域', THEME_NAME ),
		'description'   => __( '显示在侧边的小部件', THEME_NAME ),
		'before_widget' => null,
		'after_widget'  => null,
	) );
} );

function acf_comic_status($comic_status) {
	if ($comic_status == 'serializing')
		return '连载中...';
	elseif ($comic_status == 'finish')
		return '已完结';
	else
		return '未知';
}

function comic_terms ($postID) {
	$terms = get_the_terms ($postID, 'post-comic');
	if ($terms) {
		foreach ($terms as $term) {
			echo '<a href="#">'.$term->name.'</a>';
		}
	} 
}

function acf_choice_label ($field) {
	$field = get_field_object($field);
	$value = $field['value'];
	$label = $field['choices'][$value];
	return $label;
}

function acf_first_row ($repeaters) {
	$rows = get_field($repeaters);
	$first_row = $rows[0];
	return $first_row;
}

function acf_last_row ($repeaters) {
	$rows = get_field($repeaters);
	$last_row = end($rows);
	return $last_row;
}

function last_chapter_title ($repeaters) {
	$last_chapter = acf_last_row($repeaters);
	$title = $last_chapter['comic-chapters-title'];
	return $title;
}

// 动态生成动漫筛选指标
function acf_select_list($args = array(
	"field_key" =>'',
	"class" =>'',
	'activeclass' => '',
	'active' => '',
	'prefix' => '',
	'suffix' => '',
)){
	$field = get_field_object($args["field_key"]);
	$output = '';
	// Convert the current query string into array
	parse_str($_SERVER['QUERY_STRING'], $queryarr);
	// Delete element equals the current field
	unset($queryarr[$field['name']]);
	// Re-create the link
	$current_url = esc_url(home_url('/'));
	if ($queryarr) {
		$current_url = '?'.http_build_query($queryarr);
	} else {
		$current_url .= '/?cat='.COMICTHEME_CAT_ID;
	}
	//die ($current_url);
	if ($field) {
		//var_dump ($field);
		foreach($field['choices'] as $k => $v ) {
			$output .= $args["prefix"].'<a href="'.$current_url;
			
			if ($args['active'] <> $field['name']) {
				$output .= '&'.$field['name'].'='.$k;
			}
			$output .= '"';
			if ($args["class"] || $args['activeclass']) {
				$output .= ' class="';
				$output .= $args["class"];
				if ($args["activeclass"] && ($k == $args["active"])) {
					$output .= ' ';
					$output .= $args["activeclass"];
				}
				$output .= '"';
			}
			
			$output .= '>'.$v.'</a>'.$args["suffix"];
		}
	}
	return $output;
}

// 动漫筛选页面链接
function comic_filter_url($args = array(
	'home-url' => '',
	'cat' => 0,
	'area' => '',
	'audience' => '',
	'status' => '',
)) {
	//if (!$args['cat']) $args['cat'] = COMICTHEME_CAT_ID;
	$args['cat'] = $args['cat'] || COMICTHEME_CAT_ID;
	
	//$args['home-url'] = (!empty($args['home-url'])) ? $args['home-url'] : esc_url(home_url('/'));
	$args['home-url'] = $args['home-url'] || esc_url(home_url('/'));
	
	$tmpurl  = $args['home-url'].'?cat='.$args['cat'];
	if ($args['area']) $tmpurl .= '&comic-area='.$args['area'];
	if ($args['audience']) $tmpurl .= '&comic-audience='.$args['audience'];
	if ($args['status']) $tmpurl .= '&comic-status='.$args['status'];
	
	return $tmpurl;
}

function homepage_popular ($repeater_field_name, $sub_field_name) {
	$popular_comic = array();
	$main_repeaters = $repeater_field_name;
	$outstr = '';
	if (have_rows($main_repeaters)) {
		while (have_rows($main_repeaters)):the_row();	
			$post_object = get_sub_field($sub_field_name);
			$thumb_url = wp_get_attachment_image_src(get_post_thumbnail_id($post_object->ID));
			$popular_comic[] = array(
				'url'=>get_the_permalink($post_object->ID),
				'title'=>get_the_title($post_object->ID),
				'image'=>$thumb_url[0],
				'slogan'=>get_field('comic-slogan',$post_object->ID),
				);
		endwhile;
	}
	for ($i = 0; $i < count($popular_comic); $i++) {
		if ($i < 2) {
			$outstr .= '<a href="'.$popular_comic[$i]['url'].'" class="top-featured" target="_blank" title="'.$popular_comic[$i]['title'].'">';
			$outstr .= '<img src="'.$popular_comic[$i]['image'].'" class="pic" />';
			$outstr .= '<span class="title">'.$popular_comic[$i]['title'].'</span>';
			$outstr .= '<span class="des text-overflow">'.$popular_comic[$i]['slogan'].'</span>';
			$outstr .= '</a>';
		}
		if ($i == 1) {
			$outstr  = '<div class="col-md-5">'.$outstr.'</div>';
		}
		if ($i == 2) {
			$outstr .='<div class="col-md-7 pull-right"><div class="row">';
		}
		if ($i > 1) {
			$outstr .= '<div class="col-md-4 thumb-list-item">';
			$outstr .= '<a href="'.$popular_comic[$i]['url'].'" class="pic-wrap" target="_blank" title="'.$popular_comic[$i]['title'].'">';
			$outstr .= '<img src="'.$popular_comic[$i]['image'].'" class="pic" />';
			$outstr .= '<span class="title">'.$popular_comic[$i]['title'].'</span>';
			$outstr .= '<span class="des text-overflow">'.$popular_comic[$i]['slogan'].'</span>';
			$outstr .= '</a>';
			$outstr .= '</div>';
		}
	}
	if ($i >= 3) $outstr .= '</div></div>';
	$outstr = '<div class="row">'.$outstr."</div>";
	return $outstr;
}

function comic_category_filter($categories, $parentID) {
	$newlist = array();
	foreach($categories as $category) {
		$subcategories = $category->to_array();
		if ($subcategories['parent'] == $parentID)
			$newlist[] = $subcategories;
	}
	return $newlist;
}

function the_comic_themes ($categories, $separator=' ') {
	$themes = '';
	foreach($categories as $category) {
		$category_link = get_category_link($category['cat_ID']);
		$themes .= '<a href="'.esc_url($category_link).'">'.$category['cat_name'].'</a>';
		$themes .= $separator;
	}
	return $themes;
}

function getPostViews($postID){   
    $count_key = 'post_views_count';   
    $count = get_post_meta($postID, $count_key, true);   
    if($count==''){   
        delete_post_meta($postID, $count_key);   
        add_post_meta($postID, $count_key, '0');   
        return "0";   
    }   
    return $count;   
}   
function setPostViews($postID) {   
    $count_key = 'post_views_count';   
    $count = get_post_meta($postID, $count_key, true);   
    if($count==''){   
        $count = 0;   
        delete_post_meta($postID, $count_key);   
        add_post_meta($postID, $count_key, '0');   
    }else{   
        $count++;   
        update_post_meta($postID, $count_key, $count);   
    }   
}  

/*
 * Gravatar.com is blocked by GFW in China Mainland, change to Duoshuo.com
 */
function duoshuo_avatar($avatar) {
    $avatar = str_replace(array("www.gravatar.com","0.gravatar.com","1.gravatar.com","2.gravatar.com"),"gravatar.duoshuo.com",$avatar);
    return $avatar;
}
add_filter( 'get_avatar', 'duoshuo_avatar', 10, 3 );
