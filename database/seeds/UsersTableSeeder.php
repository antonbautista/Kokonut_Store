<?php

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Str;


class UsersTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
     	DB::table('users')->insert(array(
         [
            'name' => 'Antonio',
            'email' => 'antonio@example.com',
            'password'=> Hash::make('12345678'),
            'api_token' => '91c3f6d839b1b97ddfa4138c4da9a2ff576bb5842848dcec602164a257979d48',//hash('sha256',Str::random(60)),
            'created_at' => now(),
            'updated_at' => now(),
         ]
        ));
    }
}
