<?php 


Redux::setSection(
    'greenleaf_theme_options', // This is your opt_name,
    array( // This is your arguments array
        'id'    => 'home_page_settings',
        // Unique identifier for your panel. Must be set and must not contain spaces or special characters
        'title' => 'Home Page Settings',
        'icon'  => 'el el-home',
        // http://elusiveicons.com/icons/
        //'subsection' => true, // Enable this as subsection of a previous section
    )
);

/* **************** Video Section ******************* */

Redux::setSection(

    'greenleaf_theme_options', // This is your opt_name,

    array( // This is your arguments array

        'id'    => 'home_page_video_section',

        // Unique identifier for your panel. Must be set and must not contain spaces or special characters

        'title' => 'Video Section',

        'icon'  => 'el el-cog',

        // http://elusiveicons.com/icons/

        'subsection' => true, // Enable this as subsection of a previous section

        'fields' => array(

            array(
                'id'       => 'home_video_id',
                'type'     => 'text',
                'title'    => __('Home Page Video ID', 'greenleaf_theme_options'),
                'subtitle' => __('This is the video display on home page background.', 'greenleaf_theme_options'),
                'desc'     => __('Plese enter the last part of youtube video url', 'greenleaf_theme_options'),
                'default'  => 'xlaw8VPAkO0'
            ),
			
			array(
                'id'       => 'home_video_poster_image',
                'type'     => 'media',
                'url'      => true,
                'title'    => __('Image for the preload background', 'greenleaf_theme_options'),
                'desc'     => __('Alternative image to replace video on before load.', 'greenleaf_theme_options'),
                'subtitle' => __('Upload an image. this will display on when video is not loaded', 'greenleaf_theme_options'),                
            ),
			
			array(
                'id'       => 'home_video_mobile_image',
                'type'     => 'media',
                'url'      => true,
                'title'    => __('Image for mobile devices', 'greenleaf_theme_options'),
                'desc'     => __('Alternative image to replace video on mobile devices.', 'greenleaf_theme_options'),
                'subtitle' => __('Upload an image. this will display on mobiles devices', 'greenleaf_theme_options'),                
            ),
			
			array(
				'id'        => 'home_video_filter',
				'type'      => 'color_rgba',
				'title'     => 'Home Video Color Filter',
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
                'id' => 'home-slide1-section-start',
                'type' => 'section',
                'title' => __('Video Slide 1', 'greenleaf_theme_options'),
                'subtitle' => __('This is slide 1 on video.', 'greenleaf_theme_options'),
                'indent' => true
            ),

            array(
                'id'       => 'home_slide1_tab',
                'type'     => 'text',
                'title'    => __('Tab Text for slide 1', 'greenleaf_theme_options'),
                'default'  => 'Indoor Plants'
            ),
            array(
                'id'       => 'home_slide1_title_small',
                'type'     => 'text',
                'title'    => __('Small Title for slide 1', 'greenleaf_theme_options'),
                'default'  => 'New Indoor Range'
            ),
            array(
                'id'       => 'home_slide1_title1',
                'type'     => 'text',
                'title'    => __('Main Title Line 1', 'greenleaf_theme_options'),
                'default'  => 'NEW SUMMER'
            ),
            array(
                'id'       => 'home_slide1_title2',
                'type'     => 'text',
                'title'    => __('Main Title Line 2', 'greenleaf_theme_options'),
                'default'  => 'HANGING BASKET'
            ),
            array(
                'id'       => 'home_slide1_title3',
                'type'     => 'text',
                'title'    => __('Main Title Line 3', 'greenleaf_theme_options'),
                'default'  => 'RANGE'
            ),
            array(
                'id'       => 'home_slide1_button_link',
                'type'     => 'text',
                'title'    => __('Find Out Button Link Slide 1', 'greenleaf_theme_options'),
                'validate' => 'url',
                'msg'      => 'Please enter a valid url',
                'default'  => '#'
            ),

            array(
                'id'     => 'home-slide1-section-end',
                'type'   => 'section',
                'indent' => false,
            ),
            /* ********* Slide 1 end ********* */

            /* ********* Slide 2 start ********* */
            array(
                'id' => 'home-slide2-section-start',
                'type' => 'section',
                'title' => __('Video Slide 2', 'greenleaf_theme_options'),
                'subtitle' => __('This is slide 2 on video.', 'greenleaf_theme_options'),
                'indent' => true
            ),

            array(
                'id'       => 'home_slide2_tab',
                'type'     => 'text',
                'title'    => __('Tab Text for slide 2', 'greenleaf_theme_options'),
                'default'  => 'Outdoor Plants'
            ),
            array(
                'id'       => 'home_slide2_title_small',
                'type'     => 'text',
                'title'    => __('Small Title for slide 2', 'greenleaf_theme_options'),
                'default'  => 'New Outdoor Range'
            ),
            array(
                'id'       => 'home_slide2_title1',
                'type'     => 'text',
                'title'    => __('Main Title Line 1', 'greenleaf_theme_options'),
                'default'  => 'NEW SUMMER'
            ),
            array(
                'id'       => 'home_slide2_title2',
                'type'     => 'text',
                'title'    => __('Main Title Line 2', 'greenleaf_theme_options'),
                'default'  => 'HANGING BASKET'
            ),
            array(
                'id'       => 'home_slide2_title3',
                'type'     => 'text',
                'title'    => __('Main Title Line 3', 'greenleaf_theme_options'),
                'default'  => 'RANGE'
            ),

            array(
                'id'       => 'home_slide2_button_link',
                'type'     => 'text',
                'title'    => __('Find Out Button Link Slide 2', 'greenleaf_theme_options'),
                'validate' => 'url',
                'msg'      => 'Please enter a valid url',
                'default'  => '#'
            ),

            array(
                'id'     => 'home-slide1-section-end',
                'type'   => 'section',
                'indent' => false,
            ),
            /* ********* Slide 2 end ********* */

            /* ********* Slide 3 start ********* */
            array(
                'id' => 'home-slide3-section-start',
                'type' => 'section',
                'title' => __('Video Slide 3', 'greenleaf_theme_options'),
                'subtitle' => __('This is slide 3 on video.', 'greenleaf_theme_options'),
                'indent' => true
            ),

            array(
                'id'       => 'home_slide3_tab',
                'type'     => 'text',
                'title'    => __('Tab Text for slide 3', 'greenleaf_theme_options'),
                'default'  => 'Grounds'
            ),
            array(
                'id'       => 'home_slide3_title_small',
                'type'     => 'text',
                'title'    => __('Small Title for slide 3', 'greenleaf_theme_options'),
                'default'  => 'New Grounds Range'
            ),
            array(
                'id'       => 'home_slide3_title1',
                'type'     => 'text',
                'title'    => __('Main Title Line 1', 'greenleaf_theme_options'),
                'default'  => 'NEW SUMMER'
            ),
            array(
                'id'       => 'home_slide3_title2',
                'type'     => 'text',
                'title'    => __('Main Title Line 2', 'greenleaf_theme_options'),
                'default'  => 'HANGING BASKET'
            ),
            array(
                'id'       => 'home_slide3_title3',
                'type'     => 'text',
                'title'    => __('Main Title Line 3', 'greenleaf_theme_options'),
                'default'  => 'RANGE'
            ),

            array(
                'id'       => 'home_slide3_button_link',
                'type'     => 'text',
                'title'    => __('Find Out Button Link Slide 3', 'greenleaf_theme_options'),
                'validate' => 'url',
                'msg'      => 'Please enter a valid url',
                'default'  => '#'
            ),

            array(
                'id'     => 'home-slide1-section-end',
                'type'   => 'section',
                'indent' => false,
            ),
            /* ********* Slide 3 end ********* */

            /* ********* Slide 4 start ********* */
            array(
                'id' => 'home-slide4-section-start',
                'type' => 'section',
                'title' => __('Video Slide 4', 'greenleaf_theme_options'),
                'subtitle' => __('This is slide 4 on video.', 'greenleaf_theme_options'),
                'indent' => true
            ),

            array(
                'id'       => 'home_slide4_tab',
                'type'     => 'text',
                'title'    => __('Tab Text for slide 4', 'greenleaf_theme_options'),
                'default'  => 'Christmas'
            ),
            array(
                'id'       => 'home_slide4_title_small',
                'type'     => 'text',
                'title'    => __('Small Title for slide 4', 'greenleaf_theme_options'),
                'default'  => 'New Christmas Range'
            ),
            array(
                'id'       => 'home_slide4_title1',
                'type'     => 'text',
                'title'    => __('Main Title Line 1', 'greenleaf_theme_options'),
                'default'  => 'NEW SUMMER'
            ),
            array(
                'id'       => 'home_slide4_title2',
                'type'     => 'text',
                'title'    => __('Main Title Line 2', 'greenleaf_theme_options'),
                'default'  => 'HANGING BASKET'
            ),
            array(
                'id'       => 'home_slide4_title3',
                'type'     => 'text',
                'title'    => __('Main Title Line 3', 'greenleaf_theme_options'),
                'default'  => 'RANGE'
            ),

            array(
                'id'       => 'home_slide4_button_link',
                'type'     => 'text',
                'title'    => __('Find Out Button Link Slide 4', 'greenleaf_theme_options'),
                'validate' => 'url',
                'msg'      => 'Please enter a valid url',
                'default'  => '#'
            ),

            array(
                'id'     => 'home-slide1-section-end',
                'type'   => 'section',
                'indent' => false,
            ),
            /* ********* Slide 4 end ********* */

        )
    )
);

