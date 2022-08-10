@extends('adminlte::page')
@section('content_header')
    <div class="container-fluid">
        <div class="row mb-2">
            <div class="col-sm-6">
                <h1>Notifications</h1>
            </div>
            <div class="col-sm-6">
                <ol class="breadcrumb float-sm-right">
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
                            <th></th>
                            <th>Notification By</th>
                            <th>Type</th>
                            <th>Message</th>
                        </tr>
                        </thead>
                        <tbody>
                        @foreach($notifications as $notify)
                            <tr>
                                <td>{{$notify->id}}</td>
                                <td>
                                    @if($notify->mark_read != 1)
                                    <div class="form-group">
                                        <div
                                            class="custom-control custom-switch custom-switch-off-danger custom-switch-on-success">
                                            <input type="checkbox" class="custom-control-input" name="status"
                                                   id="customSwitch3" data-id="{{ $notify->id }}">
                                            <label class="custom-control-label" for="customSwitch3">Mark
                                                as Read</label>
                                        </div>
                                    </div>
                                    @else
                                        Read
                                    @endif
                                </td>
                                <td><a href="">{{ $notify->notification_by }}</a></td>
                                <td><b>{{ $notify->type }}</b>
                                    - {{ $notify->message }}
                                </td>
                                <td>{{ $notify->created_at->diffForHumans() }}</td>
                            </tr>
                        @endforeach

                        </tbody>
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
        });
        $('#customSwitch3').on('click',function(){
            let notification = $(this).data('id');
            // alert(notification)
            $.ajax({
                url: "{{ url('admin/notifications/')}}",
                type: "POST",
                data: {
                    _token: "{{csrf_token()}}",
                    notify_id : notification
                },
                success: function (data) {
                    console.log(data);
                }
            });
        });
    </script>
@endsection
