@extends('layout.master')
@section('title','Edit Profile')
@section('content')
    <div class="container">
        <div class="col-md-8 col-md-offset-2">
            <div class="well well bs-component">
                <form method="post">
                    @include('layout.error')
                    {{csrf_field()}}
                    <div class="form-group">
                        <label for="display_name">Display Name</label>
                        <input type="text" class="form-control" name="display_name" id="display_name" value="{{$user->profile->display_name}}">
                    </div>
                    <div class="form-group">
                        <label for="Address">Address</label>
                        <input type="text" class="form-control" name="address" id="exampleInputEmail1" value="{{$user->profile->address}}">
                    </div>
                    <div class="form-group">
                        <label for="phone">Phone</label>
                        <input type="number" class="form-control" name="phone" id="phone" value="{{$user->profile->phone}}">
                    </div>
                    <div class="form-group">
                        <label for="age">Age</label>
                        <input type="text" class="form-control" name="age" id="age" value="{{$user->profile->age}}">
                    </div>

                    <div class="form-group">
                        <label for="age">Gender</label>
                        <div class="radio">
                            <label><input type="radio" name="gender" value="1" <?php echo $user->profile->gender==1?"checked":"" ?> >Male</label>
                        </div>
                        <div class="radio">
                            <label><input type="radio" name="gender" value="2" <?php echo $user->profile->gender==2?"checked":""?>>Female</label>
                        </div>
                    </div>
                    <div class="form-group">
                        <label for="dob">Date Of Birth</label>
                        <input type="text" class="form-control" name="dob" id="dob" value="{{$user->profile->dob}}">
                    </div>

                    <button type="submit" class="btn btn-primary">Update Profile</button>
                </form>
            </div>
        </div>
    </div>
@endsection