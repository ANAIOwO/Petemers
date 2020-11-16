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


<!--
This is a starter template page. Use this page to start your new project from
scratch. This page gets rid of all links and provides the needed markup only.
-->


@extends('layouts.admin')


<!-- Navbar -->
@section('navbar')
<!-- Left navbar links -->
<ul class="navbar-nav">
  <!--    
      <li class="nav-item">
          <a class="nav-link" data-widget="pushmenu" href="#" role="button"><i class="fas fa-bars"></i></a>
        </li>

    -->

  <li class="nav-item d-none d-sm-inline-block">
    <a href="home" class="nav-link">首頁</a>
  </li>
  <li class="nav-item d-none d-sm-inline-block">
    <a href="EMRS_home" class="nav-link active">病歷系統</a>
  </li>
  <li class="nav-item d-none d-sm-inline-block">
    <a href="MAS_home" class="nav-link">掛號系統</a>
  </li>
  <li class="nav-item d-none d-sm-inline-block">
    <a href="PGMS_home" class="nav-link">美容管理</a>
  </li>
  <li class="nav-item d-none d-sm-inline-block">
    <a href="MMS_home" class="nav-link">藥品管理</a>
  </li>

  <!--
<<<<nav-item default>>>
[如果要新增導覽列標籤，直接複製並修改路徑與文字即可]        
        <li class="nav-item d-none d-sm-inline-block">
          <a href="路徑" class="nav-link">名稱文字</a>
        </li>

-->
</ul>

<!-- SEARCH FORM -->
<!--
      <form class="form-inline ml-3">
        <div class="input-group input-group-sm">
          <input class="form-control form-control-navbar" type="search" placeholder="Search" aria-label="Search">
          <div class="input-group-append">
            <button class="btn btn-navbar" type="submit">
              <i class="fas fa-search"></i>
            </button>
          </div>
        </div>
      </form>
-->
<!-- Right navbar links -->
<ul class="navbar-nav ml-auto">
  <!-- Messages Dropdown Menu -->
  <li class="nav-item dropdown">
    <a class="nav-link" data-toggle="dropdown" href="#">
      <i class="far fa-comments"></i>
      <span class="badge badge-danger navbar-badge">3</span>
    </a>
    <div class="dropdown-menu dropdown-menu-lg dropdown-menu-right">
      <a href="#" class="dropdown-item">
        <!-- Message Start -->
        <div class="media">
          <img src="dist/img/user1-128x128.jpg" alt="User Avatar" class="img-size-50 mr-3 img-circle">
          <div class="media-body">
            <h3 class="dropdown-item-title">
              Brad Diesel
              <span class="float-right text-sm text-danger"><i class="fas fa-star"></i></span>
            </h3>
            <p class="text-sm">Call me whenever you can...</p>
            <p class="text-sm text-muted"><i class="far fa-clock mr-1"></i> 4 Hours Ago</p>
          </div>
        </div>
        <!-- Message End -->
      </a>
      <div class="dropdown-divider"></div>
      <a href="#" class="dropdown-item">
        <!-- Message Start -->
        <div class="media">
          <img src="dist/img/user8-128x128.jpg" alt="User Avatar" class="img-size-50 img-circle mr-3">
          <div class="media-body">
            <h3 class="dropdown-item-title">
              John Pierce
              <span class="float-right text-sm text-muted"><i class="fas fa-star"></i></span>
            </h3>
            <p class="text-sm">I got your message bro</p>
            <p class="text-sm text-muted"><i class="far fa-clock mr-1"></i> 4 Hours Ago</p>
          </div>
        </div>
        <!-- Message End -->
      </a>
      <div class="dropdown-divider"></div>
      <a href="#" class="dropdown-item">
        <!-- Message Start -->
        <div class="media">
          <img src="dist/img/user3-128x128.jpg" alt="User Avatar" class="img-size-50 img-circle mr-3">
          <div class="media-body">
            <h3 class="dropdown-item-title">
              Nora Silvester
              <span class="float-right text-sm text-warning"><i class="fas fa-star"></i></span>
            </h3>
            <p class="text-sm">The subject goes here</p>
            <p class="text-sm text-muted"><i class="far fa-clock mr-1"></i> 4 Hours Ago</p>
          </div>
        </div>
        <!-- Message End -->
      </a>
      <div class="dropdown-divider"></div>
      <a href="#" class="dropdown-item dropdown-footer">See All Messages</a>
    </div>
  </li>
  <!-- Notifications Dropdown Menu -->
  <li class="nav-item dropdown">
    <a class="nav-link" data-toggle="dropdown" href="#">
      <i class="far fa-bell"></i>
      <span class="badge badge-warning navbar-badge">15</span>
    </a>
    <div class="dropdown-menu dropdown-menu-lg dropdown-menu-right">
      <span class="dropdown-header">15 Notifications</span>
      <div class="dropdown-divider"></div>
      <a href="#" class="dropdown-item">
        <i class="fas fa-envelope mr-2"></i> 4 new messages
        <span class="float-right text-muted text-sm">3 mins</span>
      </a>
      <div class="dropdown-divider"></div>
      <a href="#" class="dropdown-item">
        <i class="fas fa-users mr-2"></i> 8 friend requests
        <span class="float-right text-muted text-sm">12 hours</span>
      </a>
      <div class="dropdown-divider"></div>
      <a href="#" class="dropdown-item">
        <i class="fas fa-file mr-2"></i> 3 new reports
        <span class="float-right text-muted text-sm">2 days</span>
      </a>
      <div class="dropdown-divider"></div>
      <a href="#" class="dropdown-item dropdown-footer">See All Notifications</a>
    </div>
  </li>
  <li class="nav-item">
    <a class="nav-link" data-widget="control-sidebar" data-slide="true" href="#" role="button"><i class="fas fa-th-large"></i></a>
  </li>
