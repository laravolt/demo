<?php

namespace Database\Factories;

use App\Models\Topic;
use App\Models\Writer;
use Illuminate\Database\Eloquent\Factories\Factory;

class PostFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array
     */
    public function definition()
    {

        $writers = Writer::all();
        $topics = Topic::all();

        return [
            'title' => $this->faker->jobTitle,
            'content' => $this->faker->text,
            'thumbnail' => $this->faker->image,
            'topic_id' => $topics->random()->id,
            'writer_id' => $writers->random()->id,
        ];
    }
}
