<?php

namespace Database\Seeders;
use App\Models\About;
use Illuminate\Database\Seeder;

class AboutSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        About::create([
            "image" => null,
            "name" => "Pratik Shop E-Ticaret",
            "content" => "Hakkımızda Yazısı Burada",
            "text_1_icon" => "icon-truck",
            "text_1" => "Ücretsiz Kargo",
            "text_1_content" => "ücretsiz kargo ile teslim ediyoruz.",
            "text_2_icon" => "icon-refresh2",
            "text_2" => "GERI İADE",
            "text_2_content" => "30 gün içinde geri iade alınır",
            "text_3_icon" => "icon-help",
            "text_3" => "DESTEK",
            "text_3_content" => "7/24 bize ulaşabilirsiniz."
        ]);
    }
}
