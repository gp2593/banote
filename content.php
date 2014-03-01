<?php if ( is_single() || is_page() ) : ?>
	<div class="content-full">
		<div class="content-main">
			<article itemscope itemtype="http://schema.org/Article" class="content-full">
				<header>
                    <h2 itemprop="name"><?php the_title(); ?></h2>
                    <div class="google-plus">
                        <!-- Place this tag where you want the +1 button to render. -->
                        <div class="g-plusone"></div>

                        <!-- Place this tag after the last +1 button tag. -->
                        <script type="text/javascript">
                        (function() {
                            var po = document.createElement('script'); po.type = 'text/javascript'; po.async = true;
                            po.src = 'https://apis.google.com/js/plusone.js';
                            var s = document.getElementsByTagName('script')[0]; s.parentNode.insertBefore(po, s);
                        })();
                        </script>
                    </div>
				</header>
				<div class="entry-content" itemprop="articleBody">
					<?php the_content(); ?>
					<?php wp_link_pages( array( 'before' => '<div class="page-links">' . __( 'Pages:', 'twentytwelve' ), 'after' => '</div>' ) ); ?>
				</div>
				<footer>

					<?php if ( is_single() ) : ?>
					<div class="cc"><a rel="license" href="http://creativecommons.org/licenses/by-nc-sa/3.0/deed.en_US"><img alt="Creative Commons License" style="border-width:0" src="http://i.creativecommons.org/l/by-nc-sa/3.0/88x31.png" /></a><br />This work is licensed under a <a rel="license" href="http://creativecommons.org/licenses/by-nc-sa/3.0/deed.en_US">Creative Commons Attribution-NonCommercial-ShareAlike 3.0 Unported License</a>.</div>
					<?php banote_entry_meta(); ?>
					<?php edit_post_link( __( 'Edit', 'twentytwelve' ), '<span class="edit-link">', '</span>' ); ?>			
					<nav class="nav-single">
						<span class="nav-previous"><?php previous_post_link( '%link', '<span class="meta-nav">' . _x( '&larr;', 'Previous post link', 'twentytwelve' ) .     '</span> %title' ); ?></span>
						<span class="nav-next"><?php next_post_link( '%link', '%title <span class="meta-nav">' . _x( '&rarr;', 'Next post link', 'twentytwelve' ) . '</sp    an>' ); ?></span>
					</nav>
					<?php endif; ?>
				</footer>
			</article>
		</div>
		<div class="dummy"></div>
    </div>
    <?php if ( is_single() && ! wp_is_mobile() ) : ?>
        <div class="adsense">
            <?php banote_adsense("front");?>
        </div>
    <?php endif; ?>
<?php else : //archive displaying ?>
	<div class="content-note">
		<div class="content-date">
		<div><span><?php echo the_time('M'); ?></span><br /><span><?php echo the_time('j'); ?></span></div>
		</div>
		<div class="content-main">
			<article itemscope itemtype="http://schema.org/Article" class="content-excerpt">
				<?php if (has_post_thumbnail()) : ?>
					<div class="content-thumbnail">
						<?php the_post_thumbnail(); ?>
					</div>
				<?php endif; ?>
				<header>
					<a itemprop="url" href="<?php the_permalink(); ?>" rel="bookmark"><h2><?php the_title(); ?></h2></a>
					<?php if ( comments_open() ) : ?>
					<div class="comments-link">
						<?php comments_popup_link(__('Leave a reply', 'banote'), __('1 Reply', 'banote'), __('% Replies', 'banote' ) ); ?>
					</div>
					<?php endif; ?>
                </header>
                <span itemprop="articleBody">
                <?php the_excerpt(); ?>
                </span>
				<footer>
					<?php banote_entry_meta(); ?>
					<?php edit_post_link( __( 'Edit', 'twentytwelve' ), '<span class="edit-link">', '</span>' ); ?>			
				</footer>
			</article>
		</div>
		<div class="dummy"></div>
	</div>
<?php endif; ?>
