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
       App\User::create([
       'name' => 'Leandro Tamola',
       'email' => 'leatamola@live.com',
       'password' => Hash::make('Leaaguitar27'),
       'admin' => '1',
     ]);
     }
}