/* **************** Health benifits section **************** */

Redux::setSection(

    'greenleaf_theme_options', // This is your opt_name,

    array( // This is your arguments array

        'id'    => 'health_benifits_section',

        // Unique identifier for your panel. Must be set and must not contain spaces or special characters

        'title' => 'Health benifits section',

        'icon'  => 'el el-cog',

        // http://elusiveicons.com/icons/

        'subsection' => true, // Enable this as subsection of a previous section

        'fields' => array(
			/* ************ section settings ************* */
			array(
                'id' => 'health_benifits_section_settings_start',
                'type' => 'section',
                'title' => __('Settings', 'greenleaf_theme_options'),
                'indent' => true
            ),
			array(
                'id'       => 'health_benifits_section_switch',
                'type'     => 'switch',
                'title'    => __('Health section show/hide switch', 'greenleaf_theme_options'),
                'subtitle' => __('you can display or hide this section', 'greenleaf_theme_options'),
                'on'       => 'Show',
                'off'      => 'Hide',
                'default'  => false,
            ),
            array(
                'id'     => 'health_benifits_section_settings_end',
                'type'   => 'section',
                'indent' => false
            ),
            /* ************ section 1 start *********** */
            array(
                'id' => 'health_benifits_section1_start',
                'type' => 'section',
                'title' => __('Column 1', 'greenleaf_theme_options'),
                'indent' => true
            ),
            array(
                'id'       => 'health_benifits_section1_title',
                'type'     => 'text',
                'title'    => __('Column 1 title', 'greenleaf_theme_options'),
                'default'  => 'Health benifits of plants'
            ),
			/*
            array(
                'id'=>'health_benifits_section1_description',
                'type' => 'textarea',
                'title' => __('Column 1 Description', 'greenleaf_theme_options'),
				'validate' => 'html_custom',
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
			*/
			array(
				'id'               => 'health_benifits_section1_description',
				'type'             => 'editor',
				'title'            => __('Column 1 Description', 'redux-framework-demo'), 
				'args'   => array(
					'teeny'            => true,
					'textarea_rows'    => 10
				),
			),
			array(
				'id'               => 'health_benifits_section1_reference',
				'type'             => 'editor',
				'title'            => __('Column 1 Description Reference', 'redux-framework-demo'), 
				'args'   => array(
					'teeny'            => true,
					'textarea_rows'    => 6
				),
			),
            array(
                'id'     => 'health_benifits_section1_end',
                'type'   => 'section',
                'indent' => false
            ),
			/* ************ section 2 start *********** */
			array(
                'id' => 'health_benifits_section2_start',
                'type' => 'section',
                'title' => __('Column 2', 'greenleaf_theme_options'),
                'indent' => true
            ),
            array(
                'id'       => 'health_benifits_section2_image1',
                'type'     => 'media',
                'url'      => true,
                'title'    => __('Upper Image', 'greenleaf_theme_options'),
                'desc'     => __('upload your image,', 'greenleaf_theme_options'),
                'subtitle' => __('This image using as the top image in middle section.', 'greenleaf_theme_options'),
                'default'  => array(
                    /*'url'=>'http://www.voqs.eu/phsgreenleaf/wp-content/themes/phsgreenleaf/images/logo.png'*/
                ),
            ),
			array(
                'id'       => 'health_benifits_section2_image2',
                'type'     => 'media',
                'url'      => true,
                'title'    => __('Lower Image', 'greenleaf_theme_options'),
                'desc'     => __('upload your image,', 'greenleaf_theme_options'),
                'subtitle' => __('This image using as the bottom image in middle section.', 'greenleaf_theme_options'),
                'default'  => array(
                    /*'url'=>'http://www.voqs.eu/phsgreenleaf/wp-content/themes/phsgreenleaf/images/logo.png'*/
                ),
            ),
            array(
                'id'     => 'health_benifits_section2_end',
                'type'   => 'section',
                'indent' => false
            ),
			/* ************ section 3 start *********** */
			array(
                'id' => 'health_benifits_section3_start',
                'type' => 'section',
                'title' => __('Column 3', 'greenleaf_theme_options'),
                'indent' => true
            ),
			array(
                'id'       => 'health_benifits_section3_title',
                'type'     => 'text',
                'title'    => __('Column 3 title', 'greenleaf_theme_options'),
                'default'  => 'Why you need plants'
            ),
			array(
				'id'=>'health_benifits_section3_list',
				'type' => 'multi_text',
				'title' => __('Column 3 list', 'redux-framework-demo'),
				'subtitle' => __('Add a text list', 'redux-framework-demo')
			),
            array(
                'id'     => 'health_benifits_section3_end',
                'type'   => 'section',
                'indent' => false
            ),
        )
    )
);

