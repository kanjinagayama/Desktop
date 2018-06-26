<?php
add_action( 'wp_enqueue_scripts', 'theme_enqueue_styles' );
		function theme_enqueue_styles() {
		  wp_enqueue_style( 'parent-style', get_template_directory_uri() . '/style.css' );
		  wp_enqueue_style( 'child-style', get_stylesheet_directory_uri() . '/style.css', array('parent-style')
		);
	}
	
	//modify the result of the title as "キーワード" when filtered with a category
	function custom_category_title($title) {
    if (is_category()) {
    	    $title = single_cat_title('キーワード：', false);
	    }
    	return $title;
	}
	add_filter('get_the_archive_title', 'custom_category_title');
	
?>