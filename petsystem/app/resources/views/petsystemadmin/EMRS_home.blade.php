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

  /* 搜尋列上界位置 */
  .searchbar-mtop {
    margin-top: 10px;
  }

  /* 按鈕位置Z軸至頂 */
  .btn-overlay {
    position: absolute;
    z-index: 9999999999;
  }
</style>

<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <meta http-equiv="x-ua-compatible" content="ie=edge">

  <title>Petemers | EMRS Home</title>

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
              <!--
              <button type="button" class="btn btn-block btn-overlay btn-outline-secondary btn-lg" onclick="window.location.href='/testcreate'" style="width:300px;color: #26416D; border-color: #26416D;margin-left:38%;margin-top:30%;">新增病歷</button>
              -->
              <video src="../dist/img/vdo/test3.mp4" autoplay="autoplay" loop="true" muted="true" type="video/mp4" style="background-image:url(>);max-width: 100%;max-height: 100%;"> </video>
            </div>
            <!-- /.card -->
          </div>
          <!-- /.col-md-6 -->
        </div>
        <!-- /.row -->
      </div><!-- /.container-fluid -->
    </div>
    <!-- /.content -->

    <!-- Main Footer -->
    <footer class="main-footer">
      @include('petsystemadmin.footer')
    </footer>
  </div>
  <!-- ./wrapper -->
</body>

<!-- Page script -->
<!-- REQUIRED SCRIPTS -->
<script>
</script>

</html>