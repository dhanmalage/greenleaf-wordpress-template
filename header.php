<?php
/*
Theme Name: PHS Green Leaf
Theme URI: http://www.suxiid.com/
Author: Dhananjaya Maha Malage
Author URI: http://whenalive.com/
Description: Wordpress Theme developed for PHS Green Leaf website.
Version: 1.0
License: GNU General Public License v2 or later
License URI: http://www.gnu.org/licenses/gpl-2.0.html
Tags: black, brown, orange, tan, white, yellow, light, one-column, two-columns, right-sidebar, flexible-width, custom-header, custom-menu, editor-style, featured-images, microformats, post-formats, rtl-language-support, sticky-post, translation-ready
Text Domain: phsgreenleaf

This theme, like WordPress, is licensed under the GPL.
Use it to make something cool, have fun, and share what you've learned with others.
*/
?>

<!DOCTYPE HTML>
<html lang="en">

    <head>
		<meta charset="<?php bloginfo( 'charset' ); ?>">
		<title><?php wp_title( '|', true, 'right' ); ?></title>
		
		
		<!-- Mobile Specific Meta -->
		<meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1">	
		<meta http-equiv="X-UA-Compatible" content="IE=9; IE=8; IE=7; IE=EDGE" />		
        <link rel="apple-touch-icon" sizes="57x57" href="/apple-icon-57x57.png">
		<link rel="apple-touch-icon" sizes="60x60" href="/apple-icon-60x60.png">
		<link rel="apple-touch-icon" sizes="72x72" href="/apple-icon-72x72.png">
		<link rel="apple-touch-icon" sizes="76x76" href="/apple-icon-76x76.png">
		<link rel="apple-touch-icon" sizes="114x114" href="/apple-icon-114x114.png">
		<link rel="apple-touch-icon" sizes="120x120" href="/apple-icon-120x120.png">
		<link rel="apple-touch-icon" sizes="144x144" href="/apple-icon-144x144.png">
		<link rel="apple-touch-icon" sizes="152x152" href="/apple-icon-152x152.png">
		<link rel="apple-touch-icon" sizes="180x180" href="/apple-icon-180x180.png">
		<link rel="icon" type="image/png" sizes="192x192"  href="/android-icon-192x192.png">
		<link rel="icon" type="image/png" sizes="32x32" href="/favicon-32x32.png">
		<link rel="icon" type="image/png" sizes="96x96" href="/favicon-96x96.png">
		<link rel="icon" type="image/png" sizes="16x16" href="/favicon-16x16.png">
		<link rel="manifest" href="/manifest.json">
		<meta name="msapplication-TileColor" content="#ffffff">
		<meta name="msapplication-TileImage" content="/ms-icon-144x144.png">
		<meta name="theme-color" content="#ffffff">
		<meta name="google-site-verification" content="1CxZyC0fCzIvrSsGkuXMzp3LiVfpKLf0MPwA1c_pejs" />
		<link rel="pingback" href="<?php bloginfo( 'pingback_url' ); ?>">
		
		<!-- HTML5 Shim and Respond.js IE8 support of HTML5 elements and media queries -->
		<!--[if lt IE 9]>
		  <link rel="stylesheet" type="text/css" href="http://www.phsgreenleaf.co.uk/wp-content/themes/phsgreenleaf/css/ie8.css">  
		  <script src="https://oss.maxcdn.com/libs/html5shiv/3.7.0/html5shiv.js"></script>
		  <script src="https://oss.maxcdn.com/libs/respond.js/1.4.2/respond.min.js"></script>
		<![endif]-->

		<!-- Favicon Icon -->
		<link rel="shortcut icon" href="<?php echo get_template_directory_uri(); ?>/images/favicon.ico">
		
		
		

		<?php wp_head(); ?>
		
		
		
		
		
		

</head>
	
	
	
    
<body <?php body_class(); ?>>



<?php global $greenleaf_theme_options; ?>


<?php echo $greenleaf_theme_options['google_tag_manager']; ?>



<div class="se-pre-con" id="preLoaderWrapper"></div>


<div id="search-form" class="search-form-wrap hide">

	<!--
	<form role="search" method="get" class="search-form" action="<?php //echo esc_url( home_url( '/' ) ); ?>">
		<label>
			<span class="screen-reader-text"><?php // _ex( 'Search for:', 'label', 'radiate' ); ?></span>
			<input type="search" class="search-field" placeholder="<?php //echo esc_attr_x( 'Search &hellip;', 'placeholder', 'radiate' ); ?>" value="<?php //echo esc_attr( get_search_query() ); ?>" name="s">
		</label>
		<input type="submit" class="search-submit" value="<?php //echo esc_attr_x( 'Search', 'submit button', 'radiate' ); ?>">
	</form>
	-->


			<?php echo get_search_form(false); ?>

	
	<span class="search-close-btn"><i class="fa fa-times" aria-hidden="true"></i></span>
</div>





<div class="container">
	<div class="row-fluid">
		<div class="col-xs-12 col-sm-12 col-md-12 col-lg-12 no-padding-left no-padding-right">
			<nav id="green-navbar" class="navbar navbar-default">
				<div class="container-fluid">
					<div class="navbar-header">
						<button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#navbar" aria-expanded="false" aria-controls="navbar">
							<span class="sr-only">Toggle navigation</span>
							<span class="icon-bar"></span>
							<span class="icon-bar"></span>
							<span class="icon-bar"></span>
						</button>
						<a class="navbar-brand" href="<?php bloginfo('url'); ?>"><img src="<?php echo $greenleaf_theme_options['logo_header']['url']; ?>" alt="logo" class="img-responsive" ></a>
					</div>
					<div id="navbar" class="navbar-collapse collapse">
						
						<?php
							wp_nav_menu( array(
											'menu'              => 'primary',
											'theme_location'    => 'primary',
											'depth'             => 2,
											'container'         => 'div',
											/*'container_class'   => 'collapse navbar-collapse',
											'container_id'      => 'bs-example-navbar-collapse-1',*/
											'menu_class'        => 'nav navbar-nav',
											'fallback_cb'       => 'wp_bootstrap_navwalker::fallback',
											'walker'            => new wp_bootstrap_navwalker())
							);
						?>
						<!--
						<ul class="nav navbar-nav navbar-right">
							<li><a href="<?php //echo get_permalink( get_page_by_path( 'about-us' ) ); ?>" class="navbar-logo-alternative"><img src="<?php //echo $greenleaf_theme_options['logo_header_small']['url']; ?>" alt="logo" class="img-responsive" ></a></li>
							<li class="header-tel"><a href="tel:<?php //echo $greenleaf_theme_options['header_contact_no']; ?>"><i class="fa fa-phone" aria-hidden="true"></i> <?php //echo $greenleaf_theme_options['header_contact_no']; ?></a></li>
							<li>
								<a href="javascript:;" id="menu-search-btn"><i class="fa fa-search" aria-hidden="true"></i></a>
							</li>
						</ul>
						-->
					</div><!--/.nav-collapse -->
					
				</div>
			</nav>
		</div>
	</div>
	
	<div class="row-fluid">
		<div class="col-xs-12 col-sm-12 col-md-12 col-lg-12 no-padding-left no-padding-right">
			<?php custom_breadcrumbs(); ?>
		</div>
	</div>
	
</div>



<div class="clear"></div>