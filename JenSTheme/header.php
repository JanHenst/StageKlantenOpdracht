<!DOCTYPE html>
<html>

<head>
</head>
<body>
<header>
    <div class="nav">
      <h2 class="logo">J&S</h2>
    <?php
    $pages = get_pages();
    echo "<a href='./'>home</a>";
    for($i=0;$i<sizeof($pages);$i++){
        if(get_the_title($pages[$i])=="404"){
            $i++;
        }
        else {
	        echo"<a href='".get_page_link($pages[$i])."'>".get_the_title( $pages[ $i ] )."</a>";
        }
    }

?>
      <div class="nav-icons">
          <div class="email-nav">
            icon
          </div>
          <div class="likeButton-nav">
            icon
          </div>
      </div>
    </div>
</header>
