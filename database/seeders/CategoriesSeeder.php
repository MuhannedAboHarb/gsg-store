<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class CategoriesSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        //
        DB::table('Categories')->insert([
            'Parent_id'=>null ,
            'name'=>  'Clothes' ,
            'slug'=>'clotes' ,
            'description'=>null ,
            'image'=>null ,
        ]);
    }
}
