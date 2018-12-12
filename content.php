<div id = "post-<?php the_ID() ?>" <?php post_class(); ?> >
	<div class="portal_thumbnail">
		<?php portal_thumbnail('thumbnail'); ?>
	</div>
	<div class="entry-header">
		<?php portal_entry_header(); ?>
		<?php portal_entry_meta(); ?>
	</div>
	<div class="entry-content">
		<?php portal_entry_content(); ?>
		<?php portal_entry_tag(); ?>
	</div>
</div>