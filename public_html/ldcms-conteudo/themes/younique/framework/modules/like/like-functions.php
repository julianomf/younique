<?php

if ( ! function_exists( 'eiddo_qodef_like' ) ) {
	/**
	 * Returns EiddoQodefLike instance
	 *
	 * @return EiddoQodefLike
	 */
	function eiddo_qodef_like() {
		return EiddoQodefLike::get_instance();
	}
}

function eiddo_qodef_get_like() {
	
	echo wp_kses( eiddo_qodef_like()->add_like(), array(
		'span' => array(
			'class'       => true,
			'aria-hidden' => true,
			'style'       => true,
			'id'          => true
		),
		'i'    => array(
			'class' => true,
			'style' => true,
			'id'    => true
		),
		'a'    => array(
			'href'  => true,
			'class' => true,
			'id'    => true,
			'title' => true,
			'style' => true
		)
	) );
}