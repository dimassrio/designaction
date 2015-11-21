	<div id="sponsor-section" class="row">
		<div class="large-6 columns">
			<h5 class="line">
				PRESENTED BY
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
				SUPPORTED BY
			</h5>
			<ul id="sponsor_list" class="small-block-grid-5">
			<?php 
					$query2 = new WP_Query('tag=support&order=ASC');
					while ( $query2->have_posts() ) : $query2->the_post();
						get_template_part( 'template-parts/content', 'sponsors' );
					endwhile;
					// End of the loop. ?>
			</ul>
		</div>
	</div>
	<div id="partner-section" class="row">
		<div class="large-12 columns">
			 <h5 class="line">
				PARTNERS
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