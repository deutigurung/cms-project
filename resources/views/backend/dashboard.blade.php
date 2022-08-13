@extends('adminlte::page')
<<<<<<< HEAD
<<<<<<< HEAD

=======
=======
>>>>>>> 87e4c50425f5e31ccb0cc61cade9d906597c20dd
@section('content_top_nav_right')
    <li class="nav-item dropdown">
        <a class="nav-link" data-toggle="dropdown" href="#">
            <i class="far fa-bell"></i>
            <span class="badge badge-danger navbar-badge">{{ count($notifications) }}</span>
        </a>
        <div class="dropdown-menu dropdown-menu-lg dropdown-menu-right">
            @foreach($notifications as $notify)
                <div class="dropdown-divider"></div>
                    <a href="{{ route('queries.notifications') }}" class="dropdown-item">
                    <i class="fas fa-envelope mr-2"></i> {{ count($notifications) }} new messages
                    <span class="float-right text-muted text-sm">{{ $notify->created_at->diffForHumans() }}</span>
                </a>
            @endforeach
            <div class="dropdown-divider"></div>
            <a href="{{ route('queries.notifications') }}" class="dropdown-item dropdown-footer">See All Notifications</a>
        </div>
    </li>
@endsection
<<<<<<< HEAD
>>>>>>> fa582ccc30c5c5f275c37646d78258783be695f4
=======
>>>>>>> 87e4c50425f5e31ccb0cc61cade9d906597c20dd
@section('title', 'Dashboard')

@section('content_header')
    <h1>Dashboard</h1>
@stop

@section('content')
    <p>Welcome to this beautiful admin panel.</p>
@stop
