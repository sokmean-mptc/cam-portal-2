@extends('layouts.app')

@section('content')
  <div class="container">
    @include('forms.search-organization')
  </div>
  @include('partials.page-header')

  @if (! have_posts())
  <div class="container">
    <x-alert type="warning">
      {!! __('Sorry, no results were found.', 'sage') !!}
    </x-alert>
  </div>
  @endif
  
  <div class="container mb-6">
    <section class="section">
      <div class="collapsible">
          @while(have_posts()) @php(the_post())
            @includeFirst(['partials.content-' . get_post_type(), 'partials.content'])
          @endwhile
      </div>
    </section>
  </div>
  @include('partials.paginate-link')
@endsection