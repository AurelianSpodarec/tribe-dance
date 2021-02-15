<?php $__env->startSection('content'); ?>
    <?php while(have_posts()): ?> <?php the_post() ?>
        <?php echo $__env->make('partials.content-single-'.get_post_type(), array_except(get_defined_vars(), array('__data', '__path')))->render(); ?>
    <?php endwhile; ?>


    <?php $__env->startComponent('components.banner-call', [
    'title' => 'Ready to get started?',
    'excerpt' => 'Get in touch with Mike for a no-obligation chat and we’ll show you how you can go from idea to launch in 100 days so you can grow your business and drive breakout success',
    ]); ?>
    <?php echo $__env->renderComponent(); ?>

<?php $__env->stopSection(); ?>

<?php echo $__env->make('layouts.app', array_except(get_defined_vars(), array('__data', '__path')))->render(); ?>