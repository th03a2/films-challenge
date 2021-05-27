<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
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
        DB::table('users')->insert([
            [
                'name' => 'Tomas B. Pajarillaga Jr.',
                'email'    => 'dev@gmail.com',
                'password' => Hash::make('password'), 
                'favorite_id' => '[1,2,3]',
            ],  
        ]);
    }
}
