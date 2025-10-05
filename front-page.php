<?php get_header(); ?>

<!-- ヒーローセクション -->
<section class="relative bg-center bg-cover text-gray-900 overflow-hidden"
    style="background-image: url('<?php echo esc_url(get_template_directory_uri() . '/assets/img/kids01.jpg'); ?>'); aspect-ratio: 2 / 1;">
    <div class="absolute inset-0" style="background: linear-gradient(90deg, rgba(255,255,255,0.85) 0%, rgba(255,255,255,0.0) 65%);"></div>
    <div class="relative z-10 max-w-5xl px-4 sm:px-6 lg:px-8 py-20 flex flex-col justify-center items-start gap-4">
        <div class="w-full max-w-[280px] lg:max-w-[400px]">
            <img src="<?php echo esc_url(get_template_directory_uri() . '/assets/img/children_mv_logo.png'); ?>"
                alt="ロゴ" class="w-full h-auto block">
        </div>
        <p class="text-2xl bg-white/70 px-4 py-2 rounded-lg font-bold text-gray-900">
            子育てに役立つ情報を提供します
        </p>
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