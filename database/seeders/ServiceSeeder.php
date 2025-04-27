<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\Service;

class ServiceSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        Service::truncate();
        Service::create([
            'title'=>'Web Design',
            'image'=>'fa fa-laptop',
            'description'=> "I have hands-on experience in web design using HTML, CSS, jQuery, and Bootstrap. I specialize in creating responsive, user-friendly interfaces with modern design practices."
        ]);

        Service::create([
            'title'=>'Web Development',
            'image'=>'fa fa-laptop',
            'description'=> "I specialize in web development using PHP, Laravel, and React.js, building dynamic and scalable applications. I also have strong experience in RESTful API development and backend integration."
        ]);
    }
}
