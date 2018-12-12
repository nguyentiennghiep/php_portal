<?php get_header(); ?>
<div class="container">
	<h1>Hello this is home page</h1>
	<h2>Kanri honbu</h1>
	<?php 

// the query
		$the_query = new WP_Query( array( 'category_name' => 'Kanrihonbu' ,
											'posts_per_page' => '4') ); ?>

		<?php if ( $the_query->have_posts() ) : ?>

			<!-- pagination here -->

			<!-- the loop -->
			<ul>
			<?php while ( $the_query->have_posts() ) : $the_query->the_post(); ?>
				<li><a href = "<?php the_permalink(); ?>"><?php the_title(); ?></a></li>
			<?php endwhile; ?>
			<!-- end of the loop -->
			</ul>
			<!-- pagination here -->

			<?php wp_reset_postdata(); ?>

	<?php else : ?>
		<p><?php esc_html_e( 'Sorry, no posts matched your criteria.' ); ?></p>
	<?php endif; ?>
	<?php get_sidebar(); ?>
</div>

<?php get_footer(); ?>