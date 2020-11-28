@extends('layouts.usernavbarlayout')

<head>
  @section('head')
  <meta charset="utf-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <title>修改寵物資料</title>
  <link rel="shortcut icon" href="#" />
  <!--CSS href 記得要載入-->
  <link rel="stylesheet" href="../../css/userpetcreate.css" type="text/css" />
  <script src="https://code.jquery.com/jquery-3.4.1.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
  @Endsection
</head>

@section('content')

<body>
  <div class="loader">
    <img src="../../images/loader-create.gif" alt="Loading..." />
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
      <p>修改寵物資料</p>
      <p>寵物照片:</p>
      <div class="d-flex justify-content-center">
        <img src="../../userpetshow/fetch_image/{{ $userpet->id }}" class="img-fluid rounded-circle mb-3" width="300" height="300" />
      </div>
      <form name="myForm" class="myForm" method="post" action="{{ route('userpets.update',$userpet->id) }} accept-charset=" utf-8" >
        @csrf
        @method('PATCH')
        <br>

        <p>寵物姓名(必填):</p>
        <input type="text" class="form-control col-in-s" id="inputPName1" name="petname" value="{{ $userpet->petname }}">
        <!-- select -->
        <p>寵物性別:</p>
        <select class="selectcss" name="petgender" style="width:20%">
          <option selected="selected" value="{{ $userpet->petgender }}">選擇性別:{{ $userpet->petgender }}</option>
          <option >不清楚</option>
          <option>公</option>
          <option>母</option>
        </select>
        <p>寵物種類(必填):</p>
        <select class="selectcss" name="petsclass" style="width:20%">
          <option value="{{ $userpet->petsclass }}">選擇性別:{{ $userpet->petsclass }}</option>
          <option>犬</option>
          <option>貓</option>
        </select>
        <p>寵物品種:</p>
        <select class="selectcss" style="width:20%" name="breed">
          <option value="{{ $userpet->breed }}">選擇品種:{{ $userpet->breed }}</option>
          <option>米克斯</option>
          <option>California</option>
          <option>Delaware</option>
          <option>Tennessee</option>
          <option>Texas</option>
          <option>Washington</option>
        </select>

        <p>晶片號碼:</p>
        <input type="text" class="form-control col-in-s" id="inputMRnmb1" name="chipnumber" value="{{ $userpet->chipnumber }}">
        <p>寵物生日:</p>
        <!--要寫一個填寫生日後會出現年紀的box-->
        <input type="text" class="form-control col-in-s" name="petbirthday" placeholder="yyyy/mm/dd" value="{{ $userpet->petbirthday }}">
        <!-- select -->

        <p>結紮狀況:</p>
        <select class="selectcss" name="fix" style="width:20%">
          <option value="{{ $userpet->fix }}">選擇狀況:{{ $userpet->fix }}</option>
          <option>寵物已結紮</option>
          <option>寵物未結紮</option>
        </select>


        <p>狂犬牌號:</p>
        <input type="text" class="form-control col-in-s" id="inputPName1" name="rabiesid" value="{{ $userpet->rabiesid }}">
        <p>寵物血型:</p>
        <select class="selectcss" name="bloodtype" style="width:20%">
          <option value="{{ $userpet->bloodtype }}">選擇血型:{{ $userpet->bloodtype }}</option>
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

        <p>特殊病史:</p>
        <input type="textarea" class="form-control col-in-s" id="inputPName1" name="specialmedicalhistory" placeholder="無" value="{{ $userpet->specialmedicalhistory }}">


        <input type="submit" value="確認">
        <input type='button' value='返回寵物頁面' onclick="javascript: location.href='/checkuserpet'">
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