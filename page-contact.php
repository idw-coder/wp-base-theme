<?php get_header(); ?>

<div class="">
    <?php while (have_posts()) : the_post(); ?>
        <?php include 'include/page-hero.php'; ?>

        <div class="px-4 md:px-8 py-8 md:py-12">
            <section class="section">
                <h2 class="ribbon red">お問い合わせ先情報</h2>
                <div class="white-box">
                    <div class="max-w-md mx-auto mb-8">
                        <div class="flex justify-between border-b border-gray-200 pb-2 mb-2">
                            <dt class="font-bold">住所</dt>
                            <dd>小千谷市高梨町1931-2</dd>
                        </div>
                        <div class="flex justify-between border-b border-gray-200 pb-2 mb-2">
                            <dt class="font-bold">TEL</dt>
                            <dd>025-89-8202</dd>
                        </div>
                        <div class="flex justify-between border-b border-gray-200 pb-2 mb-2">
                            <dt class="font-bold">FAX</dt>
                            <dd>025-89-8203</dd>
                        </div>
                        <div class="flex justify-between border-b border-gray-200 pb-2 mb-2">
                            <dt class="font-bold">メール</dt>
                            <dd>info@hattatsu-ciel.com</dd>
                        </div>
                    </div>
                    <div class="bg-sky2 text-white font-bold max-w-md mx-auto px-6 py-2 mb-12 rounded-lg flex gap-4 items-center justify-center">
                        <p>お問い合わせは<br />
                            こちらから</p>
                        <div class="w-[100px] h-[100px]">
                            <img
                                src="<?php echo get_template_directory_uri(); ?>/assets/img/QR_code.png" alt="お問い合わせはこちらから"
                                class="w-full h-auto">
                        </div>
                    </div>

                    <p class="text-center font-bold text-xl relative mb-8">
                        <span style="position: absolute; content: ''; top: 50%; left: 0; width: 100%; height: 2px; background-color:rgb(215, 190, 163);"></span>
                        <span class="bg-white px-4 relative">営業時間</span>
                    </p>
                    <p class="text-center mb-8">営業時間 9:00〜18:00<br class="md:hidden">（サービス提供時間 9:30〜17:30）</p>
                    <div class="max-w-md mx-auto">
                        <div class="flex justify-between border-b border-gray-200 pb-2 mb-2">
                            <div>営業日</div>
                            <div>月曜〜金曜</div>
                        </div>
                        <div class="flex justify-between border-b border-gray-200 pb-2 mb-2">
                            <div>休業日</div>
                            <div>土曜・日曜・祝祭日</div>
                        </div>
                        <div class="flex justify-between border-b border-gray-200 pb-2 mb-2">
                            <div>年末年始</div>
                            <div>12/29〜1/3</div>
                        </div>
                        <div class="flex justify-between border-b border-gray-200 pb-2 mb-2">
                            <div>夏季休業</div>
                            <div>8/13～8/15</div>
                        </div>
                    </div>
                </div>
            </section>

            <section class="section">
                <h2 class="ribbon red">アクセスマップ</h2>
                <div class="white-box text-center">
                    <div class="max-w-[100%] md:max-w-[60%] mx-auto border-2 border-gray-200 pb-8 mb-8">
                        <img src="<?php echo get_template_directory_uri(); ?>/assets/img/map.png" alt="アクセスマップ" class="w-full h-auto">
                    </div>
                    <p class="mb-12">〒947-0102 <br class="md:hidden">新潟県小千谷市高梨町１９３１</p>
                    <div class="mb-8 max-w-[100%] md:max-w-[60%] mx-auto">
                        <a href="https://www.google.com/maps/place/%E6%96%B0%E6%BE%9F%E7%9C%8C%E5%B0%8F%E5%8D%83%E8%B0%B7%E5%B8%82%E9%AB%98%E6%A2%A8%E7%94%BA1931-2/@37.3529987,138.8095271,17z/data=!3m1!4b1!4m6!3m5!1s0x5ff5a4d077ed3fad:0xfa44b8e551c9a6a7!8m2!3d37.3529987!4d138.8095271!16s%2Fg%2F11r8j9l7k1?hl=ja&entry=ttu&g_ep=EgoyMDI1MTAxMi4wIKXMDSoASAFQAw%3D%3D"
                            target="_blank" rel="noopener noreferrer"
                            class="inline-block w-full bg-gray-200 px-4 py-2 rounded-lg">グーグルマップはこちら</a>
                    </div>
                    <div class="max-w-[100%] md:max-w-[60%] mx-auto aspect-[3/1] rounded-lg overflow-hidden">
                        <iframe class="w-full h-full" src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3171.5568525044737!2d138.80952707586385!3d37.35299877209473!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x5ff5a4d077ed3fad%3A0xfa44b8e551c9a6a7!2z44CSOTQ3LTAxMDIg5paw5r2f55yM5bCP5Y2D6LC35biC6auY5qKo55S677yR77yZ77yT77yR!5e0!3m2!1sja!2sjp!4v1760321713034!5m2!1sja!2sjp"
                            width="100%" height="100%" style="border:0;" allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade"></iframe>
                    </div>
                </div>
        </div>
        </section>

</div>

<?php endwhile; ?>
</div>

<?php get_footer(); ?>