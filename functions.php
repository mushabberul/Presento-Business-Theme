<?php
require_once get_theme_file_path( 'inc/tgm.php' );
require_once get_theme_file_path( 'inc/customizer/customizer-main.php' );
require_once get_theme_file_path( 'inc/nav-walker.php' );


function presento_setup_theme() {
	load_theme_textdomain( 'presento', get_theme_file_path( 'languages' ) );
	add_theme_support( 'title-tag' );
	add_theme_support( 'post-thumbnails' );
	add_theme_support( 'html5', array(
		'search-form', 'comment-form', 'comment-list', 'gallery', 'caption',
	) );
	add_theme_support( 'post-formats', array(
		'aside', 'image', 'video', 'quote', 'link', 'gallery', 'status', 'audio', 'chat',
	) );
	register_nav_menu( 'main-menu', __( 'Main Menu', 'presento' ) );
	register_nav_menus(array(
		'footer-useful-link'=>__('Useful Link','presento'),
		'footer-our-services'=>__('Our Services','presento'),
	));
	add_theme_support( 'custom-logo' );
}
add_action( 'after_setup_theme', 'presento_setup_theme' );

function presento_theme_assets() {
	wp_enqueue_style( 'google-font', '//fonts.googleapis.com/css?family=Open+Sans:300,300i,400,400i,600,600i,700,700i|Raleway:300,300i,400,400i,500,500i,600,600i,700,700i|Poppins:300,300i,400,400i,500,500i,600,600i,700,700i', null, '1.0' );
	wp_enqueue_style( 'aos-css', get_theme_file_uri( 'assets/vendor/aos/aos.css' ), null, '1.0' );
	wp_enqueue_style( 'bootstrap.min-css', get_theme_file_uri( 'assets/vendor/bootstrap/css/bootstrap.min.css' ), null, '1.0' );
	wp_enqueue_style( 'bootstrap-icons-css', get_theme_file_uri( 'assets/vendor/bootstrap-icons/bootstrap-icons.css' ), null, '1.0' );
	wp_enqueue_style( 'boxicons.min-css', get_theme_file_uri( 'assets/vendor/boxicons/css/boxicons.min.css' ), null, '1.0' );
	wp_enqueue_style( 'glightbox.min-css', get_theme_file_uri( 'assets/vendor/glightbox/css/glightbox.min.css' ), null, '1.0' );
	wp_enqueue_style( 'remixicon-css', get_theme_file_uri( 'assets/vendor/remixicon/remixicon.css' ), null, '1.0' );
	wp_enqueue_style( 'swiper-bundle.min-css', get_theme_file_uri( 'assets/vendor/swiper/swiper-bundle.min.css' ), null, '1.0' );
	wp_enqueue_style( 'main-css', get_theme_file_uri( 'assets/css/style.css' ), null, '1.0' );
	wp_enqueue_style( 'style', get_stylesheet_uri(), null, time() );

	wp_enqueue_script( 'purecounter-js', get_theme_file_uri( 'assets/vendor/purecounter/purecounter.js' ), null, '1.0', true );
	wp_enqueue_script( 'aos-js', get_theme_file_uri( 'assets/vendor/aos/aos.js' ), null, '1.0', true );
	wp_enqueue_script( 'bootstrap.bundle.min-js', get_theme_file_uri( 'assets/vendor/bootstrap/js/bootstrap.bundle.min.js' ), null, '1.0', true );
	wp_enqueue_script( 'glightbox.min-js', get_theme_file_uri( 'assets/vendor/glightbox/js/glightbox.min.js' ), null, '1.0', true );
	wp_enqueue_script( 'isotope.pkgd.min-js', get_theme_file_uri( 'assets/vendor/isotope-layout/isotope.pkgd.min.js' ), null, '1.0', true );
	wp_enqueue_script( 'swiper-bundle.min-js', get_theme_file_uri( 'assets/vendor/swiper/swiper-bundle.min.js' ), null, '1.0', true );
	wp_enqueue_script( 'validate-js', get_theme_file_uri( 'assets/vendor/php-email-form/validate.js' ), null, '1.0', true );
	wp_enqueue_script( 'main-js', get_theme_file_uri( 'assets/js/main.js' ), null, '1.0', true );

}
add_action( 'wp_enqueue_scripts', 'presento_theme_assets' );

function presento_register_sidebar() {
	register_sidebar(
		array(
			'id'            => 'footer-about',
			'name'          => __( 'Footer About Section', 'presento' ),
			'description'   => __( 'Footer about section widget', 'presento' ),
			'before_widget' => '<div>',
			'after_widget'  => '</div>',
			'before_title'  => '<h3>',
			'after_title'   => '</h3>',
		)
	);
	register_sidebar(
		array(
			'id'            => 'footer-copyright',
			'name'          => __( 'Footer Copyright Section', 'presento' ),
			'description'   => __( 'Footer copyright section widget', 'presento' ),
			'before_widget' => '',
			'after_widget'  => '',
		)
	);
	register_sidebar(
		array(
			'id'            => 'footer-social',
			'name'          => __( 'Footer Social Section', 'presento' ),
			'description'   => __( 'Footer social section widget', 'presento' ),
			'before_widget' => '',
			'after_widget'  => '',
		)
	);
	register_sidebar(
		array(
			'id'            => 'footer-newsletter',
			'name'          => __( 'Footer Newsletter Section', 'presento' ),
			'description'   => __( 'Footer newsletter section widget', 'presento' ),
			'before_widget' => '',
			'after_widget'  => '',
			'before_title'  => '<h4>',
			'after_title'   => '</h4>',
		)
	);
}
add_action( 'widgets_init', 'presento_register_sidebar' );

function presento_remove_class($wp_classes){
	unset( $wp_classes[ array_search( "blog", $wp_classes ) ] );
	return $wp_classes;
 }
 add_filter( 'body_class', 'presento_remove_class' );

