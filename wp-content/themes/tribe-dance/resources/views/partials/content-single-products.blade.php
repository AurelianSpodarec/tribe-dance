<div class="my-20 prose lg:prose-xl container mx-auto px-16 mb-24">
    <article @php post_class() @endphp>



        <div class="grid gird-cols-1 xl:grid-cols-2 gap-12">

            <div class="w-full">
                <img class="mb-8" src="{{ get_the_post_thumbnail_url() }}" />
                <iframe width="100%" height="100" scrolling="no" frameborder="no" allow="autoplay" src="https://w.soundcloud.com/player/?url=https%3A//api.soundcloud.com/tracks/945848935&color=%23ff5500&auto_play=false&hide_related=false&show_comments=true&show_user=true&show_reposts=false&show_teaser=true&visual=true"></iframe>
            </div>

            <div class="w-full">
                <header>
                    <div class="mb-8">
                        <h1 class="mb-2 uppercase text-2xl md:text-3xl font-bold">{!! get_the_title() !!}</h1>
                        <p class="text-sm uppercase text-gray-400">{{ App::siteName() }}</p>
                    </div>

                    <span class="mb-8 block text-2xl">£ {{ number_format(get_field('price', get_the_ID()), 2) }}</span>

                    <a class="w-full text-center gumroad-button" href="https://gum.co/{!! get_field('gumroad_button', get_the_ID()) !!}">Buy my product</a>

                </header>

                <div class="my-10">
                    <h3>Spec</h3>
                </div>
{{--                tags --}}
{{--                button--}}

                <div>
                    @php the_content() @endphp
                    <a class="w-full mt-6 text-center gumroad-button" href="https://gum.co/{!! get_field('gumroad_button', get_the_ID()) !!}">Buy my product</a>

                </div>
            </div>


        </div>

        <footer>
            {!! wp_link_pages(['echo' => 0, 'before' => '<nav class="page-nav"><p>' . __('Pages:', 'sage'), 'after' => '</p></nav>']) !!}
        </footer>

    </article>
</div>
