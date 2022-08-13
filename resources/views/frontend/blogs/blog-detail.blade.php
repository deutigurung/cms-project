@extends('frontend.layout')
@section('section')
    <!-- start page-title -->
    <section class="page-title">
        <div class="container">
            <div class="row">
                <div class="col col-xs-12">
                    <h2>{{ $Blog->title }}</h2>
                    <ol class="breadcrumb">
                        <li><a href="{{ route('front.home') }}">Home</a></li>
                        <li>{{ $Blog->title }}</li>
                    </ol>
                </div>
            </div> <!-- end row -->
        </div> <!-- end container -->
    </section>
    <!-- end page-title -->


    <!-- start blog-with-sidebar -->
    <section class="blog-single section-padding">
        <div class="container">
            <div class="row">
                <div class="col col-lg-8 col-md-9 blog-single-content">
                    <div class="post">
                        <div class="media">
                            <img src="{{ asset('uploads/blogs/'.$Blog->image) }}" alt class="img img-responsive">
                        </div>
                        <div class="post-title-meta">
                            <button class="btn">{{ $Blog->blogCategory->name }}</button>
                            <h2>{{ $Blog->title }}</h2>
                            <ul>
                                <li><a href="#">Admin</a></li>
                                <li><a href="#">{{ date('d M , Y',strtotime($Blog->created_at)) }}</a></li>
                            </ul>
                        </div>
                        <div class="post-body">
                            {!! $Blog->content !!}
                        </div>
                    </div> <!-- end post -->

                    <div class="tag-share">
                        <div>
                            <span>Tags: </span>
                            <ul class="tag">
                                <li><a href="#">Business</a></li>
                                <li><a href="#">Article</a></li>
                                <li><a href="#">Blog</a></li>
                                <li><a href="#">Creative</a></li>
                            </ul>
                        </div>
                    </div>
                </div> <!-- end blog-content -->

                <div class="blog-sidebar col col-lg-3 col-lg-offset-1 col-md-3 col-sm-5">
                    <div class="widget search-widget">
                        <form class="form">
                            <input type="text" class="form-control" placeholder="Search here..">
                        </form>
                    </div>
                    <div class="widget category-widget">
                        <h3>Category</h3>
                        <ul>
                            @foreach($BlogCategories as $blogCategory)
                                <li><a href="#">{{ $blogCategory->name }} <span class="badge">{{ count($blogCategory->blogs) }}</span></a></li>
                            @endforeach
                        </ul>
                    </div>
                    <div class="widget recent-post-widget">
                        <h3>Most View Post</h3>
                        <ul>
                            @foreach($MostView as $view)
                            <li>
                                <div class="post-pic">
                                    <img src="{{ asset('uploads/blogs/'.$view->image) }}" alt>
                                </div>
                                <div class="details">
                                    <h4><a href="{{ route('front.blogBySlug',$view->slug) }}">{{ $view->title }}</a></h4>
                                    <span>{{ date('M d,Y',strtotime($view->created_at)) }}</span>
                                </div>
                            </li>
                            @endforeach
                        </ul>
                    </div>
                    <div class="widget archive-widget">
                        <h3>Archive</h3>
                        <ul>
                            @foreach($BlogAll as $blog)
                                <li><a href="#">{{  date('F Y',strtotime($blog->created_at)) }} <span class="badge">12</span></a></li>
                            @endforeach
                        </ul>
                    </div>
                </div>
            </div>
        </div> <!-- end container -->
    </section>
    <!-- end blog-with-section -->
@stop
