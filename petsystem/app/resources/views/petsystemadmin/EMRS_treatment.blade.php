<style>
  .index .nav_pos {
    margin-top: 50px;
  }

  .EMRS_home .font_size {
    font-size: 2rem;
  }

  .s_memlvl {
    margin-top: 3px;
    font-size: 26px;
    align-items: center;
    color: rgb(71, 185, 96);
  }

  .col-in-xs {
    -ms-flex: 0 0 6%;
    flex: 0 0 6%;
    max-width: 6%;
    margin-right: 5px;
  }

  .col-in-s {
    -ms-flex: 0 0 6%;
    flex: 0 0 10%;
    max-width: 10%;
    margin-right: 5px;
  }

  .col-in-sm {
    -ms-flex: 0 0 8%;
    flex: 0 0 12%;
    max-width: 12%;
    margin-right: 5px;
  }

  .col-lab-4 {
    -ms-flex: 0 0 6%;
    flex: 0 0 7%;
    max-width: 8%;
    margin-left: 8px;
  }
</style>

<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <meta http-equiv="x-ua-compatible" content="ie=edge">

  <title>Petemers | EMRS Treatment</title>

  <!-- Font Awesome Icons -->
  <link rel="stylesheet" href="../../plugins/fontawesome-free/css/all.min.css">
  <!-- Theme style -->
  <link rel="stylesheet" href="../../dist/css/adminlte.min.css">
  <!-- Google Font: Source Sans Pro -->
  <link href="https://fonts.googleapis.com/css?family=Source+Sans+Pro:300,400,400i,700" rel="stylesheet">
  <!-- Bootstrap4 Duallistbox -->
  <link rel="stylesheet" href="../../plugins/bootstrap4-duallistbox/bootstrap-duallistbox.min.css">
  <!-- daterange picker -->
  <link rel="stylesheet" href="../../plugins/daterangepicker/daterangepicker.css">
  <!-- iCheck for checkboxes and radio inputs -->
  <link rel="stylesheet" href="../../plugins/icheck-bootstrap/icheck-bootstrap.min.css">
  <!-- Bootstrap Color Picker -->
  <link rel="stylesheet" href="../../plugins/bootstrap-colorpicker/css/bootstrap-colorpicker.min.css">
  <!-- Tempusdominus Bbootstrap 4 -->
  <link rel="stylesheet" href="../../plugins/tempusdominus-bootstrap-4/css/tempusdominus-bootstrap-4.min.css">
  <!-- Select2 -->
  <link rel="stylesheet" href="../../plugins/select2/css/select2.min.css">
  <link rel="stylesheet" href="../../plugins/select2-bootstrap4-theme/select2-bootstrap4.min.css">
  <!-- Bootstrap4 Duallistbox -->
  <link rel="stylesheet" href="../../plugins/bootstrap4-duallistbox/bootstrap-duallistbox.min.css">
  <!-- Theme style -->
  <link rel="stylesheet" href="../../dist/css/adminlte.min.css">
</head>

