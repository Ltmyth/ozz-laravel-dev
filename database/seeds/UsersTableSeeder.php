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
            'name' => 'Latim Mark',
            'email' => 'latimmark@gmail.com',
            'password' => bcrypt('@1nile5nation'),
        ]);

        DB::table('users')->insert([
            'name' => 'theohz chatbot',
            'email' => 'nn@gmail.com',
            'password' => bcrypt('12345678'),
        ]);

        DB::table('messages')->insert([
            'message' => 'Hello! welcome to theohz platform',
            'receiver' => 'everyone',
            'author' => 'theohz chatbot',
            'created_at' => now(),
        ]);
    }
}
