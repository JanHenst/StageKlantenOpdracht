<?php
/**
 * Created by PhpStorm.
 * User: florianmac
 * Date: 27/10/2020
 * Time: 17:04
 */
/* Template Name: normalPage
Template Post Type:page
 */
wp_head();


get_header();

add_theme_scripts();

echo get_the_title(get_post());
echo get_the_content(get_post());



get_footer();
wp_footer();
?>