<?php

if ( ! function_exists( 'eiddo_qodef_set_search_fullscreen_global_option' ) ) {
    /**
     * This function set search type value for search options map
     */
    function eiddo_qodef_set_search_fullscreen_global_option( $search_type_options ) {
        $search_type_options['fullscreen'] = esc_html__( 'Fullscreen', 'eiddo' );

        return $search_type_options;
    }

    add_filter( 'eiddo_qodef_search_type_global_option', 'eiddo_qodef_set_search_fullscreen_global_option' );
}