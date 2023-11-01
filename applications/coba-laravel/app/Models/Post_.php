<?php

namespace App\Models;


class Post 
{
    private static $blog_posts = [
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

    public static function all() 
    {
        return collect(self::$blog_posts);
    }

    public static function find($slug)
    {
        $posts = static::all();
        return $posts->firstWhere('slug', $slug);
    }
}
