<?php

namespace Database\Factories;

use App\Models\posttags;
use Illuminate\Database\Eloquent\Factories\Factory;

class PosttagsFactory extends Factory
{
    /**
     * The name of the factory's corresponding model.
     *
     * @var string
     */
    protected $model = posttags::class;

    /**
     * Define the model's default state.
     *
     * @return array
     */
    public function definition()
    {
        return [
            //
            'tag_id' => rand(1,10),
            'post_id' => rand(1,10),
        ];
    }
}
