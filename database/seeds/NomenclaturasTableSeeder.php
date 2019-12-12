<?php

use Illuminate\Database\Seeder;

class NomenclaturasTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        factory(App\Nomenclatura::class)->create([
            'nomenclatura' => 'D-I-',
            'slug' => 'dI'
        ]);
        factory(App\Nomenclatura::class)->create([
            'nomenclatura' => 'D-II-',
            'slug' => 'dII'
        ]);
        factory(App\Nomenclatura::class)->create([
            'nomenclatura' => 'D-III-',
            'slug' => 'dIII'
        ]);
        factory(App\Nomenclatura::class)->create([
            'nomenclatura' => 'D-IV-',
            'slug' => 'dIV'
        ]);
        factory(App\Nomenclatura::class)->create([
            'nomenclatura' => 'C.T. ',
            'slug' => 'ct'
        ]); 
    }
}
