<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Hash;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Ramsey\Uuid\Type\Integer;

class TableTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {

        for($i=1 ; $i<6 ; $i++){

            DB::table('tables')->insert([
                'number' => $i,

            ]);
        };


    }
}
