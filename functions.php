<?php


function wf3_enqueue_scripts() {
    wp_enqueue_style('master', get_template_directory_uri() . '/style.css');
}

add_action('wp_enqueue_scripts', 'wf3_enqueue_scripts');

function wf3_widgets_init() {
    register_sidebar([
        'name'          => "Sidebar",
        'id'            => 'sidebar-1',
        'description'   => "Endroit où on mettra les widgets",
        'before_widget' => '<li id="%1$s" class="widget %2$s">',
        'after_widget'  => '</li>',
        'before_title'  => '<h2 class="widgettitle">',
        'after_title'   => '</h2>',
    ]);
}

add_action( 'widgets_init', 'wf3_widgets_init' );