<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {
        \DB::table('users')->insert([
        	'username' => 'user',
        	'email' => 'user@gmail.com',
        	'password' => md5('user')
        ]);

        \DB::table('users')->insert([
        	'username' => 'admin',
        	'email' => 'admin@gmail.com',
        	'password' => md5('admin'),
            'role'=>'1'
        ]);
    }
}
