<?php
function custombase_enqueue_assets()
{
    // テーマのメインCSSの読み込み
    wp_enqueue_style(
        'custombase-style',
        get_stylesheet_uri(),
        array(),
        filemtime(get_template_directory() . '/style.css')
    );

    // Tailwindの読み込み（ビルド済みCSS）
    wp_enqueue_style(
        'custombase-tailwind',
        get_template_directory_uri() . '/assets/css/style.css',
        array(),
        filemtime(get_template_directory() . '/assets/css/style.css')
    );

    // JSの読み込み
    wp_enqueue_script(
        'custombase-script',
        get_template_directory_uri() . '/assets/js/script.js',
        array(),
        filemtime(get_template_directory() . '/assets/js/script.js'),
        true // フッターで読み込む
    );
}
add_action('wp_enqueue_scripts', 'custombase_enqueue_assets');

// テーマサポート
function custombase_theme_setup()
{
    // タイトルタグのサポート
    add_theme_support('title-tag');

    // アイキャッチ画像のサポート
    add_theme_support('post-thumbnails');

    // HTML5サポート
    add_theme_support('html5', array(
        'search-form',
        'comment-form',
        'comment-list',
        'gallery',
        'caption',
    ));

    // ナビゲーションメニューの登録
    register_nav_menus(array(
        'primary' => 'ヘッダーメニュー',
        'footer' => 'フッターメニュー',
    ));

    // カスタムロゴのサポート
    add_theme_support('custom-logo', array());
}
add_action('after_setup_theme', 'custombase_theme_setup');
