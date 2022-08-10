<!-- start page-wrapper -->
<div class="page-wrapper">

    <!-- start preloader -->
    <div class="preloader">
        <div class="preloader-inner">
            <img src="{{ asset('uploads/settings/'.@Helper::GeneralSiteSettings("style_preload")) }}" alt>
        </div>
    </div>
    <!-- end preloader -->

    <!-- Start header -->
    <header id="header" class="site-header header-style-5">
        <div class="topbar topbar-style-2">
            <div class="container">
                <div class="row">
                    <div class="col col-sm-7">
                        <div class="topbar-contact-info-wrapper">
                            <div class="topbar-contact-info">
                                <div>
                                    <i class="fa fa-location-arrow"></i>
                                    <div class="details">
                                        <p>{{ @Helper::GeneralSiteSettings("contact_address") }}</p>
                                    </div>
                                </div>
                                <div>
                                    <i class="fa fa-phone"></i>
                                    <div class="details">
                                        <p>{{ @Helper::GeneralSiteSettings("contact_landline") }} / {{ @Helper::GeneralSiteSettings("contact_mobile") }}</p>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col col-sm-5">
                        <div class="social">
                            <span>Follow: </span>
                            <ul class="social-links">
                                <li><a href="{{ @Helper::GeneralSiteSettings("fb_link") }}"><i class="fa fa-facebook"></i></a></li>
                                <li><a href="{{ @Helper::GeneralSiteSettings("twitter_link") }}"><i class="fa fa-twitter"></i></a></li>
                                <li><a href="{{ @Helper::GeneralSiteSettings("linkedin_link") }}"><i class="fa fa-linkedin"></i></a></li>
                                <li><a href="{{ @Helper::GeneralSiteSettings("youtube_link") }}"><i class="fa fa-youtube-play"></i></a></li>
                                <li><a href="{{ @Helper::GeneralSiteSettings("google_link") }}"><i class="fa fa-google"></i></a></li>
                            </ul>
                        </div>
                    </div>
                </div>
            </div> <!-- end container -->
        </div> <!-- end topbar -->

        <div class="lower-topbar">
            <div class="container">
                <div class="row">
                    <div class="col col-sm-3">
                        <div class="site-logo">
                            <a href="{{ route('front.home') }}">
                                <img src="{{ asset('uploads/settings/'.@Helper::GeneralSiteSettings("style_logo")) }}" alt>
                            </a>
                        </div>
                    </div>
                    <div class="col col-sm-9">
                        <div class="awards">
                            <div>
                                <div class="icon"><i class="fi flaticon-title"></i></div>
                                <div class="award-info">
                                    <h4>Global Certified</h4>
                                    <p>ISO 9001:2016</p>
                                </div>
                            </div>
                            <div>
                                <div class="icon"><i class="fi flaticon-medal"></i></div>
                                <div class="award-info">
                                    <h4>Winner</h4>
                                    <p>Construction award 2016</p>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- end lower-topbar -->

        <nav class="navigation navbar navbar-default">
            <div class="container">
                <div class="navbar-header">
                    <button type="button" class="open-btn">
                        <span class="sr-only">Toggle navigation</span>
                        <span class="icon-bar"></span>
                        <span class="icon-bar"></span>
                        <span class="icon-bar"></span>
                    </button>
                </div>
                <div id="navbar" class="navbar-collapse collapse navigation-holder">
                    <button class="close-navbar"><i class="fa fa-close"></i></button>
                    <ul class="nav navbar-nav">
                        <?php
                        $menus = @Helper::menusList();
                        ?>
                        @foreach($menus as $menu)
                            @if(count($menu->childs) == 0)
                                <li><a href="{{ url('/'.$menu->url) }}"> {{ $menu->title }}</a></li>
                            @else
                                <li class="menu-item-has-children">
                                    <a href="#">{{ $menu->title }}</a>
                                    <ul class="sub-menu">
                                        @foreach($menu->childs as $child)
                                            <li><a href="{{ url('/'.$child->url) }}">{{ $child->title }}</a></li>
                                        @endforeach
                                    </ul>
                                </li>
                            @endif
                        @endforeach
                    </ul>
                </div><!-- end of nav-collapse -->
            </div><!-- end of container -->
        </nav> <!-- end navigation -->
    </header>
    <!-- end of header -->
