<article class="container" @php(post_class())>
  
  {!! get_the_term_list( get_the_ID(), array('category','post_tag'), '<ul class="list-inline"><li class="list-inline-item">', '</li><li class="list-inline-item">', '</li></ul>' ) !!}
  
  <header class="block-heading text-left mt-0">
    <h4 class="text-danger font-weight-bold">
      {!! $title !!}
    </h4>
  </header>
  <small class="meta">
    @include('partials.entry-meta')
  </small>
  <div class="entry-content mb-5">
    @php(the_content())
  </div>
  <h4>{{ __("Related Posts","egov") }}</h4>
  @include('partials.related-posts')

  
</article>
