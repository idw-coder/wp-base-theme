<?php get_header(); ?>

<div class="">
    <?php while (have_posts()) : the_post(); ?>

        <?php if (has_post_thumbnail()) : ?>
            <div class="relative w-full pt-[27.5%]">
                <?php the_post_thumbnail('full', array('class' => 'absolute inset-0 w-full h-full object-cover')); ?>
                <div class="absolute inset-0 bg-white/60 z-10"></div>
                <div class="absolute inset-0 z-20 flex items-center justify-center px-4">
                    <h1 class="text-2xl md:text-4xl font-bold text-gray-900 text-center">
                        <?php the_title(); ?>
                    </h1>
                </div>
            </div>
        <?php endif; ?>

        <div class="px-4 md:px-8 py-8 md:py-12">

            <div class="prose max-w-none">
                <?php the_content(); ?>
            </div>

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