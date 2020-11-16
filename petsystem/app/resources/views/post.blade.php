@extends('layouts.usernavbarlayout')

<style>
  .push-top {
    margin-top: 50px;
  }
</style>

<head>
  @section('head')
  <title>確認post項目</title>
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
  <br>
  <br>
  <br>
  <br>
  <div class="row">
    @foreach($post as $posts)
    <div class="col-md-8 col-md-offset-2"style="margin-top:50px;">
      <h1>{{$posts->title}}</h1>
      <p>{{$posts->body}}</p>
      <hr>
    </div>
    @endforeach
  </div>
</div>
<div class="card-body">
<div class="row">
  <div id="comment-form" class="col-md-8 col-md-offset-2" style="margin-top:50px;">

    <form name="myForm" class="myForm" method="post" action="{{ route('comments.store') }}" accept-charset="utf-8">
      {{ csrf_field() }}
      <p>姓名:</p>
      <label for="name"></label>
      <input type="text" class="form-control" name="name" />

      <p>聯絡信箱:</p>
      <label for="email"></label>
      <input type="text" class="form-control" name="email" />

      <p>留言:</p>
      <label for="comment"></label>
      <input type="text" class="form-control" name="comment" />
      <input type="submit" value="提交">
    </form>
  </div>
</div>
</div>
@endsection