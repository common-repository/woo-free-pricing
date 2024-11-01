<?php
/*
Plugin Name:  WooCommerce Free Pricing
Description:  Allow Woocommerce products to appear as 'Free' rather than 0 (e.g. $0)
Version:      0.1
Author:       rynmdk
Author URI:   https://rynmdk.co.uk
License:      GPL2
*/

// Start Plugin


add_filter( 'woocommerce_get_price_html', 'bbloomer_price_free_zero_empty', 100, 2 );
  
  function bbloomer_price_free_zero_empty( $price, $product ){
   
  if ( '' === $product->get_price() || 0 == $product->get_price() ) {
      $price = '<span class="woocommerce-Price-amount amount">FREE</span>';
  } 
   
  return $price;
  }