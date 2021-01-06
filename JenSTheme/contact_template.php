<?php
/*
Template Name: Contact
*/
wp_head();


get_header();
include_once( 'carousel.php' );

add_theme_scripts();
?>
<div class="main">
    <?php get_header() ?>

    <div id="container">
        <div id="content">
            <?php the_post() ?>
            <div id="post-<?php the_ID() ?>" class="post">
                <div class="entry-content">
                    <?php echo "<div> <h1>" .get_the_title(get_post()) . "</h1> </div>";?>
                    <?php the_content(); ?>
                    <div class="wp-block-column form-contact" style="flex-basis: 66.66%;">

                    <form action="../wp-content/themes/JenSTheme/mailTo.php" id="contactForm" method="post">
                        <ul>
                            <div class="flex-inputs">
                                <li class="name-input">
                                    <input type="text" name="contactName" id="contactName" value="" placeholder="Name"/>
                                </li>
                                <li class="tel-input">
                                    <input type="text" name="tellinput" id="tellinput" value="" placeholder="Tel"/>
                                </li>
                            </div>
                            <li>
                                <input class="email-input" type="text" name="email" id="email" value="" placeholder="Email"/>
                            </li>
                            <li>
                                <textarea name="comments" id="commentsText" rows="10" cols="44" placeholder="Message"></textarea>
                            </li>
                            <li>
                                <button class="button-form" type="submit">Submit</button>
                            </li>
                        </ul>
                        <input type="hidden" name="submitted" id="submitted" value="true" />
                    </form>
                    </div>
                    </div>
                </div><!-- .entry-content -->
            </div><!-- .post-->
        </div><!-- #content -->
    </div><!-- #container -->

</div>

<?php

get_footer();
wp_footer();

?>
