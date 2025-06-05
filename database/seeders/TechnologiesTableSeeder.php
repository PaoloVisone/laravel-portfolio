<?php

namespace Database\Seeders;

use App\Models\Technology;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

use Faker\Generator as Faker;

class TechnologiesTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(Faker $faker): void
    {
        $technologies = [
            'Backend',
            'Frontend',
            'Web Development',
            'Mobile Development',
            'Database',
            'Cloud Computing',
            'DevOps',
            'Data Science',
            'Artificial Intelligence',
            'Machine Learning',
            'Cybersecurity',
            'Game Development',
            'UI/UX Design'
        ];

        foreach ($technologies as $technology) {
            $newTechnoloy = new Technology();
            $newTechnoloy->name = $technology;
            $newTechnoloy->color = $faker->hexColor();

            $newTechnoloy->save();
        }
    }
}
