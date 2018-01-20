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
          <div class="card bg-dark text-white">
            <img class="card-img" src="@asset('images/header.jpg')" alt="Card image">
            <div class="card-img-overlay">
              <h5 class="card-title">{{ $d->name }}</h5>
            </div>
          </div>
        </a>
      @endforeach
    </div>
  @endif

@endsection
