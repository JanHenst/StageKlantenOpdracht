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

include_once( 'carousel.php' );
?>
	<div class="main">
<?php
include_once( 'includeParagraph.php' );

?>



</div>

<?php

get_footer();

wp_footer();
