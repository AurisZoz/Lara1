<?php

namespace Database\Seeders;

use App\Models\Automobiliai;
use App\Models\Savininkai;
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
       
        Automobiliai::factory()->count(20)->hasSavininkai(rand(10,20))->create();

   
    }
}
