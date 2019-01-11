<?php
define( 'TEMPPATH', get_bloginfo('stylesheet_directory'));
define( 'IMAGES', TEMPPATH. "/img");

function register_my_menu() {
  register_nav_menu('header-menu',__( 'Header Menu' ));
}
add_action( 'init', 'register_my_menu' );


function be_arrows_in_menus( $item_output, $item, $depth, $args ) {
	if( in_array( 'menu-item-has-children', $item->classes ) ) {
		$arrow = 0 == $depth ? '<i class="fas fa-caret-down"></i>' : '<i class="icon-angle-right"></i>';
		$item_output = str_replace( '</a>', $arrow . '</a>', $item_output );
	}
	return $item_output;
}
add_filter( 'walker_nav_menu_start_el', 'be_arrows_in_menus', 10, 4 );
?>
