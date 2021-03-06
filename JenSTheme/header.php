<!DOCTYPE html>
<html>

<head>
    <link rel="preconnect" href="https://fonts.gstatic.com">
    <link href="https://fonts.googleapis.com/css2?family=Roboto:wght@400;700&display=swap" rel="stylesheet">
    <meta charset="<?php bloginfo( 'charset' ); ?>">
    <meta name="viewport" content="width=device-width, initial-scale=1"></head>
<body onload="panelMake()">
<header>
    <?php  include( 'getData.php' ); ?>
    <div class="nav">
        <svg id="hamburger-icon" class="hamburger menu-icon">
            <use xlink:href='<?php echo get_template_directory_uri()?>/plaatjes/header/menu.svg#menu'></use>
        </svg>
      <div class="logo">
          <a href="<?php echo get_site_url()  ?>">
              <img src="<?php echo get_template_directory_uri()?>/plaatjes/header/Logo_white.png">
          </a>
      </div>
    <?php
    $pages = get_pages();
    $exclude =array("404","Jenneke en Sanne","Order info","Cart");

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
          <a target=”_blank” href="mailto:jennekeensanne@gmail.com"><svg class="email-nav">
              <use xlink:href='<?php echo get_template_directory_uri()?>/plaatjes/header/email-icon.svg#email'></use>
          </svg></a>
          <a target=”_blank” href="https://facebook.com/liedjesduo.nl/"><svg class="facebook-nav">
              <use xlink:href='<?php echo get_template_directory_uri()?>/plaatjes/header/facebook.svg#facebook'></use>
          </svg></a>
          <a target=”_blank” href="https://www.youtube.com/channel/UCEwKfjjGQa9U1pkWCafocWw"><svg class="youtube-nav">
                  <use xlink:href='<?php echo get_template_directory_uri()?>/plaatjes/header/youtube.svg#youtube'></use>
          </svg></a>
      </div>
    </div>
</header>
