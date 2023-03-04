<?php
function theme_scripts_and_styles() {

wp_enqueue_style(
    'idm250-styles',
    get_template_directory_uri() . '/dist/styles/main.css' ,
    [],
    filemtime(get_template_directory() . '/dist/styles/main.css') , 
    
    'all'

);
// wp_enqueue_style(
//     'google-fonts',
//     'https://fonts.google.com/specimen/Space+Grotesk',
//     [],
//     null
// );
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


/**
 * Register custom taxonomies
 * @link https://developer.wordpress.org/reference/functions/register_taxonomy/
 * @return void
 */
function register_custom_taxonomies()
{
    $args = [
        'labels' => [
            'name' => 'Project Categories',
            'singular_name' => 'Project Category',
            'search_items' => 'Search Project Categories',
            'all_items' => 'All Project Categories',
            'parent_item' => 'Parent Project Category',
            'parent_item_colon' => 'Parent Project Type:',
            'edit_item' => 'Edit Project Category',
            'update_item' => 'Update Project Category',
            'add_new_item' => 'Add New Project Category',
            'new_item_name' => 'New Project Type Name',
            'menu_name' => 'Project Categories',
        ],
        'hierarchical' => true,
        'show_ui' => true,
        'show_admin_column' => true,
        'query_var' => true,
        'rewrite' => ['slug' => 'project/categories'],
        'show_in_rest' => true,

    ];

    $taxonomy_name = 'project-categories'; // name of the taxonomy. Name should be in slug form (must not contain capital letters or spaces).
    $taxonomy_association = ['projects']; // post types to associate with this taxonomy
    register_taxonomy($taxonomy_name, $taxonomy_association, $args);
}
add_action('init', 'register_custom_taxonomies');


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