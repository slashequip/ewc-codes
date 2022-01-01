<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\EwcCode;

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
    }
}
