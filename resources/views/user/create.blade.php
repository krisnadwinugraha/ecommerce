@extends('layouts.app')

@section('content')


<link href="../css/admin.min.css" rel="stylesheet">

<body id="page-top">

    <div id="wrapper">

        <ul class="navbar-nav bg-gradient-primary sidebar sidebar-dark accordion" id="accordionSidebar">

            <a class="sidebar-brand d-flex align-items-center justify-content-center" href="index.html">
                <div class="sidebar-brand-icon rotate-n-15">
                    <i class="fas fa-laugh-wink"></i>
                </div>
                <div class="sidebar-brand-text mx-3">Admin Area</div>
            </a>

            <hr class="sidebar-divider my-0">

            <li class="nav-item active">
                <a class="nav-link" href="{{ url('/admin')}}">
                    <i class="fas fa-fw fa-tachometer-alt"></i>
                    <span>Dashboard</span></a>
            </li>

            @foreach ($dashboard as $panel)
                <li class="nav-item">
                    <a class="nav-link" href="{{ url('/'.$panel["link"].'/')}}">
                        <i class="fas fa-fw fa-chart-area"></i>
                        <span>{{ $panel["name"] }}</span>            
                     </a>
                </li>
            @endforeach

            <hr class="sidebar-divider d-none d-md-block">

        </ul>
        
        <div id="content-wrapper" class="d-flex flex-column">
            <div id="content">
                <div class="container-fluid pt-5">

                    <div class="d-sm-flex align-items-center justify-content-between mb-4">
                        <h1 class="h3 mb-0 text-gray-800">User</h1>
                    </div>

                    <form method="post" action="{{ route('user.store') }}" enctype="multipart/form-data">
                        <div class="form-group">
                            @csrf
                            <label for="name">Name</label>
                                <input type="text" name="name" class="form-control" id="name">
                        </div>
                        <div class="form-group">
                                <label for="email">Email</label>
                                <input type="email" name="email" class="form-control" id="email">
                        </div>
                        <div class="form-group">
                                <label for="password">Password</label>
                                <input type="password" name="password" class="form-control" id="password" >
                        </div>
                        <div class="form-group">
                            @csrf
                            <label for="level">Level</label>
                                <input type="text" name="level" class="form-control" id="level">
                        </div>
                        <button type="submit" class="btn btn-primary">Add Game</button>
                    </form>
 
                </div>
            </div>
        </div>
    </div>

</body>

</html>

@endsection