<?php

if ( ! function_exists( 'qodef_re_register_recently_viewed_property_widget' ) ) {
    /**
     * Function that register recently viewed property widget
     */
    function qodef_re_register_recently_viewed_property_widget( $widgets ) {
        $widgets[] = 'EiddoQodefRecentlyViewedPropertyWidget';

        return $widgets;
    }

    add_filter( 'eiddo_qodef_register_widgets', 'qodef_re_register_recently_viewed_property_widget' );
}