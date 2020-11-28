<header>
  <title>確認詳細就診紀錄</title>
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
    確認就診紀錄
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
    <form>

      <div class='form-group'>
        <label for="inputMRnmb1" class="col-lab-6 col-form-label ">會員編號(電話請確認)</label>
        <input type="text" class="form-control col-in-s" id="phonenumber" name="phonenumber" value="{{ $treatment->phonenumber }}" disabled>
      </div>
      <div class='form-group'>
        <label for="inputMRnmb1" class="col-lab-4 col-form-label ">病歷號碼</label>
        <input type="text" class="form-control col-in-s" id="inputMRnmb1" name="medicalrecordnumber" value="{{ $treatment->medicalrecordnumber }}" disabled>
        <label for="inputPName1" class="col-lab-4 col-form-label ">醫院</label>
        <input type="text" class="form-control col-in-s" id="inputPName1" name="hospital" value="{{ $treatment->hospital }}" disabled>
        <label for="inputPName1" class="col-lab-4 col-form-label ">看診醫生</label>
        <input type="text" class="form-control col-in-s" id="inputPName1" name="doctorname" value="{{ $treatment->doctorname }}" disabled>
      </div>
      <div class='form-group'>
        <label for="inputPName1" class="col-lab-4 col-form-label ">看診日期</label>
        <!--要寫一個填寫生日後會出現年紀的box-->
        <input type="text" class="form-control col-in-s" name="day" value="{{ $treatment->day }}" disabled>
      </div>
      <div class='form-group'>
        <label for="inputPName1" class="col-lab-4 col-form-label ">評估狀況</label>
        <textarea class="form-control" id="inputPName1" name="assess" rows="2" disabled>{{ $treatment->assess }}</textarea>
      </div>
      <div class='form-group'>
        <label for="inputPName1" class="col-lab-4 col-form-label ">醫療處理</label>
        <textarea class="form-control" id="inputPName1" name="treatment" rows="2" disabled>{{ $treatment->treatment }}</textarea>
      </div>
      <div class='form-group'>
        <label for="inputPName1" class="col-lab-4 col-form-label ">用藥</label>
        <textarea class="form-control" id="inputPName1" name="medicine" rows="2" disabled>{{ $treatment->medicine }}</textarea>
      </div>
      <div class='form-group'>
        <label for="inputPName1" class="col-lab-4 col-form-label ">備註</label>
        <textarea class="form-control" id="inputPName1" name="remark" rows="2" disabled>{{ $treatment->remark }}</textarea>
      </div>
      <a type="button" href="/checktreatment" class="btn btn-block btn-success">返回就診資料</a>
    </form>
  </div>
</div>
@endsection