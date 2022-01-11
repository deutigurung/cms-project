@extends('adminlte::page')
@section('content_header')
    <h1 class="m-0 text-dark">Edit SocialLink</h1>
@stop
@section('adminlte_css')
    <link rel="stylesheet" href="{{ asset('backend/css/bootstrap-iconpicker.min.css') }}">
@stop
@section('content')
    <div class="row">
        <div class="col-12">
            <div class="card">
                <form role="form" class="form" method="post" action="{{ route('social-links.update',$social) }}" enctype="multipart/form-data">
                    @csrf
                    {{ method_field('PUT') }}
                    <div class="card-body">
                        <div class="row">
                            <div class="col-sm-6">
                                <div class="form-group">
                                    <label for="icon">Icon</label>
                                    <div class="input-group">
                                        <input id="icon" type="text" class="form-control{{ $errors->has('icon') ? ' is-invalid' : '' }}" name="icon" value="{{ $social->icon }}" autofocus>
                                        <span class="input-group-append">
                                            <button class="btn btn-outline-secondary" data-icon="fas fa-home" id="iconpicker" role="iconpicker"></button>
                                        </span>
                                    </div>
                                </div>
                            </div>

                            <div class="col-sm-6">
                                <div class="form-group">
                                    <label for="url">Url</label>
                                    <input id="url" type="text" class="form-control{{ $errors->has('url') ? ' is-invalid' : '' }}" name="url" value="{{ $social->url }}" autofocus>
                                    @if ($errors->has('url'))
                                        <span class="invalid-feedback" role="alert">
                                            <strong>{{ $errors->first('url') }}</strong>
                                        </span>
                                    @endif
                                </div>
                            </div>
                        </div>
                    </div>
                    <!-- /.card-body -->

                    <div class="card-footer">
                        <button type="submit" class="btn btn-primary">Submit</button>
                        <a href="{{ route('social-links.index') }}" class="btn btn-danger">Cancel</a>
                    </div>
                </form>
            </div>
        </div>
    </div>
@stop
@section('adminlte_js')
    <script src="{{ asset('backend/js/bootstrap-iconpicker.bundle.min.js') }}"></script>
    <script>
        $(document).ready(function () {
            $('#iconpicker').on('change', function(e) {
                var selectedIcon = e.icon;
                $(this).parent().parent().children('input').val(selectedIcon);
            });
        });
    </script>
@endsection
