<!DOCTYPE html>
<html>

<head>
   <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.5.3/dist/css/bootstrap.min.css" integrity="sha384-TX8t27EcRE3e/ihU7zmQxVncDAy5uIKz4rEkgIXeMed4M0jlfIDPvg6uqKI2xXr2" crossorigin="anonymous">
   <link rel="stylesheet" href="../../css/usernavbarlayout.css" type="text/css" />
   @yield('head')
</head>

<body>
   <script src="https://code.jquery.com/jquery-3.5.1.min.js"></script>
   <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.1/dist/umd/popper.min.js"></script>
   <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.5.3/dist/js/bootstrap.min.js"></script>
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

   @yield('content')

</body>

</html>