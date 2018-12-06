<?php
    if(! function_exists('portal_setup')): 
        function portal_setup(){

            load_theme_textdomain( 'portal' );

            add_theme_support('automatic-feed-links'); // thêm rss vào thẻ head
            
            add_theme_support('post-thumnails');

        }
        add_action( 'after_setup_theme', 'portal_setup' );
    endif;

 function portal_script(){
    wp_enqueue_style( 'portal-style', get_stylesheet_uri()); // load style vao bien portal-style
    wp_enqueue_script( 'portal-script',get_template_directory_uri() . '/asset/js/index.js',array(), false, true);// de bien cuoi true de load js cuoi file
 }

 add_action('wp_enqueue_scripts','portal_script');