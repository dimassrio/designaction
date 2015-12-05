<?php
/**
 * The header for our theme.
 *
 * This is the template that displays all of the <head> section and everything up until <div id="content">
 *
 * @link https://developer.wordpress.org/themes/basics/template-files/#template-partials
 *
 * @package Design_Action!
 */

?><!DOCTYPE html>
<html <?php language_attributes(); ?>>
<head>
<meta charset="<?php bloginfo( 'charset' ); ?>">
<meta name="viewport" content="width=device-width, initial-scale=1">
<link rel="profile" href="http://gmpg.org/xfn/11">
<link rel="pingback" href="<?php bloginfo( 'pingback_url' ); ?>">
<link href='https://fonts.googleapis.com/css?family=Work+Sans:400,700,200' rel='stylesheet' type='text/css'>
<?php wp_head(); ?>
</head>

<body <?php body_class(); ?>>
<div id="page" class="hfeed site">
	<div class="top-header">
		<div class="row">
			<div class="large-8 columns">
				<a href="<?php echo home_url(); ?>"><img src="<?php echo get_template_directory_uri();?>/assets/img/logo.png" data-src="holder.js/500x100" alt=""></a>
			</div>
			<div class="large-4 columns">
					<?php get_search_form(); ?>
					<div class="social-media">
						<ul class="inline-list right">
						<li><a href="https://www.facebook.com/designaction.bdg/"><i class="fa fa-facebook"></i></a></li>
						<li><a href="https://twitter.com/DesignActionBDG"><i class="fa fa-twitter"></i></a></li>
						<li><a href="https://plus.google.com/106982451271131413866/videos"><i class="fa fa-google-plus"></i></a></li>
						<li><a href="https://www.youtube.com/channel/UC9g7IG4QOlNkP0HJaSKyjsw/feed"><i class="fa fa-youtube"></i></a></li>
						<li><a href=""><i class="fa fa-instagram"></i></a></li>
					</ul>
					</div>
			</div>
		</div>
	</div>
	<div class="header">
		<div class="contain-to-grid">
			<nav class="top-bar" data-topbar role="navigation" data-options="mobile_show_parent_link: true">
		<ul class="title-area">
			<li class="name hide-for-medium-up">
				<h1>Navigation</h1>
			</li>
			 <!-- Remove the class "menu-icon" to get rid of menu icon. Take out "Menu" to just have icon alone -->
			<li class="toggle-topbar menu-icon"><a href="#"><span>Menu</span></a></li>
		</ul>

		<section class="top-bar-section">
			<!-- Right Nav Section -->
			<?php $args = array( 
								'theme_location' => 'primary',
								'menu_class' => 'menu large-block-grid-5 small-block-grid-1 medium-block-grid-3',
								'walker'=> new da_walker );
							wp_nav_menu($args); ?>
		</section>
	</nav>
		</div>
	</div>
	
	
	<div id="content" class="site-content">