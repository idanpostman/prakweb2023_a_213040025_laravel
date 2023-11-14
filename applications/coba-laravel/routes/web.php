<?php

use App\Http\Controllers\DashboardController;
use App\Models\Category;

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\PostController;
use App\Http\Controllers\LoginController;
use App\Http\Controllers\RegisterController;

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

Route::get('/', function () {
    // return 'Halaman Home';
    return view('home', [
        "title" => "Home",
        "active" => 'home'
    ]);
});

Route::get('/about', function () {
    // return 'Halaman About';
    return view('about', [
        "title" => "About",
        "active" => 'about',
        "name" => "Wildan Fauzan",
        "email" => "wildan@unpas.ac.id",
        "image" => "jek.jpg"
    ]);
});



Route::get('/posts', [PostController::class, 'index']);
// Halaman Single Post
Route::get('posts/{post:slug}', [PostController::class, 'show']);

Route::get('/categories', function() {
    return view('categories', [
        'title' => 'Post Categories',
        "active" => 'categories',
        'categories' => Category::all()
    ]);
});

// middleware() berfungsi untuk agar tidak bisa nembak akses halaman lewat link 
// LOGIN
Route::get('/login', [LoginController::class, 'index'])->name('login')->middleware('guest');
Route::post('/login', [LoginController::class, 'authenticate']);
Route::post('/logout', [LoginController::class, 'logout']);

//Register
Route::get('/register', [RegisterController::class, 'index'])->middleware('guest');

// CARA BACA: kalo misalkan request ke halaman register tapi methodnya POST maka panggil
// controller register yang methodnya 'store'
Route::post('/register', [RegisterController::class, 'store']);

Route::get('/dashboard', [DashboardController::class, 'index'])->middleware('auth');



// Route::get('/categories/{category:slug}', function(Category $category) {
//     return view('posts', [
//         'title' => "Post by Category : $category->name",
//         "active" => 'categories',
//         'posts' => $category->posts->load('category', 'author')
//     ]);
// });

// Route::get('/authors/{author:username}', function(User $author){
//     return view('posts', [
//         'title' => "Post By Author : $author->name",
//         'active' => 'posts',
//         'posts' => $author->posts->load('category', 'author')
//         // penggunaan load() untuk lazy eager loading sama fungsinya untuk mengoptimalkan query
//     ]);
// });
 
 
 
