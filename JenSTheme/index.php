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
    <div class="arrowL">
        <svg id="arrow_left" class="arrow-carousel">
            <use xlink:href='<?php echo get_template_directory_uri()?>/plaatjes/carousel/arrow_left.svg#left-arrow'></use>
        </svg>
    </div>
    <div class="arrowR">
        <svg id="arrow_right" class="arrow-carousel">
            <use xlink:href='<?php echo get_template_directory_uri()?>/plaatjes/carousel/arrow_right.svg#right-arrow'></use>
        </svg>
    </div>
    <div class="carousel"></div>


</div>
<div class="main">
<?php
$post= get_post(2);
echo '<h1 class="titel">'.get_the_title($post).'</h1>';
echo explode("</p>",get_the_content())[0];

echo "<a class='link' href='".get_page_link($post)."'>Lees meer...</a>";
?>

</div>

<?php

get_footer();

wp_footer();
