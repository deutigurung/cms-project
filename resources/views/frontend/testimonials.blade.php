@extends('frontend.layout')
@section('section')
    <!-- start page-title -->
    <section class="page-title">
        <div class="container">
            <div class="row">
                <div class="col col-xs-12">
                    <h2>Testimonials</h2>
                    <ol class="breadcrumb">
                        <li><a href="{{ route('front.home') }}">Home</a></li>
                        <li>Testimonials</li>
                    </ol>
                </div>
            </div> <!-- end row -->
        </div> <!-- end container -->
    </section>
    <!-- end page-title -->


    <!-- start testimoials-s2 -->
    <section class="section-padding testimonials-s2-grid-view-section">
        <div class="container">
            <div class="row">
                <div class="col col-lg-10 col-lg-offset-1">
                    <div class="testimoials-s2-grids testimoials-s2-grid-view">
                        @foreach($Testimonials as $Testimonial)
                            <div class="testimoials-s2-grid">
                                <div class="client-quote">
                                    <p>{{ strip_tags($Testimonial->description) }}</p>
                                </div>
                                <div class="client-info">
                                    <div class="details">
                                        <div class="pic">
                                            <img src="{{ asset('uploads/testimonials/'.$Testimonial->image) }}" alt="">
                                        </div>
                                        <div class="info">
                                            <h4>{{ $Testimonial->name }}</h4>
                                            <span>{{ $Testimonial->designation }}</span>
                                        </div>
                                    </div>
                                    <div class="rating">
                                        <i class="fa fa-star"></i>
                                        <i class="fa fa-star"></i>
                                        <i class="fa fa-star"></i>
                                        <i class="fa fa-star"></i>
                                        <i class="fa fa-star"></i>
                                    </div>
                                </div>
                            </div>
                        @endforeach
                    </div>
                </div>
            </div>
        </div> <!-- end container -->
    </section>
    <!-- end testimoials-s2 -->
@stop
