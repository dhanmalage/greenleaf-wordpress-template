<?php

$opt_name = "greenleaf_theme_options";

Redux::setArgs(
    'greenleaf_theme_options',
    array(
        'display_name' => 'Green Leaf Theme Options',
        'display_version' => 'version 1.1',
        'menu_title' => 'Theme Options',
        'admin_bar' => 'true',
        'page_slug' => 'greenleaf_theme_options',
        'menu_type' => 'menu',
        'allow_sub_menu' => true,
    )
);


include('options/settings.php');
include('options/header.php');
include('options/home.php');
include('options/interior.php');
include('options/exterior.php');
include('options/christmas.php');
include('options/visualizer.php');
include('options/footer.php');


