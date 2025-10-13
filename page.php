<?php get_header(); ?>

<div class="">
    <?php while (have_posts()) : the_post(); ?>
        <?php include 'include/page-hero.php'; ?>

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