<body class="hold-transition sidebar-mini sidebar-collapse  sidebar-closed">
  <div class="wrapper">

    <!--navbar -->
    <div>
      @include('petsystemadmin.navbar')
    </div>
    <!-- /.navbar -->

    <!-- Content Wrapper. Contains page content -->
    <div class="content-wrapper">
      <!-- Content Header (Page header) -->
      <div class="content-header">
        <div class="container-fluid">
          <div class="row mb-2">
            <div class="col-sm-6">
              @if ($errors->any())
              <div class="alert alert-danger">
                <ul>
                  @foreach ($errors->all() as $error)
                  <li>{{ $error }}</li>
                  @endforeach
                </ul>
              </div><br>
              @endif
            </div><!-- /.col -->
          </div><!-- /.row -->
        </div><!-- /.container-fluid -->
      </div>
      <!-- /.content-header -->

      <!-- Main content -->
      <div class="content">
        <div class="container-fluid">
          <div class="row">
            <div class="col-lg-12">
              <div class="col-12 col-xl-12" style="background-color:#C4C4C4;height:50px;">
                <!-- SEARCH FORM -->
                <form class="form-inline ml-3 " method="GET" action="{{ url('searchuser')}}">
                  <label for="inputName1" class="col-sm-1 col-form-label searchbar-mtop" style="font-size:20px">顧客電話:</label>
                  <div class="input-group input-group-sm">
                    <input type="search" class="form-control form-control-sm searchbar-mtop" placeholder="" name="searchnumber">
                  </div>
                  <div class="input-group-append">
                    <button class="col-sm-1 btn btn-navbar searchbar-mtop" type="submit">
                      <i class="fas fa-search"></i>
                    </button>
                  </div>
                </form>
                <!-- /.SEARCH FORM -->
              </div>
              <!-- general form elements -->
              @if($users->isEmpty())
              <form enctype="multipart/form-data">
                <div class="card card-primary">
                  <!-- /.card-header -->

                  <div class="card-body">
                    <div class="form-group row">

                      <label for="inputName1" class="col-sm-1 col-form-label " style="font-size:14px;">顧客姓名</label>
                      <input type="text" class="form-control col-2" id="inputName1" name="names" placeholder="查無資料" disabled>
                      <label for="inputCell1" class="col-sm-1 col-form-label " style="font-size:14px;">電話</label>
                      <input type="tel" class="form-control col-2" name="phonenumber" data-inputmask="'mask': ['9999-999-999']" data-mask id="inputCell1" placeholder="查無資料" disabled>
                      <label for="email" class="col-sm-1 col-form-label " style="font-size:14px;">email</label>
                      <input type="email" class="form-control col-3" id="email" name="email" placeholder="查無資料" disabled>
                    </div>
                    <div class="form-group row">
                      <label for="usersid" class="col-sm-1 col-form-label " style="font-size:14px;">會員編號</label>
                      <input type="text" class="form-control col-2" id="usersid" name="usersid" placeholder="查無資料" disabled>
                      <!--default值設定--PHP版
                      <input type="date" class="form-control col-2" id="inputBday1" value="<?php echo date("2002-m-d"); ?>">
                    -->
                      <!--date日曆版
                      <input type="date" class="form-control col-2" id="inputBday1" required="true">
                     -->

                      <label for="inputBday1" class="col-sm-1 col-form-label " style="font-size:14px;">會員等級</label>
                      <i class="fas fa-user-circle s_memlvl"></i>
                    </div>
                  </div>
                </div>
              </form>
              <div class="card card-secondary card-outline card-outline-tabs">
                <div class="card-header p-0 border-bottom-0">
                  <ul class="nav nav-tabs" id="detailform-tabs-five-tab" role="tablist">
                    <li class="nav-item">
                      <!--Medical Records-->
                      <a class="nav-link active" id="detailform-tabs-five-MR-tab" data-toggle="pill" href="#detailform-tabs-five-MR" role="tab" aria-controls="custom-tabs-four-home" aria-selected="true">就診紀錄</a>
                    </li>
                  </ul>
                </div>
                <div class="card-body">
                  <div class="tab-content" id=detailform-tabs-five-tabContent">
                    <div class="tab-pane fade show active" id="detailform-tabs-five-MR" role="tabpanel" aria-labelledby="detailform-tabs-five-MR-tab">
                      <div class="form-group">
                        <div class="form-group row">
                          就診紀錄-查無資料
                        </div>
                      </div>
                    </div>
                  </div>
                </div>
                <!-- /.card -->
              </div>
              @endif

              @foreach($users as $user)

              <!-- form start -->
              <form enctype="multipart/form-data">
                <div class="card card-primary">
                  <!-- /.card-header -->

                  <div class="card-body">
                    <div class="form-group row">

                      <label for="inputName1" class="col-sm-1 col-form-label " style="font-size:14px;">顧客姓名</label>
                      <input type="text" class="form-control col-2" id="inputName1" name="names" value="{{ $user->name }}" disabled>
                      <label for="inputCell1" class="col-sm-1 col-form-label " style="font-size:14px;">電話</label>
                      <input type="tel" class="form-control col-2" name="phonenumber" data-inputmask="'mask': ['9999-999-999']" data-mask id="inputCell1" value="{{ $user->phonenumber }}" disabled>
                      <label for="email" class="col-sm-1 col-form-label " style="font-size:14px;">email</label>
                      <input type="email" class="form-control col-3" id="email" name="email" value="{{ $user->email }}" disabled>
                    </div>
                    <div class="form-group row">
                      <label for="usersid" class="col-sm-1 col-form-label " style="font-size:14px;">會員編號</label>
                      <input type="text" class="form-control col-2" id="usersid" name="usersid" value="{{ $user->id }}" disabled>
                      <!--default值設定--PHP版
                      <input type="date" class="form-control col-2" id="inputBday1" value="<?php echo date("2002-m-d"); ?>">
                    -->
                      <!--date日曆版
                      <input type="date" class="form-control col-2" id="inputBday1" required="true">
                     -->

                      <label for="inputBday1" class="col-sm-1 col-form-label " style="font-size:14px;">會員等級</label>
                      <i class="fas fa-user-circle s_memlvl"></i>
                    </div>
                  </div>
                </div>
              </form>

              @foreach($petmedicalrecord as $medicalrecord)
              <form>
                <div class="card card-primary">
                  <div class="card-header">
                    <h3 class="card-title">寵物資料</h3>
                    <hr>
                  </div>
                  <div class="col-12 col-lg-12">
                    <div class="card card-primary card-outline card-outline-tabs">
                      <div class="card-header p-0 border-bottom-0">
                        <ul class="nav nav-tabs" id="custom-tabs-four-tab" role="tablist">
                          <li class="nav-item">
                            <a class="nav-link active" id="custom-tabs-four-home-tab" data-toggle="pill" href="#custom-tabs-four-home" role="tab" aria-controls="custom-tabs-four-home" aria-selected="false">醫院寵物病歷資料</a>
                          </li>
                        </ul>
                      </div>

                      <div class="card-body">
                        <div class="tab-content" id="custom-tabs-four-tabContent">
                          <div class="tab-pane fade show active" id="custom-tabs-four-home" role="tabpanel" aria-labelledby="custom-tabs-four-home-tab">
                            <div class="form-group">
                              <div class="d-flex justify-content-center">
                                <img src="../../medicalrecordshow/fetch_image/{{ $medicalrecord->id }}" class="img-fluid rounded-circle mb-3" width="200" height="200" />
                              </div>
                              <div class='form-group row'>
                                <label for="inputMRnmb1" class="col-lab-6 col-form-label ">會員編號(電話請確認)</label>
                                <input type="text" class="form-control col-in-s" id="userid" name="userid" value="{{ $user->phonenumber }}" disabled>
                              </div>
                              <div class='form-group row'>
                                <label for="inputMRnmb1" class="col-lab-4 col-form-label ">病歷號碼</label>
                                <input type="text" class="form-control col-in-s" id="inputMRnmb1" name="medicalrecordnumber" value="{{ $medicalrecord->medicalrecordnumber }}" disabled>
                                <label for="inputPName1" class="col-lab-4 col-form-label ">寵物名字</label>
                                <input type="text" class="form-control col-in-s" id="inputPName1" name="petname" value="{{ $medicalrecord->petname }}" disabled>
                                <!-- select -->
                                <label for="slcGender" class="col-sm-1 col-form-label col-lab-4 ">性別</label>
                                <select class="form-control col-in-xs" name="petgender" disabled>
                                  <option>{{ $medicalrecord->petgender }}</option>
                                </select>
                                <label for="slcGender" class="col-lab-4 col-form-label ">種類</label>
                                <select class="form-control col-md-4" name="petsclass" disabled>
                                  <option>{{ $medicalrecord->petsclass }}</option>
                                </select>
                              </div>
                              <div class="form-group row">
                                <label for="inputMRnmb1" class="col-lab-4 col-form-label ">晶片號碼</label>
                                <input type="text" class="form-control col-in-s" id="inputMRnmb1" name="chipnumber" value="{{ $medicalrecord->chipnumber }}" disabled>
                                <label for="inputPName1" class="col-lab-4 col-form-label ">生日</label>
                                <!--要寫一個填寫生日後會出現年紀的box-->
                                <input type="text" class="form-control col-in-s" name="petbirthday" data-inputmask-alias="datetime" value="{{ $medicalrecord->petbirthday }}" disabled>
                                <!-- select -->
                                <label for="slcGender" class="col-sm-1 col-form-label col-lab-4 ">品種</label>
                                <select class="form-control select2 " style="max-width: 20.2%;" name="breed" disabled>
                                  <option selected="selected">{{ $medicalrecord->breed }}</option>
                                </select>
                                <label for="inputPName1" class="col-lab-4 col-form-label ">寵物結紮</label>
                                <select class="form-control select2 col-in-s " name="fix" disabled>
                                  <option>{{ $medicalrecord->fix }}</option>
                                </select>
                              </div>
                              <div class="form-group row">
                                <label for="inputPName1" class="col-lab-4 col-form-label ">狂犬牌號</label>
                                <input type="text" class="form-control col-in-s" id="inputPName1" name="rabiesid" value="{{ $medicalrecord->rabiesid }}" disabled>
                                <label for="inputPName1" class="col-lab-4 col-form-label ">血型</label>
                                <select class="form-control select2 col-in-s " name="bloodtype" style="width:20%" disabled>
                                  <option selected="selected">{{ $medicalrecord->bloodtype }} </option>
                                </select>

                                <label for="inputPName1" class="col-lab-4 col-form-label ">特殊病史</label>
                                <input type="text" class="form-control col-in-s" id="inputPName1" name="specialmedicalhistory" value="{{ $medicalrecord->specialmedicalhistory }}" disabled>
                              </div>
                            </div>
                          </div>
                        </div>
                      </div>
                      <!-- /.card -->
                    </div>
                  </div>
                </div>
              </form>
              @endforeach
              @endforeach
              <div class="card card-secondary card-outline card-outline-tabs">
                <div class="card-header p-0 border-bottom-0">
                  <ul class="nav nav-tabs" id="detailform-tabs-five-tab" role="tablist">
                    <li class="nav-item">
                      <!--Medical Records-->
                      <a class="nav-link active" id="detailform-tabs-five-MR-tab" data-toggle="pill" href="#detailform-tabs-five-MR" role="tab" aria-controls="custom-tabs-four-home" aria-selected="true">就診紀錄</a>
                    </li>
                    <li class="nav-item">
                      <!--Inspection Report-->
                      <a class="nav-link" id="detailform-tabs-five-IR-tab" data-toggle="pill" href="#detailform-tabs-five-IR" role="tab" aria-controls="custom-tabs-four-profile" aria-selected="false">新增就診紀錄</a>
                    </li>
                  </ul>
                </div>

                <div class="card-body">
                  <div class="tab-content" id=detailform-tabs-five-tabContent">
                    <div class="tab-pane fade show active" id="detailform-tabs-five-MR" role="tabpanel" aria-labelledby="detailform-tabs-five-MR-tab">
                      <div class="form-group">
                        <div class="form-group row">
                          <table class="table" style="width:90%">
                            <thead>
                              <tr class="table-warning">
                                <td>醫院</td>
                                <td>病歷號碼</td>
                                <td>看診醫生</td>
                                <td>看診日期</td>
                                <td>評估狀況</td>
                                <td class="text-center">操作</td>
                              </tr>
                            </thead>
                            <tbody>
                              @foreach($pettreatment as $treatment)
                              <tr>
                                <td>{{$treatment->hospital}}</td>
                                <td>{{$treatment->medicalrecordnumber}}</td>
                                <td>{{$treatment->doctorname}}</td>
                                <td>{{$treatment->day}}</td>
                                <td>{{$treatment->assess}}</td>
                                <td class="text-center">
                                  <a href="{{ route('treatments.edit', $treatment->id)}}" class="btn btn-primary btn-sm"">查看/編輯</a>
                                    <form action=" {{ url('treatmentsdelete',['id'=>$treatment->id,'userphonenumber'=>$treatment->phonenumber,'mrnumber'=>$treatment->medicalrecordnumber])}}" method="post" style="display: inline-block">
                                    @csrf
                                    @method('DELETE')
                                    <button class="btn btn-danger btn-sm" type=" submit">刪除</button>
                                    </form>
                                </td>
                              </tr>
                              @endforeach
                            </tbody>
                          </table>
                        </div>
                      </div>
                    </div>
                    <div class="tab-pane fade" id="detailform-tabs-five-IR" role="tabpanel" aria-labelledby="detailform-tabs-five-IR-tab">
                      <form method="post" action="{{ route('treatments.store') }}">
                        @csrf
                        <div class="form-group">
                          <div class="form-group row">
                            <button type="submit" class="btn-sm btn-default">確定</button>
                            <button type="reset" class="btn-sm btn-default">清除</button>
                          </div>
                          <div class='form-group row'>
                            <label for="inputMRnmb1" class="col-lab-6 col-form-label ">會員編號(電話請確認)</label>
                            @foreach($users as $user)
                            <input type="text" class="form-control col-in-s" id="phonenumber" name="phonenumber" value="{{ $user->phonenumber }}" required="true">
                            @endforeach
                          </div>
                          <div class='form-group row'>
                            @foreach($petmedicalrecord as $medicalrecord)
                            <label for="inputMRnmb1" class="col-lab-4 col-form-label ">病歷號碼</label>
                            <input type="text" class="form-control col-in-s" id="inputMRnmb1" name="medicalrecordnumber" value="{{ $medicalrecord->medicalrecordnumber }}" required="true">
                            @endforeach
                            <label for="inputPName1" class="col-lab-4 col-form-label ">醫院</label>
                            <input type="text" class="form-control col-in-s" id="inputPName1" name="hospital" value="{{ $medicalrecord->hospital }}" required="true">
                            <label for="inputPName1" class="col-lab-4 col-form-label ">看診醫生</label>
                            <input type="text" class="form-control col-in-s" id="inputPName1" name="doctorname" required="true">
                          </div>
                          <div class='form-group row'>
                            <label for="inputPName1" class="col-lab-4 col-form-label ">看診日期</label>
                            <!--要寫一個填寫生日後會出現年紀的box-->
                            <input type="text" class="form-control col-in-s" name="day" data-inputmask-alias="datetime" data-inputmask-inputformat="yyyy/mm/dd" data-mask required="true">
                          </div>
                          <div class='form-group row'>
                            <label for="inputPName1" class="col-lab-4 col-form-label ">評估狀況</label>
                            <textarea class="form-control" id="inputPName1" name="assess" required="true" rows="2"></textarea>
                          </div>
                          <div class='form-group row'>
                            <label for="inputPName2" class="col-lab-4 col-form-label ">醫療處理</label>
                            <textarea class="form-control" id="inputPName2" name="treatment" required="true" rows="2"></textarea>
                          </div>
                          <div class='form-group row'>
                            <label for="inputPName3" class="col-lab-4 col-form-label ">用藥</label>
                            <textarea class="form-control" id="inputPName3" name="medicine" required="true" rows="2"></textarea>
                          </div>
                          <div class='form-group row'>
                            <label for="inputPName1" class="col-lab-4 col-form-label ">備註</label>
                            <textarea class="form-control" id="inputPName1" name="remark" rows="2"></textarea>
                          </div>
                        </div>
                      </form>
                    </div>
                  </div>
                </div>

                <!-- /.card -->
              </div>


              <!-- /.card-body -->

              <div class="card-footer">
              </div>

              <!-- /.card -->
            </div>
            <!-- /.col-md-6 -->
          </div>
          <!-- /.row -->
        </div><!-- /.container-fluid -->
      </div>
      <!-- /.content -->
    </div>
    <!-- /.content-wrapper -->

    <!-- Control Sidebar -->
    <aside class="control-sidebar control-sidebar-dark">
      <!-- Control sidebar content goes here -->
      <div class="p-3">
        <h5>Title</h5>
        <p>Sidebar content</p>
      </div>
    </aside>
    <!-- /.control-sidebar -->

    <!-- Main Footer -->
    <footer class="main-footer">
      <!-- To the right -->
      <div class="float-right d-none d-sm-inline">
        (NTOU-CSE-專題-Petemers團隊)
      </div>
      <!-- Default to the left -->
      <strong>Copyright &copy; 2020 <a href="https://">Petemers</a>.</strong> All rights reserved.
    </footer>
  </div>
  <!-- ./wrapper -->

  <!-- REQUIRED SCRIPTS -->

  <!-- jQuery -->
  <script src="../../plugins/jquery/jquery.min.js"></script>
  <!-- Bootstrap 4 -->
  <script src="../../plugins/bootstrap/js/bootstrap.bundle.min.js"></script>
  <!-- AdminLTE App -->
  <script src="../../dist/js/adminlte.min.js"></script>

  <!-- jQuery -->
  <script src="../../plugins/jquery/jquery.min.js"></script>
  <!-- Bootstrap 4 -->
  <script src="../../plugins/bootstrap/js/bootstrap.bundle.min.js"></script>
  <!-- Select2 -->
  <script src="../../plugins/select2/js/select2.full.min.js"></script>
  <!-- Bootstrap4 Duallistbox -->
  <script src="../../plugins/bootstrap4-duallistbox/jquery.bootstrap-duallistbox.min.js"></script>
  <!-- InputMask -->
  <script src="../../plugins/moment/moment.min.js"></script>
  <script src="../../plugins/inputmask/min/jquery.inputmask.bundle.min.js"></script>
  <!-- date-range-picker -->
  <script src="../../plugins/daterangepicker/daterangepicker.js"></script>
  <!-- bootstrap color picker -->
  <script src="../../plugins/bootstrap-colorpicker/js/bootstrap-colorpicker.min.js"></script>
  <!-- Tempusdominus Bootstrap 4 -->
  <script src="../../plugins/tempusdominus-bootstrap-4/js/tempusdominus-bootstrap-4.min.js"></script>
  <!-- Bootstrap Switch -->
  <script src="../../plugins/bootstrap-switch/js/bootstrap-switch.min.js"></script>
  <!-- AdminLTE App -->
  <script src="../../dist/js/adminlte.min.js"></script>
  <!-- AdminLTE for demo purposes -->
  <script src="../../dist/js/demo.js"></script>

