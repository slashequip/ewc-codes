<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;
use Ramsey\Uuid\Uuid;
use App\Models\Enums\ClassificationType;

class ClassificationFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array
     */
    public function definition()
    {
        return [
            'uuid' => Uuid::uuid4()->toString(),
            'parent_id' => null,
            'type' => ClassificationType::CHAPTER,
            'identifier' => rand(1, 20),
            'title' => $this->faker->sentence(5),
        ];
    }
}
