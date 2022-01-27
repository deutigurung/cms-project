@extends('frontend.layout')
@section('section')
    <!-- start of hero -->
    <section class="hero hero-slider-wrapper">
        <div class="hero-slider hero-slider-style-1">
            @foreach($SliderBanners as $banner)
                <div class="slide">
                    <img src="{{ asset('uploads/banners/'.$banner->image) }}" alt class="slider-bg">
                    <div class="container">
                        <div class="row">
                            <div class="col col-lg-8 col-sm-9 slide-caption">
                                @if(!is_null($banner->description))
                                   <p>{{ strip_tags($banner->description) }}</p>
                                @endif
                                <div class="btns">
                                    <a href="#" class="theme-btn">About us</a>
                                    <a href="#" class="theme-btn-s2">Explore</a>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            @endforeach
        </div>
    </section>
    <!-- end of hero slider -->

    <!-- start of services -->
    <section class="section-padding">
        <div class="container">
            <div class="row">
                <div class="col col-lg-3 col-md-4">
                    <div class="section-title">
                        <h2>Our services</h2>
                    </div>
                </div>
                <div class="col col-lg-6 col-md-5">
                    <p></p>
                </div>
                <div class="col col-lg-3 col-md-3">
                    <div class="all-service-link">
                        <a href="{{ route('front.services') }}" class="theme-btn">All services</a>
                    </div>
                </div>
            </div> <!-- end row -->

            <div class="row">
                <div class="col col-xs-12">
                    <div class="services-grids service-slider dots-s1">
                        @foreach($Services as $service)
                            <div class="grid">
                                <div class="inner mk-bg-img">
                                    <div class="details ">
                                        <div class="info">
                                            <img src="{{ asset('uploads/services/'.$service->image) }}" alt class="bg-image">
                                            <a href="{{ route('front.serviceBySlug',$service->slug) }}">
                                                <h3><i class="fi flaticon-construction"></i> {{ $service->title }}</h3>
                                            </a>
                                            <p>{{ substr(strip_tags($service->description),0,50) }}...</p>
                                            <a href="{{ route('front.serviceBySlug',$service->slug) }}" class="more">Get Details</a>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        @endforeach
                    </div> <!-- end services-grids -->
                </div> <!-- end col -->
            </div> <!-- end row -->
        </div> <!-- end container -->
    </section>
    <!-- end of services -->

    <!-- start testimonials -->
    <section class="testimonials section-padding parallax" data-bg-image="{{ asset('frontend/images/testimonials/bg.jpg') }}">
        <div class="container">
            <div class="row">
                <div class="col col-xs-12">
                    <div class="testimonials-slider slider-arrow-s1">
                        @foreach($Testimonials as $Testimonial)
                            <div class="slide-item">
                                <div class="inner">
                                    <div class="client-quote">
                                        <p>{{ strip_tags($Testimonial->description) }}</p>
                                    </div>
                                    <div class="client-details">
                                        <div class="client-pic">
                                            <img src="{{ asset('uploads/testimonials/'.$Testimonial->image) }}" alt="">
                                        </div>
                                        <div class="client-info">
                                            <h4>{{ $Testimonial->name }}</h4>
                                            <span>{{ $Testimonial->designation }}</span>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        @endforeach
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- end testimonials -->

    <!-- start offer -->
    <section class="section-padding">
        <div class="container">
            <div class="row">
                <div class="col col-md-4">
                    <div class="section-title">
                        <h2>What we offer</h2>
                    </div>
                    <div class="offer-text">
                        <p>Lorem ipsum dolor sit amet, consectetur adipisc ing elit, sed do eiusmod tempor inci didunt ut labore et dolore magna.</p>
                        <p>Ut enim ad minima veniam, quis nostrum exercitationem ullam corporis suscipit laboriosam, nisi ut aliquid ex ea commodi consequatur</p>
                        <a href="#" class="theme-btn read-more">Read More</a>
                    </div>
                </div>
                <div class="col col-md-8">
                    <div class="offer-grids">
                        <div class="grid">
                            <div class="details">
                                <div class="icon">
                                    <i class="fi flaticon-construction"></i>
                                </div>
                                <h3>Advanced Technology</h3>
                                <p>Sed quia non numquam eius modi tempora incidunt ut labore et dolore magnam aliquam quaerat voluptatem.</p>
                                <a href="#" class="offer-details">Details <i class="fa fa-angle-right"></i></a>
                            </div>
                        </div>
                        <div class="grid">
                            <div class="details">
                                <div class="icon">
                                    <i class="fi flaticon-people"></i>
                                </div>
                                <h3>Expert Engineers</h3>
                                <p>Sed quia non numquam eius modi tempora incidunt ut labore et dolore magnam aliquam quaerat voluptatem.</p>
                                <a href="#" class="offer-details">Details <i class="fa fa-angle-right"></i></a>
                            </div>
                        </div>
                        <div class="grid">
                            <div class="details">
                                <div class="icon">
                                    <i class="fi flaticon-support"></i>
                                </div>
                                <h3>Customer Support</h3>
                                <p>Sed quia non numquam eius modi tempora incidunt ut labore et dolore magnam aliquam quaerat voluptatem.</p>
                                <a href="#" class="offer-details">Details <i class="fa fa-angle-right"></i></a>
                            </div>
                        </div>
                        <div class="grid">
                            <div class="details">
                                <div class="icon">
                                    <i class="fi flaticon-time-passing"></i>
                                </div>
                                <h3>Delivery On time</h3>
                                <p>Sed quia non numquam eius modi tempora incidunt ut labore et dolore magnam aliquam quaerat voluptatem.</p>
                                <a href="#" class="offer-details">Details <i class="fa fa-angle-right"></i></a>
                            </div>
                        </div>
                    </div>
                </div>
            </div> <!-- end row -->
        </div> <!-- end container -->
    </section>
    <!-- end offer -->

    <!-- recent-project -->
    <section class="recent-projects section-padding">
        <div class="container">
            <div class="row">
                <div class="col col-lg-8 col-lg-offset-2">
                    <div class="section-title-s2">
                        <h2>Recent Projects</h2>
                        <p></p>
                    </div>
                </div>
            </div> <!-- end row -->
        </div>

        <div class="row">
            <div class="col col-xs-12">
                <div class="recent-projects-grids">
                    @foreach($Projects as $project)
                        <div class="grid">
                            <div class="project-img">
                                <img src="{{ asset('uploads/projects/'.$project->image) }}" alt>
                            </div>
                            <div class="project-info">
                                <div class="inner-info">
                                    <a href="{{ route('front.projectBySlug',$project->slug) }}"><h3>{{ $project->title }}</h3></a>
                                    <div class="tags">{{ $project->service->title }}</div>
                                </div>
                            </div>
                        </div>
                    @endforeach
                </div>
            </div>
        </div>
    </section>
    <!-- end recent-project -->

    <!-- start about-us-faq -->
    <section class="section-padding about-us-faq">
        <div class="container">
            <div class="row">
                <div class="col col-lg-5">
                    <div class="about-us-section">
                        <div class="section-title-s3">
                            <span>About us</span>
                            <h2>Get full range of premium Industrial services for your business</h2>
                        </div>
                        <div class="details">
                            <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco.</p>
                            <p>laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident.</p>
                            <div class="btns">
                                <a href="#" class="theme-btn-s3">Read More</a>
                                <a href="#" class="theme-btn-s4">Company History</a>
                            </div>
                        </div>
                        <div class="social">
                            <p>Get Connected With Us:</p>
                            <ul class="social-links">
                                <li><a href="#"><i class="fa fa-facebook-square"></i></a></li>
                                <li><a href="#"><i class="fa fa-twitter-square"></i></a></li>
                                <li><a href="#"><i class="fa fa-instagram"></i></a></li>
                                <li><a href="#"><i class="fa fa-linkedin-square"></i></a></li>
                            </ul>
                        </div>
                    </div>
                </div>
                <div class="col col-lg-6 col-lg-offset-1">
                    <div class="faq-section">
                        <div class="section-title-s3">
                            <span>FAQ</span>
                            <h2>All these years, our different services have delivered long lasting innovation</h2>
                        </div>
                        <div class="details">
                            <p></p>
                            <div class="panel-group faq-accordion theme-accordion-s1" id="accordion">
                                @foreach($Faqs->slice(0,3) as $count =>$faq)
                                    <div class="panel panel-default">
                                        <div class="panel-heading">
                                            <a @if($count !== 0) class="collapsed" @endif data-toggle="collapse" data-parent="#accordion" href="#{{$faq->id}}" aria-expanded="true">{{ $faq->name }}</a>
                                        </div>
                                        <div id="{{$faq->id}}" class="panel-collapse collapse @if($count == 0) in @endif">
                                            <div class="panel-body">
                                                <p>{{ $faq->description }}</p>
                                            </div>
                                        </div>
                                    </div>
                                @endforeach
                                @if(count($Faqs) > 4)
                                    <div class="all-news-link">
                                        <a href="{{ route('front.faqs') }}" class="theme-btn">More Faqs</a>
                                    </div>
                                @endif
                            </div>
                        </div>
                    </div>
                </div>
            </div> <!-- end row -->
        </div> <!-- end container -->
        <div class="backhoe-loader">
            <img src="{{ asset('frontend/images/backhoe-loader.png') }}" alt="">
        </div>
    </section>
    <!-- end start about-us-faq -->

    <!-- start partners -->
    <section class="section-padding partners">
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

    <!-- start contact-section -->
    <section class="contact-section section-padding parallax" data-bg-image="{{ asset('frontend/images/contact-section-bg.jpg') }}">
        <div class="container">
            <div class="row">
                <div class="col col-md-4 col-md-offset-1 col-md-5">
                    <div class="contact-section-contact-box">
                        <div class="section-title-white">
                            <h2>Contact</h2>
                        </div>
                        <div class="details">
                            <p>For any kind of query, contact us with the details below.</p>
                            <ul>
                                <li><i class="fa fa-phone"></i> {{ @Helper::GeneralSiteSettings("contact_landline") }} /
                                    {{ @Helper::GeneralSiteSettings("contact_mobile") }}
                                </li>
                                <li><i class="fa fa-envelope"></i> {{ @Helper::GeneralSiteSettings("contact_email") }}</li>
                                <li><i class="fa fa-home"></i> {{ @Helper::GeneralSiteSettings("contact_address") }}</li>
                            </ul>
                        </div>
                    </div>
                </div>

                <div class="col col-lg-6 col-lg-offset-1 col-md-7">
                    <div class="section-title-white">
                        <h2>Request a quote</h2>
                    </div>
                    <p>Lorem ipsum dolor sit amet, consectetur adipi scing elit, sed do eiusmod tempor incidi dunt ut labore et dolore magna aliqua.</p>

                    <div class="contact-form-s1 form">
                        <form method="post" id="contact-form" class="wpcf7-form contact-validation-active">
                            <div>
                                <label for="name">Full Name</label>
                                <input type="text" id="name" name="name">
                            </div>
                            <div>
                                <label for="email">Email</label>
                                <input type="email" id="email" name="email">
                            </div>
                            <div>
                                <label for="phone">Phone Number</label>
                                <input type="text" id="phone" name="phone">
                            </div>
                            <div>
                                <label>Business Type</label>
                                <select name="select">
                                    <option selected disabled> -- Select One -- </option>
                                    <option value="Select One">Select One</option>
                                    <option value="Select Two">Select Two</option>
                                    <option value="Select Three">Select Three</option>
                                </select>
                            </div>
                            <div class="submit-btn-wrap">
                                <input value="Submit" class="theme-btn wpcf7-submit" type="submit">
                                <div id="loader">
                                    <i class="fa fa-refresh fa-spin fa-3x fa-fw"></i>
                                </div>
                            </div>
                            <div class="error-handling-messages">
                                <div id="success">Thank you</div>
                                <div id="error"> Error occurred while sending email. Please try again later. </div>
                            </div>
                        </form>
                    </div>
                </div>
            </div> <!-- end row -->
        </div> <!-- end container -->
        <div class="contact-women wow fadeInLeft">
            <img src="{{ asset('frontend/images/contact-women.png') }}" alt="">
        </div>
    </section>
    <!-- end contact-section -->

    <!-- news-section -->
    <section class="section-padding">
        <div class="container">
            <div class="row">
                <div class="col col-lg-3 col-md-4">
                    <div class="section-title">
                        <h2>Recent Blogs</h2>
                    </div>
                </div>
                <div class="col col-lg-6 col-md-5">
                    <p></p>
                </div>
                <div class="col col-lg-3 col-md-3">
                    <div class="all-news-link">
                        <a href="{{ route('front.blogs') }}" class="theme-btn">More Blogs</a>
                    </div>
                </div>
            </div> <!-- end row -->

            <div class="row">
                <div class="col col-xs-12">
                    <div class="news-grids">
                        @foreach($Blogs as $blog)
                            <div class="grid">
                                <div class="entry-media">
                                    <img src="{{ asset('uploads/blogs/'.$blog->image) }}" alt>
                                </div>
                                <div class="entry-details">
                                    <div class="entry-meta">
                                        <ul>
                                            <li><i class="fa fa-clock-o"></i>{{ date('M d',strtotime($blog->created_at)) }}</li>
                                        </ul>
                                    </div>
                                    <div class="entry-body">
                                        <h3><a href="{{ route('front.blogBySlug',$blog->slug) }}">{{ $blog->title }}</a></h3>
                                        <p>{{ substr(strip_tags($blog->content),0,50) }}</p>
                                    </div>
                                </div>
                            </div>
                        @endforeach
                    </div>
                </div>
            </div>
        </div> <!-- end container -->
    </section>
    <!-- end news-section -->

@endsection