/* **************** Inner Page Links ******************* */

Redux::setSection(

    'greenleaf_theme_options', // This is your opt_name,

    array( // This is your arguments array

        'id'    => 'home_page_pages_section',

        // Unique identifier for your panel. Must be set and must not contain spaces or special characters

        'title' => 'Inner Page Links',

        'icon'  => 'el el-cog',

        // http://elusiveicons.com/icons/

        'subsection' => true, // Enable this as subsection of a previous section

        'fields' => array(
            array(
                'id'          => 'home_page_page_links',
                'type'        => 'slides',
                'title'       => __('Inner Pages', 'greenleaf_theme_options'),
                'subtitle'    => __('4 slides required', 'greenleaf_theme_options'),
                //'desc'        => __('This field will store all slides values into a multidimensional array to use into a foreach loop.', 'redux-framework-demo'),
                'placeholder' => array(
                    'title'           => __('This is a title', 'greenleaf_theme_options'),
                    'description'     => __('Description Here', 'greenleaf_theme_options'),
                    'url'             => __('Page Link', 'greenleaf_theme_options'),
                ),
            ),
        )
    )
);

/* **************** Why Us ******************* */

Redux::setSection(

    'greenleaf_theme_options', // This is your opt_name,

    array( // This is your arguments array

        'id'    => 'home_page_why_us',

        // Unique identifier for your panel. Must be set and must not contain spaces or special characters

        'title' => 'Why Us',

        'icon'  => 'el el-cog',

        // http://elusiveicons.com/icons/

        'subsection' => true, // Enable this as subsection of a previous section

        'fields' => array(

            /* ************ section 1 start *********** */
            array(
                'id' => 'why_us_section1_start',
                'type' => 'section',
                'title' => __('Why Us Item 1', 'greenleaf_theme_options'),
                'indent' => true
            ),
            array(
                'id'       => 'why_us_section1_title',
                'type'     => 'text',
                'title'    => __('Why Us Item 1 Title', 'greenleaf_theme_options'),
                'default'  => 'EXPERTISE'
            ),
            array(
                'id'=>'why_us_section1_description',
                'type' => 'textarea',
                'title' => __('Why Us Item 1 Description', 'greenleaf_theme_options')
            ),
            array(
                'id'     => 'why_us_section1_end',
                'type'   => 'section',
                'indent' => false
            ),
            /* *********** section 1 end ***************** */

            /* *********** section 2 start ***************** */
            array(
                'id' => 'why_us_section2_start',
                'type' => 'section',
                'title' => __('Why Us Item 2', 'greenleaf_theme_options'),
                'indent' => true
            ),
            array(
                'id'       => 'why_us_section2_title',
                'type'     => 'text',
                'title'    => __('Why Us Item 2 Title', 'greenleaf_theme_options'),
                'default'  => 'QUALITY'
            ),
            array(
                'id'=>'why_us_section2_description',
                'type' => 'textarea',
                'title' => __('Why Us Item 2 Description', 'greenleaf_theme_options')
            ),
            array(
                'id'     => 'why_us_section2_end',
                'type'   => 'section',
                'indent' => false
            ),
            /* *********** section 2 end ***************** */

            /* *********** section 3 start ***************** */
            array(
                'id' => 'why_us_section3_start',
                'type' => 'section',
                'title' => __('Why Us Item 3', 'greenleaf_theme_options'),
                'indent' => true
            ),
            array(
                'id'       => 'why_us_section3_title',
                'type'     => 'text',
                'title'    => __('Why Us Item 3 Title', 'greenleaf_theme_options'),
                'default'  => 'SERVICE'
            ),
            array(
                'id'=>'why_us_section3_description',
                'type' => 'textarea',
                'title' => __('Why Us Item 3 Description', 'greenleaf_theme_options')
            ),
            array(
                'id'     => 'why_us_section3_end',
                'type'   => 'section',
                'indent' => false
            ),
            /* *********** section 3 end ***************** */
        )
    )
);

