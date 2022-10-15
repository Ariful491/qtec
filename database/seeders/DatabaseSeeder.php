<?php

namespace Database\Seeders;

// use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use App\Models\Keyword;
use App\Models\SearchHistory;
use App\Models\User;
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
          //\App\Models\User::factory(3)->create();

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
        User::insert([
            array('id' => '1','name' => ' RObert','email' => 'ratke.cruz@example.org','email_verified_at' => '2022-10-15 20:35:49','password' => '$2y$10$92IXUNpkjO0rOQ5byMi.Ye4oKoEa3Ro9llC/.og/at2.uheWG/igi','remember_token' => 'EKMoPc7gqn','created_at' => '2022-10-15 20:35:49','updated_at' => '2022-10-15 20:35:49'),
            array('id' => '2','name' => 'Evert Larkin','email' => 'dubuque.milo@example.org','email_verified_at' => '2022-10-15 20:35:49','password' => '$2y$10$92IXUNpkjO0rOQ5byMi.Ye4oKoEa3Ro9llC/.og/at2.uheWG/igi','remember_token' => 'F03D8GvY2K','created_at' => '2022-10-15 20:35:49','updated_at' => '2022-10-15 20:35:49'),
            array('id' => '3','name' => 'Alexandro Pfeffer','email' => 'vcormier@example.com','email_verified_at' => '2022-10-15 20:35:49','password' => '$2y$10$92IXUNpkjO0rOQ5byMi.Ye4oKoEa3Ro9llC/.og/at2.uheWG/igi','remember_token' => 'E5fcjwAL7Y','created_at' => '2022-10-15 20:35:50','updated_at' => '2022-10-15 20:35:50')
        ]);

    }
}
