@extends('layout.master')
@section('title','All User')
@section('content')
    <div class="container-fluid">
        <div class="row">
            <div class="col-md-3">
               @include('layout.sidebar')
            </div>
            <div class="col-md-9">
                <div class="col-md-12 text-right">
                    <div class="btn-group" role="group" aria-label="...">
                        <button type="button" class="btn btn-default">1</button>
                        <button type="button" class="btn btn-default">2</button>

                        <div class="btn-group" role="group">
                            <button type="button" class="btn btn-default dropdown-toggle" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                Dropdown
                                <span class="caret"></span>
                            </button>
                            <ul class="dropdown-menu">
                                <li><a href="#">Admin</a></li>
                                <li><a href="#">Manager</a></li>
                                <li><a href="#">Mordator</a></li>
                                <li><a href="#">Content Writer</a></li>
                            </ul>
                        </div>
                    </div>
                </div>
                <table class="table table-bordered">
                    <thead>
                    <th>No</th>
                    <th>Name</th>
                    <th>Display Name</th>
                    <th>Address</th>
                    <th>Phone</th>
                    <th>Age</th>
                    <th>Gender</th>
                    <th>Dob</th>
                    <th>Edit & Ban</th>
                    </thead>
                    <tbody>
                    @foreach($users as $user)
                        <tr>
                            <td>{{$user->id}}</td>
                            <td>{{$user->name}}</td>
                            <td>{{$user->profile->display_name}}</td>
                            <td>{{$user->profile->address}}</td>
                            <td>{{$user->profile->phone}}</td>
                            <td>{{$user->profile->age}}</td>
                            <td>
                                @if($user->profile->gender==1)
                                    Male
                                @else
                                    Female
                                @endif

                            </td>
                            <td>{{$user->profile->dob->toFormattedDateString()}}</td>
                            <td>
                                <a href="{{url('admin/'.$user->id.'/edit')}}" class="btn btn-warning btn-sm">Edit</a>
                                @if($user->deleted_at!=null)
                                    <a href="{{url('admin/'.$user->id.'/all')}}" class="btn btn-danger btn-sm">Active</a>
                                @else
                                    @if($user->id==1)
                                        <a href="{{url('admin/'.$user->id.'/all')}}" class="btn btn-info btn-sm disabled">ban</a>
                                    @else
                                        <a href="{{url('admin/'.$user->id.'/all')}}" class="btn btn-info btn-sm">ban</a>
                                    @endif

                                @endif
                            </td>
                        </tr>
                    @endforeach
                    </tbody>
                </table>
            </div>
        </div>

    </div>
    @endsection