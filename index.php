 <?php
/**
 * Index main template file.
 *
 * @file           index.php
 * @package        Vanilla_WP_Theme
 * @author         Canonical Web Team
 * @copyright      2016 Canonical Ltd
 * @license
 * @version        Release: 1.0
 * @filesource     wp-content/themes/vanilla-wp-theme/index.php
 * @since          available since Release 1.0
 */

get_header(); ?>
		<?php
		if ( have_posts() ) :
			if ( is_home() && ! is_front_page() ) : ?>
				<header class="row">
						<div class="inner-wrapper">
								<h1 class="tweleve-col"><?php single_post_title(); ?></h1>
						</div>
				</header>
			<?php
			endif;

			/* Start the Loop */
			while ( have_posts() ) : the_post();
				/*
				 * Include the Post-Format-specific template for the content.
				 * If you want to override this in a child theme, then include a file
				 * called content-___.php (where ___ is the Post Format name) and that will be used instead.
				 */
				get_template_part( 'template-parts/content', get_post_format() );

			endwhile;

			the_posts_navigation();

		else :

			get_template_part( 'template-parts/content', 'none' );

		endif; ?>

<?php get_footer(); ?>
