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

  <div class="container block-list">
    @while(have_posts()) @php(the_post())
      @includeFirst(['partials.content-' . get_post_type(), 'partials.content'])
    @endwhile
  </div>
  @include('partials.paginate-link')
@endsection

