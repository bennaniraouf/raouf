<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB  ; 
use Illuminate\Support\Facades\Hash; 
class UserSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        //
        DB::table('users')->insert(
            [
                'name' =>'rahma' , 
                'email'=>'rahma@gmail.com', 
                'password'=>Hash::make('123456'),
                'image'=>'https://images.pexels.com/photos/774909/pexels-photo-774909.jpeg'
            ]
            );
    }
}
