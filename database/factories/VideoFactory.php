<?php

namespace Database\Factories;

use App\Models\Video;
use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends Factory
 */
class VideoFactory extends Factory
{
    protected $model = Video::class;
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition()
    {
        return [
            'title'=> $this->faker->word,
            'uploader' => $this->faker->name,
            'channel' => $this->faker->word,
            'height' => 950,
            'width' => 550,
            'thumb' => $this->faker->image,
            'thumb_height' => 350,
            'thumb_width' => 250,
            'video_code'   => $this->faker->word,
            'embed_code' => $this->faker->paragraph,
            'link'  => $this->faker->url,
            'provider' => 'Youtube',
            'desc' => $this->faker->paragraph


        ];
    }
}
