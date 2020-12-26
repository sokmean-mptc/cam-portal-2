<article class="container" @php(post_class())>
  <li>
    <div class="collapse-title d-flex justify-content-between">
      <div class="collapsible-action"><span class="oi oi-chevron-right"></span><span> {!! $title !!}</span></div>
    </div>
  
    <ul>
  
      @if ( get_post_meta( get_the_id(), 'cam_portal_dept_address', true ) )
        <li class="item-wrap"><span class="item-title primary-color">{{ __( 'Address : ', 'sage' ) }}</span>
          <ul>
            <li>{!! get_post_meta ( get_the_id(), 'cam_portal_dept_address', true ) !!}</li>
          </ul>
        </li>
      @endif
  
      @if ( get_post_meta ( get_the_id(), 'cam_portal_dept_address_maps', true ) )
        <li class="item-wrap"><span class="item-title primary-color">{{ __( 'Map : ', 'sage' ) }}</span>
          <div style="margin: 0 -15px -15px;" class="map">
            <div class="google-map-api" data-title="{!! $title !!}" data-latlng="{{ get_post_meta ( get_the_id(), 'cam_portal_dept_address_maps', true ) }}" style="height:400px;"></div>
          </div>
        </li>
      @endif
  
      @if ( is_array( get_post_meta( get_the_id(), 'cam_portal_dept_contact_group', true ) ) && count ( get_post_meta( get_the_id(), 'cam_portal_dept_contact_group', true ) ) )
      <li class="item-wrap"><span class="item-title primary-color">{{ __( 'Contact : ', 'sage') }}</span>
        <ul>
          @foreach ( get_post_meta( get_the_id(), 'cam_portal_dept_contact_group', true ) as $item )
            <li class="item">
              <div class="row">
                <div class="col-sm-12 col-md-6">
                  <div><span>{{ $item['contact_position'] }}</span></div>
                  <div><span class="oi oi-person"></span><span>{{ $item['contact_name'] }}</span></div>
                </div>
                <div class="col-sm-12 col-md-6">
                  <div><span class="oi oi-phone"></span><span>{{ $item['contact_number'] }}</span></div>
                  <div><span class="oi oi-envelope-closed"></span><span>{{ $item['contact_email'] }}</span></div>
                </div>
              </div>
            </li>
          @endforeach
        </ul>
      </li>
      @endif
    </ul>
  </li>
  
</article>
