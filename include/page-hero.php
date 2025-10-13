<?php if (has_post_thumbnail()) : ?>
    <div class="relative w-full pt-[22.5%]">
        <?php the_post_thumbnail('full', array('class' => 'absolute inset-0 w-full h-full object-cover')); ?>
        <div class="absolute inset-0 bg-white/60 z-10"></div>
        <div class="absolute inset-0 z-20 flex items-center justify-center px-4">
            <h1 class="text-2xl md:text-4xl font-bold text-red1 bg-white/60 rounded-lg px-8 py-4 text-center">
                <?php the_title(); ?>
            </h1>
        </div>
    </div>
<?php else : ?>
    <div class="relative w-full pt-[22.5%]">
        <div class="absolute inset-0 w-full h-full bg-cover bg-center bg-no-repeat"
            style="background-image: url('<?php echo esc_url(get_template_directory_uri() . '/assets/img/kids_01.jpg'); ?>');"></div>
        <div class="absolute inset-0 bg-white/60 z-10"></div>
        <div class="absolute inset-0 z-20 flex items-center justify-center px-4">
            <h1 class="text-2xl md:text-6xl font-bold text-red1 bg-white/60 rounded-lg px-8 py-4 text-center">
                <?php the_title(); ?>
            </h1>
        </div>
    </div>
<?php endif; ?>