@extends('layout.master')
@section('title','All Category')
@section('content')
    <div class="container">
        <div class="col-md-3">
            @include('layout.sidebar')
        </div>
        <div class="col-md-9">
            <table class="table table-bordered">
                <thead>
                    <th>No</th>
                    <th>Name</th>
                    <th>Generate</th>
                </thead>
                <tbody>
                    @foreach($category as $cat)
                    <tr>
                        <td>{{$cat->id}}</td>
                        <td>{{$cat->name}}</td>
                        <td>
                            <a href="{{url('admin/category/'.$cat->id.'/edit')}}" class="btn btn-warning">Edit</a>
                        </td>
                    </tr>
                        @endforeach
                </tbody>
            </table>
        </div>
    </div>
@endsection