<div class="qodef-reviews-list-info qodef-reviews-simple">
    <div class="qodef-reviews-number-wrapper">
        <h5 class="qodef-reviews-summary">
            <span class="qodef-reviews-number">
                <?php echo esc_html($rating_number); ?>
            </span>
            <span class="qodef-reviews-label">
                <?php echo esc_html($rating_label); ?>
            </span>
        </h5>
        <span class="qodef-stars-wrapper">
            <?php foreach($post_ratings as $rating) { ?>
                <span class="qodef-stars-wrapper-inner">
                    <span class="qodef-stars-items">
                        <?php
                        $review_rating = qodef_core_post_average_rating($rating);
                        for ($i = 1; $i <= $review_rating; $i++) { ?>
                            <i class="fa fa-star" aria-hidden="true"></i>
                        <?php } ?>
                    </span>
                    <span class="qodef-stars-label">
                        <?php echo esc_html($rating['label']); ?>
                    </span>
                </span>
            <?php } ?>
        </span>
    </div>
</div>