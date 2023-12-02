<?php

use App\Http\Controllers\ContactController;
use App\Http\Controllers\PostController;
use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "web" middleware group. Make something great!
|
*/

// Route::get('/', function () {
//     return view('layout.app');
// });

// Route::get('/about', function () {
//     return view('about');
// });

// Route::get('/conect', function () {
//     return view('conect');
// })->name('contactus');

// Route::get('/main', function () {
//     return view('new');
// });
    
// Route::post('conect',[
//         ContactController::class,'processform'
// ])->name('processcontact');

// Route::res('/main',[PostController::class,'index']);

Route::resource('/main',PostController::class);

Route::get('/', function () {
    return view('about')->name('pr');
});