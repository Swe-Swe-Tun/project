@extends('layout.master')
@section('title','Permission')
@section('content')
    <div class="container">
        <table class="table table-bordered">
            <thead>
                <th>Permission</th>
                <th>Admin</th>
                <th>Moderator</th>
                <th>Content Writer</th>
            </thead>
            <tbody>
                @foreach($permission as $per)
                <tr>

                    <td>{{$per->name}}</td>
                    <td>
                        admin
                    </td>
                    <td>Moderator</td>
                    <td>Content Writer</td>
                </tr>
                    @endforeach
            </tbody>

        </table>
    </div>
@endsection