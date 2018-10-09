<?php

if(!function_exists('eiddo_qodef_loading_spinners')) {
    function eiddo_qodef_loading_spinners() {
    	$id = eiddo_qodef_get_page_id();
	    $spinner_type = eiddo_qodef_get_meta_field_intersect('smooth_pt_spinner_type',$id);

        $spinner_html = '';
        if(!empty($spinner_type)){
            switch ($spinner_type) {
                case 'eiddo_loader':
                    $spinner_html = eiddo_qodef_loading_spinner_eiddo_loader();
                    break;
                case 'rotate_circles':
                    $spinner_html = eiddo_qodef_loading_spinner_rotate_circles();
                    break;
                case 'pulse':
                    $spinner_html = eiddo_qodef_loading_spinner_pulse();
                    break;
                case 'double_pulse':
                    $spinner_html =  eiddo_qodef_loading_spinner_double_pulse();
                    break;
                case 'cube':
                    $spinner_html =  eiddo_qodef_loading_spinner_cube();
                    break;
                case 'rotating_cubes':
                    $spinner_html =  eiddo_qodef_loading_spinner_rotating_cubes();
                    break;
                case 'stripes':
                    $spinner_html =  eiddo_qodef_loading_spinner_stripes();
                    break;
                case 'wave':
                    $spinner_html =  eiddo_qodef_loading_spinner_wave();
                    break;
                case 'two_rotating_circles':
                    $spinner_html =  eiddo_qodef_loading_spinner_two_rotating_circles();
                    break;
                case 'five_rotating_circles':
                    $spinner_html =  eiddo_qodef_loading_spinner_five_rotating_circles();
                    break;
				case 'atom':
                    $spinner_html = eiddo_qodef_loading_spinner_atom();
                    break;
				case 'clock':
                    $spinner_html = eiddo_qodef_loading_spinner_clock();
                    break;
				case 'mitosis':
                    $spinner_html = eiddo_qodef_loading_spinner_mitosis();
                    break;
				case 'lines':
                    $spinner_html = eiddo_qodef_loading_spinner_lines();
                    break;
				case 'fussion':
                    $spinner_html = eiddo_qodef_loading_spinner_fussion();
                    break;
				case 'wave_circles':
                    $spinner_html = eiddo_qodef_loading_spinner_wave_circles();
                    break;
				case 'pulse_circles':
                    $spinner_html = eiddo_qodef_loading_spinner_pulse_circles();
                    break;
	            default:
		            $spinner_html = eiddo_qodef_loading_spinner_pulse();
            }
        }

        echo wp_kses($spinner_html, array(
            'div' => array(
                'class' => true,
                'style' => true,
                'id' => true
            )
        ));
    }
}

if(!function_exists('eiddo_qodef_loading_spinner_eiddo_loader')) {
    function eiddo_qodef_loading_spinner_eiddo_loader() {

        $text           = eiddo_qodef_get_meta_field_intersect('smooth_pt_spinner_text', eiddo_qodef_get_page_id());
        $text_part      = substr($text, 0, strlen($text)-1);
        $text_suffix    = substr($text, -1);

        $html  = '<div class="qodef-eiddo-loader">';
        $html .= '<div class="qodef-eiddo-loader-text qodef-eiddo-loader-text-prime">'.$text.'</div>';
        $html .= '<div class="qodef-eiddo-loader-text-mask-wrapper">';
        $html .= '<div class="qodef-eiddo-loader-text-part">'.$text_part.'</div>';
        $html .= '<div class="qodef-eiddo-loader-text-suffix">'.$text_suffix.'</div>';
        $html .= '</div>';
        $html .= '</div>';
        
        return $html;
    }
}

if(!function_exists('eiddo_qodef_loading_spinner_rotate_circles')) {
    function eiddo_qodef_loading_spinner_rotate_circles() {
        $html = '';
        $html .= '<div class="qodef-rotate-circles">';
        $html .= '<div></div>';
        $html .= '<div></div>';
        $html .= '<div></div>';
        $html .= '</div>';
	    
        return $html;
    }
}

if(!function_exists('eiddo_qodef_loading_spinner_pulse')) {
    function eiddo_qodef_loading_spinner_pulse() {
        $html = '<div class="pulse"></div>';
	    
        return $html;
    }
}

if(!function_exists('eiddo_qodef_loading_spinner_double_pulse')) {
    function eiddo_qodef_loading_spinner_double_pulse() {
        $html = '';
        $html .= '<div class="double_pulse">';
        $html .= '<div class="double-bounce1"></div>';
        $html .= '<div class="double-bounce2"></div>';
        $html .= '</div>';

        return $html;
    }
}

if(!function_exists('eiddo_qodef_loading_spinner_cube')) {
    function eiddo_qodef_loading_spinner_cube() {
        $html = '<div class="cube"></div>';
	    
        return $html;
    }
}

if(!function_exists('eiddo_qodef_loading_spinner_rotating_cubes')) {
    function eiddo_qodef_loading_spinner_rotating_cubes() {
        $html = '';
        $html .= '<div class="rotating_cubes">';
        $html .= '<div class="cube1"></div>';
        $html .= '<div class="cube2"></div>';
        $html .= '</div>';

        return $html;
    }
}

