<?php
/**
 * Created by PhpStorm.
 * User: florianmac
 * Date: 21/10/2020
 * Time: 14:08
 */


function add_theme_scripts() {
    wp_enqueue_style( 'style', get_stylesheet_uri() );

    wp_enqueue_style( 'header', get_template_directory_uri() . '/style/header.css',false,'1','all');

	wp_enqueue_style( 'carousel', get_template_directory_uri() . '/style/carousel.css',false,'1','all');
	wp_enqueue_style( 'footer', get_template_directory_uri() . '/style/footer.css',false,'1','all');




	wp_enqueue_script( 'carousel', get_template_directory_uri() . '/javascript/landing/carousel.js', false, 1, true );
	wp_enqueue_script( 'speelLijst', get_template_directory_uri() . '/javascript/speellijst/getspeellijst.js', false, 1, true );


	if(is_front_page()){
	wp_enqueue_style( 'landing', get_template_directory_uri() . '/style/landing.css',false,'1','all');

}



    if(wp_is_mobile()) {
	wp_enqueue_script( 'hamburger', get_template_directory_uri() . '/javascript/header/hamburger.js', false, 1, true );
    }
    if ( is_singular() & comments_open() & get_option( 'thread_comments' ) ) {
        wp_enqueue_script( 'comment-reply' );
    }
}
add_action( 'wp_enqueue_scripts', 'add_theme_scripts' );








function customcss( $wp_customize )
{


	//pannels
	$wp_customize->add_panel( 'edit', array(
		'priority'       => 10,
		'capability'     => 'edit_theme_options',
		'theme_supports' => '',
		'title'          => __('thema opties', 'starter'),
		'description'    => __('edit thema opties', 'JenStheme'),
	) );

	//einde pannels


    //sections
	$wp_customize->add_section( 'kleuren' , array(
		'title'    => __( 'kleur', 'starter' ),
		'priority' => 10,
		'panel'  => 'edit',

	) );
	$wp_customize->add_section( 'carousel' , array(
		'title'    => __( 'carousel', 'starter' ),
		'priority' => 20,
		'panel'  => 'edit',

	) );




	//einde sections

	//seting kleur
	$wp_customize->add_setting( 'achtergrond' , array(
		'default'   => '#1a1621',
		'transport' => 'refresh',
	) );
	$wp_customize->add_setting( 'text' , array(
		'default'   => '#FFFFFF',
		'transport' => 'refresh',
	) );

	$wp_customize->add_setting( 'accent1' , array(
		'default'   => '#FFFFFF',
		'transport' => 'refresh',
	) );
	$wp_customize->add_setting( 'accent2' , array(
		'default'   => '#47BC55',
		'transport' => 'refresh',
	) );
	// einde seting kleur

	//seting carousel
	$wp_customize->add_setting( 'fileUpload', array(

		'default' => null,
        'transport' => 'refresh',
	) );
	// einde setting carousel





	//control kleur
	$wp_customize->add_control( new WP_Customize_Color_Control( $wp_customize, 'Theme-achtergrond', array(
		'label'    => __( 'achtergrond', 'starter' ),
		'section'  => 'kleuren',
		'settings' => 'achtergrond',

	) ) );
	$wp_customize->add_control( new WP_Customize_Color_Control( $wp_customize, 'Theme-text', array(
		'label'    => __( 'text', 'starter' ),
		'section'  => 'kleuren',
		'settings' => 'text',
	) ) );
	$wp_customize->add_control( new WP_Customize_Color_Control( $wp_customize, 'Theme-accent1', array(
		'label'    => __( 'accent 1', 'starter' ),
		'section'  => 'kleuren',
		'settings' => 'accent1',
	) ) );
	$wp_customize->add_control( new WP_Customize_Color_Control( $wp_customize, 'Theme-accent2', array(
		'label'    => __( 'accent 2', 'starter' ),
		'section'  => 'kleuren',
		'settings' => 'accent2',
	) ) );
    // einde controll kleur

    //controll carousel
	$wp_customize->add_control( new WP_Customize_Media_Control( $wp_customize, 'Theme-carousel', array(
		'label' => __( 'fileUpload', 'starter' ),
		'mime_type' => 'image',
		'section' => 'carousel',
		'settings' => 'fileUpload',

	) ) );

	// einde controll carousel





}
add_action('customize_register','customcss');



function customize_css() {
	$color1 = get_theme_mod( 'achtergrond', '#1a1621' );
	$color2 = get_theme_mod( 'text', '#FFFFFF' );
	$color3 = get_theme_mod( 'accent1', '#FFFFFF' );
	$color4 = get_theme_mod( 'accent2', '#47BC55' );
	?>
    <style type="text/css">
        body {
            color: <?php echo $color2 ?>;
            background: transparent linear-gradient(180deg, <?php echo $color1?> 0%, <?php echo $color1?>  83%,<?php echo $color4?> 100%) 0% 0% no-repeat padding-box;
        }

        a {
            color: <?php echo $color4 ?>;
        }
        a:hover  {
            color: <?php echo $color4 ?>;
        }
        a:visited {
            color: <?php echo $color4 ?>;
        }

        .nav {
            background: <?php echo $color1?> ;
        }

        .nav a.headerbutton {
            color: <?php echo$color3  ?>;
        }

        .nav .logo a {
            color: <?php echo$color3 ?>;
        }

        .email-nav {
            fill: <?php echo$color3 ?>;
        }

        .facebook-nav {
            color: <?php echo$color3 ?>;
        }

        .youtube-nav {
            color: <?php echo$color3 ?>;
        }

        .email-nav:hover, .facebook-nav:hover, .youtube-nav:hover {
            fill: <?php echo$color4 ?>;
            color: <?php echo$color4 ?>;
        }

        .hamburger-icon {
            fill: <?php echo$color3 ?>;
        }

        .facebook-footer {
            color: <?php echo$color3 ?>;
        }

        .youtube-footer {
            color: <?php echo$color3 ?>;
        }

        .facebook-footer:hover, .youtube-footer:hover {
            color: <?php echo$color4 ?>;
        }

        .nav a:active {
            color: <?php echo $color4?>;
        }

        .nav a:hover {
            color: <?php echo $color4?>;
        }

        button {
            background-color: <?php echo$color4 ?>;
            color: <?php echo$color3 ?>;
        }

        .pannel {
            background-color: <? echo $color1 ?>;
        }

        .pannel a {
            color: <?php echo $color2?>;
        }

        .pannel a:active {
            color: <?php echo $color4?>;
        }

        .pannel a:hover {
            color: <?php echo $color4?>;
        }

        button.button.green-box.ic-design {
            background: <?php echo$color4 ?>;
        }

        .form-contact input, .form-contact textarea {
            color: <?php echo$color3 ?>;
        }

        .form-contact input::placeholder, .form-contact textarea::placeholder {
            color: <?php echo$color3 ?>;
        }


    </style>



	<?php


//carousel

    $file = get_theme_mod( 'fileUpload', '/' );
    $target_folder=getcwd().'plaatjes/carousel/carouselContent';
	$upload_file   = wp_get_attachment_image_src( $file)[0];
    $file_name =basename($upload_file);
	echo "<script> console.log('".getcwd().parse_url($upload_file)['path']."')</script>";
//	copy("/test.png",$target_folder.$file_name);
//	copy("test.png","plaatjes/test.png");

//einde carousel












}
add_action( 'wp_head', 'customize_css');


