<header class="container d-lg-flex justify-content-between header">
  <figure class="d-flex m-0 align-items-center">
    <a class="mr-3" href="{{ home_url('/') }}">
        
        <picture>
          @if ( get_theme_mod( 'logo_large_setting_id' ) )                
            <source media="(min-width: 992px)" srcset="{{ wp_get_attachment_url( get_theme_mod( 'logo_large_setting_id' ) ) }}" type="image/jpeg">
          @else
            <source media="(min-width: 992px)" srcset="{{ get_stylesheet_directory_uri() }}/dist/images/cambodia-logo@3x.png" type="image/jpeg">
          @endif
          
          @if ( get_theme_mod( 'logo_medium_setting_id' ) )                
            <source media="(min-width: 768px)" srcset="{{ wp_get_attachment_url( get_theme_mod( 'logo_medium_setting_id' ) ) }}" type="image/jpeg">
          @else
            <source media="(min-width: 768px)" srcset="{{ get_stylesheet_directory_uri() }}/dist/images/cambodia-logo@2x.png" type="image/jpeg">
          @endif
          
          @if ( get_theme_mod( 'logo_small_setting_id' ) )                
            <source media="(max-width: 767px)" srcset="{{ wp_get_attachment_url( get_theme_mod( 'logo_small_setting_id' ) ) }} 1x, {{ wp_get_attachment_url( get_theme_mod( 'logo_medium_setting_id' ) ) }} 2x" type="image/jpeg">
            <img src="{{ wp_get_attachment_url( get_theme_mod( 'logo_small_setting_id' ) ) }}" type="image/jpeg">
          @else
            <source media="(max-width: 767px)" srcset="{{ get_stylesheet_directory_uri() }}/dist/images/cambodia-logo@1x.png 1x, {{ get_stylesheet_directory_uri() }}/dist/images/cambodia-logo@2x.png 2x" type="image/jpeg">
            <img src="{{ get_stylesheet_directory_uri() }}/dist/images/cambodia-logo@1x.png" type="image/jpeg">
          @endif
      </picture>
    </a>
    <figcaption class="title mt-0">
      <h2 class="site-title">{{ $siteName }}</h2>
      <span class="sub-title">{{ bloginfo('description') }}</span>
      {{-- @if ( function_exists( "get_sites" ) )
        @php
          $subsites = get_sites( array( 'public' => 1, 'site__not_in' => get_current_blog_id() ) );
        @endphp
        <div class="dropdown text-left">
          <a id="my-dropdown" class="tagline dropdown-toggle" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">{{ __("Other Provincial websites", "sage") }}</a>
          <div class="dropdown-menu" aria-labelledby="my-dropdown">
          @foreach( $subsites as $subsite )
            @php
              $subsite_id = get_object_vars($subsite)["blog_id"];
              $subsite_name = get_blog_details($subsite_id)->blogname;
            @endphp
            <a class="dropdown-item" href="http://{{ $subsite->domain }}">{{ $subsite_name }}</a>
          @endforeach
          </div>
        </div>  
      @endif --}}
    </figcaption>
    <nav class="navbar ml-auto d-block d-lg-none">
      <button class="my-2 navbar-toggler navbar-toggler-right text-white nav-icon collapsed" type="button" data-toggle="collapse" data-target="#main-menu" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
          <div></div>
      </button>
    </nav>
  </figure>
  <div class="d-none d-lg-block">
    @if ( has_nav_menu( 'social_menu' ) )
      <ul class="d-flex justify-content-center align-items-center social">
        {!! 
          wp_nav_menu( 
            array(
                'theme_location' => 'social_menu',
                'container' => false,
                'items_wrap' => '%3$s'
            )
          ) 
        !!}
      </ul>
    @endif
  </div>
</header>

