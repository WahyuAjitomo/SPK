<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class AlternativeSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $alternative = [
            ['criteria_id' => '1', 'komponen_id' => '1', 'code_alternative' => 'A1', 'name_alternative' => 'Rizki'],
            ['criteria_id' => '1', 'komponen_id' => '1', 'code_alternative' => 'A2', 'name_alternative' => 'Adli'],
            ['criteria_id' => '1', 'komponen_id' => '1', 'code_alternative' => 'A3', 'name_alternative' => 'Kevin'],
            ['criteria_id' => '1', 'komponen_id' => '1', 'code_alternative' => 'A4', 'name_alternative' => 'Tarisha'],
            ['criteria_id' => '1', 'komponen_id' => '1', 'code_alternative' => 'A5', 'name_alternative' => 'Kiki'],
            ['criteria_id' => '1', 'komponen_id' => '1', 'code_alternative' => 'A6', 'name_alternative' => 'Alfachri'],
        ];
        DB::table('alternatives')->insert($alternative);
    }
}
