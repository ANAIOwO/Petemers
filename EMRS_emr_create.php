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

  <title>Petemers | EMRS/create</title>

  <!-- Font Awesome Icons -->
  <link rel="stylesheet" href="plugins/fontawesome-free/css/all.min.css">
  <!-- Theme style -->
  <link rel="stylesheet" href="dist/css/adminlte.min.css">
  <!-- Google Font: Source Sans Pro -->
  <link href="https://fonts.googleapis.com/css?family=Source+Sans+Pro:300,400,400i,700" rel="stylesheet">
  <!-- Bootstrap4 Duallistbox -->
  <link rel="stylesheet" href="plugins/bootstrap4-duallistbox/bootstrap-duallistbox.min.css">
  <!-- daterange picker -->
  <link rel="stylesheet" href="plugins/daterangepicker/daterangepicker.css">
  <!-- iCheck for checkboxes and radio inputs -->
  <link rel="stylesheet" href="plugins/icheck-bootstrap/icheck-bootstrap.min.css">
  <!-- Bootstrap Color Picker -->
  <link rel="stylesheet" href="plugins/bootstrap-colorpicker/css/bootstrap-colorpicker.min.css">
  <!-- Tempusdominus Bbootstrap 4 -->
  <link rel="stylesheet" href="plugins/tempusdominus-bootstrap-4/css/tempusdominus-bootstrap-4.min.css">
  <!-- Select2 -->
  <link rel="stylesheet" href="plugins/select2/css/select2.min.css">
  <link rel="stylesheet" href="plugins/select2-bootstrap4-theme/select2-bootstrap4.min.css">
  <!-- Bootstrap4 Duallistbox -->
  <link rel="stylesheet" href="plugins/bootstrap4-duallistbox/bootstrap-duallistbox.min.css">
  <!-- Theme style -->
  <link rel="stylesheet" href="dist/css/adminlte.min.css">
</head>

