@extends('layouts.app')

@section('content')

    {{--    @if (!have_posts())--}}
    {{--        <div class="alert alert-warning">--}}
    {{--            {{ __('Sorry, no results were found.', 'sage') }}--}}
    {{--        </div>--}}
    {{--        {!! get_search_form(false) !!}--}}
    {{--    @endif--}}

    <section class="relative mb-20">
        <?php if ( have_rows( 'hero_section' ) ) : ?>
        <?php while ( have_rows( 'hero_section' ) ) :the_row(); ?>



            <div class="h-screen object-cover w-full bg-center bg-no-repeat bg-cover " style="background-image: url( <?php echo esc_url( get_sub_field( 'background_image' ) ); ?>)">

                <div class="absolute inset-0 bg-black opacity-50 h-full flex flex-col"></div>


                <?php if ( $title = get_sub_field( 'title' ) ) : ?>
                <div class="h-full table mx-auto text-center z-30 relative">
                    <div class="table-cell align-middle" style="max-width: 829px;">
                        <h2 class="text-white uppercase font-bold text-3xl md:text-4xl lg:text-6xl"
                            style="letter-spacing: 5px;"><?php echo esc_html( $title ); ?></h2>
                    </div>
                </div>
                    <?php endif; ?>

                <div class="mx-auto absolute bottom-0 left-0 right-0 w-full text-center mb-4 z-30 relative" style="    top: -65px;">
                    <div class="w-6 mx-auto">
                        <svg class="text-white" aria-hidden="true" focusable="false" data-prefix="far" data-icon="angle-down" role="img" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 320 512"><path fill="currentColor" d="M151.5 347.8L3.5 201c-4.7-4.7-4.7-12.3 0-17l19.8-19.8c4.7-4.7 12.3-4.7 17 0L160 282.7l119.7-118.5c4.7-4.7 12.3-4.7 17 0l19.8 19.8c4.7 4.7 4.7 12.3 0 17l-148 146.8c-4.7 4.7-12.3 4.7-17 0z" class=""></path></svg>
                    </div>
                </div>

            </div>



        <?php endwhile; ?>
        <?php endif; ?>
    </section>


    <section class="container mx-auto px-16 mb-24">
    <?php if ( have_rows( 'latest_release' ) ) : ?>
    <?php while ( have_rows( 'latest_release' ) ) : the_row(); ?>




        @sectionTitle(
        [ 'title' => get_sub_field( 'heading_title' ) ]
        ) @endsectionTitle


        @block([
            'image' => get_sub_field( 'image' ),
            'title' => esc_html(get_sub_field( 'title' )),
            'excerpt' => get_sub_field( 'text', false, false ),
            'link' => get_sub_field( 'link' ),
        ])
        @endblock




    <?php endwhile; ?>
    <?php endif; ?>

    </section>


    <section class="container mx-auto px-16 mb-24">


            <?php if ( have_rows( 'featured' ) ) : ?>
            <?php while ( have_rows( 'featured' ) ) : the_row(); ?>

                @sectionTitle(
                [ 'title' => get_sub_field( 'heading_title' ) ]
                ) @endsectionTitle

            <?php endwhile; ?>
            <?php endif; ?>

        <div class="flex gap-12 ">

            <?php if ( $query_products_posts->have_posts() ) : while ( $query_products_posts->have_posts() ) : $query_products_posts->the_post(); ?>
            @vocalSample([
                'id' => get_the_ID(),
                'title' => get_the_title(),
                'permalink' => get_the_permalink(),
                'thumbnail' => get_the_post_thumbnail_url(),
                'price' => get_field('price', get_the_ID())
            ])
            @endvocalSample
            <?php endwhile;
                wp_reset_postdata();
            else : ?>
                <p><?php esc_html_e( 'Sorry, no products found.' ); ?></p>
            <?php endif; ?>

        </div>
    </section>


    <section class="container mx-auto px-16 mb-24">
        <?php if ( have_rows( 'block1' ) ) : ?>
        <?php while ( have_rows( 'block1' ) ) : the_row(); ?>


{{--            @sectionTitle(--}}
{{--            [ 'title' => 'LATEST RELEASE' ]--}}
{{--            ) @endsectionTitle--}}

            @block1([
                'image' => get_sub_field( 'image' ),
                'title' => esc_html(get_sub_field( 'title' )),
                'excerpt' => get_sub_field( 'text', false, false ),
                'link' => get_sub_field( 'link' ),
                'reverse' => true,
            ])
            @endblock1


        <?php endwhile; ?>
        <?php endif; ?>
    </section>







    <section class="container mx-auto px-16 mb-24">

        <?php if ( have_rows( 'block2' ) ) : ?>
        <?php while ( have_rows( 'block2' ) ) : the_row(); ?>

            @block1([
            'image' => get_sub_field( 'image' ),
            'title' => esc_html(get_sub_field( 'title' )),
            'excerpt' => get_sub_field( 'text', false, false ),
            'link' =>  get_sub_field( 'link' )
            ])
            @endblock1


        <?php endwhile; ?>
        <?php endif; ?>
    </section>



    <section class="container mx-auto px-16 mb-24">


        <?php if ( have_rows( 'block3' ) ) : ?>
        <?php while ( have_rows( 'block3' ) ) : the_row(); ?>


            @block2([
            'title' => esc_html(get_sub_field( 'title' )),
            'excerpt' => get_sub_field( 'text', false, false ),
            'link' => get_sub_field( 'link' )
            ])
            @endblock2

        <?php endwhile; ?>
        <?php endif; ?>
    </section>


    <section class="container mx-auto px-16 mb-8 lg:mb-44">



        <?php if ( have_rows( 'home_blog' ) ) : ?>
        <?php while ( have_rows( 'home_blog' ) ) : the_row(); ?>



            @sectionTitle(
            [ 'title' => get_sub_field( 'heading_title' ) ]
            ) @endsectionTitle

        <?php endwhile; ?>
        <?php endif; ?>

        <div class="grid grid-cols-1 md:grid-cols-2 xl:grid-cols-3 gap-12">
            @while ($query_blog_posts->have_posts()) @php $query_blog_posts->the_post() @endphp
            @blogExcerpt1([
            'title' => get_the_title(),
            'excerpt' => get_the_excerpt(),
            'date' => get_the_date(),
            'permalink' => get_the_permalink(),
            'thumbnail' => get_the_post_thumbnail_url(),
            ])
            @endblogExcerpt1
            @endwhile
        </div>
    </section>


    {!! get_the_posts_navigation() !!}
@endsection
