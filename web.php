<?php

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/
use Illuminate\Http\Request;
Route::get('/', function () {
    $result = App\Category::all();
    return view('welcome',['name'=>$result]);
});
Route::get('/posts/{num}', function ($num) {
    $result = App\Category::all();
    $result1 = App\Post::where('idcategory','=',$num)->get();
    return view('posts',['post' => $result1,'name'=>$result]);
});
Route::get('/post/{id}', function ($id) {
    $result = App\Category::all();
    
    $ress = App\Post::find($id);
    $comments=$ress->comments;
    return view('post', ['posts'=>$ress,'links'=>$result,'comments'=>$comments]);
  
});
Route::get('admin',function(){
    $result = App\Category::all();
    return view('admin', ['links'=>$result]);
    return back();
});
Route::post('/comment/{id}',function($id, Request $req){
    App\Comment::create([
       'body'=>$req->body,'post_id'=>$req->id 
    ]);
    return back();
});
Route::post('addPost',function(Request $req){
    $path=Storage::put('public',$req->file('post_image'));
    $url = Storage::url($path);
    App\Post::create([
        'title'=>$req->title, 
        'body'=>$req->body, 
        'idcategory'=>1,
        'image'=>$url
    ]);
    return back();
});
Route::get('/lol',function(Request $req){
    header("Access-Control-Allow-Origin: *");
    App\Post::create([
        'title'=>$req->title, 
        'body'=>$req->body, 
        'idcategory'=>$req->id_category,
        'image'=>"asd"
    ]);
});