{{-- https://gist.github.com/smutek/cd95c8bc4f1db70ee1eda2740bfbf6fd --}}
<nav class="navbar navbar-expand-lg navbar-light fixed-top" id="mainNav">
  <div class="container">
    <a class="brand navbar-brand" href="{{ home_url('/') }}">
      @php($logo = Null)
      @if ($logo)
        {{ get_bloginfo('name', 'display') }}
      @else
        <i class="fas fa-map-signs"></i> {{ get_bloginfo('name', 'display') }}
      @endif
    </a>
    <button class="navbar-toggler navbar-toggler-right" type="button" data-toggle="collapse" data-target="#navbarResponsive" aria-controls="navbarResponsive" aria-expanded="false" aria-label="Toggle navigation">
      <span class="navbar-toggler-icon"></span>
    </button>

    <div class="collapse navbar-collapse float-right" id="navbarResponsive">
      @if (has_nav_menu('primary_navigation'))
        {!! wp_nav_menu(['theme_location' => 'primary_navigation','menu_class' => 'nav navbar-nav w-100 mr-auto justify-content-end']) !!}
      @endif
    </div>
  </div> {{-- .container --}}
</nav>



@php
$image_id = is_array(self::$options['login_image']) ? self::$options['login_image'] : array(self::$options['login_image']);
shuffle($image_id);
$image_url = wp_get_attachment_image_src($image_id[0],'full');
@endphp
