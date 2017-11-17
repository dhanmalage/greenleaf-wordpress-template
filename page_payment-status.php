<?php
/**
 * Template Name: Payment Status
 *
 * @package WordPress
 * @subpackage GreenLeaf
 * @since GreenLeaf 1.0
 */
 ?>
 
<?php get_header(); ?>

<div class="container">
	<div class="row-fluid">
		<div class="col-md-12">
			<?php
			if ( have_posts() ) {
				while ( have_posts() ) {
					the_post();
					global $post;
			?>
				<div class="single-page-container">
					<h1><?php the_title(); ?></h1>
					<?php the_content(); ?>
				</div>
			<?php
				} // end while
			} // end if
			?>
				<div class="invoice-data">
				<?php
				
					global $woocommerce;
					if(isset($_GET['orderId'])){
						
						$order_id = $_GET['orderId'];
						
						//$order = wc_get_order( $order_id );	

						
						// Get an instance of the WC_Order object
						//$order = wc_get_order( $order_id );

						//$order_data = $order->get_data(); // The Order data
					}
				?>
				<!--
					<table>
						<tr>
							<td>Order ID</td>
							<td><?php // echo $order_id; ?></td>
						</tr>
						<tr>
							<td>Status</td>
							<td><?php //echo $order_data['status']; ?></td>
						</tr>
						<tr>
							<td>Payment Method</td>
							<td><?php //echo $order_data['payment_method']; ?></td>
						</tr>
						<tr>
							<td>Date</td>
							<td><?php //echo $order_data['date_created']->date('Y-m-d H:i:s'); ?></td>
						</tr>
					</table>
					-->
				<?php
/*
												
						$order_discount_total = $order_data['discount_total'];
						$order_discount_tax = $order_data['discount_tax'];
						$order_shipping_total = $order_data['shipping_total'];
						$order_shipping_tax = $order_data['shipping_tax'];
						$order_total = $order_data['cart_tax'];
						$order_total_tax = $order_data['total_tax'];
						$order_customer_id = $order_data['customer_id']; // ... and so on

						## BILLING INFORMATION:

						$order_billing_first_name = $order_data['billing']['first_name'];
						$order_billing_last_name = $order_data['billing']['last_name'];
						$order_billing_company = $order_data['billing']['company'];
						$order_billing_address_1 = $order_data['billing']['address_1'];
						$order_billing_address_2 = $order_data['billing']['address_2'];
						$order_billing_city = $order_data['billing']['city'];
						$order_billing_state = $order_data['billing']['state'];
						$order_billing_postcode = $order_data['billing']['postcode'];
						$order_billing_country = $order_data['billing']['country'];
						$order_billing_email = $order_data['billing']['email'];
						$order_billing_phone = $order_data['billing']['phone'];

						## SHIPPING INFORMATION:

						$order_shipping_first_name = $order_data['shipping']['first_name'];
						$order_shipping_last_name = $order_data['shipping']['last_name'];
						$order_shipping_company = $order_data['shipping']['company'];
						$order_shipping_address_1 = $order_data['shipping']['address_1'];
						$order_shipping_address_2 = $order_data['shipping']['address_2'];
						$order_shipping_city = $order_data['shipping']['city'];
						$order_shipping_state = $order_data['shipping']['state'];
						$order_shipping_postcode = $order_data['shipping']['postcode'];
						$order_shipping_country = $order_data['shipping']['country'];
					
					*/
				?>
				</div>
				
			
		</div>
	</div>
</div>

<?php get_footer(); ?>