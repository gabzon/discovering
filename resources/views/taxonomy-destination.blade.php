@extends('layouts.app')

@section('content')
  <br>
  @php($id = get_queried_object()->term_id)
  <div class="row">
    <div class="col-12 col-sm-12 col-md-5 col-lg-5">
      <div class="bt bw2 mb3 mt1"></div>
      <h2 class="avenir pb2">{{ single_term_title() }}</h2>
      @php( $img_ids = get_term_meta( $id, 'destination_images'))
      {{-- array_rand() picks ramdomly an element for the array, in this case a random image --}}
      @php( $random_img = array_rand($img_ids, 1) )
      <a href="{{ wp_get_attachment_url( $img_ids[$random_img] ) }}" data-fancybox="group">
        <div class="card">
          <img class="card-img-top img-fluid" src="{{ wp_get_attachment_url( $img_ids[$random_img] ) }}" alt="Card image">
          <div class="card-img-overlay hover-bg-black-40">
            <h5 class="card-title btn btn-outline-light avenir" style="position:absolute; bottom:10px;">
              <i class="far fa-images"></i> Galeria de fotos
            </h5>
          </div>
        </div>
      </a>
      <div style="display: none;">
        @if( $img_ids )
          @foreach ( $img_ids as $id )
            <a href="{{ wp_get_attachment_image_url($id, 'full') }}" data-fancybox="group">
              <img src="{{ wp_get_attachment_image_url($id, 'full') }}" class="img-fluid" alt="Gallery image" />
            </a>
          @endforeach
        @endif
      </div>
      <br>
    </div>
    <div class="col-12 col-sm-12 col-md-7 col-lg-7 avenir text-justify">
      <br><br><br>
      @php
      echo term_description();
      @endphp
    </div>
  </div>
  <br>
  <section class="places explore">
    <ul class="nav nav-tabs nav-justified avenir ttu" id="myTab" role="tablist">
      <li class="nav-item">
        <a class="nav-link active" id="explore-tab" data-toggle="tab" href="#explore" role="tab" aria-controls="explore" aria-selected="true">Explore</a>
      </li>
      <li class="nav-item">
        <a class="nav-link" id="host-tab" data-toggle="tab" href="#host" role="tab" aria-controls="host" aria-selected="false">Alojamiento</a>
      </li>
      <li class="nav-item">
        <a class="nav-link" id="food-tab" data-toggle="tab" href="#food" role="tab" aria-controls="food" aria-selected="false">Comida</a>
      </li>
      <li class="nav-item">
        <a class="nav-link" id="traditions-tab" data-toggle="tab" href="#traditions" role="tab" aria-controls="traditions" aria-selected="false">Traditions</a>
      </li>
    </ul>
    <div class="tab-content" id="myTabContent">
      <div class="tab-pane fade show active" id="explore" role="tabpanel" aria-labelledby="explore-tab">
        <br>
        @include('destination/explore')
      </div>
      <div class="tab-pane fade" id="host" role="tabpanel" aria-labelledby="host-tab">
        <br>
        @include('destination/hosts')
      </div>
      <div class="tab-pane fade" id="food" role="tabpanel" aria-labelledby="food-tab">
        <br>
        food
      </div>
      <div class="tab-pane fade" id="traditions" role="tabpanel" aria-labelledby="traditions-tab">
        <br>
        traditiones
      </div>
    </div>
    <br>
  </section>

@endsection
