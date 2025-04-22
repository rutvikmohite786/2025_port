<?php

namespace Database\Seeders;
use App\Models\About;

use Illuminate\Database\Seeder;

class AboutMeResumeSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        About::truncate();
        About::create([
            'title'=>'About Me',
            'for_use'=>'resume',
            'description'=> "Hi, I'm Rutvik, a passionate and detail-oriented PHP developer with 2 years of hands-on experience in building dynamic and scalable web applications using Laravel framework. I've worked on 10+ live projects, ranging from simple websites to complex systems, gaining practical expertise in full-cycle development.
             I also have working knowledge of React.js, along with basic front-end technologies like HTML, CSS, and JavaScript to effectively collaborate in full-stack environments. Additionally, I have a foundational understanding of server management, which helps me handle deployments and troubleshoot hosting-level issues confidently."
        ]);
    }
}
