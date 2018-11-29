@extends('layout.master')
@section('title','Category')
@section('content')
    <div class="container">
        <div class="col-md-3">
            @include('layout.sidebar')
        </div>
        <div class="col-md-9">
            <form method="post">
                @include('layout.error')
                {{csrf_field()}}
                @if(\Illuminate\Support\Facades\Session::has('status'))
                    <p class="alert alert-success">{{Session::get('status')}}</p>

                @endif
                <div class="form-group">
                    <label for="exampleInputEmail1">Category Name</label>
                    <input type="text" class="form-control" name="name" id="exampleInputEmail1" >
                </div>


                <button type="submit" class="btn btn-primary">Create</button>
            </form>

        </div>
    </div>
@endsection