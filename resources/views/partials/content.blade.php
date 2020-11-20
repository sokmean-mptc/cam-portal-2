<article class="wrap-item hrb" @php(post_class())>
  <h5 class="title">
    <a href="{{ get_permalink() }}">{!! $title !!} </a>
  </h5>
  <div class="excerpt">
    @php(the_excerpt())
  </div>
  <div class="meta d-none">
      @include('partials/entry-meta')
      <a href="{{ get_permalink() }}">
          {{ __("Read More", "egov" )}} <i class="icofont-double-right"></i>
      </a>
  </div>
</article>