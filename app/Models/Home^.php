<?php

namespace App\Models;

class Home 
{
    private static $kue = [
        [
            "no" => "1",
            "name" => "Waffle",
            "harga" => "Rp.50.000",
            "image" => "waffles.jpg"
        ],
        [
            "no" => "2",
            "name" => "Bolu",
            "harga" => "Rp.100.000",
            "image" => "bake.jpg"
        ],
        [
            "no" => "3",
            "name" => "Muffin",
            "harga" => "Rp.100.000",
            "image" => "cupcake.jpg"
        ],
        [
            "no" => "4",
            "name" => "Kue Coklat",
            "harga" => "Rp.50.000",
            "image" => "brownies.jpg"
        ],
        [
            "no" => "5",
            "name" => "Black Forest",
            "harga" => "Rp.100.000",
            "image" => "cake.jpg"
        ],
        [
            "no" => "6",
            "name" => "Cup Cake",
            "harga" => "Rp.100.000",
            "image" => "picnic.jpg"
        ],
        [
            "no" => "7",
            "name" => "Kue Pesta Coklat",
            "harga" => "Rp.50.000",
            "image" => "choco.jpg"
        ],
        [
            "no" => "8",
            "name" => "Kue Strawberry",
            "harga" => "Rp.100.000",
            "image" => "strawberry.jpg"
        ],
        [
            "no" => "9",
            "name" => "Kue Pesta Vanilla",
            "harga" => "Rp.100.000",
            "image" => "vanilla.jpg"
        ],
    ];

    public static function all()
    {
        return collect(self::$kue);
    }

    public static function find($slug)
    {
        $posts = self::$kue;
        $post = [];
        foreach($posts as $p) {
            if($p["slug"] === $slug) {
                $post = $p;
            }
        }

        return $post;
    }
}
