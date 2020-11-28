<head>
  <title>Petemers | 預約掛號系統</title>
  <link rel="shortcut icon" href="#" />
</head>

<div>
  @include('petsystemadmin.navbar')
</div>

<style>
  .push-top {
    margin-top: 50px;
  }
</style>

<body class="hold-transition sidebar-mini sidebar-collapse  sidebar-closed">
  <div class="wrapper">
    <div class="content-wrapper">
      <div class="content">
        <div class="card card-primary">


          <div class="push-top">
            @if(session()->get('success'))
            <div class="alert alert-success">
              {{ session()->get('success') }}
            </div><br />
            @endif


            <!-- Main content -->
            <div class="content">
              <div class="container-fluid">
                <div class="row">
                  <div class="col-lg-12">
                    <div class="col-12 col-xl-12" style="background-color:#C4C4C4;height:50px;">
                      <!-- SEARCH FORM -->
                      <form class="form-inline ml-3 " method="GET" action="{{ url('searchuser')}}">
                        <label for="inputName1" class="col-sm-4 col-form-label searchbar-mtop" style="font-size:20px">新增病歷-查詢顧客電話:</label>
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

                  </div>
                  <!-- /.card -->
                </div>
                <!-- /.col-md-6 -->
              </div>
              <!-- /.row -->
            </div><!-- /.container-fluid -->

            <table class="table">
              <thead>
                <tr class="table-warning">
                  <td>醫院</td>
                  <td>日期</td>
                  <td>時間</td>
                  <td>看診類別</td>
                  <td>寵物類別</td>
                  <td>預約者/飼主</td>
                  <td>連絡電話</td>
                  <td>備註</td>
                  <td>是否有病歷</td>
                  <td class="text-center">Action</td>
                </tr>
              </thead>
              <tbody>
                @foreach($appointment as $appointments)
                <tr>
                  <td>{{$appointments->hospital}}</td>
                  <td>{{$appointments->day}}</td>
                  <td>{{$appointments->time}}</td>
                  <td>{{$appointments->classification}}</td>
                  <td>{{$appointments->petsclass}}</td>
                  <td>{{$appointments->names}}</td>
                  <td>{{$appointments->phonenumber}}</td>
                  <td>{{$appointments->remark}}</td>
                  <td>
                    @foreach($medicalrecord as $medicalrecords)
                    @if(($medicalrecords->phonenumber)==($appointments->phonenumber) && ($medicalrecords->chipnumber)==($appointments->chipnumber))
                    <a type="button" href="{{ url('treatmentdata',['userphonenumber'=>$appointments->phonenumber,'mrnumber'=>$medicalrecords->medicalrecordnumber])}}" class="btn btn-success btn-sm">填寫就診資料</a>
                    @endif
                    @endforeach
                  </td>
                  <td class="text-center">
                    <a href="{{ route('appointment.edit', $appointments->id)}}" class="btn btn-primary btn-sm">查看或修改</a>
                    <form action=" {{ route('appointment.destroy', $appointments->id)}}" method="post" style="display: inline-block">
                      @csrf
                      @method('DELETE')
                      <button class="btn btn-danger btn-sm"" type=" submit">刪除</button>
                    </form>
                  </td>
                </tr>
                @endforeach
              </tbody>
            </table>
          </div>
        </div>
      </div>
    </div>
  </div>
</body>