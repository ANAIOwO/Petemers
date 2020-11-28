<head>
  <title>Petemers | 病歷系統</title>
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
                  <td class="text-center">操作</td>
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
                  <td class="text-center">
                    <a href="{{ route('medicalrecords.edit', $medicalrecords->id)}}" class="btn btn-primary btn-sm">查看與修改</a>
                    <form action=" {{ route('medicalrecords.destroy', $medicalrecords->id)}}" method="post" style="display: inline-block">
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
    </div>
  </div>
</body>