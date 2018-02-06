<article @php(post_class())>
  <div class="row">
    <div class="col-12 col-sm-12 col-md-5 col-lg-5">
      <div class="bt bw2 mb3 mt1"></div>
      <h2 class="avenir pb2">{{ get_the_title() }}</h2>
      <div class="stars mb2" style="margin-top:-15px;">
        @for ($i=0; $i < get_post_meta(get_the_ID(),'dsc_host_star_rating',true); $i++)
          <i class="fas fa-star"></i>
        @endfor
      </div>
      @if ( get_the_post_thumbnail_url(get_the_ID(), 'full') )
        <a href="{{ get_the_post_thumbnail_url(get_the_ID(), 'full') }}" data-fancybox="group">
          <div class="card">
            <img class="card-img-top img-fluid" src="{{ get_the_post_thumbnail_url(get_the_ID(), 'full') }}" alt="Card image">
            <div class="card-img-overlay hover-bg-black-40">
              <h5 class="card-title btn btn-outline-light avenir" style="position:absolute; bottom:10px;">
                <i class="far fa-images"></i> Galeria de fotos
              </h5>
            </div>
          </div>
        </a>
      @endif
      @php( $host_gallery = get_post_meta(get_the_ID(),'dsc_host_images') )
      @if ($host_gallery)
        <div style="display: none;">
          @foreach ( $host_gallery as $img )
            <a href="{{ wp_get_attachment_image_url($img, 'full') }}" data-fancybox="group">
              <img src="{{ wp_get_attachment_image_url($img, 'full') }}" class="img-fluid" alt="Fancy image" />
            </a>
          @endforeach
        </div>
      @endif
      <br>
      <table>
        @if (get_post_meta(get_the_ID(),'dsc_host_address',true))
          <tr>
            <td width="8%"><i class="fas fa-home"></i></td>
            <td>{{get_post_meta(get_the_ID(),'dsc_host_address',true)}}</td>
          </tr>
        @endif
        @if (get_post_meta(get_the_ID(),'dsc_host_phone',true))
          <tr>
            <td><i class="fas fa-phone"></i></td>
            <td><a href="tel:{{get_post_meta(get_the_ID(),'dsc_host_phone',true)}}"target="_blank">{{get_post_meta(get_the_ID(),'dsc_host_phone',true)}}</a></td>
          </tr>
        @endif
        @if (get_post_meta(get_the_ID(),'dsc_host_email',true))
          <tr>
            <td><i class="fas fa-envelope"></i></td>
            <td>{{get_post_meta(get_the_ID(),'dsc_host_email',true)}}</td>
          </tr>
        @endif
        @if (get_post_meta(get_the_ID(),'dsc_host_website',true))
          <tr>
            <td><i class="fas fa-globe"></i></td>
            <td><a href="{{get_post_meta(get_the_ID(),'dsc_host_website',true)}}" target="_blank">{{get_post_meta(get_the_ID(),'dsc_host_website',true)}}</a></td>
          </tr>
        @endif
        @if (get_post_meta(get_the_ID(),'dsc_host_facebook',true))
          <tr>
            <td><i class="fab fa-facebook"></i></td>
            <td><a href="{{get_post_meta(get_the_ID(),'dsc_host_facebook',true)}}" target="_blank">Facebook</a></td>
          </tr>
        @endif
        @if (get_post_meta(get_the_ID(),'dsc_host_instagram',true))
          <tr>
            <td><i class="fab fa-instagram"></i></td>
            <td><a href="{{get_post_meta(get_the_ID(),'dsc_host_instagram',true)}}" target="_blank">Instagram</a></td>
          </tr>
        @endif
        @if (get_post_meta(get_the_ID(),'dsc_host_twitter',true))
          <tr>
            <td><i class="fab fa-twitter"></i></td>
            <td><a href="{{get_post_meta(get_the_ID(),'dsc_host_twitter',true)}}"target="_blank">Twitter</a></td>
          </tr>
        @endif
        @if (get_post_meta(get_the_ID(),'dsc_host_youtube',true))
          <tr>
            <td><i class="fab fa-youtube"></i></td>
            <td><a href="{{get_post_meta(get_the_ID(),'dsc_host_youtube',true)}}"target="_blank">YouTube</a></td>
          </tr>
        @endif
        @if (get_post_meta(get_the_ID(),'dsc_host_google_plus',true))
          <tr>
            <td><i class="fab fa-google-plus"></i></td>
            <td><a href="{{get_post_meta(get_the_ID(),'dsc_host_google_plus',true)}}" target="_blank">Google+</a></td>
          </tr>
        @endif
        @if (get_post_meta(get_the_ID(),'dsc_host_pinterest',true))
          <tr>
            <td><i class="fab fa-pinterest"></i></td>
            <td><a href="{{get_post_meta(get_the_ID(),'dsc_host_pinterest',true)}}" target="_blank">Pinterest</a></td>
          </tr>
        @endif
      </table>
    </div>
    <div class="col-12 col-sm-12 col-md-7 col-lg-7 avenir text-justify">
      <br><br><br><br>
      @php(the_content())
      <br>
      @if (Hosts::facilities(get_the_ID()))
        <h3>Instalaciones</h3>
        <div class="row">
          @foreach (Hosts::facilities(get_the_ID()) as $f)
            <div class="col-6 col-sm-6 col-md-6 col-lg-6">
              <td>{{ $f->name }}</td>
            </div>
          @endforeach
        </div>
      @endif
    </div>
  </div>
  <footer>
    {!! wp_link_pages(['echo' => 0, 'before' => '<nav class="page-nav"><p>' . __('Pages:', 'sage'), 'after' => '</p></nav>']) !!}
  </footer>
  @php(comments_template('/partials/comments.blade.php'))
</article>
