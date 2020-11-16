<style>
  .index .nav_pos {
    margin-top: 50px;
  }

  .index .card_width {
    width: 300px;
  }
</style>


<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <meta http-equiv="x-ua-compatible" content="ie=edge">

  <title>Petemers | Starter</title>

  <!-- Font Awesome Icons -->
  <link rel="stylesheet" href="plugins/fontawesome-free/css/all.min.css">
  <!-- Theme style -->
  <link rel="stylesheet" href="dist/css/adminlte.min.css">
  <!-- Google Font: Source Sans Pro -->
  <link href="https://fonts.googleapis.com/css?family=Source+Sans+Pro:300,400,400i,700" rel="stylesheet">

</head>

<body class="hold-transition sidebar-mini sidebar-collapse  sidebar-closed">
  
  <div class="wrapper">
    <!--navbar -->
    <div>
      <?php include "navbar.php"; ?>
    </div>

    <!-- Content Wrapper. Contains page content -->
    <div class="content-wrapper" style="background-image:url(dist/img/bg3.png);max-width: 100%;max-height: 100%;background-repeat:no-repeat;background-size:cover;">
    <!-- <img src="dist/img/bg.png"style="background-image:url(>);max-width: 100%;max-height: 100%;"> </img> -->
      <!-- Content Header (Page header) -->
      <div class="content-header">
        <div class="container-fluid">
          <div class="row mb-2">
            <div class="col-sm-6">
              <h5 class="m-0 text-dark">這是首頁(index.php)【僅方便辨識，可撤除】</h5>
            </div><!-- /.col -->
            <div class="col-sm-6">
              <ol class="breadcrumb float-sm-right">
                <li class="breadcrumb-item"><a href="#">Home</a></li>
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
            
            <!-- left-block -->
            <div id="left-block" class="col-lg-5">
              <div class="card card-primary card-outline">
                <div class="card-header ">
                  <h5 class="m-0">通知</h5>
                </div>
                <div class="card-body ">
                  <h6 class="card-title">Special title treatment</h6>
                  <p class="card-text ">With supporting text below as a natural lead-in to additional content.</p>
                  <a href="#" class="btn btn-primary">Go somewhere</a>
                </div>
              </div>
              <div class="card card-primary card-outline">
                <div class="card-header ">
                  <h5 class="m-0">待辦事項</h5>
                </div>
                <div class="card-body ">
                  <h6 class="card-title">Special title treatment</h6>
                  <p class="card-text ">With supporting text below as a natural lead-in to additional content.</p>
                  <a href="#" class="btn btn-primary">Go somewhere</a>
                </div>
              </div>
            </div>
            <!-- /.left-block -->
            <div class="col-lg-7">
              <div class="card card-primary card-outline">
                <div class="card-header ">
                  <h5 class="m-0">當日預約</h5>
                </div>
                <div class="card-body ">
                  <h6 class="card-title">Special title treatment</h6>

                  <p class="card-text ">With supporting text below as a natural lead-in to additional content.</p>
                  <a href="#" class="btn btn-primary">Go somewhere</a>
                </div>
              </div>
            </div>
          </div>
        </div>
      </div><!-- /.container-fluid -->
    </div>
    <!-- /.content -->
    <!-- /.content-wrapper -->

    <!-- Main Footer -->
    <footer class="main-footer">
      <?php include "footer.php"; ?>
    </footer>
  </div>
  <!-- ./wrapper -->

  <!-- REQUIRED SCRIPTS -->

</body>

</html>