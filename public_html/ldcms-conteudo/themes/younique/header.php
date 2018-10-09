<!DOCTYPE html>
<html <?php language_attributes(); ?>>
<head>
	<?php
	/**
	 * eiddo_qodef_header_meta hook
	 *
	 * @see eiddo_qodef_header_meta() - hooked with 10
	 * @see eiddo_qodef_user_scalable_meta - hooked with 10
	 * @see qodef_core_set_open_graph_meta - hooked with 10
	 */
	do_action( 'eiddo_qodef_header_meta' );
	
	wp_head(); ?>	
	
	<!-- Global site tag (gtag.js) - Google Analytics -->
	<script async src="https://www.googletagmanager.com/gtag/js?id=UA-122655212-1"></script>
	<script>
	  window.dataLayer = window.dataLayer || [];
	  function gtag(){dataLayer.push(arguments);}
	  gtag('js', new Date());
	  gtag('config', 'UA-122655212-1');
	</script>
	
	<meta name="google-site-verification" content="uTwgFrJHf9SZYYgw2e4RN554QqwXpWYQqpnDX12gwyU" />
</head>
<body <?php body_class(); ?> itemscope itemtype="http://schema.org/WebPage">
	<?php
	/**
	 * eiddo_qodef_after_body_tag hook
	 *
	 * @see eiddo_qodef_get_side_area() - hooked with 10
	 * @see eiddo_qodef_smooth_page_transitions() - hooked with 10
	 */
	do_action( 'eiddo_qodef_after_body_tag' ); ?>

    <div class="qodef-wrapper">
        <div class="qodef-wrapper-inner">
            <?php
            /**
             * eiddo_qodef_after_wrapper_inner hook
             *
             * @see eiddo_qodef_get_header() - hooked with 10
             * @see eiddo_qodef_get_mobile_header() - hooked with 20
             * @see eiddo_qodef_back_to_top_button() - hooked with 30
             * @see eiddo_qodef_get_header_minimal_full_screen_menu() - hooked with 40
             * @see eiddo_qodef_get_header_bottom_navigation() - hooked with 40
             */
            do_action( 'eiddo_qodef_after_wrapper_inner' ); ?>
	        
            <div class="qodef-content" <?php eiddo_qodef_content_elem_style_attr(); ?>>
                <div class="qodef-content-inner">