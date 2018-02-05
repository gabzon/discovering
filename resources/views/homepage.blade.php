{{--
Template Name: Homepage
--}}

@extends('layouts.front')

@section('content')
  @while(have_posts()) @php(the_post())
    @php( $cover_image = get_template_directory_uri() . "/assets/images/jungle.jpg")
    <header class="masthead text-center text-white d-flex" style="background-image: url({{$cover_image}})">
      <div class="container my-auto">
        <div class="row">
          <div class="col-lg-8 mx-auto">
            <span class="text-faded i f2">Bienvenidos a Bolivar</span>
          </div>
        </div>
        <div class="col-lg-10 mx-auto">
          <h1 class="text-uppercase">
            <strong>El paraiso perdido!</strong>
          </h1>
          <br><br>
          <a class="btn btn-primary btn-xl js-scroll-trigger mb-5 white" href="{{ get_permalink( get_page_by_title( 'destinos' ) ) }}">Descubre mas</a>
        </div>
        <br>
        <span class="i f6 light-gray">Photo by Jorge Illich-Gejo on Unsplash</span>
      </div>
    </header>

    <section class="bg-primary" id="about">
      <div class="container">
        <div class="row">
          <div class="col-lg-8 mx-auto text-center">
            <h2 class="section-heading text-white">We've got what you need!</h2>
            <hr class="light my-4">
            <p class="text-faded mb-4">Start Bootstrap has everything you need to get your new website up and running in no time! All of the templates and themes on Start Bootstrap are open source, free to download, and easy to use. No strings attached!</p>
            <a class="btn btn-light btn-xl js-scroll-trigger" href="#services">Get Started!</a>
          </div>
        </div>
      </div>
    </section>

    @include('partials/icons')

    @include('partials/portfolio')

    <section class="bg-dark text-white">
      <div class="container text-center">
        <a class="btn btn-light btn-xl sr-button" href="{{ get_permalink( get_page_by_title( 'explora' ) ) }}">Explorar</a>
      </div>
    </section>

  @endwhile
@endsection
