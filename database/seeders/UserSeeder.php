<?php

namespace Database\Seeders;

use App\Models\User;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\Hash;

class UserSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        User::factory(30)->create();

        $user = User::where('email', 'c030322126@mahasiswa.poliban.ac.id')->first();
        if(!$user){
        User::create([
            'name' => 'Harits Fadhila',
            'email' => 'c030322126@mahasiswa.poliban.ac.id',
            'email_verified_at' => now(),
            'password' => Hash::make('c030322126'),
            'roles' => 'mahasiswa',
        ]);
    }
    }
}