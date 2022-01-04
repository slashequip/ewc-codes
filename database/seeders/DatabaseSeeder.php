<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\EwcCode;
use App\Models\Classification;
use App\Models\Enums\ClassificationType;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {
        EwcCode::factory(10)->create();
        $one = Classification::factory()->create();
        $two = Classification::factory()->create();

        Classification::factory()->create([
            'parent_id' => $one->id,
            'type' => ClassificationType::SUB_CHAPTER,
        ]);

        Classification::factory()->create([
            'parent_id' => $two->id,
            'type' => ClassificationType::SUB_CHAPTER,
        ]);
    }
}
