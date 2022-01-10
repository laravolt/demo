<?php

namespace Database\Seeders;

use App\Models\Writer;
use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {

        $this->call([
            TopicSeeder::class,
            WriterSeeder::class,
            PostSeeder::class,
        ]);

    }
}
