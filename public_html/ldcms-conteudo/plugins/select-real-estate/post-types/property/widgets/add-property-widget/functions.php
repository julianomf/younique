<?php

if ( ! function_exists( 'qodef_re_register_add_property_widget' ) ) {
    /**
     * Function that register add property widget
     */
    function qodef_re_register_add_property_widget( $widgets ) {
        $widgets[] = 'EiddoQodefAddPropertyWidget';

        return $widgets;
    }

    add_filter( 'eiddo_qodef_register_widgets', 'qodef_re_register_add_property_widget' );
}