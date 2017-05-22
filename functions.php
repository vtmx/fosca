<?php
	// Include favicon admin
	// -----------------------------------------------------------------------------
	function favicon(){
		echo '<link rel="shortcut icon" href=" ', bloginfo( 'template_url' ), '/dist/img/favicons/favicon.ico">';
	}
	add_action('admin_head','favicon');


	// Include Option Menu
	// -----------------------------------------------------------------------------
	if( function_exists('acf_add_options_page') ) {
		acf_add_options_page( array(
			'page_title' => 'Menu',
			'menu_title' => 'Menu',
			'menu_slug'  => 'theme-menu'
		));
	}


	// Page Slug Body Class
	// -----------------------------------------------------------------------------
	function add_slug_body_class( $classes ) {
		global $post;

		if ( isset( $post ) ) {
			$classes[] = $post->post_name;
		}

		if ( is_page( 'paintings' ) || is_page( 'drawings' ) ) {
			$classes[] = 'works';
		}

		if ( is_home() || is_single() || is_category() ) {
			$classes[] = 'news';
		}

		return $classes;
	}
	add_filter( 'body_class', 'add_slug_body_class' );


	// Register Nav Menu
	// -----------------------------------------------------------------------------
	register_nav_menu( 'menu_main', 'Menu' );



	// Customize More link
	// -----------------------------------------------------------------------------
	add_filter( 'the_content_more_link', 'modify_read_more_link' );
		function modify_read_more_link() {
		return '<p class="more-link">see more about it <a href="' . get_permalink() . '">here</a></p>';
	}
?>
