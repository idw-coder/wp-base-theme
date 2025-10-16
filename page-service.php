<?php get_header(); ?>

<div class="">
    <?php while (have_posts()) : the_post(); ?>
        <?php include 'include/page-hero.php'; ?>

        <div class="px-4 md:px-8 py-8 md:py-12">
            <section class="section">
                <h2 class="ribbon red">ご利用までの流れ</h2>
                <div class="white-box text-base md:text-xl flex justify-center">
                    <div class="text-left">
                        <span class="font-bold text-3xl text-red1">1. </span>お問い合わせ<br />
                        <span class="font-bold text-3xl text-red1">2. </span>ご見学・ご面談<br />
                        <span class="font-bold text-3xl text-red1">3. </span>受給者証の申請・発行<br />
                        <span class="font-bold text-3xl text-red1">4. </span>シエルと契約・ご利用開始<br />
                    </div>

                    <div class="white-box-image-bottom-right">
                        <img src="<?php echo esc_url(get_template_directory_uri() . '/assets/img/circle_image_03.png'); ?>"
                            alt="ご利用までの流れ" class="white-box-image__img">
                    </div>
                </div>
            </section>

            <section class="section">
                <h2 class="ribbon sky2">対象となるお子さん</h2>
                <div class="white-box">
                    <dl>
                        <div class="flex flex-col md:flex-row gap-2 border-b border-gray-200 pb-2 mb-2 px-0 md:px-4">
                            <dt class="font-bold md:w-[240px] text-center md:text-left">児童発達支援</dt>
                            <dd class="text-sm text-center md:text-left md:text-base">１歳から６歳（就学前のお子さん）</dd>
                        </div>
                        <div class="flex flex-col md:flex-row gap-2 border-b border-gray-200 pb-2 mb-2 px-0 md:px-4">
                            <dt class="font-bold md:w-[240px] text-center md:text-left">放課後等デイサービス</dt>
                            <dd class="text-sm text-center md:text-left md:text-base">学校に就学しているお子さん<br class="md:hidden">（幼稚園・大学は除く）</dd>
                        </div>
                        <div class="flex flex-col md:flex-row gap-2 border-b border-gray-200 pb-2 mb-2 px-0 md:px-4">
                            <dt class="font-bold md:w-[240px] text-center md:text-left">地域</dt>
                            <dd class="text-sm text-center md:text-left md:text-base">原則として小千谷市在住の方</dd>
                        </div>
                    </dl>
                    <div class="white-box-image-bottom-left">
                        <img src="<?php echo esc_url(get_template_directory_uri() . '/assets/img/circle_image_02.png'); ?>"
                            alt="1日の流れ" class="white-box-image__img">
                    </div>
                </div>
            </section>

            <section class="section">
                <h2 class="ribbon red">1日の流れ</h2>
                <div class="white-box md:mb-36 mb-24 text-sm">
                    <p class="font-bold text-2xl text-red1 text-center mb-4 md:mb-12">＜児童発達支援＞<br class="md:hidden">（モデルケース）</p>
                    <p class="text-center font-bold text-xl relative mb-8">
                        <span style="position: absolute; content: ''; top: 50%; left: 0; width: 100%; height: 2px; background-color:rgb(215, 190, 163);"></span>
                        <span class="bg-white px-4 relative">午前</span>
                    </p>
                    <div class="flex justify-between border-b border-gray-200 pb-2 mb-2 md:mx-8">
                        <div class="font-bold">9:15</div>
                        <div class="flex-shrink-0 min-w-[70%] md:min-w-[50%]">お迎え（ご自宅）<br class="md:hidden">または保護者送迎</div>
                    </div>
                    <div class="flex justify-between border-b border-gray-200 pb-2 mb-2 md:mx-8">
                        <div class="font-bold">9:30</div>
                        <div class="flex-shrink-0 min-w-[70%] md:min-w-[50%]">はじまりの会</div>
                    </div>
                    <div class="flex justify-between border-b border-gray-200 pb-2 mb-8 md:mx-8">
                        <div class="font-bold">11:15</div>
                        <div class="flex-shrink-0 min-w-[70%] md:min-w-[50%]">お送り（ご自宅・在籍園）<br class="md:hidden">または保護者送迎</div>
                    </div>
                    <p class="text-center font-bold text-xl relative mb-8">
                        <span style="position: absolute; content: ''; top: 50%; left: 0; width: 100%; height: 2px; background-color:rgb(215, 190, 163);"></span>
                        <span class="bg-white px-4 relative">午後</span>
                    </p>
                    <div class="flex justify-between border-b border-gray-200 pb-2 mb-2 md:mx-8">
                        <div class="font-bold">14:00</div>
                        <div class="flex-shrink-0 min-w-[70%] md:min-w-[50%]">お迎え（ご自宅・在籍園）<br class="md:hidden">または保護者送迎</div>
                    </div>
                    <div class="flex justify-between border-b border-gray-200 pb-2 mb-2 md:mx-8">
                        <div class="font-bold">14:15</div>
                        <div class="flex-shrink-0 min-w-[70%] md:min-w-[50%]">はじまりの会<br />個別療育・集団活動・おやつ<br />おわりの会</div>
                    </div>
                    <div class="flex justify-between border-b border-gray-200 pb-2 mb-8 md:mx-8">
                        <div class="font-bold">16:00</div>
                        <div class="flex-shrink-0 min-w-[70%] md:min-w-[50%]">お送り（ご自宅）<br class="md:hidden">または保護者送迎</div>
                    </div>
                    <p class="text-center mb-8">＊利用時間は保護者さまと<br class="md:hidden">相談のうえ決定します。</p>

                    <div class="aspect-[2/1] rounded-lg overflow-hidden">
                        <img src="<?php echo esc_url(get_template_directory_uri() . '/assets/img/IMG_4435.JPEG'); ?>"
                            alt="児童発達支援の1日の流れ" class="w-full h-full object-cover">
                    </div>
                </div>

                <div class="white-box text-sm">
                    <p class="font-bold text-2xl text-red1 text-center mb-4 md:mb-12">＜放課後等デイサービス＞<br class="md:hidden">（モデルケース）</p>
                    <p class="text-center font-bold text-xl relative mb-8">
                        <span style="position: absolute; content: ''; top: 50%; left: 0; width: 100%; height: 2px; background-color:rgb(215, 190, 163);"></span>
                        <span class="bg-white px-4 relative">授業日</span>
                    </p>

                    <div class="flex justify-between border-b border-gray-200 pb-2 mb-2 md:mx-8">
                        <div class="font-bold">15:00</div>
                        <div class="flex-shrink-0 min-w-[70%] md:min-w-[50%]">お迎え（在籍校）</div>
                    </div>
                    <div class="flex justify-between border-b border-gray-200 pb-2 mb-2 md:mx-8">
                        <div class="font-bold">15:30</div>
                        <div class="flex-shrink-0 min-w-[70%] md:min-w-[50%]">はじまりの会<br />個別療育・集団活動・<br class="md:hidden">学習支援・おやつ<br />おわりの会</div>
                    </div>
                    <div class="flex justify-between border-b border-gray-200 pb-2 mb-8 md:mx-8">
                        <div class="font-bold">17:30</div>
                        <div class="flex-shrink-0 min-w-[70%] md:min-w-[50%]">お送り（ご自宅）<br class="md:hidden">または保護者送迎</div>
                    </div>

                    <p class="text-center font-bold text-xl relative mb-8">
                        <span style="position: absolute; content: ''; top: 50%; left: 0; width: 100%; height: 2px; background-color:#d7bea3;"></span>
                        <span class="bg-white px-4 relative">長期休業日</span>
                    </p>
                    <div class="flex justify-between border-b border-gray-200 pb-2 mb-2 md:mx-8">
                        <div class="font-bold">9:00</div>
                        <div class="flex-shrink-0 min-w-[70%] md:min-w-[50%]">お迎え（ご自宅）<br class="md:hidden">または保護者送迎</div>
                    </div>
                    <div class="flex justify-between border-b border-gray-200 pb-2 mb-2 md:mx-8">
                        <div class="font-bold">9:30</div>
                        <div class="flex-shrink-0 min-w-[70%] md:min-w-[50%]">はじまりの会<br />個別療育・集団活動<br />学習支援</div>
                    </div>
                    <div class="flex justify-between border-b border-gray-200 pb-2 mb-2 md:mx-8">
                        <div class="font-bold">12:00</div>
                        <div class="flex-shrink-0 min-w-[70%] md:min-w-[50%]">昼食（お弁当）・休憩</div>
                    </div>
                    <div class="flex justify-between border-b border-gray-200 pb-2 mb-2 md:mx-8">
                        <div class="font-bold">13:00</div>
                        <div class="flex-shrink-0 min-w-[70%] md:min-w-[50%]">午後の活動<br class="md:hidden">（制作、レクリエーションなど）<br />自由時間<br />おやつ<br />おわりの会</div>
                    </div>
                    <div class="flex justify-between border-b border-gray-200 pb-2 mb-8 md:mx-8">
                        <div class="font-bold">17:30</div>
                        <div class="flex-shrink-0 min-w-[70%] md:min-w-[50%]">お送り（ご自宅）<br class="md:hidden">または保護者送迎</div>
                    </div>

                </div>
            </section>

            <section class="section">
                <h2 class="ribbon purple1">ご利用料金</h2>
                <div class="white-box">
                    <p>受給者証を取得されますと、1割の利用者負担でご利用いただけます。</p>
                    <p class="mb-8">月額には以下の上限金額が決まっており、それ以上になることはありません。</p>
                    <dl class="border-t-2 border-b-2 border-[#d7bea3] py-4 mb-8">
                        <div class="flex justify-between items-center gap-2 mb-2 text-sm md:text-base px-0 md:px-10">
                            <dt class="flex-shrink-0">非課税世帯</dt>
                            <dd class="font-bold">0円</dd>
                        </div>
                        <div class="flex justify-between items-center gap-2 mb-2 text-sm md:text-base px-0 md:px-10">
                            <dt class="flex-shrink-0">世帯所得　<br class="md:hidden">約８９０万円までのご家庭</dt>
                            <dd class="font-bold">4,600円</dd>
                        </div>
                        <div class="flex justify-between items-center gap-2 mb-2 text-sm md:text-base px-0 md:px-10">
                            <dt class="flex-shrink-0">世帯所得　<br class="md:hidden">約８９０万円以上のご家庭</dt>
                            <dd class="font-bold">37,200円</dd>
                        </div>
                    </dl>
                    <p>＊満３歳になった４月１日から小学校就学まで（年少から年長）のお子さんは「就学前障害児の発達支援の無償化」により、上記にかかわらず利用料無料となります。</p>
                    <p>外出や制作などを行う際、実費を徴収することがあります。</p>
                </div>
            </section>
        </div>

    <?php endwhile; ?>
</div>

<?php get_footer(); ?>