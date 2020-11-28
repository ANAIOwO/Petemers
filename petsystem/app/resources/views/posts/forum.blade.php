<style>
    * {
        box-sizing: border-box;
    }
</style>
@extends('layouts.usernavbarlayout')

<head>
    @section('head')
    <title>寵物討論區</title>
    <link rel="shortcut icon" href="#" />
    <link rel="stylesheet" href="../css/forum.css" type="text/css" />
    @Endsection
</head>

@section('content')
<br>
<br>
<br>
<br>
<br>
<div class="blog-header">
    <div class="container">
        <h1 class="blog-title">寵物系統討論區</h1>
        <p class="lead blog-description">歡迎來到寵物系統討論區，您可以參與分類版上的討論，留言及回覆。
            <a href="/posts/create" class="btn btn-primary btn-lg active" role="button" aria-pressed="true">新增討論</a>
        </p>
        <h5> 點選標題進入討論</h5>

    </div>
</div>

<section class="blog-posts">
    <div class="container">
        <div class="row">
            @foreach ($posts as $post)
            <div class="col-md-6 mb-4">
                <div class="card gradient-card">
                    <div class="card-image">
                        @include('posts.post')
                    </div>
                </div>
            </div>
            @endforeach
        </div>
    </div>
</section>

@Endsection