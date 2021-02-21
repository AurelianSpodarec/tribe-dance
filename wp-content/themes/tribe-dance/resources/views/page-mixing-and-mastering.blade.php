@extends('layouts.app')

@section('content')
    @while(have_posts()) @php the_post() @endphp
        @include('partials.content-single-'.get_post_type())
    @endwhile



    <?php if ( have_rows( 'mmcall' ) ) : ?>
	<?php while ( have_rows( 'mmcall' ) ) : the_row(); ?>

        @bannerCall([
            'title' => get_sub_field( 'title' ),
            'excerpt' => get_sub_field( 'text' ),
            'linkLabel' => get_sub_field( 'link_label' ),
            'link' => get_sub_field( 'link' ),
            'avatar' =>  get_sub_field( 'avatar' ),
            'avatarName' => get_sub_field( 'avatar_name' ),
            'avatarContact' =>  get_sub_field( 'avatar_contact' )
        ])
        @endbannerCall


	<?php endwhile; ?>
    <?php endif; ?>



@endsection
