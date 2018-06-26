<?php
add_action( 'wp_enqueue_scripts', 'theme_enqueue_styles' );
		function theme_enqueue_styles() {
		  wp_enqueue_style( 'parent-style', get_template_directory_uri() . '/style.css' );
		  wp_enqueue_style( 'child-style', get_stylesheet_directory_uri() . '/style.css', array('parent-style')
		);
	}
	
	
	//copied from inc/template-tags.php on parent theme to change tags location
	function twentysixteen_entry_taxonomies() {
    $categories_list = get_the_category_list( _x( ', ', 'Used between list items, there is a space after the comma.', 'twentysixteen' ) );
    if ( $categories_list && twentysixteen_categorized_blog() ) {
        printf( '<span class="cat-links"><span class="screen-reader-text">%1$s </span>%2$s</span>',
            _x( 'Categories', 'Used before category names.', 'twentysixteen' ),
            $categories_list
        );
      }
    }
 
    
    function twentysixteen_entry_tags() { //new function which has modified code on inc/template-tags.php
    $tags_list = get_the_tag_list( '', _x( ', ', 'Used between list items, there is a space after the comma.', 'twentysixteen' ) );
    if ( $tags_list && ! is_wp_error( $tags_list ) ) {
        printf( '<span class="tags-links"><span class="screen-reader-text">%1$s </span>%2$s</span>',
            _x( 'Tags', 'Used before tag names.', 'twentysixteen' ),
            $tags_list
        );
    }
 }
?>