<?php
/**
 * Created by PhpStorm.
 * User: florianmac
 * Date: 24/11/2020
 * Time: 16:57
 */
/* Template Name: comentPage
Template Post Type:page
 */


wp_head();


get_header();
add_theme_scripts();
?>
<style>
.nav{
    margin-top:-71px;

}
</style>
<div class="main">
<?php
echo get_the_title(get_post());
echo  get_the_content();
$commentList = get_comments();
for($i=0; $i<count($commentList);$i++) {
	echo '<br>' . get_comment_author( $commentList[$i]);
	echo '<br>' . get_avatar(null,null,null,'avatar image');
	echo '<br>' . get_comment_date( $commentList[$i]);
	echo '<br>' . get_comment_text( $commentList[$i]);

}
comment_form( );

?>
</div>
  <?php
get_footer();

wp_footer();