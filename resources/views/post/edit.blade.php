@extends('layout.master')
@section('title','Edit Post')
@section('content')
    <div class="container">
        <div class="col-md-8 col-md-offset-2">
            <div class="well well bs-component">
                <form method="post">
                    @include('layout.error')
                    @if(\Illuminate\Support\Facades\Session::has('status'))
                        <p class="alert alert-success">{{Session::get('status')}}</p>
                    @endif
                    {{csrf_field()}}

                    <div class="form-group">
                        <label for="title">Title</label>
                        <input type="text" class="form-control" name="title" id="title" value="{{$post->title}}">
                    </div>
                    <div class="form-group">
                    <label for="category">Category</label>
                    <select class="form-control" name="category_id">
                    @foreach($category as $cat)
                    <option value="{{$cat->id}}"
                            @if($post->cat_id == $cat->id)
                                    selected="selected"
                                @endif
                    >{{$cat->name}}</option>
                    @endforeach
                    </select>
                    </div>
                    <div class="form-group">
                        <label for="content">Content</label>
                        <textarea class="form-control" rows="3" name="content">{{$post->content}}</textarea>
                    </div>

                    <button type="submit" class="btn btn-primary">Update Post</button>
                </form>
            </div>
        </div>

    </div>
@endsection