<?php
/*
Plugin Name: User Form data in PDF Send Email or Download 
Description: A plugin to create a form that generates a PDF from user details and sends it via email or allows direct download.
Version: 1.0
Author: Umar Khtab
*/

// Prevent direct access
if ( ! defined( 'ABSPATH' ) ) {
    exit;
}

// Include main classes on Plugin Activation
require_once plugin_dir_path( __FILE__ ) . 'includes/class-user-pdf-form.php';
require_once plugin_dir_path( __FILE__ ) . 'includes/class-user-pdf-form-settings.php';

// Initialize the plugin on Activation of Plugin
function upf_init() {
    User_PDF_Form::init();
    User_PDF_Form_Settings::init();
}
add_action( 'plugins_loaded', 'upf_init' );
