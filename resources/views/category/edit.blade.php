@extends('layout.master')
@section('title','Category')
@section('content')
    <div class="container">
        <div class="col-md-3">
            @include('layout.sidebar')
        </div>
        <div class="col-md-9">
            @if(\Illuminate\Support\Facades\Session::has('status'))
                <p class="alert alert-success">{{Session::get('status')}}</p>
                @endif
            <form method="post">
                @include('layout.error')
                {{csrf_field()}}


                <div class="form-group">
                    <label for="name">Category Name</label>
                    <input type="text" class="form-control" name="name" id="name" value="{{$category->name}}">
                </div>


                <button type="submit" class="btn btn-primary">Update</button>
            </form>

        </div>
    </div>
@endsection