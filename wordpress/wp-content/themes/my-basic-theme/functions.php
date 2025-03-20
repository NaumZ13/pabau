<?php

function mytheme_enqueue_assets() {
    wp_enqueue_script('jquery');
    wp_enqueue_script('lead-form', get_template_directory_uri() . '/js/lead-form.js', array('jquery'), null, true);

    wp_localize_script('lead-form', 'leadFormSettings', array(
        'ajax_url' => admin_url('admin-ajax.php'),
        'nonce'    => wp_create_nonce('lead_form_nonce'),
    ));
}
add_action('wp_enqueue_scripts', 'mytheme_enqueue_assets');

function mytheme_customize_register($wp_customize) {
    $wp_customize->add_section('mytheme_home_settings', array(
        'title'    => __('Theme Fields', 'my-basic-theme'),
        'priority' => 30,
    ));

    $wp_customize->add_setting('theme_title', array(
        'default'           => 'Lead Capture Form',
        'sanitize_callback' => 'sanitize_text_field',
    ));

    $wp_customize->add_control('theme_title_control', array(
        'label'    => __('Theme Title', 'my-basic-theme'),
        'section'  => 'mytheme_home_settings',
        'settings' => 'theme_title',
        'type'     => 'text',
    ));

    $wp_customize->add_setting('theme_description', array(
        'default'           => 'Unlock the power of Pabau\'s Lead Capture Widget—embed it on your site and turn visitors into patients effortlessly.',
        'sanitize_callback' => 'wp_kses_post',
    ));

    $wp_customize->add_control('theme_description_control', array(
        'label'    => __('Theme Description', 'my-basic-theme'),
        'section'  => 'mytheme_home_settings',
        'settings' => 'theme_description',
        'type'     => 'textarea',
    ));
}
add_action('customize_register', 'mytheme_customize_register');


function mytheme_handle_lead_submission() {
    check_ajax_referer('lead_form_nonce', 'nonce');

    $api_key = LEAD_API_KEY; 
    $api_url = 'https://uk2.pabau.me/OAuth2/leads/lead-curl.php';
    $redirect_link = home_url('/thank-you');
    
    $data = array(
        'redirect_link' => $redirect_link,
        'Fname'    => sanitize_text_field($_POST['firstname']),
        'Lname'    => sanitize_text_field($_POST['lastname']),
        'salutation' => sanitize_text_field($_POST['salutation']),
        'email'    => sanitize_email($_POST['email']),
        'mobile'   => sanitize_text_field($_POST['mobile']),
        'country'  => sanitize_text_field($_POST['country']),
        'county'   => sanitize_text_field($_POST['county']),
        'city'     => sanitize_text_field($_POST['city']),
    );

    $response = wp_remote_post($api_url, array(
        'method'    => 'POST',
        'body'      => array_merge(array('api_key' => $api_key), $data),
        'headers'   => array('Content-Type' => 'application/x-www-form-urlencoded'),
        'timeout'   => 15,
    ));

    if (is_wp_error($response)) {
        wp_send_json_error(array('message' => 'Error contacting the API: ' . $response->get_error_message()));
    } else {
        $body = wp_remote_retrieve_body($response);
        $status_code = wp_remote_retrieve_response_code($response);
        if ($status_code === 200) {
            wp_send_json_success(array(
                'message' => 'Lead created successfully!',
                'redirect_link' => $redirect_link
            ));
        } else {
            wp_send_json_error(array('message' => 'API error: ' . $body, 'status' => $status_code));
        }
    }

    wp_die();
}
add_action('wp_ajax_submit_lead_form', 'mytheme_handle_lead_submission');
add_action('wp_ajax_nopriv_submit_lead_form', 'mytheme_handle_lead_submission');
?>