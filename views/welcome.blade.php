@extends("layout")
@section("links")
@foreach ($name as $n)
    <li><a href="/posts/{{$n->id}}">{{ $n->name }}</a></li>
@endforeach
@endsection
@section('body')
<h1>Приветствую</h1>
@endsection