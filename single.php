<?php
/**
 * The template for displaying all single posts.
 *
 * @link https://developer.wordpress.org/themes/basics/template-hierarchy/#single-post
 *
 * @package Design_Action!
 */

get_header(); ?>
<?php while ( have_posts() ) : the_post(); ?>
	<div class="section full-image">
		<div class="large-12">
				<?php the_post_thumbnail(); ?>
		</div>
	</div>
	<div class="row">
		<div class="large-8 large-offset-2 medium-offset-2 columns medium-8">
			<div id="primary" class="content-area">
				<main id="main" class="site-main" role="main">


			<?php get_template_part( 'template-parts/content', 'single' ); ?>

			<?php the_post_navigation(); ?>

			<?php
				// If comments are open or we have at least one comment, load up the comment template.
				if ( comments_open() || get_comments_number() ) :
					comments_template();
				endif;
			?>

		<?php endwhile; // End of the loop. ?>

		</main><!-- #main -->
	</div><!-- #primary -->

		</div>
	</div>
<?php get_footer(); ?>
