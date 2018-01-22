@php
$args = [
  'post_type' => 'place',
  'tax_query' => [
    [
      'taxonomy' => 'destination',
      'field' => 'term_id',
      'terms' => $id
    ]
  ]
];

$places = new WP_Query( $args );
@endphp


@if ($places->have_posts())
  <div class="container-fluid p-0">
    <div class="row pl1">
      @while ($places->have_posts() )
        @php( $places->the_post() )
        <div class="col-12 col-sm-6 col-md-4 col-lg-3">
          <a href="{{ get_the_permalink() }}">
            <div class="card text-center grow">
              <img class="card-img-top" src="{{ wp_get_attachment_url(get_post_thumbnail_id()) }}" alt="Card image cap">
              <div class="card-body">
                <h5 class="card-title">{{ get_the_title() }}</h5>
                <p class="card-text">{{ get_the_excerpt() }}</p>
                {{-- <p class="card-text"><small class="text-muted">Last updated 3 mins ago</small></p> --}}
              </div>
            </div>
          </a>
        </div>
      @endwhile
    </div>
  </div>
</section>
@else
  {{-- no posts found --}}
  nothing
@endif
