<?php get_header(); ?>

<div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8 py-12">
    <div class="max-w-4xl mx-auto">
        
        <?php if (have_posts()) : ?>
            
            <div class="space-y-8">
                <?php while (have_posts()) : the_post(); ?>
                    
                    <article id="post-<?php the_ID(); ?>" <?php post_class('bg-white rounded-lg shadow-md overflow-hidden hover:shadow-lg transition'); ?>>
                        
                        <?php if (has_post_thumbnail()) : ?>
                            <a href="<?php the_permalink(); ?>" class="block">
                                <?php the_post_thumbnail('large', array('class' => 'w-full h-64 object-cover')); ?>
                            </a>
                        <?php endif; ?>
                        
                        <div class="p-6">
                            <header class="mb-4">
                                <div class="flex items-center text-sm text-gray-600 mb-2">
                                    <time datetime="<?php echo get_the_date('c'); ?>">
                                        <?php echo get_the_date(); ?>
                                    </time>
                                    <span class="mx-2">·</span>
                                    <span><?php the_category(', '); ?></span>
                                </div>
                                
                                <h2 class="text-2xl font-bold text-gray-900 hover:text-blue-600 transition">
                                    <a href="<?php the_permalink(); ?>">
                                        <?php the_title(); ?>
                                    </a>
                                </h2>
                            </header>
                            
                            <div class="text-gray-700 mb-4">
                                <?php the_excerpt(); ?>
                            </div>
                            
                            <a href="<?php the_permalink(); ?>" class="inline-flex items-center text-blue-600 hover:text-blue-800 font-semibold">
                                続きを読む
                                <svg class="w-4 h-4 ml-2" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 5l7 7-7 7"></path>
                                </svg>
                            </a>
                        </div>
                    </article>
                    
                <?php endwhile; ?>
            </div>
            
            <!-- ページネーション -->
            <div class="mt-12">
                <?php
                the_posts_pagination(array(
                    'mid_size' => 2,
                    'prev_text' => '← 前へ',
                    'next_text' => '次へ →',
                    'class' => 'flex justify-center space-x-2',
                ));
                ?>
            </div>
            
        <?php else : ?>
            
            <div class="bg-white rounded-lg shadow-md p-8 text-center">
                <h2 class="text-2xl font-bold text-gray-900 mb-4">投稿が見つかりませんでした</h2>
                <p class="text-gray-600">申し訳ございません。表示できる投稿がありません。</p>
            </div>
            
        <?php endif; ?>
        
    </div>
</div>

<?php get_footer(); ?>
