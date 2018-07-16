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
        DB::table('users')->insert([
            [
                "name"=>"nicolas",
                "email"=>"nikho_1@hotmail.com",
                "password"=>bcrypt('123456'),
                "tipo"=>"user",
            ]
        ]);
    }
}
