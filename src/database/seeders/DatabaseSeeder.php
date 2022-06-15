<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    \App\Models\User::factory(10)->create();
    $this->call(TasksTableSeeder::class);


}
