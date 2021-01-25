@extends('layouts.app')

@section('content')

{{--    @if (!have_posts())--}}
{{--        <div class="alert alert-warning">--}}
{{--            {{ __('Sorry, no results were found.', 'sage') }}--}}
{{--        </div>--}}
{{--        {!! get_search_form(false) !!}--}}
{{--    @endif--}}

    <section class="relative mb-20">
        <div class="h-screen object-cover w-full bg-center bg-no-repeat bg-cover" style="background-image: url(https://cdn.shopify.com/s/files/1/2301/3747/files/794368794399217904859144399669693251784154149923_2048x2048.jpg?v=1596150179)">

            <div class="h-full table mx-auto text-center">
            <div class="table-cell align-middle" style="max-width: 829px;">
                <h2 class="text-white uppercase font-bold text-4xl" style="letter-spacing: 5px;">THE #1 SOURCE FOR PREMIUM VOCAL SAMPLES</h2>
            </div>
            </div>

            <div class="mx-auto absolute bottom-0 left-0 right-0 w-full text-center">
                <svg class="w-6 text-white" aria-hidden="true" focusable="false" data-prefix="far" data-icon="angle-down" role="img" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 320 512"><path fill="currentColor" d="M151.5 347.8L3.5 201c-4.7-4.7-4.7-12.3 0-17l19.8-19.8c4.7-4.7 12.3-4.7 17 0L160 282.7l119.7-118.5c4.7-4.7 12.3-4.7 17 0l19.8 19.8c4.7 4.7 4.7 12.3 0 17l-148 146.8c-4.7 4.7-12.3 4.7-17 0z" class=""></path></svg>
            </div>

        </div>
    </section>



    <section class="container mx-auto px-16 mb-24">
         @block([
            'title' => 'SAD GIRL: ALT POP'
        ])
        @endblock
    </section>



    <section class="container mx-auto px-16 mb-24">
    <div class="flex gap-12 ">

        @vocalSample() @endvocalSample
        @vocalSample() @endvocalSample
        @vocalSample() @endvocalSample
        @vocalSample() @endvocalSample

    </div>
    </section>



    <section class="mb-24">
        <iframe width="100%"  height="1000px" src="https://www.youtube.com/embed/W0LO1saOplc" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture" allowfullscreen></iframe>
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


    <section class="container mx-auto px-16">
        <div class="flex gap-12">
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
