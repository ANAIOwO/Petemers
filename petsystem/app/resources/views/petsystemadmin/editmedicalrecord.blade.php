<header>
  <title>Petemers | 修改病歷</title>
  <link rel="shortcut icon" href="#" />
</header>
@extends('layouts.layout')

@section('content')

<style>
  .container {
    max-width: 650px;
  }

  .push-top {
    margin-top: 50px;
  }
</style>


<div class="card push-top">
  <div class="card-header">
    修改寵物病歷
  </div>

  <div class="card-body">
    @if ($errors->any())
    <div class="alert alert-danger">
      <ul>
        @foreach ($errors->all() as $error)
        <li>{{ $error }}</li>
        @endforeach
      </ul>
    </div><br />
    @endif
    <div class="d-flex justify-content-center">
      <img src="../../medicalrecordshow/fetch_image/{{ $medicalrecord->id }}" class="img-fluid rounded-circle mb-3" width="300" height="300" />
    </div>
    <form method="post" action="{{ route('medicalrecords.update',$medicalrecord->id) }}">
      <div class="form-group">
        @csrf
        @method('PATCH')

        <!-- 寵物照片-->
        <div class="form-group">
          <label for="userid">會員編號</label>
          <input type=" text" class="form-control" name="userid" value="{{ $medicalrecord->phonenumber }}" disabled />
        </div>
        <div class="form-group">
          <label for="hospital">醫院名稱</label>
          <input type=" text" class="form-control" name="hospital" value="{{ $medicalrecord->hospital }}" disabled />
        </div>
        <div class="form-group">
          <label for="medicalrecordnumber">病歷號碼</label>
          <input type=" text" class="form-control" name="medicalrecordnumber" value="{{ $medicalrecord->medicalrecordnumber }}" disabled />
        </div>
        <div class="form-group">
          <label for="chipnumber">晶片號碼</label>
          <input type=" text" class="form-control" name="chipnumber" value="{{ $medicalrecord->chipnumber }}" disabled/>
        </div>
        <div class="form-group">
          <label for="petname">寵物名稱</label>
          <input type=" text" class="form-control" name="petname" value="{{ $medicalrecord->petname }}" />
        </div>
        <div class="form-group">
          <label for="petgender">寵物性別</label>
          <input type=" text" class="form-control" name="petgender" value="{{ $medicalrecord->petgender }}" />
        </div>
        <!-- 寵物類別 -->
        <label for="petsclass">寵物類別</label>
        <select class="form-control col-md-4" name="petsclass">
          <option value="{{ $medicalrecord->petsclass }}">已選擇種類:{{ $medicalrecord->petsclass }}</option>
          <option>犬</option>
          <option>貓</option>
        </select>
        </label>
        <!-- 寵物品種 -->
        <label for="breed">寵物品種</label>
        <select class="form-control select2 " name="breed">
          <option value="{{ $medicalrecord->breed }}">已選擇品種:{{ $medicalrecord->breed }}</option>
          <option>米克斯</option>
          <option>California</option>
          <option>Delaware</option>
          <option>Tennessee</option>
          <option>Texas</option>
          <option>Washington</option>
        </select>
        </label>
        <div class="form-group">
          <label for="petbirthday">寵物生日</label>
          <input type=" text" class="form-control" name="petbirthday" value="{{ $medicalrecord->petbirthday }}" />
        </div>
        <div class="form-group">
          <label for="rabiesid">狂犬編號</label>
          <input type=" text" class="form-control" name="rabiesid" value="{{ $medicalrecord->rabiesid }}" />
        </div>
        <label for="bloodtype">寵物血型</label>
        <select class="form-control select2 col-in-s " name="bloodtype">
          <option value="{{ $medicalrecord->bloodtype }}">已選擇血型:{{ $medicalrecord->bloodtype }}</option>
          <option>DEA1.1陽性</option>
          <option>DEA1.1陰性</option>
          <option>DEA1.2陽性</option>
          <option>DEA1.2陰性</option>
          <option>DEA3</option>
          <option>DEA4</option>
          <option>DEA5</option>
          <option>DEA6</option>
          <option>DEA7</option>
          <option>DEA8</option>
        </select>
        </label>
        <div class="form-group">
          <label for="fix">結紮狀況</label>
          <select class="form-control select2 col-in-s " name="fix">
            <option value="{{ $medicalrecord->fix }}">已選擇:{{ $medicalrecord->fix }}</option>
            <option>寵物已結紮</option>
            <option>寵物未結紮</option>
          </select>
        </div>
        <div class="form-group">
          <label for="specialmedicalhistory">特殊病史</label>
          <input type=" text" class="form-control" name="specialmedicalhistory" value="{{ $medicalrecord->specialmedicalhistory }}" />
        </div>
        <button type="submit" class="btn btn-block btn-primary">確認修改</button>
        <a href="/admincheckmedicalrecord" class="btn btn-block btn-success" role="button" aria-pressed="true">回到病歷系統頁面</a>
    </form>
  </div>
</div>
@endsection