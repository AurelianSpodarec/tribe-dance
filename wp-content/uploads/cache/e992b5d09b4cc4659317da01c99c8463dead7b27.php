<?php $__env->startSection('content'); ?>


    <section class="container mx-auto px-16 mb-24">
        <?php $__env->startComponent('objects.sectionTitle', [ 'title' => 'Products' ]); ?> <?php echo $__env->renderComponent(); ?>
        <div class="flex gap-12 ">


            <?php while($query_products_posts->have_posts()): ?> <?php $query_products_posts->the_post() ?>
            <?php $__env->startComponent('components.vocal-sample', [
            'id' => get_the_ID(),
            'title' => get_the_title(),
            'permalink' => get_the_permalink(),
            'thumbnail' => get_the_post_thumbnail_url(),
            'price' => get_field('price', get_the_ID())
            ]); ?>
            <?php echo $__env->renderComponent(); ?>
            <?php endwhile; ?>

        </div>
    </section>


<?php $__env->stopSection(); ?>

<?php echo $__env->make('layouts.app', array_except(get_defined_vars(), array('__data', '__path')))->render(); ?>