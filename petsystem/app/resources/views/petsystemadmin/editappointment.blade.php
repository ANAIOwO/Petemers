<header>
  <title>Petemers | 修改預約</title>
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
    修改預約資料
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
    <form method="post" action="{{ route('appointment.update',$appointment->id) }}">
      <div class="form-group">
        @csrf
        @method('PATCH')
        <label for="hospital">預約醫院</label>
        <input type="text" class="form-control" name="hospital" id="hospital" value="{{ $appointment->hospital }}" disabled/>
      </div>
      <div class="form-group">
        <label for="names">預約人姓名</label>
        <input type="text" class="form-control" name="names" value="{{ $appointment->names }}" disabled/>
      </div>
      <div class="form-group">
        <label for="phonenumber">連絡電話</label>
        <input type="tel" class="form-control" name="phonenumber" value="{{ $appointment->phonenumber }}" disabled />
      </div>
      <div class="form-group">
        <label for="chipnumber">晶片號碼</label>
        <input type="tel" class="form-control" name="chipnumber" value="{{ $appointment->chipnumber }}" />
      </div>
      <div class="form-group">
        <label for="remark"">其他事項</label>
        <input type=" text" class="form-control" name="remark" value="{{ $appointment->remark }}" />
      </div>
      <p>預約日期及時間:</p>
      <label class="appointmentdate">
        <input type="date" name="day" value="{{ $appointment->day }}">
        <span class="validity"></span>
      </label>
      <br>

      <select name="time" class="selectcss" style=width:30% value="{{ $appointment->time }}">
        <option value="{{ $appointment->time }}">目前預約時間:{{ $appointment->time }}</option>
        <option value="10:00">10:00</option>
        <option value="11:00">11:00</option>
        <option value="12:00">12:00</option>
        <option value="13:00">13:00</option>
        <option value="14:00">14:00</option>
        <option value="15:00">15:00</option>
        <option value="16:00">16:00</option>
        <option value="17:00">17:00</option>
        <option value="18:00">18:00</option>
      </select>
      <br>
      <br>
      <p>看診分類:</p>
      <input type="radio" id="classification" name="classification" checked="checked" value="{{ $appointment->classification }}">
      <label class="radiobutton">目前預約看診類別:
        @if(($appointment->classification) == "hurtorsick")
        看診
        @elseif(($appointment->classification) != "hurtorsick")
        回診
        @endif
      </label>
      <br>
      <input type="radio" id="classification" name="classification" value="hurtorsick">
      <label class="radiobutton">寵物看診
        <span class="checkmark"></span>
      </label>
      <br>
      <input type="radio" id="classification" name="classification" value="return">
      <label class="radiobutton">寵物回診
        <span class="checkmark"></span>
        <br>
      </label>
      <br>
      <br>
      <p>寵物類別:</p>
      <input type="radio" id="petsclass" name="petsclass" checked="checked" value="{{ $appointment->petsclass }}">
      <label class="radiobutton">目前預約寵物類別:
        @if(($appointment->petsclass) == "dog")
        寵物犬
        @elseif(($appointment->petsclass) == "cat")
        寵物貓
        @endif
      </label>
      <br>
      <input type="radio" id="petsclass" name="petsclass" value="dog" onClick="regularpets()">
      <label class="radiobutton">寵物犬類
        <span class="checkmark"></span>
      </label>
      <br>
      <input type="radio" id="petsclass" name="petsclass" value="cat" onClick="regularpets()">
      <label class="radiobutton">寵物貓類
        <span class="checkmark"></span>
      </label>
      <br>
      <br>
      <br>
      <p>寵物性別:</p>
      <input type="radio" id="petsgender" name="petsgender" checked="checked" value="{{ $appointment->petsgender }}">
      <label class="radiobutton">目前預約寵物性別:
        @if(($appointment->petsgender) == "male")
        性別:公
        @elseif(($appointment->petsgender) == "female")
        性別:母
        @elseif(($appointment->petsgender) == "other")
        性別:不清楚
        @endif
      </label>
      <br>
      <input type="radio" id="petsgender" name="petsgender" value="male">
      <label class="radiobutton">公
        <span class="checkmark"></span>
      </label>
      <br>
      <input type="radio" id="petsgender" name="petsgender" value="female">
      <label class="radiobutton">母
        <span class="checkmark"></span>
      </label>
      <br>
      <input type="radio" id="petsgender" name="petsgender" value="other">
      <label class="radiobutton">其他或不清楚
        <span class="checkmark"></span>
      </label>
      <br>
      <button type="submit" class="btn btn-block btn-primary">確認修改</button>
      <a href="/admincheckappointment" class="btn btn-block btn-success" role="button" aria-pressed="true">回到預約頁面</a>
    </form>
  </div>
</div>
@endsection