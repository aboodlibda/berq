<?php

namespace Database\Seeders;

use App\Models\User;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\Hash;

class AdminSeeder extends Seeder
{
    public function run()
    {
        User::create([
            'name'=>'berq-admin',
            'email'=>'berq@admin.com',
            'password'=>Hash::make("0592171803"),
        ]);
    }
}
