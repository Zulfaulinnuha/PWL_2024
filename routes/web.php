<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\WelcomeController;
use App\Http\Controllers\PageController;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\AboutController;
use App\Http\Controllers\ArticleController;
use App\Http\Controllers\PhotoController;
use App\Http\Controllers\ProductController;
use App\Http\Controllers\UserController;
use App\Http\Controllers\SalesController;
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
//     return view('welcome');
// });

// Route::get('/', function () {
//     return view('datadiri');
// });

// // Praktikum 1
// Route::get('/hello', function () {
//     return ('Hello World');
// });

// Route::get('/world', function () {
//     return ('World');
// });

// Route::get('/', function () {
//     return ('Selamat Datang');
// });

// Route::get('/about', function () {
//     return ('2241760131');
// });

// Route::get('/user/{Zulfa}', function ($name) {
//     return 'Nama saya '. $name;
// });

// Route::get('/posts/{post}/comments/{comment}', function ($postId, $commentId) {
//     return 'Pos ke- '. $postId. " Komentar ke-: ".$commentId;
// });

// Route::get('/articles/{id}', function ($id) {
//     return 'Id Zulfa: ' . $id;
// });

// Route::get('/user/{name?}', function ($name='John') {
//     return 'Nama saya '.$name;
// });

// Praktikum 2
// Route::get('/hello', [WelcomeController::class,'hello']);
// Route::get('/', [PageController::class,'index']);
// Route::get('/about', [PageController::class,'about']);
// Route::get('/articles/{id}', [PageController::class,'articles']);
Route::get('/', [HomeController::class,'index']);
Route::get('/about', [AboutController::class,'about']);
Route::get('/articles/{id}', [ArticleController::class,'articles']);
Route::resource('photos', PhotoController::class);
Route::resource('photos', PhotoController::class)->only(['index', 'show']);
Route::resource('photos', PhotoController::class)->except(['create', 'store', 'update', 'destroy']);

// Praktikum 3
// Route::get('/greeting', function () {
//     return view('hello', ['name' => 'Zulfa']);
//     });

// Route::get('/greeting', function () {
//     return view('blog.hello', ['name' => 'Zulfa']);
//     });

Route::get('/greeting', [WelcomeController::class,'greeting']);

// SOAL PRAKTIKUM
Route::get('/', [HomeController::class,'index'])->name('home');

Route::prefix('product')->group(function () {
    Route::get("/", [ProductController::class, 'index'])->name("product.index");

    Route::get("/category/food-beverage", [ProductController::class, 'foodBeverage'])->name('product.food-beverage');
    Route::get("/category/beauty-health", [ProductController::class, 'beautyHealth'])->name('product.beauty-health');

    Route::get("/category/home-care", [ProductController::class, 'homeCare'])->name("product.home-care");
    Route::get("/category/baby-kid", [ProductController::class, 'babyKid'])->name("product.baby-kid");
});

Route::get("/user/{id}/name/{name}", [UserController::class, 'show'])->name('user.show');

Route::get("/sales", [SalesController::class, 'index'])->name('sales.index');
           
