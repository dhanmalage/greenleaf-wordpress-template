<?php

Redux::setSection(
    'greenleaf_theme_options', // This is your opt_name,
    array( // This is your arguments array
        'id'    => 'website_footer_settings',
        // Unique identifier for your panel. Must be set and must not contain spaces or special characters
        'title' => 'Footer Settings',
        'icon'  => 'el el-arrow-down',
        // http://elusiveicons.com/icons/
        'subsection' => false, // Enable this as subsection of a previous section

        'fields' => array(

            array(
                'id'       => 'footer_social_twitter',
                'type'     => 'text',
                'title'    => __('Twitter Link', 'greenleaf_theme_options')
            ),
            array(
                'id'       => 'footer_social_linkedin',
                'type'     => 'text',
                'title'    => __('Linked In', 'greenleaf_theme_options')
            ),
            array(
                'id'       => 'footer_social_google',
                'type'     => 'text',
                'title'    => __('Google Plus', 'greenleaf_theme_options')
            ),
            array(
                'id'       => 'footer_social_youtube',
                'type'     => 'text',
                'title'    => __('Youtube', 'greenleaf_theme_options')
            ),
			array(
                'id'       => 'footer_social_instagram',
                'type'     => 'text',
                'title'    => __('Instagram', 'greenleaf_theme_options')
            ),
            array(
                'id'=>'footer_text',
                'type' => 'textarea',
                'title' => __('Footer Text', 'greenleaf_theme_options'),
                'subtitle' => __('Footer copyrights text', 'greenleaf_theme_options')
            ),
			array(
                'id'=>'footer_chat_code',
                'type' => 'textarea',
                'title' => __('Footer chat code', 'greenleaf_theme_options'),
                'subtitle' => __('Footer chat code', 'greenleaf_theme_options')
            )				
        )
    )
);

