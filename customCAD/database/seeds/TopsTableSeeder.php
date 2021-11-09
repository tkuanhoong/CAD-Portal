<?php

use Illuminate\Database\Seeder;
use App\Top;
class TopsTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        Top::create([
            'name' => "NUR SYAHIRA AMIRA BINTI MOHD AZHARI",
            'position' => "Founder of Creative Art & Design Club",
            'image' => "NUR SYAHIRA AMIRA BINTI MOHD AZHARI.jpeg",
            'priority' => 1
        ]);

        Top::create([
            'name' => "YASMIEN MAISARAH BINTI DZULKIFLY",
            'position' => "President of Creative Art & Design Club",
            'image' => "YASMIEN MAISARAH BINTI DZULKIFLY.jpeg",
            'priority' => 2
        ]);

        Top::create([
            'name' => "AUNI AFIFAH BINTI KHUZAIRY",
            'position' => "Vice President (Internal)",
            'image' => "AUNI AFIFAH BINTI KHUZAIRY.jpg",
            'priority' => 3
        ]);

        Top::create([
            'name' => "MA ATHIRAH BINTI SAPAWI",
            'position' => "Vice President (External)",
            'image' => "MA ATHIRAH BINTI SAPAWI.JPG",
            'priority' => 4
        ]);
        
        Top::create([
            'name' => "SYAHIRAH AMIRAH BINTI ABU BAKAR",
            'position' => "Secretary",
            'image' => "SYAHIRAH AMIRAH BINTI ABU BAKAR.jpg",
            'priority' => 5
        ]);

        Top::create([
            'name' => "TAN WOON ZHE",
            'position' => "Treasurer",
            'image' => "TAN WOON ZHE.png",
            'priority' => 6
        ]);

        Top::create([
            'name' => "SUFEA NUR BINTI MOHD ASRI",
            'position' => "Exco Multimedia and Publicity 1",
            'image' => "SUFEA NUR BINTI MOHD ASRI.jpg",
            'priority' => 7
        ]);

        Top::create([
            'name' => "FISA AIMANNURAIN BINTI ARIS FADILAH.jpeg",
            'position' => "Exco Multimedia and Publicity 2",
            'image' => "FISA AIMANNURAIN BINTI ARIS FADILAH.jpeg",
            'priority' => 8
        ]);

        Top::create([
            'name' => "MUHAMMAD FARIS BIN SARIZAL",
            'position' => "Exco Activity",
            'image' => "MUHAMMAD FARIS BIN SARIZAL.jpg",
            'priority' => 9
        ]);

        Top::create([
            'name' => "FURQAN QADRI",
            'position' => "Exco Cooperate Relations",
            'image' => "FURQAN QADRI.jpg",
            'priority' => 10
        ]);

        Top::create([
            'name' => "GHAYATHRI UMASANGARAN",
            'position' => "Exco Entrepreneurship",
            'image' => "GHAYATHRI UMASANGARAN.jpeg",
            'priority' => 11
        ]);

        Top::create([
            'name' => "SHUVEINEEA A/P GUNASEKARAN",
            'position' => "Exco Special Task",
            'image' => "SHUVEINEEA.JPG",
            'priority' => 12
        ]);

        Top::create([
            'name' => "TAN KUAN HOONG",
            'position' => "Exco Website Manager 1",
            'image' => "TAN KUAN HOONG.jpeg",
            'priority' => 13
        ]);

        Top::create([
            'name' => "NG QING XIAN",
            'position' => "Exco Website Manager 2",
            'image' => "NG QING XIAN.jpeg",
            'priority' => 14
        ]);
        
    }
}
