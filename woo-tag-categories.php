<?php
/**
 * Plugin Name: WooCommerce Webhook For Categories And Tags
 * Description: This plugins is for add webhook in woocommerce when user do any action like create, update, or delete the categories and tags in wooCommerce Admin Page
 * Version: 0.0.1
 * Author: Fachruzi Ramadhan
 * Author URI: http://dhanhost.com
 */

// For WebHook Product Category
add_action( 'created_term', function( $term_id, $tt_id = '', $taxonomy = '' ) {
	if ( 'product_cat' === $taxonomy ) {
		do_action( 'woocommerce_admin_product_cat_created', $tt_id );
	}
}, 10, 3 );

add_action( 'edit_term', function( $term_id, $tt_id = '', $taxonomy = '' ) {
	if ( 'product_cat' === $taxonomy ) {
		do_action( 'woocommerce_admin_product_cat_updated', $tt_id );
	}
}, 10, 3 );

add_action( 'delete_term', function( $term_id, $tt_id = '', $taxonomy = '' ) {
	if ( 'product_cat' === $taxonomy ) {
		do_action( 'woocommerce_admin_product_cat_deleted', $tt_id );
	}
}, 10, 3 );

// For WebHook Product Tag
add_action( 'created_term', function( $term_id, $tt_id = '', $taxonomy = '' ) {
	if ( 'product_tag' === $taxonomy ) {
		do_action( 'woocommerce_admin_product_tag_created', $tt_id );
	}
}, 10, 3 );

add_action( 'edit_term', function( $term_id, $tt_id = '', $taxonomy = '' ) {
	if ( 'product_tag' === $taxonomy ) {
		do_action( 'woocommerce_admin_product_tag_updated', $tt_id );
	}
}, 10, 3 );

add_action( 'delete_term', function( $term_id, $tt_id = '', $taxonomy = '' ) {
	if ( 'product_tag' === $taxonomy ) {
		do_action( 'woocommerce_admin_product_tag_deleted', $tt_id );
	}
}, 10, 3 );
