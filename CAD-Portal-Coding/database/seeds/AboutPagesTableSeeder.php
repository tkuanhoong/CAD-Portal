<?php

use Illuminate\Database\Seeder;
use App\AboutPage;
class AboutPagesTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        AboutPage::create([
            'mission1' => 'Continuously promote Art category in Universiti Teknologi Malaysia Kuala Lumpur',
            'mission2' => 'To exploit potentialities on students\' creativity',
            'mission3' => 'Cultivating the budding talents of UTMKL students',
            'mission4' => 'Creating programs for UTMKL students to take part in and students literally enjoy in our programs',

            'vision1' => 'Making art a routine in UTMKL',
            'vision2' => 'Becoming the most popular Art club in UTMKL',
            'vision3' => 'Exploring talents in UTMKL',
            'vision4' => 'Creating exhilarating programs for students to have different experience'
        ]);
    }
}
