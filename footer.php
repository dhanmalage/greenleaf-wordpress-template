
<?php global $greenleaf_theme_options; ?>

<div class="hide direct-debit-url-text"><?php echo $greenleaf_theme_options['direct_debit_url']; ?></div>

<!-- enquire now bootstrap modal -->
<div class="modal fade" id="enquire" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
  <div class="modal-dialog" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
        <h4 class="modal-title" id="myModalLabel">Enquire Now</h4>
      </div>
      <div class="modal-body">
        <?php echo do_shortcode($greenleaf_theme_options['enquire_now']); ?>
      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
      </div>
    </div>
  </div>
</div>

<!-- woocommerce artificial products enquire now on Payment Options tab bootstrap modal -->
<div class="modal fade" id="enquireWoo" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
  <div class="modal-dialog" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
        <h4 class="modal-title" id="myModalLabel">Enquire Now</h4>
      </div>
      <div class="modal-body">
        <?php echo do_shortcode('[contact-form-7 id="2265" title="enquire now WooCommerce"]'); ?>
      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
      </div>
    </div>
  </div>
</div>


<!-- Modal submit cart mail -->

<div class="modal fade" id="product-enquire-now" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
	<div class="modal-dialog" role="document">
		<div class="modal-content">
			<div class="modal-header">
				<button type="button" class="close" data-dismiss="modal" aria-label="Close">
					<span aria-hidden="true">&times;</span>
				</button>
				<h4 class="modal-title" id="myModalLabel">Enquire Now</h4>
			</div>
			<div class="modal-body">
				<p class="enquire-status"></p>
				<!-- <p class="visualiser-register-link"><strong>*Important: </strong> This will send your request data to phs green leaf.</p> -->
				
				
					<div class="row">
						<div class="col-xs-12 col-sm-6 col-md-6 col-lg-6">
							<div id="form-product-data" class="form-product-wrap">
											
							</div>
						</div>
						<div class="col-xs-12 col-sm-6 col-md-6 col-lg-6">
							<form id="single-product-enquire">
							  <div class="form-group">
								<label for="name">Your Name:</label>
								<input required type="text" class="form-control" name="name" id="name">
							  </div>
							  <div class="form-group">
								<label for="email">Email address:</label>
								<input required type="email" class="form-control" name="email" id="email">
							  </div>
							  <div class="form-group">
								<label for="name">Contact No:</label>
								<input required type="text" class="form-control" name="contact" id="contact">
							  </div>
							  <div class="form-group">
								<label for="name">Message:</label>
								<textarea class="form-control" name="message" id="message"></textarea>
							  </div>
							  <input type="hidden" id="enq_prod_id">
							  <button type="submit" class="enq-submit-btn btn btn-secondary">Send</button>
							</form>
						</div>
					</div>
				
			</div>
			<div class="modal-footer">
				<button type="button" id="enq_close" class="visualizer-info-modal-btn btn btn-secondary" data-dismiss="modal">Close</button>
			</div>
		</div>
	</div>
</div>

<div class="clear"></div>

<!--
<div class="fixed-footer">
	<footer>
		<div class="container">
			<div class="row">
				<div class="col-xs-12 col-sm-6 col-md-6 col-lg-6">
					<div class="footer-copyright">
						<p>PHS Greenleaf &copy; <?php echo date("Y"); ?></p>
					</div>
				</div>
				<div class="col-xs-12 col-sm-6 col-md-6 col-lg-6">
					<div class="footer-call-us">
						<p>Call us now on <a href="tel:<?php echo $greenleaf_theme_options['header_contact_no']; ?>"><?php echo $greenleaf_theme_options['header_contact_no']; ?></a></p>
					</div>
				</div>
			</div>
		</div>
	</footer>
</div>
-->

