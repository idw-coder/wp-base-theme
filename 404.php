<?php get_header(); ?>

<div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8 py-12">
    <div class="max-w-2xl mx-auto text-center">
        
        <div class="bg-white rounded-lg shadow-md p-12">
            <!-- 404アイコン -->
            <div class="mb-8">
                <svg class="w-32 h-32 mx-auto text-gray-400" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9.172 16.172a4 4 0 015.656 0M9 10h.01M15 10h.01M21 12a9 9 0 11-18 0 9 9 0 0118 0z"></path>
                </svg>
            </div>
            
            <h1 class="text-6xl font-bold text-gray-900 mb-4">404</h1>
            <h2 class="text-3xl font-semibold text-gray-700 mb-6">ページが見つかりません</h2>
            
            <p class="text-gray-600 mb-8">
                お探しのページは移動または削除された可能性があります。<br>
                URLをご確認いただくか、以下の方法でお探しください。
            </p>
            
            <!-- 検索フォーム -->
            <div class="mb-8 max-w-md mx-auto">
                <form role="search" method="get" action="<?php echo esc_url(home_url('/')); ?>" class="flex">
                    <input 
                        type="search" 
                        name="s" 
                        placeholder="サイト内を検索..." 
                        class="flex-1 px-4 py-3 border border-gray-300 rounded-l-lg focus:outline-none focus:ring-2 focus:ring-blue-500"
                        value="<?php echo get_search_query(); ?>"
                    >
                    <button 
                        type="submit" 
                        class="px-6 py-3 bg-blue-600 text-white rounded-r-lg hover:bg-blue-700 transition"
                    >
                        検索
                    </button>
                </form>
            </div>
            
            <!-- ホームへ戻るボタン -->
            <a href="<?php echo esc_url(home_url('/')); ?>" class="inline-flex items-center px-6 py-3 bg-gray-900 text-white rounded-lg hover:bg-gray-800 transition">
                <svg class="w-5 h-5 mr-2" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M3 12l2-2m0 0l7-7 7 7M5 10v10a1 1 0 001 1h3m10-11l2 2m-2-2v10a1 1 0 01-1 1h-3m-6 0a1 1 0 001-1v-4a1 1 0 011-1h2a1 1 0 011 1v4a1 1 0 001 1m-6 0h6"></path>
                </svg>
                ホームへ戻る
            </a>
        </div>
        
        <!-- おすすめコンテンツ -->
        <?php
        $recent_posts = wp_get_recent_posts(array(
            'numberposts' => 3,
            'post_status' => 'publish'
        ));
        
        if ($recent_posts) :
        ?>
            <div class="mt-12">
                <h3 class="text-2xl font-bold text-gray-900 mb-6">最近の投稿</h3>
                
                <div class="grid grid-cols-1 md:grid-cols-3 gap-6">
                    <?php foreach ($recent_posts as $post) : ?>
                        <article class="bg-white rounded-lg shadow-md overflow-hidden hover:shadow-lg transition">
                            <?php if (has_post_thumbnail($post['ID'])) : ?>
                                <a href="<?php echo get_permalink($post['ID']); ?>">
                                    <?php echo get_the_post_thumbnail($post['ID'], 'medium', array('class' => 'w-full h-48 object-cover')); ?>
                                </a>
                            <?php endif; ?>
                            
                            <div class="p-4">
                                <h4 class="font-semibold text-gray-900 hover:text-blue-600 transition">
                                    <a href="<?php echo get_permalink($post['ID']); ?>">
                                        <?php echo $post['post_title']; ?>
                                    </a>
                                </h4>
                                <p class="text-sm text-gray-600 mt-2">
                                    <?php echo get_the_date('Y年n月j日', $post['ID']); ?>
                                </p>
                            </div>
                        </article>
                    <?php endforeach; ?>
                </div>
            </div>
        <?php endif; ?>
        
    </div>
</div>

<?php get_footer(); ?>
