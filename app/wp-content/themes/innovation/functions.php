<?php
// This is the propper way to enqueue both scripts and additional CSS.
// For a full list of scripts included with WP visit:
// https://developer.wordpress.org/reference/functions/wp_enqueue_script/#Default_scripts_included_with_WordPress
// If you would like to learn why, how and mechanics - you can visit:
// Usage: http://code.tutsplus.com/articles/how-to-include-javascript-and-css-in-your-wordpress-themes-and-plugins--wp-24321
// =========================================================================
// Wordpress disables sessions. But IF we need a way to enable use of session globally...
    // add_action('init', 'myStartSession', 1);
    function myStartSession() {
        if(!session_id()) {
            session_start();
        }
    }
// ADD CSS STYLES
    add_action( 'wp_enqueue_scripts', 'custom_styles' );
    function custom_styles() {
        // Register the style first so that WP knows what we are working with:
        wp_register_style( 'core-css', get_template_directory_uri() . '/css/style.css' );
     
        // Then we need to enqueue them one by one to the theme:
        wp_enqueue_style( 'core-css' );
    }
// Sometimes it is mandatory to have a special version of jQuery. This should be avoided. And allowed only outside admin panel.
    function deregisterJQuery() {
        wp_deregister_script('jquery');
        wp_register_script('jquery', ( get_template_directory_uri() . "/js/jquery-1.4.min.js"), false, '3.1.0');
        wp_enqueue_script('jquery');
    }
    if (!is_admin()) {
        add_action('wp_enqueue_scripts', 'deregisterJQuery');
    }
// NOW LETS GET ALL THE JAVASCRIPT
    add_action( 'wp_enqueue_scripts', 'custom_scripts' );
    function custom_scripts() {
        // Register the scripts first so that WP knows what we are working with:
        // Parameters: Slug, url, dependencies, version, in_footer
        wp_register_script( 'jquery-plugins', get_template_directory_uri() . '/js/jquery.plugins.min.js', ['jquery'], 1.2, false );
        wp_register_script( 'delegate', get_template_directory_uri() . '/js/scripts.min.js', ['jquery'], 1.0, true );
        wp_register_script( 'homepage', get_template_directory_uri() . '/js/homepage.js', ['jquery'], 1.0, true );
     
        // Then we need to enqueue them one by one to the theme:
        wp_enqueue_script( 'jquery-plugins' );
        wp_enqueue_script( 'delegate' );
        if (is_front_page()) {
            wp_enqueue_script( 'homepage' ); 
        }
    }
// This function is used to register navigation positions within the theme.
// Usage: https://codex.wordpress.org/Function_Reference/register_nav_menus
    add_action( 'init', 'register_my_menus' );
    function register_my_menus() {
      register_nav_menus( array(
        'main_nav' => 'Header Menu',
        'left_triangle' => 'Left Triangle Menu',
        'right_triangle' => 'Right Triangle Menu',
        'bottom_triangle' => 'Bottom Triangle Menu',
        'footer' => 'Footer Menu',
        'lang_menu' => 'Languages',
      ) );
    }
// We can add post thumbnails option. This allows the 'Featured Image' field when editing posts.
// Usage: https://codex.wordpress.org/Post_Thumbnails
    add_theme_support( 'post-thumbnails' ); 
// We can add predefined image sizes that wordpress will automatically create while uploading.
// Usage: https://developer.wordpress.org/reference/functions/add_image_size/
// $name, $min-width, $min-height, $crop
    add_image_size( 'read_more_block', 86, 109, true ); 
    add_image_size( 'footer', 64, 64, true );  
// There are a few unneeded tags within our <head>. It looks messy. We can disable/unmount them here/
    remove_action('wp_head', 'rsd_link'); // Weblog client legacy support
    remove_action('wp_head', 'wlwmanifest_link'); // Windows Live Writer Manifest
    remove_action('wp_head', 'wp_generator'); // Built-in Meta generator
