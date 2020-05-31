@extends('front.layouts.navbar')
@section('title')
    Home
@endsection

@section('content')
<style>
    body{
        font-family: Nunito, sans-serif;
    }
    hr{
        border: 0;
        clear:both;
        width: 30%;               
        background-color:black;
        height: 1px;
    }
    .home_toptext{
        font-style: normal;
        font-style: normal;
        font-weight: normal;
        font-size: 36px;
        line-height: 49px;

        color: #3E3F43;
    }
    .home_bottomtext{
        font-style: normal;
        font-style: normal;
        font-weight: bold;
        font-size: 72px;
        line-height: 98px;

        color: #313235;

    }
    .containerhome{
        background-color: white;
        border-bottom-left-radius: 20px;
        border-bottom-right-radius: 20px;
    }
    .aboutUs_lefttext{
        font-style: normal;
        font-weight: bold;
        font-size: 36px;
        line-height: 49px;
        margin-left:5%;
    }
    .aboutUs_righttext{
        font-style: normal;
        font-weight: 800;
        font-size: 72px;
        line-height: 98px;
        text-align: right;
        margin-right:5%;

        color: rgba(34, 34, 34, 0.1);
    }
    .aboutUs_toptext{
        font-style: normal;
        font-size: 36px;
        line-height: 49px;

        color: #3E3F43;
    }
    .aboutUs_bottomtext{
        font-style: normal;
        font-weight: 600;
        font-size: 24px;
        line-height: 33px;
    }
    .aboutUs2_toptext{
        font-style: normal;
        font-weight: 600;
        font-size: 36px;
        line-height: 49px;

        color: #000000;
    }
    .aboutUs2_bottomtext{
        font-style: normal;
        font-weight: 600;
        font-size: 24px;
        line-height: 33px;

        color: #000000;

    }
    @media (max-width: 990px){
        .btnshopnow{
            width: 100%;
            margin-right: 0 !important;
            margin-top: 5% !important;
        }
        .p-5{
            padding:0!important;
        }
        .aboutUs_lefttext{
            font-size: 30px;
        }
        .aboutUs_righttext{
            font-size: 35px;
        }
        .home_bottomtext{
            line-height: 70px;
            font-size: 50px;
        }
    }
    .design1{
        position: absolute;
        width: 370px;
        height: 800px;
        right:0;
        border-bottom-left-radius: 100px;
        top: 0px;

        background: linear-gradient(180deg, #ACBEFF 0%, rgba(172, 190, 255, 0) 100%);
    }
    .design2{
        position: absolute;
        width: 278px;
        height: 388px;
        left: 117px;
        border-top-right-radius: 100px;
        border-bottom-left-radius: 100px;
        top: 873px;

        background: linear-gradient(89.48deg, #B8C7FF 4.43%, rgba(214, 222, 255, 0.583333) 49.25%, rgba(255, 255, 255, 0) 257.53%);
    }
    .products{
        /* width: 280px; */
        min-height: 400px;
        /* margin-left:4.17%;
        margin-right:4.16%; */
        /* border-top-right-radius: 100px; */
        /* border-bottom-left-radius: 100px; */
        background: #F9BDBD;
        /* padding:5%; */
        border-radius: 15px;
    }
    .producttext{
        font-style: normal;
        font-weight: 800;
        font-size: 24px;
        line-height: 33px;
        /* identical to box height */

        color: #3E3F43;
    }
    .btnshopnow{
        font-style: normal;
        font-weight: 600;
        font-size: 18px;
        line-height: 25px;
        /* identical to box height */

        text-align: center;

        color: #3E3F43;
        border: 1px solid #3E3F43;
        box-sizing: border-box;
        border-radius: 4px;
        margin-top: 20%;
        float: right;
    }
    /* .ct1{
        background: #defcfc;
    }
    .ct2{
        background: #cbf1f5;
    } */
    .ct1{
        background: #C8E4FF;
    }
    .ct2{
        background: #B7FFFB;
    }
    .ct3{
        background: #A8DCEC;
    }
    .px{
        padding-left:5rem !important;
        padding-right:5rem !important;
    }
    .imagecategory{
        height: 180px;
        background-size: contain;
        background-repeat: no-repeat;
        background-position: center center;
    }
</style>
    <div class="container-xl">
        <div class="containerhome pb-5 pl-5 pr-5">
            @if (Session::has('msg'))
        <div class="alert alert-success mt-5" role="alert">
        <h4 class="alert-heading">{{session('msg')}}</h4>
    </div>
    @endif
            <div class="row">
                
                <div class="col-lg-6 p-5" style="margin:auto">
                    <p class="home_toptext">Are you looking for a <b>Laptop</b> to buy?</p>
                    <p class="home_bottomtext">This is the right place</p>
                    <a href="/categories"><button type="button" class="btn btn-outline-primary">Explore Products</button></a>
                </div>
                <div class="col-lg-6 rightpicture">
                    <!-- <a href="https://www.freepik.com/free-photos-vectors/mobile">Mobile vector created by stories - www.freepik.com</a> -->
                    <img src="assets/img/home/Devices-bro.png" class="img-fluid" alt="" >
                </div>
            </div>
        </div>

        <div class="container-flex containerhome pb-5 pl-5 pr-5">
            <div class="row">
                <p class="aboutUs_lefttext" style="margin: auto;">Who we are</p> 
                <hr style="margin: auto;">
                <p class="aboutUs_righttext" style="margin: auto;">ABOUT US</p>
            </div>
            <div class="row">
                <div class="col-lg-6 p-5" style="margin:auto">
                    <script src="https://unpkg.com/@lottiefiles/lottie-player@latest/dist/lottie-player.js"></script>
                    <lottie-player src="https://assets4.lottiefiles.com/packages/lf20_mxxWoR.json"  background="transparent"  speed="1"   loop  autoplay></lottie-player>
                    <!-- <img src="Untitled.png" class="img-fluid p-5" alt="" > -->
                </div>
                <div class="col-lg-6 rightpicture p-5" style="margin: auto;">
                    <p class="aboutUs_toptext"><b>We are the home of your beloved portable personal computer</b></p>
                    <p class="aboutUs_bottomtext">the answer to your need of notebooks from well-known brands</p>
                </div>
            </div>
            <div class="row">
                <div class="col-lg-8 p-5" >
                    <p class="aboutUs2_toptext"><b>Laptop made just for you</b></p>
                    <p class="aboutUs2_bottomtext">choose your own laptop from our excellent collection</p>
                </div>
                <div class="col-lg-4 rightpicture" >
                    <img src="assets/img/home/apple-mac-book-jz7.png" class="img-fluid p-5" alt="" >
                </div>
            </div>
        </div>

        <div class="container-flex containerhome pb-5 pl-5 pr-5">
            <div class="row">
                <p class="aboutUs_lefttext" style="margin: auto;">What we have</p> 
                <hr style="margin: auto;">
                <p class="aboutUs_righttext" style="margin: auto;">CATEGORIES</p>
            </div>
            <div class="row p-5">
                <div class="col-lg-6 mb-5">
                    <div class="products ct1">
                        <p class="producttext p-3">Dell</p>
                        <div class="imagecategory" style="background-image: url('assets/img/home/dell.webp')">
                            
                        </div>
                        <!-- <ul class="mt-5">
                            <p><a href="#">Dell XPS 13</a></p>
                            <p><a href="#">Dell XPS 15</a></p>
                            <p><a href="#">Dell XPS 17</a></p>
                        </ul> -->
                        <a href="/dell">
                                                <button type="button" class="btn btn-lg btn-outline-primary btnshopnow mr-3">Shop Now</button>
                        </a>
                    </div>
                        
                </div>
                <div class="col-lg-6 mb-5">
                    <div class="products ct2 center pb-5">
                        <p class="producttext p-3">Apple</p>
                        <div class="imagecategory" style='background-image: url("assets/img/home/macbook.png");'>
                            <!-- <img src="macbook.png" alt="" class="img-fluid"> -->
                        </div>
                        <a href="/apple">
                                <button type="button" class="btn btn-lg btn-outline-primary btnshopnow mr-3">Shop Now</button>
                        </a>
                    </div>
                    
                </div>

                <div class="col-lg-6 mb-5">
                    <div class="products ct2 center pb-5">
                        <p class="producttext p-3">Microsoft</p>
                        <div class="imagecategory" style="background-image: url('assets/img/home/surface.png');">

                        </div>
                        <a href="/microsoft">
                                                <button type="button" class="btn btn-lg btn-outline-primary btnshopnow mr-3">Shop Now</button>
                        </a>
                    </div>
                </div>

                <div class="col-lg-6 mb-5">
                    <div class="products ct1 center pb-5">
                        <p class="producttext p-3">Others</p>
                        <div class="imagecategory" style="background-image: url('assets/img/home/lenovo-laptop-yoga-c940-hero-15_1.webp');">

                        </div>
                        <a href="/categories">
                                                <button type="button" class="btn btn-lg btn-outline-primary btnshopnow mr-3">Shop Now</button>
                        </a>
                    </div>
                </div>


            </div>
        </div>

    </div>
@endsection
