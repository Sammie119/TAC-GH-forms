<!doctype html>
<html>
<head>
    <meta charset='utf-8'>
    <meta name='viewport' content='width=device-width, initial-scale=1'>
    <title>TAC-Forms</title>
    <link rel="shortcut icon" href={{ asset("img/tac_logo.ico") }}>

    <!-- Bootstrap Core CSS -->
    <link href='https://maxcdn.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css' rel='stylesheet'>

    <style>
        body {
            background: #2962FF;
            font-family: Arial, Helvetica, sans-serif
        }

        .card-heading,
        .card-subheading {
            font-weight: bold
        }

        .card {
            width: 35%;
            height: 390px;
            border: none;
            border-radius: 10px
        }

        .form-control {
            border: none;
            border-radius: 10px
        }

        .form-control {
            background-color: #eee !important
        }

        .form-control:focus {
            color: #495057;
            border-color: #fff !important;
            outline: 0;
            box-shadow: 0 0 0 0 rgba(0, 123, 255, .25) !important
        }

        .fthree {
            padding-left: 30px;
            padding-right: 30px
        }

        .fthree input {
            background-color: rgba(165, 147, 69, 0.075)
        }

        .para2 {
            font-size: 12px
        }

        .btn-primary {
            border-radius: 8px;
            background: #2979FF;
            width: 120px
        }

        .btn-primary span {
            font-size: 15px
        }

        @media (max-width: 991px) {
            .fthree {
                    width: 110%
                }
        }

        @media (max-width: 480px) {
            .fthre {
                    width: 300%
                }
            }
        }
    </style>

</head>
<body>
    <div class="container d-flex justify-content-center" style="margin-top: 5%">
        <div class="card mx-5 my-5 fthre">
            <div class="card-body px-2">
                <center><h2 class="card-heading px-3">Welcome</h2></center>
                <center><img src="{{ asset('img/tac_logo_small.png') }}" alt="TAC-GH"></center>
                <br>
                <form action="{{ route('login') }}" method="post">
                    @if (Session::has('success'))
                        <div class="alert alert-danger" role="alert">
                            <label>{{ Session::get('success') }}</label>
                        </div>
                    @endif
                    @csrf
                    <div class="row">
                        <div class="form-group col-md-12 fthree"> 
                            <input type="email" class="form-control" name="email" placeholder="Enter your Email" autofocus required>  
                            @if ($errors->has('email'))
                                <span class="error" style="color: red">{{ $errors->first('email') }}</span>
                            @endif
                        </div> 
                    </div>
                    <div class="row">
                        <div class="form-group col-md-12 fthree"> 
                            <input type="password" class="form-control" name="password" placeholder="Enter your Password" required>  
                            @if ($errors->has('password'))
                                <span class="error" style="color: red">{{ $errors->first('password') }}</span>
                            @endif
                        </div>
                    </div>
                    
                    <center>
                        <button type="submit" class="btn btn-primary mt-3"><span style="font-weight: bold;">Login</span></button>

                        <br>

                        {{-- <small class="text-muted px-3">
                            <p class="para2 pl-3">Designed and Created by: SAMMAV IT CONSULT<br>Mobile: 0248376160 / 0556226864</p>
                        </small> --}}
                    </center> 

                </form>
            </div>
        </div>
    </div>
</body>
</html>