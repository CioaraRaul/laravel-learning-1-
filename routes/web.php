<?php

use Illuminate\Support\Facades\Route;
use Illuminate\Http\Request;

Route::get('/', function () {
    return view('welcome');
});

Route::get('/jobs',function(){
    return '<h1>Available jobs</h1>';
})->name('jobs');

Route::get('/posts/{id}', function(string $id){
    return 'Post '. $id;
});
// ->whereNumber('id');
// where('id', '[0-9]+');

Route::get('/posts/{id}/comments/{commentId}', function(string $id, string $commentId){
    return 'Post '. $id . ' comment '. $commentId;
});

Route::get('/testt', function(Request $request){
    return [
        'method' => $request -> method(),
        'url' => $request -> url(),
        'path' => $request -> path(),
        'fullUrl' => $request -> fullUrl(),
        'ip' => $request -> ip(),
        'userAgent' => $request -> userAgent(),
        'header' => $request -> header(),
    ];
});

Route::get('/users',function(Request $request){
    return $request->query('name');
});

Route::get('/usersTest',function(Request $request){
    return $request->only(['name','age']);
});

Route::get('/usersTest2',function(Request $request){
    return $request->all(['name','age']);
});

Route::get('/usersTest3',function(Request $request){
    return $request->has('name');
});
Route::get('/usersTest4',function(Request $request){
    return $request->input('name', 'Default Name');
});
Route::get('/usersTest5',function(Request $request){
    return $request->except(['name']);
});

Route::any('/submit',function(){
    return 'Submitted';
});

Route::get('/test',function(){
    $url = route('jobs');
    return "<a href ='$url'>Click here </a>";
});

Route::get('/api/users', function(){
    return [
        'name' => 'John Doe',
        'email' => 'john@gmail.com'
    ];
});