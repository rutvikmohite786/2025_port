<?php

namespace Database\Seeders;

use App\Models\PortTech;
use App\Models\Portfolio;
use App\Models\PortfolioDetail;
use App\Models\PortfolioImage;
use Illuminate\Database\Seeder;
use DB;

class PortfolioTechSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::statement('SET FOREIGN_KEY_CHECKS=0;');
        DB::table('port_teches')->truncate();
        DB::table('portfolios')->truncate();
        DB::table('portfolio_details')->truncate();
        DB::table('portfolio_images')->truncate();
        DB::statement('SET FOREIGN_KEY_CHECKS=1;');

        $port1 = PortTech::create([
            'name' => 'PHP',
        ]);

        $port2 =  PortTech::create([
            'name' => 'Laravel',
        ]);

        $port3 =    PortTech::create([
            'name' => 'ReactJs',
        ]);

        $port4 =  PortTech::create([
            'name' => 'Blockchain',
        ]);

        $port5 =   PortTech::create([
            'name' => 'Html-Css',
        ]);
        
        $Porfolio1 = Portfolio::create([
           'title'=> 'School management',
           'port_tech_id'=>$port1->id,
           'image'=>'NA'
        ]);

        $Porfolio2 = Portfolio::create([
            'title'=> 'Portfolio',
            'port_tech_id'=>$port2->id,
            'image'=>'NA'
         ]);


         $Porfolio3 = Portfolio::create([
            'title'=> 'Datting Site',
            'port_tech_id'=>$port3->id,
            'image'=>'NA'
         ]);

         $Porfolio4 = Portfolio::create([
            'title'=> 'NFT',
            'port_tech_id'=>$port4->id,
            'image'=>'NA'
         ]);

         $Porfolio5 = Portfolio::create([
            'title'=> 'HTML and Css templates',
            'port_tech_id'=>$port5->id,
            'image'=>'NA'
         ]);

         $portfolioDetail1 = PortfolioDetail::create([
            'portfolio_id'=>$Porfolio1->id,
            'link_1'=>'School management',
            'details'=>'School management',
            'link_2'=>'NA',
            'duration'=>'NA'
         ]);    


         $portfolioDetail2 = PortfolioDetail::create([
            'portfolio_id'=>$Porfolio2->id,
            'link_1'=>'Portfolio',
            'details'=>'Portfolio',
            'link_2'=>'NA',
            'duration'=>'NA'
         ]);    

         $portfolioDetail3 = PortfolioDetail::create([
            'portfolio_id'=>$Porfolio3->id,
            'link_1'=>'Datting Site',
            'details'=>'Datting Site',
            'link_2'=>'NA',
            'duration'=>'NA'
         ]);    

         $portfolioDetail4 = PortfolioDetail::create([
            'portfolio_id'=>$Porfolio4->id,
            'link_1'=>'NFT',
            'details'=>'NFT',
            'link_2'=>'NA',
            'duration'=>'NA'
         ]);    

         $portfolioDetail5 = PortfolioDetail::create([
            'portfolio_id'=>$Porfolio5->id,
            'link_1'=>'HTML and Css templates',
            'details'=>'HTML and Css templates',
            'link_2'=>'NA',
            'duration'=>'NA'
         ]);        

         $portfolioImage1 = PortfolioImage::create([
            'portfolio_id'=>$Porfolio1->id,
            'image'=>'NA'
         ]);  

         $portfolioImage2 = PortfolioImage::create([
            'portfolio_id'=>$Porfolio2->id,
            'image'=>'NA'
         ]);  

         $portfolioImage3 = PortfolioImage::create([
            'portfolio_id'=>$Porfolio3->id,
            'image'=>'NA'
         ]);  

         $portfolioImage4 = PortfolioImage::create([
            'portfolio_id'=>$Porfolio4->id,
            'image'=>'NA'
         ]);  

         $portfolioImage5 = PortfolioImage::create([
            'portfolio_id'=>$Porfolio5->id,
            'image'=>'NA'
         ]);  

         
    }
}
