<div class="qodef-package-title-holder">
    <h5 class="qodef-package-title"><?php the_title(); ?></h5>
    <?php if($params['featured'] === 'yes') {?>
        <div class="qodef-package-badge"><?php esc_html_e('Featured', 'select-real-estate'); ?></div>
    <?php } ?>
</div>
<div class="qodef-package-content-holder">
	<div class="qodef-package-price">
		<?php
		echo esc_html( $package_values['currency'] );
		echo esc_html( $package_values['price'] );
		?>
	</div>
	<div class="qodef-package-price-dash">
		<span class="qodef-dash"></span>
	</div>
	<div class="qodef-package-content">
		<div class="qodef-package-listings">
		    <span class="qodef-listings-label">
		        <?php esc_html_e( 'Listings Included:', 'select-real-estate' ); ?>
		    </span>
			<span class="qodef-listings-value">
		        <?php echo esc_html( $package_values['listings_inluded'] ); ?>
		    </span>
		</div>
		<div class="qodef-package-featured">
		    <span class="qodef-featured-label">
		        <?php esc_html_e( 'Featured Included:', 'select-real-estate' ); ?>
		    </span>
			<span class="qodef-featured-value">
		        <?php echo esc_html( $package_values['featured_inluded'] ); ?>
		    </span>
		</div>
		<div class="qodef-package-duration">
		    <span class="qodef-duration-label">
		        <?php esc_html_e( 'Duration (months):', 'select-real-estate' ); ?>
		    </span>
			<span class="qodef-duration-value">
		        <?php echo esc_html( $package_values['duration'] ); ?>
		    </span>
		</div>
	</div>
	<div class="qodef-package-action">
		<?php qodef_re_get_package_buy_form(); ?>
	</div>
</div>