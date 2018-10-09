<?php

if ( ! function_exists( 'qodef_woocomerce_checkout_integration_get_shortcode_module_template_part' ) ) {
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
	function qodef_woocomerce_checkout_integration_get_shortcode_module_template_part( $template, $shortcode, $slug = '', $params = array() ) {
		
		//HTML Content from template
		$html          = '';
		$template_path = QODE_WOOCOMMERCE_CHECKOUT_INTEGRATION_PATH . '/' . $shortcode;
		
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
		
		if ( $template ) {
			ob_start();
			include( $template );
			$html = ob_get_clean();
		}
		
		return $html;
	}
}

if ( ! function_exists( 'qodef_woocomerce_checkout_integration_get_buy_form' ) ) {
	/**
	 * Load form.
	 *
	 * @return html
	 */
	function qodef_woocomerce_checkout_integration_get_buy_form( $params = array(), $button_params = array() ) {
		$default_params = array(
			'show_quantity_field' => false
		);
		
		$default_button_params = array(
            'type' => 'simple',
			'input_text' => esc_html__( 'Add to cart', 'select-checkout' )
		);
		
		$params                  = array_unique( array_merge( $default_params, $params ) );
		$params['button_params'] = array_unique( array_merge( $default_button_params, $button_params ) );
		$html                    = qodef_woocomerce_checkout_integration_get_shortcode_module_template_part( 'form', 'templates', '', $params );
		
		echo $html;
	}
}

if ( ! function_exists( 'qodef_woocommerce_checkout_get_user_orders' ) ) {
	function qodef_woocommerce_checkout_get_user_orders() {
		$customer_orders = array();
		
		if ( get_current_user_id() > 0 ) {
			$customer_orders = wc_get_orders(
				array(
					'customer' => get_current_user_id()
				)
			);
		}
		
		return $customer_orders;
	}
}

if ( ! function_exists( 'qodef_woocommerce_checkout_get_user_order_items' ) ) {
	function qodef_woocommerce_checkout_get_user_order_items( $item_type ) {
		$customer_orders = qodef_woocommerce_checkout_get_user_orders();
		$formatted_orders = array();
		
		if ( ! empty( $customer_orders ) ) {
			foreach ( $customer_orders as $customer_order ) {
				$items = $customer_order->get_items();
				
				foreach ( $items as $item_id => $item ) {
					if ( is_a( $item, $item_type ) ) {
						$item['order_status'] = $customer_order->get_status();
						array_push( $formatted_orders, $item );
					}
				}
			}
		}
		
		return $formatted_orders;
	}
}

if ( ! function_exists( 'qodef_woocommerce_checkout_get_user_order_item_completed' ) ) {
	function qodef_woocommerce_checkout_get_user_order_item_completed( $item_type, $item_id ) {
		$customers_orders = qodef_woocommerce_checkout_get_user_orders();
		
		foreach ( $customers_orders as $customer_order ) {
			$order_status = $customer_order->get_status();
			
			if ( $order_status == 'completed' ) {
				$items = $customer_order->get_items();
				
				foreach ( $items as $item ) {
					$data       = $item->get_data();
					$product_id = $data['product_id'];
					
					if ( is_a( $item, $item_type ) && $product_id == $item_id ) {
						return true;
					}
				}
			}
		}
		
		return false;
	}
}

if ( ! function_exists( 'qodef_woocomerce_checkout_integration_core_plugin_installed' ) ) {
	//is Qodef Core installed?
	function qodef_woocomerce_checkout_integration_core_plugin_installed() {
		return defined( 'QODE_CORE_VERSION' );
	}
}