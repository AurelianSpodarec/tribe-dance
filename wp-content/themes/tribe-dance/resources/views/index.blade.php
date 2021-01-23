@extends('layouts.app')

@section('content')

{{--    @if (!have_posts())--}}
{{--        <div class="alert alert-warning">--}}
{{--            {{ __('Sorry, no results were found.', 'sage') }}--}}
{{--        </div>--}}
{{--        {!! get_search_form(false) !!}--}}
{{--    @endif--}}

    <section class="relative">
        <div class="h-screen object-cover w-full" style="background-image: url(https://cdn.shopify.com/s/files/1/2301/3747/files/794368794399217904859144399669693251784154149923_2048x2048.jpg?v=1596150179)">

            <div class="h-full table mx-auto text-center">
            <div class="table-cell align-middle" style="max-width: 829px;">
                <h2 class="text-white uppercase font-bold text-4xl" style="letter-spacing: 5px;">THE #1 SOURCE FOR PREMIUM VOCAL SAMPLES</h2>
            </div>
            </div>

            <div class="absolute bottom-0 w-full text-center">
                Arrow Down
            </div>

        </div>
    </section>



    <section class="container mx-auto px-16">
         @block() @endblock
    </section>



    <section class="container mx-auto px-16">
    <div class="flex gap-12 ">

        @vocalSample() @endvocalSample
        @vocalSample() @endvocalSample
        @vocalSample() @endvocalSample
        @vocalSample() @endvocalSample

    </div>
    </section>



    <section>
        <iframe width="100%"  height="1000px" src="https://www.youtube.com/embed/W0LO1saOplc" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture" allowfullscreen></iframe>
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
        @endblogExcerpt
        @endwhile
        </div>
    </section>


    {!! get_the_posts_navigation() !!}
@endsection
