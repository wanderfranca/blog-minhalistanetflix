<?php 
/*Extra Options*/

        $wp_customize->add_section( 'intimate_extra_options', array(
            'priority'       => 20,
            'capability'     => 'edit_theme_options',
            'theme_supports' => '',
            'title'          => __( 'Breadcrumb Settings', 'intimate' ),
            'panel'          => 'intimate_panel',
        ) );

        /*Breadcrumb Enable*/
        $wp_customize->add_setting( 'intimate_options[intimate-extra-breadcrumb]', array(
            'capability'        => 'edit_theme_options',
            'transport' => 'refresh',
            'default'           => $default['intimate-extra-breadcrumb'],
            'sanitize_callback' => 'intimate_sanitize_checkbox'
        ) );

        $wp_customize->add_control( 'intimate_options[intimate-extra-breadcrumb]', array(
            'label'     => __( 'Enable Breadcrumb', 'intimate' ),
            'description' => __( 'Breadcrumb will appear on all pages except home page. More settings will be on the premium version.', 'intimate' ),
            'section'   => 'intimate_extra_options',
            'settings'  => 'intimate_options[intimate-extra-breadcrumb]',
            'type'      => 'checkbox',
            'priority'  => 15,
        ) );