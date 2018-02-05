@extends('layouts.app')

@section('content')
  <br>
  @php($id = get_queried_object()->term_id)
  <div class="row">
    <div class="col-12 col-sm-12 col-md-5 col-lg-5">
      <div class="bt bw2 mb3 mt1"></div>
      <h2 class="garamond pb2">{{ single_term_title() }}</h2>
      @php( $img_id = get_term_meta( $id, 'destination_images', true) )
      <img src="{{ wp_get_attachment_url( $img_id ) }}" alt="" class="img-fluid">
      <br><br>
      <a href="#" class="btn btn-outline-primary">
        Gallery
      </a>
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
    <ul class="nav nav-pills mb-3 nav-justified avenir ttu" id="pills-tab" role="tablist">
      <li class="nav-item">
        <a class="nav-link active ba mh2 pv2 grow" id="pills-explore-tab" data-toggle="pill" href="#pills-explore" role="tab" aria-controls="pills-explore" aria-selected="true">Explora</a>
      </li>
      <li class="nav-item">
        <a class="nav-link ba mh2 pv2 grow" id="pills-hosts-tab" data-toggle="pill" href="#pills-hosts" role="tab" aria-controls="pills-hosts" aria-selected="false">Alojamiento</a>
      </li>
      <li class="nav-item">
        <a class="nav-link ba mh2 pv2 grow" id="pills-food-drink-tab" data-toggle="pill" href="#pills-food-drink" role="tab" aria-controls="pills-food-drink" aria-selected="false">Comidas & Bebidas</a>
      </li>
      <li class="nav-item">
        <a class="nav-link ba mh2 pv2 grow" id="pills-tradition-tab" data-toggle="pill" href="#pills-tradition" role="tab" aria-controls="pills-tradition" aria-selected="false">Tradiciones</a>
      </li>
    </ul>
    <div class="tab-content" id="pills-tabContent">
      <div class="tab-pane fade show active" id="pills-explore" role="tabpanel" aria-labelledby="pills-explore-tab">
        @include('destination/explore')
      </div>
      <div class="tab-pane fade" id="pills-hosts" role="tabpanel" aria-labelledby="pills-hosts-tab">
        @include('destination/hosts')
      </div>
      <div class="tab-pane fade" id="pills-food-drink" role="tabpanel" aria-labelledby="pills-food-drink-tab">
        @include('destination/food-drinks')
      </div>
      <div class="tab-pane fade" id="pills-tradition" role="tabpanel" aria-labelledby="pills-tradition-tab">
        @include('destination/traditions')
      </div>
    </div>
  </section>

@endsection
