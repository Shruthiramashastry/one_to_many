<?php

use Illuminate\Support\Facades\Route;
use App\Models\User;
use App\Models\Post;

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
Route::get('create',function(){
    $user = User::findOrFail(1);
    $post = new Post(['title'=>'Particular111','body'=>'You have purchased hand bag']);
    $user->posts()->save($post);
});
//has many relationship read
route::get('read',function(){
    $user = User::findOrFail(1);
    foreach($user->posts as $post){
        echo $post->title."<br/>";
    }
});
