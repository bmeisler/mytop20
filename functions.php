<?php 

function appannie_scripts()
{
    wp_enqueue_style( 'appannie', get_stylesheet_uri() );
	//wp_register_script( 'custom-script', get_template_directory_uri() . '/bootstrap-full/dist/js/bootstrap.js', array( 'jquery' ) );
    wp_register_script( 'custom-script', get_template_directory_uri() . '/library/js/bootstrap.min.js', array( 'jquery' ) );
	wp_enqueue_script( 'custom-script' );

    wp_register_script( 'lodash-script', get_template_directory_uri() . '/library/js/lodash.min.js', array( ), true );
    wp_enqueue_script( 'lodash-script' );

    wp_register_script( 'movie-loader', get_template_directory_uri() . '/library/js/movieLoader.js', array( 'lodash-script'), true );
    wp_enqueue_script( 'movie-loader' );

}
add_action( 'wp_enqueue_scripts', 'appannie_scripts' );

add_action('wp_head','hook_css');

function hook_css() {

	$output="<style> .article-h1 { background-color : #f1f1f1; } </style>";

	echo $output;

    $output="<style> .btn-ticket { margin-bottom:5px; } </style>";

    echo $output;

}

function bootstrapwp_widgets_init() {

    register_sidebar(
        array(
            'name'          => __('Page Sidebar', 'bootstrapwp'),
            'id'            => 'sidebar-page',
            'before_widget' => '<div id="%1$s" class="widget %2$s">',
            'after_widget'  => "</div>",
            'before_title'  => '<h4 class="widget-title">',
            'after_title'   => '</h4>',
        )
    );

    register_sidebar(
        array(
            'name'          => __('Posts Sidebar', 'bootstrapwp'),
            'id'            => 'sidebar-posts',
            'before_widget' => '<div id="%1$s" class="widget %2$s">',
            'after_widget'  => "</div>",
            'before_title'  => '<h4 class="widget-title">',
            'after_title'   => '</h4>',
        )
    );

    register_sidebar(
        array(
            'name'          => __('Home Left', 'bootstrapwp'),
            'id'            => 'home-left',
            'description'   => __('Left textbox on homepage', 'bootstrapwp'),
            'before_widget' => '<div id="%1$s" class="widget %2$s">',
            'after_widget'  => '</div>',
            'before_title'  => '<h2>',
            'after_title'   => '</h2>'
        )
    );

    register_sidebar(
        array(
            'name'          => __('Home Middle', 'bootstrapwp'),
            'id'            => 'home-middle',
            'description'   => __('Middle textbox on homepage', 'bootstrapwp'),
            'before_widget' => '<div id="%1$s" class="widget %2$s">',
            'after_widget'  => '</div>',
            'before_title'  => '<h2>',
            'after_title'   => '</h2>'
        )
    );

    register_sidebar(
        array(
            'name'          => __('Home Right', 'bootstrapwp'),
            'id'            => 'home-right',
            'description'   => __('Right textbox on homepage', 'bootstrapwp'),
            'before_widget' => '<div id="%1$s" class="widget %2$s">',
            'after_widget'  => '</div>',
            'before_title'  => '<h2>',
            'after_title'   => '</h2>'
        )
    );

    register_sidebar(
        array(
            'name'          => __('Footer Content', 'bootstrapwp'),
            'id'            => 'footer-content',
            'description'   => __('Footer text or acknowledgements', 'bootstrapwp'),
            'before_widget' => '<div id="%1$s" class="widget %2$s">',
            'after_widget'  => '</div>',
            'before_title'  => '<h4>',
            'after_title'   => '</h4>'
        )
    );

}
add_action('init', 'bootstrapwp_widgets_init');

?>