<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Microsoft</title>
    
    @include('front.layouts.css_js')
    <link rel="stylesheet" href="https://glacial-falls-89341.herokuapp.com/front_assets/navbar/styleNavbar.css">
    <link rel="stylesheet" href="https://glacial-falls-89341.herokuapp.com/front_assets/microsoft/styleSurface.css">
</head>
<body>
    
<nav class="navbar navbar-expand-lg navbar-light sticky-top" style="background: #EEF3FF;background: #EEF3FF;position:relative;z-index: 2;">
    <div class="navbar-brand nv2">

        @if(Auth::guard('user')->check())
            <button style="border:none;background:none;" class="profilehref dropdown-toggle"  data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                <img src="{{url('uploads/')}}/{{Auth::guard('user')->user()->image}}" alt="" height="30px" width="30px" style="border-radius: 100%;margin:5px">
                Hello, {{Str::limit(Auth::guard('user')->user()->name, 10)}}
            </button>

            <div class="dropdown-menu" aria-labelledby="dropdownMenuButton">
                <a class="dropdown-item" href="/edit"><i class="fas fa-user-edit"></i> Edit Profile</a>
                <a class="dropdown-item" href="/cart"><i class="fas fa-shopping-cart"></i> Shopping Cart</a>
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
<nav class="navbar sticky-top navbar-lightcontainerflex" id="productnav" style="margin:auto;z-index: 1;">
    <div class="navbar-light container" style="margin:auto;">
        <a class="navbar-brand title fade" href="#">Surface Laptop 3</a>
        <a href="/details/7">
          <button class="btn btn-outline-success my-2 my-sm-0 fade" type="submit">Buy Now</button>
        </a>
    </div>
</nav>
<div class="container">
    <div class="row pt-5">
        <div class="col-lg-12">
            <video class="fadein" id="dellvideo" autoplay muted loop style="max-width: 100%;">
                <source src="front_assets/microsoft/surface3video.mp4" type="video/mp4">
                Your browser does not support the video tag.
            </video>
        </div>
    </div>
    <div class="row pt-5 pl-5 pr-5">
        <div class="midtitlecontainer mx fade">
            <p class="midtitle" style="margin: auto;">Surface Laptop 3</p>
        </div>
        <div class="midtextcontainer mt-2 mb-5 fade">
            <p class="midtext" style="margin: auto;">Slim and stylish, available in 13.5” and new 15” touchscreens, rich color options, and two durable finishes.<br>Make a powerful statement and get improved speed, performance, and all-day battery life.</p>
        </div>
    </div>
    <div class="row mb-5">
        <div class="col-lg-6">
            <img src="front_assets/microsoft/surface1.jpg" alt="" class="m-1" style="width: 100%;">
            <img src="front_assets/microsoft/surface4.jpg" alt="" class="m-1 mt-5 mbpic" style="width: 100%;">
        </div>
        <div class="col-lg-6">
            <img src="front_assets/microsoft/surface2.jpg" alt="" class="m-1" style="width: 100%;">
        </div>
    </div>
    <div class="row mb-5">
        <div class="col-12">
            <img src="front_assets/microsoft/MSandstone.webp" class="sandstone" id="sandstone2" alt="" style="max-width: 100%;">
            <img src="front_assets/microsoft/MMatteBlack.webp" class="matteblack" id="matteblack2" alt="" style="max-width: 100%; display:none;">
            <img src="front_assets/microsoft/MCobaltBlue.webp" class="cobaltblue" id="cobaltblue2" alt="" style="max-width: 100%; display:none;">
            <img src="front_assets/microsoft/MPlatinum.webp" class="platinum" id="platinum2" alt="" style="max-width: 100%; display:none;">
        </div>
        <div class="col-12 mt-5" style="text-align: center;">
            <h2 style="font-weight: bold;">Choose from rich colors and durable finishes</h2>
            <h3 class="sandstone">Sandstone with a cool, metal keyboard.</h3>
            <h3 class="matteblack" style="display:none;">Matte Black with a cool, metal keyboard.</h3>
            <h3 class="cobaltblue" style="display:none;">Cobalt Blue with warm, Alcantara® material.</h3>
            <h3 class="platinum" style="display:none;">Platinum with warm, Alcantara® material.</h3>
            <button onclick="changeColorSandstone()" style="border:none;background:none;" data-toggle="tooltip" data-placement="bottom"  title="Sandstone">
                <img src="front_assets/microsoft/Sandstone.webp" class="colorchoose" alt="">
            </button>
            <button onclick="changeColorMatteBlack()" style="border:none;background:none;" data-toggle="tooltip" data-placement="bottom"  title="Matte Black">
                <img src="front_assets/microsoft/MatteBlack.png" class="colorchoose" alt="">
            </button>
            <button onclick="changeColorCobaltBlue()" style="border:none;background:none;" data-toggle="tooltip" data-placement="bottom"  title="Cobalt Blue">
                <img src="front_assets/microsoft/CobaltBlue.png" class="colorchoose" alt="">
            </button>
            <button onclick="changeColorPlatinum()" style="border:none;background:none;" data-toggle="tooltip" data-placement="bottom"  title="Platinum">
                <img src="front_assets/microsoft/Platinum.png" class="colorchoose" alt="">
            </button>
            <div class="col-6 mx-auto mt-5">
            <a href="/details/7">
              <button class="btn btn-outline-success my-2 my-sm-0 fade sandstone btnbuy" type="submit">Buy Now</button>
            </a>
            <a href="/details/8">
              <button class="btn btn-outline-success my-2 my-sm-0 matteblack btnbuy" style="display:none;" type="submit">Buy Now</button>
            </a>
            <a href="/details/9">
              <button  class="btn btn-outline-success my-2 my-sm-0 cobaltblue btnbuy" style="display:none;" type="submit">Buy Now</button>
            </a>
            <a href="/details/10">
              <button class="btn btn-outline-success my-2 my-sm-0 platinum btnbuy" style="display:none;" type="submit">Buy Now</button>
            </a>
            </div>
        </div>
    </div>
