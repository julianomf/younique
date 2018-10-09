<?php
namespace QodeCore\CPT\Shortcodes\Process;

use QodeCore\Lib\ShortcodeInterface;

class ProcessHolder implements ShortcodeInterface
{
    private $base;

    public function __construct() {
        $this->base = 'qodef_process_holder';

        add_action('vc_before_init', array($this, 'vcMap'));
    }

    public function getBase() {
        return $this->base;
    }

    public function vcMap() {
        vc_map(array(
            'name'                    => esc_html__('Select Process', 'select-core'),
            'base'                    => $this->getBase(),
            'as_parent'               => array('only' => 'qodef_process_item'),
            'content_element'         => true,
            'show_settings_on_create' => true,
            'category'                => esc_html__('by SELECT', 'select-core'),
            'icon'                    => 'icon-wpb-process-holder extended-custom-icon',
            'js_view'                 => 'VcColumnView',
            'params'                  => array(
                array(
                    'type'        => 'dropdown',
                    'param_name'  => 'process_skin',
                    'heading'     => esc_html__('Skin', 'select-core'),
                    'value'       => array(
                        esc_html__('Dark', 'select-core')  => 'dark',
                        esc_html__('Light', 'select-core') => 'light'
                    ),
                    'save_always' => true,
                    'admin_label' => true,
                    'description' => ''
                ),
                array(
                    'type'        => 'dropdown',
                    'param_name'  => 'number_of_items',
                    'heading'     => esc_html__('Number of Process Items', 'select-core'),
                    'value'       => array(
                        esc_html__('Three', 'select-core') => 'three',
                        esc_html__('Four', 'select-core')  => 'four'
                    ),
                    'save_always' => true,
                    'admin_label' => true,
                    'description' => ''
                ),
                array(
                    'type'        => 'dropdown',
                    'param_name'  => 'show_numbers',
                    'heading'     => esc_html__('Show Numbers', 'select-core'),
                    'value'       => array(
                        esc_html__('Yes', 'select-core') => 'yes',
                        esc_html__('No', 'select-core')  => 'no'
                    ),
                    'save_always' => true,
                    'admin_label' => true,
                    'description' => ''
                ),
            )
        ));
    }

    public function render($atts, $content = null) {
        $default_atts = array(
            'process_skin'    => '',
            'number_of_items' => '',
            'show_numbers'    => ''
        );

        $params = shortcode_atts($default_atts, $atts);

        if($params['show_numbers'] == 'yes'){

            $content = explode('[', $content);

            $i = 0;

            foreach ($content as $item) {
                $item = str_replace('qodef_process_item', 'qodef_process_item number="' . $i . '"', $item);
                $content[$i] = $item;
                $i++;
            }

            $content = implode('[', $content);

        }

        $params['content'] = $content;
        $params['holder_classes'] = $this->getClasses($params);
	
	    return qodef_core_get_shortcode_module_template_part('templates/horizontal-process-holder', 'process', '', $params);
    }

    public function getClasses($params) {
        $holder_classes = array('qodef-process-holder');
        $holder_classes[] = 'qodef-process-' . $params['process_skin'];
	
	    $holder_classes[] = 'qodef-process-horizontal';
	    $holder_classes[] = 'qodef-process-holder-items-' . $params['number_of_items'];

        return $holder_classes;
    }
}