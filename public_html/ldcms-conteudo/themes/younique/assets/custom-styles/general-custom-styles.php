<?php

if(!function_exists('eiddo_qodef_design_styles')) {
    /**
     * Generates general custom styles
     */
    function eiddo_qodef_design_styles() {
	    $font_family = eiddo_qodef_options()->getOptionValue( 'google_fonts' );
	    if ( ! empty( $font_family ) && eiddo_qodef_is_font_option_valid( $font_family ) ) {
		    $font_family_selector = array(
			    'body'
		    );
		    echo eiddo_qodef_dynamic_css( $font_family_selector, array( 'font-family' => eiddo_qodef_get_font_option_val( $font_family ) ) );
	    }

		$first_main_color = eiddo_qodef_options()->getOptionValue('first_color');
        if(!empty($first_main_color)) {
            $color_selector = array(
	            'a:hover',
	            'blockquote',
	            'h1 a:hover',
	            'h2 a:hover',
	            'h3 a:hover',
	            'h4 a:hover',
	            'h5 a:hover',
	            'h6 a:hover',
	            'p a:hover',
	            '.qodef-eiddo-loader .qodef-eiddo-loader-text-mask-wrapper .qodef-eiddo-loader-text-suffix',
	            '.qodef-comment-holder .qodef-comment-text .comment-edit-link:hover',
	            '.qodef-comment-holder .qodef-comment-text .comment-reply-link:hover',
	            '.qodef-comment-holder .qodef-comment-text .replay:hover',
	            '.qodef-comment-holder .qodef-comment-text #cancel-comment-reply-link:hover',
	            'span.wpcf7-not-valid-tip',
	            '.qodef-subscribe span.wpcf7-not-valid-tip',
	            'footer .widget a:hover',
	            'footer .widget ul li a:hover',
	            'footer .widget #wp-calendar tfoot a:hover',
	            'footer .widget.widget_search .input-holder button:hover',
	            'footer .widget.qodef-blog-list-widget ul li a:hover',
	            'footer .widget.widget_products ul li a:hover',
	            'footer .widget.widget_recent_reviews ul li a:hover',
	            'footer .widget.widget_recently_viewed_products ul li a:hover',
	            'footer .widget.widget_top_rated_products ul li a:hover',
	            '.qodef-side-menu .widget a:hover',
	            '.qodef-side-menu .widget ul li a:hover',
	            '.qodef-side-menu .widget #wp-calendar tfoot a:hover',
	            '.qodef-side-menu .widget.widget_search .input-holder button:hover',
	            '.qodef-side-menu .widget.qodef-blog-list-widget ul li a:hover',
	            '.qodef-side-menu .widget.widget_products ul li a:hover',
	            '.qodef-side-menu .widget.widget_recent_reviews ul li a:hover',
	            '.qodef-side-menu .widget.widget_recently_viewed_products ul li a:hover',
	            '.qodef-side-menu .widget.widget_top_rated_products ul li a:hover',
	            '.wpb_widgetised_column .widget a:hover',
	            'aside.qodef-sidebar .widget a:hover',
	            '.wpb_widgetised_column .widget ul li a:hover',
	            'aside.qodef-sidebar .widget ul li a:hover',
	            '.wpb_widgetised_column .widget #wp-calendar tfoot a:hover',
	            'aside.qodef-sidebar .widget #wp-calendar tfoot a:hover',
	            '.wpb_widgetised_column .widget.widget_search .input-holder button:hover',
	            'aside.qodef-sidebar .widget.widget_search .input-holder button:hover',
	            '.wpb_widgetised_column .widget.qodef-blog-list-widget ul li a:hover',
	            '.wpb_widgetised_column .widget.widget_products ul li a:hover',
	            '.wpb_widgetised_column .widget.widget_recent_reviews ul li a:hover',
	            '.wpb_widgetised_column .widget.widget_recently_viewed_products ul li a:hover',
	            '.wpb_widgetised_column .widget.widget_top_rated_products ul li a:hover',
	            'aside.qodef-sidebar .widget.qodef-blog-list-widget ul li a:hover',
	            'aside.qodef-sidebar .widget.widget_products ul li a:hover',
	            'aside.qodef-sidebar .widget.widget_recent_reviews ul li a:hover',
	            'aside.qodef-sidebar .widget.widget_recently_viewed_products ul li a:hover',
	            'aside.qodef-sidebar .widget.widget_top_rated_products ul li a:hover',
	            '.widget a:hover',
	            '.widget ul li a:hover',
	            '.widget #wp-calendar tfoot a:hover',
	            '.widget.widget_search .input-holder button:hover',
	            '.widget.qodef-blog-list-widget ul li a:hover',
	            '.widget.widget_products ul li a:hover',
	            '.widget.widget_recent_reviews ul li a:hover',
	            '.widget.widget_recently_viewed_products ul li a:hover',
	            '.widget.widget_top_rated_products ul li a:hover',
	            'footer .qodef-icon-widget-holder:hover',
	            '.widget.widget_qodef_twitter_widget .qodef-twitter-widget.qodef-twitter-slider li .qodef-tweet-text a',
	            '.widget.widget_qodef_twitter_widget .qodef-twitter-widget.qodef-twitter-slider li .qodef-tweet-text span',
	            '.widget.widget_qodef_twitter_widget .qodef-twitter-widget.qodef-twitter-standard li .qodef-tweet-text a:hover',
	            '.widget.widget_qodef_twitter_widget .qodef-twitter-widget.qodef-twitter-slider li .qodef-twitter-icon i',
	            '.widget_icl_lang_sel_widget .wpml-ls-legacy-dropdown .wpml-ls-item-toggle:hover',
	            '.widget_icl_lang_sel_widget .wpml-ls-legacy-dropdown-click .wpml-ls-item-toggle:hover',
	            '.qodef-blog-holder article.sticky .qodef-post-title a',
	            '.qodef-blog-holder article .qodef-post-info-top>div a:hover',
	            '.qodef-blog-holder article .qodef-post-info-bottom .qodef-post-info-bottom-right>div a:hover',
	            '.qodef-bl-standard-pagination ul li.qodef-bl-pag-active a',
	            '.qodef-blog-pagination ul li a.qodef-pag-active',
	            '.qodef-author-description .qodef-author-description-text-holder .qodef-author-name a:hover',
	            '.qodef-author-description .qodef-author-description-text-holder .qodef-author-social-icons a:hover',
	            '.qodef-single-links-pages .qodef-single-links-pages-inner>a:hover',
	            '.qodef-single-links-pages .qodef-single-links-pages-inner>span',
	            '.qodef-blog-list-holder .qodef-bli-info>div a:hover',
	            '.qodef-blog-list-holder .qodef-bli-info-bottom>div a:hover',
	            '.qodef-blog-list-holder.qodef-bl-minimal .qodef-post-info-date a:hover',
	            '.qodef-blog-list-holder.qodef-bl-simple .qodef-bli-content .qodef-post-info-date a:hover',
	            'nav.qodef-fullscreen-menu ul li ul li.current-menu-ancestor>a',
	            'nav.qodef-fullscreen-menu ul li ul li.current-menu-item>a',
	            'nav.qodef-fullscreen-menu>ul>li.qodef-active-item>a',
	            '.qodef-search-page-holder article.sticky .qodef-post-title a',
	            '.qodef-search-cover .qodef-search-close:hover',
	            '.qodef-side-menu-button-opener.opened',
	            '.qodef-side-menu-button-opener:hover',
	            '.qodef-comment-form-rating .qodef-comment-rating-box .qodef-star-rating.active',
	            '.qodef-reviews-per-criteria .qodef-item-reviews-average-rating',
	            '.qodef-reviews-stars .qodef-stars .qodef-stars-items',
	            '.qodef-comment-list .qodef-rating-value',
	            '.qodef-banner-holder .qodef-banner-link-text .qodef-banner-link-hover span',
	            '.qodef-btn.qodef-btn-outline',
	            '.qodef-price-table .qodef-pt-inner ul li.qodef-pt-prices .qodef-pt-price',
	            '.qodef-social-share-holder.qodef-dropdown .qodef-social-share-dropdown-opener:hover',
	            '.qodef-woo-single-page .woocommerce-tabs #reviews .comment-respond .stars a.active:after',
	            '.qodef-woo-single-page .woocommerce-tabs #reviews .comment-respond .stars a:before',
	            '.woocommerce .star-rating',
	            '.woocommerce-pagination .page-numbers li a.current',
	            '.woocommerce-pagination .page-numbers li a:hover',
	            '.woocommerce-pagination .page-numbers li span.current',
	            '.woocommerce-pagination .page-numbers li span:hover',
	            '.woocommerce-page .qodef-content .qodef-quantity-buttons .qodef-quantity-minus:hover',
	            '.woocommerce-page .qodef-content .qodef-quantity-buttons .qodef-quantity-plus:hover',
	            'div.woocommerce .qodef-quantity-buttons .qodef-quantity-minus:hover',
	            'div.woocommerce .qodef-quantity-buttons .qodef-quantity-plus:hover',
	            'ul.products>.product .price',
	            '.widget.woocommerce.widget_layered_nav ul li.chosen a',
	            '.page-template-user-dashboard .qodef-membership-dashboard-nav-holder .qodef-membership-dashboard-nav li a:hover',
	            '.page-template-user-dashboard .qodef-membership-dashboard-nav-holder .qodef-membership-dashboard-nav li a:hover h6',
	            '.page-template-user-dashboard .qodef-membership-dashboard-nav-holder .qodef-membership-dashboard-nav li a:hover span',
	            '.qodef-login-register-content.ui-tabs .qodef-login-action-btn',
	            '.qodef-sidebar .qodef-login-register-widget.qodef-user-not-logged-in .qodef-login-opener:hover',
	            'footer .qodef-login-register-widget.qodef-user-not-logged-in .qodef-login-opener:hover',
	            '.qodef-menu-area .qodef-login-register-widget.qodef-user-logged-in .qodef-login-dropdown li:hover',
	            '.qodef-side-menu .qodef-login-register-widget.qodef-user-not-logged-in .qodef-login-opener:hover',
	            '.qodef-top-bar .qodef-login-register-widget.qodef-user-logged-in .qodef-login-dropdown li:hover',
	            '.qodef-package-list-holder .qodef-package-price',
	            '.qodef-re-author-holder .qodef-re-author-footer.qodef-author-social .qodef-contact-social-icons a:hover',
	            '.qodef-property-single-holder .qodef-property-attachment a',
	            '.qodef-property-price-info-holder .qodef-property-price',
	            '.qodef-property-tags .qodef-tag-item a:hover',
	            '.qodef-property-title-section .qodef-property-stars',
	            '.qodef-property-title-section .qodef-title-inline-part .qodef-stars',
	            '.widget.qodef-contact-property-widget .qodef-contact-social-icons a:hover',
	            '.widget.qodef-recently-viewed-property-widget article:hover .qodef-pli-title a',
	            '.qodef-re-compare-popup #qodef-re-popup-items li>div .qodef-ci-price',
	            '.qodef-re-compare-items-holder.qodef-items-standard .qodef-ci-item .qodef-ci-price',
	            '.qodef-pl-standard-pagination ul li.qodef-pl-pag-active a',
	            '.qodef-property-list-holder .qodef-property-list-filter-part .qodef-filter-type-holder .qodef-property-type-list-holder .qodef-taxonomy-icon',
	            '.qodef-property-list-holder.qodef-pl-layout-info-over .qodef-pl-item .qodef-item-featured',
	            '.qodef-property-list-holder.qodef-pl-layout-simple .qodef-pl-item .qodef-property-price',
	            '.qodef-property-search-holder .qodef-search-type-section .qodef-property-type-list-holder .qodef-ptl-item.active .qodef-ptl-item-title',
	            '.dsidx-results .dsidx-prop-summary .dsidx-prop-title b',
	            '.dsidx-results .dsidx-prop-summary .dsidx-prop-title b a:hover',
	            '#ihf-main-container a:hover',
	            '#ihf-main-container .ihf-listing-detail h4.ihf-price .ihf-sold-price',
	            '.qodef-map-marker-holder .qodef-info-window-inner>a:hover~.qodef-info-window-details h5',
	            '.qodef-cluster-marker:hover .qodef-cluster-marker-inner .qodef-cluster-marker-number',
	            '.qodef-agency-agent-list .qodef-aal-item-social .qodef-icon-shortcode a:hover'
            );

	        $color_important_selector = array(
		        
	        );

            $background_color_selector = array(
	            '.qodef-st-loader .pulse',
	            '.qodef-st-loader .double_pulse .double-bounce1',
	            '.qodef-st-loader .double_pulse .double-bounce2',
	            '.qodef-st-loader .cube',
	            '.qodef-st-loader .rotating_cubes .cube1',
	            '.qodef-st-loader .rotating_cubes .cube2',
	            '.qodef-st-loader .stripes>div',
	            '.qodef-st-loader .wave>div',
	            '.qodef-st-loader .two_rotating_circles .dot1',
	            '.qodef-st-loader .two_rotating_circles .dot2',
	            '.qodef-st-loader .five_rotating_circles .container1>div',
	            '.qodef-st-loader .five_rotating_circles .container2>div',
	            '.qodef-st-loader .five_rotating_circles .container3>div',
	            '.qodef-st-loader .atom .ball-1:before',
	            '.qodef-st-loader .atom .ball-2:before',
	            '.qodef-st-loader .atom .ball-3:before',
	            '.qodef-st-loader .atom .ball-4:before',
	            '.qodef-st-loader .clock .ball:before',
	            '.qodef-st-loader .mitosis .ball',
	            '.qodef-st-loader .lines .line1',
	            '.qodef-st-loader .lines .line2',
	            '.qodef-st-loader .lines .line3',
	            '.qodef-st-loader .lines .line4',
	            '.qodef-st-loader .fussion .ball',
	            '.qodef-st-loader .fussion .ball-1',
	            '.qodef-st-loader .fussion .ball-2',
	            '.qodef-st-loader .fussion .ball-3',
	            '.qodef-st-loader .fussion .ball-4',
	            '.qodef-st-loader .wave_circles .ball',
	            '.qodef-st-loader .pulse_circles .ball',
	            'div.wpcf7-acceptance-missing',
	            'div.wpcf7-validation-errors',
	            '#submit_comment',
	            '.post-password-form input[type=submit]',
	            'input.wpcf7-form-control.wpcf7-submit',
	            '#submit_comment:hover',
	            '.post-password-form input[type=submit]:hover',
	            'input.wpcf7-form-control.wpcf7-submit:hover',
	            '#qodef-back-to-top>span',
	            '.qodef-social-icons-group-widget.qodef-square-icons .qodef-social-icon-widget-holder:hover',
	            '.qodef-social-icons-group-widget.qodef-square-icons.qodef-light-skin .qodef-social-icon-widget-holder:hover',
	            '.qodef-blog-holder article.format-link .qodef-post-mark',
	            '.qodef-blog-holder article.format-quote .qodef-post-mark',
	            '.qodef-blog-holder article.format-audio .qodef-blog-audio-holder .mejs-container .mejs-controls>.mejs-time-rail .mejs-time-total .mejs-time-current',
	            '.qodef-blog-holder article.format-audio .qodef-blog-audio-holder .mejs-container .mejs-controls>a.mejs-horizontal-volume-slider .mejs-horizontal-volume-current',
	            '.qodef-search-fade .qodef-fullscreen-with-sidebar-search-holder .qodef-fullscreen-search-table',
	            '.qodef-accordion-holder.qodef-ac-boxed .qodef-accordion-title.ui-state-active',
	            '.qodef-accordion-holder.qodef-ac-boxed .qodef-accordion-title.ui-state-hover',
	            '.qodef-accordion-holder.qodef-ac-boxed.qodef-skin-white .qodef-accordion-title.ui-state-active',
	            '.qodef-accordion-holder.qodef-ac-boxed.qodef-skin-white .qodef-accordion-title.ui-state-hover',
	            '.qodef-btn.qodef-btn-solid',
	            '.qodef-icon-shortcode.qodef-circle',
	            '.qodef-icon-shortcode.qodef-dropcaps.qodef-circle',
	            '.qodef-icon-shortcode.qodef-square',
	            '.qodef-progress-bar .qodef-pb-content-holder .qodef-pb-content',
	            '.woocommerce-page .qodef-content .wc-forward:not(.added_to_cart):not(.checkout-button)',
	            '.woocommerce-page .qodef-content a.added_to_cart',
	            '.woocommerce-page .qodef-content a.button',
	            '.woocommerce-page .qodef-content button[type=submit]:not(.qodef-woo-search-widget-button)',
	            '.woocommerce-page .qodef-content input[type=submit]',
	            'div.woocommerce .wc-forward:not(.added_to_cart):not(.checkout-button)',
	            'div.woocommerce a.added_to_cart',
	            'div.woocommerce a.button',
	            'div.woocommerce button[type=submit]:not(.qodef-woo-search-widget-button)',
	            'div.woocommerce input[type=submit]',
	            '.woocommerce-page .qodef-content .wc-forward:not(.added_to_cart):not(.checkout-button):hover',
	            '.woocommerce-page .qodef-content a.added_to_cart:hover',
	            '.woocommerce-page .qodef-content a.button:hover',
	            '.woocommerce-page .qodef-content button[type=submit]:not(.qodef-woo-search-widget-button):hover',
	            '.woocommerce-page .qodef-content input[type=submit]:hover',
	            'div.woocommerce .wc-forward:not(.added_to_cart):not(.checkout-button):hover',
	            'div.woocommerce a.added_to_cart:hover',
	            'div.woocommerce a.button:hover',
	            'div.woocommerce button[type=submit]:not(.qodef-woo-search-widget-button):hover',
	            'div.woocommerce input[type=submit]:hover',
	            '.qodef-shopping-cart-dropdown .qodef-cart-bottom .qodef-checkout',
	            '.qodef-shopping-cart-dropdown .qodef-cart-bottom .qodef-view-cart',
	            '.widget.woocommerce.widget_price_filter .price_slider_wrapper .ui-widget-content .ui-slider-handle',
	            '.widget.woocommerce.widget_price_filter .price_slider_wrapper .ui-widget-content .ui-slider-range',
	            '.qodef-dashboard-field-holder .qodef-checkbox-style .qodef-checkbox-wrapper input[type=checkbox]+label .qodef-label-view:after',
	            '.qodef-login-register-content.ui-tabs ul li.ui-state-active',
	            '.qodef-property-list-holder .qodef-property-list-filter-part .qodef-filter-features-holder .qodef-feature-item input[type=checkbox]+label .qodef-label-view:after',
	            '.qodef-property-enquiry-inner .qodef-property-enquiry-close',
	            '.qodef-property-title-section .qodef-property-statuses',
	            '.qodef-re-compare-popup #qodef-re-popup-items li>div .qodef-ci-statuses',
	            '.qodef-re-compare-items-holder.qodef-items-standard .qodef-ci-item .qodef-ci-statuses',
	            '.qodef-property-list-holder .qodef-property-list-filter-part .qodef-range-slider .ui-slider-handle',
	            '.qodef-property-list-holder.qodef-pl-layout-info-over .qodef-pl-item .qodef-property-statuses',
	            '.qodef-property-list-holder.qodef-pl-layout-standard .qodef-pl-item .qodef-property-statuses',
	            '.dsidx-resp-search-box input[type=submit]',
	            '.dsidx-resp-search-box input[type=submit]:hover',
	            '#dsidx #dsidx-listings li.dsidx-listing-container .dsidx-data .dsidx-primary-data .dsidx-price',
	            '.dsidx-details #dsidx-header #dsidx-primary-data #dsidx-price td',
	            '.dsidx-details #dsidx-contact-form #dsidx-contact-form-submit',
	            '.dsidx-details #dsidx-contact-form #dsidx-contact-form-submit:hover',
	            '.widget.dsidx-widget-single-listing-wrap .dsidx-widget-single-listing .dsidx-widget-single-listing-meta .dsidx-widget-single-listing-price',
	            '#ihf-main-container a.btn.btn-default:not(.dropdown-toggle)',
	            '#ihf-main-container a.btn.btn-primary',
	            '#ihf-main-container button.btn.btn-default:not(.dropdown-toggle)',
	            '#ihf-main-container button.btn.btn-primary',
	            '#ihf-main-container a.btn.btn-default:not(.dropdown-toggle):hover',
	            '#ihf-main-container a.btn.btn-primary:hover',
	            '#ihf-main-container button.btn.btn-default:not(.dropdown-toggle):hover',
	            '#ihf-main-container button.btn.btn-primary:hover',
	            '#ihf-main-container .btn-group.open>.dropdown-menu>.active a',
	            '#ihf-main-container .btn-group.open>.dropdown-menu>li>a:hover',
	            '#ihf-main-container #ihf-main-search-form #ihf-search-location-tab .ihf-one-selectedArea button',
	            '#ihf-main-container #ihf-main-search-form #ihf-search-location-tab #areaPickerExpandAllCloseButton span',
	            '#ihf-main-container #ihf-main-search-form #ihf-search-location-tab #areaPickerExpandAllCloseButton:hover span',
	            '#ihf-main-container #ihf-main-search-form #ihf-search-location-tab .areaPickerExpandAllElement>div',
	            '#ihf-main-container #ihf-main-search-form #ihf-search-location-tab .areaPickerExpandAllElement>div.areaSelected',
	            '#ihf-main-container #ihf-main-search-form #ihf-search-location-tab .areaPickerExpandAllElement>div.autocompleteMouseOver',
	            '#ihf-main-container .title-bar-1',
	            '#ihf-main-container .ihf-grid-result .ihf-map-icon',
	            '#ihf-main-container .ihf-result.row .ihf-map-icon'
            );
	
	        $background_color_important_selector = array(
		        '.qodef-btn.qodef-btn-outline:not(.qodef-btn-custom-hover-bg):hover'
	        );

            $border_color_selector = array(
	            '.qodef-st-loader .pulse_circles .ball',
	            '.qodef-owl-slider+.qodef-slider-thumbnail>.qodef-slider-thumbnail-item.active img',
	            '#qodef-back-to-top>span',
	            '.qodef-btn.qodef-btn-outline',
	            '.qodef-property-tags .qodef-tag-item a:hover'
            );
	
	        $border_color_important_selector = array(
		        '.qodef-btn.qodef-btn-outline:not(.qodef-btn-custom-border-hover):hover'
	        );
	
	        $fill_color_selector = array(
	        	'.qodef-cluster-marker .qodef-cluster-marker-inner svg path',
		        '.qodef-map-marker-holder .qodef-map-marker .qodef-map-marker-inner svg path'
	        );

            echo eiddo_qodef_dynamic_css($color_selector, array('color' => $first_main_color));
	        echo eiddo_qodef_dynamic_css($color_important_selector, array('color' => $first_main_color.'!important'));
	        echo eiddo_qodef_dynamic_css($background_color_selector, array('background-color' => $first_main_color));
	        echo eiddo_qodef_dynamic_css($background_color_important_selector, array('background-color' => $first_main_color.'!important'));
	        echo eiddo_qodef_dynamic_css($border_color_selector, array('border-color' => $first_main_color));
	        echo eiddo_qodef_dynamic_css($border_color_important_selector, array('border-color' => $first_main_color.'!important'));
	
	        echo eiddo_qodef_dynamic_css($fill_color_selector, array('fill' => $first_main_color));
        }
	
	    $page_background_color = eiddo_qodef_options()->getOptionValue( 'page_background_color' );
	    if ( ! empty( $page_background_color ) ) {
		    $background_color_selector = array(
			    'body',
			    '.qodef-content'
		    );
		    echo eiddo_qodef_dynamic_css( $background_color_selector, array( 'background-color' => $page_background_color ) );
	    }
	
	    $selection_color = eiddo_qodef_options()->getOptionValue( 'selection_color' );
	    if ( ! empty( $selection_color ) ) {
		    echo eiddo_qodef_dynamic_css( '::selection', array( 'background' => $selection_color ) );
		    echo eiddo_qodef_dynamic_css( '::-moz-selection', array( 'background' => $selection_color ) );
	    }
	
	    $preload_background_styles = array();
	
	    if ( eiddo_qodef_options()->getOptionValue( 'preload_pattern_image' ) !== "" ) {
		    $preload_background_styles['background-image'] = 'url(' . eiddo_qodef_options()->getOptionValue( 'preload_pattern_image' ) . ') !important';
	    }
	
	    echo eiddo_qodef_dynamic_css( '.qodef-preload-background', $preload_background_styles );
    }

    add_action('eiddo_qodef_style_dynamic', 'eiddo_qodef_design_styles');
}

