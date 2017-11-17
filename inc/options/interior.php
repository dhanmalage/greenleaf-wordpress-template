<?php

Redux::setSection(
    'greenleaf_theme_options', // This is your opt_name,
    array( // This is your arguments array
        'id'    => 'interior_page_settings',
        // Unique identifier for your panel. Must be set and must not contain spaces or special characters
        'title' => 'Interior Page Settings',
        'icon'  => 'el el-th-large',
        // http://elusiveicons.com/icons/
        'subsection' => false, // Enable this as subsection of a previous section

        'fields' => array(

            array(
                'id'       => 'interior_video_id',
                'type'     => 'text',
                'title'    => __('Interior Page Video ID', 'greenleaf_theme_options'),
                'subtitle' => __('This is the video display on interior page background.', 'greenleaf_theme_options'),
                'desc'     => __('Plese enter the last part of youtube video url', 'greenleaf_theme_options'),
                'default'  => 't1BD8261ekI'
            ),
			
			array(
                'id'       => 'interior_video_poster_image',
                'type'     => 'media',
                'url'      => true,
                'title'    => __('Image for the preload background', 'greenleaf_theme_options'),
                'desc'     => __('Alternative image to replace video on before load.', 'greenleaf_theme_options'),
                'subtitle' => __('Upload an image. this will display on when video is not loaded', 'greenleaf_theme_options'),                
            ),
			
			array(
                'id'       => 'interior_video_mobile_image',
                'type'     => 'media',
                'url'      => true,
                'title'    => __('Image for mobile devices', 'greenleaf_theme_options'),
                'desc'     => __('Alternative image to replace video on mobile devices.', 'greenleaf_theme_options'),
                'subtitle' => __('Upload an image. this will display on mobiles devices', 'greenleaf_theme_options'),                
            ),
			
			array(
				'id'        => 'interior_video_filter',
				'type'      => 'color_rgba',
				'title'     => 'Interior Video Color Filter',
				'subtitle'  => 'Set color and alpha channel',
				'desc'      => 'TThis will ligntn or darken the overly color on video!',
			 
				// See Notes below about these lines.
				//'output'    => array('background-color' => '.site-header'),
				//'compiler'  => array('color' => '.site-header, .site-footer', 'background-color' => '.nav-bar'),
				'default'   => array(
					'color'     => '#000000',
					'alpha'     => 0.4
				),
			 
				// These options display a fully functional color palette.  Omit this argument
				// for the minimal color picker, and change as desired.
				'options'       => array(
					'show_input'                => true,
					'show_initial'              => true,
					'show_alpha'                => true,
					'show_palette'              => true,
					'show_palette_only'         => false,
					'show_selection_palette'    => true,
					'max_palette_size'          => 10,
					'allow_empty'               => true,
					'clickout_fires_change'     => false,
					'choose_text'               => 'Choose',
					'cancel_text'               => 'Cancel',
					'show_buttons'              => true,
					'use_extended_classes'      => true,
					'palette'                   => null,  // show default
					'input_text'                => 'Select Filter Color'
				),                        
			),

            /* ********* Slide 1 start ********* */
            array(
                'id' => 'interior-slide1-section-start',
                'type' => 'section',
                'title' => __('Video Slide 1', 'greenleaf_theme_options'),
                'subtitle' => __('This is slide 1 on video.', 'greenleaf_theme_options'),
                'indent' => true
            ),

            array(
                'id'       => 'interior_slide1_tab',
                'type'     => 'text',
                'title'    => __('Tab Text for slide 1', 'greenleaf_theme_options'),
                'default'  => 'Collection Range'
            ),
            array(
                'id'       => 'interior_slide1_title_small',
                'type'     => 'text',
                'title'    => __('Small Title for slide 1', 'greenleaf_theme_options'),
                'default'  => 'New Collection Range'
            ),
            array(
                'id'       => 'interior_slide1_title1',
                'type'     => 'text',
                'title'    => __('Main Title Line 1', 'greenleaf_theme_options'),
                'default'  => 'NEW SUMMER'
            ),
            array(
                'id'       => 'interior_slide1_title2',
                'type'     => 'text',
                'title'    => __('Main Title Line 2', 'greenleaf_theme_options'),
                'default'  => 'HANGING BASKET'
            ),
            array(
                'id'       => 'interior_slide1_title3',
                'type'     => 'text',
                'title'    => __('Main Title Line 3', 'greenleaf_theme_options'),
                'default'  => 'RANGE'
            ),
            array(
                'id'       => 'interior_slide1_button_link',
                'type'     => 'text',
                'title'    => __('Find Out Button Link Slide 1', 'greenleaf_theme_options'),
                'validate' => 'url',
                'msg'      => 'Please enter a valid url',
                'default'  => '#'
            ),

            array(
                'id'     => 'interior-slide1-section-end',
                'type'   => 'section',
                'indent' => false,
            ),
            /* ********* Slide 1 end ********* */

            /* ********* Slide 2 start ********* */
            array(
                'id' => 'interior-slide2-section-start',
                'type' => 'section',
                'title' => __('Video Slide 2', 'greenleaf_theme_options'),
                'subtitle' => __('This is slide 2 on video.', 'greenleaf_theme_options'),
                'indent' => true
            ),

            array(
                'id'       => 'interior_slide2_tab',
                'type'     => 'text',
                'title'    => __('Tab Text for slide 2', 'greenleaf_theme_options'),
                'default'  => 'Designer Range'
            ),
            array(
                'id'       => 'interior_slide2_title_small',
                'type'     => 'text',
                'title'    => __('Small Title for slide 2', 'greenleaf_theme_options'),
                'default'  => 'New Designer Range'
            ),
            array(
                'id'       => 'interior_slide2_title1',
                'type'     => 'text',
                'title'    => __('Main Title Line 1', 'greenleaf_theme_options'),
                'default'  => 'NEW SUMMER'
            ),
            array(
                'id'       => 'interior_slide2_title2',
                'type'     => 'text',
                'title'    => __('Main Title Line 2', 'greenleaf_theme_options'),
                'default'  => 'HANGING BASKET'
            ),
            array(
                'id'       => 'interior_slide2_title3',
                'type'     => 'text',
                'title'    => __('Main Title Line 3', 'greenleaf_theme_options'),
                'default'  => 'RANGE'
            ),

            array(
                'id'       => 'interior_slide2_button_link',
                'type'     => 'text',
                'title'    => __('Find Out Button Link Slide 2', 'greenleaf_theme_options'),
                'validate' => 'url',
                'msg'      => 'Please enter a valid url',
                'default'  => '#'
            ),

            array(
                'id'     => 'interior-slide1-section-end',
                'type'   => 'section',
                'indent' => false,
            ),
            /* ********* Slide 2 end ********* */

            /* ********* Slide 3 start ********* */
            array(
                'id' => 'interior-slide3-section-start',
                'type' => 'section',
                'title' => __('Video Slide 3', 'greenleaf_theme_options'),
                'subtitle' => __('This is slide 3 on video.', 'greenleaf_theme_options'),
                'indent' => true
            ),

            array(
                'id'       => 'interior_slide3_tab',
                'type'     => 'text',
                'title'    => __('Tab Text for slide 3', 'greenleaf_theme_options'),
                'default'  => 'Bespoke Range'
            ),
            array(
                'id'       => 'interior_slide3_title_small',
                'type'     => 'text',
                'title'    => __('Small Title for slide 3', 'greenleaf_theme_options'),
                'default'  => 'New Bespoke Range'
            ),
            array(
                'id'       => 'interior_slide3_title1',
                'type'     => 'text',
                'title'    => __('Main Title Line 1', 'greenleaf_theme_options'),
                'default'  => 'NEW SUMMER'
            ),
            array(
                'id'       => 'interior_slide3_title2',
                'type'     => 'text',
                'title'    => __('Main Title Line 2', 'greenleaf_theme_options'),
                'default'  => 'HANGING BASKET'
            ),
            array(
                'id'       => 'interior_slide3_title3',
                'type'     => 'text',
                'title'    => __('Main Title Line 3', 'greenleaf_theme_options'),
                'default'  => 'RANGE'
            ),

            array(
                'id'       => 'interior_slide3_button_link',
                'type'     => 'text',
                'title'    => __('Find Out Button Link Slide 3', 'greenleaf_theme_options'),
                'validate' => 'url',
                'msg'      => 'Please enter a valid url',
                'default'  => '#'
            ),

            array(
                'id'     => 'interior-slide1-section-end',
                'type'   => 'section',
                'indent' => false,
            ),
            /* ********* Slide 3 end ********* */

            /* ********* Slide 4 start ********* */
            array(
                'id' => 'interior-slide4-section-start',
                'type' => 'section',
                'title' => __('Video Slide 4', 'greenleaf_theme_options'),
                'subtitle' => __('This is slide 4 on video.', 'greenleaf_theme_options'),
                'indent' => true
            ),

            array(
                'id'       => 'interior_slide4_tab',
                'type'     => 'text',
                'title'    => __('Tab Text for slide 4', 'greenleaf_theme_options'),
                'default'  => 'Large Indoor'
            ),
            array(
                'id'       => 'interior_slide4_title_small',
                'type'     => 'text',
                'title'    => __('Small Title for slide 4', 'greenleaf_theme_options'),
                'default'  => 'New Large Indoor Range'
            ),
            array(
                'id'       => 'interior_slide4_title1',
                'type'     => 'text',
                'title'    => __('Main Title Line 1', 'greenleaf_theme_options'),
                'default'  => 'NEW SUMMER'
            ),
            array(
                'id'       => 'interior_slide4_title2',
                'type'     => 'text',
                'title'    => __('Main Title Line 2', 'greenleaf_theme_options'),
                'default'  => 'HANGING BASKET'
            ),
            array(
                'id'       => 'interior_slide4_title3',
                'type'     => 'text',
                'title'    => __('Main Title Line 3', 'greenleaf_theme_options'),
                'default'  => 'RANGE'
            ),

            array(
                'id'       => 'interior_slide4_button_link',
                'type'     => 'text',
                'title'    => __('Find Out Button Link Slide 4', 'greenleaf_theme_options'),
                'validate' => 'url',
                'msg'      => 'Please enter a valid url',
                'default'  => '#'
            ),

            array(
                'id'     => 'interior-slide1-section-end',
                'type'   => 'section',
                'indent' => false,
            ),
            /* ********* Slide 4 end ********* */

            /* ********* Inner Page Links ******** */
            array(
                'id' => 'interior-inner-pages-start',
                'type' => 'section',
                'title' => __('Inner Page Links', 'greenleaf_theme_options'),
                'indent' => true
            ),
            array(
                'id'          => 'interior_page_page_links',
                'type'        => 'slides',
                'title'       => __('Inner Pages', 'greenleaf_theme_options'),
                'subtitle'    => __('4 slides required', 'greenleaf_theme_options'),
                'placeholder' => array(
                    'title'           => __('This is a title', 'greenleaf_theme_options'),
                    'description'     => __('Description Here', 'greenleaf_theme_options'),
                    'url'             => __('Page Link', 'greenleaf_theme_options'),
                ),
            ),
            array(
                'id'     => 'interior-inner-pages-end',
                'type'   => 'section',
                'indent' => false,
            ),


            /* ********* INTERIOR PLANTING ******** */
            array(
                'id' => 'interior-planting-start',
                'type' => 'section',
                'title' => __('Interior Planting Section', 'greenleaf_theme_options'),
                'indent' => true
            ),
            array(
                'id'=>'interior-planting-text',
                'type' => 'textarea',
                'title' => __('Interior Planting Section Content', 'greenleaf_theme_options'),
                'validate' => 'html_custom',
                'default' => '<br />Some HTML is allowed in here.<br />',
                'allowed_html' => array(
                    'a' => array(
                        'href' => array(),
                        'title' => array()
                    ),
                    'br' => array(),
                    'em' => array(),
                    'strong' => array()
                )
            ),
            array(
                'id'=>'interior-planting-list',
                'type' => 'multi_text',
                'title' => __('Interior Planting Section List', 'greenleaf_theme_options')
            ),
            array(
                'id'     => 'interior-planting-end',
                'type'   => 'section',
                'indent' => false,
            ),
        )
    )
);
