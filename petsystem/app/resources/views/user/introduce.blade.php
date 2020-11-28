<!DOCTYPE html>
<html>

<head>
  <title>寵物系統介紹</title>
  <meta name="viewport" content="width=device-width" , initial-scale=1.0">
  <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.5.3/dist/css/bootstrap.min.css" integrity="sha384-TX8t27EcRE3e/ihU7zmQxVncDAy5uIKz4rEkgIXeMed4M0jlfIDPvg6uqKI2xXr2" crossorigin="anonymous">
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.1/css/all.min.css" integrity="sha512-+4zCK9k+qNFUR5X+cKL9EIR+ZOhtIloNl9GIKS57V1MyNsYpYcUrUeQc9vNfzsWfV28IaLL3i96P9sdNyeRssA==" crossorigin="anonymous" />
  <link rel="stylesheet" href="../css/usernavbarlayout.css" type="text/css" />
  <link rel="stylesheet" href="../css/introduce.css" type="text/css" />
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
        <div class="col-lg-12 col-md-6">
          <div class="checkcard">
            <div class="checkcard-body">
              <header class="animate__animated animate__backInUp "> 寵物系統介紹 </header>
              <br>
              <p class="animate__animated animate__fadeIn animate__delay-2s">
                理念:<br>

                當今養寵物的人很多，每隻寵物都是的寶，寵物的健康是主人最關心的事，<br>由於沒有寵物健保，醫療紀錄都是單方留在醫院，若更換就診醫院或臨時急診，<br>
                並沒辦法查看到過往醫療紀錄，非常不方便，且市面上<br>目前並沒有一套與寵物醫療健康相關的網站!<br>
                <br>故本系統目標是能提供飼主更方便使用，透過網頁系統就可以輕鬆管理寵物健康和<br>查詢醫療紀錄的系統，以及讓獸醫院可以更方便管理病歷檔案、接受顧客線上約診和<br>
                院方留言板提醒代辦事項或須知等，且系統設置了討論區讓飼主們能分享自身經驗。
                
                <br>
                <br>
                專題指導老師:
                <br>
                阮議聰 教授
                <br>


                <br>
                專題成員:
                <br>
                張仕熹/4B/00757208 方啟德/4A/00757204<br>
                鄭婕琳/4A/00757206 王育嵐/4A/0053A016

              </p>
            </div>
          </div>
        </div>


      </div>
    </div>
  </section>

</html>