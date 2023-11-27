<?php

namespace Database\Seeders;
use App\Models\Category;
use Illuminate\Database\Seeder;

class CategorySeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $erkek = Category::create([
            "image" => null,
            "thumbnail" => null,
            "name" => "Erkek",
            "cat_ust" => null,
            "content" => "Erkek Giyim",
            "status" => 1
        ]);

        Category::create([
            "image" => null,
            "thumbnail" => null,
            "name" => "Erkek Kazak",
            "cat_ust" =>  $erkek->Id,
            "content" => "Erkek Kazaklari",
            "status" => 1
        ]);

        $kadin = Category::create([
            "image" => null,
            "thumbnail" => null,
            "name" => "Kadın",
            "cat_ust" => null,
            "content" => "Kadın Giyim",
            "status" => 1
        ]);

        Category::create([
            "image" => null,
            "thumbnail" => null,
            "name" => "Erkek Çanta",
            "cat_ust" =>  $kadin->Id,
            "content" => "Kadın çantaları",
            "status" => 1
        ]);

        $cocuk = Category::create([
            "image" => null,
            "thumbnail" => null,
            "name" => "Çocuk",
            "cat_ust" => null,
            "content" => "Çocuk Giyim",
            "status" => 1
        ]);

        Category::create([
            "image" => null,
            "thumbnail" => null,
            "name" => "Çocuk Ayakkabı",
            "cat_ust" =>  $cocuk->Id,
            "content" => "Çocuk Ayakkabı",
            "status" => 1
        ]);
    }
}
