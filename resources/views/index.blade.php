@extends('layouts.app')

@section('content')
  {!! get_search_form(false) !!}
  @include('partials.page-header')

  @if (! have_posts())
    <x-alert type="warning">
      {!! __('Sorry, no results were found.', 'egov') !!}
    </x-alert>
  @endif

  <div class="container block-list">
    @while(have_posts()) @php(the_post())
      @includeFirst(['partials.content-' . get_post_type(), 'partials.content'])
    @endwhile
  </div>
  {{-- {!! get_the_posts_navigation() !!} --}}
  @include('partials.paginate-link')
@endsection

