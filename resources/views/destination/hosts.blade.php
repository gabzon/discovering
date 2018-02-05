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
  <div class="container-fluid p-0">
    <table class="table table-hover">
      <thead>
        <tr>
          <th scope="col">Calidad</th>
          <th scope="col">Hotel / Posada</th>
          <th scope="col">Last</th>
          <th scope="col">Handle</th>
        </tr>
      </thead>
      @while ($places->have_posts() )
        @php( $places->the_post() )
        <tbody>
          <tr>
            <th scope="row">1</th>
            <td>
              <a href="{{ get_the_permalink() }}">{{ get_the_title() }}</a>
            </td>
            <td>
              <img class="card-img-top" src="{{ wp_get_attachment_url(get_post_thumbnail_id()) }}" alt="Card image cap">
            </td>
            <td>@mdo</td>
          </tr>
        </tbody>
      @endwhile
    </table>
    </div>
  </div>
</section>
@else
  {{-- no posts found --}}
  nothing
@endif
