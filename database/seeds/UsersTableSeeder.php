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
            'phone' => '+256783013570',
            'wallet_balance' => '2.0',
            'wallet_id' => 'rasta1',
            'password' => bcrypt('@1nile5nation'),
        ]);

        DB::table('users')->insert([
            'name' => 'theohz chatbot',
            'email' => 'theohzbot@gmail.com',
            'password' => bcrypt('@1nile5nation'),
        ]);

        // DB::table('messages')->insert([
        //     'message' => 'Hello! Welcome to theohz application platform',
        //     'receiver' => 'everyone',
        //     'author' => 'Latim Mark',
        //     'created_at' => now(),
        // ]);
    }
}
