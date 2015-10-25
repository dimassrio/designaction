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
	<div class="large-7 columns">
		<?php if ( function_exists( 'soliloquy' ) ) { soliloquy( 'frontpage', 'slug' ); } ?>
	</div>
	<div class="large-5 columns">
		<div class="button-slider-container">
			<section id="section-pre-event">
				<h6 class="line">PRE-EVENT <span class="right"><i class="fa fa-calendar-o"></i></span></h6>
				<p>View Pre-Event Schedule</p>
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
				<h5 class="line">SPEAKERS</h5>
				<ul class="small-block-grid-4">
					<?php 
					$query = new WP_Query('tag=speakers&order=ASC');
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
			<div class="large-7 columns">
				<h5 class="line">VIDEOS</h5>
				
					<iframe width="560" height="315" src="https://www.youtube.com/embed/Mix-fIU1XUI" frameborder="0" allowfullscreen></iframe>
				
			</div>
			<div class="large-5 columns">
				<h5 class="line">PHOTOS</h5>
			</div>
		</div>
	</div>

	<div id="social-section">
		<div class="row">
			<div class="large-8 columns">
				<h5 class="line">REGISTER NOW</h5>
				<!-- Change the width and height values to suit you best -->
<!-- Change the width and height values to suit you best -->
<div class="typeform-widget" data-url="https://dimassatrio1.typeform.com/to/L5J2sS" data-text="Registration Form" style="width:100%;height:600px;"></div>
<script>(function(){var qs,js,q,s,d=document,gi=d.getElementById,ce=d.createElement,gt=d.getElementsByTagName,id='typef_orm',b='https://s3-eu-west-1.amazonaws.com/share.typeform.com/';if(!gi.call(d,id)){js=ce.call(d,'script');js.id=id;js.src=b+'widget.js';q=gt.call(d,'script')[0];q.parentNode.insertBefore(js,q)}})()</script>
    <div style="font-family: Sans-Serif;font-size: 12px;color: #999;opacity: 0.5; padding-top: 5px;">Powered by <a href="http://www.typeform.com/?utm_campaign=typeform_L5J2sS&amp;utm_source=website&amp;utm_medium=typeform&amp;utm_content=typeform-embedded&amp;utm_term=English" style="color: #999" target="_blank">Typeform</a></div>

			</div>
			<div class="large-4 columns">
				<h5 class="line">TWEET UPDATES</h5>
					<a class="twitter-timeline" href="https://twitter.com/DesignActionBDG" data-widget-id="650360437322739713">Tweets by @DesignActionBDG</a>
			</div>
		</div>
	</div>

	<div id="spons	or-section" class="row">
		<div class="large-6 columns">
			<h5 class="line">
				SPONSOR
			</h5>
			<ul id="sponsor_list" class="small-block-grid-5">
			<?php 
					$query2 = new WP_Query('tag=sponsors&order=ASC');
					while ( $query2->have_posts() ) : $query2->the_post();
						get_template_part( 'template-parts/content', 'sponsors' );
					endwhile;
					// End of the loop. ?>
			</ul>
		</div>
		<div class="large-6 columns">
			 <h5 class="line">
			 	MEDIA PARTNERS
			 </h5>
			 <ul class="small-block-grid-5">
			 	<?php 
					$query3 = new WP_Query('tag=partners&order=ASC');
					while ( $query3->have_posts() ) : $query3->the_post();
						get_template_part( 'template-parts/content', 'sponsors' );
					endwhile;
					// End of the loop. ?>
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
<script>!function(d,s,id){var js,fjs=d.getElementsByTagName(s)[0],p=/^http:/.test(d.location)?'http':'https';if(!d.getElementById(id)){js=d.createElement(s);js.id=id;js.src=p+"://platform.twitter.com/widgets.js";fjs.parentNode.insertBefore(js,fjs);}}(document,"script","twitter-wjs");</script>
<script type="text/javascript">
	jQuery(document).ready(function(){
		jQuery.get("https://spreadsheets.google.com/feeds/list/1eaJf99RbkoxYpmozmxdFrBI2jBsN7-AOPCdNW87bTd4/od6/public/values?alt=json",function(){

		}).done(function(data){
			for (var i = 0;  i < data.feed.entry.length ; i++) {
				jQuery('</li>', {
					text: 'test'
				}).appendTo("#sponsor_list");
				
			};
		});
	});
</script>
</body>
</html>