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
<div class="main">
<?php
echo get_the_title(get_post());
echo  get_the_content();
$commentList = get_comments();
$commentid=get_comment_ID();
echo $commentList.$commentid[0];
echo get_the_title($commentList);
echo get_comment_author($commentList);
echo get_comment_date($commentList);
echo get_comment_time($commentList);
echo get_comment_reply_link(null,$commentList);
?>
</div>
  <?php
get_footer();

wp_footer();