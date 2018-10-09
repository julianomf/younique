<?php
$query_results = new \WP_Query($query_args);
?>
<div class="qodef-re-profile-all-properties-holder">
    <h2 class="qodef-membership-page-title"><?php esc_html_e('My Properties', 'select-real-estate'); ?></h2>
    <p><?php esc_html_e('My properties', 'select-real-estate'); ?></p>
    <?php if ($query_results->have_posts()) {
        while ($query_results->have_posts()) {
            $query_results->the_post(); ?>
            <div class="qodef-re-profile-property-item">
                <div class="qodef-re-profile-property-item-image-title">
                    <div class="qodef-re-profile-property-item-image">
                        <?php
                        if (has_post_thumbnail(get_the_ID())) {
                            $image = get_the_post_thumbnail_url(get_the_ID(), 'thumbnail');
                        } else {
                            $image = QODE_RE_CPT_URL_PATH . '/property/assets/img/property_featured_image.jpg';
                        }
                        ?>
                        <img src="<?php echo esc_attr($image); ?>"
                             alt="<?php echo esc_attr('Property thumbnail', 'select-real-estate') ?>"/>
                    </div>
                    <div class="qodef-re-profile-property-item-title">
                        <h5>
                            <a href="<?php echo get_the_permalink(get_the_ID()); ?>">
                                <?php echo get_the_title(get_the_ID()); ?>
                            </a>
                        </h5>
                    </div>
                </div>
                <div class="qodef-re-profile-property-item-buttons">
                    <?php
                    if (qodef_membership_theme_installed()) {
                        echo eiddo_qodef_get_button_html(array(
                            'text'             => esc_html__('EDIT PROPERTY', 'select-real-estate'),
                            'custom_class'     => 'qodef-property-item-edit',
                            'color'            => '#000',
                            'background_color' => '#f4f4f4',
                            'link'             => esc_url(add_query_arg(array('user-action' => 'edit-property', 'property_id' => get_the_ID()), $dashboard_url))
                        ));
                    } else {
                        echo '<a itemprop="url" href="' . esc_url(add_query_arg(array('user-action' => 'edit-property', 'property_id' => get_the_ID()), $dashboard_url)) . '" target="_self" class="qodef-btn qodef-btn-medium qodef-btn-solid qodef-property-item-edit"><span class="qodef-btn-text">' . esc_html__('EDIT PROPERTY', 'select-real-estate') . '</span></a>';
                    }
                    ?>
                    <?php
                    if (qodef_membership_theme_installed()) {
                        echo eiddo_qodef_get_button_html(array(
                            'text'         => esc_html__('DELETE PROPERTY', 'select-real-estate'),
                            'custom_class' => 'qodef-property-item-delete',
                            'custom_attrs' => array(
                                'data-property-id'  => get_the_ID(),
                                'data-confirm-text' => esc_html__('Are you sure you want to delete this property?', 'select-real-estate')
                            )
                        ));
                    } else {
                        echo '<a href="#" target="_self" class="qodef-btn qodef-btn-medium qodef-btn-solid qodef-property-item-delete" data-property-id="<?php echo get_the_ID()?>" data-confirm-text="<?php esc_html__("Are you sure you want to delete this property?","qodef-real-estate");?>"><span class="qodef-btn-text">' . esc_html__('EDIT PROPERTY', 'select-real-estate') . '</span></a>';
                    }
                    ?>
                </div>
            </div>
        <?php
        }
    } else { ?>
        <h3><?php esc_html_e( 'You haven\'t added any property yet.', 'select-real-estate' ) ?> </h3>
    <?php } ?>
</div>