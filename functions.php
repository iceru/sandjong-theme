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
}
add_action('init', 'sandjong_register_cpts');
