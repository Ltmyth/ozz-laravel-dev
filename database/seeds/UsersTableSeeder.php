<?php

use Illuminate\Database\Seeder;

class UsersTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        //
         DB::table('users')->insert([
            'name' => 'QQ',
            'email' => 'nn@gmail.com',
            'password' => bcrypt('12345678'),
        ]);
    }
}
