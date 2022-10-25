<?php

use App\User;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\Hash;

class UserSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        User::create([
            'name' => 'Team_2',
            'email' => 'team2@team.it',
            'password' => Hash::make('teamteam2'),
        ]);
    }
}
