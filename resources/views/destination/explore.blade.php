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

<div class="mv5">
  @while(have_posts()) @php(the_post())
    @if ( $places->have_posts() )
      @php(the_title())      
    @endif
  @endwhile
</div>
