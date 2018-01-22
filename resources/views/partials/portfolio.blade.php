@php
$args = array(
  'post_type'              => array( 'place' ),
  'posts_per_page'         => '6',
  'orderby'                => 'rand',
);

// The Query
$places = new WP_Query( $args );
@endphp

<section class="p-0" id="portfolio">
  <div class="row">
    <div class="col-lg-12 text-center">
      <h2 class="section-heading ttu">Lugares populares</h2>
      <hr class="my-4">
    </div>
  </div>
  <br>
  <br>
  @if ($places->have_posts())
    <div class="container-fluid p-0 bg-dark">
      <div class="row no-gutters popup-gallery">
        @while ($places->have_posts() )
          @php( $places->the_post() )
          <div class="col-lg-4 col-sm-6">
            <a class="portfolio-box" href="{{ get_the_permalink() }}">
              <img class="img-fluid" src="{{ wp_get_attachment_url(get_post_thumbnail_id()) }}" alt="">
              <div class="portfolio-box-caption">
                <div class="portfolio-box-caption-content">
                  <div class="avenir text-faded f4 ttu">
                    @php
                      $place = get_the_terms(get_the_ID(),'destination');
                      echo $place[0]->name;
                    @endphp
                  </div>
                  <div class="baskerville f3 garamond">
                    {{ get_the_title() }}
                  </div>
                </div>
              </div>
            </a>
          </div>
          <br>
        @endwhile
      </div>
    </div>
  </section>
@else
  {{-- no posts found --}}
  nothing
@endif

@php(wp_reset_postdata())
