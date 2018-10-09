<?php

if( !function_exists('eiddo_qodef_get_blog_holder_params') ) {
    /**
     * Function that generates params for holders on blog templates
     */
    function eiddo_qodef_get_blog_holder_params($params) {
        $params_list = array();

        $params_list['holder'] = 'qodef-container';
        $params_list['inner'] = 'qodef-container-inner clearfix';

        return $params_list;
    }

    add_filter( 'eiddo_qodef_blog_holder_params', 'eiddo_qodef_get_blog_holder_params' );
}

if( !function_exists('eiddo_qodef_get_blog_single_holder_classes') ) {
    /**
     * Function that generates blog holder classes for single blog page
     */
    function eiddo_qodef_get_blog_single_holder_classes($classes) {
        $sidebar_classes   = array();
        $sidebar_classes[] = 'qodef-grid-large-gutter';
	
	    $classes = $classes . ' ' . implode(' ', $sidebar_classes);
	    
        return $classes;
    }

    add_filter( 'eiddo_qodef_blog_single_holder_classes', 'eiddo_qodef_get_blog_single_holder_classes' );
}

if( !function_exists('eiddo_qodef_blog_part_params') ) {
    function eiddo_qodef_blog_part_params($params) {

        $part_params = array();
        $part_params['title_tag'] = 'h2';
        $part_params['link_tag'] = 'h2';
        $part_params['quote_tag'] = 'h2';

        return array_merge($params, $part_params);
    }

    add_filter( 'eiddo_qodef_blog_part_params', 'eiddo_qodef_blog_part_params' );
}