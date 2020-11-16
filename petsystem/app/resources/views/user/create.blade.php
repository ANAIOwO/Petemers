@extends('layouts.usernavbarlayout')

<head>
  @section('head')
  <meta charset="utf-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <title>填寫掛號資料</title>
  <link rel="shortcut icon" href="#" />
  <!--CSS href 記得要載入-->
  <link rel="stylesheet" href="../css/appointmentcreate.css" type="text/css" />
  <script src="https://code.jquery.com/jquery-3.4.1.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
  @Endsection
</head>

@section('content')

<body>
  <div class="loader">
    <img src="../images/loader-create.gif" alt="Loading..." />
  </div>

  <div class="card-body">

    <div class="rectangle">
      @if ($errors->any())
      <div class="alert alert-danger">
        <ul>
          @foreach ($errors->all() as $error)
          <li>{{ $error }}</li>
          @endforeach
        </ul>
      </div><br>
      @endif
      <form name="myForm" class="myForm" method="post" action="{{ route('appointment.store') }}" accept-charset="utf-8">
        <!--
          @csrf
        -->
        <p>地區：</p>
        <select name="city" id="city" class="selectcss dynamic" data-dependent="hospital" style=width:60%>
          <option value="" disabled=disabled selected=selected>選擇縣市</option>
          @foreach($city_list as $city)
          <option value="{{$city->city}}">
            {{ $city->city }}
          </option>
          @endforeach
        </select>
        <br>

        <p>醫院：</p>
        <select name="hospital" id="hospital" class="selectcss" style=width:60%>
          <option value="" disabled=disabled selected=selected>選擇醫院</option>
        </select>
        {{ csrf_field() }}
        <br>

        <p>預約日期及時間:</p>
        <label class="appointmentdate">
          <input type="date" name="day">
          <span class="validity"></span>
        </label>
        <br>

        <select name="time" class="selectcss" style=width:30%>
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
        <p>看診分類:</p>
        <br>
        <label class="radiobutton">寵物看診
          <input type="radio" id="classification" name="classification" checked="checked" value="hurtorsick">
          <span class="checkmark"></span>
        </label>
        <br>
        <label class="radiobutton">寵物回診
          <input type="radio" id="classification" name="classification" value="return">
          <span class="checkmark"></span>
          <br>
        </label>
        <p>您所飼養的寵物:</p>
        <br>
        <label class="radiobutton">寵物犬類
          <input type="radio" id="petsclass" name="petsclass" checked="checked" value="dog" onClick="regularpets()">
          <span class="checkmark"></span>
        </label>
        <label class="radiobutton">寵物貓類
          <input type="radio" id="petsclass" name="petsclass" value="cat" onClick="regularpets()">
          <span class="checkmark"></span>
          <br>
        </label>
        <label class="radiobutton">寵物鳥類
          <input type="radio" id="petsclass" name="petsclass" value="bird" onClick="regularpets()">
          <span class="checkmark"></span>
          <br>
        </label>
        <label class="radiobutton">爬蟲類
          <input type="radio" id="petsclass" name="petsclass" value="Reptilia" onClick="regularpets()">
          <span class="checkmark"></span>
          <br>
        </label>
        <label class="radiobutton">魚類
          <input type="radio" id="petsclass" name="petsclass" value="fish" onClick="regularpets()">
          <span class="checkmark"></span>
          <br>
        </label>
        <label class="radiobutton">哺乳動物類
          <input type="radio" id="petsclass" name="petsclass" value="Mammalia" onClick="regularpets()">
          <span class="checkmark"></span>
          <br>
        </label>
        <label onclick="otherpets()" class="radiobutton">
          <input type="radio" id="otherpets" name="petsclass" value="otherpets">其他類寵物:</input>
          <span class="checkmark"></span>
          <br>
          <input type="text" name="otherpets" id="other_text" class="text">
        </label>
        <br>
        <p>寵物性別:</p>
        <br>
        <label class="radiobutton">公
          <input type="radio" id="petsgender" name="petsgender" checked="checked" value="male">
          <span class="checkmark"></span>
        </label>
        <label class="radiobutton">母
          <input type="radio" id="petsgender" name="petsgender" value="female">
          <span class="checkmark"></span>
          <br>
        </label>
        <label class="radiobutton">其他或不清楚
          <input type="radio" id="petsgender" name="petsgender" value="other">
          <span class="checkmark"></span>
          <br>
        </label>
        <p>飼主、預約人姓名:</p>
        <label for="names"></label>
        <input type="text" class="form-control" name="names" value="{{ Auth::user()->name }}" />

        <p>聯絡電話:</p>
        <label for="phonenumber"></label>
        <input type="text" class="form-control" name="phonenumber" />

        <p>其他事項:</p>
        <label for="remark"></label>
        <input type="text" class="form-control" name="remark" />
        <br>
        <input type="submit" value="預約">
        <input type='button' value='返回服務頁面' onclick="javascript: location.href='/service'">
      </form>
    </div>
  </div>

  <!-- javascript select option-->
  <script>
    $(document).ready(function() {

      $('.dynamic').change(function() {
        if ($(this).val() != '') {
          var select = $(this).attr("id");
          var value = $(this).val();
          var dependent = $(this).data('dependent');
          var _token = $('input[name="_token"]').val();
          $.ajax({
            url: "{{ route('dynamicdependent.fetch') }}",
            method: "POST",
            data: {
              select: select,
              value: value,
              _token: _token,
              dependent: dependent
            },
            success: function(result) {
              $('#' + dependent).html(result);
            }
          })
        }
      });
      $('#city').change(function() {
        $('#hospital').val('');
      });
    });
  </script>

  <script>
    function otherpets() {
      a = document.getElementById('other_pets');
      a.checked = true; //check a is checked
    }

    function regularpets() {
      a = document.getElementById('other_text');
      a.value = "";
    }
  </script>


  <script>
    window.addEventListener("load", function() {
      const loader = document.querySelector(".loader");
      loader.className += " hidden"; //class "loader hidden"
    });
  </script>

</body>

</html>
@endsection