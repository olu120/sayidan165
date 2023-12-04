<form role="search" method="get" class="search-form" action="<?php echo esc_url( home_url( '/' ) ) ?>">
	<fieldset class="search-form-group">
		<input type="text" class="search-form-text" placeholder="<?php esc_attr_e( 'New search', 'sayidan' ) ?>" name="s" id="s"/>
		<button type="submit" class="search-form-button"><i class="fa fa-search"></i></button>
	</fieldset>
</form>