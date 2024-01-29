<?php

namespace Database\Seeders;

use App\Models\AdminUser;
use App\Models\User;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Hash;

class AdminLogin extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run()
    {
        $adminUser = DB::table('admin-user')
        ->where('is_admin', 1)
        ->where('is_user', 0)
        ->where('id', 1)
        ->first();

    if ($adminUser) {
        $adminUserId = $adminUser->id;

        // Create a regular user and associate it with the admin user
        User::create([
            'name' => 'Admin',
            'email' => 'admin@gmail.com',
            'password' => Hash::make('password123'),
            'admin_user_id' => $adminUserId, // assuming there is a foreign key relationship
        ]);
    } else {
        // Handle the case where the admin user with the given conditions is not found.
    }
    }
}
