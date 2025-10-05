<?php get_header(); ?>

<!-- ヒーローセクション -->
<section class="bg-gradient-to-br from-blue-600 to-blue-800 text-white py-20">
    <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8 text-center">
        <h1 class="text-5xl md:text-6xl font-bold mb-6">
            <?php bloginfo('name'); ?>
        </h1>
        <p class="text-xl md:text-2xl text-blue-100 max-w-3xl mx-auto mb-8">
            <?php bloginfo('description'); ?>
        </p>
        <div class="flex justify-center space-x-4">
            <a href="#latest-posts" class="px-8 py-3 bg-white text-blue-600 rounded-lg font-semibold hover:bg-gray-100 transition">
                最新記事を見る
            </a>
            <a href="<?php echo get_permalink(get_option('page_for_posts')); ?>" class="px-8 py-3 bg-blue-700 text-white rounded-lg font-semibold hover:bg-blue-800 transition border border-blue-500">
                すべての記事
            </a>
        </div>
    </div>
</section>

<!-- 最新投稿セクション -->
<section id="latest-posts" class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8 py-16">
    <div class="text-center mb-12">
        <h2 class="text-4xl font-bold text-gray-900 mb-4">最新の投稿</h2>
        <p class="text-gray-600">新しく公開された記事をチェック</p>
    </div>

    <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-3 gap-8">
        <?php
        $latest_posts = new WP_Query(array(
            'posts_per_page' => 6,
            'post_status' => 'publish'
        ));

        if ($latest_posts->have_posts()) :
            while ($latest_posts->have_posts()) : $latest_posts->the_post();
        ?>

                <article class="bg-white rounded-lg shadow-md overflow-hidden hover:shadow-xl transition transform hover:-translate-y-1">
                    <?php if (has_post_thumbnail()) : ?>
                        <a href="<?php the_permalink(); ?>" class="block">
                            <?php the_post_thumbnail('medium', array('class' => 'w-full h-48 object-cover')); ?>
                        </a>
                    <?php else : ?>
                        <div class="w-full h-48 bg-gradient-to-br from-blue-400 to-blue-600"></div>
                    <?php endif; ?>

                    <div class="p-6">
                        <div class="flex items-center text-sm text-gray-600 mb-3">
                            <time datetime="<?php echo get_the_date('c'); ?>">
                                <?php echo get_the_date(); ?>
                            </time>
                            <span class="mx-2">·</span>
                            <span><?php echo get_the_category_list(', '); ?></span>
                        </div>

                        <h3 class="text-xl font-bold text-gray-900 mb-3 hover:text-blue-600 transition">
                            <a href="<?php the_permalink(); ?>">
                                <?php the_title(); ?>
                            </a>
                        </h3>

                        <p class="text-gray-700 mb-4 line-clamp-3">
                            <?php echo wp_trim_words(get_the_excerpt(), 20, '...'); ?>
                        </p>

                        <a href="<?php the_permalink(); ?>" class="inline-flex items-center text-blue-600 hover:text-blue-800 font-semibold">
                            続きを読む
                            <svg class="w-4 h-4 ml-2" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 5l7 7-7 7"></path>
                            </svg>
                        </a>
                    </div>
                </article>

        <?php
            endwhile;
            wp_reset_postdata();
        endif;
        ?>
    </div>
</section>

<!-- カテゴリーセクション -->
<section class="bg-gray-100 py-16">
    <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
        <div class="text-center mb-12">
            <h2 class="text-4xl font-bold text-gray-900 mb-4">カテゴリー</h2>
            <p class="text-gray-600">興味のあるトピックを探す</p>
        </div>

        <div class="grid grid-cols-2 md:grid-cols-4 gap-4">
            <?php
            $categories = get_categories(array(
                'orderby' => 'count',
                'order' => 'DESC',
                'number' => 8
            ));

            foreach ($categories as $category) :
            ?>
                <a href="<?php echo get_category_link($category->term_id); ?>" class="bg-white p-6 rounded-lg shadow hover:shadow-lg transition text-center">
                    <h3 class="font-semibold text-gray-900 mb-2"><?php echo $category->name; ?></h3>
                    <p class="text-sm text-gray-600"><?php echo $category->count; ?> 件の投稿</p>
                </a>
            <?php endforeach; ?>
        </div>
    </div>
</section>
<?php get_footer(); ?>