/* **************** Experience ******************* */

Redux::setSection(

    'greenleaf_theme_options', // This is your opt_name,

    array( // This is your arguments array

        'id'    => 'home_page_experience',

        // Unique identifier for your panel. Must be set and must not contain spaces or special characters

        'title' => 'Experience',

        'icon'  => 'el el-cog',

        // http://elusiveicons.com/icons/

        'subsection' => true, // Enable this as subsection of a previous section

        'fields' => array(
            /* ************ section 1 start *********** */
            array(
                'id' => 'experience_section1_start',
                'type' => 'section',
                'title' => __('Experience Item 1', 'greenleaf_theme_options'),
                'indent' => true
            ),
            array(
                'id'       => 'experience_section1_number',
                'type'     => 'text',
                'title'    => __('Experience Item 1 Number', 'greenleaf_theme_options'),
                'default'  => '25'
            ),
            array(
                'id'=>'experience_section1_description',
                'type' => 'textarea',
                'title' => __('Experience Item 1 Description', 'greenleaf_theme_options')
            ),
            array(
                'id'     => 'experience_section1_end',
                'type'   => 'section',
                'indent' => false
            ),
            /* *********** section 1 end ***************** */

            /* *********** section 2 start ***************** */
            array(
                'id' => 'experience_section2_start',
                'type' => 'section',
                'title' => __('Experience Item 2', 'greenleaf_theme_options'),
                'indent' => true
            ),
            array(
                'id'       => 'experience_section2_number',
                'type'     => 'text',
                'title'    => __('Experience Item 2 Number', 'greenleaf_theme_options'),
                'default'  => '14'
            ),
            array(
                'id'=>'experience_section2_description',
                'type' => 'textarea',
                'title' => __('Experience Item 2 Description', 'greenleaf_theme_options')
            ),
            array(
                'id'     => 'experience_section2_end',
                'type'   => 'section',
                'indent' => false
            ),
            /* *********** section 2 end ***************** */

            /* *********** section 3 start ***************** */
            array(
                'id' => 'experience_section3_start',
                'type' => 'section',
                'title' => __('Experience Item 3', 'greenleaf_theme_options'),
                'indent' => true
            ),
            array(
                'id'       => 'experience_section3_number',
                'type'     => 'text',
                'title'    => __('Experience Item 3 Number', 'greenleaf_theme_options'),
                'default'  => '8000'
            ),
            array(
                'id'=>'experience_section3_description',
                'type' => 'textarea',
                'title' => __('Experience Item 3 Description', 'greenleaf_theme_options')
            ),
            array(
                'id'     => 'experience_section3_end',
                'type'   => 'section',
                'indent' => false
            ),
            /* *********** section 3 end ***************** */
        )
    )
);


