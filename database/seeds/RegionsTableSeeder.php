<?php

use Illuminate\Database\Seeder;

class RegionsTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        factory(App\Region::class)->create([
	        'nombre' => 'REGIÓN I',
	        'sede' => 'TANTOYUCA',
            'coordinador' => 'PROFR. MANUEL DE LA CRUZ VICENTE',
            'slug' => 'region-I'
        ]);
        factory(App\Region::class)->create([
	        'nombre' => 'REGIÓN II',
	        'sede' => 'TUXPAN',
	        'coordinador' => 'PROFR. DEMETRIO ALEJANDRO HERNÁNDEZ',
            'slug' => 'region-II'
        ]);
        factory(App\Region::class)->create([
	        'nombre' => 'REGIÓN III',
	        'sede' => 'POZA RICA',
	        'coordinador' => 'PROFR. ELI CARLOS CASTILLO PÉREZ',
            'slug' => 'region-III'
        ]);
        factory(App\Region::class)->create([
	        'nombre' => 'REGIÓN IV',
	        'sede' => 'MARTÍNEZ DE LA TORRE',
	        'coordinador' => 'PROFR. LORENZO TUBALCAIN SANGABRIEL CUBAS',
            'slug' => 'region-IV'
        ]);
        factory(App\Region::class)->create([
	        'nombre' => 'REGIÓN V',
	        'sede' => 'XALAPA',
	        'coordinador' => 'PROFR. DELFINO MARQUEZ SALINAS',
            'slug' => 'region-V'
        ]);
        factory(App\Region::class)->create([
	        'nombre' => 'REGIÓN VI',
	        'sede' => 'VERACRUZ',
	        'coordinador' => 'PROFR. JORGE TORRES VEGA',
            'slug' => 'region-VI'
        ]);
        factory(App\Region::class)->create([
	        'nombre' => 'REGIÓN VII',
	        'sede' => 'CORDOBA',
	        'coordinador' => 'PROFR. JOSÉ LUIS SALAZAR CORTÉS',
            'slug' => 'region-VII'
        ]);
        factory(App\Region::class)->create([
	        'nombre' => 'REGIÓN VIII',
	        'sede' => 'ORIZABA',
	        'coordinador' => 'PROFRA. SUSANA TATUN FLORES ALTAMIRANO',
            'slug' => 'region-VIII'
        ]);
        factory(App\Region::class)->create([
	        'nombre' => 'REGIÓN IX',
	        'sede' => 'COSAMALOAPAN',
	        'coordinador' => 'PROFR. ARTURO HERNÁNDEZ MARRON',
            'slug' => 'region-IX'
        ]);
        factory(App\Region::class)->create([
	        'nombre' => 'REGIÓN X',
	        'sede' => 'SAN ANDRES TUXTLA',
	        'coordinador' => 'PROFRA. RUTH ABURTO MONTALVO',
            'slug' => 'region-X'
        ]);
        factory(App\Region::class)->create([
	        'nombre' => 'REGIÓN XI',
	        'sede' => 'MINATITLAN',
	        'coordinador' => 'PROFRA. PERLA MARIA SANTOS VARGAS',
            'slug' => 'region-XI'
        ]);  
    }
}
