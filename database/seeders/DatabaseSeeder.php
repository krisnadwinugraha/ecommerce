<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\Home;
use App\Models\User;
use App\Models\Dashboard;


class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {
        // \App\Models\User::factory(10)->create();

        // \App\Models\User::factory()->create([
        //     'name' => 'Test User',
        //     'email' => 'test@example.com',
        // ]);

        
        Home::create([
            "name" => "Waffle",
            "harga" => "50000",
            "image" => "waffles.jpg"
        ]);

        Home::create([
            "name" => "Bolu",
            "harga" => "100000",
            "image" => "bake.jpg"
        ]);

        Home::create([
            "name" => "Muffin",
            "harga" => "100000",
            "image" => "cupcake.jpg"
        ]);

        Home::create([
            "name" => "Kue Coklat",
            "harga" => "50000",
            "image" => "brownies.jpg"
        ]);

        Home::create([
            "name" => "Black Forest",
            "harga" => "100000",
            "image" => "cake.jpg"
        ]);

        Home::create([
            "name" => "Cup Cake",
            "harga" => "100000",
            "image" => "picnic.jpg"
        ]);
        
        Home::create([
            "name" => "Kue Pesta Coklat",
            "harga" => "50000",
            "image" => "choco.jpg"
        ]);

        Home::create([
            "name" => "Kue Strawberry",
            "harga" => "100000",
            "image" => "strawberry.jpg"
        ]);

        Home::create([
            "name" => "Kue Pesta Vanilla",
            "harga" => "100000",
            "image" => "vanilla.jpg"
        ]);

        User::create([
            "name" => "abe",
            "email" => "krisnadwinugrahaabe@gmail.com",
            "password" => bcrypt("123qq123"),
            "level" => "1"
        ]);

        User::create([
            "name" => "user",
            "email" => "user@gmail.com",
            "password" => bcrypt("123qq123")
        ]);

        Dashboard::create([
            "name" => "User",
            "link" => "user",           
        ]);

        Dashboard::create([
            "name" => "Product",
            "link" => "product", 
        ]);
        
    }
}
