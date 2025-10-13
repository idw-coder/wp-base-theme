<?php get_header(); ?>

<div class="">
    <?php while (have_posts()) : the_post(); ?>
        <?php include 'include/page-hero.php'; ?>

        <div class="px-4 md:px-8 py-8 md:py-12">
            <section class="section">
                <h2 class="ribbon red">PDFダウンロード</h2>
                <div class="white-box pdf-container">
                    <?php the_content(); ?>
                </div>
            </section>
            <style>
                .pdf-container>* {
                    margin-bottom: 2rem;
                }

                .pdf-container>.wp-block-buttons {
                    background-color: #f0f0f0;
                    padding: 1rem 2rem;
                    border-radius: 0.5rem;
                }
            </style>
        </div>

    <?php endwhile; ?>
</div>

<?php get_footer(); ?>