<?php

namespace Database\Factories;
use App\Models\Post;
use Illuminate\Database\Eloquent\Factories\Factory;

class PostFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array
     */
    protected $model = Post::class;


    public function definition()
    {
        return [
            'user_id' => 1,
            'title' => $this->faker->unique()->word,
            'body' => $this->faker->sentence,
        ];
    }
}
