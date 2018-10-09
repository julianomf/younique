<?php

class EiddoQodefMortgageCalculatorWidget extends EiddoQodefWidget {
    public function __construct() {
        parent::__construct(
            'qodef_mortgage_calculator_widget',
            esc_html__( 'Select Mortgage Calculator Widget', 'select-real-estate' ),
            array( 'description' => esc_html__( 'Display mortgage loan calculator', 'select-real-estate' ) )
        );

        $this->setParams();
    }

    /**
     * Sets widget options
     */
    protected function setParams() {
        $this->params = array(
            array(
                'type'  => 'textfield',
                'name'  => 'widget_title',
                'title' => esc_html__( 'Widget Title', 'select-real-estate' )
            )
        );
    }

    /**
     * Generates widget's HTML
     *
     * @param array $args args from widget area
     * @param array $instance widget's options
     */
    public function widget( $args, $instance ) {
        if ( ! is_array( $instance ) ) {
            $instance = array();
        }

       $widget_title = !empty($instance['widget_title']) ? esc_html($instance['widget_title']) : esc_html__('Mortgage Calculator', 'select-real-estate');

        ?>
        <div class="widget qodef-mortgage-calculator-widget">
            <?php echo wp_kses_post($args['before_title']) . $widget_title . wp_kses_post($args['after_title']); ?>
            <div class="qodef-mortgage-calculator-holder">
                <form method="POST" action="#">
                    <div class="qodef-mc-field-holder">
                        <label><?php esc_html_e('Sale price', 'select-real-estate'); ?></label>
                        <input type="text" name="price" id="price" placeholder="<?php echo esc_attr('$') ?>" value="" />
                    </div>
                    <div class="qodef-mc-field-holder">
                        <label><?php esc_html_e('Interest rate', 'select-real-estate'); ?></label>
                        <input type="text" name="interest-rate" id="interest-rate" placeholder="<?php echo esc_attr('%') ?>" value="" />
                    </div>
                    <div class="qodef-mc-field-holder">
                        <label><?php esc_html_e('Term', 'select-real-estate'); ?></label>
                        <input type="text" name="term-years" id="term-years" placeholder="<?php esc_attr_e('Year', 'select-real-estate') ?>" value="" />
                    </div>
                    <div class="qodef-mc-field-holder">
                        <label><?php esc_html_e('Down payment', 'select-real-estate'); ?></label>
                        <input type="text" name="down-payment" id="down-payment" placeholder="<?php echo esc_attr('$') ?>" value="" />
                    </div>
                    <div class="qodef-mc-button-holder">
                        <input type="submit" class="qodef-btn qodef-btn-solid" value="<?php esc_attr_e('Calculate', 'select-real-estate'); ?>"/>
                    </div>
                </form>
                <div class="qodef-mc-result-holder">
                    <div class="qodef-mc-payment">
                        <span class="qodef-mc-payment-label">
                            <?php esc_html_e('Monthly payment:', 'select-real-estate') ?>
                        </span>
                        <span class="qodef-mc-payment-value">

                        </span>
                    </div>
                    <div class="qodef-mc-amount-financed">
                        <span class="qodef-mc-amount-financed-label">
                            <?php esc_html_e('Amount financed:', 'select-real-estate') ?>
                        </span>
                        <span class="qodef-mc-amount-financed-value">

                        </span>
                    </div>
                    <div class="qodef-mc-mortgage-payments">
                        <span class="qodef-mc-mortgage-payments-label">
                            <?php esc_html_e('Mortgage payments:', 'select-real-estate') ?>
                        </span>
                        <span class="qodef-mc-mortgage-payments-value">

                        </span>
                    </div>
                    <div class="qodef-mc-annual-costs">
                        <span class="qodef-mc-annual-costs-label">
                            <?php esc_html_e('Annual costs of loan:', 'select-real-estate') ?>
                        </span>
                        <span class="qodef-mc-annual-costs-value">

                        </span>
                    </div>
                </div>
            </div>
        </div>
    <?php
    }
}