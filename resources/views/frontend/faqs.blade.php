@extends('frontend.layout')
@section('section')
    <!-- start page-title -->
    <section class="page-title">
        <div class="container">
            <div class="row">
                <div class="col col-xs-12">
                    <h2>FAQs</h2>
                    <ol class="breadcrumb">
                        <li><a href="{{ route('front.home') }}">Home</a></li>
                        <li>FAQs</li>
                    </ol>
                </div>
            </div> <!-- end row -->
        </div> <!-- end container -->
    </section>
    <!-- end page-title -->


    <!-- start faq-section -->
    <section class="faq-pg-section section-padding">
        <div class="container">
            <div class="row">
                <div class="col col-md-8">
                    <div class="section-title-s4">
                        <h2>Find informative answers to all your questions about Industrial products below.</h2>
                        <p>Do you have an inquiry that's not addressed here? Please contact us via email or <span>phone at (123)456-7890.</span></p>
                    </div>
                </div>
            </div>

            <div class="faq-section">
                <div class="panel-group faq-accordion theme-accordion-s1" id="accordion">
                    @foreach($Faqs as $count =>$faq)
                        <div class="panel panel-default">
                            <div class="panel-heading">
                                <a @if($count !== 0) class="collapsed" @endif data-toggle="collapse" data-parent="#accordion" href="#{{$faq->id}}" aria-expanded="true">{{ $faq->name }}</a>
                            </div>
                            <div id="{{$faq->id}}" class="panel-collapse collapse @if($count == 0) in @endif">
                                <div class="panel-body">
                                    <p>{{ $faq->description }}</p>
                                </div>
                            </div>
                        </div>
                    @endforeach
                </div>
            </div> <!-- end faq-section -->
        </div> <!-- end container -->
    </section>
    <!-- end faq-section -->
@stop
