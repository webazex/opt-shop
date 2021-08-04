<?php

namespace Database\Seeders;
use Illuminate\Support\Facades\DB;
use Illuminate\Database\Seeder;

class UserSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('users')->insert([
            'role_id' => 4,
            'f_name' => 'Jonatan',
            'l_name' => 'Smitch',
            's_name' => '',
            'login' => 'client',
            'email' => 'c@example.com',
            'email_verified_at' => date("Y-m-d h:i:s"),
            'password' => bcrypt('1234'),
        ]);
    }
}
