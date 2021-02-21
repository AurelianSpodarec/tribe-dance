<div class="prose lg:prose-xl container mx-auto px-16 mb-32">
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
