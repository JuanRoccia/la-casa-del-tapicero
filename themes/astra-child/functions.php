<?php
function mychildtheme_enqueue_styles() {
    wp_enqueue_style('parent-style', get_template_directory_uri() . '/style.css');
    if (is_page('contact')) {
        wp_enqueue_style('contact-style', get_stylesheet_directory_uri() . '/contact.min.css');
    }
    wp_enqueue_style('child-style', get_stylesheet_directory_uri() . '/style.css', array('parent-style'), wp_get_theme()->get('Version'));
    wp_enqueue_style('child-style-min', get_stylesheet_directory_uri() . '/style.min.css', array('parent-style'), wp_get_theme()->get('Version'));
    wp_enqueue_script('parent-script', get_template_directory_uri() . '/script.js', array('jquery'), wp_get_theme()->get('Version'), true);
    wp_enqueue_script('child-script', get_stylesheet_directory_uri() . '/script.js', array('jquery'), wp_get_theme()->get('Version'), true);
    wp_enqueue_script('child-script-min', get_stylesheet_directory_uri() . '/script.min.js', array('jquery'), wp_get_theme()->get('Version'), true);
}
add_action('wp_enqueue_scripts', 'mychildtheme_enqueue_styles');

function whatsapp_link_shortcode() {
    $url = get_stylesheet_directory_uri() . '/assets/whatsapp_logo_icon_147205.svg';
    return '<a class="tooltip" href="https://wa.me/1234567890" id="whatsapp-icon" target="_blank" rel="noopener"><img src="' . $url . '" alt="Chat de WhatsApp"><span class="tooltip-text">¿En qué podemos ayudarte?</span></a>';
}
add_shortcode('whatsapp_link', 'whatsapp_link_shortcode');