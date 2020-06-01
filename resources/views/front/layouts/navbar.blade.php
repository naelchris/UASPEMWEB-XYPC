<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>@yield('title')</title>
    
    @include('front.layouts.css_js')
    <link rel="stylesheet" href="https://glacial-falls-89341.herokuapp.com/front_assets/navbar/styleNavbar.css">

</head>
<body>
    
    <nav class="navbar navbar-expand-lg navbar-light sticky-top" style="background: #EEF3FF;">
        <div class="navbar-brand nv2 {{Session::get('bell1')}}">

            @if(Auth::guard('user')->check())
                <button style="border:none;background:none;" class="profilehref dropdown-toggle"  data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                    @if(Auth::guard('user')->user()->image == "placeholder.webp")
                      <img src="{{url('uploads/')}}/profile.webp" alt="" height="30px" width="30px" style="border-radius: 100%;margin:5px">
                    @else
                      <img src="{{url('uploads/')}}/{{Auth::guard('user')->user()->image}}" alt="" height="30px" width="30px" style="border-radius: 100%;margin:5px">
                    @endif
                    Hello, {{Str::limit(Auth::guard('user')->user()->name, 10)}}
                </button>

                <div class="dropdown-menu" aria-labelledby="dropdownMenuButton">
                    <a class="dropdown-item" href="/edit"><i class="fas fa-user-edit"></i> Edit Profile</a>
                    <a class="dropdown-item {{Session::get('bell2')}}" href="/cart"><i class="fas fa-shopping-cart"></i> Shopping Cart</a>
                    <a class="dropdown-item" href="/history"><i class="fas fa-history"></i> Transaction History</a>
                    <a class="dropdown-item" href="/logout"><i class="fas fa-sign-out-alt"></i> Logout</a>
                </div>
            @else
                <a href="/login">
                     <button type="button" class="btn btn-outline-primary">Login to start shopping</button>
                </a>
            @endif

            
        </div>
        <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
        </button>
    
        <div class="collapse navbar-collapse" id="navbarSupportedContent">
            <div class="mx-auto">
                <ul class="navbar-nav">
                    <li class="nav-item pl-2 pr-2 {{ Request::is('/') ? 'active' : '' }}">
                        <a class="nav-link" href="/">Home</a>
                    </li>
                    <li class="nav-item pl-2 pr-2 {{ Request::is('dell') ? 'active' : '' }}">
                        <a class="nav-link" href="/dell">Dell XPS</a>
                    </li>
                    <li class="nav-item pl-2 pr-2 {{ Request::is('apple') ? 'active' : '' }}">
                        <a class="nav-link" href="/apple">Macbook</a>
                    </li>
                    <li class="nav- pl-2 pr-2 {{ Request::is('microsoft') ? 'active' : '' }}">
                        <a class="nav-link" href="/microsoft">Surface</a>
                    </li>
                    <li class="nav-item pl-2 pr-2 {{ Request::is('categories') ? 'active' : '' }}">
                        <a class="nav-link" href="/categories">More Products</a>
                    </li>
                </ul>
            </div>
            
            <form class="form-inline my-2 my-lg-0 searchfullform" action="/categoriesSearch" method="post">
                @csrf
                <input class="form-control mr-sm-2 searchform" name="name" type="search" placeholder="Search" aria-label="Search">
                <button style="border:none;background:none;" type="submit"><i class="fas fa-search"></i></button>
            <!-- <button class="btn btn-primary my-2 my-sm-0" type="submit">Search</button> -->
            </form>
        </div>
    </nav>
    <!-- https://assets3.lottiefiles.com/private_files/lf30_WdTEui.json -->
    @yield('content')

    <footer class="page-footer font-small mdb-color pt-4 " Style="background-color: #fafafa; margin-top:500px;position: ;clear:both;">

        <!-- Footer Links -->
        <div class="container text-center text-md-left">
      
          <!-- Footer links -->
          <div class="row text-center text-md-left mt-3 pb-3">
      
            <!-- Grid column -->
            <div class="col-md-3 col-lg-3 col-xl-3 mx-auto mt-3">
              <h6 class="text-uppercase mb-4 font-weight-bold"><img src="logo2.png" alt="" height="40px"> XYPc</h6>
              <p>Home of your beloved portable personal computer.</p>
            </div>
            <!-- Grid column -->
      
            <hr class="w-100 clearfix d-md-none">
      
            <!-- Grid column -->
            <div class="col-md-2 col-lg-2 col-xl-2 mx-auto mt-3">
              <h6 class="text-uppercase mb-4 font-weight-bold">Products</h6>
              <p>
                <a href="/dell">Dell XPS</a>
              </p>
              <p>
                <a href="/apple">Macbook</a>
              </p>
              <p>
                <a href="/microsoft">Surface</a>
              </p>
              <p>
                <a href="/categories">More Products</a>
              </p>
            </div>
            <!-- Grid column -->
      
            <hr class="w-100 clearfix d-md-none">
      
            <!-- Grid column -->
            <hr class="w-100 clearfix d-md-none">
      
            <!-- Grid column -->
            <div class="col-md-4 col-lg-3 col-xl-3 mx-auto mt-3">
              <h6 class="text-uppercase mb-4 font-weight-bold">Contact</h6>
              <p>
                <i class="fas fa-home mr-3"></i> Tangerang, Indonesia</p>
              <p>
                <i class="fas fa-envelope mr-3"></i> xypc.business@xypc.com</p>
              <p>
                <i class="fas fa-phone mr-3"></i> + 01 234 567 88</p>
              <p>
                <i class="fas fa-print mr-3"></i> + 01 234 567 89</p>
            </div>
            <!-- Grid column -->
      
          </div>
          <!-- Footer links -->
      
          <hr>
      
          <!-- Grid row -->
          <div class="row d-flex align-items-center">
      
            <!-- Grid column -->
            <div class="col-md-7 col-lg-8">
      
              <!--Copyright-->
              <p class="text-center text-md-left">© 2020 Copyright:
                  <strong> XYPC</strong>
              </p>
      
            </div>
            <!-- Grid column -->
      
            <!-- Grid column -->
            <div class="col-md-5 col-lg-4 ml-lg-0">
      
              <!-- Social buttons -->
              <div class="text-center text-md-right">
                <ul class="list-unstyled list-inline">
                  <li class="list-inline-item">
                    <a class="btn-floating btn-sm rgba-white-slight mx-1">
                      <i class="fab fa-facebook-f"></i>
                    </a>
                  </li>
                  <li class="list-inline-item">
                    <a class="btn-floating btn-sm rgba-white-slight mx-1">
                      <i class="fab fa-twitter"></i>
                    </a>
                  </li>
                  <li class="list-inline-item">
                    <a class="btn-floating btn-sm rgba-white-slight mx-1">
                      <i class="fab fa-google-plus-g"></i>
                    </a>
                  </li>
                  <li class="list-inline-item">
                    <a class="btn-floating btn-sm rgba-white-slight mx-1">
                      <i class="fab fa-linkedin-in"></i>
                    </a>
                  <li class="list-inline-item">
                    <a class="btn-floating btn-sm rgba-white-slight mx-1">
                      <i class="fab fa-instagram  fa-lg"></i>
                    </a>
                  </li>
                  
                </ul>
              </div>
      
            </div>
            <!-- Grid column -->
      
          </div>
          <!-- Grid row -->
      
        </div>
        <!-- Footer Links -->
      
      </footer>
</body>
</html>