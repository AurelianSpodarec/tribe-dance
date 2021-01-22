<?php $__env->startSection('content'); ?>
  <?php echo $__env->make('partials.page-header', array_except(get_defined_vars(), array('__data', '__path')))->render(); ?>

    <?php if(!have_posts()): ?>
      <div class="alert alert-warning">
        <?php echo e(__('Sorry, no results were found.', 'sage')); ?>

      </div>
      <?php echo get_search_form(false); ?>

    <?php endif; ?>





    <div class="flex">
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


  <?php echo get_the_posts_navigation(); ?>

<?php $__env->stopSection(); ?>

<?php echo $__env->make('layouts.app', array_except(get_defined_vars(), array('__data', '__path')))->render(); ?>