if ( ! function_exists( 'eiddo_qodef_content_styles' ) ) {
	function eiddo_qodef_content_styles() {
		$content_style = array();
		
		$padding_top = eiddo_qodef_options()->getOptionValue( 'content_top_padding' );
		if ( $padding_top !== '' ) {
			$content_style['padding-top'] = eiddo_qodef_filter_px( $padding_top ) . 'px';
		}
		
		$content_selector = array(
			'.qodef-content .qodef-content-inner > .qodef-full-width > .qodef-full-width-inner',
		);
		
		echo eiddo_qodef_dynamic_css( $content_selector, $content_style );
		
		$content_style_in_grid = array();
		
		$padding_top_in_grid = eiddo_qodef_options()->getOptionValue( 'content_top_padding_in_grid' );
		if ( $padding_top_in_grid !== '' ) {
			$content_style_in_grid['padding-top'] = eiddo_qodef_filter_px( $padding_top_in_grid ) . 'px';
		}
		
		$content_selector_in_grid = array(
			'.qodef-content .qodef-content-inner > .qodef-container > .qodef-container-inner',
		);
		
		echo eiddo_qodef_dynamic_css( $content_selector_in_grid, $content_style_in_grid );
	}
	
	add_action( 'eiddo_qodef_style_dynamic', 'eiddo_qodef_content_styles' );
}

