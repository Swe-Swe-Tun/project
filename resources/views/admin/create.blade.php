@extends('layout.master')
@section('title','Create Gallery')
@section('content')
    <div class="container-fluid">
        <div class="row">
            <div class="col-md-3">
                @include('layout.sidebar')
            </div>
            <div class="col-md-9">
                @if(session('success'))
                    <p class="alert alert-success">{{session('success')}}</p>
                    @endif

                @if(session('error'))
                    <p class="alert alert-danger">{{session('error')}}</p>
                    @endif
                <form method="post" enctype="multipart/form-data">
                    {{csrf_field()}}
                    <div class="custom-file">
                        <label class="custom-file-label" for="customFile">Choose file</label>
                        <input type="file" class="custom-file-input" name="file" id="customFile" multiple>
                        <button class="btn btn-primary">Upload</button>
                    </div>
                </form>

            </div>
        </div>
    </div>
@endsection