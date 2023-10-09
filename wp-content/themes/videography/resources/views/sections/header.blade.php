<!-- Header Section Begin -->
<header class="header {{ is_admin_bar_showing() ? 'adminBar' : '' }}">
    <div class="container">
        <div class="row">
            <div class="col-lg-2">
                <div class="header__logo">
                    @if (isset($siteLogo))
                        <a class="brand" href="{{ home_url('/') }}">
                            {!! wp_get_attachment_image($siteLogo) !!}
                        </a>
                    @else
                        <a class="brand" href="{{ home_url('/') }}">
                            {!! $siteName !!}
                        </a>
                    @endif
                </div>
            </div>
            <div class="col-lg-10">
                <div class="header__nav__option">
                    @if (has_nav_menu('primary_navigation'))
                        <nav class="header__nav__menu mobile-menu"
                            aria-label="{{ wp_get_nav_menu_name('primary_navigation') }}">
                            {!! wp_nav_menu(['theme_location' => 'primary_navigation', 'menu_class' => 'nav', 'echo' => false]) !!}
                        </nav>
                    @endif
                    <div class="header__nav__social">
                        <a href="#"><i class="fa fa-facebook"></i></a>
                        <a href="#"><i class="fa fa-twitter"></i></a>
                        <a href="#"><i class="fa fa-dribbble"></i></a>
                        <a href="#"><i class="fa fa-instagram"></i></a>
                        <a href="#"><i class="fa fa-youtube-play"></i></a>
                    </div>
                </div>
            </div>
        </div>
        <div id="mobile-menu-wrap"></div>
    </div>
</header>
<!-- Header End -->