</div>

<script>
    function changeColorSandstone(){
        $('.sandstone').fadeIn(1000);
        $('.matteblack').hide();
        $('.cobaltblue').hide();
        $('.platinum').hide();
    }
    function changeColorMatteBlack(){
        $('.sandstone').hide();
        $('.matteblack').fadeIn(1000);
        $('.cobaltblue').hide();
        $('.platinum').hide();
    }
    function changeColorCobaltBlue(){
        $('.sandstone').hide();
        $('.matteblack').hide();
        $('.cobaltblue').fadeIn(1000);
        $('.platinum').hide();
    }
    function changeColorPlatinum(){
        $('.sandstone').hide();
        $('.matteblack').hide();
        $('.cobaltblue').hide();
        $('.platinum').fadeIn(1000);
    }
    window.addEventListener("scroll", function (event) {
        if(this.scrollY > 0){
            document.getElementById("productnav").style.width = "100%";
            document.getElementById("productnav").style.borderBottom = "1px solid #ded5c4";
            document.getElementById("productnav").style.backgroundColor = "cubic-bezier(0.28, 0.11, 0.32, 1)";
        }
        else{
            document.getElementById("productnav").style.borderBottom = "1px solid #FFF";
        }
    });
    $(window).on("load",function() {
        document.getElementById("dellvideo").style.opacity = 1;
        if($(window).width() > 770) {
            $("#sandstone2").attr("src", "front_assets/microsoft/MSandstone.webp");
            $("#matteblack2").attr("src", "front_assets/microsoft/MMatteBlack.webp");
            $("#cobaltblue2").attr("src", "front_assets/microsoft/MCobaltBlue.webp");
            $("#platinum2").attr("src", "front_assets/microsoft/MPlatinum.webp");
        } else {
            $("#sandstone2").attr("src", "front_assets/microsoft/PSandstone.webp");
            $("#matteblack2").attr("src", "front_assets/microsoft/PMatteBlack.webp");
            $("#cobaltblue2").attr("src", "front_assets/microsoft/PCobaltBlue.webp");
            $("#platinum2").attr("src", "front_assets/microsoft/PPlatinum.webp");
        }
    $(window).scroll(function() {
        var windowBottom = $(this).scrollTop() + $(this).innerHeight();
        $(".fade").each(function() {
        /* Check the location of each desired element */
        var objectBottom = $(this).offset().top + $(this).outerHeight();
        
        /* If the element is completely within bounds of the window, fade it in */
        if (objectBottom < windowBottom) { //object comes into view (scrolling down)
            if ($(this).css("opacity")==0) {$(this).fadeTo(500,1);}
        } else { //object goes out of view (scrolling up)
            // if ($(this).css("opacity")==1) {$(this).fadeTo(500,0);}
        }
        });
    }).scroll(); //invoke scroll-handler on page-load
    });
</script>
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