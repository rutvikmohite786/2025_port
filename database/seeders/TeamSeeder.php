<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\Team;

class TeamSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        Team::truncate();
        // Team::create([
        //     'name' => 'Rutvik',
        //     'image'=>'NA',
        //     'designation' => 'Description for Team A',
        //     'description' => 'Web developer with 4 years of experience in PHP, Laravel, and React.js, specializing in building modern and scalable web applications',
        // ]);

        Team::create([
            'name' => 'Ronald',
            'image'=>'NA',
            'designation' => 'Description for Team A',
            'description' => 'Web developer with 4 years of experience in Node.js, Next.js, and Nuxt.js, specializing in building fast, scalable, and SEO-friendly web applications.',
        ]);

        Team::create([
            'name' => 'Nisarg',
            'image'=>'NA',
            'designation' => 'Description for Team A',
            'description' => 'Mobile app developer with 4 years of experience in Flutter and React Native, specializing in building high-performance cross-platform applications.',
        ]);
    }
}
