<?php
if ( ! isset( $_GET['ajax'] ) ) :

get_header(); ?>

<div id="content">

    <?php $cur = 0; ?>
	<?php if ( have_posts() ) : ?>
		<?php while( have_posts() ) : the_post(); ?>
            <?php get_template_part( 'content', get_post_format() ); ?>
            <?php if ($cur ++ == 2 && !wp_is_mobile()) : ?>
                <div class="adsense"><?php banote_adsense('front')?></div>
            <?php endif; ?>
		<?php endwhile; ?>
		<?php banote_content_nav( 'nav-below' ); ?>
	<?php else: ?>
		<div class="content-note">
			<div class="content-date">
				<div><span><?php echo date("M");?></span><br /><span><?php echo date("j")?></span></div>
			</div>
			<div class="content-main">
				<article class="content-excerpt">No thing found...</article>
			</div>
		</div>
	<?php endif;?>

</div> <!-- #content -->

<div id="sidebar">
<?php get_sidebar(); ?>
</div> <!-- #sidebar -->
<div class="dummy"></div>
<?php
get_footer(); 
else :

if ( have_posts() ) {
		$result = array('posts' => array());
		while ( have_posts() ) {
				the_post();
				ob_start();
				get_template_part( 'content', get_post_format() );
				$result['posts'][] = ob_get_contents();
				ob_end_clean();
		}
		global $wp_query;
		if ($wp_query->max_num_pages > 1) {
				$result['next'] = get_next_posts_link( __( '<span class="meta-nav">&larr;</span> Older posts', 'banote' ) );
				$result['next'] = str_replace("?ajax=1", "", $result['next']);
		}
		echo json_encode($result);
}

endif;
?>
