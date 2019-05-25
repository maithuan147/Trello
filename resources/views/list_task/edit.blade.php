@extends('layouts.app')
@section('title','edit')
@section('content')
    <h3>Edit{{ $listtask->title }}</h3>
    <form action="{{ route('listtask.update', $listtask) }}" method="POST">
        @csrf
        @method('PUT')
        <label for="">Title</label>
        <input type="text" name="title" value="{{ $listtask->title }}"/>
        <input type="submit" value="edit"/>
    </form>
@endsection