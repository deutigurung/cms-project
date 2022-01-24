@extends('adminlte::page')
@section('title', 'Testimonial')

@section('content_header')
    <div class="container-fluid">
        <div class="row mb-2">
            <div class="col-sm-6">
                <h1>Testimonial</h1>
            </div>
            <div class="col-sm-6">
                <ol class="breadcrumb float-sm-right">
                    <li class="breadcrumb-item"><a class="btn btn-sm btn-success" href="{{ route('testimonials.create') }}">Add</a></li>
                </ol>
            </div>
        </div>
    </div><!-- /.container-fluid -->
@stop

@section('content')
    <div class="row">
        <div class="col-12">
            <div class="card">
                <div class="card-body">
                    @include('layouts.notification')
                    <table id="example1" class="table table-bordered table-striped">
                        <thead>
                        <tr>
                            <th>Id</th>
                            <th>Photo</th>
                            <th>Name</th>
                            <th>Designation</th>
                            <th>Description</th>
                            <th>Status</th>
                            <th>Actions</th>
                        </tr>
                        </thead>
                        <tbody>
                            @foreach($testimonials as $testimonial)
                                <tr>
                                    <td>{{$testimonial->id}}</td>
                                    <td>
                                        <img class="profile-user-img img-fluid img-circle"
                                              src="{{ asset('uploads/testimonials/'.$testimonial->image) }}"
                                              alt="{{ $testimonial->name }}">
                                    </td>
                                    <td>{{$testimonial->name}}</td>
                                    <td>{{$testimonial->designation}}</td>
                                    <td>{{strip_tags($testimonial->description)}}</td>
                                    <td>{{ ($testimonial->status == 1) ? 'Active' : 'Inactive' }}</td>
                                    <td>
                                        <form method="POST" action="{{ route('testimonials.destroy',$testimonial->id) }}" class="confirmation">
                                            <input type="hidden" name="_method" value="DELETE" />
                                            @csrf
                                            <a href="{{ route('testimonials.edit',$testimonial->id) }}" class="btn btn-success btn-action btn-sm"><i class="fas fa-fw fa-pen"></i></a>
                                            <button type="submit" title="Delete" class="btn btn-danger btn-action btn-sm"><i class="fas fa-fw fa-cut"></i></button>
                                        </form>
                                    </td>
                                </tr>
                            @endforeach
                        </tbody>
                        <tfoot>
                        <tr>
                            <th>Id</th>
                            <th>Photo</th>
                            <th>Name</th>
                            <th>Designation</th>
                            <th>Description</th>
                            <th>Status</th>
                            <th>Actions</th>
                        </tr>
                        </tfoot>
                    </table>
                </div>
            </div>
        </div>
    </div>
@stop
@section('adminlte_js')
    <script>
        $(document).ready(function () {
            $('#example1').DataTable();
            $(".confirmation").on("submit", function(){
                return confirm("Are you sure want to delete?");
            });
        });
    </script>
@endsection
