@extends('layouts.app')

@section('content')
  {!! get_search_form(false) !!}
  @include('partials.page-header')

  @if (! have_posts())
  <div class="container">
    <x-alert type="warning">
      {!! __('Sorry, no results were found.', 'sage') !!}
    </x-alert>
  </div>
  @endif

  <div class="container block-list match-search" data-id="block-list-01" data-match="{{ get_search_query() }}">
    @while(have_posts()) @php(the_post())
      @include('partials.content-search')
    @endwhile
  </div>
  @include('partials.paginate-link')
@endsection
