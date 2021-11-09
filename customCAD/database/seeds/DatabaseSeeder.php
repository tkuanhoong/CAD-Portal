<?php

use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {
        //$this->call(RolesTableSeeder::class);
        //$this->call(UsersTableSeeder::class);
        //$this->call(HomesTableSeeder::class);
        //$this->call(AboutPagesTableSeeder::class);
        //$this->call(ContactPagesTableSeeder::class);
        $this->call(OrganizationsTableSeeder::class);
        $this->call(TopsTableSeeder::class);
    }
}
