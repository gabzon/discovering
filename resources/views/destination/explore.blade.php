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
  <section id="destination-explore" class="container-fluid p-0">
    <div class="row pl1">
      @while ($places->have_posts() )
        @php( $places->the_post() )
        <div class="col-12 col-sm-6 col-md-4 col-lg-3">
          <div class="card text-center grow mv2">
            @if (wp_get_attachment_url(get_post_thumbnail_id()))
              <a href="{{ get_the_permalink() }}">
                <img class="card-img-top" src="{{ wp_get_attachment_url(get_post_thumbnail_id()) }}" alt="Card image cap">
              </a>
            @endif
            <div class="card-body">
              <a href="{{ get_the_permalink() }}">
                <h5 class="card-title">{{ get_the_title() }}</h5>
              </a>
              <p class="card-text">
                @php( the_excerpt())
              </p>
              {{-- <p class="card-text"><small class="text-muted">Last updated 3 mins ago</small></p> --}}
            </div>
          </div>
        </a>
      </div>
    @endwhile
  </div>
</section>
@else
  {{-- no posts found --}}
  nothing
@endif
