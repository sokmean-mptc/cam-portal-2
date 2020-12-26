@extends('layouts.app')

@section('content')
  @include('partials.page-header')

  @if (! have_posts())
  <div class="container mb-5">
    <x-alert type="warning">
      {!! __('Sorry, but the page you are trying to view does not exist.', 'sage') !!}
    </x-alert>
  </div>
    {!! get_search_form(false) !!}
  @endif
@endsection
