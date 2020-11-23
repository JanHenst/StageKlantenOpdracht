<!DOCTYPE html>
<html>

<head>
    <meta charset="<?php bloginfo( 'charset' ); ?>">
    <meta name="viewport" content="width=device-width, initial-scale=1"></head>
<body onload="panelMake()">
<header>
    <div class="nav">
        <svg id="hamburger-icon" class="hamburger menu-icon">
            <use xlink:href='<?php echo get_template_directory_uri()?>/plaatjes/header/menu.svg#menu'></use>
        </svg>
      <h2 class="logo"><a href="<?php echo get_site_url()  ?>">J&S</a></h2>
    <?php
    $pages = get_pages();
    $exclude =array("404","Jenneke en Sanne");

    for($i=0;$i<sizeof($pages);$i++){
            for($j=0;$j<count($exclude);$j++) {
	            if ( get_the_title( $pages[ $i ] ) == $exclude[ $j ] ) {
		            $i ++;
	            }
            }
		            echo "<a class='headerbutton' href='" . get_page_link( $pages[ $i ] ) . "'>" . get_the_title( $pages[ $i ] ) . "</a>";


    }

?>
      <div class="nav-icons">
          <svg class="email-nav">
              <use xlink:href='<?php echo get_template_directory_uri()?>/plaatjes/header/email-icon.svg#email'></use>
          </svg>
          <svg class="facebook-nav">
              <use xlink:href='<?php echo get_template_directory_uri()?>/plaatjes/header/facebook.svg#facebook'></use>
          </svg>
      </div>
    </div>
</header>
