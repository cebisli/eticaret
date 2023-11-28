<?php

namespace Database\Seeders;

use App\Models\SiteSetting;
use Illuminate\Database\Seeder;

class SiteSettingSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        SiteSetting::create([
            "name" => "adres",
            "data" => "Adres Bilgilerim Burada"
        ]);

        SiteSetting::create([
            "name" => "phone",
            "data" => "0545 564 54 54"
        ]);

        SiteSetting::create([
            "name" => "email",
            "data" => "abc@example.com"
        ]);

        SiteSetting::create([
            "name" => "harita",
            "data" => null
        ]);
    }
}
