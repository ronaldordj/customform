<?php
//Ativar o normalize.css pois os navegadores seguem um padrão diferente de margens e preenchimentos.
function add_normalize_CSS() {
    wp_enqueue_style( 'normalize-styles', "https://cdnjs.cloudflare.com/ajax/libs/normalize/7.0.0/normalize.min.css");
}

// Ativar barra lateral
function add_widget_Support() {
    register_sidebar( array(
                    'name'          => 'Sidebar',
                    'id'            => 'sidebar',
                    'before_widget' => '<div>',
                    'after_widget'  => '</div>',
                    'before_title'  => '<h2>',
                    'after_title'   => '</h2>',
    ) );
}
add_action( 'widgets_init', 'add_Widget_Support' );

// Registrando o novo menu
function add_Main_Nav() {
    register_nav_menu('header-menu',__( 'Header Menu' ));
  }  
  add_action( 'init', 'add_Main_Nav' );

  //Carregar CSS e JS
function themebs_enqueue_styles() {
wp_enqueue_style( 'bootstrap', get_template_directory_uri() . '/assets/css/bootstrap.min.css' );
wp_enqueue_style( 'core', get_template_directory_uri() . '/style.css' );
}
add_action( 'wp_enqueue_scripts', 'themebs_enqueue_styles');
function themebs_enqueue_scripts() {
wp_enqueue_script( 'bootstrap', get_template_directory_uri() . '/assets/js/bootstrap.bundle.min.js',
array( 'jquery' ) );
}
add_action( 'wp_enqueue_scripts', 'themebs_enqueue_scripts');

//Adicionar ícone padrão ao site
function add_favicon() {
    echo '<link rel="shortcut icon" type="image/png" href="'.get_template_directory_uri().'/assets/favicon.png" />';
}
add_action('wp_head', 'add_favicon');
