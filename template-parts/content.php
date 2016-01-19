<?php
/**
 * Post template
 *
 * @file           content.php
 * @package        Vanilla_WP_Theme
 * @author         Canonical Web Team
 * @copyright      2016 Canonical Ltd
 * @license
 * @version        Release: 1.0
 * @filesource     wp-content/themes/vanilla-wp-theme/template-parts/content.php
 * @since          available since Release 1.0
 */
?>

<article id="post-<?php the_ID(); ?>" class="row">
		<div class="inner-wrapper">
				<header class="twelve-col">
						<?php
								if ( is_single() ) {
										the_title( '<h1>', '</h1>' );
								} else {
										the_title( '<h2><a href="' . esc_url( get_permalink() ) . '" rel="bookmark">', '</a></h2>' );
								}
						?>
				</header>
				<div class="twelve-col">
						<?php
								the_content( sprintf(
										/* translators: %s: Name of current post. */
										wp_kses( __( 'Continue reading %s <span class="meta-nav">&rarr;</span>', 'vanilla-wp-theme' ), array( 'span' => array( 'class' => array() ) ) ),
										the_title( '<span class="screen-reader-text">"', '"</span>', false )
								) );

								wp_link_pages( array(
										'before' => '<div class="page-links">' . esc_html__( 'Pages:', 'vanilla-wp-theme' ),
										'after'  => '</div>',
								) );
						?>
				</div>
				<footer class="twelve-col">
						<?php if ( 'post' === get_post_type() ) : ?>
								<p><?php vanilla_wp_theme_posted_on(); ?></p>
						<?php endif; ?>
						<p><?php vanilla_wp_theme_entry_footer(); ?></p>
				</footer>
		</div>
</article>
