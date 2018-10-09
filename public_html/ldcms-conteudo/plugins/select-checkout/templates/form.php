<form method="post" class="qodef-buy-item-form" enctype="multipart/form-data">
	<input name="add-to-cart" type="hidden" value="<?php echo get_the_ID(); ?>" />
	<?php if(isset($show_quantity_field) && $show_quantity_field) : ?>
		<input name="quantity" type="number" value="1" min="1"  />
	<?php else : ?>
		<input name="quantity" type="hidden" value="1" />
	<?php endif; ?>
	<?php if(qodef_woocomerce_checkout_integration_core_plugin_installed()) { ?>
		<?php echo eiddo_qodef_get_button_html(
			array_merge(
				array(
					'html_type' 	=> 'button',
					'text'			=> $button_params['input_text'],
					'input_name'	=> 'submit'
				),
				$button_params
			)
		); ?>
	<?php } else { ?>
		<button type="submit"><?php echo esc_attr($button_params['input_text']); ?></button>
	<?php } ?>
</form>