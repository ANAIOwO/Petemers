@extends('layouts.usernavbarlayout')

<style>
  .push-top {
    margin-top: 50px;
  }
</style>

<head>
  @section('head')
  <title>確認就診資料</title>
  <link rel="shortcut icon" href="#" />
  <link rel="stylesheet" href="../css/userchecktreatment.css" type="text/css" />
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
          <h1>您的寵物就診紀錄</h1>
          <h2 class="mt-3">
            下列列出您的寵物就診詳細
          </h2>
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
        @foreach($treatment as $treatments)

        <div class="checkcard" style="width:1200px">
          <div class="checkcard-body">
            <div class="d-flex justify-content-center">
              <h3>病歷號碼:{{$treatments->medicalrecordnumber}}</h3>
            </div>
            <div class="d-flex justify-content-between">
              <h5>看診醫院:{{$treatments->hospital}}</h5>
              <h5>看診醫生:{{$treatments->doctorname}}</h5>
              <h5>看診日期:{{$treatments->day}}</h5>
            </div>
            <br>
            <div class="card-text">
              <h5>評估狀況:{{$treatments->assess}}</h5>
              <br>
              <h5>醫療處理:{{$treatments->treatment}}</h5>
              <br>
              <h5>用藥:{{$treatments->medicine}}</h5>
              <br>
              <h5>備註:{{$treatments->remark}}</h5>
            </div>
          </div>
        </div>
        @endforeach
      </div>
    </div>
  </section>
  <h1 style="text-align:center;">沒有更多資料了</h1>
</div>

@endsection