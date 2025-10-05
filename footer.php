</main><?php /** メインコンテンツ終了 */ ?>

<footer class="bg-gray-200 text-gray-900">
    <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8 py-12">
        <div class="grid grid-cols-1 md:grid-cols-3 gap-8">
            <!-- サイト情報 -->
            <div>
                <h3 class="text-xl font-bold mb-4"><?php bloginfo('name'); ?></h3>
                <p class="text-gray-400"><?php bloginfo('description'); ?></p>
            </div>

            <!-- ナビゲーション -->
            <div>
                <h4 class="text-lg font-semibold mb-4">メニュー</h4>
                <?php
                wp_nav_menu(array(
                    'theme_location' => 'footer',
                    'container' => false,
                    'menu_class' => 'space-y-2',
                    'fallback_cb' => false,
                    'items_wrap' => '<ul class="%2$s">%3$s</ul>',
                    'link_before' => '<span class="text-gray-400 hover:text-white transition">',
                    'link_after' => '</span>',
                ));
                ?>
            </div>

            <!-- その他情報 -->
            <div>
                <h4 class="text-lg font-semibold mb-4">情報</h4>
                <div class="text-gray-400 space-y-2">
                    <p>&copy; <?php echo date('Y'); ?> <?php bloginfo('name'); ?></p>
                    <p>All rights reserved.</p>
                </div>
            </div>
        </div>
    </div>
</footer>

<?php wp_footer(); ?>

<script>
    // モバイルメニュートグル
    document.getElementById('mobile-menu-button')?.addEventListener('click', function() {
        const menu = document.getElementById('mobile-menu');
        menu.classList.toggle('hidden');
    });
</script>

</body>

</html>