<footer>
	<div class="container-fluid">
		<div class="row">
			<div class="col-xs-12 col-sm-12 col-md-12 col-lg-12 no-padding-left no-padding-right">
				<div class="footer-social-links">
					<h4>Follow PHS</h4>
					<ul>
					
						<?php if($greenleaf_theme_options['footer_social_twitter'] != null || $greenleaf_theme_options['footer_social_twitter'] != ''): ?>
							<li class="twitter"><a href="<?php echo $greenleaf_theme_options['footer_social_twitter']; ?>" target="_blank"><i class="fa fa-twitter" aria-hidden="true"></i></a></li>
						<?php endif; ?>
						
						<?php if($greenleaf_theme_options['footer_social_linkedin'] != null || $greenleaf_theme_options['footer_social_linkedin'] != ''): ?>
							<li class="linkedin"><a href="<?php echo $greenleaf_theme_options['footer_social_linkedin']; ?>" target="_blank"><i class="fa fa-linkedin" aria-hidden="true"></i></a></li>
						<?php endif; ?>
						
						<?php if($greenleaf_theme_options['footer_social_google'] != null || $greenleaf_theme_options['footer_social_google'] != ''): ?>
							<li class="google"><a href="<?php echo $greenleaf_theme_options['footer_social_google']; ?>" target="_blank"><i class="fa fa-google-plus" aria-hidden="true"></i></a></li>
						<?php endif; ?>
						
						<?php if($greenleaf_theme_options['footer_social_youtube'] != null || $greenleaf_theme_options['footer_social_youtube'] != ''): ?>
							<li class="youtube"><a href="<?php echo $greenleaf_theme_options['footer_social_youtube']; ?>" target="_blank"><i class="fa fa-youtube-play" aria-hidden="true"></i></a></li>
						<?php endif; ?>
						
						<?php if($greenleaf_theme_options['footer_social_instagram'] != null || $greenleaf_theme_options['footer_social_instagram'] != ''): ?>
							<li class="instagram"><a href="<?php echo $greenleaf_theme_options['footer_social_instagram']; ?>" target="_blank"><i class="fa fa-instagram" aria-hidden="true"></i></a></li>
						<?php endif; ?>
					</ul>
				</div>
			</div>
		</div>
		<div class="row">
			<div class="col-xs-12 col-sm-12 col-md-12 col-lg-12 no-padding-left no-padding-right">
				<div class="footer-navigation">
					<div class="container footer-navigation-inner">
						<div class="row">							
							<div class="col-xs-12 col-sm-6 col-md-4">
								<div class="footer-menu-wrap">								
									<?php if ( is_active_sidebar( 'footer-sidebar-1' ) ) : ?>
										<div id="primary-sidebar" class="primary-sidebar widget-area" role="complementary">
											<?php dynamic_sidebar( 'footer-sidebar-1' ); ?>
										</div><!-- #primary-sidebar -->
									<?php endif; ?>
								</div>
							</div>
							<div class="col-xs-12 col-sm-6 col-md-4">
								<div class="footer-menu-wrap">
									<?php if ( is_active_sidebar( 'footer-sidebar-2' ) ) : ?>
										<div id="primary-sidebar" class="primary-sidebar widget-area" role="complementary">
											<?php dynamic_sidebar( 'footer-sidebar-2' ); ?>
										</div><!-- #primary-sidebar -->
									<?php endif; ?>
								</div>
							</div>
							<div class="col-xs-12 col-sm-6 col-md-4">
								<div class="footer-menu-wrap">
									<?php if ( is_active_sidebar( 'footer-sidebar-3' ) ) : ?>
										<div id="primary-sidebar" class="primary-sidebar widget-area" role="complementary">
											<?php dynamic_sidebar( 'footer-sidebar-3' ); ?>
										</div><!-- #primary-sidebar -->
									<?php endif; ?>
								</div>
							</div>
						</div>
					</div>
				</div>
			</div>
		</div>
		<div class="row">
			<div class="col-xs-12 col-sm-12 col-md-12 col-lg-12 no-padding-left no-padding-right">
				<div class="container">
					<div class="row footer-copyrights">
						<p class="footer-reference">
							<?php echo $greenleaf_theme_options['health_benifits_section1_reference']; ?>
						</p>
						<p>
							<?php echo $greenleaf_theme_options['footer_text']; ?>
						</p>
					</div>
				</div>
			</div>
		</div>
	</div>
</footer>


<script type="text/javascript">
	var homeUrl = '<?= home_url(); ?>';
	var contactUrl = '<?= get_permalink( get_page_by_path( 'contact-us' ) ); ?>';
</script>

	<!-- END FOOTER -->	
	<?php wp_footer(); ?>
	
	
<!-- Google Code for Remarketing Tag -->
<!--------------------------------------------------
Remarketing tags may not be associated with personally identifiable information or placed on pages related to sensitive categories. See more information and instructions on how to setup the tag on: http://google.com/ads/remarketingsetup
--------------------------------------------------->
<script type="text/javascript">
/* <![CDATA[ */
var google_conversion_id = 871990630;
var google_custom_params = window.google_tag_params;
var google_remarketing_only = true;
/* ]]> */
</script>
<script type="text/javascript" src="//www.googleadservices.com/pagead/conversion.js">
</script>
<noscript>
<div style="display:inline;">
<img height="1" width="1" style="border-style:none;" alt="" src="//googleads.g.doubleclick.net/pagead/viewthroughconversion/871990630/?value=1&amp;guid=ON&amp;script=0"/>
</div>
</noscript>

	
	
<?php echo $greenleaf_theme_options['analytics_script']; ?>


<?php

	if ( !is_page( 'contact-us' ) ) {
		echo $greenleaf_theme_options['footer_chat_code']; 
	} 

?>

        
    </body>

</html>