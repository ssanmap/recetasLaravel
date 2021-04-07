<?php

use App\User;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class UsuarioSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {

        $user = User::create([

            'name' => 'Sebastian',
            'email' => 'seba@seba.cl',
            'password' => Hash::make('12345678'),
            'url' => 'https://pepe.cl'
        ]);



        $user2 = User::create([

            'name' => 'esteban',
            'email' => 'e@e.cl',
            'password' => Hash::make('12345678'),
            'url' => 'https://pepe2.cl'
        ]);





        // DB::table('users')->insert([
        //     'name' => 'Esteban',
        //     'email' => 'e@e.cl',
        //     'password' => Hash::make('234567899'),
        //     'url' => 'https://pepe2.cl',
        //     'created_at' => date('Y-m-d H:i:s'),
        //     'updated_at' => date('Y-m-d H:i:s')

        // ]);
    }
}
