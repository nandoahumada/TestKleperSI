<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use MattDaneshvar\Survey\Models\Survey;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {
        $this->call(EncuestaSeeder::class);
    }
}
