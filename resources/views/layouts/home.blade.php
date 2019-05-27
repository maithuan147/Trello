<!doctype html>
<html lang="{{ app()->getLocale() }}">
    <head>
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta content="width=device-width, initial-scale=1, maximum-scale=1, user-scalable=no" name="viewport">
        <title>@yield('title')</title>
        <!-- Tell the browser to be responsive to screen width -->
        <link rel="stylesheet" href="{{ asset('css/bootstrap/bootstrap.min.css') }}">
        <!-- Theme style -->
        <link href="{{ asset('css/app.css') }}" rel="stylesheet">
        <!-- Google Font -->
        <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Source+Sans+Pro:300,400,600,700,300italic,400italic,600italic">

        {{-- /// --}}
        <title>@yield('title')</title>
        <link rel="stylesheet" href="{{ asset('css/style.css') }}">
        <!-- Bootstrap 3.3.7 -->
        <link href="https://unpkg.com/ionicons@4.5.5/dist/css/ionicons.min.css" rel="stylesheet">
        <link rel="stylesheet" href="{{ asset('css/bootstrap/bootstrap.min.css') }}">
        <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.6.3/css/all.css" integrity="sha384-UHRtZLI+pbxtHCWp1t77Bi1L4ZtiqrqD80Kn4Z8NTSRyMA2Fd33n5dQ8lWUE00s/" crossorigin="anonymous">

        <!-- Styles -->
        <link href="{{ asset('css/app.css') }}" rel="stylesheet">
    </head>
    <body>     
        <aside class="main-sidebar">
            <!-- sidebar: style can be found in sidebar.less -->
            <section class="sidebar">
                <!-- Sidebar user panel -->
                <div class="user-panel">
                <div class="pull-left image">
                    <img src="{{ asset('img/user2.jpg') }}" class="img-circle" alt="User Image">
                </div>
                <div class="pull-left info">
                    <p>Alexander Pierce</p>
                    <a href="#"><i class="fa fa-circle text-success"></i> Online</a>
                </div>
                </div>
                
                <!-- /.search form -->
                <!-- sidebar menu: : style can be found in sidebar.less -->
                <ul class="sidebar-menu" data-widget="tree">
                <li class="active">
                <a href="{{ url('index') }}">
                    <i class="fa fa-dashboard"></i> <span>Dashboard</span>
                    </a>
                </li> 
                <li class="">            
                    <a href="{{ url('listtask') }}">
                    <i class="fa fa-pie-chart"></i> <span>Lists</span>
                    </a>
                </li> 
                <li class="">            
                    <a href="{{ url('user') }}">
                        <i class="fa fa-laptop"></i> <span>Users</span>
                    </a>
                    </li> 
                <li class="treeview">
                    <a href="#">
                    <i class="fa fa-edit"></i> <span>Tasks</span>
                    <span class="pull-right-container">
                        <i class="fa fa-angle-left pull-right"></i>
                    </span>
                    </a>
                    <ul class="treeview-menu">
                    <li><a href="{{ url('task') }}"><i class="fa fa-circle-o"></i> Tasks</a></li>
                    <li><a href="pages/forms/general.html"><i class="fa fa-circle-o"></i> Comments</a></li>
                    <li><a href="pages/forms/advanced.html"><i class="fa fa-circle-o"></i> Attachments</a></li>
                    <li><a href="pages/forms/editors.html"><i class="fa fa-circle-o"></i> Checklists</a></li>
                    <li><a href="pages/forms/editors.html"><i class="fa fa-circle-o"></i> Labels</a></li>
                    </ul>
                </li>
        @yield('content')
        @stack('scripts')
    </body>
</html>
