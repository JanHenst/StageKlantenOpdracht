<?php
/**
 * Created by PhpStorm.
 * User: florianmac
 * Date: 21/10/2020
 * Time: 14:08
 */


function add_theme_scripts() {
    wp_enqueue_style( 'style', get_stylesheet_uri() );

    wp_enqueue_style( 'header', get_template_directory_uri() . '/style/header.css',false,'1','all');

    wp_enqueue_style( 'footer', get_template_directory_uri() . '/style/footer.css',false,'1','all');


    if ( is_singular() & comments_open() & get_option( 'thread_comments' ) ) {
        wp_enqueue_script( 'comment-reply' );
    }
}
add_action( 'wp_enqueue_scripts', 'add_theme_scripts' );



function panel( $wp_customize )
{

    $wp_customize->add_panel('some_panel', array(
        'title' => 'color change',
        'description' => 'change colors',
        'priority' => 10,
    ));


    $wp_customize->add_section('section', array(
        'title' => 'section',
        'priority' => 10,
        'panel' => 'some_panel',
    ));


    $wp_customize->add_setting('setting', array(
        'default' => 'a',
    ));


    $wp_customize->add_control('contrl_demo', array(
        'label' => 'Text',
        'type' => 'text',
        'section' => 'section',
        'settings' => 'setting_demo',
    ));
};
    add_action('customize_register','panel');






