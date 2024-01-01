<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use App\Models\User;
use App\Models\course;
use Illuminate\Database\Seeder;

class AdminUserSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        User::factory()->create([
            'name'=>'admin',
            'email' => 'admin@gmail.com',
            'password' => bcrypt('password'), 
            'user_type' => 'admin',
            'coursename'=>'Science',
            'phoneno'=>'03335173287',
            'address'=>'Ghouri Town',
             
        ]);
        User::factory()->create([
            'name'=>'user',
            'email' => 'user@gmail.com',
            'password' => bcrypt('password'), 
            'user_type' => 'user',
            'coursename'=>'Science',
            'phoneno'=>'03335173287',
            'address'=>'Ghouri Town',
             
        ]);
        
    }
}
