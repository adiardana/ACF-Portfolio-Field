<?php

/*
Plugin Name: ACF Portfolio Lists
Plugin URI:
Description: Portfolio field for Puri Idaman website
Version: 1.0.0
Author: Adi Ardana
Author URI:
License: GPLv2 or later
License URI: http://www.gnu.org/licenses/gpl-2.0.html
*/




// 1. set text domain
// Reference: https://codex.wordpress.org/Function_Reference/load_plugin_textdomain
load_plugin_textdomain( 'acf-portfolio_lists', false, dirname( plugin_basename(__FILE__) ) . '/lang/' );




// 2. Include field type for ACF5
// $version = 5 and can be ignored until ACF6 exists
function include_field_types_portfolio_lists( $version ) {

	include_once('acf-portfolio_lists-v5.php');

}

add_action('acf/include_field_types', 'include_field_types_portfolio_lists');




// 3. Include field type for ACF4
function register_fields_portfolio_lists() {

	include_once('acf-portfolio_lists-v4.php');

}

add_action('acf/register_fields', 'register_fields_portfolio_lists');




?>