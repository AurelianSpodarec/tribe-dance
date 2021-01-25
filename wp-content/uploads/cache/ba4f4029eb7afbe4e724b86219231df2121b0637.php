<?php $__env->startSection('content'); ?>








    <section class="relative mb-20">
        <div class="h-screen object-cover w-full bg-center bg-no-repeat bg-cover" style="background-image: url(https://cdn.shopify.com/s/files/1/2301/3747/files/794368794399217904859144399669693251784154149923_2048x2048.jpg?v=1596150179)">

            <div class="h-full table mx-auto text-center">
            <div class="table-cell align-middle" style="max-width: 829px;">
                <h2 class="text-white uppercase font-bold text-4xl" style="letter-spacing: 5px;">THE #1 SOURCE FOR PREMIUM VOCAL SAMPLES</h2>
            </div>
            </div>

            <div class="mx-auto absolute bottom-0 left-0 right-0 w-full text-center">
                <svg class="w-6 text-white" aria-hidden="true" focusable="false" data-prefix="far" data-icon="angle-down" role="img" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 320 512"><path fill="currentColor" d="M151.5 347.8L3.5 201c-4.7-4.7-4.7-12.3 0-17l19.8-19.8c4.7-4.7 12.3-4.7 17 0L160 282.7l119.7-118.5c4.7-4.7 12.3-4.7 17 0l19.8 19.8c4.7 4.7 4.7 12.3 0 17l-148 146.8c-4.7 4.7-12.3 4.7-17 0z" class=""></path></svg>
            </div>

        </div>
    </section>



    <section class="container mx-auto px-16 mb-24">
         <?php $__env->startComponent('components.block', [
            'title' => 'SAD GIRL: ALT POP'
        ]); ?>
        <?php echo $__env->renderComponent(); ?>
    </section>



    <section class="container mx-auto px-16 mb-24">
    <div class="flex gap-12 ">

        <?php $__env->startComponent('components.vocal-sample'); ?> <?php echo $__env->renderComponent(); ?>
        <?php $__env->startComponent('components.vocal-sample'); ?> <?php echo $__env->renderComponent(); ?>
        <?php $__env->startComponent('components.vocal-sample'); ?> <?php echo $__env->renderComponent(); ?>
        <?php $__env->startComponent('components.vocal-sample'); ?> <?php echo $__env->renderComponent(); ?>

    </div>
    </section>



    <section class="mb-24">
        <iframe width="100%"  height="1000px" src="https://www.youtube.com/embed/W0LO1saOplc" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture" allowfullscreen></iframe>
    </section>



    <section class="container mx-auto px-16 mb-24">
        <?php $__env->startComponent('components.block-1', [
            'title' => 'WE ARE 91VOCALS',
            'excerpt' => "91Vocals is the world's first vocal centred sample label headed up by singer, songwriter Kate Wild and the team behind CAPSUN ProAudio.",
            'permalink' => '',
            'thumbnail' => 'https://cdn.shopify.com/s/files/1/2301/3747/files/91V_Title1_Background_940x640_crop_center.jpg?v=1507560312',
            'reverse' => true,
        ]); ?>
        <?php echo $__env->renderComponent(); ?>
    </section>



    <section class="container mx-auto px-16 mb-24">
        <?php $__env->startComponent('components.block-1', [
            'title' => 'Premium vocal samples',
            'excerpt' => 'We work with incredible singers, top songwriters and high end gear to deliver a pro sound with a contemporary feel. Inspiring vocal content to make your music stand out. ',
            'permalink' => '',
            'thumbnail' => 'https://cdn.shopify.com/s/files/1/2301/3747/files/91V_Title2_Background_940x640_crop_center.jpg?v=1507560310'
        ]); ?>
        <?php echo $__env->renderComponent(); ?>
    </section>


    <section class="container mx-auto px-16">
        <div class="flex gap-12">
        <?php while($query_blog_posts->have_posts()): ?> <?php $query_blog_posts->the_post() ?>
        <?php $__env->startComponent('components.blog-excerpt-1', [
            'title' => get_the_title(),
            'excerpt' => get_the_excerpt(),
            'date' => get_the_date(),
            'permalink' => get_the_permalink(),
            'thumbnail' => get_the_post_thumbnail_url(),
        ]); ?>
        <?php echo $__env->renderComponent(); ?>
        <?php endwhile; ?>
        </div>
    </section>


    <?php echo get_the_posts_navigation(); ?>

<?php $__env->stopSection(); ?>

<?php echo $__env->make('layouts.app', array_except(get_defined_vars(), array('__data', '__path')))->render(); ?>