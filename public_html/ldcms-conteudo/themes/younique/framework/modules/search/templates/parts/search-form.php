<form action="<?php echo esc_url( home_url( '/' ) ); ?>" class="qodef-search-page-form" method="get">
	<h2 class="qodef-search-title"><?php esc_html_e( 'Nova Busca:', 'eiddo' ); ?></h2>
	<div class="qodef-form-holder">
		<div class="qodef-column-left">
			<input type="text" name="s" class="qodef-search-field" autocomplete="off" value="" placeholder="<?php esc_html_e( 'Busca', 'eiddo' ); ?>"/>
		</div>
		<div class="qodef-column-right">
			<button type="submit" class="qodef-search-submit"><span class="icon_search"></span></button>
		</div>
	</div>
	<div class="qodef-search-label">
		<?php esc_html_e( 'Se você não estiver satisfeito com os resultados abaixo, faça outra pesquisa.', 'eiddo' ); ?>
	</div>
</form>