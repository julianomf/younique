<div class="qodef-price-table qodef-item-space <?php echo esc_attr($holder_classes); ?>">
	<div class="qodef-pt-inner" <?php echo eiddo_qodef_get_inline_style($holder_styles); ?>>
		<ul>
			<li class="qodef-pt-title-holder">
				<h5 class="qodef-pt-title" <?php echo eiddo_qodef_get_inline_style($title_styles); ?>><?php echo esc_html($title); ?></h5>
			</li>
			<ul>
				<li class="qodef-pt-prices">
					<span class="qodef-pt-price" <?php echo eiddo_qodef_get_inline_style($price_styles); ?>>
						<?php echo esc_html($currency); ?>
						<?php echo esc_html($price); ?>
					</span>
				</li>
				<li class="qodef-pt-dash">
					<span class="qodef-dash"></span>
				</li>
				<li class="qodef-pt-content">
					<?php echo do_shortcode($content); ?>
				</li>
				<?php
				if(!empty($button_text)) { ?>
					<li class="qodef-pt-button">
						<?php echo eiddo_qodef_get_button_html(array(
							'link' => $link,
							'text' => $button_text,
							'type' => 'simple',
	                        'size' => 'large'
						)); ?>
					</li>
				<?php } ?>
			</ul>
		</ul>
	</div>
</div>