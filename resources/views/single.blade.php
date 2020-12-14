@extends('layouts.app')

@section('content')
  {!! get_search_form(false) !!}
  @while(have_posts()) @php(the_post())
    @includeFirst(['partials.content-single-' . get_post_type(), 'partials.content-single'])
  @endwhile
@endsection
