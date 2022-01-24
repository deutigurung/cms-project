@extends('frontend.layout')
@section('section')
    <!-- start page-title -->
    <section class="page-title">
        <div class="container">
            <div class="row">
                <div class="col col-xs-12">
                    <h2>Blog</h2>
                    <ol class="breadcrumb">
                        <li><a href="{{ route('front.home') }}">Home</a></li>
                        <li>Blog</li>
                    </ol>
                </div>
            </div> <!-- end row -->
        </div> <!-- end container -->
    </section>
    <!-- end page-title -->

    <!-- start blog-with-sidebar -->
    <section class="blog-with-sidebar section-padding">
        <div class="container">
            <div class="row">
                <div class="col col-lg-8 col-md-8">
                    <div class="news-grids">
                        @foreach($Blogs as $blog)
                            <div class="grid">
                                <div class="entry-media">
                                    <img src="{{ asset('uploads/blogs/'.$blog->image) }}" alt>
                                </div>
                                <div class="entry-details">
                                    <div class="entry-meta">
                                        <ul>
                                            <li><i class="fa fa-clock-o"></i>{{ date('M d',strtotime($blog->created_at)) }}</li>
                                        </ul>
                                    </div>
                                    <div class="entry-body">
                                        <h3><a href="{{ route('front.blogBySlug',$blog->slug) }}">{{ $blog->title }}</a></h3>
                                        <p>{{ substr(strip_tags($blog->content),0,50) }}</p>
                                    </div>
                                </div>
                            </div>
                        @endforeach

                    </div> <!-- end news-grids -->
                </div> <!-- end blog-content -->

                <div class="blog-sidebar col col-lg-3 col-lg-offset-1 col-md-4 col-sm-5">
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
                        <h3>Recent post</h3>
                        <ul>
                            <li>
                                <div class="post-pic">
                                    <img src="assets/images/blog/thumb/img-1.jpg" alt>
                                </div>
                                <div class="details">
                                    <h4><a href="#">Micenas placerat nibh loreming fentum</a></h4>
                                    <span>Sep 25, 2016</span>
                                </div>
                            </li>
                            <li>
                                <div class="post-pic">
                                    <img src="assets/images/blog/thumb/img-2.jpg" alt>
                                </div>
                                <div class="details">
                                    <h4><a href="#">Integer suscipit sit amet</a></h4>
                                    <span>Sep 25, 2016</span>
                                </div>
                            </li>
                            <li>
                                <div class="post-pic">
                                    <img src="assets/images/blog/thumb/img-3.jpg" alt>
                                </div>
                                <div class="details">
                                    <h4><a href="#">Praeent vehicula neget tempus</a></h4>
                                    <span>Sep 25, 2016</span>
                                </div>
                            </li>
                        </ul>
                    </div>
                    <div class="widget archive-widget">
                        <h3>Archive</h3>
                        <ul>
                            @foreach($Blogs as $blog)
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
