@extends('frontend.layout')
@section('section')
    <!-- start page-title -->
    <section class="page-title">
        <div class="container">
            <div class="row">
                <div class="col col-xs-12">
                    <h2>Services</h2>
                    <ol class="breadcrumb">
                        <li><a href="{{ route('front.home') }}">Home</a></li>
                        <li>Services</li>
                    </ol>
                </div>
            </div> <!-- end row -->
        </div> <!-- end container -->
    </section>
    <!-- end page-title -->


    <!-- start of services -->
    <section class="section-padding services-grid-section">
        <div class="container">
            <div class="row">
                <div class="col col-xs-12">
                    <div class="services-grids services-grid-view">
                        @foreach($Services as $service)
                            <div class="grid">
                                <div class="inner mk-bg-img">
                                    <div class="details ">
                                        <div class="info">
                                            <img src="{{ asset('uploads/services/'.$service->image) }}" alt class="bg-image">
                                            <a href="service-single.html">
                                                <h3><i class="fi flaticon-construction"></i> {{ $service->title }}</h3>
                                            </a>
                                            <p>{{ strip_tags($service->description) }}</p>
                                            <?php
                                                $slug = Illuminate\Support\Str::slug($service->title);
                                            ?>
                                            <a href="{{ route('front.serviceByTitle',$slug) }}" class="more">Get Details</a>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        @endforeach
                    </div> <!-- end services-grids -->
                </div> <!-- end col -->
            </div> <!-- end row -->

            <div class="all-services">
                <a href="#" class="theme-btn">Load More</a>
            </div>
        </div> <!-- end container -->
    </section>
    <!-- end of services -->
@stop
