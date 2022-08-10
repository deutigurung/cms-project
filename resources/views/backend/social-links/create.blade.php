@extends('adminlte::page')
@section('content_header')
    <h1 class="m-0 text-dark">Add SocialLink</h1>
@stop
@section('adminlte_css')
    <link rel="stylesheet" href="{{ asset('backend/css/bootstrap-iconpicker.min.css') }}">
@stop
@section('content')
    <div class="row">
        <div class="col-12">
            <div class="card">
                <form role="form" class="form" method="post" action="{{ route('social-links.store') }}" enctype="multipart/form-data">
                    @csrf
                    <div class="card-body">

                        <div class="form-group">
                            <label for="icon">Icon</label>
                            <div class="input-group">
                                <input type="text" class="form-control col-5" name="icon" id="icon" value="">
                                <span class="input-group-append">
                                    <button class="btn btn-outline-secondary" data-icon="fas fa-home" id="iconpicker" role="iconpicker"></button>
                                </span>
                                @if ($errors->has('icon'))
                                    <span class="invalid-feedback" role="alert">
                                    <strong>{{ $errors->first('icon') }}</strong>
                                </span>
                                @endif
                            </div>
                        </div>

                        <div class="form-group">
                            <label for="url">Url</label>
                            <input id="url" type="text" class="form-control col-6 {{ $errors->has('url') ? ' is-invalid' : '' }}" name="url" value="{{ old('url') }}"  autofocus>
                            @if ($errors->has('url'))
                                <span class="invalid-feedback" role="alert">
                                    <strong>{{ $errors->first('url') }}</strong>
                                </span>
                            @endif
                        </div>
                    </div>
                    <!-- /.card-body -->

                    <div class="card-footer">
                        <button type="submit" class="btn btn-primary">Submit</button>
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
