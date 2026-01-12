<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\Hash;
use App\Models\User;

class AdminUserSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        User::updateOrCreate(
            [
                'email' => 'superadmin@reo.com',
            ],
            [
                'name' => 'Super Administrator',
                'password' => Hash::make('asdfasdf'),
                'email_verified_at' => now(),
            ]
        );
    }
}
