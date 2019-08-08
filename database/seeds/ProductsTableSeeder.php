<?php

use Illuminate\Database\Seeder;
use Illuminate\Support\Str;
use Illuminate\Support\Facades\DB;

class ProductsTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        //
         DB::table('products')->insert(array(
         [
            'product_name' => 'Xbox360',
            'description' => 'Consola de videojuegos',
            'total'=>2,
            'created_at'=>now(),
            'updated_at' => now(),
         ],
         [
            'product_name' => 'Computador HP',
            'description' => 'Laptop colo blanco,3TB disco duro.',
            'total'=>8,
            'created_at'=>now(),
            'updated_at' => now(),
         ],
         [
            'product_name' => 'Joystick',
            'description' => 'Joystick Bluetooth Celular Android Tv Box Gamepad Pc Soporte',
            'total'=>2,
            'created_at'=>now(),
            'updated_at' => now(),
         ],
         [
            'product_name' => 'Computadora Gamer Alienware',
            'description' => 'Aurora R7, Intel Core i7-7700 3.60GHz, 8GB, 1TB, NVIDIA GeForce GTX 1060, Windows 10 Home 64-bit',
            'total'=>10,
            'created_at'=>now(),
            'updated_at' => now(),
         ]
        ));
    }
}
