@extends('layouts.app')

@section('content')
    @include('partials.page-header')

    @if (!have_posts())
        <section class="container mx-auto px-16 mb-24 prose">
            {{ __('Sorry, but the page you were trying to view does not exist.', 'sage') }}
        </section>
        {!! get_search_form(false) !!}
    @endif
@endsection
