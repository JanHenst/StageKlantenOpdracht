<?php
/**
 * Created by PhpStorm.
 * User: florianmac
 * Date: 24/11/2020
 * Time: 14:54
 */

$args = array(
	'status' => 'approve'
);

// The comment Query
$comments_query = new WP_Comment_Query;
$comments = $comments_query->query( $args );

// Comment Loop
if ( $comments ) {
	foreach ( $comments as $comment ) {
		echo '<p>' . $comment->comment_content . '</p>';
	}
} else {
	echo 'No comments found.';
}
?>