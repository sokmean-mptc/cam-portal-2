<article class="wrap-item hrb" @php(post_class())>
  <h5 class="title">
    <a href="{{ get_permalink() }}">{!! $title !!} </a>
  </h5>
  <div class="excerpt">
    {!! mb_strimwidth( get_the_excerpt(), 0, 400, '...') !!}
  </div>
  <div class="meta">
      @include('partials.entry-meta')
  </div>
</article>