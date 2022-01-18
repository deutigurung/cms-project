@extends('adminlte::page')
@section('content_header')
    <h1 class="m-0 text-dark">Edit Page</h1>
@stop

@section('content')
    <div class="row">
        <div class="col-12">
            <div class="card">
                <form role="form" class="form" method="post" action="{{ route('pages.update',$page) }}" enctype="multipart/form-data">
                    @csrf
                    {{ method_field('put') }}
                    <div class="card-body">
                        <div class="form-group">
                            <label for="title">Name</label>
                            <input id="title" type="text" class="form-control{{ $errors->has('title') ? ' is-invalid' : '' }}" name="title" value="{{ $page->title }}" autofocus>
                            @if ($errors->has('title'))
                                <span class="invalid-feedback" role="alert">
                                    <strong>{{ $errors->first('title') }}</strong>
                                </span>
                            @endif
                        </div>

                        <div class="form-group">
                            <label for="url">Url</label>
                            <input id="url" type="text" class="form-control{{ $errors->has('url') ? ' is-invalid' : '' }}" name="url" value="{{ $page->url }}" autofocus>
                            @if ($errors->has('url'))
                                <span class="invalid-feedback" role="alert">
                                    <strong>{{ $errors->first('url') }}</strong>
                                </span>
                            @endif
                        </div>

                        <div class="form-group">
                            <label for="date">Date</label>
                            <input id="date" type="date" class="form-control{{ $errors->has('date') ? ' is-invalid' : '' }}" name="date" value="{{ $page->date }}" autofocus>
                            @if ($errors->has('date'))
                                <span class="invalid-feedback" role="alert">
                                    <strong>{{ $errors->first('date') }}</strong>
                                </span>
                            @endif
                        </div>

                        <div class="form-group">
                            <label for="expire_date">Expire Date</label>
                            <input id="expire_date" type="date" class="form-control{{ $errors->has('expire_date') ? ' is-invalid' : '' }}" name="expire_date" value="{{ $page->expire_date }}" autofocus>
                            @if ($errors->has('expire_date'))
                                <span class="invalid-feedback" role="alert">
                                    <strong>{{ $errors->first('expire_date') }}</strong>
                                </span>
                            @endif
                        </div>

                        <div class="form-group">
                            <label for="description">Description</label>
                            <textarea name="description" class="form-control">{{ $page->description }}</textarea>
                        </div>

                        <div class="form-group">
                            <label for="image">Image</label>
                            <input type="file" name="image" class="form-control">
                            @if(isset($page->image))
                                <img class="" height="100" width="100"
                                     src="{{ asset('uploads/pages/'.$page->image) }}"
                                     alt="Page">
                            @endif
                        </div>

                        <div class="form-group">
                            <label for="image">Attach File</label>
                            <input type="file" name="attach_file" class="form-control">
                            @if(isset($page->attach_file))
                                <img class="" height="100" width="100"
                                     src="{{ asset('uploads/pages/files'.$page->attach_file) }}"
                                     alt="Page">
                            @endif
                        </div>
                        <div class="form-group">
                            <label for="status">Status</label>
                            <input type="checkbox" name="status" value="1" @if($page->status == 1) ? checked @endif>
                        </div>
                    </div>


                    <!-- /.card-body -->

                    <div class="card-footer">
                        <button type="submit" class="btn btn-primary">Submit</button>
                        <a href="{{ route('services.index') }}" class="btn btn-danger">Cancel</a>
                    </div>
                </form>
            </div>
        </div>
    </div>
@stop
