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

    @while ($query_blog_posts->have_posts()) @php $query_blog_posts->the_post() @endphp
    {{-- @include('partials.content-'.get_post_type()) --}}

      @blogExcerpt(['title' => the_title()])
      @endblogExcerpt
    @endwhile

  {!! get_the_posts_navigation() !!}
@endsection
