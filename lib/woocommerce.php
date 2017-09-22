<?php
/**
 * Declares WooCommerce theme support.
 */
function woak_woocommerce_support() {
	add_theme_support( 'woocommerce' );

	// Add New Woocommerce 3.0.0 Product Gallery support
	add_theme_support( 'wc-product-gallery-lightbox' );
	add_theme_support( 'wc-product-gallery-zoom' );

	// Gallery slider needs Flexslider - https://woocommerce.com/flexslider/
	add_theme_support( 'wc-product-gallery-slider' );

	// hook in and customizer form fields.
	add_filter( 'woocommerce_form_field_args', 'woak_wc_form_field_args', 10, 3 );
}
add_action( 'after_setup_theme', 'woak_woocommerce_support' );

/**
 * Filter hook function monkey patching form classes
 * Author: Adriano Monecchi http://stackoverflow.com/a/36724593/307826
 *
 * @param string $args Form attributes.
 * @param string $key Not in use.
 * @param null   $value Not in use.
 *
 * @return mixed
 */
function woak_wc_form_field_args( $args, $key, $value = null ) {
	// Start field type switch case.
	switch ( $args['type'] ) {
		/* Targets all select input type elements, except the country and state select input types */
		case 'select' :
			// Add a class to the field's html element wrapper - woocommerce
			// input types (fields) are often wrapped within a <p></p> tag.
			$args['class'][] = 'form-group';
			// Add a class to the form input itself.
			$args['input_class']       = array( 'form-control', 'input-lg' );
			$args['label_class']       = array( 'control-label' );
			$args['custom_attributes'] = array(
				'data-plugin'      => 'select2',
				'data-allow-clear' => 'true',
				'aria-hidden'      => 'true',
				// Add custom data attributes to the form input itself.
			);
			break;
		// By default WooCommerce will populate a select with the country names - $args
		// defined for this specific input type targets only the country select element.
		case 'country' :
			$args['class'][]     = 'form-group single-country';
			$args['label_class'] = array( 'control-label' );
			break;
		// By default WooCommerce will populate a select with state names - $args defined
		// for this specific input type targets only the country select element.
		case 'state' :
			// Add class to the field's html element wrapper.
			$args['class'][] = 'form-group';
			// add class to the form input itself.
			$args['input_class']       = array( '', 'input-lg' );
			$args['label_class']       = array( 'control-label' );
			$args['custom_attributes'] = array(
				'data-plugin'      => 'select2',
				'data-allow-clear' => 'true',
				'aria-hidden'      => 'true',
			);
			break;
		case 'password' :
		case 'text' :
		case 'email' :
		case 'tel' :
		case 'number' :
			$args['class'][]     = 'form-group';
			$args['input_class'] = array( 'form-control', 'input-lg' );
			$args['label_class'] = array( 'control-label' );
			break;
		case 'textarea' :
			$args['input_class'] = array( 'form-control', 'input-lg' );
			$args['label_class'] = array( 'control-label' );
			break;
		case 'checkbox' :
			$args['label_class'] = array( 'custom-control custom-checkbox' );
			$args['input_class'] = array( 'custom-control-input', 'input-lg' );
			break;
		case 'radio' :
			$args['label_class'] = array( 'custom-control custom-radio' );
			$args['input_class'] = array( 'custom-control-input', 'input-lg' );
			break;
		default :
			$args['class'][]     = 'form-group';
			$args['input_class'] = array( 'form-control', 'input-lg' );
			$args['label_class'] = array( 'control-label' );
			break;
	} // end switch ($args).
	return $args;
}

function woak_woocommerce_order_button_html( $button ) {
	$text = apply_filters( 'woocommerce_order_button_text', __( 'Place order', 'woocommerce' ) );
	return '<input type="submit" class="btn btn-primary" name="woocommerce_checkout_place_order" id="place_order" value="' . esc_attr( $text ) . '" data-value="' . esc_attr( $text ) . '" />';
}
add_filter( 'woocommerce_order_button_html', 'woak_woocommerce_order_button_html' );
