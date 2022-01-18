@extends('adminlte::page')
@section('content_header')
    <h1 class="m-0 text-dark">Edit Gallery</h1>
@stop

@section('content')
    <div class="row">
        <div class="col-12">
            <div class="card">
                <form role="form" class="form" method="post" action="{{ route('galleries.update',$gallery) }}" enctype="multipart/form-data">
                    @csrf
                    {{ method_field('put') }}
                    <div class="card-body">
                        <div class="form-group">
                            <label for="name">Name</label>
                            <input id="name" type="text" class="form-control{{ $errors->has('name') ? ' is-invalid' : '' }}" name="name" value="{{ $gallery->name }}"  autofocus>
                            @if ($errors->has('name'))
                                <span class="invalid-feedback" role="alert">
                                    <strong>{{ $errors->first('name') }}</strong>
                                </span>
                            @endif
                        </div>

                        <div class="form-group">
                            <label for="image">Image</label>
                            <input type="file" name="image" class="form-control">
                            @if(isset($gallery->image))
                                <img class="" height="100" width="100"
                                     src="{{ asset('uploads/galleries/'.$gallery->image) }}"
                                     alt="User profile picture">
                            @endif
                        </div>
                    </div>


                    <!-- /.card-body -->

                    <div class="card-footer">
                        <button type="submit" class="btn btn-primary">Submit</button>
                        <a href="{{ route('galleries.index') }}" class="btn btn-danger">Cancel</a>
                    </div>
                </form>
            </div>
        </div>
    </div>
@stop
