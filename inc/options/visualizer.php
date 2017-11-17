<?php

Redux::setSection(
    'greenleaf_theme_options', // This is your opt_name,
    array( // This is your arguments array
        'id'    => 'visualizer_settings',
        // Unique identifier for your panel. Must be set and must not contain spaces or special characters
        'title' => 'Visualizer Settings',
        'icon'  => 'el el-leaf',
        // http://elusiveicons.com/icons/
        //'subsection' => true, // Enable this as subsection of a previous section
        'subsection' => false, // Enable this as subsection of a previous section

        'fields' => array(
            array(
                'id'       => 'page_visualizer_background1',
                'type'     => 'media',
                'url'      => true,
                'title'    => __('Visualizer Custom Background 1', 'greenleaf_theme_options'),
                'subtitle' => __('Upload an image for this section. this is the first background option', 'greenleaf_theme_options'),                
            ),
			array(
                'id'       => 'page_visualizer_background2',
                'type'     => 'media',
                'url'      => true,
                'title'    => __('Visualizer Custom Background 2', 'greenleaf_theme_options'),
                'subtitle' => __('Upload an image for this section. this is the second background option', 'greenleaf_theme_options'),                
            ),
			array(
                'id'       => 'page_visualizer_background3',
                'type'     => 'media',
                'url'      => true,
                'title'    => __('Visualizer Custom Background 3', 'greenleaf_theme_options'),
                'subtitle' => __('Upload an image for this section. this is the third background option', 'greenleaf_theme_options'),                
            ),
			array(   
				'id'       => 'page_visualizer_background5', 
				'type'     => 'media',     
				'url'      => true,     
				'title'    => __('Visualizer Background 4', 'greenleaf_theme_options'),       
				'subtitle' => __('Upload an image for this section. this is the 4th background', 'greenleaf_theme_options'),              
			),
			array(
                'id'       => 'page_visualizer_background4',
                'type'     => 'media',
                'url'      => true,
                'title'    => __('Visualizer Default Background', 'greenleaf_theme_options'),
                'subtitle' => __('Upload an image for this section. this is the default background', 'greenleaf_theme_options'),                
            ),
			array(
				'id'          => 'page_visualizer_slider',
				'type'        => 'slides',
				'title'       => __('Visualiser start page slider', 'greenleaf_theme_options'),
				'subtitle'    => __('You can add up to six slides.', 'greenleaf_theme_options'),
				'desc'        => __('This field will store all slides values into a multidimensional array to use into a foreach loop.', 'greenleaf_theme_options'),
				'placeholder' => array(
					'title'           => __('This is a title', 'greenleaf_theme_options'),
					'description'     => __('Description Here', 'greenleaf_theme_options'),
					'url'             => __('Leave this blak!', 'greenleaf_theme_options'),
				),
			)
        )
    )
);
