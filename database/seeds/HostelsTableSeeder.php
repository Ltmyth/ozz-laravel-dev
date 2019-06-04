<?php

use Illuminate\Database\Seeder;

class HostelsTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        //
        DB::table('Hostels')->insert([
            'photo' => 'accommodation.jpeg',
            'name' => 'Carleton Executive Students Hostel',
            'price' => '700000-120000',
            'custodian' => 'Resty Nabakoza',
            'location' => 'Bugujju',
            'category' => 'Mixed Sex',
            'phone' => '+256783013570'            
        ]);
    }
}
