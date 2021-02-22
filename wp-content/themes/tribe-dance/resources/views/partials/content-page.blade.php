

<section class="container mx-auto px-16 mb-24 prose">
@php the_content() @endphp
{{--{!! wp_link_pages(['echo' => 0, 'before' => '<nav class="page-nav"><p>' . __('Pages:', 'sage'), 'after' => '</p></nav>']) !!}--}}
</section>
