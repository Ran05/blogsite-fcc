<!-- all my functions here -->

<?php
//variable version
    $version = wp_get_theme() -> get('Version');

    function nostagla_register_styles(){

            wp_enqueue_style('nostagla-style', get_template_directory_uri() . "/style.css", array('nostagla-bootstrap'), $version,'all'); //right path for stylesheet
            wp_enqueue_style('nostagla-bootstrap', "https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css", array(), '4.4.1','all'); //bootstrap
            wp_enqueue_style('nostagla-fontawesome', "https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.13.0/css/all.min.css", array(), '5.13.0','all'); //fontawesome

    }
    
    //wordpress hooks
    add_action('wp_enqueue_scripts', 'nostagla_register_styles'); 
    
    
    function nostagla_register_scripts(){
            wp_enqueue_scripts('nostagla-jquery', 'https://code.jquery.com/jquery-3.4.1.slim.min.js', array(),'3.4.1',true);
            wp_enqueue_scripts('nostagla-popper', 'https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js', array(),'1.16.0',true);
            wp_enqueue_scripts('nostagla-bootstrap', 'https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/js/bootstrap.min.js', array(),'4.4.1',true);
            wp_enqueue_scripts('nostagla-jquery', get_template_directory_uri()."/assets/js/main.js", array(),'1.0',true);
    }
    //wp hooks for scripts
    add_action('wp_enqueue_scripts', 'nostagla_register_scripts'); 
?>