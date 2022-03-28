<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\delivaryman;

class DelivarymanSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        \App\Models\Delivaryman::factory()->create([
            'name' => 'Ehsan Talukder',
            'dob' => '15.04.1999',
            'address' => 'Khilgaon',
            'phone' => '01923456789',
            'salary' => '2000',
            'password' => 'Ehsan@1504',
        ]);
    }
}
