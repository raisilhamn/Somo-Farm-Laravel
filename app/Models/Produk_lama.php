<?php

namespace App\Models;

use PhpParser\Node\Stmt\Static_;

class Produk
{
    private static $list_produk = [
        [
            "title" => 'Sapi',
            "slug" => 'Sapi1',
            "author" => 'Admin',
            "body" => 'Sapi sehat siap qurban',
            "gambar" => 'sapi1.jpg'
        ],
        [
            "title" => 'Domba',
            "author" => 'Admin',
            "slug" => 'Domba1',
            "body" => 'Domba Sehat siap qurban',
            "gambar" => 'domba1.jpg'
        ],

    ];

    public static function all()
    {
        return collect(self::$list_produk);
    }

    public static function find($slug)
    {
        $produks = static::all();

        // $newP = [];
        // foreach($produks as $p){
        //     if($p["slug"]===$slug){
        //         $newP = $p;
        //     }
        // }

        return $produks->firstWhere('slug', $slug);
    }
}
