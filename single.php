<?php get_header(); ?>
<div class="container">
    <?php if( have_posts() ) : while( have_posts()) : the_post(); ?>
        <h1><?php the_title(); ?></h1>
        
        <?php if (is_single() ) : ?>
            <div class="entry-meta">
                <?php 
                    printf( __('<span class = "author">Posted by %1$s ', 'portal'),get_the_author() );

                    printf( __('<span class = "date">at %1$s ', 'portal'),get_the_date() );

                    printf( __('<span class = "category">in %1$s ', 'portal'),get_the_category_list( ',') );
                ?>
            </div>
        <?php endif ?>
        <?php the_content(); ?>
    <?php endwhile; ?>
    <nav class = "pagination" role = "navigation">
              <?php previous_post_link('<strong>%link</strong>', '%title', TRUE, 'Kanrihonbu'); ?> 
              <?php next_post_link('<strong>%link</strong>', '%title', TRUE, 'Kanrihonbu'); ?> 
        </nav>
    <?php endif; ?>
    <?php get_sidebar() ?>
</div>
  

<?php get_footer(); ?>