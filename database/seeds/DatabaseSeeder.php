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
        //Run this comand   "php artisan db:seed" to fill the data
        //If you use migrate:fresh use the --seed after the comand to seed the table automaticaly 
        DB::table('users')->insert([
            'name' => 'jmorales',
            'email' => 'jmorales@gmail.com',
            'password' => bcrypt('password'),
            'idRol'    => '1',
        ]);
    }
}
