<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Dell</title>
    
    @include('front.layouts.css_js')
    <link rel="stylesheet" href="https://glacial-falls-89341.herokuapp.com/front_assets/navbar/styleNavbar.css">
    <link rel="stylesheet" href="https://glacial-falls-89341.herokuapp.com/front_assets/dell/styleDell.css">
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
        <a class="navbar-brand title fade" href="/details/4">Dell XPS</a>
        <a href="/details/4">
                <button class="btn btn-outline-success my-2 my-sm-0 fade" type="submit">Buy Now</button>
        </a>
    </div>
</nav>
<div class="container">
    <div class="row pt-5">
        <div class="col-lg-12">
            <video class="fadein" id="dellvideo" autoplay muted loop style="max-width: 100%;">
                <source src="front_assets/dell/dell.mp4" type="video/mp4">
              Your browser does not support the video tag.
            </video>
        </div>
    </div>
    <div class="row pt-5 pl-5 pr-5">
        <div class="midtitlecontainer mx fade">
            <p class="midtitle" style="margin: auto;">MEET THE<br>NEWEST MEMBERS OF THE XPS FAMILY</p>
        </div>
        <div class="midtextcontainer mt-2 mb-5 fade">
            <p class="midtext" style="margin: auto;">XPS configurations badged with Creator Edition have been carefully selected<br>for those who aspire to cultivate their digital content creation skills –<br>whether that be in photography, graphic design, music production, or beyond.</p>
        </div>
    </div>
    <div class="row mb-5 fade">
        <img src="front_assets/dell/dell1.jpg" alt="" class="col-lg-6">
        <img src="front_assets/dell/dell2.jpg" alt="" class="col-lg-6">
    </div>
    <div class="row mb-5">
        <div class="col-12 mb-5 dellxpstitle fade">
            FIND THE PERFECT XPS FOR YOU
        </div>
        <div class="col-lg-6 fade">
            <div id="brandimage1">
                <img src="front_assets/dell/dell13.png" alt="" style="max-width: 100%;">
            </div>
            <div id="brandimage2" style="display: none;">
                <img src="front_assets/dell/dell15.png" alt="" style="max-width: 100%;">
            </div>
            <div id="brandimage3" style="display: none;">
                <img src="front_assets/dell/dell17.png" alt="" style="max-width: 100%;">
            </div>
            <div id="brandimage4" style="display: none;">
                <img src="front_assets/dell/dell2in1.png" alt="" style="max-width: 100%;">
            </div>
        </div>
        <div class="col-lg-6">
            <div class="dellxpsdesc fade">
                <p id="branddesc1" style="margin:0;">
                    The new award winning XPS 13. Precisely cut with a flawless finish, features a 13.4 inch four-sided InfinityEdge display.
                </p>
                <p id="branddesc2" style="display:none;margin:0;">
                    The new XPS 15. With a refined 16:10 InfinityEdge display delivering 100% RGB Adobe color in brilliant detail.
                </p>
                <p id="branddesc3" style="display:none;margin:0;">
                    The new XPS 17. A 17-inch laptop in a 15-inch size loaded with power and a studio-quality display.
                </p>
                <p id="branddesc4" style="display:none;margin:0;">
                    The new award winning XPS 13 2-in-1. Beautifully versatile 2-in-1 design with InfinityEdge display all in a remarkably mobile form factor.
                </p>
                <div class="mt-2">
                  <a href="/details/3">
                    <button class="btn btn-outline-success my-2 my-sm-0 fade btnbuy1" type="submit">Buy Now</button>
                  </a>
                  <a href="/details/4">
                    <button class="btn btn-outline-success my-2 my-sm-0 btnbuy2" style="display:none;" type="submit">Buy Now</button>
                  </a>
                  <a href="/details/5">
                    <button  class="btn btn-outline-success my-2 my-sm-0 btnbuy3" style="display:none;" type="submit">Buy Now</button>
                  </a>
                  <a href="/details/6">
                    <button class="btn btn-outline-success my-2 my-sm-0 btnbuy4" style="display:none;" type="submit">Buy Now</button>
                  </a>
                </div>
                <div class="nextprev mt-5">
                    <i class="fas fa-chevron-left" onclick="changeBrandBackward()"></i>
                    <p class="brandname" id="brandname1">XPS 13</p>
                    <p class="brandname" id="brandname2" style="display:none;">XPS 15</p>
                    <p class="brandname" id="brandname3" style="display:none;">XPS 17</p>
                    <p class="brandname" id="brandname4" style="display:none;">XPS 13 2in1</p>
                    <i class="fas fa-chevron-right"  onclick="changeBrandForward()"></i>
                </div>
            </div>
        </div>
    </div>
</div>

<script>
    var value = 1;
    function changeBrandForward(){
        $('#brandname'+value).hide();
        $('#branddesc'+value).hide();
        $('#brandimage'+value).hide();
        $('.btnbuy'+value).hide();
        value++;
        if(value == 5)
            value = 1;
        $('#brandname'+value).fadeIn(1000);
        $('#branddesc'+value).fadeIn(1000);
        $('#brandimage'+value).fadeIn(1000);
        $('.btnbuy'+value).fadeIn(1000);
    }
    function changeBrandBackward(){
        $('#brandname'+value).hide();
        $('#branddesc'+value).hide();
        $('#brandimage'+value).hide();
        $('.btnbuy'+value).hide();
        value--;
        if(value == 0)
            value = 4;
        $('#brandname'+value).fadeIn(1000);
        $('#branddesc'+value).fadeIn(1000);
        $('.btnbuy'+value).fadeIn(1000);
        $('#brandimage'+value).fadeIn(1000);
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