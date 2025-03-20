<?php
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

?>