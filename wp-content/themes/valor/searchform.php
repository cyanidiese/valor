<form role="search" method="get" class="search-form" action="<?php echo home_url( '/' ); ?>">
	<label>
		<input type="search" class="search-field"
		       placeholder="<?php _e( '[:en]Search[:es]Buscar[:ua]Пошук[:ru]Поиск[:]' ) ?>"
		       value="<?php echo get_search_query() ?>" name="s"
		       title="<?php _e( '[:en]Search[:es]Buscar[:ua]Пошук[:ru]Поиск[:]' ) ?>" />
	</label>
	<input type="submit" class="search-submit"
	       value="<?php _e( '[:en]Search[:es]Buscar[:ua]Пошук[:ru]Поиск[:]' ) ?>" />
</form>
