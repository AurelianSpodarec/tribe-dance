@extends('layouts.app')

@section('content')
    @while(have_posts()) @php the_post() @endphp

    <article class="prose">

        @include('partials.content-single-'.get_post_type())
    </article>


        f
    @endwhile
@endsection
