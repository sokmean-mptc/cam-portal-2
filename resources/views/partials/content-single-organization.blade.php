<article class="container" @php(post_class())>
  {!! get_the_term_list( get_the_ID(), array('sector','organization_type'), '<ul class="list-inline mb-1"><li class="list-inline-item">', '</li><li class="list-inline-item">', '</li></ul>' ) !!}
  
  <header class="block-heading text-left mt-0">
    <h4 class="text-danger font-weight-bold">
      {!! $title !!}
    </h4>
  </header>
  <small class="meta mb-5">
    @include('partials.entry-meta')
    
    <!-- Go to www.addthis.com/dashboard to customize your tools -->
    <div class="addthis_inline_share_toolbox_vjl2 mb-2 mb-md-4"></div>
            
  </small>
		@if ( get_post_meta( get_the_id(), 'cam_portal_dept_address', true ) )
		<ul class="list-unstyled">
			<li class="">
				{{ __( 'Address : ', 'sage' ) }}
				{!! get_post_meta ( get_the_id(), 'cam_portal_dept_address', true ) !!}
				
			</li>
		</ul>
		@endif

		@if ( get_post_meta ( get_the_id(), 'cam_portal_dept_address_maps', true ) )
		<div class="embed-responsive embed-responsive-16by9 mb-3 mb-md-6">
			<iframe
				width="600"
				height="450"
				frameborder="0" style="border:0"
				src="https://www.google.com/maps/embed/v1/place
				?key=AIzaSyBbTDKtoivLuALOMTXcUViLnQZxNCuHdeA
				&zoom=16
				&q={{ get_post_meta ( get_the_id(), 'cam_portal_dept_address_maps', true ) }}
				" allowfullscreen>
			</iframe>
		</div>
		@endif

		@if ( is_array( get_post_meta( get_the_id(), 'cam_portal_dept_contact_group', true ) ) && count ( get_post_meta( get_the_id(), 'cam_portal_dept_contact_group', true ) ) )
		<ul class="list-unstyled mb-0">
			<li class="item-wrap">
				<span class="item-title primary-color mb-3 d-block">{{ __( 'Contact : ', 'sage') }}</span>
				<div class="row row-cols-1 row-cols-sm-2 row-cols-md-4 mb-0">
					@foreach ( get_post_meta( get_the_id(), 'cam_portal_dept_contact_group', true ) as $item )
					<div class="col">
						<table class="table table-bordered">
							<tbody>
								@if ( $item['contact_name'] )
								<tr>
									<td>{{ $item['contact_name'] }}</td>
								</tr>
								@endif
								@if ( $item['contact_position'] )
								<tr>
									<td>{{ $item['contact_position'] }}</td>
								</tr>
								@endif
								@if ( $item['contact_number'] )
								<tr>
									<td>{{ $item['contact_number'] }}</td>
								</tr>
								@endif
								@if ( $item['contact_email'] )
								<tr>
									<td>{{ $item['contact_email'] }}</td>
								</tr>
								@endif
							</tbody>
						</table>
					</div>
					@endforeach
				</div>
			</li>
		</ul>
		@endif
</article>
