<?php
/*
 * @package Mon_Plugin
 * @version 1.0.0
 */
/*
Plugin Name: Mon plugin
Plugin URI: http://localhost/easy-wordpress
Description: Mon premier plugin
Author: Cyril Gourdon
Version: 1.0.0
Author URI: http://localhost/easy-wordpress
*/

function bonjour_page()
{
    echo '  , Bonjour toto';
}

add_action('admin_notices', 'bonjour_page');// appler avec le hook

function menuperso()
{
    add_menu_page('Mon plugin', 'Plugin bonjour', 'administrator', '/slug_bonjour', 'bonjour_page', 'dashicons-admin-customizer', 2);// ajoute le plugin sur l'administrateur
}

add_action('admin_menu', 'menuperso');

function add_custom_css()
{
    wp_enqueue_style('custom', get_template_directory_uri().'/custom.css');
}

add_action('wp_enqueue_scripts', 'add_custom_css');//appelle pour le css

function bonjour_shortcode()
{
    return '<b><i> Bonjour à tous ! </i></b>';
}

add_shortcode('bonjour', 'bonjour_shortcode');
