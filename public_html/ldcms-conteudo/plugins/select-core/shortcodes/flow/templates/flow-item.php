<div <?php eiddo_qodef_class_attribute($item_classes); ?>>
    <div class="qodef-fi-holder-inner">
	    <?php if($image_position == 'left') { ?>
	        <div class="qodef-fi-image-holder">
	            <?php if (!empty($number)) : ?>
	                <div class="qodef-fi-number">
	                    <?php echo esc_html($number); ?>
	                </div>
	            <?php endif; ?>
	            <div class="qodef-fi-image">
	                <?php echo wp_get_attachment_image($image, 'full'); ?>
	            </div>
	        </div>
	    <?php } ?>
        <div class="qodef-fi-content-holder">
	        <?php if (!empty($subtitle)) : ?>
		        <div class="qodef-fi-subtitle-holder">
			        <span class="qodef-fi-subtitle"><?php echo esc_html($subtitle); ?></span>
		        </div>
	        <?php endif; ?>
            <?php if (!empty($title)) : ?>
                <div class="qodef-fi-title-holder">
                    <h1 class="qodef-fi-title"><?php echo esc_html($title); ?></h1>
                </div>
            <?php endif; ?>
            <?php if (!empty($text)) : ?>
                <div class="qodef-fi-text-holder">
                    <p><?php echo esc_html($text); ?></p>
                </div>
            <?php endif; ?>
        </div>
	    <?php if($image_position == 'right') { ?>
		    <div class="qodef-fi-image-holder">
			    <?php if (!empty($number)) : ?>
				    <div class="qodef-fi-number">
					    <?php echo esc_html($number); ?>
				    </div>
			    <?php endif; ?>
			    <div class="qodef-fi-image">
				    <?php echo wp_get_attachment_image($image, 'full'); ?>
			    </div>
		    </div>
	    <?php } ?>
    </div>
</div>