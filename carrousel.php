<?php

/**
 * Extension carrousel permet d'afficher dans une boite modale les images d'une galerie
 * @package name : Carrousel
 * Version : 1.0.0
 */
/*
Plugin Name: Carrousel
Description: Permet d'afficher dans une boîte modale les images d'une galerie avec un système de navigationPlugin URI: https://github.com/maryline888/s3_31w/tree/carrousel
Author: Maryline Carrier
Author URI: https://github.com/maryline888/31w_carrousel
Description: Permet d'afficher dans uns boite modale les images d'une galerie.
*/
function carrousel_enqueue()
{
    $version_css = filemtime(plugin_dir_path(__FILE__) . "style.css");
    $version_js = filemtime(plugin_dir_path(__FILE__) . "js/carrousel.js");

    wp_enqueue_style(
        'em_plugin_carrousel_css',
        plugin_dir_url(__FILE__) . "style.css",
        array(),
        $version_css
    );

    wp_enqueue_script(
        'em_plugin_carrousel_js',
        plugin_dir_url(__FILE__) . "js/carrousel.js",
        array(),
        $version_js,
        true
    );
}

add_action('wp_enqueue_scripts', 'carrousel_enqueue');

function creation_carrousel()
{
    return '<button class="bouton__ouvrir">Ouvrir</button>
        <div class="carrousel">
        <button class="bouton__x">X</button>
        <figure class="carrousel__figure"></figure>
        <form class="carrousel__form"></form>
        </div>';
}

add_shortcode('carrousel', 'creation_carrousel');
