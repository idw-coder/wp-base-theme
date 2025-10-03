<?php get_header(); ?>

<div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8 py-12">
    <div class="max-w-4xl mx-auto">
        
        <?php while (have_posts()) : the_post(); ?>
            
            <article id="post-<?php the_ID(); ?>" <?php post_class('bg-white rounded-lg shadow-md overflow-hidden'); ?>>
                
                <?php if (has_post_thumbnail()) : ?>
                    <div class="w-full h-80 overflow-hidden">
                        <?php the_post_thumbnail('large', array('class' => 'w-full h-full object-cover')); ?>
                    </div>
                <?php endif; ?>
                
                <div class="p-8 md:p-12">
                    <header class="mb-8">
                        <h1 class="text-4xl font-bold text-gray-900 mb-4">
                            <?php the_title(); ?>
                        </h1>
                        
                        <div class="text-sm text-gray-600">
                            最終更新: <time datetime="<?php echo get_the_modified_date('c'); ?>">
                                <?php echo get_the_modified_date(); ?>
                            </time>
                        </div>
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
            
        <?php endwhile; ?>
        
    </div>
</div>

<?php get_footer(); ?>
