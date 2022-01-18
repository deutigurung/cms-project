@extends('adminlte::page')
@section('content_header')
    <h1 class="m-0 text-dark">Setting</h1>
@stop

@section('content')
<div class="row">
    <div class="col-12">
        <div class="card">
            <div class="card-header p-2">
                <ul class="nav nav-pills">
                    <li class="nav-item"><a class="nav-link active" href="#general" data-toggle="tab">General</a></li>
                    <li class="nav-item"><a class="nav-link" href="#contact" data-toggle="tab">Contact</a></li>
                    <li class="nav-item"><a class="nav-link" href="#social" data-toggle="tab">Social</a></li>
                    <li class="nav-item"><a class="nav-link" href="#styles" data-toggle="tab">Style</a></li>
                </ul>
            </div><!-- /.card-header -->
            @include('layouts.notification')
            <div class="card-body">
                <div class="tab-content">
                    <div class="active tab-pane" id="general">
                        <form class="form-horizontal" method="post" action="{{ route('settings.store') }}">
                            @csrf
                            <div class="form-group row">
                                <label for="site_title" class="col-sm-2 col-form-label">Site Title</label>
                                <div class="col-sm-10">
                                    <input type="text" class="form-control" name="site_title" value="{{ $setting->site_title }}" placeholder="Site Title" required>
                                </div>
                            </div>
                            <div class="form-group row">
                                <label for="site_desc" class="col-sm-2 col-form-label">Site Description</label>
                                <div class="col-sm-10">
                                    <textarea name="site_desc" class="form-control">{{ $setting->site_desc }}</textarea>
                                </div>
                            </div>
                            <div class="form-group row">
                                <label for="site_keywords" class="col-sm-2 col-form-label">Site Keywords</label>
                                <div class="col-sm-10">
                                    <input type="text" class="form-control" name="site_keywords" value="{{ $setting->site_keywords }}" placeholder="Site Keywords">
                                </div>
                            </div>
                            <div class="form-group row">
                                <label for="site_url" class="col-sm-2 col-form-label">Site Url</label>
                                <div class="col-sm-10">
                                    <input type="text" class="form-control" name="site_url" value="{{ $setting->site_url }}" placeholder="https://site.com" required>
                                </div>
                            </div>
                            <div class="form-group row" id="site_status">
                                <label for="site_status" class="col-sm-2 col-form-label">Site Status</label>
                                <div class="col-sm-10">
                                    <input type="radio" name="site_status" value="1" @if($setting->site_status == 1) ? checked @endif> Active
                                    <input type="radio" name="site_status" value="0" @if($setting->site_status == 0) ? checked @endif> Inactive
                                </div>
                            </div>
                            <div class="form-group row" id="close_msg">
                                <label for="site_desc" class="col-sm-2 col-form-label">Close Message</label>
                                <div class="col-sm-10">
                                    <textarea name="close_msg" class="form-control">{{ $setting->close_msg }}</textarea>
                                </div>
                            </div>
                            <div class="form-group row">
                                <div class="offset-sm-2 col-sm-10">
                                    <button type="submit" class="btn btn-primary">Submit</button>
                                </div>
                            </div>
                        </form>
                    </div>
                    <!-- /.tab-pane -->
                    <div class="tab-pane" id="contact">
                        @include('backend.settings.contact')
                    </div>
                    <!-- /.tab-pane -->

                    <div class="tab-pane" id="social">
                        @include('backend.settings.social')
                    </div>

                    <div class="tab-pane" id="styles">
                        @include('backend.settings.style')
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
@section('adminlte_js')
    <script>
        $(document).ready(function () {
            $('#close_msg').hide();
            $("input[type='radio']").click(function(){
                var status = $("input[name='site_status']:checked").val();
                if (status == 0) {
                    $('#close_msg').show();
                }else{
                    $('#close_msg').hide();
                }
            });

        });
    </script>
@endsection
