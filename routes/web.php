<?php

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

Route::get('/', function () {
    return view('Home', [
        "title" => "Home"
    ]);
});

Route::get('/About', function () {
    return view('About', [
        "title" => "About",
        "name" => "Wildan Prasetyo",
        "email" => "193040146@mail.unpas.ac.id",
        "image" => "193040146.jpg"
    ]);
});



Route::get('/Blog', function () {

    $blog_posts = [
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

    return view('Posts', [
    "title" => "Posts",
    "posts" => $blog_posts
    ]);
});



// halaman singel post

Route::get('posts/{slug}', function ($slug) {

    $blog_posts = [
        [
            "title" => "Judul Post Pertama",
            "slug" => "judul-post-pertama",
            "author" => "Wildan Prasetyo",
            "body" => "Lorem ipsum dolor sit amet, consectetur adipisicing elit. Distinctio ipsum reprehenderit nam porro voluptas non hic aliquam voluptatem? Deserunt dignissimos nihil enim aut soluta at adipisci commodi quae illum inventore repellendus earum modi, minima rem atque laborum quo doloremque consequuntur eius numquam suscipit explicabo natus. Soluta asperiores consectetur tempora, pariatur expedita vitae. Corrupti ducimus illum architecto hic nemo blanditiis odit excepturi est corporis sequi inventore doloremque itaque minima exercitationem porro repellendus explicabo consequuntur quae dolores similique quis, fugiat distinctio aliquid?
            "
        ],
    
        [
            "title" => "Judul Post Kedua",
            "slug" => "judul-post-kedua",
            "author" => "Asep Galon",
            "body" => "Lorem ipsum dolor sit amet, consectetur adipisicing elit. Distinctio ipsum reprehenderit nam porro voluptas non hic aliquam voluptatem? Deserunt dignissimos nihil enim aut soluta at adipisci commodi quae illum inventore repellendus earum modi, minima rem atque laborum quo doloremque consequuntur eius numquam suscipit explicabo natus. Soluta asperiores consectetur tempora, pariatur expedita vitae. Corrupti ducimus illum architecto hic nemo blanditiis odit excepturi est corporis sequi inventore doloremque itaque minima exercitationem porro repellendus explicabo consequuntur quae dolores similique quis, fugiat distinctio aliquid?
            "
        ]
    ];

    $new_post = [];
    foreach($blog_posts as $post) {
        if($post["slug"] == $slug) {
            $new_post = $post;
        }
    }

    return view('post', [
        "title" => "Single post",
        "post" => $new_post
    ]);
});
