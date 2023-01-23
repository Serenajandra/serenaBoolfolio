<?php

namespace Database\Seeders;

use App\Models\project;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Faker\Factory as Faker;


class projectsTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $faker = Faker::create(('it_IT'));
        for ($i = 0; $i < 10; $i++) {
            $newProject = new project();
            $newProject->title = $faker->sentence();
            $newProject->presentation = $faker->text();
            $newProject->content = $faker->paragraph();
            $newProject->save();
        }
    }
}
