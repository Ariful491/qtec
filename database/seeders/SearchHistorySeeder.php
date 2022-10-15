<?php

namespace Database\Seeders;

use App\Models\SearchHistory;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class SearchHistorySeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        SearchHistory::factory()->count(50)->create();
    }
}
