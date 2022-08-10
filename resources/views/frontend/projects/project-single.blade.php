@extends('frontend.layout')
@section('section')
    <!-- start page-title -->
    <section class="page-title">
        <div class="container">
            <div class="row">
                <div class="col col-xs-12">
                    <h2>{{ $Project->title }}</h2>
                    <ol class="breadcrumb">
                        <li><a href="{{ route('front.home') }}">Home</a></li>
                        <li>{{ $Project->title }}</li>
                    </ol>
                </div>
            </div> <!-- end row -->
        </div> <!-- end container -->
    </section>
    <!-- end page-title -->

    <!-- start project-single-section -->
    <section class="project-single-section section-padding">
        <div class="container">
            <div class="row">
                <div class="col col-md-7">
                    <div class="project-single-img">
                        <img src="{{ asset('uploads/projects/'.$Project->image) }}" alt>
                    </div>
                </div>
                <div class="col col-md-5">
                    <div class="project-single-details">
                        <h3>{{ $Project->title }}</h3>
                        {!! $Project->description !!}
                        <ul class="project-info">
                            <li><i class="fa fa-tag"></i> <span>Category:</span> {{ $Project->service->title }}</li>
                            <li><i class="fa fa-user"></i> <span>Client:</span>  {{ $Project->client }}</li>
                            <li><i class="fa fa-calendar"></i> <span>Date:</span> {{ date('d M , Y',strtotime($Project->date)) }}</li>
                            <li><i class="fa fa-external-link"></i> <span>Website::</span> {{ $Project->website }}</li>
                        </ul>
                    </div>
                </div>
            </div> <!-- end row -->
        </div> <!-- end container -->
    </section>
    <!-- end project-single-section -->
@stop
