<div
    class="qodef-section-title-holder <?php echo esc_attr($holder_classes); ?>" <?php echo eiddo_qodef_get_inline_style($holder_styles); ?>>
    <div class="qodef-st-inner">
        <?php
        if (!empty($label)) { ?>
            <div class="qodef-st-label">
                <?php echo wp_kses($label, array('br' => true, 'span' => array('class' => true))); ?>
            </div>
        <?php }
        if (!empty($title)) {
            echo '<' . esc_attr($title_tag); ?> class="qodef-st-title" <?php echo eiddo_qodef_get_inline_style($title_styles) . '>';
            echo wp_kses($title, array('br' => true, 'span' => array('class' => true)));
            echo '</' . esc_attr($title_tag) . '>';
        }
        if (!empty($text)) {
            echo '<' . esc_attr($text_tag); ?> class="qodef-st-text" <?php echo eiddo_qodef_get_inline_style($text_styles) . '>';
            echo wp_kses($text, array('br' => true));
            echo '</' . esc_attr($text_tag) . '>';
        } ?>
    </div>
</div>