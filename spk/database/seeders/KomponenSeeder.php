<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class KomponenSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $alternative = [
            ['criteria_id' => '1', 'nama_komponen' => 'Intel', 'nilai' => 0.8],
            ['criteria_id' => '2', 'nama_komponen' => 'Nvidia RTX 4090 Ti', 'Intel', 'nilai' => 0.8],
            ['criteria_id' => '3', 'nama_komponen' => 'Asus B570M', 'Intel', 'nilai' => 0.8],
        ];
        DB::table('alternatives')->insert($alternative);
    }
}
