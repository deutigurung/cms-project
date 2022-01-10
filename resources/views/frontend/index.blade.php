@extends('frontend.layout')
@section('section')
    <!-- start of hero -->
    <section class="hero hero-slider-wrapper">
        <div class="hero-slider hero-slider-style-1">
            <div class="slide">
                <img src="{{ asset('frontend/images/slider/slide-1.jpg') }}" alt class="slider-bg">
                <div class="container">
                    <div class="row">
                        <div class="col col-lg-8 col-sm-9 slide-caption">
                            <h2>We provide the best <span>Industrial</span> Services worldwide</h2>
                            <p>An unknown printer took a galley of type and scrambled it to make a type specimen book.</p>
                            <div class="btns">
                                <a href="#" class="theme-btn">About us</a>
                                <a href="#" class="theme-btn-s2">Explore</a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>

            <div class="slide">
                <img src="{{ asset('frontend/images/slider/slide-2.jpg') }}" alt class="slider-bg">
                <div class="container">
                    <div class="row">
                        <div class="col col-lg-8 col-sm-9 slide-caption">
                            <h2>We provide the best <span>Industrial</span> Services worldwide</h2>
                            <p>An unknown printer took a galley of type and scrambled it to make a type specimen book.</p>
                            <div class="btns">
                                <a href="#" class="theme-btn">About us</a>
                                <a href="#" class="theme-btn-s2">Explore</a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>

            <div class="slide">
                <img src="{{ asset('frontend/images/slider/slide-3.jpg') }}" alt class="slider-bg">
                <div class="container">
                    <div class="row">
                        <div class="col col-lg-8 col-sm-9 slide-caption">
                            <h2>We provide the best <span>Industrial</span> Services worldwide</h2>
                            <p>An unknown printer took a galley of type and scrambled it to make a type specimen book.</p>
                            <div class="btns">
                                <a href="#" class="theme-btn">About us</a>
                                <a href="#" class="theme-btn-s2">Explore</a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
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
                    <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam.</p>
                </div>
                <div class="col col-lg-3 col-md-3">
                    <div class="all-service-link">
                        <a href="services.html" class="theme-btn">All services</a>
                    </div>
                </div>
            </div> <!-- end row -->

            <div class="row">
                <div class="col col-xs-12">
                    <div class="services-grids service-slider dots-s1">
                        <div class="grid">
                            <div class="inner mk-bg-img">
                                <div class="details ">
                                    <div class="info">
                                        <img src="{{ asset('frontend/images/services/img-1.jpg') }}" alt class="bg-image">
                                        <a href="service-single.html">
                                            <h3><i class="fi flaticon-construction"></i> Mechanical Works</h3>
                                        </a>
                                        <p>Ut enim ad minim veniam, quis nos trud exerci tation ullamco.</p>
                                        <a href="service-single.html" class="more">Get Details</a>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="grid">
                            <div class="inner mk-bg-img">
                                <div class="details ">
                                    <div class="info">
                                        <img src="{{ asset('frontend/images/services/img-2.jpg') }}" alt class="bg-image">
                                        <a href="service-single.html">
                                            <h3><i class="fi flaticon-construction"></i> Power &amp; Energy</h3>
                                        </a>
                                        <p>Ut enim ad minim veniam, quis nos trud exerci tation ullamco.</p>
                                        <a href="service-single.html" class="more">Get Details</a>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="grid">
                            <div class="inner mk-bg-img">
                                <div class="details ">
                                    <div class="info">
                                        <img src="{{ asset('frontend/images/services/img-3.jpg') }}" alt class="bg-image">
                                        <a href="service-single.html">
                                            <h3><i class="fi flaticon-construction"></i> Petroleum Refinery</h3>
                                        </a>
                                        <p>Ut enim ad minim veniam, quis nos trud exerci tation ullamco.</p>
                                        <a href="service-single.html" class="more">Get Details</a>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="grid">
                            <div class="inner mk-bg-img">
                                <div class="details ">
                                    <div class="info">
                                        <img src="{{ asset('frontend/images/services/img-1.jpg') }}" alt class="bg-image">
                                        <a href="service-single.html">
                                            <h3><i class="fi flaticon-construction"></i> Mechanical Works</h3>
                                        </a>
                                        <p>Ut enim ad minim veniam, quis nos trud exerci tation ullamco.</p>
                                        <a href="service-single.html" class="more">Get Details</a>
                                    </div>
                                </div>
                            </div>
                        </div>
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
                        <div class="slide-item">
                            <div class="inner">
                                <div class="client-quote">
                                    <p>Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur.</p>
                                </div>
                                <div class="client-details">
                                    <div class="client-pic">
                                        <img src="{{ asset('frontend/images/testimonials/client.jpg') }}" alt="">
                                    </div>
                                    <div class="client-info">
                                        <h4>Danny Boyles</h4>
                                        <span>Director of Boards, Machinima</span>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="slide-item">
                            <div class="inner">
                                <div class="client-quote">
                                    <p>Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur.</p>
                                </div>
                                <div class="client-details">
                                    <div class="client-pic">
                                        <img src="{{ asset('frontend/images/testimonials/client.jpg') }}" alt="">
                                    </div>
                                    <div class="client-info">
                                        <h4>Danny Boyles</h4>
                                        <span>Director of Boards, Machinima</span>
                                    </div>
                                </div>
                            </div>
                        </div>
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
                        <p>Lorem ipsum dolor sit amet, mel postea mio liore corrumpit ea. Affert partiendo vix eu. Ei mea dolore democritum disu artio.</p>
                    </div>
                </div>
            </div> <!-- end row -->
        </div>

        <div class="row">
            <div class="col col-xs-12">
                <div class="recent-projects-grids">
                    <div class="grid">
                        <div class="project-img">
                            <img src="{{ asset('frontend/images/projects/img-1.jpg') }}" alt="">
                        </div>
                        <div class="project-info">
                            <div class="inner-info">
                                <a href="#"><h3>Chemical Refinery</h3></a>
                                <div class="tags">Michigan, US</div>
                            </div>
                        </div>
                    </div>
                    <div class="grid">
                        <div class="project-img">
                            <img src="{{ asset('frontend/images/projects/img-2.jpg') }}" alt>
                        </div>
                        <div class="project-info">
                            <div class="inner-info">
                                <a href="#"><h3>Chemical Refinery</h3></a>
                                <div class="tags">Michigan, US</div>
                            </div>
                        </div>
                    </div>
                    <div class="grid">
                        <div class="project-img">
                            <img src="{{ asset('frontend/images/projects/img-3.jpg') }}" alt>
                        </div>
                        <div class="project-info">
                            <div class="inner-info">
                                <a href="#"><h3>Chemical Refinery</h3></a>
                                <div class="tags">Michigan, US</div>
                            </div>
                        </div>
                    </div>
                    <div class="grid">
                        <div class="project-img">
                            <img src="{{ asset('frontend/images/projects/img-4.jpg') }}" alt>
                        </div>
                        <div class="project-info">
                            <div class="inner-info">
                                <a href="#"><h3>Chemical Refinery</h3></a>
                                <div class="tags">Michigan, US</div>
                            </div>
                        </div>
                    </div>
                    <div class="grid">
                        <div class="project-img">
                            <img src="{{ asset('frontend/images/projects/img-5.jpg') }}" alt>
                        </div>
                        <div class="project-info">
                            <div class="inner-info">
                                <a href="#"><h3>Chemical Refinery</h3></a>
                                <div class="tags">Michigan, US</div>
                            </div>
                        </div>
                    </div>
                    <div class="grid">
                        <div class="project-img">
                            <img src="{{ asset('frontend/images/projects/img-2.jpg') }}" alt>
                        </div>
                        <div class="project-info">
                            <div class="inner-info">
                                <a href="#"><h3>Chemical Refinery</h3></a>
                                <div class="tags">Michigan, US</div>
                            </div>
                        </div>
                    </div>
                    <div class="grid">
                        <div class="project-img">
                            <img src="{{ asset('frontend/images/projects/img-3.jpg') }}" alt>
                        </div>
                        <div class="project-info">
                            <div class="inner-info">
                                <a href="#"><h3>Chemical Refinery</h3></a>
                                <div class="tags">Michigan, US</div>
                            </div>
                        </div>
                    </div>
                    <div class="grid">
                        <div class="project-img">
                            <img src="{{ asset('frontend/images/projects/img-4.jpg') }}" alt>
                        </div>
                        <div class="project-info">
                            <div class="inner-info">
                                <a href="#"><h3>Chemical Refinery</h3></a>
                                <div class="tags">Michigan, US</div>
                            </div>
                        </div>
                    </div>
                    <div class="grid">
                        <div class="project-img">
                            <img src="{{ asset('frontend/images/projects/img-5.jpg') }}" alt>
                        </div>
                        <div class="project-info">
                            <div class="inner-info">
                                <a href="#"><h3>Chemical Refinery</h3></a>
                                <div class="tags">Michigan, US</div>
                            </div>
                        </div>
                    </div>
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
                            <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua.</p>
                            <div class="panel-group faq-accordion theme-accordion-s1" id="accordion">
                                <div class="panel panel-default">
                                    <div class="panel-heading">
                                        <a data-toggle="collapse" data-parent="#accordion" href="#collapseOne" aria-expanded="true">Ipsam voluptatem quia voluptas sit</a>
                                    </div>
                                    <div id="collapseOne" class="panel-collapse collapse in">
                                        <div class="panel-body">
                                            <p>Consectetuer adipiscing elit, sed diam nonummy nibh euismod tincidunt ut laoreet dolore magna. Quis nostrud exerci tation ullamcorper suscipit lobortis nisl ut aliquip ex ea commodo consequat.</p>
                                        </div>
                                    </div>
                                </div>

                                <div class="panel panel-default">
                                    <div class="panel-heading">
                                        <a class="collapsed" data-toggle="collapse" data-parent="#accordion" href="#collapseTwo">Ted quia non numquam eius modi</a>
                                    </div>
                                    <div id="collapseTwo" class="panel-collapse collapse">
                                        <div class="panel-body">
                                            <p>Consectetuer adipiscing elit, sed diam nonummy nibh euismod tincidunt ut laoreet dolore magna. Quis nostrud exerci tation ullamcorper suscipit lobortis nisl ut aliquip ex ea commodo consequat.</p>
                                        </div>
                                    </div>
                                </div>

                                <div class="panel panel-default">
                                    <div class="panel-heading">
                                        <a class="collapsed" data-toggle="collapse" data-parent="#accordion" href="#collapseThree">Tempora incidunt ut labore</a>
                                    </div>
                                    <div id="collapseThree" class="panel-collapse collapse">
                                        <div class="panel-body">
                                            <p>Consectetuer adipiscing elit, sed diam nonummy nibh euismod tincidunt ut laoreet dolore magna. Quis nostrud exerci tation ullamcorper suscipit lobortis nisl ut aliquip ex ea commodo consequat.</p>
                                        </div>
                                    </div>
                                </div>
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
                        <div class="grid">
                            <img src="{{ asset('frontend/images/partners/img-1.png') }}" alt="">
                        </div>
                        <div class="grid">
                            <img src="{{ asset('frontend/images/partners/img-2.png') }}" alt="">
                        </div>
                        <div class="grid">
                            <img src="{{ asset('frontend/images/partners/img-3.png') }}" alt="">
                        </div>
                        <div class="grid">
                            <img src="{{ asset('frontend/images/partners/img-4.png') }}" alt="">
                        </div>
                        <div class="grid">
                            <img src="{{ asset('frontend/images/partners/img-2.png') }}" alt="">
                        </div>
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
                                <li><i class="fa fa-phone"></i> +123 (569) 254 78</li>
                                <li><i class="fa fa-envelope"></i> info@industrial.com</li>
                                <li><i class="fa fa-home"></i> #59, East Madison Ave, Melbourne Australia</li>
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
                        <h2>Recent news</h2>
                    </div>
                </div>
                <div class="col col-lg-6 col-md-5">
                    <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam.</p>
                </div>
                <div class="col col-lg-3 col-md-3">
                    <div class="all-news-link">
                        <a href="#" class="theme-btn">More News</a>
                    </div>
                </div>
            </div> <!-- end row -->

            <div class="row">
                <div class="col col-xs-12">
                    <div class="news-grids">
                        <div class="grid">
                            <div class="entry-media">
                                <img src="{{ asset('frontend/images/blog/img-1.jpg') }}" alt="">
                            </div>
                            <div class="entry-details">
                                <div class="entry-meta">
                                    <ul>
                                        <li><i class="fa fa-clock-o"></i>Nov 25</li>
                                        <li><i class="fa fa-comments"></i><a href="#">2 Comments</a></li>
                                    </ul>
                                </div>
                                <div class="entry-body">
                                    <h3><a href="#">China's industrial profits grow faster in first eight months</a></h3>
                                    <p>Inventore veritatis et quasi architecto beatae vitae dicta sunt explicabo.</p>
                                </div>
                            </div>
                        </div>
                        <div class="grid">
                            <div class="entry-media">
                                <img src="{{ asset('frontend/images/blog/img-2.jpg') }}" alt="">
                            </div>
                            <div class="entry-details">
                                <div class="entry-meta">
                                    <ul>
                                        <li><i class="fa fa-clock-o"></i>Nov 25</li>
                                        <li><i class="fa fa-comments"></i><a href="#">2 Comments</a></li>
                                    </ul>
                                </div>
                                <div class="entry-body">
                                    <h3><a href="#">Exploring the wild side in an industrial jungle</a></h3>
                                    <p>Inventore veritatis et quasi architecto beatae vitae dicta sunt explicabo.</p>
                                </div>
                            </div>
                        </div>
                        <div class="grid">
                            <div class="entry-media">
                                <img src="{{ asset('frontend/images/blog/img-3.jpg') }}" alt="">
                            </div>
                            <div class="entry-details">
                                <div class="entry-meta">
                                    <ul>
                                        <li><i class="fa fa-clock-o"></i>Nov 25</li>
                                        <li><i class="fa fa-comments"></i><a href="#">2 Comments</a></li>
                                    </ul>
                                </div>
                                <div class="entry-body">
                                    <h3><a href="#">Bus drivers in Liverpool vote for industrial action</a></h3>
                                    <p>Inventore veritatis et quasi architecto beatae vitae dicta sunt explicabo.</p>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div> <!-- end container -->
    </section>
    <!-- end news-section -->

@endsection
