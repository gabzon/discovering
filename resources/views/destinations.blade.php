{{--
Template Name: Destinations
--}}

@extends('layouts.app')

@section('content')
  @while(have_posts()) @php(the_post())
    @include('partials.page-header')
    @include('partials.content-page')
  @endwhile

  @if ($destinations)
    <div class="card-columns">
      @foreach ($destinations as $d)
        <a href="{{ get_term_link( $d->term_id, 'destination' ) }}">
          @php( $img_id = get_term_meta( $d->term_id, 'destination_images', true) )
          <div class="card grow text-white">
            <img class="card-img-top img-fluid" src="{{ wp_get_attachment_url( $img_id ) }}" alt="Card image">
            <div class="card-img-overlay hover-bg-black-40">
              <h5 class="card-title avenir">{{ $d->name }}</h5>
            </div>
          </div>
        </a>
      @endforeach
    </div>
  @endif

@endsection
