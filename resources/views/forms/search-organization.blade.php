@php
    $term = get_query_var( 'term' ); // string current term slug
    $taxonomy = 'organization_type'; // string current taxonomy slug
    $current_term = get_term_by( 'slug', $term, $taxonomy ); // current term object
    
    $terms = get_terms( $taxonomy, array( 'hide_empty' => false ) ); // all terms array
    
    $term_parents = []; 
    $term_siblings = [];
    $term_childrens = [];

    // define id parent of parent
    $term_parents_id = 0;
    if ( !is_wp_error( $terms ) ) {

        foreach( $terms as $term ) {
            if( $term->term_id == $current_term->parent ) {
                $term_parents_id = $term->parent;
            }
        }

        // define obj array of parent -> current -> child
        foreach( $terms as $term ) {


            if( $term->parent == $term_parents_id && $current_term->parent ) {
                $term_parents[] = $term;
            }


            if( $term->parent == $current_term->parent ) {
                $term_siblings[] = $term;
            }



            if( $term->parent == $current_term->term_id ) {
                $term_childrens[] = $term;
            }
        }
        // echo '<pre>';
        //     print_r( $term_parents );
        //     print_r( $term_siblings );
        //     print_r( $term_childrens );
        // echo '</pre>';
    }

    $column = 12;
    
@endphp

<form class="service-filter" method="GET" action="{{ home_url('/') }}">
	<div class="form-group row mb-0">		
	
		<!-- parent -->
		@if ( count( $term_parents ) > 1 && ! count( $term_childrens ) )
            <div class="col-sm-3 pr-sm-0">
                <select class="custom-select option-typeahead" onchange="location = this.value;">
                    <option value="#" selected>{{ __( 'Select', 'egov' ) }}</option>
                    @foreach ( $term_parents as $parent )
                        @php
                            $active = ( $current_term->parent == $parent->term_id ) ? 'selected' : '';
                            $args = array(
                                'posts_per_page'   	=> -1,
                                'post_type'        	=> 'organization',
                                'tax_query' 		=> array(
                                    array(
                                        'taxonomy' 	=> $taxonomy,
                                        'field' 	=> 'term_id',
                                        'terms' 	=> $parent->term_id
                                    )
                                )
                            );
                            $count = count( get_posts( $args ) );
                            //wp_reset_postdata();
                            echo '<option '. $active .' value="' . get_term_link( $parent->term_id, $taxonomy ) . '">' . $parent->name . ' ('. $count .')</option>';
                        @endphp
                    @endforeach
                </select>
            </div>
            @php
                $column -= 3; 
                $child_pl = 'pl-sm-0';
            @endphp 
        @endif
		
        <!-- sibling -->
        @if ( count( $term_siblings ) > 1 )
            <div class="col-sm-3 pr-sm-0 {{ isset( $child_pl ) ? $child_pl : '' }}">
                <select class="custom-select option-typeahead" onchange="location = this.value;">
                    <option value="#" selected>{{ __( 'Select', 'egov' ) }}</option>
                    @foreach ( $term_siblings as $sibling ) 
                        @php
                            $active = ( $current_term->term_id == $sibling->term_id ) ? 'selected' : '';
                            $args = array(
                                'posts_per_page'   	=> -1,
                                'post_type'        	=> 'organization',
                                'tax_query' 		=> array(
                                    array(
                                        'taxonomy' 	=> $taxonomy,
                                        'field' 	=> 'term_id',
                                        'terms' 	=> $sibling->term_id
                                    )
                                )
                            );
                            $count = count( get_posts( $args ) );
                            //wp_reset_postdata();
                            echo '<option '. $active .' value="' . get_term_link( $sibling->term_id, $taxonomy ) . '"> ' . $sibling->name . ' ('. $count .')</option>';
                        @endphp
                    @endforeach
                </select>
            </div>
            @php
                $column -= 3; 
                $child_pl = 'pl-sm-0';
            @endphp
        @endif
                    
                    
	
		<!-- child -->
		@if ( count( $term_childrens ) > 1 )
            <div class="col-sm-3 pr-sm-0 {{ isset( $child_pl ) ? $child_pl : '' }}">
                <select class="custom-select option-typeahead" onchange="location = this.value;">
                    <option value="#" selected>{{ __( 'Select', 'egov' ) }}</option>
                    @foreach ( $term_childrens as $child ) {
                        @php 
                            $args = array(
                                'posts_per_page'   	=> -1,
                                'post_type'        	=> 'organization',
                                'tax_query' 		=> array(
                                    array(
                                        'taxonomy' 	=> $taxonomy,
                                        'field' 	=> 'term_id',
                                        'terms' 	=> $child->term_id
                                    )
                                )
                            );
                            $count = count( get_posts( $args ) );
                            //wp_reset_postdata();
                            echo '<option value="' . get_term_link( $child->term_id, $taxonomy ) . '">' . $child->name . ' ('. $count .')</option>';
                        @endphp
                    @endforeach
                </select>
            </div>
            @php
                $column -= 3; 
                $child_pl = 'pl-sm-0'; 
            @endphp
        @endif
	
		<!-- search textbox -->
		<div class="{{ isset( $child_pl ) ? $child_pl : '' }} col-sm-{{ $column }}">
			<input type="hidden" class="option-typeahead" value="{{ $current_term->term_id }}" />
			<input type="hidden" name="term" value="{{ get_query_var( 'term' ) }}" />
			<input type="hidden" name="type" value="organization_type" />
			<input type="hidden" name="post_type" value="organization" />
			
			<div class="relative">
				<input name="s" value="{{ get_search_query() }}" placeholder="{{ __( 'Search', 'egov' ) }}" type="text" class="form-control" autocomplete="off" />
				<button class="btn btn-secondary" type="submit">{{ __( 'Search', 'egov' ) }}</button>
			</div>
		</div>
	</div>
</form>