<article class="prose container mx-auto px-6 lg:px-12 xl:16 mb-24" @php post_class() @endphp>
    <header>
        <h2 class="entry-title"><a href="{{ get_permalink() }}">{!! get_the_title() !!}</a></h2>
        @include('partials/entry-meta')
    </header>
    <div class="entry-summary">
        @php the_excerpt() @endphp
    </div>
</article>
