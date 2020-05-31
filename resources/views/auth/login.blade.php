<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Login Page</title>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.0/css/bootstrap.min.css" integrity="sha384-9aIt2nRpC12Uk9gS9baDl411NQApFmC26EwAOH8WgZl5MYYxFfc+NcPb1dKGj7Sk" crossorigin="anonymous">
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.0/js/bootstrap.min.js" integrity="sha384-OgVRvuATP1z7JjHLkuOU7Xw704+h835Lr+6QL9UvYjZE3Ipu6Tp75j7Bh/kR0JKI" crossorigin="anonymous"></script>
    <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js" integrity="sha384-Q6E9RHvbIyZFJoft+2mJbHaEWldlvI9IOYy5n3zV9zzTtmI3UksdQRVvoxMfooAo" crossorigin="anonymous"></script>
    <script src="https://kit.fontawesome.com/fd0a85f20e.js" crossorigin="anonymous"></script>
    <link href="https://fonts.googleapis.com/css2?family=Nunito:wght@600&display=swap" rel="stylesheet">
    <style>
        body{
            font-family: Nunito;
            background:url(https://mir-s3-cdn-cf.behance.net/project_modules/fs/b7f1b265190499.5c33b933eb4d0.png);  
            background-repeat: repeat-y;
            background-size: cover;
        }
        .form-control{
            background: #E8FBFD;
            border-radius: 10px;
            font-style: normal;
            font-weight: bold;
            font-size: 15px;
            line-height: 33px;
            letter-spacing: 0.15em;
            border:none;
            color:black;
        }
        .form-control::placeholder{
            color: rgba(0, 0, 0, 0.5);
        }
        .registerhref{
            font-style: normal;
            font-weight: bold;
            font-size: 15px;
            line-height: 25px;
            letter-spacing: 0.15em;

            color: #000000;
        }
        .registerhref:hover{
            text-decoration: none;
        }   
        .containerlogin{
            background-color: white;
            border-radius: 20px;
            margin-top: 3%;
        }
        @media (min-width: 990px){
            .formlogin{
                margin-top: 10%!important;
            }
        }
    </style>
</head>
<body>
    <div class="container-lg containerlogin">
        <!-- As a link -->
        <nav class="navbar navbar-expand-lg navbar-light" style="background-color: white;">
            <a class="navbar-brand" href="#">admin</a>
        </nav>
        <!-- <a href="https://www.freepik.com/free-photos-vectors/design">Design vector created by stories - www.freepik.com</a>max-width: 608px; -->
        <div class="row" style="margin:0;">
            <div class="container col-lg-6" style="padding:0;">
                <img src="{{url('assets/img/3647007.jpg')}}" class="img-fluid p-5" alt="" >
            </div>
            <div class="container formlogin col-lg-6 p-5" style="margin:auto;">
                {{-- kasi liat error --}}
                @if($errors->any())
                    <div class="alert alert-danger">
                        <ul>
                            @foreach ($errors->all() as $error)
                                 <li>{{$error}}</li>
                            @endforeach
                        </ul>
                    </div>
                @endif

                <form method="post" action="/admin/login">
                    @csrf

                    <div class="form-group">
                      <label for="email"><i class="fas fa-envelope"></i>{{ __('E-Mail Address') }}</label>
                      <!-- <input type="text" class="form-control" id="formGroupExampleInput" placeholder="Please Input your Email"> -->
                      {{-- <input id="email" type="email" class="form-control @error('email') is-invalid @enderror" placeholder="Please Input your Email" name="email" value="{{ old('email') }}" required autocomplete="email" autofocus> --}}
                      <input id="email" type="email" class="form-control @error('email') is-invalid @enderror" placeholder="Please Input your Email" name="email" value="{{ old('email') }}" required autocomplete="email" autofocus>

                      @error('email')
                            <span class="invalid-feedback" role="alert">
                                <strong>sdfa</strong>
                            </span>
                        @enderror
                    </div>

                    <div class="form-group">
                      <label for="password"><i class="fas fa-lock"></i>{{ __('Password') }}</label>
                      <!-- <input type="text" class="form-control" id="formGroupExampleInput2" placeholder="Please Input your Password"> -->
                      <input id="password" name="password" type="password" class="form-control @error('password') is-invalid @enderror"  placeholder="Please Input your Password" name="password" required autocomplete="current-password">
                        {{-- @error('password')
                            <span class="invalid-feedback" role="alert">
                                <strong></strong>
                            </span>
                        @enderror --}}
                    </div>

                    <div style="text-align: center;">
                        <button type="submit" class="btn btn-primary mt-2" style="letter-spacing: 0.25em;border-radius: 20px;">{{ __('Login') }}</button>
                    </div>

                    {{-- <div style="text-align: center;margin-top: 5%;">   
                        <a class="registerhref" href="" style="margin-top: 2%;">Don't have an account?</a>
                    </div> --}}
                </form>


            </div>
        </div>
    </div>  
</body>
</html>