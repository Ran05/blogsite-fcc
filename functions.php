<!-- all my functions here -->

<?php

    function nostagla_register_styles(){

            wp_enqueue_style('nostagla-bootstrap', get_template_directory_uri() . "/style.css", array(), '1.0','all');

    }

    add_action('wp_enqueue_scripts', 'nostagla_register_styles');
?>