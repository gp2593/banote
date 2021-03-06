<?php
/**
 * Template Name: Full-width Page Template, No Sidebar, No comment
 */
get_header(); ?>

<div id="content">

	<?php while( have_posts() ) : the_post(); ?>
		<?php get_template_part( 'content', get_post_format() ); ?>
	<?php endwhile; ?>

</div> <!-- #content -->


<div class="dummy"></div>
<?php
get_footer(); ?>
