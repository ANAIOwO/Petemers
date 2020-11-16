<!DOCTYPE html>
<html>

<head>
    <title>寵物系統登入</title>
    <meta name="viewport" content="width=device-width" , initial-scale=1.0">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.5.3/dist/css/bootstrap.min.css" integrity="sha384-TX8t27EcRE3e/ihU7zmQxVncDAy5uIKz4rEkgIXeMed4M0jlfIDPvg6uqKI2xXr2" crossorigin="anonymous">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.1/css/all.min.css" integrity="sha512-+4zCK9k+qNFUR5X+cKL9EIR+ZOhtIloNl9GIKS57V1MyNsYpYcUrUeQc9vNfzsWfV28IaLL3i96P9sdNyeRssA==" crossorigin="anonymous" />
    <link rel="stylesheet" href="../css/login.css" type="text/css" />
</head>
<script src="https://code.jquery.com/jquery-3.4.1.min.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/2.5.3/umd/popper.min.js" integrity="sha512-53CQcu9ciJDlqhK7UD8dZZ+TF2PFGZrOngEYM/8qucuQba+a+BXOIRsp9PoMNJI3ZeLMVNIxIfZLbG/CdHI5PA==" crossorigin="anonymous"></script>
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js" integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous"></script>
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/js/bootstrap.min.js" type="text/js"></script>

<body>

    <div class="container">
        <div class="myCard">
            <div class="row">
                <div class="col-md-6">
                    <div class="myLeftCtn">

                        <form class="myForm text-center" method="POST" action="{{ route('login') }}">
                            @csrf
                            <header>登入</header>
                            @if (\Session::has('failed'))
                            <div class="alert alert-success">
                                    <li>{!! \Session::get('failed') !!}</li>
                            </div>
                            @endif
                            <div class="form-group">
                                <i class="fas fa-envelope"></i>
                                <input id="email" type="email" class="myInput @error('email') is-invalid @enderror" name="email" value="{{ old('email') }}" required autocomplete="email" autofocus placeholder="E-mail">

                                @error('email')
                                <span class="invalid-feedback" role="alert">
                                    <strong>{{ $message }}</strong>
                                </span>
                                @enderror
                            </div>

                            <div class="form-group">
                                <i class="fas fa-lock"></i>
                                <input id="password" type="password" class="myInput @error('password') is-invalid @enderror" name="password" required autocomplete="current-password" placeholder="password">

                                @error('password')
                                <span class="invalid-feedback" role="alert">
                                    <strong>{{ $message }}</strong>
                                </span>
                                @enderror
                            </div>
                            <div class="form-group">
                                <div class="col-md-5 offset-md-3">
                                    <div class="form-check">
                                        <input class="form-check-input" type="checkbox" name="remember" id="remember" {{ old('remember') ? 'checked' : '' }}>
                                        <label class="form-check-label" for="remember">
                                            {{ __('記住帳號') }}

                                        </label>
                                    </div>
                                </div>
                                <button type="submit" class="loginbutton">
                                    {{ __('Login') }}
                                </button>
                            </div>
                        </form>

                    </div>
                </div>
                <div class="col-md-6">
                    <div class="myRightCtn">
                        <div class="box">
                            <br>
                            <header>歡迎來到 寵物系統</header>
                            <br>
                            <p>
                                請登入系統
                            </p>
                            <p>
                                操作寵物系統的相關功能
                            </p>
                            <div class="form-group">
                                <div class="offset-md-1">
                                    @if (Route::has('password.request'))
                                    <a class="butt" href="{{ route('password.request') }}">
                                        {{ __('忘記密碼?') }}
                                    </a>
                                    @endif
                                    <br>
                                    <a class="butt" href="{{ url('/register') }}">註冊帳號</a>
                                    <br>
                                    <a class="butt" href="/home">前往首頁</a>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</body>

</html>