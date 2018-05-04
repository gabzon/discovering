<article @php(post_class())>
  <div class="row">
    <div class="col-12 col-sm-3 col-md-3 col-lg-3">
      <a href="{{ get_permalink() }}">
        <img src="{{ get_the_post_thumbnail_url( get_the_ID(), 'post-thumbnail' ) }}" alt="" class="img-fluid">
      </a>
    </div>
    <div class="col-12 col-sm-9 col-md-9 col-lg-9">
      <header>
        <h2 class="entry-title"><a href="{{ get_permalink() }}">{{ get_the_title() }}</a></h2>
        @include('partials/entry-meta')
      </header>
      <div class="entry-summary">
        @php(the_excerpt())
      </div>
    </div>
  </div>
</article>
<br>
<hr>
