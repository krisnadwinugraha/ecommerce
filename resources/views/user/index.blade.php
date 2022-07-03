@extends('layouts.app')

@section('content')


<link href="css/admin.min.css" rel="stylesheet">

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
                        <td><a href="{{ url('user/create/')}}"><button type="button" class="btn btn-primary">Add Data</button></a>
                    </div>

                    <table class="table">
                        <thead>
                            <tr>
                            <th scope="col">ID</th>
                            <th scope="col">Name</th>
                            <th scope="col">Email</th>
                            <th scope="col">Password</th>
                            <th scope="col">Level</th>
                            <th scope="col">Action</th>
                            </tr>
                        </thead>
                        <tbody>

                        @foreach ($user as $users)
                            <tr>
                            <th scope="row">{{ $users["id"] }}</th>
                            <td>{{ $users["name"] }}</td>
                            <td>{{ $users["email"] }}</td>
                            <td>{{ $users["password"] }}</td>
                            <td>{{ $users["level"] }}</td>
                            <td>
                                <a href="{{route('user.edit', $users->id)}}"> <button type="button" class="btn btn-secondary">Edit</button></a>
                            
                                <form action="{{ route('user.destroy', $users->id)}}" method="post" class="d-inline">
                                    @csrf
                                    @method('DELETE')
                                    <button class="btn btn-danger" type="submit" onClick="return confirm('Are You sure')">Delete</button>
                                </form>
                            </td> 
                            </tr>
                        @endforeach 

                        </tbody>
                    </table>

                </div>
            </div>
        </div>
    </div>

</body>

</html>

@endsection