<?php

namespace Database\Seeders;

use App\Helpers\Grabber;
use App\Models\Category;
use App\Models\Video;
use Illuminate\Database\Seeder;

class VideoSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {

      //  Video::factory(5)->create();

        $this->liveSeeding();

        $tenRandomVideos = Video::where('status',true)->get()->random(10);




        foreach ($tenRandomVideos as $video)
        {
            $video->is_upcoming = true;
            $video->is_slider = true;
            $video->is_suggestion = true;
            $video->save();
        }




    }


    protected function liveSeeding()
    {
        $codeList = $this->getDemoVideoCodes();
        $categories = Category::where('status',true)->get();
        foreach ($codeList as $code)
        {
            $grabber = new Grabber($code);
            $video = Video::create($grabber->get());
            $video->category()->attach($categories->random()->first());
            $video->save();
//            $video->category
        }

    }



    protected function getDemoVideoCodes()
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
