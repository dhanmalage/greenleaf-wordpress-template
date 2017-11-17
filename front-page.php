<?php
/**
 * Created by PhpStorm.
 * User: Dananjaya
 * Date: 7/13/2016
 * Time: 3:12 PM
 */
?>

<?php get_header();?>

<div class="container">
    <div class="row-fluid no-padding-left no-padding-right">
        <div class="col-xs-12 col-sm-12 col-md-12 col-lg-12 no-padding-left no-padding-right">
            <div id="ytvideo" class="container options">
                <!-- <div id="video"></div> -->
				<!--
					<div id="wrapper">
						<div id="customElement">
							<div id="testText">
								<h1>jQuery.mb.YTPlayer</h1>
								<h2>An HTML5 Background player <br>for YouTube videos</h2>
							</div>
						</div>
					</div>
					<div id="video" class="player" data-property="{videoURL:'Uqg0EvTYTUc',containment:'#customElement', showControls:false, autoPlay:true, loop:true, mute:true, startAt:1, opacity:1, addRaster:true, quality:'default'}">My video</div>
                -->

                <div id="youtubevideoid" class="hide"><?php echo $greenleaf_theme_options['home_video_id']; ?></div>
                <div id="videofilter" class="hide"><?php echo $greenleaf_theme_options['home_video_filter']['rgba']; ?></div>
                <div id="posterImage" class="hide"><?php echo $greenleaf_theme_options['home_video_poster_image']['url']; ?></div>
                <div id="mobileimage" class="hide"><?php echo $greenleaf_theme_options['home_video_mobile_image']['url']; ?></div>
				
                <div id="video">

                    <div class="video-content-wrap">
                        <div id="myCarousel" class="carousel slide" data-ride="carousel">

                            <ul class="nav nav-pills nav-justified slider-nav-tabs">
                                <li data-target="#myCarousel" data-slide-to="0" class="active"><a class="naked-link" href="#"><?php echo $greenleaf_theme_options['home_slide1_tab']; ?></a></li>
                                <li data-target="#myCarousel" data-slide-to="1"><a class="naked-link" href="#"><?php echo $greenleaf_theme_options['home_slide2_tab']; ?></a></li>
                                <li data-target="#myCarousel" data-slide-to="2"><a class="naked-link" href="#"><?php echo $greenleaf_theme_options['home_slide3_tab']; ?></a></li>
                                <li data-target="#myCarousel" data-slide-to="3"><a class="naked-link" href="#"><?php echo $greenleaf_theme_options['home_slide4_tab']; ?></a></li>
							</ul>

                                <!-- Wrapper for slides -->
                                <div class="carousel-inner">

                                    <div class="item active" duration="10000">
                                        <span class="first-span"><?php echo $greenleaf_theme_options['home_slide1_title_small']; ?></span>
                                        <h2 class="vid-title text-uppercase">
											<span class="white"><?php echo $greenleaf_theme_options['home_slide1_title1']; ?></span>
                                            <span class="yellow"><?php echo $greenleaf_theme_options['home_slide1_title2']; ?></span>
                                            <span class="green"><?php echo $greenleaf_theme_options['home_slide1_title3']; ?></span>
										</h2>
                                        <div class="video-buttons full-width">
                                            <a href="<?php echo $greenleaf_theme_options['home_slide1_button_link']; ?>" class="find-more">Find Out More</a>
                                            <a href="javascript:;" class="inquire" data-toggle="modal" data-target="#enquire">ENQUIRE</a>
                                        </div>
                                    </div><!-- End Item -->

                                    <div class="item" duration="8000">
                                        <span class="first-span"><?php echo $greenleaf_theme_options['home_slide2_title_small']; ?></span>
                                        <h2 class="vid-title text-uppercase">
											<span class="white"><?php echo $greenleaf_theme_options['home_slide2_title1']; ?></span>
                                            <span class="yellow"><?php echo $greenleaf_theme_options['home_slide2_title2']; ?></span>
                                            <span class="green"><?php echo $greenleaf_theme_options['home_slide2_title3']; ?></span>										</h2>
                                        <div class="video-buttons full-width">
                                            <a href="<?php echo $greenleaf_theme_options['home_slide2_button_link']; ?>" class="find-more">Find Out More</a>
                                            <a href="javascript:;" class="inquire" data-toggle="modal" data-target="#enquire">ENQUIRE</a>
                                        </div>
                                    </div><!-- End Item -->

                                    <div class="item" duration="8000">
                                        <span class="first-span"><?php echo $greenleaf_theme_options['home_slide3_title_small']; ?></span>
                                        <h2 class="vid-title text-uppercase">
											<span class="white"><?php echo $greenleaf_theme_options['home_slide3_title1']; ?></span>
                                            <span class="yellow"><?php echo $greenleaf_theme_options['home_slide3_title2']; ?></span>
                                            <span class="green"><?php echo $greenleaf_theme_options['home_slide3_title3']; ?></span>
										</h2>
                                        <div class="video-buttons full-width">
                                            <a href="<?php echo $greenleaf_theme_options['home_slide3_button_link']; ?>" class="find-more">Find Out More</a>
                                            <a href="javascript:;" class="inquire" data-toggle="modal" data-target="#enquire">ENQUIRE</a>
                                        </div>
                                    </div><!-- End Item -->

                                    <div class="item" duration="8000">
                                        <span class="first-span"><?php echo $greenleaf_theme_options['home_slide4_title_small']; ?></span>
                                        <h2 class="vid-title text-uppercase">
											<span class="white"><?php echo $greenleaf_theme_options['home_slide4_title1']; ?></span>
                                            <span class="yellow"><?php echo $greenleaf_theme_options['home_slide4_title2']; ?></span>
                                            <span class="green"><?php echo $greenleaf_theme_options['home_slide4_title3']; ?></span>
										</h2>
                                        <div class="video-buttons full-width">
                                            <a href="<?php echo $greenleaf_theme_options['home_slide4_button_link']; ?>" class="find-more">Find Out More</a>
                                            <a href="javascript:;" class="inquire" data-toggle="modal" data-target="#enquire">ENQUIRE</a>
                                        </div>
                                    </div><!-- End Item -->

                                </div><!-- End Carousel Inner -->
                        </div><!-- End Carousel -->
                    </div>

                    <a href="<?php echo $greenleaf_theme_options['home_page_visualizer_button_link']; ?>" class="try-round">
                        <div class="try-our-wrap">
                            <hr>
                            <span class="try-our"><?php echo $greenleaf_theme_options['home_page_visualizer_button_small_text']; ?></span>
                            <hr>
                        </div>
                        <div class="visulaizer-text-wrap">
                            <span class="text-one"><?php echo $greenleaf_theme_options['home_page_visualizer_button_line1_text']; ?></span>
                            <span class="text-two"><?php echo $greenleaf_theme_options['home_page_visualizer_button_line2_text']; ?></span>
                        </div>
                    </a>

                </div>

            </div>
        </div>
    </div>
