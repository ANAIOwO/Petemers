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

  <title>Petemers | EMRS-create</title>

  <!-- Font Awesome Icons -->
  <link rel="stylesheet" href="../plugins/fontawesome-free/css/all.min.css">
  <!-- Theme style -->
  <link rel="stylesheet" href="../dist/css/adminlte.min.css">
  <!-- Google Font: Source Sans Pro -->
  <link href="https://fonts.googleapis.com/css?family=Source+Sans+Pro:300,400,400i,700" rel="stylesheet">
  <!-- Bootstrap4 Duallistbox -->
  <link rel="stylesheet" href="../plugins/bootstrap4-duallistbox/bootstrap-duallistbox.min.css">
  <!-- daterange picker -->
  <link rel="stylesheet" href="../plugins/daterangepicker/daterangepicker.css">
  <!-- iCheck for checkboxes and radio inputs -->
  <link rel="stylesheet" href="../plugins/icheck-bootstrap/icheck-bootstrap.min.css">
  <!-- Bootstrap Color Picker -->
  <link rel="stylesheet" href="../plugins/bootstrap-colorpicker/css/bootstrap-colorpicker.min.css">
  <!-- Tempusdominus Bbootstrap 4 -->
  <link rel="stylesheet" href="../plugins/tempusdominus-bootstrap-4/css/tempusdominus-bootstrap-4.min.css">
  <!-- Select2 -->
  <link rel="stylesheet" href="../plugins/select2/css/select2.min.css">
  <link rel="stylesheet" href="../plugins/select2-bootstrap4-theme/select2-bootstrap4.min.css">
  <!-- Bootstrap4 Duallistbox -->
  <link rel="stylesheet" href="../plugins/bootstrap4-duallistbox/bootstrap-duallistbox.min.css">
  <!-- Theme style -->
  <link rel="stylesheet" href="../dist/css/adminlte.min.css">
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
            <div class="col-sm-6">
              <ol class="breadcrumb float-sm-right">
                <li class="breadcrumb-item"><a href="#">Home</a></li>
                <li class="breadcrumb-item active">Starter Page</li>
              </ol>
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

              <form method="post" action="{{ route('medicalrecords.store') }}" enctype="multipart/form-data">
                @csrf
                <div class="card card-primary">
                  <div class="card-header">
                    <h3 class="card-title">查看/新增寵物資料</h3>
                    <hr>
                    <button type="submit" class="btn-sm btn-default">確定</button>
                    <button type="reset" class="btn-sm btn-default">清除</button>
                    <button type="button" class="btn btn-outline-primary" style="color:seashell;"><i class="fas fa-window-close"></i>
                    </button>
                  </div>
                  <div class="col-12 col-lg-12">
                    <div class="card card-primary card-outline card-outline-tabs">
                      <div class="card-header p-0 border-bottom-0">
                        <ul class="nav nav-tabs" id="custom-tabs-four-tab" role="tablist">
                          <li class="nav-item">
                            <a class="nav-link active" id="custom-tabs-four-petfile-tab" data-toggle="pill" href="#custom-tabs-four-petfile" role="tab" aria-controls="custom-tabs-four-profile" aria-selected="true">會員寵物資料</a>
                          </li>
                          <li class="nav-item">
                            <a class="nav-link" id="custom-tabs-four-home-tab" data-toggle="pill" href="#custom-tabs-four-home" role="tab" aria-controls="custom-tabs-four-home" aria-selected="false">醫院寵物病歷新增</a>
                          </li>
                          <li class="nav-item">
                            <a class="nav-link" id="custom-tabs-four-3-tab" data-toggle="pill" href="#custom-tabs-four-3" role="tab" aria-controls="custom-tabs-four-3" aria-selected="false">查看寵物病歷</a>
                          </li>


                        </ul>
                      </div>

                      <div class="card-body">
                        <div class="tab-content" id="custom-tabs-four-tabContent">
                          <div class="tab-pane fade show active" id="custom-tabs-four-petfile" role="tabpanel" aria-labelledby="custom-tabs-four-petfile-tab">
                            <table class="table" style="width:90%">
                              <thead>
                                <tr class="table-warning">
                                  <td>會員編號(電話)</td>
                                  <td>寵物名字</td>
                                  <td>寵物性別</td>
                                  <td>寵物種類</td>
                                  <td>寵物品種</td>
                                  <td>晶片號碼</td>
                                  <td>寵物生日</td>
                                  <td>狂犬牌號</td>
                                  <td>寵物血型</td>
                                  <td>結紮狀況</td>
                                  <td>特殊病史</td>
                                  <td class="text-center">操作</td>
                                </tr>
                              </thead>
                              <tbody>
                                @foreach($userpet as $userpets)
                                <tr>
                                  <td>{{$userpets->phonenumber}}</td>
                                  <td>{{$userpets->petname}}</td>
                                  <td>{{$userpets->petgender}}</td>
                                  <td>{{$userpets->petsclass}}</td>
                                  <td>{{$userpets->breed}}</td>
                                  <td>{{$userpets->chipnumber}}</td>
                                  <td>{{$userpets->petbirthday}}</td>
                                  <td>{{$userpets->rabiesid}}</td>
                                  <td>{{$userpets->bloodtype}}</td>
                                  <td>{{$userpets->fix}}</td>
                                  <td>{{$userpets->specialmedicalhistory}}</td>
                                </tr>
                                @endforeach
                              </tbody>
                            </table>
                          </div>
                          <div class="tab-pane fade" id="custom-tabs-four-home" role="tabpanel" aria-labelledby="custom-tabs-four-home-tab">
                            <div class="form-group">
                              <div class="form-group row">
                                <input type="file" name="petpicture" />
                              </div>
                              <div class='form-group row'>
                                <label for="inputMRnmb1" class="col-lab-6 col-form-label ">會員編號(電話請確認)</label>
                                <input type="text" class="form-control col-in-s" id="phonenumber" name="phonenumber" value="{{ $user->phonenumber }}" required="true">
                              </div>
                              <div class='form-group row'>
                                <label for="inputMRnmb1" class="col-lab-4 col-form-label ">病歷號碼</label>
                                <input type="text" class="form-control col-in-s" id="inputMRnmb1" name="medicalrecordnumber" placeholder="" required="true">
                                <label for="inputPName1" class="col-lab-4 col-form-label ">寵物名字</label>
                                <input type="text" class="form-control col-in-s" id="inputPName1" name="petname" placeholder="" required="true">
                                <!-- select -->
                                <label for="slcGender" class="col-sm-1 col-form-label col-lab-4 ">性別</label>
                                <select class="form-control col-in-xs" name="petgender">
                                  <option>公</option>
                                  <option>母</option>
                                </select>
                                <label for="slcGender" class="col-lab-4 col-form-label ">種類</label>
                                <select class="form-control col-md-4" name="petsclass">
                                  <option>犬</option>
                                  <option>貓</option>
                                </select>
                              </div>
                              <div class="form-group row">
                                <label for="inputMRnmb1" class="col-lab-4 col-form-label ">晶片號碼</label>
                                <input type="text" class="form-control col-in-s" id="inputMRnmb1" name="chipnumber" placeholder="" required="true">
                                <label for="inputPName1" class="col-lab-4 col-form-label ">生日</label>
                                <!--要寫一個填寫生日後會出現年紀的box-->
                                <input type="text" class="form-control col-in-s" name="petbirthday" data-inputmask-alias="datetime" data-inputmask-inputformat="yyyy/mm/dd" data-mask>
                                <!-- select -->
                                <label for="slcGender" class="col-sm-1 col-form-label col-lab-4 ">品種</label>
                                <select class="form-control select2 " style="max-width: 20.2%;" name="breed">
                                  <option selected="selected">請選擇品種</option>
                                  <option>米克斯</option>
                                  <option>California</option>
                                  <option>Delaware</option>
                                  <option>Tennessee</option>
                                  <option>Texas</option>
                                  <option>Washington</option>
                                </select>
                                <label for="inputPName1" class="col-lab-4 col-form-label ">寵物結紮</label>
                                <select class="form-control select2 col-in-s " name="fix">
                                  <option>寵物已結紮</option>
                                  <option>寵物未結紮</option>
                                </select>
                              </div>
                              <div class="form-group row">
                                <label for="inputPName1" class="col-lab-4 col-form-label ">狂犬牌號</label>
                                <input type="text" class="form-control col-in-s" id="inputPName1" name="rabiesid" placeholder="" required="true">
                                <label for="inputPName1" class="col-lab-4 col-form-label ">血型</label>
                                <select class="form-control select2 col-in-s " name="bloodtype" style="width:20%">
                                  <option selected="selected"> </option>
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

                                <label for="inputPName1" class="col-lab-4 col-form-label ">特殊病史</label>
                                <input type="text" class="form-control col-in-s" id="inputPName1" name="specialmedicalhistory" placeholder="無">
                              </div>
                            </div>
                          </div>
                          <div class="tab-pane fade" id="custom-tabs-four-3" role="tabpanel" aria-labelledby="custom-tabs-four-3-tab">
                            <table class="table" style="width:90%">
                              <thead>
                                <tr class="table-warning">
                                  <td>會員編號</td>
                                  <td>醫院名稱</td>
                                  <td>病歷號碼</td>
                                  <td>寵物名字</td>
                                  <td>寵物性別</td>
                                  <td>寵物類別</td>
                                  <td>寵物品種</td>
                                  <td>晶片號碼</td>
                                  <td>寵物血型</td>
                                  <td>結紮狀況</td>
                                  <td>查看/填寫就診紀錄</td>
                                </tr>
                              </thead>
                              <tbody>
                                @foreach($medicalrecord as $medicalrecords)
                                <tr>
                                  <td>{{$medicalrecords->phonenumber}}</td>
                                  <td>{{$medicalrecords->hospital}}</td>
                                  <td>{{$medicalrecords->medicalrecordnumber}}</td>
                                  <td>{{$medicalrecords->petname}}</td>
                                  <td>{{$medicalrecords->petgender}}</td>
                                  <td>{{$medicalrecords->petsclass}}</td>
                                  <td>{{$medicalrecords->breed}}</td>
                                  <td>{{$medicalrecords->chipnumber}}</td>
                                  <td>{{$medicalrecords->bloodtype}}</td>
                                  <td>{{$medicalrecords->fix}}</td>
                                  <td>
                                    <a type="button" href="{{ url('treatmentdata',['userphonenumber'=>$medicalrecords->phonenumber,'mrnumber'=>$medicalrecords->medicalrecordnumber])}}" class="btn btn-success btn-sm">填寫就診資料</a>
                                  </td>
                                </tr>
                                @endforeach
                              </tbody>
                            </table>
                          </div>
                        </div>
                      </div>
                      <!-- /.card -->
                    </div>
                  </div>
                </div>
              </form>
              @endforeach
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
                          就診紀錄
                        </div>
                      </div>
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
        Anything you want
      </div>
      <!-- Default to the left -->
      <strong>Copyright &copy; 2020 <a href="https://">Petemers</a>.</strong> All rights reserved.
    </footer>
  </div>
  <!-- ./wrapper -->

  <!-- REQUIRED SCRIPTS -->

  <!-- jQuery -->
  <script src="../plugins/jquery/jquery.min.js"></script>
  <!-- Bootstrap 4 -->
  <script src="../plugins/bootstrap/js/bootstrap.bundle.min.js"></script>
  <!-- AdminLTE App -->
  <script src="../dist/js/adminlte.min.js"></script>

  <!-- jQuery -->
  <script src="../plugins/jquery/jquery.min.js"></script>
  <!-- Bootstrap 4 -->
  <script src="../plugins/bootstrap/js/bootstrap.bundle.min.js"></script>
  <!-- Select2 -->
  <script src="../plugins/select2/js/select2.full.min.js"></script>
  <!-- Bootstrap4 Duallistbox -->
  <script src="../plugins/bootstrap4-duallistbox/jquery.bootstrap-duallistbox.min.js"></script>
  <!-- InputMask -->
  <script src="../plugins/moment/moment.min.js"></script>
  <script src="../plugins/inputmask/min/jquery.inputmask.bundle.min.js"></script>
  <!-- date-range-picker -->
  <script src="../plugins/daterangepicker/daterangepicker.js"></script>
  <!-- bootstrap color picker -->
  <script src="../plugins/bootstrap-colorpicker/js/bootstrap-colorpicker.min.js"></script>
  <!-- Tempusdominus Bootstrap 4 -->
  <script src="../plugins/tempusdominus-bootstrap-4/js/tempusdominus-bootstrap-4.min.js"></script>
  <!-- Bootstrap Switch -->
  <script src="../plugins/bootstrap-switch/js/bootstrap-switch.min.js"></script>
  <!-- AdminLTE App -->
  <script src="../dist/js/adminlte.min.js"></script>
  <!-- AdminLTE for demo purposes -->
  <script src="../dist/js/demo.js"></script>

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