<!-- all my functions here -->

<?php
//variable version
    $version = wp_get_theme() -> get('Version');

    function nostagla_register_styles(){

            wp_enqueue_style('nostagla-style', get_template_directory_uri() . "/style.css", array('nostagla-bootstrap'), $version,'all'); //right path for stylesheet
            wp_enqueue_style('nostagla-bootstrap', "https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css", array(), '4.4.1','all'); //bootstrap
            wp_enqueue_style('nostagla-fontawesome', "https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.13.0/css/all.min.css", array(), '5.13.0','all'); //fontawesome

    }

    add_action('wp_enqueue_scripts', 'nostagla_register_styles');
?>