<?php
/**
 * The template for displaying the footer.
 *
 * Contains the closing of the #content div and all content after.
 *
 * @link https://developer.wordpress.org/themes/basics/template-files/#template-partials
 *
 * @package Design_Action!
 */

?>

	</div><!-- #content -->
	<div id="sponsor-section" class="row">
		<div class="large-6 columns">
			<h6 class="line">
				SPONSOR
			</h6>
			<ul class="small-block-grid-5">
			<?php foreach(sponsorship_data() as $x): ?>
				<li>
					<img data-src="holder.js/100x100/" alt="">
				</li>
			<?php endforeach; ?>
			</ul>
		</div>
		<div class="large-6 columns">
			 <h6 class="line">
			 	MEDIA PARTNERS
			 </h6>
			 <ul class="small-block-grid-5">
			 <?php for($i =0; $i<8; $i++): ?>
				<li>
					<img data-src="holder.js/100x100/" alt="">
				</li>
			<?php endfor; ?>
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
<script type="text/javascript" src="<?php echo get_template_directory_uri(); ?>/assets/vendor/jquery/dist/jquery.min.js"></script>
<script type="text/javascript" src="<?php echo get_template_directory_uri(); ?>/assets/vendor/foundation/js/foundation.min.js"></script>
<script type="text/javascript" src="<?php echo get_template_directory_uri(); ?>/assets/vendor/holderjs/holder.min.js"></script>
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
