@extends('frontend.layout')
@section('section')
    <!-- start page-title -->
    <section class="page-title">
        <div class="container">
            <div class="row">
                <div class="col col-xs-12">
                    <h2>Projects</h2>
                    <ol class="breadcrumb">
                        <li><a href="{{ route('front.home') }}">Home</a></li>
                        <li>Projects</li>
                    </ol>
                </div>
            </div> <!-- end row -->
        </div> <!-- end container -->
    </section>
    <!-- end page-title -->

    <!-- recent-project -->
    <section class="section-padding projects-grid-view-section">
        <div class="container">
            <div class="row">
                <div class="col col-xs-12">
                    <div class="projects-grid-view">
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
        </div> <!-- end container -->
    </section>
    <!-- end recent-project -->
@stop
