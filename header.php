<!DOCTYPE html>
<html <?php language_attributes(); ?>>

<head>
    <meta charset="<?php bloginfo('charset'); ?>">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <?php wp_head(); ?>
</head>

<body <?php body_class('bg-gray-50'); ?>>
    <?php wp_body_open(); ?>

    <header class="bg-white shadow-sm sticky top-0 z-50">
        <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
            <div class="flex justify-between items-center py-2">
                <div class="flex items-center">
                    <div class="flex items-center flex-col md:flex-row gap-2">
                        <?php if (has_custom_logo()) : ?>
                            <div class="mr-4 h-[40px] lg:h-[60px]">
                                <?php
                                // カスタムロゴに適切なクラスを追加
                                add_filter('get_custom_logo', function ($html) {
                                    return str_replace('custom-logo-link', 'custom-logo-link h-full', $html);
                                });
                                the_custom_logo();
                                ?>
                            </div>
                        <?php else : ?>
                            <div class="mr-4 h-[40px] lg:h-[60px]">
                                <a href="<?php echo esc_url(home_url('/')); ?>" class="custom-logo-link h-full block">
                                    <img src="<?php echo get_template_directory_uri(); ?>/assets/img/children_logo_02.png" alt="ロゴ" class="h-full w-auto block">
                                </a>
                            </div>
                        <?php endif; ?>
                        <!-- キャッチフレーズ -->
                        <?php if (get_bloginfo('description')) : ?>
                            <p class="text-sm text-gray-500">
                                <?php echo get_bloginfo('description'); ?>
                            </p>
                        <?php else : ?>
                            <p class="text-[10px] text-gray-500">
                                児童発達支援　放課後等デイサービス<br />
                                保育所等訪問支援　特定・障害児相談支援
                            </p>
                        <?php endif; ?>

                    </div>
                </div>

                <!-- ナビゲーション -->
                <nav class="hidden md:flex space-x-8">
                    <?php
                    wp_nav_menu(array(
                        'theme_location' => 'primary',
                        'container' => false,
                        'menu_class' => 'flex space-x-8',
                        'fallback_cb' => false,
                        'items_wrap' => '<ul class="%2$s">%3$s</ul>',
                        'link_before' => '<span class="text-gray-700 hover:text-blue-600 transition-colors duration-200 ease-out">',
                        'link_after' => '</span>',
                    ));
                    ?>
                </nav>

                <!-- モバイルメニューボタン -->
                <button id="mobile-menu-button" class="md:hidden text-gray-700 hover:text-blue-600 focus:outline-none">
                    <svg class="w-8 h-8" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                        <path class="text-red1" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M4 6h16M4 12h16M4 18h16"></path>
                    </svg>
                </button>
            </div>

            <!-- モバイルメニュー -->
            <div id="mobile-menu" class="hidden md:hidden text-center -mx-4 sm:-mx-6 lg:-mx-8">
                <?php
                wp_nav_menu(array(
                    'theme_location' => 'primary',
                    'container' => false,
                    'menu_class' => 'bg-sky1/60',
                    'fallback_cb' => false,
                    // 'items_wrap' => '<ul class="%2$s">%3$s</ul>',
                    'link_before' => '<span class="block w-full px-4 sm:px-6 lg:px-8 py-2 hover:text-blue-600 hover:bg-blue-50 transition-colors duration-200 ease-out">',
                    'link_after' => '</span>',
                ));
                ?>
            </div>
        </div>
    </header>

    <main class="min-h-screen"><?php /** メインコンテンツ開始 */ ?>