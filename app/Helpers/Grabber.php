<?php

namespace App\Helpers;

use Illuminate\Support\Str;
use Throwable;

class Grabber
{

    protected string $videoUrl='';
    protected string $videoCode='';
    private mixed $data;


    /**
     * @throws Throwable
     */
    public function __construct(string $video_code)
    {
        if($video_code)
        {
            $url = "https://www.youtube.com/watch?v=" .$video_code;
            $this->videoUrl = "https://www.youtube.com/oembed?url=". $url ."&format=json";
            $this->videoCode = $video_code;
        }
        $this->grab();
    }


    /**
     * @throws Throwable
     */
    protected function grab()
    {
        $curl = curl_init($this->videoUrl);
        curl_setopt($curl, CURLOPT_RETURNTRANSFER, 1);
        $result = curl_exec($curl);
        curl_close($curl);
        $result = json_decode($result, true);
        // Prepare Embed Code
        if (preg_match('`src="?([^"\s]+)"?[^>]*\>`',$result['html'],$matches)){
            $result['html'] = $matches[1];
        }
        throw_if(empty($result) && empty($result['html']),'invalid youtube video code!');
        $this->data = $result;
    }



    public function get()
    {

        return [
            "title" => trim($this->data['title']),
            'slug' => Str::slug(trim($this->data['title'])),
            "uploader" => $this->data['author_url'],
            "channel" => $this->data['author_name'],
            "height" => ($this->data['height']<405)?405:$this->data['height'],
            "width" => ($this->data['width']<720)?720:$this->data['width'],
            "provider" => $this->data['provider_name'],
            "thumb_height" => ($this->data['thumbnail_height']<600)?600:$this->data['thumbnail_height'],
            "thumb_width" => ($this->data['thumbnail_width']<1000)?1000:$this->data['thumbnail_width'],
            "thumbnail" => $this->data['thumbnail_url'],
            "video_code" => $this->videoCode,
            "embed_code" => $this->data['html'].$this->added_config(),
            "link" => $this->videoUrl,
            'created_at'=> now(),
            'updated_at'=> now(),
        ];

    }


    private function added_config()
    {
        return 'controls=0" title="'.config('app.name').'" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture" allowfullscreen';
    }




}
