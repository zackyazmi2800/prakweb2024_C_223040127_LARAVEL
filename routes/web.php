<?php

use Illuminate\Support\Arr;
use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('home', ['title' => 'Home Page']);
});

Route::get('/about', function () {
    return view('about', ['title' => 'About', 
                            'nama' => 'Zacky Azmi']);
});

Route::get('/posts', function () {
    return view('posts', ['title' => 'Blog', 
                        'posts' => [
                            [
                                'id' => 1,
                                'slug' => 'judul-1',
                                'title' => 'judul1',
                                'author' => 'Zack',
                                'body' => 'Lorem ipsum dolor sit amet consectetur adipisicing elit. Necessitatibus sequi
                                 inventore aut tempora ratione et molestiae maiores laudantium saepe sit. A alias, 
                                 perferendis quod eum maiores deleniti numquam saepe at.'
                            ],
                            [
                                'id' => 2,
                                'slug' => 'judul-2',
                                'title' => 'judul2',
                                'author' => 'Zack',
                                'body' => 'Lorem ipsum dolor sit amet consectetur adipisicing elit. Saepe placeat, recusandae itaque quas,
                                 similique beatae quasi iure nemo ducimus eius fugit ullam molestiae veritatis debitis ratione! Praesentium iste omnis neque!'
                            ]

                                    ]
    ]);
});

Route::get('/posts/{slug}', function($slug){
    $posts = [
    [
        'id' => 1,
        'slug' => 'judul-1',
        'title' => 'Judul1',
        'author' => 'Zack',
        'body' => 'Lorem ipsum dolor sit amet consectetur adipisicing elit. Necessitatibus sequi
         inventore aut tempora ratione et molestiae maiores laudantium saepe sit. A alias, 
         perferendis quod eum maiores deleniti numquam saepe at.'
    ],
    [
        'id' => 2,
        'slug' => 'judul-2',
        'title' => 'Judul2',
        'author' => 'Zack',
        'body' => 'Lorem ipsum dolor sit amet consectetur adipisicing elit. Saepe placeat, recusandae itaque quas,
         similique beatae quasi iure nemo ducimus eius fugit ullam molestiae veritatis debitis ratione! Praesentium iste omnis neque!'
    ]
        ];

    $post = Arr::first($posts, function($post) use($slug) {
        return $post['slug'] == $slug;
    });

    return view('post', ['title' => 'Single Post', 'post' => $post]);
});


Route::get('/contact', function () {
    return view('contact', ['title' => 'Contact']);
});