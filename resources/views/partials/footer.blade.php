<footer>
  <div class="container">
    <nav class="d-md-flex justify-content-between"> 
        
        @if ( has_nav_menu( 'social_menu' ) )
        <ul class="d-flex justify-content-center social">
          {{-- <li>{{ __( 'Follow Us', 'sage' ) }}</li> --}}
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
        @if ( has_nav_menu( 'footer_menu' ) )
            {!! 
                wp_nav_menu( 
                array(
                    'theme_location' => 'footer_menu',
                    'container' => false,
                    'menu_class' => 'd-flex justify-content-center footer-nabar'
                )
                ) 
            !!}
        @endif
    </nav>
  </div>


  <div class="container text-center">
    <small class="copyright primary-color">@php(dynamic_sidebar('sidebar-copyright'))</small>
  </div>
</footer>
<div class="scroll-to-top">
  <a href="#body"><i class="icofont-arrow-up"></i></i></a>
</div>
<!-- Go to www.addthis.com/dashboard to customize your tools -->
<script type="text/javascript" src="//s7.addthis.com/js/300/addthis_widget.js#pubid=ra-5094a6d148768b69"></script>
