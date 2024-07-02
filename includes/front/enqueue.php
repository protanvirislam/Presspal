<?php 
function pp_enqueue(){


wp_register_style('pp_bootstrap', get_theme_file_uri('assets/bootstrap-icons/bootstrap-icons.css'));

wp_register_style('pp_rubik_pacifico_gfonts', 'https://fonts.googleapis.com/css2?family=Pacifico&family=Rubik:wght@300;400;500;700&display=swap', [], null);

wp_register_style('pp_custom_css', get_theme_file_uri('/assets/public/index.css'));

    
    
    //Custom Enqueueing
    wp_enqueue_style('pp_bootstrap');
    wp_enqueue_style('pp_rubik_pacifico_gfonts');
    wp_enqueue_style('pp_custom_css');
};