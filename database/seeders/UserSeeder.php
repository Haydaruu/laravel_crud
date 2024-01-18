<?php

namespace Database\Seeders;

use App\Models\User;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;


class UserSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        User::factory()->create([
            'name' => 'Ahmad Haydar',
            'email' => 'haydaru@haydar.com',
            'password' => bcrypt('haydar1234'),
            'is_admin' => true,
        ]);
        User::factory()->count(10)->create();
    }
}
