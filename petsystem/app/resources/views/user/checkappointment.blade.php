@extends('layouts.usernavbarlayout')

<style>
  .push-top {
    margin-top: 50px;
  }
</style>

<head>
  @section('head')
  <title>確認預約</title>
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
  <!--
  <table class="table">
    <thead>
      <p>{{ Auth::user()->name }}</p>
      <tr class="table-warning">
        <td>ID</td>
        <td>hospital</td>
        <td>day</td>
        <td>time</td>
        <td>classification</td>
        <td>petsclass</td>
        <td>otherpets</td>
        <td>petsgender</td>
        <td>names</td>
        <td>phonenumber</td>
        <td>remark</td>
        <td class="text-center">Action</td>
      </tr>
    </thead>
    <tbody>
      @foreach($appointment as $appointments)
      <tr>
        <td>{{$appointments->id}}</td>
        <td>{{$appointments->hospital}}</td>
        <td>{{$appointments->day}}</td>
        <td>{{$appointments->time}}</td>
        <td>{{$appointments->classification}}</td>
        <td>{{$appointments->petsclass}}</td>
        <td>{{$appointments->otherpets}}</td>
        <td>{{$appointments->petsgender}}</td>
        <td>{{$appointments->names}}</td>
        <td>{{$appointments->phonenumber}}</td>
        <td>{{$appointments->remark}}</td>
      </tr>
      @endforeach
    </tbody>
  </table> -->

  <section id="check">
    <div class="container my-3 py-5 text-center">
      <div class="row mb-5">
        <div class="col">
          <h1>您的預約紀錄</h1>
          <h2 class="mt-3">
            下列列出您的預約詳細
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
        @foreach($appointment as $appointments)
        <div class="col-lg-6 col-md-6">
          <div class="checkcard">
            <div class="checkcard-body">
              <img src="images/Medicalrecord-comp.jpg" alt="" class="img-fluid rounded-circle mb-3">
              <h3>醫院:{{$appointments->hospital}}</h3>
              <h3>日期:{{$appointments->day}}</h3>
              <h3>時間:{{$appointments->time}}</h3>

              @if(($appointments->classification) == "hurtorsick")
              <h3>看診</h3>
              @elseif(($appointments->classification) != "hurtorsick")
              <h3>回診</h3>
              @endif

              @if(($appointments->petsclass) == "dog")
              <h5>寵物犬</h5>
              @elseif(($appointments->petsclass) == "cat")
              <h5>寵物貓</h5> 
              @endif
              

              @if(($appointments->petsgender) == "male")
              <h5>性別:公</h5>
              @elseif(($appointments->petsgender) == "female")
              <h5>性別:母</h5>
              @elseif(($appointments->petsgender) == "other")
              <h5>性別:不清楚</h5>
              @endif
              <h5>掛號者/飼主:{{$appointments->names}}</h5>
              <h5>連絡電話:{{$appointments->phonenumber}}</h5>
              <h5>備註:{{$appointments->remark}}</h5>
            </div>
          </div>
        </div>
        @endforeach
      </div>
    </div>
  </section>
</div>

@endsection