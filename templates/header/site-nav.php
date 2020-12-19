<?php 
    $menu_location = 'primary'; 
?>


<nav>
    <div class="flex space-x-4">
    

    <?php if ( has_nav_menu( $menu_location ) ): ?>

        <?php $menu_items = wp_get_nav_menu_items( wp_get_nav_menu_name( $menu_location ) ); ?>

        <?php foreach ( $menu_items as $menu_item ): ?>

            <a href="<?= esc_url( $menu_item->url ) ?>"
                target="<?= esc_attr( $menu_item->target ?: '_self' ) ?>"
                class="text-white hover:text-black font-semibold uppercase <?= esc_attr( implode( ' ', $menu_item->classes ) ) ?>">
                <?= esc_html( $menu_item->title ) ?>
            </a>

        <?php endforeach; ?>

    <?php endif; ?>
    </div>
</nav>
