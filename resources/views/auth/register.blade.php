@extends('layout.master')
@section('title','Home')
@section('content')
    <div class="col-md-8 col-md-offset-2">
        <div class="well well bs-component">
            <form method="post">
                @include('layout.error')
                {{csrf_field()}}
                <div class="form-group">
                    <label for="name">Name</label>
                    <input type="text" class="form-control" name="name" id="exampleInputEmail1" placeholder="User Name">
                </div>
                <div class="form-group">
                    <label for="exampleInputEmail1">Email address</label>
                    <input type="email" class="form-control" name="email" id="exampleInputEmail1" placeholder="Email">
                </div>
                <div class="form-group">
                    <label for="exampleInputPassword1">Password</label>
                    <input type="password" class="form-control" name="password" id="exampleInputPassword1" placeholder="Password">
                </div>
                <div class="form-group">
                    <label for="Comfirmation Password">Password</label>
                    <input type="password" class="form-control" name="password_confirmation" id="Comfirmation Password" placeholder="Comfirmation Password">
                </div>

                <button type="submit" class="btn btn-default">Register</button>
            </form>
        </div>
    </div>

@endsection