@extends('layouts.app')

@section('content')


    <section class="container mx-auto px-16 mb-24">

        @pageTitle(
        [ 'title' => 'Shop' ]
        ) @endpageTitle

        <div class="container mx-auto mb-24">
            @block2([
            'excerpt' => "Get some home made house lovin' for your next banger. Our sample libraries, racks and templates are chock-full of unique ideas to get you over that creative hump or kick start new ideas! If you have any questions or suggestions feel free to reach out to us at info@tribedance.net.",
            'permalink' => '',
            'isLink' => 'false',
            ])
            @endblock2
            {{--            link: flase--}}
        </div>


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
