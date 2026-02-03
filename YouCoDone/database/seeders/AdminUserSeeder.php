<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\User;
use Illuminate\Support\Facades\Hash;
use Spatie\Permission\Models\Role;

class AdminUserSeeder extends Seeder
{
    public function run()
    {



        $admin = User::firstOrCreate(
            ['email' => 'admin@restaurant.com'],
            [
                'name' => 'Super Admin',
                'password' => Hash::make('Admin123!'), 
                'role' => 'admin',
                'phone' => '0600000000',
                'city' => 'safi',
            ]
        );

        $admin->assignRole('admin');
    }
}