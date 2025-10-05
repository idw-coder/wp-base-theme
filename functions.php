<?php
function custombase_enqueue_assets()
{
    // Google Fonts の読み込み
    wp_enqueue_style(
        'custombase-google-fonts',
        'https://fonts.googleapis.com/css2?family=Zen+Maru+Gothic&display=swap',
        array(),
        null
    );

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

    // フォントを全体に適用（Tailwind後に確実に反映）
    $font_css = 'body { font-family: "Zen Maru Gothic", "Noto Sans JP", system-ui, -apple-system, "Segoe UI", Roboto, "Hiragino Kaku Gothic ProN", Meiryo, sans-serif; }';
    wp_add_inline_style('custombase-tailwind', $font_css);

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

// フォント最適化用の preconnect を <head> に追加
function custombase_add_preconnect()
{
    echo "<link rel=\"preconnect\" href=\"https://fonts.googleapis.com\">\n";
    echo "<link rel=\"preconnect\" href=\"https://fonts.gstatic.com\" crossorigin>\n";
}
add_action('wp_head', 'custombase_add_preconnect', 1);

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

// カスタムロゴの画像にクラスを追加して、はみ出しを防ぐ
function custombase_custom_logo_class($html)
{
    // imgタグにクラスを追加
    $html = str_replace('class="custom-logo"', 'class="custom-logo max-h-full w-auto object-contain"', $html);
    // aタグにもクラスを追加
    $html = str_replace('class="custom-logo-link"', 'class="custom-logo-link flex items-center h-full"', $html);
    return $html;
}
add_filter('get_custom_logo', 'custombase_custom_logo_class');