// Lets set up ACF PRO silently.
    // 3. Set up Theme Options page.
    // USAGE EXAMPLE:> the_field('footer_disclaimer', 'option');
    if( function_exists('acf_add_options_page') ) {
      acf_add_options_page(array(
        'page_title'  =>  'Template Options',
        'menu_title'  =>  'Template Options',
        'menu_slug'   =>  'template-options',
        'capability'  =>  'edit_posts',
        'parent_slug' =>  'themes.php',
        'position'    =>  false,
        'icon_url'    =>  false
        ));
    }
// A Slices loop for creating Marko's custom page builder
    function sliceLoop($name) {
        if( have_rows($name) ):
            while ( have_rows($name) ) : the_row();
                if( get_row_layout() == 'video_slice' ):
                    get_template_part('slices/video-full');
                elseif( get_row_layout() == 'wysiwyg_slice' ): 
                    get_template_part('slices/wysiwyg');
                elseif( get_row_layout() == 'wysiwyg_slice2' ): 
                    get_template_part('slices/wysiwyg2');
                endif;
            endwhile;
        endif;
    }
// We all need a debug method. The second parameter is optional and decides if php is set to die after printing the var.
    function debug($input, $die = false) {
        echo '<pre>';
        print_r($input);
        echo '</pre>';
        if ($die) {
          die();
        }
    }
// Need to use permanent redirection? Easy peasy.
    function Redirect($url, $permanent = 302) {
        header('Location: ' . $url, true, $permanent);
        exit();
    }
// A propper way to implement WP Titles.
    add_filter('wp_title', 'change_the_title');
    function change_the_title($title) {
        return $title . ' ~ ' . get_bloginfo('name');
    }
// Create complete metadata tags for Google, Facebook OG and Twitter Cards
    // add_action('wp_head', 'create_meta');
    function create_meta() {
        global $post;
        $output = "";
        $image = get_field('meta_image')['sizes'];
        $title = get_the_title() . ' ~ ' . get_bloginfo('name');
        $description = get_field('meta_excerpt');
        if (!$description) { $description = get_field('global_meta_description', 'option'); }
        $description = strip_tags($description);
        $description = str_replace("\"", "'", $description);
        // Google metadata
        $output .= '
        <meta name="Description" CONTENT="' . $description . '">';
        // Facebook OpenGraph metadata
        $output .= '
        <meta property="og:title" content="' . $title . '" />
        <meta property="og:type" content="article" />
        <meta property="og:image" content="' . $image['Hero size'] . '" />
        <meta property="og:image:width" content="' . $image['Hero size-width'] . '" />
        <meta property="og:image:height" content="' . $image['Hero size-height'] . '" />
        <meta property="og:url" content="' . get_the_permalink() . '" />
        <meta property="og:description" content="' . $description . '" />
        <meta property="og:site_name" content="' . get_bloginfo('name') . '" />';
        // Twitter Cards metadata
        $output .= '
        <meta name="twitter:card" content="summary_large_image">
        <meta name="twitter:site" content="@DigitalMindLLC">
        <meta name="twitter:creator" content="@DigitalMindLLC">
        <meta name="twitter:title" content="' . $title . '">
        <meta name="twitter:description" content="' . $description . '">';
        $image = (isset($image)) ? $image : get_field('gizmo_bg', 'option')['sizes'];
        $output .= '<meta name="twitter:image" content="' . $image['medium_large'] . '">';
        echo $output;
    }


// Disable galleries support
    add_action( 'admin_head_media_upload_gallery_form', 'mfields_remove_gallery_setting_div' );
    if( !function_exists( 'mfields_remove_gallery_setting_div' ) ) {
       function mfields_remove_gallery_setting_div() {
            print '
            <style type="text/css">
         #gallery-settings *{
               display:none;
           }
        </style>';
        }
    }
// WP_Fill website advises us to disable <p> tags on images.
    add_filter('the_content', 'filter_ptags_on_images');
    function filter_ptags_on_images($content){
     return preg_replace('/<p>\s*(<a .*>)?\s*(<img .* \/>)\s*(\/a>)?\s*<\/p>/iU', '\1\2\3', $content);
    }
    remove_filter( 'the_content', 'wpautop' );





?>