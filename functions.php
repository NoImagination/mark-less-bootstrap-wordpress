<?php

	// Prevent page scroll when clicking the more link
	//	function remove_more_link_scroll( $link ) {
	//		$link = preg_replace('|#more-[0-9]+|', '', $link);
	//		return $link;
	//	}
	//	add_filter('the_content_more_link', 'remove_more_link_scroll');

	// Displaying a "more…" link without a <!--more--> tag
	//	function new_excerpt_more($more) {
	//		global $post;
	//		return '<a class="moretag" href="'. get_permalink($post->ID) . '" title="Continuar lendo"> ler mais...</a>';
	//	}
	//	add_filter('excerpt_more', 'new_excerpt_more');

	// Featured image
	add_theme_support('post-thumbnails');

	// Sidebar
	function quickchic_widgets_init() {
		register_sidebar(array(
			'name' => __( 'Sidebar 1', 'quickchic' ),
			'id' => 'sidebar-1',
			'before_widget' => '<div class="widget">',
			'after_widget' => '</div>',
			'before_title' => '<h4>',
			'after_title' => '</h4>',
		));
	}
	add_action( 'init', 'quickchic_widgets_init' );

?>