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
			$ this -> id = 'Stripe' ; // payment gateway plugin ID
			$ this -> icon = '' ; // URL of the icon that will be displayed on checkout page
			$ this -> has_fields = true ; // if we need a custom credit card form
			$ this -> method_title = 'Stripe Gateway' ;
			$ this -> method_description = 'Описание платежного шлюза Stripe' ; // will be displayed on the options page

			$ this -> support = array (
						'products',
					) ;

			// Method with all the options fields
			$ this -> init_form_fields ( ) ;

			// Load the settings
			$ this -> init_settings ( ) ;
			$ this -> title = $ this -> get_option (  'title'  ) ;
			$ this -> description = $ this -> get_option (  'description'  ) ;
			$ this -> enabled = $ this -> get_option (  'enabled'  ) ;
			$ this -> testmode = 'yes' === $ this ->get_option (  'testmode'  ) ;
			$ this -> private_key = $ this -> testmode ? $ this -> get_option (  'test_private_key'  ) : $ this -> get_option (  'private_key'  ) ;
			$ this -> publishable_key = $ this -> тестовый режим ? $ this -> get_option (  'test_publishable_key'  ) : $ this -> get_option ( 'publishable_key'  ) ;

			// This action hook saves the settings
			add_action (  'woocommerce_update_options_payment_gateways_' . $ this -> id , array (  $ this , 'process_admin_options'  )  ) ;

			// JavaScript to obtain a token
			add_action (  'wp_enqueue_scripts' , array (  $ this , 'payment_scripts'  )  ) ;

			// You can also register a webhook here
			//	add_action( 'woocommerce_api_{webhook name}', array( $this, 'webhook' ) );
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