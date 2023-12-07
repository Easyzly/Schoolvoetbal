<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\User;
use Illuminate\Support\Carbon;
use Illuminate\Support\Facades\Hash;

class UserSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $user = new User();
        $user->name = 'Jamie';
        $user->isAdmin = 1;
        $user->email = 'admin@email.com';
        $user->email_verified_at = Carbon::now();
        $user->password = Hash::make("password_1");
        $user->remember_token = 'Bluesky';
        $user->created_at = Carbon::now();
        $user->updated_at = Carbon::now();
        $user->save();

        $user = new User();
        $user->name = 'Guest';
        $user->email = 'guest@email.com';
        $user->email_verified_at = Carbon::now();
        $user->password = Hash::make("password_1");
        $user->remember_token = 'Bluesky';
        $user->created_at = Carbon::now();
        $user->updated_at = Carbon::now();
        $user->save();
    }
}
