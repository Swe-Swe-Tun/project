@extends('layout.master')
@section('title','All Post')
@section('content')
    <div class="container">
        <table class="table table-bordered">
            <thead>
                <th>Title</th>
                <th>Content</th>
                <th>Edit</th>
            </thead>
            <tbody>
                @foreach($posts as $post)
                <tr>
                    <td>
                        <a href="{{url('post/'.$post->id.'/show')}}">

                            {{$post->title}}
                        </a>
                    </td>
                    <td>{{$post->content}}</td>
                    <td>
                        <a href="{{url('post/'.$post->id.'/edit')}}" class="btn btn-warning btn-sm">Edit</a>
                    </td>

                </tr>
                @endforeach
            </tbody>
        </table>
    </div>
@endsection
