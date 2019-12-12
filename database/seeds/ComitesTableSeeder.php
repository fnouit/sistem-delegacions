<?php

use Illuminate\Database\Seeder;

class ComitesTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        factory(App\Comite::class)->create([
            'nombre' => 'ACTIVOS',
            'slug' => 'activo'
        ]);
        factory(App\Comite::class)->create([
            'nombre' => 'JUBILADOS',
            'slug' => 'jubilado'
        ]);
        factory(App\Comite::class)->create([
            'nombre' => 'CENTRO DE TRABAJO',
            'slug' => 'c_t'
        ]);
    }
}
