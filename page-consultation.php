<?php
/*
Template Name: 相談支援事業
*/
get_header(); ?>

<div class="">
    <?php while (have_posts()) : the_post(); ?>
        
    <?php include 'include/page-hero.php'; ?>

        <div class="px-4 md:px-8 py-8 md:py-12">
            
            <section class="section mb-12">
                <div class="white-box">
                    <p class="mb-8">「障害者総合支援法」（児童福祉法）に基づいた相談支援事業所です。<br />
                    ご本人の年齢に関係なくご利用いただけます。（療育手帳、障害者手帳の有無は問いません）</p>

                    <p class="text-xl md:text-2xl font-bold text-red1 text-center mb-4 tracking-wider">「サービス等利用計画」「障害児支援利用計画」を作成します。</p>

                    <p class="mb-4">「障害児通所支援（児童発達支援・放課後等デイサービス等）」（児童）や「就労支援や自立訓練等の障害福祉サービス」（成人）を利用する際には、原則として相談支援事業所が作成するサービス利用計画が必要です。</p>

                    <p class="mb-4">障がいのあるご本人やそのご家族に相談支援専門員がお会いし、必要としている支援や保護者のニーズ等をうかがいます。そのうえで必要な支援の内容や量などを検討し、「サービス等利用計画」「障害児支援利用計画」を作成します。</p>
                    <p class="mb-6">また、計画を作成した後も、サービスの提供状況や利用者さまのニーズを確認（モニタリング）し、成長や環境の変化に合わせて、計画の見直しを行います。</p>
                    
                    <ul class="space-y-4">
                        <li class="flex items-center gap-3 pb-4 border-b border-gray-200">
                            <i class="fas fa-check text-red1 mt-1"></i>
                            <span>利用者負担 無料</span>
                        </li>
                        <li class="flex items-center gap-3 pb-4 border-b border-gray-200">
                            <i class="fas fa-check text-red1 mt-1"></i>
                            <span>利用者様の多様なニーズに対応し、よりよい支援を行うため、当事業所には「強度行動障害支援者養成研修（実践研修）」修了者を配置しています。</span>
                        </li>
                    </ul>
                </div>
            </section>

            <section class="section mb-12">
                <h2 class="ribbon blue">サービス利用までの流れ</h2>
                <div class="white-box !px-4 md:!px-8 !py-20 md:!py-24">
                    <div class="flow-chart max-w-xl mx-auto">
                        
                        <div class="relative p-4 bg-sky1 rounded-lg border-2 border-blue1 shadow-md flex gap-4 items-center pt-6 md:pt-8">
                            <div class="absolute top-0 left-1/2 -translate-x-1/2 -translate-y-1/2">
                                <div class="w-12 h-12 md:w-16 md:h-16 rounded-full bg-blue1 border-2 border-blue1 flex items-center justify-center shadow-md">
                                    <span class="text-lg md:text-xl font-bold text-white">01</span>
                                </div>
                            </div>
                            <div class="flex-shrink-0 w-16 h-16 md:w-20 md:h-20 rounded-full bg-white flex items-center justify-center md:mt-6">
                                <i class="fas fa-file-alt text-blue1 text-2xl md:text-3xl"></i>
                            </div>
                            <div class="flex-1">
                                <p class="text-lg md:text-xl font-bold text-gray-800 pb-2 border-b border-gray-300 mb-2">申請</p>
                                <p class="text-sm">お住まいの市町村の福祉窓口にてサービスの利用申請をします。</p>
                            </div>
                        </div>
                        
                        <div class="flex justify-center mb-4 md:mb-6 relative">
                            <div class="w-0.5 h-12 md:h-16 bg-blue1"></div>
                        </div>

                        <div class="relative p-4 bg-sky1 rounded-lg border-2 border-blue1 shadow-md flex gap-4 items-center pt-6 md:pt-8">
                            <div class="absolute top-0 left-1/2 -translate-x-1/2 -translate-y-1/2">
                                <div class="w-12 h-12 md:w-16 md:h-16 rounded-full bg-blue1 border-2 border-blue1 flex items-center justify-center shadow-md">
                                    <span class="text-lg md:text-xl font-bold text-white">02</span>
                                </div>
                            </div>
                            <div class="flex-shrink-0 w-16 h-16 md:w-20 md:h-20 rounded-full bg-white flex items-center justify-center md:mt-6">
                                <i class="fas fa-handshake text-blue1 text-2xl md:text-3xl"></i>
                            </div>
                            <div class="flex-1">
                                <p class="text-lg md:text-xl font-bold text-gray-800 pb-2 border-b border-gray-300 mb-2">契約</p>
                                <p class="text-sm">計画相談支援の利用規約を当事業所と行います。</p>
                            </div>
                        </div>
                        
                        <div class="flex justify-center mb-4 md:mb-6 relative">
                            <div class="w-0.5 h-12 md:h-16 bg-blue1"></div>
                        </div>

                        <div class="relative p-4 bg-sky1 rounded-lg border-2 border-blue1 shadow-md flex gap-4 items-center pt-6 md:pt-8">
                            <div class="absolute top-0 left-1/2 -translate-x-1/2 -translate-y-1/2">
                                <div class="w-12 h-12 md:w-16 md:h-16 rounded-full bg-blue1 border-2 border-blue1 flex items-center justify-center shadow-md">
                                    <span class="text-lg md:text-xl font-bold text-white">03</span>
                                </div>
                            </div>
                            <div class="flex-shrink-0 w-16 h-16 md:w-20 md:h-20 rounded-full bg-white flex items-center justify-center md:mt-6">
                                <i class="fas fa-comments text-blue1 text-2xl md:text-3xl"></i>
                            </div>
                            <div class="flex-1">
                                <p class="text-lg md:text-xl font-bold text-gray-800 pb-2 border-b border-gray-300 mb-2">初回面談・アセスメント</p>
                                <p class="text-sm">障害のある方、そのご家族のこれまでの生活についての聴き取りや、どのようなサービスや生活を希望されているかの確認を行います。</p>
                            </div>
                        </div>
                        
                        <div class="flex justify-center mb-4 md:mb-6 relative">
                            <div class="w-0.5 h-12 md:h-16 bg-blue1"></div>
                        </div>

                            <div class="relative p-4 bg-sky1 rounded-lg border-2 border-blue1 shadow-md flex gap-4 items-center pt-6 md:pt-8">
                            <div class="absolute top-0 left-1/2 -translate-x-1/2 -translate-y-1/2">
                                <div class="w-12 h-12 md:w-16 md:h-16 rounded-full bg-blue1 border-2 border-blue1 flex items-center justify-center shadow-md">
                                    <span class="text-lg md:text-xl font-bold text-white">04</span>
                                </div>
                            </div>
                            <div class="flex-shrink-0 w-16 h-16 md:w-20 md:h-20 rounded-full bg-white flex items-center justify-center md:mt-6">
                                <i class="fas fa-clipboard-list text-blue1 text-2xl md:text-3xl"></i>
                            </div>
                            <div class="flex-1">
                                <p class="text-lg md:text-xl font-bold text-gray-800 pb-2 border-b border-gray-300 mb-2">サービス等利用計画案の作成・同意</p>
                                <p class="text-sm">相談支援専門員がアセスメントの内容をもとに、サービス等利用計画案の作成を行います。<br />
                                    作成しましたらご本人、ご家族に内容の確認を頂き、お住いの市町村へ提出いたします。</p>
                            </div>
                        </div>
                        
                        <div class="flex justify-center mb-4 md:mb-6 relative">
                            <div class="w-0.5 h-12 md:h-16 bg-blue1"></div>
                        </div>

                        <div class="relative p-4 bg-sky1 rounded-lg border-2 border-blue1 shadow-md flex gap-4 items-center pt-6 md:pt-8">
                            <div class="absolute top-0 left-1/2 -translate-x-1/2 -translate-y-1/2">
                                <div class="w-12 h-12 md:w-16 md:h-16 rounded-full bg-blue1 border-2 border-blue1 flex items-center justify-center shadow-md">
                                    <span class="text-lg md:text-xl font-bold text-white">05</span>
                                </div>
                            </div>
                            <div class="flex-shrink-0 w-16 h-16 md:w-20 md:h-20 rounded-full bg-white flex items-center justify-center md:mt-6">
                                <i class="fas fa-stamp text-blue1 text-2xl md:text-3xl"></i>
                            </div>
                            <div class="flex-1">
                                <p class="text-lg md:text-xl font-bold text-gray-800 pb-2 border-b border-gray-300 mb-2">支給決定</p>
                                <p class="text-sm">市町村より、計画案の内容でサービスの利用できるよう、支給決定を受けます。</p>
                            </div>
                        </div>

                        <div class="flex justify-center mb-4 md:mb-6 relative">
                            <div class="w-0.5 h-12 md:h-16 bg-blue1"></div>
                        </div>

                        <div class="relative p-4 bg-sky1 rounded-lg border-2 border-blue1 shadow-md flex gap-4 items-center pt-6 md:pt-8">
                            <div class="absolute top-0 left-1/2 -translate-x-1/2 -translate-y-1/2">
                                <div class="w-12 h-12 md:w-16 md:h-16 rounded-full bg-blue1 border-2 border-blue1 flex items-center justify-center shadow-md">
                                    <span class="text-lg md:text-xl font-bold text-white">06</span>
                                </div>
                            </div>
                            <div class="flex-shrink-0 w-16 h-16 md:w-20 md:h-20 rounded-full bg-white flex items-center justify-center md:mt-6">
                                <i class="fas fa-users text-blue1 text-2xl md:text-3xl"></i>
                            </div>
                            <div class="flex-1">
                                <p class="text-lg md:text-xl font-bold text-gray-800 pb-2 border-b border-gray-300 mb-2">サービス担当者会議</p>
                                <p class="text-sm">希望されるサービス事業所の担当者が集まり、サービスの利用について話し合いをします。</p>
                            </div>
                        </div>

                        <div class="flex justify-center mb-4 md:mb-6 relative">
                            <div class="w-0.5 h-12 md:h-16 bg-blue1"></div>
                        </div>
                        <div class="relative p-4 bg-sky1 rounded-lg border-2 border-blue1 shadow-md flex gap-4 items-center pt-8 md:pt-10">
                            <div class="absolute top-0 left-1/2 -translate-x-1/2 -translate-y-1/2">
                                <div class="w-12 h-12 md:w-16 md:h-16 rounded-full bg-blue1 border-2 border-blue1 flex items-center justify-center shadow-md">
                                    <span class="text-lg md:text-xl font-bold text-white">07</span>
                                </div>
                            </div>
                            <div class="flex-shrink-0 w-16 h-16 md:w-20 md:h-20 rounded-full bg-white flex items-center justify-center md:mt-6">
                                <i class="fas fa-file-signature text-blue1 text-2xl md:text-3xl"></i>
                            </div>
                            <div class="flex-1">
                                <p class="text-lg md:text-xl font-bold text-gray-800 pb-2 border-b border-gray-300 mb-2">サービス等利用計画（本計画）の同意・提出</p>
                                <p class="text-sm">サービス担当者会議の内容をもとに、変更点などを確認し、正式な計画書をご本人、ご家族の同意のもとに市区町村に提出します。</p>
                            </div>
                        </div>

                        <div class="flex justify-center mb-4 md:mb-6 relative">
                            <div class="w-0.5 h-12 md:h-16 bg-blue1"></div>
                        </div>
                            <div class="relative p-4 bg-sky1 rounded-lg border-2 border-blue1 shadow-md flex gap-4 items-center pt-6 md:pt-8">
                            <div class="absolute top-0 left-1/2 -translate-x-1/2 -translate-y-1/2">
                                <div class="w-12 h-12 md:w-16 md:h-16 rounded-full bg-blue1 border-2 border-blue1 flex items-center justify-center shadow-md">
                                    <span class="text-lg md:text-xl font-bold text-white">08</span>
                                </div>
                            </div>
                            <div class="flex-shrink-0 w-12 h-12 md:w-16 md:h-16 rounded-full bg-white flex items-center justify-center md:mt-6">
                                <i class="fas fa-play-circle text-blue1 text-2xl md:text-3xl"></i>
                            </div>
                            <div class="flex-1">
                                <p class="text-lg md:text-xl font-bold text-gray-800 pb-2 border-b border-gray-300 mb-2">サービスの利用開始</p>
                                <p class="text-sm">サービス利用契約を行い、サービス開始。開始後も継続的にモニタリングを行います。</p>
                            </div>
                        </div>

                    </div>
                </div>
            </section>

            <?php
            wp_link_pages(array(
                'before' => '<div class="mt-8 pt-8 border-t border-gray-200">',
                'after' => '</div>',
            ));
            ?>
        </div>

    <?php endwhile; ?>
</div>

<?php get_footer(); ?>