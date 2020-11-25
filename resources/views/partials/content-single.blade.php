<article class="container" @php(post_class())>
  <header class="block-heading text-left mt-5">
    <h4 class="text-danger font-weight-bold">
      {!! $title !!}
    </h4>
  </header>

  <div class="entry-content">
    @php(the_content())
  </div>

  <h4>Related Posts</h4>
  @include('partials.related-posts')

  
</article>
