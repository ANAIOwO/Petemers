<style>
  * {
    box-sizing: border-box;
  }
</style>
@extends('layouts.usernavbarlayout')

<head>
  @section('head')
  <title>寵物討論區-{{ $post->title }}</title>
  <link rel="shortcut icon" href="#" />
  <link rel="stylesheet" href="../css/forum.css" type="text/css" />
  @Endsection
</head>

@section('content')
<br>
<br>
<br>
<br>
<div class="row">
  <div class="col-10 mx-auto blog-main">
    <a href="/forum" class="btn btn-primary btn-lg active" role="button" aria-pressed="true">回到討論頁面</a>
    <h1>寵物系統討論區-{{ $post->title }}</h1>


    {{ $post->body }}
    <hr>
    <div class="comments">
      <ul class="list-group">
        @foreach ($post->comments as $comment)
        <li class="list-group-item list-group-item-action list-group-item-warning">
          <strong>
            {{ $comment->name }}:
          </strong>
          <br>
          <strong>
            {{ $comment->created_at->diffForHumans() }}: &nbsp;
          </strong>
          {{ $comment->body }}
        </li>
        @endforeach
      </ul>
    </div>
    <hr>
    <div class="card text-center">
      <div class="card-header">
        留言區
      </div>
      <div class="card-block">
        <form method="POST" action="/posts/{{ $post->id }}/comments">
          {{ csrf_field() }}
          <div class="form-group w-25">
            <label for="name"">留言者:</label>
            <input type=" text" class="form-control" id="name" name="name" placeholder="留言者" required>
          </div>
          <div class="form-group">
            <textarea name="body" placeholder="在這裡寫下您的留言" class="form-control" required></textarea>
          </div>

          <div class="form-group">
            <button type="submit" class="btn btn-primary">留言</button>
          </div>
          <div class="card-footer text-muted">
            &nbsp;
          </div>
        </form>

        @if(count($errors))
        <div class="form-group">
          <div class="alert alert-danger">
            @foreach ($errors->all() as $error)
            <li>{{ $error }}</li>
            @endforeach
          </div>
        </div>
        @endif
      </div>
    </div>
  </div>
</div>

@Endsection