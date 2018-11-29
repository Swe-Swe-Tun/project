@extends('layout.master')
@section('title','Edit User')
@section('content')
    <div class="container">
        <div class="row">
            <div class="col-md-3">
                @include('layout.sidebar')
            </div>
            <div class="col-md-9">
                @include('layout.error')
                @if(\Illuminate\Support\Facades\Session::has('status'))
                    <p class="alert alert-success">{{Session::get('status')}}</p>
                    @endif
                <form method="post">
                    @include('layout.error')
                    {{csrf_field()}}
                    <div class="form-group">
                        <label for="name">Name</label>
                        <input type="text" class="form-control" name="name" id="exampleInputEmail1" value="{{$user->name}}">
                    </div>
                    <div class="form-group">
                        <label for="exampleInputEmail1">Email address</label>
                        <input type="email" class="form-control" name="email" id="exampleInputEmail1" value="{{$user->email}}" >
                    </div>

                    <div class="form-group">
                        <label for="sel1">Roles</label>
                        <select class="form-control" id="sel1" name="role[]" multiple>
                            @foreach($roles as $role)
                            <option value="{{$role->name}}"
                                    @if(in_array($role->name,$selectedRoles))
                                        selected="selected"
                                    @endif>{{$role->name}}</option>
                            @endforeach

                        </select>
                    </div>

                    <button type="submit" class="btn btn-default">Update User</button>
                </form>
            </div>
        </div>
    </div>
@endsection