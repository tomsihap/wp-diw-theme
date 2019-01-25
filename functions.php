<?php


function wf3_enqueue_scripts() {
    wp_enqueue_style('master', get_template_directory_uri() . '/style.css');
}


add_action('wp_enqueue_scripts', 'wf3_enqueue_scripts');
