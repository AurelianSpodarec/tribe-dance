@extends('layouts.app')

@section('content')


    <section class="container mx-auto px-16 mb-24">
        @sectionTitle(
        [ 'title' => 'Products' ]
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


@endsection
