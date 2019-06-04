<?php

use Illuminate\Database\Seeder;

class AppartmentsTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('Appartments')->insert([
            'photo' => 'accommodation.jpeg',
            'name' => 'Green Acres',
            'price' => '700000-120000',
            'custodian' => 'Resty Nabakoza',
            'location' => 'Kauga',
            'category' => 'One Bed',
            'phone' => '+256783013570'            
        ]);
    }
}
