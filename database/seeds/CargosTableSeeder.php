<?php

use Illuminate\Database\Seeder;

class CargosTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        factory(App\Cargo::class)->create([
            'nombre' => 'TITULAR',
            'slug' => 'titular'
        ]);
        factory(App\Cargo::class)->create([
            'nombre' => 'SUPLENTE',
            'slug' => 'suplente'
        ]);
    }
}
