<?php
function theme_scripts_and_styles() {

wp_enqueue_style(
    'idm250-styles',
    get_template_directory_uri() . '/dist/styles/main.css' ,
    [],
    filemtime(get_template_directory() . '/dist/styles/main.css') , 
    
    'all'

);
wp_enqueue_style(
    'google-fonts',
    'https://fonts.google.com/specimen/Space+Grotesk',
    [],
    null
);
wp_enqueue_script(
    'idm250-scripts', 
    get_template_directory_uri() . '/dist/scripts/main.js', 
    [], 
    filemtime(get_template_directory() . '/dist/scripts/main.js'), 
    true 
);
}

add_action('wp_enqueue_scripts' , 'theme_scripts_and_styles');

add_theme_support('post-thumbnails');

add_post_type_support('page', 'excerpt');

function register_theme_menus()
{
    register_nav_menus (
        [
            'primary-menu' => 'Primary Menu',
            'extra-menu' => 'Extra Menu'

        ]
        );
}

add_action('init', 'register_theme_menus');





// function register_custom_post_types()
// {
//     // Register Albums post type
//     register_post_type(
//         'blogs',
//         [
//             'labels' => [
//                 'name' => __('Blogs'),
//                 'singular_name' => __('Blog')
//             ],
//             'public' => true,
//             'has_archive' => true,
//             'rewrite' => ['slug' => 'blogs'],
//             'supports' => ['title', 'editor', 'thumbnail', 'excerpt'],
//             'show_in_rest' => true,
//         ]
//     );
// }

// add_action('init', 'register_custom_post_types');
// ?>