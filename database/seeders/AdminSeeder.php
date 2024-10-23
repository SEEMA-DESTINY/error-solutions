<?php

namespace Database\Seeders;

use App\Models\User;
use Carbon\Carbon;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class AdminSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        \DB::table('users')->delete();

        User::create([
            'name' => 'Admin',
            'email' => 'admin@gmail.com',
            'password' => '$2y$10$WbgC33G0U8OCol8Rh9iP1.075Ue2v2gFMq7BRKdfGc2T/t2nSFwNa', // Admin@123
            'created_at' => Carbon::now(),
            'updated_at' => Carbon::now()
        ]);
    }
}
