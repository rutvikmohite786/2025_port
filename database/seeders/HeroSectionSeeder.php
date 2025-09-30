<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;

class HeroSectionSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $heroSections = [
            [
                'title' => 'Hello, I\'m Rutvik',
                'subtitle' => 'I create digital solutions for your business that get results.',
                'hero_image' => 'user/img/hero.png',
                'button_text' => 'Let\'s Work Together',
                'button_link' => '/contact',
                'for_use' => 'resume',
                'is_active' => true,
                'sort_order' => 1
            ],
            [
                'title' => 'Hello, I\'m Rutvik',
                'subtitle' => 'Professional web developer creating modern, responsive applications that drive business growth.',
                'hero_image' => 'user/img/hero.png',
                'button_text' => 'View My Work',
                'button_link' => '/#clients',
                'for_use' => 'freelancing',
                'is_active' => true,
                'sort_order' => 1
            ]
        ];

        foreach ($heroSections as $hero) {
            \App\Models\HeroSection::create($hero);
        }
    }
}
