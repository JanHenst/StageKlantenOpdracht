<?php
$post= get_post(2);
echo '<h1 class="titel">'.get_the_title($post).'</h1>';
echo explode("</p>",get_the_content())[0];

echo "<a class='link' href='".get_page_link($post)."'>Lees meer...</a>";
?>