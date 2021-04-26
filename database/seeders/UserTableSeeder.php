<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Database\Eloquent\Model;


class UserTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    { 
        \DB::table('user')->insert([
            'name' => 'brenda',
            'email' => 'brendagusti@gmail.com',
            'password' => bcrypt('12345678'),
        ]);
    }
}
