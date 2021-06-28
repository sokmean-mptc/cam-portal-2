@php
    global $post;
    $related = get_posts( array( 'category__in' => wp_get_post_categories($post->ID), 'numberposts' => 10, 'post__not_in' => array($post->ID) ) );    
@endphp
@if( $related ) 
<div class="block-list mt-5">
    @foreach( $related as $post )
    <article class="wrap-item hrb mb-4" @php post_class() @endphp>
        @php( setup_postdata($post) )
        <h5 class="title">
            <a class="text-dark" href="{{ get_the_permalink() }}" rel="bookmark" title="{{ get_the_title() }}">{{ get_the_title() }}</a>
        </h5>
        <div class="excerpt text-secondary">
            {!! mb_strimwidth( get_the_excerpt(), 0, 400, '...') !!}
        </div>
        <div class="meta text-secondary">
            @include('partials.entry-meta')
        </div>
    </article>
    @endforeach
    @php( wp_reset_postdata() )
</div>
@endif
