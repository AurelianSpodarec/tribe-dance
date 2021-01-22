<footer class="bg-gray-100">
<div class="container mx-auto px-16 py-8">

    <div class="flex">


      <div>
      <?php if(has_nav_menu('secondary_navigation')): ?>
        <?php echo wp_nav_menu(['theme_location' => 'secondary_navigation', 'menu_class' => 'flex']); ?>

      <?php endif; ?>
      </div>

      <div>
        &copy; <?php echo e(App::currentYear()); ?> <?php echo e(App::siteName()); ?>

      </div>

      <div class="flex-end">
        Payment
      </div>


    </div>

</div>
</footer>
