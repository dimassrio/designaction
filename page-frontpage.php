<?php
/**
 * Template Name: Front Page
 *
 * @package WordPress
 * @subpackage Twenty_Fourteen
 * @since Twenty Fourteen 1.0
 */

get_header(); ?>

<div id="main-slider" class="row collapse">
	<div class="large-6 columns">
		<?php if ( function_exists( 'soliloquy' ) ) { soliloquy( 'frontpage', 'slug' ); } ?>
	</div>
	<div class="large-6 columns">
		<div class="button-slider-container">
			<section id="section-pre-event">
				<h6 class="line">PRE-EVENT <span class="right"><i class="fa fa-calendar-o"></i></span></h6>
				<p>View Pra-Event Schedule</p>
			</section>
			<section id="section-main-event">
				<h6 class="line">MAIN EVENT <span class="right"><i class="fa fa-calendar-o"></i></span></h6>
				<p>View Event Schedule</p>
			</section>
			<section id="section-speakers">
				<h6 class="line">SPEAKERS <span class="right"><i class="fa fa-microphone"></i></span></h6>
				<p>View Speakers List</p>
			</section>
		</div>
	</div>
</div>

<div id="primary" class="content-area">
		<main id="main" class="site-main" role="main">

			<div class="row">
				<div class="large-12 columns">
					<?php while ( have_posts() ) : the_post(); ?>

						<?php get_template_part( 'template-parts/content', 'page' ); ?>

						<?php
							// If comments are open or we have at least one comment, load up the comment template.
							if ( comments_open() || get_comments_number() ) :
								comments_template();
							endif;
						?>

					<?php endwhile; // End of the loop. ?>
				</div>
			</div>

		</main><!-- #main -->
	</div><!-- #primary -->

	</div><!-- #content -->
	
	<div id="speakers-section">
		<div class="row">
			<div class="large-12 columns">
				<h6 class="line">SPEAKERS</h6>
				<ul class="small-block-grid-4">
					<?php 
					$query = new WP_Query('tag=speakers');
					while ( $query->have_posts() ) : $query->the_post();
						get_template_part( 'template-parts/content', 'speakers' );
					endwhile;
					// End of the loop. ?>
				</ul>
			</div>
		</div>
	</div>

	<div id="media-section">
		<div class="row">
			<div class="large-8 columns">
				<h6 class="line">VIDEOS</h6>
				<div class="flex-video">
					<iframe src="https://www.youtube.com/embed/Mix-fIU1XUI" frameborder="0" allowfullscreen></iframe>
				</div>
			</div>
			<div class="large-4 columns">
				<h6 class="line">PHOTOS</h6>
				<?php echo do_shortcode("[huge_it_portfolio id='1']"); ?>
			</div>
		</div>
	</div>

	<div id="social-section">
		<div class="row">
			<div class="large-8 columns">
				<h6 class="line">REGISTER NOW</h6>
				<?php if( function_exists( 'ninja_forms_display_form' ) ){ ninja_forms_display_form( 5 ); } ?>
			</div>
			<div class="large-4 columns">
				<h6 class="line">TWEET UPDATES</h6>
					<a class="twitter-timeline" href="https://twitter.com/DesignActionBDG" data-widget-id="650360437322739713">Tweets by @DesignActionBDG</a>
					<script>!function(d,s,id){var js,fjs=d.getElementsByTagName(s)[0],p=/^http:/.test(d.location)?'http':'https';if(!d.getElementById(id)){js=d.createElement(s);js.id=id;js.src=p+"://platform.twitter.com/widgets.js";fjs.parentNode.insertBefore(js,fjs);}}(document,"script","twitter-wjs");</script>
			</div>
		</div>
	</div>

	<div id="spons	or-section" class="row">
		<div class="large-6 columns">
			<h6 class="line">
				SPONSOR
			</h6>
			<ul class="small-block-grid-5">
			<?php foreach(sponsorship_data() as $x): ?>
					<li>
						<a href="<?php echo $x->url; ?>"><img data-src="<?php echo $x->image; ?>" alt=""></a>
					</li>
			<?php endforeach; ?>
			</ul>
		</div>
		<div class="large-6 columns">
			 <h6 class="line">
			 	MEDIA PARTNERS
			 </h6>
			 <ul class="small-block-grid-5">
			 <?php foreach(media_data() as $x): ?>
					<li>
						<a href="<?php echo $x->url; ?>"><img data-src="<?php echo $x->image; ?>" alt=""></a>
					</li>
			<?php endforeach; ?>
			</ul>
		</div>
	</div>
	<footer id="colophon" class="site-footer" role="contentinfo">
		<div class="row">
			<div class="large-3 columns">
				<h5>DESIGN ACTION.BDG</h5>
				<ul>
					<?php wp_nav_menu( array( 'theme_location' => 'footer-one' ) ); ?>
				</ul>
			</div>
			<div class="large-3 columns">
				<h5>DESIGNACTION.BDG 2015</h5>
				<ul>
					<?php wp_nav_menu( array( 'theme_location' => 'footer-two' ) ); ?>
				</ul>
			</div>
			<div class="large-2 columns">
				<h5>BLOG</h5>
				<ul>
					<?php wp_nav_menu( array( 'theme_location' => 'footer-three' ) ); ?>
				</ul>
			</div>
			<div class="large-2 columns">
				<h5>REGISTRATION</h5>
				<ul>
					<?php wp_nav_menu( array( 'theme_location' => 'footer-four' ) ); ?>
				</ul>
			</div>
			<div class="large-2 columns">
				<h5>CONTACT</h5>
				<ul>
					<?php wp_nav_menu( array( 'theme_location' => 'footer-five' ) ); ?>
				</ul>
			</div>
		</div>
		<!--<div class="site-info">
			<a href="<?php echo esc_url( __( 'https://wordpress.org/', 'designaction' ) ); ?>"><?php printf( esc_html__( 'Proudly powered by %s', 'designaction' ), 'WordPress' ); ?></a>
			<span class="sep"> | </span>
			<?php printf( esc_html__( 'Theme: %1$s by %2$s.', 'designaction' ), 'designaction', '<a href="http://dimassrio.me" rel="designer">Dimas Satrio</a>' ); ?>
		</div><!-- .site-info -->
	</footer><!-- #colophon -->
</div><!-- #page -->

<?php wp_footer(); ?>
<script type="text/javascript" src="<?php echo get_template_directory_uri(); ?>/assets/vendor/foundation/js/foundation.min.js"></script>

<script type="text/javascript" src="<?php echo get_template_directory_uri()?>/assets/vendor/holderjs/holder.min.js"></script>
<script type="text/javascript">
	if(jQuery(".nivoSlider").length > 0){
		jQuery(".nivoSlider").nivoSlider({
			directionNav : false,
			controlNav : false
		});
	}
</script>
</body>
</html>