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

Route::get('/', function () {
    return view('welcome');
});
Route::get('/xxy', function () {
    return view('about');
});
Route::get('/hello', function()
{
    return 'Hello World';
});

Route::get('user/{id}/{druga}', function($id,$druga)
{
    return 'User '.$id.' varijabla druga je:'.$druga;
});
/*
Route::get('test/{name}', function($name)
{
    return $name; 
})
->where('name', '[0-9A-Za-z ]+');
*/
Route::get('test/{name}', array('as' => 'mojtest',function($name)
{
    return "Ovo je broj:".$name; 
}))
->where('name', '[0-9]+');

Route::get('/student', '\App\Http\Controllers\StudController@pozdrav');
Route::get('/student1', '\App\Http\Controllers\StudController@uci');
Route::get('studenti','\App\Http\Controllers\StudController@lista');