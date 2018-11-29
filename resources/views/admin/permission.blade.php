@extends('layout.master')
@section('title','Create Permission')
@section('content')
    <div class="container">
        <div class="col-md-8 col-md-offset-2">
            <div class="well well bs-component">
                @if(Session::has('status'))
                  <p class="alert alert-success">{{Session::get('status')}}</p>
                    @endif
                @include('layout.error')
                <legend>Create Permission</legend>
                <form action="" method="post">
                    {{csrf_field()}}
                    <div class="form-group">
                        <label for="name">Name</label>
                        <input type="text" class="form-control" name="name" id="name">

                    </div>
                    <button class="btn btn-primary">Add Permission</button>
                </form>
            </div>
        </div>
    </div>
    @endsection