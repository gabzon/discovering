<article @php(post_class())>
  <div class="row">
    <div class="col-12 col-sm-12 col-md-5 col-lg-5">
      <div class="bt bw2 mb3 mt1"></div>
      <h2 class="avenir">{{ get_the_title() }}</h2>
      <img src="{{ get_the_post_thumbnail_url( get_the_ID(), 'full' ) }}" alt="" class="img-fluid">
      @include('partials/entry-meta')
    </div>
    <div class="col-12 col-sm-12 col-md-7 col-lg-7 avenir text-justify">
      <br><br><br>
      @php(the_content())
    </div>
  </div>
  <br>
  <br>
  <footer>
    {!! wp_link_pages(['echo' => 0, 'before' => '<nav class="page-nav"><p>' . __('Pages:', 'sage'), 'after' => '</p></nav>']) !!}
  </footer>
  @php(comments_template('/partials/comments.blade.php'))
</article>
