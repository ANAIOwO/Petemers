@extends('layouts.app')
<style>
    .display-comment .display-comment {
        margin-left: 40px
    }
</style>
@section('content')
<div class="blog-header">
    <div class="container">
        <h1 class="blog-title">寵物系統討論區</h1>
        <p class="lead blog-description">歡迎來到寵物系統討論區，您可以參與分類版上的討論，留言及回覆</p>
    </div>
</div>

<div class="container">
    <div class="row">
        <hr>
        @yield('contentpost')
    </div>
</div>
@Endsection