if(!function_exists('eiddo_qodef_loading_spinner_stripes')) {
    function eiddo_qodef_loading_spinner_stripes() {
        $html = '';
        $html .= '<div class="stripes">';
        $html .= '<div class="rect1"></div>';
        $html .= '<div class="rect2"></div>';
        $html .= '<div class="rect3"></div>';
        $html .= '<div class="rect4"></div>';
        $html .= '<div class="rect5"></div>';
        $html .= '</div>';
	    
        return $html;
    }
}

if(!function_exists('eiddo_qodef_loading_spinner_wave')) {
    function eiddo_qodef_loading_spinner_wave() {
        $html = '';
        $html .= '<div class="wave">';
        $html .= '<div class="bounce1"></div>';
        $html .= '<div class="bounce2"></div>';
        $html .= '<div class="bounce3"></div>';
        $html .= '</div>';

        return $html;
    }
}

if(!function_exists('eiddo_qodef_loading_spinner_two_rotating_circles')) {
    function eiddo_qodef_loading_spinner_two_rotating_circles() {
        $html = '';
        $html .= '<div class="two_rotating_circles">';
        $html .= '<div class="dot1"></div>';
        $html .= '<div class="dot2"></div>';
        $html .= '</div>';

        return $html;
    }
}

if(!function_exists('eiddo_qodef_loading_spinner_five_rotating_circles')) {
    function eiddo_qodef_loading_spinner_five_rotating_circles() {
        $html = '';
        $html .= '<div class="five_rotating_circles">';
        $html .= '<div class="spinner-container container1">';
        $html .= '<div class="circle1"></div>';
        $html .= '<div class="circle2"></div>';
        $html .= '<div class="circle3"></div>';
        $html .= '<div class="circle4"></div>';
        $html .= '</div>';
        $html .= '<div class="spinner-container container2">';
        $html .= '<div class="circle1"></div>';
        $html .= '<div class="circle2"></div>';
        $html .= '<div class="circle3"></div>';
        $html .= '<div class="circle4"></div>';
        $html .= '</div>';
        $html .= '<div class="spinner-container container3">';
        $html .= '<div class="circle1"></div>';
        $html .= '<div class="circle2"></div>';
        $html .= '<div class="circle3"></div>';
        $html .= '<div class="circle4"></div>';
        $html .= '</div>';
        $html .= '</div>';
	    
        return $html;
    }
}

if(!function_exists('eiddo_qodef_loading_spinner_atom')) {
    function eiddo_qodef_loading_spinner_atom(){
        $html = '';
        $html .= '<div class="atom">';
        $html .= '<div class="ball ball-1"></div>';
		$html .= '<div class="ball ball-2"></div>';
		$html .= '<div class="ball ball-3"></div>';
		$html .= '<div class="ball ball-4"></div>';
        $html .= '</div>';
	    
        return $html;
    }
}

if(!function_exists('eiddo_qodef_loading_spinner_clock')) {
    function eiddo_qodef_loading_spinner_clock(){
        $html = '';
        $html .= '<div class="clock">';
        $html .= '<div class="ball ball-1"></div>';
		$html .= '<div class="ball ball-2"></div>';
		$html .= '<div class="ball ball-3"></div>';
		$html .= '<div class="ball ball-4"></div>';
        $html .= '</div>';
	    
        return $html;
    }
}

if(!function_exists('eiddo_qodef_loading_spinner_mitosis')) {
    function eiddo_qodef_loading_spinner_mitosis(){
        $html = '';
        $html .= '<div class="mitosis">';
        $html .= '<div class="ball ball-1"></div>';
		$html .= '<div class="ball ball-2"></div>';
		$html .= '<div class="ball ball-3"></div>';
		$html .= '<div class="ball ball-4"></div>';
        $html .= '</div>';
	    
        return $html;
    }
}

if(!function_exists('eiddo_qodef_loading_spinner_lines')) {
    function eiddo_qodef_loading_spinner_lines(){
        $html = '';
        $html .= '<div class="lines">';
        $html .= '<div class="line1"></div>';
		$html .= '<div class="line2"></div>';
		$html .= '<div class="line3"></div>';
		$html .= '<div class="line4"></div>';
        $html .= '</div>';
	    
        return $html;
    }
}

if(!function_exists('eiddo_qodef_loading_spinner_fussion')) {
    function eiddo_qodef_loading_spinner_fussion(){
        $html = '';
        $html .= '<div class="fussion">';
        $html .= '<div class="ball ball-1"></div>';
		$html .= '<div class="ball ball-2"></div>';
		$html .= '<div class="ball ball-3"></div>';
		$html .= '<div class="ball ball-4"></div>';
        $html .= '</div>';
	    
        return $html;
    }
}

if(!function_exists('eiddo_qodef_loading_spinner_wave_circles')) {
    function eiddo_qodef_loading_spinner_wave_circles(){
        $html = '';
        $html .= '<div class="wave_circles">';
        $html .= '<div class="ball ball-1"></div>';
		$html .= '<div class="ball ball-2"></div>';
		$html .= '<div class="ball ball-3"></div>';
		$html .= '<div class="ball ball-4"></div>';
        $html .= '</div>';
	    
        return $html;
    }
}

if(!function_exists('eiddo_qodef_loading_spinner_pulse_circles')) {
    function eiddo_qodef_loading_spinner_pulse_circles(){
        $html = '';
        $html .= '<div class="pulse_circles">';
        $html .= '<div class="ball ball-1"></div>';
		$html .= '<div class="ball ball-2"></div>';
		$html .= '<div class="ball ball-3"></div>';
		$html .= '<div class="ball ball-4"></div>';
        $html .= '</div>';
	    
        return $html;
    }
}
