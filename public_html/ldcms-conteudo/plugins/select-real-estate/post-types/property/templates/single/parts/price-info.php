<?php
$price = qodef_re_get_real_estate_item_price();
$assocciated_user_type = get_post_meta(get_the_ID(), 'qodef_property_contact_info_meta', true);
?>
<div class="qodef-property-price-info-holder">
    <div class="qodef-property-price-info-outer">
        <div class="qodef-property-price-info-inner">
			<div class="qodef-property-price">
			    <span>
			        <?php echo qodef_re_get_real_estate_price_html($price); ?>
			    </span>
			</div>
			<!--
			<?php if($assocciated_user_type !== '') { ?>
				<div class="qodef-property-cta">
					<?php
					$button_text = eiddo_qodef_options()->getOptionValue('property_enquiry_button_text');
					$button_text = $button_text !== '' ? $button_text : esc_html__( 'Request a showing', 'select-real-estate' );
					echo eiddo_qodef_get_button_html(
						array(
							'custom_class' => 'qodef-property-single-action',
							'html_type'    => 'anchor',
							'size'         => 'small',
							'type'         => 'simple',
							'text'         => $button_text
						)
					);
					?>
					<?php
						$enable_compare = eiddo_qodef_options()->getOptionValue('enable_property_comparing');
						if ($enable_compare == 'yes') {
							$enable_compare_single = eiddo_qodef_options()->getOptionValue('enable_property_comparing_single');
							if($enable_compare_single == 'yes') { ?>
								<div class="qodef-item-compare">
									<?php echo qodef_re_get_add_to_compare_list_button(); ?>
								</div>
					<?php   }
						}
					?>
				</div>
			<?php } ?>
			-->
		</div>
	</div>
</div>