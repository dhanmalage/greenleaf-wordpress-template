<?php
/**
 * Created by PhpStorm.
 * User: Dananjaya
 * Date: 7/21/2016
 * Time: 5:14 PM
 */

?>

<?php get_header(); ?>

<?php
	if ( have_posts() ) {
		while ( have_posts() ) {
			the_post();
?>
            
            

<div class="container content-start-period">
    <div class="row-fluid">
        <div class="col-xs-12 col-sm-12 col-md-12 col-lg-12 no-padding-left no-padding-right">

            <div class="contact-page-banner">
                <h1><?php the_title(); ?></h1>
                <?php the_content(); ?>
            </div>

        </div>
    </div>
</div>

<div class="clear"></div>

<div class="container content-start-period">
    <div class="row-fluid">
        <div class="col-xs-12 col-sm-12 col-md-12 col-lg-12 no-padding-left no-padding-right">

			<div class="contact-page-nav">
			
				<ul class="nav nav-tabs">
				<li><a data-toggle="pill" href="#home">Email us</a></li>
				<li><a data-toggle="pill" href="#menu1">Call us</a></li>
				<li class="active"><a data-toggle="pill" href="#menu2">Head office</a></li>
				<li><a data-toggle="pill" href="#menu3">Online chat</a></li>
			  </ul>
			  
			</div>
			
			<div class="tab-content">
			
				<div id="home" class="tab-pane fade in">
				  <h3>Email us</h3>
				  <div class="col-xs-12 col-sm-6 col-md-6 col-lg-6 no-padding-left no-padding-right">
					<div class="contact-page-form">
						<?php echo do_shortcode('[contact-form-7 id="120" title="Contact form 1"]'); ?>		
					</div>
				  </div>
				</div>
				
				<div id="menu1" class="tab-pane fade">
				  <h3>Call us</h3>
				  <p>Our offices are open 9:00 to 17:00 Monday to Friday.</p>
				  <h3 class="contact-page-number"><i class="fa fa-phone" aria-hidden="true"></i> <?php echo $greenleaf_theme_options['header_contact_no']; ?></h3>
				</div>
				
				<div id="menu2" class="tab-pane fade in active">
					<div class="col-xs-12 col-sm-4 col-md-4 col-lg-4 no-padding-left no-padding-right">
						<h3>Head office</h3>
						
						<address class="contact-page-address">
						  <strong>PHS Group</strong><br>
						  Block B<br>
						  Western Industrial Estate<br>
						  Caerphilly<br>
						  CF83 1XH<br>
						</address>
						
						<h3 class="contact-page-number"><i class="fa fa-phone" aria-hidden="true"></i> <?php echo $greenleaf_theme_options['header_contact_no']; ?></h3>
						
					</div>
					<div class="col-xs-12 col-sm-6 col-md-6 col-lg-6 no-padding-left no-padding-right">
						<div class="contact-page-form">
							<?php echo do_shortcode('[contact-form-7 id="120" title="Contact form 1"]'); ?>		
						</div>
					</div>					
				</div>
				
				<div id="menu3" class="tab-pane fade">					
					<h3>Online chat</h3>						
					<p>Our online chat service is available from 9:00am to 17:00 Monday to Friday.</p>	
					
					<a id='whoson_chat_link'></a>
					
					<?php echo $greenleaf_theme_options['footer_chat_code']; ?>
					
					<!--
					<a href="https://hosted3.whoson.com/chat/chatstart.htm?domain=www.phsgreenleaf.co.uk" onclick="javascript:window.open('https://hosted3.whoson.com/chat/chatstart.htm?domain=www.phsgreenleaf.co.uk','wochat','width=484,height=361');return false;"><img src="<?php // echo get_template_directory_uri(); ?>/images/stat.png" alt="chat"></a>
					-->
					
				</div>
												
			  </div>

        </div>
    </div>
</div>

<div class="clear"></div>


<?php
		} // end while
	} // end if
?>

<!-- Google Code for Contact Us Conversion Page -->
<script type="text/javascript">
/* <![CDATA[ */
var google_conversion_id = 871990630;
var google_conversion_language = "en";
var google_conversion_format = "3";
var google_conversion_color = "ffffff";
var google_conversion_label = "uGnNCMegwWoQ5ormnwM";
var google_remarketing_only = false;
/* ]]> */
</script>
<script type="text/javascript" src="//www.googleadservices.com/pagead/conversion.js">
</script>
<noscript>
<div style="display:inline;">
<img height="1" width="1" style="border-style:none;" alt="" src="//www.googleadservices.com/pagead/conversion/871990630/?label=uGnNCMegwWoQ5ormnwM&amp;guid=ON&amp;script=0"/>
</div>
</noscript>


<?php get_footer(); ?>

