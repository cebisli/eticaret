<?php

namespace Database\Seeders;
use App\Models\Slider;
use Illuminate\Database\Seeder;

class SliderSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        Slider::create([
            "image" => "https://fakeimg.pl/250x100/",
            "name" => "Silder1",
            "content" => "E-Ticaret Sitenize Hoş Geldiniz",
            "link" => "urunler",
            "status" => 1
        ]);
    }
}
