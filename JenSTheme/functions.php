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

    wp_enqueue_style( 'footer', get_template_directory_uri() . '/style/footer.css',false,'1','all');


    if ( is_singular() & comments_open() & get_option( 'thread_comments' ) ) {
        wp_enqueue_script( 'comment-reply' );
    }
}
add_action( 'wp_enqueue_scripts', 'add_theme_scripts' );



function colors( $wp_customize )
{
	$wp_customize->add_section( 'starter_new_section_name' , array(
		'title'    => __( 'thema opties', 'starter' ),
		'priority' => 10
	) );

	$wp_customize->add_setting( 'achtergrond' , array(
		'default'   => '#FFFFFF',
		'transport' => 'refresh',
	) );
	$wp_customize->add_setting( 'text' , array(
		'default'   => '#000000',
		'transport' => 'refresh',
	) );

	$wp_customize->add_setting( 'accent1' , array(
		'default'   => '#A6431F',
		'transport' => 'refresh',
	) );
	$wp_customize->add_setting( 'accent2' , array(
		'default'   => '#D9631E',
		'transport' => 'refresh',
	) );

	$wp_customize->add_control( new WP_Customize_Color_Control( $wp_customize, 'Theme-achtergrond', array(
		'label'    => __( 'achtergrond', 'starter' ),
		'section'  => 'starter_new_section_name',
		'settings' => 'achtergrond',

	) ) );
	$wp_customize->add_control( new WP_Customize_Color_Control( $wp_customize, 'Theme-text', array(
		'label'    => __( 'text', 'starter' ),
		'section'  => 'starter_new_section_name',
		'settings' => 'text',
	) ) );

	$wp_customize->add_control( new WP_Customize_Color_Control( $wp_customize, 'Theme-accent1', array(
		'label'    => __( 'accent 1', 'starter' ),
		'section'  => 'starter_new_section_name',
		'settings' => 'accent1',
	) ) );
	$wp_customize->add_control( new WP_Customize_Color_Control( $wp_customize, 'Theme-accent2', array(
		'label'    => __( 'accent 2', 'starter' ),
		'section'  => 'starter_new_section_name',
		'settings' => 'accent2',
	) ) );
}
add_action('customize_register','colors');



function customize_css()
{
	?>
	<style type="text/css">
		body { background-color: <?php echo get_theme_mod('achtergrond', '#000000'); ?>; }
	</style>
	<?php
}
add_action( 'wp_head', 'customize_css');


