<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Faker\Generator as Faker;

class TypesTabeleSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(Faker $faker): void
    {
        $types = ['FrontEned','BackEnd','Php','Laravel','VueJs' ];

        foreach($types as $type){
            $new_type = new $type();//per ogni ciclo creamo una nuova type
            $new_type->name = new $type();
            $new_type->color = $faker->rgbColor();
            $new_type->save();

        }
    }
}
