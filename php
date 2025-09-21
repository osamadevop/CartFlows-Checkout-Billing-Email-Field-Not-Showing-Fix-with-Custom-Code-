add_filter( 'woocommerce_checkout_fields' , 'force_billing_email_field' );
function force_billing_email_field( $fields ) {
    $fields['billing']['billing_email'] = array(
        'label'       => __('Email Address', 'woocommerce'),
        'placeholder' => __('Enter your email address', 'woocommerce'),
        'required'    => true,
        'class'       => array('form-row-wide'),
        'clear'       => true,
        'priority'    => 20,
        'type'        => 'email'
    );
    return $fields;
}
