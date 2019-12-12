<?php

use Illuminate\Database\Seeder;

class GenerosTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        factory(App\Genero::class)->create([
            'genero' => 'SIN ESPECIFICAR',
            'slug' => 'sin'
        ]);
        factory(App\Genero::class)->create([
            'genero' => 'MUJER',
            'slug' => 'mujer'
        ]);
        factory(App\Genero::class)->create([
            'genero' => 'HOMBRE',
            'slug' => 'hombre'
        ]);
        factory(App\Genero::class)->create([
            'genero' => 'LGTBIQ',
            'slug' => 'lgtbiq'
        ]);
    }
}
