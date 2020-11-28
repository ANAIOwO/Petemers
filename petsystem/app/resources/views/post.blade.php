<head>
  <title>Petemers | 醫院留言板</title>
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

          @if(session()->get('success'))
          <div class="alert alert-success">
            {{ session()->get('success') }}
          </div><br />
          @endif

          <div class="row">
            @foreach($post as $posts)
            <div class="col-md-8 col-md-offset-2" style="margin-top:50px;">
              <h1>{{$posts->title}}</h1>
              <p>{{$posts->body}}</p>
              <form action="{{ url('destroyall')}}" method="post" style="display: inline-block">
                @csrf
                <button class="btn btn-danger btn-sm"" type=" submit">刪除全部留言</button>
              </form>
              <hr>
            </div>
            @endforeach
          </div>

          <div class="comments">
            <ul class="list-group">
              @foreach ($comment as $comments)
              <li class="list-group-item">

                <strong>
                  {{ $comments->created_at }} &nbsp;<br>
                  {{ \Carbon\Carbon::parse($comments->created_at)->diffForHumans() }} &nbsp;
                </strong>
                <br>
                <h4>職員:&nbsp;{{ $comments->name }}&nbsp;&nbsp;聯絡:&nbsp;{{ $comments->contact }}</h4>
                <br>
                <h4>留言: </h4>
                <h3>{{ $comments->comment }}</h3>
                <form action="{{ route('admincomments.destroy', $comments->id)}}" method="post" style="display: inline-block">
                  @csrf
                  @method('DELETE')
                  <button class="btn btn-danger btn-sm"" type=" submit">刪除</button>
                </form>
              </li>

              @endforeach
            </ul>
          </div>
          <hr>
          <div class="card-body">
            <div class="row">
              <div id="comment-form" class="col-md-8 col-md-offset-2" style="margin-top:30px;">

                <form name="myForm" class="myForm" method="post" action="{{ route('admincomments.store') }}" accept-charset="utf-8">
                  {{ csrf_field() }}
                  <p>職員姓名:</p>
                  <label for="name"></label>
                  <input type="text" class="form-control" name="name" />

                  <p>聯絡方式:</p>
                  <label for="contact"></label>
                  <input type="text" class="form-control" name="contact" />

                  <p>留言:</p>
                  <label for="comment"></label>
                  <input type="text" class="form-control" name="comment" placeholder="留言請2個字以上" />
                  <input type="submit" value="提交">
                </form>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>
</body>