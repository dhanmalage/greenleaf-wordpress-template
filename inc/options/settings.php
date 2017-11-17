<?php

Redux::setSection(
    'greenleaf_theme_options', // This is your opt_name,
    array( // This is your arguments array
        'id'    => 'global_settings',
        // Unique identifier for your panel. Must be set and must not contain spaces or special characters
        'title' => 'General Settings',
        'icon'  => 'el el-leaf',
        // http://elusiveicons.com/icons/
        //'subsection' => true, // Enable this as subsection of a previous section
        'subsection' => false, // Enable this as subsection of a previous section

        'fields' => array(

            array(
                'id'       => 'contact_banner_text',
                'type'     => 'text',
                'title'    => __('Main Contact Banner Text', 'greenleaf_theme_options'),
                'subtitle' => __('This is the contact banner text', 'greenleaf_theme_options'),
                'desc'     => __('Plese enter the text to display in banner', 'greenleaf_theme_options'),
                'default'  => 'CALL US FOR A FREE QUOTE OR CONTACT US'
            ),
            array(
                'id'       => 'page_title_prefix_switch',
                'type'     => 'switch',
                'title'    => __('Page Content Title Prefix Switch', 'greenleaf_theme_options'),
                'subtitle' => __('Enable or Disable', 'greenleaf_theme_options'),
                'on'       => 'Enable',
                'off'      => 'Disable',
                'default'  => true,
            ),
            array(
                'id'       => 'page_title_prefix_text',
                'type'     => 'text',
                'title'    => __('Page Content Title Prefix Text', 'greenleaf_theme_options'),
                'subtitle' => __('This Text will display before page title', 'greenleaf_theme_options'),
                /*'desc'     => __('Plese enter the text to display in banner', 'greenleaf_theme_options'),*/
                'default'  => 'THE PHS GREENLEAF'
            ),
            array(
                'id'       => 'page_content_royal_warrant_logo',
                'type'     => 'media',
                'url'      => true,
                'title'    => __('Royal Warrant Logo', 'greenleaf_theme_options'),
                //'desc'     => __('Basic media uploader with disabled URL input field.', 'greenleaf_theme_options'),
                'subtitle' => __('Upload a small image. this will display next to page content', 'greenleaf_theme_options'),
                /*'default'  => array(
                    'url'=>'http://s.wordpress.org/style/images/codeispoetry.png'
                ),*/
            ),
            array(
                'id'=>'page_content_royal_warrant_text',
                'type' => 'textarea',
                'title' => __('Royal Warrant Text', 'greenleaf_theme_options'),
                'subtitle' => __('This will display next to page content with logo', 'greenleaf_theme_options'),
                //'desc' => __('This is the description field, again good for additional info.', 'redux-framework-demo'),
                //'validate' => 'html_custom',
                //'default' => '<br />Some HTML is allowed in here.<br />'
            ),
			array(
                'id'=>'enquire_now',
                'type' => 'text',
                'title' => __('Enquire Now form shortcode', 'greenleaf_theme_options'),
                'subtitle' => __('Enter the shortcode for Enquire Now', 'greenleaf_theme_options')
            ),
			array(
                'id'=>'analytics_script',
                'type' => 'textarea',
                'title' => __('Google Analytics Script', 'greenleaf_theme_options'),
                'subtitle' => __('Google Analytics Script', 'greenleaf_theme_options')
            ),
			array(
                'id'=>'google_tag_manager',
                'type' => 'textarea',
                'title' => __('Google Tag Manager Install Code', 'greenleaf_theme_options'),
                'subtitle' => __('Google Tag Manager Install Code', 'greenleaf_theme_options')
            ),
			array(
                'id'=>'direct_debit_notification',
                'type' => 'text',
                'title' => __('Direct Debit Notification Email', 'greenleaf_theme_options'),
                'subtitle' => __('Enter an email address to send notification', 'greenleaf_theme_options')
            ),
			array(
                'id'=>'direct_debit_url',
                'type' => 'text',
                'title' => __('Direct Debit URL', 'greenleaf_theme_options'),
                'subtitle' => __('Enter Direct Debit URL', 'greenleaf_theme_options')
            )
        )
    )
);

