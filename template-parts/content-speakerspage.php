<?php
/**
 * Template part for displaying single posts.
 *
 * @link https://codex.wordpress.org/Template_Hierarchy
 *
 * @package Design_Action!
 */

?>

<article id="post-<?php the_ID(); ?>" <?php post_class(); ?>>
	<div class="row">
		<div class="large-4 columns">
			<?php if ( has_post_thumbnail() ) : ?>
				<?php $args = array(
					'style' => 'margin-top:20px;border-bottom:10px solid #d9e021'
				);?>
				<?php the_post_thumbnail('full', $args); ?>
			<?php endif; ?>
		</div>
		<div class="large-8 columns">
			<hr/>
			<div class="row">
				<div class="large-6 columns">
					<?php the_title( '<h5 class="entry-title">', '</h5>' ); ?>
				</div>
				<div class="large-6 columns">
				<?php $occupation = get_post_meta(get_the_ID(), 'occupation');?>
					<?php foreach ($occupation as $key => $o) : ?>
						<p><?php echo $o; ?></p>
					<?php endforeach; ?>
				</div>
			</div>
			<?php the_content(); ?>
		</div>
	</div>
</article><!-- #post-## -->