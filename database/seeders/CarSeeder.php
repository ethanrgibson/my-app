<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class CarSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        Db::table('cars')->insert([
            'make'=>'toyota',
            'model'=>'tacoma',
            'description'=>'Love my coma, never want another car ever!',
            'price'=>1000,
            'img_url' => 'https://images.unsplash.com/photo-1583031849506-4f35952c3fa0?q=80&w=2071&auto=format&fit=crop&ixlib=rb-4.0.3&ixid=M3wxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8fA%3D%3D',
            'year'=> 2025,
            'is_published' => true,
            'created_at'=> now(),
            'updated_at' => now()


        ]);
    }
}
