<?php

use Illuminate\Database\Seeder;

class FoodsTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('Foods')->insert([
            'photo' => 'foodservice.jpeg',
            'name' => 'Bobix',
            'price' => '2500-20000',
            'manager' => 'Bobix Jo',
            'location' => 'Kauga',
            'phone' => '+256783013570'            
        ]);
    }
}
