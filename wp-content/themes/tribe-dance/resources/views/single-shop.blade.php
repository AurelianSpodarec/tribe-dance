@extends('layouts.app')

@section('content')
    @while(have_posts()) @php the_post() @endphp


    <div class="my-20 container mx-auto px-6 lg:px-12 xl:16 mb-24">
        <article @php post_class() @endphp>



            <div class="grid gird-cols-1 xl:grid-cols-2 gap-12">

                <div class="w-full">
                    <img class="mb-8" src="{{ get_the_post_thumbnail_url() }}" />
                    <iframe width="100%" height="100" scrolling="no" frameborder="no" allow="autoplay" src="https://w.soundcloud.com/player/?url=https%3A//api.soundcloud.com/tracks/945848935&color=%23ff5500&auto_play=false&hide_related=false&show_comments=true&show_user=true&show_reposts=false&show_teaser=true&visual=true"></iframe>
                </div>

                <div class="w-full">
                    <header>
                        <div class="mb-8">
                            <h1 class="mb-2 uppercase text-2xl lg:text-5xl font-semibold">{!! get_the_title() !!}</h1>
                            <p class="text-sm uppercase text-gray-400">{{ App::siteName() }}</p>
                        </div>

                        <span class="mb-8 block text-2xl">€ {{ number_format(get_field('price', get_the_ID()), 2) }}</span>

{{--                        <a class="w-full text-center gumroad-button mb-8" href="https://gum.co/{!! get_field('gumroad_button', get_the_ID()) !!}">Buy Now</a>--}}
                        <a class="w-full mt-6 text-center mb-8 gumroad-button" target="_blank" href="{!! get_field('gumroad_button_link', get_the_ID()) !!}}">
                            {!! get_field('gumroad_button', get_the_ID()) !!}
                        </a>
                    </header>

                    <div class="prose lg:prose-xl">
                        @php the_content() @endphp
{{--                        <a class="w-full mt-6 text-center gumroad-button" href="https://gum.co/{!! get_field('gumroad_button', get_the_ID()) !!}">Buy Now</a>--}}
                        <a class="w-full mt-6 text-center gumroad-button" target="_blank" href="{!! get_field('gumroad_button_link', get_the_ID()) !!}}">
                            {!! get_field('gumroad_button', get_the_ID()) !!}
                        </a>
                    </div>
                </div>


            </div>



            <div class="mt-32">
                @sectionTitle(
                [ 'title' => 'You might also like' ]
                ) @endsectionTitle

                <div class="flex gap-12 ">
                @while ($query_random_products_posts->have_posts()) @php $query_random_products_posts->the_post() @endphp
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
            </div>



            <footer>
                {!! wp_link_pages(['echo' => 0, 'before' => '<nav class="page-nav"><p>' . __('Pages:', 'sage'), 'after' => '</p></nav>']) !!}
            </footer>

        </article>
    </div>



    @endwhile
@endsection
