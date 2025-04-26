<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class CarSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        DB::table('cars')->insert([
            'make'=>'volvo',
            'model'=>'big dawg',
            'description'=>'18 wheels and slow moving',
            'price'=>750000,
            'img_url' => 'https://images.unsplash.com/photo-1501700493788-fa1a4fc9fe62?q=80&w=1989&auto=format&fit=crop&ixlib=rb-4.0.3&ixid=M3wxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8fA%3D%3D',
            'year'=> 2014,
            'is_published' => true,
            'created_at'=> now(),
            'updated_at' => now()


        ]);
    }
}
