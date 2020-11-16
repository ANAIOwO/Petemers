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
  <table class="table">
    <thead>
      <p>{{ Auth::user()->name }}</p>
      <tr class="table-warning">
        <td>ID</td>
        <td>hospital</td>
        <td>title</td>
        <td>body</td>
      </tr>
    </thead>
    <tbody>
      @foreach($post as $posts)
      <tr>
        <td>{{$posts->id}}</td>
        <td>{{$posts->hospital}}</td>
        <td>{{$posts->title}}</td>
        <td>{{$posts->body}}</td>
      </tr>
      @endforeach
    </tbody>
  </table>

 
</div>

@endsection