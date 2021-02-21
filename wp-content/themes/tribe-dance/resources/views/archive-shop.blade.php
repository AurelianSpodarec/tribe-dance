@extends('layouts.app')

@section('content')


    <section class="container mx-auto px-16 mb-24">
        @pageTitle(
        [ 'title' => 'Shop' ]
        ) @endpageTitle

        <section class="container mx-auto mb-24">
            <?php if ( have_rows( 'shop_block' ) ) : ?>
            <?php while ( have_rows( 'shop_block' ) ) :
                        the_row(); ?>

                <?php if ( $title = get_sub_field( 'title' ) ) : ?>
                    <?php echo esc_html( $title ); ?>
                <?php endif; ?>

                <?php if ( $text = get_sub_field( 'text' ) ) : ?>
                    <?php echo $text; ?>
                <?php endif; ?>

            <?php endwhile; ?>
            <?php endif; ?>

            <?php if ( have_rows( 'shop_block' ) ) : ?>
            <?php while ( have_rows( 'shop_block' ) ) : the_row(); ?>
s
                @block2([
                    'title' => get_sub_field( 'title' ),
                    'excerpt' => get_sub_field( 'text' ),
                    'permalink' => '',
                    'isLink' => 'false',
                ])
                @endblock2

            <?php endwhile; ?>
            <?php endif; ?>

        </section>


        <div class="flex gap-12 ">


            @while ($query_products_posts->have_posts()) @php $query_products_posts->the_post() @endphp
            @vocalSample([
                'id' => get_the_ID(),
                'title' => get_the_title(),
                'permalink' => get_the_permalink(),
                'thumbnail' => get_the_post_thumbnail_url(),
                'price' => get_field('price', get_the_ID())
            ])
            @endvocalSample
            @endwhile

        </div>
    </section>


@endsection
