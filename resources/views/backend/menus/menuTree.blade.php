@extends('adminlte::page')
@section('content_header')
    <h1 class="m-0 text-dark">Menu</h1>
@stop
@section('content')
    <div class="row">
        <div class="col-12">
            <div class="card">
                <div class="card-header">
                    <h5>Manage Menu</h5>
                </div>
                <div class="card-body">
                    <div class="row">
                        <div class="col-md-6">
                            <h5 class="mb-4 text-center bg-success text-white ">Add New Menu</h5>
                            <form accept="{{ route('menus.store')}}" method="post">
                                @csrf
                                @if(count($errors) > 0)
                                    <div class="alert alert-danger  alert-dismissible">
                                        <button type="button" class="close" data-dismiss="alert">×</button>
                                        @foreach($errors->all() as $error)
                                            {{ $error }}<br>
                                        @endforeach
                                    </div>
                                @endif
                                @if ($message = Session::get('success'))
                                    <div class="alert alert-success  alert-dismissible">
                                        <button type="button" class="close" data-dismiss="alert">×</button>
                                        <strong>{{ $message }}</strong>
                                    </div>
                                @endif
                                <div class="row">
                                    <div class="col-md-12">
                                        <div class="form-group">
                                            <label>Title</label>
                                            <input type="text" name="title" class="form-control">
                                        </div>
                                    </div>
                                </div>
                                <div class="row">
                                    <div class="col-md-12">
                                        <div class="form-group">
                                            <label>Url</label>
                                            <input type="text" name="url" class="form-control">
                                        </div>
                                    </div>
                                </div>
                                <div class="row">
                                    <div class="col-md-12">
                                        <div class="form-group">
                                            <label>Parent</label>
                                            <select class="form-control" name="parent_id">
                                                <option selected disabled>Select Parent Menu</option>
                                                @foreach($allMenus as $key => $value)
                                                    <option value="{{ $key }}">{{ $value}}</option>
                                                @endforeach
                                            </select>
                                        </div>
                                    </div>
                                </div>
                                <div class="row">
                                    <div class="col-md-12">
                                        <button class="btn btn-success">Save</button>
                                    </div>
                                </div>
                            </form>
                        </div>
                        <div class="col-md-6">
                            <h5 class="text-center mb-4 bg-info text-white">Menu List</h5>
                            <ul id="tree1">
                                @foreach($menus as $menu)
                                    <li>
                                        {{ $menu->title }}
                                        @if(count($menu->childs))
                                            @include('backend.menus.manageChild',['childs' => $menu->childs])
                                        @endif
                                    </li>
                                @endforeach
                            </ul>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
@include('backend.menus.menu')
@stop
