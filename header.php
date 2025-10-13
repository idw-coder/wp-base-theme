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
                        'link_before' => '<span class="text-gray-700 hover:text-blue-600 transition">',
                        'link_after' => '</span>',
                    ));
                    ?>
                </nav>

                <!-- モバイルメニューボタン -->
                <button id="mobile-menu-button" class="md:hidden text-gray-700 hover:text-blue-600 focus:outline-none">
                    <svg class="w-6 h-6" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M4 6h16M4 12h16M4 18h16"></path>
                    </svg>
                </button>
            </div>

            <!-- モバイルメニュー -->
            <div id="mobile-menu" class="hidden md:hidden pb-4">
                <?php
                wp_nav_menu(array(
                    'theme_location' => 'primary',
                    'container' => false,
                    'menu_class' => 'space-y-2',
                    'fallback_cb' => false,
                    'items_wrap' => '<ul class="%2$s">%3$s</ul>',
                    'link_before' => '<span class="block py-2 text-gray-700 hover:text-blue-600 transition">',
                    'link_after' => '</span>',
                ));
                ?>
            </div>
        </div>
    </header>

    <main class="min-h-screen"><?php /** メインコンテンツ開始 */ ?>