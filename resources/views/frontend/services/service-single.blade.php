@extends('frontend.layout')
@section('section')
    <!-- start page-title -->
    <section class="page-title">
        <div class="container">
            <div class="row">
                <div class="col col-xs-12">
                    <h2>{{ $Service->title }}</h2>
                    <ol class="breadcrumb">
                        <li><a href="{{ route('front.home') }}">Home</a></li>
                        <li>{{ $Service->title }}</li>
                    </ol>
                </div>
            </div> <!-- end row -->
        </div> <!-- end container -->
    </section>
    <!-- end page-title -->


    <!-- start service-singel-section -->
    <section class="service-singel-section section-padding">
        <div class="container">
            <div class="row">
                <div class="col col-md-8 col-md-push-4">
                    <div class="service-single-content">
                        <div>
                            <img src="{{ asset('uploads/services/'.$Service->image) }}" alt>
                        </div>
                        <div class="title">
                            <h3>{{ $Service->title }}</h3>
                        </div>
                        <div class="details">
                            {{ $Service->description }}
                        </div>
                    </div> <!-- end service content -->
                </div> <!-- end col -->

                <div class="col col-md-4 col-md-pull-8">
                    <div class="service-single-sidebar">
                        <div class="services-link-widget widget">
                            <ul>
                                @foreach($ServiceAll as $service)
                                <li class="@if($service->slug == $Service->slug) current @endif"><a href="{{ route('front.serviceBySlug',$service->slug) }}">{{ $service->title }}</a></li>
                                @endforeach
                            </ul>
                        </div>
                        <div class="widget contact-widget">
                            <h3>Contact us for help?</h3>
                            <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Iste assumenda unde, ut.Iste assumenda unde, ut.</p>
                        </div>
                    </div>
                </div>
            </div> <!-- end row -->
        </div> <!-- end container -->
    </section>
    <!-- end service-single-section -->

@stop
