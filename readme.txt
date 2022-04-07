test-> Easy Wordpress 
studi -> studi_site



Sécurité
mise à jour à vérifier 
mot de passe de l'admin  
hébergeur avec php à jour et https comme wordpress.com

/// Avec XAMPP et en local, télécharger le ficheir wordpress.org 
avoir créer une bd dans phpmyadmin 
décompresser le fichier dans le repertoire xampp/htdocs/donnerlenomdusite
lnacer appache et mysql
taper dans le navigateur localhost/lenomdufichier
entrer le nom de la bd (voir phpmyadmin)
id: root 
code: vide 
------
une fois tout paramétré, pour accéder au mode admin 
dans l'URL, localhost/lenomdufichier/wp-login.php 
-----------------------
Gestion du formulaire "tout le monde peut s'inscrire"
c'est dans réglage/ général/ inscription

dans ajouter un utilisateur / rôle (abonné)


----------------------------
Création de page 
créer des blocs! pour ça utiliser le + bleu en haut à gauche (paragraphe, bouton, images, code)
pour récupérer le code les trois petits points en haut à droite 
----------------------------------
Création d'article 
catégorie: donner un nom à la rubrique (faut aller D'ABORD dans le dashboard/articles/ catégorie)
étiquette: des hashtags/mot clé pour une catégorie. Attention une catégorie peut être parent ou enfant, ce qui n'est pas pareil -> +++++ pour le SEO!

--------------------------
REGLAGES
Un permalien est une URL utilisée pour accéder à un contenu spécifique du site.

général: slogan, rôle Administrateur, Éditeur, Auteur, Contributeur et Abonné. 
ecriture: formatage des articles et aux options des catégories + email du rédacteur 
lecture : page d'accueil + nbre d'artilce par page+ moteur de recherche SEO
commentaires: échanges avec les users 
médias: taille des images
confidentialités: création d'une page de politique dde confidentialités OBLIGATOIRES (utiliser le guide de wordpress )

    Abonné : représente un utilisateur inscrit. Il ne peut que gérer son profil et a accès à un tableau de bord minimaliste, contrairement aux visiteurs non inscrits. Ce rôle est attribué par défaut aux nouveaux inscrits.

    Contributeur : peut rédiger des articles, mais n'a aucun contrôle sur leur publication ou leur correction. Un éditeur ou un administrateur devra valider leurs articles pour qu'ils puissent apparaître sur le site.

    Auteur : possède un contrôle total sur leurs articles. Il peut les rédiger et les mettre en ligne sans validation, y ajouter des médias et les lier à des étiquettes et des catégories existantes. Il peut également gérer les commentaires rattachés à ses propres articles.

    Éditeur : accès à tout ce qui concerne l'éditorial, c'est-à-dire la création de pages et la gestion des articles, de leurs catégories et de leurs étiquettes. Ce rôle est aussi en charge de la modération des commentaires et de la validation de tous les articles.

    Administrateurs : accès complet à toutes les fonctionnalités, incluant le paramétrage du site, les extensions, les thèmes et le code.
 ---------------------------
Navigation
page d'accueil: 
La création des pages se fait dans le menu Pages de l'administration. Il suffit d'ajouter deux pages (accueil et blog) et de les publier. puis menu réglages/lecture pour finir la config (page statique) +  blog -> Page des articles 
- regarder la ligne de flotaison pour le SEO 

avec l'arborescence et le travail de zoning, faire la nav 
Aller dans Apparence/ Menus / principal ou pied de page ou réseau sociaux
on peut mettre des pages (normal) mais aussi des catégories, des articles, des liens! 
pour créer des sous-menus: saisir le sous-menu avec la souris et le dépalcer vers la droite (comme un alinea) , apparait la notion sous-élément 

-------------------------
les styles et thèmes 
Apparence 
TOUJOURS supprimer les thèmes qu'on utilise pas -> Sécurité
POur modifier un thème=> créer un thème enfant, on a besoin de l'extension Generate Child Theme
Extensions/ajouter/Générate Child Theme un thème enfant/ installer maintenant / activer
puis Générer le thème enfant 
puis aller sur personaliser

une fois les modifs réalisées appuyer sur publier

---------------------------
Exetnsions 
All In One WP Migration, par l'éditeur ServMask, est une extension permettant de créer et d'importer facilement des sauvegardes d'un site WordPress. Il est recommandé de l'utiliser pour créer une sauvegarde du site avant chaque mise à jour d'une extension ou du noyau, afin de pouvoir remettre le site dans un état utilisable en cas d'incompatibilités.

Page Builder par siteorigin (très bine pour le responsive)
Widgets couramment utilisés

Voici une liste des widgets les plus utilisés, parmi ceux proposés par Page Builder :

    Galerie : affiche des images, les unes à la suite des autres.

    HTML personnalisé : permet de saisir directement du code HTML dans un éditeur.

    Mise en page Builder : permet d'ajouter des rangées à l’intérieur d'une colonne.

    SiteOrigin bouton : permet de créer des boutons avec un style personnalisé.

    SiteOrigin Carrousel d'articles : permet d'afficher des articles par catégorie.

    SiteOrigin diaporama : affiche un slider, c'est-à-dire un carrousel d'images défilantes.

    SiteOrigin gros titre : permet de baliser correctement les titres H1, H2, H3, etc.

    SiteOrigin Services : affiche une liste d'icônes avec un logo et un texte. Utile pour lister des partenaires ou des compétences.

    pour dupliquer des pages- > duplicate page
    gestion globale des commentaires -> disable comments
    changer la place des boutons sur le dashboard-> Admin Menu Editor


    WPEdit pour les caractère spéciaux en maths par ex 
    Smart Slider 3 -> slider d'image et de texte
    Polylang -> on voit les pages en anglais ou en français 

    Really Simple SSL -> https
    WP maintenance Mode -> message  site en maintenance
    Akismet Anti-Spam , demande un token 
    WordFence security -> firewall 

WP Super cache -> rapidité pour le site comme react 
Wordpress download manager -> pour les user qui veulent télécharger nos médias + shortcode

-----------------------
Form 
plugin WPForms une fois activé, aller dans WPForms/Réglage 
Aller dans validation pour paramétrer les messages du formulaire (require etc)
reCaptcha (besoind d'un compte google) +2 clés uniquement en PRODUCTION!!!!

Puis WPFORMS/Ajouter 
paramétrer dans settings / general puis notifications puis confirmation

Ne pas oublier SAVE pour l'enregistrer puis aller dans Pages/ c''est comme un widgets/bloc 
--------------------------------
plugin WooCommerce 
template : storefront 
mettre la boutique en page d'accueil: apparence/personnaliser / réglage de la page d'accueil / page statique + page des articles = Blog 
Publier 
--
changer les rôles des users -> réglage / général / rôle par défaut de tout nouveau compte = client 
enregistrer 
--
WooCommerce / réglage -> paramétrer uniquement France +activer la taxe ou non 
produits -> Inventaire (gestion des stocks, kanban)
TVA (mettre les prix en TTC)
Expédition ---- classe d'Expédition comme produits lours, alimentaires etc...
modes de paiement 
WooCommerce / Produits / catégories etiquettes /Attribut (pierre ronde, carrée, rectangulaire)/ Promotion
---
Produits Ajouter 
Pour afficher la liste des produits mis en avant, il faut utiliser le shortcode [products limit="4"
columns="2" visibility="featured"]
---
Woocommerce Commande

-----
SEO 

régler les permaliens -> mettre "titre de la publication" 
donner des préfixes des catégories et des prefixes aux étiquettes 
installer l'extension Yoast SEO 
réseaux sociaux -> OpenGraph = balise méta 
import/export pour la production migration vers un autre site 
créer le robots.txt 
Editeur par lot: pour modifier l'ENSEMBLE des meta données
Optimiser les données SEO 
Désactiver le blocage natif de Worppress-> Rgeglage / lecture et décocher Demander aux moteurs de recherhce de ne pas indexer ce site 
---
Référencer ses pages
aller sur la page/ "Améliorez votre publication avec Yoast SEO "
requête cible: mots clés -> google trends google fight 
saisir l'aperçu Google Méta description 
Mettre à jour 
Contenu Cornerstone : article le plus important du site 


Pour lancer le site
-> logiciel "local"
-> site Easy wordpress

-> start site
-> test / test -> une fenêtre s'est ouverte avec le dashboard admin
-> vérifier toujours les mises à jour à effecuer dasn Tableau de bord / accueil



Dans la partie admin de wordpress

Extensions (hooks) / ajouter Akismet Anti-Spam et Hello Dolly
bien penser à les activer !

Les fichiers sont stockés en local sous Dossier personnel /Local Sites / easy-wordpress (nom de mon site)

On retrouve les plugins sous app/public/wp-content/plugins
voir le fichier monplugin.php 

Pour modifier le style, j'ai créé le fichier custom.css attention il faut activer l'etension "monplugin"

dans le dossier app/public/wp-content/themes/bondossier

dans admin c'est dans la rubrique "Apparence"

les hooks d'action peuvent s'appeler entre eux d'un fichier à un autre

les hook de filtres :  permet d'effectuer des traitements sur des données, entre la base de données et le navigateur.<=> eventlistener 
apply_filters 


