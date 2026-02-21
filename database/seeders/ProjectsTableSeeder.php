<?php

namespace Database\Seeders;

use App\Models\Project;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Faker\Generator as Faker;

class ProjectsTableSeeder extends Seeder
{
    public function run(Faker $faker): void
    {
        for ($i=0; $i < 10; $i++) { 
            $newProject = new Project();

            $newProject->title = $faker->sentence();
            $newProject->description = $faker->paragraph();
            $newProject->cover_image = 'https://picsum.photos/640/480?random=' . $faker->unique()->numberBetween(1, 1000);
            $newProject->category_id = rand(1,6);
            $newProject->type_id = rand(1,5);
            $newProject->is_completed = $faker->boolean(80);

            $newProject->save();
        }
    }
}
