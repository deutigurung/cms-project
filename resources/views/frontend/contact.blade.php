@extends('frontend.layout')
@section('section')
    <!-- start page-title -->
    <section class="page-title">
        <div class="container">
            <div class="row">
                <div class="col col-xs-12">
                    <h2>Contact</h2>
                    <ol class="breadcrumb">
                        <li><a href="{{ route('front.home') }}">Home</a></li>
                        <li>Contact</li>
                    </ol>
                </div>
            </div> <!-- end row -->
        </div> <!-- end container -->
    </section>
    <!-- end page-title -->


    <!-- start contact-pg-section -->
    <section class="contact-pg-section section-padding">
        <div class="container">
            <div class="row">
                <div class="col col-md-3">
                    <div class="contact-info">
                        <ul>
                            <li>
                                <div class="icon"><i class="fa fa-phone"></i></div>
                                <p><span>Hotline</span> {{ @Helper::GeneralSiteSettings("contact_landline") }} /
                                    {{ @Helper::GeneralSiteSettings("contact_mobile") }}</p>
                            </li>
                            <li>
                                <div class="icon"><i class="fa fa-envelope"></i></div>
                                <p><span>Email</span> {{ @Helper::GeneralSiteSettings("contact_email") }}  </p>
                            </li>
                            <li>
                                <div class="icon"><i class="fa fa-clock-o"></i></div>
                                <p><span>Working Hours:</span> {{ @Helper::GeneralSiteSettings("contact_hours") }} </p>
                            </li>
                            <li>
                                <div class="icon"><i class="fa fa-location-arrow"></i></div>
                                <p><span>Office</span> {{ @Helper::GeneralSiteSettings("contact_address") }}</p>
                            </li>
                        </ul>
                    </div>
                </div>
                <div class="col col-md-offset-1 col-md-8">
                    <div class="location-map" id="map">

                    </div>
                </div>
            </div> <!-- end row -->
            <div class="row">
                <div class="col col-xs-12">
                    <form class="contact-form form contact-validation-active row" id="contact-form-s2">
                        <input type="hidden" name="_token" id="csrf" value="{{session()->token()}}">
                        <div class="col col-sm-6">
                            <label for="f-name">First Name</label>
                            <input type="text" class="form-control" id="f-name" name="f_name">
                        </div>
                        <div class="col col-sm-6">
                            <label for="l-name">Last Name</label>
                            <input type="text" class="form-control" id="l-name" name="l_name">
                        </div>
                        <div class="col col-sm-6">
                            <label for="email">Email</label>
                            <input type="email" class="form-control" id="email" name="email">
                        </div>
                        <div class="col col-sm-6">
                            <label for="phone">Phone No</label>
                            <input type="number" class="form-control" id="phone" name="phone">
                        </div>
                        <div class="col col-sm-12">
                            <label for="message">Message</label>
                            <textarea class="form-control" id="message" name="note"></textarea>
                        </div>
                        <div class="col col-sm-12 submit-btn">
                            <button type="submit" class="theme-btn">Submit</button>
                            <div id="loader">
                                <i class="fa fa-refresh fa-spin fa-3x fa-fw"></i>
                            </div>
                        </div>
                        <div class="error-handling-messages">
                            <div id="success">Thank you</div>
                            <div id="error"> Error occurred while sending email. Please try again later. </div>
                        </div>
                    </form>
                </div>
            </div>
        </div> <!-- end container -->
    </section>
    <!-- end contact-pg-section -->
@endsection
