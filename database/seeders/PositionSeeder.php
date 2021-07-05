<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class PositionSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('positions')->insert([
            ['name' => 'Founder & Executive Director'],
            ['name' => 'Founder & Operation Director'],
            ['name' => 'Marketing Director'],
            ['name' => 'Secretary & Program Development Lead'],
            ['name' => 'Program Development Lead'],
            ['name' => 'Program Development Team']
        ]);
    }
}
