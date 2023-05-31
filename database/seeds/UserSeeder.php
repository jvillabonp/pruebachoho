<?php

use Illuminate\Database\Seeder;
use App\User;

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
            'usuario' => 'Admin',
            'rol_usuario' => 'admin',
            'activo' => true,
            'email' => 'admin@choho.com',
            'password' => bcrypt('123456')
        ]);
    }
}
