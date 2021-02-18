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
        @sectionTitle(
        [ 'title' => 'LATEST RELEASE' ]
        ) @endsectionTitle

        @block([
        'title' => 'SAD GIRL: ALT POP',
        'excerpt' => "Veiled in melancholy, Sad Girl: Alt Pop explores the dark gritty electro landscape popularised by artists such as Billie Eilish, Lorde and Halsey. Delivering a modern take on contemporary pop, with a rich pallet of moody lyrics, vocal & melodic loops, grungy synths, bouncing 808s and resampled drum and percussion."
        ])
        @endblock
    </section>



    <section class="container mx-auto px-16 mb-24">
        @sectionTitle(
        [ 'title' => 'Featured' ]
        ) @endsectionTitle
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



    <section class="mb-24">
        {{--        <iframe width="100%"  height="1000px" src="https://www.youtube.com/embed/W0LO1saOplc" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture" allowfullscreen></iframe>--}}
    </section>



    <section class="container mx-auto px-16 mb-24">
        @block1([
        'title' => 'WE ARE 91VOCALS',
        'excerpt' => "91Vocals is the world's first vocal centred sample label headed up by singer, songwriter Kate Wild and the team behind CAPSUN ProAudio.",
        'permalink' => '',
        'thumbnail' => 'https://cdn.shopify.com/s/files/1/2301/3747/files/91V_Title1_Background_940x640_crop_center.jpg?v=1507560312',
        'reverse' => true,
        ])
        @endblock1
    </section>



    <section class="container mx-auto px-16 mb-24">
        @block1([
        'title' => 'Premium vocal samples',
        'excerpt' => 'We work with incredible singers, top songwriters and high end gear to deliver a pro sound with a contemporary feel. Inspiring vocal content to make your music stand out. ',
        'permalink' => '',
        'thumbnail' => 'https://cdn.shopify.com/s/files/1/2301/3747/files/91V_Title2_Background_940x640_crop_center.jpg?v=1507560310'
        ])
        @endblock1
    </section>



    <section class="container mx-auto px-16 mb-24">
        @block2([
        'title' => 'WE ARE 91VOCALS',
        'excerpt' => "91Vocals is the world's first vocal centred sample label headed up by singer, songwriter Kate Wild and the team behind CAPSUN ProAudio.",
        'permalink' => '',
        ])
        @endblock2
    </section>


    <section class="container mx-auto px-16">

        @sectionTitle(
        [ 'title' => 'Blog' ]
        ) @endsectionTitle

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
