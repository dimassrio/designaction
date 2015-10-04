<?php
/**
 * Template part for displaying page content in page.php.
 *
 * @link https://codex.wordpress.org/Template_Hierarchy
 *
 * @package Design_Action!
 */

?>

<li>
	<?php if ( has_post_thumbnail() ) : ?>
		<?php the_post_thumbnail(); ?>
		<div class="speakers-meta">
			<label for=""><?php the_title( '<h5 class="line">', '</h5>' ); ?></label>
		<?php $occupation = get_post_meta(get_the_ID(), 'occupation');?>
		
		<?php foreach ($occupation as $key => $o) : ?>
			<p><?php echo $o; ?></p>
		<?php endforeach; ?>
		</div>
	<?php endif; ?>
</li>