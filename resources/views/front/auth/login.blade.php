<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Login Page</title>

    @include('front.layouts.css_js')

    <link rel="stylesheet" href="front_assets/login/styleLogin.css">
    
</head>
<body>
    <div class="container-lg containerlogin">
        <nav class="navbar navbar-expand-lg navbar-light">
            <div class="navbar-brand">
            </div>
            <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>
    
            <div class="collapse navbar-collapse" id="navbarSupportedContent">
                <div class="mx-auto">
                    <ul class="navbar-nav">
                        <li class="nav-item pl-2 pr-2">
                            <a class="nav-link" href="/">Home <span class="sr-only">(current)</span></a>
                        </li>
                        <li class="nav-item pl-2 pr-2">
                            <a class="nav-link" href="/dell">Dell XPS</a>
                        </li>
                        <li class="nav-item pl-2 pr-2">
                            <a class="nav-link" href="/apple">Macbook</a>
                        </li>
                        <li class="nav- pl-2 pr-2">
                            <a class="nav-link" href="/microsoft">Surface</a>
                        </li>
                        <li class="nav-item pl-2 pr-2">
                            <a class="nav-link" href="/categories">More Products</a>
                        </li>
                    </ul>
                </div>
            </div>
        </nav>

        <div class="row pt-5" style="margin:0;">
            <div class="container col-lg-6" id="loginAnimation" style="padding:0;">
                <!-- <script src="https://unpkg.com/@lottiefiles/lottie-player@latest/dist/lottie-player.js"></script> -->
                <lottie-player src="https://assets2.lottiefiles.com/private_files/lf30_ZXsep1.json"  background="transparent"  speed="1"   loop  autoplay></lottie-player>
            </div>
            <div class="container formlogin col-lg-6 p-5" style="margin:auto;">
            @if (Session::has('msg'))
                <div class="alert alert-success" role="alert">
                    <h4 class="alert-heading">Welcome to XYPC, {{session('msg')}}</h4>
                    <p>Your account has been succesfully created!</p>
                </div>
            @endif

            @if (Session::has('cart'))
                <div class="alert alert-warning" role="alert">
                    <h4 class="alert-heading">{{session('cart')}}</h4>
                </div>
            @endif
                
                <form action="/loginPost" method="post">
                    @csrf   
                    <div class="form-group">
                        <label for="formGroupExampleInput"><i class="fas fa-envelope"></i> Email</label>
                        <input type="email" name="email" class="form-control @error('email') is-invalid @enderror @error('message') is-invalid @enderror" id="formGroupExampleInput" value="{{ old('email')}}" placeholder="Please Input your Email">
                        <div class="invalid-feedback">
                            @error('email') {{$message}} @enderror
                        </div>
                    </div>
                    <div class="form-group">
                        <label for="formGroupExampleInput2"><i class="fas fa-lock"></i> Password</label>
                        <input type="password" name="password" class="form-control @error('password') is-invalid @enderror @error('message') is-invalid @enderror" id="formGroupExampleInput2" value="{{ old('password')}}" placeholder="Please Input your Password">
                        <div class="invalid-feedback">
                            @error('password') {{$message}} @enderror
                        </div>
                    </div>
                    @error('message')
                        <div class="alert alert-danger">
                            {{$message}} <i class="fas fa-exclamation-circle"></i>
                        </div>
                    @endif
                    <div style="text-align: center;">
                        <button type="submit" class="btn btn-primary mt-2" style="letter-spacing: 0.25em;border-radius: 20px;">Submit</button>
                    </div>
                    <div style="text-align: center;margin-top: 5%;">   
                        <a class="registerhref" href="register" style="margin-top: 2%;">Don't have an account?</a>
                    </div>
                </form>
            </div>
        </div>
    </div>  

   
</body>
</html>