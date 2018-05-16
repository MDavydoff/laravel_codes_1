@extends("layout")
@section("links")
@foreach ($name as $n)
    <li><a href="/posts/{{$n->id}}">{{ $n->name }}</a></li>
@endforeach
@endsection
@section('body')
@foreach ($post as $p)
    <h3>{{ $p->title }}</h1>
    <p>{{str_limit($p->body,100)}}</p>
    <a href="/post/{{$p->id}}">Читать дальше..</a>
@endforeach
@endsection