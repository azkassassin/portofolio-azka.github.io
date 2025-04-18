<?php

namespace Database\Seeders;

// use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use App\Models\User;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\Hash;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     */
    public function run(): void
    {
        // User::updateOrCreate(
        //     ['email' => 'superadmin@gmail.com'],
        //     [
        //         'name' => 'Super Admin',
        //         'password' => Hash::make('admin123'),
        //     ]
        // );
        $this->call(SuperAdminSeeder::class);
    }
}
