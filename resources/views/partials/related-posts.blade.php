@php
    global $post;
    $related = get_posts( array( 'category__in' => wp_get_post_categories($post->ID), 'numberposts' => 10, 'post__not_in' => array($post->ID) ) );    
@endphp
@if( $related ) 
    @foreach( $related as $post )
        @php( setup_postdata($post) )
        <ul class="list-unstyled"> 
            <li>
                <a href="{{ get_the_permalink() }}" rel="bookmark" title="{{ get_the_title() }}">{{ get_the_title() }}</a>
            </li>
        </ul>   
    @endforeach
    @php( wp_reset_postdata() )
@endif