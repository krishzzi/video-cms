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



    }


    protected function liveSeeding()
    {
        $codeList = $this->getDemoVideoCodes();
        foreach ($codeList as $code)
        {
            $grabber = new Grabber($code);
            $video = Video::create($grabber->get());
//            $video->category()->attach(Category::where('status',true)->get()->random()->pluck('id'));
            $video->save();
//            $video->category
        }

    }



    protected function getDemoVideoCodes()
    {

        return [
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
        ];
    }



}
