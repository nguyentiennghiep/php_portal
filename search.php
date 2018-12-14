<?php get_header(); ?>
<div class="container main-page">
	<div class="left-column">
		<h1 style="font-size: 50px;">Result for :<span style="font-style: italic;"><?php echo (get_query_var( 's' )) ?></span> </h1>
		 <?php if( have_posts() ) : while( have_posts()) : the_post(); ?>
	        <?php get_template_part('content',get_post_format()); ?>
		 <?php endwhile; ?>
		 <?php else: ?>
	     <?php get_template_part('content','none'); ?>
    	 <?php endif; ?>
	</div>
    <div class="right-column">
    	<div id="sidebar">
    		<?php get_sidebar() ?>
    	</div>
    	
    </div>
</div>
  
<?php get_footer(); ?>