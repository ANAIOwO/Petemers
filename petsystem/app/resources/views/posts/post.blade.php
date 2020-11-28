<div class="col-sm-8 blog-main">
  <div class="blog-post">
    <br>
    <br>
    <div class="card-body">
      <h3 class="blog-post-title">
        <a href="/posts/{{ $post->id }} ">
          {{ $post->title }}
        </a>
      </h3>
      <h4>發布時間:</h4>
      <p class="lead mb-0">{{ $post->created_at->toFormattedDateString() }}</p>
      <h4>說明:</h4>
      <p class="lead mb-0">{{$post->body}}</p>
      <h4>發布者:</h4>
      <p class="lead mb-0">{{$post->name}}</p>
    </div>
    <br>
    <br>
  </div>
</div>