if ( ! function_exists( 'eiddo_qodef_h1_styles' ) ) {
	function eiddo_qodef_h1_styles() {
		$margin_top    = eiddo_qodef_options()->getOptionValue( 'h1_margin_top' );
		$margin_bottom = eiddo_qodef_options()->getOptionValue( 'h1_margin_bottom' );
		
		$item_styles = eiddo_qodef_get_typography_styles( 'h1' );
		
		if ( $margin_top !== '' ) {
			$item_styles['margin-top'] = eiddo_qodef_filter_px( $margin_top ) . 'px';
		}
		if ( $margin_bottom !== '' ) {
			$item_styles['margin-bottom'] = eiddo_qodef_filter_px( $margin_bottom ) . 'px';
		}
		
		$item_selector = array(
			'h1'
		);
		
		if ( ! empty( $item_styles ) ) {
			echo eiddo_qodef_dynamic_css( $item_selector, $item_styles );
		}
	}
	
	add_action( 'eiddo_qodef_style_dynamic', 'eiddo_qodef_h1_styles' );
}

if ( ! function_exists( 'eiddo_qodef_h2_styles' ) ) {
	function eiddo_qodef_h2_styles() {
		$margin_top    = eiddo_qodef_options()->getOptionValue( 'h2_margin_top' );
		$margin_bottom = eiddo_qodef_options()->getOptionValue( 'h2_margin_bottom' );
		
		$item_styles = eiddo_qodef_get_typography_styles( 'h2' );
		
		if ( $margin_top !== '' ) {
			$item_styles['margin-top'] = eiddo_qodef_filter_px( $margin_top ) . 'px';
		}
		if ( $margin_bottom !== '' ) {
			$item_styles['margin-bottom'] = eiddo_qodef_filter_px( $margin_bottom ) . 'px';
		}
		
		$item_selector = array(
			'h2'
		);
		
		if ( ! empty( $item_styles ) ) {
			echo eiddo_qodef_dynamic_css( $item_selector, $item_styles );
		}
	}
	
	add_action( 'eiddo_qodef_style_dynamic', 'eiddo_qodef_h2_styles' );
}

