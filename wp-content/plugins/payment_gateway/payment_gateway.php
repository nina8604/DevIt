<?php
/*
 * Plugin Name: WooCommerce Stripe Payment Gateway
 * Description: Take credit card payments on your store.
 * Author: NIna Iaremenko
 * Version: 1.0
 *

 */
 /*
 * This action hook registers PHP class as a WooCommerce payment gateway
 */
add_filter( 'woocommerce_payment_gateways', 'stripe_add_gateway_class' );
function stripe_add_gateway_class( $gateways ) {
	$gateways[] = 'WC_Stripe_Gateway'; // class name
	return $gateways;
}

/*
 * The class is inside plugins_loaded action hook
 */
add_action( 'plugins_loaded', 'stripe_init_gateway_class' );
function stripe_init_gateway_class() {

	class WC_Stripe_Gateway extends WC_Payment_Gateway {

		/**
		 * Constructor should define the following variables
		 */
		public function __construct() {

			...

		}

		/**
		 * Plugin options
		 * You should define settings fields
		 */
		public function init_form_fields(){

			...

		}

		/**
		 * Handling payment and processing the order. Process_payment also tells WC where
		 * to redirect the user, and this is done with a returned array.
		 */
		public function payment_fields() {

			...

		}

		/*
		 * Custom CSS and JS, in most cases required only when you decided to go with a custom credit card form
		 */
		public function payment_scripts() {

			...

		}

		/*
 		 * Fields validation
		 */
		public function validate_fields() {

			...

		}

		/*
		 * Processing the payments
		 */
		public function process_payment( $order_id ) {

			...

		}

		/*
		 * webhook
		 */
		public function webhook() {

			...

		}
	}
}