<?php


    $_SESSION["page"];
	
	// Add RSS links to <head> section
	automatic_feed_links();
	
	// Load jQuery
	if ( !is_admin() ) {
	   wp_deregister_script('jquery');
	   wp_register_script('jquery', ("http://ajax.googleapis.com/ajax/libs/jquery/1.4/jquery.min.js"), false);
	   wp_enqueue_script('jquery');
	}
	
	// Clean up the <head>
	function removeHeadLinks() {
    	remove_action('wp_head', 'rsd_link');
    	remove_action('wp_head', 'wlwmanifest_link');
    }
    add_action('init', 'removeHeadLinks');
    remove_action('wp_head', 'wp_generator');
    
	// Declare sidebar widget zone
    if (function_exists('register_sidebar')) {
    	register_sidebar(array(
    		'name' => 'Sidebar Widgets',
    		'id'   => 'sidebar-widgets',
    		'description'   => 'These are widgets forto the sidebar.',
    		'before_widget' => '<div id="%1$s" class="widget %2$s">',
    		'after_widget'  => '</div>',
    		'before_title'  => '<h2>',
    		'after_title'   => '</h2>'
    	));
    }

    if (function_exists('register_nav_menus')) {
        register_nav_menus(
                array(
                    'main_nav' => __( 'Header Menu' ),
                    'left_triangle' => __( 'Left Triangle Menu' ),
                    'right_triangle' => __( 'Right Triangle Menu' ),
                    'bottom_triangle' => __( 'Bottom Triangle Menu' ),
                    'footer' => __( 'Footer Menu' ),
                    )
        );
    }

	add_theme_support( 'post-thumbnails' ); 

    function my_search_form( $form ) {
    $form = '<form role="search" method="get" id="searchform" action="' . home_url( '/' ) .'" >
    <div>
    <input type="text" class="search-query" placeholder="Pretraga..." value="' . get_search_query() . '" name="s" id="s" />
    </div>
    </form>';

    return $form;
    }
    remove_filter( 'the_content', 'wpautop' );

    add_filter( 'get_search_form', 'my_search_form' );
    add_image_size( 'read_more_block', 86, 109, true ); 
    add_image_size( 'footer', 64, 64, true ); 

?>