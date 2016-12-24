<?php if ( ! defined( 'ABSPATH' ) ) exit;

/**
 * Custom post types
 */
add_action( 'init', function () {
	// thumbnails
	//remove_post_type_support( 'post', 'thumbnail' );
	//remove_post_type_support( 'page', 'thumbnail' );


	/*
	 * 漫画
	 */

	// post type
	register_post_type( 'comic', array(
		'labels'      => array(
			'name'               => __( '漫画文章', THEME_NAME ),
			'singular_name'      => __( '漫画', THEME_NAME ),
			'add_new'            => __( '添加', THEME_NAME ),
			'add_new_item'       => __( '添加新漫画', THEME_NAME ),
			'edit_item'          => __( '编辑', THEME_NAME ),
			'new_item'           => __( '新建漫画文章', THEME_NAME ),
			'all_items'          => __( '全部漫画文章', THEME_NAME ),
			'view_item'          => __( '查看漫画文章', THEME_NAME ),
			'search_items'       => __( '搜索漫画文章', THEME_NAME ),
			'not_found'          => __( '没有找到相关文章', THEME_NAME ),
			'not_found_in_trash' => __( '回收站中没有相关的文章', THEME_NAME ),
			'parent_item_colon'  => '',
			'menu_name'          => __( '漫画', THEME_NAME ),
		),
		'hierarchical'			=> false,
		'public'				=> true,
		'has_archive'			=> true,
		'can_export'			=> true,
		'exclude_from_search'	=> false,
		'menu_position'			=> 5,
		'rewrite'				=> array( 'slug' => __( 'comic', THEME_NAME ) ),
		'supports'				=> array( 'title', 'editor', 'author', 'custom-fields' ),
		'taxonomies'			=> array ('category', 'post_tag'),
	) );

	// tags
// 	register_taxonomy( 'resumes_tag', 'resume', array(
// 		'labels'                => array(
// 			'name'                       => __( '求职信息标签', THEME_NAME ),
// 			'singular_name'              => __( '求职信息标签', THEME_NAME ),
// 			'search_items'               => __( '搜索标签', THEME_NAME ),
// 			'popular_items'              => __( '热门标签', THEME_NAME ),
// 			'all_items'                  => __( '所有标签', THEME_NAME ),
// 			'parent_item'                => null,
// 			'parent_item_colon'          => null,
// 			'edit_item'                  => __( '编辑标签', THEME_NAME ),
// 			'update_item'                => __( '更新标签', THEME_NAME ),
// 			'add_new_item'               => __( '添加新标签', THEME_NAME ),
// 			'new_item_name'              => __( '新标签名', THEME_NAME ),
// 			'separate_items_with_commas' => __( '多个标签名之间请用英文逗号(,)分隔', THEME_NAME ),
// 			'add_or_remove_items'        => __( '添加或者删除标签', THEME_NAME ),
// 			'choose_from_most_used'      => __( '从常用标签中选择', THEME_NAME ),
// 			'not_found'                  => __( '没有找到相关的求职信息标签', THEME_NAME ),
// 			'menu_name'                  => __( '标签', THEME_NAME ),
// 		),
// 		'hierarchical'          => false,
// 		'show_ui'               => true,
// 		'show_admin_column'     => true,
// 		'update_count_callback' => '_update_post_term_count',
// 		'query_var'             => true,
// 		'rewrite'               => array( 'slug' => __( 'resume-tag', THEME_NAME ) ),
// 	) );

	// 漫画封面
	add_post_type_support( 'comic', 'thumbnail' );
	add_image_size( 'comic-small', 120, 120 );
	add_image_size( 'comic-medium', 240, 240 );

} );

// Displaying Multiple Post Types on Category Page
add_filter('pre_get_posts', 'query_post_type');
function query_post_type($query) {
  if( is_category() ) {
    $post_type = get_query_var('post_type');
    if($post_type)
        $post_type = $post_type;
    else
        $post_type = array('post', 'comic'); // don't forget nav_menu_item to allow menus to work!
    $query->set('post_type',$post_type);
    return $query;
    }
}
// Alter archive.php to include custom post types. 
function namespace_add_custom_types( $query ) {
  if( is_category() || is_tag() && empty( $query->query_vars['suppress_filters'] ) ) {
    $query->set( 'post_type', array(
     'post', 'nav_menu_item', 'comic'
		));
	  return $query;
	}
}
add_filter( 'pre_get_posts', 'namespace_add_custom_types' );

// Add Custom Post Type's Archive in the Nav Menu

if( !class_exists('CustomPostTypeArchiveInNavMenu') ) {
	class CustomPostTypeArchiveInNavMenu {
		function CustomPostTypeArchiveInNavMenu() {
			add_action( 'admin_head-nav-menus.php', array( &$this, 'cpt_navmenu_metabox' ) );
			add_filter( 'wp_get_nav_menu_items', array( &$this,'cpt_archive_menu_filter'), 10, 3 );
		}
		function cpt_navmenu_metabox() {
			add_meta_box( 'add-cpt', __('自定义文章类型'), array( &$this, 'cpt_navmenu_metabox_content' ), 'nav-menus', 'side', 'default' );
		}
		function cpt_navmenu_metabox_content() {
			$post_types = get_post_types( array( 'show_in_nav_menus' => true, 'has_archive' => true ), 'object' );
			if( $post_types ) {
				foreach ( $post_types as &$post_type ) {
					$post_type->classes = array();
					$post_type->type = $post_type->name;
					$post_type->object_id = $post_type->name;
					$post_type->title = $post_type->labels->name;
					$post_type->object = 'cpt-archive';
				}
				$walker = new Walker_Nav_Menu_Checklist( array() );
				echo '<div id="cpt-archive" class="posttypediv">';
				echo '<div id="tabs-panel-cpt-archive" class="tabs-panel tabs-panel-active">';
				echo '<ul id="ctp-archive-checklist" class="categorychecklist form-no-clear">';
				echo walk_nav_menu_tree( array_map('wp_setup_nav_menu_item', $post_types), 0, (object) array( 'walker' => $walker) );
				echo '</ul>';
				echo '</div><!-- /.tabs-panel -->';
				echo '</div>';
				echo '<p class="button-controls">';
				echo '<span class="add-to-menu">';
				echo '<input type="submit"' . disabled( $nav_menu_selected_id, 0 ) . ' class="button-secondary submit-add-to-menu right" value="'. __('添加至菜单') . '" name="add-ctp-archive-menu-item" id="submit-cpt-archive" />';
				echo '<span class="spinner"></span>';
				echo '</span>';
				echo '</p>';
			} else {
				echo '没有自定义文章类型';
			}
		}
		function cpt_archive_menu_filter( $items, $menu, $args ) {
			foreach( $items as &$item ) {
				if( $item->object != 'cpt-archive' ) continue;
				$item->url = get_post_type_archive_link( $item->type );
				if( get_query_var( 'post_type' ) == $item->type ) {
					$item->classes[] = 'current-menu-item';
					$item->current = true;
				}
			}
			return $items;
		}
	}
	$CustomPostTypeArchiveInNavMenu = new CustomPostTypeArchiveInNavMenu();
}