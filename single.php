<?php
get_header(); ?>

<div id="content">

	<?php while( have_posts() ) : the_post(); ?>
		<?php get_template_part( 'content', get_post_format() ); ?>
			

		<?php comments_template( '', true ); ?>
	<?php endwhile; ?>

</div> <!-- #content -->

<div id="sidebar">
<?php
get_sidebar(); ?>
</div> <!-- #sidebar -->
<div class="dummy"></div>
<?php
get_footer(); ?>
