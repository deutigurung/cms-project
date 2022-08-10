@extends('adminlte::page')
@section('content_header')
<<<<<<< HEAD
    <h1 class="m-0 text-dark">Edit Team</h1>
=======
    <h1 class="m-0 text-dark">Edit Contact</h1>
>>>>>>> fa582ccc30c5c5f275c37646d78258783be695f4
@stop

@section('content')
    <div class="row">
        <div class="col-12">
            <div class="card">
<<<<<<< HEAD
                <form role="form" class="form" method="post" action="{{ route('teams.update',$team) }}" enctype="multipart/form-data">
=======
                <form role="form" class="form" method="post" action="{{ route('contacts.update',$team) }}" enctype="multipart/form-data">
>>>>>>> fa582ccc30c5c5f275c37646d78258783be695f4
                    @csrf
                    {{ method_field('PUT') }}
                    <div class="card-body">
                        <div class="row">
                            <div class="col-sm-6">
                                <div class="form-group">
                                    <label for="title">Name</label>
                                    <input id="title" type="text" class="form-control{{ $errors->has('title') ? ' is-invalid' : '' }}" name="title" value="{{ $team->title }}" placeholder="Enter Full Name" autofocus>
                                    @if ($errors->has('title'))
                                        <span class="invalid-feedback" role="alert">
                                            <strong>{{ $errors->first('title') }}</strong>
                                        </span>
                                    @endif
                                </div>
                            </div>
                            <div class="col-sm-6">
                                <div class="form-group">
                                    <label for="designation">Designation</label>
                                    <input id="designation" type="text" class="form-control{{ $errors->has('designation') ? ' is-invalid' : '' }}" name="designation" value="{{ $team->designation }}" placeholder="Enter Full Name" autofocus>
                                    @if ($errors->has('designation'))
                                        <span class="invalid-feedback" role="alert">
                                            <strong>{{ $errors->first('designation') }}</strong>
                                        </span>
                                    @endif
                                </div>
                            </div>
<<<<<<< HEAD
=======
                            <div class="col-sm-6">
                                <div class="form-group">
                                    <label for="email">Email</label>
                                    <input id="email" type="email" class="form-control{{ $errors->has('email') ? ' is-invalid' : '' }}" name="email" value="{{ $team->email }}" placeholder="Enter Full Name" autofocus>
                                    @if ($errors->has('email'))
                                        <span class="invalid-feedback" role="alert">
                                            <strong>{{ $errors->first('email') }}</strong>
                                        </span>
                                    @endif
                                </div>
                            </div>
                            <div class="col-sm-6">
                                <div class="form-group">
                                    <label for="address">Address</label>
                                    <input id="address" type="text" class="form-control{{ $errors->has('address') ? ' is-invalid' : '' }}" name="address" value="{{ $team->address }}" placeholder="Enter Full Name" autofocus>
                                    @if ($errors->has('address'))
                                        <span class="invalid-feedback" role="alert">
                                            <strong>{{ $errors->first('address') }}</strong>
                                        </span>
                                    @endif
                                </div>
                            </div>
>>>>>>> fa582ccc30c5c5f275c37646d78258783be695f4
                            <div class="col-sm-12">
                                <div class="form-group">
                                    <label for="description">Description</label>
                                    <textarea name="description" class="form-control">{{ $team->description }}</textarea>
                                </div>
                            </div>
                            <div class="col-sm-6">
                                <div class="form-group">
<<<<<<< HEAD
=======
                                    <label for="phone">Contact Number</label>
                                    <input type="number" name="phone" value="{{ $team->phone }}" class="form-control">
                                </div>
                            </div>
                            <div class="col-sm-6">
                                <div class="form-group">
>>>>>>> fa582ccc30c5c5f275c37646d78258783be695f4
                                    <label for="photo">Image</label>
                                    <input type="file" name="photo" class="form-control">
                                </div>
                            </div>
                            <div class="col-sm-6">
                                <div class="form-group">
                                    @if(isset($team->photo))
                                        <img class="profile-user-img img-fluid img-circle"
                                             src="{{ asset('uploads/teams/'.$team->photo) }}"
                                             alt="{{ $team->title }}">
                                    @endif
                                </div>
                            </div>
                            <div class="col-sm-12">
                                <div class="form-group">
                                    <label for="status">Status</label>
                                    <input type="checkbox" name="status" value="1" @if($team->status == 1) ? checked @endif>
                                </div>
                            </div>

                        </div>
                    </div>
                    <!-- /.card-body -->

                    <div class="card-footer">
                        <button type="submit" class="btn btn-primary">Submit</button>
<<<<<<< HEAD
                        <a href="{{ route('teams.index') }}" class="btn btn-danger">Cancel</a>
=======
                        <a href="{{ route('contacts.index') }}" class="btn btn-danger">Cancel</a>
>>>>>>> fa582ccc30c5c5f275c37646d78258783be695f4
                    </div>
                </form>
            </div>
        </div>
    </div>
@stop
