<?php

namespace Database\Seeders;

use App\Models\User;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\Hash;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;

class UserSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        //
        User::factory(5)->create();

        User::factory()->create([
            'name' => 'Test User',
            'email' => 'admin@mail.com',
            'password' =>Hash::make('12345678'),
        ]);
    }
}
