<?php
function post($postnumm,$paragraphs,$link) {
	$post = get_post( $postnumm );
	echo '<h1 class="titel">' . get_the_title( $post ) . '</h1>';
	for($i=0;$i<$paragraphs;$i++) {
		echo explode( "</p>", get_the_content( null, null, $post ) )[$i];
	}
	if($link==true) {
		echo "<a class='link' href='" . get_page_link( $post ) . "'>Lees meer...</a>";
	}
}
?>