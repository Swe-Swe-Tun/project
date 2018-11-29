@extends('layout.master')
@section('title','Home')
@section('content')
    <div class="container-fluid">
        <div class="row">
            <div class="col-md-3">
                @include('layout.sidebar')
            </div>
            <div class="col-md-9">
                <h1>This is My Home Page</h1>
            </div>
        </div>
    </div>

    @endsection