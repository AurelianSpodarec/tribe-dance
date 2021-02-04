<div class="my-20 container mx-auto px-16 mb-24">
    <article <?php post_class() ?>>



        <div class="grid gird-cols-1 xl:grid-cols-2 gap-12">

            <div class="w-full">
                <img class="mb-8" src="<?php echo e(get_the_post_thumbnail_url()); ?>" />
                <iframe width="100%" height="100" scrolling="no" frameborder="no" allow="autoplay" src="https://w.soundcloud.com/player/?url=https%3A//api.soundcloud.com/tracks/945848935&color=%23ff5500&auto_play=false&hide_related=false&show_comments=true&show_user=true&show_reposts=false&show_teaser=true&visual=true"></iframe>
            </div>

            <div class="w-full">
                <header>
                    <div class="mb-8">
                        <h1 class="mb-2 uppercase text-2xl lg:text-5xl font-semibold"><?php echo get_the_title(); ?></h1>
                        <p class="text-sm uppercase text-gray-400"><?php echo e(App::siteName()); ?></p>
                    </div>

                    <span class="mb-8 block text-2xl">£ <?php echo e(number_format(get_field('price', get_the_ID()), 2)); ?></span>

                    <a class="w-full text-center gumroad-button" href="https://gum.co/<?php echo get_field('gumroad_button', get_the_ID()); ?>">Buy my product</a>

                </header>

                <div class="my-10">
                    <h3>Specifications</h3>
                    <?php if ( $spec = get_sub_field( 'spec' ) ) : ?>
                        <?php echo esc_html( $spec ); ?>
                    <?php endif; ?>

                    <?php
                        if( have_rows('specifications') ):

                            // Loop through rows.
                            while( have_rows('specifications') ) : the_row(); ?>
                                <div>
                                    <?php echo e(get_sub_field('spec')); ?>

                                </div>
                        <?php
                            endwhile;
                        else :
                            echo "No Specifications";
                        endif;
                    ?>
                </div>


                <div class="prose lg:prose-xl">
                    <?php the_content() ?>
                    <a class="w-full mt-6 text-center gumroad-button" href="https://gum.co/<?php echo get_field('gumroad_button', get_the_ID()); ?>">Buy my product</a>

                </div>
            </div>


        </div>

        <footer>
            <?php echo wp_link_pages(['echo' => 0, 'before' => '<nav class="page-nav"><p>' . __('Pages:', 'sage'), 'after' => '</p></nav>']); ?>

        </footer>

    </article>
</div>