if ( ! function_exists( 'eiddo_qodef_h3_styles' ) ) {
	function eiddo_qodef_h3_styles() {
		$margin_top    = eiddo_qodef_options()->getOptionValue( 'h3_margin_top' );
		$margin_bottom = eiddo_qodef_options()->getOptionValue( 'h3_margin_bottom' );
		
		$item_styles = eiddo_qodef_get_typography_styles( 'h3' );
		
		if ( $margin_top !== '' ) {
			$item_styles['margin-top'] = eiddo_qodef_filter_px( $margin_top ) . 'px';
		}
		if ( $margin_bottom !== '' ) {
			$item_styles['margin-bottom'] = eiddo_qodef_filter_px( $margin_bottom ) . 'px';
		}
		
		$item_selector = array(
			'h3'
		);
		
		if ( ! empty( $item_styles ) ) {
			echo eiddo_qodef_dynamic_css( $item_selector, $item_styles );
		}
	}
	
	add_action( 'eiddo_qodef_style_dynamic', 'eiddo_qodef_h3_styles' );
}

if ( ! function_exists( 'eiddo_qodef_h4_styles' ) ) {
	function eiddo_qodef_h4_styles() {
		$margin_top    = eiddo_qodef_options()->getOptionValue( 'h4_margin_top' );
		$margin_bottom = eiddo_qodef_options()->getOptionValue( 'h4_margin_bottom' );
		
		$item_styles = eiddo_qodef_get_typography_styles( 'h4' );
		
		if ( $margin_top !== '' ) {
			$item_styles['margin-top'] = eiddo_qodef_filter_px( $margin_top ) . 'px';
		}
		if ( $margin_bottom !== '' ) {
			$item_styles['margin-bottom'] = eiddo_qodef_filter_px( $margin_bottom ) . 'px';
		}
		
		$item_selector = array(
			'h4'
		);
		
		if ( ! empty( $item_styles ) ) {
			echo eiddo_qodef_dynamic_css( $item_selector, $item_styles );
		}
	}
	
	add_action( 'eiddo_qodef_style_dynamic', 'eiddo_qodef_h4_styles' );
}

