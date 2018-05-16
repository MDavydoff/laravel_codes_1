@extends("layout")
@section("body")
<h2>СОЗДАТЬ ПОСТ</h2>
<form action="/addPost" method="post" enctype="multipart/form-data">
    @csrf
    <p>Название поста</p>
    <input type="text" name='title' placeholder="Название поста">
    <p>Текст поста</p>
    <input type="text" name='body' placeholder="Текст поста">
    <input name="post_image" type="file">
    <button type="submit">ОТПРАВИТЬ</button>
</form>
<br>
<br>
@endsection 
@section("links") 
@foreach ($links as $p)
<li><a href="/posts/{{$p->id}}">{{ $p->name }}</a></li>
@endforeach 
@endsection
