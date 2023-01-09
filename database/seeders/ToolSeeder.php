<?php

namespace Database\Seeders;

use App\Models\System\Tool;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class ToolSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {

        $tool = Tool::create([
           'name' => 'Lab Reset',
           'command' => 'mintreu-app:reset',
            'status' => true,
        ]);


    }
}