/* **************** CLIENTS ******************* */

Redux::setSection(

    'greenleaf_theme_options', // This is your opt_name,

    array( // This is your arguments array

        'id'    => 'home_page_clients_section',

        // Unique identifier for your panel. Must be set and must not contain spaces or special characters

        'title' => 'Clients',

        'icon'  => 'el el-cog',

        // http://elusiveicons.com/icons/

        'subsection' => true, // Enable this as subsection of a previous section

        'fields' => array(
            array(
                'id'=>'home_page_clients_title',
                'type'     => 'text',
                'title'    => __('Clients Section Title', 'greenleaf_theme_options'),
                'default'  => 'WHAT OUR CLIENTS SAY'
            ),
            array(
                'id'          => 'home_page_client_links',
                'type'        => 'slides',
                'title'       => __('Clients', 'greenleaf_theme_options'),
                'subtitle'    => __('4 slides required', 'greenleaf_theme_options'),
                //'desc'        => __('This field will store all slides values into a multidimensional array to use into a foreach loop.', 'redux-framework-demo'),
                'placeholder' => array(
                    'title'           => __('This is a title', 'greenleaf_theme_options'),
                    'description'     => __('Description Here', 'greenleaf_theme_options'),
                    'url'             => __('Page Link', 'greenleaf_theme_options'),
                ),
            ),
        )
    )
);

