<?php

use Illuminate\Database\Seeder;

class NivelsTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        factory(App\Nivel::class)->create([
            'nivel_educativo' => 'PRIMARIA',
            'slug' => 'primaria'
        ]);
        factory(App\Nivel::class)->create([
	        'nivel_educativo' => 'PREESCOLAR',
            'slug' => 'preescolar'
        ]);
        factory(App\Nivel::class)->create([
	        'nivel_educativo' => 'NIVELES ESPECIALES',
            'slug' => 'niveles'
        ]);
        factory(App\Nivel::class)->create([
	        'nivel_educativo' => 'SECUNDARIA',
            'slug' => 'secundaria'
        ]);
        factory(App\Nivel::class)->create([
	        'nivel_educativo' => 'TELESECUNDARIA',
            'slug' => 'telesecundaria'
        ]);
        factory(App\Nivel::class)->create([
	        'nivel_educativo' => 'BACHILLERATO',
            'slug' => 'bachillerato'
        ]);
        factory(App\Nivel::class)->create([
	        'nivel_educativo' => 'TELEBACHILLERATO',
            'slug' => 'telebachillerato'
        ]);
        factory(App\Nivel::class)->create([
	        'nivel_educativo' => 'UPV',
            'slug' => 'upv'
        ]);
        factory(App\Nivel::class)->create([
	        'nivel_educativo' => 'NORMALES',
            'slug' => 'normales'
        ]);
        factory(App\Nivel::class)->create([
	        'nivel_educativo' => 'ADMINISTRATIVOS',
            'slug' => 'administrativos'
        ]);
        factory(App\Nivel::class)->create([
	        'nivel_educativo' => 'PERSONAL DE APOYO',
            'slug' => 'personal'
        ]);
        factory(App\Nivel::class)->create([
	        'nivel_educativo' => 'EDUCACIÓN ESPECIAL',
            'slug' => 'especiales'
        ]);
        factory(App\Nivel::class)->create([
	        'nivel_educativo' => 'EDUCACIÓN FÍSICA',
            'slug' => 'fisica'
        ]);
        factory(App\Nivel::class)->create([
            'nivel_educativo' => 'JUBILADOS',
            'slug' => 'jubilados'
        ]);
        factory(App\Nivel::class)->create([
	        'nivel_educativo' => 'OTRO',
            'slug' => 'otros'
        ]);
    }
}
