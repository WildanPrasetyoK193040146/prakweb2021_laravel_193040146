<?php

namespace App\Models;

class Post 
{
    private static $blog_posts = [
    [
        "title" => "Judul Post Pertama",
        "slug" => "judul-post-pertama",
        "author" => "Wildan Prasetyo",
        "body" => "Lorem ipsum dolor sit amet, consectetur adipisicing elit. Distinctio ipsum reprehenderit nam porro voluptas non hic aliquam voluptatem? Deserunt dignissimos nihil enim aut soluta at adipisci commodi quae illum inventore repellendus earum modi, minima rem atque laborum quo doloremque consequuntur eius numquam suscipit explicabo natus. Soluta asperiores consectetur tempora, pariatur expedita vitae. Corrupti ducimus illum architecto hic nemo blanditiis odit excepturi est corporis sequi inventore doloremque itaque minima exercitationem porro repellendus explicabo consequuntur quae dolores similique quis, fugiat distinctio aliquid?"
    ],

    [
        "title" => "Judul Post Kedua",
        "slug" => "judul-post-kedua",
        "author" => "Asep Galon",
        "body" => "Lorem ipsum dolor sit amet, consectetur adipisicing elit. Distinctio ipsum reprehenderit nam porro voluptas non hic aliquam voluptatem? Deserunt dignissimos nihil enim aut soluta at adipisci commodi quae illum inventore repellendus earum modi, minima rem atque laborum quo doloremque consequuntur eius numquam suscipit explicabo natus. Soluta asperiores consectetur tempora, pariatur expedita vitae. Corrupti ducimus illum architecto hic nemo blanditiis odit excepturi est corporis sequi inventore doloremque itaque minima exercitationem porro repellendus explicabo consequuntur quae dolores similique quis, fugiat distinctio aliquid?"
    ]
];

    public static function all()
    {
        return self::$blog_posts;
    }

    public static function find($slug)
    {
        $posts = static::all();
        return $posts->firstWhere('slug', $slug);
    
    }

}
