<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\JobController;
use App\Http\Controllers\HomeController;
// use Illuminate\Http\Request;
// use Illuminate\Http\Response;

Route::get('/', ([HomeController::class, 'index']))->name('/');

Route::resource('jobs', JobController::class);

// Route::get('/jobs',([JobController::class, 'index']))->name('jobs');

// Route::get('/jobs/create', ([JobController::class, 'create']))->name('jobs.create');

// Route::get('/jobs/{id}',([JobController::class, 'show']))->name('jobs.show');

// Route::post('/jobs', [JobController::class, 'store'])->name('jobs.store');


// Route::get('/', function () {
//     return view('welcome');
// });
// Route::get('/jobs/create',function(){
//     return view('jobs.create');
// })->name('jobs.create');


// Route::get('/test',function(){
//     return response("<h1>hello world</h1>", 200)->header('Content-Type','text/html');
// });
// Route::get('/test2',function(){
//     return response()->json(['name' => 'Hhfd'])->cookie('name','John Doe');
// });

// Route::get('/download', function(){
//     return response()->download(public_path('favicon.ico'));
// });

// Route::get('/notfound', function(){
//     return new Response("not found",404);
// });

// Route::get('/read-cookie',function(Request $request){
//     $cookieValue = $request -> cookie('name');
//     return response()-> json(['cookie'=> $cookieValue]);
// });



// Route::get('/posts/{id}', function(string $id){
//     return 'Post '. $id;
// });
// // ->whereNumber('id');
// // where('id', '[0-9]+');

// Route::get('/posts/{id}/comments/{commentId}', function(string $id, string $commentId){
//     return 'Post '. $id . ' comment '. $commentId;
// });

// Route::get('/testt', function(Request $request){
//     return [
//         'method' => $request -> method(),
//         'url' => $request -> url(),
//         'path' => $request -> path(),
//         'fullUrl' => $request -> fullUrl(),
//         'ip' => $request -> ip(),
//         'userAgent' => $request -> userAgent(),
//         'header' => $request -> header(),
//     ];
// });

// Route::get('/users',function(Request $request){
//     return $request->query('name');
// });

// Route::get('/usersTest',function(Request $request){
//     return $request->only(['name','age']);
// });

// Route::get('/usersTest2',function(Request $request){
//     return $request->all(['name','age']);
// });

// Route::get('/usersTest3',function(Request $request){
//     return $request->has('name');
// });
// Route::get('/usersTest4',function(Request $request){
//     return $request->input('name', 'Default Name');
// });
// Route::get('/usersTest5',function(Request $request){
//     return $request->except(['name']);
// });

// Route::any('/submit',function(){
//     return 'Submitted';
// });

// Route::get('/test',function(){
//     $url = route('jobs');
//     return "<a href ='$url'>Click here </a>";
// });

// Route::get('/api/users', function(){
//     return [
//         'name' => 'John Doe',
//         'email' => 'john@gmail.com'
//     ];
// });