@php
$args = [
  'post_type' => 'post',
  'tax_query' => [
    'relation' => 'AND',
    [
      'taxonomy' => 'destination',
      'field' => 'term_id',
      'terms' => $id
    ],
    [
      'taxonomy'  => 'category',
      'field'     => 'slug',
      'terms'     => ['cultura','comidas','bebidas','tradiciones','festivos']
    ]
  ]
];

$posts = new WP_Query( $args );
@endphp


@if ($posts->have_posts())
  <div class="container-fluid p-0">
    <div class="row pl1">
      @while ($posts->have_posts() )
        @php( $posts->the_post() )
        <div class="col-12 col-sm-6 col-md-4 col-lg-3">
          <div class="card grow">
            @if (wp_get_attachment_url(get_post_thumbnail_id()))
              <a href="{{ get_the_permalink() }}">
                <img class="card-img-top" src="{{ wp_get_attachment_url(get_post_thumbnail_id()) }}" alt="Card image cap">
              </a>
            @endif
            <div class="card-body">
              <h5 class="card-title">{{ get_the_title() }}</h5>
              <p class="card-text">
                {{ get_the_excerpt() }}
                <br>
                Etiquetas:
                @php
                  echo get_the_category_list(', ');
                @endphp
              </p>
              <a href="{{ get_the_permalink() }}" class="btn btn-primary">Ver mas</a>
            </div>
          </div>

        </div>
      @endwhile
    </div>
  </div>
</section>
@else
  {{-- no posts found --}}
  nothing
@endif
