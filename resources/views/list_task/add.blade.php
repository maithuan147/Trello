@extends('layouts.app')
@section('title', 'List Add')

@section('content')
    <h3>Add List</h3>
    <form method="POST" action="{{ route('listtask.store') }}">
        @csrf
        @method('POST')
        <label>Title</label>
        <input type="text" name="title"/>
        <input type="submit" value="Create"/>
    </form>
@endsection