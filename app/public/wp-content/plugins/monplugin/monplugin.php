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

add_action('admin_notices', 'bonjour_page'); // appler avec le hook

function menuperso()
{
    add_menu_page('Mon plugin', 'Plugin bonjour', 'administrator', '/slug_bonjour', 'bonjour_page', 'dashicons-admin-customizer', 2); // ajoute le plugin sur l'administrateur
}

add_action('admin_menu', 'menuperso');

function add_custom_css()
{
    wp_enqueue_style('custom', get_template_directory_uri().'/custom.css');
}

add_action('wp_enqueue_scripts', 'add_custom_css', 999); //appelle pour le css 999 c'est la priorité

function bonjour_shortcode()
{
    return '<b><i> Bonjour à tous ! Je susi un shortcode alias </i></b>';
}

add_shortcode('bonjour', 'bonjour_shortcode'); // alias en tant que shorcode (nom, fonction), ensuite aller sur la page et appeler le shortcode [bonjour]

function custom_warning()
{
    echo '<li>Point d\'attention 1</li>';
}

function say_hello()
{
    $title = apply_filters('plugin_warnings_title', 'Liste des points d\'_attention avec le filter'); // hook filtre
    echo '<h2>'.$title.' :</h2>';
    echo '<h2>Liste des points d\'_attention : </h2>';
    echo '<ul>';
    do_action('plugin_warnings');
    echo '</ul>';
}

add_action('admin_notices', 'say_hello');

add_action('plugin_warnings', 'custom_warning');
