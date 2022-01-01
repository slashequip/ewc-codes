<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;
use Ramsey\Uuid\Uuid;

class EwcCodeFactory extends Factory
{
    public function definition(): array
    {
        return [
            'uuid' => Uuid::uuid4()->toString(),
            'chapter' => sprintf("%02d", rand(1, 20)),
            'chapter_title' => $this->faker->sentence(5),
            'sub_chapter' => sprintf("%02d", rand(1, 20)),
            'sub_chapter_title' => $this->faker->sentence(5),
            'code' => sprintf("%02d", rand(1, 20)),
            'code_description' => $this->faker->sentence(5),
            'hazardous' => $this->faker->boolean(),
            'density' => $this->faker->randomFloat(4, 0, 1)
        ];
    }
}
