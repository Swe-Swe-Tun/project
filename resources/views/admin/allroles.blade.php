@extends('layout.master')
@section('title','All Roles')
@section('content')
    <div class="container">
        <div class="col-md-8 col-md-offset-2">
            <div class="well">
                <table class="table table-bordered">

                    <thead>
                    <th>No</th>
                    <th>Name</th>
                    <th>Data</th>
                    </thead>
                    <tbody>
                    @foreach($roles as $role)
                        <tr>
                            <td>{{$role->id}}</td>
                            <td>{{$role->name}}</td>
                            <td>
                                <a href="{{url('roles/'.$role->id.'/edit')}}" class="btn btn-warning btn-sm">Edit</a>
                                <a href="{{url('roles/'.$role->id.'/ban')}}" class="btn btn-danger btn-sm">Ban</a>
                            </td>
                        </tr>
                    @endforeach
                    </tbody>


                </table>
            </div>

            <div class="well well bs-component">
                @if(Session::has('status'))
                    <p class="alert alert-success">{{Session::get('status')}}</p>
                @endif
                @include('layout.error')
                <legend>Create Roles</legend>
                <form action="" method="post">
                    {{csrf_field()}}
                    <div class="form-group">
                        <label for="name">Name</label>
                        <input type="text" class="form-control" name="name" id="name">

                    </div>
                    <button class="btn btn-primary">Add Role</button>
                </form>
            </div>

        </div>


    </div>
@endsection