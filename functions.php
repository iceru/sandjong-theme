<?php

if (is_file(__DIR__ . '/vendor/autoload_packages.php')) {
    require_once __DIR__ . '/vendor/autoload_packages.php';
}

function tailpress(): TailPress\Framework\Theme
{
    return TailPress\Framework\Theme::instance()
        ->assets(
            fn($manager) => $manager
                ->withCompiler(
                    new TailPress\Framework\Assets\ViteCompiler,
                    fn($compiler) => $compiler
                        ->registerAsset('resources/css/app.css')
                        ->registerAsset('resources/js/app.js')
                        ->editorStyleFile('resources/css/editor-style.css')
                )
                ->enqueueAssets()
        )
        ->features(fn($manager) => $manager->add(TailPress\Framework\Features\MenuOptions::class))
        ->menus(fn($manager) => $manager->add('primary', __('Primary Menu', 'tailpress')))
        ->themeSupport(fn($manager) => $manager->add([
            'title-tag',
            'custom-logo',
            'post-thumbnails',
            'align-wide',
            'wp-block-styles',
            'responsive-embeds',
            'html5' => [
                'search-form',
                'comment-form',
                'comment-list',
                'gallery',
                'caption',
            ]
        ]));
}

tailpress();

/**
 * Register Custom Post Types
 */
function sandjong_register_cpts()
{
    // Senses CPT
    register_post_type('sense', array(
        'labels' => array(
            'name' => 'Senses',
            'singular_name' => 'Sense',
        ),
        'public' => true,
        'has_archive' => false,
        'menu_icon' => 'dashicons-visibility',
        'supports' => array('title', 'editor', 'thumbnail', 'excerpt'),
    ));

    // Facility CPT
    register_post_type('facility', array(
        'labels' => array(
            'name' => 'Facilities',
            'singular_name' => 'Facility',
        ),
        'public' => true,
        'has_archive' => false,
        'menu_icon' => 'dashicons-building',
        'supports' => array('title', 'editor', 'thumbnail', 'excerpt'),
    ));

    // Award CPT
    register_post_type('award', array(
        'labels' => array(
            'name' => 'Awards',
            'singular_name' => 'Award',
        ),
        'public' => true,
        'has_archive' => false,
        'menu_icon' => 'dashicons-awards',
        'supports' => array('title', 'editor', 'thumbnail', 'excerpt'),
    ));

    // Branch CPT
    register_post_type('branch', array(
        'labels' => array(
            'name' => 'Branches',
            'singular_name' => 'Branch',
        ),
        'public' => true,
        'has_archive' => false,
        'menu_icon' => 'dashicons-location',
        'supports' => array('title', 'editor', 'thumbnail', 'excerpt'),
    ));

    // Service CPT
    register_post_type('services', array(
        'labels' => array(
            'name' => 'Services',
            'singular_name' => 'Service',
        ),
        'public' => true,
        'has_archive' => false,
        'menu_icon' => 'dashicons-clipboard',
        'supports' => array('title', 'editor', 'thumbnail', 'excerpt'),
    ));

    // Branch Image CPT
    register_post_type('branch_image', array(
        'labels' => array(
            'name' => 'Branch Images',
            'singular_name' => 'Branch Image',
        ),
        'public' => true,
        'has_archive' => false,
        'menu_icon' => 'dashicons-format-image',
        'supports' => array('title', 'thumbnail'),
    ));

    // Signature Treatment CPT
    register_post_type('signature-treatment', array(
        'labels' => array(
            'name' => 'Signature Treatments',
            'singular_name' => 'Signature Treatment',
        ),
        'public' => true,
        'has_archive' => false,
        'menu_icon' => 'dashicons-admin-users',
        'supports' => array('title', 'editor', 'thumbnail', 'excerpt'),
    ));

    // Package Treatment CPT
    register_post_type('package-treatment', array(
        'labels' => array(
            'name' => 'Package Treatments',
            'singular_name' => 'Package Treatment',
        ),
        'public' => true,
        'has_archive' => false,
        'menu_icon' => 'dashicons-archive',
        'supports' => array('title', 'editor', 'thumbnail', 'excerpt'),
    ));

    // Simple Touch CPT
    register_post_type('simple-touch', array(
        'labels' => array(
            'name' => 'Simple Touch',
            'singular_name' => 'Simple Touch',
        ),
        'public' => true,
        'has_archive' => false,
        'menu_icon' => 'dashicons-heart',
        'supports' => array('title', 'editor', 'thumbnail', 'excerpt'),
    ));

    // Taxonomy for Treatment Categories (used by Package Treatment)
    register_taxonomy('treatment-category', 'package-treatment', array(
        'labels' => array(
            'name' => 'Treatment Categories',
            'singular_name' => 'Treatment Category',
        ),
        'hierarchical' => true,
        'show_admin_column' => true,
        'public' => true,
    ));

    // Promotions CPT
    register_post_type('promotions', array(
        'labels' => array(
            'name' => 'Promotions',
            'singular_name' => 'Promotion',
        ),
        'public' => true,
        'has_archive' => false,
        'menu_icon' => 'dashicons-tag',
        'supports' => array('title', 'editor', 'thumbnail', 'excerpt'),
    ));
}
add_action('init', 'sandjong_register_cpts');
