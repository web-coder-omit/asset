<?php
/**
 * Plugin Name: asset management 
 * Plugin URI:  Plugin URL Link
 * Author:      Plugin Author Name
 * Author URI:  Plugin Author Link
 * Description: This plugin make for pratice wich is "Asset Management".
 * Version:     0.1.0
 * License:     GPL-2.0+
 * License URL: http://www.gnu.org/licenses/gpl-2.0.txt
 * text-domain: am
*/


function scripts_function() {
    wp_register_script('first_js_file', plugin_dir_url(__FILE__)."/asset/JS/main.js");
}

add_action('wp_enqueue_scripts', 'scripts_function');

function btn_function($att) {
    $default = array(
        'url' => "www.facebook.com",
        'text' => "facebook"
    );
    $att_def = shortcode_atts($default, $att);
    
    return sprintf("<a href='%s'>%s</a>", $att_def['url'], $att_def['text']);
}

add_shortcode('btn', 'btn_function');






?>