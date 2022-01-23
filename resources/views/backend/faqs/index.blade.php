@extends('adminlte::page')
@section('content_header')
    <div class="container-fluid">
        <div class="row mb-2">
            <div class="col-sm-6">
                <h1>Faq</h1>
            </div>
            <div class="col-sm-6">
                <ol class="breadcrumb float-sm-right">
                    <li class="breadcrumb-item"><a class="btn btn-sm btn-success" href="{{ route('faqs.create') }}">Add</a></li>
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
                            <th>Name</th>
                            <th>Description</th>
                            <th>Actions</th>
                        </tr>
                        </thead>
                        <tbody>
                        @foreach($faqs as $faq)
                            <tr>
                                <td>{{ $faq->id }}</td>
                                <td>{{ $faq->name }}</td>
                                <td>{{ $faq->description }}</td>
                                <td>
                                    <form method="POST" action="{{ route('faqs.destroy',$faq->id) }}" class="confirmation">
                                        <input type="hidden" name="_method" value="DELETE" />
                                        @csrf
                                        <a href="{{ route('faqs.edit',$faq->id) }}" class="btn btn-success btn-action btn-sm"><i class="fas fa-fw fa-pen"></i></a>
                                        <button type="submit" title="Delete" class="btn btn-danger btn-action btn-sm"><i class="fas fa-fw fa-cut"></i></button>
                                    </form>
                                </td>
                            </tr>
                        @endforeach
                        </tbody>
                        <tfoot>
                        <tr>
                            <th>Id</th>
                            <th>Name</th>
                            <th>Description</th>
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
