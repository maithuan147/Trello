@extends('layouts.app')
@section('title', 'List Title')
@push('head')
    <link href="{{ asset('css/bootstrap-wysihtml5/bootstrap3-wysihtml5.min.css') }}" rel="stylesheet">
    <!-- Font Awesome -->
    <link rel="stylesheet" href="{{ asset('css/font-awesome/font-awesome.min.css') }}">
    <!-- Ionicons -->
    <link rel="stylesheet" href="{{ asset('css/Ionicons/ionicons.min.css') }}">
    <!-- Theme style -->
    <link rel="stylesheet" href="{{ asset('css/AdminLTE/AdminLTE.min.css') }}">
    <!-- AdminLTE Skins. Choose a skin from the css/skins
            folder instead of downloading all of them to reduce the load. -->
    <link rel="stylesheet" href="{{ asset('css/AdminLTE/skins/_all-skins.min.css') }}">
    <!-- Fonts -->
    <link href="https://fonts.googleapis.com/css?family=Raleway:100,600" rel="stylesheet" type="text/css">
    <link rel="stylesheet"
        href="https://fonts.googleapis.com/css?family=Source+Sans+Pro:300,400,600,700,300italic,400italic,600italic">
        <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
@endpush
@section('content')
    <div class="content-wrapper" style="min-height: calc(100vh - 105px);">
        <!-- Content Header (Page header) -->
        <section class="content-header">
        <h1>
            Simple Tables
            <small>preview of simple tables</small>
        </h1>
        <ol class="breadcrumb">
            <li><a href="#"><i class="fa fa-dashboard"></i> Home</a></li>
            <li><a href="#">Tables</a></li>
            <li class="active">Simple</li>
        </ol>
        </section>
        <div class="row bg-white font-size-13 mx-15 py-10 mt-15 mb-3">
                <div class="col-sm-6">
                    <div class="dropdown display-inline-block">
                        <button class="btn btn-primary dropdown-toggle mr-10" type="button" id="dropdownMenuButton" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                        Bulk Actions
                        </button>
                        <div class="dropdown-menu" aria-labelledby="dropdownMenuButton">
                            <a class="dropdown-item" href="#">Action</a>
                            <a class="dropdown-item" href="#">Another action</a>
                        </div>
                    </div>
                    <button class="btn btn-primary btn-show-table-options">Filters</button>
                </div>
                <div class="col-sm-6 justify-content-end display-flex">
                    <a href="" class="bg-36c6d3 px-10 mr-10 color-white"><i class="fa fa-plus"></i> Create</a>
                    <a href="" class="bg-36c6d3 px-10 color-white"><i class="fas fa-sync"></i> Reload</a>			
                </div>
            </div>
        <div>
        <table class="table table-striped mx-15 ">
            <tr class="bg-fbfcfd color-AFAFAF">
                <th width="5%">ID</th>
                <th>TITLE</th>
                <th>CREATED_AT</th>
                <th>UPDATED_AT</th>
                <th>OPERATIONS</th>
            </tr>
            @foreach ($listtasks as $list)
            <tr class="child">
                <td>{{ $list->id }}</td>
                <td>{{ $list->title }}</td>
                <td>{{ $list->created_at }}</td>
                <td>{{ $list->updated_at }}</td>
                <td>
                    <a href="{{ route('listtask.edit', $list) }}" class="btn btn-primary"><i class="fa fa-edit"></i></a>
                    <form action="{{ route('listtask.destroy',$list) }}" method="post" class="display-inline-block">
                            @csrf
                            @method('DELETE')
                            <input type="submit" class="btn btn-primary" value="{{ __('Xóa') }}" />
                        </form>
                </td>
                   
            </tr>
            @endforeach
        </table>
        {{ $listtasks->links() }}
        </div>
    </div>
    
@endsection
@push('head')
    <script src="{{ asset('js/jquery/jquery.min.js')}}"></script>
    <!-- jQuery UI 1.11.4 -->
    <script src="{{ asset('js/jquery-ui/jquery-ui.min.js')}}"></script>
    <!-- Resolve conflict in jQuery UI tooltip with Bootstrap tooltip -->
    <script>
    $.widget.bridge('uibutton', $.ui.button);
    </script>
    <!-- Bootstrap 3.3.7 -->
    <script src="{{ asset('js/bootstrap/bootstrap.min.js')}}"></script>
    <script src="{{ asset('js/dist/adminlte.min.js')}}"></script>
@endpush