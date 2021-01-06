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
echo "<div> <h1>" .get_the_title(get_post()) . "</h1> </div>";
echo  the_content();
 	comment_form();

?>
</div>
<?php
if( current_user_can('administrator') ) {
$path = "../wp-content/themes/JenSTheme/addData.php";
    $url=home_url($_SERVER['REQUEST_URI']);

echo '
<form class="speelLijstForm"  action="'.$path.'" method="post" >

<input  class="Form-Date"  type="date"    name="date"> 
<input  class="Form-title" type="text"    placeholder="Titel"      name="title">
<input  class="Form-location" type="text" placeholder="Location"    name="location">
<input  class="Form-price" type="number"  placeholder="€0.00"   min="0" step="any"   name="price">
<input  class="Form-price" type="url"  placeholder="kaartje/"      name="url">
<input  class="Form-price" type="hidden"  name="redirect" value="'.$url.'">

<input class="Form-submit" type="submit">
</form>
';



};
get_footer();
wp_footer();
?>