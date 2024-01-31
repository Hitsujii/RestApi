<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Carbon\Carbon;

class PeopleSeeder extends Seeder
{
    public function run()
    {
        $now = Carbon::now();
        
        DB::table('people')->insert([
            'name' => 'Jan',
            'surname' => 'Kowalski',
            'phone_number' => '123456789',
            'street' => 'Uliczna',
            'city' => 'Miastowo',
            'created_at' => $now,
            'updated_at' => $now,
        ]);
    }
}
