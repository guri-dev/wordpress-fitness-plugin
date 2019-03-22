<?php
function fcp_custom_js_css() {
		wp_enqueue_script( 'fcp-form-js', plugins_url('/js/fcp-custom.js', dirname(__FILE__)), array( 'jquery' ), '1.38' );
		wp_enqueue_style( 'fcp-form-styles', plugins_url('/css/fcp-style.css',dirname(__FILE__)), array(), '1.40' );
}
add_action('wp_enqueue_scripts', 'fcp_custom_js_css');