/* ***************** visualizer *************** */

Redux::setSection(

    'greenleaf_theme_options', // This is your opt_name,

    array( // This is your arguments array

        'id'    => 'home_page_bottom_visualizer',

        // Unique identifier for your panel. Must be set and must not contain spaces or special characters

        'title' => 'Visualizer',

        'icon'  => 'el el-cog',

        // http://elusiveicons.com/icons/

        'subsection' => true, // Enable this as subsection of a previous section

        'fields' => array(
			array(
                'id' => 'home_page_visualizer_button-section-start',
                'type' => 'section',
                'title' => __('Visualizer Button', 'greenleaf_theme_options'),
                'subtitle' => __('This is visualizer button in home page video section.', 'greenleaf_theme_options'),
                'indent' => true
            ),
			array(
				'id'       => 'home_page_visualizer_button_small_text',
				'type'     => 'text',
				'title'    => __('Button Small Text', 'greenleaf_theme_options'),
				'subtitle' => __('This is the small text in visualizer button', 'greenleaf_theme_options'),
				'desc'     => __('Default text is -try our-', 'greenleaf_theme_options'),
				'default'  => 'try our'
			),
			array(
				'id'       => 'home_page_visualizer_button_line1_text',
				'type'     => 'text',
				'title'    => __('Button Text Line 1', 'greenleaf_theme_options'),
				'subtitle' => __('This is the text line 1 in visualizer button', 'greenleaf_theme_options'),
				'desc'     => __('Default text is Virtual', 'greenleaf_theme_options'),
				'default'  => 'Virtual'
			),
			array(
				'id'       => 'home_page_visualizer_button_line2_text',
				'type'     => 'text',
				'title'    => __('Button Text Line 2', 'greenleaf_theme_options'),
				'subtitle' => __('This is the text line 2 in visualizer button', 'greenleaf_theme_options'),
				'desc'     => __('Default text is Visualiser', 'greenleaf_theme_options'),
				'default'  => 'Visualiser'
			),
			array(
				'id'       => 'home_page_visualizer_button_link',
				'type'     => 'text',
				'title'    => __('Button Link', 'greenleaf_theme_options'),
				'subtitle' => __('Visualizer button link', 'greenleaf_theme_options'),
				'desc'     => __('Default visualiser page link', 'greenleaf_theme_options'),
				'default'  => 'https://www.phsgreenleaf.co.uk/visualiser/'
			),
			array(
                'id'     => 'home_page_visualizer_button_section_end',
                'type'   => 'section',
                'indent' => false
            ),
            array(
                'id'       => 'home_page_bottom_visualizer_image',
                'type'     => 'media',
                'url'      => true,
                'title'    => __('Visualizer Button Background Image', 'greenleaf_theme_options'),
                'subtitle' => __('This will display as background', 'greenleaf_theme_options'),
            ),
        )
    )
);

