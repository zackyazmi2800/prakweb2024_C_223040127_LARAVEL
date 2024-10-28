<?php 
namespace App\Models;

use Illuminate\Support\Arr;


class Post 
{
    public static function all()
    {
        return [
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

                ];
    }


    public static function find($slug): array
    {
        // return Arr::first(static::all(), function($post) use($slug) {
        //     return $post['slug'] == $slug;
        // });

        $post = Arr::first(static::all(), fn($post) => $post['slug'] == $slug);
        if(! $post){
            abort(404);
        }

        return $post;
    }
}