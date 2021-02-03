@extends('layouts.app')

@section('content')

    <section class="container mx-auto px-16">
        <div class="grid grid-cols-1 md:grid-cols-2 xl:grid-cols-3 gap-12">

            @while ($blog_query_blog_posts->have_posts()) @php $blog_query_blog_posts->the_post() @endphp
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

@endsection
