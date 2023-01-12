<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class CriteriaSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $criteria = [
            ['code' => 'C1', 'name' => 'Processor', 'bobot' => 0.20, 'slug_criteria' => 'Processor'],
            ['code' => 'C2', 'name' => 'Graphic Unit', 'bobot' => 0.25, 'slug_criteria' => 'GraphicUnit'],
            ['code' => 'C3', 'name' => 'Motherboard', 'bobot' => 0.15, 'slug_criteria' => 'Motherboard'],
            ['code' => 'C4', 'name' => 'RAM', 'bobot' => 0.15, 'slug_criteria' => 'RAM'],
            ['code' => 'C5', 'name' => 'PSU', 'bobot' => 0.15, 'slug_criteria' => 'Processor'],
            ['code' => 'C6', 'name' => 'Penyimpanan', 'bobot' => 0.10, 'slug_criteria' => 'Penyimpanan'],
        ];
        DB::table('criterias')->insert($criteria);
    }
}
