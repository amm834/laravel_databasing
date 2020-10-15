<?php

use App\Post;

Route::get('/', function () {
  return view('welcome');
});


//Create
Route::get('/create',function (){
  Post::create(['title'=>'Ma Ma','content'=>'Yhi Boo']);
});
//Update
Route::get('/update',function (){
  Post::where('id',7)->update(['content'=>'Thi Boo']);
});
//Delete 
route::get('/delete',function (){
  
//   $post = Post::find(1);
//   $post->delete();

// Post::destroy(2);
Post::destroy([3,4,5,6]);
});

//SoftDelete
Route::get('/softDeletes',function (){
  $post = Post::find('7');
  $post->delete();
});

Route::get('/getsoft',function (){
  return Post::onlyTrashed(7)->get();
});