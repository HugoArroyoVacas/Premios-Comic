<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class PremioSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('premios')->insert([
        	'fecha' => '2020',
        	'autor' => 'Juanjo Guarnido',
        	'comic' => 'BLACKSAD INTEGRAL',
        	'portada' => 'blacksad.jpg',
        	'user_id' => 1
        ]);
        DB::table('premios')->insert([
        	'fecha' => '2021',
        	'autor' => 'Diego Corbalán',
        	'comic' => 'Primavera para Madrid',
        	'portada' => 'blacksad.jpg',
        	'user_id' => 1
        ]);
    }
}
