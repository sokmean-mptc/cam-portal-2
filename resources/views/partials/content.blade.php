<article class="wrap-item hrb" @php post_class() @endphp>
  <h5 class="title">
    <a class="text-dark" href="{{ get_permalink() }}">{!! $title !!} </a>
  </h5>
  <div class="excerpt text-secondary">
    {!! mb_strimwidth( get_the_excerpt(), 0, 400, '...') !!}
  </div>
  <div class="meta text-secondary">
      @include('partials.entry-meta')
  </div>
</article>