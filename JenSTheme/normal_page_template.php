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
include_once( 'carousel.php' );


add_theme_scripts();
?>
<div class="main">
	<?php
echo get_the_title(get_post());
echo the_content();
?>
</div>
<?php


get_footer();
wp_footer();
?>