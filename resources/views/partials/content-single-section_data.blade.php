<article class="container">
  
  {!! get_the_term_list( get_the_ID(), array('category','post_tag'), '<ul class="list-inline mb-1"><li class="list-inline-item">', '</li><li class="list-inline-item">', '</li></ul>' ) !!}
  
  <header class="block-heading text-left mt-0">
    <h4 class="text-danger font-weight-bold">
      {!! $title !!}
    </h4>
  </header>
  @php
    $title = get_post_meta( get_the_ID(), 'cam_group_title', true ) ?: 'Title';
    $option_1 = get_post_meta( get_the_ID(), 'cam_group_option-1', true );
    $option_2 = get_post_meta( get_the_ID(), 'cam_group_option-2', true );
    $value = get_post_meta( get_the_ID(), 'cam_group_value', true ) ?: 'Value';
    $desc = get_post_meta( get_the_ID(), 'cam_group_description', true );
    $items = get_post_meta( get_the_ID(), 'cam_group_items', true );
  @endphp
  <div class="entry-content mb-5">
    <p>
      @if ( $desc )
        {!! $desc !!}
      @endif
    </p>
    <table class="table table-bordered table-striped">
      <thead>
        <tr>
          @if ( $title )
            {!! '<th>' . $title . '</th>' !!}
          @endif
          @if ( $option_1 )
            {!! '<th>' . $option_1 . '</th>' !!}
          @endif
          @if ( $option_2 )
            {!! '<th>' . $option_2 . '</th>' !!}
          @endif
          @if ( $value )
            {!! '<th>' . $value . '</th>' !!}
          @endif
        </tr>
      </thead>
      @if ( is_array( $items ) )
      <tbody>
        @foreach ( $items as $item )
          <tr>
            @if ( $title )
              {!! '<td>' . $item['title'] . '</td>' !!}
            @endif
            @if ( $option_1 )
              {!! '<td>' . $item['option-1'] . '</td>' !!}
            @endif
            @if ( $option_2 )
              {!! '<td>' . $item['option-2'] . '</td>' !!}
            @endif
            @if ( $value )
              {!! '<td>' . $item['value'] . '</td>' !!}
            @endif
          </tr>
        @endforeach
      </tbody>
     @endif
    </table>
  </div>
</article>
