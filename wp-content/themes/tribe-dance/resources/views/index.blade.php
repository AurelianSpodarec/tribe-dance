@extends('layouts.app')

@section('content')
  @include('partials.page-header')

    @if (!have_posts())
      <div class="alert alert-warning">
        {{ __('Sorry, no results were found.', 'sage') }}
      </div>
      {!! get_search_form(false) !!}
    @endif

{{--    @while (have_posts()) @php the_post() @endphp--}}
{{--      @include('partials.content-'.get_post_type())--}}
{{--    @endwhile--}}

    <div class="flex">
      @while ($query_blog_posts->have_posts()) @php $query_blog_posts->the_post() @endphp
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


  {!! get_the_posts_navigation() !!}
@endsection
