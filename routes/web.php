<?php

use App\Http\Controllers\BookController;
use App\Http\Controllers\HomeController;
use App\Models\Book;
use Illuminate\Support\Facades\Route;

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

// هذا راوت عرض صفحة المستخدم مع ارسال استعلم عن البيانات عشان نعرضها في الموقعS
Route::get('/', function () {
    $ShowBook = Book::all();
    return view('home',compact('ShowBook'));
});


// هذا راوت للوصول الى دوال الكنترولر
Route::resource('b',BookController::class);
