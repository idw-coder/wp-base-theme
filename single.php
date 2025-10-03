<?php get_header(); ?>

<div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8 py-12">
    <div class="max-w-3xl mx-auto">
        
        <?php while (have_posts()) : the_post(); ?>
            
            <article id="post-<?php the_ID(); ?>" <?php post_class('bg-white rounded-lg shadow-md overflow-hidden'); ?>>
                
                <?php if (has_post_thumbnail()) : ?>
                    <div class="w-full h-96 overflow-hidden">
                        <?php the_post_thumbnail('large', array('class' => 'w-full h-full object-cover')); ?>
                    </div>
                <?php endif; ?>
                
                <div class="p-8">
                    <header class="mb-8">
                        <div class="flex items-center text-sm text-gray-600 mb-4">
                            <time datetime="<?php echo get_the_date('c'); ?>">
                                <?php echo get_the_date(); ?>
                            </time>
                            <span class="mx-2">·</span>
                            <span><?php the_category(', '); ?></span>
                            <span class="mx-2">·</span>
                            <span><?php the_author(); ?></span>
                        </div>
                        
                        <h1 class="text-4xl font-bold text-gray-900 mb-4">
                            <?php the_title(); ?>
                        </h1>
                        
                        <?php if (has_tag()) : ?>
                            <div class="flex flex-wrap gap-2">
                                <?php
                                $tags = get_the_tags();
                                foreach ($tags as $tag) {
                                    echo '<a href="' . get_tag_link($tag->term_id) . '" class="px-3 py-1 bg-blue-100 text-blue-800 text-sm rounded-full hover:bg-blue-200 transition">' . $tag->name . '</a>';
                                }
                                ?>
                            </div>
                        <?php endif; ?>
                    </header>
                    
                    <div class="prose prose-lg max-w-none text-gray-700 leading-relaxed">
                        <?php the_content(); ?>
                    </div>
                    
                    <?php
                    wp_link_pages(array(
                        'before' => '<div class="mt-8 pt-8 border-t border-gray-200">',
                        'after' => '</div>',
                    ));
                    ?>
                </div>
            </article>
            
            <!-- 前後の投稿ナビゲーション -->
            <div class="mt-12 grid grid-cols-1 md:grid-cols-2 gap-4">
                <?php
                $prev_post = get_previous_post();
                $next_post = get_next_post();
                ?>
                
                <?php if ($prev_post) : ?>
                    <a href="<?php echo get_permalink($prev_post); ?>" class="bg-white p-6 rounded-lg shadow hover:shadow-lg transition">
                        <div class="text-sm text-gray-600 mb-2">← 前の投稿</div>
                        <div class="font-semibold text-gray-900"><?php echo get_the_title($prev_post); ?></div>
                    </a>
                <?php endif; ?>
                
                <?php if ($next_post) : ?>
                    <a href="<?php echo get_permalink($next_post); ?>" class="bg-white p-6 rounded-lg shadow hover:shadow-lg transition text-right">
                        <div class="text-sm text-gray-600 mb-2">次の投稿 →</div>
                        <div class="font-semibold text-gray-900"><?php echo get_the_title($next_post); ?></div>
                    </a>
                <?php endif; ?>
            </div>
            
        <?php endwhile; ?>
        
    </div>
</div>

<?php get_footer(); ?>
