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
  <link rel="stylesheet" href="../css/usercheckmedicalrecord.css" type="text/css" />
  @Endsection
</head>

@section('content')
<div class="push-top">
  @if(session()->get('success'))
  <div class="alert alert-success">
    {{ session()->get('success') }}
  </div><br />
  @endif

  <table class="table">
    <thead>
      <p>{{ Auth::user()->name }}</p>
      <tr class="table-warning">
        <td>names</td>
        <td>phonenumber</td>
        <td>birthday</td>
        <td>address</td>
        <td>email</td>
        <td>remark</td>
        <td>medicalrecordnumber</td>
        <td>petname</td>
        <td>petgender</td>
        <td>petsclass</td>
        <td>otherpets</td>
        <td>chipnumber</td>
        <td>petbirthday</td>
        <td>breed</td>
        <td>otherbreed</td>
        <td>rabiesid</td>
        <td>bloodtype</td>
        <td>specialmedicalhistory</td>
      </tr>
    </thead>
    <tbody>
      @foreach($medicalrecord as $medicalrecords)
      <tr>
        <td>{{$medicalrecords->names}}</td>
        <td>{{$medicalrecords->phonenumber}}</td>
        <td>{{$medicalrecords->birthday}}</td>
        <td>{{$medicalrecords->address}}</td>
        <td>{{$medicalrecords->email}}</td>
        <td>{{$medicalrecords->remark}}</td>
        <td>{{$medicalrecords->medicalrecordnumber}}</td>
        <td>{{$medicalrecords->petname}}</td>
        <td>{{$medicalrecords->petgender}}</td>
        <td>{{$medicalrecords->petsclass}}</td>
        <td>{{$medicalrecords->otherpets}}</td>
        <td>{{$medicalrecords->chipnumber}}</td>
        <td>{{$medicalrecords->petbirthday}}</td>
        <td>{{$medicalrecords->breed}}</td>
        <td>{{$medicalrecords->otherbreed}}</td>
        <td>{{$medicalrecords->rabiesid}}</td>
        <td>{{$medicalrecords->bloodtype}}</td>
        <td>{{$medicalrecords->specialmedicalhistory}}</td>
      </tr>
      @endforeach
    </tbody>
  </table>

  <section id="check">
    <div class="container my-3 py-5 text-center">
      <div class="row mb-5">
        <div class="col">
          <h1>您的寵物病歷紀錄</h1>
          <h2 class="mt-3">
            下列列出您的寵物病歷詳細
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
        @foreach($medicalrecord as $medicalrecords)

        <div class="checkcard" style="width:1200px">
          <div class="checkcard-body">
            <div class="d-flex justify-content-center">
              <img src="medicalrecordshow/fetch_image/{{ $medicalrecords->id }}" class="img-fluid rounded-circle mb-3" width="300" height="300" />
              <h3>病歷號碼:{{$medicalrecords->medicalrecordnumber}}</h3>
            </div>
            <div class="d-flex justify-content-between">
              <h3>飼主姓名:{{$medicalrecords->names}}</h3>
              <h3>飼主電話:{{$medicalrecords->phonenumber}}</h3>
              <h5>飼主生日:{{$medicalrecords->birthday}}</h5>
            </div>
            <div class="d-flex justify-content-between">
              <h5>飼主地址:{{$medicalrecords->address}}</h5>
              <h5>飼主信箱:{{$medicalrecords->email}}</h5>
              <h5>信箱備註:{{$medicalrecords->remark}}</h5>
            </div>
            <div class="d-flex justify-content-between">
              
              <h3>寵物名稱:{{$medicalrecords->petname}}</h3>
              <h5>寵物性別:{{$medicalrecords->petgender}}</h5>
              <h3>寵物類別:{{$medicalrecords->petsclass}}</h3>
              <h5>其他類別:{{$medicalrecords->otherpets}}</h5>
            </div>
            <div class="d-flex justify-content-between">
              <h5>寵物晶片號:{{$medicalrecords->chipnumber}}</h5>
              <h5>寵物生日:{{$medicalrecords->petbirthday}}</h5>
              <h5>寵物種類:{{$medicalrecords->breed}}</h5>
              <h5>其他種類:{{$medicalrecords->otherbreed}}</h5>
            </div>
            <div class="d-flex justify-content-between">
              <h5>狂犬病號:{{$medicalrecords->rabiesid}}</h5>
              <h5>寵物血型:{{$medicalrecords->bloodtype}}</h5>
              <h5>特殊病史:{{$medicalrecords->specialmedicalhistory}}</h5>
            </div>
          </div>
        </div>

        @endforeach
      </div>
    </div>
  </section>
</div>

@endsection