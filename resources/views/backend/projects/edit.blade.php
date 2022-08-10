@extends('adminlte::page')
@section('content_header')
    <h1 class="m-0 text-dark">Edit Project</h1>
@stop
@section('adminlte_css')
    <link rel="stylesheet" href="{{ asset('vendor/adminlte/dist/css/adminlte.min.css') }}">
    <link rel="stylesheet" href="{{ asset('backend/summernote/css/summernote-bs4.css') }}">
@stop
@section('content')
    <div class="row">
        <div class="col-12">
            <div class="card">
                <form role="form" class="form" method="post" action="{{ route('projects.update',$project) }}" enctype="multipart/form-data">
                    @csrf
                    {{ method_field('put') }}
                    <div class="card-body">

                        <div class="form-group">
                            <label for="service_id">Service</label>
                            <select class="form-control select2" name="service_id">
                                @foreach($services as $service)
                                    <option value="{{ $service->id }}" @if($project->service_id == $service->id) ? selected @endif>{{ $service->title }}</option>
                                @endforeach
                            </select>
                        </div>

                        <div class="form-group">
                            <label for="title">Project Title</label>
                            <input id="title" type="text" class="form-control{{ $errors->has('title') ? ' is-invalid' : '' }}" name="title" value="{{ $project->title }}" placeholder="Enter Project" autofocus>
                            @if ($errors->has('title'))
                                <span class="invalid-feedback" role="alert">
                                    <strong>{{ $errors->first('title') }}</strong>
                                </span>
                            @endif
                        </div>

                        <div class="form-group">
                            <label for="description">Description</label>
                            <textarea name="description" class="form-control" id="summernote">{{ $project->description }}</textarea>
                        </div>

                        <div class="form-group">
                            <label for="image">Image</label>
                            <input type="file" name="image" class="form-control">
                            @if(isset($project->image))
                                <img class="" height="100" width="100"
                                     src="{{ asset('uploads/projects/'.$project->image) }}"
                                     alt="Banner">
                            @endif
                        </div>

                        <div class="form-group">
                            <label for="client">Client Name</label>
                            <input id="client" type="text" class="form-control{{ $errors->has('client') ? ' is-invalid' : '' }}" name="client" value="{{ $project->client }}" placeholder="Enter Project Client" autofocus>
                            @if ($errors->has('client'))
                                <span class="invalid-feedback" role="alert">
                                    <strong>{{ $errors->first('client') }}</strong>
                                </span>
                            @endif
                        </div>

                        <div class="form-group">
                            <label for="website">Website</label>
                            <input id="website" type="text" class="form-control{{ $errors->has('website') ? ' is-invalid' : '' }}" name="website" value="{{ $project->website }}" autofocus>
                            @if ($errors->has('website'))
                                <span class="invalid-feedback" role="alert">
                                    <strong>{{ $errors->first('website') }}</strong>
                                </span>
                            @endif
                        </div>

                        <div class="form-group">
                            <label for="date">Date</label>
                            <input id="date" type="date" class="form-control{{ $errors->has('date') ? ' is-invalid' : '' }}" name="date" value="{{ $project->date }}" autofocus>
                            @if ($errors->has('date'))
                                <span class="invalid-feedback" role="alert">
                                    <strong>{{ $errors->first('date') }}</strong>
                                </span>
                            @endif
                        </div>
                        <div class="form-group">
                            <label for="status">Status</label>
                            <input type="checkbox" name="status" value="1" @if($project->status == 1) ? checked @endif>
                        </div>
                    </div>

                    <!-- /.card-body -->

                    <div class="card-footer">
                        <button type="submit" class="btn btn-primary">Submit</button>
                        <a href="{{ route('projects.index') }}" class="btn btn-danger">Cancel</a>
                    </div>
                </form>
            </div>
        </div>
    </div>
@stop
@section('adminlte_js')
    <script src="{{ asset('backend/bootstrap3-wysihtml5-bower/js/bootstrap3-wysihtml5.all.min.js') }}"
            type="text/javascript"></script>
    <script src="{{ asset('backend/summernote/js/summernote-bs4.min.js') }}"></script>
    <script>
        $(function () {
            $('#summernote').summernote()
        });
    </script>
@stop
