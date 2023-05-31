<?php

use Illuminate\Database\Seeder;
use Faker\Factory;
use App\Models\Terceros;

class TerceroSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        for ($i = 0; $i <= 10; $i++) {
            $faker = Factory::create('es_VE');
            Terceros::create([
                'nit' => rand(10000000, 999999999),
                'razon_social' => $faker->company,
                'tipo' => 'PROVEEDOR',
                'activo' => true
            ]);
        }
    }
}