</div>

<div class="clear"></div>

<div class="container">
    <div class="row-fluid">
        <div class="col-xs-12 col-sm-12 col-md-12 col-lg-12 no-padding-left no-padding-right">
            <div class="contact-banner-wrapper">
                <div class="contact-banner">
                    <h3>Call us for a <span>FREE</span> quote on <a href="tel:<?php echo $greenleaf_theme_options['header_contact_no']; ?>"><?php echo $greenleaf_theme_options['header_contact_no']; ?></a> or <a href="<?php echo get_permalink( get_page_by_path( 'contact-us' ) ); ?>">Contact Us</a></h3>
                </div>
            </div>
        </div>
    </div>
</div>

<div class="clear"></div>

<?php if($greenleaf_theme_options['health_benifits_section_switch']): ?>

<div class="container">
    <div class="row-fluid">
        <div class="col-xs-12 col-sm-4 col-md-4 col-lg-4 no-padding-left no-padding-right">
            <div class="health-benifits health-benifits-section1 health-right-margin">
				<h2><?php echo $greenleaf_theme_options['health_benifits_section1_title']; ?></h2>
				<div class="description"><?php echo nl2br($greenleaf_theme_options['health_benifits_section1_description']); ?></div>
			</div>
        </div>
		<div class="col-xs-12 col-sm-4 col-md-4 col-lg-4 no-padding-left no-padding-right">
            <div class="health-benifits health-benifits-section2 health-right-margin">
				<img src="<?php echo $greenleaf_theme_options['health_benifits_section2_image1']['url'] ?>" class="img-responsive">
				<img src="<?php echo $greenleaf_theme_options['health_benifits_section2_image2']['url'] ?>" class="img-responsive">
			</div>
        </div>
		<div class="col-xs-12 col-sm-4 col-md-4 col-lg-4 no-padding-left no-padding-right">
            <div class="health-benifits health-benifits-section3">
				<h2><?php echo $greenleaf_theme_options['health_benifits_section3_title']; ?></h2>
				<div class="description">
					<ul>
				<?php 
					foreach($greenleaf_theme_options['health_benifits_section3_list'] as $row):
						echo '<li>'.$row.'</li>';
					endforeach;
				?>
					</ul>
				</div>
			</div>
        </div>
    </div>
