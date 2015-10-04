<form role="search" method="get" class="search-form" action="<?php echo home_url( '/' ); ?>">
	<div class="row collapse">
		<div class="small-11 columns">
			<input type="search" class="search-field" placeholder="<?php echo esc_attr_x( 'Search', 'placeholder' ) ?>" value="<?php echo get_search_query() ?>" name="s" title="<?php echo esc_attr_x( 'Search for:', 'label' ) ?>" />
		</div>
		<div class="small-1 columns">
			<button type="submit" class="ghost search-submit tiny right"><i class="fa fa-search"></i></button>
		</div>
	</div>
</form>