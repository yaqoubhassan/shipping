<?php

use Illuminate\Support\Str;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Hash;

class DatabaseSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        // $this->call(UsersTableSeeder::class);
        DB::table('users')->insert([
            'name' => Str::random(10),
            'username' => 'admin123',
            'email' => Str::random(10).'@gmail.com',
            'password' => Hash::make('secret'),
            'remember_token' => str_random(10),
        ]);
    }
}
