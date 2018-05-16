@extends("layout") @section("body")
<div class="row">
    <div class="col s12 m12">
      <div class="card">
        <div class="card-content black-text">
          <span class="card-title"><h1>{{ $posts->title }}</h1></span>
          <p></p>
        </div>
        <img src="{{asset($posts->image)}}" alt="">
        <div class="card-action">
          <p>{{$posts->body}}</p>
        </div>
      </div>
    </div>
  </div>
<h4>Комментарии:</h4>
@foreach ($comments as $comment)
<br>
<div class="col s12 m7">
    <div class="card horizontal">
            <div class="card-content">
                <p>{{$comment->body}}</p>
                <p>Отправлено: {{$comment->created_at->diffForHumans()}}</p>
            </div>
    </div>
</div>
@endforeach
<br>
<h4>Добавить комментарий:</h4>
<form action="/comment/{{$posts->id}}" method="post">
    @csrf
    <input type="text" name="body">
    <button type="submit">ОТПРАВИТЬ КОММЕНТАРИЙ</button>
</form>
<br>
@endsection 
@section("links") 
@foreach ($links as $p)
<li><a href="/posts/{{$p->id}}">{{ $p->name }}</a></li>
@endforeach 
@endsection
