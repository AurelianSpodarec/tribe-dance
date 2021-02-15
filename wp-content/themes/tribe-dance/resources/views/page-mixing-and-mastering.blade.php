@extends('layouts.app')

@section('content')
    @while(have_posts()) @php the_post() @endphp
        @include('partials.content-single-'.get_post_type())
    @endwhile


    @bannerCall([
    'title' => 'Ready to get started?',
    'excerpt' => 'Get in touch with Mike for a no-obligation chat and we’ll show you how you can go from idea to launch in 100 days so you can grow your business and drive breakout success',
    ])
    @endbannerCall

@endsection
