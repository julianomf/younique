<span class="qodef-stars">
    <?php foreach($post_ratings as $rating) { ?>
        <span class="qodef-stars-wrapper-inner">
            <span class="qodef-stars-items">
                <?php
                $review_rating = qodef_core_post_average_rating($rating);
                for ($i = 1; $i <= $review_rating; $i++) { ?>
                    <i class="fa fa-star" aria-hidden="true"></i>
                <?php } ?>
            </span>
        </span>
    <?php } ?>
</span>