if ( ! function_exists( 'eiddo_qodef_h5_styles' ) ) {
	function eiddo_qodef_h5_styles() {
		$margin_top    = eiddo_qodef_options()->getOptionValue( 'h5_margin_top' );
		$margin_bottom = eiddo_qodef_options()->getOptionValue( 'h5_margin_bottom' );
		
		$item_styles = eiddo_qodef_get_typography_styles( 'h5' );
		
		if ( $margin_top !== '' ) {
			$item_styles['margin-top'] = eiddo_qodef_filter_px( $margin_top ) . 'px';
		}
		if ( $margin_bottom !== '' ) {
			$item_styles['margin-bottom'] = eiddo_qodef_filter_px( $margin_bottom ) . 'px';
		}
		
		$item_selector = array(
			'h5'
		);
		
		if ( ! empty( $item_styles ) ) {
			echo eiddo_qodef_dynamic_css( $item_selector, $item_styles );
		}
	}
	
	add_action( 'eiddo_qodef_style_dynamic', 'eiddo_qodef_h5_styles' );
}

if ( ! function_exists( 'eiddo_qodef_h6_styles' ) ) {
	function eiddo_qodef_h6_styles() {
		$margin_top    = eiddo_qodef_options()->getOptionValue( 'h6_margin_top' );
		$margin_bottom = eiddo_qodef_options()->getOptionValue( 'h6_margin_bottom' );
		
		$item_styles = eiddo_qodef_get_typography_styles( 'h6' );
		
		if ( $margin_top !== '' ) {
			$item_styles['margin-top'] = eiddo_qodef_filter_px( $margin_top ) . 'px';
		}
		if ( $margin_bottom !== '' ) {
			$item_styles['margin-bottom'] = eiddo_qodef_filter_px( $margin_bottom ) . 'px';
		}
		
		$item_selector = array(
			'h6'
		);
		
		if ( ! empty( $item_styles ) ) {
			echo eiddo_qodef_dynamic_css( $item_selector, $item_styles );
		}
	}
	
	add_action( 'eiddo_qodef_style_dynamic', 'eiddo_qodef_h6_styles' );
}

