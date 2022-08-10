@extends('frontend.layout')
@section('section')
    <!-- start page-title -->
    <section class="page-title">
        <div class="container">
            <div class="row">
                <div class="col col-xs-12">
                    <h2>Events</h2>
                    <ol class="breadcrumb">
                        <li><a href="{{ route('front.home') }}">Home</a></li>
                        <li>Events</li>
                    </ol>
                </div>
            </div> <!-- end row -->
        </div> <!-- end container -->
    </section>
    <!-- end page-title -->


    <!-- start of services -->
    <section class="blog-grid-section section-padding">
        <div class="container">
            <div class="news-grids">
                @foreach($Events as $event)
                    <div class="grid">
                        <div class="entry-media">
                            <img src="{{ asset('uploads/events/'.$event->image) }}" alt>
                        </div>
                        <div class="entry-details">
                            <div class="entry-meta">
                                <ul>
                                    <li><i class="fa fa-calendar"></i>{{ $event->date }}</li>
                                    <li><i class="fa fa-clock-o"></i><a href="#">{{ $event->time }}</a></li>
                                </ul>
                            </div>
                            <div class="entry-body">
                                <h3><a href="{{ route('front.eventBySlug',$event->slug) }}">{{ $event->title }}</a></h3>
                                <p>{{ substr(strip_tags($event->description),0,50) }}...</p>
                            </div>
                        </div>
                    </div>
                @endforeach
            </div> <!-- end news-grids -->
        </div> <!-- end container -->
    </section>
    <!-- end blog-grid-section     -->
@stop
