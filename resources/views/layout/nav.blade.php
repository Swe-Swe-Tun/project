<nav class="navbar navbar-default">
    <div class="container-fluid">
        <!-- Brand and toggle get grouped for better mobile display -->
        <div class="navbar-header">
            <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#bs-example-navbar-collapse-1" aria-expanded="false">
                <span class="sr-only">Toggle navigation</span>
                <span class="icon-bar"></span>
                <span class="icon-bar"></span>
                <span class="icon-bar"></span>
            </button>
            <a class="/" href="/">Brand</a>
        </div>

        <!-- Collect the nav links, forms, and other content for toggling -->
        <div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">
            {{--<ul class="nav navbar-nav">--}}
                {{--<li class="active"><a href="#">Link <span class="sr-only">(current)</span></a></li>--}}
                {{--<li><a href="#">Link</a></li>--}}
                {{--<li class="dropdown">--}}
                    {{--<a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false">Dropdown <span class="caret"></span></a>--}}
                    {{--<ul class="dropdown-menu">--}}
                        {{--<li><a href="#">Action</a></li>--}}
                        {{--<li><a href="#">Another action</a></li>--}}
                        {{--<li><a href="#">Something else here</a></li>--}}
                        {{--<li role="separator" class="divider"></li>--}}
                        {{--<li><a href="#">Separated link</a></li>--}}
                        {{--<li role="separator" class="divider"></li>--}}
                        {{--<li><a href="#">One more separated link</a></li>--}}
                    {{--</ul>--}}
                {{--</li>--}}
            {{--</ul>--}}
            {{--<form class="navbar-form navbar-left">--}}
                {{--<div class="form-group">--}}
                    {{--<input type="text" class="form-control" placeholder="Search">--}}
                {{--</div>--}}
                {{--<button type="submit" class="btn btn-default">Submit</button>--}}
            {{--</form>--}}
            <ul class="nav navbar-nav navbar-right">
                <li class="dropdown">
                    @if(\Illuminate\Support\Facades\Auth::check())
                        @if(Auth::user()->hasRole('Admin'))
                            <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false">Post Generate<span class="caret"></span></a>
                            <ul class="dropdown-menu">
                                <li><a href="{{url('post/create')}}">Create Post</a></li>
                                <li><a href="{{url('post/allpost')}}">View All Post</a></li>
                            </ul>
                            @elseif(Auth::user()->hasRole('Post'))
                            <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false">Post Generate<span class="caret"></span></a>
                            <ul class="dropdown-menu">
                                <li><a href="{{url('post/create')}}">Create Post</a></li>
                                <li><a href="{{url('post/allpost')}}">View All Post</a></li>
                            </ul>
                        @endif

                    @endif


                </li>

                @if(\Illuminate\Support\Facades\Auth::Check())

                    @if(Auth::user()->hasRole('Admin'))

                    {{--Start--}}
                        <li><a href="{{url('admin/dashboard')}}">Dashboard</a></li>
                        <li><a href="{{url('admin/allcategory')}}">All Category</a></li>
                        <li class="dropdown">
                            <a href="{{url('admin/all')}}" class="dropdown-toggle" data-toggle="dropdown" role="button"  >People<span class="caret"></span></a>

                            <ul class="dropdown-menu">
                                <li><a href="{{url('admin/all')}}">All Users</a></li>
                                <li><a href="{{url('admin/permission')}}">Premission</a></li>
                                <li><a href="{{url('admin/roles')}}">Roles</a></li>



                            </ul>
                        </li>
                    {{--End--}}
                        <li><a href="{{url('user/profile')}}">Profile</a></li>
                    @else
                        <li><a href="{{url('user/profile')}}">Profile</a></li>

                    @endif
                @endif
                <li class="dropdown">
                    @if(\Illuminate\Support\Facades\Auth::Check())
                        <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false">{{Auth::user()->name }}<span class="caret"></span></a>
                        @else
                        <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false">Member <span class="caret"></span></a>
                        @endif

                    <ul class="dropdown-menu">
                        @if(\Illuminate\Support\Facades\Auth::Check())
                        <li><a href="{{url('user/logout')}}">Logout</a></li>
                        @else
                        <li><a href="{{url('user/login')}}">Login</a></li>
                        <li><a href="{{url('user/register')}}">Register</a></li>
                        @endif
                    </ul>
                </li>
            </ul>
        </div><!-- /.navbar-collapse -->
    </div><!-- /.container-fluid -->
</nav>
