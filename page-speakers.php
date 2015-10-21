<?php
/**
 * Template Name: Speakers Page
 *
 * @package WordPress
 * @subpackage Twenty_Fourteen
 * @since Twenty Fourteen 1.0
 */

get_header(); ?>

	<div class="row">
		<div class="large-12 medium-12 columns">
			<div id="primary" class="content-area">
		<main id="main" class="site-main" role="main">

			<?php 
					$query = new WP_Query('tag=speakers&order=ASC');
					while ( $query->have_posts() ) : $query->the_post();
						get_template_part( 'template-parts/content', 'speakerspage' );
					endwhile;
					// End of the loop. ?>

		</main><!-- #main -->
	</div><!-- #primary -->
		</div>
</div>

<?php get_footer(); ?>