</div>

<div class="clear"></div>

<?php endif; ?>

<div class="container">
    <div class="row-fluid">	
	<?php if (isset($greenleaf_theme_options['home_page_page_links']) && !empty($greenleaf_theme_options['home_page_page_links'])): ?>
	<?php 
		$i = 1;
		foreach ( $greenleaf_theme_options['home_page_page_links'] as $slide ) :
		  if($i <= 3):
		  ?>
			<div class="col-xs-12 col-sm-4 col-md-4">
				<div class="dummy"></div>
				<a href="<?php echo $slide['url']; ?>" class="thumbnail purple thumbnail-right-margin" style="background-image: url(<?php echo $slide['image']; ?>);">
					<h3><?php echo $slide['title']; ?></h3>
				</a>
			</div>
		  <?php
		  else:
		  ?>
			 <div class="col-xs-12 col-sm-6 col-md-6 grid-bottom-margin">
				<div class="dummy-6"></div>
				<a href="<?php echo $slide['url']; ?>" class="thumbnail purple thumbnail-right-margin" style="background-image: url(<?php echo $slide['image']; ?>);">
					<h3><?php echo $slide['title']; ?></h3>
				</a>
			</div>
		  <?php
		  endif;
		  $i++;
		endforeach;
	?>
	<?php endif; ?>	
    </div>
</div>

<div class="clear"></div>

<div class="container">
    <div class="row-fluid planting-services">
        <div class="col-xs-12 col-sm-8 planting-services-wrap-left">
            <?php
            if ( have_posts() ) {
                while ( have_posts() ) {
                    the_post();
            ?>
            <div class="content-read-more">
                <h1><?php if($greenleaf_theme_options['page_title_prefix_switch'] == true): echo $greenleaf_theme_options['page_title_prefix_text']; endif; ?> <?php the_title(); ?></h1>
                <p class="excerpt"><?php custom_echo(get_the_content(), 300); ?><br> <a href="" class="read">Read More</a></p>
                <div class="content"><?php the_content(); ?> <a href="" class="read-less">Read Less</a></div>
            </div>
            <?php
                } // end while
            } // end if
            ?>
        </div>
        <div class="col-xs-12 col-sm-4 planting-services-wrap-right">
		
			<div class="media">
				<div class="media-left">
					<img alt="royal warrant logo" class="media-object royal-warrant-logo-home" src="<?php echo $greenleaf_theme_options['page_content_royal_warrant_logo']['url']; ?>">					
				</div>
				<div class="media-body">
					<p><?php echo $greenleaf_theme_options['page_content_royal_warrant_text']; ?></p>
				</div>
			</div>
			
			<div id="why-us-height" class="our-clients">
                <a href="<?php echo get_permalink( get_page_by_path( 'what-our-clients-say' ) ); ?>"><h2>what our clients say</h2></a>
				
				<div class="row clients-row">
				<?php
					$args = array( 'post_type' => 'clients', 'posts_per_page' => 4 );
					$loop = new WP_Query( $args );
					while ( $loop->have_posts() ) : $loop->the_post();				  
				?>				  
                
                    <div class="col-xs-6">
                        <a href="<?php the_permalink(); ?>">
							<img alt="<?php the_title(); ?>" class="media-object client-small-logo img-responsive" src="<?php the_post_thumbnail_url(); ?>">
                        </a>
                    </div>                
				
				<?php
					endwhile;
					wp_reset_query();
				?>
				</div>
                
            </div>
			
			
        </div>
    </div>
</div>

<div class="clear"></div>

