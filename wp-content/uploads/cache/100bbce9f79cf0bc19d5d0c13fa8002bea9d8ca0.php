<section>
    <img src="https://cdn.shopify.com/s/files/1/2301/3747/t/3/assets/logo.png?v=15904693863245551424" />
</section>
<footer class="bg-gray-100">
    <div class="container mx-auto px-16 py-8">

        <div class="flex">


            <div>
                <?php if(has_nav_menu('secondary_navigation')): ?>
                    <?php echo wp_nav_menu([
                        'theme_location' => 'secondary_navigation',
                        'menu_class' => 'flex',
                        'walker' => new \App\FooterWalker()
                        ]); ?>

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
