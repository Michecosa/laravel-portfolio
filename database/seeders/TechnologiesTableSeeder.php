<?php

namespace Database\Seeders;

use App\Models\Technology;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class TechnologiesTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $technologies = [
            ['name' => 'HTML5', 'color' => '#E34F26'],
            ['name' => 'CSS3', 'color' => '#1572B6'],
            ['name' => 'JavaScript', 'color' => '#F7DF1E'],
            ['name' => 'Vue.js', 'color' => '#4FC08D'],
            ['name' => 'React', 'color' => '#61DAFB'],
            ['name' => 'PHP', 'color' => '#777BB4'],
            ['name' => 'Laravel', 'color' => '#FF2D20'],
            ['name' => 'MySQL', 'color' => '#4479A1'],
            ['name' => 'Tailwind CSS', 'color' => '#06B6D4'],
            ['name' => 'Git', 'color' => '#F05032'],
        ];

        foreach ($technologies as $tech) {
            $newTech = new Technology();
            
            $newTech->name = $tech['name'];
            $newTech->color = $tech['color'];

            $newTech->save();
        }
    }
}
