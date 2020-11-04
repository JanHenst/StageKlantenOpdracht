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
?>
<div class="carouselContainer">
    <div class="arrowL"><</div>
    <div class="arrowR">></div>
    <div class="carousel"></div>


</div>
<?php
$post= get_post(2);
echo '<h1 class="titel">'.get_the_title($post).'</h1>';
echo explode("</p>",get_the_content())[0];

echo "<a class='link' href='".get_page_link($post)."'>Lees meer...</a>";
?>



<?php

get_footer();

wp_footer();
