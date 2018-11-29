@extends('layout.master')
@section('title','Show Post')
@section('content')
    <div class="container">
        <div class="col-md-3">
            @include('layout.sidebar')
        </div>
        <div class="col-md-9">

            <div class="well well bs-component">
                <div class="panel panel-primary">
                    <div class="panel-heading">{{$post->title}}</div>
                    <div class="panel-body">
                        {{$post->content}}
                    </div>
                </div>
                @foreach($post->comment as $com)


                    <div class="panel-body">
                       <p class="alert alert-warning">{{$com->content}}</p>
                    </div>

                @endforeach
                <div class="panel panel-info">
                    <div class="panel-heading">
                        Insert Your Comment
                    </div>
                    @if(\Illuminate\Support\Facades\Session::has('status'))
                        <p class="alert alert-success">{{Session::get('status')}}</p>
                        @endif
                    <form method="post" action="{{url('comment/create')}}">
                        {{csrf_field()}}
                        <input type="hidden" name="user_id" value="{{Auth::user()->id}}">
                        <input type="hidden" name="commendable_id" value="{{$post->id}}">
                        <input type="hidden" name="commendable_type" value="App\Post">
                        <div class="panel-body">
                        <textarea class="form-control" name="content" id="" cols="30" rows="2">
                        </textarea>
                            <button class="btn btn-primary">Submit</button>
                        </div>
                    </form>
                </div>
            </div>

        </div>
    </div>
@endsection