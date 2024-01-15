<?php




use Carbon_Fields\Container;
use Carbon_Fields\Field;

add_action( 'carbon_fields_register_fields', 'crb_attach_theme_options' );
function crb_attach_theme_options() {
    Container::make( 'theme_options', __( 'Ustawienia Szablonu', 'AkomTranslate' ) )
        ->add_fields( array(
            
            Field::make( 'text', 'crb_email', __( 'Adres email' ) )->set_default_value(__( 'biuro@akom-ltd.com' , 'AkomTranslate')),
            Field::make( 'text', 'crb_phone', __( 'Telefon' ) )->set_default_value(__( '721 406 219' , 'AkomTranslate')),
            Field::make( 'text', 'crb_facebook_link', __( 'Facebook Link' ) ),
            Field::make( 'text', 'crb_instagram_link', __( 'Instagram Link' ) ),
            Field::make( 'text', 'crb_tiktok_link', __( 'Tik Tok Link' ) ),

        ) );


        
}





add_action( 'carbon_fields_register_fields', 'crb_attach_post_meta' );
function crb_attach_post_meta() {
    Container::make( 'post_meta', __( 'Dodaj zdjęcia realizacji', 'crb' ) )
        ->where( 'post_type', '=', 'page' ) // only show our new fields on pages
        ->add_fields( array(
            Field::make( 'complex', 'crb_slides', 'Realizacje' )
                ->set_layout( 'tabbed-horizontal' )
                ->add_fields( array(
                    Field::make( 'image', 'image', 'Zdjęcie' )->set_value_type( 'url' ),
                    Field::make('text','image_text','Opis'),
                ) ),
        ) );
}




add_action( 'after_setup_theme', 'crb_load' );
function crb_load() {
    require_once( 'vendor/autoload.php' );
    \Carbon_Fields\Carbon_Fields::boot();
}



if ( ! defined( '_S_VERSION' ) ) {
	// Replace the version number of the theme on each release.
	define( '_S_VERSION', '1.0.0' );
}


function Akom_theme_setup(){

    load_theme_textdomain( 'AkomTranslate', get_template_directory().'/languages' );
    add_theme_support( 'automatic-feed-links' );
    add_theme_support( 'title-tag' );
    add_theme_support( 'post-thumbnail' );
    add_theme_support(
        'custom-logo',
        array(
            'height' => 250,
            'width'  => 350,
            'flext-width' => true,
            'flex-height' => true,
        )
    );
    add_image_size('slider', 1800, 600, true);
   

    register_nav_menus(
		array(
			'Main-menu' => esc_html__( 'Menu główne', 'Main-menu' ),
		)
	);

    register_nav_menus(
        array(
            'Menu-flag' => esc_html__( 'Menu Lang', 'Menu-flag' ),
        )
    );
}

add_action('after_setup_theme', 'Akom_theme_setup');