</ul>
<!-- /.navbar -->
@Endsection

@section('content')

<!-- Content Wrapper. Contains page content -->

<!-- Content Header (Page header) -->
<div class="content-header">
  <div class="container-fluid">
    <div class="row mb-2">
      <div class="col-sm-6">
        <div> 這是病歷系統(EMRS_home.php) </div>
        @if ($errors->any())
        <div class="alert alert-danger">
          <ul>
            @foreach ($errors->all() as $error)
            <li>{{ $error }}</li>
            @endforeach
          </ul>
        </div><br>
        @endif
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
        <form method="post" action="{{ route('medicalrecords.store') }}" enctype="multipart/form-data">
          @csrf
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
                <input type="text" class="form-control col-2" id="inputName1" name="names" placeholder="顧客姓名" required="true">
                <label for="inputCell1" class="col-sm-1 col-form-label " style="font-size:14px;">電話</label>
                <input type="tel" class="form-control col-2" name="phonenumber" data-inputmask="'mask': ['9999-999-999']" data-mask id="inputCell1" placeholder="09xx-xxx-xxx" required="true">
                <label for="inputBday1" class="col-sm-1 col-form-label " style="font-size:14px;">生日</label>
                <input type="text" class="form-control col-2" name="birthday" data-inputmask-alias="datetime" data-inputmask-inputformat="yyyy/mm/dd" data-mask id="inputBday1">

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
                <input type="text" class="form-control col-4" id="inputAdd1" name="address" placeholder="地址" required="true">
                <label for="inputEmail3" class="col-sm-1 col-form-label " style="font-size:14px;">email</label>
                <input type="email" class="form-control col-3" id="inputEmail3" name="email" placeholder="Email" required="true">
                <label for="inputEmail3" class="col-sm-1 col-form-label " style="font-size:14px;">備註</label>
                <input type="email" class="form-control col-1" id="inputEmail3" name="remark" placeholder="">
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
                          <input type="file" name="petpicture" />
                          <label for="inputMRnmb1" class="col-lab-4 col-form-label ">病歷號碼</label>
                          <input type="text" class="form-control col-in-s" id="inputMRnmb1" name="medicalrecordnumber" placeholder="" required="true">
                          <label for="inputPName1" class="col-lab-4 col-form-label ">寵物姓名</label>
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
                            <option>鼠</option>
                            <option>兔</option>
                            <option>寵物鳥</option>
                            <option>爬蟲類</option>
                            <option>魚類</option>
                            <option>哺乳動物類</option>
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
                        </div>
                        <div class="form-group row">
                          <label for="inputPName1" class="col-lab-4 col-form-label ">狂犬牌號</label>
                          <input type="text" class="form-control col-in-s" id="inputPName1" name="rabiesid" placeholder="" required="true">
                          <label for="inputPName1" class="col-lab-4 col-form-label ">血型</label>
                          <select class="form-control select2 col-in-s " name="bloodtype">
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
                          <input type="text" class="form-control col-in-s" id="inputPName1" name="specialmedicalhistory" placeholder="無">
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
<!-- /.content -->

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
@Endsection
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