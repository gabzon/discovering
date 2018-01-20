@extends('layouts.app')

@section('content')
  <br>
  @php($id = get_queried_object()->term_id)
  <div class="row">
    <div class="col-12 col-sm-12 col-md-5 col-lg-5">
      <div class="bt bw2 mb3 mt1"></div>
      <h2 class="avenir">{{ single_term_title() }}</h2>
      @php( $img_id = get_term_meta( $id, 'destination_images', true) )
      <img src="{{ wp_get_attachment_url( $img_id ) }}" alt="" class="img-fluid">
    </div>
    <div class="col-12 col-sm-12 col-md-7 col-lg-7">
      <div class="">
        @php
          echo term_description();
        @endphp
      </div>
    </div>
  </div>

  <section class="places explore">
    <ul class="nav nav-pills mb-3 nav-justified" id="pills-tab" role="tablist">
      <li class="nav-item">
        <a class="nav-link active" id="pills-home-tab" data-toggle="pill" href="#pills-home" role="tab" aria-controls="pills-home" aria-selected="true">Explora</a>
      </li>
      <li class="nav-item">
        <a class="nav-link" id="pills-profile-tab" data-toggle="pill" href="#pills-profile" role="tab" aria-controls="pills-profile" aria-selected="false">Alojamiento</a>
      </li>
      <li class="nav-item">
        <a class="nav-link" id="pills-contact-tab" data-toggle="pill" href="#pills-contact" role="tab" aria-controls="pills-contact" aria-selected="false">Comidas</a>
      </li>
    </ul>
    <div class="tab-content" id="pills-tabContent">
      <div class="tab-pane fade show active" id="pills-home" role="tabpanel" aria-labelledby="pills-home-tab">
        @include('destination/explore')
      </div>
      <div class="tab-pane fade" id="pills-profile" role="tabpanel" aria-labelledby="pills-profile-tab">
        hotel 1
        hotel 2
      </div>
      <div class="tab-pane fade" id="pills-contact" role="tabpanel" aria-labelledby="pills-contact-tab">
        laksdjf
      </div>
    </div>
  </section>

@endsection
