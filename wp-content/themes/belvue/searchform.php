<form role="search" method="get" class="search-form form-inline" action="<?php echo esc_url( home_url( '/' ) ); ?>">
	<input type="search" class="search-field form-control" placeholder="<?php echo esc_attr_x( 'Search &hellip;', 'placeholder', 'belvue' ); ?>" value="<?php echo esc_attr( get_search_query() ); ?>" name="s" title="<?php _ex( 'Search for:', 'label', 'belvue' ); ?>">
	<button type="submit"><i class="fa fa-angle-right"></i><span><?php echo esc_attr_x( 'Search', 'submit button', 'belvue' ); ?></span></button>
</form>
