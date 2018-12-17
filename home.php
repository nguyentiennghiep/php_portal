<?php get_header(); ?>
<div class="container main-page">
	<div class="left-column">
		<div class="daily-post">
			<h4 class="post-title">管理本部からのお知らせ</h4>
			<?php 
			$the_query = new WP_Query( array( 'category_name' => 'Kanrihonbu' ,
												'posts_per_page' => '4') ); ?>

			<?php if ( $the_query->have_posts() ) : ?>

				<!-- pagination here -->

				<!-- the loop -->
				<?php while ( $the_query->have_posts() ) : $the_query->the_post(); ?>
					<a href = "<?php the_permalink(); ?>"><?php the_title(); ?></a>
				<?php endwhile; ?>
				<!-- end of the loop -->
				<!-- pagination here -->

				<?php wp_reset_postdata(); ?>

			<?php else : ?>
				<p><?php esc_html_e( 'Sorry, no posts matched your criteria.' ); ?></p>
			<?php endif; ?>
		</div>
		<div class="daily-post">
			<h4 class="post-title">FE部からのお知らせ</h4>
			<?php 
			$the_query = new WP_Query( array( 'category_name' => 'FE' ,
												'posts_per_page' => '4') ); ?>

			<?php if ( $the_query->have_posts() ) : ?>

				<!-- pagination here -->

				<!-- the loop -->
				<?php while ( $the_query->have_posts() ) : $the_query->the_post(); ?>
					<a href = "<?php the_permalink(); ?>"><?php the_title(); ?></a>
				<?php endwhile; ?>
				<!-- end of the loop -->
				<!-- pagination here -->

				<?php wp_reset_postdata(); ?>

			<?php else : ?>
				<p><?php esc_html_e( 'Sorry, no posts matched your criteria.' ); ?></p>
			<?php endif; ?>
		</div>
		<div class="daily-post">
			<h4 class="post-title">管理本部からのお知らせ</h4>
			<?php 
			$the_query = new WP_Query( array( 'category_name' => 'Kanrihonbu' ,
												'posts_per_page' => '4') ); ?>

			<?php if ( $the_query->have_posts() ) : ?>

				<!-- pagination here -->

				<!-- the loop -->
				<?php while ( $the_query->have_posts() ) : $the_query->the_post(); ?>
					<a href = "<?php the_permalink(); ?>"><?php the_title(); ?></a>
				<?php endwhile; ?>
				<!-- end of the loop -->
				<!-- pagination here -->

				<?php wp_reset_postdata(); ?>

			<?php else : ?>
				<p><?php esc_html_e( 'Sorry, no posts matched your criteria.' ); ?></p>
			<?php endif; ?>
		</div>
		
		<div class="event-post">
			<h4 class="post-title">イベント情報</h4>
			<?php 
			$the_query = new WP_Query( array( 'category_name' => 'event' ,
												'posts_per_page' => '5') ); ?>

			<?php if ( $the_query->have_posts() ) : ?>
				<?php while ( $the_query->have_posts() ) : $the_query->the_post(); ?>
					<div class="post-info">
						<a href = "<?php the_permalink(); ?>"><i class="far fa-calendar-check"></i><?php the_title(); ?></a>
						 <span class="post-date"><?php echo get_the_date(); ?></span>
					</div>
				<?php endwhile; ?>
				<?php wp_reset_postdata(); ?>

			<?php else : ?>
				<p><?php esc_html_e( 'Sorry, no posts matched your criteria.' ); ?></p>
			<?php endif; ?>
		</div>
	</div>
	<div class="right-column">
		<div class="md-graph">
            <h4 class="post-title">メディアドゥHD株価</h4>
            <img src="https://dimg.stockweather.co.jp/sw_dimg/swdaytimechartwriter.ashx?mkt=01&code=000036780" alt="">
            <img src="https://dimg.stockweather.co.jp/sw_dimg/swcandlechartwriter.ashx?mkt=01&code=000036780&term=2"
                    alt="">
        </div>
        <div class="md-social">
        	 <h4 class="post-title">FACEBOOK　- 株式会社メディアドゥ –</h4>
             <iframe src="https://www.facebook.com/plugins/page.php?href=https%3A%2F%2Fwww.facebook.com%2Ffacebook&tabs=timeline&width=400&height=500&small_header=false&adapt_container_width=true&hide_cover=false&show_facepile=true&appId=1897599116967945" width="400" height="500" style="border:none;overflow:hidden" scrolling="no" frameborder="0" allowTransparency="true" allow="encrypted-media"></iframe>
        </div>
        <div class="md-weather">
            	
        </div>
	</div>
</div>

<?php get_footer(); ?>