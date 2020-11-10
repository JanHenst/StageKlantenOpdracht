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

<script>
var files = <?php $out = array();
foreach ( array_diff( scandir("wp-content/themes/JenSTheme/plaatjes/carousel/carouselContent"), array(".", "..")) as $filename) {
    $p = pathinfo($filename);
    $out[] = $p['basename'];
}
echo  json_encode($out); 	?>;
var tempuri ='<?php echo get_template_directory_uri();
?>';
</script>
