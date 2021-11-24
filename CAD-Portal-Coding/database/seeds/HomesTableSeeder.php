<?php

use Illuminate\Database\Seeder;
use App\Home;
class HomesTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        Home::create([
            'upcoming_programs' => '0',
            'programs_completed' => '0',
            'members' => '500',
            'years' => '1',
            'facebook_link' => 'https://www.facebook.com/cadutmkl186/',	
            'instagram_link' => 'https://www.instagram.com/cad_utmkl/',
            'telegram_link' => 'https://t.me/cadutmkl'
        ]);
    }
}
