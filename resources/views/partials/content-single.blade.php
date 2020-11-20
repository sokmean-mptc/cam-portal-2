<article class="container" @php(post_class())>
  <header class="block-heading text-left mt-5">
    <h4 class="text-danger font-weight-bold">
      {!! $title !!}
    </h4>
  </header>

  <div class="entry-content">
    @php(the_content())
  </div>

  <footer>
    {!! wp_link_pages(['echo' => 0, 'before' => '<nav class="page-nav"><p>' . __('Pages:', 'egov'), 'after' => '</p></nav>']) !!}
  </footer>

  
</article>
