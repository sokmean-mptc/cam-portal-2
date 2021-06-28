<ul class="list-inline">
  <li class="list-inline-item">
    <time class="updated" datetime="{{ get_post_time('c', true) }}">
      @php
      printf( esc_html__( '%s ago', 'sage' ), human_time_diff( get_the_time('U'), current_time('timestamp') ) )
      @endphp
    </time>
  </li>
  <li class="list-inline-item">
    <span>{{ __('By', 'sage') }}</span>
    <a href="{{ get_author_posts_url(get_the_author_meta('ID')) }}" rel="author" class="text-secondary">
      {{ get_the_author() }}
    </a>
  </li>
  <li class="list-inline-item">
    {{ __("View : ", "sage") }}{{ $view }}
  </li>
  {{-- <li class="list-inline-item">
    <a href="{{ get_permalink() }}">
      {{ __("Read More", "sage" )}} <i class="icofont-double-right"></i>
    </a>
  </li> --}}
</ul>