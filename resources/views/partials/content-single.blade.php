<article class="container">
  
  {!! get_the_term_list( get_the_ID(), array('category','post_tag'), '<ul class="list-inline mb-1"><li class="list-inline-item">', '</li><li class="list-inline-item">', '</li></ul>' ) !!}
  
  <header class="block-heading text-left mt-0">
    <h4 class="text-danger font-weight-bold">
      {!! $title !!}
    </h4>
  </header>
  <small class="meta mb-5">
    @include('partials.entry-meta')
  </small>
  <div class="entry-content mb-5">
    {!! get_the_content() !!}
    @php
    $pdf = get_post_meta( get_the_ID(), 'cam_group_pdf_items', true )
    @endphp
    @if ( is_array( $pdf ) )
      @foreach ( $pdf as $item )
        <iframe src="https://docs.google.com/gview?url={{ $item['pdf_url'] }}&embedded=true" style="width:100%; height:1000px;" frameborder="0"></iframe>
        <div class="mb-5">
          <i class="text-success icofont-download"></i>
          <a href="{{ $item['pdf_url'] }}">
            {{ __( 'Download', 'egov' ) }}
          </a>
        </div>
      @endforeach
    @endif
  </div>
  <h4>{{ __("Related Posts","egov") }}</h4>
  @include('partials.related-posts')

  
</article>
