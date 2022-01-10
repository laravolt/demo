<?php

namespace Database\Seeders;

use Carbon\Carbon;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class TopicSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $now = Carbon::now();
        DB::table('topic')->insertOrIgnore(
            [
                [
                    'name' => 'Kesehatan',
                    'created_at' => $now,
                    'updated_at' => $now,
                ],
                [
                    'name' => 'Olahraga',
                    'created_at' => $now,
                    'updated_at' => $now,
                ],
                [
                    'name' => 'Otomotif',
                    'created_at' => $now,
                    'updated_at' => $now,
                ],
                [
                    'name' => 'Bencana Alam',
                    'created_at' => $now,
                    'updated_at' => $now,
                ],
                [
                    'name' => 'Teknologi',
                    'created_at' => $now,
                    'updated_at' => $now,
                ],
                [
                    'name' => 'Makanan',
                    'created_at' => $now,
                    'updated_at' => $now,
                ],
                [
                    'name' => 'Travel',
                    'created_at' => $now,
                    'updated_at' => $now,
                ],
                [
                    'name' => 'Entertaiment',
                    'created_at' => $now,
                    'updated_at' => $now,
                ],
                [
                    'name' => 'Bisnis',
                    'created_at' => $now,
                    'updated_at' => $now,
                ],
                [
                    'name' => 'Media Sosial',
                    'created_at' => $now,
                    'updated_at' => $now,
                ],
            ]
        );
    }
}
