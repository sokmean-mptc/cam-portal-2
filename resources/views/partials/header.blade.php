<header class="container d-lg-flex justify-content-between header">
  <figure class="d-flex m-0">
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
    <figcaption class="title">
        <h2 class="site-title">{{ $siteName }}</h2>
        @if ( function_exists( "get_sites" ) )
          <div class="dropdown text-left">
            <a id="my-dropdown" class="tagline dropdown-toggle" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">{{ __("រដ្ឋបាលខេត្តផ្សេងទៀត", "egov") }}</a>
            <div class="dropdown-menu" aria-labelledby="my-dropdown">
                <a class="dropdown-item active" href="#">រដ្ឋបាលខេត្តស្ទឹងត្រែង</a>
                <a class="dropdown-item" href="#">រដ្ឋបាលខេត្តសៀមរាប</a>
                <a class="dropdown-item" href="#">រដ្ឋបាលខេត្តព្រះសីហនុ</a>
                <a class="dropdown-item" href="#">រដ្ឋបាលខេត្តបាត់ដំបង</a>
                <a class="dropdown-item" href="#">រដ្ឋបាលខេត្តកំពង់ចាម</a>
                <a class="dropdown-item" href="#">រដ្ឋបាលខេត្តកណ្តាល</a>
                <a class="dropdown-item" href="#">រដ្ឋបាលខេត្តស្ទឹងត្រែង</a>
                <a class="dropdown-item" href="#">រដ្ឋបាលខេត្តសៀមរាប</a>
                <a class="dropdown-item" href="#">រដ្ឋបាលខេត្តព្រះសីហនុ</a>
                <a class="dropdown-item" href="#">រដ្ឋបាលខេត្តបាត់ដំបង</a>
                <a class="dropdown-item" href="#">រដ្ឋបាលខេត្តកំពង់ចាម</a>
                <a class="dropdown-item" href="#">រដ្ឋបាលខេត្តកណ្តាល</a>
                <a class="dropdown-item" href="#">រដ្ឋបាលខេត្តស្ទឹងត្រែង</a>
                <a class="dropdown-item" href="#">រដ្ឋបាលខេត្តសៀមរាប</a>
                <a class="dropdown-item" href="#">រដ្ឋបាលខេត្តព្រះសីហនុ</a>
                <a class="dropdown-item" href="#">រដ្ឋបាលខេត្តបាត់ដំបង</a>
                <a class="dropdown-item" href="#">រដ្ឋបាលខេត្តកំពង់ចាម</a>
                <a class="dropdown-item" href="#">រដ្ឋបាលខេត្តកណ្តាល</a>
                <a class="dropdown-item" href="#">រដ្ឋបាលខេត្តស្ទឹងត្រែង</a>
                <a class="dropdown-item" href="#">រដ្ឋបាលខេត្តសៀមរាប</a>
                <a class="dropdown-item" href="#">រដ្ឋបាលខេត្តព្រះសីហនុ</a>
                <a class="dropdown-item" href="#">រដ្ឋបាលខេត្តបាត់ដំបង</a>
                <a class="dropdown-item" href="#">រដ្ឋបាលខេត្តកំពង់ចាម</a>
                <a class="dropdown-item" href="#">រដ្ឋបាលខេត្តកណ្តាល</a>
            </div>
          </div>  
        @endif
        
    </figcaption>
    <nav class="navbar ml-auto">
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

<style type="text/css">
  /* custom theme options default for navbar */
  /* .navbar { background-color: #f8f9fa; } */
  .navbar .navbar-toggler { background-color: #0956AE;; }
  /*desktop screen*/
  @media (min-width: 992px) {
      /*level 1*/
      .navbar ul.menu > li > a { margin-right:15px; color: #555; font-size: 18px; padding-top: 15px; padding-bottom: 15px; }
      /*level 1 on hover*/
      .navbar ul.menu > li > a:hover { color: #000; border-bottom: 2px solid #0956AE; }
      /*level 1 on active*/
      .navbar ul.menu > li.current-menu-item > a,
      .navbar ul.menu > li.current-post-ancestor > a,
      .navbar ul.menu > li.current-menu-ancestor > a { border-bottom: 2px solid #0956AE;; color: #000; }
      /*level 1 dropdown arrow color*/
      .navbar ul.menu > li.menu-item-has-children > a::after { border-top-color: rgba(0, 0, 0, 0.1); }
      /*level 1 dropdown arrow color on active*/
      .navbar ul.menu > li.menu-item-has-children.current-menu-item > a::after,
      .navbar ul.menu > li.menu-item-has-children.current-menu-ancestor > a::after,
      .navbar ul.menu > li.menu-item-has-children.current-post-ancestor > a::after { border-top-color: #fff; }
      
      /*nex level*/
      .navbar ul.menu li ul { background-color: #F5F6FA; min-width: 220px; }
      .navbar ul.menu li ul li a { color: #343a40; font-size: 17px; padding-top: 10px; padding-bottom: 10px;}
      /*next level on active */
      .navbar ul.menu li ul li.current-menu-item > a,
      .navbar ul.menu li ul li.current-menu-ancestor > a,
      .navbar ul.menu li ul li.current-post-ancestor > a,
      .navbar ul.menu li ul li a:hover { color: #343a40; background-color: rgba(0, 0, 0, 0.1); }
      /*next level dropdown arrow color*/
      .navbar ul.menu li ul li.menu-item-has-children > a::after { border-left-color: rgba(0, 0, 0, 0.1); }
      /*next level dropdown arrow color on active*/
      .navbar ul.menu li ul li.menu-item-has-children.current-menu-item > a::after,
      .navbar ul.menu li ul li.menu-item-has-children.current-menu-ancestor > a::after,
      .navbar ul.menu li ul li.menu-item-has-children.current-post-ancestor > a::after { border-left-color: rgba(0, 0, 0, 0.1); }
  }
  /* medium devices (tablets, 768px and up) */
  @media (min-width: 768px) and (max-width: 1024px) {
      .navbar ul.menu > li > a {
          font-size: 16px;
          padding-left: 15px;
          padding-right: 15px;
      }
  }
  /* medium devices (tablets, 768px and up) */
  @media (min-width: 0px) and (max-width: 991.98px) {
      /*level 1*/
      .navbar ul.menu > li > a { color: #343a40; font-size: 16px; padding-top: 10px; padding-bottom: 10px; }
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