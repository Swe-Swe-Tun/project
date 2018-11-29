@extends('layout.master')
@section('title','Gallery')
@section('content')

    <div class="container-fluid">
        <div class="row">
            <div class="col-md-3">
                @include('layout.sidebar')
            </div>
            <div class="col-md-9">
                <div class="row">
                    <a href="{{url('admin/gallery/create')}}" class="btn btn-primary">Create</a>
                </div>


                       <div class="row">

                           @foreach($images as $image)
                               <div class="col-md-3">
                               <div class="card" style="width: 18rem;">
                                   <img class="card-img-top" src="{{asset('/upload/'.$image->images)}}" alt="Card image cap" height="300px" width="250px">
                                   <div class="card-body">
                                       <h5 class="card-title">Card title</h5>
                                       <p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's content.</p>
                                       <a href="#" class="btn btn-primary">Go somewhere</a>
                                   </div>
                               </div>
                               </div>
                           @endforeach

                   </div>
                </div>
            </div>
        </div>
    </div>

@endsection