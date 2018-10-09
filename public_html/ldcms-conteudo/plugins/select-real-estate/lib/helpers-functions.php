<?php
if ( ! function_exists( 'qodef_re_get_module_template_part' ) ) {
    /**
     * Loads module template part.
     *
     * @param string $template name of the template to load
     * @param string $slug
     * @param array $params array of parameters to pass to template
     *
     * @return string
     */
    function qodef_re_get_module_template_part( $template, $slug = '', $params = array() ) {
        //HTML Content from template
        $html          = '';
        $template_path = QODE_RE_MODULE_PATH;

        $temp = $template_path . '/' . $template;

        if ( is_array( $params ) && count( $params ) ) {
            extract( $params );
        }

        $template = '';

        if ( ! empty( $temp ) ) {
            if ( ! empty( $slug ) ) {
                $template = "{$temp}-{$slug}.php";

                if ( ! file_exists( $template ) ) {
                    $template = $temp . '.php';
                }
            } else {
                $template = $temp . '.php';
            }
        }

        if ( ! empty( $template ) ) {
            ob_start();
            include( $template );
            $html = ob_get_clean();
        }

        return $html;
    }
}

if(!function_exists('qodef_re_get_cpt_shortcode_module_template_part')) {
	/**
	 * Loads module template part.
	 *
	 * @param string $post_type name of the post type
	 * @param string $shortcode name of the shortcode folder
	 * @param string $template name of the template to load
	 * @param string $slug
	 * @param array $params array of parameters to pass to template
	 * @param array $additional_params array of additional parameters to pass to template
	 *
	 * @return html
	 */
	function qodef_re_get_cpt_shortcode_module_template_part($post_type, $shortcode, $template, $slug = '', $params = array(), $additional_params = array()) {
		
		//HTML Content from template
		$html = '';
		$template_path = QODE_RE_CPT_PATH.'/'.$post_type.'/shortcodes/'.$shortcode.'/'.'templates';
		
		$temp = $template_path.'/'.$template;
		if(is_array($params) && count($params)) {
			extract($params);
		}
		
		if(is_array($additional_params) && count($additional_params)) {
			extract($additional_params);
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
		
		if ($template) {
			ob_start();
			include($template);
			$html = ob_get_clean();
		}
		
		return $html;
	}
}

if ( ! function_exists( 'qodef_re_cpt_single_module_template_part' ) ) {
    /**
     * Loads module template part.
     *
     * @param string $cpt_name name of the cpt folder
     * @param string $template name of the template to load
     * @param string $slug
     * @param array $params array of parameters to pass to template
     *
     * @return html
     */
    function qodef_re_cpt_single_module_template_part( $template, $cpt_name, $slug = '', $params = array() ) {
        //HTML Content from template
        $html          = '';
        $template_path = QODE_RE_CPT_PATH . '/' . $cpt_name;

        $temp = $template_path . '/' . $template;

        if ( is_array( $params ) && count( $params ) ) {
            extract( $params );
        }

        $template = '';

        if ( ! empty( $temp ) ) {
            if ( ! empty( $slug ) ) {
                $template = "{$temp}-{$slug}.php";

                if ( ! file_exists( $template ) ) {
                    $template = $temp . '.php';
                }
            } else {
                $template = $temp . '.php';
            }
        }

        if ( ! empty( $template ) ) {
            ob_start();
            include( $template );
            $html = ob_get_clean();
        }

        return $html;
    }
}

if(!function_exists('qodef_re_get_cpt_single_module_template_part')) {
	/**
	 * Loads module template part.
	 *
	 * @param string $cpt_name name of the cpt folder
	 * @param string $template name of the template to load
	 * @param string $slug
	 * @param array $params array of parameters to pass to template
	 *
	 * @return html
	 */
	function qodef_re_get_cpt_single_module_template_part($template, $cpt_name, $slug = '', $params = array()) {
		
		//HTML Content from template
		$html = '';
		$template_path = QODE_RE_CPT_PATH.'/'.$cpt_name;
		
		$temp = $template_path.'/'.$template;
		
		if(is_array($params) && count($params)) {
			extract($params);
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
		
		if (!empty($template)) {
			ob_start();
			include($template);
			$html = ob_get_clean();
		}
		
		print $html;
	}
}

if(!function_exists('qodef_re_get_shortcode_module_template_part')) {
	/**
	 * Loads module template part.
	 *
	 * @param string $template name of the template to load
	 * @param string $shortcode name of the shortcode folder
	 * @param string $slug
	 * @param array $params array of parameters to pass to template
	 *
	 * @return html
	 */
	function qodef_re_get_shortcode_module_template_part($template, $shortcode, $slug = '', $params = array()) {
		
		//HTML Content from template
		$html          = '';
		$template_path = QODE_RE_SHORTCODES_PATH.'/'.$shortcode;
		
		$temp = $template_path.'/'.$template;
		
		if(is_array($params) && count($params)) {
			extract($params);
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
		
		if ($template) {
			ob_start();
			include($template);
			$html = ob_get_clean();
		}
		
		return $html;
	}
}

if( ! function_exists( 'qodef_re_ajax_status' ) ) {
	/**
	 * Function that return status from ajax functions
	 */
	function qodef_re_ajax_status($status, $message, $data = NULL, $redirect = '') {
		$response = array (
			'status' => $status,
			'message' => $message,
			'data' => $data,
			'redirect' => $redirect
		);

		$output = json_encode($response);

		exit($output);
	}
}

if ( ! function_exists( 'qodef_re_get_countries_list' ) ) {
    function qodef_re_get_countries_list() {
        
        $countries = array(
            'AF' => esc_html__( 'Afghanistan', 'select-real-estate' ),
            'AX' => esc_html__( '&#197;land Islands', 'select-real-estate' ),
            'AL' => esc_html__( 'Albania', 'select-real-estate' ),
            'DZ' => esc_html__( 'Algeria', 'select-real-estate' ),
            'AS' => esc_html__( 'American Samoa', 'select-real-estate' ),
            'AD' => esc_html__( 'Andorra', 'select-real-estate' ),
            'AO' => esc_html__( 'Angola', 'select-real-estate' ),
            'AI' => esc_html__( 'Anguilla', 'select-real-estate' ),
            'AQ' => esc_html__( 'Antarctica', 'select-real-estate' ),
            'AG' => esc_html__( 'Antigua and Barbuda', 'select-real-estate' ),
            'AR' => esc_html__( 'Argentina', 'select-real-estate' ),
            'AM' => esc_html__( 'Armenia', 'select-real-estate' ),
            'AW' => esc_html__( 'Aruba', 'select-real-estate' ),
            'AU' => esc_html__( 'Australia', 'select-real-estate' ),
            'AT' => esc_html__( 'Austria', 'select-real-estate' ),
            'AZ' => esc_html__( 'Azerbaijan', 'select-real-estate' ),
            'BS' => esc_html__( 'Bahamas', 'select-real-estate' ),
            'BH' => esc_html__( 'Bahrain', 'select-real-estate' ),
            'BD' => esc_html__( 'Bangladesh', 'select-real-estate' ),
            'BB' => esc_html__( 'Barbados', 'select-real-estate' ),
            'BY' => esc_html__( 'Belarus', 'select-real-estate' ),
            'BE' => esc_html__( 'Belgium', 'select-real-estate' ),
            'PW' => esc_html__( 'Belau', 'select-real-estate' ),
            'BZ' => esc_html__( 'Belize', 'select-real-estate' ),
            'BJ' => esc_html__( 'Benin', 'select-real-estate' ),
            'BM' => esc_html__( 'Bermuda', 'select-real-estate' ),
            'BT' => esc_html__( 'Bhutan', 'select-real-estate' ),
            'BO' => esc_html__( 'Bolivia', 'select-real-estate' ),
            'BQ' => esc_html__( 'Bonaire, Saint Eustatius and Saba', 'select-real-estate' ),
            'BA' => esc_html__( 'Bosnia and Herzegovina', 'select-real-estate' ),
            'BW' => esc_html__( 'Botswana', 'select-real-estate' ),
            'BV' => esc_html__( 'Bouvet Island', 'select-real-estate' ),
            'BR' => esc_html__( 'Brazil', 'select-real-estate' ),
            'IO' => esc_html__( 'British Indian Ocean Territory', 'select-real-estate' ),
            'VG' => esc_html__( 'British Virgin Islands', 'select-real-estate' ),
            'BN' => esc_html__( 'Brunei', 'select-real-estate' ),
            'BG' => esc_html__( 'Bulgaria', 'select-real-estate' ),
            'BF' => esc_html__( 'Burkina Faso', 'select-real-estate' ),
            'BI' => esc_html__( 'Burundi', 'select-real-estate' ),
            'KH' => esc_html__( 'Cambodia', 'select-real-estate' ),
            'CM' => esc_html__( 'Cameroon', 'select-real-estate' ),
            'CA' => esc_html__( 'Canada', 'select-real-estate' ),
            'CV' => esc_html__( 'Cape Verde', 'select-real-estate' ),
            'KY' => esc_html__( 'Cayman Islands', 'select-real-estate' ),
            'CF' => esc_html__( 'Central African Republic', 'select-real-estate' ),
            'TD' => esc_html__( 'Chad', 'select-real-estate' ),
            'CL' => esc_html__( 'Chile', 'select-real-estate' ),
            'CN' => esc_html__( 'China', 'select-real-estate' ),
            'CX' => esc_html__( 'Christmas Island', 'select-real-estate' ),
            'CC' => esc_html__( 'Cocos (Keeling) Islands', 'select-real-estate' ),
            'CO' => esc_html__( 'Colombia', 'select-real-estate' ),
            'KM' => esc_html__( 'Comoros', 'select-real-estate' ),
            'CG' => esc_html__( 'Congo (Brazzaville)', 'select-real-estate' ),
            'CD' => esc_html__( 'Congo (Kinshasa)', 'select-real-estate' ),
            'CK' => esc_html__( 'Cook Islands', 'select-real-estate' ),
            'CR' => esc_html__( 'Costa Rica', 'select-real-estate' ),
            'HR' => esc_html__( 'Croatia', 'select-real-estate' ),
            'CU' => esc_html__( 'Cuba', 'select-real-estate' ),
            'CW' => esc_html__( 'Cura&ccedil;ao', 'select-real-estate' ),
            'CY' => esc_html__( 'Cyprus', 'select-real-estate' ),
            'CZ' => esc_html__( 'Czech Republic', 'select-real-estate' ),
            'DK' => esc_html__( 'Denmark', 'select-real-estate' ),
            'DJ' => esc_html__( 'Djibouti', 'select-real-estate' ),
            'DM' => esc_html__( 'Dominica', 'select-real-estate' ),
            'DO' => esc_html__( 'Dominican Republic', 'select-real-estate' ),
            'EC' => esc_html__( 'Ecuador', 'select-real-estate' ),
            'EG' => esc_html__( 'Egypt', 'select-real-estate' ),
            'SV' => esc_html__( 'El Salvador', 'select-real-estate' ),
            'GQ' => esc_html__( 'Equatorial Guinea', 'select-real-estate' ),
            'ER' => esc_html__( 'Eritrea', 'select-real-estate' ),
            'EE' => esc_html__( 'Estonia', 'select-real-estate' ),
            'ET' => esc_html__( 'Ethiopia', 'select-real-estate' ),
            'FK' => esc_html__( 'Falkland Islands', 'select-real-estate' ),
            'FO' => esc_html__( 'Faroe Islands', 'select-real-estate' ),
            'FJ' => esc_html__( 'Fiji', 'select-real-estate' ),
            'FI' => esc_html__( 'Finland', 'select-real-estate' ),
            'FR' => esc_html__( 'France', 'select-real-estate' ),
            'GF' => esc_html__( 'French Guiana', 'select-real-estate' ),
            'PF' => esc_html__( 'French Polynesia', 'select-real-estate' ),
            'TF' => esc_html__( 'French Southern Territories', 'select-real-estate' ),
            'GA' => esc_html__( 'Gabon', 'select-real-estate' ),
            'GM' => esc_html__( 'Gambia', 'select-real-estate' ),
            'GE' => esc_html__( 'Georgia', 'select-real-estate' ),
            'DE' => esc_html__( 'Germany', 'select-real-estate' ),
            'GH' => esc_html__( 'Ghana', 'select-real-estate' ),
            'GI' => esc_html__( 'Gibraltar', 'select-real-estate' ),
            'GR' => esc_html__( 'Greece', 'select-real-estate' ),
            'GL' => esc_html__( 'Greenland', 'select-real-estate' ),
            'GD' => esc_html__( 'Grenada', 'select-real-estate' ),
            'GP' => esc_html__( 'Guadeloupe', 'select-real-estate' ),
            'GU' => esc_html__( 'Guam', 'select-real-estate' ),
            'GT' => esc_html__( 'Guatemala', 'select-real-estate' ),
            'GG' => esc_html__( 'Guernsey', 'select-real-estate' ),
            'GN' => esc_html__( 'Guinea', 'select-real-estate' ),
            'GW' => esc_html__( 'Guinea-Bissau', 'select-real-estate' ),
            'GY' => esc_html__( 'Guyana', 'select-real-estate' ),
            'HT' => esc_html__( 'Haiti', 'select-real-estate' ),
            'HM' => esc_html__( 'Heard Island and McDonald Islands', 'select-real-estate' ),
            'HN' => esc_html__( 'Honduras', 'select-real-estate' ),
            'HK' => esc_html__( 'Hong Kong', 'select-real-estate' ),
            'HU' => esc_html__( 'Hungary', 'select-real-estate' ),
            'IS' => esc_html__( 'Iceland', 'select-real-estate' ),
            'IN' => esc_html__( 'India', 'select-real-estate' ),
            'ID' => esc_html__( 'Indonesia', 'select-real-estate' ),
            'IR' => esc_html__( 'Iran', 'select-real-estate' ),
            'IQ' => esc_html__( 'Iraq', 'select-real-estate' ),
            'IE' => esc_html__( 'Ireland', 'select-real-estate' ),
            'IM' => esc_html__( 'Isle of Man', 'select-real-estate' ),
            'IL' => esc_html__( 'Israel', 'select-real-estate' ),
            'IT' => esc_html__( 'Italy', 'select-real-estate' ),
            'CI' => esc_html__( 'Ivory Coast', 'select-real-estate' ),
            'JM' => esc_html__( 'Jamaica', 'select-real-estate' ),
            'JP' => esc_html__( 'Japan', 'select-real-estate' ),
            'JE' => esc_html__( 'Jersey', 'select-real-estate' ),
            'JO' => esc_html__( 'Jordan', 'select-real-estate' ),
            'KZ' => esc_html__( 'Kazakhstan', 'select-real-estate' ),
            'KE' => esc_html__( 'Kenya', 'select-real-estate' ),
            'KI' => esc_html__( 'Kiribati', 'select-real-estate' ),
            'KW' => esc_html__( 'Kuwait', 'select-real-estate' ),
            'KG' => esc_html__( 'Kyrgyzstan', 'select-real-estate' ),
            'LA' => esc_html__( 'Laos', 'select-real-estate' ),
            'LV' => esc_html__( 'Latvia', 'select-real-estate' ),
            'LB' => esc_html__( 'Lebanon', 'select-real-estate' ),
            'LS' => esc_html__( 'Lesotho', 'select-real-estate' ),
            'LR' => esc_html__( 'Liberia', 'select-real-estate' ),
            'LY' => esc_html__( 'Libya', 'select-real-estate' ),
            'LI' => esc_html__( 'Liechtenstein', 'select-real-estate' ),
            'LT' => esc_html__( 'Lithuania', 'select-real-estate' ),
            'LU' => esc_html__( 'Luxembourg', 'select-real-estate' ),
            'MO' => esc_html__( 'Macao S.A.R., China', 'select-real-estate' ),
            'MK' => esc_html__( 'Macedonia', 'select-real-estate' ),
            'MG' => esc_html__( 'Madagascar', 'select-real-estate' ),
            'MW' => esc_html__( 'Malawi', 'select-real-estate' ),
            'MY' => esc_html__( 'Malaysia', 'select-real-estate' ),
            'MV' => esc_html__( 'Maldives', 'select-real-estate' ),
            'ML' => esc_html__( 'Mali', 'select-real-estate' ),
            'MT' => esc_html__( 'Malta', 'select-real-estate' ),
            'MH' => esc_html__( 'Marshall Islands', 'select-real-estate' ),
            'MQ' => esc_html__( 'Martinique', 'select-real-estate' ),
            'MR' => esc_html__( 'Mauritania', 'select-real-estate' ),
            'MU' => esc_html__( 'Mauritius', 'select-real-estate' ),
            'YT' => esc_html__( 'Mayotte', 'select-real-estate' ),
            'MX' => esc_html__( 'Mexico', 'select-real-estate' ),
            'FM' => esc_html__( 'Micronesia', 'select-real-estate' ),
            'MD' => esc_html__( 'Moldova', 'select-real-estate' ),
            'MC' => esc_html__( 'Monaco', 'select-real-estate' ),
            'MN' => esc_html__( 'Mongolia', 'select-real-estate' ),
            'ME' => esc_html__( 'Montenegro', 'select-real-estate' ),
            'MS' => esc_html__( 'Montserrat', 'select-real-estate' ),
            'MA' => esc_html__( 'Morocco', 'select-real-estate' ),
            'MZ' => esc_html__( 'Mozambique', 'select-real-estate' ),
            'MM' => esc_html__( 'Myanmar', 'select-real-estate' ),
            'NA' => esc_html__( 'Namibia', 'select-real-estate' ),
            'NR' => esc_html__( 'Nauru', 'select-real-estate' ),
            'NP' => esc_html__( 'Nepal', 'select-real-estate' ),
            'NL' => esc_html__( 'Netherlands', 'select-real-estate' ),
            'NC' => esc_html__( 'New Caledonia', 'select-real-estate' ),
            'NZ' => esc_html__( 'New Zealand', 'select-real-estate' ),
            'NI' => esc_html__( 'Nicaragua', 'select-real-estate' ),
            'NE' => esc_html__( 'Niger', 'select-real-estate' ),
            'NG' => esc_html__( 'Nigeria', 'select-real-estate' ),
            'NU' => esc_html__( 'Niue', 'select-real-estate' ),
            'NF' => esc_html__( 'Norfolk Island', 'select-real-estate' ),
            'MP' => esc_html__( 'Northern Mariana Islands', 'select-real-estate' ),
            'KP' => esc_html__( 'North Korea', 'select-real-estate' ),
            'NO' => esc_html__( 'Norway', 'select-real-estate' ),
            'OM' => esc_html__( 'Oman', 'select-real-estate' ),
            'PK' => esc_html__( 'Pakistan', 'select-real-estate' ),
            'PS' => esc_html__( 'Palestinian Territory', 'select-real-estate' ),
            'PA' => esc_html__( 'Panama', 'select-real-estate' ),
            'PG' => esc_html__( 'Papua New Guinea', 'select-real-estate' ),
            'PY' => esc_html__( 'Paraguay', 'select-real-estate' ),
            'PE' => esc_html__( 'Peru', 'select-real-estate' ),
            'PH' => esc_html__( 'Philippines', 'select-real-estate' ),
            'PN' => esc_html__( 'Pitcairn', 'select-real-estate' ),
            'PL' => esc_html__( 'Poland', 'select-real-estate' ),
            'PT' => esc_html__( 'Portugal', 'select-real-estate' ),
            'PR' => esc_html__( 'Puerto Rico', 'select-real-estate' ),
            'QA' => esc_html__( 'Qatar', 'select-real-estate' ),
            'RE' => esc_html__( 'Reunion', 'select-real-estate' ),
            'RO' => esc_html__( 'Romania', 'select-real-estate' ),
            'RU' => esc_html__( 'Russia', 'select-real-estate' ),
            'RW' => esc_html__( 'Rwanda', 'select-real-estate' ),
            'BL' => esc_html__( 'Saint Barth&eacute;lemy', 'select-real-estate' ),
            'SH' => esc_html__( 'Saint Helena', 'select-real-estate' ),
            'KN' => esc_html__( 'Saint Kitts and Nevis', 'select-real-estate' ),
            'LC' => esc_html__( 'Saint Lucia', 'select-real-estate' ),
            'MF' => esc_html__( 'Saint Martin (French part)', 'select-real-estate' ),
            'SX' => esc_html__( 'Saint Martin (Dutch part)', 'select-real-estate' ),
            'PM' => esc_html__( 'Saint Pierre and Miquelon', 'select-real-estate' ),
            'VC' => esc_html__( 'Saint Vincent and the Grenadines', 'select-real-estate' ),
            'SM' => esc_html__( 'San Marino', 'select-real-estate' ),
            'ST' => esc_html__( 'S&atilde;o Tom&eacute; and Pr&iacute;ncipe', 'select-real-estate' ),
            'SA' => esc_html__( 'Saudi Arabia', 'select-real-estate' ),
            'SN' => esc_html__( 'Senegal', 'select-real-estate' ),
            'RS' => esc_html__( 'Serbia', 'select-real-estate' ),
            'SC' => esc_html__( 'Seychelles', 'select-real-estate' ),
            'SL' => esc_html__( 'Sierra Leone', 'select-real-estate' ),
            'SG' => esc_html__( 'Singapore', 'select-real-estate' ),
            'SK' => esc_html__( 'Slovakia', 'select-real-estate' ),
            'SI' => esc_html__( 'Slovenia', 'select-real-estate' ),
            'SB' => esc_html__( 'Solomon Islands', 'select-real-estate' ),
            'SO' => esc_html__( 'Somalia', 'select-real-estate' ),
            'ZA' => esc_html__( 'South Africa', 'select-real-estate' ),
            'GS' => esc_html__( 'South Georgia/Sandwich Islands', 'select-real-estate' ),
            'KR' => esc_html__( 'South Korea', 'select-real-estate' ),
            'SS' => esc_html__( 'South Sudan', 'select-real-estate' ),
            'ES' => esc_html__( 'Spain', 'select-real-estate' ),
            'LK' => esc_html__( 'Sri Lanka', 'select-real-estate' ),
            'SD' => esc_html__( 'Sudan', 'select-real-estate' ),
            'SR' => esc_html__( 'Suriname', 'select-real-estate' ),
            'SJ' => esc_html__( 'Svalbard and Jan Mayen', 'select-real-estate' ),
            'SZ' => esc_html__( 'Swaziland', 'select-real-estate' ),
            'SE' => esc_html__( 'Sweden', 'select-real-estate' ),
            'CH' => esc_html__( 'Switzerland', 'select-real-estate' ),
            'SY' => esc_html__( 'Syria', 'select-real-estate' ),
            'TW' => esc_html__( 'Taiwan', 'select-real-estate' ),
            'TJ' => esc_html__( 'Tajikistan', 'select-real-estate' ),
            'TZ' => esc_html__( 'Tanzania', 'select-real-estate' ),
            'TH' => esc_html__( 'Thailand', 'select-real-estate' ),
            'TL' => esc_html__( 'Timor-Leste', 'select-real-estate' ),
            'TG' => esc_html__( 'Togo', 'select-real-estate' ),
            'TK' => esc_html__( 'Tokelau', 'select-real-estate' ),
            'TO' => esc_html__( 'Tonga', 'select-real-estate' ),
            'TT' => esc_html__( 'Trinidad and Tobago', 'select-real-estate' ),
            'TN' => esc_html__( 'Tunisia', 'select-real-estate' ),
            'TR' => esc_html__( 'Turkey', 'select-real-estate' ),
            'TM' => esc_html__( 'Turkmenistan', 'select-real-estate' ),
            'TC' => esc_html__( 'Turks and Caicos Islands', 'select-real-estate' ),
            'TV' => esc_html__( 'Tuvalu', 'select-real-estate' ),
            'UG' => esc_html__( 'Uganda', 'select-real-estate' ),
            'UA' => esc_html__( 'Ukraine', 'select-real-estate' ),
            'AE' => esc_html__( 'United Arab Emirates', 'select-real-estate' ),
            'GB' => esc_html__( 'United Kingdom (UK)', 'select-real-estate' ),
            'US' => esc_html__( 'United States (US)', 'select-real-estate' ),
            'UM' => esc_html__( 'United States (US) Minor Outlying Islands', 'select-real-estate' ),
            'VI' => esc_html__( 'United States (US) Virgin Islands', 'select-real-estate' ),
            'UY' => esc_html__( 'Uruguay', 'select-real-estate' ),
            'UZ' => esc_html__( 'Uzbekistan', 'select-real-estate' ),
            'VU' => esc_html__( 'Vanuatu', 'select-real-estate' ),
            'VA' => esc_html__( 'Vatican', 'select-real-estate' ),
            'VE' => esc_html__( 'Venezuela', 'select-real-estate' ),
            'VN' => esc_html__( 'Vietnam', 'select-real-estate' ),
            'WF' => esc_html__( 'Wallis and Futuna', 'select-real-estate' ),
            'EH' => esc_html__( 'Western Sahara', 'select-real-estate' ),
            'WS' => esc_html__( 'Samoa', 'select-real-estate' ),
            'YE' => esc_html__( 'Yemen', 'select-real-estate' ),
            'ZM' => esc_html__( 'Zambia', 'select-real-estate' ),
            'ZW' => esc_html__( 'Zimbabwe', 'select-real-estate' )
        );
        
        return $countries;
    }
}

/**
 * Get property county taxonomy values
 * return value is array in provided format.
 *
 * @param $taxonomy string - queried taxonomy
 * @param $first_empty boolean - if is true, first element in key_value return array will be empty
 * @param $return_type string - format of returned array (can be key_value, object)
 *
 * @return array
 */
if ( ! function_exists( 'qodef_re_get_taxonomy_list' ) ) {
    function qodef_re_get_taxonomy_list($taxonomy = '', $first_empty = false, $return_type = 'key_value') {
        $property_taxonomy_array = array();
        $property_taxonomy_array['key_value'] = array();
        $property_taxonomy_array['obj'] = array();

        if($taxonomy !== '') {

            $args = array(
                'taxonomy' => $taxonomy,
                'hide_empty' => false
            );

            $property_taxonomies = get_terms($args);

            if (is_array($property_taxonomies) && count($property_taxonomies)) {
                if ($first_empty) {
                    $property_taxonomy_array['key_value'][''] = '';
                }
                foreach ($property_taxonomies as $property_taxonomy) {

                    $property_taxonomy_array['key_value'][$property_taxonomy->term_id] = $property_taxonomy->name;
                    $property_taxonomy_array['obj'][] = $property_taxonomy;

                }

            }
        }

        return $property_taxonomy_array[$return_type];
    }
}

if ( ! function_exists( 'qodef_re_get_taxonomy_name_from_id' ) ) {
    function qodef_re_get_taxonomy_name_from_id($term_id) {
        if(!empty ($term_id)) {
            $term = get_term($term_id);
            return $term->name;
        }
        return "";
    }
}

if ( ! function_exists( 'qodef_re_get_taxonomy_icon' ) ) {
    function qodef_re_get_taxonomy_icon($id, $image_field_name = '', $icon_field_name = '') {

        if($image_field_name !== '') {
            $taxonomy_image_id = get_term_meta($id, $image_field_name, true);

            $image_original = wp_get_attachment_image_src($taxonomy_image_id, 'full');
            $type_image = $image_original[0];

            if (!empty($type_image)) {
                $html = '<span class="qodef-taxonomy-image">';
                $html .= '<img src="' . esc_url($type_image) . '" alt="' . esc_attr__('Taxonomy Custom Icon', 'select-real-estate') . '">';
                $html .= '</span>';
                return $html;
            }
        }

        if (!qodef_re_theme_installed()) {
            return false;
        }

        if($icon_field_name !== '') {
            $category_icon_pack = get_term_meta($id, $icon_field_name, true);
            $icon_param_name = eiddo_qodef_icon_collections()->getIconCollectionParamNameByKey($category_icon_pack);
            $category_icon = get_term_meta($id, $icon_field_name . '_' . $icon_param_name, true);

            if (empty($category_icon)) {
                return '';
            }

            $html = '<span class="qodef-taxonomy-icon">';
            $html .= eiddo_qodef_icon_collections()->renderIcon($category_icon, $category_icon_pack);
            $html .= '</span>';
            return $html;
        }

        return '';
    }
}

if ( ! function_exists( 'qodef_re_get_taxonomy_featured_image' ) ) {
    function qodef_re_get_taxonomy_featured_image($id, $image_field_name = '', $thumb_size = 'full', $return_type = 'html') {

        if($image_field_name !== '') {
            $taxonomy_image_id = get_term_meta($id, $image_field_name, true);

            $image_original = wp_get_attachment_image_src($taxonomy_image_id, $thumb_size);
            $type_image = $image_original[0];

            if (!empty($type_image)) {
                if($return_type === 'html') {
                    $html = '<span class="qodef-taxonomy-image">';
                    $html .= '<img src="' . esc_url($type_image) . '" alt="' . esc_attr__('Taxonomy Featured Image', 'select-real-estate') . '">';
                    $html .= '</span>';
                    return $html;
                }
                else if($return_type === 'src') {
                    return $type_image;
                }
            }
        }

        return '';
    }
}

if ( ! function_exists( 'qodef_re_get_assets_icon_list' ) ) {
	function qodef_re_get_assets_icon_list() {
		$icon_list = array(
			''                  => esc_html__( 'None', 'select-real-estate' ),
			'accommodation'     => esc_html__( 'Acomodações', 'select-real-estate' ),
			'additional-space'  => esc_html__( 'Espaço adicional', 'select-real-estate' ),
			'area-size'         => esc_html__( 'Tamnho da Área', 'select-real-estate' ),
			'bathrooms'         => esc_html__( 'Banheiros', 'select-real-estate' ),
			'bedrooms'          => esc_html__( 'Quartos', 'select-real-estate' ),
			'cable-tv'          => esc_html__( 'TV a Cabo', 'select-real-estate' ),
			'ceiling-height'    => esc_html__( 'Altura do teto', 'select-real-estate' ),
			'd-f-center'        => esc_html__( 'Distance From Center', 'select-real-estate' ),
			'deposit'           => esc_html__( 'Deposit', 'select-real-estate' ),
			'electricity'       => esc_html__( 'Electricity', 'select-real-estate' ),
			'floor'             => esc_html__( 'Floor', 'select-real-estate' ),
			'garages'           => esc_html__( 'Garages', 'select-real-estate' ),
			'garages-size'      => esc_html__( 'Garages Size', 'select-real-estate' ),
			'heating'           => esc_html__( 'Heating', 'select-real-estate' ),
			'hebitable'         => esc_html__( 'Hebitable', 'select-real-estate' ),
			'min-lease-term'    => esc_html__( 'Minimum Lease Term', 'select-real-estate' ),
			'parking'           => esc_html__( 'Parking', 'select-real-estate' ),
			'payment-period'    => esc_html__( 'Payment Period', 'select-real-estate' ),
			'pets'              => esc_html__( 'Pets', 'select-real-estate' ),
			'property-size'     => esc_html__( 'Property Size', 'select-real-estate' ),
			'public-cost'       => esc_html__( 'Public Cost', 'select-real-estate' ),
			'publication-date'  => esc_html__( 'Publication Date', 'select-real-estate' ),
			'total-floors'      => esc_html__( 'Total Floors', 'select-real-estate' ),
			'year-built'        => esc_html__( 'Year Built', 'select-real-estate' )
		);
		
		return $icon_list;
	}
}

if ( ! function_exists( 'qodef_re_get_assets_icon_src' ) ) {
    function qodef_re_get_assets_icon_src($icon_name, $extension) {
        return QODE_RE_ASSETS_URL_PATH . '/img/' . $icon_name . '.' . $extension;
    }
}

if (!function_exists('qodef_re_get_author_image')) {
	function qodef_re_get_author_image($author_id, $author_roles, $size = '', $avatar_size = '') {
		$role = $author_roles[0];
		$author_image = get_user_meta($author_id, 'qodef_'.$role.'_profile_image', true);
		$profile_image			= get_user_meta($author_id, 'social_profile_image', true);
		
		$size = ($size == '') ? 'thumbnail' : $size;
		$avatar_size = ($avatar_size == '') ? 96 : $avatar_size;
		
		if ( isset($author_image) && $author_image !== '' ) {
			$profile_image = wp_get_attachment_image($author_image, $size);
		} elseif ( $profile_image !== '' ) {
			$profile_image = '<img src="' . esc_url( $profile_image ) . '">';
		} else {
			$profile_image = get_avatar( $author_id, $avatar_size );
		}
		
		return $profile_image;
	}
}