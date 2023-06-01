<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\User;

class UsersSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        User::firstOrCreate(
            [
                'name' => 'Super Admin',
                'email' => 'admin@physiotech.sa',
                'email_verified_at' => \Carbon\Carbon::today()->format('Y-m-h'),
                'password' => bcrypt('physiotech')
            ]
        );
    }
}
