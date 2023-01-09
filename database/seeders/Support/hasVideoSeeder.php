<?php

namespace Database\Seeders\Support;

use App\Helpers\Grabber;
use App\Models\Category;
use App\Models\Video;

trait hasVideoSeeder
{

    public function seedDummyVideos()
    {
        $this->liveSeeding();
    }


    public function liveSeeding()
    {
        $codeList = $this->getCodes();
        $categories = Category::where('status',true)->get();
        foreach ($codeList as $code)
        {

            $grabber = new Grabber($code);
            $video = Video::create($grabber->get());
            $video->category()->attach($categories->random()->first());
            $video->save();
        }
    }


    protected function getCodes()
    {
        return [
            'UTAvGzCK6ok',
            '1P3ZgLOy-w8',
            'JhIw8ch4A9M',
            'RFA3ruwfLYI',
            'vdY5SFZBgnk',
            'vkuiI430d_0',
            'zR52MgYhm_Q',
            'jRZIqXk6pIs',
            'sAzlWScHTc4',
            'HvddDvCHLEI',
            'VICFSC7_kvw',
            'xfMN4SpIxIA',
            '0cbXeXP2Wgg',
            'ICc0gPAhjlI',
            'RgzLnmTaCAU',
            'j5-kkSh3hhc',
            '6ezuj3sbHwQ',
            'H0Nv-duHzO0',
            'vqdzwlnqWUI',
            'G-XMiVMlLRI',
            'm1dmohRuDmo',
            'GkpJaj2J_Mc',
            '2fm8NdyLqeY',
            '6rcFDWh1wZo',
        ];
    }



}
