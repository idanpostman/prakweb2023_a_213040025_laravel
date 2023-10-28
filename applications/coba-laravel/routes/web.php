<?php

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

Route::get('/', function () {
    // return 'Halaman Home';
    return view('home', [
        "title" => "Home"
    ]);
});

Route::get('/about', function () {
    // return 'Halaman About';
    return view('about', [
        "title" => "About",
        "name" => "Wildan Fauzan",
        "email" => "wildan@unpas.ac.id",
        "image" => "jek.jpg"
    ]);
});



Route::get('/blog', function () {
    $blog_posts = [
        [
            "title" => "Judul Post Pertama",
            "slug" => "judul-post-pertama",
            "author" => "Wildan Fauzan",
            "body" => "Lorem ipsum dolor sit amet, 
            consectetur adipisicing elit. Deserunt, ducimus deleniti. Saepe nesciunt error explicabo veniam omnis optio dolorum corporis aliquam quasi alias, quod quam, rem maxime debitis rerum odio deleniti. Recusandae exercitationem ipsum porro excepturi sint voluptate odit temporibus, doloremque cumque culpa laboriosam neque doloribus deleniti incidunt quisquam quas dolores quo nam ab ullam magnam rerum facere, eveniet expedita? A, repudiandae? Placeat adipisci voluptas magni quisquam, ullam velit unde veritatis. Iste dolor nemo vel corrupti rem? Delectus, sunt ea."
        ],
        [
            "title" => "Judul Post Kedua",
            "slug" => "judul-post-kedua",
            "author" => "Aufaa Husniati",
            "body" => "Lorem ipsum dolor sit amet, consectetur adipisicing elit. Deserunt, ducimus deleniti. Saepe nesciunt error explicabo veniam omnis optio dolorum corporis aliquam quasi alias, quod quam, rem maxime debitis rerum odio deleniti. Recusandae exercitationem ipsum porro excepturi sint voluptate odit temporibus, doloremque cumque culpa laboriosam neque doloribus deleniti incidunt quisquam quas dolores quo nam ab ullam magnam rerum facere, eveniet expedita? A, repudiandae? Placeat adipisci voluptas magni quisquam, ullam velit unde veritatis. Iste dolor nemo vel corrupti rem? Delectus, sunt ea awkoawkoawkoawkawok uno dos tres quatros kaowkoawkaowkawokawkoawok."
        ],      
    ];

    
    // return 'Halaman Blog';
    return view('posts', [
        "title" => "Posts",
        "posts" => $blog_posts
    ]);
});



// Halaman Single Post
Route::get('posts/{slug}', function($slug) {
    $blog_posts = [
        [
            "title" => "Judul Post Pertama",
            "slug" => "judul-post-pertama",
            "author" => "Wildan Fauzan",
            "body" => "Lorem ipsum dolor sit amet, 
            consectetur adipisicing elit. Deserunt, ducimus deleniti. Saepe nesciunt error explicabo veniam omnis optio dolorum corporis aliquam quasi alias, quod quam, rem maxime debitis rerum odio deleniti. Recusandae exercitationem ipsum porro excepturi sint voluptate odit temporibus, doloremque cumque culpa laboriosam neque doloribus deleniti incidunt quisquam quas dolores quo nam ab ullam magnam rerum facere, eveniet expedita? A, repudiandae? Placeat adipisci voluptas magni quisquam, ullam velit unde veritatis. Iste dolor nemo vel corrupti rem? Delectus, sunt ea."
        ],
        [
            "title" => "Judul Post Kedua",
            "slug" => "judul-post-kedua",
            "author" => "Aufaa Husniati",
            "body" => "Lorem ipsum dolor sit amet, consectetur adipisicing elit. Deserunt, ducimus deleniti. Saepe nesciunt error explicabo veniam omnis optio dolorum corporis aliquam quasi alias, quod quam, rem maxime debitis rerum odio deleniti. Recusandae exercitationem ipsum porro excepturi sint voluptate odit temporibus, doloremque cumque culpa laboriosam neque doloribus deleniti incidunt quisquam quas dolores quo nam ab ullam magnam rerum facere, eveniet expedita? A, repudiandae? Placeat adipisci voluptas magni quisquam, ullam velit unde veritatis. Iste dolor nemo vel corrupti rem? Delectus, sunt ea awkoawkoawkoawkawok uno dos tres quatros kaowkoawkaowkawokawkoawok."
        ],      
    ];

    $new_post = [];
    foreach($blog_posts as $post) 
        if($post["slug"] === $slug) {
            $new_post = $post;
    }
    return view('post', [
        "title" => "Single Post",
        "post" => $new_post
    ]);
    
});