if ( ! function_exists( 'eiddo_qodef_text_styles' ) ) {
	function eiddo_qodef_text_styles() {
		$item_styles = eiddo_qodef_get_typography_styles( 'text' );
		
		$item_selector = array(
			'p'
		);
		
		if ( ! empty( $item_styles ) ) {
			echo eiddo_qodef_dynamic_css( $item_selector, $item_styles );
		}
	}
	
	add_action( 'eiddo_qodef_style_dynamic', 'eiddo_qodef_text_styles' );
}

if ( ! function_exists( 'eiddo_qodef_link_styles' ) ) {
	function eiddo_qodef_link_styles() {
		$link_styles      = array();
		$link_color       = eiddo_qodef_options()->getOptionValue( 'link_color' );
		$link_font_style  = eiddo_qodef_options()->getOptionValue( 'link_fontstyle' );
		$link_font_weight = eiddo_qodef_options()->getOptionValue( 'link_fontweight' );
		$link_decoration  = eiddo_qodef_options()->getOptionValue( 'link_fontdecoration' );
		
		if ( ! empty( $link_color ) ) {
			$link_styles['color'] = $link_color;
		}
		if ( ! empty( $link_font_style ) ) {
			$link_styles['font-style'] = $link_font_style;
		}
		if ( ! empty( $link_font_weight ) ) {
			$link_styles['font-weight'] = $link_font_weight;
		}
		if ( ! empty( $link_decoration ) ) {
			$link_styles['text-decoration'] = $link_decoration;
		}
		
		$link_selector = array(
			'a',
			'p a'
		);
		
		if ( ! empty( $link_styles ) ) {
			echo eiddo_qodef_dynamic_css( $link_selector, $link_styles );
		}
	}
	
	add_action( 'eiddo_qodef_style_dynamic', 'eiddo_qodef_link_styles' );
}

