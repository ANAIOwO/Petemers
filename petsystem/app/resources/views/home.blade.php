<!DOCTYPE html>
<html>

<head>
    <title>寵物系統首頁</title>
    <meta name="viewport" content="width=device-width" , initial-scale=1.0">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.5.3/dist/css/bootstrap.min.css" integrity="sha384-TX8t27EcRE3e/ihU7zmQxVncDAy5uIKz4rEkgIXeMed4M0jlfIDPvg6uqKI2xXr2" crossorigin="anonymous">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.1/css/all.min.css" integrity="sha512-+4zCK9k+qNFUR5X+cKL9EIR+ZOhtIloNl9GIKS57V1MyNsYpYcUrUeQc9vNfzsWfV28IaLL3i96P9sdNyeRssA==" crossorigin="anonymous" />
    <link rel="stylesheet" href="../css/usernavbarlayout.css" type="text/css" />
    <link rel="stylesheet" href="../css/home.css" type="text/css" />
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/animate.css/4.1.1/animate.min.css" />

</head>

<body>
    <script src="https://code.jquery.com/jquery-3.4.1.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/2.5.3/umd/popper.min.js" integrity="sha512-53CQcu9ciJDlqhK7UD8dZZ+TF2PFGZrOngEYM/8qucuQba+a+BXOIRsp9PoMNJI3ZeLMVNIxIfZLbG/CdHI5PA==" crossorigin="anonymous"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js" integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/js/bootstrap.min.js" type="text/js"></script>


    <nav class="navbar navbar-expand-lg navbar-light fixed-top">
        <div class="container">
            <a class="navbar-brand" href="/home">PETSYSTEM-首頁</a>
            <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse" id="navbarSupportedContent">
                @if (Auth::user())
                <ul>
                    <li>
                        <a href="/introduce">關於寵物系統</a>
                    </li>
                    <li>
                        <a href="/service">選擇服務頁面</a>
                    </li>
                    <li>
                        <a href="/forum">寵物系統討論區</a>
                    </li>
                </ul>
                @else
                <ul>
                    <li>
                        <a href="/introduce">關於寵物系統</a>
                    </li>
                    <li>
                        <a href="/forum">寵物系統討論區</a>
                    </li>
                </ul>
                @endif
                <ul class="nav navbar-nav navbar-right ml-auto">
                    <!-- Authentication Links -->
                    @if (Auth::guest())
                    <li><a href="{{ url('/login') }}">登入</a></li>
                    &nbsp;&nbsp;
                    <li><a href="{{ url('/register') }}">註冊</a></li>
                    @else
                    <li class="dropdown">
                        <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-expanded="false">
                            {{ Auth::user()->name }} <span class="caret"></span>
                        </a>

                        <ul class="dropdown-menu" role="menu">
                            <li>
                                <a href="{{ route('logout') }}" onclick="event.preventDefault();
                                                     document.getElementById('logout-form').submit();">
                                    登出
                                </a>
                                <form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">
                                    {{ csrf_field() }}
                                </form>
                            </li>
                            <li class="nav-item active">
                                <a href="/checkuserpet">寵物頁面</a>
                            </li>
                        </ul>
                    </li>
                    @endif
                </ul>
            </div>
        </div>
    </nav>
    <section id="check">
        <div class="container my-3 py-5 text-center">
            <div class="row mb-5">
                <div class="col">
                    <br>
                    <h1>寵物系統首頁</h1>
                </div>
            </div>

            <div class="row">
                <div class="col-lg-4 col-md-6">
                    <div class="checkcard">
                        <div class="checkcard-body">
                            <header class="animate__animated animate__rubberBand animate__repeat-2"> 歡迎光臨<br>寵物系統 </header>
                            <br>
                            <p class="animate__animated animate__rotateInDownLeft animate__delay-1s">
                                此為專題製作之寵物系統<br>
                                <br>如尚未註冊<br>可以點擊右上角的註冊按鈕<br>註冊使用者資訊。<br>
                                <br>登入可以使用寵物系統<br>相關功能。<br>
                            </p>
                        </div>
                    </div>
                </div>
                <div class="col-lg-4 col-md-6">
                    <div class="checkcard">
                        <div class="checkcard-body">
                            <header class="animate__animated animate__rubberBand animate__repeat-2 animate__delay-2s"> 使用者功能 </header>
                            <br>
                            <p class="animate__animated animate__rotateInDownLeft animate__delay-3s">
                                使用者功能為:<br>
                                1.寵物掛號<br>
                                2.查看掛號資訊<br>
                                3.查看寵物就診紀錄<br>
                                4.會員寵物資料<br>
                                5.寵物討論區<br>
                                6.寵物資料可供寵物醫院使用<br>
                            </p>
                        </div>
                    </div>
                </div>
                <div class="col-lg-4 col-md-6">
                    <div class="checkcard">
                        <div class="checkcard-body">
                            <header class="animate__animated animate__rubberBand animate__repeat-2 animate__delay-4s"> 寵物醫院功能 </header>
                            <br>
                            <p class="animate__animated animate__rotateInDownLeft animate__delay-5s">
                                寵物醫院方功能為:<br>
                                1.留言板功能<br>
                                2.查看醫院之寵物掛號<br>
                                3.寵物病歷、就診紀錄<br>
                                4.新增、修改寵物病歷、就診紀錄<br>
                                5.利用會員寵物資料建立寵物病歷<br>
                            </p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

</html>