<body class="hold-transition sidebar-mini sidebar-collapse  sidebar-closed">
  <div class="wrapper">

    <!--navbar -->
    <div>
      <?php include "navbar.php"; ?>
    </div>
    <!-- /.navbar -->

    <!-- Content Wrapper. Contains page content -->
    <div class="content-wrapper">
      <!-- Content Header (Page header) -->
      <div class="content-header">
        <div class="container-fluid">
          <div class="row mb-2">
            <div class="col-sm-6">
              <div> 這是病歷系統(EMRS_home.php) </div>
              <h1 class="m-0 text-dark">Starter Page</h1>
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

              <!-- form start -->
              <form role="form">
                <div class="card card-primary">
                  <div class="card-header">
                    <h3 class="card-title">新增顧客資料</h3>
                    <button type="submit" class="btn-sm btn-default" style="margin-left:820px">確定</button>
                    <button type="reset" class="btn-sm btn-default" style="margin-left:1px">清除</button>
                    <button type="button" class="btn btn-outline-primary" style="color:seashell;"><i class="fas fa-window-close"></i>
                    </button>
                  </div>

                  <!-- /.card-header -->
                  <div class="card-body">
                    <div class="form-group row">
                      <label for="inputName1" class="col-sm-1 col-form-label " style="font-size:14px;">顧客姓名</label>
                      <input type="text" class="form-control col-2" id="inputName1" placeholder="顧客姓名" required="true">
                      <label for="inputCell1" class="col-sm-1 col-form-label " style="font-size:14px;">電話</label>
                      <input type="tel" class="form-control col-2" data-inputmask="'mask': ['9999-999-999']" data-mask id="inputCell1" placeholder="09xx-xxx-xxx" required="true">
                      <label for="inputBday1" class="col-sm-1 col-form-label " style="font-size:14px;">生日</label>
                      <input type="text" class="form-control col-2" data-inputmask-alias="datetime" data-inputmask-inputformat="yyyy/mm/dd" data-mask>

                      <!--default值設定--PHP版
                      <input type="date" class="form-control col-2" id="inputBday1" value="<?php echo date("2002-m-d"); ?>">
                    -->
                      <!--date日曆版
                      <input type="date" class="form-control col-2" id="inputBday1" required="true">
                     -->

                      <label for="inputBday1" class="col-sm-1 col-form-label " style="font-size:14px;">會員等級</label>
                      <i class="fas fa-user-circle s_memlvl"></i>
                    </div>

                    <div class="form-group row">
                      <label for="inputAdd1" class="col-sm-1 col-form-label " style="font-size:14px;">通訊地址</label>
                      <input type="text" class="form-control col-4" id="inputAdd1" placeholder="地址" required="true">
                      <label for="inputEmail3" class="col-sm-1 col-form-label " style="font-size:14px;">email</label>
                      <input type="email" class="form-control col-3" id="inputEmail3" placeholder="Email" required="true">
                      <label for="inputEmail3" class="col-sm-1 col-form-label " style="font-size:14px;">備註</label>
                      <input type="email" class="form-control col-1" id="inputEmail3" placeholder="">
                    </div>

                  </div>
                  <div class="col-12 col-lg-12">
                    <div class="card card-primary card-outline card-outline-tabs">
                      <div class="card-header p-0 border-bottom-0">
                        <ul class="nav nav-tabs" id="custom-tabs-four-tab" role="tablist">
                          <li class="nav-item">
                            <a class="nav-link active" id="custom-tabs-four-home-tab" data-toggle="pill" href="#custom-tabs-four-home" role="tab" aria-controls="custom-tabs-four-home" aria-selected="true">寵物一</a>
                          </li>
                          <li class="nav-item">
                            <a class="nav-link" id="custom-tabs-four-profile-tab" data-toggle="pill" href="#custom-tabs-four-profile" role="tab" aria-controls="custom-tabs-four-profile" aria-selected="false">Profile</a>
                          </li>
                          <li class="nav-item">
                            <a class="nav-link" id="custom-tabs-four-messages-tab" data-toggle="pill" href="#custom-tabs-four-messages" role="tab" aria-controls="custom-tabs-four-messages" aria-selected="false">Messages</a>
                          </li>
                          <li class="nav-item">
                            <a class="nav-link" id="custom-tabs-four-settings-tab" data-toggle="pill" href="#custom-tabs-four-settings" role="tab" aria-controls="custom-tabs-four-settings" aria-selected="false">Settings</a>
                          </li>
                        </ul>
                      </div>
                      <div class="card-body">
                        <div class="tab-content" id="custom-tabs-four-tabContent">
                          <div class="tab-pane fade show active" id="custom-tabs-four-home" role="tabpanel" aria-labelledby="custom-tabs-four-home-tab">
                            <div class="form-group">
                              <div class="form-group row">
                                <label for="inputMRnmb1" class="col-lab-4 col-form-label ">病歷號碼</label>
                                <input type="text" class="form-control col-in-s" id="inputMRnmb1" placeholder="" required="true">
                                <label for="inputPName1" class="col-lab-4 col-form-label ">寵物姓名</label>
                                <input type="text" class="form-control col-in-s" id="inputPName1" placeholder="" required="true">
                                <!-- select -->
                                <label for="slcGender" class="col-sm-1 col-form-label col-lab-4 ">性別</label>
                                <select class="form-control col-in-xs">
                                  <option>公</option>
                                  <option>母</option>
                                </select>
                                <label for="slcGender" class="col-lab-4 col-form-label ">種類</label>
                                <select class="form-control col-in-xs">
                                  <option>犬</option>
                                  <option>貓</option>
                                  <option>鼠</option>
                                  <option>兔</option>
                                </select>
                              </div>
                              <div class="form-group row">
                                <label for="inputMRnmb1" class="col-lab-4 col-form-label ">晶片號碼</label>
                                <input type="text" class="form-control col-in-s" id="inputMRnmb1" placeholder="" required="true">
                                <label for="inputPName1" class="col-lab-4 col-form-label ">生日</label>
                                <!--要寫一個填寫生日後會出現年紀的box-->
                                <input type="text" class="form-control col-in-s" data-inputmask-alias="datetime" data-inputmask-inputformat="yyyy/mm/dd" data-mask>
                                <!-- select -->
                                <label for="slcGender" class="col-sm-1 col-form-label col-lab-4 ">品種</label>
                                <select class="form-control select2 " style="max-width: 20.2%;">
                                  <option selected="selected">請選擇品種</option>
                                  <option>米克斯</option>
                                  <option>California</option>
                                  <option>Delaware</option>
                                  <option>Tennessee</option>
                                  <option>Texas</option>
                                  <option>Washington</option>
                                </select>
                              </div>
                              <div class="form-group row">
                                <label for="inputPName1" class="col-lab-4 col-form-label ">狂犬牌號</label>
                                <input type="text" class="form-control col-in-s" id="inputPName1" placeholder="" required="true">
                                <label for="inputPName1" class="col-lab-4 col-form-label ">血型</label>
                                <select class="form-control select2 col-in-s ">
                                  <option selected="selected"> </option>
                                  <option>米克斯</option>
                                  <option>California</option>
                                  <option>Delaware</option>
                                  <option>Tennessee</option>
                                  <option>Texas</option>
                                  <option>Washington</option>
                                </select>
                                <!-- select -->
                                <label for="inputPName1" class=" col-form-label col-lab-4" style="margin-left:20px;margin-right:6px">結紮</label>
                                <div class="icheck-primary d-inline">
                                  <input type="checkbox" id="checkboxPrimary1" checked>
                                  <label for="checkboxPrimary1">
                                  </label>
                                </div>
                                <label for="inputPName1" class="col-lab-4 col-form-label ">特殊病史</label>
                                <input type="text" class="form-control col-in-s" id="inputPName1" placeholder="無">
                              </div>
                            </div>
                          </div>
                          <div class="tab-pane fade" id="custom-tabs-four-profile" role="tabpanel" aria-labelledby="custom-tabs-four-profile-tab">
                            Mauris tincidunt mi at erat gravida, eget tristique urna bibendum. Mauris pharetra purus ut ligula tempor, et vulputate metus facilisis. Lorem ipsum dolor sit amet, consectetur adipiscing elit. Vestibulum ante ipsum primis in faucibus orci luctus et ultrices posuere cubilia Curae; Maecenas sollicitudin, nisi a luctus interdum, nisl ligula placerat mi, quis posuere purus ligula eu lectus. Donec nunc tellus, elementum sit amet ultricies at, posuere nec nunc. Nunc euismod pellentesque diam.
                          </div>
                          <div class="tab-pane fade" id="custom-tabs-four-messages" role="tabpanel" aria-labelledby="custom-tabs-four-messages-tab">
                            Morbi turpis dolor, vulputate vitae felis non, tincidunt congue mauris. Phasellus volutpat augue id mi placerat mollis. Vivamus faucibus eu massa eget condimentum. Fusce nec hendrerit sem, ac tristique nulla. Integer vestibulum orci odio. Cras nec augue ipsum. Suspendisse ut velit condimentum, mattis urna a, malesuada nunc. Curabitur eleifend facilisis velit finibus tristique. Nam vulputate, eros non luctus efficitur, ipsum odio volutpat massa, sit amet sollicitudin est libero sed ipsum. Nulla lacinia, ex vitae gravida fermentum, lectus ipsum gravida arcu, id fermentum metus arcu vel metus. Curabitur eget sem eu risus tincidunt eleifend ac ornare magna.
                          </div>
                          <div class="tab-pane fade" id="custom-tabs-four-settings" role="tabpanel" aria-labelledby="custom-tabs-four-settings-tab">
                            Pellentesque vestibulum commodo nibh nec blandit. Maecenas neque magna, iaculis tempus turpis ac, ornare sodales tellus. Mauris eget blandit dolor. Quisque tincidunt venenatis vulputate. Morbi euismod molestie tristique. Vestibulum consectetur dolor a vestibulum pharetra. Donec interdum placerat urna nec pharetra. Etiam eget dapibus orci, eget aliquet urna. Nunc at consequat diam. Nunc et felis ut nisl commodo dignissim. In hac habitasse platea dictumst. Praesent imperdiet accumsan ex sit amet facilisis.
                          </div>
                        </div>
                      </div>
                      <!-- /.card -->

                      <div class="card card-secondary card-outline card-outline-tabs">
                        <div class="card-header p-0 border-bottom-0">
                          <ul class="nav nav-tabs" id="detailform-tabs-five-tab" role="tablist">
                            <li class="nav-item">
                              <!--Medical Records-->
                              <a class="nav-link active" id="detailform-tabs-five-MR-tab" data-toggle="pill" href="#detailform-tabs-five-MR" role="tab" aria-controls="custom-tabs-four-home" aria-selected="true">就診紀錄</a>
                            </li>
                            <li class="nav-item">
                              <!--Inspection Report-->
                              <a class="nav-link" id="detailform-tabs-five-IR-tab" data-toggle="pill" href="#detailform-tabs-five-IR" role="tab" aria-controls="custom-tabs-four-profile" aria-selected="false">檢驗報告</a>
                            </li>
                            <li class="nav-item">
                              <!--Pet Grooming-->
                              <a class="nav-link" id="detailform-tabs-five-PGM-tab" data-toggle="pill" href="#detailform-tabs-five-PGM" role="tab" aria-controls="custom-tabs-four-messages" aria-selected="false">美容</a>
                            </li>
                            <!--Hospitalized & Accommodation-->
                            <li class="nav-item">
                              <a class="nav-link" id="detailform-tabs-five-H&A-tab" data-toggle="pill" href="#detailform-tabs-five-H&A" role="tab" aria-controls="custom-tabs-four-settings" aria-selected="false">住宿</a>
                            </li>
                            <!--Others-->
                            <li class="nav-item">
                              <a class="nav-link" id="detailform-tabs-five-Others-tab" data-toggle="pill" href="#detailform-tabs-five-Others" role="tab" aria-controls="custom-tabs-four-settings" aria-selected="false">其他</a>
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
                            <div class="tab-pane fade" id="detailform-tabs-five-IR" role="tabpanel" aria-labelledby="detailform-tabs-five-IR-tab">
                              檢驗報告
                            </div>
                            <div class="tab-pane fade" id="detailform-tabs-five-PGM" role="tabpanel" aria-labelledby="detailform-tabs-five-PGM-tab">
                              寵物美容
                            </div>
                            <div class="tab-pane fade" id="detailform-tabs-five-H&A" role="tabpanel" aria-labelledby="detailform-tabs-five-H&A-tab">
                              住院住宿
                            </div>
                            <div class="tab-pane fade" id="detailform-tabs-five-Others" role="tabpanel" aria-labelledby="detailform-tabs-five-Others-tab">
                              其他頁面
                            </div>
                          </div>
                        </div>
                        <!-- /.card -->
                      </div>
                    </div>
                  </div>
                </div>

                <!-- /.card-body -->

                <div class="card-footer">
                </div>
              </form>
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
  <script src="plugins/jquery/jquery.min.js"></script>
  <!-- Bootstrap 4 -->
  <script src="plugins/bootstrap/js/bootstrap.bundle.min.js"></script>
  <!-- AdminLTE App -->
  <script src="dist/js/adminlte.min.js"></script>

  <!-- jQuery -->
  <script src="plugins/jquery/jquery.min.js"></script>
  <!-- Bootstrap 4 -->
  <script src="plugins/bootstrap/js/bootstrap.bundle.min.js"></script>
  <!-- Select2 -->
  <script src="plugins/select2/js/select2.full.min.js"></script>
  <!-- Bootstrap4 Duallistbox -->
  <script src="plugins/bootstrap4-duallistbox/jquery.bootstrap-duallistbox.min.js"></script>
  <!-- InputMask -->
  <script src="plugins/moment/moment.min.js"></script>
  <script src="plugins/inputmask/min/jquery.inputmask.bundle.min.js"></script>
  <!-- date-range-picker -->
  <script src="plugins/daterangepicker/daterangepicker.js"></script>
  <!-- bootstrap color picker -->
  <script src="plugins/bootstrap-colorpicker/js/bootstrap-colorpicker.min.js"></script>
  <!-- Tempusdominus Bootstrap 4 -->
  <script src="plugins/tempusdominus-bootstrap-4/js/tempusdominus-bootstrap-4.min.js"></script>
  <!-- Bootstrap Switch -->
  <script src="plugins/bootstrap-switch/js/bootstrap-switch.min.js"></script>
  <!-- AdminLTE App -->
  <script src="dist/js/adminlte.min.js"></script>
  <!-- AdminLTE for demo purposes -->
  <script src="dist/js/demo.js"></script>

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