<?php

namespace Database\Seeders;

use App\Models\Setting;
use App\Models\Video;
use Illuminate\Database\Seeder;
use Illuminate\Support\Str;

class SettingSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {



        $setting = Setting::create([
            'theme' => 'stream',
            'default' => true,
//            'social' => json_encode([
//                ['name' => 'facebook', 'link' => ''],
//                ['name' => 'youtube', 'link' => ''],
//                ['name' => 'skype', 'link' => ''],
//                ['name' => 'whatsapp', 'link' => '']
//            ]),
        ]);



    }




}
