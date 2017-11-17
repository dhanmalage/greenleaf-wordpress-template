<?php

Redux::setSection(
    'greenleaf_theme_options', // This is your opt_name,
    array( // This is your arguments array
        'id'    => 'website_header_settings',
        // Unique identifier for your panel. Must be set and must not contain spaces or special characters
        'title' => 'Header Settings',
        'icon'  => 'el el-arrow-up',
        // http://elusiveicons.com/icons/
        'subsection' => false, // Enable this as subsection of a previous section

        'fields' => array(

            array(
                'id'       => 'logo_header',
                'type'     => 'media',
                'url'      => true,
                'title'    => __('Logo Image', 'greenleaf_theme_options'),
                'desc'     => __('upload your logo image,', 'greenleaf_theme_options'),
                'subtitle' => __('This image using for main Logo on header menu section.', 'greenleaf_theme_options'),
                'default'  => array(
                    /*'url'=>'http://www.voqs.eu/phsgreenleaf/wp-content/themes/phsgreenleaf/images/logo.png'*/
                ),
            ),
            array(
                'id'       => 'logo_header_small',
                'type'     => 'media',
                'url'      => true,
                'title'    => __('Royal Warrant Logo Image', 'greenleaf_theme_options'),
                'desc'     => __('upload royal warrant logo image,', 'greenleaf_theme_options'),
                'subtitle' => __('This image using for secondary Logo on header menu section.', 'greenleaf_theme_options'),
                'default'  => array(
                    /*'url'=>'http://www.voqs.eu/phsgreenleaf/wp-content/themes/phsgreenleaf/images/logo.png'*/
                ),
            ),
            array(
                'id'       => 'header_contact_no',
                'type'     => 'text',
                'title'    => __('Contact Number on Menu', 'greenleaf_theme_options'),
                'subtitle' => __('This is Contact number display on header menu.', 'greenleaf_theme_options'),
                'desc'     => __('Type a valid phone number.', 'greenleaf_theme_options'),
                'default'  => ' 02920809098'
            )

        )
    )
);