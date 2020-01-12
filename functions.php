<?php
// Menu de navegacion
function gymFitness_menus(){

    register_nav_menus( array(
        'menu-principal' => _('Menu Principal', 'gymfitness'),
        'menu-footer' => _('Menu Pie de Pagina', 'gymfitness'),
        'menu-legal' => _('Menu Legal', 'gymfitness')

    ) ); 

}

add_action('init', 'gymFitness_menus');

// Script y styles
function gymFitness_scripts_styles(){
   //La hoja de estilos principal
    wp_enqueue_style( 'style',  get_stylesheet_uri(), array(), '1.0.0' );

}

add_action( 'wp_enqueue_scripts', 'gymFitness_scripts_styles' );