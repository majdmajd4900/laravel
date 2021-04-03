<?php

namespace Database\Seeders;

use App\Models\subject;
use App\Models\User;
use App\Models\UsersSubjects;
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
        User::factory(10)->create();
        subject::factory(10)->create();
        
        UsersSubjects::factory(10)->create();
        // \App\Models\User::factory(10)->create();
    }
}
