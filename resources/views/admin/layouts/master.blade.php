<!doctype html>
<html lang="en">
<head>
    <meta charset="utf-8"/>
    <link rel="icon" type="image/png" sizes="96x96" href="{{url('assets/img/favicon.png')}}">
    <meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1"/>

    <title>TwitShop Admin</title>

    <meta content='width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=0' name='viewport'/>
    <meta name="viewport" content="width=device-width"/>


    @include('admin.style.bootstrap')
    <!-- <link href="assets/css/bootstrap.min.css" rel="stylesheet"/>

    <link href="assets/css/animate.min.css" rel="stylesheet"/>

    <link href="assets/css/paper-dashboard.css" rel="stylesheet"/>

    <link href="http://maxcdn.bootstrapcdn.com/font-awesome/latest/css/font-awesome.min.css" rel="stylesheet">

    <link href='https://fonts.googleapis.com/css?family=Muli:400,300' rel='stylesheet' type='text/css'>

    <link href="assets/css/themify-icons.css" rel="stylesheet"> -->

</head>
<body>

<div class="wrapper">
    @include('admin.layouts.sidebar')
    <div class="main-panel">
        <nav class="navbar navbar-default">
            <div class="container-fluid">
                <div class="navbar-header">
                    <button type="button" class="navbar-toggle">
                        <span class="sr-only">Toggle navigation</span>
                        <span class="icon-bar bar1"></span>
                        <span class="icon-bar bar2"></span>
                        <span class="icon-bar bar3"></span>
                    </button>
                    <a class="navbar-brand" href="#">@yield('page')</a>
                </div>
                <div class="collapse navbar-collapse">
                    <ul class="nav navbar-nav navbar-right">
                        <li class="dropdown">
                            <a href="#" class="dropdown-toggle" data-toggle="dropdown">
                                <i class="ti-settings"></i>
                            <p>{{auth()->guard('admin')->check() ? auth()->guard()->user()->name : 'Account' }}</p>
                                <b class="caret"></b>
                            </a>
                            <ul class="dropdown-menu">
                            <li><a href="{{url('/admin/logout')}}">Logout</a></li>
                                <!-- <li><a href="">Logout</a></li> -->
                                {{-- <li>
                                    <a class="dropdown-item" href="{{ route('logout') }}"
                                        onclick="event.preventDefault();
                                                        document.getElementById('logout-form').submit();">
                                        Logout
                                    </a>

                                    <form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">
                                        @csrf
                                    </form>
                                </li> --}}
                            </ul>
                        </li>
                    </ul>

                </div>
            </div>
        </nav>

        <div class="content">
            <div class="container-fluid">
               @yield('content')
            </div>
        </div>
        <footer class="footer">
            <div class="container-fluid">
                <nav class="pull-left">
                    <ul>

                        <li>
                            <a href="">
                                Contact
                            </a>
                        </li>
                        <li>
                            <a href="">
                                Blog
                            </a>
                        </li>
                        <li>
                            <a href="">
                                Licenses
                            </a>
                        </li>
                    </ul>
                </nav>
                <div class="copyright pull-right">
                    &copy;
                    <script>document.write(new Date().getFullYear())</script>
                    , made with <i class="fa fa-heart heart"></i> by <a href="">Twittwit team</a>
                </div>
            </div>
        </footer>

    </div>
</div>

</body>
@include('admin.style.js')
<!-- 
<script src="assets/js/jquery-1.10.2.js" type="text/javascript"></script>
<script src="assets/js/bootstrap.min.js" type="text/javascript"></script> -->
</html>
