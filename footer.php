</main><?php /** メインコンテンツ終了 */ ?>

<footer class="text-gray-900 bg-white">
    <div class="max-w-6xl mx-auto px-4 sm:px-6 lg:px-8 md:py-12 py-6">
        <div class="flex justify-between gap-4 lg:gap-[90px] items-center lg:flex-row flex-col">
            <!-- logo -->
            <div class="w-[180px] lg:w-[280px]">
                <img src="<?php echo get_template_directory_uri(); ?>/assets/img/logo.png" alt="ロゴ" class="w-full h-auto block">
            </div>

            <!-- ナビゲーション -->
            <div class="flex-1 flex gap-8 lg:gap-[100px] w-full md:w-auto text-brown1 justify-end flex-col md:flex-row">
                <div class="flex flex-row-reverse md:flex-col justify-between gap-4 text-sm">
                    <dl class="space-y-1 w-full md:w-auto">
                        <div class="flex flex-col md:flex-row md:gap-2">
                            <dt class="w-[60px] font-bold md:text-base text-sm">住所</dt>
                            <dd>小千谷市高梨町1931-2</dd>
                        </div>
                        <div class="flex flex-col md:flex-row md:gap-2">
                            <dt class="w-[60px] font-bold md:text-base text-sm">TEL</dt>
                            <dd>025-89-8202</dd>
                        </div>
                        <div class="flex flex-col md:flex-row md:gap-2">
                            <dt class="w-[60px] font-bold md:text-base text-sm">FAX</dt>
                            <dd>025-89-8203</dd>
                        </div>
                        <div class="flex flex-col md:flex-row md:gap-2">
                            <dt class="w-[60px] font-bold md:text-base text-sm">メール</dt>
                            <dd>info@hattatsu-ciel.com</dd>
                        </div>
                    </dl>
                    <div class="bg-sky2 text-white font-bold px-6 py-2 rounded-lg flex flex-col md:flex-row gap-4 items-center justify-center">
                        <p>お問い合わせは<br />
                            こちらから</p>
                        <div class="w-[100px] h-[100px]">
                            <img
                                src="<?php echo get_template_directory_uri(); ?>/assets/img/QR_code.png" alt="お問い合わせはこちらから"
                                class="w-full h-auto">
                        </div>
                    </div>
                </div>
                <div class="md:text-base text-xs">
                    <?php
                    wp_nav_menu(array(
                        'theme_location' => 'footer',
                        'container' => false,
                        'fallback_cb' => false,
                        'items_wrap' => '<ul class="%2$s" style="display: flex; flex-direction: column; gap: 0.5rem;">%3$s</ul>',
                        'link_before' => '<span style="opacity: 1; transition: 
                            opacity 0.3s ease; position: relative; 
                            display: flex; justify-content: space-between; align-items: center; width: 100%; border-bottom: 1px solid rgb(235, 204, 174);" 
                            onmouseover="this.style.opacity=0.7" onmouseout="this.style.opacity=1">',
                        'link_after' => '<i class="fas fa-chevron-right" style="font-size: 10px; 
                        background-color:rgb(189, 137, 86); color: #fff; flex-shrink: 0; margin-left: 12px; width: 20px; height: 20px; line-height: 20px; display: flex; align-items: center; justify-content: center; 
                        border-radius: 100%;"></i></span>',
                    ));
                    ?>
                </div>
            </div>
        </div>
    </div>
    <div class="bg-sky1">
        <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8 py-4">
            <p class="text-center">
                &copy; <?php echo date('Y'); ?> <?php bloginfo('name'); ?>
            </p>
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