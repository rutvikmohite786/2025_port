<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\Experience;

class CompanyExpResumeSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        Experience::truncate();
        Experience::create([
            'year'=>'2021-2023',
            'location'=>'Ahmedabad(onsite)',
            'title' => "Web Developer",
            'company_name' => 'It Path Solutions',
            'for_use' => 'resume',
            'description' => "I began my career at IT Path Solutions in January 2021 as an Intern, where I received hands-on training and exposure to real-world development practices. During my tenure, I worked extensively with PHP and the Laravel framework, contributing to various projects and gaining solid experience in backend development.
Over the course of two years (till February 2023), I was involved in building and maintaining web applications, optimizing existing codebases, and collaborating with cross-functional teams to deliver high-quality software solutions.
This experience laid a strong foundation for my technical skills and professional growth in web development"
        ]);


        Experience::create([
            'year'=>'2023-2024',
           'location'=>'Ahmedabad(onsite)',
            'title' => "Web Developer",
            'company_name' => 'Openxcell',
            'for_use' => 'resume',
            'description' => "I joined OpenXcell in May 2023 and worked there until June 2024, contributing to multiple web development projects. My role involved working primarily with PHP for backend development, along with API development and integration tasks.
During my time at OpenXcell, I also gained hands-on experience with Stripe payment gateway integration, ensuring secure and seamless transaction workflows. Additionally, I worked with React.js on the frontend side for minor tasks, which helped me broaden my understanding of modern frontend technologies.

This experience enhanced my ability to work on full-stack applications and strengthened my skills in developing scalable and secure web solutions."
        ]);


        Experience::create([
            'year'=>'2024-working',
           'location'=>'Ahmedabad(onsite)',
            'title' => "Web Developer",
            'company_name' => 'Bytes technolab',
            'for_use' => 'resume',
            'description' => "I am currently working at Bytes Technolab, having joined in May 2024. In my role, I specialize in Laravel and Core PHP development, actively contributing to the design and implementation of robust backend systems.

Alongside my technical responsibilities, I also lead a team of 4–5 members, overseeing project execution, code quality, and task management. This leadership experience has strengthened my communication, coordination, and problem-solving skills, enabling the team to deliver high-quality solutions efficiently.

My experience at Bytes Technolab has further solidified my expertise in PHP-based development while providing valuable team management exposure"
        ]);
    }
}
