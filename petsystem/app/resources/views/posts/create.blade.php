<style>
    * {
        box-sizing: border-box;
    }
</style>
@extends('layouts.usernavbarlayout')

<head>
    @section('head')
    <title>寵物討論區-新增討論</title>
    <link rel="shortcut icon" href="#" />
    <link rel="stylesheet" href="../css/createposts.css" type="text/css" />
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
        <h1>寵物系統討論區-新增討論</h1>
        <hr>
        <div class="checkcard">
            <div class="checkcard-body">
                <div class="d-flex justify-content-center">
                    <h3>新增討論</h3>
                </div>
                <form method="POST" action="/posts">
                    {{csrf_field()}}
                    <div class="form-group">
                        <label for="title">標題:</label>
                        <input type="text" class="form-control" id="title" name="title">
                    </div>
                    <div class="form-group">
                        <label for="name">發布者:</label>
                        <input type="text" class="form-control" id="name" name="name">
                    </div>
                    <div class="form-group">
                        <label for="body">此討論區的說明</label>
                        <textarea id="body" name="body" class="form-control"></textarea>
                    </div>

                    <div class="d-flex justify-content-center">
                        <button type="submit" class="btn2 btn-primary btn-lg">發布</button>
                    </div>
                </form>
            </div>
        </div>


    </div>

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

@Endsection