@extends('layouts.blog')

@section('content')


        <div class="w-3/4 flex flex-wrap gap-12 ">
            @while ($blog_query_blog_posts->have_posts()) @php $blog_query_blog_posts->the_post() @endphp
            @blogExcerpt([
                'title' => get_the_title(),
                'excerpt' => get_the_excerpt(),
                'date' => get_the_date(),
                'permalink' => get_the_permalink(),
                'thumbnail' => get_the_post_thumbnail_url(),
            ])
            @endblogExcerpt
            @endwhile
        </div>
        <div class="w-1/4">

        </div>
        </div>
    </section>

@endsection