@if ( has_nav_menu( 'main_menu' ) )
<nav class="navbar navbar-expand-lg navbar-light p-0">
  <div class="container">
    <div class="collapse navbar-collapse" id="main-menu">
      
      {!! 
        wp_nav_menu( 
          array(
            'theme_location' => 'main_menu',
            'container' => false
          )
        ) 
      !!}
      
    </div>
  </div>
</nav>
@endif
@if ( get_theme_mod( 'theme_color_setting' ) ) 
<style type="text/css">
  .primary-bg-color img { background-color: {{get_theme_mod( 'theme_color_setting' )}}; }
  .block-topic article figure img { border-radius: 50%; background-color: {{get_theme_mod( 'theme_color_setting' )}}; }
  .primary-color,
  .service-detail .scrollspy-content .list-title > *,
  .header .title .site-title,
  .header .title .sub-title,
  .header .title .tagline,
  .header .social li .a,
  footer .social li .a,
  footer .footer-nabar li a,
  .block-heading h4,
  .navbar ul.menu > li > a,
  .block-heading h4 * { color: {{get_theme_mod( 'theme_color_setting' )}} !important;}

  .header .title .dropdown-menu { border-bottom-color: {{get_theme_mod( 'theme_color_setting' )}}; }

  .service-detail .list-group .list-group-item.active { border-left-color: {{get_theme_mod( 'theme_color_setting' )}}; }

  .navbar.navbar-light ul.menu > li > a:hover,
  .navbar.navbar-light ul.menu > li.current-menu-item > a, 
  .navbar.navbar-light ul.menu > li.current-post-ancestor > a, 
  .navbar.navbar-light ul.menu > li.current-menu-ancestor > a { border:none; background-color: {{get_theme_mod( 'theme_color_setting' )}}; color: #fff !important; }
  .header .social li a,
  footer .social li a,
  .main-slideshow .slick-list .slick-track figure figcaption,
  .main-slideshow ul.slick-dots li.slick-active button,
  .bg-primary,
  .btn-primary,
  .navbar .navbar-toggler{ background-color: {{get_theme_mod( 'theme_color_setting' )}} !important; }

  .scroll-to-top a,
  .main-slideshow ul.slick-dots li button { border-color: {{get_theme_mod( 'theme_color_setting' )}} !important; }
</style>
@endif
<style type="text/css">
  .service-detail .list-group .list-group-item,
  .block-topic a,
  .service-detail a {color: #333;}
  .pagination.light .nav-links .page-numbers { color: #333; }
  .header .title .site-title { font-size: 44px; font-weight: bold; font-family: 'Koh-Santepheap-Body';}
  .header .title .sub-title { font-size: 22px; }
  .navbar ul.menu > li > a i { font-size: 25px; }
  /*desktop screen*/
  @media (min-width: 992px) {
      /*level 1*/
      .navbar ul.menu > li { padding: 0px; margin-right: 0px; display: inline-block; }
      .navbar ul.menu > li > a { color: #555; font-size: 18px; padding: 15px; }
      /*level 1 on hover*/
      .navbar ul.menu > li > a:hover { color: #000; border-bottom: 2px solid #0956AE; }
      /*level 1 on active*/
      .navbar ul.menu > li.current-menu-item > a,
      .navbar ul.menu > li.current-post-ancestor > a,
      .navbar ul.menu > li.current-menu-ancestor > a { border-bottom: 2px solid #0956AE; color: #000; }
      /*level 1 dropdown arrow color*/
      .navbar ul.menu > li.menu-item-has-children > a::after { border-top-color: rgba(0, 0, 0, 0.1); }
      /*level 1 dropdown arrow color on active*/
      .navbar ul.menu > li.menu-item-has-children.current-menu-item > a::after,
      .navbar ul.menu > li.menu-item-has-children.current-menu-ancestor > a::after,
      .navbar ul.menu > li.menu-item-has-children.current-post-ancestor > a::after { border-top-color: #fff; }
      
      /*nex level*/
      .navbar ul.menu li ul > li { padding-left: 20px; }
      .navbar ul.menu li ul { background-color: #F5F6FA; min-width: 220px; }
      .navbar ul.menu li ul li a { color: #343a40; font-size: 17px; padding-top: 10px; padding-bottom: 10px;}
      /*next level on active */
      .navbar ul.menu li ul li.current-menu-item > a { font-weight: bold; }
      .navbar ul.menu li ul li.current-menu-item > a,
      .navbar ul.menu li ul li.current-menu-ancestor > a,
      .navbar ul.menu li ul li.current-post-ancestor > a,
      .navbar ul.menu li ul li a:hover { color: #343a40; }
      /*next level dropdown arrow color*/
      .navbar ul.menu li ul li.menu-item-has-children > a::after { border-left-color: rgba(0, 0, 0, 0.1); }
      /*next level dropdown arrow color on active*/
      .navbar ul.menu li ul li.menu-item-has-children.current-menu-item > a::after,
      .navbar ul.menu li ul li.menu-item-has-children.current-menu-ancestor > a::after,
      .navbar ul.menu li ul li.menu-item-has-children.current-post-ancestor > a::after { border-left-color: rgba(0, 0, 0, 0.1); }
  }
  /* medium devices (tablets, 768px and up) */
  @media (min-width: 768px) and (max-width: 1024px) {
    .header .title .site-title { font-size: 34px; }
    .header .title .sub-title { font-size: 18px; }
      .navbar ul.menu > li > a {
          font-size: 16px;
      }
  }
  /* medium devices (tablets, 768px and up) */
  @media (min-width: 0px) and (max-width: 991.98px) {
      .header .title .site-title { font-size: 30px;}
      .header .title .sub-title { font-size: 16px; }
      /*level 1*/
      .navbar ul.menu > li > a { color: #343a40; font-size: 16px; }
      /*level 1 on active*/
      .navbar ul.menu li.current-menu-item > a,
      .navbar ul.menu li.current-post-ancestor > a,
      .navbar ul.menu li.current-menu-ancestor > a { background-color: transparent; color: #343a40; font-weight: bold;}
      /*level 1 dropdown arrow color*/
      .navbar ul.menu > li.menu-item-has-children > a::after { border-top-color: rgba(0, 0, 0, 0.1); }
      /*level 1 dropdown arrow color on active*/
      .navbar ul.menu > li.menu-item-has-children.current-menu-item > a::after,
      .navbar ul.menu > li.menu-item-has-children.current-menu-ancestor > a::after,
      .navbar ul.menu > li.menu-item-has-children.current-post-ancestor > a::after { border-top-color: rgba(0, 0, 0, 0.1); }

      /*nex level*/
      .navbar ul.menu li ul { background-color: #F5F6FA; min-width: 220px; }
      .navbar ul.menu li ul li a { color: #343a40; font-size: 15px; padding-top: 10px; padding-bottom: 10px; padding-left: 20px; padding-right: 20px; }
      /*next level on active */
      .navbar ul.menu li ul li.current-menu-item > a,
      .navbar ul.menu li ul li.current-menu-ancestor > a,
      .navbar ul.menu li ul li.current-post-ancestor > a,
      .navbar ul.menu li ul li a:hover { color: #343a40; background-color: transparent; font-weight: bold; }
      /*next level dropdown arrow color*/
      .navbar ul.menu li ul li.menu-item-has-children > a::after { border-top-color: rgba(0, 0, 0, 0.1); }
      /*next level dropdown arrow color on active*/
      .navbar ul.menu li ul li.menu-item-has-children.current-menu-item > a::after,
      .navbar ul.menu li ul li.menu-item-has-children.current-menu-ancestor > a::after,
      .navbar ul.menu li ul li.menu-item-has-children.current-post-ancestor > a::after { border-top-color: rgba(0, 0, 0, 0.1); }
  }
  </style>

  