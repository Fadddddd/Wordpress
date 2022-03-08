<?php

/**
 * composer
 */

// chargement de l'autoloading de composer
$autoloadphp = get_template_directory() . '/vendor/autoload.php';
if (file_exists($autoloadphp))
    require $autoloadphp;

/**
 * sécurité
 */

// désactive l'édition de fichier dans l'admin
define('DISALLOW_FILE_EDIT', true);

/**
 * localisation
 */

// choix du fuseau horaire
date_default_timezone_set('Europe/Paris');
// choix du réglage régional
setlocale(LC_ALL, 'fr', 'fr_FR', 'fr_FR.utf8', 'fr_FR.ISO_8859-1');

/**
 * CSS
 */

// cette fonction se charge d'intégrer les feuilles de style du thème
function my_theme_enqueue_styles()
{
    // chargement d'un fichier CSS
    //wp_enqueue_style('style', get_stylesheet_directory_uri() . 'style.css', []);
    wp_enqueue_style('bootstrap', 'https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css', []);
    wp_enqueue_style('style', get_stylesheet_uri(), []); //get_stylesheet_uri c'est pareil que de mettre style.css
}
add_action('wp_enqueue_scripts', 'my_theme_enqueue_styles');

/**
 * JS
 */

// cette fonction se charge d'intégrer les scripts JS du thème
function my_theme_enqueue_script()
{
    // chargement d'un fichier JS
    //wp_enqueue_script('my-theme-main', get_stylesheet_directory_uri() . '/js/main.js', []);
    wp_enqueue_script('bootstrap', 'https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.min.js', []);
}
add_action('wp_enqueue_scripts', 'my_theme_enqueue_script'); //lorsque cette action est appelée, je veux que tu exécute la fonction

/**
 * fonctionnalités du thème
 */

// activation de la fonctionnalité des balises HTML5
add_theme_support('html5');
// activation de la fonctionnalité du titre du site
function my_theme_supports()
{
    add_theme_support('title-tag');
}

/* function my_theme_register_assets() {
    wp_register_style('bootstrap')
} */

function my_theme_title_separator()
{
    return '|';
}

function my_theme_document_title_parts($title)
{
   /*  var_dump($title);
    die(); */ //effectue un tableau, montre titre efficencia, tagline "le talent a un nom"
    //unset($title['tagline']);
    // $title['demo'] = 'Salut';
    return $title;
}

add_action('after_setup_theme', 'my_theme_supports');

// activation de la fonctionnalité des vignettes
add_theme_support('post-thumbnails');
//La fonction sera appelée lorsque l'action wp_head sera utilisée
/* add_action('wp_head', function(){
    die('Salut les gens');
}); */
//si j'ajoute le 10, c'est le param priorité qui n'est pas nécessaire. Si qqch a une priorité supérieure, ce sera appelé après. Si inf, avant
add_filter('document_title_separator', 'my_theme_title_separator');
add_filter('document_title_parts', 'my_theme_document_title_parts');
