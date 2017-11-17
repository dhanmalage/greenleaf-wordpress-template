<?php
/**
 * The template for displaying 404 pages (Not Found)
 *
 * @package WordPress
 * @subpackage Twenty_Thirteen
 * @since Twenty Thirteen 1.0
 */

get_header(); ?>

<div class="container content-start-period">
    <div class="row-fluid">
        <div class="col-xs-12 col-sm-12 col-md-12 col-lg-12 no-padding-left no-padding-right">
			<div class="not-found-wrapper">
				<h2>OOPS! - Could not find it</h2>
				<h5>4<span>0</span>4</h5>
				<p><a href="<?php echo home_url(); ?>">Back to home</a></p>
			</div>
		</div>
	</div>
</div>
<?php get_footer(); ?>