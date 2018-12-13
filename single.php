<?php get_header(); ?>
<div class="container main-page">
	<div class="left-column">
		<?php if( have_posts() ) : while( have_posts()) : the_post(); ?>
            <?php if(in_category('event')) : ?>    
               <h1 class="single-page-title"><i class="far fa-calendar-check" style="color: #00AAE1"></i><?php the_title(); ?></h1>
            <?php else : ?>
               <h1 class="single-page-title"><?php the_title(); ?></h1> 
            <?php endif; ?>
        <?php if (is_single() ) : ?>
            <div class="page-tag">
                <?php 

                	printf( __('<span class = "tag-date-time"><i class="far fa-clock"></i>   %1$s </span>', 'portal'),get_the_date() );

                    printf( __('<span class = "tag-author"><i class="fas fa-user"></i>   %1$s </span>', 'portal'),get_the_author() );

                    printf( __('<span class = "tag-folder"><i class="far fa-folder-open"></i>   %1$s </span>', 'portal'),get_the_category_list( ',') );
                ?>
            </div>
        <?php endif ?>
        <div class="page-content"><?php the_content(); ?></div>
    	<?php endwhile; ?>
    	<div class = "content-footer">
             <?php previous_post_link('%link', '<span><i class="fas fa-angle-double-left"></i>PREVIOUS</span> <p>%title</p>', TRUE);?> 
              <?php next_post_link('%link', '<span>NEXT<i class="fas fa-angle-double-right"></i></span><p>%title</p>', TRUE);?> 
        </div>
    <?php endif; ?>
	</div>
    <div class="right-column">
    	<div id="sidebar">
    		<?php get_sidebar() ?>
    	</div>
    	
    </div>
</div>
  

<?php get_footer(); ?>