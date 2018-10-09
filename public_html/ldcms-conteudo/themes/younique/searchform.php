<form role="search" method="get" class="searchform" id="searchform-<?php echo esc_attr(rand(0, 1000)); ?>" action="<?php echo esc_url( home_url( '/' ) ); ?>">
	<label class="screen-reader-text"><?php esc_html_e( 'Busca:', 'eiddo' ); ?></label>
	<div class="input-holder clearfix">
		<input type="search" class="search-field" placeholder="<?php esc_html_e( 'Busca...', 'eiddo' ); ?>" value="" name="s" title="<?php esc_html_e( 'Busca:', 'eiddo' ); ?>"/>
		<button type="submit" class="qodef-search-submit"><?php echo eiddo_qodef_icon_collections()->renderIcon( 'icon_search', 'font_elegant' ); ?></button>
	</div>
</form>