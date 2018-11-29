@extends('layout.master')
@section('title','Create Post')
@section('content')
    <div class="container">
        <div class="col-md-8 col-md-offset-2">
            <div class="well well bs-component">
                <form method="post" action="">
                    @include('layout.error')
                    @if(\Illuminate\Support\Facades\Session::has('status'))
                        <p class="alert alert-success">{{Session::get('status')}}</p>
                        @endif
                    {{csrf_field()}}
                    <input type="hidden" name="user_id" value="{{$user->id}}">
                    <div class="form-group">
                        <label for="title">Title</label>
                        <input type="text" class="form-control" name="title" id="title">
                    </div>
                    <div class="form-group">
                        <label for="category">Category</label>
                        <select class="form-control" name="category_id">
                            @foreach($category as $cat)
                            <option value="{{$cat->id}}" >{{$cat->name}}</option>
                            @endforeach
                        </select>
                    </div>
                    <div class="form-group">
                        <label for="content">Content</label>
                        <textarea class="form-control" rows="3" name="content"></textarea>
                    </div>

                    <button type="submit" class="btn btn-primary">Create Post</button>
                </form>
            </div>
        </div>
    </div>
@endsection