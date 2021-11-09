<?php

use Illuminate\Database\Seeder;
use App\ContactPage;
class ContactPagesTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        ContactPage::create([
            'address' => 'Jalan Sultan Yahya Petra, Kampung Datuk Keramat, 54100 Kuala Lumpur, Wilayah Persekutuan Kuala Lumpur',
            'phone' => '+6018-2038004',
            'email' => 'cadutmkl@gmail.com',
            'website' => 'http://cadutmkl.com'
        ]);
    }
}
