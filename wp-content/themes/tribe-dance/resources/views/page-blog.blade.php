@extends('layouts.app')

@section('content')


    <section class="container mx-auto px-16">
        <div class="flex gap-12">
            @while ($BLOGqueryBlogPosts->have_posts()) @php $BLOGqueryBlogPosts->the_post() @endphp
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

@endsection