</body>
<!-- Page script -->
<script>
  $(function() {
    //Initialize Select2 Elements
    $('.select2').select2()

    //Initialize Select2 Elements
    $('.select2bs4').select2({
      theme: 'bootstrap4'
    })

    //Datemask dd/mm/yyyy
    $('#datemask').inputmask('dd/mm/yyyy', {
      'placeholder': 'dd/mm/yyyy'
    })
    //Datemask2 mm/dd/yyyy
    $('#datemask2').inputmask('mm/dd/yyyy', {
      'placeholder': 'mm/dd/yyyy'
    })
    //Money Euro
    $('[data-mask]').inputmask()

    //Date range picker
    $('#reservationdate').datetimepicker({
      format: 'L'
    });
    //Date range picker
    $('#reservation').daterangepicker()
    //Date range picker with time picker
    $('#reservationtime').daterangepicker({
      timePicker: true,
      timePickerIncrement: 30,
      locale: {
        format: 'MM/DD/YYYY hh:mm A'
      }
    })
    //Date range as a button
    $('#daterange-btn').daterangepicker({
        ranges: {
          'Today': [moment(), moment()],
          'Yesterday': [moment().subtract(1, 'days'), moment().subtract(1, 'days')],
          'Last 7 Days': [moment().subtract(6, 'days'), moment()],
          'Last 30 Days': [moment().subtract(29, 'days'), moment()],
          'This Month': [moment().startOf('month'), moment().endOf('month')],
          'Last Month': [moment().subtract(1, 'month').startOf('month'), moment().subtract(1, 'month').endOf('month')]
        },
        startDate: moment().subtract(29, 'days'),
        endDate: moment()
      },
      function(start, end) {
        $('#reportrange span').html(start.format('MMMM D, YYYY') + ' - ' + end.format('MMMM D, YYYY'))
      }
    )

    //Timepicker
    $('#timepicker').datetimepicker({
      format: 'LT'
    })

    //Bootstrap Duallistbox
    $('.duallistbox').bootstrapDualListbox()

    //Colorpicker
    $('.my-colorpicker1').colorpicker()
    //color picker with addon
    $('.my-colorpicker2').colorpicker()

    $('.my-colorpicker2').on('colorpickerChange', function(event) {
      $('.my-colorpicker2 .fa-square').css('color', event.color.toString());
    });

    $("input[data-bootstrap-switch]").each(function() {
      $(this).bootstrapSwitch('state', $(this).prop('checked'));
    });

  })
</script>

</html>