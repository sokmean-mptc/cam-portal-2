<article class="wrap-item hrb" @php(post_class())>
  <h5 class="title">
    <a target="_blank" href="{{ get_permalink() }}">{!! $title !!} <i class="ml-4 icofont-external-link"></i></a>
  </h5>
  <div class="excerpt">
    @php(the_excerpt())
  </div>
  <div class="meta d-none">
      <a href="{{ get_permalink() }}">
          {{ __("Read More", "egov" )}} <i class="icofont-double-right"></i>
      </a>
  </div>
</article>
