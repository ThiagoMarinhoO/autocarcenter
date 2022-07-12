<?php
/**
 * ------------------------------------------------------------------------- *
 * GENERAL CONFIGURATION (styles and scripts) *
 * ------------------------------------------------------------------------- *
 *
 * @package Antares
 */

/**
 * Load scripts and style.
 */
function enqueue_scripts() {

  wp_enqueue_style('main-css', WP_STYLE_URL . '/main.css', array(), null, false);
  wp_enqueue_style('ekos-bootstrap', WP_STYLE_URL . '/bootstrap/bootstrap.min.css');
  wp_enqueue_style('ekos-swiper-style' , 'https://unpkg.com/swiper@7/swiper-bundle.min.css');
  wp_enqueue_style('montserrat-font' , 'https://fonts.googleapis.com/css2?family=Montserrat:ital,wght@0,100;0,200;0,300;0,400;0,500;0,600;0,700;0,800;0,900;1,100;1,200;1,300;1,400;1,500;1,600;1,700;1,800;1,900&display=swap');

  wp_register_script('app', WP_SCRIPT_URL . '/app.js', array('jquery'), null, true);
  wp_enqueue_script('app');  
  wp_enqueue_script('popper' , 'https://cdn.jsdelivr.net/npm/@popperjs/core@2.10.2/dist/umd/popper.min.js' , array('jQuery') , '1.0' , true);
  wp_enqueue_script('ekos-bootstrap-js' , WP_SCRIPT_URL . 'bootstrap/css/bootstrap.min.js' , array('popper') , '1.0' , true);
  wp_enqueue_script('ekos-swiper-script' , 'https://unpkg.com/swiper@7/swiper-bundle.min.js');
  wp_enqueue_script('ekos-scrollreveal-script' , 'https://unpkg.com/scrollreveal');
  wp_localize_script( 'app', 'wpurl',
    array( 
        'ajax' => admin_url( 'admin-ajax.php' ),
    )
  );
}
add_action('wp_enqueue_scripts', 'enqueue_scripts');

//Feature image support
add_theme_support( 'post-thumbnails' );


// admin styles
$current_user = wp_get_current_user();
if ($current_user->user_login != '') {
    function custom_wp_admin_style() {
        wp_register_style( 'custom_wp_admin_css', get_template_directory_uri() . '/assets/admin/admin.css', false, '1.0.0' );
        wp_enqueue_style( 'custom_wp_admin_css' );

    }
    add_action( 'admin_enqueue_scripts', 'custom_wp_admin_style' );
}

// login styles
function custom_login_page() {
    wp_enqueue_style('login', get_template_directory_uri() . '/assets/login/login.css', false, '1.0.0' ); 
}
add_action( 'login_enqueue_scripts', 'custom_login_page', 10 );

function images($url, $theme = NULL){
$template = get_template_directory_uri();
$images = '/assets/img/';

  if($theme == NULL){
    return $url;
  }
  else {
    return $template . '/' . $images . '/' . $url;
  }
}

// Login via email ou username

function login_with_email_address( &$username ) {
	$user = get_user_by( 'email', $username );
    if ( !empty( $user->user_login ) )
	$username = $user->user_login;

	return $username;
	
}

add_action( 'wp_authenticate','login_with_email_address');



// Custom Excerpt

function excerpt($limit) {
  $excerpt = explode(' ', get_the_excerpt(), $limit);

  if (count($excerpt) >= $limit) {
      array_pop($excerpt);
      $excerpt = implode(" ", $excerpt) . '...';
  } else {
      $excerpt = implode(" ", $excerpt);
  }

  $excerpt = preg_replace('`\[[^\]]*\]`', '', $excerpt);

  return $excerpt;
}


function slugify($text)
{
  $text = preg_replace('~[^\pL\d]+~u', '-', $text);
  $text = iconv('utf-8', 'us-ascii//TRANSLIT', $text);
  $text = preg_replace('~[^-\w]+~', '', $text);
  $text = trim($text, '-');
  $text = preg_replace('~-+~', '-', $text);
  $text = strtolower($text);

  if (empty($text)) {
    return '';
  }

  return $text;
}