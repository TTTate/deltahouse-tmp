<?php

function delta_register_styles(){
    $version = wp_get_theme()->get( 'version' );
    wp_register_style( 'delta-style', get_template_directory_uri().'/style.css',array(), $version);
    wp_enqueue_style('delta-style');
}
add_action('wp_enqueue_scripts', 'delta_register_styles');
?>