@extends('layouts.usernavbarlayout')

<head>
  @section('head')
  <meta charset="utf-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <title>填寫寵物資料</title>
  <link rel="shortcut icon" href="#" />
  <!--CSS href 記得要載入-->
  <link rel="stylesheet" href="../css/userpetcreate.css" type="text/css" />
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
      <form name="userpet" class="myForm" method="post" action="{{ route('userpets.store') }}" accept-charset="utf-8" enctype="multipart/form-data">
        @csrf
        <br>
        <p>寵物照片:</p>

        <input type="file" name="petpicture" id="petpicture" />

        <p>寵物姓名(必填):</p>
        <input type="text" class="form-control col-in-s" id="inputPName1" name="petname" placeholder="" required="true">
        <!-- select -->
        <p>寵物性別:</p>
        <select class="selectcss" name="petgender" style="width:20%">
          <option selected="selected">不清楚</option>
          <option>公</option>
          <option>母</option>
        </select>
        <p>寵物種類(必填):</p>
        <select class="selectcss" name="petsclass" style="width:20%" onChange="renew((this.selectedIndex)-1);renew2((this.selectedIndex)-1);">
          <option disabled=disabled selected=selected>選取種類</option>
          <option>犬</option>
          <option>貓</option>
        </select>
        <p>寵物品種:</p>
        <select class="selectcss" style="width:20%" name="breed">
          <option disabled=disabled selected="selected">請先選擇種類</option>
        </select>

        <p>寵物血型:</p>
        <select class="selectcss" name="bloodtype" style="width:20%">
          <option disabled=disabled selected="selected">請先選擇種類</option>
        </select>

        <p>結紮狀況:</p>
        <select class="selectcss" name="fix" style="width:20%">
          <option disabled=disabled selected="selected">請選擇結紮狀況</option>
          <option>寵物已結紮</option>
          <option>寵物未結紮</option>
          <option>未知</option>
        </select>

        <p>晶片號碼:</p>
        <input type="text" class="form-control col-in-s" id="inputMRnmb1" name="chipnumber" placeholder="" required>
        <p>寵物生日:</p>
        <!--要寫一個填寫生日後會出現年紀的box-->
        <input type="text" class="form-control col-in-s" name="petbirthday" placeholder="yyyy/mm/dd">
        <!-- select -->

        <p>狂犬牌號:</p>
        <input type="text" class="form-control col-in-s" id="inputPName1" name="rabiesid" placeholder="">
        

        <p>特殊病史:</p>
        <input type="textarea" class="form-control col-in-s" id="inputPName1" name="specialmedicalhistory" placeholder="無">


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


  <script>
    breed = new Array();
    breed[0] = ["米克斯", "吉娃娃", "約克夏", "馬爾濟斯", "蝴蝶犬", "牧羊犬", "巴哥犬", "柴犬", "柯基犬", "臘腸犬", "臺灣犬","未知"];
    breed[1] = ["亞洲貓", "埃及貓", "斯芬克斯貓", "暹羅貓", "孟加拉貓", "美國短毛貓", "蘇格蘭折耳貓", "緬因貓", "波斯貓","未知"];

    function renew(index) {
      for (var i = 0; i < breed[index].length; i++)
        document.userpet.breed.options[i] = new Option(breed[index][i], breed[index][i]); // 設定新選項
      document.userpet.breed.length = breed[index].length; // 刪除多餘的選項
    }
  </script>

  <script>
    bloodtype = new Array();
    bloodtype[0] = ["DEA1.1陽性", "DEA1.1陰性", "DEA1.2陽性", "DEA1.2陰性", "DEA3", "DEA4", "DEA5", "DEA6", "DEA7", "DEA8","未知"];
    bloodtype[1] = ["A型", "B型", "AB型","未知"];

    function renew2(index) {
      for (var i = 0; i < bloodtype[index].length; i++)
        document.userpet.bloodtype.options[i] = new Option(bloodtype[index][i], bloodtype[index][i]); // 設定新選項
      document.userpet.bloodtype.length = bloodtype[index].length; // 刪除多餘的選項
    }
  </script>
</body>

</html>
@endsection