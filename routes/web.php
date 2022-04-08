<?php

use Illuminate\Support\Facades\Route;
use App\Models\blogs;
use App\Http\Controllers\BlogController;
use App\Http\Controllers\CommentsController;
use App\Http\Controllers\UserController;

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

//get all tweets
// Route::get('/', function () {
//     $blogs = blogs::all();
//     return view('welcome',['blogs'=>$blogs]);
// });

Route::get('/', function () {
    return view('welcome');
});

// Route::get('/home', function () {
//     $blogs = blogs::all();
//     return view('welcome',['blogs'=>$blogs]);
// });

Route::get('/blogs',[BlogController::class, 'index']);
Route::get('/home',[BlogController::class, 'index']);
Route::post('/blogs',[BlogController::class, 'store']);
Route::get('/blog/create', [BlogController::class, 'create']);
Route::get('/blogs/{blogs}', [BlogController::class, 'show']);

Route::post('/blogs/{blogs}/comment', [CommentsController::class, 'store']);


Route::get('/user/{user}',[UserController::class, 'index']);

// Auth::routes();

Route::get('/dashboard', function () {
    return view('dashboard');
})->middleware(['auth'])->name('dashboard');



require __DIR__.'/auth.php';
