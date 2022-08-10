@extends('adminlte::page')
@section('content_header')
    <h1 class="m-0 text-dark">Edit Event</h1>
@stop
@section('adminlte_css')
    <link rel="stylesheet" href="{{ asset('vendor/adminlte/dist/css/adminlte.min.css') }}">
    <link rel="stylesheet" href="{{ asset('backend/summernote/css/summernote-bs4.css') }}">
@stop
@section('content')
    <div class="row">
        <div class="col-12">
            <div class="card">
                <form role="form" class="form" method="post" action="{{ route('events.update',$event) }}" enctype="multipart/form-data">
                    @csrf
                    {{ method_field('PUT') }}
                    <div class="card-body">
                        <div class="row">
                            <div class="col-sm-6">
                                <div class="form-group">
                                    <label for="title">Title</label>
                                    <input id="title" type="text" class="form-control{{ $errors->has('title') ? ' is-invalid' : '' }}" name="title" value="{{ $event->title }}" placeholder="Enter Full Name" autofocus>
                                    @if ($errors->has('title'))
                                        <span class="invalid-feedback" role="alert">
                                            <strong>{{ $errors->first('title') }}</strong>
                                        </span>
                                    @endif
                                </div>
                            </div>
                            <div class="col-sm-6">
                                <div class="form-group">
                                    <label for="status">Status</label>
                                    <input type="checkbox" name="status" value="1" @if($event->status == 1) ? checked @endif>
                                </div>
                            </div>
                            <div class="col-sm-12">
                                <div class="form-group">
                                    <label for="description">Content</label>
                                    <textarea name="description" id="summernote" class="form-control">{{ $event->description }}</textarea>
                                </div>
                            </div>

                            <div class="col-sm-6">
                                <div class="form-group">
                                    <label for="date">Date</label>
                                    <input id="date" type="date" class="form-control select2 {{ $errors->has('date') ? ' is-invalid' : '' }}" name="date" value="{{ $event->date }}" autofocus>
                                    @if ($errors->has('date'))
                                        <span class="invalid-feedback" role="alert">
                                            <strong>{{ $errors->first('date') }}</strong>
                                        </span>
                                    @endif
                                </div>
                            </div>
                            <div class="col-sm-6">
                                <div class="form-group">
                                    <label for="time">Time</label>
                                    <input id="time" type="text" class="form-control select2 {{ $errors->has('time') ? ' is-invalid' : '' }}" name="time" value="{{ $event->time }}" autofocus>
                                    @if ($errors->has('time'))
                                        <span class="invalid-feedback" role="alert">
                                            <strong>{{ $errors->first('time') }}</strong>
                                        </span>
                                    @endif
                                </div>
                            </div>
                            <div class="col-sm-6">
                                <div class="form-group">
                                    <label for="organizer">Organizer</label>
                                    <input id="organizer" type="text" class="form-control select2 {{ $errors->has('organizer') ? ' is-invalid' : '' }}" name="organizer" value="{{ $event->organizer }}" autofocus>
                                    @if ($errors->has('organizer'))
                                        <span class="invalid-feedback" role="alert">
                                            <strong>{{ $errors->first('organizer') }}</strong>
                                        </span>
                                    @endif
                                </div>
                            </div>
                            <div class="col-sm-6">
                                <div class="form-group">
                                    <label for="organizer_email">Organizer Email</label>
                                    <input id="organizer_email" type="email" class="form-control select2 {{ $errors->has('organizer_email') ? ' is-invalid' : '' }}" name="organizer_email" value="{{ $event->organizer_email }}" autofocus>
                                    @if ($errors->has('organizer_email'))
                                        <span class="invalid-feedback" role="alert">
                                            <strong>{{ $errors->first('organizer_email') }}</strong>
                                        </span>
                                    @endif
                                </div>
                            </div>
                            <div class="col-sm-6">
                                <div class="form-group">
                                    <label for="organizer_website">Organizer Website</label>
                                    <input id="organizer_website" type="text" class="form-control select2 {{ $errors->has('organizer_website') ? ' is-invalid' : '' }}" name="organizer_website" value="{{ $event->organizer_website }}" autofocus>
                                    @if ($errors->has('organizer_website'))
                                        <span class="invalid-feedback" role="alert">
                                            <strong>{{ $errors->first('organizer_website') }}</strong>
                                        </span>
                                    @endif
                                </div>
                            </div>
                            <div class="col-sm-6">
                                <div class="form-group">
                                    <label for="organizer_phone">Organizer Phone</label>
                                    <input id="organizer_phone" type="text" class="form-control select2 {{ $errors->has('organizer_phone') ? ' is-invalid' : '' }}" name="organizer_phone" value="{{ $event->organizer_phone }}" autofocus>
                                    @if ($errors->has('organizer_phone'))
                                        <span class="invalid-feedback" role="alert">
                                            <strong>{{ $errors->first('organizer_phone') }}</strong>
                                        </span>
                                    @endif
                                </div>
                            </div>
                            <div class="col-sm-6">
                                <div class="form-group">
                                    <label for="venue_location">Venue Location</label>
                                    <input id="venue_location" type="text" class="form-control select2 {{ $errors->has('venue_location') ? ' is-invalid' : '' }}" name="venue_location" value="{{ $event->venue_location }}" autofocus>
                                    @if ($errors->has('venue_location'))
                                        <span class="invalid-feedback" role="alert">
                                            <strong>{{ $errors->first('venue_location') }}</strong>
                                        </span>
                                    @endif
                                </div>
                            </div>
                            <div class="col-sm-6">
                                <div class="form-group">
                                    <label for="venue_phone">Venue Phone</label>
                                    <input id="venue_phone" type="text" class="form-control select2 {{ $errors->has('venue_phone') ? ' is-invalid' : '' }}" name="venue_phone" value="{{ $event->venue_phone }}" autofocus>
                                    @if ($errors->has('venue_phone'))
                                        <span class="invalid-feedback" role="alert">
                                            <strong>{{ $errors->first('venue_phone') }}</strong>
                                        </span>
                                    @endif
                                </div>
                            </div>

                            <div class="col-sm-6">
                                <div class="form-group">
                                    <label for="image">Image</label>
                                    <input type="file" name="image" class="form-control">
                                    @if(isset($event->image))
                                        <img class="" height="100" width="100"
                                             src="{{ asset('uploads/events/'.$event->image) }}"
                                             alt="User profile picture">
                                    @endif
                                </div>
                            </div>

                        </div>
                    </div>
                    <!-- /.card-body -->

                    <div class="card-footer">
                        <button type="submit" class="btn btn-primary">Submit</button>
                        <a href="{{ route('events.index') }}" class="btn btn-danger">Cancel</a>
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