if ( ! function_exists( 'eiddo_qodef_link_hover_styles' ) ) {
	function eiddo_qodef_link_hover_styles() {
		$link_hover_styles     = array();
		$link_hover_color      = eiddo_qodef_options()->getOptionValue( 'link_hovercolor' );
		$link_hover_decoration = eiddo_qodef_options()->getOptionValue( 'link_hover_fontdecoration' );
		
		if ( ! empty( $link_hover_color ) ) {
			$link_hover_styles['color'] = $link_hover_color;
		}
		if ( ! empty( $link_hover_decoration ) ) {
			$link_hover_styles['text-decoration'] = $link_hover_decoration;
		}
		
		$link_hover_selector = array(
			'a:hover',
			'p a:hover'
		);
		
		if ( ! empty( $link_hover_styles ) ) {
			echo eiddo_qodef_dynamic_css( $link_hover_selector, $link_hover_styles );
		}
		
		$link_heading_hover_styles = array();
		
		if ( ! empty( $link_hover_color ) ) {
			$link_heading_hover_styles['color'] = $link_hover_color;
		}
		
		$link_heading_hover_selector = array(
			'h1 a:hover',
			'h2 a:hover',
			'h3 a:hover',
			'h4 a:hover',
			'h5 a:hover',
			'h6 a:hover'
		);
		
		if ( ! empty( $link_heading_hover_styles ) ) {
			echo eiddo_qodef_dynamic_css( $link_heading_hover_selector, $link_heading_hover_styles );
		}
	}
	
	add_action( 'eiddo_qodef_style_dynamic', 'eiddo_qodef_link_hover_styles' );
}

