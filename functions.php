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
    // Hoja de estilos normalize
    wp_enqueue_style('normalize', get_template_directory_uri() . '/css/normalize.css', array(), '8.0.1' );

    //Cargamos slicknavCSS
    wp_enqueue_style( 'slicknavCSS', get_template_directory_uri() . '/css/slicknav.min.css', array(), '1.0.10' );

    wp_enqueue_style( 'googleFont', "https://fonts.googleapis.com/css?family=Open+Sans:300,400,600,700|Raleway:300,400,500,600,700|Staatliches&display=swap", array(), '1.0.0' );

 

   //La hoja de estilos principal
    wp_enqueue_style( 'style',  get_stylesheet_uri(), array('normalize',  'googleFont'), '1.0.0' );


    wp_enqueue_script( 'slicknavJS', get_template_directory_uri() . '/js/jquery.slicknav.min.js', array('jquery'), '1.0.10', true);
    wp_enqueue_script( 'scripts', get_template_directory_uri() . '/js/scripts.js ', array('jquery', 'slicknavJS'), '1.0.0', true);
}

add_action( 'wp_enqueue_scripts', 'gymFitness_scripts_styles' );