<div class="container">
    <div class="row-fluid">

        <div class="col-xs-12 col-sm-12 col-md-4 no-padding-left no-padding-right">
			<a href="<?php echo get_permalink( get_page_by_path( 'about-us' ) ); ?>" class="why-us-link">
				<div id="why-us-height" class="why-us-section">                
					<h2>Why Us ?</h2>
					<div class="full-width why-us-content">
						<h4>Expertise</h4>
						<span>Our team have the experience to design and deliver plant displays that best suit your environment, light and colour scheme.</span>
					</div>
					<div class="full-width why-us-content2">
						<h4>Quality</h4>
						<span>Plants are sourced from MPS certified growers who are committed to sustainable CSR programmes.</span>
					</div>
					<div class="full-width why-us-content3">
						<h4>Service</h4>
						<span>We will design, install and service the plant displays to ensure they always look their best</span>
					</div>
				</div>
			</a>
        </div>

        <div class="col-xs-12 col-sm-12 col-md-4 no-padding-left no-padding-right">
            <div id="why-us-height" class="about-us">

                <div class="row about-row">
                    <div class="media">
					  <div class="media-left">
						  <div class="round-number white">25<span>YEARS</span></div>
					  </div>
					  <div class="media-body">
						<span class="about-content text-uppercase">Experience providing plant and landscaping services to businesses in the UK</span>
					  </div>
					</div>
                </div>
				
                <div class="row about-row">
                    <div class="media">
					  <div class="media-left">
						  <div class="round-number yellow">14<span>DESIGNS</span></div>
					  </div>
					  <div class="media-body">
						<span class="about-content text-uppercase">Our Christmas tree range has 14 different designs to choose from, artificial and real, 3ft to 50ft trees</span>
					  </div>
					</div>
                </div>
				
                <div class="row about-row">
                    <div class="media">
					  <div class="media-left">
						  <div class="round-number-long white">8000<span>CUSTOMERS</span></div>
					  </div>
					  <div class="media-body">
						<span class="about-content text-uppercase">PHS Greenleaf currently have 8,000 customers across the UK</span>
					  </div>
					</div>
                </div>
				
            </div>
        </div>

        <div class="col-xs-12 col-sm-12 col-md-4 no-padding-left no-padding-right">
            <div id="why-us-height" class="widget-home-sidebar">
				 <?php if ( is_active_sidebar( 'sidebar-1' ) ) : ?>
				<div id="secondary" class="widget-area" role="complementary">
				<?php dynamic_sidebar( 'sidebar-1' ); ?>
				</div>
				<?php endif; ?>
            </div>
        </div>

    </div>
</div>

<div class="clear"></div>

<div class="container">
    <div class="row-fluid">

        <div class="col-xs-12 col-sm-6 col-md-6 home-gallery-wrap no-padding-left no-padding-right">
		
            <div id="inner-page-bottom-slider-small" class="slider-pro page-bottom-small-slider">			
			
                <div class="sp-slides">			
					<?php
                    if( have_rows('inner_page_bottom_slider') ):
                        while ( have_rows('inner_page_bottom_slider') ) : the_row();
                    ?>						
						<div class="sp-slide">
						<?php $image = get_sub_field('bottom_slider_images'); ?>
							<img class="sp-image img-responsive" alt="<?php echo $image['alt']; ?>" src="<?php echo $image['url']; ?>"
								 data-src="<?php echo $image['url']; ?>"
								 data-retina="<?php echo $image['url']; ?>"/>
						</div>
                    <?php

                        endwhile;

                    else :

                    endif;

                    ?>
                </div>
				
                <div class="gallery-title">
                    <h3>Gallery</h3>
                    <div class="gallery-ctrls">
                        <a href="javascript:;" id="gal-prev"></a>
                        <a href="javascript:;" id="gal-next"></a>
                    </div>
                </div>
            </div>
        </div>

        <div class="col-xs-12 col-sm-6 col-md-6 no-padding-left no-padding-right">
            <div class="full-width bottom-visualizer" id="bottom-visualizer">
                <img class="img-responsive" alt="Visualiser Background" src="<?php echo get_template_directory_uri(); ?>/images/gallery2.jpg">
                <div class="overlay">
                    <div id="vis-title" class="gallery-title">
                        <h3>Visualiser</h3>
                    </div>
                    <a href="<?php echo get_permalink( get_page_by_path( 'visualiser' ) ); ?>" class="try-round">
                        <div class="try-our-wrap">
                            <hr>
                            <span class="try-our">try our</span>
                            <hr>
                        </div>
                        <div class="visulaizer-text-wrap">
                            <span class="text-one">Virtual</span>
                            <span class="text-two">Visualiser</span>
                        </div>
                    </a>
                    <h3 class="text-uppercase text-center now-avail">Now<br>Available</h3>
                </div>
            </div>
        </div>

    </div>
</div>

<div class="clear"></div>


<?php get_footer();?>