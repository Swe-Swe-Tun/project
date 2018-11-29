@extends('layout.master')
@section('title','Category')
@section('content')
    <div class="container">
        <div class="col-md-3">
            @include('layout.sidebar')
        </div>
        <div class="col-md-9">
            <a href="{{url('admin/category/create')}}" class="btn btn-primary">Create</a>

        </div>
    </div>
    @endsection