<?php
/**
 * Plugin functions
 */

if ( ! function_exists( 'qodef_membership_version_class' ) ) {
	/**
	 * Adds plugin version class to body
	 *
	 * @param $classes
	 *
	 * @return array
	 */
	function qodef_membership_version_class( $classes ) {
		$classes[] = 'qodef-social-login-' . QODE_MEMBERSHIP_VERSION;
		
		return $classes;
	}
	
	add_filter( 'body_class', 'qodef_membership_version_class' );
}

if ( ! function_exists( 'qodef_membership_theme_installed' ) ) {
	/**
	 * Checks whether theme is installed or not
	 * @return bool
	 */
	function qodef_membership_theme_installed() {
		return defined( 'QODE_ROOT' );
	}
}

if ( ! function_exists( 'qodef_membership_get_module_template_part' ) ) {
    /**
     * Loads Shortcode template part.
     *
     * @param $module
     * @param $submodule
     * @param $template
     * @param string $slug
     * @param array $params
     *
     * @see eiddo_qodef_get_template_part()
     * @return string
     */
    function qodef_membership_get_module_template_part( $module, $submodule, $template, $slug = '', $params = array() ) {

        //HTML Content from template
        $html          = '';
        $template_path = QODE_MEMBERSHIP_ABS_PATH . '/modules/' . $module . '/' . $submodule .'/templates';

        $temp = $template_path . '/' . $template;
        if ( is_array( $params ) && count( $params ) ) {
            extract( $params );
        }

        $template = '';

        if (!empty($temp)) {
            if (!empty($slug)) {
                $template = "{$temp}-{$slug}.php";

                if(!file_exists($template)) {
                    $template = $temp.'.php';
                }
            } else {
                $template = $temp.'.php';
            }
        }

        if ( $template ) {
            ob_start();
            include( $template );
            $html = ob_get_clean();
        }

        return $html;
    }
}

if ( ! function_exists( 'qodef_membership_ajax_response' ) ) {
	/**
	 * Ajax response for login and register forms
	 *
	 * @param $status
	 * @param string $message
	 * @param string $redirect
	 * @param null $data
	 */
	function qodef_membership_ajax_response( $status, $message = '', $redirect = '', $data = null ) {
		$response = array(
			'status'   => $status,
			'message'  => $message,
			'redirect' => $redirect,
			'data'     => $data
		);
		
		$response = json_encode( $response );
		
		exit( $response );
	}
}

if ( ! function_exists( 'qodef_membership_ajax_response_message_holder' ) ) {
	/**
	 * Template for ajax response
	 */
	function qodef_membership_ajax_response_message_holder() {
		
		$html = '<div class="qodef-membership-response-holder clearfix"></div>';
		$html .= '<script type="text/template" class="qodef-membership-response-template">
					<div class="qodef-membership-response <%= messageClass %> ">
						<div class="qodef-membership-response-message">
							<p><%= message %></p>
						</div>
					</div>
				</script>';
		
		echo $html;
	}
	
	add_action( 'qodef_membership_action_login_ajax_response', 'qodef_membership_ajax_response_message_holder' );
	
}

if ( ! function_exists( 'qodef_membership_execute_shortcode' ) ) {
	/**
	 * @param $shortcode_tag - shortcode base
	 * @param $atts - shortcode attributes
	 * @param null $content - shortcode content
	 *
	 * @return mixed|string
	 */
	function qodef_membership_execute_shortcode( $shortcode_tag, $atts, $content = null ) {
		global $shortcode_tags;
		
		if ( ! isset( $shortcode_tags[ $shortcode_tag ] ) ) {
			return;
		}

		if ( is_array( $shortcode_tags[ $shortcode_tag ] ) ) {
			$shortcode_array = $shortcode_tags[ $shortcode_tag ];
			
			return call_user_func( array(
				$shortcode_array[0],
				$shortcode_array[1]
			), $atts, $content, $shortcode_tag );
		}
		
		return call_user_func( $shortcode_tags[ $shortcode_tag ], $atts, $content, $shortcode_tag );
	}
}

if ( ! function_exists( 'qodef_membership_kses_img' ) ) {
	/**
	 * Function that does escaping of img html.
	 * It uses wp_kses function with predefined attributes array.
	 * Should be used for escaping img tags in html.
	 * Defines eiddo_qodef_kses_img_atts filter that can be used for changing allowed html attributes
	 *
	 * @see wp_kses()
	 *
	 * @param $content string string to escape
	 *
	 * @return string escaped output
	 */
	function qodef_membership_kses_img( $content ) {
		$img_atts = apply_filters( 'qodef_membership_filter_kses_img_atts', array(
			'src'    => true,
			'alt'    => true,
			'height' => true,
			'width'  => true,
			'class'  => true,
			'id'     => true,
			'title'  => true
		) );
		
		return wp_kses( $content, array(
			'img' => $img_atts
		) );
	}
}