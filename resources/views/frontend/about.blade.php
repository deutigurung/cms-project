@extends('frontend.layout')
@section('section')
    <!-- start page-title -->
    <section class="page-title">
        <div class="container">
            <div class="row">
                <div class="col col-xs-12">
                    <h2>About us</h2>
                    <ol class="breadcrumb">
                        <li><a href="{{ route('front.home') }}">Home</a></li>
                        <li>About us</li>
                    </ol>
                </div>
            </div> <!-- end row -->
        </div> <!-- end container -->
    </section>
    <!-- end page-title -->

    <!-- start offer -->
    <section class="section-padding offer-section">
        <div class="container">
            <div class="row">
                <div class="col col-md-5">
                    <div class="section-title-s3">
                        <h2>Get full range of premium Industrial services for your business</h2>
                    </div>
                    <div class="offer-text">
                        {!! $About->description !!}
                        @if(!is_null($About->attach_file))
                            <a href="#" class="theme-btn read-more">Download</a>
                        @endif
                    </div>
                </div>
                <div class="col col-md-7">
                    <div class="offer-pic">
                        <img src="{{ asset('uploads/pages/'.$About->image) }}" alt>
                    </div>
                </div>
            </div> <!-- end row -->
        </div> <!-- end container -->
    </section>
    <!-- end offer -->

    <!-- start cta -->
    <section class="cta section-padding parallax" data-bg-image="assets/images/cta-bg.jpg">
        <div class="container">
            <div class="row">
                <div class="col col-xs-12">
                    <h2>Our one and only priority is the <span>customer satisfaction</span></h2>
                </div>
            </div>
        </div> <!-- end container -->
    </section>
    <!-- end cta -->

    <!-- start features -->
    <section class="features section-padding">
        <div class="container">
            <div class="row">
                <div class="col col-md-3">
                    <div class="features-title">
                        <h2>Why we are best</h2>
                        <p></p>
                    </div>
                </div>
                <div class="col col-md-3 col-sm-4">
                    <div class="feature-grid">
                        <div class="icon">
                            <i class="fi flaticon-people"></i>
                        </div>
                        <div class="details">
                            <h3>Expert Engineers</h3>
                            <p>Sed quia non numquam eius modi tempo ra incidunt ut labore et dolore magnam aliq uam quaera.</p>
                            <a href="#" class="more">Details <i class="fa fa-angle-right"></i></a>
                        </div>
                    </div>
                </div>
                <div class="col col-md-3 col-sm-4">
                    <div class="feature-grid">
                        <div class="icon">
                            <i class="fi flaticon-support"></i>
                        </div>
                        <div class="details">
                            <h3>Customer Support</h3>
                            <p>Sed quia non numquam eius modi tempo ra incidunt ut labore et dolore magnam aliq uam quaera.</p>
                            <a href="#" class="more">Details <i class="fa fa-angle-right"></i></a>
                        </div>
                    </div>
                </div>
                <div class="col col-md-3 col-sm-4">
                    <div class="feature-grid">
                        <div class="icon">
                            <i class="fi flaticon-time-passing"></i>
                        </div>
                        <div class="details">
                            <h3>Delivery On time</h3>
                            <p>Sed quia non numquam eius modi tempo ra incidunt ut labore et dolore magnam aliq uam quaera.</p>
                            <a href="#" class="more">Details <i class="fa fa-angle-right"></i></a>
                        </div>
                    </div>
                </div>
            </div>
        </div> <!-- end container -->
    </section>
    <!-- end features -->

    <!-- start our-team -->
    <section class="our-team our-team-bg section-padding">
        <div class="container">
            <div class="row">
                <div class="col col-md-8 col-md-offset-2">
                    <div class="section-title-s5">
                        <h2>Our team</h2>
                        <p></p>
                    </div>
                </div>
            </div> <!-- end row -->

            <div class="row">
                <div class="col col-lg-10 col-lg-offset-1">
                    <div class="team-slider team-grids">
                        @foreach($Teams as $team)
                            <div class="team-grid">
                            <div class="member-pic-social square-hover-effect-parent">
                                <div class="square-hover-effect">
                                    <span class="hover-1"></span>
                                    <span class="hover-2"></span>
                                    <span class="hover-3"></span>
                                    <span class="hover-4"></span>
                                </div>
                                <div class="member-pic">
                                    <img src="{{ asset('uploads/teams/'.$team->photo) }}" alt>
                                </div>
                                <div class="social">
                                    <ul class="social-links">
                                        <li><a href="#"><i class="fa fa-facebook"></i></a></li>
                                        <li><a href="#"><i class="fa fa-twitter"></i></a></li>
                                        <li><a href="#"><i class="fa fa-linkedin"></i></a></li>
                                    </ul>
                                </div>
                            </div>
                            <div class="member-info">
                                <h3>{{ $team->title }}</h3>
                                <p>{{ $team->designation }}</p>
                            </div>
                        </div>
                        @endforeach
                    </div>
                </div>
            </div>

        </div> <!-- end container -->
    </section>
    <!-- end our-team -->

    <!-- start fun-fact -->
    <section class="fun-fact">
        <div class="container">
            <div class="row start-count">
                <div class="col col-sm-4">
                    <div class="grid">
                        <h3><span class="counter" data-count="1200">00</span><span>+</span></h3>
                        <span class="fact-title">Projects</span>
                        <p>inventore veritatis et quasi architecto beatae vitae dicta sunt explicabo. Nemo enim ipsam</p>
                    </div>
                </div>
                <div class="col col-sm-4">
                    <div class="grid">
                        <h3><span class="counter" data-count="800">00</span><span>+</span></h3>
                        <span class="fact-title">Clients</span>
                        <p>inventore veritatis et quasi architecto beatae vitae dicta sunt explicabo. Nemo enim ipsam</p>
                    </div>
                </div>
                <div class="col col-sm-4">
                    <div class="grid">
                        <h3><span class="counter" data-count="99.5">00</span><span>%</span></h3>
                        <span class="fact-title">satisfaction</span>
                        <p>inventore veritatis et quasi architecto beatae vitae dicta sunt explicabo. Nemo enim ipsam</p>
                    </div>
                </div>
            </div>
        </div> <!-- end container -->
    </section>
    <!-- end fun-fact -->

    <!-- start partners -->
    <section class="section-padding partners partners-bg">
        <h2 class="hidden">Partners</h2>
        <div class="container">
            <div class="row">
                <div class="col col-xs-12">
                    <div class="partners-slider">
                        @foreach($Partners as $Partner)
                            <div class="grid">
                                <img src="{{ asset('uploads/partners/'.$Partner->image) }}" alt="">
                            </div>
                        @endforeach
                    </div>
                </div>
            </div> <!-- end row -->
        </div> <!-- end container -->
    </section>
    <!-- end partners -->

@endsection
