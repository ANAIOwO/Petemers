@extends('layouts.usernavbarlayout')

<style>
  .push-top {
    margin-top: 50px;
  }
</style>

<head>
  @section('head')
  <title>寵物資料頁面</title>
  <link rel="shortcut icon" href="#" />
  <link rel="stylesheet" href="../css/checkappointment.css" type="text/css" />
  @Endsection
</head>

@section('content')
<div class="push-top">
  @if(session()->get('success'))
  <div class="alert alert-success">
    {{ session()->get('success') }}
  </div><br />
  @endif
  <section id="check">
    <div class="container my-3 py-5 text-center">
      <div class="row mb-5">
        <div class="col">
          <h1>您的寵物資料</h1>
          <h2 class="mt-3">
            下列列出您的寵物資料詳細
          </h2>
          <a href="/userpetcreate" class="btn btn-block btn-success" role="button" aria-pressed="true">新增寵物資料</a>
        </div>
      </div>
      @if (Session::has('Success'))
      <div class="alert alert-success fade-message">
        <p>{{ Session::get('Success') }}</p>
      </div><br />

      <script>
        $(function() {
          setTimeout(function() {
            $('.fade-message').slideUp();
          }, 5000);
        });
      </script>
      @endif
      <div class="row">
        @foreach($userpet as $userpets)
        <div class="col-lg-6 col-md-6">
          <div class="checkcard">
            <div class="checkcard-body">
              <img src="userpetshow/fetch_image/{{ $userpets->id }}" class="img-fluid rounded-circle mb-3" width="300" height="300" />
              <h3>寵物名字:{{$userpets->petname}}</h3>
              <h3>寵物生日:{{$userpets->petbirthday}}</h3>
              <h3>寵物性別:{{$userpets->petgender}}</h3>
              <h3>寵物類別:{{$userpets->petsclass}}</h3>
              <h3>寵物品種:{{$userpets->breed}}</h3>
              <h3>寵物血型:{{$userpets->bloodtype}}</h3>
              <h3>結紮狀況:{{$userpets->fix}}</h3>
              <h3>晶片號碼:{{$userpets->chipnumber}}</h3>
              <h3>狂犬牌號:{{$userpets->rabiesid}}</h3>
              <div class="card-text">
                <h3>特殊病史:{{$userpets->specialmedicalhistory}}</h3>
              </div>

              <form action=" {{ route('userpets.destroy', $userpets->id)}}" method="post" style="display: inline-block">
                @csrf
                @method('DELETE')
                <button class="btn btn-danger btn-sm" type=" submit" style="width:200px">刪除</button>
              </form>
            </div>
          </div>
        </div>
        @endforeach
      </div>
    </div>
  </section>
  <h1 style="text-align:center;">沒有更多寵物了</h1>
</div>

@endsection