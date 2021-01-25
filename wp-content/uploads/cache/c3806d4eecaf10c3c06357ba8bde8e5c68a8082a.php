<?php $__env->startSection('content'); ?>

    <section class="container mx-auto px-16">
        <div class="flex gap-12">
            <?php while($blog_query_blog_posts->have_posts()): ?> <?php $blog_query_blog_posts->the_post() ?>
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

<?php $__env->stopSection(); ?>

<?php echo $__env->make('layouts.app', array_except(get_defined_vars(), array('__data', '__path')))->render(); ?>