function Akom_theme_scripts(){

  
    wp_enqueue_style('bootstrap-style', get_template_directory_uri(). '/assets/vendor/bootstrap/css/bootstrap.min.css');
      wp_enqueue_style('bootstrap-icons', get_template_directory_uri(). '/assets/vendor/bootstrap-icons/bootstrap-icons.css');
    wp_enqueue_style('aos', get_template_directory_uri(). '/assets/vendor/aos/aos.css');
    wp_enqueue_style('glightbox', get_template_directory_uri(). '/assets/vendor/glightbox/css/glightbox.min.css');
      wp_enqueue_style('swiper-bundle', get_template_directory_uri(). '/assets/vendor/swiper/swiper-bundle.min.css');
       wp_enqueue_style('remixicon', get_template_directory_uri(). '/assets/vendor/remixicon/remixicon.css');
         wp_enqueue_style('Akom_style_main', get_stylesheet_uri(), array());
    wp_enqueue_style('Akom_style', get_template_directory_uri(). '/assets/css/main.css');

    //script

    wp_enqueue_script('bootstrap-script', get_template_directory_uri(). '/assets/vendor/bootstrap/js/bootstrap.bundle.min.js', array('jquery'),_S_VERSION, true);
    wp_enqueue_script('aos-script', get_template_directory_uri(). '/assets/vendor/aos/aos.js', array('jquery'), _S_VERSION, true);

    wp_enqueue_script('glightbox', get_template_directory_uri(). '/assets/vendor/glightbox/js/glightbox.min.js', array('jquery'), _S_VERSION, true);
    wp_enqueue_script('swiper-bundle', get_template_directory_uri(). '/assets/vendor/swiper/swiper-bundle.min.js', array('jquery'), _S_VERSION, true);
     wp_enqueue_script('swiper-bundle', get_template_directory_uri(). '/assets/vendor/isotope-layout/isotope.pkgd.min.js', array('jquery'), _S_VERSION, true);

    wp_enqueue_script( 'customjs', get_template_directory_uri() . '/assets/js/main.js', array('jquery'), true, true);
    
   

    if ( is_singular() && comments_open() && get_option( 'thread_comments' ) ) {
		wp_enqueue_script( 'comment-reply' );
	}
}

add_action('wp_enqueue_scripts','Akom_theme_scripts');


function enqueue_custom_fonts(){
    if(!is_admin()){
         wp_enqueue_style('OpenSans','https://fonts.googleapis.com/css2?family=Open+Sans:ital,wght@0,300;0,400;0,500;0,600;0,700;1,300;1,400;1,600;1,700&display=swap',false);
   
         wp_enqueue_style('Montserrat','https://fonts.googleapis.com/css2?family=Montserrat:ital,wght@0,300;0,400;0,500;0,600;0,700;1,300;1,400;1,500;1,600;1,700&display=swap',false);
      
          wp_enqueue_style('Raleway','https://fonts.googleapis.com/css2?family=Raleway:ital,wght@0,300;0,400;0,500;0,600;0,700;1,300;1,400;1,500;1,600;1,700&display=swap',false);
       
    }
}
add_action('wp_enqueue_scripts','enqueue_custom_fonts');




function Akom_theme_widget() {

	register_sidebar( array(
		'name'          => 'Footer sidebar',
		'id'            => 'footer_sidebar',
		'before_widget' => '<div class="footer_sidebar">',
		'after_widget'  => '</div>',
		'before_title'  => '<h3>',
		'after_title'   => '</h3>',
	) );

    register_sidebar( array(
		'name'          => 'Footer sidebar 2',
		'id'            => 'footer_sidebar_2',
		'before_widget' => '<div class="footer_sidebar">',
		'after_widget'  => '</div>',
		'before_title'  => '<h3>',
		'after_title'   => '</h3>',
	) );

    register_sidebar( array(
		'name'          => 'Footer sidebar 3',
		'id'            => 'footer_sidebar_3',
		'before_widget' => '<div class="footer_sidebar">',
		'after_widget'  => '</div>',
		'before_title'  => '<h3>',
		'after_title'   => '</h3>',
	) );

}
add_action( 'widgets_init', 'Akom_theme_widget' );





    add_action( 'carbon_fields_register_fields', 'crb_slider_theme_options' );
function crb_slider_theme_options() {


 		
Container::make( 'post_meta', __( 'Ustawienia slajdu' ) )
->where( 'post_type', '=', 'sliders' )
->add_tab( __( 'Opcje' ), array(
	Field::make( 'text', 'crb_head_text', __( 'Nagłówek Slajdu' ) ),
    Field::make( 'text', 'crb_desc_text', __( 'Podpis' ) ),
    Field::make( 'text', 'crb_text_btn', __( 'Tekst przycisku' ) ),
	Field::make( 'text', 'crb_ult_btn', __( 'Url przycisku' ) ),
	Field::make( 'image', 'crb_photo', 'Photo' ),
    

) );


        
}







