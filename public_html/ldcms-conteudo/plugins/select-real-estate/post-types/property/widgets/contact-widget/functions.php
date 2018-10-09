<?php

if ( ! function_exists( 'qodef_re_register_contact_property_widget' ) ) {
    /**
     * Function that register contact property widget
     */
    function qodef_re_register_contact_property_widget( $widgets ) {
        $widgets[] = 'EiddoQodefContactPropertyWidget';

        return $widgets;
    }

    add_filter( 'eiddo_qodef_register_widgets', 'qodef_re_register_contact_property_widget' );
}