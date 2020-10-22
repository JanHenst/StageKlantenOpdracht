<?php
/**
 * Created by PhpStorm.
 * User: florianmac
 * Date: 21/10/2020
 * Time: 11:22
 */






wp_head();


get_header();

add_theme_scripts();

$post= get_post(2);
echo get_the_title($post);
echo explode("</p>",get_the_content())[0];

echo "<a class='link' href='".get_page_link($post)."'>Lees meer...</a>";
?>

<html>

<div id="page-container">
    <div id="content-wrap">
        <h1>Ello</h1>
    </div>


</html>

<?php

get_footer();

