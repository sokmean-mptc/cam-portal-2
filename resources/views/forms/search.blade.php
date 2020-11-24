
<section class="container">
  <div class="form-search mt-5">
      <form role="search" action="{{ home_url('/') }}" method="get">
          <div class="input-field input-group">
              <input type="search" class="text-field form-control" name="s" value="{{ get_search_query() }}" placeholder="{{ __("Search All Government", "egov") }}" />
              <div class="input-group-append">
                  <button type="submit" class="submit-field btn btn-primary"><span class="d-none d-md-inline">{{ __("Search", "egov") }}</span> <i class="icofont-search"></i></button>
              </div>
          </div>
      </form>
      {{-- <ul>
          <li>
              <label>Popular Keywords:</label>
              <ul>
                  <li><a href="service-detail.html">driver's license</a></li>
                  <li><a href="service-detail.html">free health service</a></li>
                  <li><a href="service-detail.html">birth registration</a></li>
              </ul>
          </li>
      </ul> --}}
  </div>
</section>