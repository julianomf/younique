<?php
namespace QodeCore\CPT\Shortcodes\Process;

use QodeCore\Lib\ShortcodeInterface;

class ProcessItem implements ShortcodeInterface
{
    private $base;

    public function __construct() {
        $this->base = 'qodef_process_item';

        add_action('vc_before_init', array($this, 'vcMap'));
    }

    public function getBase() {
        return $this->base;
    }

    public function vcMap() {
        vc_map(array(
            'name'                    => esc_html__('Select Process Item', 'select-core'),
            'base'                    => $this->getBase(),
            'as_child'                => array('only' => 'qodef_process_holder'),
            'category'                => esc_html__('by SELECT', 'select-core'),
            'icon'                    => 'icon-wpb-process-item extended-custom-icon',
            'show_settings_on_create' => true,
            'params'                  => array_merge(
                \EiddoQodefIconCollections::get_instance()->getVCParamsArray(),
                array(
                    array(
                        'type'        => 'colorpicker',
                        'heading'     => esc_html__('Icon Color', 'select-core'),
                        'param_name'  => 'icon_color',
                        'admin_label' => true,
                    ),
                    array(
                        'type'        => 'colorpicker',
                        'heading'     => esc_html__('Background Color', 'select-core'),
                        'param_name'  => 'icon_background_color',
                        'admin_label' => true,
                    ),
                    array(
                        'type'       => 'attach_image',
                        'heading'    => esc_html__('Image', 'select-core'),
                        'param_name' => 'image'
                    ),
                    array(
                        'type'        => 'textfield',
                        'heading'     => esc_html__('Title', 'select-core'),
                        'param_name'  => 'title',
                        'save_always' => true,
                        'admin_label' => true
                    ),
                    array(
                        'type'        => 'textarea',
                        'heading'     => esc_html__('Text', 'select-core'),
                        'param_name'  => 'text',
                        'save_always' => true,
                        'admin_label' => true
                    ),
                    array(
                        'type'        => 'textfield',
                        'heading'     => esc_html__('Link', 'select-core'),
                        'param_name'  => 'link',
                        'value'       => '',
                        'admin_label' => true
                    ),
                    array(
                        'type'       => 'dropdown',
                        'heading'    => esc_html__('Target', 'select-core'),
                        'param_name' => 'target',
                        'value'      => array(
                            ''                                   => '',
                            esc_html__('Self', 'select-core')  => '_self',
                            esc_html__('Blank', 'select-core') => '_blank'
                        ),
                        'dependency' => array(
                            'element'   => 'link',
                            'not_empty' => true
                        )
                    ),
                    array(
                        'type'        => 'dropdown',
                        'heading'     => esc_html__('Highlight Item?', 'select-core'),
                        'param_name'  => 'highlighted',
                        'value'       => array(
                            esc_html__('No', 'select-core')  => 'no',
                            esc_html__('Yes', 'select-core') => 'yes'
                        ),
                        'save_always' => true,
                        'admin_label' => true
                    )
                ))
        ));
    }

    public function render($atts, $content = null) {
        $default_atts = array(
            'icon_color'            => '',
            'icon_background_color' => '',
            'image'                 => '',
            'title'                 => '',
            'text'                  => '',
            'link'                  => '',
            'color'                 => '',
            'target'                => '_self',
            'highlighted'           => '',
            'number' => ''
        );

        $default_atts = array_merge($default_atts, eiddo_qodef_icon_collections()->getShortcodeParams());

        $params = shortcode_atts($default_atts, $atts);

        $params['icon_parameters'] = $this->getIconParameters($params);
        $params['icon_styles'] = $this->getIconStyles($params);

        $params['item_classes'] = array(
            'qodef-process-item-holder'
        );

        if ($params['highlighted'] === 'yes') {
            $params['item_classes'][] = 'qodef-pi-highlighted';
        }

        return qodef_core_get_shortcode_module_template_part('templates/process-item', 'process', '', $params);
    }

    /**
     * Returns styles for icon shortcode as a string
     *
     * @param $params
     *
     * @return array
     */
    private function getIconStyles($params) {
        $styles = array();

            if (!empty($params['icon_background_color'])) {
                $styles[] = 'background-color: ' . $params['icon_background_color'];
            }


        return $styles;
    }

    /**
     * Returns parameters for icon shortcode as a string
     *
     * @param $params
     *
     * @return array
     */
    private function getIconParameters($params) {
        $params_array = array();

        if (empty($params['custom_icon'])) {
            $iconPackName = eiddo_qodef_icon_collections()->getIconCollectionParamNameByKey($params['icon_pack']);

            $params_array['icon_pack'] = $params['icon_pack'];

            $params_array[$iconPackName] = $params[$iconPackName];

            if (!empty($params['icon_color'])) {
                $params_array['icon_color'] = $params['icon_color'];
            }

            if (!empty($params['icon_background_color'])) {
                $params_array['background_color'] = $params['icon_background_color'];
            }

            $params_array['size'] = 'qodef-icon-medium';
        }

        return $params_array;
    }

}