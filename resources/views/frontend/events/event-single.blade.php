@extends('frontend.layout')
@section('section')
    <!-- start page-title -->
    <section class="page-title">
        <div class="container">
            <div class="row">
                <div class="col col-xs-12">
                    <h2>{{ $Event->title }}</h2>
                    <ol class="breadcrumb">
                        <li><a href="{{ route('front.home') }}">Home</a></li>
                        <li>{{ $Event->title }}</li>
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
                            <img src="{{ asset('uploads/events/'.$Event->image) }}" alt>
                        </div>
                        <div class="title">
                            <h3>{{ $Event->title }}</h3>
                        </div>
                        <div class="details">
                            {!! $Event->description !!}
                        </div>
                    </div> <!-- end service content -->
                </div> <!-- end col -->

                <div class="col col-md-4 col-md-pull-8">
                    <div class="service-single-sidebar">
                        <div class="services-link-widget widget">
                            <ul>
                                @foreach($EventAll as $event)
                                <li class="@if($event->slug == $Event->slug) current @endif"><a href="{{ route('front.eventBySlug',$event->slug) }}">{{ $event->title }}</a></li>
                                @endforeach
                            </ul>
                        </div>
                        <div class="widget contact-widget">
                            <h3><i class="fa fa-users"></i> Organizer</h3>
                            <p>{{ $Event->organizer }}</p>
                            <p>{{ $Event->organizer_website }}</p>
                            <p>{{ $Event->organizer_email }}</p>
                            <p>{{ $Event->organizer_phone }}</p>
                            <div class="clearfix"></div>
                            <h3><i class="fa fa-map-marker"></i> Location</h3>
                            <p>{{ $Event->venue_location }}</p>
                            <p>{{ $Event->venue_phone }}</p>
                            <div class="clearfix"></div>
                            <h3><i class="fa fa-calendar-check-o"></i> Date & Time</h3>
                            <p>{{ $Event->date }} & {{ $Event->time }}</p>
                        </div>
                    </div>
                </div>
            </div> <!-- end row -->
        </div> <!-- end container -->
    </section>
    <!-- end service-single-section -->

@stop
