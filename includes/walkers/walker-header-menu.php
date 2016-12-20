<?php if ( ! defined( 'ABSPATH' ) ) exit;

if ( ! class_exists( 'Walker_Header_Menu' ) ):
	/**
	 * Walker_Header_Menu class.
	 */
	class Walker_Header_Menu extends Walker_Nav_Menu {
		/**
		 * Start menu level.
		 *
		 * @param string $output
		 * @param int    $depth
		 * @param array  $args
		 */
		public function start_lvl( &$output, $depth = 0, $args = array() ) {
			$list_classes[] = $args->container_class . '__list';
			$list_classes[] = $args->container_class . '__list_depth_' . ( $depth + 1 );

			$list_class_names = join( ' ', $list_classes );
			$list_class_names = ' class="' . esc_attr( $list_class_names ) . '"';

			$indent = str_repeat( "\t", $depth );
			$output .= "{$indent}<ul{$list_class_names}>";
		}

		/**
		 * Start menu element.
		 *
		 * @param string $output
		 * @param object $item
		 * @param int    $depth
		 * @param array  $args
		 * @param int    $id
		 */
		public function start_el( &$output, $item, $depth = 0, $args = array(), $id = 0 ) {
			$item_classes[] = $args->container_class . '__item';
			$item_classes[] = $args->container_class . '__item_depth_' . $depth;

			$item_class_names = join( ' ', $item_classes );
			$item_class_names = ' class="' . esc_attr( $item_class_names ) . '"';

			$indent = $depth ? str_repeat( "\t", $depth ) : '';
			$output .= "{$indent}<li{$item_class_names}>";

			$link_classes[] = $args->container_class . '__link';
			$link_classes[] = $args->container_class . '__link_depth_' . $depth;
			if ( in_array( 'current-menu-item', (array) $item->classes ) )
				$link_classes[] = $args->container_class . '__link_state_active';

			$link_class_names = join( ' ', $link_classes );
			$link_class_names = ' class="' . esc_attr( $link_class_names ) . '"';

			$link_attributes = ! empty( $item->attr_title ) ? ' title="' . esc_attr( $item->attr_title ) . '"' : '';
			$link_attributes .= ! empty( $item->target ) ? ' target="' . esc_attr( $item->target ) . '"' : '';
			$link_attributes .= ! empty( $item->url ) ? ' href="' . $this->_esc_url( $item->url ) . '"' : '';

			$item_output = "<a{$link_class_names}{$link_attributes}>";
			$item_output .= apply_filters( 'the_title', $item->title, $item->ID );
			$item_output .= '</a>';

			$output .= apply_filters( 'walker_nav_menu_start_el', $item_output, $item, $depth, $args );
		}

		/**
		 * Make url relative.
		 *
		 * @param string $url
		 *
		 * @return string
		 */
		private function _esc_url( $url ) {
			$url = wp_make_link_relative( $url );
			$url = esc_url( $url );

			return $url;
		}
	}
endif;