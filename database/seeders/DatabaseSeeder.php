<?php

namespace Database\Seeders;

// use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use App\Models\Keyword;
use App\Models\SearchHistory;
use Database\Factories\SearchHistoryFactory;
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
          \App\Models\User::factory(3)->create();

        // \App\Models\User::factory()->create([
        //     'name' => 'Test User',
        //     'email' => 'test@example.com',
        // ]);

//      SearchHistory::factory(10)->create();

        SearchHistory::insert( [
                array('id' => '1','search_text' => 'Alexandro Pfeffer','created_at' => '2021-10-14 14:00:12','updated_at' => '2021-10-14 14:00:12'),
                array('id' => '2','search_text' => ' RObert','created_at' => '2022-09-14 14:00:12','updated_at' => '2022-09-14 14:00:12'),
                array('id' => '3','search_text' => 'RObert','created_at' => '2022-10-08 14:00:12','updated_at' => '2022-10-08 14:00:12'),
                array('id' => '4','search_text' => 'Obie','created_at' => '2022-10-14 14:00:12','updated_at' => '2022-10-14 14:00:12'),
                array('id' => '5','search_text' => 'Evert Larkin','created_at' => '2022-10-14 14:00:12','updated_at' => '2022-10-14 14:00:12'),
                array('id' => '6','search_text' => 'Alexandro Pfeffer','created_at' => '2022-10-14 14:00:12','updated_at' => '2022-10-14 14:00:12'),
                array('id' => '7','search_text' => 'Alexandro','created_at' => '2022-10-14 14:00:12','updated_at' => '2022-10-14 14:00:12'),
                array('id' => '8','search_text' => 'Pfeffer','created_at' => '2022-10-14 14:00:12','updated_at' => '2022-10-14 14:00:12'),
                array('id' => '9','search_text' => 'Evert Larkin','created_at' => '2022-10-14 14:00:12','updated_at' => '2022-10-14 14:00:12'),
                array('id' => '10','search_text' => 'Evert Larkin','created_at' => '2022-10-14 14:00:12','updated_at' => '2022-10-14 14:00:12')
            ]
        );
        Keyword::insert([
            array('id' => '1','name' => 'Evert','found_times' => '3','created_at' => NULL,'updated_at' => NULL),
            array('id' => '2','name' => 'Alexandro','found_times' => '3','created_at' => NULL,'updated_at' => NULL),
            array('id' => '3','name' => ' RObert','found_times' => '2','created_at' => NULL,'updated_at' => NULL)
        ]);

    }
}
