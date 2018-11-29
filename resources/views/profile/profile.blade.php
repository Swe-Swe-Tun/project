@extends('layout.master')
@section('title','profile')
@section('content')
    <div class="container">
        <div class="col-md-8 col-md-offset-2">
            <a href="{{url('user/profile/'.$user->id.'/edit')}}" class="btn btn-info">Edit</a>
            <table class="table table-bordered">
                <thead>
                <th>Category</th>
                <th>Data</th>
                </thead>
                <tbody>
                <tr>
                    <td>Name</td>
                    <td>{{$user->name}}</td>

                </tr>
                <tr>
                    <td>Display Name</td>
                    <td>{{$user->profile->display_name}}</td>
                </tr>
                <tr>
                    <td>Address</td>
                    <td>{{$user->profile->address}}</td>
                </tr>

                <tr>
                    <td>Pone</td>
                    <td>{{$user->profile->phone}}</td>
                </tr>

                <tr>
                    <td>Age</td>
                    <td>{{$user->profile->age}}</td>
                </tr>

                <tr>
                    <td>Gender</td>
                    <td>
                        @if($user->profile->gender==1)
                            Female
                        @else
                            Male
                        @endif

                    </td>
                </tr>

                <tr>
                    <td>Date Of Birth</td>
                    <td>{{$user->profile->dob}}</td>
                </tr>
                </tbody>

            </table>
        </div>

    </div>
@endsection