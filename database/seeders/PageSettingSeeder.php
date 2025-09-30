<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;

class PageSettingSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $pageSettings = [
            // Home page settings
            [
                'page_type' => 'home',
                'setting_key' => 'page_title',
                'setting_value' => 'Professional Developer Creating Digital Solutions',
                'setting_type' => 'text',
                'description' => 'Main title for the home page',
                'is_active' => true
            ],
            [
                'page_type' => 'home',
                'setting_key' => 'page_subtitle',
                'setting_value' => 'Passionate developer with expertise in creating modern, responsive web applications that deliver exceptional user experiences.',
                'setting_type' => 'textarea',
                'description' => 'Subtitle for the home page',
                'is_active' => true
            ],
            [
                'page_type' => 'home',
                'setting_key' => 'hero_image',
                'setting_value' => 'user/img/hero.png',
                'setting_type' => 'image',
                'description' => 'Hero image for the home page',
                'is_active' => true
            ],
            // About page settings
            [
                'page_type' => 'about',
                'setting_key' => 'page_title',
                'setting_value' => 'Some inspiring words to describe yourself',
                'setting_type' => 'text',
                'description' => 'Main title for the about page',
                'is_active' => true
            ],
            [
                'page_type' => 'about',
                'setting_key' => 'page_subtitle',
                'setting_value' => 'I am a passionate developer with expertise in creating modern, responsive web applications that deliver exceptional user experiences.',
                'setting_type' => 'textarea',
                'description' => 'Subtitle for the about page',
                'is_active' => true
            ],
            [
                'page_type' => 'about',
                'setting_key' => 'hero_image',
                'setting_value' => 'user/img/hero.png',
                'setting_type' => 'image',
                'description' => 'Hero image for the about page',
                'is_active' => true
            ],
            // Services page settings
            [
                'page_type' => 'services',
                'setting_key' => 'page_title',
                'setting_value' => 'High-Impact Services',
                'setting_type' => 'text',
                'description' => 'Main title for the services page',
                'is_active' => true
            ],
            [
                'page_type' => 'services',
                'setting_key' => 'page_subtitle',
                'setting_value' => 'I provide comprehensive web development services to help your business grow and succeed in the digital world.',
                'setting_type' => 'textarea',
                'description' => 'Subtitle for the services page',
                'is_active' => true
            ],
            // Contact page settings
            [
                'page_type' => 'contact',
                'setting_key' => 'page_title',
                'setting_value' => 'Get In Touch',
                'setting_type' => 'text',
                'description' => 'Main title for the contact page',
                'is_active' => true
            ],
            [
                'page_type' => 'contact',
                'setting_key' => 'page_subtitle',
                'setting_value' => 'Ready to start your next project? I\'d love to hear about your ideas and help bring them to life.',
                'setting_type' => 'textarea',
                'description' => 'Subtitle for the contact page',
                'is_active' => true
            ]
        ];

        foreach ($pageSettings as $setting) {
            \App\Models\PageSetting::create($setting);
        }
    }
}
