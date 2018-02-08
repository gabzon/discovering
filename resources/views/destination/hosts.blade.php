@php
$args = [
  'post_type' => 'hosting',
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
  <section id="destination-host" class="container-fluid p-0">
    <div class="table-responsive-md">
      <table class="table table-hover">
        <thead>
          <tr>
            <th scope="col">Imagen</th>
            <th scope="col">Hotel / Posada</th>
            <th scope="col">Estrellas</th>
            <th scope="col">Contacto</th>
          </tr>
        </thead>
        @while ($places->have_posts() )
          @php( $places->the_post() )
          <tbody>
            <tr>
              <td style="width:300px;">
                @if (wp_get_attachment_url(get_post_thumbnail_id()))
                  <img class="img-fluid" src="{{ wp_get_attachment_url(get_post_thumbnail_id()) }}" alt="Card image cap">
                @else
                  <img src="@asset('images/image-unavailable.jpg')" alt="" class="img-fluid">
                @endif
              </td>
              <td style="min-width:250px;">
                <a href="{{ get_the_permalink() }}">{{ get_the_title() }}</a>
              </td>
              <td style="min-width:150px;">
                @for ($i=0; $i < get_post_meta(get_the_ID(),'dsc_host_star_rating', true); $i++)
                  <i class="fas fa-star"></i>
                @endfor
              </td>
              <td style="min-width:200px;">
                <div class="fa-2x">
                  <a href="{{ get_post_meta(get_the_ID(),'dsc_host_email', true) }}" style="text-decoration:none;">
                    <span class="fa-layers">
                      <i class="fas fa-circle"></i>
                      <i class="fa-inverse fas fa-envelope" data-fa-transform="shrink-8"></i>
                    </span>
                  </a>

                  <a href="{{ get_post_meta(get_the_ID(),'dsc_host_phone', true) }}" style="text-decoration:none;">
                    <span class="fa-layers">
                      <i class="fas fa-circle"></i>
                      <i class="fa-inverse fas fa-phone" data-fa-transform="shrink-8"></i>
                    </span>
                  </a>

                  <a href="{{ get_post_meta(get_the_ID(),'dsc_host_website', true) }}" style="text-decoration:none;">
                    <span class="fa-layers">
                      <i class="fas fa-circle"></i>
                      <i class="fa-inverse fas fa-globe" data-fa-transform="shrink-8"></i>
                    </span>
                  </a>

                  <a href="{{ get_post_meta(get_the_ID(),'dsc_host_facebook', true) }}" style="text-decoration:none;">
                    <span class="fa-layers">
                      <i class="fas fa-circle"></i>
                      <i class="fa-inverse fab fa-facebook-f" data-fa-transform="shrink-8"></i>
                    </span>
                  </a>
                </div>
              </td>
            </tr>
          </tbody>
        @endwhile
      </table>
    </div> {{-- .table-responsive --}}

  </section>
@else
  {{-- no posts found --}}
  nothing
@endif
