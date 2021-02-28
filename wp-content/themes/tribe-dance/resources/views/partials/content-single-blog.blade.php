<div class="prose lg:prose-xl container mx-auto px-6 lg:px-12 xl:16 mb-32">
    <article @php post_class() @endphp>

        <header>
            <h1 class="mb-2 uppercase text-2xl lg:text-5xl font-semibold mb-12">{!! get_the_title() !!}</h1>
        </header>

        <div class="prose lg:prose-xl entry-content">
            @php the_content() @endphp
        </div>

        <footer>
            {!! wp_link_pages(['echo' => 0, 'before' => '<nav class="page-nav"><p>' . __('Pages:', 'sage'), 'after' => '</p></nav>']) !!}
        </footer>

    </article>
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
