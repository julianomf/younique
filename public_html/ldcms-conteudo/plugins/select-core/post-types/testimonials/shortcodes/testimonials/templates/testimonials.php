<div class="qodef-testimonial-content qodef-pl-item qodef-item-space" id="qodef-testimonials-<?php echo esc_attr($current_id) ?>">
    <div class="qodef-testimonial-image-author-holder">
        <?php if (has_post_thumbnail()) { ?>
            <div class="qodef-testimonial-image">
                <?php echo get_the_post_thumbnail(get_the_ID(), array(68, 68)); ?>
            </div>
        <?php } ?>
        <div class="qodef-testimonial-author-holder">
            <?php if (!empty($author)) { ?>
                <h5 class="qodef-testimonial-author-name">
                    <?php echo esc_html($author); ?>
                </h5>
                <?php if (!empty($position)) { ?>
                    <h6 class="qodef-testimonials-author-job"><?php echo esc_html($position); ?></h6>
                <?php } ?>
            <?php } ?>
        </div>
    </div>
    <div class="qodef-testimonial-text-holder">
        <?php if (!empty($text)) { ?>
            <p class="qodef-testimonial-text"><?php echo esc_html($text); ?></p>
        <?php } ?>
    </div>
</div>