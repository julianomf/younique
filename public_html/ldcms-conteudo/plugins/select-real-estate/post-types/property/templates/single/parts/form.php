<div class="qodef-property-enquiry-holder">
    <div class="qodef-property-enquiry-inner">
	    <div class="qodef-property-enquiry-heading">
		    <h5 class="qodef-property-enquiry-title" ><?php esc_html_e('Request a showing', 'select-real-estate'); ?></h5>
	        <a class="qodef-property-enquiry-close">
	            <?php echo eiddo_qodef_icon_collections()->renderIcon( 'icon_close', 'font_elegant' );?>
	        </a>
	    </div>
        <form class="qodef-property-enquiry-form qodef-style-form" method="POST">
            <input type="text" name="enquiry-name" id="enquiry-name" placeholder="<?php esc_html_e( 'Your Full Name', 'select-real-estate' );?>" required pattern=".{6,}">
            <input type="email" name="enquiry-email" id="enquiry-email" placeholder="<?php esc_html_e( 'Your E-mail Address', 'select-real-estate' );?>" required pattern="[a-z0-9._%+-]+@[a-z0-9.-]+\.[a-z]{2,3}$">
            <textarea name="enquiry-message" id="enquiry-message" placeholder="<?php esc_html_e( 'Your Message', 'select-real-estate' );?>" required rows="6"></textarea>

            <?php echo eiddo_qodef_get_button_html(array(
                'text' => esc_html__('Send Your Message', 'select-real-estate'),
                'html_type' => 'button',
                'type' => 'solid',
                'custom_class' => 'qodef-property-single-enquiry-submit'
            )); ?>

            <input type="hidden" id="property-item-id" value="<?php echo get_the_ID(); ?>">
            <?php wp_nonce_field('qodef_re_validate_property_item_enquiry', 'qodef_re_nonce_property_item_enquiry'); ?>
        </form>
        <div class="qodef-property-enquiry-response"></div>
    </div>
</div>