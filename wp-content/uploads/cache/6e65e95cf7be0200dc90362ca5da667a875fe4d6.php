<header class="bg-pink-300">
<div class="container mx-auto px-16">
    <div class="flex items-center py-5">


    <a class="brand mr-10" href="<?php echo e(home_url('/')); ?>">
      <img width="100px" src="https://cdn.shopify.com/s/files/1/2301/3747/t/3/assets/logo.png?v=15904693863245551424" />
    </a>


    <nav class="">
      <?php if(has_nav_menu('primary_navigation')): ?>
        <?php echo wp_nav_menu(['theme_location' => 'primary_navigation', 'menu_class' => 'flex']); ?>

      <?php endif; ?>
    </nav>


    </div>
</div>
</header>
