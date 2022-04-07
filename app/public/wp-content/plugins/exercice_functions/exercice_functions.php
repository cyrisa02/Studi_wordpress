<?php
/*
 * @package exercice_fonctions
 * @version 1.0.0
 */
/*
Plugin Name: Exercice Fonctions WordPress
Plugin URI: http://localhost/studi_site
Description: Exercice d'application sur les focntions Wordpress
Author: Cyril Gourdon
Version: 1.0.0
Author URI: http://localhost/studi_site
*/

function ma_page_admin()
{
    echo '<h1>Bienvenue sur la page d\'administration de mon extension !</h1>';
}

add_action('admin_notices', 'bonjour_page'); // appler avec le hook

function mon_menu_admin()
{
    add_menu_page('Exercice Fonctions WordPress', 'Mon extension', 'administrator', 'exercice_fonctions/ma-page-admin.php', 'ma_page_admin', 'dashicons-admin-customizer', 2); // ajoute le plugin sur l'administrateur dans le menu
}

add_action('admin_menu', 'mon_menu_admin');

function ma_fonction_bonjour()
{
    return '<h1>Bonjour et bienvenue dans mon site WordPress !</h1>';
}
add_shortcode('bonjour', 'ma_fonction_bonjour');

//À partir des différentes fonctions WordPress décrites dans ce cours, vous allez créer une extension nommée exercice_fonctions, qui affichera un lien dans le menu d'administration appelé Mon extension et qui ouvrira une page dans l'administration affichant un titre : Bienvenue sur la page d'administration de mon extension !.

//L'extension devra également permettre d'utiliser un shortcode [bonjour] qui, après l'avoir inséré dans le contenu d'un article, devra afficher un titre de niveau 1 comportant le texte Bonjour et bienvenue dans mon site WordPress !.

