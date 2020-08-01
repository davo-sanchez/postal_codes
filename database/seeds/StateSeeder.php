<?php

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class StateSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $country = DB::table('countries')->where('abbr','MX')->first()->id;

        DB::table('states')->insert([
            [
                'name' => 'Aguascalientes',
                'country_id' => $country
            ],
            [
                'name' => 'Baja California',
                'country_id' => $country
            ],
            [
                'name' => 'Baja California Sur',
                'country_id' => $country
            ],
            [
                'name' => 'Campeche',
                'country_id' => $country
            ],
            [
                'name' => 'Coahuila de Zaragoza',
                'country_id' => $country
            ],
            [
                'name' => 'Colima',
                'country_id' => $country
            ],
            [
                'name' => 'Chiapas',
                'country_id' => $country
            ],
            [
                'name' => 'Chihuahua',
                'country_id' => $country
            ],
            [
                'name' => 'Distrito Federal',
                'country_id' => $country
            ],
            [
                'name' => 'Durango',
                'country_id' => $country
            ],
            [
                'name' => 'Guanajuato',
                'country_id' => $country
            ],
            [
                'name' => 'Guerrero',
                'country_id' => $country
            ],
            [
                'name' => 'Hidalgo',
                'country_id' => $country
            ],
            [
                'name' => 'Jalisco',
                'country_id' => $country
            ],
            [
                'name' => 'México',
                'country_id' => $country
            ],
            [
                'name' => 'Michoacán de Ocampo',
                'country_id' => $country
            ],
            [
                'name' => 'Morelos',
                'country_id' => $country
            ],
            [
                'name' => 'Nayarit',
                'country_id' => $country
            ],
            [
                'name' => 'Nuevo León',
                'country_id' => $country
            ],
            [
                'name' => 'Oaxaca',
                'country_id' => $country
            ],
            [
                'name' => 'Puebla',
                'country_id' => $country
            ],
            [
                'name' => 'Querétaro',
                'country_id' => $country
            ],
            [
                'name' => 'Quintana Roo',
                'country_id' => $country
            ],
            [
                'name' => 'San Luis Potosí',
                'country_id' => $country
            ],
            [
                'name' => 'Sinaloa',
                'country_id' => $country
            ],
            [
                'name' => 'Sonora',
                'country_id' => $country
            ],
            [
                'name' => 'Tabasco',
                'country_id' => $country
            ],
            [
                'name' => 'Tamaulipas',
                'country_id' => $country
            ],
            [
                'name' => 'Tlaxcala',
                'country_id' => $country
            ],
            [
                'name' => 'Veracruz de Ignacio de la Llave',
                'country_id' => $country
            ],
            [
                'name' => 'Yucatán',
                'country_id' => $country
            ],
            [
                'name' => 'Zacatecas',
                'country_id' => $country
            ]            
        ]);
    }
}
