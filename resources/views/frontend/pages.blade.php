@extends('frontend.layout')
@section('section')
    <!-- start page-title -->
    <section class="page-title">
        <div class="container">
            <div class="row">
                <div class="col col-xs-12">
                    <h2>{{ $Pages->title }}</h2>
                    <ol class="breadcrumb">
                        <li><a href="{{ route('front.home') }}">Home</a></li>
                        <li>{{ $Pages->title }}</li>
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
                        <img src="{{ asset('uploads/pages/'.$Pages->image) }}" alt>
                    </div>
                </div>
                <div class="col col-md-5">
                    <div class="project-single-details">
                        <h3>{{ $Pages->quote }}</h3>
                        {!! $Pages->description !!}
                        <ul class="project-info">
                            <li><i class="fa fa-calendar"></i> <span>Date Publish:</span> {{ date('d M , Y',strtotime($Pages->date)) }}</li>
                        </ul>
                    </div>
                </div>
            </div> <!-- end row -->
        </div> <!-- end container -->
    </section>
    <!-- end project-single-section -->
@stop
