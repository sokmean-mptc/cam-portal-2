@extends('layouts.app')

@section('content')
  <div class="container">
    @include('forms.search-organization')
  </div>
  @include('partials.page-header')

  @if (! have_posts())
    <x-alert type="warning">
      {!! __('Sorry, no results were found.', 'egov') !!}
    </x-alert>
  @endif

  <div class="container">
    <section class="section">
      <div class="collapsible">
        <ul>
          @while(have_posts()) @php(the_post())
            @includeFirst(['partials.content-' . get_post_type(), 'partials.content'])
          @endwhile
        </ul>
      </div>
    </section>
  </div>
  @include('partials.paginate-link')
@endsection