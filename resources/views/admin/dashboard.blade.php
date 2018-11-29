@extends('layout.master')
@section('title','Admin Dashboard')
@section('content')
    <div class="container">
        <div class="col-md-8 col-md-offset-2">
            <div class="well well bs-component">
                <div class="foruser">
                    <h3>For User</h3>
                    <a href="{{url('admin/all')}}" class="btn btn-primary">All User</a>
                    <a href="{{url('admin/roles')}}" class="btn btn-primary">Add Role</a>
                    <a href="{{url('user/profile')}}" class="btn btn-primary">User Profile</a>
                </div>
                <div class="forcat">
                    <h3>For Category</h3>
                    <a href="{{url('admin/allcategory')}}" class="btn btn-primary">View Catebory</a>
                    <a href="{{url('admin/category/create')}}"class="btn btn-primary">Create</a>
                </div>
                <div class="forpost">
                    <h3>For Post</h3>
                    <a href="{{url('post/allpost')}}" class="btn btn-primary">View Post</a>
                    <a href="{{url('post/create')}}" class="btn btn-primary">Create Post</a>
                </div>
            </div>
        </div>
    </div>
@endsection