if ( ! function_exists( 'eiddo_qodef_smooth_page_transition_styles' ) ) {
	function eiddo_qodef_smooth_page_transition_styles( $style ) {
		$id            = eiddo_qodef_get_page_id();
		$loader_style  = array();
		$current_style = '';
		
		$background_color = eiddo_qodef_get_meta_field_intersect( 'smooth_pt_bgnd_color', $id );
		if ( ! empty( $background_color ) ) {
			$loader_style['background-color'] = $background_color;
		}
		
		$loader_selector = array(
			'.qodef-smooth-transition-loader'
		);
		
		if ( ! empty( $loader_style ) ) {
			$current_style .= eiddo_qodef_dynamic_css( $loader_selector, $loader_style );
		}
		
		$spinner_style = array();
		$spinner_color = eiddo_qodef_get_meta_field_intersect( 'smooth_pt_spinner_color', $id );
		if ( ! empty( $spinner_color ) ) {
			$spinner_style['background-color'] = $spinner_color;
		}
		
		$spinner_selectors = array(
			'.qodef-st-loader .qodef-rotate-circles > div',
			'.qodef-st-loader .pulse',
			'.qodef-st-loader .double_pulse .double-bounce1',
			'.qodef-st-loader .double_pulse .double-bounce2',
			'.qodef-st-loader .cube',
			'.qodef-st-loader .rotating_cubes .cube1',
			'.qodef-st-loader .rotating_cubes .cube2',
			'.qodef-st-loader .stripes > div',
			'.qodef-st-loader .wave > div',
			'.qodef-st-loader .two_rotating_circles .dot1',
			'.qodef-st-loader .two_rotating_circles .dot2',
			'.qodef-st-loader .five_rotating_circles .container1 > div',
			'.qodef-st-loader .five_rotating_circles .container2 > div',
			'.qodef-st-loader .five_rotating_circles .container3 > div',
			'.qodef-st-loader .atom .ball-1:before',
			'.qodef-st-loader .atom .ball-2:before',
			'.qodef-st-loader .atom .ball-3:before',
			'.qodef-st-loader .atom .ball-4:before',
			'.qodef-st-loader .clock .ball:before',
			'.qodef-st-loader .mitosis .ball',
			'.qodef-st-loader .lines .line1',
			'.qodef-st-loader .lines .line2',
			'.qodef-st-loader .lines .line3',
			'.qodef-st-loader .lines .line4',
			'.qodef-st-loader .fussion .ball',
			'.qodef-st-loader .fussion .ball-1',
			'.qodef-st-loader .fussion .ball-2',
			'.qodef-st-loader .fussion .ball-3',
			'.qodef-st-loader .fussion .ball-4',
			'.qodef-st-loader .wave_circles .ball',
			'.qodef-st-loader .pulse_circles .ball'
		);
		
		if ( ! empty( $spinner_style ) ) {
			$current_style .= eiddo_qodef_dynamic_css( $spinner_selectors, $spinner_style );
		}
		
		$current_style = $current_style . $style;
		
		return $current_style;
	}
	
	add_filter( 'eiddo_qodef_add_page_custom_style', 'eiddo_qodef_smooth_page_transition_styles' );
}