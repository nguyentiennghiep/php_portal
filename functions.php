<?php
    if(! function_exists('portal_setup')): 
        function portal_setup(){

            load_theme_textdomain( 'portal' );

            add_theme_support('automatic-feed-links'); // thêm rss vào thẻ head
            
            add_theme_support('post-thumnails');

            add_theme_support('title-tag');

            register_nav_menu('primary-menu',__('Primary menu','portal'));// khai bao menu primary menu la ten . tham so dau la location

            //side bar
            $sidebar = array('name' => __('Main Sidebar','portal'),
                             'id' => 'main-sidebar',
                             'Description' => __('default sidebar', 'portal'),
                             'class' => 'main-sidebar',
                             'before_title' => '<h3 class="widgettitle">',
                             'after_title' => '</h3>' );
            register_sidebar( $sidebar );

        }
        add_action( 'after_setup_theme', 'portal_setup' );
    endif;

 function portal_script(){
    wp_enqueue_style( 'portal-style', get_stylesheet_uri()); // load style vao bien portal-style
    wp_enqueue_script( 'portal-script',get_template_directory_uri() . '/asset/js/index.js',array(), false, true);// de bien cuoi true de load js cuoi file
 }

 add_action('wp_enqueue_scripts','portal_script');


/* khai bao function cho template 
  start */

if(!function_exists('portal_menu')){
    function portal_menu($menu){
        $menu  = array('theme_location' => $menu ,  
        'container' => 'div' ,
        'container_class'=> $menu);
        wp_nav_menu($menu);
    }

}

// phan trang
if(!function_exists('portal_pagination')) {
    function portal_pagination(){
        if($GLOBALS['wp_query']->max_num_pages <  2){
            return '';
        } ?>
        <nav class = "pagination" role = "navigation">
            <?php if ( get_next_posts_link() ) : ?>
                <div class = "prev"><?php next_posts_link(__("Older posts",'portal')); ?> </div>
            <?php endif; ?> 
            <?php if ( get_previous_posts_link() ) : ?>
                <div class = "next"><?php previous_posts_link(__("Newer posts",'portal')); ?> </div>
            <?php endif; ?>
        </nav>
    <?php }
}


// thumnial

if(!function_exists('portal_thumbnail')){
    function portal_thumbnail($size){
        if( !is_single() && has_post_thumbnail() && !post_password_required()) : ?>
                <div class="post-thumbnail"><?php the_post_thumbnail($size); ?></div>
        <?php endif; ?>
            <?php       
    }
}

if(!function_exists('portal_entry_header')){
    function portal_entry_header() { ?>
        <?php if(is_single() ) : ?>
            <h1><a href = "<?php the_permalink(); ?>"><?php the_title(); ?></a></h1>
        <?php else : ?>
            <h2><a href = "<?php the_permalink(); ?>"><?php the_title(); ?></a></h2>
        <?php endif ?>
    <?php }
}


// meta data

if(!function_exists('portal_entry_meta')){
    function portal_entry_meta(){ ?>
        <?php if ( !is_page() ) : ?>
            <div class="entry-meta">
                <?php 
                    printf( __('<span class = "author">Posted by %1$s ', 'portal'),get_the_author() );

                    printf( __('<span class = "date">at %1$s ', 'portal'),get_the_date() );

                    printf( __('<span class = "category">in %1$s ', 'portal'),get_the_category_list( ',') );

                    if( comments_open() ) : 
                        echo '<span class ="meta-reply">';
                            comments_popup_link(
                                __('Leave a comment','portal'),
                                __('One comment','portal'),
                                __('% comments','portal'),
                                __('Read all comments','portal')
                            );
                        echo '</span>';
                    endif;
                ?>
            </div>
        <?php endif ?>
    <?php }
}



// portal content 
if(!function_exists('portal_entry_content')){
    function portal_entry_content(){
        if(!is_single()){
            the_excerpt();
        } else {
            the_content();

            // phan trang post

            $link_pages =  array(
                'before' => __('<p>Page: ','portal') ,
                'after' => '</p>' ,
                'nextpagelink' => __('Next Page','portal') ,
                'previouspagelink' => __('Previous Page','portal') 
            );
            wp_link_pages( $link_pages ); 
        }
    }
}

// portal tag

if(!function_exists('portal_entry_tag')){
    function portal_entry_tag(){
        if( has_tag()) : 
            echo '<div class="entry-tag">';
            printf(__('Taged in %1$s', 'portal'),get_the_tag_list('',','));
            echo '</div>';
        endif;
    }
}