<?php

use Illuminate\Database\Seeder;

class NeighborhoodsSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {

        /** Veracruz */

        DB::table('neighborhoods')->insert([
            ['name' => 'Xalapa Enríquez Centro',
'city_id' => DB::table('cities')->where('name','Xalapa')->first()->id
],

['name' => 'Oficina Federal de Hacienda',
'city_id' => DB::table('cities')->where('name','Xalapa')->first()->id
],

['name' => 'Palacio de Gobierno Del Estado de Veracruz',
'city_id' => DB::table('cities')->where('name','Xalapa')->first()->id
],

['name' => '21 de Marzo',
'city_id' => DB::table('cities')->where('name','Xalapa')->first()->id
],

['name' => 'Del Periodista',
'city_id' => DB::table('cities')->where('name','Xalapa')->first()->id
],

['name' => 'Arroyo Zarco',
'city_id' => DB::table('cities')->where('name','Xalapa')->first()->id
],

['name' => '18 de Marzo',
'city_id' => DB::table('cities')->where('name','Xalapa')->first()->id
],

['name' => 'Brisas del Río Sedeño',
'city_id' => DB::table('cities')->where('name','Xalapa')->first()->id
],

['name' => 'Mesa de Guayabo',
'city_id' => DB::table('cities')->where('name','Xalapa')->first()->id
],

['name' => 'Nahuiollin',
'city_id' => DB::table('cities')->where('name','Xalapa')->first()->id
],

['name' => 'El Porvenir I',
'city_id' => DB::table('cities')->where('name','Xalapa')->first()->id
],

['name' => 'El Porvenir II',
'city_id' => DB::table('cities')->where('name','Xalapa')->first()->id
],

['name' => 'Solidaridad',
'city_id' => DB::table('cities')->where('name','Xalapa')->first()->id
],

['name' => 'Insurgentes',
'city_id' => DB::table('cities')->where('name','Xalapa')->first()->id
],

['name' => 'Manantiales',
'city_id' => DB::table('cities')->where('name','Xalapa')->first()->id
],

['name' => 'Renacimiento',
'city_id' => DB::table('cities')->where('name','Xalapa')->first()->id
],

['name' => 'Victimas del 6 de Septiembre',
'city_id' => DB::table('cities')->where('name','Xalapa')->first()->id
],

['name' => 'Loma Bonita',
'city_id' => DB::table('cities')->where('name','Xalapa')->first()->id
],

['name' => 'Guadalupe Victoria',
'city_id' => DB::table('cities')->where('name','Xalapa')->first()->id
],

['name' => 'Luz del Barrio',
'city_id' => DB::table('cities')->where('name','Xalapa')->first()->id
],

['name' => 'Lomas de Chapultepec',
'city_id' => DB::table('cities')->where('name','Xalapa')->first()->id
],

['name' => 'El Pocito',
'city_id' => DB::table('cities')->where('name','Xalapa')->first()->id
],

['name' => 'Lomas de San Roque',
'city_id' => DB::table('cities')->where('name','Xalapa')->first()->id
],

['name' => '10 de Abril',
'city_id' => DB::table('cities')->where('name','Xalapa')->first()->id
],

['name' => 'Niños Héroes',
'city_id' => DB::table('cities')->where('name','Xalapa')->first()->id
],

['name' => 'Framboyanes',
'city_id' => DB::table('cities')->where('name','Xalapa')->first()->id
],

['name' => 'Isauro Acosta',
'city_id' => DB::table('cities')->where('name','Xalapa')->first()->id
],

['name' => 'Ruben R Jaramillo',
'city_id' => DB::table('cities')->where('name','Xalapa')->first()->id
],

['name' => '9 de Abril',
'city_id' => DB::table('cities')->where('name','Xalapa')->first()->id
],

['name' => 'Independencia',
'city_id' => DB::table('cities')->where('name','Xalapa')->first()->id
],

['name' => 'Altamira',
'city_id' => DB::table('cities')->where('name','Xalapa')->first()->id
],

['name' => 'Comercio',
'city_id' => DB::table('cities')->where('name','Xalapa')->first()->id
],

['name' => 'Luis Donaldo Colosio',
'city_id' => DB::table('cities')->where('name','Xalapa')->first()->id
],

['name' => 'Rafael Murillo Vidal',
'city_id' => DB::table('cities')->where('name','Xalapa')->first()->id
],

['name' => 'Unidad del Bosque Pensiones',
'city_id' => DB::table('cities')->where('name','Xalapa')->first()->id
],

['name' => 'Magisterial',
'city_id' => DB::table('cities')->where('name','Xalapa')->first()->id
],

['name' => 'Virginia Cordero de Murillo Vidal',
'city_id' => DB::table('cities')->where('name','Xalapa')->first()->id
],

['name' => 'Rafael Hernández Ochoa',
'city_id' => DB::table('cities')->where('name','Xalapa')->first()->id
],

['name' => 'Rafael Murillo Vidal',
'city_id' => DB::table('cities')->where('name','Xalapa')->first()->id
],

['name' => 'Veracruz',
'city_id' => DB::table('cities')->where('name','Xalapa')->first()->id
],

['name' => 'Dolores Hidalgo',
'city_id' => DB::table('cities')->where('name','Xalapa')->first()->id
],

['name' => 'Fernando Gutiérrez Barrios',
'city_id' => DB::table('cities')->where('name','Xalapa')->first()->id
],

['name' => 'Manantiales',
'city_id' => DB::table('cities')->where('name','Xalapa')->first()->id
],

['name' => 'Plan de Ayala',
'city_id' => DB::table('cities')->where('name','Xalapa')->first()->id
],

['name' => 'Renacimiento',
'city_id' => DB::table('cities')->where('name','Xalapa')->first()->id
],

['name' => 'Diamante',
'city_id' => DB::table('cities')->where('name','Xalapa')->first()->id
],

['name' => 'Adolfo Lopez Mateos',
'city_id' => DB::table('cities')->where('name','Xalapa')->first()->id
],

['name' => 'Obrero Campesina',
'city_id' => DB::table('cities')->where('name','Xalapa')->first()->id
],

['name' => 'Veracruz',
'city_id' => DB::table('cities')->where('name','Xalapa')->first()->id
],

['name' => 'Lomas Del Seminario',
'city_id' => DB::table('cities')->where('name','Xalapa')->first()->id
],

['name' => 'Fovissste',
'city_id' => DB::table('cities')->where('name','Xalapa')->first()->id
],

['name' => 'Presa de San Bruno',
'city_id' => DB::table('cities')->where('name','Xalapa')->first()->id
],

['name' => 'Empleados Municipales',
'city_id' => DB::table('cities')->where('name','Xalapa')->first()->id
],

['name' => 'Los Encinos',
'city_id' => DB::table('cities')->where('name','Xalapa')->first()->id
],

['name' => 'UCISVER',
'city_id' => DB::table('cities')->where('name','Xalapa')->first()->id
],

['name' => 'UNE PRI',
'city_id' => DB::table('cities')->where('name','Xalapa')->first()->id
],

['name' => 'Unidad y Progreso',
'city_id' => DB::table('cities')->where('name','Xalapa')->first()->id
],

['name' => 'La Pedreguera',
'city_id' => DB::table('cities')->where('name','Xalapa')->first()->id
],

['name' => '24 de Abril',
'city_id' => DB::table('cities')->where('name','Xalapa')->first()->id
],

['name' => 'Arroyo Blanco',
'city_id' => DB::table('cities')->where('name','Xalapa')->first()->id
],

['name' => 'Villa Real',
'city_id' => DB::table('cities')->where('name','Xalapa')->first()->id
],

['name' => 'Josefa Ortiz de Dominguez',
'city_id' => DB::table('cities')->where('name','Xalapa')->first()->id
],

['name' => 'Barranca Honda',
'city_id' => DB::table('cities')->where('name','Xalapa')->first()->id
],

['name' => '14 de Febrero',
'city_id' => DB::table('cities')->where('name','Xalapa')->first()->id
],

['name' => 'Francisco Ferrer Guardia',
'city_id' => DB::table('cities')->where('name','Xalapa')->first()->id
],

['name' => 'Los Pinos',
'city_id' => DB::table('cities')->where('name','Xalapa')->first()->id
],

['name' => 'Cerro Colorado',
'city_id' => DB::table('cities')->where('name','Xalapa')->first()->id
],

['name' => 'Las Flores',
'city_id' => DB::table('cities')->where('name','Xalapa')->first()->id
],

['name' => 'Acueducto',
'city_id' => DB::table('cities')->where('name','Xalapa')->first()->id
],

['name' => 'Desarrollo Social San Bruno',
'city_id' => DB::table('cities')->where('name','Xalapa')->first()->id
],

['name' => 'Montevideo',
'city_id' => DB::table('cities')->where('name','Xalapa')->first()->id
],

['name' => 'Dante Delgado Ranauro',
'city_id' => DB::table('cities')->where('name','Xalapa')->first()->id
],

['name' => 'Valle del Sol',
'city_id' => DB::table('cities')->where('name','Xalapa')->first()->id
],

['name' => 'Olmeca',
'city_id' => DB::table('cities')->where('name','Xalapa')->first()->id
],

['name' => 'Del Maestro',
'city_id' => DB::table('cities')->where('name','Xalapa')->first()->id
],

['name' => 'José Cardel',
'city_id' => DB::table('cities')->where('name','Xalapa')->first()->id
],

['name' => '2 de Abril',
'city_id' => DB::table('cities')->where('name','Xalapa')->first()->id
],

['name' => 'Maria Esther',
'city_id' => DB::table('cities')->where('name','Xalapa')->first()->id
],

['name' => 'Los Laureles',
'city_id' => DB::table('cities')->where('name','Xalapa')->first()->id
],

['name' => 'La Piedad',
'city_id' => DB::table('cities')->where('name','Xalapa')->first()->id
],

['name' => 'Modelo',
'city_id' => DB::table('cities')->where('name','Xalapa')->first()->id
],

['name' => 'Unidad Pomona',
'city_id' => DB::table('cities')->where('name','Xalapa')->first()->id
],

['name' => 'Pumar',
'city_id' => DB::table('cities')->where('name','Xalapa')->first()->id
],

['name' => 'Agua Santa Infonavit',
'city_id' => DB::table('cities')->where('name','Xalapa')->first()->id
],

['name' => 'Castillo de las Animas',
'city_id' => DB::table('cities')->where('name','Xalapa')->first()->id
],

['name' => 'Badillo',
'city_id' => DB::table('cities')->where('name','Xalapa')->first()->id
],

['name' => 'Ing. Rivadeneyra',
'city_id' => DB::table('cities')->where('name','Xalapa')->first()->id
],

['name' => 'Loma Del Puente',
'city_id' => DB::table('cities')->where('name','Xalapa')->first()->id
],

['name' => 'Las Arboledas',
'city_id' => DB::table('cities')->where('name','Xalapa')->first()->id
],

['name' => 'Infonavit Pomona',
'city_id' => DB::table('cities')->where('name','Xalapa')->first()->id
],

['name' => 'Unidad Veracruzana',
'city_id' => DB::table('cities')->where('name','Xalapa')->first()->id
],

['name' => 'Represa Del Carmen',
'city_id' => DB::table('cities')->where('name','Xalapa')->first()->id
],

['name' => 'Tamborrel',
'city_id' => DB::table('cities')->where('name','Xalapa')->first()->id
],

['name' => 'Estibadores',
'city_id' => DB::table('cities')->where('name','Xalapa')->first()->id
],

['name' => 'José de Jesús Panes',
'city_id' => DB::table('cities')->where('name','Xalapa')->first()->id
],

['name' => 'Chulavista',
'city_id' => DB::table('cities')->where('name','Xalapa')->first()->id
],

['name' => '3 de Mayo',
'city_id' => DB::table('cities')->where('name','Xalapa')->first()->id
],

['name' => 'Guadalupe Rodríguez',
'city_id' => DB::table('cities')->where('name','Xalapa')->first()->id
],

['name' => 'Salud',
'city_id' => DB::table('cities')->where('name','Xalapa')->first()->id
],

['name' => 'Belisario Dominguez',
'city_id' => DB::table('cities')->where('name','Xalapa')->first()->id
],

['name' => 'Los Sauces',
'city_id' => DB::table('cities')->where('name','Xalapa')->first()->id
],

['name' => 'Benito Juárez',
'city_id' => DB::table('cities')->where('name','Xalapa')->first()->id
],

['name' => 'El Tucán',
'city_id' => DB::table('cities')->where('name','Xalapa')->first()->id
],

['name' => 'Coapexpan',
'city_id' => DB::table('cities')->where('name','Xalapa')->first()->id
],

['name' => 'Electricistas',
'city_id' => DB::table('cities')->where('name','Xalapa')->first()->id
],

['name' => 'Ensueño',
'city_id' => DB::table('cities')->where('name','Xalapa')->first()->id
],

['name' => 'Marco Antonio Muñoz',
'city_id' => DB::table('cities')->where('name','Xalapa')->first()->id
],

['name' => 'Obreros Textiles',
'city_id' => DB::table('cities')->where('name','Xalapa')->first()->id
],

['name' => 'La Herradura',
'city_id' => DB::table('cities')->where('name','Xalapa')->first()->id
],

['name' => 'Los Ángeles',
'city_id' => DB::table('cities')->where('name','Xalapa')->first()->id
],

['name' => 'Tatahuicapan',
'city_id' => DB::table('cities')->where('name','Xalapa')->first()->id
],

['name' => 'Lomas del Tejar',
'city_id' => DB::table('cities')->where('name','Xalapa')->first()->id
],

['name' => 'Álvaro Obregón',
'city_id' => DB::table('cities')->where('name','Xalapa')->first()->id
],

['name' => 'Inmecafe',
'city_id' => DB::table('cities')->where('name','Xalapa')->first()->id
],

['name' => 'SAHOP',
'city_id' => DB::table('cities')->where('name','Xalapa')->first()->id
],

['name' => 'SIPEH Ánimas',
'city_id' => DB::table('cities')->where('name','Xalapa')->first()->id
],

['name' => 'Colibris',
'city_id' => DB::table('cities')->where('name','Xalapa')->first()->id
],

['name' => 'San Francisco Ánimas',
'city_id' => DB::table('cities')->where('name','Xalapa')->first()->id
],

['name' => 'Cuauhtémoc',
'city_id' => DB::table('cities')->where('name','Xalapa')->first()->id
],

['name' => 'Adalberto Tejeda',
'city_id' => DB::table('cities')->where('name','Xalapa')->first()->id
],

['name' => 'Francisco I Madero',
'city_id' => DB::table('cities')->where('name','Xalapa')->first()->id
],

['name' => 'Venustiano Carranza',
'city_id' => DB::table('cities')->where('name','Xalapa')->first()->id
],

['name' => 'El Haya',
'city_id' => DB::table('cities')->where('name','Xalapa')->first()->id
],

['name' => 'Marco Antonio Muñoz',
'city_id' => DB::table('cities')->where('name','Xalapa')->first()->id
],

['name' => 'El Haya',
'city_id' => DB::table('cities')->where('name','Xalapa')->first()->id
],

['name' => 'Nuevo Coapexpan',
'city_id' => DB::table('cities')->where('name','Xalapa')->first()->id
],

['name' => 'Libertad',
'city_id' => DB::table('cities')->where('name','Xalapa')->first()->id
],

['name' => 'Reforma',
'city_id' => DB::table('cities')->where('name','Xalapa')->first()->id
],

['name' => 'Ampliación Libertad',
'city_id' => DB::table('cities')->where('name','Xalapa')->first()->id
],

['name' => 'Felipe Carrillo Puerto',
'city_id' => DB::table('cities')->where('name','Xalapa')->first()->id
],

['name' => 'Buenavista',
'city_id' => DB::table('cities')->where('name','Xalapa')->first()->id
],

['name' => 'Comunicaciones',
'city_id' => DB::table('cities')->where('name','Xalapa')->first()->id
],

['name' => 'Buenavista II',
'city_id' => DB::table('cities')->where('name','Xalapa')->first()->id
],

['name' => 'Buenavista I',
'city_id' => DB::table('cities')->where('name','Xalapa')->first()->id
],

['name' => 'Isleta',
'city_id' => DB::table('cities')->where('name','Xalapa')->first()->id
],

['name' => 'Lomas del Estadio',
'city_id' => DB::table('cities')->where('name','Xalapa')->first()->id
],

['name' => 'Emiliano Zapata',
'city_id' => DB::table('cities')->where('name','Xalapa')->first()->id
],

['name' => 'Los Lagos',
'city_id' => DB::table('cities')->where('name','Xalapa')->first()->id
],

['name' => 'Caminos',
'city_id' => DB::table('cities')->where('name','Xalapa')->first()->id
],

['name' => 'Mártires de Chicago',
'city_id' => DB::table('cities')->where('name','Xalapa')->first()->id
],

['name' => 'Campestre',
'city_id' => DB::table('cities')->where('name','Xalapa')->first()->id
],

['name' => 'Lomas de la Gloria',
'city_id' => DB::table('cities')->where('name','Xalapa')->first()->id
],

['name' => 'Lomas Del Paraíso',
'city_id' => DB::table('cities')->where('name','Xalapa')->first()->id
],

['name' => 'Coralillos',
'city_id' => DB::table('cities')->where('name','Xalapa')->first()->id
],

['name' => 'Tulipanes',
'city_id' => DB::table('cities')->where('name','Xalapa')->first()->id
],

['name' => 'Las Margaritas',
'city_id' => DB::table('cities')->where('name','Xalapa')->first()->id
],

['name' => 'Santa Rosa',
'city_id' => DB::table('cities')->where('name','Xalapa')->first()->id
],

['name' => 'Jardines de Santa Rosa',
'city_id' => DB::table('cities')->where('name','Xalapa')->first()->id
],

['name' => 'Lomas las Margaritas',
'city_id' => DB::table('cities')->where('name','Xalapa')->first()->id
],

['name' => 'Jardines de Santa Rosa Sección 2',
'city_id' => DB::table('cities')->where('name','Xalapa')->first()->id
],

['name' => 'Villa Centroamericana',
'city_id' => DB::table('cities')->where('name','Xalapa')->first()->id
],

['name' => 'Moctezuma',
'city_id' => DB::table('cities')->where('name','Xalapa')->first()->id
],

['name' => 'Reserva Territorial',
'city_id' => DB::table('cities')->where('name','Xalapa')->first()->id
],

['name' => 'Santa Bárbara',
'city_id' => DB::table('cities')->where('name','Xalapa')->first()->id
],

['name' => 'FREDEPO',
'city_id' => DB::table('cities')->where('name','Xalapa')->first()->id
],

['name' => 'Bellavista',
'city_id' => DB::table('cities')->where('name','Xalapa')->first()->id
],

['name' => 'Del Valle',
'city_id' => DB::table('cities')->where('name','Xalapa')->first()->id
],

['name' => 'Xalapa 2000',
'city_id' => DB::table('cities')->where('name','Xalapa')->first()->id
],

['name' => 'La Loma',
'city_id' => DB::table('cities')->where('name','Xalapa')->first()->id
],

['name' => 'La Pradera',
'city_id' => DB::table('cities')->where('name','Xalapa')->first()->id
],

['name' => 'Nuevo Xalapa',
'city_id' => DB::table('cities')->where('name','Xalapa')->first()->id
],

['name' => 'Torres de Xalapa',
'city_id' => DB::table('cities')->where('name','Xalapa')->first()->id
],

['name' => 'Lomas Verdes',
'city_id' => DB::table('cities')->where('name','Xalapa')->first()->id
],

['name' => 'Las Fuentes',
'city_id' => DB::table('cities')->where('name','Xalapa')->first()->id
],

['name' => 'Bosques de Las Lomas',
'city_id' => DB::table('cities')->where('name','Xalapa')->first()->id
],

['name' => 'Los Cedros',
'city_id' => DB::table('cities')->where('name','Xalapa')->first()->id
],

['name' => 'Zippor',
'city_id' => DB::table('cities')->where('name','Xalapa')->first()->id
],

['name' => 'Revolución',
'city_id' => DB::table('cities')->where('name','Xalapa')->first()->id
],

['name' => 'Lucas Martín',
'city_id' => DB::table('cities')->where('name','Xalapa')->first()->id
],

['name' => 'El Naranjal de Agua Santa',
'city_id' => DB::table('cities')->where('name','Xalapa')->first()->id
],

['name' => 'México',
'city_id' => DB::table('cities')->where('name','Xalapa')->first()->id
],

['name' => 'Valle de los Pinos',
'city_id' => DB::table('cities')->where('name','Xalapa')->first()->id
],

['name' => 'Lomas de Sedeño',
'city_id' => DB::table('cities')->where('name','Xalapa')->first()->id
],

['name' => 'Del Moral',
'city_id' => DB::table('cities')->where('name','Xalapa')->first()->id
],

['name' => 'José Vasconcelos',
'city_id' => DB::table('cities')->where('name','Xalapa')->first()->id
],

['name' => 'Campo de Tiro',
'city_id' => DB::table('cities')->where('name','Xalapa')->first()->id
],

['name' => 'Culturas Mexicanas',
'city_id' => DB::table('cities')->where('name','Xalapa')->first()->id
],

['name' => 'Portón Colorado',
'city_id' => DB::table('cities')->where('name','Xalapa')->first()->id
],

['name' => 'Obrero Mundial',
'city_id' => DB::table('cities')->where('name','Xalapa')->first()->id
],

['name' => 'Internacional',
'city_id' => DB::table('cities')->where('name','Xalapa')->first()->id
],

['name' => '16 de Septiembre',
'city_id' => DB::table('cities')->where('name','Xalapa')->first()->id
],

['name' => 'Rafael Lucio',
'city_id' => DB::table('cities')->where('name','Xalapa')->first()->id
],

['name' => 'Ruben Pabello Acosta',
'city_id' => DB::table('cities')->where('name','Xalapa')->first()->id
],

['name' => 'Sostenes Mejia Blanco',
'city_id' => DB::table('cities')->where('name','Xalapa')->first()->id
],

['name' => 'Los Prados',
'city_id' => DB::table('cities')->where('name','Xalapa')->first()->id
],

['name' => 'Tabasco',
'city_id' => DB::table('cities')->where('name','Xalapa')->first()->id
],

['name' => 'La Lagunilla',
'city_id' => DB::table('cities')->where('name','Xalapa')->first()->id
],

['name' => 'Ferrocarrilera',
'city_id' => DB::table('cities')->where('name','Xalapa')->first()->id
],

['name' => 'Del Bosque Ferrocarrilero',
'city_id' => DB::table('cities')->where('name','Xalapa')->first()->id
],

['name' => 'Unión Ferrocarrilera',
'city_id' => DB::table('cities')->where('name','Xalapa')->first()->id
],

['name' => 'Héroes Ferrocarrileros',
'city_id' => DB::table('cities')->where('name','Xalapa')->first()->id
],

['name' => 'Hogares Ferrocarrileros',
'city_id' => DB::table('cities')->where('name','Xalapa')->first()->id
],

['name' => 'Progreso Macuiltepetl',
'city_id' => DB::table('cities')->where('name','Xalapa')->first()->id
],

['name' => 'Aguacatal',
'city_id' => DB::table('cities')->where('name','Xalapa')->first()->id
],

['name' => 'Laderas de Macuiltepetl',
'city_id' => DB::table('cities')->where('name','Xalapa')->first()->id
],

['name' => 'Voceadores',
'city_id' => DB::table('cities')->where('name','Xalapa')->first()->id
],

['name' => 'Juan de La Luz Enríquez',
'city_id' => DB::table('cities')->where('name','Xalapa')->first()->id
],

['name' => 'Burócratas del Ayuntamiento',
'city_id' => DB::table('cities')->where('name','Xalapa')->first()->id
],

['name' => 'Federal',
'city_id' => DB::table('cities')->where('name','Xalapa')->first()->id
],

['name' => '7 de Noviembre',
'city_id' => DB::table('cities')->where('name','Xalapa')->first()->id
],

['name' => 'Hidalgo',
'city_id' => DB::table('cities')->where('name','Xalapa')->first()->id
],

['name' => 'Independencia',
'city_id' => DB::table('cities')->where('name','Xalapa')->first()->id
],

['name' => 'Arboledas del Sumidero',
'city_id' => DB::table('cities')->where('name','Xalapa')->first()->id
],

['name' => 'Predio de La Virgen',
'city_id' => DB::table('cities')->where('name','Xalapa')->first()->id
],

['name' => 'El Cafetal',
'city_id' => DB::table('cities')->where('name','Xalapa')->first()->id
],

['name' => 'Valle de Cristal',
'city_id' => DB::table('cities')->where('name','Xalapa')->first()->id
],

['name' => 'Reserva del Tronconal',
'city_id' => DB::table('cities')->where('name','Xalapa')->first()->id
],

['name' => 'Lomas de Santa Fe',
'city_id' => DB::table('cities')->where('name','Xalapa')->first()->id
],

['name' => 'Maver',
'city_id' => DB::table('cities')->where('name','Xalapa')->first()->id
],

['name' => 'Arboledas de Troncal',
'city_id' => DB::table('cities')->where('name','Xalapa')->first()->id
],

['name' => 'Aviación Civil',
'city_id' => DB::table('cities')->where('name','Xalapa')->first()->id
],

['name' => '2 de Julio',
'city_id' => DB::table('cities')->where('name','Xalapa')->first()->id
],

['name' => 'Heberto Castillo Martínez',
'city_id' => DB::table('cities')->where('name','Xalapa')->first()->id
],

['name' => 'Las Torres',
'city_id' => DB::table('cities')->where('name','Xalapa')->first()->id
],

['name' => 'Rafael Hernández Villalpando',
'city_id' => DB::table('cities')->where('name','Xalapa')->first()->id
],

['name' => '12 de Diciembre',
'city_id' => DB::table('cities')->where('name','Xalapa')->first()->id
],

['name' => 'Fraternidad Antorchista',
'city_id' => DB::table('cities')->where('name','Xalapa')->first()->id
],

['name' => 'Nacional',
'city_id' => DB::table('cities')->where('name','Xalapa')->first()->id
],

['name' => 'Floresta',
'city_id' => DB::table('cities')->where('name','Xalapa')->first()->id
],

['name' => 'Las Águilas',
'city_id' => DB::table('cities')->where('name','Xalapa')->first()->id
],

['name' => 'Las Brisas',
'city_id' => DB::table('cities')->where('name','Xalapa')->first()->id
],

['name' => 'Encantos Del Sumidero',
'city_id' => DB::table('cities')->where('name','Xalapa')->first()->id
],

['name' => 'Constitución Del Sumidero',
'city_id' => DB::table('cities')->where('name','Xalapa')->first()->id
],

['name' => 'Vicente Guerrero',
'city_id' => DB::table('cities')->where('name','Xalapa')->first()->id
],

['name' => '23 de Marzo',
'city_id' => DB::table('cities')->where('name','Xalapa')->first()->id
],

['name' => 'Jardines de las Flores 2001',
'city_id' => DB::table('cities')->where('name','Xalapa')->first()->id
],

['name' => 'Sumidero Infonavit',
'city_id' => DB::table('cities')->where('name','Xalapa')->first()->id
],

['name' => 'Bugambilias de Xalapa',
'city_id' => DB::table('cities')->where('name','Xalapa')->first()->id
],

['name' => 'Continental',
'city_id' => DB::table('cities')->where('name','Xalapa')->first()->id
],

['name' => 'El Coyol',
'city_id' => DB::table('cities')->where('name','Xalapa')->first()->id
],

['name' => 'Jardines del Castillo',
'city_id' => DB::table('cities')->where('name','Xalapa')->first()->id
],

['name' => 'Sumidero',
'city_id' => DB::table('cities')->where('name','Xalapa')->first()->id
],

['name' => 'Las Minas',
'city_id' => DB::table('cities')->where('name','Xalapa')->first()->id
],

['name' => 'El Arroyo',
'city_id' => DB::table('cities')->where('name','Xalapa')->first()->id
],

['name' => 'Miradores del Sumidero',
'city_id' => DB::table('cities')->where('name','Xalapa')->first()->id
],

['name' => 'América',
'city_id' => DB::table('cities')->where('name','Xalapa')->first()->id
],

['name' => 'Casa Blanca',
'city_id' => DB::table('cities')->where('name','Xalapa')->first()->id
],

['name' => 'El Tanque',
'city_id' => DB::table('cities')->where('name','Xalapa')->first()->id
],

['name' => 'Ejido Del Troncal',
'city_id' => DB::table('cities')->where('name','Xalapa')->first()->id
],

['name' => 'Miradores de las Flores',
'city_id' => DB::table('cities')->where('name','Xalapa')->first()->id
],

['name' => 'Lomas Del Sumidero',
'city_id' => DB::table('cities')->where('name','Xalapa')->first()->id
],

['name' => 'Predio de La Virgen',
'city_id' => DB::table('cities')->where('name','Xalapa')->first()->id
],

['name' => 'Margarita Maza de Juárez',
'city_id' => DB::table('cities')->where('name','Xalapa')->first()->id
],

['name' => 'Unión',
'city_id' => DB::table('cities')->where('name','Xalapa')->first()->id
],

['name' => 'Predio Palo Blanco',
'city_id' => DB::table('cities')->where('name','Xalapa')->first()->id
],

['name' => 'Unión',
'city_id' => DB::table('cities')->where('name','Xalapa')->first()->id
],

['name' => 'Morelos',
'city_id' => DB::table('cities')->where('name','Xalapa')->first()->id
],

['name' => 'Margarita Maza de Juárez',
'city_id' => DB::table('cities')->where('name','Xalapa')->first()->id
],

['name' => 'Las Jacarandas',
'city_id' => DB::table('cities')->where('name','Xalapa')->first()->id
],

['name' => 'Carolino Anaya',
'city_id' => DB::table('cities')->where('name','Xalapa')->first()->id
],

['name' => 'Huizachal',
'city_id' => DB::table('cities')->where('name','Xalapa')->first()->id
],

['name' => 'Lealtad Institucional',
'city_id' => DB::table('cities')->where('name','Xalapa')->first()->id
],

['name' => 'PROVIPO',
'city_id' => DB::table('cities')->where('name','Xalapa')->first()->id
],

['name' => 'Rotaria',
'city_id' => DB::table('cities')->where('name','Xalapa')->first()->id
],

['name' => 'El Nacimiento',
'city_id' => DB::table('cities')->where('name','Xalapa')->first()->id
],

['name' => 'El Cafetal',
'city_id' => DB::table('cities')->where('name','Xalapa')->first()->id
],

['name' => 'Higueras',
'city_id' => DB::table('cities')->where('name','Xalapa')->first()->id
],

['name' => 'UDICV',
'city_id' => DB::table('cities')->where('name','Xalapa')->first()->id
],

['name' => 'Cincuentenario Casa Blanca',
'city_id' => DB::table('cities')->where('name','Xalapa')->first()->id
],

['name' => 'Lomas de Casa Blanca',
'city_id' => DB::table('cities')->where('name','Xalapa')->first()->id
],

['name' => 'Flores de Casa Blanca',
'city_id' => DB::table('cities')->where('name','Xalapa')->first()->id
],

['name' => 'El Castillo',
'city_id' => DB::table('cities')->where('name','Xalapa')->first()->id
],

['name' => 'El Calvario',
'city_id' => DB::table('cities')->where('name','Xalapa')->first()->id
],

['name' => 'La Palma',
'city_id' => DB::table('cities')->where('name','Xalapa')->first()->id
],

['name' => 'La Tranca',
'city_id' => DB::table('cities')->where('name','Xalapa')->first()->id
],

['name' => 'Loma Bonita',
'city_id' => DB::table('cities')->where('name','Xalapa')->first()->id
],

['name' => 'Lomas de Los Castillo',
'city_id' => DB::table('cities')->where('name','Xalapa')->first()->id
],

['name' => 'El Mirador',
'city_id' => DB::table('cities')->where('name','Xalapa')->first()->id
],

['name' => 'Loma Alta Infonavit',
'city_id' => DB::table('cities')->where('name','Xalapa')->first()->id
],

['name' => 'Misión San Carlos',
'city_id' => DB::table('cities')->where('name','Xalapa')->first()->id
],

['name' => 'Unidad Jardín',
'city_id' => DB::table('cities')->where('name','Xalapa')->first()->id
],

['name' => 'Francisco Villa',
'city_id' => DB::table('cities')->where('name','Xalapa')->first()->id
],

['name' => 'Salvador Diaz Mirón',
'city_id' => DB::table('cities')->where('name','Xalapa')->first()->id
],

['name' => 'Arboledas de Xalapa',
'city_id' => DB::table('cities')->where('name','Xalapa')->first()->id
],

['name' => 'Fesapauv Cristal',
'city_id' => DB::table('cities')->where('name','Xalapa')->first()->id
],

['name' => 'Peñascal',
'city_id' => DB::table('cities')->where('name','Xalapa')->first()->id
],

['name' => 'Heron Proal',
'city_id' => DB::table('cities')->where('name','Xalapa')->first()->id
],

['name' => 'Jardines de Xalapa',
'city_id' => DB::table('cities')->where('name','Xalapa')->first()->id
],

['name' => 'Encinal',
'city_id' => DB::table('cities')->where('name','Xalapa')->first()->id
],

['name' => 'Sebastián Lerdo de Tejada Indeco',
'city_id' => DB::table('cities')->where('name','Xalapa')->first()->id
],

['name' => 'Azteca',
'city_id' => DB::table('cities')->where('name','Xalapa')->first()->id
],

['name' => '10 de Mayo',
'city_id' => DB::table('cities')->where('name','Xalapa')->first()->id
],

['name' => 'Lázaro Cárdenas',
'city_id' => DB::table('cities')->where('name','Xalapa')->first()->id
],

['name' => 'Constituyentes',
'city_id' => DB::table('cities')->where('name','Xalapa')->first()->id
],

['name' => 'Agua Santa II',
'city_id' => DB::table('cities')->where('name','Xalapa')->first()->id
],

['name' => 'Vanguardia Revolucionaria',
'city_id' => DB::table('cities')->where('name','Xalapa')->first()->id
],

['name' => 'Los Cantaros',
'city_id' => DB::table('cities')->where('name','Xalapa')->first()->id
],

['name' => 'Miguel Alemán Valdez',
'city_id' => DB::table('cities')->where('name','Xalapa')->first()->id
],

['name' => 'Agua Clara',
'city_id' => DB::table('cities')->where('name','Xalapa')->first()->id
],

['name' => 'Jardines de las Flores',
'city_id' => DB::table('cities')->where('name','Xalapa')->first()->id
],

['name' => 'Atenas',
'city_id' => DB::table('cities')->where('name','Xalapa')->first()->id
],

['name' => 'Jardines de Bambú',
'city_id' => DB::table('cities')->where('name','Xalapa')->first()->id
],

['name' => 'Circuito Quetzales',
'city_id' => DB::table('cities')->where('name','Xalapa')->first()->id
],

['name' => 'Unidad Habitacional y Deportiva el Castillo',
'city_id' => DB::table('cities')->where('name','Xalapa')->first()->id
],

['name' => 'Rebombeo de Las Ánimas',
'city_id' => DB::table('cities')->where('name','Xalapa')->first()->id
],

['name' => 'Fuentes de Las Ánimas',
'city_id' => DB::table('cities')->where('name','Xalapa')->first()->id
],

['name' => 'Indeco Animas',
'city_id' => DB::table('cities')->where('name','Xalapa')->first()->id
],

['name' => 'Las Flores',
'city_id' => DB::table('cities')->where('name','Xalapa')->first()->id
],

['name' => 'Rincón de las Animas',
'city_id' => DB::table('cities')->where('name','Xalapa')->first()->id
],

['name' => 'Loma Alta',
'city_id' => DB::table('cities')->where('name','Xalapa')->first()->id
],

['name' => 'Centro Sct Veracruz',
'city_id' => DB::table('cities')->where('name','Xalapa')->first()->id
],

['name' => 'Linda Vista',
'city_id' => DB::table('cities')->where('name','Xalapa')->first()->id
],

['name' => 'Torre Animas',
'city_id' => DB::table('cities')->where('name','Xalapa')->first()->id
],

['name' => 'Rubí Ánimas',
'city_id' => DB::table('cities')->where('name','Xalapa')->first()->id
],

['name' => 'Ánimas Marqueza',
'city_id' => DB::table('cities')->where('name','Xalapa')->first()->id
],

['name' => 'Olmos de Las Ánimas',
'city_id' => DB::table('cities')->where('name','Xalapa')->first()->id
],

['name' => 'Real del Bosque',
'city_id' => DB::table('cities')->where('name','Xalapa')->first()->id
],

['name' => 'Residencial Monte Magno',
'city_id' => DB::table('cities')->where('name','Xalapa')->first()->id
],

['name' => 'Industrial Animas',
'city_id' => DB::table('cities')->where('name','Xalapa')->first()->id
],

['name' => 'Las Cumbres',
'city_id' => DB::table('cities')->where('name','Xalapa')->first()->id
],

['name' => 'El Olmo',
'city_id' => DB::table('cities')->where('name','Xalapa')->first()->id
],

['name' => 'Valle Real',
'city_id' => DB::table('cities')->where('name','Xalapa')->first()->id
],

['name' => 'Balcones de Jalapa',
'city_id' => DB::table('cities')->where('name','Xalapa')->first()->id
],

['name' => 'Xaltic',
'city_id' => DB::table('cities')->where('name','Xalapa')->first()->id
],

['name' => 'La Giralda',
'city_id' => DB::table('cities')->where('name','Xalapa')->first()->id
],

['name' => 'Agrícola',
'city_id' => DB::table('cities')->where('name','Xalapa')->first()->id
],

['name' => 'Esmeralda Animas',
'city_id' => DB::table('cities')->where('name','Xalapa')->first()->id
],

['name' => 'Cañada de Las Ánimas',
'city_id' => DB::table('cities')->where('name','Xalapa')->first()->id
],

['name' => 'Anáhuac',
'city_id' => DB::table('cities')->where('name','Xalapa')->first()->id
],

['name' => 'Tulipanes de Las Ánimas',
'city_id' => DB::table('cities')->where('name','Xalapa')->first()->id
],

['name' => 'Jardines de Las Ánimas',
'city_id' => DB::table('cities')->where('name','Xalapa')->first()->id
],

['name' => 'Pedregal de las Animas',
'city_id' => DB::table('cities')->where('name','Xalapa')->first()->id
],

['name' => 'Popular las Animas',
'city_id' => DB::table('cities')->where('name','Xalapa')->first()->id
],

['name' => 'Dos Vistas Ánimas',
'city_id' => DB::table('cities')->where('name','Xalapa')->first()->id
],

['name' => 'Acueducto Animas',
'city_id' => DB::table('cities')->where('name','Xalapa')->first()->id
],

['name' => 'Loma Esmeralda',
'city_id' => DB::table('cities')->where('name','Xalapa')->first()->id
],

['name' => 'Loma de Oro',
'city_id' => DB::table('cities')->where('name','Xalapa')->first()->id
],

['name' => 'Torre Unión',
'city_id' => DB::table('cities')->where('name','Xalapa')->first()->id
],

['name' => 'Vista Hermosa',
'city_id' => DB::table('cities')->where('name','Xalapa')->first()->id
],

['name' => 'Linda Vista Ánimas',
'city_id' => DB::table('cities')->where('name','Xalapa')->first()->id
],

['name' => 'Pastoresa',
'city_id' => DB::table('cities')->where('name','Xalapa')->first()->id
],

['name' => 'Nueva Herradura',
'city_id' => DB::table('cities')->where('name','Xalapa')->first()->id
],

['name' => 'Residencial del Lago',
'city_id' => DB::table('cities')->where('name','Xalapa')->first()->id
],

['name' => 'Villa Animas',
'city_id' => DB::table('cities')->where('name','Xalapa')->first()->id
],

['name' => 'Campo Nuevo',
'city_id' => DB::table('cities')->where('name','Xalapa')->first()->id
],

['name' => 'El Palenque',
'city_id' => DB::table('cities')->where('name','Xalapa')->first()->id
],

['name' => 'La Haciendita',
'city_id' => DB::table('cities')->where('name','Xalapa')->first()->id
],

['name' => 'Chiltoyac',
'city_id' => DB::table('cities')->where('name','Xalapa')->first()->id
],

['name' => 'Paso de San Juan',
'city_id' => DB::table('cities')->where('name','Xalapa')->first()->id
],

['name' => 'Tronconal',
'city_id' => DB::table('cities')->where('name','Xalapa')->first()->id
],

['name' => 'El Potrerillo (El Mirador)',
'city_id' => DB::table('cities')->where('name','Xalapa')->first()->id
],

['name' => 'Rancho Efraín Sosa',
'city_id' => DB::table('cities')->where('name','Xalapa')->first()->id
],

['name' => 'Rancho el Dólar',
'city_id' => DB::table('cities')->where('name','Xalapa')->first()->id
],

['name' => 'Colonia Ignacio Zaragoza',
'city_id' => DB::table('cities')->where('name','Xalapa')->first()->id
],

['name' => 'Loma Bonita',
'city_id' => DB::table('cities')->where('name','Xalapa')->first()->id
],

['name' => 'Colonia Seis de Enero',
'city_id' => DB::table('cities')->where('name','Xalapa')->first()->id
],

['name' => 'El Nacimiento',
'city_id' => DB::table('cities')->where('name','Xalapa')->first()->id
],

['name' => 'Navidad',
'city_id' => DB::table('cities')->where('name','Xalapa')->first()->id
],

['name' => 'San Antonio Paso del Toro',
'city_id' => DB::table('cities')->where('name','Xalapa')->first()->id
],

['name' => 'Rancho Tres Potrillos (El Infiernillo)',
'city_id' => DB::table('cities')->where('name','Xalapa')->first()->id
],

['name' => 'Rancho el Embrujo',
'city_id' => DB::table('cities')->where('name','Xalapa')->first()->id
],

['name' => 'Vaquería (Pailas)',
'city_id' => DB::table('cities')->where('name','Xalapa')->first()->id
],

['name' => 'Castillo Chico',
'city_id' => DB::table('cities')->where('name','Xalapa')->first()->id
],

['name' => 'El Plan',
'city_id' => DB::table('cities')->where('name','Xalapa')->first()->id
],

['name' => 'Las Cruces',
'city_id' => DB::table('cities')->where('name','Xalapa')->first()->id
],

['name' => 'Ojo Zarco',
'city_id' => DB::table('cities')->where('name','Xalapa')->first()->id
],

['name' => 'La Troja',
'city_id' => DB::table('cities')->where('name','Xalapa')->first()->id
],

['name' => 'Rancho la Laguna',
'city_id' => DB::table('cities')->where('name','Xalapa')->first()->id
],

['name' => 'Silvestre Pérez Santamaría',
'city_id' => DB::table('cities')->where('name','Xalapa')->first()->id
],

['name' => 'Cañadas',
'city_id' => DB::table('cities')->where('name','Xalapa')->first()->id
],

['name' => 'El Cairo',
'city_id' => DB::table('cities')->where('name','Xalapa')->first()->id
],

['name' => 'El Tabachín',
'city_id' => DB::table('cities')->where('name','Xalapa')->first()->id
],

['name' => 'Fernando Gutiérrez Barrios',
'city_id' => DB::table('cities')->where('name','Xalapa')->first()->id
],

['name' => 'Rancho la Palma',
'city_id' => DB::table('cities')->where('name','Xalapa')->first()->id
],

['name' => 'Rancho Alegre',
'city_id' => DB::table('cities')->where('name','Xalapa')->first()->id
],

['name' => 'Gobernadores',
'city_id' => DB::table('cities')->where('name','Xalapa')->first()->id
],

['name' => 'Mártires de Chicago',
'city_id' => DB::table('cities')->where('name','Xalapa')->first()->id
],

['name' => 'Ejido Benito Juárez',
'city_id' => DB::table('cities')->where('name','Xalapa')->first()->id
],

['name' => 'Ejido Emiliano Zapata',
'city_id' => DB::table('cities')->where('name','Xalapa')->first()->id
],

['name' => 'Las Lajas de Pacho',
'city_id' => DB::table('cities')->where('name','Xalapa')->first()->id
],

['name' => 'Xoloxtla',
'city_id' => DB::table('cities')->where('name','Xalapa')->first()->id
],

['name' => 'Francisca Ruán',
'city_id' => DB::table('cities')->where('name','Xalapa')->first()->id
],

['name' => 'La Cañada',
'city_id' => DB::table('cities')->where('name','Xalapa')->first()->id
],

['name' => 'Olivia Guevara Herrera',
'city_id' => DB::table('cities')->where('name','Xalapa')->first()->id
],

['name' => 'Otilpan',
'city_id' => DB::table('cities')->where('name','Tlalnelhuayocan')->first()->id
],

['name' => 'Tlalnelhuayocan',
'city_id' => DB::table('cities')->where('name','Tlalnelhuayocan')->first()->id
],

['name' => '20 de Noviembre',
'city_id' => DB::table('cities')->where('name','Tlalnelhuayocan')->first()->id
],

['name' => 'San Antonio',
'city_id' => DB::table('cities')->where('name','Tlalnelhuayocan')->first()->id
],

['name' => 'Guadalupe Victoria',
'city_id' => DB::table('cities')->where('name','Tlalnelhuayocan')->first()->id
],

['name' => 'Ejidal',
'city_id' => DB::table('cities')->where('name','Tlalnelhuayocan')->first()->id
],

['name' => 'Santa Cecilia',
'city_id' => DB::table('cities')->where('name','Tlalnelhuayocan')->first()->id
],

['name' => 'Zamora',
'city_id' => DB::table('cities')->where('name','Tlalnelhuayocan')->first()->id
],

['name' => 'La Frontera',
'city_id' => DB::table('cities')->where('name','Tlalnelhuayocan')->first()->id
],

['name' => 'Naranjillos',
'city_id' => DB::table('cities')->where('name','Tlalnelhuayocan')->first()->id
],

['name' => 'Potrero del Bordo (Santa María)',
'city_id' => DB::table('cities')->where('name','Tlalnelhuayocan')->first()->id
],

['name' => 'Cañada Larga',
'city_id' => DB::table('cities')->where('name','Tlalnelhuayocan')->first()->id
],

['name' => 'Rancho Viejo',
'city_id' => DB::table('cities')->where('name','Tlalnelhuayocan')->first()->id
],

['name' => 'Tejocotal',
'city_id' => DB::table('cities')->where('name','Tlalnelhuayocan')->first()->id
],

['name' => 'Xico',
'city_id' => DB::table('cities')->where('name','Xico')->first()->id
],

['name' => 'El Haya',
'city_id' => DB::table('cities')->where('name','Xico')->first()->id
],

['name' => 'Emiliano Zapata',
'city_id' => DB::table('cities')->where('name','Xico')->first()->id
],

['name' => 'Úrsulo Galvan',
'city_id' => DB::table('cities')->where('name','Xico')->first()->id
],

['name' => 'Coxmatlan',
'city_id' => DB::table('cities')->where('name','Xico')->first()->id
],

['name' => 'Tembladeras',
'city_id' => DB::table('cities')->where('name','Xico')->first()->id
],

['name' => 'Micoxtla',
'city_id' => DB::table('cities')->where('name','Xico')->first()->id
],

['name' => 'La Laguna',
'city_id' => DB::table('cities')->where('name','Xico')->first()->id
],

['name' => 'Cruz Blanca',
'city_id' => DB::table('cities')->where('name','Xico')->first()->id
],

['name' => 'Ticuahutipan',
'city_id' => DB::table('cities')->where('name','Xico')->first()->id
],

['name' => 'Tonalaco',
'city_id' => DB::table('cities')->where('name','Xico')->first()->id
],

['name' => 'Tecoatl',
'city_id' => DB::table('cities')->where('name','Xico')->first()->id
],

['name' => 'Rafael Hernández Ochoa',
'city_id' => DB::table('cities')->where('name','Xico')->first()->id
],

['name' => 'San Marcos de León (San Marcos)',
'city_id' => DB::table('cities')->where('name','Xico')->first()->id
],

['name' => 'Bernardo Zayago',
'city_id' => DB::table('cities')->where('name','Xico')->first()->id
],

['name' => 'Monte Grande',
'city_id' => DB::table('cities')->where('name','Xico')->first()->id
],

['name' => 'Tlacuilolan',
'city_id' => DB::table('cities')->where('name','Xico')->first()->id
],

['name' => 'Ixhuacan de los Reyes',
'city_id' => DB::table('cities')->where('name','Ixhuacán de los Reyes')->first()->id
],

['name' => 'Caltzontepec',
'city_id' => DB::table('cities')->where('name','Ixhuacán de los Reyes')->first()->id
],

['name' => 'Tlalchy',
'city_id' => DB::table('cities')->where('name','Ixhuacán de los Reyes')->first()->id
],

['name' => 'Xixilacatla',
'city_id' => DB::table('cities')->where('name','Ixhuacán de los Reyes')->first()->id
],

['name' => 'El Arenal',
'city_id' => DB::table('cities')->where('name','Ixhuacán de los Reyes')->first()->id
],

['name' => 'Amatitla',
'city_id' => DB::table('cities')->where('name','Ixhuacán de los Reyes')->first()->id
],

['name' => 'Barranca Grande',
'city_id' => DB::table('cities')->where('name','Ixhuacán de los Reyes')->first()->id
],

['name' => 'Barranca Nueva',
'city_id' => DB::table('cities')->where('name','Ixhuacán de los Reyes')->first()->id
],

['name' => 'Coyopolan',
'city_id' => DB::table('cities')->where('name','Ixhuacán de los Reyes')->first()->id
],

['name' => 'San Antonio Xoquitla',
'city_id' => DB::table('cities')->where('name','Ayahualulco')->first()->id
],

['name' => 'Ayahualulco',
'city_id' => DB::table('cities')->where('name','Ayahualulco')->first()->id
],

['name' => 'Chocotepec',
'city_id' => DB::table('cities')->where('name','Ayahualulco')->first()->id
],

['name' => 'Chololoyan',
'city_id' => DB::table('cities')->where('name','Ayahualulco')->first()->id
],

['name' => 'El Triunfo',
'city_id' => DB::table('cities')->where('name','Ayahualulco')->first()->id
],

['name' => 'La Toma O Hidalgo',
'city_id' => DB::table('cities')->where('name','Ayahualulco')->first()->id
],

['name' => 'Los Altos',
'city_id' => DB::table('cities')->where('name','Ayahualulco')->first()->id
],

['name' => 'Tlalcolteno',
'city_id' => DB::table('cities')->where('name','Ayahualulco')->first()->id
],

['name' => 'Ocotepec',
'city_id' => DB::table('cities')->where('name','Ayahualulco')->first()->id
],

['name' => 'Campestre',
'city_id' => DB::table('cities')->where('name','Perote')->first()->id
],

['name' => 'Los Pescados',
'city_id' => DB::table('cities')->where('name','Perote')->first()->id
],

['name' => 'Perote',
'city_id' => DB::table('cities')->where('name','Perote')->first()->id
],

['name' => 'Fortaleza de San Carlos',
'city_id' => DB::table('cities')->where('name','Perote')->first()->id
],

['name' => 'Heroico Colegio Militar',
'city_id' => DB::table('cities')->where('name','Perote')->first()->id
],

['name' => 'Donaldo Colosio',
'city_id' => DB::table('cities')->where('name','Perote')->first()->id
],

['name' => 'Echeverría',
'city_id' => DB::table('cities')->where('name','Perote')->first()->id
],

['name' => 'Héroe de Nacozari',
'city_id' => DB::table('cities')->where('name','Perote')->first()->id
],

['name' => 'Landa',
'city_id' => DB::table('cities')->where('name','Perote')->first()->id
],

['name' => 'Niños Héroes',
'city_id' => DB::table('cities')->where('name','Perote')->first()->id
],

['name' => 'Amado Nervo',
'city_id' => DB::table('cities')->where('name','Perote')->first()->id
],

['name' => 'El Calvario',
'city_id' => DB::table('cities')->where('name','Perote')->first()->id
],

['name' => 'El Conejo',
'city_id' => DB::table('cities')->where('name','Perote')->first()->id
],

['name' => 'Francisco Villa',
'city_id' => DB::table('cities')->where('name','Perote')->first()->id
],

['name' => 'Teresa Morales',
'city_id' => DB::table('cities')->where('name','Perote')->first()->id
],

['name' => '20 de Noviembre',
'city_id' => DB::table('cities')->where('name','Perote')->first()->id
],

['name' => 'Veracruz',
'city_id' => DB::table('cities')->where('name','Perote')->first()->id
],

['name' => 'Vidal Diaz Muñoz',
'city_id' => DB::table('cities')->where('name','Perote')->first()->id
],

['name' => 'Viveros',
'city_id' => DB::table('cities')->where('name','Perote')->first()->id
],

['name' => 'Los Molinos (San José)',
'city_id' => DB::table('cities')->where('name','Perote')->first()->id
],

['name' => 'El Escobilla',
'city_id' => DB::table('cities')->where('name','Perote')->first()->id
],

['name' => 'Justo Sierra',
'city_id' => DB::table('cities')->where('name','Perote')->first()->id
],

['name' => 'Rancho Nuevo',
'city_id' => DB::table('cities')->where('name','Perote')->first()->id
],

['name' => 'Sabinal',
'city_id' => DB::table('cities')->where('name','Perote')->first()->id
],

['name' => 'El Pedregal',
'city_id' => DB::table('cities')->where('name','Perote')->first()->id
],

['name' => 'Del Bosque',
'city_id' => DB::table('cities')->where('name','Perote')->first()->id
],

['name' => 'Vicente Guerrero',
'city_id' => DB::table('cities')->where('name','Perote')->first()->id
],

['name' => 'Azteca',
'city_id' => DB::table('cities')->where('name','Perote')->first()->id
],

['name' => 'Del Valle',
'city_id' => DB::table('cities')->where('name','Perote')->first()->id
],

['name' => 'Sierra de Agua',
'city_id' => DB::table('cities')->where('name','Perote')->first()->id
],

['name' => 'San Antonio Limón (Totalco)',
'city_id' => DB::table('cities')->where('name','Perote')->first()->id
],

['name' => 'Guadalupe Victoria',
'city_id' => DB::table('cities')->where('name','Perote')->first()->id
],

['name' => 'San Antonio Tenextepec',
'city_id' => DB::table('cities')->where('name','Perote')->first()->id
],

['name' => 'La Gloria',
'city_id' => DB::table('cities')->where('name','Perote')->first()->id
],

['name' => 'Banderilla Centro',
'city_id' => DB::table('cities')->where('name','Banderilla')->first()->id
],

['name' => 'Unidad y Trabajo',
'city_id' => DB::table('cities')->where('name','Banderilla')->first()->id
],

['name' => 'Temaxcalapa',
'city_id' => DB::table('cities')->where('name','Banderilla')->first()->id
],

['name' => 'Ocotita',
'city_id' => DB::table('cities')->where('name','Banderilla')->first()->id
],

['name' => 'Rafael Murillo Vidal',
'city_id' => DB::table('cities')->where('name','Banderilla')->first()->id
],

['name' => 'Villa Montaña',
'city_id' => DB::table('cities')->where('name','Banderilla')->first()->id
],

['name' => 'Rancho Viejo',
'city_id' => DB::table('cities')->where('name','Banderilla')->first()->id
],

['name' => 'Lomas de Sedeño',
'city_id' => DB::table('cities')->where('name','Banderilla')->first()->id
],

['name' => 'Roberto Smith',
'city_id' => DB::table('cities')->where('name','Banderilla')->first()->id
],

['name' => 'Salvador Diaz Mirón',
'city_id' => DB::table('cities')->where('name','Banderilla')->first()->id
],

['name' => 'La Martinica',
'city_id' => DB::table('cities')->where('name','Banderilla')->first()->id
],

['name' => 'El Capulín',
'city_id' => DB::table('cities')->where('name','Banderilla')->first()->id
],

['name' => '3 de Mayo',
'city_id' => DB::table('cities')->where('name','Banderilla')->first()->id
],

['name' => 'El Pedregal',
'city_id' => DB::table('cities')->where('name','Banderilla')->first()->id
],

['name' => 'Maguellitos',
'city_id' => DB::table('cities')->where('name','Banderilla')->first()->id
],

['name' => 'Piletas',
'city_id' => DB::table('cities')->where('name','Rafael Lucio')->first()->id
],

['name' => 'Rafael Lucio',
'city_id' => DB::table('cities')->where('name','Rafael Lucio')->first()->id
],

['name' => 'Acajete',
'city_id' => DB::table('cities')->where('name','Acajete')->first()->id
],

['name' => 'Mazatepec',
'city_id' => DB::table('cities')->where('name','Acajete')->first()->id
],

['name' => 'Puentecillas',
'city_id' => DB::table('cities')->where('name','Acajete')->first()->id
],

['name' => 'La Joya',
'city_id' => DB::table('cities')->where('name','Acajete')->first()->id
],

['name' => 'Las Vigas de Ramirez',
'city_id' => DB::table('cities')->where('name','Las Vigas de Ramírez')->first()->id
],

['name' => 'Manzanillo',
'city_id' => DB::table('cities')->where('name','Las Vigas de Ramírez')->first()->id
],

['name' => 'El Arenal',
'city_id' => DB::table('cities')->where('name','Las Vigas de Ramírez')->first()->id
],

['name' => 'La Alcantarilla',
'city_id' => DB::table('cities')->where('name','Las Vigas de Ramírez')->first()->id
],

['name' => 'San Isidro',
'city_id' => DB::table('cities')->where('name','Las Vigas de Ramírez')->first()->id
],

['name' => 'Tejocotal',
'city_id' => DB::table('cities')->where('name','Las Vigas de Ramírez')->first()->id
],

['name' => 'Encino Gacho',
'city_id' => DB::table('cities')->where('name','Las Vigas de Ramírez')->first()->id
],

['name' => 'Toxtlacoaya',
'city_id' => DB::table('cities')->where('name','Las Vigas de Ramírez')->first()->id
],

['name' => 'Agua Suelas',
'city_id' => DB::table('cities')->where('name','Las Vigas de Ramírez')->first()->id
],

['name' => 'Cerro de Juárez',
'city_id' => DB::table('cities')->where('name','Las Vigas de Ramírez')->first()->id
],

['name' => 'El Virjam',
'city_id' => DB::table('cities')->where('name','Las Vigas de Ramírez')->first()->id
],

['name' => 'Loma de Tablas',
'city_id' => DB::table('cities')->where('name','Las Vigas de Ramírez')->first()->id
],

['name' => 'Tejerías',
'city_id' => DB::table('cities')->where('name','Las Vigas de Ramírez')->first()->id
],

['name' => 'Úrsulo Galvan',
'city_id' => DB::table('cities')->where('name','Las Vigas de Ramírez')->first()->id
],

['name' => 'Casa Blanca',
'city_id' => DB::table('cities')->where('name','Las Vigas de Ramírez')->first()->id
],

['name' => 'El Llanillo',
'city_id' => DB::table('cities')->where('name','Las Vigas de Ramírez')->first()->id
],

['name' => 'El Paisano',
'city_id' => DB::table('cities')->where('name','Las Vigas de Ramírez')->first()->id
],

['name' => 'Barrio de San Miguel',
'city_id' => DB::table('cities')->where('name','Las Vigas de Ramírez')->first()->id
],

['name' => 'Tepetates',
'city_id' => DB::table('cities')->where('name','Las Vigas de Ramírez')->first()->id
],

['name' => 'Calaveras',
'city_id' => DB::table('cities')->where('name','Las Vigas de Ramírez')->first()->id
],

['name' => 'Jonotal',
'city_id' => DB::table('cities')->where('name','Las Vigas de Ramírez')->first()->id
],

['name' => 'Santa Catalina',
'city_id' => DB::table('cities')->where('name','Las Vigas de Ramírez')->first()->id
],

['name' => 'Libertad',
'city_id' => DB::table('cities')->where('name','Villa Aldama')->first()->id
],

['name' => 'Villa Aldama',
'city_id' => DB::table('cities')->where('name','Villa Aldama')->first()->id
],

['name' => 'Buena Vista',
'city_id' => DB::table('cities')->where('name','Villa Aldama')->first()->id
],

['name' => 'Cerro de Leon',
'city_id' => DB::table('cities')->where('name','Villa Aldama')->first()->id
],

['name' => 'Cruz Blanca',
'city_id' => DB::table('cities')->where('name','Villa Aldama')->first()->id
],

['name' => 'Etlantepec',
'city_id' => DB::table('cities')->where('name','Tlacolulan')->first()->id
],

['name' => 'Cebollana',
'city_id' => DB::table('cities')->where('name','Tlacolulan')->first()->id
],

['name' => 'Misantla El Viejo',
'city_id' => DB::table('cities')->where('name','Tlacolulan')->first()->id
],

['name' => 'Tlacolulan',
'city_id' => DB::table('cities')->where('name','Tlacolulan')->first()->id
],

['name' => 'El Fresno',
'city_id' => DB::table('cities')->where('name','Tlacolulan')->first()->id
],

['name' => 'Treinta de Abril',
'city_id' => DB::table('cities')->where('name','Tlacolulan')->first()->id
],

['name' => 'Huichila',
'city_id' => DB::table('cities')->where('name','Tlacolulan')->first()->id
],

['name' => 'Atalpa Chico',
'city_id' => DB::table('cities')->where('name','Tlacolulan')->first()->id
],

['name' => 'Cumbres de Cebollana',
'city_id' => DB::table('cities')->where('name','Tlacolulan')->first()->id
],

['name' => 'Omeapa',
'city_id' => DB::table('cities')->where('name','Tlacolulan')->first()->id
],

['name' => 'Atalpa Grande',
'city_id' => DB::table('cities')->where('name','Tlacolulan')->first()->id
],

['name' => 'Monte Real',
'city_id' => DB::table('cities')->where('name','Tonayán')->first()->id
],

['name' => 'Puentezuelos',
'city_id' => DB::table('cities')->where('name','Tonayán')->first()->id
],

['name' => 'Tonayan',
'city_id' => DB::table('cities')->where('name','Tonayán')->first()->id
],

['name' => 'Zacatal',
'city_id' => DB::table('cities')->where('name','Tonayán')->first()->id
],

['name' => 'San Antonio',
'city_id' => DB::table('cities')->where('name','Tonayán')->first()->id
],

['name' => 'Coacoatzintla',
'city_id' => DB::table('cities')->where('name','Coacoatzintla')->first()->id
],

['name' => 'Lomas del Pedregal',
'city_id' => DB::table('cities')->where('name','Coacoatzintla')->first()->id
],

['name' => '5 de mayo',
'city_id' => DB::table('cities')->where('name','Coacoatzintla')->first()->id
],

['name' => 'Los Planes (Cerro Gordo)',
'city_id' => DB::table('cities')->where('name','Coacoatzintla')->first()->id
],

['name' => 'Paxtepec',
'city_id' => DB::table('cities')->where('name','Coacoatzintla')->first()->id
],

['name' => 'Tlachinola',
'city_id' => DB::table('cities')->where('name','Coacoatzintla')->first()->id
],

['name' => 'Pueblo Viejo',
'city_id' => DB::table('cities')->where('name','Coacoatzintla')->first()->id
],

['name' => 'Chapultepec',
'city_id' => DB::table('cities')->where('name','Coacoatzintla')->first()->id
],

['name' => 'Rincón de Chapultepec',
'city_id' => DB::table('cities')->where('name','Coacoatzintla')->first()->id
],

['name' => 'Las Coles',
'city_id' => DB::table('cities')->where('name','Coacoatzintla')->first()->id
],

['name' => 'La Ventana',
'city_id' => DB::table('cities')->where('name','Coacoatzintla')->first()->id
],

['name' => 'El Aguacate',
'city_id' => DB::table('cities')->where('name','Coacoatzintla')->first()->id
],

['name' => 'Jilotepec',
'city_id' => DB::table('cities')->where('name','Jilotepec')->first()->id
],

['name' => 'Paso de San Juan',
'city_id' => DB::table('cities')->where('name','Jilotepec')->first()->id
],

['name' => 'San Isidro',
'city_id' => DB::table('cities')->where('name','Jilotepec')->first()->id
],

['name' => 'La Concepción',
'city_id' => DB::table('cities')->where('name','Jilotepec')->first()->id
],

['name' => 'Vista Hermosa Primera Manzana',
'city_id' => DB::table('cities')->where('name','Jilotepec')->first()->id
],

['name' => 'Las Lomas',
'city_id' => DB::table('cities')->where('name','Jilotepec')->first()->id
],

['name' => 'San Martín',
'city_id' => DB::table('cities')->where('name','Jilotepec')->first()->id
],

['name' => 'El Pueblito (Garbanzal)',
'city_id' => DB::table('cities')->where('name','Jilotepec')->first()->id
],

['name' => 'Piedra de Agua',
'city_id' => DB::table('cities')->where('name','Jilotepec')->first()->id
],

['name' => 'Cerro de la Gallina',
'city_id' => DB::table('cities')->where('name','Jilotepec')->first()->id
],

['name' => 'Linderos',
'city_id' => DB::table('cities')->where('name','Jilotepec')->first()->id
],

['name' => 'Los Equimites',
'city_id' => DB::table('cities')->where('name','Jilotepec')->first()->id
],

['name' => 'El Esquilón',
'city_id' => DB::table('cities')->where('name','Jilotepec')->first()->id
],

['name' => 'La Virgen',
'city_id' => DB::table('cities')->where('name','Jilotepec')->first()->id
],

['name' => 'Almolonga',
'city_id' => DB::table('cities')->where('name','Naolinco')->first()->id
],

['name' => 'Las Aldas',
'city_id' => DB::table('cities')->where('name','Naolinco')->first()->id
],

['name' => 'Naolinco de Victoria',
'city_id' => DB::table('cities')->where('name','Naolinco')->first()->id
],

['name' => 'San Marcos Atexquilapan',
'city_id' => DB::table('cities')->where('name','Naolinco')->first()->id
],

['name' => 'San Miguel Aguazuelos',
'city_id' => DB::table('cities')->where('name','Naolinco')->first()->id
],

['name' => 'San Pablo Coapan',
'city_id' => DB::table('cities')->where('name','Naolinco')->first()->id
],

['name' => 'Antonio Luna Andrade',
'city_id' => DB::table('cities')->where('name','Naolinco')->first()->id
],

['name' => 'Ciudad Cuatro Soles',
'city_id' => DB::table('cities')->where('name','Naolinco')->first()->id
],

['name' => 'El Copete',
'city_id' => DB::table('cities')->where('name','Naolinco')->first()->id
],

['name' => 'Palo Blanco',
'city_id' => DB::table('cities')->where('name','Naolinco')->first()->id
],

['name' => 'El Cafetal',
'city_id' => DB::table('cities')->where('name','Naolinco')->first()->id
],

['name' => 'El Espinal',
'city_id' => DB::table('cities')->where('name','Naolinco')->first()->id
],

['name' => 'Miahuatlán Centro',
'city_id' => DB::table('cities')->where('name','Miahuatlán')->first()->id
],

['name' => 'Barrio Santa Inés',
'city_id' => DB::table('cities')->where('name','Miahuatlán')->first()->id
],

['name' => 'Pie de la Cuesta',
'city_id' => DB::table('cities')->where('name','Miahuatlán')->first()->id
],

['name' => 'Mata Obscura',
'city_id' => DB::table('cities')->where('name','Miahuatlán')->first()->id
],

['name' => 'Bella Unión',
'city_id' => DB::table('cities')->where('name','Miahuatlán')->first()->id
],

['name' => 'Rancho Alegre (Los Méndoza)',
'city_id' => DB::table('cities')->where('name','Miahuatlán')->first()->id
],

['name' => 'Loma Alta',
'city_id' => DB::table('cities')->where('name','Miahuatlán')->first()->id
],

['name' => 'Jonotal',
'city_id' => DB::table('cities')->where('name','Miahuatlán')->first()->id
],

['name' => 'Campestre de Jonotal',
'city_id' => DB::table('cities')->where('name','Miahuatlán')->first()->id
],

['name' => 'Yerbabuena',
'city_id' => DB::table('cities')->where('name','Miahuatlán')->first()->id
],

['name' => 'Carolino Anaya',
'city_id' => DB::table('cities')->where('name','Miahuatlán')->first()->id
],

['name' => 'El Mirador',
'city_id' => DB::table('cities')->where('name','Miahuatlán')->first()->id
],

['name' => 'Dos Jacales',
'city_id' => DB::table('cities')->where('name','Miahuatlán')->first()->id
],

['name' => 'Bartolo García',
'city_id' => DB::table('cities')->where('name','Miahuatlán')->first()->id
],

['name' => 'Acatlán',
'city_id' => DB::table('cities')->where('name','Acatlán')->first()->id
],

['name' => 'Tepetlan',
'city_id' => DB::table('cities')->where('name','Tepetlán')->first()->id
],

['name' => 'Vicente Guerrero (Tepetates)',
'city_id' => DB::table('cities')->where('name','Tepetlán')->first()->id
],

['name' => 'Enríquez',
'city_id' => DB::table('cities')->where('name','Tepetlán')->first()->id
],

['name' => 'Totoyac',
'city_id' => DB::table('cities')->where('name','Tepetlán')->first()->id
],

['name' => 'Alto de Tío Diego',
'city_id' => DB::table('cities')->where('name','Tepetlán')->first()->id
],

['name' => 'Juchique de Ferrer',
'city_id' => DB::table('cities')->where('name','Juchique de Ferrer')->first()->id
],

['name' => 'Laguna de Farfán',
'city_id' => DB::table('cities')->where('name','Juchique de Ferrer')->first()->id
],

['name' => 'La Esperanza',
'city_id' => DB::table('cities')->where('name','Juchique de Ferrer')->first()->id
],

['name' => 'La Aurora',
'city_id' => DB::table('cities')->where('name','Juchique de Ferrer')->first()->id
],

['name' => 'Las Pailas',
'city_id' => DB::table('cities')->where('name','Juchique de Ferrer')->first()->id
],

['name' => 'Puente Colgante',
'city_id' => DB::table('cities')->where('name','Juchique de Ferrer')->first()->id
],

['name' => 'Xihuitlan',
'city_id' => DB::table('cities')->where('name','Juchique de Ferrer')->first()->id
],

['name' => 'El Porvenir',
'city_id' => DB::table('cities')->where('name','Juchique de Ferrer')->first()->id
],

['name' => 'La Reforma',
'city_id' => DB::table('cities')->where('name','Juchique de Ferrer')->first()->id
],

['name' => 'El Mango',
'city_id' => DB::table('cities')->where('name','Juchique de Ferrer')->first()->id
],

['name' => 'Colombia',
'city_id' => DB::table('cities')->where('name','Juchique de Ferrer')->first()->id
],

['name' => 'El Carrizal',
'city_id' => DB::table('cities')->where('name','Juchique de Ferrer')->first()->id
],

['name' => 'San Alfonso',
'city_id' => DB::table('cities')->where('name','Juchique de Ferrer')->first()->id
],

['name' => 'El Calabozo',
'city_id' => DB::table('cities')->where('name','Juchique de Ferrer')->first()->id
],

['name' => 'El Chaparral',
'city_id' => DB::table('cities')->where('name','Juchique de Ferrer')->first()->id
],

['name' => 'Plan de las Hayas',
'city_id' => DB::table('cities')->where('name','Juchique de Ferrer')->first()->id
],

['name' => 'Las Cruces',
'city_id' => DB::table('cities')->where('name','Juchique de Ferrer')->first()->id
],

['name' => 'La Gloria',
'city_id' => DB::table('cities')->where('name','Juchique de Ferrer')->first()->id
],

['name' => 'El Arenal',
'city_id' => DB::table('cities')->where('name','Juchique de Ferrer')->first()->id
],

['name' => 'La Mesa de Farfán',
'city_id' => DB::table('cities')->where('name','Juchique de Ferrer')->first()->id
],

['name' => 'Plan de La Flor',
'city_id' => DB::table('cities')->where('name','Juchique de Ferrer')->first()->id
],

['name' => 'Alto Lucero',
'city_id' => DB::table('cities')->where('name','Alto Lucero de Gutiérrez Barrios')->first()->id
],

['name' => 'Xomotla',
'city_id' => DB::table('cities')->where('name','Alto Lucero de Gutiérrez Barrios')->first()->id
],

['name' => 'Las Casillas',
'city_id' => DB::table('cities')->where('name','Alto Lucero de Gutiérrez Barrios')->first()->id
],

['name' => 'La Reforma',
'city_id' => DB::table('cities')->where('name','Alto Lucero de Gutiérrez Barrios')->first()->id
],

['name' => 'Cerrillos de Díaz',
'city_id' => DB::table('cities')->where('name','Alto Lucero de Gutiérrez Barrios')->first()->id
],

['name' => 'Blanca Espuma',
'city_id' => DB::table('cities')->where('name','Alto Lucero de Gutiérrez Barrios')->first()->id
],

['name' => 'Providencia',
'city_id' => DB::table('cities')->where('name','Alto Lucero de Gutiérrez Barrios')->first()->id
],

['name' => 'Paso del Anono',
'city_id' => DB::table('cities')->where('name','Alto Lucero de Gutiérrez Barrios')->first()->id
],

['name' => 'Mesa de Guadalupe',
'city_id' => DB::table('cities')->where('name','Alto Lucero de Gutiérrez Barrios')->first()->id
],

['name' => 'Santa Ana',
'city_id' => DB::table('cities')->where('name','Alto Lucero de Gutiérrez Barrios')->first()->id
],

['name' => 'El Abra',
'city_id' => DB::table('cities')->where('name','Alto Lucero de Gutiérrez Barrios')->first()->id
],

['name' => 'Los Atlixcos',
'city_id' => DB::table('cities')->where('name','Alto Lucero de Gutiérrez Barrios')->first()->id
],

['name' => 'Monte Verde Chivería',
'city_id' => DB::table('cities')->where('name','Alto Lucero de Gutiérrez Barrios')->first()->id
],

['name' => 'Villa Candelaria',
'city_id' => DB::table('cities')->where('name','Alto Lucero de Gutiérrez Barrios')->first()->id
],

['name' => 'Brazo Fuerte',
'city_id' => DB::table('cities')->where('name','Alto Lucero de Gutiérrez Barrios')->first()->id
],

['name' => 'Monte de Oro',
'city_id' => DB::table('cities')->where('name','Alto Lucero de Gutiérrez Barrios')->first()->id
],

['name' => 'Laguna Verde (Campamento de Supervisores)',
'city_id' => DB::table('cities')->where('name','Alto Lucero de Gutiérrez Barrios')->first()->id
],

['name' => 'Palma Sola',
'city_id' => DB::table('cities')->where('name','Alto Lucero de Gutiérrez Barrios')->first()->id
],

['name' => 'Rancho Nuevo',
'city_id' => DB::table('cities')->where('name','Alto Lucero de Gutiérrez Barrios')->first()->id
],

['name' => 'El Cafetal',
'city_id' => DB::table('cities')->where('name','Alto Lucero de Gutiérrez Barrios')->first()->id
],

['name' => 'Actopan Centro',
'city_id' => DB::table('cities')->where('name','Actopan')->first()->id
],

['name' => 'Buenavista',
'city_id' => DB::table('cities')->where('name','Actopan')->first()->id
],

['name' => 'Cerro Gordo',
'city_id' => DB::table('cities')->where('name','Actopan')->first()->id
],

['name' => 'Paso de la Milpa',
'city_id' => DB::table('cities')->where('name','Actopan')->first()->id
],

['name' => 'Pastorías',
'city_id' => DB::table('cities')->where('name','Actopan')->first()->id
],

['name' => 'Soyacuautla',
'city_id' => DB::table('cities')->where('name','Actopan')->first()->id
],

['name' => 'Villa Nueva',
'city_id' => DB::table('cities')->where('name','Actopan')->first()->id
],

['name' => 'Carlos y Teresa',
'city_id' => DB::table('cities')->where('name','Actopan')->first()->id
],

['name' => 'Santa Cecilia',
'city_id' => DB::table('cities')->where('name','Actopan')->first()->id
],

['name' => 'Santa Cecilia (Chapopote)',
'city_id' => DB::table('cities')->where('name','Actopan')->first()->id
],

['name' => 'Deportiva',
'city_id' => DB::table('cities')->where('name','Actopan')->first()->id
],

['name' => 'Hornitos',
'city_id' => DB::table('cities')->where('name','Actopan')->first()->id
],

['name' => 'La Esperanza',
'city_id' => DB::table('cities')->where('name','Actopan')->first()->id
],

['name' => 'Mozomboa',
'city_id' => DB::table('cities')->where('name','Actopan')->first()->id
],

['name' => 'Mata de Caña',
'city_id' => DB::table('cities')->where('name','Actopan')->first()->id
],

['name' => 'El Espinal',
'city_id' => DB::table('cities')->where('name','Actopan')->first()->id
],

['name' => 'Ranchito de las Ánimas',
'city_id' => DB::table('cities')->where('name','Actopan')->first()->id
],

['name' => 'Vista Hermosa',
'city_id' => DB::table('cities')->where('name','Actopan')->first()->id
],

['name' => 'Totolapan',
'city_id' => DB::table('cities')->where('name','Actopan')->first()->id
],

['name' => 'Los Otates',
'city_id' => DB::table('cities')->where('name','Actopan')->first()->id
],

['name' => 'Los Frailes',
'city_id' => DB::table('cities')->where('name','Actopan')->first()->id
],

['name' => 'Coyolillo',
'city_id' => DB::table('cities')->where('name','Actopan')->first()->id
],

['name' => 'Los Ídolos',
'city_id' => DB::table('cities')->where('name','Actopan')->first()->id
],

['name' => 'El Diamante',
'city_id' => DB::table('cities')->where('name','Actopan')->first()->id
],

['name' => 'Chicuasén',
'city_id' => DB::table('cities')->where('name','Actopan')->first()->id
],

['name' => 'San Nicolás (San Nicolás de Tolentino)',
'city_id' => DB::table('cities')->where('name','Actopan')->first()->id
],

['name' => 'Trapiche del Rosario',
'city_id' => DB::table('cities')->where('name','Actopan')->first()->id
],

['name' => 'El Viejón',
'city_id' => DB::table('cities')->where('name','Actopan')->first()->id
],

['name' => 'Viejón de Abajo',
'city_id' => DB::table('cities')->where('name','Actopan')->first()->id
],

['name' => 'El Ojital',
'city_id' => DB::table('cities')->where('name','Actopan')->first()->id
],

['name' => 'La Reforma (Los Zurdos)',
'city_id' => DB::table('cities')->where('name','Actopan')->first()->id
],

['name' => 'Paso del Cedro',
'city_id' => DB::table('cities')->where('name','Actopan')->first()->id
],

['name' => 'Palmas de Abajo',
'city_id' => DB::table('cities')->where('name','Actopan')->first()->id
],

['name' => 'Tinajitas',
'city_id' => DB::table('cities')->where('name','Actopan')->first()->id
],

['name' => 'El Farallón',
'city_id' => DB::table('cities')->where('name','Actopan')->first()->id
],

['name' => 'San Isidro',
'city_id' => DB::table('cities')->where('name','Actopan')->first()->id
],

['name' => 'Santa Rosa (General Pinzón)',
'city_id' => DB::table('cities')->where('name','Actopan')->first()->id
],

['name' => 'Coatepec Centro',
'city_id' => DB::table('cities')->where('name','Coatepec')->first()->id
],

['name' => 'La Purísima',
'city_id' => DB::table('cities')->where('name','Coatepec')->first()->id
],

['name' => 'La Luz',
'city_id' => DB::table('cities')->where('name','Coatepec')->first()->id
],

['name' => 'Anfer',
'city_id' => DB::table('cities')->where('name','Coatepec')->first()->id
],

['name' => 'Carlos Roberto Smith',
'city_id' => DB::table('cities')->where('name','Coatepec')->first()->id
],

['name' => 'Popular',
'city_id' => DB::table('cities')->where('name','Coatepec')->first()->id
],

['name' => 'Del Bosque',
'city_id' => DB::table('cities')->where('name','Coatepec')->first()->id
],

['name' => 'Azuzul',
'city_id' => DB::table('cities')->where('name','Coatepec')->first()->id
],

['name' => 'El Porvenir',
'city_id' => DB::table('cities')->where('name','Coatepec')->first()->id
],

['name' => 'Sayago Cristóbal',
'city_id' => DB::table('cities')->where('name','Coatepec')->first()->id
],

['name' => 'Sinesco',
'city_id' => DB::table('cities')->where('name','Coatepec')->first()->id
],

['name' => 'Pomarosa',
'city_id' => DB::table('cities')->where('name','Coatepec')->first()->id
],

['name' => 'Ignacio Allende',
'city_id' => DB::table('cities')->where('name','Coatepec')->first()->id
],

['name' => 'Zona Dorada',
'city_id' => DB::table('cities')->where('name','Coatepec')->first()->id
],

['name' => 'La Florida',
'city_id' => DB::table('cities')->where('name','Coatepec')->first()->id
],

['name' => 'La Pitaya',
'city_id' => DB::table('cities')->where('name','Coatepec')->first()->id
],

['name' => 'Mariano Escobedo',
'city_id' => DB::table('cities')->where('name','Coatepec')->first()->id
],

['name' => 'Plan de la Cruz',
'city_id' => DB::table('cities')->where('name','Coatepec')->first()->id
],

['name' => 'Campestre la Orduña',
'city_id' => DB::table('cities')->where('name','Coatepec')->first()->id
],

['name' => 'San Pedro Buenavista',
'city_id' => DB::table('cities')->where('name','Coatepec')->first()->id
],

['name' => 'Arboledas San Pedro',
'city_id' => DB::table('cities')->where('name','Coatepec')->first()->id
],

['name' => 'Francisco Villa',
'city_id' => DB::table('cities')->where('name','Coatepec')->first()->id
],

['name' => 'Las Jacarandas',
'city_id' => DB::table('cities')->where('name','Coatepec')->first()->id
],

['name' => 'Nestle',
'city_id' => DB::table('cities')->where('name','Coatepec')->first()->id
],

['name' => 'Roberto Amoros',
'city_id' => DB::table('cities')->where('name','Coatepec')->first()->id
],

['name' => 'La Gachupina',
'city_id' => DB::table('cities')->where('name','Coatepec')->first()->id
],

['name' => 'Del Carmen',
'city_id' => DB::table('cities')->where('name','Coatepec')->first()->id
],

['name' => 'Rincón Coatepec',
'city_id' => DB::table('cities')->where('name','Coatepec')->first()->id
],

['name' => 'Los Pinos',
'city_id' => DB::table('cities')->where('name','Coatepec')->first()->id
],

['name' => 'Encino',
'city_id' => DB::table('cities')->where('name','Coatepec')->first()->id
],

['name' => 'Libertad',
'city_id' => DB::table('cities')->where('name','Coatepec')->first()->id
],

['name' => 'El Mirador',
'city_id' => DB::table('cities')->where('name','Coatepec')->first()->id
],

['name' => 'Las Golondrinas',
'city_id' => DB::table('cities')->where('name','Coatepec')->first()->id
],

['name' => 'La Herradura',
'city_id' => DB::table('cities')->where('name','Coatepec')->first()->id
],

['name' => 'El Obrador',
'city_id' => DB::table('cities')->where('name','Coatepec')->first()->id
],

['name' => 'Araucarias',
'city_id' => DB::table('cities')->where('name','Coatepec')->first()->id
],

['name' => 'Centenario',
'city_id' => DB::table('cities')->where('name','Coatepec')->first()->id
],

['name' => 'Díaz Mirón',
'city_id' => DB::table('cities')->where('name','Coatepec')->first()->id
],

['name' => 'Loma de los Angeles',
'city_id' => DB::table('cities')->where('name','Coatepec')->first()->id
],

['name' => 'San Jerónimo',
'city_id' => DB::table('cities')->where('name','Coatepec')->first()->id
],

['name' => 'Agrícola',
'city_id' => DB::table('cities')->where('name','Coatepec')->first()->id
],

['name' => 'Setse',
'city_id' => DB::table('cities')->where('name','Coatepec')->first()->id
],

['name' => 'Rafael Sánchez',
'city_id' => DB::table('cities')->where('name','Coatepec')->first()->id
],

['name' => '10 de Mayo',
'city_id' => DB::table('cities')->where('name','Coatepec')->first()->id
],

['name' => 'El Pedregal',
'city_id' => DB::table('cities')->where('name','Coatepec')->first()->id
],

['name' => 'Las Hayas',
'city_id' => DB::table('cities')->where('name','Coatepec')->first()->id
],

['name' => 'Reyes Heroles',
'city_id' => DB::table('cities')->where('name','Coatepec')->first()->id
],

['name' => 'San Jerónimo',
'city_id' => DB::table('cities')->where('name','Coatepec')->first()->id
],

['name' => 'Lázaro Cárdenas',
'city_id' => DB::table('cities')->where('name','Coatepec')->first()->id
],

['name' => 'Olivares Pineda',
'city_id' => DB::table('cities')->where('name','Coatepec')->first()->id
],

['name' => 'Francisco Javier Mina',
'city_id' => DB::table('cities')->where('name','Coatepec')->first()->id
],

['name' => 'Los Carriles',
'city_id' => DB::table('cities')->where('name','Coatepec')->first()->id
],

['name' => 'Santa Rosa',
'city_id' => DB::table('cities')->where('name','Coatepec')->first()->id
],

['name' => 'Campo Viejo',
'city_id' => DB::table('cities')->where('name','Coatepec')->first()->id
],

['name' => '22 de Septiembre',
'city_id' => DB::table('cities')->where('name','Coatepec')->first()->id
],

['name' => 'Santa Teresa',
'city_id' => DB::table('cities')->where('name','Coatepec')->first()->id
],

['name' => 'Las Auroras',
'city_id' => DB::table('cities')->where('name','Coatepec')->first()->id
],

['name' => 'Santa Bárbara',
'city_id' => DB::table('cities')->where('name','Coatepec')->first()->id
],

['name' => 'Casa Blanca',
'city_id' => DB::table('cities')->where('name','Coatepec')->first()->id
],

['name' => 'Jardines de Coatepec',
'city_id' => DB::table('cities')->where('name','Coatepec')->first()->id
],

['name' => 'Campestre',
'city_id' => DB::table('cities')->where('name','Coatepec')->first()->id
],

['name' => 'María Enriqueta Fracción II',
'city_id' => DB::table('cities')->where('name','Coatepec')->first()->id
],

['name' => '2 de Abril',
'city_id' => DB::table('cities')->where('name','Coatepec')->first()->id
],

['name' => 'Fuentes de Coatepec',
'city_id' => DB::table('cities')->where('name','Coatepec')->first()->id
],

['name' => 'Primero de Mayo',
'city_id' => DB::table('cities')->where('name','Coatepec')->first()->id
],

['name' => 'Los Olivos',
'city_id' => DB::table('cities')->where('name','Coatepec')->first()->id
],

['name' => 'Plan Mavil',
'city_id' => DB::table('cities')->where('name','Coatepec')->first()->id
],

['name' => 'Emiliano Zapata',
'city_id' => DB::table('cities')->where('name','Coatepec')->first()->id
],

['name' => '6 de Julio',
'city_id' => DB::table('cities')->where('name','Coatepec')->first()->id
],

['name' => 'Espinal Alto',
'city_id' => DB::table('cities')->where('name','Coatepec')->first()->id
],

['name' => 'Espinal Bajo',
'city_id' => DB::table('cities')->where('name','Coatepec')->first()->id
],

['name' => 'Magisterial Jardines de Coatepec',
'city_id' => DB::table('cities')->where('name','Coatepec')->first()->id
],

['name' => 'S. N. T. E. Sección 56',
'city_id' => DB::table('cities')->where('name','Coatepec')->first()->id
],

['name' => '6 de Enero',
'city_id' => DB::table('cities')->where('name','Coatepec')->first()->id
],

['name' => 'María Enriqueta',
'city_id' => DB::table('cities')->where('name','Coatepec')->first()->id
],

['name' => 'Las Bugambilias',
'city_id' => DB::table('cities')->where('name','Coatepec')->first()->id
],

['name' => 'Jardines de Pastoreza',
'city_id' => DB::table('cities')->where('name','Coatepec')->first()->id
],

['name' => '2 de Enero',
'city_id' => DB::table('cities')->where('name','Coatepec')->first()->id
],

['name' => 'Las Primaveras',
'city_id' => DB::table('cities')->where('name','Coatepec')->first()->id
],

['name' => 'El Cedro',
'city_id' => DB::table('cities')->where('name','Coatepec')->first()->id
],

['name' => 'Casa Pinta',
'city_id' => DB::table('cities')->where('name','Coatepec')->first()->id
],

['name' => 'Loma del Suchill',
'city_id' => DB::table('cities')->where('name','Coatepec')->first()->id
],

['name' => 'Sostenes Guzmán',
'city_id' => DB::table('cities')->where('name','Coatepec')->first()->id
],

['name' => 'Las Cruces',
'city_id' => DB::table('cities')->where('name','Coatepec')->first()->id
],

['name' => 'Santa Martha',
'city_id' => DB::table('cities')->where('name','Coatepec')->first()->id
],

['name' => 'Lomas de Flores',
'city_id' => DB::table('cities')->where('name','Coatepec')->first()->id
],

['name' => 'Miguel Alemán',
'city_id' => DB::table('cities')->where('name','Coatepec')->first()->id
],

['name' => 'Benito Juárez',
'city_id' => DB::table('cities')->where('name','Coatepec')->first()->id
],

['name' => 'Fernando Gutiérrez Barrios',
'city_id' => DB::table('cities')->where('name','Coatepec')->first()->id
],

['name' => 'El Paraíso',
'city_id' => DB::table('cities')->where('name','Coatepec')->first()->id
],

['name' => 'El Arenal',
'city_id' => DB::table('cities')->where('name','Coatepec')->first()->id
],

['name' => 'Mosvic',
'city_id' => DB::table('cities')->where('name','Coatepec')->first()->id
],

['name' => 'Los Prados',
'city_id' => DB::table('cities')->where('name','Coatepec')->first()->id
],

['name' => 'Orquídeas',
'city_id' => DB::table('cities')->where('name','Coatepec')->first()->id
],

['name' => 'El Pimiento',
'city_id' => DB::table('cities')->where('name','Coatepec')->first()->id
],

['name' => 'Manantiales',
'city_id' => DB::table('cities')->where('name','Coatepec')->first()->id
],

['name' => 'Los Lirios',
'city_id' => DB::table('cities')->where('name','Coatepec')->first()->id
],

['name' => 'INFONAVIT los Cafetos',
'city_id' => DB::table('cities')->where('name','Coatepec')->first()->id
],

['name' => 'Las Azaleas',
'city_id' => DB::table('cities')->where('name','Coatepec')->first()->id
],

['name' => 'Bernardo Casals',
'city_id' => DB::table('cities')->where('name','Coatepec')->first()->id
],

['name' => 'Nueva Nestle',
'city_id' => DB::table('cities')->where('name','Coatepec')->first()->id
],

['name' => 'Las Margaritas',
'city_id' => DB::table('cities')->where('name','Coatepec')->first()->id
],

['name' => 'Andrea',
'city_id' => DB::table('cities')->where('name','Coatepec')->first()->id
],

['name' => 'Setse II',
'city_id' => DB::table('cities')->where('name','Coatepec')->first()->id
],

['name' => 'La Trinidad',
'city_id' => DB::table('cities')->where('name','Coatepec')->first()->id
],

['name' => 'La Mata',
'city_id' => DB::table('cities')->where('name','Coatepec')->first()->id
],

['name' => 'La Mata 2da Sección',
'city_id' => DB::table('cities')->where('name','Coatepec')->first()->id
],

['name' => 'Hernández Ochoa',
'city_id' => DB::table('cities')->where('name','Coatepec')->first()->id
],

['name' => 'San José',
'city_id' => DB::table('cities')->where('name','Coatepec')->first()->id
],

['name' => 'Juan de la Luz Enríquez',
'city_id' => DB::table('cities')->where('name','Coatepec')->first()->id
],

['name' => 'Zimpizahua',
'city_id' => DB::table('cities')->where('name','Coatepec')->first()->id
],

['name' => 'Obrera (Las Puentes)',
'city_id' => DB::table('cities')->where('name','Coatepec')->first()->id
],

['name' => 'Pacho Viejo',
'city_id' => DB::table('cities')->where('name','Coatepec')->first()->id
],

['name' => 'La Orduña',
'city_id' => DB::table('cities')->where('name','Coatepec')->first()->id
],

['name' => 'La Laguna',
'city_id' => DB::table('cities')->where('name','Coatepec')->first()->id
],

['name' => 'Las Lomas',
'city_id' => DB::table('cities')->where('name','Coatepec')->first()->id
],

['name' => 'El Grande',
'city_id' => DB::table('cities')->where('name','Coatepec')->first()->id
],

['name' => 'Mahuixtlan',
'city_id' => DB::table('cities')->where('name','Coatepec')->first()->id
],

['name' => 'Vaquería',
'city_id' => DB::table('cities')->where('name','Coatepec')->first()->id
],

['name' => 'Bella Esperanza',
'city_id' => DB::table('cities')->where('name','Coatepec')->first()->id
],

['name' => 'Tuzamapan',
'city_id' => DB::table('cities')->where('name','Coatepec')->first()->id
],

['name' => 'Cuauhtémoc',
'city_id' => DB::table('cities')->where('name','Coatepec')->first()->id
],

['name' => 'La Pitahaya (Congregación Zoncuantla)',
'city_id' => DB::table('cities')->where('name','Coatepec')->first()->id
],

['name' => 'Plan de la Cruz',
'city_id' => DB::table('cities')->where('name','Coatepec')->first()->id
],

['name' => 'Seis de Enero',
'city_id' => DB::table('cities')->where('name','Coatepec')->first()->id
],

['name' => 'Mariano Escobedo',
'city_id' => DB::table('cities')->where('name','Coatepec')->first()->id
],

['name' => 'Briones',
'city_id' => DB::table('cities')->where('name','Coatepec')->first()->id
],

['name' => 'Teocelo',
'city_id' => DB::table('cities')->where('name','Teocelo')->first()->id
],

['name' => 'Benito Juárez',
'city_id' => DB::table('cities')->where('name','Teocelo')->first()->id
],

['name' => 'Los Cedros',
'city_id' => DB::table('cities')->where('name','Teocelo')->first()->id
],

['name' => 'Higueras',
'city_id' => DB::table('cities')->where('name','Teocelo')->first()->id
],

['name' => 'Rocco de Arcangelis',
'city_id' => DB::table('cities')->where('name','Teocelo')->first()->id
],

['name' => 'Raul Martinez Oelkers',
'city_id' => DB::table('cities')->where('name','Teocelo')->first()->id
],

['name' => 'Llano Grande',
'city_id' => DB::table('cities')->where('name','Teocelo')->first()->id
],

['name' => 'Monte Blanco',
'city_id' => DB::table('cities')->where('name','Teocelo')->first()->id
],

['name' => 'Baxtla',
'city_id' => DB::table('cities')->where('name','Teocelo')->first()->id
],

['name' => 'Teczin',
'city_id' => DB::table('cities')->where('name','Teocelo')->first()->id
],

['name' => 'Cosautlán de Carvajal',
'city_id' => DB::table('cities')->where('name','Cosautlán de Carvajal')->first()->id
],

['name' => 'Limones',
'city_id' => DB::table('cities')->where('name','Cosautlán de Carvajal')->first()->id
],

['name' => 'Piedra Parada',
'city_id' => DB::table('cities')->where('name','Cosautlán de Carvajal')->first()->id
],

['name' => 'Coabosto',
'city_id' => DB::table('cities')->where('name','Cosautlán de Carvajal')->first()->id
],

['name' => 'La Lagunilla',
'city_id' => DB::table('cities')->where('name','Cosautlán de Carvajal')->first()->id
],

['name' => 'Vaquería',
'city_id' => DB::table('cities')->where('name','Cosautlán de Carvajal')->first()->id
],

['name' => 'Xaliscuilo',
'city_id' => DB::table('cities')->where('name','Cosautlán de Carvajal')->first()->id
],

['name' => 'Huehuetecpan',
'city_id' => DB::table('cities')->where('name','Cosautlán de Carvajal')->first()->id
],

['name' => 'Juanantontla',
'city_id' => DB::table('cities')->where('name','Cosautlán de Carvajal')->first()->id
],

['name' => 'Casa Quemada',
'city_id' => DB::table('cities')->where('name','Cosautlán de Carvajal')->first()->id
],

['name' => 'Las Lomas',
'city_id' => DB::table('cities')->where('name','Cosautlán de Carvajal')->first()->id
],

['name' => 'Palzoquitipan',
'city_id' => DB::table('cities')->where('name','Cosautlán de Carvajal')->first()->id
],

['name' => 'Nuevo (Amatitla)',
'city_id' => DB::table('cities')->where('name','Cosautlán de Carvajal')->first()->id
],

['name' => 'Emiliano Zapata',
'city_id' => DB::table('cities')->where('name','Cosautlán de Carvajal')->first()->id
],

['name' => 'San Miguel Tlapéxcatl',
'city_id' => DB::table('cities')->where('name','Cosautlán de Carvajal')->first()->id
],

['name' => 'Del Maestro',
'city_id' => DB::table('cities')->where('name','Emiliano Zapata')->first()->id
],

['name' => 'Emiliano Zapata',
'city_id' => DB::table('cities')->where('name','Emiliano Zapata')->first()->id
],

['name' => 'El Cerrito',
'city_id' => DB::table('cities')->where('name','Emiliano Zapata')->first()->id
],

['name' => 'Palo Gacho',
'city_id' => DB::table('cities')->where('name','Emiliano Zapata')->first()->id
],

['name' => 'Plan del Río',
'city_id' => DB::table('cities')->where('name','Emiliano Zapata')->first()->id
],

['name' => 'La Balsa',
'city_id' => DB::table('cities')->where('name','Emiliano Zapata')->first()->id
],

['name' => 'La Cumbre',
'city_id' => DB::table('cities')->where('name','Emiliano Zapata')->first()->id
],

['name' => 'Ciudad Primavera',
'city_id' => DB::table('cities')->where('name','Emiliano Zapata')->first()->id
],

['name' => 'Buena Vista',
'city_id' => DB::table('cities')->where('name','Emiliano Zapata')->first()->id
],

['name' => 'El Aguaje',
'city_id' => DB::table('cities')->where('name','Emiliano Zapata')->first()->id
],

['name' => 'Rinconada',
'city_id' => DB::table('cities')->where('name','Emiliano Zapata')->first()->id
],

['name' => 'La Bocana',
'city_id' => DB::table('cities')->where('name','Emiliano Zapata')->first()->id
],

['name' => 'Cerro Gordo',
'city_id' => DB::table('cities')->where('name','Emiliano Zapata')->first()->id
],

['name' => 'El Roble',
'city_id' => DB::table('cities')->where('name','Emiliano Zapata')->first()->id
],

['name' => 'El Palmar [Estación el Palmar]',
'city_id' => DB::table('cities')->where('name','Emiliano Zapata')->first()->id
],

['name' => 'Xoltepec',
'city_id' => DB::table('cities')->where('name','Emiliano Zapata')->first()->id
],

['name' => 'Palmar de Pérez',
'city_id' => DB::table('cities')->where('name','Emiliano Zapata')->first()->id
],

['name' => 'Rancho Viejo',
'city_id' => DB::table('cities')->where('name','Emiliano Zapata')->first()->id
],

['name' => 'Corral Falso',
'city_id' => DB::table('cities')->where('name','Emiliano Zapata')->first()->id
],

['name' => 'Pinoltepec',
'city_id' => DB::table('cities')->where('name','Emiliano Zapata')->first()->id
],

['name' => 'Monte Obscuro (Colonia Pénjamo)',
'city_id' => DB::table('cities')->where('name','Emiliano Zapata')->first()->id
],

['name' => 'Palmarejo',
'city_id' => DB::table('cities')->where('name','Emiliano Zapata')->first()->id
],

['name' => 'Los Reyes',
'city_id' => DB::table('cities')->where('name','Emiliano Zapata')->first()->id
],

['name' => 'Laguna de Miradores',
'city_id' => DB::table('cities')->where('name','Emiliano Zapata')->first()->id
],

['name' => 'Lomas de Miradores',
'city_id' => DB::table('cities')->where('name','Emiliano Zapata')->first()->id
],

['name' => 'Colmenar',
'city_id' => DB::table('cities')->where('name','Emiliano Zapata')->first()->id
],

['name' => 'Lomas de la Pradera',
'city_id' => DB::table('cities')->where('name','Emiliano Zapata')->first()->id
],

['name' => 'Valle Hermoso',
'city_id' => DB::table('cities')->where('name','Emiliano Zapata')->first()->id
],

['name' => 'La Cima',
'city_id' => DB::table('cities')->where('name','Emiliano Zapata')->first()->id
],

['name' => 'Terranova',
'city_id' => DB::table('cities')->where('name','Emiliano Zapata')->first()->id
],

['name' => 'Orquídeas',
'city_id' => DB::table('cities')->where('name','Emiliano Zapata')->first()->id
],

['name' => 'Santa Lucía Dos',
'city_id' => DB::table('cities')->where('name','Emiliano Zapata')->first()->id
],

['name' => 'Campestre Las Trancas',
'city_id' => DB::table('cities')->where('name','Emiliano Zapata')->first()->id
],

['name' => 'Residencial Los Cedros',
'city_id' => DB::table('cities')->where('name','Emiliano Zapata')->first()->id
],

['name' => 'Chavarrillo',
'city_id' => DB::table('cities')->where('name','Emiliano Zapata')->first()->id
],

['name' => 'Alborada',
'city_id' => DB::table('cities')->where('name','Emiliano Zapata')->first()->id
],

['name' => 'La Estanzuela',
'city_id' => DB::table('cities')->where('name','Emiliano Zapata')->first()->id
],

['name' => 'El Chico',
'city_id' => DB::table('cities')->where('name','Emiliano Zapata')->first()->id
],

['name' => 'Pacho Nuevo',
'city_id' => DB::table('cities')->where('name','Emiliano Zapata')->first()->id
],

['name' => 'Las Trancas',
'city_id' => DB::table('cities')->where('name','Emiliano Zapata')->first()->id
],

['name' => 'Rafael Guizar y Valencia',
'city_id' => DB::table('cities')->where('name','Emiliano Zapata')->first()->id
],

['name' => 'Santa Anita',
'city_id' => DB::table('cities')->where('name','Emiliano Zapata')->first()->id
],

['name' => 'Santa Fe',
'city_id' => DB::table('cities')->where('name','Emiliano Zapata')->first()->id
],

['name' => 'Marco Antonio Muñoz (Nacaxtle)',
'city_id' => DB::table('cities')->where('name','Emiliano Zapata')->first()->id
],

['name' => 'Paso Grande [Estación el Chico]',
'city_id' => DB::table('cities')->where('name','Emiliano Zapata')->first()->id
],

['name' => 'Plan Chico',
'city_id' => DB::table('cities')->where('name','Emiliano Zapata')->first()->id
],

['name' => 'Ojo de Agua',
'city_id' => DB::table('cities')->where('name','Emiliano Zapata')->first()->id
],

['name' => 'Bugambilias',
'city_id' => DB::table('cities')->where('name','Emiliano Zapata')->first()->id
],

['name' => 'Grabilias (Monoc)',
'city_id' => DB::table('cities')->where('name','Emiliano Zapata')->first()->id
],

['name' => 'Campestre el Porvenir',
'city_id' => DB::table('cities')->where('name','Emiliano Zapata')->first()->id
],

['name' => 'Estación Chavarrillo',
'city_id' => DB::table('cities')->where('name','Emiliano Zapata')->first()->id
],

['name' => 'La Perseverancia',
'city_id' => DB::table('cities')->where('name','Emiliano Zapata')->first()->id
],

['name' => 'Jacarandas',
'city_id' => DB::table('cities')->where('name','Emiliano Zapata')->first()->id
],

['name' => 'La Ciénega',
'city_id' => DB::table('cities')->where('name','Emiliano Zapata')->first()->id
],

['name' => 'Las Cascadas',
'city_id' => DB::table('cities')->where('name','Emiliano Zapata')->first()->id
],

['name' => 'Lomas de la Hacienda II',
'city_id' => DB::table('cities')->where('name','Emiliano Zapata')->first()->id
],

['name' => 'Cincuentenario',
'city_id' => DB::table('cities')->where('name','Emiliano Zapata')->first()->id
],

['name' => 'Gravileas',
'city_id' => DB::table('cities')->where('name','Emiliano Zapata')->first()->id
],

['name' => 'Las Dalias',
'city_id' => DB::table('cities')->where('name','Emiliano Zapata')->first()->id
],

['name' => 'La Pradera',
'city_id' => DB::table('cities')->where('name','Emiliano Zapata')->first()->id
],

['name' => 'Los Cafetales',
'city_id' => DB::table('cities')->where('name','Emiliano Zapata')->first()->id
],

['name' => 'Húngaros',
'city_id' => DB::table('cities')->where('name','Emiliano Zapata')->first()->id
],

['name' => 'Los Pinos',
'city_id' => DB::table('cities')->where('name','Emiliano Zapata')->first()->id
],

['name' => 'Santa María',
'city_id' => DB::table('cities')->where('name','Emiliano Zapata')->first()->id
],

['name' => 'Las Granjas',
'city_id' => DB::table('cities')->where('name','Emiliano Zapata')->first()->id
],

['name' => 'Miradores (Miradores del Mar)',
'city_id' => DB::table('cities')->where('name','Emiliano Zapata')->first()->id
],

['name' => 'Dos Ríos',
'city_id' => DB::table('cities')->where('name','Emiliano Zapata')->first()->id
],

['name' => 'El Lencero',
'city_id' => DB::table('cities')->where('name','Emiliano Zapata')->first()->id
],

['name' => 'Loma Bonita',
'city_id' => DB::table('cities')->where('name','Emiliano Zapata')->first()->id
],

['name' => 'Lomas de la Hacienda',
'city_id' => DB::table('cities')->where('name','Emiliano Zapata')->first()->id
],

['name' => 'Don Salvador',
'city_id' => DB::table('cities')->where('name','Emiliano Zapata')->first()->id
],

['name' => 'El Terrero',
'city_id' => DB::table('cities')->where('name','Emiliano Zapata')->first()->id
],

['name' => 'Rancho Nuevo',
'city_id' => DB::table('cities')->where('name','Emiliano Zapata')->first()->id
],

['name' => 'Tres Pasos',
'city_id' => DB::table('cities')->where('name','Emiliano Zapata')->first()->id
],

['name' => 'El Guayabo',
'city_id' => DB::table('cities')->where('name','Emiliano Zapata')->first()->id
],

['name' => 'El Limón',
'city_id' => DB::table('cities')->where('name','Emiliano Zapata')->first()->id
],

['name' => 'El Jobo',
'city_id' => DB::table('cities')->where('name','Emiliano Zapata')->first()->id
],

['name' => 'El Telefre',
'city_id' => DB::table('cities')->where('name','Emiliano Zapata')->first()->id
],

['name' => 'Campestre los Girasoles',
'city_id' => DB::table('cities')->where('name','Emiliano Zapata')->first()->id
],

['name' => 'Loma de Rogel',
'city_id' => DB::table('cities')->where('name','Emiliano Zapata')->first()->id
],

['name' => 'Tres Pasos',
'city_id' => DB::table('cities')->where('name','Emiliano Zapata')->first()->id
],

['name' => 'Las Lágrimas',
'city_id' => DB::table('cities')->where('name','Emiliano Zapata')->first()->id
],

['name' => 'La Tinaja',
'city_id' => DB::table('cities')->where('name','Emiliano Zapata')->first()->id
],

['name' => 'Club de golf Xalapa',
'city_id' => DB::table('cities')->where('name','Emiliano Zapata')->first()->id
],

['name' => 'La Aurora',
'city_id' => DB::table('cities')->where('name','Emiliano Zapata')->first()->id
],

['name' => 'Ojuelos (Nuevo Poblado)',
'city_id' => DB::table('cities')->where('name','Emiliano Zapata')->first()->id
],

['name' => 'Tigrillos',
'city_id' => DB::table('cities')->where('name','Apazapan')->first()->id
],

['name' => 'Apazapan',
'city_id' => DB::table('cities')->where('name','Apazapan')->first()->id
],

['name' => 'Baños (El Bejuco)',
'city_id' => DB::table('cities')->where('name','Apazapan')->first()->id
],

['name' => 'Agua Caliente',
'city_id' => DB::table('cities')->where('name','Apazapan')->first()->id
],

['name' => 'Cerro Colorado',
'city_id' => DB::table('cities')->where('name','Apazapan')->first()->id
],

['name' => 'Chahuapan',
'city_id' => DB::table('cities')->where('name','Apazapan')->first()->id
],

['name' => 'El Palmar',
'city_id' => DB::table('cities')->where('name','Puente Nacional')->first()->id
],

['name' => 'El Crucero',
'city_id' => DB::table('cities')->where('name','Puente Nacional')->first()->id
],

['name' => 'Tabachines',
'city_id' => DB::table('cities')->where('name','Puente Nacional')->first()->id
],

['name' => 'Cabezas',
'city_id' => DB::table('cities')->where('name','Puente Nacional')->first()->id
],

['name' => 'Infonavit El Pando I',
'city_id' => DB::table('cities')->where('name','Puente Nacional')->first()->id
],

['name' => 'Infonavit El Pando II',
'city_id' => DB::table('cities')->where('name','Puente Nacional')->first()->id
],

['name' => 'Magisterial',
'city_id' => DB::table('cities')->where('name','Puente Nacional')->first()->id
],

['name' => 'Secretaria de Agricultura y Recursos Hidráulicos',
'city_id' => DB::table('cities')->where('name','Puente Nacional')->first()->id
],

['name' => 'Infonavit Suterm',
'city_id' => DB::table('cities')->where('name','Puente Nacional')->first()->id
],

['name' => 'Infonavit El Pando I',
'city_id' => DB::table('cities')->where('name','Puente Nacional')->first()->id
],

['name' => 'Totonacapan del Sur',
'city_id' => DB::table('cities')->where('name','Puente Nacional')->first()->id
],

['name' => 'Leonardo Rodriguez Alcaine',
'city_id' => DB::table('cities')->where('name','Puente Nacional')->first()->id
],

['name' => 'Lindavista',
'city_id' => DB::table('cities')->where('name','Puente Nacional')->first()->id
],

['name' => '12 de Diciembre',
'city_id' => DB::table('cities')->where('name','Puente Nacional')->first()->id
],

['name' => 'Acapulquito',
'city_id' => DB::table('cities')->where('name','Puente Nacional')->first()->id
],

['name' => 'Unidad Federal',
'city_id' => DB::table('cities')->where('name','Puente Nacional')->first()->id
],

['name' => '21 de Marzo',
'city_id' => DB::table('cities')->where('name','Puente Nacional')->first()->id
],

['name' => 'El Capricho',
'city_id' => DB::table('cities')->where('name','Puente Nacional')->first()->id
],

['name' => 'Naranjos',
'city_id' => DB::table('cities')->where('name','Puente Nacional')->first()->id
],

['name' => 'San Jose Chipila',
'city_id' => DB::table('cities')->where('name','Puente Nacional')->first()->id
],

['name' => 'Hato de La Higuera',
'city_id' => DB::table('cities')->where('name','Puente Nacional')->first()->id
],

['name' => 'Chichicaxtle',
'city_id' => DB::table('cities')->where('name','Puente Nacional')->first()->id
],

['name' => 'Paso Mariano',
'city_id' => DB::table('cities')->where('name','Puente Nacional')->first()->id
],

['name' => 'Pachuquilla',
'city_id' => DB::table('cities')->where('name','Puente Nacional')->first()->id
],

['name' => 'Mata de Jobo',
'city_id' => DB::table('cities')->where('name','Puente Nacional')->first()->id
],

['name' => 'Puente Nacional',
'city_id' => DB::table('cities')->where('name','Puente Nacional')->first()->id
],

['name' => 'Tamarindo',
'city_id' => DB::table('cities')->where('name','Puente Nacional')->first()->id
],

['name' => 'Casa Blanca',
'city_id' => DB::table('cities')->where('name','Puente Nacional')->first()->id
],

['name' => 'El Zapotito',
'city_id' => DB::table('cities')->where('name','Ursulo Galván')->first()->id
],

['name' => 'Jareros',
'city_id' => DB::table('cities')->where('name','Ursulo Galván')->first()->id
],

['name' => 'Paso de Doña Juana',
'city_id' => DB::table('cities')->where('name','Ursulo Galván')->first()->id
],

['name' => 'Villa Zempoala',
'city_id' => DB::table('cities')->where('name','Ursulo Galván')->first()->id
],

['name' => 'Providencia',
'city_id' => DB::table('cities')->where('name','Ursulo Galván')->first()->id
],

['name' => 'Los Mangos',
'city_id' => DB::table('cities')->where('name','Ursulo Galván')->first()->id
],

['name' => 'Paso Del Bobo',
'city_id' => DB::table('cities')->where('name','Ursulo Galván')->first()->id
],

['name' => '4 de Octubre',
'city_id' => DB::table('cities')->where('name','Ursulo Galván')->first()->id
],

['name' => 'La Gloria',
'city_id' => DB::table('cities')->where('name','Ursulo Galván')->first()->id
],

['name' => 'El Paraíso (La Charca)',
'city_id' => DB::table('cities')->where('name','Ursulo Galván')->first()->id
],

['name' => 'El Arenal',
'city_id' => DB::table('cities')->where('name','Ursulo Galván')->first()->id
],

['name' => 'El Paraíso',
'city_id' => DB::table('cities')->where('name','Ursulo Galván')->first()->id
],

['name' => 'Playa de Chachalacas',
'city_id' => DB::table('cities')->where('name','Ursulo Galván')->first()->id
],

['name' => 'Barra de Chachalacas',
'city_id' => DB::table('cities')->where('name','Ursulo Galván')->first()->id
],

['name' => 'Villa Úrsulo Galvan',
'city_id' => DB::table('cities')->where('name','Ursulo Galván')->first()->id
],

['name' => 'Las Granjas',
'city_id' => DB::table('cities')->where('name','Ursulo Galván')->first()->id
],

['name' => 'Monte de Oro',
'city_id' => DB::table('cities')->where('name','Ursulo Galván')->first()->id
],

['name' => 'Nueva',
'city_id' => DB::table('cities')->where('name','Paso de Ovejas')->first()->id
],

['name' => 'Lomas Verdes',
'city_id' => DB::table('cities')->where('name','Paso de Ovejas')->first()->id
],

['name' => 'Ejidal',
'city_id' => DB::table('cities')->where('name','Paso de Ovejas')->first()->id
],

['name' => 'El Tamarindo',
'city_id' => DB::table('cities')->where('name','Paso de Ovejas')->first()->id
],

['name' => 'San Jose',
'city_id' => DB::table('cities')->where('name','Paso de Ovejas')->first()->id
],

['name' => 'La Joya',
'city_id' => DB::table('cities')->where('name','Paso de Ovejas')->first()->id
],

['name' => 'El Calvario',
'city_id' => DB::table('cities')->where('name','Paso de Ovejas')->first()->id
],

['name' => 'Paso de Ovejas Centro',
'city_id' => DB::table('cities')->where('name','Paso de Ovejas')->first()->id
],

['name' => 'Centro América',
'city_id' => DB::table('cities')->where('name','Paso de Ovejas')->first()->id
],

['name' => 'Guadalupana',
'city_id' => DB::table('cities')->where('name','Paso de Ovejas')->first()->id
],

['name' => 'Mata Grande',
'city_id' => DB::table('cities')->where('name','Paso de Ovejas')->first()->id
],

['name' => 'Salmoral Parte del Sur',
'city_id' => DB::table('cities')->where('name','Paso de Ovejas')->first()->id
],

['name' => 'La Ceiba',
'city_id' => DB::table('cities')->where('name','Paso de Ovejas')->first()->id
],

['name' => 'El Hatito',
'city_id' => DB::table('cities')->where('name','Paso de Ovejas')->first()->id
],

['name' => 'Carretas',
'city_id' => DB::table('cities')->where('name','Paso de Ovejas')->first()->id
],

['name' => 'Cerro de Guzmán',
'city_id' => DB::table('cities')->where('name','Paso de Ovejas')->first()->id
],

['name' => 'Tolome',
'city_id' => DB::table('cities')->where('name','Paso de Ovejas')->first()->id
],

['name' => 'Puente de Jula',
'city_id' => DB::table('cities')->where('name','Paso de Ovejas')->first()->id
],

['name' => 'Loma Del Nanche',
'city_id' => DB::table('cities')->where('name','Paso de Ovejas')->first()->id
],

['name' => 'Las Trancas',
'city_id' => DB::table('cities')->where('name','Paso de Ovejas')->first()->id
],

['name' => 'Pozo Mata Ramírez',
'city_id' => DB::table('cities')->where('name','Paso de Ovejas')->first()->id
],

['name' => 'Plan de Manantial',
'city_id' => DB::table('cities')->where('name','Paso de Ovejas')->first()->id
],

['name' => 'Bandera de Juárez',
'city_id' => DB::table('cities')->where('name','Paso de Ovejas')->first()->id
],

['name' => 'El Tejon',
'city_id' => DB::table('cities')->where('name','Paso de Ovejas')->first()->id
],

['name' => 'Loma Fina',
'city_id' => DB::table('cities')->where('name','Paso de Ovejas')->first()->id
],

['name' => 'Tierra Colorada',
'city_id' => DB::table('cities')->where('name','Paso de Ovejas')->first()->id
],

['name' => 'Palmaritos',
'city_id' => DB::table('cities')->where('name','Paso de Ovejas')->first()->id
],

['name' => 'Rancho Nuevo O Coatepec',
'city_id' => DB::table('cities')->where('name','Paso de Ovejas')->first()->id
],

['name' => 'Patancan',
'city_id' => DB::table('cities')->where('name','Paso de Ovejas')->first()->id
],

['name' => 'Acazonica',
'city_id' => DB::table('cities')->where('name','Paso de Ovejas')->first()->id
],

['name' => 'Angostillo',
'city_id' => DB::table('cities')->where('name','Paso de Ovejas')->first()->id
],

['name' => 'Cantarranas',
'city_id' => DB::table('cities')->where('name','Paso de Ovejas')->first()->id
],

['name' => 'José Cardel Centro',
'city_id' => DB::table('cities')->where('name','La Antigua')->first()->id
],

['name' => 'Benito Juárez',
'city_id' => DB::table('cities')->where('name','La Antigua')->first()->id
],

['name' => 'Campestre',
'city_id' => DB::table('cities')->where('name','La Antigua')->first()->id
],

['name' => 'Ejidal Jose Cardel',
'city_id' => DB::table('cities')->where('name','La Antigua')->first()->id
],

['name' => 'Ninfa Coronel de Esquer',
'city_id' => DB::table('cities')->where('name','La Antigua')->first()->id
],

['name' => 'Rivera Del Rio',
'city_id' => DB::table('cities')->where('name','La Antigua')->first()->id
],

['name' => 'Vicente Lopez I II y III Sección',
'city_id' => DB::table('cities')->where('name','La Antigua')->first()->id
],

['name' => 'San Francisco Peñas',
'city_id' => DB::table('cities')->where('name','La Antigua')->first()->id
],

['name' => 'Modelo Primera Sección',
'city_id' => DB::table('cities')->where('name','La Antigua')->first()->id
],

['name' => 'Modelo Segunda Sección',
'city_id' => DB::table('cities')->where('name','La Antigua')->first()->id
],

['name' => 'Modelo Tercera Sección',
'city_id' => DB::table('cities')->where('name','La Antigua')->first()->id
],

['name' => 'El Chapul',
'city_id' => DB::table('cities')->where('name','La Antigua')->first()->id
],

['name' => 'General Vicente Lopez',
'city_id' => DB::table('cities')->where('name','La Antigua')->first()->id
],

['name' => 'El Capricho',
'city_id' => DB::table('cities')->where('name','La Antigua')->first()->id
],

['name' => 'Arzola',
'city_id' => DB::table('cities')->where('name','La Antigua')->first()->id
],

['name' => 'Arboledas',
'city_id' => DB::table('cities')->where('name','La Antigua')->first()->id
],

['name' => 'Jazmines',
'city_id' => DB::table('cities')->where('name','La Antigua')->first()->id
],

['name' => 'Calzada',
'city_id' => DB::table('cities')->where('name','La Antigua')->first()->id
],

['name' => '12 de Julio',
'city_id' => DB::table('cities')->where('name','La Antigua')->first()->id
],

['name' => 'Presidentes',
'city_id' => DB::table('cities')->where('name','La Antigua')->first()->id
],

['name' => 'Cascajal',
'city_id' => DB::table('cities')->where('name','La Antigua')->first()->id
],

['name' => 'La Guadalupe',
'city_id' => DB::table('cities')->where('name','La Antigua')->first()->id
],

['name' => 'Lomas Verdes',
'city_id' => DB::table('cities')->where('name','La Antigua')->first()->id
],

['name' => 'Progreso',
'city_id' => DB::table('cities')->where('name','La Antigua')->first()->id
],

['name' => 'Ricardo Flores Magón I II III',
'city_id' => DB::table('cities')->where('name','La Antigua')->first()->id
],

['name' => '16 de Septiembre',
'city_id' => DB::table('cities')->where('name','La Antigua')->first()->id
],

['name' => 'El Modelo',
'city_id' => DB::table('cities')->where('name','La Antigua')->first()->id
],

['name' => 'Nueva Generación',
'city_id' => DB::table('cities')->where('name','La Antigua')->first()->id
],

['name' => 'La Posta',
'city_id' => DB::table('cities')->where('name','La Antigua')->first()->id
],

['name' => 'El Ciruelo',
'city_id' => DB::table('cities')->where('name','La Antigua')->first()->id
],

['name' => 'Nicolás Blanco (San Pancho)',
'city_id' => DB::table('cities')->where('name','La Antigua')->first()->id
],

['name' => 'Playa Oriente',
'city_id' => DB::table('cities')->where('name','La Antigua')->first()->id
],

['name' => 'Salmoral',
'city_id' => DB::table('cities')->where('name','La Antigua')->first()->id
],

['name' => 'La Antigua Veracruz',
'city_id' => DB::table('cities')->where('name','La Antigua')->first()->id
],

['name' => 'El Hatillo',
'city_id' => DB::table('cities')->where('name','La Antigua')->first()->id
],

['name' => 'Loma Iguana',
'city_id' => DB::table('cities')->where('name','La Antigua')->first()->id
],

['name' => 'La Pureza',
'city_id' => DB::table('cities')->where('name','La Antigua')->first()->id
],

['name' => 'Jose Ingenieros',
'city_id' => DB::table('cities')->where('name','La Antigua')->first()->id
],

['name' => 'Delfino Victoria (Santa Fe)',
'city_id' => DB::table('cities')->where('name','Veracruz')->first()->id
],

['name' => 'Paso San Juan',
'city_id' => DB::table('cities')->where('name','Veracruz')->first()->id
],

['name' => 'San Julián',
'city_id' => DB::table('cities')->where('name','Veracruz')->first()->id
],

['name' => 'Vargas',
'city_id' => DB::table('cities')->where('name','Veracruz')->first()->id
],

['name' => 'Villarín',
'city_id' => DB::table('cities')->where('name','Veracruz')->first()->id
],

['name' => 'Santa Rita',
'city_id' => DB::table('cities')->where('name','Veracruz')->first()->id
],

['name' => 'Cabo Verde',
'city_id' => DB::table('cities')->where('name','Veracruz')->first()->id
],

['name' => 'Privanzas',
'city_id' => DB::table('cities')->where('name','Veracruz')->first()->id
],

['name' => 'Paseo de las Palmas II',
'city_id' => DB::table('cities')->where('name','Veracruz')->first()->id
],

['name' => 'El Pando',
'city_id' => DB::table('cities')->where('name','Veracruz')->first()->id
],

['name' => 'Tejería',
'city_id' => DB::table('cities')->where('name','Veracruz')->first()->id
],

['name' => 'Bruno Pagliai',
'city_id' => DB::table('cities')->where('name','Veracruz')->first()->id
],

['name' => 'Dos Lomas',
'city_id' => DB::table('cities')->where('name','Veracruz')->first()->id
],

['name' => 'La Guadalupe',
'city_id' => DB::table('cities')->where('name','Veracruz')->first()->id
],

['name' => 'Rosario Saldaña',
'city_id' => DB::table('cities')->where('name','Veracruz')->first()->id
],

['name' => 'Mata Coquite',
'city_id' => DB::table('cities')->where('name','Veracruz')->first()->id
],

['name' => 'Residencial del Bosque',
'city_id' => DB::table('cities')->where('name','Veracruz')->first()->id
],

['name' => 'Antorcha Campesina',
'city_id' => DB::table('cities')->where('name','Veracruz')->first()->id
],

['name' => 'Valle Alto',
'city_id' => DB::table('cities')->where('name','Veracruz')->first()->id
],

['name' => 'Sentimientos de la Nación',
'city_id' => DB::table('cities')->where('name','Veracruz')->first()->id
],

['name' => 'Paseo de las Palmas',
'city_id' => DB::table('cities')->where('name','Veracruz')->first()->id
],

['name' => 'Los Torrentes Aeropuerto',
'city_id' => DB::table('cities')->where('name','Veracruz')->first()->id
],

['name' => 'Pueblo Nuevo',
'city_id' => DB::table('cities')->where('name','Veracruz')->first()->id
],

['name' => 'Dorado Real',
'city_id' => DB::table('cities')->where('name','Veracruz')->first()->id
],

['name' => 'Mata de Pita',
'city_id' => DB::table('cities')->where('name','Veracruz')->first()->id
],

['name' => 'Malibran de las Brujas',
'city_id' => DB::table('cities')->where('name','Veracruz')->first()->id
],

['name' => 'Hacienda Sotavento',
'city_id' => DB::table('cities')->where('name','Veracruz')->first()->id
],

['name' => 'Bonaterra',
'city_id' => DB::table('cities')->where('name','Veracruz')->first()->id
],

['name' => 'Veracruz (Gral. Heriberto Jara)',
'city_id' => DB::table('cities')->where('name','Veracruz')->first()->id
],

['name' => 'Veracruz Centro',
'city_id' => DB::table('cities')->where('name','Veracruz')->first()->id
],

['name' => 'Madero',
'city_id' => DB::table('cities')->where('name','Veracruz')->first()->id
],

['name' => 'Faros',
'city_id' => DB::table('cities')->where('name','Veracruz')->first()->id
],

['name' => 'Veracruz',
'city_id' => DB::table('cities')->where('name','Veracruz')->first()->id
],

['name' => 'La Armada',
'city_id' => DB::table('cities')->where('name','Veracruz')->first()->id
],

['name' => 'Unidad Veracruzana',
'city_id' => DB::table('cities')->where('name','Veracruz')->first()->id
],

['name' => 'Miguel Hidalgo',
'city_id' => DB::table('cities')->where('name','Veracruz')->first()->id
],

['name' => 'Populares',
'city_id' => DB::table('cities')->where('name','Veracruz')->first()->id
],

['name' => 'Luis Gómez Zepeda',
'city_id' => DB::table('cities')->where('name','Veracruz')->first()->id
],

['name' => 'Nueva Esperanza',
'city_id' => DB::table('cities')->where('name','Veracruz')->first()->id
],

['name' => 'Vías Férreas',
'city_id' => DB::table('cities')->where('name','Veracruz')->first()->id
],

['name' => 'Los Reyes',
'city_id' => DB::table('cities')->where('name','Veracruz')->first()->id
],

['name' => 'Chivería INFONAVIT',
'city_id' => DB::table('cities')->where('name','Veracruz')->first()->id
],

['name' => 'El Vergel',
'city_id' => DB::table('cities')->where('name','Veracruz')->first()->id
],

['name' => 'Asociación Civil',
'city_id' => DB::table('cities')->where('name','Veracruz')->first()->id
],

['name' => 'Benito Juárez',
'city_id' => DB::table('cities')->where('name','Veracruz')->first()->id
],

['name' => 'Lázaro Cárdenas',
'city_id' => DB::table('cities')->where('name','Veracruz')->first()->id
],

['name' => 'Niños Héroes',
'city_id' => DB::table('cities')->where('name','Veracruz')->first()->id
],

['name' => 'Triunfo Unido',
'city_id' => DB::table('cities')->where('name','Veracruz')->first()->id
],

['name' => 'Lázaro Cárdenas II',
'city_id' => DB::table('cities')->where('name','Veracruz')->first()->id
],

['name' => 'Casa Blanca',
'city_id' => DB::table('cities')->where('name','Veracruz')->first()->id
],

['name' => 'Lomas de Tarimoya',
'city_id' => DB::table('cities')->where('name','Veracruz')->first()->id
],

['name' => 'Prolongación Miguel Hidalgo (Populares)',
'city_id' => DB::table('cities')->where('name','Veracruz')->first()->id
],

['name' => '21 de Abril',
'city_id' => DB::table('cities')->where('name','Veracruz')->first()->id
],

['name' => 'La Querencia Residencial',
'city_id' => DB::table('cities')->where('name','Veracruz')->first()->id
],

['name' => '16 de Febrero',
'city_id' => DB::table('cities')->where('name','Veracruz')->first()->id
],

['name' => 'Geovillas Del Palmar',
'city_id' => DB::table('cities')->where('name','Veracruz')->first()->id
],

['name' => 'Progreso',
'city_id' => DB::table('cities')->where('name','Veracruz')->first()->id
],

['name' => 'Valente Diaz',
'city_id' => DB::table('cities')->where('name','Veracruz')->first()->id
],

['name' => 'Geovillas del Sol',
'city_id' => DB::table('cities')->where('name','Veracruz')->first()->id
],

['name' => 'Rodríguez Huerta',
'city_id' => DB::table('cities')->where('name','Veracruz')->first()->id
],

['name' => 'Hacienda la Parroquia',
'city_id' => DB::table('cities')->where('name','Veracruz')->first()->id
],

['name' => 'El Cortijo',
'city_id' => DB::table('cities')->where('name','Veracruz')->first()->id
],

['name' => 'Nuevo Veracruz',
'city_id' => DB::table('cities')->where('name','Veracruz')->first()->id
],

['name' => 'Pueblos Mágicos',
'city_id' => DB::table('cities')->where('name','Veracruz')->first()->id
],

['name' => 'Xana II',
'city_id' => DB::table('cities')->where('name','Veracruz')->first()->id
],

['name' => 'El Paraíso',
'city_id' => DB::table('cities')->where('name','Veracruz')->first()->id
],

['name' => '2 Caminos',
'city_id' => DB::table('cities')->where('name','Veracruz')->first()->id
],

['name' => 'Buenavista',
'city_id' => DB::table('cities')->where('name','Veracruz')->first()->id
],

['name' => 'Los Laureles',
'city_id' => DB::table('cities')->where('name','Veracruz')->first()->id
],

['name' => 'Los Almendros',
'city_id' => DB::table('cities')->where('name','Veracruz')->first()->id
],

['name' => 'La Pochota',
'city_id' => DB::table('cities')->where('name','Veracruz')->first()->id
],

['name' => 'Libertad de Expresión',
'city_id' => DB::table('cities')->where('name','Veracruz')->first()->id
],

['name' => 'Las Bajadas',
'city_id' => DB::table('cities')->where('name','Veracruz')->first()->id
],

['name' => 'El Fénix',
'city_id' => DB::table('cities')->where('name','Veracruz')->first()->id
],

['name' => 'Xana',
'city_id' => DB::table('cities')->where('name','Veracruz')->first()->id
],

['name' => 'Claustros de San Juan Sección Norte',
'city_id' => DB::table('cities')->where('name','Veracruz')->first()->id
],

['name' => 'Hacienda los Portales Sección Norte',
'city_id' => DB::table('cities')->where('name','Veracruz')->first()->id
],

['name' => 'Claustros de San Juan Sección Sur',
'city_id' => DB::table('cities')->where('name','Veracruz')->first()->id
],

['name' => 'Hacienda los Portales Sección Sur',
'city_id' => DB::table('cities')->where('name','Veracruz')->first()->id
],

['name' => 'Los Mangos',
'city_id' => DB::table('cities')->where('name','Veracruz')->first()->id
],

['name' => 'Costa Sol',
'city_id' => DB::table('cities')->where('name','Veracruz')->first()->id
],

['name' => 'Ampliación Las Bajadas',
'city_id' => DB::table('cities')->where('name','Veracruz')->first()->id
],

['name' => 'Emancipación Campesina',
'city_id' => DB::table('cities')->where('name','Veracruz')->first()->id
],

['name' => 'Aeropuerto',
'city_id' => DB::table('cities')->where('name','Veracruz')->first()->id
],

['name' => 'Colinas de San Marcos',
'city_id' => DB::table('cities')->where('name','Veracruz')->first()->id
],

['name' => 'Los Carriles',
'city_id' => DB::table('cities')->where('name','Veracruz')->first()->id
],

['name' => 'Albatros',
'city_id' => DB::table('cities')->where('name','Veracruz')->first()->id
],

['name' => 'Agustín Acosta Lagunes',
'city_id' => DB::table('cities')->where('name','Veracruz')->first()->id
],

['name' => 'Caballerizas',
'city_id' => DB::table('cities')->where('name','Veracruz')->first()->id
],

['name' => 'La Loma',
'city_id' => DB::table('cities')->where('name','Veracruz')->first()->id
],

['name' => 'Los Volcanes',
'city_id' => DB::table('cities')->where('name','Veracruz')->first()->id
],

['name' => 'La Laguna',
'city_id' => DB::table('cities')->where('name','Veracruz')->first()->id
],

['name' => 'Dora María Treviño',
'city_id' => DB::table('cities')->where('name','Veracruz')->first()->id
],

['name' => 'Panaderos',
'city_id' => DB::table('cities')->where('name','Veracruz')->first()->id
],

['name' => 'Pocitos y Rivera',
'city_id' => DB::table('cities')->where('name','Veracruz')->first()->id
],

['name' => 'Coyol Bolívar I',
'city_id' => DB::table('cities')->where('name','Veracruz')->first()->id
],

['name' => 'Coyol Bolívar II',
'city_id' => DB::table('cities')->where('name','Veracruz')->first()->id
],

['name' => 'El Coyol 1',
'city_id' => DB::table('cities')->where('name','Veracruz')->first()->id
],

['name' => 'El Coyol 2',
'city_id' => DB::table('cities')->where('name','Veracruz')->first()->id
],

['name' => 'Villa de Guadalupe',
'city_id' => DB::table('cities')->where('name','Veracruz')->first()->id
],

['name' => 'Heriberto Jara Corona',
'city_id' => DB::table('cities')->where('name','Veracruz')->first()->id
],

['name' => 'Julio Tejeda',
'city_id' => DB::table('cities')->where('name','Veracruz')->first()->id
],

['name' => 'Chapultepec',
'city_id' => DB::table('cities')->where('name','Veracruz')->first()->id
],

['name' => 'San Isidro',
'city_id' => DB::table('cities')->where('name','Veracruz')->first()->id
],

['name' => 'Pascual Ortiz Rubio',
'city_id' => DB::table('cities')->where('name','Veracruz')->first()->id
],

['name' => 'Cristóbal Colón',
'city_id' => DB::table('cities')->where('name','Veracruz')->first()->id
],

['name' => 'México',
'city_id' => DB::table('cities')->where('name','Veracruz')->first()->id
],

['name' => 'Primero de Mayo',
'city_id' => DB::table('cities')->where('name','Veracruz')->first()->id
],

['name' => 'Pino Suarez',
'city_id' => DB::table('cities')->where('name','Veracruz')->first()->id
],

['name' => 'Venustiano Carranza',
'city_id' => DB::table('cities')->where('name','Veracruz')->first()->id
],

['name' => 'El Lago',
'city_id' => DB::table('cities')->where('name','Veracruz')->first()->id
],

['name' => 'El Coyol',
'city_id' => DB::table('cities')->where('name','Veracruz')->first()->id
],

['name' => 'María Esther Zuno de Echeverría',
'city_id' => DB::table('cities')->where('name','Veracruz')->first()->id
],

['name' => 'Adolfo Ruiz Cortines',
'city_id' => DB::table('cities')->where('name','Veracruz')->first()->id
],

['name' => 'Puerta Paraíso',
'city_id' => DB::table('cities')->where('name','Veracruz')->first()->id
],

['name' => 'Los Héroes Veracruz',
'city_id' => DB::table('cities')->where('name','Veracruz')->first()->id
],

['name' => 'Amapolas I',
'city_id' => DB::table('cities')->where('name','Veracruz')->first()->id
],

['name' => 'Amapolas II',
'city_id' => DB::table('cities')->where('name','Veracruz')->first()->id
],

['name' => 'La Florida',
'city_id' => DB::table('cities')->where('name','Veracruz')->first()->id
],

['name' => 'Hacienda Paraíso',
'city_id' => DB::table('cities')->where('name','Veracruz')->first()->id
],

['name' => 'Crystal Lagoons',
'city_id' => DB::table('cities')->where('name','Veracruz')->first()->id
],

['name' => 'Predio 1',
'city_id' => DB::table('cities')->where('name','Veracruz')->first()->id
],

['name' => 'Predio 2',
'city_id' => DB::table('cities')->where('name','Veracruz')->first()->id
],

['name' => 'Predio 3',
'city_id' => DB::table('cities')->where('name','Veracruz')->first()->id
],

['name' => 'Predio 4',
'city_id' => DB::table('cities')->where('name','Veracruz')->first()->id
],

['name' => 'Geovillas Del Puerto',
'city_id' => DB::table('cities')->where('name','Veracruz')->first()->id
],

['name' => 'Periodismo Veraz',
'city_id' => DB::table('cities')->where('name','Veracruz')->first()->id
],

['name' => 'Siglo XXI',
'city_id' => DB::table('cities')->where('name','Veracruz')->first()->id
],

['name' => 'Emiliano Zapata',
'city_id' => DB::table('cities')->where('name','Veracruz')->first()->id
],

['name' => 'Laureles',
'city_id' => DB::table('cities')->where('name','Veracruz')->first()->id
],

['name' => 'Adolfo López Mateos',
'city_id' => DB::table('cities')->where('name','Veracruz')->first()->id
],

['name' => 'El Coyol (1a Sección)',
'city_id' => DB::table('cities')->where('name','Veracruz')->first()->id
],

['name' => 'Coyol Magisterio',
'city_id' => DB::table('cities')->where('name','Veracruz')->first()->id
],

['name' => 'Ficus',
'city_id' => DB::table('cities')->where('name','Veracruz')->first()->id
],

['name' => 'Las Palmas',
'city_id' => DB::table('cities')->where('name','Veracruz')->first()->id
],

['name' => 'Coyol Seccion IV',
'city_id' => DB::table('cities')->where('name','Veracruz')->first()->id
],

['name' => 'Coyol Zona C',
'city_id' => DB::table('cities')->where('name','Veracruz')->first()->id
],

['name' => 'Coyol Framboyanes',
'city_id' => DB::table('cities')->where('name','Veracruz')->first()->id
],

['name' => 'Coyol Seccion A',
'city_id' => DB::table('cities')->where('name','Veracruz')->first()->id
],

['name' => 'Coyol Zona D',
'city_id' => DB::table('cities')->where('name','Veracruz')->first()->id
],

['name' => 'Coyol FOVISSSTE',
'city_id' => DB::table('cities')->where('name','Veracruz')->first()->id
],

['name' => 'Coyol Sur',
'city_id' => DB::table('cities')->where('name','Veracruz')->first()->id
],

['name' => 'El Coyol',
'city_id' => DB::table('cities')->where('name','Veracruz')->first()->id
],

['name' => 'Vista Mar',
'city_id' => DB::table('cities')->where('name','Veracruz')->first()->id
],

['name' => 'El Coyol Ivec',
'city_id' => DB::table('cities')->where('name','Veracruz')->first()->id
],

['name' => 'Nezahualcóyotl',
'city_id' => DB::table('cities')->where('name','Veracruz')->first()->id
],

['name' => 'INFONAVIT Medano Buenavista',
'city_id' => DB::table('cities')->where('name','Veracruz')->first()->id
],

['name' => 'Los Faros',
'city_id' => DB::table('cities')->where('name','Veracruz')->first()->id
],

['name' => 'Setse',
'city_id' => DB::table('cities')->where('name','Veracruz')->first()->id
],

['name' => 'Candido Aguilar',
'city_id' => DB::table('cities')->where('name','Veracruz')->first()->id
],

['name' => 'Cuauhtémoc',
'city_id' => DB::table('cities')->where('name','Veracruz')->first()->id
],

['name' => 'Laguna Real',
'city_id' => DB::table('cities')->where('name','Veracruz')->first()->id
],

['name' => 'Cuauhtémoc',
'city_id' => DB::table('cities')->where('name','Veracruz')->first()->id
],

['name' => 'Pedro Ignacio Mata',
'city_id' => DB::table('cities')->where('name','Veracruz')->first()->id
],

['name' => 'Aries',
'city_id' => DB::table('cities')->where('name','Veracruz')->first()->id
],

['name' => 'Astilleros de Veracruz',
'city_id' => DB::table('cities')->where('name','Veracruz')->first()->id
],

['name' => 'Camino Real',
'city_id' => DB::table('cities')->where('name','Veracruz')->first()->id
],

['name' => 'Villa Rica 1',
'city_id' => DB::table('cities')->where('name','Veracruz')->first()->id
],

['name' => 'Villa Rica 2',
'city_id' => DB::table('cities')->where('name','Veracruz')->first()->id
],

['name' => 'Álika',
'city_id' => DB::table('cities')->where('name','Veracruz')->first()->id
],

['name' => 'Riveras de Río Medio',
'city_id' => DB::table('cities')->where('name','Veracruz')->first()->id
],

['name' => 'Las Hortalizas FOVISSSTE',
'city_id' => DB::table('cities')->where('name','Veracruz')->first()->id
],

['name' => 'Chalchihuecan',
'city_id' => DB::table('cities')->where('name','Veracruz')->first()->id
],

['name' => 'Renacimiento',
'city_id' => DB::table('cities')->where('name','Veracruz')->first()->id
],

['name' => 'Granjas de Rio Medio',
'city_id' => DB::table('cities')->where('name','Veracruz')->first()->id
],

['name' => 'Las Hortalizas',
'city_id' => DB::table('cities')->where('name','Veracruz')->first()->id
],

['name' => 'Marina Mercante',
'city_id' => DB::table('cities')->where('name','Veracruz')->first()->id
],

['name' => 'Patria',
'city_id' => DB::table('cities')->where('name','Veracruz')->first()->id
],

['name' => 'Condado Valle Dorado',
'city_id' => DB::table('cities')->where('name','Veracruz')->first()->id
],

['name' => 'Del Norte',
'city_id' => DB::table('cities')->where('name','Veracruz')->first()->id
],

['name' => 'Residencial El Campanario',
'city_id' => DB::table('cities')->where('name','Veracruz')->first()->id
],

['name' => 'Geovillas los Pinos',
'city_id' => DB::table('cities')->where('name','Veracruz')->first()->id
],

['name' => 'INFONAVIT Del Proletariado',
'city_id' => DB::table('cities')->where('name','Veracruz')->first()->id
],

['name' => 'Parke 2000',
'city_id' => DB::table('cities')->where('name','Veracruz')->first()->id
],

['name' => 'Costa Dorada',
'city_id' => DB::table('cities')->where('name','Veracruz')->first()->id
],

['name' => 'Los Torrentes',
'city_id' => DB::table('cities')->where('name','Veracruz')->first()->id
],

['name' => 'Geovillas los Pinos II',
'city_id' => DB::table('cities')->where('name','Veracruz')->first()->id
],

['name' => 'Colinas de San Jorge',
'city_id' => DB::table('cities')->where('name','Veracruz')->first()->id
],

['name' => 'Colinas de Santa Fe',
'city_id' => DB::table('cities')->where('name','Veracruz')->first()->id
],

['name' => 'Heberto Castillo Martíinez',
'city_id' => DB::table('cities')->where('name','Veracruz')->first()->id
],

['name' => 'Arboledas',
'city_id' => DB::table('cities')->where('name','Veracruz')->first()->id
],

['name' => 'Oasis',
'city_id' => DB::table('cities')->where('name','Veracruz')->first()->id
],

['name' => 'La Herradura',
'city_id' => DB::table('cities')->where('name','Veracruz')->first()->id
],

['name' => 'Real de los Pinos',
'city_id' => DB::table('cities')->where('name','Veracruz')->first()->id
],

['name' => 'Las Brisas',
'city_id' => DB::table('cities')->where('name','Veracruz')->first()->id
],

['name' => 'Lomas de Río Medio',
'city_id' => DB::table('cities')->where('name','Veracruz')->first()->id
],

['name' => 'Río Medio',
'city_id' => DB::table('cities')->where('name','Veracruz')->first()->id
],

['name' => 'Lombardo Toledano',
'city_id' => DB::table('cities')->where('name','Veracruz')->first()->id
],

['name' => 'INFONAVIT las Brisas',
'city_id' => DB::table('cities')->where('name','Veracruz')->first()->id
],

['name' => 'Lomas de Río Medio II',
'city_id' => DB::table('cities')->where('name','Veracruz')->first()->id
],

['name' => 'Lomas de Río Medio III',
'city_id' => DB::table('cities')->where('name','Veracruz')->first()->id
],

['name' => 'Lomas de Río Medio Cuatro',
'city_id' => DB::table('cities')->where('name','Veracruz')->first()->id
],

['name' => 'Playa Linda',
'city_id' => DB::table('cities')->where('name','Veracruz')->first()->id
],

['name' => 'Lomas Del Vergel',
'city_id' => DB::table('cities')->where('name','Veracruz')->first()->id
],

['name' => 'Fernando López Arias',
'city_id' => DB::table('cities')->where('name','Veracruz')->first()->id
],

['name' => 'Agrícola Industrial',
'city_id' => DB::table('cities')->where('name','Veracruz')->first()->id
],

['name' => 'Sánchez',
'city_id' => DB::table('cities')->where('name','Veracruz')->first()->id
],

['name' => 'Cortés',
'city_id' => DB::table('cities')->where('name','Veracruz')->first()->id
],

['name' => 'Geovillas Campestre',
'city_id' => DB::table('cities')->where('name','Veracruz')->first()->id
],

['name' => 'Palma Real',
'city_id' => DB::table('cities')->where('name','Veracruz')->first()->id
],

['name' => 'Palma Real II',
'city_id' => DB::table('cities')->where('name','Veracruz')->first()->id
],

['name' => 'Ampliación Palma Real II',
'city_id' => DB::table('cities')->where('name','Veracruz')->first()->id
],

['name' => 'Rincón de Palma Real',
'city_id' => DB::table('cities')->where('name','Veracruz')->first()->id
],

['name' => 'Adolfo Ruiz Cortines Ipe',
'city_id' => DB::table('cities')->where('name','Veracruz')->first()->id
],

['name' => 'Empleados Municipales',
'city_id' => DB::table('cities')->where('name','Veracruz')->first()->id
],

['name' => 'Pinitos',
'city_id' => DB::table('cities')->where('name','Veracruz')->first()->id
],

['name' => 'Tablajeros',
'city_id' => DB::table('cities')->where('name','Veracruz')->first()->id
],

['name' => 'Buenavista INFONAVIT',
'city_id' => DB::table('cities')->where('name','Veracruz')->first()->id
],

['name' => 'Reserva Tarimoya I',
'city_id' => DB::table('cities')->where('name','Veracruz')->first()->id
],

['name' => 'Bosques de Tarimoya',
'city_id' => DB::table('cities')->where('name','Veracruz')->first()->id
],

['name' => 'Ejido Tarimoya',
'city_id' => DB::table('cities')->where('name','Veracruz')->first()->id
],

['name' => '10 de Febrero',
'city_id' => DB::table('cities')->where('name','Veracruz')->first()->id
],

['name' => 'Reserva Tarimoya II',
'city_id' => DB::table('cities')->where('name','Veracruz')->first()->id
],

['name' => 'Reserva Tarimoya III',
'city_id' => DB::table('cities')->where('name','Veracruz')->first()->id
],

['name' => 'Lomas Del Angel',
'city_id' => DB::table('cities')->where('name','Veracruz')->first()->id
],

['name' => 'Puerto Seco',
'city_id' => DB::table('cities')->where('name','Veracruz')->first()->id
],

['name' => 'Santa Teresa',
'city_id' => DB::table('cities')->where('name','Veracruz')->first()->id
],

['name' => 'Las Torres',
'city_id' => DB::table('cities')->where('name','Veracruz')->first()->id
],

['name' => 'Quinta María',
'city_id' => DB::table('cities')->where('name','Veracruz')->first()->id
],

['name' => 'Miguel Ángel de Quevedo',
'city_id' => DB::table('cities')->where('name','Veracruz')->first()->id
],

['name' => 'Los Pinos',
'city_id' => DB::table('cities')->where('name','Veracruz')->first()->id
],

['name' => 'Tecnológico',
'city_id' => DB::table('cities')->where('name','Veracruz')->first()->id
],

['name' => 'Jardín',
'city_id' => DB::table('cities')->where('name','Veracruz')->first()->id
],

['name' => 'Rincón Mexicano',
'city_id' => DB::table('cities')->where('name','Veracruz')->first()->id
],

['name' => 'Virgilio Uribe',
'city_id' => DB::table('cities')->where('name','Veracruz')->first()->id
],

['name' => 'Independencia',
'city_id' => DB::table('cities')->where('name','Veracruz')->first()->id
],

['name' => 'Formando Hogar',
'city_id' => DB::table('cities')->where('name','Veracruz')->first()->id
],

['name' => 'Miguel Alemán',
'city_id' => DB::table('cities')->where('name','Veracruz')->first()->id
],

['name' => 'Manuel Contreras',
'city_id' => DB::table('cities')->where('name','Veracruz')->first()->id
],

['name' => 'Ricardo Flores Magón',
'city_id' => DB::table('cities')->where('name','Veracruz')->first()->id
],

['name' => 'Ignacio Zaragoza',
'city_id' => DB::table('cities')->where('name','Veracruz')->first()->id
],

['name' => 'Electricistas',
'city_id' => DB::table('cities')->where('name','Veracruz')->first()->id
],

['name' => 'Campestre',
'city_id' => DB::table('cities')->where('name','Veracruz')->first()->id
],

['name' => 'San José',
'city_id' => DB::table('cities')->where('name','Veracruz')->first()->id
],

['name' => 'Valente Díaz INFONAVIT',
'city_id' => DB::table('cities')->where('name','Veracruz')->first()->id
],

['name' => 'Moderno',
'city_id' => DB::table('cities')->where('name','Veracruz')->first()->id
],

['name' => 'Reforma',
'city_id' => DB::table('cities')->where('name','Veracruz')->first()->id
],

['name' => 'Del Maestro',
'city_id' => DB::table('cities')->where('name','Veracruz')->first()->id
],

['name' => 'La Doctora',
'city_id' => DB::table('cities')->where('name','Veracruz')->first()->id
],

['name' => 'Las Enfermeras',
'city_id' => DB::table('cities')->where('name','Veracruz')->first()->id
],

['name' => 'Militar',
'city_id' => DB::table('cities')->where('name','Veracruz')->first()->id
],

['name' => 'Las Antillas',
'city_id' => DB::table('cities')->where('name','Veracruz')->first()->id
],

['name' => 'Granjas Veracruz',
'city_id' => DB::table('cities')->where('name','Veracruz')->first()->id
],

['name' => 'Floresta',
'city_id' => DB::table('cities')->where('name','Veracruz')->first()->id
],

['name' => 'Articulo 123',
'city_id' => DB::table('cities')->where('name','Veracruz')->first()->id
],

['name' => 'Malibran',
'city_id' => DB::table('cities')->where('name','Veracruz')->first()->id
],

['name' => 'Floresta 80',
'city_id' => DB::table('cities')->where('name','Veracruz')->first()->id
],

['name' => 'Arboledas',
'city_id' => DB::table('cities')->where('name','Veracruz')->first()->id
],

['name' => 'El Jobo',
'city_id' => DB::table('cities')->where('name','Veracruz')->first()->id
],

['name' => 'Flores Del Valle',
'city_id' => DB::table('cities')->where('name','Veracruz')->first()->id
],

['name' => 'Francisco Villa',
'city_id' => DB::table('cities')->where('name','Veracruz')->first()->id
],

['name' => 'Rafael Díaz Serdan',
'city_id' => DB::table('cities')->where('name','Veracruz')->first()->id
],

['name' => 'Central de Abastos',
'city_id' => DB::table('cities')->where('name','Veracruz')->first()->id
],

['name' => 'María C de Rojas',
'city_id' => DB::table('cities')->where('name','Veracruz')->first()->id
],

['name' => 'Los Sauces',
'city_id' => DB::table('cities')->where('name','Veracruz')->first()->id
],

['name' => 'Granjas de La Boticaria',
'city_id' => DB::table('cities')->where('name','Veracruz')->first()->id
],

['name' => 'Lorenzo Barcelata',
'city_id' => DB::table('cities')->where('name','Veracruz')->first()->id
],

['name' => 'Alfredo V Bonfil',
'city_id' => DB::table('cities')->where('name','Veracruz')->first()->id
],

['name' => 'Los Ríos',
'city_id' => DB::table('cities')->where('name','Veracruz')->first()->id
],

['name' => 'Bajos del Jobo (Puente Moreno)',
'city_id' => DB::table('cities')->where('name','Veracruz')->first()->id
],

['name' => 'Enrique C Rebsamen',
'city_id' => DB::table('cities')->where('name','Veracruz')->first()->id
],

['name' => 'Las Razas',
'city_id' => DB::table('cities')->where('name','Veracruz')->first()->id
],

['name' => 'Álamo',
'city_id' => DB::table('cities')->where('name','Pánuco')->first()->id
],

['name' => 'La Trinidad',
'city_id' => DB::table('cities')->where('name','Pánuco')->first()->id
],

['name' => 'Paciencia',
'city_id' => DB::table('cities')->where('name','Pánuco')->first()->id
],

['name' => 'Tamicho y Vichinchijol',
'city_id' => DB::table('cities')->where('name','Pánuco')->first()->id
],

['name' => 'Tanjuco',
'city_id' => DB::table('cities')->where('name','Pánuco')->first()->id
],

['name' => 'Vuelta de las Adjuntas',
'city_id' => DB::table('cities')->where('name','Pánuco')->first()->id
],

['name' => 'Oviedo',
'city_id' => DB::table('cities')->where('name','Pánuco')->first()->id
],

['name' => 'Palmas Reales',
'city_id' => DB::table('cities')->where('name','Pánuco')->first()->id
],

['name' => 'Ex-Hacienda Chintón (La Quina)',
'city_id' => DB::table('cities')->where('name','Pánuco')->first()->id
],

['name' => 'Chijolito',
'city_id' => DB::table('cities')->where('name','Pánuco')->first()->id
],

['name' => 'Miguel Hidalgo',
'city_id' => DB::table('cities')->where('name','Pánuco')->first()->id
],

['name' => 'Medio Camino',
'city_id' => DB::table('cities')->where('name','Pánuco')->first()->id
],

['name' => 'San Andrés',
'city_id' => DB::table('cities')->where('name','Pánuco')->first()->id
],

['name' => 'Chijol Diecisiete',
'city_id' => DB::table('cities')->where('name','Pánuco')->first()->id
],

['name' => 'Uno Dicha',
'city_id' => DB::table('cities')->where('name','Pánuco')->first()->id
],

['name' => 'Jopoy',
'city_id' => DB::table('cities')->where('name','Pánuco')->first()->id
],

['name' => 'Barrotera del Tamesí',
'city_id' => DB::table('cities')->where('name','Pánuco')->first()->id
],

['name' => 'El Terrero',
'city_id' => DB::table('cities')->where('name','Pánuco')->first()->id
],

['name' => 'Los Cedros',
'city_id' => DB::table('cities')->where('name','Pánuco')->first()->id
],

['name' => 'Villa Cacalilao Dos',
'city_id' => DB::table('cities')->where('name','Pánuco')->first()->id
],

['name' => 'Corcovado',
'city_id' => DB::table('cities')->where('name','Pánuco')->first()->id
],

['name' => 'Méndez',
'city_id' => DB::table('cities')->where('name','Pánuco')->first()->id
],

['name' => 'Chapacao Dos',
'city_id' => DB::table('cities')->where('name','Pánuco')->first()->id
],

['name' => 'Tlaxcalita',
'city_id' => DB::table('cities')->where('name','Pánuco')->first()->id
],

['name' => 'Monterrey',
'city_id' => DB::table('cities')->where('name','Pánuco')->first()->id
],

['name' => 'Piloto',
'city_id' => DB::table('cities')->where('name','Pánuco')->first()->id
],

['name' => 'Lázaro Cárdenas',
'city_id' => DB::table('cities')->where('name','Pánuco')->first()->id
],

['name' => 'Antonio J. Bermúdez',
'city_id' => DB::table('cities')->where('name','Pánuco')->first()->id
],

['name' => 'Confederación Nacional Campesina (Canoas)',
'city_id' => DB::table('cities')->where('name','Pánuco')->first()->id
],

['name' => 'Guayalejo',
'city_id' => DB::table('cities')->where('name','Pánuco')->first()->id
],

['name' => 'Independencia (La Periodista)',
'city_id' => DB::table('cities')->where('name','Pánuco')->first()->id
],

['name' => 'La Costa',
'city_id' => DB::table('cities')->where('name','Pánuco')->first()->id
],

['name' => 'Tamos',
'city_id' => DB::table('cities')->where('name','Pánuco')->first()->id
],

['name' => 'Laguna de La Costa',
'city_id' => DB::table('cities')->where('name','Pánuco')->first()->id
],

['name' => 'Las Malvinas',
'city_id' => DB::table('cities')->where('name','Pánuco')->first()->id
],

['name' => 'Moralillo',
'city_id' => DB::table('cities')->where('name','Pánuco')->first()->id
],

['name' => 'Santa Elena',
'city_id' => DB::table('cities')->where('name','Pánuco')->first()->id
],

['name' => 'Calentadores Dos',
'city_id' => DB::table('cities')->where('name','Pánuco')->first()->id
],

['name' => 'Chunca',
'city_id' => DB::table('cities')->where('name','Pánuco')->first()->id
],

['name' => 'Nuevo Michoacán (La Michoacana)',
'city_id' => DB::table('cities')->where('name','Pánuco')->first()->id
],

['name' => 'Reventadero',
'city_id' => DB::table('cities')->where('name','Pánuco')->first()->id
],

['name' => 'Tampacas',
'city_id' => DB::table('cities')->where('name','Pánuco')->first()->id
],

['name' => 'Chijoles',
'city_id' => DB::table('cities')->where('name','Pánuco')->first()->id
],

['name' => 'Santana',
'city_id' => DB::table('cities')->where('name','Pánuco')->first()->id
],

['name' => 'Aquiles Serdán',
'city_id' => DB::table('cities')->where('name','Pánuco')->first()->id
],

['name' => 'Aguacate',
'city_id' => DB::table('cities')->where('name','Pánuco')->first()->id
],

['name' => 'El Cube de Tamante',
'city_id' => DB::table('cities')->where('name','Pánuco')->first()->id
],

['name' => 'La Palangana',
'city_id' => DB::table('cities')->where('name','Pánuco')->first()->id
],

['name' => 'Barco y Periquillo',
'city_id' => DB::table('cities')->where('name','Pánuco')->first()->id
],

['name' => 'Tamboyoche y Topila',
'city_id' => DB::table('cities')->where('name','Pánuco')->first()->id
],

['name' => 'Vega de Otates',
'city_id' => DB::table('cities')->where('name','Pánuco')->first()->id
],

['name' => 'Tamante',
'city_id' => DB::table('cities')->where('name','Pánuco')->first()->id
],

['name' => 'El Molino',
'city_id' => DB::table('cities')->where('name','Pánuco')->first()->id
],

['name' => 'Chintón de las Flores',
'city_id' => DB::table('cities')->where('name','Pánuco')->first()->id
],

['name' => 'Heriberto Jara',
'city_id' => DB::table('cities')->where('name','Pánuco')->first()->id
],

['name' => 'Ciudad Cuauhtémoc',
'city_id' => DB::table('cities')->where('name','Pueblo Viejo')->first()->id
],

['name' => 'San Isidro',
'city_id' => DB::table('cities')->where('name','Pueblo Viejo')->first()->id
],

['name' => 'San Rafael',
'city_id' => DB::table('cities')->where('name','Pueblo Viejo')->first()->id
],

['name' => 'Santa Elena',
'city_id' => DB::table('cities')->where('name','Pueblo Viejo')->first()->id
],

['name' => 'Predio La Fuente',
'city_id' => DB::table('cities')->where('name','Pueblo Viejo')->first()->id
],

['name' => 'Unión Popular',
'city_id' => DB::table('cities')->where('name','Pueblo Viejo')->first()->id
],

['name' => 'Ampliación Benito Juárez',
'city_id' => DB::table('cities')->where('name','Pueblo Viejo')->first()->id
],

['name' => 'Benito Juárez',
'city_id' => DB::table('cities')->where('name','Pueblo Viejo')->first()->id
],

['name' => 'California',
'city_id' => DB::table('cities')->where('name','Pueblo Viejo')->first()->id
],

['name' => 'Margaritas',
'city_id' => DB::table('cities')->where('name','Pueblo Viejo')->first()->id
],

['name' => 'Miguel Alemán',
'city_id' => DB::table('cities')->where('name','Pueblo Viejo')->first()->id
],

['name' => 'Bellas Artes',
'city_id' => DB::table('cities')->where('name','Pueblo Viejo')->first()->id
],

['name' => 'Bugambilias',
'city_id' => DB::table('cities')->where('name','Pueblo Viejo')->first()->id
],

['name' => 'Ojital',
'city_id' => DB::table('cities')->where('name','Pueblo Viejo')->first()->id
],

['name' => 'Anáhuac',
'city_id' => DB::table('cities')->where('name','Pueblo Viejo')->first()->id
],

['name' => 'Paciencia y Aguacate (Santa Fe)',
'city_id' => DB::table('cities')->where('name','Pueblo Viejo')->first()->id
],

['name' => 'La Ladrillera',
'city_id' => DB::table('cities')->where('name','Pueblo Viejo')->first()->id
],

['name' => 'Kilómetro Veintiuno',
'city_id' => DB::table('cities')->where('name','Pueblo Viejo')->first()->id
],

['name' => 'Adalberto Tejeda',
'city_id' => DB::table('cities')->where('name','Pueblo Viejo')->first()->id
],

['name' => 'Hidalgo Centro',
'city_id' => DB::table('cities')->where('name','Pueblo Viejo')->first()->id
],

['name' => 'Petrolera Lindavista',
'city_id' => DB::table('cities')->where('name','Pueblo Viejo')->first()->id
],

['name' => 'Mata Redonda',
'city_id' => DB::table('cities')->where('name','Pueblo Viejo')->first()->id
],

['name' => 'Mata de Pedernales',
'city_id' => DB::table('cities')->where('name','Pueblo Viejo')->first()->id
],

['name' => 'María Quinta de las Nieves',
'city_id' => DB::table('cities')->where('name','Pueblo Viejo')->first()->id
],

['name' => 'Primero de Mayo',
'city_id' => DB::table('cities')->where('name','Pueblo Viejo')->first()->id
],

['name' => 'Bella Vista',
'city_id' => DB::table('cities')->where('name','Pueblo Viejo')->first()->id
],

['name' => 'Cabo Rojo (Novillos) [Ganadera]',
'city_id' => DB::table('cities')->where('name','Tampico Alto')->first()->id
],

['name' => 'El Jobo (Escribano)',
'city_id' => DB::table('cities')->where('name','Tampico Alto')->first()->id
],

['name' => 'Llano de Bustos',
'city_id' => DB::table('cities')->where('name','Tampico Alto')->first()->id
],

['name' => 'Garrapatas',
'city_id' => DB::table('cities')->where('name','Tampico Alto')->first()->id
],

['name' => 'Las Chacas',
'city_id' => DB::table('cities')->where('name','Tampico Alto')->first()->id
],

['name' => 'La Rivera',
'city_id' => DB::table('cities')->where('name','Tampico Alto')->first()->id
],

['name' => 'Kilómetro Cien',
'city_id' => DB::table('cities')->where('name','Tampico Alto')->first()->id
],

['name' => 'Topila',
'city_id' => DB::table('cities')->where('name','Tampico Alto')->first()->id
],

['name' => 'Coyoles',
'city_id' => DB::table('cities')->where('name','Tampico Alto')->first()->id
],

['name' => 'San Lorenzo',
'city_id' => DB::table('cities')->where('name','Tampico Alto')->first()->id
],

['name' => 'Los Jobos',
'city_id' => DB::table('cities')->where('name','Tampico Alto')->first()->id
],

['name' => 'Estación Palacho',
'city_id' => DB::table('cities')->where('name','Tampico Alto')->first()->id
],

['name' => 'Carbono',
'city_id' => DB::table('cities')->where('name','Tampico Alto')->first()->id
],

['name' => 'Tampico Alto Centro',
'city_id' => DB::table('cities')->where('name','Tampico Alto')->first()->id
],

['name' => 'Miramar',
'city_id' => DB::table('cities')->where('name','Tampico Alto')->first()->id
],

['name' => 'Cnop',
'city_id' => DB::table('cities')->where('name','Tampico Alto')->first()->id
],

['name' => 'Buenavista',
'city_id' => DB::table('cities')->where('name','Tampico Alto')->first()->id
],

['name' => 'Las Flores',
'city_id' => DB::table('cities')->where('name','Tampico Alto')->first()->id
],

['name' => 'Tempoal Centro',
'city_id' => DB::table('cities')->where('name','Tempoal')->first()->id
],

['name' => 'El Alto',
'city_id' => DB::table('cities')->where('name','Tempoal')->first()->id
],

['name' => 'Ricardo Flores Magón',
'city_id' => DB::table('cities')->where('name','Tempoal')->first()->id
],

['name' => 'La Brisa',
'city_id' => DB::table('cities')->where('name','Tempoal')->first()->id
],

['name' => '20 de Noviembre',
'city_id' => DB::table('cities')->where('name','Tempoal')->first()->id
],

['name' => 'Benito Juárez',
'city_id' => DB::table('cities')->where('name','Tempoal')->first()->id
],

['name' => 'Lázaro Cárdenas',
'city_id' => DB::table('cities')->where('name','Tempoal')->first()->id
],

['name' => 'La Gloria',
'city_id' => DB::table('cities')->where('name','Tempoal')->first()->id
],

['name' => 'Revolución Verde',
'city_id' => DB::table('cities')->where('name','Tempoal')->first()->id
],

['name' => 'El Rastro',
'city_id' => DB::table('cities')->where('name','Tempoal')->first()->id
],

['name' => 'La Covacha',
'city_id' => DB::table('cities')->where('name','Tempoal')->first()->id
],

['name' => 'La Quinta Colon',
'city_id' => DB::table('cities')->where('name','Tempoal')->first()->id
],

['name' => 'Barranca',
'city_id' => DB::table('cities')->where('name','Tempoal')->first()->id
],

['name' => 'Pescado',
'city_id' => DB::table('cities')->where('name','Tempoal')->first()->id
],

['name' => 'Mesillas',
'city_id' => DB::table('cities')->where('name','Tempoal')->first()->id
],

['name' => 'La Sombra',
'city_id' => DB::table('cities')->where('name','Tempoal')->first()->id
],

['name' => 'Chicayan',
'city_id' => DB::table('cities')->where('name','Tempoal')->first()->id
],

['name' => 'Horcon',
'city_id' => DB::table('cities')->where('name','Tempoal')->first()->id
],

['name' => 'Guayalitos',
'city_id' => DB::table('cities')->where('name','Tempoal')->first()->id
],

['name' => 'Zapotalito',
'city_id' => DB::table('cities')->where('name','Tempoal')->first()->id
],

['name' => 'Cruz de Palma (El Carmen)',
'city_id' => DB::table('cities')->where('name','Tempoal')->first()->id
],

['name' => 'Mesa de Santiago',
'city_id' => DB::table('cities')->where('name','Tempoal')->first()->id
],

['name' => '3 Palmas',
'city_id' => DB::table('cities')->where('name','Tempoal')->first()->id
],

['name' => 'Terrero',
'city_id' => DB::table('cities')->where('name','Tempoal')->first()->id
],

['name' => 'Tamemas',
'city_id' => DB::table('cities')->where('name','Tempoal')->first()->id
],

['name' => 'Rancho Nuevo',
'city_id' => DB::table('cities')->where('name','Tempoal')->first()->id
],

['name' => 'Las Chacas',
'city_id' => DB::table('cities')->where('name','Tempoal')->first()->id
],

['name' => 'El Sauce',
'city_id' => DB::table('cities')->where('name','Tempoal')->first()->id
],

['name' => 'Llano Grande',
'city_id' => DB::table('cities')->where('name','Tempoal')->first()->id
],

['name' => 'El Tule',
'city_id' => DB::table('cities')->where('name','Tempoal')->first()->id
],

['name' => 'El Chijol',
'city_id' => DB::table('cities')->where('name','Tempoal')->first()->id
],

['name' => 'Las Mesitas Terrero',
'city_id' => DB::table('cities')->where('name','Tempoal')->first()->id
],

['name' => 'Santa Cruz',
'city_id' => DB::table('cities')->where('name','Tempoal')->first()->id
],

['name' => 'El Limón',
'city_id' => DB::table('cities')->where('name','Tempoal')->first()->id
],

['name' => 'Aguacate',
'city_id' => DB::table('cities')->where('name','Tempoal')->first()->id
],

['name' => 'Santa Fe',
'city_id' => DB::table('cities')->where('name','Tempoal')->first()->id
],

['name' => 'Tierra Colorada',
'city_id' => DB::table('cities')->where('name','Tempoal')->first()->id
],

['name' => 'Armadillo',
'city_id' => DB::table('cities')->where('name','Tempoal')->first()->id
],

['name' => 'Agua Nueva',
'city_id' => DB::table('cities')->where('name','Tempoal')->first()->id
],

['name' => 'El Barbecho',
'city_id' => DB::table('cities')->where('name','Tempoal')->first()->id
],

['name' => 'Corozal',
'city_id' => DB::table('cities')->where('name','Tempoal')->first()->id
],

['name' => 'Volantín',
'city_id' => DB::table('cities')->where('name','Tempoal')->first()->id
],

['name' => 'Rangel',
'city_id' => DB::table('cities')->where('name','Tempoal')->first()->id
],

['name' => 'La Reforma',
'city_id' => DB::table('cities')->where('name','Tempoal')->first()->id
],

['name' => 'El Ranchito',
'city_id' => DB::table('cities')->where('name','Tempoal')->first()->id
],

['name' => 'Zapotal San Lorenzo',
'city_id' => DB::table('cities')->where('name','Tempoal')->first()->id
],

['name' => 'El Hule',
'city_id' => DB::table('cities')->where('name','Tempoal')->first()->id
],

['name' => 'El Barranco',
'city_id' => DB::table('cities')->where('name','Tempoal')->first()->id
],

['name' => 'Bejuco',
'city_id' => DB::table('cities')->where('name','Ozuluama de Mascareñas')->first()->id
],

['name' => 'Crnel. Mascarereñas',
'city_id' => DB::table('cities')->where('name','Ozuluama de Mascareñas')->first()->id
],

['name' => 'Cues y Cebadilla',
'city_id' => DB::table('cities')->where('name','Ozuluama de Mascareñas')->first()->id
],

['name' => 'Jagüeyes y Esterillo',
'city_id' => DB::table('cities')->where('name','Ozuluama de Mascareñas')->first()->id
],

['name' => 'Ozuluama de Mascareñas',
'city_id' => DB::table('cities')->where('name','Ozuluama de Mascareñas')->first()->id
],

['name' => 'San Antonio Tamijui',
'city_id' => DB::table('cities')->where('name','Ozuluama de Mascareñas')->first()->id
],

['name' => 'Tanceme',
'city_id' => DB::table('cities')->where('name','Ozuluama de Mascareñas')->first()->id
],

['name' => 'SAHAOP',
'city_id' => DB::table('cities')->where('name','Ozuluama de Mascareñas')->first()->id
],

['name' => 'Lomas de Tancachil',
'city_id' => DB::table('cities')->where('name','Ozuluama de Mascareñas')->first()->id
],

['name' => 'Juan Camilo Mouriño',
'city_id' => DB::table('cities')->where('name','Ozuluama de Mascareñas')->first()->id
],

['name' => 'Cebadilla',
'city_id' => DB::table('cities')->where('name','Ozuluama de Mascareñas')->first()->id
],

['name' => 'Paso Real',
'city_id' => DB::table('cities')->where('name','Ozuluama de Mascareñas')->first()->id
],

['name' => 'Chapancal',
'city_id' => DB::table('cities')->where('name','Ozuluama de Mascareñas')->first()->id
],

['name' => 'Belisario Dominguez',
'city_id' => DB::table('cities')->where('name','Ozuluama de Mascareñas')->first()->id
],

['name' => 'Kilómetro 75',
'city_id' => DB::table('cities')->where('name','Ozuluama de Mascareñas')->first()->id
],

['name' => 'La Llave',
'city_id' => DB::table('cities')->where('name','Ozuluama de Mascareñas')->first()->id
],

['name' => 'San Javier y Cazadero',
'city_id' => DB::table('cities')->where('name','Ozuluama de Mascareñas')->first()->id
],

['name' => 'San Isidro',
'city_id' => DB::table('cities')->where('name','Ozuluama de Mascareñas')->first()->id
],

['name' => 'Vanguardia Veracruzana',
'city_id' => DB::table('cities')->where('name','Ozuluama de Mascareñas')->first()->id
],

['name' => 'Cucharas',
'city_id' => DB::table('cities')->where('name','Ozuluama de Mascareñas')->first()->id
],

['name' => 'Moreno (Isla Juan A. Ramírez)',
'city_id' => DB::table('cities')->where('name','Ozuluama de Mascareñas')->first()->id
],

['name' => 'La Laja',
'city_id' => DB::table('cities')->where('name','Ozuluama de Mascareñas')->first()->id
],

['name' => 'Potrerillos',
'city_id' => DB::table('cities')->where('name','Ozuluama de Mascareñas')->first()->id
],

['name' => 'Alto Del Tigre',
'city_id' => DB::table('cities')->where('name','Ozuluama de Mascareñas')->first()->id
],

['name' => 'El Mirador',
'city_id' => DB::table('cities')->where('name','Ozuluama de Mascareñas')->first()->id
],

['name' => 'La Puente',
'city_id' => DB::table('cities')->where('name','Ozuluama de Mascareñas')->first()->id
],

['name' => 'Tamontao',
'city_id' => DB::table('cities')->where('name','Ozuluama de Mascareñas')->first()->id
],

['name' => 'Cardonal',
'city_id' => DB::table('cities')->where('name','Tantoyuca')->first()->id
],

['name' => 'Chijolar',
'city_id' => DB::table('cities')->where('name','Tantoyuca')->first()->id
],

['name' => 'Ejido Cuauhtémoc (Chila Curtaza)',
'city_id' => DB::table('cities')->where('name','Tantoyuca')->first()->id
],

['name' => 'Casitas Chila Pérez',
'city_id' => DB::table('cities')->where('name','Tantoyuca')->first()->id
],

['name' => 'El Chopopo',
'city_id' => DB::table('cities')->where('name','Tantoyuca')->first()->id
],

['name' => 'Tecomate',
'city_id' => DB::table('cities')->where('name','Tantoyuca')->first()->id
],

['name' => 'Buena Vista',
'city_id' => DB::table('cities')->where('name','Tantoyuca')->first()->id
],

['name' => 'Ixcanelco',
'city_id' => DB::table('cities')->where('name','Tantoyuca')->first()->id
],

['name' => 'Jacubal',
'city_id' => DB::table('cities')->where('name','Tantoyuca')->first()->id
],

['name' => 'Tres Palmas',
'city_id' => DB::table('cities')->where('name','Tantoyuca')->first()->id
],

['name' => 'San Sebastián',
'city_id' => DB::table('cities')->where('name','Tantoyuca')->first()->id
],

['name' => 'Rancho Nuevo',
'city_id' => DB::table('cities')->where('name','Tantoyuca')->first()->id
],

['name' => 'Cucharas',
'city_id' => DB::table('cities')->where('name','Tantoyuca')->first()->id
],

['name' => 'Tanquián',
'city_id' => DB::table('cities')->where('name','Tantoyuca')->first()->id
],

['name' => 'El Chote',
'city_id' => DB::table('cities')->where('name','Tantoyuca')->first()->id
],

['name' => 'Tametate',
'city_id' => DB::table('cities')->where('name','Tantoyuca')->first()->id
],

['name' => 'Tepatlán',
'city_id' => DB::table('cities')->where('name','Tantoyuca')->first()->id
],

['name' => 'Xiloxúchitl',
'city_id' => DB::table('cities')->where('name','Tantoyuca')->first()->id
],

['name' => 'Tepatlán Chico',
'city_id' => DB::table('cities')->where('name','Tantoyuca')->first()->id
],

['name' => 'La Mora',
'city_id' => DB::table('cities')->where('name','Tantoyuca')->first()->id
],

['name' => 'El Limón',
'city_id' => DB::table('cities')->where('name','Tantoyuca')->first()->id
],

['name' => 'Mata del Tigre',
'city_id' => DB::table('cities')->where('name','Tantoyuca')->first()->id
],

['name' => 'San Gabriel',
'city_id' => DB::table('cities')->where('name','Tantoyuca')->first()->id
],

['name' => 'Corral Viejo Laja Primera',
'city_id' => DB::table('cities')->where('name','Tantoyuca')->first()->id
],

['name' => 'El Aquichal (Laja Segunda)',
'city_id' => DB::table('cities')->where('name','Tantoyuca')->first()->id
],

['name' => 'La Pitahaya',
'city_id' => DB::table('cities')->where('name','Tantoyuca')->first()->id
],

['name' => 'Pecero',
'city_id' => DB::table('cities')->where('name','Tantoyuca')->first()->id
],

['name' => 'Acececa',
'city_id' => DB::table('cities')->where('name','Tantoyuca')->first()->id
],

['name' => 'Independencia Nacional',
'city_id' => DB::table('cities')->where('name','Tantoyuca')->first()->id
],

['name' => 'Los Ajos',
'city_id' => DB::table('cities')->where('name','Tantoyuca')->first()->id
],

['name' => 'Sabana Grande',
'city_id' => DB::table('cities')->where('name','Tantoyuca')->first()->id
],

['name' => 'San Diego',
'city_id' => DB::table('cities')->where('name','Tantoyuca')->first()->id
],

['name' => 'Palo Solo',
'city_id' => DB::table('cities')->where('name','Tantoyuca')->first()->id
],

['name' => 'El Maguey Sabana Grande',
'city_id' => DB::table('cities')->where('name','Tantoyuca')->first()->id
],

['name' => 'El Sabroso Uno Crucero Palmito',
'city_id' => DB::table('cities')->where('name','Tantoyuca')->first()->id
],

['name' => 'Santa Clara',
'city_id' => DB::table('cities')->where('name','Tantoyuca')->first()->id
],

['name' => 'Mano de León',
'city_id' => DB::table('cities')->where('name','Tantoyuca')->first()->id
],

['name' => 'El Aguacate',
'city_id' => DB::table('cities')->where('name','Tantoyuca')->first()->id
],

['name' => 'Ejido Siete Palmas',
'city_id' => DB::table('cities')->where('name','Tantoyuca')->first()->id
],

['name' => 'San Antonio',
'city_id' => DB::table('cities')->where('name','Tantoyuca')->first()->id
],

['name' => 'Ajoloco',
'city_id' => DB::table('cities')->where('name','Tantoyuca')->first()->id
],

['name' => 'Santa Mónica',
'city_id' => DB::table('cities')->where('name','Tantoyuca')->first()->id
],

['name' => 'Tierra Blanca',
'city_id' => DB::table('cities')->where('name','Tantoyuca')->first()->id
],

['name' => 'El Lindero',
'city_id' => DB::table('cities')->where('name','Tantoyuca')->first()->id
],

['name' => 'El Remanso',
'city_id' => DB::table('cities')->where('name','Tantoyuca')->first()->id
],

['name' => 'La Morita',
'city_id' => DB::table('cities')->where('name','Tantoyuca')->first()->id
],

['name' => 'Moralillo',
'city_id' => DB::table('cities')->where('name','Tantoyuca')->first()->id
],

['name' => 'Loma Larga',
'city_id' => DB::table('cities')->where('name','Tantoyuca')->first()->id
],

['name' => 'El Padre',
'city_id' => DB::table('cities')->where('name','Tantoyuca')->first()->id
],

['name' => 'Emiliano Zapata',
'city_id' => DB::table('cities')->where('name','Tantoyuca')->first()->id
],

['name' => 'Dos Caminos',
'city_id' => DB::table('cities')->where('name','Tantoyuca')->first()->id
],

['name' => 'Cerro San Gabriel',
'city_id' => DB::table('cities')->where('name','Tantoyuca')->first()->id
],

['name' => 'Tantoyuca Centro',
'city_id' => DB::table('cities')->where('name','Tantoyuca')->first()->id
],

['name' => 'Banrural',
'city_id' => DB::table('cities')->where('name','Tantoyuca')->first()->id
],

['name' => 'Dos Arroyos',
'city_id' => DB::table('cities')->where('name','Tantoyuca')->first()->id
],

['name' => 'La Reforma',
'city_id' => DB::table('cities')->where('name','Tantoyuca')->first()->id
],

['name' => 'Dante Delgado',
'city_id' => DB::table('cities')->where('name','Tantoyuca')->first()->id
],

['name' => 'Guadalupe Victoria',
'city_id' => DB::table('cities')->where('name','Tantoyuca')->first()->id
],

['name' => '10 de Mayo',
'city_id' => DB::table('cities')->where('name','Tantoyuca')->first()->id
],

['name' => 'Cerro de La Cruz',
'city_id' => DB::table('cities')->where('name','Tantoyuca')->first()->id
],

['name' => 'La Garita',
'city_id' => DB::table('cities')->where('name','Tantoyuca')->first()->id
],

['name' => 'Poza Azul',
'city_id' => DB::table('cities')->where('name','Tantoyuca')->first()->id
],

['name' => 'Wash',
'city_id' => DB::table('cities')->where('name','Tantoyuca')->first()->id
],

['name' => 'Azteca',
'city_id' => DB::table('cities')->where('name','Tantoyuca')->first()->id
],

['name' => 'Cebadilla',
'city_id' => DB::table('cities')->where('name','Tantoyuca')->first()->id
],

['name' => 'Ruiz Cortines',
'city_id' => DB::table('cities')->where('name','Tantoyuca')->first()->id
],

['name' => 'Tampatel',
'city_id' => DB::table('cities')->where('name','Tantoyuca')->first()->id
],

['name' => 'Rastro',
'city_id' => DB::table('cities')->where('name','Tantoyuca')->first()->id
],

['name' => 'Morelos',
'city_id' => DB::table('cities')->where('name','Tantoyuca')->first()->id
],

['name' => 'El Rastro Nuevo',
'city_id' => DB::table('cities')->where('name','Tantoyuca')->first()->id
],

['name' => 'Villas de Tantoyuca',
'city_id' => DB::table('cities')->where('name','Tantoyuca')->first()->id
],

['name' => 'Del Valle',
'city_id' => DB::table('cities')->where('name','Tantoyuca')->first()->id
],

['name' => 'Pedrera',
'city_id' => DB::table('cities')->where('name','Tantoyuca')->first()->id
],

['name' => 'Platanal',
'city_id' => DB::table('cities')->where('name','Tantoyuca')->first()->id
],

['name' => 'El Abra',
'city_id' => DB::table('cities')->where('name','Tantoyuca')->first()->id
],

['name' => 'Las Casitas',
'city_id' => DB::table('cities')->where('name','Tantoyuca')->first()->id
],

['name' => 'Niños Héroes',
'city_id' => DB::table('cities')->where('name','Tantoyuca')->first()->id
],

['name' => 'Jagüey Hidalgo',
'city_id' => DB::table('cities')->where('name','Tantoyuca')->first()->id
],

['name' => 'Gutiérrez Barrios',
'city_id' => DB::table('cities')->where('name','Tantoyuca')->first()->id
],

['name' => 'Las Agujas',
'city_id' => DB::table('cities')->where('name','Tantoyuca')->first()->id
],

['name' => 'La Pamesina',
'city_id' => DB::table('cities')->where('name','Tantoyuca')->first()->id
],

['name' => 'Santa Fe',
'city_id' => DB::table('cities')->where('name','Tantoyuca')->first()->id
],

['name' => 'Manantiales',
'city_id' => DB::table('cities')->where('name','Tantoyuca')->first()->id
],

['name' => 'Altamirano',
'city_id' => DB::table('cities')->where('name','Tantoyuca')->first()->id
],

['name' => '18 de Marzo',
'city_id' => DB::table('cities')->where('name','Tantoyuca')->first()->id
],

['name' => 'San Juan Viejo',
'city_id' => DB::table('cities')->where('name','Platón Sánchez')->first()->id
],

['name' => 'Jobo Nuevo',
'city_id' => DB::table('cities')->where('name','Platón Sánchez')->first()->id
],

['name' => 'Amoxoyahual',
'city_id' => DB::table('cities')->where('name','Platón Sánchez')->first()->id
],

['name' => 'Corralillo',
'city_id' => DB::table('cities')->where('name','Platón Sánchez')->first()->id
],

['name' => 'Tepetatipa',
'city_id' => DB::table('cities')->where('name','Platón Sánchez')->first()->id
],

['name' => 'Zacatianguis',
'city_id' => DB::table('cities')->where('name','Platón Sánchez')->first()->id
],

['name' => 'San Francisco',
'city_id' => DB::table('cities')->where('name','Platón Sánchez')->first()->id
],

['name' => 'El Rosario',
'city_id' => DB::table('cities')->where('name','Platón Sánchez')->first()->id
],

['name' => 'Monte Grande',
'city_id' => DB::table('cities')->where('name','Platón Sánchez')->first()->id
],

['name' => 'El Coposo',
'city_id' => DB::table('cities')->where('name','Platón Sánchez')->first()->id
],

['name' => 'Atempa',
'city_id' => DB::table('cities')->where('name','Platón Sánchez')->first()->id
],

['name' => 'Chiatitla',
'city_id' => DB::table('cities')->where('name','Platón Sánchez')->first()->id
],

['name' => 'Tlalpani',
'city_id' => DB::table('cities')->where('name','Platón Sánchez')->first()->id
],

['name' => 'El Limón (Lindero Grande)',
'city_id' => DB::table('cities')->where('name','Platón Sánchez')->first()->id
],

['name' => 'Platón Sanchez Centro',
'city_id' => DB::table('cities')->where('name','Platón Sánchez')->first()->id
],

['name' => 'Adolfo Lopez Mateos',
'city_id' => DB::table('cities')->where('name','Platón Sánchez')->first()->id
],

['name' => 'Loma Costeños',
'city_id' => DB::table('cities')->where('name','Platón Sánchez')->first()->id
],

['name' => 'Los Cues I',
'city_id' => DB::table('cities')->where('name','Platón Sánchez')->first()->id
],

['name' => 'Los Cues II',
'city_id' => DB::table('cities')->where('name','Platón Sánchez')->first()->id
],

['name' => 'Nueva Palma',
'city_id' => DB::table('cities')->where('name','Platón Sánchez')->first()->id
],

['name' => 'La Colmena',
'city_id' => DB::table('cities')->where('name','Platón Sánchez')->first()->id
],

['name' => 'La Hacienda',
'city_id' => DB::table('cities')->where('name','Platón Sánchez')->first()->id
],

['name' => 'Rivera Mendez',
'city_id' => DB::table('cities')->where('name','Platón Sánchez')->first()->id
],

['name' => 'Ahuehueyo',
'city_id' => DB::table('cities')->where('name','Platón Sánchez')->first()->id
],

['name' => 'Benito Juárez',
'city_id' => DB::table('cities')->where('name','Platón Sánchez')->first()->id
],

['name' => 'El Maguey',
'city_id' => DB::table('cities')->where('name','Platón Sánchez')->first()->id
],

['name' => 'Zamora',
'city_id' => DB::table('cities')->where('name','Platón Sánchez')->first()->id
],

['name' => 'El Duque',
'city_id' => DB::table('cities')->where('name','Platón Sánchez')->first()->id
],

['name' => 'El Llano',
'city_id' => DB::table('cities')->where('name','Platón Sánchez')->first()->id
],

['name' => 'La Loma',
'city_id' => DB::table('cities')->where('name','Platón Sánchez')->first()->id
],

['name' => 'Chiconamel',
'city_id' => DB::table('cities')->where('name','Chiconamel')->first()->id
],

['name' => 'Peña (Techicol)',
'city_id' => DB::table('cities')->where('name','Chiconamel')->first()->id
],

['name' => 'Taltamaya',
'city_id' => DB::table('cities')->where('name','Chiconamel')->first()->id
],

['name' => 'Huizachal',
'city_id' => DB::table('cities')->where('name','Chiconamel')->first()->id
],

['name' => 'Humotitla',
'city_id' => DB::table('cities')->where('name','Chiconamel')->first()->id
],

['name' => 'Tancazahuela',
'city_id' => DB::table('cities')->where('name','Chiconamel')->first()->id
],

['name' => 'Chintepec',
'city_id' => DB::table('cities')->where('name','Chiconamel')->first()->id
],

['name' => 'El Cepillo',
'city_id' => DB::table('cities')->where('name','Chiconamel')->first()->id
],

['name' => 'Cuahuizoco',
'city_id' => DB::table('cities')->where('name','Chiconamel')->first()->id
],

['name' => 'El Rincón',
'city_id' => DB::table('cities')->where('name','Chiconamel')->first()->id
],

['name' => 'El Aguacate',
'city_id' => DB::table('cities')->where('name','Chiconamel')->first()->id
],

['name' => 'Chalma',
'city_id' => DB::table('cities')->where('name','Chalma')->first()->id
],

['name' => 'San Pedro Coyutla',
'city_id' => DB::table('cities')->where('name','Chalma')->first()->id
],

['name' => 'Emiliano Zapata',
'city_id' => DB::table('cities')->where('name','Chalma')->first()->id
],

['name' => 'Taxtitla',
'city_id' => DB::table('cities')->where('name','Chalma')->first()->id
],

['name' => 'La Barranca',
'city_id' => DB::table('cities')->where('name','Chalma')->first()->id
],

['name' => 'La Laja',
'city_id' => DB::table('cities')->where('name','Chalma')->first()->id
],

['name' => 'Felipe Ángeles',
'city_id' => DB::table('cities')->where('name','Chalma')->first()->id
],

['name' => 'Chapopote Chico (Tlachinolapa)',
'city_id' => DB::table('cities')->where('name','Chalma')->first()->id
],

['name' => 'Mesa del Anono',
'city_id' => DB::table('cities')->where('name','Chalma')->first()->id
],

['name' => 'El Pintor',
'city_id' => DB::table('cities')->where('name','Chalma')->first()->id
],

['name' => 'Aquixcuatitla',
'city_id' => DB::table('cities')->where('name','Chalma')->first()->id
],

['name' => 'Chontla',
'city_id' => DB::table('cities')->where('name','Chontla')->first()->id
],

['name' => 'Ejido Adolfo López Mateos',
'city_id' => DB::table('cities')->where('name','Chontla')->first()->id
],

['name' => 'San Nicolasillo',
'city_id' => DB::table('cities')->where('name','Chontla')->first()->id
],

['name' => 'Santo Domingo',
'city_id' => DB::table('cities')->where('name','Chontla')->first()->id
],

['name' => 'San Juan Otontepec',
'city_id' => DB::table('cities')->where('name','Chontla')->first()->id
],

['name' => 'El Maguey (El Maguey Chiquito)',
'city_id' => DB::table('cities')->where('name','Chontla')->first()->id
],

['name' => 'Huizache',
'city_id' => DB::table('cities')->where('name','Chontla')->first()->id
],

['name' => 'La Tronadora',
'city_id' => DB::table('cities')->where('name','Chontla')->first()->id
],

['name' => 'Las Cruces',
'city_id' => DB::table('cities')->where('name','Chontla')->first()->id
],

['name' => 'Los Tigres',
'city_id' => DB::table('cities')->where('name','Chontla')->first()->id
],

['name' => 'Paso Manantial',
'city_id' => DB::table('cities')->where('name','Chontla')->first()->id
],

['name' => 'Las Flores',
'city_id' => DB::table('cities')->where('name','Chontla')->first()->id
],

['name' => 'Tamalcuatitla',
'city_id' => DB::table('cities')->where('name','Chontla')->first()->id
],

['name' => 'Tezitlal',
'city_id' => DB::table('cities')->where('name','Chontla')->first()->id
],

['name' => 'Xochitlán (Parajes)',
'city_id' => DB::table('cities')->where('name','Chontla')->first()->id
],

['name' => 'El Chote',
'city_id' => DB::table('cities')->where('name','Chontla')->first()->id
],

['name' => 'El Encinal',
'city_id' => DB::table('cities')->where('name','Chontla')->first()->id
],

['name' => 'El Nopal',
'city_id' => DB::table('cities')->where('name','Chontla')->first()->id
],

['name' => 'Finca el Llano',
'city_id' => DB::table('cities')->where('name','Chontla')->first()->id
],

['name' => 'La Cuchilla',
'city_id' => DB::table('cities')->where('name','Chontla')->first()->id
],

['name' => 'San Francisco',
'city_id' => DB::table('cities')->where('name','Chontla')->first()->id
],

['name' => 'Arranca Estacas',
'city_id' => DB::table('cities')->where('name','Chontla')->first()->id
],

['name' => 'Tancolol',
'city_id' => DB::table('cities')->where('name','Chontla')->first()->id
],

['name' => 'El Cajón',
'city_id' => DB::table('cities')->where('name','Chontla')->first()->id
],

['name' => 'El Llano',
'city_id' => DB::table('cities')->where('name','Chontla')->first()->id
],

['name' => 'La Garita',
'city_id' => DB::table('cities')->where('name','Chontla')->first()->id
],

['name' => 'La Reforma',
'city_id' => DB::table('cities')->where('name','Chontla')->first()->id
],

['name' => 'Llano Verde',
'city_id' => DB::table('cities')->where('name','Chontla')->first()->id
],

['name' => 'Paso Quebrache',
'city_id' => DB::table('cities')->where('name','Chontla')->first()->id
],

['name' => 'Rancho Quemado',
'city_id' => DB::table('cities')->where('name','Chontla')->first()->id
],

['name' => 'Sabana Grande',
'city_id' => DB::table('cities')->where('name','Chontla')->first()->id
],

['name' => 'Santa Valeria',
'city_id' => DB::table('cities')->where('name','Chontla')->first()->id
],

['name' => 'Cedro Agujerado',
'city_id' => DB::table('cities')->where('name','Chontla')->first()->id
],

['name' => 'Doña Ana',
'city_id' => DB::table('cities')->where('name','Chontla')->first()->id
],

['name' => 'Dos Caminos',
'city_id' => DB::table('cities')->where('name','Chontla')->first()->id
],

['name' => 'El Cajete',
'city_id' => DB::table('cities')->where('name','Chontla')->first()->id
],

['name' => 'El Coyol',
'city_id' => DB::table('cities')->where('name','Chontla')->first()->id
],

['name' => 'El Higo',
'city_id' => DB::table('cities')->where('name','Chontla')->first()->id
],

['name' => 'El Maguey',
'city_id' => DB::table('cities')->where('name','Chontla')->first()->id
],

['name' => 'El Tanque',
'city_id' => DB::table('cities')->where('name','Chontla')->first()->id
],

['name' => 'Guasimal',
'city_id' => DB::table('cities')->where('name','Chontla')->first()->id
],

['name' => 'La Estrella',
'city_id' => DB::table('cities')->where('name','Chontla')->first()->id
],

['name' => 'Las Canoas',
'city_id' => DB::table('cities')->where('name','Chontla')->first()->id
],

['name' => 'Palo de Rosas',
'city_id' => DB::table('cities')->where('name','Chontla')->first()->id
],

['name' => 'Santa Rita',
'city_id' => DB::table('cities')->where('name','Chontla')->first()->id
],

['name' => 'Mata de Otate',
'city_id' => DB::table('cities')->where('name','Chontla')->first()->id
],

['name' => 'Cruz Manantial',
'city_id' => DB::table('cities')->where('name','Chontla')->first()->id
],

['name' => 'Las Guásimas',
'city_id' => DB::table('cities')->where('name','Chontla')->first()->id
],

['name' => 'Los Callejones',
'city_id' => DB::table('cities')->where('name','Chontla')->first()->id
],

['name' => 'Tlatemalco',
'city_id' => DB::table('cities')->where('name','Chontla')->first()->id
],

['name' => 'El Arenal',
'city_id' => DB::table('cities')->where('name','Chontla')->first()->id
],

['name' => 'El Órgano',
'city_id' => DB::table('cities')->where('name','Chontla')->first()->id
],

['name' => 'La Florida',
'city_id' => DB::table('cities')->where('name','Chontla')->first()->id
],

['name' => 'San Mateo',
'city_id' => DB::table('cities')->where('name','Chontla')->first()->id
],

['name' => 'El Zapote',
'city_id' => DB::table('cities')->where('name','Chontla')->first()->id
],

['name' => 'Mala Gana',
'city_id' => DB::table('cities')->where('name','Chontla')->first()->id
],

['name' => 'Tecomate',
'city_id' => DB::table('cities')->where('name','Chontla')->first()->id
],

['name' => 'Canoas',
'city_id' => DB::table('cities')->where('name','Chontla')->first()->id
],

['name' => 'Comales Naranjado',
'city_id' => DB::table('cities')->where('name','Chontla')->first()->id
],

['name' => 'El Ebanal',
'city_id' => DB::table('cities')->where('name','Chontla')->first()->id
],

['name' => 'El Rosario',
'city_id' => DB::table('cities')->where('name','Chontla')->first()->id
],

['name' => 'Huayacocotla',
'city_id' => DB::table('cities')->where('name','Chontla')->first()->id
],

['name' => 'La Cañada',
'city_id' => DB::table('cities')->where('name','Chontla')->first()->id
],

['name' => 'Chalahuite',
'city_id' => DB::table('cities')->where('name','Chontla')->first()->id
],

['name' => 'El Aguacate',
'city_id' => DB::table('cities')->where('name','Chontla')->first()->id
],

['name' => 'La Laja',
'city_id' => DB::table('cities')->where('name','Chontla')->first()->id
],

['name' => 'Los Anteojos',
'city_id' => DB::table('cities')->where('name','Chontla')->first()->id
],

['name' => 'Pacheco (Chalahuite)',
'city_id' => DB::table('cities')->where('name','Chontla')->first()->id
],

['name' => 'Santa Fe',
'city_id' => DB::table('cities')->where('name','Chontla')->first()->id
],

['name' => 'Comales',
'city_id' => DB::table('cities')->where('name','Chontla')->first()->id
],

['name' => 'Magozal',
'city_id' => DB::table('cities')->where('name','Chontla')->first()->id
],

['name' => 'Charco Prieto',
'city_id' => DB::table('cities')->where('name','Chontla')->first()->id
],

['name' => 'El Carrizal',
'city_id' => DB::table('cities')->where('name','Chontla')->first()->id
],

['name' => 'El Jardín',
'city_id' => DB::table('cities')->where('name','Chontla')->first()->id
],

['name' => 'El Limonar',
'city_id' => DB::table('cities')->where('name','Chontla')->first()->id
],

['name' => 'El Solito',
'city_id' => DB::table('cities')->where('name','Chontla')->first()->id
],

['name' => 'La Estrella',
'city_id' => DB::table('cities')->where('name','Chontla')->first()->id
],

['name' => 'La Floreña',
'city_id' => DB::table('cities')->where('name','Chontla')->first()->id
],

['name' => 'La Mora',
'city_id' => DB::table('cities')->where('name','Chontla')->first()->id
],

['name' => 'Las Delicias',
'city_id' => DB::table('cities')->where('name','Chontla')->first()->id
],

['name' => 'Loma Grande',
'city_id' => DB::table('cities')->where('name','Chontla')->first()->id
],

['name' => 'Los Altos de Jesús',
'city_id' => DB::table('cities')->where('name','Chontla')->first()->id
],

['name' => 'Los Manantiales',
'city_id' => DB::table('cities')->where('name','Chontla')->first()->id
],

['name' => 'Los Perales',
'city_id' => DB::table('cities')->where('name','Chontla')->first()->id
],

['name' => 'Ochenta y Uno',
'city_id' => DB::table('cities')->where('name','Chontla')->first()->id
],

['name' => 'Paciencia',
'city_id' => DB::table('cities')->where('name','Chontla')->first()->id
],

['name' => 'Rancho Abajo',
'city_id' => DB::table('cities')->where('name','Chontla')->first()->id
],

['name' => 'Santa Julia',
'city_id' => DB::table('cities')->where('name','Chontla')->first()->id
],

['name' => 'Santa Lucía',
'city_id' => DB::table('cities')->where('name','Chontla')->first()->id
],

['name' => 'Santana',
'city_id' => DB::table('cities')->where('name','Chontla')->first()->id
],

['name' => 'Tampac (El Ojital)',
'city_id' => DB::table('cities')->where('name','Chontla')->first()->id
],

['name' => 'Tres Potrillos',
'city_id' => DB::table('cities')->where('name','Chontla')->first()->id
],

['name' => 'Villa Hermosa (El Crucero)',
'city_id' => DB::table('cities')->where('name','Chontla')->first()->id
],

['name' => 'Zocohuite',
'city_id' => DB::table('cities')->where('name','Chontla')->first()->id
],

['name' => 'La Sierrita',
'city_id' => DB::table('cities')->where('name','Chontla')->first()->id
],

['name' => 'Los Arroyos',
'city_id' => DB::table('cities')->where('name','Chontla')->first()->id
],

['name' => 'Los Azahares (El Jardín)',
'city_id' => DB::table('cities')->where('name','Chontla')->first()->id
],

['name' => 'Buenos Aires',
'city_id' => DB::table('cities')->where('name','Chontla')->first()->id
],

['name' => 'El Alto la Providencia',
'city_id' => DB::table('cities')->where('name','Chontla')->first()->id
],

['name' => 'Las Limas',
'city_id' => DB::table('cities')->where('name','Chontla')->first()->id
],

['name' => 'Durazno',
'city_id' => DB::table('cities')->where('name','Chontla')->first()->id
],

['name' => 'El Espíritu',
'city_id' => DB::table('cities')->where('name','Chontla')->first()->id
],

['name' => 'La Peñita',
'city_id' => DB::table('cities')->where('name','Chontla')->first()->id
],

['name' => 'Citlaltepec',
'city_id' => DB::table('cities')->where('name','Citlaltépetl')->first()->id
],

['name' => 'Rancho Nuevo',
'city_id' => DB::table('cities')->where('name','Citlaltépetl')->first()->id
],

['name' => 'Los Altos del Metate',
'city_id' => DB::table('cities')->where('name','Citlaltépetl')->first()->id
],

['name' => 'Rincón Del Higo',
'city_id' => DB::table('cities')->where('name','Citlaltépetl')->first()->id
],

['name' => 'El Ciruelar',
'city_id' => DB::table('cities')->where('name','Citlaltépetl')->first()->id
],

['name' => 'La Ceiba',
'city_id' => DB::table('cities')->where('name','Citlaltépetl')->first()->id
],

['name' => 'Zapupal',
'city_id' => DB::table('cities')->where('name','Citlaltépetl')->first()->id
],

['name' => 'Las Sabinas',
'city_id' => DB::table('cities')->where('name','Citlaltépetl')->first()->id
],

['name' => 'Agua Nacida',
'city_id' => DB::table('cities')->where('name','Ixcatepec')->first()->id
],

['name' => 'El Rincón',
'city_id' => DB::table('cities')->where('name','Ixcatepec')->first()->id
],

['name' => 'Gavilán',
'city_id' => DB::table('cities')->where('name','Ixcatepec')->first()->id
],

['name' => 'Ixcatepec',
'city_id' => DB::table('cities')->where('name','Ixcatepec')->first()->id
],

['name' => 'Poza Azul',
'city_id' => DB::table('cities')->where('name','Ixcatepec')->first()->id
],

['name' => '7 Palmas',
'city_id' => DB::table('cities')->where('name','Ixcatepec')->first()->id
],

['name' => 'Volador',
'city_id' => DB::table('cities')->where('name','Ixcatepec')->first()->id
],

['name' => 'La Guasima',
'city_id' => DB::table('cities')->where('name','Ixcatepec')->first()->id
],

['name' => 'Tzicuatitlan',
'city_id' => DB::table('cities')->where('name','Ixcatepec')->first()->id
],

['name' => 'Naranjos Centro',
'city_id' => DB::table('cities')->where('name','Naranjos Amatlán')->first()->id
],

['name' => 'Nuevo Naranjos',
'city_id' => DB::table('cities')->where('name','Naranjos Amatlán')->first()->id
],

['name' => 'Estandard',
'city_id' => DB::table('cities')->where('name','Naranjos Amatlán')->first()->id
],

['name' => 'Americana',
'city_id' => DB::table('cities')->where('name','Naranjos Amatlán')->first()->id
],

['name' => 'Tamaulipas',
'city_id' => DB::table('cities')->where('name','Naranjos Amatlán')->first()->id
],

['name' => 'El Cafetal',
'city_id' => DB::table('cities')->where('name','Naranjos Amatlán')->first()->id
],

['name' => 'Constitución',
'city_id' => DB::table('cities')->where('name','Naranjos Amatlán')->first()->id
],

['name' => 'Progreso',
'city_id' => DB::table('cities')->where('name','Naranjos Amatlán')->first()->id
],

['name' => 'Las Delicias',
'city_id' => DB::table('cities')->where('name','Naranjos Amatlán')->first()->id
],

['name' => 'Providencia',
'city_id' => DB::table('cities')->where('name','Naranjos Amatlán')->first()->id
],

['name' => 'Antonio Manuel Amor',
'city_id' => DB::table('cities')->where('name','Naranjos Amatlán')->first()->id
],

['name' => 'Campo Empleados de PEMEX',
'city_id' => DB::table('cities')->where('name','Naranjos Amatlán')->first()->id
],

['name' => 'Mariano Escobedo',
'city_id' => DB::table('cities')->where('name','Naranjos Amatlán')->first()->id
],

['name' => 'Las Margaritas',
'city_id' => DB::table('cities')->where('name','Naranjos Amatlán')->first()->id
],

['name' => 'Manuel Avila Camacho',
'city_id' => DB::table('cities')->where('name','Naranjos Amatlán')->first()->id
],

['name' => '16 de Septiembre',
'city_id' => DB::table('cities')->where('name','Naranjos Amatlán')->first()->id
],

['name' => '5 de Mayo',
'city_id' => DB::table('cities')->where('name','Naranjos Amatlán')->first()->id
],

['name' => 'Rancho Nuevo',
'city_id' => DB::table('cities')->where('name','Naranjos Amatlán')->first()->id
],

['name' => 'Adalberto Tejeda',
'city_id' => DB::table('cities')->where('name','Naranjos Amatlán')->first()->id
],

['name' => 'Emiliano Zapata',
'city_id' => DB::table('cities')->where('name','Naranjos Amatlán')->first()->id
],

['name' => 'El Trébol',
'city_id' => DB::table('cities')->where('name','Naranjos Amatlán')->first()->id
],

['name' => 'Flores Magón',
'city_id' => DB::table('cities')->where('name','Naranjos Amatlán')->first()->id
],

['name' => 'Aviación',
'city_id' => DB::table('cities')->where('name','Naranjos Amatlán')->first()->id
],

['name' => 'Petrolera',
'city_id' => DB::table('cities')->where('name','Naranjos Amatlán')->first()->id
],

['name' => 'Faja de Oro',
'city_id' => DB::table('cities')->where('name','Naranjos Amatlán')->first()->id
],

['name' => 'Lopez Serna',
'city_id' => DB::table('cities')->where('name','Naranjos Amatlán')->first()->id
],

['name' => 'Lomas de la Huasteca',
'city_id' => DB::table('cities')->where('name','Naranjos Amatlán')->first()->id
],

['name' => 'Fernando Gutiérrez Barrios',
'city_id' => DB::table('cities')->where('name','El Higo')->first()->id
],

['name' => 'El Higo Centro',
'city_id' => DB::table('cities')->where('name','El Higo')->first()->id
],

['name' => 'Aviación',
'city_id' => DB::table('cities')->where('name','El Higo')->first()->id
],

['name' => 'La Curva',
'city_id' => DB::table('cities')->where('name','El Higo')->first()->id
],

['name' => 'La Gloria',
'city_id' => DB::table('cities')->where('name','El Higo')->first()->id
],

['name' => '20 de Noviembre',
'city_id' => DB::table('cities')->where('name','El Higo')->first()->id
],

['name' => 'Hernandez Ochoa',
'city_id' => DB::table('cities')->where('name','El Higo')->first()->id
],

['name' => 'Asociación Cívica',
'city_id' => DB::table('cities')->where('name','El Higo')->first()->id
],

['name' => 'Virgilio Lara',
'city_id' => DB::table('cities')->where('name','El Higo')->first()->id
],

['name' => 'El Pueblito',
'city_id' => DB::table('cities')->where('name','El Higo')->first()->id
],

['name' => 'Palmar Prieto',
'city_id' => DB::table('cities')->where('name','El Higo')->first()->id
],

['name' => 'San Andres',
'city_id' => DB::table('cities')->where('name','El Higo')->first()->id
],

['name' => 'El Chote',
'city_id' => DB::table('cities')->where('name','El Higo')->first()->id
],

['name' => 'Mundo Raro',
'city_id' => DB::table('cities')->where('name','El Higo')->first()->id
],

['name' => 'Bella Vista',
'city_id' => DB::table('cities')->where('name','El Higo')->first()->id
],

['name' => 'Rancho Alegre',
'city_id' => DB::table('cities')->where('name','El Higo')->first()->id
],

['name' => 'La Y Griega',
'city_id' => DB::table('cities')->where('name','El Higo')->first()->id
],

['name' => 'Puentes Nuevas',
'city_id' => DB::table('cities')->where('name','El Higo')->first()->id
],

['name' => 'Alto Del Ojite',
'city_id' => DB::table('cities')->where('name','El Higo')->first()->id
],

['name' => 'El Hoxton',
'city_id' => DB::table('cities')->where('name','El Higo')->first()->id
],

['name' => 'Vega Del Paso',
'city_id' => DB::table('cities')->where('name','El Higo')->first()->id
],

['name' => 'La Carolina',
'city_id' => DB::table('cities')->where('name','El Higo')->first()->id
],

['name' => 'Las Puentes',
'city_id' => DB::table('cities')->where('name','El Higo')->first()->id
],

['name' => 'Vega de los Marcos',
'city_id' => DB::table('cities')->where('name','El Higo')->first()->id
],

['name' => 'Cuve de los Marcos',
'city_id' => DB::table('cities')->where('name','El Higo')->first()->id
],

['name' => 'San Isidro',
'city_id' => DB::table('cities')->where('name','El Higo')->first()->id
],

['name' => 'Badeas',
'city_id' => DB::table('cities')->where('name','El Higo')->first()->id
],

['name' => 'Amatlan Tuxpan',
'city_id' => DB::table('cities')->where('name','Naranjos Amatlán')->first()->id
],

['name' => 'Galeana',
'city_id' => DB::table('cities')->where('name','Naranjos Amatlán')->first()->id
],

['name' => 'CNOP (Entrada de los Pinos)',
'city_id' => DB::table('cities')->where('name','Naranjos Amatlán')->first()->id
],

['name' => 'Cervantes',
'city_id' => DB::table('cities')->where('name','Naranjos Amatlán')->first()->id
],

['name' => 'Ocampo',
'city_id' => DB::table('cities')->where('name','Naranjos Amatlán')->first()->id
],

['name' => 'Totomoxtepec',
'city_id' => DB::table('cities')->where('name','Naranjos Amatlán')->first()->id
],

['name' => 'Empalizada',
'city_id' => DB::table('cities')->where('name','Naranjos Amatlán')->first()->id
],

['name' => 'Zaragoza',
'city_id' => DB::table('cities')->where('name','Naranjos Amatlán')->first()->id
],

['name' => 'Kilómetro 24',
'city_id' => DB::table('cities')->where('name','Chinampa de Gorostiza')->first()->id
],

['name' => 'Otilio Montaño',
'city_id' => DB::table('cities')->where('name','Chinampa de Gorostiza')->first()->id
],

['name' => 'Chinampa de Gorostiza',
'city_id' => DB::table('cities')->where('name','Chinampa de Gorostiza')->first()->id
],

['name' => 'Kilómetro 22',
'city_id' => DB::table('cities')->where('name','Chinampa de Gorostiza')->first()->id
],

['name' => 'La Pimienta',
'city_id' => DB::table('cities')->where('name','Chinampa de Gorostiza')->first()->id
],

['name' => 'Las Flores',
'city_id' => DB::table('cities')->where('name','Chinampa de Gorostiza')->first()->id
],

['name' => 'Los Órganos',
'city_id' => DB::table('cities')->where('name','Chinampa de Gorostiza')->first()->id
],

['name' => 'Cerro de Oro',
'city_id' => DB::table('cities')->where('name','Chinampa de Gorostiza')->first()->id
],

['name' => 'Gutiérrez Zamora',
'city_id' => DB::table('cities')->where('name','Tantima')->first()->id
],

['name' => 'Ocampo',
'city_id' => DB::table('cities')->where('name','Tantima')->first()->id
],

['name' => 'Nuevo Xúchitl',
'city_id' => DB::table('cities')->where('name','Tantima')->first()->id
],

['name' => 'Tantima',
'city_id' => DB::table('cities')->where('name','Tantima')->first()->id
],

['name' => 'Cucharas',
'city_id' => DB::table('cities')->where('name','Tantima')->first()->id
],

['name' => 'Pitahaya',
'city_id' => DB::table('cities')->where('name','Tantima')->first()->id
],

['name' => 'Chiconcillo',
'city_id' => DB::table('cities')->where('name','Tantima')->first()->id
],

['name' => 'San Lorenzo',
'city_id' => DB::table('cities')->where('name','Tantima')->first()->id
],

['name' => 'Vicente Guerrero',
'city_id' => DB::table('cities')->where('name','Tantima')->first()->id
],

['name' => 'Monte Grande',
'city_id' => DB::table('cities')->where('name','Tantima')->first()->id
],

['name' => 'Cerro de Ayahuint',
'city_id' => DB::table('cities')->where('name','Tantima')->first()->id
],

['name' => 'Carmona y Valle',
'city_id' => DB::table('cities')->where('name','Tantima')->first()->id
],

['name' => 'La Puente',
'city_id' => DB::table('cities')->where('name','Tantima')->first()->id
],

['name' => 'Chichihual',
'city_id' => DB::table('cities')->where('name','Tantima')->first()->id
],

['name' => 'Rancho Abajo',
'city_id' => DB::table('cities')->where('name','Tantima')->first()->id
],

['name' => 'El Anono',
'city_id' => DB::table('cities')->where('name','Tantima')->first()->id
],

['name' => 'Los Higueros',
'city_id' => DB::table('cities')->where('name','Tantima')->first()->id
],

['name' => 'Carmona y Valle',
'city_id' => DB::table('cities')->where('name','Tamalín')->first()->id
],

['name' => 'Tamalin',
'city_id' => DB::table('cities')->where('name','Tamalín')->first()->id
],

['name' => 'Ejido Cedral',
'city_id' => DB::table('cities')->where('name','Tamalín')->first()->id
],

['name' => 'El Cedral (Poblado el Cedral)',
'city_id' => DB::table('cities')->where('name','Tamalín')->first()->id
],

['name' => 'San Jerónimo (La Guásima)',
'city_id' => DB::table('cities')->where('name','Tamalín')->first()->id
],

['name' => 'La Cebadilla',
'city_id' => DB::table('cities')->where('name','Tamalín')->first()->id
],

['name' => 'El Rincón',
'city_id' => DB::table('cities')->where('name','Tamalín')->first()->id
],

['name' => 'Escobal (Ejido Escobal)',
'city_id' => DB::table('cities')->where('name','Tamalín')->first()->id
],

['name' => 'Mamey la Mar',
'city_id' => DB::table('cities')->where('name','Tamalín')->first()->id
],

['name' => 'Saladero',
'city_id' => DB::table('cities')->where('name','Tamalín')->first()->id
],

['name' => 'La Merced',
'city_id' => DB::table('cities')->where('name','Tamalín')->first()->id
],

['name' => 'Piedra Labrada',
'city_id' => DB::table('cities')->where('name','Cerro Azul')->first()->id
],

['name' => 'Axoquitla',
'city_id' => DB::table('cities')->where('name','Cerro Azul')->first()->id
],

['name' => 'La Loma Bonita',
'city_id' => DB::table('cities')->where('name','Cerro Azul')->first()->id
],

['name' => 'San Carlos (Guardaganado)',
'city_id' => DB::table('cities')->where('name','Cerro Azul')->first()->id
],

['name' => 'Ejido Xilitla',
'city_id' => DB::table('cities')->where('name','Cerro Azul')->first()->id
],

['name' => 'La Campechana',
'city_id' => DB::table('cities')->where('name','Cerro Azul')->first()->id
],

['name' => 'Rancho Huilotitla',
'city_id' => DB::table('cities')->where('name','Cerro Azul')->first()->id
],

['name' => 'Rancho Santiago Cárdenas',
'city_id' => DB::table('cities')->where('name','Cerro Azul')->first()->id
],

['name' => 'Tamalinillo',
'city_id' => DB::table('cities')->where('name','Cerro Azul')->first()->id
],

['name' => 'Cerro Azul Campo Industrial Centro',
'city_id' => DB::table('cities')->where('name','Cerro Azul')->first()->id
],

['name' => 'La Curva',
'city_id' => DB::table('cities')->where('name','Cerro Azul')->first()->id
],

['name' => 'Lázaro Cárdenas',
'city_id' => DB::table('cities')->where('name','Cerro Azul')->first()->id
],

['name' => 'Oriente',
'city_id' => DB::table('cities')->where('name','Cerro Azul')->first()->id
],

['name' => 'Cerro Azul Viejo',
'city_id' => DB::table('cities')->where('name','Cerro Azul')->first()->id
],

['name' => '17 de Mayo',
'city_id' => DB::table('cities')->where('name','Cerro Azul')->first()->id
],

['name' => 'Teresa Morales',
'city_id' => DB::table('cities')->where('name','Cerro Azul')->first()->id
],

['name' => 'Sector Popular',
'city_id' => DB::table('cities')->where('name','Cerro Azul')->first()->id
],

['name' => 'Deportiva',
'city_id' => DB::table('cities')->where('name','Cerro Azul')->first()->id
],

['name' => 'Ex Refinería',
'city_id' => DB::table('cities')->where('name','Cerro Azul')->first()->id
],

['name' => 'El Cuatro',
'city_id' => DB::table('cities')->where('name','Cerro Azul')->first()->id
],

['name' => 'Carlos Berman',
'city_id' => DB::table('cities')->where('name','Cerro Azul')->first()->id
],

['name' => 'Vicente Guerrero',
'city_id' => DB::table('cities')->where('name','Cerro Azul')->first()->id
],

['name' => 'Morelos',
'city_id' => DB::table('cities')->where('name','Cerro Azul')->first()->id
],

['name' => 'Faja de Oro',
'city_id' => DB::table('cities')->where('name','Cerro Azul')->first()->id
],

['name' => 'Petrolera',
'city_id' => DB::table('cities')->where('name','Cerro Azul')->first()->id
],

['name' => 'Aguilera',
'city_id' => DB::table('cities')->where('name','Cerro Azul')->first()->id
],

['name' => '7 de Octubre',
'city_id' => DB::table('cities')->where('name','Cerro Azul')->first()->id
],

['name' => 'Ferrocarril',
'city_id' => DB::table('cities')->where('name','Cerro Azul')->first()->id
],

['name' => 'Benito Juárez',
'city_id' => DB::table('cities')->where('name','Cerro Azul')->first()->id
],

['name' => 'Valle Verde',
'city_id' => DB::table('cities')->where('name','Cerro Azul')->first()->id
],

['name' => '18 de Marzo',
'city_id' => DB::table('cities')->where('name','Cerro Azul')->first()->id
],

['name' => 'La Puerta',
'city_id' => DB::table('cities')->where('name','Cerro Azul')->first()->id
],

['name' => 'Juan Felipe',
'city_id' => DB::table('cities')->where('name','Cerro Azul')->first()->id
],

['name' => 'El Sacrificio',
'city_id' => DB::table('cities')->where('name','Cerro Azul')->first()->id
],

['name' => 'Valle Esmeralda',
'city_id' => DB::table('cities')->where('name','Cerro Azul')->first()->id
],

['name' => 'La Herradura',
'city_id' => DB::table('cities')->where('name','Cerro Azul')->first()->id
],

['name' => 'Nuevo Mirador',
'city_id' => DB::table('cities')->where('name','Cerro Azul')->first()->id
],

['name' => 'Mirador',
'city_id' => DB::table('cities')->where('name','Cerro Azul')->first()->id
],

['name' => 'Campo 1ro de Mayo',
'city_id' => DB::table('cities')->where('name','Cerro Azul')->first()->id
],

['name' => 'Mirador',
'city_id' => DB::table('cities')->where('name','Cerro Azul')->first()->id
],

['name' => 'Lomas Verdes',
'city_id' => DB::table('cities')->where('name','Cerro Azul')->first()->id
],

['name' => 'La Ceiba',
'city_id' => DB::table('cities')->where('name','Cerro Azul')->first()->id
],

['name' => 'Juan Felipe',
'city_id' => DB::table('cities')->where('name','Cerro Azul')->first()->id
],

['name' => 'Don Adrián',
'city_id' => DB::table('cities')->where('name','Cerro Azul')->first()->id
],

['name' => 'La Pedrera (La Quebradora)',
'city_id' => DB::table('cities')->where('name','Cerro Azul')->first()->id
],

['name' => 'Santa Victoria',
'city_id' => DB::table('cities')->where('name','Cerro Azul')->first()->id
],

['name' => 'Valle Esmeralda',
'city_id' => DB::table('cities')->where('name','Cerro Azul')->first()->id
],

['name' => 'Clouthier',
'city_id' => DB::table('cities')->where('name','Cerro Azul')->first()->id
],

['name' => 'Ampliación Benito Juárez',
'city_id' => DB::table('cities')->where('name','Cerro Azul')->first()->id
],

['name' => 'La Herradura',
'city_id' => DB::table('cities')->where('name','Cerro Azul')->first()->id
],

['name' => 'La Tumbaga (La Joya)',
'city_id' => DB::table('cities')->where('name','Cerro Azul')->first()->id
],

['name' => 'Santa Rosa (Santa Mercedes)',
'city_id' => DB::table('cities')->where('name','Cerro Azul')->first()->id
],

['name' => 'Ampliación el Mirador',
'city_id' => DB::table('cities')->where('name','Cerro Azul')->first()->id
],

['name' => 'Ampliación Lomas Verdes',
'city_id' => DB::table('cities')->where('name','Cerro Azul')->first()->id
],

['name' => 'Lázaro Cárdenas',
'city_id' => DB::table('cities')->where('name','Cerro Azul')->first()->id
],

['name' => 'Buenos Aires',
'city_id' => DB::table('cities')->where('name','Cerro Azul')->first()->id
],

['name' => 'El Chaparral',
'city_id' => DB::table('cities')->where('name','Cerro Azul')->first()->id
],

['name' => 'Fraccionamiento el Sacrificio',
'city_id' => DB::table('cities')->where('name','Cerro Azul')->first()->id
],

['name' => 'La Adelaida',
'city_id' => DB::table('cities')->where('name','Cerro Azul')->first()->id
],

['name' => 'La Adelaida',
'city_id' => DB::table('cities')->where('name','Cerro Azul')->first()->id
],

['name' => 'Los Milagros',
'city_id' => DB::table('cities')->where('name','Cerro Azul')->first()->id
],

['name' => 'El Humo',
'city_id' => DB::table('cities')->where('name','Tepetzintla')->first()->id
],

['name' => 'Tepetzintla',
'city_id' => DB::table('cities')->where('name','Tepetzintla')->first()->id
],

['name' => 'Copaltitla',
'city_id' => DB::table('cities')->where('name','Tepetzintla')->first()->id
],

['name' => 'Tecomate',
'city_id' => DB::table('cities')->where('name','Tepetzintla')->first()->id
],

['name' => 'Tierra Blanca',
'city_id' => DB::table('cities')->where('name','Tepetzintla')->first()->id
],

['name' => 'La Loma',
'city_id' => DB::table('cities')->where('name','Tepetzintla')->first()->id
],

['name' => 'Las Guasimas',
'city_id' => DB::table('cities')->where('name','Tepetzintla')->first()->id
],

['name' => 'Tancoco',
'city_id' => DB::table('cities')->where('name','Tancoco')->first()->id
],

['name' => 'Toteco',
'city_id' => DB::table('cities')->where('name','Tancoco')->first()->id
],

['name' => 'Kilómetro 43',
'city_id' => DB::table('cities')->where('name','Tancoco')->first()->id
],

['name' => 'Zacamixtle',
'city_id' => DB::table('cities')->where('name','Tancoco')->first()->id
],

['name' => 'Balcazar',
'city_id' => DB::table('cities')->where('name','Tamiahua')->first()->id
],

['name' => 'Palo Blanco',
'city_id' => DB::table('cities')->where('name','Tamiahua')->first()->id
],

['name' => 'San Marcos',
'city_id' => DB::table('cities')->where('name','Tamiahua')->first()->id
],

['name' => 'Tamiahua',
'city_id' => DB::table('cities')->where('name','Tamiahua')->first()->id
],

['name' => 'Tampache',
'city_id' => DB::table('cities')->where('name','Tamiahua')->first()->id
],

['name' => 'Tantalamos',
'city_id' => DB::table('cities')->where('name','Tamiahua')->first()->id
],

['name' => 'Francisco González Bocanegra',
'city_id' => DB::table('cities')->where('name','Tamiahua')->first()->id
],

['name' => 'Estero de Milpas',
'city_id' => DB::table('cities')->where('name','Tamiahua')->first()->id
],

['name' => 'La Reforma',
'city_id' => DB::table('cities')->where('name','Tamiahua')->first()->id
],

['name' => 'Acala',
'city_id' => DB::table('cities')->where('name','Tamiahua')->first()->id
],

['name' => 'El Anono',
'city_id' => DB::table('cities')->where('name','Tamiahua')->first()->id
],

['name' => 'El Cafetal',
'city_id' => DB::table('cities')->where('name','Tamiahua')->first()->id
],

['name' => 'Paso Del Leon',
'city_id' => DB::table('cities')->where('name','Tamiahua')->first()->id
],

['name' => 'Ojital',
'city_id' => DB::table('cities')->where('name','Tamiahua')->first()->id
],

['name' => 'Dr. Lavista',
'city_id' => DB::table('cities')->where('name','Tamiahua')->first()->id
],

['name' => 'El Hormiguero',
'city_id' => DB::table('cities')->where('name','Tamiahua')->first()->id
],

['name' => 'Naranjalito',
'city_id' => DB::table('cities')->where('name','Tamiahua')->first()->id
],

['name' => 'La Encarnación',
'city_id' => DB::table('cities')->where('name','Tamiahua')->first()->id
],

['name' => 'Paso de San Lorenzo',
'city_id' => DB::table('cities')->where('name','Tamiahua')->first()->id
],

['name' => 'La Puntilla',
'city_id' => DB::table('cities')->where('name','Tamiahua')->first()->id
],

['name' => 'Majahual',
'city_id' => DB::table('cities')->where('name','Tamiahua')->first()->id
],

['name' => 'Huayacocotla Centro',
'city_id' => DB::table('cities')->where('name','Huayacocotla')->first()->id
],

['name' => 'La Guadalupe',
'city_id' => DB::table('cities')->where('name','Huayacocotla')->first()->id
],

['name' => 'El Ocotal',
'city_id' => DB::table('cities')->where('name','Huayacocotla')->first()->id
],

['name' => 'La Esperanza',
'city_id' => DB::table('cities')->where('name','Huayacocotla')->first()->id
],

['name' => '5 de Mayo',
'city_id' => DB::table('cities')->where('name','Huayacocotla')->first()->id
],

['name' => 'La Unión',
'city_id' => DB::table('cities')->where('name','Huayacocotla')->first()->id
],

['name' => 'Palma Gacha',
'city_id' => DB::table('cities')->where('name','Huayacocotla')->first()->id
],

['name' => 'Los Sabinos',
'city_id' => DB::table('cities')->where('name','Huayacocotla')->first()->id
],

['name' => 'Nuevo Mundo',
'city_id' => DB::table('cities')->where('name','Huayacocotla')->first()->id
],

['name' => 'Buena Vista',
'city_id' => DB::table('cities')->where('name','Huayacocotla')->first()->id
],

['name' => 'Acantilado (San Josecito)',
'city_id' => DB::table('cities')->where('name','Huayacocotla')->first()->id
],

['name' => 'Dejigüí',
'city_id' => DB::table('cities')->where('name','Huayacocotla')->first()->id
],

['name' => 'Los Charcos',
'city_id' => DB::table('cities')->where('name','Huayacocotla')->first()->id
],

['name' => 'Miguel Lerdo',
'city_id' => DB::table('cities')->where('name','Huayacocotla')->first()->id
],

['name' => 'Zonzonapa',
'city_id' => DB::table('cities')->where('name','Huayacocotla')->first()->id
],

['name' => 'Ojo de Agua',
'city_id' => DB::table('cities')->where('name','Huayacocotla')->first()->id
],

['name' => 'Tenantitlán',
'city_id' => DB::table('cities')->where('name','Huayacocotla')->first()->id
],

['name' => 'Santiago',
'city_id' => DB::table('cities')->where('name','Huayacocotla')->first()->id
],

['name' => 'Zilacatipan (Tenaxcalzingo)',
'city_id' => DB::table('cities')->where('name','Huayacocotla')->first()->id
],

['name' => 'Tenango de San Miguel',
'city_id' => DB::table('cities')->where('name','Huayacocotla')->first()->id
],

['name' => 'El Batda',
'city_id' => DB::table('cities')->where('name','Huayacocotla')->first()->id
],

['name' => 'Carbonero Jacales',
'city_id' => DB::table('cities')->where('name','Huayacocotla')->first()->id
],

['name' => 'Palo Bendito',
'city_id' => DB::table('cities')->where('name','Huayacocotla')->first()->id
],

['name' => 'Teximalpa',
'city_id' => DB::table('cities')->where('name','Huayacocotla')->first()->id
],

['name' => 'Altamira',
'city_id' => DB::table('cities')->where('name','Huayacocotla')->first()->id
],

['name' => 'La Selva',
'city_id' => DB::table('cities')->where('name','Huayacocotla')->first()->id
],

['name' => 'Viborillas',
'city_id' => DB::table('cities')->where('name','Huayacocotla')->first()->id
],

['name' => 'Los Duraznos',
'city_id' => DB::table('cities')->where('name','Huayacocotla')->first()->id
],

['name' => 'Cruz de Ataque',
'city_id' => DB::table('cities')->where('name','Huayacocotla')->first()->id
],

['name' => 'Potrero de Monroy',
'city_id' => DB::table('cities')->where('name','Huayacocotla')->first()->id
],

['name' => 'Donangú Barrio Arriba',
'city_id' => DB::table('cities')->where('name','Huayacocotla')->first()->id
],

['name' => 'Las Blancas (Palo Gordo)',
'city_id' => DB::table('cities')->where('name','Huayacocotla')->first()->id
],

['name' => 'Loma de Yeguas',
'city_id' => DB::table('cities')->where('name','Huayacocotla')->first()->id
],

['name' => 'Rosa de Castilla',
'city_id' => DB::table('cities')->where('name','Huayacocotla')->first()->id
],

['name' => 'Amatepec',
'city_id' => DB::table('cities')->where('name','Ilamatlán')->first()->id
],

['name' => 'Chahuatlan',
'city_id' => DB::table('cities')->where('name','Ilamatlán')->first()->id
],

['name' => 'Ilamatlan',
'city_id' => DB::table('cities')->where('name','Ilamatlán')->first()->id
],

['name' => 'San Gregorio',
'city_id' => DB::table('cities')->where('name','Ilamatlán')->first()->id
],

['name' => 'Coacoaco',
'city_id' => DB::table('cities')->where('name','Ilamatlán')->first()->id
],

['name' => 'Santa Cruz',
'city_id' => DB::table('cities')->where('name','Ilamatlán')->first()->id
],

['name' => 'Atempa',
'city_id' => DB::table('cities')->where('name','Ilamatlán')->first()->id
],

['name' => 'Toltepec',
'city_id' => DB::table('cities')->where('name','Ilamatlán')->first()->id
],

['name' => 'Huitztipan',
'city_id' => DB::table('cities')->where('name','Ilamatlán')->first()->id
],

['name' => 'Tlatlazoquico',
'city_id' => DB::table('cities')->where('name','Ilamatlán')->first()->id
],

['name' => 'Xoxocapa',
'city_id' => DB::table('cities')->where('name','Ilamatlán')->first()->id
],

['name' => 'Tecapa',
'city_id' => DB::table('cities')->where('name','Ilamatlán')->first()->id
],

['name' => 'Apachitla',
'city_id' => DB::table('cities')->where('name','Ilamatlán')->first()->id
],

['name' => 'San Pablo Mitecatlán',
'city_id' => DB::table('cities')->where('name','Ilamatlán')->first()->id
],

['name' => 'El Cuayo',
'city_id' => DB::table('cities')->where('name','Zontecomatlán de López y Fuentes')->first()->id
],

['name' => 'Zontecomatlan de Lopez y Fuentes',
'city_id' => DB::table('cities')->where('name','Zontecomatlán de López y Fuentes')->first()->id
],

['name' => 'Ozultetla',
'city_id' => DB::table('cities')->where('name','Zontecomatlán de López y Fuentes')->first()->id
],

['name' => 'Pino Suárez',
'city_id' => DB::table('cities')->where('name','Zontecomatlán de López y Fuentes')->first()->id
],

['name' => 'La Victoria',
'city_id' => DB::table('cities')->where('name','Zontecomatlán de López y Fuentes')->first()->id
],

['name' => 'Limontitla',
'city_id' => DB::table('cities')->where('name','Zontecomatlán de López y Fuentes')->first()->id
],

['name' => 'Tenamicoya',
'city_id' => DB::table('cities')->where('name','Zontecomatlán de López y Fuentes')->first()->id
],

['name' => 'Tecomajapa',
'city_id' => DB::table('cities')->where('name','Zontecomatlán de López y Fuentes')->first()->id
],

['name' => 'La Candelaria',
'city_id' => DB::table('cities')->where('name','Zontecomatlán de López y Fuentes')->first()->id
],

['name' => 'Cuatecomaco',
'city_id' => DB::table('cities')->where('name','Zontecomatlán de López y Fuentes')->first()->id
],

['name' => 'Tetzacual',
'city_id' => DB::table('cities')->where('name','Zontecomatlán de López y Fuentes')->first()->id
],

['name' => 'El Puente',
'city_id' => DB::table('cities')->where('name','Zontecomatlán de López y Fuentes')->first()->id
],

['name' => 'Otlatzintla',
'city_id' => DB::table('cities')->where('name','Zontecomatlán de López y Fuentes')->first()->id
],

['name' => 'Amaxac',
'city_id' => DB::table('cities')->where('name','Texcatepec')->first()->id
],

['name' => 'Ayotuxtla',
'city_id' => DB::table('cities')->where('name','Texcatepec')->first()->id
],

['name' => 'Texcatepec',
'city_id' => DB::table('cities')->where('name','Texcatepec')->first()->id
],

['name' => 'Tzicatlán',
'city_id' => DB::table('cities')->where('name','Texcatepec')->first()->id
],

['name' => 'Chila Enríquez',
'city_id' => DB::table('cities')->where('name','Texcatepec')->first()->id
],

['name' => 'Pie de La Cuesta',
'city_id' => DB::table('cities')->where('name','Texcatepec')->first()->id
],

['name' => 'Papatlar',
'city_id' => DB::table('cities')->where('name','Texcatepec')->first()->id
],

['name' => 'La Pesma',
'city_id' => DB::table('cities')->where('name','Zacualpan')->first()->id
],

['name' => 'Tlachichilquillo',
'city_id' => DB::table('cities')->where('name','Zacualpan')->first()->id
],

['name' => 'Zacualpan',
'city_id' => DB::table('cities')->where('name','Zacualpan')->first()->id
],

['name' => 'Atixtaca',
'city_id' => DB::table('cities')->where('name','Zacualpan')->first()->id
],

['name' => 'Gral. Prim',
'city_id' => DB::table('cities')->where('name','Zacualpan')->first()->id
],

['name' => 'Cerro de Tzocohuite',
'city_id' => DB::table('cities')->where('name','Zacualpan')->first()->id
],

['name' => 'Benito Juárez',
'city_id' => DB::table('cities')->where('name','Benito Juárez')->first()->id
],

['name' => 'Coachumo Común',
'city_id' => DB::table('cities')->where('name','Benito Juárez')->first()->id
],

['name' => 'Hueycuatitla',
'city_id' => DB::table('cities')->where('name','Benito Juárez')->first()->id
],

['name' => 'Primo Verdad (San Miguel)',
'city_id' => DB::table('cities')->where('name','Benito Juárez')->first()->id
],

['name' => 'Otlamalácatl',
'city_id' => DB::table('cities')->where('name','Benito Juárez')->first()->id
],

['name' => 'Tenantitla',
'city_id' => DB::table('cities')->where('name','Benito Juárez')->first()->id
],

['name' => 'Tlatlapango Grande',
'city_id' => DB::table('cities')->where('name','Benito Juárez')->first()->id
],

['name' => 'Yupiltitla',
'city_id' => DB::table('cities')->where('name','Benito Juárez')->first()->id
],

['name' => 'Atlalco',
'city_id' => DB::table('cities')->where('name','Benito Juárez')->first()->id
],

['name' => 'La Lima',
'city_id' => DB::table('cities')->where('name','Benito Juárez')->first()->id
],

['name' => 'La Reforma',
'city_id' => DB::table('cities')->where('name','Benito Juárez')->first()->id
],

['name' => 'Tolico de Zapata',
'city_id' => DB::table('cities')->where('name','Benito Juárez')->first()->id
],

['name' => 'Azoquitipa',
'city_id' => DB::table('cities')->where('name','Benito Juárez')->first()->id
],

['name' => 'La Revancha',
'city_id' => DB::table('cities')->where('name','Benito Juárez')->first()->id
],

['name' => 'Paltzoquitempa',
'city_id' => DB::table('cities')->where('name','Benito Juárez')->first()->id
],

['name' => 'Chila',
'city_id' => DB::table('cities')->where('name','Benito Juárez')->first()->id
],

['name' => 'El Estero Chico',
'city_id' => DB::table('cities')->where('name','Benito Juárez')->first()->id
],

['name' => 'Ixtacahuayo',
'city_id' => DB::table('cities')->where('name','Benito Juárez')->first()->id
],

['name' => 'Chintipan',
'city_id' => DB::table('cities')->where('name','Tlachichilco')->first()->id
],

['name' => 'Gómez Farias',
'city_id' => DB::table('cities')->where('name','Tlachichilco')->first()->id
],

['name' => 'La Llave',
'city_id' => DB::table('cities')->where('name','Tlachichilco')->first()->id
],

['name' => 'Landero y Coss',
'city_id' => DB::table('cities')->where('name','Tlachichilco')->first()->id
],

['name' => 'Naranjal',
'city_id' => DB::table('cities')->where('name','Tlachichilco')->first()->id
],

['name' => 'Otatitlan',
'city_id' => DB::table('cities')->where('name','Tlachichilco')->first()->id
],

['name' => 'Tlachichilco',
'city_id' => DB::table('cities')->where('name','Tlachichilco')->first()->id
],

['name' => 'San José el Naranjal',
'city_id' => DB::table('cities')->where('name','Tlachichilco')->first()->id
],

['name' => 'Texca Chiquito',
'city_id' => DB::table('cities')->where('name','Tlachichilco')->first()->id
],

['name' => 'El Coyol',
'city_id' => DB::table('cities')->where('name','Tlachichilco')->first()->id
],

['name' => 'Tierra Colorada',
'city_id' => DB::table('cities')->where('name','Tlachichilco')->first()->id
],

['name' => 'Xalame',
'city_id' => DB::table('cities')->where('name','Tlachichilco')->first()->id
],

['name' => 'Ixhuatlan de Madero',
'city_id' => DB::table('cities')->where('name','Ixhuatlán de Madero')->first()->id
],

['name' => 'El Mirador',
'city_id' => DB::table('cities')->where('name','Ixhuatlán de Madero')->first()->id
],

['name' => 'Huitzitzilco',
'city_id' => DB::table('cities')->where('name','Ixhuatlán de Madero')->first()->id
],

['name' => 'Cinco Aguas',
'city_id' => DB::table('cities')->where('name','Ixhuatlán de Madero')->first()->id
],

['name' => 'Cruz Blanca',
'city_id' => DB::table('cities')->where('name','Ixhuatlán de Madero')->first()->id
],

['name' => 'Cantollano',
'city_id' => DB::table('cities')->where('name','Ixhuatlán de Madero')->first()->id
],

['name' => 'Lindero las Flores',
'city_id' => DB::table('cities')->where('name','Ixhuatlán de Madero')->first()->id
],

['name' => 'Las Flores',
'city_id' => DB::table('cities')->where('name','Ixhuatlán de Madero')->first()->id
],

['name' => 'Cerro del Progreso',
'city_id' => DB::table('cities')->where('name','Ixhuatlán de Madero')->first()->id
],

['name' => 'Jonotal Azteca',
'city_id' => DB::table('cities')->where('name','Ixhuatlán de Madero')->first()->id
],

['name' => 'Rancho Nuevo',
'city_id' => DB::table('cities')->where('name','Ixhuatlán de Madero')->first()->id
],

['name' => 'Plan del Encinal (El Encinal)',
'city_id' => DB::table('cities')->where('name','Ixhuatlán de Madero')->first()->id
],

['name' => 'Las Tejas',
'city_id' => DB::table('cities')->where('name','Ixhuatlán de Madero')->first()->id
],

['name' => 'Zolontla',
'city_id' => DB::table('cities')->where('name','Ixhuatlán de Madero')->first()->id
],

['name' => 'Pino Suárez',
'city_id' => DB::table('cities')->where('name','Ixhuatlán de Madero')->first()->id
],

['name' => 'Pahua Chica',
'city_id' => DB::table('cities')->where('name','Ixhuatlán de Madero')->first()->id
],

['name' => 'Pahua Grande',
'city_id' => DB::table('cities')->where('name','Ixhuatlán de Madero')->first()->id
],

['name' => 'Heberto Castillo Martínez',
'city_id' => DB::table('cities')->where('name','Ixhuatlán de Madero')->first()->id
],

['name' => 'El Lindero',
'city_id' => DB::table('cities')->where('name','Ixhuatlán de Madero')->first()->id
],

['name' => 'Xomulco',
'city_id' => DB::table('cities')->where('name','Ixhuatlán de Madero')->first()->id
],

['name' => 'San Bernardo',
'city_id' => DB::table('cities')->where('name','Ixhuatlán de Madero')->first()->id
],

['name' => 'Chahuantla',
'city_id' => DB::table('cities')->where('name','Ixhuatlán de Madero')->first()->id
],

['name' => 'Barrio Abajo Colatlán',
'city_id' => DB::table('cities')->where('name','Ixhuatlán de Madero')->first()->id
],

['name' => 'Huexotitla',
'city_id' => DB::table('cities')->where('name','Ixhuatlán de Madero')->first()->id
],

['name' => 'Colatlán',
'city_id' => DB::table('cities')->where('name','Ixhuatlán de Madero')->first()->id
],

['name' => 'Llano Enmedio',
'city_id' => DB::table('cities')->where('name','Ixhuatlán de Madero')->first()->id
],

['name' => 'Guaguaco',
'city_id' => DB::table('cities')->where('name','Ixhuatlán de Madero')->first()->id
],

['name' => 'El Terrero',
'city_id' => DB::table('cities')->where('name','Ixhuatlán de Madero')->first()->id
],

['name' => 'Barrio de Otlatzintla',
'city_id' => DB::table('cities')->where('name','Ixhuatlán de Madero')->first()->id
],

['name' => 'Ayotla',
'city_id' => DB::table('cities')->where('name','Ixhuatlán de Madero')->first()->id
],

['name' => 'Villahermosa',
'city_id' => DB::table('cities')->where('name','Ixhuatlán de Madero')->first()->id
],

['name' => 'Vista Alegre',
'city_id' => DB::table('cities')->where('name','Ixhuatlán de Madero')->first()->id
],

['name' => 'Puyecaco',
'city_id' => DB::table('cities')->where('name','Ixhuatlán de Madero')->first()->id
],

['name' => 'El Tizal',
'city_id' => DB::table('cities')->where('name','Ixhuatlán de Madero')->first()->id
],

['name' => 'El Zapotal (La Laja)',
'city_id' => DB::table('cities')->where('name','Ixhuatlán de Madero')->first()->id
],

['name' => 'Tepetlaco',
'city_id' => DB::table('cities')->where('name','Ixhuatlán de Madero')->first()->id
],

['name' => 'El Limón',
'city_id' => DB::table('cities')->where('name','Ixhuatlán de Madero')->first()->id
],

['name' => 'Piedra Grande (El Guayabo)',
'city_id' => DB::table('cities')->where('name','Ixhuatlán de Madero')->first()->id
],

['name' => 'Reyixtla',
'city_id' => DB::table('cities')->where('name','Ixhuatlán de Madero')->first()->id
],

['name' => 'El Aguacate Barrio Abajo',
'city_id' => DB::table('cities')->where('name','Ixhuatlán de Madero')->first()->id
],

['name' => 'El Aguacate Barrio Arriba',
'city_id' => DB::table('cities')->where('name','Ixhuatlán de Madero')->first()->id
],

['name' => 'Xochimilco',
'city_id' => DB::table('cities')->where('name','Ixhuatlán de Madero')->first()->id
],

['name' => 'La Colmena',
'city_id' => DB::table('cities')->where('name','Ixhuatlán de Madero')->first()->id
],

['name' => 'Lindero Limón',
'city_id' => DB::table('cities')->where('name','Ixhuatlán de Madero')->first()->id
],

['name' => 'La Aguada',
'city_id' => DB::table('cities')->where('name','Ixhuatlán de Madero')->first()->id
],

['name' => 'Chijolito Milcahual',
'city_id' => DB::table('cities')->where('name','Ixhuatlán de Madero')->first()->id
],

['name' => 'Apachahual',
'city_id' => DB::table('cities')->where('name','Ixhuatlán de Madero')->first()->id
],

['name' => 'Tzapohíca',
'city_id' => DB::table('cities')->where('name','Ixhuatlán de Madero')->first()->id
],

['name' => 'La Pita',
'city_id' => DB::table('cities')->where('name','Ixhuatlán de Madero')->first()->id
],

['name' => 'Cacahuatengo',
'city_id' => DB::table('cities')->where('name','Ixhuatlán de Madero')->first()->id
],

['name' => 'Cuahueloco',
'city_id' => DB::table('cities')->where('name','Ixhuatlán de Madero')->first()->id
],

['name' => 'Ahuacapa I',
'city_id' => DB::table('cities')->where('name','Ixhuatlán de Madero')->first()->id
],

['name' => 'Pitzocali',
'city_id' => DB::table('cities')->where('name','Ixhuatlán de Madero')->first()->id
],

['name' => 'Milcahual',
'city_id' => DB::table('cities')->where('name','Ixhuatlán de Madero')->first()->id
],

['name' => 'Tecalco',
'city_id' => DB::table('cities')->where('name','Ixhuatlán de Madero')->first()->id
],

['name' => 'Achichipic',
'city_id' => DB::table('cities')->where('name','Ixhuatlán de Madero')->first()->id
],

['name' => 'Teopancahuac',
'city_id' => DB::table('cities')->where('name','Ixhuatlán de Madero')->first()->id
],

['name' => 'La Chaca',
'city_id' => DB::table('cities')->where('name','Ixhuatlán de Madero')->first()->id
],

['name' => 'Tecanahua',
'city_id' => DB::table('cities')->where('name','Ixhuatlán de Madero')->first()->id
],

['name' => 'El Becerro',
'city_id' => DB::table('cities')->where('name','Ixhuatlán de Madero')->first()->id
],

['name' => 'Chapopote',
'city_id' => DB::table('cities')->where('name','Ixhuatlán de Madero')->first()->id
],

['name' => 'Corral Viejo',
'city_id' => DB::table('cities')->where('name','Ixhuatlán de Madero')->first()->id
],

['name' => 'Paso Amatitlán',
'city_id' => DB::table('cities')->where('name','Ixhuatlán de Madero')->first()->id
],

['name' => 'Ayolia',
'city_id' => DB::table('cities')->where('name','Ixhuatlán de Madero')->first()->id
],

['name' => 'Paso de Ayolia',
'city_id' => DB::table('cities')->where('name','Ixhuatlán de Madero')->first()->id
],

['name' => 'Tepozcalco',
'city_id' => DB::table('cities')->where('name','Ixhuatlán de Madero')->first()->id
],

['name' => 'Tzocohuite',
'city_id' => DB::table('cities')->where('name','Ixhuatlán de Madero')->first()->id
],

['name' => 'Lomas del Dorado',
'city_id' => DB::table('cities')->where('name','Ixhuatlán de Madero')->first()->id
],

['name' => 'Santa Fe',
'city_id' => DB::table('cities')->where('name','Ixhuatlán de Madero')->first()->id
],

['name' => 'La Reforma',
'city_id' => DB::table('cities')->where('name','Ixhuatlán de Madero')->first()->id
],

['name' => 'Lechcuatitla',
'city_id' => DB::table('cities')->where('name','Ixhuatlán de Madero')->first()->id
],

['name' => 'Paso de Álamo',
'city_id' => DB::table('cities')->where('name','Ixhuatlán de Madero')->first()->id
],

['name' => 'Tzapalote',
'city_id' => DB::table('cities')->where('name','Ixhuatlán de Madero')->first()->id
],

['name' => 'Marcialta',
'city_id' => DB::table('cities')->where('name','Ixhuatlán de Madero')->first()->id
],

['name' => 'San Martín',
'city_id' => DB::table('cities')->where('name','Ixhuatlán de Madero')->first()->id
],

['name' => 'Siete Palmas Barrio Arriba',
'city_id' => DB::table('cities')->where('name','Ixhuatlán de Madero')->first()->id
],

['name' => 'Oxitempa',
'city_id' => DB::table('cities')->where('name','Ixhuatlán de Madero')->first()->id
],

['name' => 'La Mata (Campo la Mata)',
'city_id' => DB::table('cities')->where('name','Ixhuatlán de Madero')->first()->id
],

['name' => 'Joya Chica',
'city_id' => DB::table('cities')->where('name','Ixhuatlán de Madero')->first()->id
],

['name' => 'Loma Bonita (Mesa Cacahutenco)',
'city_id' => DB::table('cities')->where('name','Ixhuatlán de Madero')->first()->id
],

['name' => 'El Nopal',
'city_id' => DB::table('cities')->where('name','Ixhuatlán de Madero')->first()->id
],

['name' => 'Ojital Cuayo',
'city_id' => DB::table('cities')->where('name','Ixhuatlán de Madero')->first()->id
],

['name' => 'Ampliación del Mirador',
'city_id' => DB::table('cities')->where('name','Ixhuatlán de Madero')->first()->id
],

['name' => 'Naranjo Dulce',
'city_id' => DB::table('cities')->where('name','Ixhuatlán de Madero')->first()->id
],

['name' => 'Siete Palmas Barrio Abajo',
'city_id' => DB::table('cities')->where('name','Ixhuatlán de Madero')->first()->id
],

['name' => 'Zapote Bravo',
'city_id' => DB::table('cities')->where('name','Ixhuatlán de Madero')->first()->id
],

['name' => 'Jonotal Progreso',
'city_id' => DB::table('cities')->where('name','Ixhuatlán de Madero')->first()->id
],

['name' => 'Progreso',
'city_id' => DB::table('cities')->where('name','Ixhuatlán de Madero')->first()->id
],

['name' => 'Tlachiquile',
'city_id' => DB::table('cities')->where('name','Ixhuatlán de Madero')->first()->id
],

['name' => 'Tepozuapan',
'city_id' => DB::table('cities')->where('name','Ixhuatlán de Madero')->first()->id
],

['name' => 'General Felipe Ángeles',
'city_id' => DB::table('cities')->where('name','Ixhuatlán de Madero')->first()->id
],

['name' => 'Agustín Melgar',
'city_id' => DB::table('cities')->where('name','Ixhuatlán de Madero')->first()->id
],

['name' => 'Cerro el Tablón',
'city_id' => DB::table('cities')->where('name','Ixhuatlán de Madero')->first()->id
],

['name' => 'Joya Grande',
'city_id' => DB::table('cities')->where('name','Ixhuatlán de Madero')->first()->id
],

['name' => 'San José el Salto',
'city_id' => DB::table('cities')->where('name','Ixhuatlán de Madero')->first()->id
],

['name' => 'Tecomate de Beltrán',
'city_id' => DB::table('cities')->where('name','Ixhuatlán de Madero')->first()->id
],

['name' => 'La Mora',
'city_id' => DB::table('cities')->where('name','Ixhuatlán de Madero')->first()->id
],

['name' => 'La Palma Capadero',
'city_id' => DB::table('cities')->where('name','Ixhuatlán de Madero')->first()->id
],

['name' => 'Las Mesillas',
'city_id' => DB::table('cities')->where('name','Ixhuatlán de Madero')->first()->id
],

['name' => 'Tziltzacuapan',
'city_id' => DB::table('cities')->where('name','Ixhuatlán de Madero')->first()->id
],

['name' => 'Santa María Apipilhuasco',
'city_id' => DB::table('cities')->where('name','Ixhuatlán de Madero')->first()->id
],

['name' => 'Pisaflores',
'city_id' => DB::table('cities')->where('name','Ixhuatlán de Madero')->first()->id
],

['name' => 'Juntas Grandes',
'city_id' => DB::table('cities')->where('name','Ixhuatlán de Madero')->first()->id
],

['name' => 'Tenextongo (San Antonio)',
'city_id' => DB::table('cities')->where('name','Ixhuatlán de Madero')->first()->id
],

['name' => 'El Tepetate',
'city_id' => DB::table('cities')->where('name','Ixhuatlán de Madero')->first()->id
],

['name' => 'Molango',
'city_id' => DB::table('cities')->where('name','Ixhuatlán de Madero')->first()->id
],

['name' => 'Acatipan',
'city_id' => DB::table('cities')->where('name','Ixhuatlán de Madero')->first()->id
],

['name' => 'Buenavista',
'city_id' => DB::table('cities')->where('name','Ixhuatlán de Madero')->first()->id
],

['name' => 'San Francisco',
'city_id' => DB::table('cities')->where('name','Ixhuatlán de Madero')->first()->id
],

['name' => 'Piedra Grande la Sierra',
'city_id' => DB::table('cities')->where('name','Ixhuatlán de Madero')->first()->id
],

['name' => 'Poza Grande',
'city_id' => DB::table('cities')->where('name','Ixhuatlán de Madero')->first()->id
],

['name' => 'Las Maravillas',
'city_id' => DB::table('cities')->where('name','Ixhuatlán de Madero')->first()->id
],

['name' => 'Zimatla',
'city_id' => DB::table('cities')->where('name','Ixhuatlán de Madero')->first()->id
],

['name' => 'Benito Juárez',
'city_id' => DB::table('cities')->where('name','Ixhuatlán de Madero')->first()->id
],

['name' => 'Emiliano Zapata',
'city_id' => DB::table('cities')->where('name','Ixhuatlán de Madero')->first()->id
],

['name' => 'Achupil',
'city_id' => DB::table('cities')->where('name','Chicontepec')->first()->id
],

['name' => 'Ahuimol 1',
'city_id' => DB::table('cities')->where('name','Chicontepec')->first()->id
],

['name' => 'Cuatzapotitla',
'city_id' => DB::table('cities')->where('name','Chicontepec')->first()->id
],

['name' => 'Chicontepec de Tejeda',
'city_id' => DB::table('cities')->where('name','Chicontepec')->first()->id
],

['name' => 'El Mirador Santa Clara',
'city_id' => DB::table('cities')->where('name','Chicontepec')->first()->id
],

['name' => 'Huacango',
'city_id' => DB::table('cities')->where('name','Chicontepec')->first()->id
],

['name' => 'Ixcacuatitla',
'city_id' => DB::table('cities')->where('name','Chicontepec')->first()->id
],

['name' => 'Pastoría',
'city_id' => DB::table('cities')->where('name','Chicontepec')->first()->id
],

['name' => 'Postectitla',
'city_id' => DB::table('cities')->where('name','Chicontepec')->first()->id
],

['name' => 'Soltepec',
'city_id' => DB::table('cities')->where('name','Chicontepec')->first()->id
],

['name' => 'Temoctla',
'city_id' => DB::table('cities')->where('name','Chicontepec')->first()->id
],

['name' => 'Tepetzintla',
'city_id' => DB::table('cities')->where('name','Chicontepec')->first()->id
],

['name' => 'Coahuitzil',
'city_id' => DB::table('cities')->where('name','Chicontepec')->first()->id
],

['name' => 'Cruz Verde',
'city_id' => DB::table('cities')->where('name','Chicontepec')->first()->id
],

['name' => 'El Cristo',
'city_id' => DB::table('cities')->where('name','Chicontepec')->first()->id
],

['name' => 'Las Lomas',
'city_id' => DB::table('cities')->where('name','Chicontepec')->first()->id
],

['name' => 'Mexcatla',
'city_id' => DB::table('cities')->where('name','Chicontepec')->first()->id
],

['name' => 'IMSS Coplamar',
'city_id' => DB::table('cities')->where('name','Chicontepec')->first()->id
],

['name' => 'Las Palmas',
'city_id' => DB::table('cities')->where('name','Chicontepec')->first()->id
],

['name' => 'Callejón Carrizalillo',
'city_id' => DB::table('cities')->where('name','Chicontepec')->first()->id
],

['name' => 'Tlacolula',
'city_id' => DB::table('cities')->where('name','Chicontepec')->first()->id
],

['name' => 'Tecerca',
'city_id' => DB::table('cities')->where('name','Chicontepec')->first()->id
],

['name' => 'Sayoltepec',
'city_id' => DB::table('cities')->where('name','Chicontepec')->first()->id
],

['name' => 'Pilahuimol',
'city_id' => DB::table('cities')->where('name','Chicontepec')->first()->id
],

['name' => 'Akichtzintla',
'city_id' => DB::table('cities')->where('name','Chicontepec')->first()->id
],

['name' => 'Ahuateno',
'city_id' => DB::table('cities')->where('name','Chicontepec')->first()->id
],

['name' => 'Sasaltitla',
'city_id' => DB::table('cities')->where('name','Chicontepec')->first()->id
],

['name' => 'Xochicuatepec',
'city_id' => DB::table('cities')->where('name','Chicontepec')->first()->id
],

['name' => 'Apaxtitla',
'city_id' => DB::table('cities')->where('name','Chicontepec')->first()->id
],

['name' => 'Lindero Agua Fría',
'city_id' => DB::table('cities')->where('name','Chicontepec')->first()->id
],

['name' => 'La Guásima Ixcacuatitla',
'city_id' => DB::table('cities')->where('name','Chicontepec')->first()->id
],

['name' => 'Tepeco',
'city_id' => DB::table('cities')->where('name','Chicontepec')->first()->id
],

['name' => 'Ahuatitla Arriba',
'city_id' => DB::table('cities')->where('name','Chicontepec')->first()->id
],

['name' => 'Alahualtitla',
'city_id' => DB::table('cities')->where('name','Chicontepec')->first()->id
],

['name' => 'Pemuxtitla',
'city_id' => DB::table('cities')->where('name','Chicontepec')->first()->id
],

['name' => 'Toloncuitlatla',
'city_id' => DB::table('cities')->where('name','Chicontepec')->first()->id
],

['name' => 'Granadilla',
'city_id' => DB::table('cities')->where('name','Chicontepec')->first()->id
],

['name' => 'Francisco Villa',
'city_id' => DB::table('cities')->where('name','Chicontepec')->first()->id
],

['name' => 'Limontitla',
'city_id' => DB::table('cities')->where('name','Chicontepec')->first()->id
],

['name' => 'El Zacatal',
'city_id' => DB::table('cities')->where('name','Chicontepec')->first()->id
],

['name' => 'El Chote Santa Teresa',
'city_id' => DB::table('cities')->where('name','Chicontepec')->first()->id
],

['name' => 'Mesa de Calcote',
'city_id' => DB::table('cities')->where('name','Chicontepec')->first()->id
],

['name' => 'La Esmeralda',
'city_id' => DB::table('cities')->where('name','Chicontepec')->first()->id
],

['name' => 'Sojual',
'city_id' => DB::table('cities')->where('name','Chicontepec')->first()->id
],

['name' => 'Paso de Tlacolula',
'city_id' => DB::table('cities')->where('name','Chicontepec')->first()->id
],

['name' => 'Tiocuano',
'city_id' => DB::table('cities')->where('name','Chicontepec')->first()->id
],

['name' => 'Texopes',
'city_id' => DB::table('cities')->where('name','Chicontepec')->first()->id
],

['name' => 'Ateno',
'city_id' => DB::table('cities')->where('name','Chicontepec')->first()->id
],

['name' => 'Xilico',
'city_id' => DB::table('cities')->where('name','Chicontepec')->first()->id
],

['name' => 'Zonámatl',
'city_id' => DB::table('cities')->where('name','Chicontepec')->first()->id
],

['name' => 'Cuatecometl',
'city_id' => DB::table('cities')->where('name','Chicontepec')->first()->id
],

['name' => 'Alaxtitla Huixnopala',
'city_id' => DB::table('cities')->where('name','Chicontepec')->first()->id
],

['name' => 'Chapixtla',
'city_id' => DB::table('cities')->where('name','Chicontepec')->first()->id
],

['name' => 'Las Silletas',
'city_id' => DB::table('cities')->where('name','Chicontepec')->first()->id
],

['name' => 'Las Placetas',
'city_id' => DB::table('cities')->where('name','Chicontepec')->first()->id
],

['name' => 'Ahuatlán',
'city_id' => DB::table('cities')->where('name','Chicontepec')->first()->id
],

['name' => 'Huitztipa',
'city_id' => DB::table('cities')->where('name','Chicontepec')->first()->id
],

['name' => 'Tlanempa Común',
'city_id' => DB::table('cities')->where('name','Chicontepec')->first()->id
],

['name' => 'El Ixtle Flores Magón',
'city_id' => DB::table('cities')->where('name','Chicontepec')->first()->id
],

['name' => 'Tzicatipa',
'city_id' => DB::table('cities')->where('name','Chicontepec')->first()->id
],

['name' => 'Tepoxteco',
'city_id' => DB::table('cities')->where('name','Chicontepec')->first()->id
],

['name' => 'Agua Nacida',
'city_id' => DB::table('cities')->where('name','Álamo Temapache')->first()->id
],

['name' => 'Álamo',
'city_id' => DB::table('cities')->where('name','Álamo Temapache')->first()->id
],

['name' => 'Cerro Dulce',
'city_id' => DB::table('cities')->where('name','Álamo Temapache')->first()->id
],

['name' => 'Estero del Ídolo',
'city_id' => DB::table('cities')->where('name','Álamo Temapache')->first()->id
],

['name' => 'Hidalgo Amajac',
'city_id' => DB::table('cities')->where('name','Álamo Temapache')->first()->id
],

['name' => 'La Concepción',
'city_id' => DB::table('cities')->where('name','Álamo Temapache')->first()->id
],

['name' => 'La Reforma',
'city_id' => DB::table('cities')->where('name','Álamo Temapache')->first()->id
],

['name' => 'La Unión',
'city_id' => DB::table('cities')->where('name','Álamo Temapache')->first()->id
],

['name' => 'Tincontlán',
'city_id' => DB::table('cities')->where('name','Álamo Temapache')->first()->id
],

['name' => 'Lázaro Cárdenas',
'city_id' => DB::table('cities')->where('name','Álamo Temapache')->first()->id
],

['name' => 'Nuevo Jardín',
'city_id' => DB::table('cities')->where('name','Álamo Temapache')->first()->id
],

['name' => 'Burócrata',
'city_id' => DB::table('cities')->where('name','Álamo Temapache')->first()->id
],

['name' => 'Gabino González',
'city_id' => DB::table('cities')->where('name','Álamo Temapache')->first()->id
],

['name' => 'Lic. José López Portillo',
'city_id' => DB::table('cities')->where('name','Álamo Temapache')->first()->id
],

['name' => 'Progreso',
'city_id' => DB::table('cities')->where('name','Álamo Temapache')->first()->id
],

['name' => 'Derechos Humanos',
'city_id' => DB::table('cities')->where('name','Álamo Temapache')->first()->id
],

['name' => 'Educación',
'city_id' => DB::table('cities')->where('name','Álamo Temapache')->first()->id
],

['name' => 'Empleados Municipales',
'city_id' => DB::table('cities')->where('name','Álamo Temapache')->first()->id
],

['name' => 'Morelos',
'city_id' => DB::table('cities')->where('name','Álamo Temapache')->first()->id
],

['name' => 'Pantepec',
'city_id' => DB::table('cities')->where('name','Álamo Temapache')->first()->id
],

['name' => 'Santa Cruz',
'city_id' => DB::table('cities')->where('name','Álamo Temapache')->first()->id
],

['name' => 'Solidaridad',
'city_id' => DB::table('cities')->where('name','Álamo Temapache')->first()->id
],

['name' => '28 de Noviembre',
'city_id' => DB::table('cities')->where('name','Álamo Temapache')->first()->id
],

['name' => '25 de Abril',
'city_id' => DB::table('cities')->where('name','Álamo Temapache')->first()->id
],

['name' => 'Luis Donaldo Colosio',
'city_id' => DB::table('cities')->where('name','Álamo Temapache')->first()->id
],

['name' => 'Benito Juárez',
'city_id' => DB::table('cities')->where('name','Álamo Temapache')->first()->id
],

['name' => 'Francisco I. Madero',
'city_id' => DB::table('cities')->where('name','Álamo Temapache')->first()->id
],

['name' => 'Fernando López Arias',
'city_id' => DB::table('cities')->where('name','Álamo Temapache')->first()->id
],

['name' => 'Unidad y Trabajo',
'city_id' => DB::table('cities')->where('name','Álamo Temapache')->first()->id
],

['name' => 'Pozo 50',
'city_id' => DB::table('cities')->where('name','Álamo Temapache')->first()->id
],

['name' => 'Chapopote Núñez',
'city_id' => DB::table('cities')->where('name','Álamo Temapache')->first()->id
],

['name' => 'Arboledas',
'city_id' => DB::table('cities')->where('name','Álamo Temapache')->first()->id
],

['name' => 'Jacarandas',
'city_id' => DB::table('cities')->where('name','Álamo Temapache')->first()->id
],

['name' => 'Niños Héroes de Chapultepec',
'city_id' => DB::table('cities')->where('name','Álamo Temapache')->first()->id
],

['name' => 'Villas de San Clemente',
'city_id' => DB::table('cities')->where('name','Álamo Temapache')->first()->id
],

['name' => 'Lombardista',
'city_id' => DB::table('cities')->where('name','Álamo Temapache')->first()->id
],

['name' => 'Ojital Ciruelo',
'city_id' => DB::table('cities')->where('name','Álamo Temapache')->first()->id
],

['name' => 'Azteca',
'city_id' => DB::table('cities')->where('name','Álamo Temapache')->first()->id
],

['name' => 'Heroica Veracruz',
'city_id' => DB::table('cities')->where('name','Álamo Temapache')->first()->id
],

['name' => 'Industrial',
'city_id' => DB::table('cities')->where('name','Álamo Temapache')->first()->id
],

['name' => 'Pueblo Nuevo',
'city_id' => DB::table('cities')->where('name','Álamo Temapache')->first()->id
],

['name' => 'Bellavista',
'city_id' => DB::table('cities')->where('name','Álamo Temapache')->first()->id
],

['name' => 'Emiliano Zapata',
'city_id' => DB::table('cities')->where('name','Álamo Temapache')->first()->id
],

['name' => 'Los Pinos',
'city_id' => DB::table('cities')->where('name','Álamo Temapache')->first()->id
],

['name' => 'Ribera',
'city_id' => DB::table('cities')->where('name','Álamo Temapache')->first()->id
],

['name' => 'Adolfo López Mateos',
'city_id' => DB::table('cities')->where('name','Álamo Temapache')->first()->id
],

['name' => 'Aviación',
'city_id' => DB::table('cities')->where('name','Álamo Temapache')->first()->id
],

['name' => '18 de Marzo',
'city_id' => DB::table('cities')->where('name','Álamo Temapache')->first()->id
],

['name' => 'Guillermo Vélez',
'city_id' => DB::table('cities')->where('name','Álamo Temapache')->first()->id
],

['name' => 'Las Flores',
'city_id' => DB::table('cities')->where('name','Álamo Temapache')->first()->id
],

['name' => 'Adolfo Lopez Mateos',
'city_id' => DB::table('cities')->where('name','Álamo Temapache')->first()->id
],

['name' => 'Unidad Socialista',
'city_id' => DB::table('cities')->where('name','Álamo Temapache')->first()->id
],

['name' => 'Pueblo Nuevo',
'city_id' => DB::table('cities')->where('name','Álamo Temapache')->first()->id
],

['name' => 'Vista Hermosa',
'city_id' => DB::table('cities')->where('name','Álamo Temapache')->first()->id
],

['name' => 'Tierra Blanca Booxter',
'city_id' => DB::table('cities')->where('name','Álamo Temapache')->first()->id
],

['name' => 'Emiliano Zapata',
'city_id' => DB::table('cities')->where('name','Álamo Temapache')->first()->id
],

['name' => 'Vegas de la Soledad y Soledad Dos',
'city_id' => DB::table('cities')->where('name','Álamo Temapache')->first()->id
],

['name' => 'Alazán',
'city_id' => DB::table('cities')->where('name','Álamo Temapache')->first()->id
],

['name' => 'Brasilar',
'city_id' => DB::table('cities')->where('name','Álamo Temapache')->first()->id
],

['name' => 'Potrero del Llano',
'city_id' => DB::table('cities')->where('name','Álamo Temapache')->first()->id
],

['name' => 'Tepetzintlilla',
'city_id' => DB::table('cities')->where('name','Álamo Temapache')->first()->id
],

['name' => 'Doctores',
'city_id' => DB::table('cities')->where('name','Álamo Temapache')->first()->id
],

['name' => 'Ejido 1',
'city_id' => DB::table('cities')->where('name','Álamo Temapache')->first()->id
],

['name' => 'La Esperanza',
'city_id' => DB::table('cities')->where('name','Álamo Temapache')->first()->id
],

['name' => 'Obras Sociales',
'city_id' => DB::table('cities')->where('name','Álamo Temapache')->first()->id
],

['name' => 'Zapotal Solís (San José Solís)',
'city_id' => DB::table('cities')->where('name','Álamo Temapache')->first()->id
],

['name' => 'Solís de Allende',
'city_id' => DB::table('cities')->where('name','Álamo Temapache')->first()->id
],

['name' => 'Tierra Amarilla',
'city_id' => DB::table('cities')->where('name','Álamo Temapache')->first()->id
],

['name' => 'Ignacio Zaragoza',
'city_id' => DB::table('cities')->where('name','Álamo Temapache')->first()->id
],

['name' => 'La Camelia (Palo Blanco)',
'city_id' => DB::table('cities')->where('name','Álamo Temapache')->first()->id
],

['name' => 'Lomas de Vinazco',
'city_id' => DB::table('cities')->where('name','Álamo Temapache')->first()->id
],

['name' => 'Palo Blanco',
'city_id' => DB::table('cities')->where('name','Álamo Temapache')->first()->id
],

['name' => 'Úrsulo Galvan',
'city_id' => DB::table('cities')->where('name','Álamo Temapache')->first()->id
],

['name' => 'Horcones',
'city_id' => DB::table('cities')->where('name','Álamo Temapache')->first()->id
],

['name' => 'Buenos Aires (San Isidro)',
'city_id' => DB::table('cities')->where('name','Álamo Temapache')->first()->id
],

['name' => 'Raudal Nuevo',
'city_id' => DB::table('cities')->where('name','Álamo Temapache')->first()->id
],

['name' => 'San Miguel',
'city_id' => DB::table('cities')->where('name','Álamo Temapache')->first()->id
],

['name' => 'Nuevo Paso Real',
'city_id' => DB::table('cities')->where('name','Álamo Temapache')->first()->id
],

['name' => 'Tumbadero del Águila',
'city_id' => DB::table('cities')->where('name','Álamo Temapache')->first()->id
],

['name' => 'Doctor Montes de Oca (San Isidro)',
'city_id' => DB::table('cities')->where('name','Álamo Temapache')->first()->id
],

['name' => 'Raya Obscura',
'city_id' => DB::table('cities')->where('name','Álamo Temapache')->first()->id
],

['name' => 'El Mangar',
'city_id' => DB::table('cities')->where('name','Álamo Temapache')->first()->id
],

['name' => 'Temapache',
'city_id' => DB::table('cities')->where('name','Álamo Temapache')->first()->id
],

['name' => 'Villa Hermosa',
'city_id' => DB::table('cities')->where('name','Álamo Temapache')->first()->id
],

['name' => 'Aire Libre (Kilómetro 15)',
'city_id' => DB::table('cities')->where('name','Tuxpan')->first()->id
],

['name' => 'Alto Lucero',
'city_id' => DB::table('cities')->where('name','Tuxpan')->first()->id
],

['name' => 'Cañada Rica',
'city_id' => DB::table('cities')->where('name','Tuxpan')->first()->id
],

['name' => 'Frijolillo',
'city_id' => DB::table('cities')->where('name','Tuxpan')->first()->id
],

['name' => 'Higueral',
'city_id' => DB::table('cities')->where('name','Tuxpan')->first()->id
],

['name' => 'Ojite',
'city_id' => DB::table('cities')->where('name','Tuxpan')->first()->id
],

['name' => 'Países Bajos (Kilómetro 8)',
'city_id' => DB::table('cities')->where('name','Tuxpan')->first()->id
],

['name' => 'Peña de Afuera',
'city_id' => DB::table('cities')->where('name','Tuxpan')->first()->id
],

['name' => 'Praxedis Guerrero (Kilómetro 18)',
'city_id' => DB::table('cities')->where('name','Tuxpan')->first()->id
],

['name' => 'Tierra Blanca',
'city_id' => DB::table('cities')->where('name','Tuxpan')->first()->id
],

['name' => 'Altamira',
'city_id' => DB::table('cities')->where('name','Tuxpan')->first()->id
],

['name' => 'Boca del Monte',
'city_id' => DB::table('cities')->where('name','Tuxpan')->first()->id
],

['name' => 'Buenos Aires',
'city_id' => DB::table('cities')->where('name','Tuxpan')->first()->id
],

['name' => 'Ceiba Rica',
'city_id' => DB::table('cities')->where('name','Tuxpan')->first()->id
],

['name' => 'CTM',
'city_id' => DB::table('cities')->where('name','Tuxpan')->first()->id
],

['name' => 'Chijolar',
'city_id' => DB::table('cities')->where('name','Tuxpan')->first()->id
],

['name' => 'Chomotla',
'city_id' => DB::table('cities')->where('name','Tuxpan')->first()->id
],

['name' => 'El Muro',
'city_id' => DB::table('cities')->where('name','Tuxpan')->first()->id
],

['name' => 'El Vergel',
'city_id' => DB::table('cities')->where('name','Tuxpan')->first()->id
],

['name' => 'Juana Moza',
'city_id' => DB::table('cities')->where('name','Tuxpan')->first()->id
],

['name' => 'La Unión',
'city_id' => DB::table('cities')->where('name','Tuxpan')->first()->id
],

['name' => 'La Victoria',
'city_id' => DB::table('cities')->where('name','Tuxpan')->first()->id
],

['name' => 'Loma Alta',
'city_id' => DB::table('cities')->where('name','Tuxpan')->first()->id
],

['name' => 'Manlio Fabio Altamirano',
'city_id' => DB::table('cities')->where('name','Tuxpan')->first()->id
],

['name' => 'Miguel Hidalgo',
'city_id' => DB::table('cities')->where('name','Tuxpan')->first()->id
],

['name' => 'Montes de Armenia',
'city_id' => DB::table('cities')->where('name','Tuxpan')->first()->id
],

['name' => 'Puente Don Diego',
'city_id' => DB::table('cities')->where('name','Tuxpan')->first()->id
],

['name' => 'Santiago de la Peña',
'city_id' => DB::table('cities')->where('name','Tuxpan')->first()->id
],

['name' => 'Tampiquillo',
'city_id' => DB::table('cities')->where('name','Tuxpan')->first()->id
],

['name' => 'Zapotal Zaragoza',
'city_id' => DB::table('cities')->where('name','Tuxpan')->first()->id
],

['name' => 'Dante Delgado',
'city_id' => DB::table('cities')->where('name','Tuxpan')->first()->id
],

['name' => 'Las Animas',
'city_id' => DB::table('cities')->where('name','Tuxpan')->first()->id
],

['name' => 'Fernando Gutiérrez Barrios',
'city_id' => DB::table('cities')->where('name','Tuxpan')->first()->id
],

['name' => '20 de Noviembre',
'city_id' => DB::table('cities')->where('name','Tuxpan')->first()->id
],

['name' => '1ro de Mayo',
'city_id' => DB::table('cities')->where('name','Tuxpan')->first()->id
],

['name' => 'Murillo Vidal',
'city_id' => DB::table('cities')->where('name','Tuxpan')->first()->id
],

['name' => 'Nuevo Sol',
'city_id' => DB::table('cities')->where('name','Tuxpan')->first()->id
],

['name' => 'El Paraíso',
'city_id' => DB::table('cities')->where('name','Tuxpan')->first()->id
],

['name' => 'Rancho Viejo',
'city_id' => DB::table('cities')->where('name','Tuxpan')->first()->id
],

['name' => 'La Mata',
'city_id' => DB::table('cities')->where('name','Tuxpan')->first()->id
],

['name' => 'Banderas',
'city_id' => DB::table('cities')->where('name','Tuxpan')->first()->id
],

['name' => 'Cerro de Tumilco',
'city_id' => DB::table('cities')->where('name','Tuxpan')->first()->id
],

['name' => 'Chacoaco',
'city_id' => DB::table('cities')->where('name','Tuxpan')->first()->id
],

['name' => 'Franco Cruz Hernández',
'city_id' => DB::table('cities')->where('name','Tuxpan')->first()->id
],

['name' => 'Barra Norte',
'city_id' => DB::table('cities')->where('name','Tuxpan')->first()->id
],

['name' => 'La Calzada',
'city_id' => DB::table('cities')->where('name','Tuxpan')->first()->id
],

['name' => 'La Ceiba',
'city_id' => DB::table('cities')->where('name','Tuxpan')->first()->id
],

['name' => 'La Victoria',
'city_id' => DB::table('cities')->where('name','Tuxpan')->first()->id
],

['name' => 'Tampamachoco',
'city_id' => DB::table('cities')->where('name','Tuxpan')->first()->id
],

['name' => 'Arboleda',
'city_id' => DB::table('cities')->where('name','Tuxpan')->first()->id
],

['name' => 'El Paraíso',
'city_id' => DB::table('cities')->where('name','Tuxpan')->first()->id
],

['name' => 'Emiliano Zapata',
'city_id' => DB::table('cities')->where('name','Tuxpan')->first()->id
],

['name' => 'Monte Horeb',
'city_id' => DB::table('cities')->where('name','Tuxpan')->first()->id
],

['name' => 'Niños Héroes',
'city_id' => DB::table('cities')->where('name','Tuxpan')->first()->id
],

['name' => 'El Capullo',
'city_id' => DB::table('cities')->where('name','Tuxpan')->first()->id
],

['name' => 'Playa Azul',
'city_id' => DB::table('cities')->where('name','Tuxpan')->first()->id
],

['name' => 'Benito Juárez',
'city_id' => DB::table('cities')->where('name','Tuxpan')->first()->id
],

['name' => 'Higo de la Esperanza',
'city_id' => DB::table('cities')->where('name','Tuxpan')->first()->id
],

['name' => 'Linda Vista',
'city_id' => DB::table('cities')->where('name','Tuxpan')->first()->id
],

['name' => 'Miramar (La Antigua)',
'city_id' => DB::table('cities')->where('name','Tuxpan')->first()->id
],

['name' => 'Playa Emiliano Zapata',
'city_id' => DB::table('cities')->where('name','Tuxpan')->first()->id
],

['name' => 'Corredor Industrial',
'city_id' => DB::table('cities')->where('name','Tuxpan')->first()->id
],

['name' => 'Laja del Tubo',
'city_id' => DB::table('cities')->where('name','Tuxpan')->first()->id
],

['name' => 'Las Pasas',
'city_id' => DB::table('cities')->where('name','Tuxpan')->first()->id
],

['name' => 'Monte Morelos',
'city_id' => DB::table('cities')->where('name','Tuxpan')->first()->id
],

['name' => 'Salto de La Reforma',
'city_id' => DB::table('cities')->where('name','Tuxpan')->first()->id
],

['name' => 'Tebanco',
'city_id' => DB::table('cities')->where('name','Tuxpan')->first()->id
],

['name' => 'Banco del Calichar',
'city_id' => DB::table('cities')->where('name','Tuxpan')->first()->id
],

['name' => 'El Progreso',
'city_id' => DB::table('cities')->where('name','Tuxpan')->first()->id
],

['name' => 'Chiconcoa',
'city_id' => DB::table('cities')->where('name','Tuxpan')->first()->id
],

['name' => 'El Coyol',
'city_id' => DB::table('cities')->where('name','Tuxpan')->first()->id
],

['name' => 'El Jobo',
'city_id' => DB::table('cities')->where('name','Tuxpan')->first()->id
],

['name' => 'Francisco I. Madero',
'city_id' => DB::table('cities')->where('name','Tuxpan')->first()->id
],

['name' => 'Héroes de Chapultepec (El Tamarindo)',
'city_id' => DB::table('cities')->where('name','Tuxpan')->first()->id
],

['name' => 'Macuiltépetl',
'city_id' => DB::table('cities')->where('name','Tuxpan')->first()->id
],

['name' => 'Peña Alta',
'city_id' => DB::table('cities')->where('name','Tuxpan')->first()->id
],

['name' => 'San José el Grande',
'city_id' => DB::table('cities')->where('name','Tuxpan')->first()->id
],

['name' => 'Zapote Domingo',
'city_id' => DB::table('cities')->where('name','Tuxpan')->first()->id
],

['name' => 'Chalahuite',
'city_id' => DB::table('cities')->where('name','Tuxpan')->first()->id
],

['name' => 'Nalúa',
'city_id' => DB::table('cities')->where('name','Tuxpan')->first()->id
],

['name' => 'Comején',
'city_id' => DB::table('cities')->where('name','Tuxpan')->first()->id
],

['name' => 'El Lindero',
'city_id' => DB::table('cities')->where('name','Tuxpan')->first()->id
],

['name' => 'Otatal',
'city_id' => DB::table('cities')->where('name','Tuxpan')->first()->id
],

['name' => 'Palma de Morelos',
'city_id' => DB::table('cities')->where('name','Tuxpan')->first()->id
],

['name' => 'Tronconal',
'city_id' => DB::table('cities')->where('name','Tuxpan')->first()->id
],

['name' => 'Tronconal de Herrera Beltrán',
'city_id' => DB::table('cities')->where('name','Tuxpan')->first()->id
],

['name' => 'Alto de San Lorenzo',
'city_id' => DB::table('cities')->where('name','Tuxpan')->first()->id
],

['name' => 'El Angosto',
'city_id' => DB::table('cities')->where('name','Tuxpan')->first()->id
],

['name' => 'Héroe de Nacozari (Arroyo de San Lorenzo)',
'city_id' => DB::table('cities')->where('name','Tuxpan')->first()->id
],

['name' => 'La Camelia',
'city_id' => DB::table('cities')->where('name','Tuxpan')->first()->id
],

['name' => 'Baltazar',
'city_id' => DB::table('cities')->where('name','Tuxpan')->first()->id
],

['name' => 'La Laja de Coloman',
'city_id' => DB::table('cities')->where('name','Tuxpan')->first()->id
],

['name' => 'Sabanillas',
'city_id' => DB::table('cities')->where('name','Tuxpan')->first()->id
],

['name' => 'Buena Vista',
'city_id' => DB::table('cities')->where('name','Tuxpan')->first()->id
],

['name' => 'Cruz Naranjos',
'city_id' => DB::table('cities')->where('name','Tuxpan')->first()->id
],

['name' => 'Juan Zumaya (El Remate)',
'city_id' => DB::table('cities')->where('name','Tuxpan')->first()->id
],

['name' => 'Zapotalillo',
'city_id' => DB::table('cities')->where('name','Tuxpan')->first()->id
],

['name' => 'Ojite Rancho Nuevo',
'city_id' => DB::table('cities')->where('name','Tuxpan')->first()->id
],

['name' => 'La Laja de Zapote Bueno',
'city_id' => DB::table('cities')->where('name','Tuxpan')->first()->id
],

['name' => 'Túxpam de Rodríguez Cano Centro',
'city_id' => DB::table('cities')->where('name','Tuxpan')->first()->id
],

['name' => 'El Esfuerzo',
'city_id' => DB::table('cities')->where('name','Tuxpan')->first()->id
],

['name' => 'Rafael Hernández Ochoa',
'city_id' => DB::table('cities')->where('name','Tuxpan')->first()->id
],

['name' => 'Murillo Vidal',
'city_id' => DB::table('cities')->where('name','Tuxpan')->first()->id
],

['name' => 'INFONAVIT Puerto Pesquero',
'city_id' => DB::table('cities')->where('name','Tuxpan')->first()->id
],

['name' => 'Jesús Reyes Heroles',
'city_id' => DB::table('cities')->where('name','Tuxpan')->first()->id
],

['name' => 'Esperanza Azcon',
'city_id' => DB::table('cities')->where('name','Tuxpan')->first()->id
],

['name' => 'Álvarez',
'city_id' => DB::table('cities')->where('name','Tuxpan')->first()->id
],

['name' => 'Azteca',
'city_id' => DB::table('cities')->where('name','Tuxpan')->first()->id
],

['name' => 'Mexicana Miguel Alemán',
'city_id' => DB::table('cities')->where('name','Tuxpan')->first()->id
],

['name' => 'Olímpica',
'city_id' => DB::table('cities')->where('name','Tuxpan')->first()->id
],

['name' => '5 de Julio',
'city_id' => DB::table('cities')->where('name','Tuxpan')->first()->id
],

['name' => 'Villa Mar',
'city_id' => DB::table('cities')->where('name','Tuxpan')->first()->id
],

['name' => 'Ampliación Azteca',
'city_id' => DB::table('cities')->where('name','Tuxpan')->first()->id
],

['name' => 'Concepción',
'city_id' => DB::table('cities')->where('name','Tuxpan')->first()->id
],

['name' => 'Cabo Alto',
'city_id' => DB::table('cities')->where('name','Tuxpan')->first()->id
],

['name' => 'Anáhuac',
'city_id' => DB::table('cities')->where('name','Tuxpan')->first()->id
],

['name' => 'Juárez',
'city_id' => DB::table('cities')->where('name','Tuxpan')->first()->id
],

['name' => 'Escudero',
'city_id' => DB::table('cities')->where('name','Tuxpan')->first()->id
],

['name' => 'Géminis INFONAVIT',
'city_id' => DB::table('cities')->where('name','Tuxpan')->first()->id
],

['name' => 'Las Palmas',
'city_id' => DB::table('cities')->where('name','Tuxpan')->first()->id
],

['name' => 'Lázaro Cárdenas',
'city_id' => DB::table('cities')->where('name','Tuxpan')->first()->id
],

['name' => 'Los Pinos',
'city_id' => DB::table('cities')->where('name','Tuxpan')->first()->id
],

['name' => 'INFONAVIT Castillo',
'city_id' => DB::table('cities')->where('name','Tuxpan')->first()->id
],

['name' => 'Rodríguez Alcaine',
'city_id' => DB::table('cities')->where('name','Tuxpan')->first()->id
],

['name' => 'Campo Real',
'city_id' => DB::table('cities')->where('name','Tuxpan')->first()->id
],

['name' => 'Cabo Rojo',
'city_id' => DB::table('cities')->where('name','Tuxpan')->first()->id
],

['name' => '23 de Noviembre',
'city_id' => DB::table('cities')->where('name','Tuxpan')->first()->id
],

['name' => 'Alfonso Arroyo Flores',
'city_id' => DB::table('cities')->where('name','Tuxpan')->first()->id
],

['name' => 'El Naranjal',
'city_id' => DB::table('cities')->where('name','Tuxpan')->first()->id
],

['name' => 'Loma Linda',
'city_id' => DB::table('cities')->where('name','Tuxpan')->first()->id
],

['name' => 'Reyes Heroles',
'city_id' => DB::table('cities')->where('name','Tuxpan')->first()->id
],

['name' => 'Fausto Vega Santander',
'city_id' => DB::table('cities')->where('name','Tuxpan')->first()->id
],

['name' => 'Los Mangos',
'city_id' => DB::table('cities')->where('name','Tuxpan')->first()->id
],

['name' => 'Vicente Guerrero',
'city_id' => DB::table('cities')->where('name','Tuxpan')->first()->id
],

['name' => 'Adolfo Lopez Mateos',
'city_id' => DB::table('cities')->where('name','Tuxpan')->first()->id
],

['name' => 'INFONAVIT Tulipanes',
'city_id' => DB::table('cities')->where('name','Tuxpan')->first()->id
],

['name' => 'De los Artistas',
'city_id' => DB::table('cities')->where('name','Tuxpan')->first()->id
],

['name' => 'Framboyanes',
'city_id' => DB::table('cities')->where('name','Tuxpan')->first()->id
],

['name' => 'Las Lomas',
'city_id' => DB::table('cities')->where('name','Tuxpan')->first()->id
],

['name' => 'Emiliano Zapata',
'city_id' => DB::table('cities')->where('name','Tuxpan')->first()->id
],

['name' => 'Federico Garcia Blanco',
'city_id' => DB::table('cities')->where('name','Tuxpan')->first()->id
],

['name' => 'Juan Lucas',
'city_id' => DB::table('cities')->where('name','Tuxpan')->first()->id
],

['name' => 'Las Joyas',
'city_id' => DB::table('cities')->where('name','Tuxpan')->first()->id
],

['name' => 'Las Lomas',
'city_id' => DB::table('cities')->where('name','Tuxpan')->first()->id
],

['name' => 'Pisaflores',
'city_id' => DB::table('cities')->where('name','Tuxpan')->first()->id
],

['name' => 'Luis Donaldo Colosio',
'city_id' => DB::table('cities')->where('name','Tuxpan')->first()->id
],

['name' => 'Dante Delgado',
'city_id' => DB::table('cities')->where('name','Tuxpan')->first()->id
],

['name' => 'Jazmín',
'city_id' => DB::table('cities')->where('name','Tuxpan')->first()->id
],

['name' => 'Militares',
'city_id' => DB::table('cities')->where('name','Tuxpan')->first()->id
],

['name' => 'Petropolis',
'city_id' => DB::table('cities')->where('name','Tuxpan')->first()->id
],

['name' => 'El Mirador',
'city_id' => DB::table('cities')->where('name','Tuxpan')->first()->id
],

['name' => 'El Retiro',
'city_id' => DB::table('cities')->where('name','Tuxpan')->first()->id
],

['name' => 'Insurgentes',
'city_id' => DB::table('cities')->where('name','Tuxpan')->first()->id
],

['name' => 'Obrera',
'city_id' => DB::table('cities')->where('name','Tuxpan')->first()->id
],

['name' => 'Obrera',
'city_id' => DB::table('cities')->where('name','Tuxpan')->first()->id
],

['name' => 'San Antonio',
'city_id' => DB::table('cities')->where('name','Tuxpan')->first()->id
],

['name' => 'Los Mangos',
'city_id' => DB::table('cities')->where('name','Tuxpan')->first()->id
],

['name' => 'Niños Héroes',
'city_id' => DB::table('cities')->where('name','Tuxpan')->first()->id
],

['name' => 'Colinas Del Sol',
'city_id' => DB::table('cities')->where('name','Tuxpan')->first()->id
],

['name' => 'Lomas de Maratea',
'city_id' => DB::table('cities')->where('name','Tuxpan')->first()->id
],

['name' => 'Joaquín Hernandez Galicia',
'city_id' => DB::table('cities')->where('name','Tuxpan')->first()->id
],

['name' => 'Militares Retirados',
'city_id' => DB::table('cities')->where('name','Tuxpan')->first()->id
],

['name' => 'Cenecista C.N.C.',
'city_id' => DB::table('cities')->where('name','Tuxpan')->first()->id
],

['name' => 'Túxpam VIVAH',
'city_id' => DB::table('cities')->where('name','Tuxpan')->first()->id
],

['name' => 'Los Mangos',
'city_id' => DB::table('cities')->where('name','Tuxpan')->first()->id
],

['name' => 'México Lindo',
'city_id' => DB::table('cities')->where('name','Tuxpan')->first()->id
],

['name' => 'Democrática',
'city_id' => DB::table('cities')->where('name','Tuxpan')->first()->id
],

['name' => 'Libertad',
'city_id' => DB::table('cities')->where('name','Tuxpan')->first()->id
],

['name' => 'Rodriguez Alcaine',
'city_id' => DB::table('cities')->where('name','Tuxpan')->first()->id
],

['name' => 'Vista Hermosa',
'city_id' => DB::table('cities')->where('name','Tuxpan')->first()->id
],

['name' => 'Manuel Ávila Camacho',
'city_id' => DB::table('cities')->where('name','Tuxpan')->first()->id
],

['name' => 'Rosa Maria',
'city_id' => DB::table('cities')->where('name','Tuxpan')->first()->id
],

['name' => 'Zapote Gordo',
'city_id' => DB::table('cities')->where('name','Tuxpan')->first()->id
],

['name' => '6 de Enero',
'city_id' => DB::table('cities')->where('name','Tuxpan')->first()->id
],

['name' => 'Tenechaco INFONAVIT',
'city_id' => DB::table('cities')->where('name','Tuxpan')->first()->id
],

['name' => 'Villa Rosita',
'city_id' => DB::table('cities')->where('name','Tuxpan')->first()->id
],

['name' => 'Burocrática',
'city_id' => DB::table('cities')->where('name','Tuxpan')->first()->id
],

['name' => 'INFONAVIT CANACO',
'city_id' => DB::table('cities')->where('name','Tuxpan')->first()->id
],

['name' => 'La Rivera',
'city_id' => DB::table('cities')->where('name','Tuxpan')->first()->id
],

['name' => 'Electricistas',
'city_id' => DB::table('cities')->where('name','Tuxpan')->first()->id
],

['name' => 'INFONAVIT CROC',
'city_id' => DB::table('cities')->where('name','Tuxpan')->first()->id
],

['name' => 'INFONAVIT CTM',
'city_id' => DB::table('cities')->where('name','Tuxpan')->first()->id
],

['name' => 'Tropicana',
'city_id' => DB::table('cities')->where('name','Tuxpan')->first()->id
],

['name' => 'Del Valle',
'city_id' => DB::table('cities')->where('name','Tuxpan')->first()->id
],

['name' => 'FOVISSSTE',
'city_id' => DB::table('cities')->where('name','Tuxpan')->first()->id
],

['name' => 'Adolfo Ruiz Cortines',
'city_id' => DB::table('cities')->where('name','Tuxpan')->first()->id
],

['name' => 'Enrique Rodríguez Cano',
'city_id' => DB::table('cities')->where('name','Tuxpan')->first()->id
],

['name' => 'Del Puerto',
'city_id' => DB::table('cities')->where('name','Tuxpan')->first()->id
],

['name' => '17 de Octubre',
'city_id' => DB::table('cities')->where('name','Tuxpan')->first()->id
],

['name' => 'Ampliación Adolfo Ruiz Cortinez',
'city_id' => DB::table('cities')->where('name','Tuxpan')->first()->id
],

['name' => 'Las Delicias',
'city_id' => DB::table('cities')->where('name','Tuxpan')->first()->id
],

['name' => 'FECAPOMEX',
'city_id' => DB::table('cities')->where('name','Tuxpan')->first()->id
],

['name' => 'Carlos Salinas de Gortari',
'city_id' => DB::table('cities')->where('name','Tuxpan')->first()->id
],

['name' => 'Enrique Rodríguez Cano',
'city_id' => DB::table('cities')->where('name','Tuxpan')->first()->id
],

['name' => 'Luís Donaldo Colosio',
'city_id' => DB::table('cities')->where('name','Tuxpan')->first()->id
],

['name' => 'Luis Donaldo Colosio',
'city_id' => DB::table('cities')->where('name','Tuxpan')->first()->id
],

['name' => 'Niños Héroes',
'city_id' => DB::table('cities')->where('name','Tuxpan')->first()->id
],

['name' => 'El Fortín',
'city_id' => DB::table('cities')->where('name','Tuxpan')->first()->id
],

['name' => 'Cobos',
'city_id' => DB::table('cities')->where('name','Tuxpan')->first()->id
],

['name' => 'Monte Grande',
'city_id' => DB::table('cities')->where('name','Tuxpan')->first()->id
],

['name' => 'La Calzada',
'city_id' => DB::table('cities')->where('name','Tuxpan')->first()->id
],

['name' => 'Jardines de Tuxpan',
'city_id' => DB::table('cities')->where('name','Tuxpan')->first()->id
],

['name' => 'Lomas de Tuxpan FOVISSSTE',
'city_id' => DB::table('cities')->where('name','Tuxpan')->first()->id
],

['name' => 'Valle Verde',
'city_id' => DB::table('cities')->where('name','Tuxpan')->first()->id
],

['name' => 'Casa Bella',
'city_id' => DB::table('cities')->where('name','Tuxpan')->first()->id
],

['name' => 'El Romance',
'city_id' => DB::table('cities')->where('name','Tuxpan')->first()->id
],

['name' => 'INFONAVIT Las Granjas de Alto Lucero',
'city_id' => DB::table('cities')->where('name','Tuxpan')->first()->id
],

['name' => 'Nueva Italia',
'city_id' => DB::table('cities')->where('name','Tuxpan')->first()->id
],

['name' => 'Campestre Alborada',
'city_id' => DB::table('cities')->where('name','Tuxpan')->first()->id
],

['name' => 'Granjas de Alto Lucero',
'city_id' => DB::table('cities')->where('name','Tuxpan')->first()->id
],

['name' => 'Revolución Mexicana',
'city_id' => DB::table('cities')->where('name','Tuxpan')->first()->id
],

['name' => 'Villa de Guadalupe',
'city_id' => DB::table('cities')->where('name','Tuxpan')->first()->id
],

['name' => 'INFONAVIT Las Granjas',
'city_id' => DB::table('cities')->where('name','Tuxpan')->first()->id
],

['name' => 'Los Pinos',
'city_id' => DB::table('cities')->where('name','Tuxpan')->first()->id
],

['name' => 'Del Bosque',
'city_id' => DB::table('cities')->where('name','Tuxpan')->first()->id
],

['name' => 'El Retoño',
'city_id' => DB::table('cities')->where('name','Tuxpan')->first()->id
],

['name' => 'Paola Samperio Benitez',
'city_id' => DB::table('cities')->where('name','Tuxpan')->first()->id
],

['name' => 'CEAS',
'city_id' => DB::table('cities')->where('name','Tuxpan')->first()->id
],

['name' => 'Universitaria',
'city_id' => DB::table('cities')->where('name','Tuxpan')->first()->id
],

['name' => 'El Águila',
'city_id' => DB::table('cities')->where('name','Tihuatlán')->first()->id
],

['name' => 'La Isla',
'city_id' => DB::table('cities')->where('name','Tihuatlán')->first()->id
],

['name' => 'Rancho Nuevo',
'city_id' => DB::table('cities')->where('name','Tihuatlán')->first()->id
],

['name' => 'Xocotla',
'city_id' => DB::table('cities')->where('name','Tihuatlán')->first()->id
],

['name' => 'Acontitla',
'city_id' => DB::table('cities')->where('name','Tihuatlán')->first()->id
],

['name' => 'San Miguel Mecatepec',
'city_id' => DB::table('cities')->where('name','Tihuatlán')->first()->id
],

['name' => 'Enrique Rodriguez Cano',
'city_id' => DB::table('cities')->where('name','Tihuatlán')->first()->id
],

['name' => 'El Manantial',
'city_id' => DB::table('cities')->where('name','Tihuatlán')->first()->id
],

['name' => 'Chichicoaxtla',
'city_id' => DB::table('cities')->where('name','Tihuatlán')->first()->id
],

['name' => 'La Concepción',
'city_id' => DB::table('cities')->where('name','Tihuatlán')->first()->id
],

['name' => 'Paso Del Pital',
'city_id' => DB::table('cities')->where('name','Tihuatlán')->first()->id
],

['name' => 'El Palmar',
'city_id' => DB::table('cities')->where('name','Tihuatlán')->first()->id
],

['name' => 'Úrsulo Galvan',
'city_id' => DB::table('cities')->where('name','Tihuatlán')->first()->id
],

['name' => 'Poza Rica (El Tajín)',
'city_id' => DB::table('cities')->where('name','Tihuatlán')->first()->id
],

['name' => 'Emiliano Zapata (La Bomba)',
'city_id' => DB::table('cities')->where('name','Tihuatlán')->first()->id
],

['name' => 'Del Sol',
'city_id' => DB::table('cities')->where('name','Tihuatlán')->first()->id
],

['name' => 'El Mamey',
'city_id' => DB::table('cities')->where('name','Tihuatlán')->first()->id
],

['name' => 'Hidalgo',
'city_id' => DB::table('cities')->where('name','Tihuatlán')->first()->id
],

['name' => 'Francisco I. Madero',
'city_id' => DB::table('cities')->where('name','Tihuatlán')->first()->id
],

['name' => 'Buena Vista',
'city_id' => DB::table('cities')->where('name','Tihuatlán')->first()->id
],

['name' => 'Acuatempa',
'city_id' => DB::table('cities')->where('name','Tihuatlán')->first()->id
],

['name' => 'Nuevo Progreso',
'city_id' => DB::table('cities')->where('name','Tihuatlán')->first()->id
],

['name' => 'Plan de Ayala',
'city_id' => DB::table('cities')->where('name','Tihuatlán')->first()->id
],

['name' => 'El Copal',
'city_id' => DB::table('cities')->where('name','Tihuatlán')->first()->id
],

['name' => 'Sebastián Lerdo de Tejada',
'city_id' => DB::table('cities')->where('name','Tihuatlán')->first()->id
],

['name' => 'Papatlarillo',
'city_id' => DB::table('cities')->where('name','Tihuatlán')->first()->id
],

['name' => 'Miahuapan',
'city_id' => DB::table('cities')->where('name','Tihuatlán')->first()->id
],

['name' => 'Antonio M. Quirasco',
'city_id' => DB::table('cities')->where('name','Tihuatlán')->first()->id
],

['name' => 'Constitución',
'city_id' => DB::table('cities')->where('name','Tihuatlán')->first()->id
],

['name' => 'Palo de Rosa',
'city_id' => DB::table('cities')->where('name','Tihuatlán')->first()->id
],

['name' => 'Poza Azul de los Reyes',
'city_id' => DB::table('cities')->where('name','Tihuatlán')->first()->id
],

['name' => 'Progreso de Maravillas',
'city_id' => DB::table('cities')->where('name','Tihuatlán')->first()->id
],

['name' => 'El Huizotate',
'city_id' => DB::table('cities')->where('name','Tihuatlán')->first()->id
],

['name' => 'Sector Cuatro',
'city_id' => DB::table('cities')->where('name','Tihuatlán')->first()->id
],

['name' => 'General Lázaro Cárdenas del Río',
'city_id' => DB::table('cities')->where('name','Tihuatlán')->first()->id
],

['name' => 'Ricardo Flores Magón',
'city_id' => DB::table('cities')->where('name','Tihuatlán')->first()->id
],

['name' => 'Totolapa',
'city_id' => DB::table('cities')->where('name','Tihuatlán')->first()->id
],

['name' => 'Lindero',
'city_id' => DB::table('cities')->where('name','Tihuatlán')->first()->id
],

['name' => 'Fredepo',
'city_id' => DB::table('cities')->where('name','Tihuatlán')->first()->id
],

['name' => 'Manantial',
'city_id' => DB::table('cities')->where('name','Tihuatlán')->first()->id
],

['name' => 'Zacate Colorado',
'city_id' => DB::table('cities')->where('name','Tihuatlán')->first()->id
],

['name' => 'Santa Isabel',
'city_id' => DB::table('cities')->where('name','Tihuatlán')->first()->id
],

['name' => 'Dirección de Caminos',
'city_id' => DB::table('cities')->where('name','Tihuatlán')->first()->id
],

['name' => 'Sector Cinco',
'city_id' => DB::table('cities')->where('name','Tihuatlán')->first()->id
],

['name' => 'Sector Pajaritos',
'city_id' => DB::table('cities')->where('name','Tihuatlán')->first()->id
],

['name' => 'Sector Ceiba',
'city_id' => DB::table('cities')->where('name','Tihuatlán')->first()->id
],

['name' => 'Sector México',
'city_id' => DB::table('cities')->where('name','Tihuatlán')->first()->id
],

['name' => 'Tierra Blanca',
'city_id' => DB::table('cities')->where('name','Tihuatlán')->first()->id
],

['name' => 'La Reforma',
'city_id' => DB::table('cities')->where('name','Tihuatlán')->first()->id
],

['name' => 'Pueblo Viejo',
'city_id' => DB::table('cities')->where('name','Tihuatlán')->first()->id
],

['name' => 'Jiliapa Segundo',
'city_id' => DB::table('cities')->where('name','Tihuatlán')->first()->id
],

['name' => 'San Nicolás',
'city_id' => DB::table('cities')->where('name','Tihuatlán')->first()->id
],

['name' => 'Tecomate',
'city_id' => DB::table('cities')->where('name','Tihuatlán')->first()->id
],

['name' => 'El Terrero',
'city_id' => DB::table('cities')->where('name','Tihuatlán')->first()->id
],

['name' => 'Zapotal Santa Cruz',
'city_id' => DB::table('cities')->where('name','Tihuatlán')->first()->id
],

['name' => 'Tumbadero',
'city_id' => DB::table('cities')->where('name','Tihuatlán')->first()->id
],

['name' => 'La Pasadita',
'city_id' => DB::table('cities')->where('name','Tihuatlán')->first()->id
],

['name' => 'El Horcón',
'city_id' => DB::table('cities')->where('name','Tihuatlán')->first()->id
],

['name' => 'Chapolhuac',
'city_id' => DB::table('cities')->where('name','Tihuatlán')->first()->id
],

['name' => 'Chichimantla Segundo',
'city_id' => DB::table('cities')->where('name','Tihuatlán')->first()->id
],

['name' => 'La Unión Segundo',
'city_id' => DB::table('cities')->where('name','Tihuatlán')->first()->id
],

['name' => 'Tihuatlan Centro',
'city_id' => DB::table('cities')->where('name','Tihuatlán')->first()->id
],

['name' => 'Unidad Nacional',
'city_id' => DB::table('cities')->where('name','Tihuatlán')->first()->id
],

['name' => 'Socialistas',
'city_id' => DB::table('cities')->where('name','Tihuatlán')->first()->id
],

['name' => 'Lázaro Cárdenas',
'city_id' => DB::table('cities')->where('name','Tihuatlán')->first()->id
],

['name' => 'Azteca',
'city_id' => DB::table('cities')->where('name','Tihuatlán')->first()->id
],

['name' => 'Magisterial',
'city_id' => DB::table('cities')->where('name','Tihuatlán')->first()->id
],

['name' => 'San Francisco de Asís',
'city_id' => DB::table('cities')->where('name','Tihuatlán')->first()->id
],

['name' => 'Cruz Blanca',
'city_id' => DB::table('cities')->where('name','Tihuatlán')->first()->id
],

['name' => 'Independencia',
'city_id' => DB::table('cities')->where('name','Tihuatlán')->first()->id
],

['name' => 'Benito Juárez',
'city_id' => DB::table('cities')->where('name','Tihuatlán')->first()->id
],

['name' => 'Totomoxtte',
'city_id' => DB::table('cities')->where('name','Tihuatlán')->first()->id
],

['name' => 'Tepetate',
'city_id' => DB::table('cities')->where('name','Tihuatlán')->first()->id
],

['name' => 'Lomas Del Paraíso',
'city_id' => DB::table('cities')->where('name','Tihuatlán')->first()->id
],

['name' => 'Lomas Verdes',
'city_id' => DB::table('cities')->where('name','Tihuatlán')->first()->id
],

['name' => 'Castillo de Teayo',
'city_id' => DB::table('cities')->where('name','Castillo de Teayo')->first()->id
],

['name' => 'La Defensa',
'city_id' => DB::table('cities')->where('name','Castillo de Teayo')->first()->id
],

['name' => 'La Guadalupe',
'city_id' => DB::table('cities')->where('name','Castillo de Teayo')->first()->id
],

['name' => 'Teayo',
'city_id' => DB::table('cities')->where('name','Castillo de Teayo')->first()->id
],

['name' => 'La Puerta',
'city_id' => DB::table('cities')->where('name','Castillo de Teayo')->first()->id
],

['name' => 'Mequetla',
'city_id' => DB::table('cities')->where('name','Castillo de Teayo')->first()->id
],

['name' => 'El Bejucal',
'city_id' => DB::table('cities')->where('name','Castillo de Teayo')->first()->id
],

['name' => 'Francisco Luján (Dos Pasos)',
'city_id' => DB::table('cities')->where('name','Castillo de Teayo')->first()->id
],

['name' => 'Limón Chiquito',
'city_id' => DB::table('cities')->where('name','Cazones de Herrera')->first()->id
],

['name' => 'La Ceiba',
'city_id' => DB::table('cities')->where('name','Cazones de Herrera')->first()->id
],

['name' => 'La Encantada',
'city_id' => DB::table('cities')->where('name','Cazones de Herrera')->first()->id
],

['name' => 'Manlio Fabio Altamirano Km. 25',
'city_id' => DB::table('cities')->where('name','Cazones de Herrera')->first()->id
],

['name' => 'Plan de Limón',
'city_id' => DB::table('cities')->where('name','Cazones de Herrera')->first()->id
],

['name' => 'Cabellal 1',
'city_id' => DB::table('cities')->where('name','Cazones de Herrera')->first()->id
],

['name' => 'Cruz Blanca',
'city_id' => DB::table('cities')->where('name','Cazones de Herrera')->first()->id
],

['name' => 'El Zapote',
'city_id' => DB::table('cities')->where('name','Cazones de Herrera')->first()->id
],

['name' => 'Unión Kilómetro 31',
'city_id' => DB::table('cities')->where('name','Cazones de Herrera')->first()->id
],

['name' => 'Cazones de Herrera Centro',
'city_id' => DB::table('cities')->where('name','Cazones de Herrera')->first()->id
],

['name' => 'Alto Lucero',
'city_id' => DB::table('cities')->where('name','Cazones de Herrera')->first()->id
],

['name' => 'El Paraíso',
'city_id' => DB::table('cities')->where('name','Cazones de Herrera')->first()->id
],

['name' => 'El Huarache',
'city_id' => DB::table('cities')->where('name','Cazones de Herrera')->first()->id
],

['name' => 'El Progreso',
'city_id' => DB::table('cities')->where('name','Cazones de Herrera')->first()->id
],

['name' => 'La Antena',
'city_id' => DB::table('cities')->where('name','Cazones de Herrera')->first()->id
],

['name' => 'Agustin Acosta Lagunes',
'city_id' => DB::table('cities')->where('name','Cazones de Herrera')->first()->id
],

['name' => 'Cerro Del Fortín',
'city_id' => DB::table('cities')->where('name','Cazones de Herrera')->first()->id
],

['name' => 'Rancho Nuevo',
'city_id' => DB::table('cities')->where('name','Cazones de Herrera')->first()->id
],

['name' => 'Cerro Verde',
'city_id' => DB::table('cities')->where('name','Cazones de Herrera')->first()->id
],

['name' => 'Barra de Cazones',
'city_id' => DB::table('cities')->where('name','Cazones de Herrera')->first()->id
],

['name' => 'Zozocolco de Hidalgo',
'city_id' => DB::table('cities')->where('name','Zozocolco de Hidalgo')->first()->id
],

['name' => 'Acatzacan',
'city_id' => DB::table('cities')->where('name','Zozocolco de Hidalgo')->first()->id
],

['name' => 'Las Barrancas',
'city_id' => DB::table('cities')->where('name','Zozocolco de Hidalgo')->first()->id
],

['name' => 'Plan de Ayala',
'city_id' => DB::table('cities')->where('name','Zozocolco de Hidalgo')->first()->id
],

['name' => 'Tahuaxni Sur',
'city_id' => DB::table('cities')->where('name','Zozocolco de Hidalgo')->first()->id
],

['name' => 'Buenos Aires',
'city_id' => DB::table('cities')->where('name','Zozocolco de Hidalgo')->first()->id
],

['name' => 'Zozocolco de Guerrero',
'city_id' => DB::table('cities')->where('name','Zozocolco de Hidalgo')->first()->id
],

['name' => 'Anayal',
'city_id' => DB::table('cities')->where('name','Zozocolco de Hidalgo')->first()->id
],

['name' => 'Tecuantepec',
'city_id' => DB::table('cities')->where('name','Zozocolco de Hidalgo')->first()->id
],

['name' => 'Colon',
'city_id' => DB::table('cities')->where('name','Zozocolco de Hidalgo')->first()->id
],

['name' => 'Chumatlán',
'city_id' => DB::table('cities')->where('name','Chumatlán')->first()->id
],

['name' => 'La Vega',
'city_id' => DB::table('cities')->where('name','Chumatlán')->first()->id
],

['name' => 'Lázaro Cárdenas',
'city_id' => DB::table('cities')->where('name','Chumatlán')->first()->id
],

['name' => 'Coxquihui',
'city_id' => DB::table('cities')->where('name','Coxquihui')->first()->id
],

['name' => 'Chihuixcruz',
'city_id' => DB::table('cities')->where('name','Coxquihui')->first()->id
],

['name' => 'Sabanas de Jalostoc',
'city_id' => DB::table('cities')->where('name','Coxquihui')->first()->id
],

['name' => 'Cuauhtémoc',
'city_id' => DB::table('cities')->where('name','Coxquihui')->first()->id
],

['name' => 'La Fabrica',
'city_id' => DB::table('cities')->where('name','Coxquihui')->first()->id
],

['name' => 'El Zapote',
'city_id' => DB::table('cities')->where('name','Coxquihui')->first()->id
],

['name' => 'Adolfo Ruiz Cortines',
'city_id' => DB::table('cities')->where('name','Coxquihui')->first()->id
],

['name' => 'Ojite de Matamoros',
'city_id' => DB::table('cities')->where('name','Coxquihui')->first()->id
],

['name' => 'Arenal',
'city_id' => DB::table('cities')->where('name','Coxquihui')->first()->id
],

['name' => 'Ojital',
'city_id' => DB::table('cities')->where('name','Coxquihui')->first()->id
],

['name' => 'La Higuera',
'city_id' => DB::table('cities')->where('name','Coxquihui')->first()->id
],

['name' => 'Jose Maria Morelos',
'city_id' => DB::table('cities')->where('name','Coxquihui')->first()->id
],

['name' => 'Mecatlan',
'city_id' => DB::table('cities')->where('name','Mecatlán')->first()->id
],

['name' => 'Naranjales',
'city_id' => DB::table('cities')->where('name','Mecatlán')->first()->id
],

['name' => 'Puxtla',
'city_id' => DB::table('cities')->where('name','Mecatlán')->first()->id
],

['name' => 'Ricardo Flores Magón',
'city_id' => DB::table('cities')->where('name','Mecatlán')->first()->id
],

['name' => 'La Escalera',
'city_id' => DB::table('cities')->where('name','Mecatlán')->first()->id
],

['name' => 'Rancho Alegre',
'city_id' => DB::table('cities')->where('name','Mecatlán')->first()->id
],

['name' => 'Filomeno Mata',
'city_id' => DB::table('cities')->where('name','Filomeno Mata')->first()->id
],

['name' => 'Eleodoro Dávila',
'city_id' => DB::table('cities')->where('name','Filomeno Mata')->first()->id
],

['name' => 'Francisco Villa',
'city_id' => DB::table('cities')->where('name','Filomeno Mata')->first()->id
],

['name' => 'Progreso de Zaragoza',
'city_id' => DB::table('cities')->where('name','Coahuitlán')->first()->id
],

['name' => 'Coahuitlán',
'city_id' => DB::table('cities')->where('name','Coahuitlán')->first()->id
],

['name' => 'Macedonio Alonso',
'city_id' => DB::table('cities')->where('name','Coahuitlán')->first()->id
],

['name' => 'Coyutla',
'city_id' => DB::table('cities')->where('name','Coyutla')->first()->id
],

['name' => 'Chicualoque',
'city_id' => DB::table('cities')->where('name','Coyutla')->first()->id
],

['name' => 'El Paso de Coyutla',
'city_id' => DB::table('cities')->where('name','Coyutla')->first()->id
],

['name' => 'Las Lomas',
'city_id' => DB::table('cities')->where('name','Coyutla')->first()->id
],

['name' => 'Tulapilla',
'city_id' => DB::table('cities')->where('name','Coyutla')->first()->id
],

['name' => 'Catxiquilín',
'city_id' => DB::table('cities')->where('name','Coyutla')->first()->id
],

['name' => 'Guadalupe',
'city_id' => DB::table('cities')->where('name','Coyutla')->first()->id
],

['name' => 'La Chaca',
'city_id' => DB::table('cities')->where('name','Coyutla')->first()->id
],

['name' => 'San Marcos',
'city_id' => DB::table('cities')->where('name','Coyutla')->first()->id
],

['name' => 'Independencia',
'city_id' => DB::table('cities')->where('name','Coyutla')->first()->id
],

['name' => 'Arroyo Seco',
'city_id' => DB::table('cities')->where('name','Coyutla')->first()->id
],

['name' => 'Buenavista',
'city_id' => DB::table('cities')->where('name','Coyutla')->first()->id
],

['name' => 'San Andrecito',
'city_id' => DB::table('cities')->where('name','Coyutla')->first()->id
],

['name' => 'Calalco',
'city_id' => DB::table('cities')->where('name','Coyutla')->first()->id
],

['name' => 'Panorama',
'city_id' => DB::table('cities')->where('name','Coyutla')->first()->id
],

['name' => 'Coatzintla Centro',
'city_id' => DB::table('cities')->where('name','Coatzintla')->first()->id
],

['name' => 'Escolin de Olarte',
'city_id' => DB::table('cities')->where('name','Coatzintla')->first()->id
],

['name' => 'López Mateos',
'city_id' => DB::table('cities')->where('name','Coatzintla')->first()->id
],

['name' => 'Los Naranjos',
'city_id' => DB::table('cities')->where('name','Coatzintla')->first()->id
],

['name' => 'Los Angeles',
'city_id' => DB::table('cities')->where('name','Coatzintla')->first()->id
],

['name' => '14 de Marzo',
'city_id' => DB::table('cities')->where('name','Coatzintla')->first()->id
],

['name' => 'Cerro del Tepeyac',
'city_id' => DB::table('cities')->where('name','Coatzintla')->first()->id
],

['name' => 'Infonavit Camioneros',
'city_id' => DB::table('cities')->where('name','Coatzintla')->first()->id
],

['name' => 'Tajin',
'city_id' => DB::table('cities')->where('name','Coatzintla')->first()->id
],

['name' => 'Jardines de Coatzintla',
'city_id' => DB::table('cities')->where('name','Coatzintla')->first()->id
],

['name' => 'Olmeca',
'city_id' => DB::table('cities')->where('name','Coatzintla')->first()->id
],

['name' => 'José María Morelos y Pavón',
'city_id' => DB::table('cities')->where('name','Coatzintla')->first()->id
],

['name' => 'Kawatzin Valencia',
'city_id' => DB::table('cities')->where('name','Coatzintla')->first()->id
],

['name' => 'Faja de Oro',
'city_id' => DB::table('cities')->where('name','Coatzintla')->first()->id
],

['name' => 'Veracruz',
'city_id' => DB::table('cities')->where('name','Coatzintla')->first()->id
],

['name' => 'Ampliación Morelos',
'city_id' => DB::table('cities')->where('name','Coatzintla')->first()->id
],

['name' => '5 de Febrero',
'city_id' => DB::table('cities')->where('name','Coatzintla')->first()->id
],

['name' => 'De Xico',
'city_id' => DB::table('cities')->where('name','Coatzintla')->first()->id
],

['name' => 'Azteca',
'city_id' => DB::table('cities')->where('name','Coatzintla')->first()->id
],

['name' => 'Antonio M. Quirasco 2a Sección',
'city_id' => DB::table('cities')->where('name','Coatzintla')->first()->id
],

['name' => 'Troncones y Potrerillos',
'city_id' => DB::table('cities')->where('name','Coatzintla')->first()->id
],

['name' => 'Adolfo Ruíz Cortines',
'city_id' => DB::table('cities')->where('name','Coatzintla')->first()->id
],

['name' => 'Antonio M. Quirasco',
'city_id' => DB::table('cities')->where('name','Coatzintla')->first()->id
],

['name' => 'San Rafael',
'city_id' => DB::table('cities')->where('name','Coatzintla')->first()->id
],

['name' => 'Las Palmas',
'city_id' => DB::table('cities')->where('name','Coatzintla')->first()->id
],

['name' => 'Luis Donaldo Colosio',
'city_id' => DB::table('cities')->where('name','Coatzintla')->first()->id
],

['name' => 'Guadalupe Victoria',
'city_id' => DB::table('cities')->where('name','Coatzintla')->first()->id
],

['name' => 'Corralillos',
'city_id' => DB::table('cities')->where('name','Coatzintla')->first()->id
],

['name' => 'La Laja',
'city_id' => DB::table('cities')->where('name','Coatzintla')->first()->id
],

['name' => 'San Fernando',
'city_id' => DB::table('cities')->where('name','Coatzintla')->first()->id
],

['name' => 'Arroyo Florido',
'city_id' => DB::table('cities')->where('name','Coatzintla')->first()->id
],

['name' => 'Geovillas del Real',
'city_id' => DB::table('cities')->where('name','Coatzintla')->first()->id
],

['name' => 'El Chote',
'city_id' => DB::table('cities')->where('name','Coatzintla')->first()->id
],

['name' => 'Palma Sola',
'city_id' => DB::table('cities')->where('name','Coatzintla')->first()->id
],

['name' => 'Manuel María Contreras',
'city_id' => DB::table('cities')->where('name','Coatzintla')->first()->id
],

['name' => 'El Vizcaíno',
'city_id' => DB::table('cities')->where('name','Coatzintla')->first()->id
],

['name' => 'Espinal',
'city_id' => DB::table('cities')->where('name','Espinal')->first()->id
],

['name' => 'Cuauhtémoc',
'city_id' => DB::table('cities')->where('name','Espinal')->first()->id
],

['name' => 'Ojo de Agua',
'city_id' => DB::table('cities')->where('name','Espinal')->first()->id
],

['name' => 'Oriente Meridiano',
'city_id' => DB::table('cities')->where('name','Espinal')->first()->id
],

['name' => 'Buenavista',
'city_id' => DB::table('cities')->where('name','Espinal')->first()->id
],

['name' => 'Oriente Mediodía',
'city_id' => DB::table('cities')->where('name','Espinal')->first()->id
],

['name' => 'El Peñón',
'city_id' => DB::table('cities')->where('name','Espinal')->first()->id
],

['name' => 'Miguel Alemán Poblado',
'city_id' => DB::table('cities')->where('name','Espinal')->first()->id
],

['name' => 'Arenal',
'city_id' => DB::table('cities')->where('name','Espinal')->first()->id
],

['name' => 'San Leoncio Jamaya',
'city_id' => DB::table('cities')->where('name','Espinal')->first()->id
],

['name' => 'Zacate Limón',
'city_id' => DB::table('cities')->where('name','Espinal')->first()->id
],

['name' => 'Comalteco',
'city_id' => DB::table('cities')->where('name','Espinal')->first()->id
],

['name' => 'El Ermitaño',
'city_id' => DB::table('cities')->where('name','Espinal')->first()->id
],

['name' => 'La Luna',
'city_id' => DB::table('cities')->where('name','Espinal')->first()->id
],

['name' => 'Poza Larga Zapotal',
'city_id' => DB::table('cities')->where('name','Espinal')->first()->id
],

['name' => 'Santa Catarina',
'city_id' => DB::table('cities')->where('name','Espinal')->first()->id
],

['name' => 'El Ciruelo y Santa Catarina',
'city_id' => DB::table('cities')->where('name','Espinal')->first()->id
],

['name' => 'Melchor Ocampo',
'city_id' => DB::table('cities')->where('name','Espinal')->first()->id
],

['name' => 'Chapultepec',
'city_id' => DB::table('cities')->where('name','Espinal')->first()->id
],

['name' => 'Santa Isabel',
'city_id' => DB::table('cities')->where('name','Espinal')->first()->id
],

['name' => 'El Pacifico',
'city_id' => DB::table('cities')->where('name','Espinal')->first()->id
],

['name' => 'La Noria',
'city_id' => DB::table('cities')->where('name','Espinal')->first()->id
],

['name' => 'San Francisco',
'city_id' => DB::table('cities')->where('name','Espinal')->first()->id
],

['name' => 'Entabladero',
'city_id' => DB::table('cities')->where('name','Espinal')->first()->id
],

['name' => 'El Mirador',
'city_id' => DB::table('cities')->where('name','Espinal')->first()->id
],

['name' => 'Poza Larga Miradores',
'city_id' => DB::table('cities')->where('name','Espinal')->first()->id
],

['name' => 'Tierra y Libertad',
'city_id' => DB::table('cities')->where('name','Poza Rica de Hidalgo')->first()->id
],

['name' => 'Fraternidad Antorchista',
'city_id' => DB::table('cities')->where('name','Poza Rica de Hidalgo')->first()->id
],

['name' => 'Prensa Nacional',
'city_id' => DB::table('cities')->where('name','Poza Rica de Hidalgo')->first()->id
],

['name' => 'Las Vegas',
'city_id' => DB::table('cities')->where('name','Poza Rica de Hidalgo')->first()->id
],

['name' => 'Reforma',
'city_id' => DB::table('cities')->where('name','Poza Rica de Hidalgo')->first()->id
],

['name' => 'Santa Emilia',
'city_id' => DB::table('cities')->where('name','Poza Rica de Hidalgo')->first()->id
],

['name' => 'Lomas Del Carmen',
'city_id' => DB::table('cities')->where('name','Poza Rica de Hidalgo')->first()->id
],

['name' => 'Mecánicos de Piso',
'city_id' => DB::table('cities')->where('name','Poza Rica de Hidalgo')->first()->id
],

['name' => 'Perlas Del Oriente',
'city_id' => DB::table('cities')->where('name','Poza Rica de Hidalgo')->first()->id
],

['name' => 'La Ceiba',
'city_id' => DB::table('cities')->where('name','Poza Rica de Hidalgo')->first()->id
],

['name' => 'Manuel Ávila Camacho',
'city_id' => DB::table('cities')->where('name','Poza Rica de Hidalgo')->first()->id
],

['name' => 'Nacional',
'city_id' => DB::table('cities')->where('name','Poza Rica de Hidalgo')->first()->id
],

['name' => 'Nuevo Progreso',
'city_id' => DB::table('cities')->where('name','Poza Rica de Hidalgo')->first()->id
],

['name' => 'Los Sauces',
'city_id' => DB::table('cities')->where('name','Poza Rica de Hidalgo')->first()->id
],

['name' => 'Heriberto Jara Corona',
'city_id' => DB::table('cities')->where('name','Poza Rica de Hidalgo')->first()->id
],

['name' => 'Bella Vista',
'city_id' => DB::table('cities')->where('name','Poza Rica de Hidalgo')->first()->id
],

['name' => 'Sector Popular',
'city_id' => DB::table('cities')->where('name','Poza Rica de Hidalgo')->first()->id
],

['name' => 'Jesús Reyes Heroles',
'city_id' => DB::table('cities')->where('name','Poza Rica de Hidalgo')->first()->id
],

['name' => 'Cerro Del Mesón',
'city_id' => DB::table('cities')->where('name','Poza Rica de Hidalgo')->first()->id
],

['name' => 'San Felipe',
'city_id' => DB::table('cities')->where('name','Poza Rica de Hidalgo')->first()->id
],

['name' => 'Los Mangos',
'city_id' => DB::table('cities')->where('name','Poza Rica de Hidalgo')->first()->id
],

['name' => 'Mirador',
'city_id' => DB::table('cities')->where('name','Poza Rica de Hidalgo')->first()->id
],

['name' => 'Arroyo del Mollejón',
'city_id' => DB::table('cities')->where('name','Poza Rica de Hidalgo')->first()->id
],

['name' => 'El Mollejon',
'city_id' => DB::table('cities')->where('name','Poza Rica de Hidalgo')->first()->id
],

['name' => 'Arroyo del Maíz',
'city_id' => DB::table('cities')->where('name','Poza Rica de Hidalgo')->first()->id
],

['name' => 'Cazones',
'city_id' => DB::table('cities')->where('name','Poza Rica de Hidalgo')->first()->id
],

['name' => 'Las Palmas',
'city_id' => DB::table('cities')->where('name','Poza Rica de Hidalgo')->first()->id
],

['name' => 'Arroyo del Maíz Uno',
'city_id' => DB::table('cities')->where('name','Poza Rica de Hidalgo')->first()->id
],

['name' => 'Técnicos y Profesionistas',
'city_id' => DB::table('cities')->where('name','Poza Rica de Hidalgo')->first()->id
],

['name' => 'Santa Fe',
'city_id' => DB::table('cities')->where('name','Poza Rica de Hidalgo')->first()->id
],

['name' => 'Chapultepec',
'city_id' => DB::table('cities')->where('name','Poza Rica de Hidalgo')->first()->id
],

['name' => 'Obras Sociales',
'city_id' => DB::table('cities')->where('name','Poza Rica de Hidalgo')->first()->id
],

['name' => 'Santa Elena',
'city_id' => DB::table('cities')->where('name','Poza Rica de Hidalgo')->first()->id
],

['name' => 'Residencial Bosques de Santa Elena',
'city_id' => DB::table('cities')->where('name','Poza Rica de Hidalgo')->first()->id
],

['name' => 'San Román',
'city_id' => DB::table('cities')->where('name','Poza Rica de Hidalgo')->first()->id
],

['name' => 'Santa Regina',
'city_id' => DB::table('cities')->where('name','Poza Rica de Hidalgo')->first()->id
],

['name' => 'Parcela 14',
'city_id' => DB::table('cities')->where('name','Poza Rica de Hidalgo')->first()->id
],

['name' => 'Tepeyac',
'city_id' => DB::table('cities')->where('name','Poza Rica de Hidalgo')->first()->id
],

['name' => 'Francisco I Madero',
'city_id' => DB::table('cities')->where('name','Poza Rica de Hidalgo')->first()->id
],

['name' => 'Laredo',
'city_id' => DB::table('cities')->where('name','Poza Rica de Hidalgo')->first()->id
],

['name' => 'Miguel Hidalgo',
'city_id' => DB::table('cities')->where('name','Poza Rica de Hidalgo')->first()->id
],

['name' => 'Obrera',
'city_id' => DB::table('cities')->where('name','Poza Rica de Hidalgo')->first()->id
],

['name' => '5 de Febrero',
'city_id' => DB::table('cities')->where('name','Poza Rica de Hidalgo')->first()->id
],

['name' => 'Parcela 24',
'city_id' => DB::table('cities')->where('name','Poza Rica de Hidalgo')->first()->id
],

['name' => 'Agustín Lara',
'city_id' => DB::table('cities')->where('name','Poza Rica de Hidalgo')->first()->id
],

['name' => 'Anáhuac',
'city_id' => DB::table('cities')->where('name','Poza Rica de Hidalgo')->first()->id
],

['name' => 'Tamaulipas',
'city_id' => DB::table('cities')->where('name','Poza Rica de Hidalgo')->first()->id
],

['name' => 'Yanga',
'city_id' => DB::table('cities')->where('name','Poza Rica de Hidalgo')->first()->id
],

['name' => 'Azteca',
'city_id' => DB::table('cities')->where('name','Poza Rica de Hidalgo')->first()->id
],

['name' => 'Ignacio Zaragoza',
'city_id' => DB::table('cities')->where('name','Poza Rica de Hidalgo')->first()->id
],

['name' => 'Las Valentinas',
'city_id' => DB::table('cities')->where('name','Poza Rica de Hidalgo')->first()->id
],

['name' => 'Yanga',
'city_id' => DB::table('cities')->where('name','Poza Rica de Hidalgo')->first()->id
],

['name' => 'Constituyentes',
'city_id' => DB::table('cities')->where('name','Poza Rica de Hidalgo')->first()->id
],

['name' => 'Francisco Sarabia',
'city_id' => DB::table('cities')->where('name','Poza Rica de Hidalgo')->first()->id
],

['name' => 'Heriberto Kehoe Vicent',
'city_id' => DB::table('cities')->where('name','Poza Rica de Hidalgo')->first()->id
],

['name' => 'Emiliano Zapata',
'city_id' => DB::table('cities')->where('name','Poza Rica de Hidalgo')->first()->id
],

['name' => 'Libertad',
'city_id' => DB::table('cities')->where('name','Poza Rica de Hidalgo')->first()->id
],

['name' => 'Rafael Hernández Ochoa',
'city_id' => DB::table('cities')->where('name','Poza Rica de Hidalgo')->first()->id
],

['name' => 'Insurgentes',
'city_id' => DB::table('cities')->where('name','Poza Rica de Hidalgo')->first()->id
],

['name' => 'Guadalupe Victoria',
'city_id' => DB::table('cities')->where('name','Poza Rica de Hidalgo')->first()->id
],

['name' => 'Petrolera',
'city_id' => DB::table('cities')->where('name','Poza Rica de Hidalgo')->first()->id
],

['name' => 'Petromex',
'city_id' => DB::table('cities')->where('name','Poza Rica de Hidalgo')->first()->id
],

['name' => '18 de Marzo',
'city_id' => DB::table('cities')->where('name','Poza Rica de Hidalgo')->first()->id
],

['name' => 'Las Huastecas',
'city_id' => DB::table('cities')->where('name','Poza Rica de Hidalgo')->first()->id
],

['name' => 'Las Animas',
'city_id' => DB::table('cities')->where('name','Poza Rica de Hidalgo')->first()->id
],

['name' => 'Halliburton',
'city_id' => DB::table('cities')->where('name','Poza Rica de Hidalgo')->first()->id
],

['name' => 'Independencia',
'city_id' => DB::table('cities')->where('name','Poza Rica de Hidalgo')->first()->id
],

['name' => 'Lázaro Cárdenas',
'city_id' => DB::table('cities')->where('name','Poza Rica de Hidalgo')->first()->id
],

['name' => 'Las Gaviotas',
'city_id' => DB::table('cities')->where('name','Poza Rica de Hidalgo')->first()->id
],

['name' => 'Unidad Poza de Cuero',
'city_id' => DB::table('cities')->where('name','Poza Rica de Hidalgo')->first()->id
],

['name' => 'INFONAVIT Poza de Cuero',
'city_id' => DB::table('cities')->where('name','Poza Rica de Hidalgo')->first()->id
],

['name' => 'La Rueda',
'city_id' => DB::table('cities')->where('name','Poza Rica de Hidalgo')->first()->id
],

['name' => 'Lomas Residencial',
'city_id' => DB::table('cities')->where('name','Poza Rica de Hidalgo')->first()->id
],

['name' => 'Primavera',
'city_id' => DB::table('cities')->where('name','Poza Rica de Hidalgo')->first()->id
],

['name' => 'Arboledas',
'city_id' => DB::table('cities')->where('name','Poza Rica de Hidalgo')->first()->id
],

['name' => 'Benito Juárez',
'city_id' => DB::table('cities')->where('name','Poza Rica de Hidalgo')->first()->id
],

['name' => 'México',
'city_id' => DB::table('cities')->where('name','Poza Rica de Hidalgo')->first()->id
],

['name' => 'Miguel Hidalgo',
'city_id' => DB::table('cities')->where('name','Poza Rica de Hidalgo')->first()->id
],

['name' => 'Las Granjas',
'city_id' => DB::table('cities')->where('name','Poza Rica de Hidalgo')->first()->id
],

['name' => 'Palma Sola',
'city_id' => DB::table('cities')->where('name','Poza Rica de Hidalgo')->first()->id
],

['name' => '27 de Septiembre',
'city_id' => DB::table('cities')->where('name','Poza Rica de Hidalgo')->first()->id
],

['name' => 'Magisterio',
'city_id' => DB::table('cities')->where('name','Poza Rica de Hidalgo')->first()->id
],

['name' => 'Bugambilias',
'city_id' => DB::table('cities')->where('name','Poza Rica de Hidalgo')->first()->id
],

['name' => 'La Floresta',
'city_id' => DB::table('cities')->where('name','Poza Rica de Hidalgo')->first()->id
],

['name' => 'Los Laureles',
'city_id' => DB::table('cities')->where('name','Poza Rica de Hidalgo')->first()->id
],

['name' => 'Central de Abastos',
'city_id' => DB::table('cities')->where('name','Poza Rica de Hidalgo')->first()->id
],

['name' => 'Ignacio de La Llave',
'city_id' => DB::table('cities')->where('name','Poza Rica de Hidalgo')->first()->id
],

['name' => 'Circulo Michoacano',
'city_id' => DB::table('cities')->where('name','Poza Rica de Hidalgo')->first()->id
],

['name' => 'Tajin',
'city_id' => DB::table('cities')->where('name','Poza Rica de Hidalgo')->first()->id
],

['name' => 'Flores Magón',
'city_id' => DB::table('cities')->where('name','Poza Rica de Hidalgo')->first()->id
],

['name' => 'Morelos',
'city_id' => DB::table('cities')->where('name','Poza Rica de Hidalgo')->first()->id
],

['name' => 'Vista Hermosa',
'city_id' => DB::table('cities')->where('name','Poza Rica de Hidalgo')->first()->id
],

['name' => '5 de Mayo Vieja',
'city_id' => DB::table('cities')->where('name','Poza Rica de Hidalgo')->first()->id
],

['name' => 'División de Oriente',
'city_id' => DB::table('cities')->where('name','Poza Rica de Hidalgo')->first()->id
],

['name' => 'Área Industrial PEMEX',
'city_id' => DB::table('cities')->where('name','Poza Rica de Hidalgo')->first()->id
],

['name' => 'Salvador Allende',
'city_id' => DB::table('cities')->where('name','Poza Rica de Hidalgo')->first()->id
],

['name' => '12 de Octubre',
'city_id' => DB::table('cities')->where('name','Poza Rica de Hidalgo')->first()->id
],

['name' => 'La Barita',
'city_id' => DB::table('cities')->where('name','Poza Rica de Hidalgo')->first()->id
],

['name' => 'Jardines de Poza Rica',
'city_id' => DB::table('cities')->where('name','Poza Rica de Hidalgo')->first()->id
],

['name' => 'Nueva Imagen',
'city_id' => DB::table('cities')->where('name','Poza Rica de Hidalgo')->first()->id
],

['name' => 'Aviación Vieja',
'city_id' => DB::table('cities')->where('name','Poza Rica de Hidalgo')->first()->id
],

['name' => 'Herradura',
'city_id' => DB::table('cities')->where('name','Poza Rica de Hidalgo')->first()->id
],

['name' => 'Buenos Aires',
'city_id' => DB::table('cities')->where('name','Poza Rica de Hidalgo')->first()->id
],

['name' => 'Loma Bonita',
'city_id' => DB::table('cities')->where('name','Poza Rica de Hidalgo')->first()->id
],

['name' => 'Nuevos Proyectos',
'city_id' => DB::table('cities')->where('name','Poza Rica de Hidalgo')->first()->id
],

['name' => 'A I M P',
'city_id' => DB::table('cities')->where('name','Poza Rica de Hidalgo')->first()->id
],

['name' => 'Las Flores',
'city_id' => DB::table('cities')->where('name','Poza Rica de Hidalgo')->first()->id
],

['name' => 'La Ilusión',
'city_id' => DB::table('cities')->where('name','Poza Rica de Hidalgo')->first()->id
],

['name' => 'Casa de Visitas',
'city_id' => DB::table('cities')->where('name','Poza Rica de Hidalgo')->first()->id
],

['name' => 'Medias Lomas',
'city_id' => DB::table('cities')->where('name','Poza Rica de Hidalgo')->first()->id
],

['name' => 'Loma Alta',
'city_id' => DB::table('cities')->where('name','Poza Rica de Hidalgo')->first()->id
],

['name' => 'Chulavista',
'city_id' => DB::table('cities')->where('name','Poza Rica de Hidalgo')->first()->id
],

['name' => 'Fausto Dávila Solís',
'city_id' => DB::table('cities')->where('name','Poza Rica de Hidalgo')->first()->id
],

['name' => 'Revolución',
'city_id' => DB::table('cities')->where('name','Poza Rica de Hidalgo')->first()->id
],

['name' => 'Niños Héroes',
'city_id' => DB::table('cities')->where('name','Poza Rica de Hidalgo')->first()->id
],

['name' => '10 de Abril',
'city_id' => DB::table('cities')->where('name','Poza Rica de Hidalgo')->first()->id
],

['name' => 'Los Pinos',
'city_id' => DB::table('cities')->where('name','Poza Rica de Hidalgo')->first()->id
],

['name' => 'Vicente Herrera',
'city_id' => DB::table('cities')->where('name','Poza Rica de Hidalgo')->first()->id
],

['name' => 'Oscar Torres Pancardo',
'city_id' => DB::table('cities')->where('name','Poza Rica de Hidalgo')->first()->id
],

['name' => 'Fernando Gutiérrez Barrios',
'city_id' => DB::table('cities')->where('name','Poza Rica de Hidalgo')->first()->id
],

['name' => 'Del Policia',
'city_id' => DB::table('cities')->where('name','Poza Rica de Hidalgo')->first()->id
],

['name' => 'Veracruz',
'city_id' => DB::table('cities')->where('name','Poza Rica de Hidalgo')->first()->id
],

['name' => 'Villa de las Flores',
'city_id' => DB::table('cities')->where('name','Poza Rica de Hidalgo')->first()->id
],

['name' => 'El Vergel',
'city_id' => DB::table('cities')->where('name','Poza Rica de Hidalgo')->first()->id
],

['name' => 'Lomas Verdes',
'city_id' => DB::table('cities')->where('name','Poza Rica de Hidalgo')->first()->id
],

['name' => 'Parcela 44',
'city_id' => DB::table('cities')->where('name','Poza Rica de Hidalgo')->first()->id
],

['name' => 'Papantla Centro',
'city_id' => DB::table('cities')->where('name','Papantla')->first()->id
],

['name' => 'Benito Juárez',
'city_id' => DB::table('cities')->where('name','Papantla')->first()->id
],

['name' => 'Unidad y Trabajo',
'city_id' => DB::table('cities')->where('name','Papantla')->first()->id
],

['name' => 'La Florida',
'city_id' => DB::table('cities')->where('name','Papantla')->first()->id
],

['name' => 'Santa Cecilia',
'city_id' => DB::table('cities')->where('name','Papantla')->first()->id
],

['name' => 'Unidad Deportiva',
'city_id' => DB::table('cities')->where('name','Papantla')->first()->id
],

['name' => 'Anáhuac',
'city_id' => DB::table('cities')->where('name','Papantla')->first()->id
],

['name' => 'Fernando Gutiérrez Barrios Sector 1',
'city_id' => DB::table('cities')->where('name','Papantla')->first()->id
],

['name' => 'Manantiales',
'city_id' => DB::table('cities')->where('name','Papantla')->first()->id
],

['name' => 'Fernando Gutiérrez Barrios Sector 2',
'city_id' => DB::table('cities')->where('name','Papantla')->first()->id
],

['name' => '25 de Enero',
'city_id' => DB::table('cities')->where('name','Papantla')->first()->id
],

['name' => 'Nueva los Mangos',
'city_id' => DB::table('cities')->where('name','Papantla')->first()->id
],

['name' => 'La Valentina',
'city_id' => DB::table('cities')->where('name','Papantla')->first()->id
],

['name' => 'Cuauhtémoc',
'city_id' => DB::table('cities')->where('name','Papantla')->first()->id
],

['name' => '10 de Abril',
'city_id' => DB::table('cities')->where('name','Papantla')->first()->id
],

['name' => 'Lomas de Plata',
'city_id' => DB::table('cities')->where('name','Papantla')->first()->id
],

['name' => 'El Mirador',
'city_id' => DB::table('cities')->where('name','Papantla')->first()->id
],

['name' => 'El Higo',
'city_id' => DB::table('cities')->where('name','Papantla')->first()->id
],

['name' => 'Miguel Hidalgo',
'city_id' => DB::table('cities')->where('name','Papantla')->first()->id
],

['name' => 'Valentín Gómez Farias',
'city_id' => DB::table('cities')->where('name','Papantla')->first()->id
],

['name' => 'Adolfo Lopez Mateos',
'city_id' => DB::table('cities')->where('name','Papantla')->first()->id
],

['name' => 'Doctores',
'city_id' => DB::table('cities')->where('name','Papantla')->first()->id
],

['name' => 'Lázaro Cárdenas',
'city_id' => DB::table('cities')->where('name','Papantla')->first()->id
],

['name' => 'Cerro de Dolores',
'city_id' => DB::table('cities')->where('name','Papantla')->first()->id
],

['name' => 'Barrio de San Juan',
'city_id' => DB::table('cities')->where('name','Papantla')->first()->id
],

['name' => 'Independencia',
'city_id' => DB::table('cities')->where('name','Papantla')->first()->id
],

['name' => 'Xanath 2',
'city_id' => DB::table('cities')->where('name','Papantla')->first()->id
],

['name' => 'Xanath',
'city_id' => DB::table('cities')->where('name','Papantla')->first()->id
],

['name' => 'Los Mangos',
'city_id' => DB::table('cities')->where('name','Papantla')->first()->id
],

['name' => 'Pozo 4',
'city_id' => DB::table('cities')->where('name','Papantla')->first()->id
],

['name' => 'Gral. Candido Aguilar',
'city_id' => DB::table('cities')->where('name','Papantla')->first()->id
],

['name' => 'Progreso',
'city_id' => DB::table('cities')->where('name','Papantla')->first()->id
],

['name' => 'Teresa Peñafiel',
'city_id' => DB::table('cities')->where('name','Papantla')->first()->id
],

['name' => 'Antonio M Quirazco',
'city_id' => DB::table('cities')->where('name','Papantla')->first()->id
],

['name' => 'Los Maestros',
'city_id' => DB::table('cities')->where('name','Papantla')->first()->id
],

['name' => 'Emiliano Zapata',
'city_id' => DB::table('cities')->where('name','Papantla')->first()->id
],

['name' => 'Azahares del Naranjo',
'city_id' => DB::table('cities')->where('name','Papantla')->first()->id
],

['name' => 'Ignacio Zaragoza',
'city_id' => DB::table('cities')->where('name','Papantla')->first()->id
],

['name' => 'Jardines',
'city_id' => DB::table('cities')->where('name','Papantla')->first()->id
],

['name' => 'Cardenales',
'city_id' => DB::table('cities')->where('name','Papantla')->first()->id
],

['name' => 'El Tajín',
'city_id' => DB::table('cities')->where('name','Papantla')->first()->id
],

['name' => 'Margarita Maza de Juárez',
'city_id' => DB::table('cities')->where('name','Papantla')->first()->id
],

['name' => 'Guadalupe',
'city_id' => DB::table('cities')->where('name','Papantla')->first()->id
],

['name' => 'Ramón Caracas Lara',
'city_id' => DB::table('cities')->where('name','Papantla')->first()->id
],

['name' => 'Lázara Meldiú',
'city_id' => DB::table('cities')->where('name','Papantla')->first()->id
],

['name' => 'Cristóbal Colon',
'city_id' => DB::table('cities')->where('name','Papantla')->first()->id
],

['name' => 'Benito Juárez Campo Olimpia',
'city_id' => DB::table('cities')->where('name','Papantla')->first()->id
],

['name' => 'Obrera',
'city_id' => DB::table('cities')->where('name','Papantla')->first()->id
],

['name' => 'Corpus Christy',
'city_id' => DB::table('cities')->where('name','Papantla')->first()->id
],

['name' => 'Cerro de Jarana',
'city_id' => DB::table('cities')->where('name','Papantla')->first()->id
],

['name' => 'Rafael Murillo Vidal',
'city_id' => DB::table('cities')->where('name','Papantla')->first()->id
],

['name' => 'Sector Carril',
'city_id' => DB::table('cities')->where('name','Papantla')->first()->id
],

['name' => 'Rafael Hernández Ochoa',
'city_id' => DB::table('cities')->where('name','Papantla')->first()->id
],

['name' => 'Adolfo Ruiz Cortines',
'city_id' => DB::table('cities')->where('name','Papantla')->first()->id
],

['name' => 'Carrizal',
'city_id' => DB::table('cities')->where('name','Papantla')->first()->id
],

['name' => 'Teniente Coronel Simón Tiburcio',
'city_id' => DB::table('cities')->where('name','Papantla')->first()->id
],

['name' => 'Residencial Tajín',
'city_id' => DB::table('cities')->where('name','Papantla')->first()->id
],

['name' => 'La Florida',
'city_id' => DB::table('cities')->where('name','Papantla')->first()->id
],

['name' => 'Kilómetro Cuarenta y Dos',
'city_id' => DB::table('cities')->where('name','Papantla')->first()->id
],

['name' => 'El Palmar Kilómetro 40',
'city_id' => DB::table('cities')->where('name','Papantla')->first()->id
],

['name' => 'La Victoria Kilómetro 47',
'city_id' => DB::table('cities')->where('name','Papantla')->first()->id
],

['name' => 'Sombrerete',
'city_id' => DB::table('cities')->where('name','Papantla')->first()->id
],

['name' => 'El Palmito (Kilómetro 44)',
'city_id' => DB::table('cities')->where('name','Papantla')->first()->id
],

['name' => 'Caristay',
'city_id' => DB::table('cities')->where('name','Papantla')->first()->id
],

['name' => 'El Pital',
'city_id' => DB::table('cities')->where('name','Papantla')->first()->id
],

['name' => 'Vicente Herrera',
'city_id' => DB::table('cities')->where('name','Papantla')->first()->id
],

['name' => 'Santa Águeda',
'city_id' => DB::table('cities')->where('name','Papantla')->first()->id
],

['name' => 'El Cabellal',
'city_id' => DB::table('cities')->where('name','Papantla')->first()->id
],

['name' => 'Donato Márquez Azuara',
'city_id' => DB::table('cities')->where('name','Papantla')->first()->id
],

['name' => 'Plan de los Mangos',
'city_id' => DB::table('cities')->where('name','Papantla')->first()->id
],

['name' => 'Unión y Progreso',
'city_id' => DB::table('cities')->where('name','Papantla')->first()->id
],

['name' => 'El Esfuerzo',
'city_id' => DB::table('cities')->where('name','Papantla')->first()->id
],

['name' => 'Tres Cruces',
'city_id' => DB::table('cities')->where('name','Papantla')->first()->id
],

['name' => 'Pital Mozutla',
'city_id' => DB::table('cities')->where('name','Papantla')->first()->id
],

['name' => 'Tres Flores',
'city_id' => DB::table('cities')->where('name','Papantla')->first()->id
],

['name' => 'La Grandeza',
'city_id' => DB::table('cities')->where('name','Papantla')->first()->id
],

['name' => 'Puente de Piedra',
'city_id' => DB::table('cities')->where('name','Papantla')->first()->id
],

['name' => 'Rancho Playa',
'city_id' => DB::table('cities')->where('name','Papantla')->first()->id
],

['name' => 'Cerro de las Flores',
'city_id' => DB::table('cities')->where('name','Papantla')->first()->id
],

['name' => 'Poza Verde',
'city_id' => DB::table('cities')->where('name','Papantla')->first()->id
],

['name' => 'Tenixtepec',
'city_id' => DB::table('cities')->where('name','Papantla')->first()->id
],

['name' => 'San Pablo',
'city_id' => DB::table('cities')->where('name','Papantla')->first()->id
],

['name' => 'San Antonio Ojital',
'city_id' => DB::table('cities')->where('name','Papantla')->first()->id
],

['name' => 'Reforma Escolín',
'city_id' => DB::table('cities')->where('name','Papantla')->first()->id
],

['name' => 'El Escolín',
'city_id' => DB::table('cities')->where('name','Papantla')->first()->id
],

['name' => 'Ojital Nuevo',
'city_id' => DB::table('cities')->where('name','Papantla')->first()->id
],

['name' => 'El Volador',
'city_id' => DB::table('cities')->where('name','Papantla')->first()->id
],

['name' => 'Plan de Hidalgo',
'city_id' => DB::table('cities')->where('name','Papantla')->first()->id
],

['name' => 'Vista Hermosa de Madero',
'city_id' => DB::table('cities')->where('name','Papantla')->first()->id
],

['name' => 'Francisco Sarabia',
'city_id' => DB::table('cities')->where('name','Papantla')->first()->id
],

['name' => 'Plan del Palmar',
'city_id' => DB::table('cities')->where('name','Papantla')->first()->id
],

['name' => 'José María Morelos',
'city_id' => DB::table('cities')->where('name','Papantla')->first()->id
],

['name' => 'Gildardo Muñoz',
'city_id' => DB::table('cities')->where('name','Papantla')->first()->id
],

['name' => 'Arroyo de la Laja',
'city_id' => DB::table('cities')->where('name','Papantla')->first()->id
],

['name' => 'San José de las Lajas',
'city_id' => DB::table('cities')->where('name','Papantla')->first()->id
],

['name' => 'Luis Echeverría',
'city_id' => DB::table('cities')->where('name','Papantla')->first()->id
],

['name' => 'La Guásima',
'city_id' => DB::table('cities')->where('name','Papantla')->first()->id
],

['name' => 'La Concha',
'city_id' => DB::table('cities')->where('name','Papantla')->first()->id
],

['name' => 'Arroyo Grande Boca de Lima 1',
'city_id' => DB::table('cities')->where('name','Papantla')->first()->id
],

['name' => 'Cazuelas',
'city_id' => DB::table('cities')->where('name','Papantla')->first()->id
],

['name' => 'El Cedro',
'city_id' => DB::table('cities')->where('name','Papantla')->first()->id
],

['name' => 'El Chote',
'city_id' => DB::table('cities')->where('name','Papantla')->first()->id
],

['name' => 'Palmar',
'city_id' => DB::table('cities')->where('name','Papantla')->first()->id
],

['name' => 'Polutla',
'city_id' => DB::table('cities')->where('name','Papantla')->first()->id
],

['name' => 'Totomaxtle',
'city_id' => DB::table('cities')->where('name','Papantla')->first()->id
],

['name' => 'Venustiano Carranza',
'city_id' => DB::table('cities')->where('name','Papantla')->first()->id
],

['name' => 'San Lorenzo',
'city_id' => DB::table('cities')->where('name','Papantla')->first()->id
],

['name' => 'Francisco Villa',
'city_id' => DB::table('cities')->where('name','Papantla')->first()->id
],

['name' => 'Mizantécatl',
'city_id' => DB::table('cities')->where('name','Papantla')->first()->id
],

['name' => 'La Colmena (La Loma)',
'city_id' => DB::table('cities')->where('name','Papantla')->first()->id
],

['name' => 'Finca la Colmena',
'city_id' => DB::table('cities')->where('name','Papantla')->first()->id
],

['name' => 'Lázaro Cárdenas',
'city_id' => DB::table('cities')->where('name','Papantla')->first()->id
],

['name' => 'Agua Dulce',
'city_id' => DB::table('cities')->where('name','Papantla')->first()->id
],

['name' => 'Francisco I. Madero',
'city_id' => DB::table('cities')->where('name','Papantla')->first()->id
],

['name' => 'Arroyo Verde Número Uno',
'city_id' => DB::table('cities')->where('name','Papantla')->first()->id
],

['name' => 'Isla de Juan Rosas',
'city_id' => DB::table('cities')->where('name','Papantla')->first()->id
],

['name' => 'Rodolfo Curti',
'city_id' => DB::table('cities')->where('name','Papantla')->first()->id
],

['name' => 'Riva Palacio',
'city_id' => DB::table('cities')->where('name','Papantla')->first()->id
],

['name' => 'Rafael La Concha Rosas',
'city_id' => DB::table('cities')->where('name','Papantla')->first()->id
],

['name' => 'Emiliano Zapata',
'city_id' => DB::table('cities')->where('name','Papantla')->first()->id
],

['name' => 'Remolino',
'city_id' => DB::table('cities')->where('name','Papantla')->first()->id
],

['name' => 'Cerro Grande Dos',
'city_id' => DB::table('cities')->where('name','Papantla')->first()->id
],

['name' => 'Ojital Viejo',
'city_id' => DB::table('cities')->where('name','Papantla')->first()->id
],

['name' => 'La Laguna',
'city_id' => DB::table('cities')->where('name','Papantla')->first()->id
],

['name' => 'Porvenir Número Uno',
'city_id' => DB::table('cities')->where('name','Papantla')->first()->id
],

['name' => 'Serafín Olarte',
'city_id' => DB::table('cities')->where('name','Papantla')->first()->id
],

['name' => 'Morgadal',
'city_id' => DB::table('cities')->where('name','Papantla')->first()->id
],

['name' => 'Cerro Del Carbón',
'city_id' => DB::table('cities')->where('name','Papantla')->first()->id
],

['name' => 'Colonia las Américas',
'city_id' => DB::table('cities')->where('name','Papantla')->first()->id
],

['name' => 'La Reforma Paso del Correo',
'city_id' => DB::table('cities')->where('name','Papantla')->first()->id
],

['name' => 'Cuyuxquihui',
'city_id' => DB::table('cities')->where('name','Papantla')->first()->id
],

['name' => 'La Isla',
'city_id' => DB::table('cities')->where('name','Papantla')->first()->id
],

['name' => 'Allende',
'city_id' => DB::table('cities')->where('name','Papantla')->first()->id
],

['name' => 'Paso del Correo',
'city_id' => DB::table('cities')->where('name','Papantla')->first()->id
],

['name' => 'Plan de Limón',
'city_id' => DB::table('cities')->where('name','Papantla')->first()->id
],

['name' => 'Ocotillar',
'city_id' => DB::table('cities')->where('name','Papantla')->first()->id
],

['name' => 'Guadalupe Victoria',
'city_id' => DB::table('cities')->where('name','Papantla')->first()->id
],

['name' => 'Pajasco Limonar',
'city_id' => DB::table('cities')->where('name','Papantla')->first()->id
],

['name' => 'El Edén',
'city_id' => DB::table('cities')->where('name','Papantla')->first()->id
],

['name' => 'San Gotardo',
'city_id' => DB::table('cities')->where('name','Papantla')->first()->id
],

['name' => 'Primero de Mayo',
'city_id' => DB::table('cities')->where('name','Papantla')->first()->id
],

['name' => 'Puxtla',
'city_id' => DB::table('cities')->where('name','Papantla')->first()->id
],

['name' => 'Cedral',
'city_id' => DB::table('cities')->where('name','Papantla')->first()->id
],

['name' => 'La Martinica',
'city_id' => DB::table('cities')->where('name','Papantla')->first()->id
],

['name' => 'Paso de Valencia',
'city_id' => DB::table('cities')->where('name','Papantla')->first()->id
],

['name' => 'El Pahual',
'city_id' => DB::table('cities')->where('name','Papantla')->first()->id
],

['name' => 'Cerro Blanco',
'city_id' => DB::table('cities')->where('name','Papantla')->first()->id
],

['name' => 'Paso de las Limas',
'city_id' => DB::table('cities')->where('name','Papantla')->first()->id
],

['name' => 'Pueblillo',
'city_id' => DB::table('cities')->where('name','Papantla')->first()->id
],

['name' => 'Llanos de San Lorenzo',
'city_id' => DB::table('cities')->where('name','Papantla')->first()->id
],

['name' => 'Benito Juárez',
'city_id' => DB::table('cities')->where('name','Papantla')->first()->id
],

['name' => 'Mesa Chica la Gloria',
'city_id' => DB::table('cities')->where('name','Papantla')->first()->id
],

['name' => 'El Porvenir Número Dos',
'city_id' => DB::table('cities')->where('name','Papantla')->first()->id
],

['name' => 'Insurgentes Socialistas',
'city_id' => DB::table('cities')->where('name','Papantla')->first()->id
],

['name' => 'Belisario Dominguez',
'city_id' => DB::table('cities')->where('name','Papantla')->first()->id
],

['name' => 'Joloapan',
'city_id' => DB::table('cities')->where('name','Papantla')->first()->id
],

['name' => 'Vista Hermosa de Juárez',
'city_id' => DB::table('cities')->where('name','Papantla')->first()->id
],

['name' => 'Valsequillo',
'city_id' => DB::table('cities')->where('name','Papantla')->first()->id
],

['name' => 'Mesa Chica Nueva',
'city_id' => DB::table('cities')->where('name','Papantla')->first()->id
],

['name' => 'Arroyo Grande',
'city_id' => DB::table('cities')->where('name','Gutiérrez Zamora')->first()->id
],

['name' => 'El Mango',
'city_id' => DB::table('cities')->where('name','Gutiérrez Zamora')->first()->id
],

['name' => 'Ignacio Muñoz (Zapotal)',
'city_id' => DB::table('cities')->where('name','Gutiérrez Zamora')->first()->id
],

['name' => 'Hermenegildo Galeana',
'city_id' => DB::table('cities')->where('name','Gutiérrez Zamora')->first()->id
],

['name' => 'Gutiérrez Zamora Centro',
'city_id' => DB::table('cities')->where('name','Gutiérrez Zamora')->first()->id
],

['name' => 'Las Flores',
'city_id' => DB::table('cities')->where('name','Gutiérrez Zamora')->first()->id
],

['name' => 'Los Pinos',
'city_id' => DB::table('cities')->where('name','Gutiérrez Zamora')->first()->id
],

['name' => 'Providencia',
'city_id' => DB::table('cities')->where('name','Gutiérrez Zamora')->first()->id
],

['name' => 'Loma Linda',
'city_id' => DB::table('cities')->where('name','Gutiérrez Zamora')->first()->id
],

['name' => 'De San Pancho',
'city_id' => DB::table('cities')->where('name','Gutiérrez Zamora')->first()->id
],

['name' => 'Cuauhtémoc',
'city_id' => DB::table('cities')->where('name','Gutiérrez Zamora')->first()->id
],

['name' => 'Cerro de La Cruz',
'city_id' => DB::table('cities')->where('name','Gutiérrez Zamora')->first()->id
],

['name' => 'Anclon y Arenal',
'city_id' => DB::table('cities')->where('name','Gutiérrez Zamora')->first()->id
],

['name' => 'Hidalgo 1a Sección',
'city_id' => DB::table('cities')->where('name','Gutiérrez Zamora')->first()->id
],

['name' => 'Niños Héroes',
'city_id' => DB::table('cities')->where('name','Gutiérrez Zamora')->first()->id
],

['name' => 'Revolución',
'city_id' => DB::table('cities')->where('name','Gutiérrez Zamora')->first()->id
],

['name' => 'Hidalgo 2a Sección',
'city_id' => DB::table('cities')->where('name','Gutiérrez Zamora')->first()->id
],

['name' => 'Benito Juárez',
'city_id' => DB::table('cities')->where('name','Gutiérrez Zamora')->first()->id
],

['name' => 'Hernandez Ochoa',
'city_id' => DB::table('cities')->where('name','Gutiérrez Zamora')->first()->id
],

['name' => 'Los Angeles',
'city_id' => DB::table('cities')->where('name','Gutiérrez Zamora')->first()->id
],

['name' => 'Murillo Vidal',
'city_id' => DB::table('cities')->where('name','Gutiérrez Zamora')->first()->id
],

['name' => '1o de Mayo',
'city_id' => DB::table('cities')->where('name','Gutiérrez Zamora')->first()->id
],

['name' => 'Del Carmen',
'city_id' => DB::table('cities')->where('name','Gutiérrez Zamora')->first()->id
],

['name' => 'Fernando Gutiérrez Barrios',
'city_id' => DB::table('cities')->where('name','Gutiérrez Zamora')->first()->id
],

['name' => 'Fernando Gutiérrez Barrios',
'city_id' => DB::table('cities')->where('name','Gutiérrez Zamora')->first()->id
],

['name' => 'Hernandez Ochoa',
'city_id' => DB::table('cities')->where('name','Gutiérrez Zamora')->first()->id
],

['name' => 'Guadalupe',
'city_id' => DB::table('cities')->where('name','Gutiérrez Zamora')->first()->id
],

['name' => 'El Modelo',
'city_id' => DB::table('cities')->where('name','Gutiérrez Zamora')->first()->id
],

['name' => 'Fidel Herrera Beltrán',
'city_id' => DB::table('cities')->where('name','Gutiérrez Zamora')->first()->id
],

['name' => '1ro de Mayo',
'city_id' => DB::table('cities')->where('name','Gutiérrez Zamora')->first()->id
],

['name' => 'Miguel Alemán Velasco',
'city_id' => DB::table('cities')->where('name','Gutiérrez Zamora')->first()->id
],

['name' => 'El Morro',
'city_id' => DB::table('cities')->where('name','Gutiérrez Zamora')->first()->id
],

['name' => 'Carrillo Puerto (Santa Rosa)',
'city_id' => DB::table('cities')->where('name','Gutiérrez Zamora')->first()->id
],

['name' => 'Ignacio M. Altamirano (Plan de Altamirano)',
'city_id' => DB::table('cities')->where('name','Gutiérrez Zamora')->first()->id
],

['name' => 'Rafael Valenzuela',
'city_id' => DB::table('cities')->where('name','Gutiérrez Zamora')->first()->id
],

['name' => 'Nuevo Renacimiento 2000',
'city_id' => DB::table('cities')->where('name','Gutiérrez Zamora')->first()->id
],

['name' => 'Coronado',
'city_id' => DB::table('cities')->where('name','Gutiérrez Zamora')->first()->id
],

['name' => 'Lomas de Arena',
'city_id' => DB::table('cities')->where('name','Gutiérrez Zamora')->first()->id
],

['name' => 'Anclón y Arenal',
'city_id' => DB::table('cities')->where('name','Gutiérrez Zamora')->first()->id
],

['name' => 'Arcadia',
'city_id' => DB::table('cities')->where('name','Tecolutla')->first()->id
],

['name' => 'Candido Aguilar',
'city_id' => DB::table('cities')->where('name','Tecolutla')->first()->id
],

['name' => 'Emiliano Zapata',
'city_id' => DB::table('cities')->where('name','Tecolutla')->first()->id
],

['name' => 'Medanos',
'city_id' => DB::table('cities')->where('name','Tecolutla')->first()->id
],

['name' => 'Rafael Hernandez Ochoa',
'city_id' => DB::table('cities')->where('name','Tecolutla')->first()->id
],

['name' => 'Tecolutla',
'city_id' => DB::table('cities')->where('name','Tecolutla')->first()->id
],

['name' => 'Boca de Lima',
'city_id' => DB::table('cities')->where('name','Tecolutla')->first()->id
],

['name' => 'Hueytepec',
'city_id' => DB::table('cities')->where('name','Tecolutla')->first()->id
],

['name' => 'Paso Real',
'city_id' => DB::table('cities')->where('name','Tecolutla')->first()->id
],

['name' => 'Ricardo Flores Magón',
'city_id' => DB::table('cities')->where('name','Tecolutla')->first()->id
],

['name' => 'Chichicazapan Mendez',
'city_id' => DB::table('cities')->where('name','Tecolutla')->first()->id
],

['name' => 'Ignacio Zaragoza',
'city_id' => DB::table('cities')->where('name','Tecolutla')->first()->id
],

['name' => 'Paso Del Progreso',
'city_id' => DB::table('cities')->where('name','Tecolutla')->first()->id
],

['name' => 'Riachuelo',
'city_id' => DB::table('cities')->where('name','Tecolutla')->first()->id
],

['name' => 'Cañada Rica',
'city_id' => DB::table('cities')->where('name','Tecolutla')->first()->id
],

['name' => 'El Fuerte de Anaya',
'city_id' => DB::table('cities')->where('name','Tecolutla')->first()->id
],

['name' => 'La Guadalupe',
'city_id' => DB::table('cities')->where('name','Tecolutla')->first()->id
],

['name' => 'Playa Paraíso',
'city_id' => DB::table('cities')->where('name','Tecolutla')->first()->id
],

['name' => 'Monte Gordo',
'city_id' => DB::table('cities')->where('name','Tecolutla')->first()->id
],

['name' => 'Casitas',
'city_id' => DB::table('cities')->where('name','Tecolutla')->first()->id
],

['name' => 'Tres Cruces',
'city_id' => DB::table('cities')->where('name','Tecolutla')->first()->id
],

['name' => 'La Soledad',
'city_id' => DB::table('cities')->where('name','Martínez de la Torre')->first()->id
],

['name' => 'Martínez de La Torre Centro',
'city_id' => DB::table('cities')->where('name','Martínez de la Torre')->first()->id
],

['name' => 'Chapultepec',
'city_id' => DB::table('cities')->where('name','Martínez de la Torre')->first()->id
],

['name' => 'Del Valle',
'city_id' => DB::table('cities')->where('name','Martínez de la Torre')->first()->id
],

['name' => 'Emiliano Zapata',
'city_id' => DB::table('cities')->where('name','Martínez de la Torre')->first()->id
],

['name' => 'Jardines Plaza Verde',
'city_id' => DB::table('cities')->where('name','Martínez de la Torre')->first()->id
],

['name' => 'Las Lomas',
'city_id' => DB::table('cities')->where('name','Martínez de la Torre')->first()->id
],

['name' => 'Libertad',
'city_id' => DB::table('cities')->where('name','Martínez de la Torre')->first()->id
],

['name' => 'Los Reyes',
'city_id' => DB::table('cities')->where('name','Martínez de la Torre')->first()->id
],

['name' => 'Melchor Ocampo',
'city_id' => DB::table('cities')->where('name','Martínez de la Torre')->first()->id
],

['name' => 'Moctezuma',
'city_id' => DB::table('cities')->where('name','Martínez de la Torre')->first()->id
],

['name' => 'Paraíso',
'city_id' => DB::table('cities')->where('name','Martínez de la Torre')->first()->id
],

['name' => 'San Jose de La Unión',
'city_id' => DB::table('cities')->where('name','Martínez de la Torre')->first()->id
],

['name' => 'Tlatelolco',
'city_id' => DB::table('cities')->where('name','Martínez de la Torre')->first()->id
],

['name' => 'Vicente Guerrero',
'city_id' => DB::table('cities')->where('name','Martínez de la Torre')->first()->id
],

['name' => 'Villa Rica',
'city_id' => DB::table('cities')->where('name','Martínez de la Torre')->first()->id
],

['name' => 'Antorchista',
'city_id' => DB::table('cities')->where('name','Martínez de la Torre')->first()->id
],

['name' => 'Ampliación Las Lomas',
'city_id' => DB::table('cities')->where('name','Martínez de la Torre')->first()->id
],

['name' => 'Congreso de la Unión',
'city_id' => DB::table('cities')->where('name','Martínez de la Torre')->first()->id
],

['name' => 'Lomas de Tepeyac',
'city_id' => DB::table('cities')->where('name','Martínez de la Torre')->first()->id
],

['name' => 'San Lorenzo',
'city_id' => DB::table('cities')->where('name','Martínez de la Torre')->first()->id
],

['name' => 'Villa Hermosa',
'city_id' => DB::table('cities')->where('name','Martínez de la Torre')->first()->id
],

['name' => 'Casa Blanca',
'city_id' => DB::table('cities')->where('name','Martínez de la Torre')->first()->id
],

['name' => 'Dante Delgado',
'city_id' => DB::table('cities')->where('name','Martínez de la Torre')->first()->id
],

['name' => 'Guadalupe Victoria',
'city_id' => DB::table('cities')->where('name','Martínez de la Torre')->first()->id
],

['name' => 'Las Vegas',
'city_id' => DB::table('cities')->where('name','Martínez de la Torre')->first()->id
],

['name' => 'Linda Vista',
'city_id' => DB::table('cities')->where('name','Martínez de la Torre')->first()->id
],

['name' => 'San Manuel',
'city_id' => DB::table('cities')->where('name','Martínez de la Torre')->first()->id
],

['name' => 'Ampliación Linda Vista',
'city_id' => DB::table('cities')->where('name','Martínez de la Torre')->first()->id
],

['name' => 'Del Golfo',
'city_id' => DB::table('cities')->where('name','Martínez de la Torre')->first()->id
],

['name' => 'Indalesio Escamilla',
'city_id' => DB::table('cities')->where('name','Martínez de la Torre')->first()->id
],

['name' => 'Indalesio Escamilla',
'city_id' => DB::table('cities')->where('name','Martínez de la Torre')->first()->id
],

['name' => 'La Perla',
'city_id' => DB::table('cities')->where('name','Martínez de la Torre')->first()->id
],

['name' => 'Los Olivos',
'city_id' => DB::table('cities')->where('name','Martínez de la Torre')->first()->id
],

['name' => 'Plan de Ayala 2000',
'city_id' => DB::table('cities')->where('name','Martínez de la Torre')->first()->id
],

['name' => 'San Carlos',
'city_id' => DB::table('cities')->where('name','Martínez de la Torre')->first()->id
],

['name' => 'Los Pinos',
'city_id' => DB::table('cities')->where('name','Martínez de la Torre')->first()->id
],

['name' => 'Palo Blanco',
'city_id' => DB::table('cities')->where('name','Martínez de la Torre')->first()->id
],

['name' => 'Primero de Mayo',
'city_id' => DB::table('cities')->where('name','Martínez de la Torre')->first()->id
],

['name' => 'Saltillo',
'city_id' => DB::table('cities')->where('name','Martínez de la Torre')->first()->id
],

['name' => 'San Juan de Aragón',
'city_id' => DB::table('cities')->where('name','Martínez de la Torre')->first()->id
],

['name' => '16 de Septiembre',
'city_id' => DB::table('cities')->where('name','Martínez de la Torre')->first()->id
],

['name' => 'Morelos',
'city_id' => DB::table('cities')->where('name','Martínez de la Torre')->first()->id
],

['name' => 'Benito Juárez',
'city_id' => DB::table('cities')->where('name','Martínez de la Torre')->first()->id
],

['name' => 'Ejidal',
'city_id' => DB::table('cities')->where('name','Martínez de la Torre')->first()->id
],

['name' => 'Rafael Hernandez Ochoa',
'city_id' => DB::table('cities')->where('name','Martínez de la Torre')->first()->id
],

['name' => 'Francisco Zarco',
'city_id' => DB::table('cities')->where('name','Martínez de la Torre')->first()->id
],

['name' => 'Adolfo Ruiz Cortínez',
'city_id' => DB::table('cities')->where('name','Martínez de la Torre')->first()->id
],

['name' => 'Constitución',
'city_id' => DB::table('cities')->where('name','Martínez de la Torre')->first()->id
],

['name' => 'Jóse López Portillo',
'city_id' => DB::table('cities')->where('name','Martínez de la Torre')->first()->id
],

['name' => 'Maloapan II',
'city_id' => DB::table('cities')->where('name','Martínez de la Torre')->first()->id
],

['name' => 'Maravillas',
'city_id' => DB::table('cities')->where('name','Martínez de la Torre')->first()->id
],

['name' => 'México',
'city_id' => DB::table('cities')->where('name','Martínez de la Torre')->first()->id
],

['name' => 'Mirador',
'city_id' => DB::table('cities')->where('name','Martínez de la Torre')->first()->id
],

['name' => 'INFONAVIT Los Naranjos',
'city_id' => DB::table('cities')->where('name','Martínez de la Torre')->first()->id
],

['name' => 'Patria',
'city_id' => DB::table('cities')->where('name','Martínez de la Torre')->first()->id
],

['name' => 'Unión',
'city_id' => DB::table('cities')->where('name','Martínez de la Torre')->first()->id
],

['name' => 'Yucatán',
'city_id' => DB::table('cities')->where('name','Martínez de la Torre')->first()->id
],

['name' => 'Aztlan',
'city_id' => DB::table('cities')->where('name','Martínez de la Torre')->first()->id
],

['name' => 'Del Bosque',
'city_id' => DB::table('cities')->where('name','Martínez de la Torre')->first()->id
],

['name' => 'Ensueño',
'city_id' => DB::table('cities')->where('name','Martínez de la Torre')->first()->id
],

['name' => 'Heroica Veracruz',
'city_id' => DB::table('cities')->where('name','Martínez de la Torre')->first()->id
],

['name' => 'La Muralla',
'city_id' => DB::table('cities')->where('name','Martínez de la Torre')->first()->id
],

['name' => 'Lomas de Santa Irene',
'city_id' => DB::table('cities')->where('name','Martínez de la Torre')->first()->id
],

['name' => 'Lomas del Mirador',
'city_id' => DB::table('cities')->where('name','Martínez de la Torre')->first()->id
],

['name' => 'Maloapan I',
'city_id' => DB::table('cities')->where('name','Martínez de la Torre')->first()->id
],

['name' => 'Santa Ana',
'city_id' => DB::table('cities')->where('name','Martínez de la Torre')->first()->id
],

['name' => 'Alfredo V. Bonfil',
'city_id' => DB::table('cities')->where('name','Martínez de la Torre')->first()->id
],

['name' => 'Cuauhtémoc',
'city_id' => DB::table('cities')->where('name','Martínez de la Torre')->first()->id
],

['name' => 'Luis Donaldo Colosio',
'city_id' => DB::table('cities')->where('name','Martínez de la Torre')->first()->id
],

['name' => 'Rodríguez Cano',
'city_id' => DB::table('cities')->where('name','Martínez de la Torre')->first()->id
],

['name' => '20 de Noviembre',
'city_id' => DB::table('cities')->where('name','Martínez de la Torre')->first()->id
],

['name' => 'Vista Hermosa',
'city_id' => DB::table('cities')->where('name','Martínez de la Torre')->first()->id
],

['name' => '17 de Agosto',
'city_id' => DB::table('cities')->where('name','Martínez de la Torre')->first()->id
],

['name' => 'Costa Esmeralda',
'city_id' => DB::table('cities')->where('name','Martínez de la Torre')->first()->id
],

['name' => 'Diana Laura Rojas',
'city_id' => DB::table('cities')->where('name','Martínez de la Torre')->first()->id
],

['name' => 'El Arenal',
'city_id' => DB::table('cities')->where('name','Martínez de la Torre')->first()->id
],

['name' => 'Elba Esther Gordillo',
'city_id' => DB::table('cities')->where('name','Martínez de la Torre')->first()->id
],

['name' => 'Heberto Castillo',
'city_id' => DB::table('cities')->where('name','Martínez de la Torre')->first()->id
],

['name' => 'Las Palmas',
'city_id' => DB::table('cities')->where('name','Martínez de la Torre')->first()->id
],

['name' => 'Miguel Alemán',
'city_id' => DB::table('cities')->where('name','Martínez de la Torre')->first()->id
],

['name' => 'Peñón del Amaranto',
'city_id' => DB::table('cities')->where('name','Martínez de la Torre')->first()->id
],

['name' => 'Santo Tomas',
'city_id' => DB::table('cities')->where('name','Martínez de la Torre')->first()->id
],

['name' => 'Alejandro Peña',
'city_id' => DB::table('cities')->where('name','Martínez de la Torre')->first()->id
],

['name' => 'Empleados',
'city_id' => DB::table('cities')->where('name','Martínez de la Torre')->first()->id
],

['name' => 'Francisco Villa',
'city_id' => DB::table('cities')->where('name','Martínez de la Torre')->first()->id
],

['name' => 'Obrera',
'city_id' => DB::table('cities')->where('name','Martínez de la Torre')->first()->id
],

['name' => 'Padre Hidalgo',
'city_id' => DB::table('cities')->where('name','Martínez de la Torre')->first()->id
],

['name' => 'Revolución',
'city_id' => DB::table('cities')->where('name','Martínez de la Torre')->first()->id
],

['name' => 'Soledad',
'city_id' => DB::table('cities')->where('name','Martínez de la Torre')->first()->id
],

['name' => 'Vega Redonda',
'city_id' => DB::table('cities')->where('name','Martínez de la Torre')->first()->id
],

['name' => 'Independencia',
'city_id' => DB::table('cities')->where('name','Martínez de la Torre')->first()->id
],

['name' => 'Plan de Limón',
'city_id' => DB::table('cities')->where('name','Martínez de la Torre')->first()->id
],

['name' => 'Pueblo Viejo Uno',
'city_id' => DB::table('cities')->where('name','Martínez de la Torre')->first()->id
],

['name' => 'Lázaro Cárdenas',
'city_id' => DB::table('cities')->where('name','Martínez de la Torre')->first()->id
],

['name' => 'Estudiante',
'city_id' => DB::table('cities')->where('name','Martínez de la Torre')->first()->id
],

['name' => 'Ávila Camacho',
'city_id' => DB::table('cities')->where('name','Martínez de la Torre')->first()->id
],

['name' => 'Campestre',
'city_id' => DB::table('cities')->where('name','Martínez de la Torre')->first()->id
],

['name' => 'Maestros',
'city_id' => DB::table('cities')->where('name','Martínez de la Torre')->first()->id
],

['name' => 'Flores Magón',
'city_id' => DB::table('cities')->where('name','Martínez de la Torre')->first()->id
],

['name' => 'Manlio Fabio Altamirano',
'city_id' => DB::table('cities')->where('name','Martínez de la Torre')->first()->id
],

['name' => 'Independencia',
'city_id' => DB::table('cities')->where('name','Martínez de la Torre')->first()->id
],

['name' => 'Azucarera',
'city_id' => DB::table('cities')->where('name','Martínez de la Torre')->first()->id
],

['name' => 'El Roble',
'city_id' => DB::table('cities')->where('name','Martínez de la Torre')->first()->id
],

['name' => 'Empleados de la SARH',
'city_id' => DB::table('cities')->where('name','Martínez de la Torre')->first()->id
],

['name' => 'Las Margaritas',
'city_id' => DB::table('cities')->where('name','Martínez de la Torre')->first()->id
],

['name' => 'Lomas de San Ángel',
'city_id' => DB::table('cities')->where('name','Martínez de la Torre')->first()->id
],

['name' => 'El Pireo',
'city_id' => DB::table('cities')->where('name','San Rafael')->first()->id
],

['name' => 'Gustavo Del Valle',
'city_id' => DB::table('cities')->where('name','San Rafael')->first()->id
],

['name' => 'La Jungla',
'city_id' => DB::table('cities')->where('name','San Rafael')->first()->id
],

['name' => 'Las Maravillas',
'city_id' => DB::table('cities')->where('name','San Rafael')->first()->id
],

['name' => 'Nueva',
'city_id' => DB::table('cities')->where('name','San Rafael')->first()->id
],

['name' => 'Picamosco',
'city_id' => DB::table('cities')->where('name','San Rafael')->first()->id
],

['name' => '13 de Diciembre',
'city_id' => DB::table('cities')->where('name','San Rafael')->first()->id
],

['name' => 'Las Zapateras',
'city_id' => DB::table('cities')->where('name','San Rafael')->first()->id
],

['name' => 'San Rafael Centro',
'city_id' => DB::table('cities')->where('name','San Rafael')->first()->id
],

['name' => 'Deportiva',
'city_id' => DB::table('cities')->where('name','San Rafael')->first()->id
],

['name' => 'Melchor Ocampo',
'city_id' => DB::table('cities')->where('name','San Rafael')->first()->id
],

['name' => 'Ignacio Zaragoza (La Poza)',
'city_id' => DB::table('cities')->where('name','San Rafael')->first()->id
],

['name' => 'El Arenal',
'city_id' => DB::table('cities')->where('name','San Rafael')->first()->id
],

['name' => 'La Aurora',
'city_id' => DB::table('cities')->where('name','San Rafael')->first()->id
],

['name' => 'Calle Chica',
'city_id' => DB::table('cities')->where('name','San Rafael')->first()->id
],

['name' => 'Calle Grande',
'city_id' => DB::table('cities')->where('name','San Rafael')->first()->id
],

['name' => 'La Chancla',
'city_id' => DB::table('cities')->where('name','San Rafael')->first()->id
],

['name' => 'El Cocal',
'city_id' => DB::table('cities')->where('name','San Rafael')->first()->id
],

['name' => 'Lomas de Arena',
'city_id' => DB::table('cities')->where('name','San Rafael')->first()->id
],

['name' => 'El Ojite',
'city_id' => DB::table('cities')->where('name','San Rafael')->first()->id
],

['name' => 'El Paraíso',
'city_id' => DB::table('cities')->where('name','San Rafael')->first()->id
],

['name' => 'Puente Casitas',
'city_id' => DB::table('cities')->where('name','San Rafael')->first()->id
],

['name' => 'Río Mar',
'city_id' => DB::table('cities')->where('name','San Rafael')->first()->id
],

['name' => 'El Tablazo',
'city_id' => DB::table('cities')->where('name','San Rafael')->first()->id
],

['name' => 'Paso de Telaya',
'city_id' => DB::table('cities')->where('name','San Rafael')->first()->id
],

['name' => 'El Pital',
'city_id' => DB::table('cities')->where('name','San Rafael')->first()->id
],

['name' => 'Cementeras del Pital',
'city_id' => DB::table('cities')->where('name','San Rafael')->first()->id
],

['name' => 'La Esperanza',
'city_id' => DB::table('cities')->where('name','San Rafael')->first()->id
],

['name' => 'El Guayabal',
'city_id' => DB::table('cities')->where('name','San Rafael')->first()->id
],

['name' => 'Vega de San Marcos',
'city_id' => DB::table('cities')->where('name','San Rafael')->first()->id
],

['name' => 'El Faisán',
'city_id' => DB::table('cities')->where('name','San Rafael')->first()->id
],

['name' => 'Arroyo Zarco',
'city_id' => DB::table('cities')->where('name','San Rafael')->first()->id
],

['name' => 'Bella Esperanza',
'city_id' => DB::table('cities')->where('name','San Rafael')->first()->id
],

['name' => 'Benito Juárez',
'city_id' => DB::table('cities')->where('name','San Rafael')->first()->id
],

['name' => 'La Pajarera',
'city_id' => DB::table('cities')->where('name','San Rafael')->first()->id
],

['name' => 'Úrsulo Galvan',
'city_id' => DB::table('cities')->where('name','San Rafael')->first()->id
],

['name' => 'Nuevo Faisán',
'city_id' => DB::table('cities')->where('name','San Rafael')->first()->id
],

['name' => 'El Cabellal',
'city_id' => DB::table('cities')->where('name','San Rafael')->first()->id
],

['name' => 'Emiliano Zapata',
'city_id' => DB::table('cities')->where('name','San Rafael')->first()->id
],

['name' => 'Manuel Avila Camacho',
'city_id' => DB::table('cities')->where('name','San Rafael')->first()->id
],

['name' => 'Isla Santa Rosa',
'city_id' => DB::table('cities')->where('name','San Rafael')->first()->id
],

['name' => 'Manuel Ávila Camacho',
'city_id' => DB::table('cities')->where('name','San Rafael')->first()->id
],

['name' => 'Mata de Plátano',
'city_id' => DB::table('cities')->where('name','San Rafael')->first()->id
],

['name' => 'La Pitahaya',
'city_id' => DB::table('cities')->where('name','San Rafael')->first()->id
],

['name' => 'San Lorenzo',
'city_id' => DB::table('cities')->where('name','San Rafael')->first()->id
],

['name' => 'Zanjas de Arena',
'city_id' => DB::table('cities')->where('name','San Rafael')->first()->id
],

['name' => 'Tres Encinos',
'city_id' => DB::table('cities')->where('name','San Rafael')->first()->id
],

['name' => 'Santa Adelaida',
'city_id' => DB::table('cities')->where('name','San Rafael')->first()->id
],

['name' => 'Santa Elena',
'city_id' => DB::table('cities')->where('name','San Rafael')->first()->id
],

['name' => 'Tres Bocas',
'city_id' => DB::table('cities')->where('name','San Rafael')->first()->id
],

['name' => 'Puntilla Aldama',
'city_id' => DB::table('cities')->where('name','San Rafael')->first()->id
],

['name' => 'Vega de San Marcos',
'city_id' => DB::table('cities')->where('name','San Rafael')->first()->id
],

['name' => 'Galvarino Barria Pérez',
'city_id' => DB::table('cities')->where('name','San Rafael')->first()->id
],

['name' => 'Guadalupe Victoria',
'city_id' => DB::table('cities')->where('name','San Rafael')->first()->id
],

['name' => 'Tepetates',
'city_id' => DB::table('cities')->where('name','San Rafael')->first()->id
],

['name' => 'Paso Largo',
'city_id' => DB::table('cities')->where('name','Martínez de la Torre')->first()->id
],

['name' => 'Villanueva',
'city_id' => DB::table('cities')->where('name','Martínez de la Torre')->first()->id
],

['name' => 'Tres Encinos (Ejido el Cañizo)',
'city_id' => DB::table('cities')->where('name','Martínez de la Torre')->first()->id
],

['name' => 'Las Cañadas Martínez',
'city_id' => DB::table('cities')->where('name','Martínez de la Torre')->first()->id
],

['name' => 'Arroyo del Potrero',
'city_id' => DB::table('cities')->where('name','Martínez de la Torre')->first()->id
],

['name' => 'Arroyo Blanco',
'city_id' => DB::table('cities')->where('name','Martínez de la Torre')->first()->id
],

['name' => 'Nueva Suriana',
'city_id' => DB::table('cities')->where('name','Martínez de la Torre')->first()->id
],

['name' => 'La Palma',
'city_id' => DB::table('cities')->where('name','Martínez de la Torre')->first()->id
],

['name' => 'Balsas de Agua (Pozos de Oro)',
'city_id' => DB::table('cities')->where('name','Martínez de la Torre')->first()->id
],

['name' => 'Huipiltepec',
'city_id' => DB::table('cities')->where('name','Martínez de la Torre')->first()->id
],

['name' => 'Manantiales',
'city_id' => DB::table('cities')->where('name','Martínez de la Torre')->first()->id
],

['name' => 'La Unión Paso Largo',
'city_id' => DB::table('cities')->where('name','Martínez de la Torre')->first()->id
],

['name' => 'María de la Torre',
'city_id' => DB::table('cities')->where('name','Martínez de la Torre')->first()->id
],

['name' => 'José María Morelos y Pavón',
'city_id' => DB::table('cities')->where('name','Martínez de la Torre')->first()->id
],

['name' => 'Salvador Díaz Mirón',
'city_id' => DB::table('cities')->where('name','Martínez de la Torre')->first()->id
],

['name' => 'El Progreso',
'city_id' => DB::table('cities')->where('name','Martínez de la Torre')->first()->id
],

['name' => 'La Colmena',
'city_id' => DB::table('cities')->where('name','Martínez de la Torre')->first()->id
],

['name' => 'Flamencos',
'city_id' => DB::table('cities')->where('name','Martínez de la Torre')->first()->id
],

['name' => 'La Poza',
'city_id' => DB::table('cities')->where('name','Martínez de la Torre')->first()->id
],

['name' => 'El Palmar',
'city_id' => DB::table('cities')->where('name','Martínez de la Torre')->first()->id
],

['name' => 'Viejo Dos',
'city_id' => DB::table('cities')->where('name','Martínez de la Torre')->first()->id
],

['name' => 'Loma de las Flores',
'city_id' => DB::table('cities')->where('name','Martínez de la Torre')->first()->id
],

['name' => 'Arroyo Negro',
'city_id' => DB::table('cities')->where('name','Martínez de la Torre')->first()->id
],

['name' => 'Cartago',
'city_id' => DB::table('cities')->where('name','Martínez de la Torre')->first()->id
],

['name' => 'El Refugio',
'city_id' => DB::table('cities')->where('name','Martínez de la Torre')->first()->id
],

['name' => 'Atzinta',
'city_id' => DB::table('cities')->where('name','Tlapacoyan')->first()->id
],

['name' => 'Blanca Espuma',
'city_id' => DB::table('cities')->where('name','Tlapacoyan')->first()->id
],

['name' => 'Colegio Militar',
'city_id' => DB::table('cities')->where('name','Tlapacoyan')->first()->id
],

['name' => 'La Quinta',
'city_id' => DB::table('cities')->where('name','Tlapacoyan')->first()->id
],

['name' => 'Miguel de La Madrid Hurtado',
'city_id' => DB::table('cities')->where('name','Tlapacoyan')->first()->id
],

['name' => '22 de Noviembre',
'city_id' => DB::table('cities')->where('name','Tlapacoyan')->first()->id
],

['name' => 'Vicente Guerrero',
'city_id' => DB::table('cities')->where('name','Tlapacoyan')->first()->id
],

['name' => 'Amador Torres',
'city_id' => DB::table('cities')->where('name','Tlapacoyan')->first()->id
],

['name' => 'Lomas de La Cabaña',
'city_id' => DB::table('cities')->where('name','Tlapacoyan')->first()->id
],

['name' => 'Tlapacoyan Centro',
'city_id' => DB::table('cities')->where('name','Tlapacoyan')->first()->id
],

['name' => 'Campestre',
'city_id' => DB::table('cities')->where('name','Tlapacoyan')->first()->id
],

['name' => 'Francisco Villa',
'city_id' => DB::table('cities')->where('name','Tlapacoyan')->first()->id
],

['name' => 'Francisco Villa',
'city_id' => DB::table('cities')->where('name','Tlapacoyan')->first()->id
],

['name' => 'Jose Lopez Portillo',
'city_id' => DB::table('cities')->where('name','Tlapacoyan')->first()->id
],

['name' => 'Gardenias',
'city_id' => DB::table('cities')->where('name','Tlapacoyan')->first()->id
],

['name' => 'Manuel A Ferrer',
'city_id' => DB::table('cities')->where('name','Tlapacoyan')->first()->id
],

['name' => 'Nezahualcoyotl',
'city_id' => DB::table('cities')->where('name','Tlapacoyan')->first()->id
],

['name' => 'Francisco Gonzalez Bocanegra',
'city_id' => DB::table('cities')->where('name','Tlapacoyan')->first()->id
],

['name' => 'Heroico Colegio Militar',
'city_id' => DB::table('cities')->where('name','Tlapacoyan')->first()->id
],

['name' => 'Luis Escobar Toledano',
'city_id' => DB::table('cities')->where('name','Tlapacoyan')->first()->id
],

['name' => 'Miguel Hidalgo y Costilla',
'city_id' => DB::table('cities')->where('name','Tlapacoyan')->first()->id
],

['name' => 'Ricardo Flores Magón',
'city_id' => DB::table('cities')->where('name','Tlapacoyan')->first()->id
],

['name' => 'Benito Juárez Garcia',
'city_id' => DB::table('cities')->where('name','Tlapacoyan')->first()->id
],

['name' => 'Lázaro Cárdenas',
'city_id' => DB::table('cities')->where('name','Tlapacoyan')->first()->id
],

['name' => 'Rafael Hernandez Ochoa',
'city_id' => DB::table('cities')->where('name','Tlapacoyan')->first()->id
],

['name' => '22 de Noviembre',
'city_id' => DB::table('cities')->where('name','Tlapacoyan')->first()->id
],

['name' => 'La Unión',
'city_id' => DB::table('cities')->where('name','Tlapacoyan')->first()->id
],

['name' => 'La Floresta',
'city_id' => DB::table('cities')->where('name','Tlapacoyan')->first()->id
],

['name' => 'Los Pinos',
'city_id' => DB::table('cities')->where('name','Tlapacoyan')->first()->id
],

['name' => 'Santa Cruz',
'city_id' => DB::table('cities')->where('name','Tlapacoyan')->first()->id
],

['name' => 'Santa Cruz',
'city_id' => DB::table('cities')->where('name','Tlapacoyan')->first()->id
],

['name' => 'Fredepo',
'city_id' => DB::table('cities')->where('name','Tlapacoyan')->first()->id
],

['name' => 'Tlacualoyan',
'city_id' => DB::table('cities')->where('name','Tlapacoyan')->first()->id
],

['name' => 'Magisterial',
'city_id' => DB::table('cities')->where('name','Tlapacoyan')->first()->id
],

['name' => 'Las Américas',
'city_id' => DB::table('cities')->where('name','Tlapacoyan')->first()->id
],

['name' => 'Brisas',
'city_id' => DB::table('cities')->where('name','Tlapacoyan')->first()->id
],

['name' => 'Manuel A Garcia',
'city_id' => DB::table('cities')->where('name','Tlapacoyan')->first()->id
],

['name' => 'Chihuahua',
'city_id' => DB::table('cities')->where('name','Tlapacoyan')->first()->id
],

['name' => 'Guadalupe Victoria',
'city_id' => DB::table('cities')->where('name','Tlapacoyan')->first()->id
],

['name' => 'Buenos Aires',
'city_id' => DB::table('cities')->where('name','Tlapacoyan')->first()->id
],

['name' => 'El Encanto',
'city_id' => DB::table('cities')->where('name','Tlapacoyan')->first()->id
],

['name' => 'Vista Hermosa',
'city_id' => DB::table('cities')->where('name','Tlapacoyan')->first()->id
],

['name' => 'Año 2000',
'city_id' => DB::table('cities')->where('name','Tlapacoyan')->first()->id
],

['name' => 'La Gallera',
'city_id' => DB::table('cities')->where('name','Tlapacoyan')->first()->id
],

['name' => 'El Jaral',
'city_id' => DB::table('cities')->where('name','Tlapacoyan')->first()->id
],

['name' => 'Eytepeques',
'city_id' => DB::table('cities')->where('name','Tlapacoyan')->first()->id
],

['name' => 'Otra Banda',
'city_id' => DB::table('cities')->where('name','Tlapacoyan')->first()->id
],

['name' => 'Pochotitan',
'city_id' => DB::table('cities')->where('name','Tlapacoyan')->first()->id
],

['name' => 'San Isidro',
'city_id' => DB::table('cities')->where('name','Tlapacoyan')->first()->id
],

['name' => 'Platanozapán',
'city_id' => DB::table('cities')->where('name','Tlapacoyan')->first()->id
],

['name' => 'Buenavista',
'city_id' => DB::table('cities')->where('name','Tlapacoyan')->first()->id
],

['name' => 'Hidalgo',
'city_id' => DB::table('cities')->where('name','Tlapacoyan')->first()->id
],

['name' => 'Agua Santa',
'city_id' => DB::table('cities')->where('name','Tlapacoyan')->first()->id
],

['name' => 'Coxmiquiloyán',
'city_id' => DB::table('cities')->where('name','Tlapacoyan')->first()->id
],

['name' => 'Río Sordo',
'city_id' => DB::table('cities')->where('name','Tlapacoyan')->first()->id
],

['name' => 'Ejido El Mirador',
'city_id' => DB::table('cities')->where('name','Tlapacoyan')->first()->id
],

['name' => 'Paso Real',
'city_id' => DB::table('cities')->where('name','Tlapacoyan')->first()->id
],

['name' => 'La Granja',
'city_id' => DB::table('cities')->where('name','Tlapacoyan')->first()->id
],

['name' => 'San Gabino',
'city_id' => DB::table('cities')->where('name','Tlapacoyan')->first()->id
],

['name' => 'Piedra Pinta',
'city_id' => DB::table('cities')->where('name','Tlapacoyan')->first()->id
],

['name' => 'Cayuyo',
'city_id' => DB::table('cities')->where('name','Tlapacoyan')->first()->id
],

['name' => 'Cerro de Tepantepec',
'city_id' => DB::table('cities')->where('name','Tlapacoyan')->first()->id
],

['name' => 'Francisco I. Madero',
'city_id' => DB::table('cities')->where('name','Tlapacoyan')->first()->id
],

['name' => 'Vega Chica',
'city_id' => DB::table('cities')->where('name','Tlapacoyan')->first()->id
],

['name' => 'El Naranjal',
'city_id' => DB::table('cities')->where('name','Tlapacoyan')->first()->id
],

['name' => 'Arroyo Caña',
'city_id' => DB::table('cities')->where('name','Tlapacoyan')->first()->id
],

['name' => 'Santa Consuelo',
'city_id' => DB::table('cities')->where('name','Tlapacoyan')->first()->id
],

['name' => 'Los Álamos',
'city_id' => DB::table('cities')->where('name','Tlapacoyan')->first()->id
],

['name' => 'Ixtacuaco',
'city_id' => DB::table('cities')->where('name','Tlapacoyan')->first()->id
],

['name' => 'San Pedro Tlapacoyan',
'city_id' => DB::table('cities')->where('name','Tlapacoyan')->first()->id
],

['name' => 'Arroyo de Piedra',
'city_id' => DB::table('cities')->where('name','Tlapacoyan')->first()->id
],

['name' => 'Arroyo Piedra',
'city_id' => DB::table('cities')->where('name','Tlapacoyan')->first()->id
],

['name' => 'El Clarín',
'city_id' => DB::table('cities')->where('name','Tlapacoyan')->first()->id
],

['name' => 'Javier Rojo Gómez',
'city_id' => DB::table('cities')->where('name','Tlapacoyan')->first()->id
],

['name' => 'Luis Echeverria',
'city_id' => DB::table('cities')->where('name','Tlapacoyan')->first()->id
],

['name' => 'El Saltillo',
'city_id' => DB::table('cities')->where('name','Tlapacoyan')->first()->id
],

['name' => 'La Reforma',
'city_id' => DB::table('cities')->where('name','Tlapacoyan')->first()->id
],

['name' => 'Zaragoza',
'city_id' => DB::table('cities')->where('name','Tlapacoyan')->first()->id
],

['name' => 'Ejido Jiliapán',
'city_id' => DB::table('cities')->where('name','Tlapacoyan')->first()->id
],

['name' => 'El Palmar',
'city_id' => DB::table('cities')->where('name','Tlapacoyan')->first()->id
],

['name' => 'Flor de María',
'city_id' => DB::table('cities')->where('name','Tlapacoyan')->first()->id
],

['name' => 'San Francisco',
'city_id' => DB::table('cities')->where('name','Tlapacoyan')->first()->id
],

['name' => 'Finca Esmeralda',
'city_id' => DB::table('cities')->where('name','Tlapacoyan')->first()->id
],

['name' => 'Loma Alta',
'city_id' => DB::table('cities')->where('name','Tlapacoyan')->first()->id
],

['name' => 'El Mezclero',
'city_id' => DB::table('cities')->where('name','Tlapacoyan')->first()->id
],

['name' => 'Palmar Chico',
'city_id' => DB::table('cities')->where('name','Tlapacoyan')->first()->id
],

['name' => 'El Cortijo',
'city_id' => DB::table('cities')->where('name','Tlapacoyan')->first()->id
],

['name' => 'El Jobo',
'city_id' => DB::table('cities')->where('name','Tlapacoyan')->first()->id
],

['name' => 'La Palmilla',
'city_id' => DB::table('cities')->where('name','Tlapacoyan')->first()->id
],

['name' => 'El Recuerdo',
'city_id' => DB::table('cities')->where('name','Tlapacoyan')->first()->id
],

['name' => 'El Encanto',
'city_id' => DB::table('cities')->where('name','Tlapacoyan')->first()->id
],

['name' => 'Frijolares',
'city_id' => DB::table('cities')->where('name','Tlapacoyan')->first()->id
],

['name' => 'El Embarcadero',
'city_id' => DB::table('cities')->where('name','Tlapacoyan')->first()->id
],

['name' => 'Filipinas',
'city_id' => DB::table('cities')->where('name','Tlapacoyan')->first()->id
],

['name' => 'El Relicario',
'city_id' => DB::table('cities')->where('name','Tlapacoyan')->first()->id
],

['name' => 'Santa Cruz',
'city_id' => DB::table('cities')->where('name','Tlapacoyan')->first()->id
],

['name' => 'Tomata',
'city_id' => DB::table('cities')->where('name','Tlapacoyan')->first()->id
],

['name' => 'La Lagunilla',
'city_id' => DB::table('cities')->where('name','Tlapacoyan')->first()->id
],

['name' => 'Ahuacatán',
'city_id' => DB::table('cities')->where('name','Jalacingo')->first()->id
],

['name' => 'Cuauhtamingo',
'city_id' => DB::table('cities')->where('name','Jalacingo')->first()->id
],

['name' => 'Jalacingo',
'city_id' => DB::table('cities')->where('name','Jalacingo')->first()->id
],

['name' => 'Ocotepec',
'city_id' => DB::table('cities')->where('name','Jalacingo')->first()->id
],

['name' => 'Guadalupe Victoria',
'city_id' => DB::table('cities')->where('name','Jalacingo')->first()->id
],

['name' => 'El Arco',
'city_id' => DB::table('cities')->where('name','Jalacingo')->first()->id
],

['name' => 'Melchor Ocampo',
'city_id' => DB::table('cities')->where('name','Jalacingo')->first()->id
],

['name' => 'Cuartel Tercero',
'city_id' => DB::table('cities')->where('name','Jalacingo')->first()->id
],

['name' => 'Nicolás Bravo',
'city_id' => DB::table('cities')->where('name','Jalacingo')->first()->id
],

['name' => 'Santa Ana',
'city_id' => DB::table('cities')->where('name','Jalacingo')->first()->id
],

['name' => 'Huaxtla',
'city_id' => DB::table('cities')->where('name','Jalacingo')->first()->id
],

['name' => 'Vicente Guerrero',
'city_id' => DB::table('cities')->where('name','Jalacingo')->first()->id
],

['name' => 'San Francisco Barrientos',
'city_id' => DB::table('cities')->where('name','Jalacingo')->first()->id
],

['name' => 'Orilla del Monte',
'city_id' => DB::table('cities')->where('name','Jalacingo')->first()->id
],

['name' => 'Miguel Hidalgo',
'city_id' => DB::table('cities')->where('name','Jalacingo')->first()->id
],

['name' => 'Mixquiapan',
'city_id' => DB::table('cities')->where('name','Jalacingo')->first()->id
],

['name' => 'José María Morelos y Pavón',
'city_id' => DB::table('cities')->where('name','Jalacingo')->first()->id
],

['name' => 'Vista Hermosa',
'city_id' => DB::table('cities')->where('name','Jalacingo')->first()->id
],

['name' => 'Calpulalpan',
'city_id' => DB::table('cities')->where('name','Jalacingo')->first()->id
],

['name' => 'Epapa',
'city_id' => DB::table('cities')->where('name','Jalacingo')->first()->id
],

['name' => 'Atzalan',
'city_id' => DB::table('cities')->where('name','Atzalan')->first()->id
],

['name' => 'Cuauhtémoc',
'city_id' => DB::table('cities')->where('name','Atzalan')->first()->id
],

['name' => 'Ictzictic',
'city_id' => DB::table('cities')->where('name','Atzalan')->first()->id
],

['name' => 'Xiocuilapa',
'city_id' => DB::table('cities')->where('name','Atzalan')->first()->id
],

['name' => 'San Salvador',
'city_id' => DB::table('cities')->where('name','Atzalan')->first()->id
],

['name' => 'Tilzapota',
'city_id' => DB::table('cities')->where('name','Atzalan')->first()->id
],

['name' => 'Cruz Gorda',
'city_id' => DB::table('cities')->where('name','Atzalan')->first()->id
],

['name' => 'El Progreso',
'city_id' => DB::table('cities')->where('name','Atzalan')->first()->id
],

['name' => 'Santo Domingo (Arroyo Negro)',
'city_id' => DB::table('cities')->where('name','Atzalan')->first()->id
],

['name' => 'Naranjillo',
'city_id' => DB::table('cities')->where('name','Atzalan')->first()->id
],

['name' => 'Toxtixtaca',
'city_id' => DB::table('cities')->where('name','Atzalan')->first()->id
],

['name' => 'Huatamimilo',
'city_id' => DB::table('cities')->where('name','Atzalan')->first()->id
],

['name' => 'Tinajas',
'city_id' => DB::table('cities')->where('name','Atzalan')->first()->id
],

['name' => 'Napoala',
'city_id' => DB::table('cities')->where('name','Atzalan')->first()->id
],

['name' => 'Arroyo Colorado',
'city_id' => DB::table('cities')->where('name','Atzalan')->first()->id
],

['name' => 'Alseseca el Grande',
'city_id' => DB::table('cities')->where('name','Atzalan')->first()->id
],

['name' => 'Zapotitlán',
'city_id' => DB::table('cities')->where('name','Atzalan')->first()->id
],

['name' => 'Tazolapa',
'city_id' => DB::table('cities')->where('name','Atzalan')->first()->id
],

['name' => 'Almanza',
'city_id' => DB::table('cities')->where('name','Atzalan')->first()->id
],

['name' => 'Tierra Nueva',
'city_id' => DB::table('cities')->where('name','Atzalan')->first()->id
],

['name' => 'Cerro de San Francisco',
'city_id' => DB::table('cities')->where('name','Atzalan')->first()->id
],

['name' => 'Lomas Verdes',
'city_id' => DB::table('cities')->where('name','Atzalan')->first()->id
],

['name' => 'Pedernales',
'city_id' => DB::table('cities')->where('name','Atzalan')->first()->id
],

['name' => 'Buena Vista',
'city_id' => DB::table('cities')->where('name','Atzalan')->first()->id
],

['name' => 'Seis de Mayo',
'city_id' => DB::table('cities')->where('name','Atzalan')->first()->id
],

['name' => 'Pompeya',
'city_id' => DB::table('cities')->where('name','Atzalan')->first()->id
],

['name' => 'San Pedro Buenavista',
'city_id' => DB::table('cities')->where('name','Atzalan')->first()->id
],

['name' => 'Cerro del Candelero (Huipanguillo)',
'city_id' => DB::table('cities')->where('name','Atzalan')->first()->id
],

['name' => 'Rancho Nuevo',
'city_id' => DB::table('cities')->where('name','Atzalan')->first()->id
],

['name' => 'Copalillo II (El Palmar)',
'city_id' => DB::table('cities')->where('name','Atzalan')->first()->id
],

['name' => 'Zapote Redondo',
'city_id' => DB::table('cities')->where('name','Atzalan')->first()->id
],

['name' => 'Copalillo I',
'city_id' => DB::table('cities')->where('name','Atzalan')->first()->id
],

['name' => 'Cuatro Caminos',
'city_id' => DB::table('cities')->where('name','Atzalan')->first()->id
],

['name' => 'Ahuateno',
'city_id' => DB::table('cities')->where('name','Atzalan')->first()->id
],

['name' => 'El Fortín',
'city_id' => DB::table('cities')->where('name','Atzalan')->first()->id
],

['name' => 'Plan de Arroyos',
'city_id' => DB::table('cities')->where('name','Atzalan')->first()->id
],

['name' => 'Santiago',
'city_id' => DB::table('cities')->where('name','Atzalan')->first()->id
],

['name' => 'El Campamento',
'city_id' => DB::table('cities')->where('name','Atzalan')->first()->id
],

['name' => 'Zapotal',
'city_id' => DB::table('cities')->where('name','Atzalan')->first()->id
],

['name' => 'Palmarcillo',
'city_id' => DB::table('cities')->where('name','Atzalan')->first()->id
],

['name' => 'Pahua Hueca',
'city_id' => DB::table('cities')->where('name','Atzalan')->first()->id
],

['name' => 'El Anayal',
'city_id' => DB::table('cities')->where('name','Atzalan')->first()->id
],

['name' => 'El Equimite',
'city_id' => DB::table('cities')->where('name','Atzalan')->first()->id
],

['name' => 'El Tesoro',
'city_id' => DB::table('cities')->where('name','Atzalan')->first()->id
],

['name' => 'El Pimiento',
'city_id' => DB::table('cities')->where('name','Atzalan')->first()->id
],

['name' => 'Loma de Las Flores',
'city_id' => DB::table('cities')->where('name','Altotonga')->first()->id
],

['name' => 'Altotonga Centro',
'city_id' => DB::table('cities')->where('name','Altotonga')->first()->id
],

['name' => 'Los Perales',
'city_id' => DB::table('cities')->where('name','Altotonga')->first()->id
],

['name' => 'La Palma',
'city_id' => DB::table('cities')->where('name','Altotonga')->first()->id
],

['name' => 'La Calichera',
'city_id' => DB::table('cities')->where('name','Altotonga')->first()->id
],

['name' => 'De Santiaguito',
'city_id' => DB::table('cities')->where('name','Altotonga')->first()->id
],

['name' => 'La Poza Tío Mingo',
'city_id' => DB::table('cities')->where('name','Altotonga')->first()->id
],

['name' => 'La Loma',
'city_id' => DB::table('cities')->where('name','Altotonga')->first()->id
],

['name' => 'Lindavista',
'city_id' => DB::table('cities')->where('name','Altotonga')->first()->id
],

['name' => 'El Ranchito',
'city_id' => DB::table('cities')->where('name','Altotonga')->first()->id
],

['name' => 'Lázaro Cárdenas',
'city_id' => DB::table('cities')->where('name','Altotonga')->first()->id
],

['name' => 'Atalpas',
'city_id' => DB::table('cities')->where('name','Altotonga')->first()->id
],

['name' => 'El Centenario',
'city_id' => DB::table('cities')->where('name','Altotonga')->first()->id
],

['name' => 'Río Vasco',
'city_id' => DB::table('cities')->where('name','Altotonga')->first()->id
],

['name' => 'Mecacalco',
'city_id' => DB::table('cities')->where('name','Altotonga')->first()->id
],

['name' => 'Comales',
'city_id' => DB::table('cities')->where('name','Altotonga')->first()->id
],

['name' => 'El Kilate',
'city_id' => DB::table('cities')->where('name','Altotonga')->first()->id
],

['name' => 'La Barranca',
'city_id' => DB::table('cities')->where('name','Altotonga')->first()->id
],

['name' => 'Malacatepec',
'city_id' => DB::table('cities')->where('name','Altotonga')->first()->id
],

['name' => 'Temimilco',
'city_id' => DB::table('cities')->where('name','Altotonga')->first()->id
],

['name' => 'La Vega (Úrsulo Galván)',
'city_id' => DB::table('cities')->where('name','Altotonga')->first()->id
],

['name' => 'Juan Marcos',
'city_id' => DB::table('cities')->where('name','Altotonga')->first()->id
],

['name' => 'Ahueyahualco',
'city_id' => DB::table('cities')->where('name','Altotonga')->first()->id
],

['name' => 'Veintiuno de Agosto',
'city_id' => DB::table('cities')->where('name','Altotonga')->first()->id
],

['name' => 'Champilico',
'city_id' => DB::table('cities')->where('name','Altotonga')->first()->id
],

['name' => 'Xoampolco',
'city_id' => DB::table('cities')->where('name','Altotonga')->first()->id
],

['name' => 'Buena Vista',
'city_id' => DB::table('cities')->where('name','Altotonga')->first()->id
],

['name' => 'Chichicapan',
'city_id' => DB::table('cities')->where('name','Altotonga')->first()->id
],

['name' => 'Tezahuapan de Juárez',
'city_id' => DB::table('cities')->where('name','Altotonga')->first()->id
],

['name' => 'La Estanzuela',
'city_id' => DB::table('cities')->where('name','Altotonga')->first()->id
],

['name' => 'Santa Cruz Tepozoteco',
'city_id' => DB::table('cities')->where('name','Altotonga')->first()->id
],

['name' => 'Ignacio Zaragoza Segunda Sección',
'city_id' => DB::table('cities')->where('name','Altotonga')->first()->id
],

['name' => 'Tepiolulco',
'city_id' => DB::table('cities')->where('name','Altotonga')->first()->id
],

['name' => 'Adolfo Moreno',
'city_id' => DB::table('cities')->where('name','Altotonga')->first()->id
],

['name' => 'Lerdo de Tejada',
'city_id' => DB::table('cities')->where('name','Altotonga')->first()->id
],

['name' => 'Texacaxco',
'city_id' => DB::table('cities')->where('name','Altotonga')->first()->id
],

['name' => 'Dr. Daniel Guzmán',
'city_id' => DB::table('cities')->where('name','Altotonga')->first()->id
],

['name' => 'Francisco Javier Gómez',
'city_id' => DB::table('cities')->where('name','Altotonga')->first()->id
],

['name' => 'San José Tepozoteco',
'city_id' => DB::table('cities')->where('name','Altotonga')->first()->id
],

['name' => 'San Pedro Tepozoteco',
'city_id' => DB::table('cities')->where('name','Altotonga')->first()->id
],

['name' => 'Gutiérrez Zamora',
'city_id' => DB::table('cities')->where('name','Altotonga')->first()->id
],

['name' => 'San Miguel Tlalpoalan',
'city_id' => DB::table('cities')->where('name','Altotonga')->first()->id
],

['name' => 'Magueyitos',
'city_id' => DB::table('cities')->where('name','Altotonga')->first()->id
],

['name' => 'Las Minas',
'city_id' => DB::table('cities')->where('name','Las Minas')->first()->id
],

['name' => 'Rinconada',
'city_id' => DB::table('cities')->where('name','Las Minas')->first()->id
],

['name' => 'Romerillos',
'city_id' => DB::table('cities')->where('name','Las Minas')->first()->id
],

['name' => 'Quiahuixcuautla',
'city_id' => DB::table('cities')->where('name','Las Minas')->first()->id
],

['name' => 'Zomelahuacan',
'city_id' => DB::table('cities')->where('name','Las Minas')->first()->id
],

['name' => 'Pueblo Nuevo',
'city_id' => DB::table('cities')->where('name','Las Minas')->first()->id
],

['name' => 'Huapala',
'city_id' => DB::table('cities')->where('name','Las Minas')->first()->id
],

['name' => 'Carboneras',
'city_id' => DB::table('cities')->where('name','Las Minas')->first()->id
],

['name' => 'Molinillo',
'city_id' => DB::table('cities')->where('name','Las Minas')->first()->id
],

['name' => 'Landaco',
'city_id' => DB::table('cities')->where('name','Las Minas')->first()->id
],

['name' => 'El Pimiento',
'city_id' => DB::table('cities')->where('name','Las Minas')->first()->id
],

['name' => 'Tatatila',
'city_id' => DB::table('cities')->where('name','Tatatila')->first()->id
],

['name' => 'Piedra Parada',
'city_id' => DB::table('cities')->where('name','Tatatila')->first()->id
],

['name' => 'La Concordia',
'city_id' => DB::table('cities')->where('name','Tatatila')->first()->id
],

['name' => 'El Colorado',
'city_id' => DB::table('cities')->where('name','Tenochtitlán')->first()->id
],

['name' => 'Tenochtitlán',
'city_id' => DB::table('cities')->where('name','Tenochtitlán')->first()->id
],

['name' => 'Tetlepanquetzalt',
'city_id' => DB::table('cities')->where('name','Tenochtitlán')->first()->id
],

['name' => 'Trojillas',
'city_id' => DB::table('cities')->where('name','Tenochtitlán')->first()->id
],

['name' => 'La Cañada',
'city_id' => DB::table('cities')->where('name','Tenochtitlán')->first()->id
],

['name' => 'Hidalgotitlán',
'city_id' => DB::table('cities')->where('name','Tenochtitlán')->first()->id
],

['name' => 'Chachapa Buenavista',
'city_id' => DB::table('cities')->where('name','Nautla')->first()->id
],

['name' => 'La Isla de Chapachapa',
'city_id' => DB::table('cities')->where('name','Nautla')->first()->id
],

['name' => 'Nautla',
'city_id' => DB::table('cities')->where('name','Nautla')->first()->id
],

['name' => 'La Peña',
'city_id' => DB::table('cities')->where('name','Nautla')->first()->id
],

['name' => 'Pedernales',
'city_id' => DB::table('cities')->where('name','Nautla')->first()->id
],

['name' => 'Jicaltepec',
'city_id' => DB::table('cities')->where('name','Nautla')->first()->id
],

['name' => 'La Unión',
'city_id' => DB::table('cities')->where('name','Nautla')->first()->id
],

['name' => 'Gallineros',
'city_id' => DB::table('cities')->where('name','Nautla')->first()->id
],

['name' => 'El Huanal',
'city_id' => DB::table('cities')->where('name','Nautla')->first()->id
],

['name' => 'El Altillo',
'city_id' => DB::table('cities')->where('name','Nautla')->first()->id
],

['name' => 'El Josco',
'city_id' => DB::table('cities')->where('name','Nautla')->first()->id
],

['name' => 'Sebastián Camacho',
'city_id' => DB::table('cities')->where('name','Nautla')->first()->id
],

['name' => 'Barra de las Palmas',
'city_id' => DB::table('cities')->where('name','Nautla')->first()->id
],

['name' => 'El Raudal',
'city_id' => DB::table('cities')->where('name','Nautla')->first()->id
],

['name' => 'Adalberto Tejeda',
'city_id' => DB::table('cities')->where('name','Nautla')->first()->id
],

['name' => 'El Ciervo',
'city_id' => DB::table('cities')->where('name','Nautla')->first()->id
],

['name' => 'El Porvenir',
'city_id' => DB::table('cities')->where('name','Nautla')->first()->id
],

['name' => 'La Martinica',
'city_id' => DB::table('cities')->where('name','Nautla')->first()->id
],

['name' => 'Rancho Nuevo',
'city_id' => DB::table('cities')->where('name','Nautla')->first()->id
],

['name' => 'Misantla Centro',
'city_id' => DB::table('cities')->where('name','Misantla')->first()->id
],

['name' => 'Santa Clara',
'city_id' => DB::table('cities')->where('name','Misantla')->first()->id
],

['name' => 'Jardines de Misantla',
'city_id' => DB::table('cities')->where('name','Misantla')->first()->id
],

['name' => 'Mateo Acosta',
'city_id' => DB::table('cities')->where('name','Misantla')->first()->id
],

['name' => 'Nizin',
'city_id' => DB::table('cities')->where('name','Misantla')->first()->id
],

['name' => 'Pedregal 2',
'city_id' => DB::table('cities')->where('name','Misantla')->first()->id
],

['name' => 'Pedregal 1 (Esperanza Azcon)',
'city_id' => DB::table('cities')->where('name','Misantla')->first()->id
],

['name' => 'Benito Juárez',
'city_id' => DB::table('cities')->where('name','Misantla')->first()->id
],

['name' => 'Francisco Villa',
'city_id' => DB::table('cities')->where('name','Misantla')->first()->id
],

['name' => 'La Gloria',
'city_id' => DB::table('cities')->where('name','Misantla')->first()->id
],

['name' => 'Sector Popular',
'city_id' => DB::table('cities')->where('name','Misantla')->first()->id
],

['name' => 'Carlos Roberto Smith',
'city_id' => DB::table('cities')->where('name','Misantla')->first()->id
],

['name' => 'Miradores',
'city_id' => DB::table('cities')->where('name','Misantla')->first()->id
],

['name' => 'Puerto Palchan',
'city_id' => DB::table('cities')->where('name','Misantla')->first()->id
],

['name' => 'Rafael Ramirez La Voignet',
'city_id' => DB::table('cities')->where('name','Misantla')->first()->id
],

['name' => 'Emiliano Zapata',
'city_id' => DB::table('cities')->where('name','Misantla')->first()->id
],

['name' => 'Cristian Magnani de Alemán',
'city_id' => DB::table('cities')->where('name','Misantla')->first()->id
],

['name' => 'Manuel Villaraus',
'city_id' => DB::table('cities')->where('name','Misantla')->first()->id
],

['name' => '20 de Noviembre',
'city_id' => DB::table('cities')->where('name','Misantla')->first()->id
],

['name' => 'Aviación',
'city_id' => DB::table('cities')->where('name','Misantla')->first()->id
],

['name' => '5 de Mayo',
'city_id' => DB::table('cities')->where('name','Misantla')->first()->id
],

['name' => 'Espaldilla',
'city_id' => DB::table('cities')->where('name','Misantla')->first()->id
],

['name' => 'Teresa Peñafiel',
'city_id' => DB::table('cities')->where('name','Misantla')->first()->id
],

['name' => 'Los Libreros',
'city_id' => DB::table('cities')->where('name','Misantla')->first()->id
],

['name' => 'Maestros Veracruzanos',
'city_id' => DB::table('cities')->where('name','Misantla')->first()->id
],

['name' => 'Luz Divina Morales',
'city_id' => DB::table('cities')->where('name','Misantla')->first()->id
],

['name' => 'Lindavista',
'city_id' => DB::table('cities')->where('name','Misantla')->first()->id
],

['name' => 'Marco Antonio Muñoz',
'city_id' => DB::table('cities')->where('name','Misantla')->first()->id
],

['name' => 'Coapeche',
'city_id' => DB::table('cities')->where('name','Misantla')->first()->id
],

['name' => 'La Defensa',
'city_id' => DB::table('cities')->where('name','Misantla')->first()->id
],

['name' => 'Troncones',
'city_id' => DB::table('cities')->where('name','Misantla')->first()->id
],

['name' => 'La Reforma',
'city_id' => DB::table('cities')->where('name','Misantla')->first()->id
],

['name' => 'Rancho Nuevo',
'city_id' => DB::table('cities')->where('name','Misantla')->first()->id
],

['name' => 'La Constancia',
'city_id' => DB::table('cities')->where('name','Misantla')->first()->id
],

['name' => 'La Unión',
'city_id' => DB::table('cities')->where('name','Misantla')->first()->id
],

['name' => 'Máximo García',
'city_id' => DB::table('cities')->where('name','Misantla')->first()->id
],

['name' => 'La Libertad',
'city_id' => DB::table('cities')->where('name','Misantla')->first()->id
],

['name' => 'Palpoala Ixcan',
'city_id' => DB::table('cities')->where('name','Misantla')->first()->id
],

['name' => 'Guadalupe Victoria',
'city_id' => DB::table('cities')->where('name','Misantla')->first()->id
],

['name' => 'Colorado Chico',
'city_id' => DB::table('cities')->where('name','Misantla')->first()->id
],

['name' => 'El Diamante',
'city_id' => DB::table('cities')->where('name','Misantla')->first()->id
],

['name' => 'Loma Bonita',
'city_id' => DB::table('cities')->where('name','Misantla')->first()->id
],

['name' => 'Palmira de Hidalgo',
'city_id' => DB::table('cities')->where('name','Misantla')->first()->id
],

['name' => 'Rancho Alegre',
'city_id' => DB::table('cities')->where('name','Misantla')->first()->id
],

['name' => 'San Felipe',
'city_id' => DB::table('cities')->where('name','Misantla')->first()->id
],

['name' => 'La Lima',
'city_id' => DB::table('cities')->where('name','Misantla')->first()->id
],

['name' => 'Arroyo Hondo',
'city_id' => DB::table('cities')->where('name','Misantla')->first()->id
],

['name' => 'Primavera',
'city_id' => DB::table('cities')->where('name','Misantla')->first()->id
],

['name' => 'Cerro Quebrado',
'city_id' => DB::table('cities')->where('name','Misantla')->first()->id
],

['name' => 'La Unión',
'city_id' => DB::table('cities')->where('name','Misantla')->first()->id
],

['name' => 'Poza del Tigre',
'city_id' => DB::table('cities')->where('name','Misantla')->first()->id
],

['name' => 'Vista Hermosa',
'city_id' => DB::table('cities')->where('name','Misantla')->first()->id
],

['name' => 'Venustiano Carranza',
'city_id' => DB::table('cities')->where('name','Misantla')->first()->id
],

['name' => 'Congregación Fundo Legal Palpoala Ixcán',
'city_id' => DB::table('cities')->where('name','Misantla')->first()->id
],

['name' => 'La Sabana',
'city_id' => DB::table('cities')->where('name','Misantla')->first()->id
],

['name' => 'La Soledad',
'city_id' => DB::table('cities')->where('name','Misantla')->first()->id
],

['name' => 'Mafafas',
'city_id' => DB::table('cities')->where('name','Misantla')->first()->id
],

['name' => 'Pipianales',
'city_id' => DB::table('cities')->where('name','Misantla')->first()->id
],

['name' => 'San Francisco',
'city_id' => DB::table('cities')->where('name','Misantla')->first()->id
],

['name' => 'Plan de La Vieja',
'city_id' => DB::table('cities')->where('name','Misantla')->first()->id
],

['name' => 'Loma Bonita',
'city_id' => DB::table('cities')->where('name','Misantla')->first()->id
],

['name' => 'Loma Del Cojolite',
'city_id' => DB::table('cities')->where('name','Misantla')->first()->id
],

['name' => 'Brazo Seco',
'city_id' => DB::table('cities')->where('name','Misantla')->first()->id
],

['name' => 'La Habana',
'city_id' => DB::table('cities')->where('name','Misantla')->first()->id
],

['name' => 'Plan de La Vega',
'city_id' => DB::table('cities')->where('name','Misantla')->first()->id
],

['name' => 'Arroyo Frío',
'city_id' => DB::table('cities')->where('name','Misantla')->first()->id
],

['name' => 'El Gavilán',
'city_id' => DB::table('cities')->where('name','Misantla')->first()->id
],

['name' => 'Rancho Nuevo',
'city_id' => DB::table('cities')->where('name','Misantla')->first()->id
],

['name' => 'El Carmen o K.M 5',
'city_id' => DB::table('cities')->where('name','Misantla')->first()->id
],

['name' => 'La Reforma (Kilómetro 9)',
'city_id' => DB::table('cities')->where('name','Misantla')->first()->id
],

['name' => 'Francisco Sarabia',
'city_id' => DB::table('cities')->where('name','Misantla')->first()->id
],

['name' => 'Ignacio Zaragoza',
'city_id' => DB::table('cities')->where('name','Misantla')->first()->id
],

['name' => 'El Carmen',
'city_id' => DB::table('cities')->where('name','Misantla')->first()->id
],

['name' => 'Las Lajas',
'city_id' => DB::table('cities')->where('name','Misantla')->first()->id
],

['name' => 'Puerto Chico',
'city_id' => DB::table('cities')->where('name','Misantla')->first()->id
],

['name' => 'Morelos',
'city_id' => DB::table('cities')->where('name','Misantla')->first()->id
],

['name' => 'Tapapulum',
'city_id' => DB::table('cities')->where('name','Misantla')->first()->id
],

['name' => 'Poxtitlan',
'city_id' => DB::table('cities')->where('name','Misantla')->first()->id
],

['name' => 'Santa Cruz Hidalgo',
'city_id' => DB::table('cities')->where('name','Misantla')->first()->id
],

['name' => 'El Pozon',
'city_id' => DB::table('cities')->where('name','Misantla')->first()->id
],

['name' => 'Allende',
'city_id' => DB::table('cities')->where('name','Misantla')->first()->id
],

['name' => 'Chapachapa',
'city_id' => DB::table('cities')->where('name','Misantla')->first()->id
],

['name' => 'La Capilla',
'city_id' => DB::table('cities')->where('name','Misantla')->first()->id
],

['name' => 'Buenos Aires',
'city_id' => DB::table('cities')->where('name','Misantla')->first()->id
],

['name' => 'Los Ídolos',
'city_id' => DB::table('cities')->where('name','Misantla')->first()->id
],

['name' => 'Arroyo Negro',
'city_id' => DB::table('cities')->where('name','Misantla')->first()->id
],

['name' => 'La Piedad',
'city_id' => DB::table('cities')->where('name','Misantla')->first()->id
],

['name' => 'Santa Julia',
'city_id' => DB::table('cities')->where('name','Misantla')->first()->id
],

['name' => 'Guadalupe Victoria (La Vaquería)',
'city_id' => DB::table('cities')->where('name','Misantla')->first()->id
],

['name' => 'El Valle',
'city_id' => DB::table('cities')->where('name','Misantla')->first()->id
],

['name' => 'Plan Grande',
'city_id' => DB::table('cities')->where('name','Misantla')->first()->id
],

['name' => 'Paso Blanco',
'city_id' => DB::table('cities')->where('name','Misantla')->first()->id
],

['name' => 'Pueblo Viejo',
'city_id' => DB::table('cities')->where('name','Misantla')->first()->id
],

['name' => 'Trapiches',
'city_id' => DB::table('cities')->where('name','Misantla')->first()->id
],

['name' => 'Santa Cruz Buena Vista',
'city_id' => DB::table('cities')->where('name','Misantla')->first()->id
],

['name' => 'Salvador Diaz Mirón',
'city_id' => DB::table('cities')->where('name','Misantla')->first()->id
],

['name' => 'Guillermo Badillo',
'city_id' => DB::table('cities')->where('name','Misantla')->first()->id
],

['name' => 'La Loma',
'city_id' => DB::table('cities')->where('name','Misantla')->first()->id
],

['name' => 'Francisco I. Madero',
'city_id' => DB::table('cities')->where('name','Misantla')->first()->id
],

['name' => 'El Mirador',
'city_id' => DB::table('cities')->where('name','Misantla')->first()->id
],

['name' => 'Villa Nueva',
'city_id' => DB::table('cities')->where('name','Misantla')->first()->id
],

['name' => 'Manuel Gutiérrez Najera',
'city_id' => DB::table('cities')->where('name','Misantla')->first()->id
],

['name' => 'La Mesa',
'city_id' => DB::table('cities')->where('name','Misantla')->first()->id
],

['name' => 'Vicente Guerrero',
'city_id' => DB::table('cities')->where('name','Misantla')->first()->id
],

['name' => 'Independencia',
'city_id' => DB::table('cities')->where('name','Misantla')->first()->id
],

['name' => 'El Lirial',
'city_id' => DB::table('cities')->where('name','Misantla')->first()->id
],

['name' => 'El Mirasol',
'city_id' => DB::table('cities')->where('name','Misantla')->first()->id
],

['name' => 'Barranca del Tigre',
'city_id' => DB::table('cities')->where('name','Misantla')->first()->id
],

['name' => 'Juan Jacobo Torres (La Monera)',
'city_id' => DB::table('cities')->where('name','Misantla')->first()->id
],

['name' => 'Manantiales',
'city_id' => DB::table('cities')->where('name','Misantla')->first()->id
],

['name' => 'Moxillon',
'city_id' => DB::table('cities')->where('name','Misantla')->first()->id
],

['name' => 'Palma Sola',
'city_id' => DB::table('cities')->where('name','Misantla')->first()->id
],

['name' => 'Torrecillas',
'city_id' => DB::table('cities')->where('name','Misantla')->first()->id
],

['name' => 'Plan de Guerrero',
'city_id' => DB::table('cities')->where('name','Misantla')->first()->id
],

['name' => 'Landero y Coss',
'city_id' => DB::table('cities')->where('name','Landero y Coss')->first()->id
],

['name' => 'La Misión',
'city_id' => DB::table('cities')->where('name','Chiconquiaco')->first()->id
],

['name' => 'Chiconquiaco',
'city_id' => DB::table('cities')->where('name','Chiconquiaco')->first()->id
],

['name' => 'El Capulín',
'city_id' => DB::table('cities')->where('name','Chiconquiaco')->first()->id
],

['name' => 'Dos Caminos',
'city_id' => DB::table('cities')->where('name','Chiconquiaco')->first()->id
],

['name' => 'El Escalanar',
'city_id' => DB::table('cities')->where('name','Chiconquiaco')->first()->id
],

['name' => 'La Sombra',
'city_id' => DB::table('cities')->where('name','Chiconquiaco')->first()->id
],

['name' => 'Gutiérrez Zamora',
'city_id' => DB::table('cities')->where('name','Chiconquiaco')->first()->id
],

['name' => 'El Huérfano',
'city_id' => DB::table('cities')->where('name','Chiconquiaco')->first()->id
],

['name' => 'Las Paredes',
'city_id' => DB::table('cities')->where('name','Chiconquiaco')->first()->id
],

['name' => 'Planta del Pie',
'city_id' => DB::table('cities')->where('name','Chiconquiaco')->first()->id
],

['name' => 'Cuautitlán del Parral',
'city_id' => DB::table('cities')->where('name','Yecuatla')->first()->id
],

['name' => 'Cristóbal Hidalgo',
'city_id' => DB::table('cities')->where('name','Yecuatla')->first()->id
],

['name' => 'Leona Vicario',
'city_id' => DB::table('cities')->where('name','Yecuatla')->first()->id
],

['name' => 'Nueva Reforma',
'city_id' => DB::table('cities')->where('name','Yecuatla')->first()->id
],

['name' => 'Los Capulines',
'city_id' => DB::table('cities')->where('name','Yecuatla')->first()->id
],

['name' => 'La Defensa',
'city_id' => DB::table('cities')->where('name','Yecuatla')->first()->id
],

['name' => 'Yecuatla Centro',
'city_id' => DB::table('cities')->where('name','Yecuatla')->first()->id
],

['name' => 'Manuel Zorrilla Rivera',
'city_id' => DB::table('cities')->where('name','Yecuatla')->first()->id
],

['name' => 'Rafael Murillo Vidal',
'city_id' => DB::table('cities')->where('name','Yecuatla')->first()->id
],

['name' => 'Miguel Garcia',
'city_id' => DB::table('cities')->where('name','Yecuatla')->first()->id
],

['name' => 'La Unión',
'city_id' => DB::table('cities')->where('name','Yecuatla')->first()->id
],

['name' => 'La Victoria',
'city_id' => DB::table('cities')->where('name','Yecuatla')->first()->id
],

['name' => 'Paz de Enríquez',
'city_id' => DB::table('cities')->where('name','Yecuatla')->first()->id
],

['name' => 'Colipa',
'city_id' => DB::table('cities')->where('name','Colipa')->first()->id
],

['name' => 'Coyolillo',
'city_id' => DB::table('cities')->where('name','Colipa')->first()->id
],

['name' => 'La Palma',
'city_id' => DB::table('cities')->where('name','Colipa')->first()->id
],

['name' => 'Santa Rita',
'city_id' => DB::table('cities')->where('name','Colipa')->first()->id
],

['name' => 'La Concordia',
'city_id' => DB::table('cities')->where('name','Colipa')->first()->id
],

['name' => 'Cerro del Aguacate',
'city_id' => DB::table('cities')->where('name','Colipa')->first()->id
],

['name' => 'La Cachetada',
'city_id' => DB::table('cities')->where('name','Colipa')->first()->id
],

['name' => 'Plan de San Luis',
'city_id' => DB::table('cities')->where('name','Colipa')->first()->id
],

['name' => 'Deportiva 1a Secc',
'city_id' => DB::table('cities')->where('name','Vega de Alatorre')->first()->id
],

['name' => 'El Progreso',
'city_id' => DB::table('cities')->where('name','Vega de Alatorre')->first()->id
],

['name' => 'Independencia',
'city_id' => DB::table('cities')->where('name','Vega de Alatorre')->first()->id
],

['name' => 'La Diana Alta',
'city_id' => DB::table('cities')->where('name','Vega de Alatorre')->first()->id
],

['name' => 'Las Vegas',
'city_id' => DB::table('cities')->where('name','Vega de Alatorre')->first()->id
],

['name' => 'Vega de Alatorre',
'city_id' => DB::table('cities')->where('name','Vega de Alatorre')->first()->id
],

['name' => 'Las Poma Rosas',
'city_id' => DB::table('cities')->where('name','Vega de Alatorre')->first()->id
],

['name' => 'Las Higueras',
'city_id' => DB::table('cities')->where('name','Vega de Alatorre')->first()->id
],

['name' => 'El Laurel',
'city_id' => DB::table('cities')->where('name','Vega de Alatorre')->first()->id
],

['name' => 'Monte Negro',
'city_id' => DB::table('cities')->where('name','Vega de Alatorre')->first()->id
],

['name' => 'El Chamizal',
'city_id' => DB::table('cities')->where('name','Vega de Alatorre')->first()->id
],

['name' => 'Estadio',
'city_id' => DB::table('cities')->where('name','Vega de Alatorre')->first()->id
],

['name' => 'La Firmeza',
'city_id' => DB::table('cities')->where('name','Vega de Alatorre')->first()->id
],

['name' => 'Los Mangos',
'city_id' => DB::table('cities')->where('name','Vega de Alatorre')->first()->id
],

['name' => 'Luz Maria Zapata',
'city_id' => DB::table('cities')->where('name','Vega de Alatorre')->first()->id
],

['name' => 'Manuel L Morales',
'city_id' => DB::table('cities')->where('name','Vega de Alatorre')->first()->id
],

['name' => 'Santa Bárbara',
'city_id' => DB::table('cities')->where('name','Vega de Alatorre')->first()->id
],

['name' => 'Emilio Carranza',
'city_id' => DB::table('cities')->where('name','Vega de Alatorre')->first()->id
],

['name' => 'Torres Méndez',
'city_id' => DB::table('cities')->where('name','Vega de Alatorre')->first()->id
],

['name' => 'El Centenario (El Tecolote)',
'city_id' => DB::table('cities')->where('name','Vega de Alatorre')->first()->id
],

['name' => 'Loma Bonita',
'city_id' => DB::table('cities')->where('name','Vega de Alatorre')->first()->id
],

['name' => 'Salas',
'city_id' => DB::table('cities')->where('name','Pánuco')->first()->id
],

['name' => 'Panuco Centro',
'city_id' => DB::table('cities')->where('name','Pánuco')->first()->id
],

['name' => 'Las Truchas',
'city_id' => DB::table('cities')->where('name','Pánuco')->first()->id
],

['name' => 'Antonio Ortiz Mena',
'city_id' => DB::table('cities')->where('name','Pánuco')->first()->id
],

['name' => 'Electricista',
'city_id' => DB::table('cities')->where('name','Pánuco')->first()->id
],

['name' => 'Independencia',
'city_id' => DB::table('cities')->where('name','Pánuco')->first()->id
],

['name' => 'Los Mangos',
'city_id' => DB::table('cities')->where('name','Pánuco')->first()->id
],

['name' => 'Venustiano Carranza',
'city_id' => DB::table('cities')->where('name','Pánuco')->first()->id
],

['name' => 'Santander',
'city_id' => DB::table('cities')->where('name','Pánuco')->first()->id
],

['name' => 'Adán Castelan',
'city_id' => DB::table('cities')->where('name','Pánuco')->first()->id
],

['name' => 'VIVAH',
'city_id' => DB::table('cities')->where('name','Pánuco')->first()->id
],

['name' => 'Solidaridad',
'city_id' => DB::table('cities')->where('name','Pánuco')->first()->id
],

['name' => 'Edmundo Guzmán Neyra',
'city_id' => DB::table('cities')->where('name','Pánuco')->first()->id
],

['name' => 'Corregidora',
'city_id' => DB::table('cities')->where('name','Pánuco')->first()->id
],

['name' => 'Francisco I Madero',
'city_id' => DB::table('cities')->where('name','Pánuco')->first()->id
],

['name' => 'Gutiérrez',
'city_id' => DB::table('cities')->where('name','Pánuco')->first()->id
],

['name' => 'Adolfo López Mateos',
'city_id' => DB::table('cities')->where('name','Pánuco')->first()->id
],

['name' => 'Rafael Hernandez Ochoa',
'city_id' => DB::table('cities')->where('name','Pánuco')->first()->id
],

['name' => 'Alto de Viñas',
'city_id' => DB::table('cities')->where('name','Pánuco')->first()->id
],

['name' => 'Gral. Desiderio Pavón',
'city_id' => DB::table('cities')->where('name','Pánuco')->first()->id
],

['name' => 'La Cruz',
'city_id' => DB::table('cities')->where('name','Pánuco')->first()->id
],

['name' => 'Maza',
'city_id' => DB::table('cities')->where('name','Pánuco')->first()->id
],

['name' => 'Revolución 1910',
'city_id' => DB::table('cities')->where('name','Pánuco')->first()->id
],

['name' => 'Revolución Mexicana',
'city_id' => DB::table('cities')->where('name','Pánuco')->first()->id
],

['name' => 'Zurita',
'city_id' => DB::table('cities')->where('name','Pánuco')->first()->id
],

['name' => 'Loma Linda',
'city_id' => DB::table('cities')->where('name','Pánuco')->first()->id
],

['name' => 'San Martin',
'city_id' => DB::table('cities')->where('name','Pánuco')->first()->id
],

['name' => 'Burócrata',
'city_id' => DB::table('cities')->where('name','Pánuco')->first()->id
],

['name' => 'Chimalpopoca',
'city_id' => DB::table('cities')->where('name','Pánuco')->first()->id
],

['name' => 'Florida',
'city_id' => DB::table('cities')->where('name','Pánuco')->first()->id
],

['name' => 'Gonzalez',
'city_id' => DB::table('cities')->where('name','Pánuco')->first()->id
],

['name' => 'Napoleón Gómez Sada',
'city_id' => DB::table('cities')->where('name','Pánuco')->first()->id
],

['name' => 'Pazzi Norte',
'city_id' => DB::table('cities')->where('name','Pánuco')->first()->id
],

['name' => 'Jalcomulco',
'city_id' => DB::table('cities')->where('name','Jalcomulco')->first()->id
],

['name' => 'Tacotalpa',
'city_id' => DB::table('cities')->where('name','Jalcomulco')->first()->id
],

['name' => 'Santa María Tatetla',
'city_id' => DB::table('cities')->where('name','Jalcomulco')->first()->id
],

['name' => 'Tlihuayan',
'city_id' => DB::table('cities')->where('name','Tlaltetela')->first()->id
],

['name' => 'Tlaltetela',
'city_id' => DB::table('cities')->where('name','Tlaltetela')->first()->id
],

['name' => 'Poxtla',
'city_id' => DB::table('cities')->where('name','Tlaltetela')->first()->id
],

['name' => 'Tenampa',
'city_id' => DB::table('cities')->where('name','Tenampa')->first()->id
],

['name' => 'El Súchil',
'city_id' => DB::table('cities')->where('name','Tenampa')->first()->id
],

['name' => 'Cosolapa',
'city_id' => DB::table('cities')->where('name','Totutla')->first()->id
],

['name' => 'Totutla',
'city_id' => DB::table('cities')->where('name','Totutla')->first()->id
],

['name' => 'Zapotitla',
'city_id' => DB::table('cities')->where('name','Totutla')->first()->id
],

['name' => 'Palmaritos',
'city_id' => DB::table('cities')->where('name','Totutla')->first()->id
],

['name' => 'Los Fresnos',
'city_id' => DB::table('cities')->where('name','Totutla')->first()->id
],

['name' => 'Los Barbechos',
'city_id' => DB::table('cities')->where('name','Totutla')->first()->id
],

['name' => 'Barrios',
'city_id' => DB::table('cities')->where('name','Totutla')->first()->id
],

['name' => 'Navatepec',
'city_id' => DB::table('cities')->where('name','Totutla')->first()->id
],

['name' => 'Tlapala',
'city_id' => DB::table('cities')->where('name','Totutla')->first()->id
],

['name' => 'Progreso',
'city_id' => DB::table('cities')->where('name','Totutla')->first()->id
],

['name' => 'Mata Obscura',
'city_id' => DB::table('cities')->where('name','Totutla')->first()->id
],

['name' => 'Tepetlapa',
'city_id' => DB::table('cities')->where('name','Totutla')->first()->id
],

['name' => 'Las Palmas',
'city_id' => DB::table('cities')->where('name','Totutla')->first()->id
],

['name' => 'Mata de Indio',
'city_id' => DB::table('cities')->where('name','Totutla')->first()->id
],

['name' => 'Sochiapa',
'city_id' => DB::table('cities')->where('name','Sochiapa')->first()->id
],

['name' => 'Victoria',
'city_id' => DB::table('cities')->where('name','Sochiapa')->first()->id
],

['name' => 'Tlacotepec de Mejia',
'city_id' => DB::table('cities')->where('name','Tlacotepec de Mejía')->first()->id
],

['name' => 'Huatusco de Chicuellar Centro',
'city_id' => DB::table('cities')->where('name','Huatusco')->first()->id
],

['name' => 'Maquina de Vega',
'city_id' => DB::table('cities')->where('name','Huatusco')->first()->id
],

['name' => 'Los Ixpepes',
'city_id' => DB::table('cities')->where('name','Huatusco')->first()->id
],

['name' => 'Agustin Chicuellar',
'city_id' => DB::table('cities')->where('name','Huatusco')->first()->id
],

['name' => 'Constitución',
'city_id' => DB::table('cities')->where('name','Huatusco')->first()->id
],

['name' => 'Emiliano Zapata',
'city_id' => DB::table('cities')->where('name','Huatusco')->first()->id
],

['name' => 'Emiliano Zapata',
'city_id' => DB::table('cities')->where('name','Huatusco')->first()->id
],

['name' => 'Los Manantiales',
'city_id' => DB::table('cities')->where('name','Huatusco')->first()->id
],

['name' => 'Reserva Territorial',
'city_id' => DB::table('cities')->where('name','Huatusco')->first()->id
],

['name' => 'Encinos',
'city_id' => DB::table('cities')->where('name','Huatusco')->first()->id
],

['name' => 'Las Trancas',
'city_id' => DB::table('cities')->where('name','Huatusco')->first()->id
],

['name' => 'Praderas de Axol',
'city_id' => DB::table('cities')->where('name','Huatusco')->first()->id
],

['name' => 'Los Carriles',
'city_id' => DB::table('cities')->where('name','Huatusco')->first()->id
],

['name' => '2 de Noviembre',
'city_id' => DB::table('cities')->where('name','Huatusco')->first()->id
],

['name' => 'Jose Maria Morelos',
'city_id' => DB::table('cities')->where('name','Huatusco')->first()->id
],

['name' => 'Sedtev',
'city_id' => DB::table('cities')->where('name','Huatusco')->first()->id
],

['name' => 'Miguel Alemán',
'city_id' => DB::table('cities')->where('name','Huatusco')->first()->id
],

['name' => 'Acatepec',
'city_id' => DB::table('cities')->where('name','Huatusco')->first()->id
],

['name' => 'El Centenario',
'city_id' => DB::table('cities')->where('name','Huatusco')->first()->id
],

['name' => 'Progreso',
'city_id' => DB::table('cities')->where('name','Huatusco')->first()->id
],

['name' => 'Setse I',
'city_id' => DB::table('cities')->where('name','Huatusco')->first()->id
],

['name' => 'Setse II',
'city_id' => DB::table('cities')->where('name','Huatusco')->first()->id
],

['name' => 'Nuevo',
'city_id' => DB::table('cities')->where('name','Huatusco')->first()->id
],

['name' => '1o de Mayo',
'city_id' => DB::table('cities')->where('name','Huatusco')->first()->id
],

['name' => 'Guillermo Lira',
'city_id' => DB::table('cities')->where('name','Huatusco')->first()->id
],

['name' => 'Capulapa',
'city_id' => DB::table('cities')->where('name','Huatusco')->first()->id
],

['name' => 'El Ocote',
'city_id' => DB::table('cities')->where('name','Huatusco')->first()->id
],

['name' => 'Alta Luz',
'city_id' => DB::table('cities')->where('name','Huatusco')->first()->id
],

['name' => 'Puentecilla',
'city_id' => DB::table('cities')->where('name','Huatusco')->first()->id
],

['name' => 'Cotecontla',
'city_id' => DB::table('cities')->where('name','Huatusco')->first()->id
],

['name' => 'Carrizal',
'city_id' => DB::table('cities')->where('name','Huatusco')->first()->id
],

['name' => 'Chavaxtla',
'city_id' => DB::table('cities')->where('name','Huatusco')->first()->id
],

['name' => 'Sabanas',
'city_id' => DB::table('cities')->where('name','Huatusco')->first()->id
],

['name' => 'Tlamatoca',
'city_id' => DB::table('cities')->where('name','Huatusco')->first()->id
],

['name' => 'Amatiopa (Mesa Limón)',
'city_id' => DB::table('cities')->where('name','Huatusco')->first()->id
],

['name' => 'Mesa del Rancho',
'city_id' => DB::table('cities')->where('name','Huatusco')->first()->id
],

['name' => 'Michapa',
'city_id' => DB::table('cities')->where('name','Huatusco')->first()->id
],

['name' => 'Ixpila',
'city_id' => DB::table('cities')->where('name','Huatusco')->first()->id
],

['name' => 'Chalchitepec',
'city_id' => DB::table('cities')->where('name','Huatusco')->first()->id
],

['name' => 'Tepampa',
'city_id' => DB::table('cities')->where('name','Huatusco')->first()->id
],

['name' => 'Adolfo Ruiz Cortines (La Pastoría)',
'city_id' => DB::table('cities')->where('name','Huatusco')->first()->id
],

['name' => 'Elotepec',
'city_id' => DB::table('cities')->where('name','Huatusco')->first()->id
],

['name' => 'Tlaxopa',
'city_id' => DB::table('cities')->where('name','Huatusco')->first()->id
],

['name' => 'Calcahualco',
'city_id' => DB::table('cities')->where('name','Calcahualco')->first()->id
],

['name' => 'Maquixtla',
'city_id' => DB::table('cities')->where('name','Calcahualco')->first()->id
],

['name' => 'Ahuihuixtla',
'city_id' => DB::table('cities')->where('name','Calcahualco')->first()->id
],

['name' => 'Xamaticpac',
'city_id' => DB::table('cities')->where('name','Calcahualco')->first()->id
],

['name' => 'San Francisco',
'city_id' => DB::table('cities')->where('name','Calcahualco')->first()->id
],

['name' => 'Itzapa',
'city_id' => DB::table('cities')->where('name','Calcahualco')->first()->id
],

['name' => 'Alpatlahuac',
'city_id' => DB::table('cities')->where('name','Alpatláhuac')->first()->id
],

['name' => 'Xicola',
'city_id' => DB::table('cities')->where('name','Alpatláhuac')->first()->id
],

['name' => 'Cocalzingo',
'city_id' => DB::table('cities')->where('name','Alpatláhuac')->first()->id
],

['name' => 'Ayahualulco',
'city_id' => DB::table('cities')->where('name','Alpatláhuac')->first()->id
],

['name' => 'Rancho Alegre',
'city_id' => DB::table('cities')->where('name','Alpatláhuac')->first()->id
],

['name' => 'Texopa',
'city_id' => DB::table('cities')->where('name','Alpatláhuac')->first()->id
],

['name' => 'Nueva Vida',
'city_id' => DB::table('cities')->where('name','Alpatláhuac')->first()->id
],

['name' => 'México',
'city_id' => DB::table('cities')->where('name','Coscomatepec')->first()->id
],

['name' => 'La Piedad',
'city_id' => DB::table('cities')->where('name','Coscomatepec')->first()->id
],

['name' => 'Los Sauces',
'city_id' => DB::table('cities')->where('name','Coscomatepec')->first()->id
],

['name' => 'Campestre',
'city_id' => DB::table('cities')->where('name','Coscomatepec')->first()->id
],

['name' => 'Xanxuanco',
'city_id' => DB::table('cities')->where('name','Coscomatepec')->first()->id
],

['name' => 'SETSE',
'city_id' => DB::table('cities')->where('name','Coscomatepec')->first()->id
],

['name' => 'SDTEV',
'city_id' => DB::table('cities')->where('name','Coscomatepec')->first()->id
],

['name' => 'Coscomatepec de Bravo Centro',
'city_id' => DB::table('cities')->where('name','Coscomatepec')->first()->id
],

['name' => 'Tenixtepec',
'city_id' => DB::table('cities')->where('name','Coscomatepec')->first()->id
],

['name' => 'Tetelzingo',
'city_id' => DB::table('cities')->where('name','Coscomatepec')->first()->id
],

['name' => 'Tetlaxco',
'city_id' => DB::table('cities')->where('name','Coscomatepec')->first()->id
],

['name' => 'Tozongo',
'city_id' => DB::table('cities')->where('name','Coscomatepec')->first()->id
],

['name' => 'Xocotla',
'city_id' => DB::table('cities')->where('name','Coscomatepec')->first()->id
],

['name' => 'Zacatla',
'city_id' => DB::table('cities')->where('name','Coscomatepec')->first()->id
],

['name' => 'Xaltenango',
'city_id' => DB::table('cities')->where('name','Coscomatepec')->first()->id
],

['name' => 'Chacalapa',
'city_id' => DB::table('cities')->where('name','Coscomatepec')->first()->id
],

['name' => 'El Cebadal',
'city_id' => DB::table('cities')->where('name','Coscomatepec')->first()->id
],

['name' => 'Tlaltengo',
'city_id' => DB::table('cities')->where('name','Coscomatepec')->first()->id
],

['name' => 'Xalatlaco',
'city_id' => DB::table('cities')->where('name','Coscomatepec')->first()->id
],

['name' => 'Duraznillo',
'city_id' => DB::table('cities')->where('name','Coscomatepec')->first()->id
],

['name' => 'Ixtepec',
'city_id' => DB::table('cities')->where('name','Coscomatepec')->first()->id
],

['name' => 'Cuchapa',
'city_id' => DB::table('cities')->where('name','Coscomatepec')->first()->id
],

['name' => 'Huilotla',
'city_id' => DB::table('cities')->where('name','Coscomatepec')->first()->id
],

['name' => 'Cuiyachapa',
'city_id' => DB::table('cities')->where('name','Coscomatepec')->first()->id
],

['name' => 'Tlamapa',
'city_id' => DB::table('cities')->where('name','Coscomatepec')->first()->id
],

['name' => 'De San Miguel',
'city_id' => DB::table('cities')->where('name','La Perla')->first()->id
],

['name' => 'Chilapa',
'city_id' => DB::table('cities')->where('name','La Perla')->first()->id
],

['name' => 'La Ciénega',
'city_id' => DB::table('cities')->where('name','La Perla')->first()->id
],

['name' => 'La Perla',
'city_id' => DB::table('cities')->where('name','La Perla')->first()->id
],

['name' => 'Tuzantla',
'city_id' => DB::table('cities')->where('name','La Perla')->first()->id
],

['name' => 'Xometla',
'city_id' => DB::table('cities')->where('name','La Perla')->first()->id
],

['name' => 'El Comal',
'city_id' => DB::table('cities')->where('name','La Perla')->first()->id
],

['name' => 'Cumbre del Español',
'city_id' => DB::table('cities')->where('name','La Perla')->first()->id
],

['name' => 'Metlac Hernández (Metlac Primero)',
'city_id' => DB::table('cities')->where('name','La Perla')->first()->id
],

['name' => 'El Zapote',
'city_id' => DB::table('cities')->where('name','La Perla')->first()->id
],

['name' => 'Los Fresnos',
'city_id' => DB::table('cities')->where('name','La Perla')->first()->id
],

['name' => 'La Cuchilla',
'city_id' => DB::table('cities')->where('name','La Perla')->first()->id
],

['name' => 'La Lagunilla',
'city_id' => DB::table('cities')->where('name','La Perla')->first()->id
],

['name' => 'Chocaman',
'city_id' => DB::table('cities')->where('name','Chocamán')->first()->id
],

['name' => 'Neria',
'city_id' => DB::table('cities')->where('name','Chocamán')->first()->id
],

['name' => 'Tetla',
'city_id' => DB::table('cities')->where('name','Chocamán')->first()->id
],

['name' => 'Xonotzintla',
'city_id' => DB::table('cities')->where('name','Chocamán')->first()->id
],

['name' => 'Antonio Luna',
'city_id' => DB::table('cities')->where('name','Chocamán')->first()->id
],

['name' => 'Cruz Blanca',
'city_id' => DB::table('cities')->where('name','Chocamán')->first()->id
],

['name' => 'Rincón Pintor',
'city_id' => DB::table('cities')->where('name','Chocamán')->first()->id
],

['name' => 'Tecama',
'city_id' => DB::table('cities')->where('name','Tomatlán')->first()->id
],

['name' => 'Tomatlan',
'city_id' => DB::table('cities')->where('name','Tomatlán')->first()->id
],

['name' => 'Rafael Guizar y Valencia',
'city_id' => DB::table('cities')->where('name','Tomatlán')->first()->id
],

['name' => 'San Isidro',
'city_id' => DB::table('cities')->where('name','Tomatlán')->first()->id
],

['name' => 'Santa Cecilia',
'city_id' => DB::table('cities')->where('name','Tomatlán')->first()->id
],

['name' => 'Cruz Verde',
'city_id' => DB::table('cities')->where('name','Tomatlán')->first()->id
],

['name' => 'San Martín',
'city_id' => DB::table('cities')->where('name','Tomatlán')->first()->id
],

['name' => 'Tlapalar',
'city_id' => DB::table('cities')->where('name','Tomatlán')->first()->id
],

['name' => 'Hermenegildo Romero',
'city_id' => DB::table('cities')->where('name','Ixhuatlán del Café')->first()->id
],

['name' => 'Los Álamos',
'city_id' => DB::table('cities')->where('name','Ixhuatlán del Café')->first()->id
],

['name' => 'Heriberto Martínez Sota',
'city_id' => DB::table('cities')->where('name','Ixhuatlán del Café')->first()->id
],

['name' => 'San Pedro',
'city_id' => DB::table('cities')->where('name','Ixhuatlán del Café')->first()->id
],

['name' => 'Texcocotitla',
'city_id' => DB::table('cities')->where('name','Ixhuatlán del Café')->first()->id
],

['name' => '3 de Mayo',
'city_id' => DB::table('cities')->where('name','Ixhuatlán del Café')->first()->id
],

['name' => '20 de Noviembre',
'city_id' => DB::table('cities')->where('name','Ixhuatlán del Café')->first()->id
],

['name' => 'Ixhuatlan Del Café',
'city_id' => DB::table('cities')->where('name','Ixhuatlán del Café')->first()->id
],

['name' => 'Ocotitlan',
'city_id' => DB::table('cities')->where('name','Ixhuatlán del Café')->first()->id
],

['name' => 'Presidio',
'city_id' => DB::table('cities')->where('name','Ixhuatlán del Café')->first()->id
],

['name' => 'San José de Los Naranjos',
'city_id' => DB::table('cities')->where('name','Ixhuatlán del Café')->first()->id
],

['name' => 'El Crucero de Zapata (El Crucero)',
'city_id' => DB::table('cities')->where('name','Ixhuatlán del Café')->first()->id
],

['name' => 'Álvaro Obregón',
'city_id' => DB::table('cities')->where('name','Ixhuatlán del Café')->first()->id
],

['name' => 'Guzmantla',
'city_id' => DB::table('cities')->where('name','Ixhuatlán del Café')->first()->id
],

['name' => 'Ixcapantla',
'city_id' => DB::table('cities')->where('name','Ixhuatlán del Café')->first()->id
],

['name' => 'Tlamatoca Potrerillo',
'city_id' => DB::table('cities')->where('name','Ixhuatlán del Café')->first()->id
],

['name' => 'Ixcatla',
'city_id' => DB::table('cities')->where('name','Ixhuatlán del Café')->first()->id
],

['name' => 'Tenejapa',
'city_id' => DB::table('cities')->where('name','Tepatlaxco')->first()->id
],

['name' => 'Tepatlaxco',
'city_id' => DB::table('cities')->where('name','Tepatlaxco')->first()->id
],

['name' => 'La Palma',
'city_id' => DB::table('cities')->where('name','Tepatlaxco')->first()->id
],

['name' => 'Comapa',
'city_id' => DB::table('cities')->where('name','Comapa')->first()->id
],

['name' => 'Boca del Monte',
'city_id' => DB::table('cities')->where('name','Comapa')->first()->id
],

['name' => 'Cerritos',
'city_id' => DB::table('cities')->where('name','Comapa')->first()->id
],

['name' => 'El Ciruelo',
'city_id' => DB::table('cities')->where('name','Comapa')->first()->id
],

['name' => 'Monte de Oro',
'city_id' => DB::table('cities')->where('name','Comapa')->first()->id
],

['name' => 'La Pitahaya',
'city_id' => DB::table('cities')->where('name','Comapa')->first()->id
],

['name' => 'Cueva Santa',
'city_id' => DB::table('cities')->where('name','Comapa')->first()->id
],

['name' => 'La Malín',
'city_id' => DB::table('cities')->where('name','Comapa')->first()->id
],

['name' => 'Manuel Gonzalez',
'city_id' => DB::table('cities')->where('name','Zentla')->first()->id
],

['name' => 'Maromilla',
'city_id' => DB::table('cities')->where('name','Zentla')->first()->id
],

['name' => 'Matlaluca',
'city_id' => DB::table('cities')->where('name','Zentla')->first()->id
],

['name' => 'Paso Tiotonche',
'city_id' => DB::table('cities')->where('name','Zentla')->first()->id
],

['name' => 'El Pochote',
'city_id' => DB::table('cities')->where('name','Zentla')->first()->id
],

['name' => 'Zocapa del Rosario',
'city_id' => DB::table('cities')->where('name','Zentla')->first()->id
],

['name' => 'Zentla',
'city_id' => DB::table('cities')->where('name','Zentla')->first()->id
],

['name' => 'El Tigre',
'city_id' => DB::table('cities')->where('name','Zentla')->first()->id
],

['name' => 'Agua Escondida (El Olvido)',
'city_id' => DB::table('cities')->where('name','Zentla')->first()->id
],

['name' => 'Corazón de Jesús (Piña)',
'city_id' => DB::table('cities')->where('name','Zentla')->first()->id
],

['name' => 'Puentecilla',
'city_id' => DB::table('cities')->where('name','Zentla')->first()->id
],

['name' => 'San Rafael Piña',
'city_id' => DB::table('cities')->where('name','Zentla')->first()->id
],

['name' => 'La Piña (Maromilla)',
'city_id' => DB::table('cities')->where('name','Zentla')->first()->id
],

['name' => 'La Represa',
'city_id' => DB::table('cities')->where('name','Zentla')->first()->id
],

['name' => 'Pueblito de Matlaluca',
'city_id' => DB::table('cities')->where('name','Zentla')->first()->id
],

['name' => 'Mafara',
'city_id' => DB::table('cities')->where('name','Zentla')->first()->id
],

['name' => 'Contadero',
'city_id' => DB::table('cities')->where('name','Zentla')->first()->id
],

['name' => 'Camarón de Tejeda',
'city_id' => DB::table('cities')->where('name','Camarón de Tejeda')->first()->id
],

['name' => 'Santehuasque',
'city_id' => DB::table('cities')->where('name','Camarón de Tejeda')->first()->id
],

['name' => 'Rincón Sabroso',
'city_id' => DB::table('cities')->where('name','Camarón de Tejeda')->first()->id
],

['name' => 'Mata de Agua',
'city_id' => DB::table('cities')->where('name','Camarón de Tejeda')->first()->id
],

['name' => 'Soledad de Doblado Centro',
'city_id' => DB::table('cities')->where('name','Soledad de Doblado')->first()->id
],

['name' => 'Ricardo Flores Magón',
'city_id' => DB::table('cities')->where('name','Soledad de Doblado')->first()->id
],

['name' => 'Palito Verde',
'city_id' => DB::table('cities')->where('name','Soledad de Doblado')->first()->id
],

['name' => 'Guadalupana',
'city_id' => DB::table('cities')->where('name','Soledad de Doblado')->first()->id
],

['name' => 'Bellavista',
'city_id' => DB::table('cities')->where('name','Soledad de Doblado')->first()->id
],

['name' => 'Nueva Esperanza',
'city_id' => DB::table('cities')->where('name','Soledad de Doblado')->first()->id
],

['name' => 'La Huerta',
'city_id' => DB::table('cities')->where('name','Soledad de Doblado')->first()->id
],

['name' => 'Jardines de la Soledad',
'city_id' => DB::table('cities')->where('name','Soledad de Doblado')->first()->id
],

['name' => 'Vista Alegre',
'city_id' => DB::table('cities')->where('name','Soledad de Doblado')->first()->id
],

['name' => 'Lagunilla',
'city_id' => DB::table('cities')->where('name','Soledad de Doblado')->first()->id
],

['name' => 'Santa Catarina',
'city_id' => DB::table('cities')->where('name','Soledad de Doblado')->first()->id
],

['name' => 'Paso Pedregoso',
'city_id' => DB::table('cities')->where('name','Soledad de Doblado')->first()->id
],

['name' => 'El Roble',
'city_id' => DB::table('cities')->where('name','Soledad de Doblado')->first()->id
],

['name' => 'Los Pinos',
'city_id' => DB::table('cities')->where('name','Soledad de Doblado')->first()->id
],

['name' => 'Sonora',
'city_id' => DB::table('cities')->where('name','Soledad de Doblado')->first()->id
],

['name' => 'El Fuerte',
'city_id' => DB::table('cities')->where('name','Soledad de Doblado')->first()->id
],

['name' => 'Oaxaca',
'city_id' => DB::table('cities')->where('name','Soledad de Doblado')->first()->id
],

['name' => 'Buenavista',
'city_id' => DB::table('cities')->where('name','Soledad de Doblado')->first()->id
],

['name' => 'Paso Borrego',
'city_id' => DB::table('cities')->where('name','Soledad de Doblado')->first()->id
],

['name' => 'Tranca Negra',
'city_id' => DB::table('cities')->where('name','Soledad de Doblado')->first()->id
],

['name' => 'La Guadalupe (Mata de Loros)',
'city_id' => DB::table('cities')->where('name','Soledad de Doblado')->first()->id
],

['name' => 'Mata Conejo',
'city_id' => DB::table('cities')->where('name','Soledad de Doblado')->first()->id
],

['name' => 'Paso María Hernández',
'city_id' => DB::table('cities')->where('name','Soledad de Doblado')->first()->id
],

['name' => 'Piedra del Indio',
'city_id' => DB::table('cities')->where('name','Soledad de Doblado')->first()->id
],

['name' => 'Santa Rosa',
'city_id' => DB::table('cities')->where('name','Soledad de Doblado')->first()->id
],

['name' => 'El Izote',
'city_id' => DB::table('cities')->where('name','Soledad de Doblado')->first()->id
],

['name' => 'Tizaltepec',
'city_id' => DB::table('cities')->where('name','Soledad de Doblado')->first()->id
],

['name' => 'Paso Lagarto',
'city_id' => DB::table('cities')->where('name','Soledad de Doblado')->first()->id
],

['name' => 'Mata Cazuela',
'city_id' => DB::table('cities')->where('name','Soledad de Doblado')->first()->id
],

['name' => 'Loma de Santa Bárbara (El Organal)',
'city_id' => DB::table('cities')->where('name','Soledad de Doblado')->first()->id
],

['name' => 'Úrsulo Galvan',
'city_id' => DB::table('cities')->where('name','Manlio Fabio Altamirano')->first()->id
],

['name' => 'Manlio Fabio Altamirano',
'city_id' => DB::table('cities')->where('name','Manlio Fabio Altamirano')->first()->id
],

['name' => 'Mata Loma',
'city_id' => DB::table('cities')->where('name','Manlio Fabio Altamirano')->first()->id
],

['name' => 'Las Flores',
'city_id' => DB::table('cities')->where('name','Manlio Fabio Altamirano')->first()->id
],

['name' => 'Toribio Gómez',
'city_id' => DB::table('cities')->where('name','Manlio Fabio Altamirano')->first()->id
],

['name' => 'Presidentes',
'city_id' => DB::table('cities')->where('name','Manlio Fabio Altamirano')->first()->id
],

['name' => 'Jardín',
'city_id' => DB::table('cities')->where('name','Manlio Fabio Altamirano')->first()->id
],

['name' => 'Portezuelos',
'city_id' => DB::table('cities')->where('name','Manlio Fabio Altamirano')->first()->id
],

['name' => 'San Juan de Estancia',
'city_id' => DB::table('cities')->where('name','Manlio Fabio Altamirano')->first()->id
],

['name' => 'Felipe Carrillo Puerto',
'city_id' => DB::table('cities')->where('name','Manlio Fabio Altamirano')->first()->id
],

['name' => 'La Venta',
'city_id' => DB::table('cities')->where('name','Manlio Fabio Altamirano')->first()->id
],

['name' => 'Izotillo',
'city_id' => DB::table('cities')->where('name','Manlio Fabio Altamirano')->first()->id
],

['name' => 'San Martín del Yegual',
'city_id' => DB::table('cities')->where('name','Manlio Fabio Altamirano')->first()->id
],

['name' => 'Gustavo Suárez (Santa Ana)',
'city_id' => DB::table('cities')->where('name','Manlio Fabio Altamirano')->first()->id
],

['name' => 'Paso Solis',
'city_id' => DB::table('cities')->where('name','Manlio Fabio Altamirano')->first()->id
],

['name' => 'El Buzón',
'city_id' => DB::table('cities')->where('name','Manlio Fabio Altamirano')->first()->id
],

['name' => 'Lomas de los Carmona',
'city_id' => DB::table('cities')->where('name','Manlio Fabio Altamirano')->first()->id
],

['name' => 'Tenenexpan',
'city_id' => DB::table('cities')->where('name','Manlio Fabio Altamirano')->first()->id
],

['name' => 'El Sauce',
'city_id' => DB::table('cities')->where('name','Manlio Fabio Altamirano')->first()->id
],

['name' => 'Plataforma',
'city_id' => DB::table('cities')->where('name','Manlio Fabio Altamirano')->first()->id
],

['name' => 'Jamapa',
'city_id' => DB::table('cities')->where('name','Jamapa')->first()->id
],

['name' => 'El Salto',
'city_id' => DB::table('cities')->where('name','Jamapa')->first()->id
],

['name' => 'El Estero Norte',
'city_id' => DB::table('cities')->where('name','Jamapa')->first()->id
],

['name' => 'El Chicle',
'city_id' => DB::table('cities')->where('name','Jamapa')->first()->id
],

['name' => 'El Rincón',
'city_id' => DB::table('cities')->where('name','Jamapa')->first()->id
],

['name' => 'Las Puertas',
'city_id' => DB::table('cities')->where('name','Jamapa')->first()->id
],

['name' => 'Tropel',
'city_id' => DB::table('cities')->where('name','Jamapa')->first()->id
],

['name' => 'Loma Grande',
'city_id' => DB::table('cities')->where('name','Jamapa')->first()->id
],

['name' => 'Loma Chica',
'city_id' => DB::table('cities')->where('name','Jamapa')->first()->id
],

['name' => 'El Zanjon',
'city_id' => DB::table('cities')->where('name','Jamapa')->first()->id
],

['name' => 'El Naranjal',
'city_id' => DB::table('cities')->where('name','Jamapa')->first()->id
],

['name' => 'La Torrecilla',
'city_id' => DB::table('cities')->where('name','Jamapa')->first()->id
],

['name' => 'La Campana',
'city_id' => DB::table('cities')->where('name','Jamapa')->first()->id
],

['name' => 'La Conchuda',
'city_id' => DB::table('cities')->where('name','Jamapa')->first()->id
],

['name' => 'El Tule',
'city_id' => DB::table('cities')->where('name','Jamapa')->first()->id
],

['name' => 'El Higueral',
'city_id' => DB::table('cities')->where('name','Jamapa')->first()->id
],

['name' => 'El Apachital',
'city_id' => DB::table('cities')->where('name','Jamapa')->first()->id
],

['name' => 'El Zacatal',
'city_id' => DB::table('cities')->where('name','Jamapa')->first()->id
],

['name' => 'Laguna del Toro',
'city_id' => DB::table('cities')->where('name','Jamapa')->first()->id
],

['name' => 'La Lajilla',
'city_id' => DB::table('cities')->where('name','Jamapa')->first()->id
],

['name' => 'La Zapilla',
'city_id' => DB::table('cities')->where('name','Jamapa')->first()->id
],

['name' => 'La Campana (Fracción)',
'city_id' => DB::table('cities')->where('name','Jamapa')->first()->id
],

['name' => 'Mesa Grande',
'city_id' => DB::table('cities')->where('name','Jamapa')->first()->id
],

['name' => 'El Aguacatal',
'city_id' => DB::table('cities')->where('name','Jamapa')->first()->id
],

['name' => 'El Yagual',
'city_id' => DB::table('cities')->where('name','Jamapa')->first()->id
],

['name' => 'La Reforma',
'city_id' => DB::table('cities')->where('name','Jamapa')->first()->id
],

['name' => 'El Manila',
'city_id' => DB::table('cities')->where('name','Jamapa')->first()->id
],

['name' => 'Los Mateo',
'city_id' => DB::table('cities')->where('name','Jamapa')->first()->id
],

['name' => 'El Embudo',
'city_id' => DB::table('cities')->where('name','Jamapa')->first()->id
],

['name' => 'Loma de Lele',
'city_id' => DB::table('cities')->where('name','Jamapa')->first()->id
],

['name' => 'Las Iguanas',
'city_id' => DB::table('cities')->where('name','Jamapa')->first()->id
],

['name' => 'Paso de la Cruz',
'city_id' => DB::table('cities')->where('name','Jamapa')->first()->id
],

['name' => 'La Brecha',
'city_id' => DB::table('cities')->where('name','Jamapa')->first()->id
],

['name' => 'El Cuajilote',
'city_id' => DB::table('cities')->where('name','Jamapa')->first()->id
],

['name' => 'La Javilla',
'city_id' => DB::table('cities')->where('name','Jamapa')->first()->id
],

['name' => 'La Chorrera',
'city_id' => DB::table('cities')->where('name','Jamapa')->first()->id
],

['name' => 'La Matamba',
'city_id' => DB::table('cities')->where('name','Jamapa')->first()->id
],

['name' => 'El Jilguero',
'city_id' => DB::table('cities')->where('name','Jamapa')->first()->id
],

['name' => 'El Piñonal',
'city_id' => DB::table('cities')->where('name','Jamapa')->first()->id
],

['name' => 'El Rancho Del Padre',
'city_id' => DB::table('cities')->where('name','Medellín de Bravo')->first()->id
],

['name' => 'Medellin de Bravo',
'city_id' => DB::table('cities')->where('name','Medellín de Bravo')->first()->id
],

['name' => 'Lázaro Cárdenas',
'city_id' => DB::table('cities')->where('name','Medellín de Bravo')->first()->id
],

['name' => 'Palmira',
'city_id' => DB::table('cities')->where('name','Medellín de Bravo')->first()->id
],

['name' => '2 Bocas',
'city_id' => DB::table('cities')->where('name','Medellín de Bravo')->first()->id
],

['name' => 'Adalberto Tejeda',
'city_id' => DB::table('cities')->where('name','Medellín de Bravo')->first()->id
],

['name' => 'Gutiérrez Rosas',
'city_id' => DB::table('cities')->where('name','Medellín de Bravo')->first()->id
],

['name' => 'Ixcoalco',
'city_id' => DB::table('cities')->where('name','Medellín de Bravo')->first()->id
],

['name' => 'Guasimal',
'city_id' => DB::table('cities')->where('name','Medellín de Bravo')->first()->id
],

['name' => 'Las Balsas',
'city_id' => DB::table('cities')->where('name','Medellín de Bravo')->first()->id
],

['name' => '20 de Noviembre',
'city_id' => DB::table('cities')->where('name','Medellín de Bravo')->first()->id
],

['name' => 'El Tejar',
'city_id' => DB::table('cities')->where('name','Medellín de Bravo')->first()->id
],

['name' => 'Benito Juárez (Marcos Vélez)',
'city_id' => DB::table('cities')->where('name','Medellín de Bravo')->first()->id
],

['name' => 'Paso Colorado',
'city_id' => DB::table('cities')->where('name','Medellín de Bravo')->first()->id
],

['name' => 'El Paraíso II',
'city_id' => DB::table('cities')->where('name','Medellín de Bravo')->first()->id
],

['name' => 'Villa de Guadalupe',
'city_id' => DB::table('cities')->where('name','Medellín de Bravo')->first()->id
],

['name' => 'Arboleda San Miguel',
'city_id' => DB::table('cities')->where('name','Medellín de Bravo')->first()->id
],

['name' => 'Del Bosque',
'city_id' => DB::table('cities')->where('name','Medellín de Bravo')->first()->id
],

['name' => 'Lagos de Puente Moreno',
'city_id' => DB::table('cities')->where('name','Medellín de Bravo')->first()->id
],

['name' => 'La Gloria',
'city_id' => DB::table('cities')->where('name','Medellín de Bravo')->first()->id
],

['name' => 'Arboleda San Ramón',
'city_id' => DB::table('cities')->where('name','Medellín de Bravo')->first()->id
],

['name' => 'Playa de Vacas',
'city_id' => DB::table('cities')->where('name','Medellín de Bravo')->first()->id
],

['name' => 'Puente Moreno',
'city_id' => DB::table('cities')->where('name','Medellín de Bravo')->first()->id
],

['name' => 'Las Palmas',
'city_id' => DB::table('cities')->where('name','Medellín de Bravo')->first()->id
],

['name' => 'Residencial Marino',
'city_id' => DB::table('cities')->where('name','Medellín de Bravo')->first()->id
],

['name' => 'Paseos del Campestre',
'city_id' => DB::table('cities')->where('name','Medellín de Bravo')->first()->id
],

['name' => 'Lomas del Porvenir',
'city_id' => DB::table('cities')->where('name','Medellín de Bravo')->first()->id
],

['name' => 'Moralillo',
'city_id' => DB::table('cities')->where('name','Medellín de Bravo')->first()->id
],

['name' => 'El Cedral',
'city_id' => DB::table('cities')->where('name','Medellín de Bravo')->first()->id
],

['name' => 'Rincón del Copite',
'city_id' => DB::table('cities')->where('name','Medellín de Bravo')->first()->id
],

['name' => 'Mata Ortiz',
'city_id' => DB::table('cities')->where('name','Medellín de Bravo')->first()->id
],

['name' => 'Mozambique',
'city_id' => DB::table('cities')->where('name','Medellín de Bravo')->first()->id
],

['name' => 'Jardines de Dos Bocas',
'city_id' => DB::table('cities')->where('name','Medellín de Bravo')->first()->id
],

['name' => 'Primero de La Palma',
'city_id' => DB::table('cities')->where('name','Medellín de Bravo')->first()->id
],

['name' => 'Paso Del Toro',
'city_id' => DB::table('cities')->where('name','Medellín de Bravo')->first()->id
],

['name' => 'José Lozano',
'city_id' => DB::table('cities')->where('name','Medellín de Bravo')->first()->id
],

['name' => 'Los Pinos',
'city_id' => DB::table('cities')->where('name','Medellín de Bravo')->first()->id
],

['name' => 'Los Robles',
'city_id' => DB::table('cities')->where('name','Medellín de Bravo')->first()->id
],

['name' => 'La Laguna y Monte del Castillo',
'city_id' => DB::table('cities')->where('name','Medellín de Bravo')->first()->id
],

['name' => 'El Copital',
'city_id' => DB::table('cities')->where('name','Medellín de Bravo')->first()->id
],

['name' => 'Potrerillo',
'city_id' => DB::table('cities')->where('name','Medellín de Bravo')->first()->id
],

['name' => 'El Terraplén',
'city_id' => DB::table('cities')->where('name','Boca del Río')->first()->id
],

['name' => 'La Pinagoga',
'city_id' => DB::table('cities')->where('name','Boca del Río')->first()->id
],

['name' => 'Quinta Al Andalus',
'city_id' => DB::table('cities')->where('name','Boca del Río')->first()->id
],

['name' => 'Cumbres Residencial',
'city_id' => DB::table('cities')->where('name','Boca del Río')->first()->id
],

['name' => 'Santa Ana Residencial',
'city_id' => DB::table('cities')->where('name','Boca del Río')->first()->id
],

['name' => 'Rivera de la Condesa',
'city_id' => DB::table('cities')->where('name','Boca del Río')->first()->id
],

['name' => 'San José Novillero',
'city_id' => DB::table('cities')->where('name','Boca del Río')->first()->id
],

['name' => 'Casa de la Condesa de Malibrán',
'city_id' => DB::table('cities')->where('name','Boca del Río')->first()->id
],

['name' => 'Paso Colorado',
'city_id' => DB::table('cities')->where('name','Boca del Río')->first()->id
],

['name' => 'Rancho JF',
'city_id' => DB::table('cities')->where('name','Boca del Río')->first()->id
],

['name' => 'Camino Real',
'city_id' => DB::table('cities')->where('name','Boca del Río')->first()->id
],

['name' => 'Boca del Río Centro',
'city_id' => DB::table('cities')->where('name','Boca del Río')->first()->id
],

['name' => 'Costa del Sol',
'city_id' => DB::table('cities')->where('name','Boca del Río')->first()->id
],

['name' => 'La Tampiquera',
'city_id' => DB::table('cities')->where('name','Boca del Río')->first()->id
],

['name' => 'Ricardo Flores Magón',
'city_id' => DB::table('cities')->where('name','Boca del Río')->first()->id
],

['name' => 'Río Jamapa',
'city_id' => DB::table('cities')->where('name','Boca del Río')->first()->id
],

['name' => 'El Estero',
'city_id' => DB::table('cities')->where('name','Boca del Río')->first()->id
],

['name' => 'Pescadores',
'city_id' => DB::table('cities')->where('name','Boca del Río')->first()->id
],

['name' => 'Hicacal',
'city_id' => DB::table('cities')->where('name','Boca del Río')->first()->id
],

['name' => 'ISSSFAM Militar',
'city_id' => DB::table('cities')->where('name','Boca del Río')->first()->id
],

['name' => 'Hicacal II',
'city_id' => DB::table('cities')->where('name','Boca del Río')->first()->id
],

['name' => 'El Dorado',
'city_id' => DB::table('cities')->where('name','Boca del Río')->first()->id
],

['name' => 'Graciano Sánchez Romo',
'city_id' => DB::table('cities')->where('name','Boca del Río')->first()->id
],

['name' => 'El Morro las Colonias',
'city_id' => DB::table('cities')->where('name','Boca del Río')->first()->id
],

['name' => 'San José',
'city_id' => DB::table('cities')->where('name','Boca del Río')->first()->id
],

['name' => 'INFONAVIT el Morro',
'city_id' => DB::table('cities')->where('name','Boca del Río')->first()->id
],

['name' => 'Gardenias',
'city_id' => DB::table('cities')->where('name','Boca del Río')->first()->id
],

['name' => 'Lomas Del Mar',
'city_id' => DB::table('cities')->where('name','Boca del Río')->first()->id
],

['name' => 'Los Delfines',
'city_id' => DB::table('cities')->where('name','Boca del Río')->first()->id
],

['name' => 'Playa Hermosa',
'city_id' => DB::table('cities')->where('name','Boca del Río')->first()->id
],

['name' => 'Los Arcos',
'city_id' => DB::table('cities')->where('name','Boca del Río')->first()->id
],

['name' => 'Cordilleras',
'city_id' => DB::table('cities')->where('name','Boca del Río')->first()->id
],

['name' => 'Residencial la Joya',
'city_id' => DB::table('cities')->where('name','Boca del Río')->first()->id
],

['name' => 'Costa Verde',
'city_id' => DB::table('cities')->where('name','Boca del Río')->first()->id
],

['name' => 'Estatuto Juridico',
'city_id' => DB::table('cities')->where('name','Boca del Río')->first()->id
],

['name' => 'Fovissste',
'city_id' => DB::table('cities')->where('name','Boca del Río')->first()->id
],

['name' => 'Galaxia',
'city_id' => DB::table('cities')->where('name','Boca del Río')->first()->id
],

['name' => 'Jardines de Virginia',
'city_id' => DB::table('cities')->where('name','Boca del Río')->first()->id
],

['name' => 'Virginia',
'city_id' => DB::table('cities')->where('name','Boca del Río')->first()->id
],

['name' => 'SUTSEM',
'city_id' => DB::table('cities')->where('name','Boca del Río')->first()->id
],

['name' => 'Bonos Del Ahorro Nacional',
'city_id' => DB::table('cities')->where('name','Boca del Río')->first()->id
],

['name' => 'Linda Vista',
'city_id' => DB::table('cities')->where('name','Boca del Río')->first()->id
],

['name' => 'Marco Antonio Muñoz',
'city_id' => DB::table('cities')->where('name','Boca del Río')->first()->id
],

['name' => 'Remes',
'city_id' => DB::table('cities')->where('name','Boca del Río')->first()->id
],

['name' => 'Nueva Era',
'city_id' => DB::table('cities')->where('name','Boca del Río')->first()->id
],

['name' => 'Rigo',
'city_id' => DB::table('cities')->where('name','Boca del Río')->first()->id
],

['name' => 'Casas Tamsa',
'city_id' => DB::table('cities')->where('name','Boca del Río')->first()->id
],

['name' => 'Vista Alegre',
'city_id' => DB::table('cities')->where('name','Boca del Río')->first()->id
],

['name' => 'Hípico',
'city_id' => DB::table('cities')->where('name','Boca del Río')->first()->id
],

['name' => 'Manlio Fabio Altamirano (Lecheros)',
'city_id' => DB::table('cities')->where('name','Boca del Río')->first()->id
],

['name' => 'Manuel Nieto',
'city_id' => DB::table('cities')->where('name','Boca del Río')->first()->id
],

['name' => 'Revolución',
'city_id' => DB::table('cities')->where('name','Boca del Río')->first()->id
],

['name' => 'TAMSA',
'city_id' => DB::table('cities')->where('name','Boca del Río')->first()->id
],

['name' => 'Virginia Cordero de Murillo Vidal',
'city_id' => DB::table('cities')->where('name','Boca del Río')->first()->id
],

['name' => 'Cubika',
'city_id' => DB::table('cities')->where('name','Boca del Río')->first()->id
],

['name' => 'El Manantial',
'city_id' => DB::table('cities')->where('name','Boca del Río')->first()->id
],

['name' => 'Miguel Alemán Valdés',
'city_id' => DB::table('cities')->where('name','Boca del Río')->first()->id
],

['name' => '8 de Marzo',
'city_id' => DB::table('cities')->where('name','Boca del Río')->first()->id
],

['name' => 'Plan de Ayala',
'city_id' => DB::table('cities')->where('name','Boca del Río')->first()->id
],

['name' => 'Fernando Gutiérrez Barrios',
'city_id' => DB::table('cities')->where('name','Boca del Río')->first()->id
],

['name' => 'Guillermo López Portillo',
'city_id' => DB::table('cities')->where('name','Boca del Río')->first()->id
],

['name' => 'José López Portillo',
'city_id' => DB::table('cities')->where('name','Boca del Río')->first()->id
],

['name' => 'INFONAVIT las Vegas',
'city_id' => DB::table('cities')->where('name','Boca del Río')->first()->id
],

['name' => 'Ejido Primero de Mayo Norte',
'city_id' => DB::table('cities')->where('name','Boca del Río')->first()->id
],

['name' => 'Ejido Primero de Mayo Sur',
'city_id' => DB::table('cities')->where('name','Boca del Río')->first()->id
],

['name' => 'Venustiano Carranza',
'city_id' => DB::table('cities')->where('name','Boca del Río')->first()->id
],

['name' => 'Ugocep',
'city_id' => DB::table('cities')->where('name','Boca del Río')->first()->id
],

['name' => 'Dante Delgado Ranauro',
'city_id' => DB::table('cities')->where('name','Boca del Río')->first()->id
],

['name' => 'Las Vegas II',
'city_id' => DB::table('cities')->where('name','Boca del Río')->first()->id
],

['name' => '9 de Marzo',
'city_id' => DB::table('cities')->where('name','Boca del Río')->first()->id
],

['name' => 'Venustiano Carranza 3a Sección',
'city_id' => DB::table('cities')->where('name','Boca del Río')->first()->id
],

['name' => 'Miguel Alemán II Ampliación',
'city_id' => DB::table('cities')->where('name','Boca del Río')->first()->id
],

['name' => 'Gobierno Estatal',
'city_id' => DB::table('cities')->where('name','Boca del Río')->first()->id
],

['name' => 'Militar',
'city_id' => DB::table('cities')->where('name','Boca del Río')->first()->id
],

['name' => 'Joyas de Mocambo (Granjas los Pinos)',
'city_id' => DB::table('cities')->where('name','Boca del Río')->first()->id
],

['name' => 'Adalberto Tejeda',
'city_id' => DB::table('cities')->where('name','Boca del Río')->first()->id
],

['name' => 'Benito Juárez',
'city_id' => DB::table('cities')->where('name','Boca del Río')->first()->id
],

['name' => 'La Cuchilla',
'city_id' => DB::table('cities')->where('name','Boca del Río')->first()->id
],

['name' => 'Lázaro Cárdenas',
'city_id' => DB::table('cities')->where('name','Boca del Río')->first()->id
],

['name' => 'Luis Echeverria Álvarez',
'city_id' => DB::table('cities')->where('name','Boca del Río')->first()->id
],

['name' => 'Obrera',
'city_id' => DB::table('cities')->where('name','Boca del Río')->first()->id
],

['name' => 'Villa Rica',
'city_id' => DB::table('cities')->where('name','Boca del Río')->first()->id
],

['name' => 'Ylang Ylang',
'city_id' => DB::table('cities')->where('name','Boca del Río')->first()->id
],

['name' => 'Villa Rica',
'city_id' => DB::table('cities')->where('name','Boca del Río')->first()->id
],

['name' => 'Playa de Oro Mocambo',
'city_id' => DB::table('cities')->where('name','Boca del Río')->first()->id
],

['name' => 'Las Américas',
'city_id' => DB::table('cities')->where('name','Boca del Río')->first()->id
],

['name' => 'Costa de Oro',
'city_id' => DB::table('cities')->where('name','Boca del Río')->first()->id
],

['name' => 'Jardines de Mocambo',
'city_id' => DB::table('cities')->where('name','Boca del Río')->first()->id
],

['name' => 'Petrolera (Heriberto Kehoe)',
'city_id' => DB::table('cities')->where('name','Boca del Río')->first()->id
],

['name' => 'De las Américas',
'city_id' => DB::table('cities')->where('name','Boca del Río')->first()->id
],

['name' => 'Orizaba Centro',
'city_id' => DB::table('cities')->where('name','Orizaba')->first()->id
],

['name' => 'Aulicaba',
'city_id' => DB::table('cities')->where('name','Orizaba')->first()->id
],

['name' => 'Los Maestros',
'city_id' => DB::table('cities')->where('name','Orizaba')->first()->id
],

['name' => 'Abelardo L Rodriguez',
'city_id' => DB::table('cities')->where('name','Orizaba')->first()->id
],

['name' => 'Cerritos Norte',
'city_id' => DB::table('cities')->where('name','Orizaba')->first()->id
],

['name' => 'INDECO',
'city_id' => DB::table('cities')->where('name','Orizaba')->first()->id
],

['name' => 'Salvador Gonzalo Garcia',
'city_id' => DB::table('cities')->where('name','Orizaba')->first()->id
],

['name' => 'San Juan Bautista',
'city_id' => DB::table('cities')->where('name','Orizaba')->first()->id
],

['name' => '10 de Abril UNE',
'city_id' => DB::table('cities')->where('name','Orizaba')->first()->id
],

['name' => 'Residencial Los Naranjos',
'city_id' => DB::table('cities')->where('name','Orizaba')->first()->id
],

['name' => 'Instituto de Pensiones Del Estado',
'city_id' => DB::table('cities')->where('name','Orizaba')->first()->id
],

['name' => 'Unión y Progreso',
'city_id' => DB::table('cities')->where('name','Orizaba')->first()->id
],

['name' => 'Dante Delgado',
'city_id' => DB::table('cities')->where('name','Orizaba')->first()->id
],

['name' => 'Solidaridad Campesina',
'city_id' => DB::table('cities')->where('name','Orizaba')->first()->id
],

['name' => 'Puerta Chica',
'city_id' => DB::table('cities')->where('name','Orizaba')->first()->id
],

['name' => 'Luis Donaldo Colosio',
'city_id' => DB::table('cities')->where('name','Orizaba')->first()->id
],

['name' => 'San Carlos',
'city_id' => DB::table('cities')->where('name','Orizaba')->first()->id
],

['name' => 'Arbol de Oro',
'city_id' => DB::table('cities')->where('name','Orizaba')->first()->id
],

['name' => 'Los Reyes',
'city_id' => DB::table('cities')->where('name','Orizaba')->first()->id
],

['name' => 'San Miguel Tlachichilco',
'city_id' => DB::table('cities')->where('name','Orizaba')->first()->id
],

['name' => 'Chicola II',
'city_id' => DB::table('cities')->where('name','Orizaba')->first()->id
],

['name' => 'Rancho el Cristo',
'city_id' => DB::table('cities')->where('name','Orizaba')->first()->id
],

['name' => 'Las Sirenas',
'city_id' => DB::table('cities')->where('name','Orizaba')->first()->id
],

['name' => 'Los Olivos',
'city_id' => DB::table('cities')->where('name','Orizaba')->first()->id
],

['name' => 'Emiliano Zapata Norte',
'city_id' => DB::table('cities')->where('name','Orizaba')->first()->id
],

['name' => 'Emiliano Zapata Sur',
'city_id' => DB::table('cities')->where('name','Orizaba')->first()->id
],

['name' => 'Empleados Moctezuma',
'city_id' => DB::table('cities')->where('name','Orizaba')->first()->id
],

['name' => 'San Carlos',
'city_id' => DB::table('cities')->where('name','Orizaba')->first()->id
],

['name' => 'Santa Cruz',
'city_id' => DB::table('cities')->where('name','Orizaba')->first()->id
],

['name' => 'Espinalillo',
'city_id' => DB::table('cities')->where('name','Orizaba')->first()->id
],

['name' => 'Adolfo Lopez Mateos',
'city_id' => DB::table('cities')->where('name','Orizaba')->first()->id
],

['name' => 'El Edén',
'city_id' => DB::table('cities')->where('name','Orizaba')->first()->id
],

['name' => 'Galán',
'city_id' => DB::table('cities')->where('name','Orizaba')->first()->id
],

['name' => '10 de Mayo',
'city_id' => DB::table('cities')->where('name','Orizaba')->first()->id
],

['name' => '27 de Mayo',
'city_id' => DB::table('cities')->where('name','Orizaba')->first()->id
],

['name' => 'Pluviosilla',
'city_id' => DB::table('cities')->where('name','Orizaba')->first()->id
],

['name' => 'Lago del Ángel Residencial',
'city_id' => DB::table('cities')->where('name','Orizaba')->first()->id
],

['name' => 'FOVISSSTE II',
'city_id' => DB::table('cities')->where('name','Orizaba')->first()->id
],

['name' => 'El Encinal',
'city_id' => DB::table('cities')->where('name','Orizaba')->first()->id
],

['name' => 'Terminal',
'city_id' => DB::table('cities')->where('name','Orizaba')->first()->id
],

['name' => 'El Espinal Bajo',
'city_id' => DB::table('cities')->where('name','Orizaba')->first()->id
],

['name' => 'Daniel Sierra',
'city_id' => DB::table('cities')->where('name','Orizaba')->first()->id
],

['name' => 'Quetzalcoatl',
'city_id' => DB::table('cities')->where('name','Orizaba')->first()->id
],

['name' => 'El Espinal',
'city_id' => DB::table('cities')->where('name','Orizaba')->first()->id
],

['name' => 'FOVISSSTE I',
'city_id' => DB::table('cities')->where('name','Orizaba')->first()->id
],

['name' => 'SOAICC Solidaridad',
'city_id' => DB::table('cities')->where('name','Orizaba')->first()->id
],

['name' => 'San José Albergue',
'city_id' => DB::table('cities')->where('name','Orizaba')->first()->id
],

['name' => 'Lomas de San Alejandro',
'city_id' => DB::table('cities')->where('name','Orizaba')->first()->id
],

['name' => 'Las Haciendas',
'city_id' => DB::table('cities')->where('name','Orizaba')->first()->id
],

['name' => 'La Joya',
'city_id' => DB::table('cities')->where('name','Orizaba')->first()->id
],

['name' => '15 de Agosto',
'city_id' => DB::table('cities')->where('name','Orizaba')->first()->id
],

['name' => 'Jardín I',
'city_id' => DB::table('cities')->where('name','Orizaba')->first()->id
],

['name' => 'Jardín II',
'city_id' => DB::table('cities')->where('name','Orizaba')->first()->id
],

['name' => 'Tecnológica',
'city_id' => DB::table('cities')->where('name','Orizaba')->first()->id
],

['name' => 'Jazmín',
'city_id' => DB::table('cities')->where('name','Orizaba')->first()->id
],

['name' => 'Luis Donaldo Colosio',
'city_id' => DB::table('cities')->where('name','Orizaba')->first()->id
],

['name' => 'San José',
'city_id' => DB::table('cities')->where('name','Orizaba')->first()->id
],

['name' => 'Lomas de San Manuel',
'city_id' => DB::table('cities')->where('name','Orizaba')->first()->id
],

['name' => 'Aries',
'city_id' => DB::table('cities')->where('name','Orizaba')->first()->id
],

['name' => 'C.R.O.C.',
'city_id' => DB::table('cities')->where('name','Orizaba')->first()->id
],

['name' => 'C.R.O.M.',
'city_id' => DB::table('cities')->where('name','Orizaba')->first()->id
],

['name' => 'El Espinal II',
'city_id' => DB::table('cities')->where('name','Orizaba')->first()->id
],

['name' => 'Santa Ana I y II',
'city_id' => DB::table('cities')->where('name','Orizaba')->first()->id
],

['name' => 'Tulipanes I',
'city_id' => DB::table('cities')->where('name','Orizaba')->first()->id
],

['name' => 'Tulipanes II',
'city_id' => DB::table('cities')->where('name','Orizaba')->first()->id
],

['name' => 'La Cantera',
'city_id' => DB::table('cities')->where('name','Orizaba')->first()->id
],

['name' => 'El Trébol',
'city_id' => DB::table('cities')->where('name','Orizaba')->first()->id
],

['name' => 'Barrio Nuevo',
'city_id' => DB::table('cities')->where('name','Orizaba')->first()->id
],

['name' => 'Miguel Alemán',
'city_id' => DB::table('cities')->where('name','Orizaba')->first()->id
],

['name' => 'Rafael Alvarado',
'city_id' => DB::table('cities')->where('name','Orizaba')->first()->id
],

['name' => 'CANACINTRA',
'city_id' => DB::table('cities')->where('name','Orizaba')->first()->id
],

['name' => 'El Yute II',
'city_id' => DB::table('cities')->where('name','Orizaba')->first()->id
],

['name' => 'Arboledas',
'city_id' => DB::table('cities')->where('name','Orizaba')->first()->id
],

['name' => 'Maraflores',
'city_id' => DB::table('cities')->where('name','Orizaba')->first()->id
],

['name' => 'Omiquila',
'city_id' => DB::table('cities')->where('name','Orizaba')->first()->id
],

['name' => 'Agrícola Moctezuma',
'city_id' => DB::table('cities')->where('name','Orizaba')->first()->id
],

['name' => 'Electricistas',
'city_id' => DB::table('cities')->where('name','Orizaba')->first()->id
],

['name' => 'Jardín',
'city_id' => DB::table('cities')->where('name','Orizaba')->first()->id
],

['name' => 'Ojo de Agua',
'city_id' => DB::table('cities')->where('name','Orizaba')->first()->id
],

['name' => 'Fidel Velázquez',
'city_id' => DB::table('cities')->where('name','Orizaba')->first()->id
],

['name' => 'Cuauhtémoc',
'city_id' => DB::table('cities')->where('name','Orizaba')->first()->id
],

['name' => 'Del Maestro',
'city_id' => DB::table('cities')->where('name','Orizaba')->first()->id
],

['name' => 'Las Alamedas',
'city_id' => DB::table('cities')->where('name','Orizaba')->first()->id
],

['name' => 'Lourdes',
'city_id' => DB::table('cities')->where('name','Orizaba')->first()->id
],

['name' => 'Santa Maria Tlachichilco',
'city_id' => DB::table('cities')->where('name','Orizaba')->first()->id
],

['name' => 'Unión Obrera',
'city_id' => DB::table('cities')->where('name','Orizaba')->first()->id
],

['name' => 'San Juan Bosco',
'city_id' => DB::table('cities')->where('name','Orizaba')->first()->id
],

['name' => 'Cerritos Sur',
'city_id' => DB::table('cities')->where('name','Orizaba')->first()->id
],

['name' => 'Emilio Suberbie',
'city_id' => DB::table('cities')->where('name','Orizaba')->first()->id
],

['name' => 'Miguel Hidalgo',
'city_id' => DB::table('cities')->where('name','Orizaba')->first()->id
],

['name' => 'Santa María de Guadalupe',
'city_id' => DB::table('cities')->where('name','Orizaba')->first()->id
],

['name' => 'Las Margaritas',
'city_id' => DB::table('cities')->where('name','Orizaba')->first()->id
],

['name' => 'Gabilondo Soler',
'city_id' => DB::table('cities')->where('name','Orizaba')->first()->id
],

['name' => 'Mier y Pesado',
'city_id' => DB::table('cities')->where('name','Orizaba')->first()->id
],

['name' => 'Cuartos del Yute',
'city_id' => DB::table('cities')->where('name','Orizaba')->first()->id
],

['name' => 'Cuartos de Quintana',
'city_id' => DB::table('cities')->where('name','Orizaba')->first()->id
],

['name' => 'Escandón',
'city_id' => DB::table('cities')->where('name','Orizaba')->first()->id
],

['name' => 'Del Camino Real',
'city_id' => DB::table('cities')->where('name','Orizaba')->first()->id
],

['name' => 'Marco Antonio Muñoz',
'city_id' => DB::table('cities')->where('name','Orizaba')->first()->id
],

['name' => 'Carlos Marx',
'city_id' => DB::table('cities')->where('name','Orizaba')->first()->id
],

['name' => 'Cidosa',
'city_id' => DB::table('cities')->where('name','Orizaba')->first()->id
],

['name' => 'Guadalupe Victoria',
'city_id' => DB::table('cities')->where('name','Orizaba')->first()->id
],

['name' => 'Francisco Verazas',
'city_id' => DB::table('cities')->where('name','Orizaba')->first()->id
],

['name' => 'El Ranchito',
'city_id' => DB::table('cities')->where('name','Orizaba')->first()->id
],

['name' => 'Agrícola Librado Rivera',
'city_id' => DB::table('cities')->where('name','Orizaba')->first()->id
],

['name' => 'Urbana Librado Rivera',
'city_id' => DB::table('cities')->where('name','Orizaba')->first()->id
],

['name' => 'Ignacio de La LLave',
'city_id' => DB::table('cities')->where('name','Orizaba')->first()->id
],

['name' => 'Obreros de la Moctezuma',
'city_id' => DB::table('cities')->where('name','Orizaba')->first()->id
],

['name' => 'Heriberto Jara',
'city_id' => DB::table('cities')->where('name','Orizaba')->first()->id
],

['name' => 'Cocolapan',
'city_id' => DB::table('cities')->where('name','Orizaba')->first()->id
],

['name' => 'Las Lomas',
'city_id' => DB::table('cities')->where('name','Orizaba')->first()->id
],

['name' => 'Molino',
'city_id' => DB::table('cities')->where('name','Orizaba')->first()->id
],

['name' => 'Villas del Carmen',
'city_id' => DB::table('cities')->where('name','Orizaba')->first()->id
],

['name' => 'Benito Juárez',
'city_id' => DB::table('cities')->where('name','Orizaba')->first()->id
],

['name' => 'Francisco Ferrer Guardia',
'city_id' => DB::table('cities')->where('name','Orizaba')->first()->id
],

['name' => 'Terrícola',
'city_id' => DB::table('cities')->where('name','Orizaba')->first()->id
],

['name' => 'Rincón Chico',
'city_id' => DB::table('cities')->where('name','Orizaba')->first()->id
],

['name' => 'Ahuilizapan',
'city_id' => DB::table('cities')->where('name','Orizaba')->first()->id
],

['name' => 'Las Carmelitas',
'city_id' => DB::table('cities')->where('name','Orizaba')->first()->id
],

['name' => 'San Francisco',
'city_id' => DB::table('cities')->where('name','Orizaba')->first()->id
],

['name' => 'Santa Elena',
'city_id' => DB::table('cities')->where('name','Orizaba')->first()->id
],

['name' => 'Vía Toscana Residencial',
'city_id' => DB::table('cities')->where('name','Orizaba')->first()->id
],

['name' => 'Libertad Agrarista',
'city_id' => DB::table('cities')->where('name','Orizaba')->first()->id
],

['name' => 'De los Taxistas II',
'city_id' => DB::table('cities')->where('name','Orizaba')->first()->id
],

['name' => 'Villas Orizaba Residencial',
'city_id' => DB::table('cities')->where('name','Orizaba')->first()->id
],

['name' => 'Paraíso',
'city_id' => DB::table('cities')->where('name','Orizaba')->first()->id
],

['name' => 'Rincón Grande',
'city_id' => DB::table('cities')->where('name','Orizaba')->first()->id
],

['name' => 'San Francisco',
'city_id' => DB::table('cities')->where('name','Orizaba')->first()->id
],

['name' => 'De los Taxistas I',
'city_id' => DB::table('cities')->where('name','Orizaba')->first()->id
],

['name' => 'Solidaridad I SOAICC',
'city_id' => DB::table('cities')->where('name','Orizaba')->first()->id
],

['name' => 'Carlos Roberto Smicht',
'city_id' => DB::table('cities')->where('name','Orizaba')->first()->id
],

['name' => 'Dante Delgado',
'city_id' => DB::table('cities')->where('name','Orizaba')->first()->id
],

['name' => 'Moctezuma',
'city_id' => DB::table('cities')->where('name','Orizaba')->first()->id
],

['name' => 'Real de Palmeras',
'city_id' => DB::table('cities')->where('name','Orizaba')->first()->id
],

['name' => 'Pradera',
'city_id' => DB::table('cities')->where('name','Orizaba')->first()->id
],

['name' => 'Las Palmeras',
'city_id' => DB::table('cities')->where('name','Orizaba')->first()->id
],

['name' => 'Las Palmeras II',
'city_id' => DB::table('cities')->where('name','Orizaba')->first()->id
],

['name' => 'Santa Gertrudis',
'city_id' => DB::table('cities')->where('name','Orizaba')->first()->id
],

['name' => 'Jalapilla',
'city_id' => DB::table('cities')->where('name','Rafael Delgado')->first()->id
],

['name' => 'Rafael Delgado',
'city_id' => DB::table('cities')->where('name','Rafael Delgado')->first()->id
],

['name' => 'Tzoncolco',
'city_id' => DB::table('cities')->where('name','Rafael Delgado')->first()->id
],

['name' => 'Omiquila',
'city_id' => DB::table('cities')->where('name','Rafael Delgado')->first()->id
],

['name' => 'Hacienda de Jalapilla',
'city_id' => DB::table('cities')->where('name','Rafael Delgado')->first()->id
],

['name' => 'Lomas de San Sergio',
'city_id' => DB::table('cities')->where('name','Mariano Escobedo')->first()->id
],

['name' => 'León',
'city_id' => DB::table('cities')->where('name','Mariano Escobedo')->first()->id
],

['name' => 'Puerta Grande',
'city_id' => DB::table('cities')->where('name','Mariano Escobedo')->first()->id
],

['name' => 'Chicola',
'city_id' => DB::table('cities')->where('name','Mariano Escobedo')->first()->id
],

['name' => 'Mariano Escobedo',
'city_id' => DB::table('cities')->where('name','Mariano Escobedo')->first()->id
],

['name' => 'Palmira',
'city_id' => DB::table('cities')->where('name','Mariano Escobedo')->first()->id
],

['name' => 'Puerta del Sol',
'city_id' => DB::table('cities')->where('name','Mariano Escobedo')->first()->id
],

['name' => '21 de Octubre',
'city_id' => DB::table('cities')->where('name','Mariano Escobedo')->first()->id
],

['name' => 'Valle de Orizaba',
'city_id' => DB::table('cities')->where('name','Mariano Escobedo')->first()->id
],

['name' => 'Gloria Escondida',
'city_id' => DB::table('cities')->where('name','Mariano Escobedo')->first()->id
],

['name' => 'La Loma',
'city_id' => DB::table('cities')->where('name','Mariano Escobedo')->first()->id
],

['name' => 'El Recreo',
'city_id' => DB::table('cities')->where('name','Mariano Escobedo')->first()->id
],

['name' => 'Las Fuentes',
'city_id' => DB::table('cities')->where('name','Mariano Escobedo')->first()->id
],

['name' => 'El Mirador',
'city_id' => DB::table('cities')->where('name','Mariano Escobedo')->first()->id
],

['name' => 'Texmalaca',
'city_id' => DB::table('cities')->where('name','Mariano Escobedo')->first()->id
],

['name' => 'Texmola',
'city_id' => DB::table('cities')->where('name','Mariano Escobedo')->first()->id
],

['name' => 'Las Camelias',
'city_id' => DB::table('cities')->where('name','Mariano Escobedo')->first()->id
],

['name' => 'Ocoxotla',
'city_id' => DB::table('cities')->where('name','Mariano Escobedo')->first()->id
],

['name' => 'Los Naranjos',
'city_id' => DB::table('cities')->where('name','Mariano Escobedo')->first()->id
],

['name' => 'Temaxcaltitla',
'city_id' => DB::table('cities')->where('name','Mariano Escobedo')->first()->id
],

['name' => 'San Baltazar',
'city_id' => DB::table('cities')->where('name','Mariano Escobedo')->first()->id
],

['name' => 'San Isidro el Berro',
'city_id' => DB::table('cities')->where('name','Mariano Escobedo')->first()->id
],

['name' => 'Villahermosa',
'city_id' => DB::table('cities')->where('name','Mariano Escobedo')->first()->id
],

['name' => 'Loma Grande',
'city_id' => DB::table('cities')->where('name','Mariano Escobedo')->first()->id
],

['name' => 'Los Reyes',
'city_id' => DB::table('cities')->where('name','Ixhuatlancillo')->first()->id
],

['name' => 'México',
'city_id' => DB::table('cities')->where('name','Ixhuatlancillo')->first()->id
],

['name' => 'El Jardín',
'city_id' => DB::table('cities')->where('name','Ixhuatlancillo')->first()->id
],

['name' => 'Los Olivos',
'city_id' => DB::table('cities')->where('name','Ixhuatlancillo')->first()->id
],

['name' => 'Ixhuatlancillo',
'city_id' => DB::table('cities')->where('name','Ixhuatlancillo')->first()->id
],

['name' => 'El Cristo',
'city_id' => DB::table('cities')->where('name','Ixhuatlancillo')->first()->id
],

['name' => 'Dante Delgado',
'city_id' => DB::table('cities')->where('name','Ixhuatlancillo')->first()->id
],

['name' => 'Los Álamos',
'city_id' => DB::table('cities')->where('name','Ixhuatlancillo')->first()->id
],

['name' => 'Ixhuatlancillo Centro',
'city_id' => DB::table('cities')->where('name','Ixhuatlancillo')->first()->id
],

['name' => 'Valle Campestre',
'city_id' => DB::table('cities')->where('name','Ixhuatlancillo')->first()->id
],

['name' => 'Valle Dorado',
'city_id' => DB::table('cities')->where('name','Ixhuatlancillo')->first()->id
],

['name' => 'Rancho de Pala',
'city_id' => DB::table('cities')->where('name','Ixhuatlancillo')->first()->id
],

['name' => 'Magnolias',
'city_id' => DB::table('cities')->where('name','Ixhuatlancillo')->first()->id
],

['name' => 'El Mirador',
'city_id' => DB::table('cities')->where('name','Ixhuatlancillo')->first()->id
],

['name' => 'Torrecillas',
'city_id' => DB::table('cities')->where('name','Ixhuatlancillo')->first()->id
],

['name' => 'Atzacan',
'city_id' => DB::table('cities')->where('name','Atzacan')->first()->id
],

['name' => 'La Sidra',
'city_id' => DB::table('cities')->where('name','Atzacan')->first()->id
],

['name' => '2 Ríos',
'city_id' => DB::table('cities')->where('name','Atzacan')->first()->id
],

['name' => 'Matlalapa',
'city_id' => DB::table('cities')->where('name','Atzacan')->first()->id
],

['name' => 'Rincón Grande',
'city_id' => DB::table('cities')->where('name','Atzacan')->first()->id
],

['name' => 'Contla',
'city_id' => DB::table('cities')->where('name','Atzacan')->first()->id
],

['name' => 'Revolución',
'city_id' => DB::table('cities')->where('name','Atzacan')->first()->id
],

['name' => 'Potrerillo',
'city_id' => DB::table('cities')->where('name','Ixtaczoquitlán')->first()->id
],

['name' => 'Escamela',
'city_id' => DB::table('cities')->where('name','Ixtaczoquitlán')->first()->id
],

['name' => 'Antonio Luna Andrade',
'city_id' => DB::table('cities')->where('name','Ixtaczoquitlán')->first()->id
],

['name' => 'Moyoapan',
'city_id' => DB::table('cities')->where('name','Ixtaczoquitlán')->first()->id
],

['name' => 'Chiltepec',
'city_id' => DB::table('cities')->where('name','Ixtaczoquitlán')->first()->id
],

['name' => 'Sumidero',
'city_id' => DB::table('cities')->where('name','Ixtaczoquitlán')->first()->id
],

['name' => 'Buenavista',
'city_id' => DB::table('cities')->where('name','Ixtaczoquitlán')->first()->id
],

['name' => 'Huelicapan',
'city_id' => DB::table('cities')->where('name','Ixtaczoquitlán')->first()->id
],

['name' => 'Tuxpanguillo',
'city_id' => DB::table('cities')->where('name','Ixtaczoquitlán')->first()->id
],

['name' => 'Zacatla',
'city_id' => DB::table('cities')->where('name','Ixtaczoquitlán')->first()->id
],

['name' => 'Rincón de Maravillas',
'city_id' => DB::table('cities')->where('name','Ixtaczoquitlán')->first()->id
],

['name' => 'Cuautlapan',
'city_id' => DB::table('cities')->where('name','Ixtaczoquitlán')->first()->id
],

['name' => 'Barrio San Isidro',
'city_id' => DB::table('cities')->where('name','Ixtaczoquitlán')->first()->id
],

['name' => 'Barrientos',
'city_id' => DB::table('cities')->where('name','Ixtaczoquitlán')->first()->id
],

['name' => 'Campo Grande',
'city_id' => DB::table('cities')->where('name','Ixtaczoquitlán')->first()->id
],

['name' => 'Ex-Hacienda Tuxpango',
'city_id' => DB::table('cities')->where('name','Ixtaczoquitlán')->first()->id
],

['name' => 'Capoluca',
'city_id' => DB::table('cities')->where('name','Ixtaczoquitlán')->first()->id
],

['name' => 'Rincón Grande',
'city_id' => DB::table('cities')->where('name','Ixtaczoquitlán')->first()->id
],

['name' => 'El Mirador',
'city_id' => DB::table('cities')->where('name','Ixtaczoquitlán')->first()->id
],

['name' => 'Ixtaczoquitlan Centro',
'city_id' => DB::table('cities')->where('name','Ixtaczoquitlán')->first()->id
],

['name' => 'Zoquitlán Viejo',
'city_id' => DB::table('cities')->where('name','Ixtaczoquitlán')->first()->id
],

['name' => 'La Luz',
'city_id' => DB::table('cities')->where('name','Ixtaczoquitlán')->first()->id
],

['name' => 'El Calvario',
'city_id' => DB::table('cities')->where('name','Ixtaczoquitlán')->first()->id
],

['name' => 'San Jose',
'city_id' => DB::table('cities')->where('name','Ixtaczoquitlán')->first()->id
],

['name' => 'El Santísimo',
'city_id' => DB::table('cities')->where('name','Ixtaczoquitlán')->first()->id
],

['name' => 'Kimberly',
'city_id' => DB::table('cities')->where('name','Ixtaczoquitlán')->first()->id
],

['name' => 'Empleados Kcm',
'city_id' => DB::table('cities')->where('name','Ixtaczoquitlán')->first()->id
],

['name' => 'San Lorenzo',
'city_id' => DB::table('cities')->where('name','Ixtaczoquitlán')->first()->id
],

['name' => 'De La Luz',
'city_id' => DB::table('cities')->where('name','Ixtaczoquitlán')->first()->id
],

['name' => 'Villas de Ixtac',
'city_id' => DB::table('cities')->where('name','Ixtaczoquitlán')->first()->id
],

['name' => 'Valle Alegre',
'city_id' => DB::table('cities')->where('name','Ixtaczoquitlán')->first()->id
],

['name' => 'Vista Hermosa',
'city_id' => DB::table('cities')->where('name','Ixtaczoquitlán')->first()->id
],

['name' => 'Potrerillo 3 El Bosque',
'city_id' => DB::table('cities')->where('name','Ixtaczoquitlán')->first()->id
],

['name' => 'Potrerillo 2',
'city_id' => DB::table('cities')->where('name','Ixtaczoquitlán')->first()->id
],

['name' => 'Potrerillo 1',
'city_id' => DB::table('cities')->where('name','Ixtaczoquitlán')->first()->id
],

['name' => 'Lagunilla',
'city_id' => DB::table('cities')->where('name','Ixtaczoquitlán')->first()->id
],

['name' => 'Dos Arroyos',
'city_id' => DB::table('cities')->where('name','Ixtaczoquitlán')->first()->id
],

['name' => 'Lomas Altas',
'city_id' => DB::table('cities')->where('name','Ixtaczoquitlán')->first()->id
],

['name' => 'Los Cafetales',
'city_id' => DB::table('cities')->where('name','Ixtaczoquitlán')->first()->id
],

['name' => 'Cumbres de Tuxpango',
'city_id' => DB::table('cities')->where('name','Ixtaczoquitlán')->first()->id
],

['name' => 'Villa Unión',
'city_id' => DB::table('cities')->where('name','Ixtaczoquitlán')->first()->id
],

['name' => '27 de Septiembre El Guayabal',
'city_id' => DB::table('cities')->where('name','Ixtaczoquitlán')->first()->id
],

['name' => 'José María Morelos',
'city_id' => DB::table('cities')->where('name','Ixtaczoquitlán')->first()->id
],

['name' => 'Unión y Progreso',
'city_id' => DB::table('cities')->where('name','Ixtaczoquitlán')->first()->id
],

['name' => 'Agrícola Lezama',
'city_id' => DB::table('cities')->where('name','Ixtaczoquitlán')->first()->id
],

['name' => 'Diecinueve de Octubre',
'city_id' => DB::table('cities')->where('name','Ixtaczoquitlán')->first()->id
],

['name' => 'Zapoapan',
'city_id' => DB::table('cities')->where('name','Ixtaczoquitlán')->first()->id
],

['name' => 'Cuesta del Mexicano',
'city_id' => DB::table('cities')->where('name','Ixtaczoquitlán')->first()->id
],

['name' => 'Fresnal',
'city_id' => DB::table('cities')->where('name','Ixtaczoquitlán')->first()->id
],

['name' => 'Campo Chico',
'city_id' => DB::table('cities')->where('name','Ixtaczoquitlán')->first()->id
],

['name' => 'Monte Blanco',
'city_id' => DB::table('cities')->where('name','Fortín')->first()->id
],

['name' => 'Santa Lucia Potrerillo',
'city_id' => DB::table('cities')->where('name','Fortín')->first()->id
],

['name' => 'Puente Blanco',
'city_id' => DB::table('cities')->where('name','Fortín')->first()->id
],

['name' => 'Monte Salas',
'city_id' => DB::table('cities')->where('name','Fortín')->first()->id
],

['name' => 'Villa Unión',
'city_id' => DB::table('cities')->where('name','Fortín')->first()->id
],

['name' => 'Fortín de las Flores Centro',
'city_id' => DB::table('cities')->where('name','Fortín')->first()->id
],

['name' => 'El Mirador',
'city_id' => DB::table('cities')->where('name','Fortín')->first()->id
],

['name' => 'La Llave',
'city_id' => DB::table('cities')->where('name','Fortín')->first()->id
],

['name' => 'Santa Leticia',
'city_id' => DB::table('cities')->where('name','Fortín')->first()->id
],

['name' => 'Ricardo Ballinas',
'city_id' => DB::table('cities')->where('name','Fortín')->first()->id
],

['name' => 'Hermosa Provincia',
'city_id' => DB::table('cities')->where('name','Fortín')->first()->id
],

['name' => 'Tlacotengo I',
'city_id' => DB::table('cities')->where('name','Fortín')->first()->id
],

['name' => 'Geovillas de las Flores',
'city_id' => DB::table('cities')->where('name','Fortín')->first()->id
],

['name' => 'Lomas de La Llave',
'city_id' => DB::table('cities')->where('name','Fortín')->first()->id
],

['name' => 'Zacatal',
'city_id' => DB::table('cities')->where('name','Fortín')->first()->id
],

['name' => 'Villas de La Llave',
'city_id' => DB::table('cities')->where('name','Fortín')->first()->id
],

['name' => 'Vicente Lombardo Toledano',
'city_id' => DB::table('cities')->where('name','Fortín')->first()->id
],

['name' => 'Residencial la Llave',
'city_id' => DB::table('cities')->where('name','Fortín')->first()->id
],

['name' => 'Villas de las Ánimas',
'city_id' => DB::table('cities')->where('name','Fortín')->first()->id
],

['name' => 'Adalberto Díaz Jacome',
'city_id' => DB::table('cities')->where('name','Fortín')->first()->id
],

['name' => 'Crucero Nacional',
'city_id' => DB::table('cities')->where('name','Fortín')->first()->id
],

['name' => 'Los Tabachines',
'city_id' => DB::table('cities')->where('name','Fortín')->first()->id
],

['name' => 'Tlacotengo II',
'city_id' => DB::table('cities')->where('name','Fortín')->first()->id
],

['name' => 'Miguel Alemán Velasco',
'city_id' => DB::table('cities')->where('name','Fortín')->first()->id
],

['name' => 'Las Azaleas',
'city_id' => DB::table('cities')->where('name','Fortín')->first()->id
],

['name' => 'Dante Delgado',
'city_id' => DB::table('cities')->where('name','Fortín')->first()->id
],

['name' => 'Los Encinos',
'city_id' => DB::table('cities')->where('name','Fortín')->first()->id
],

['name' => 'Raquet Club',
'city_id' => DB::table('cities')->where('name','Fortín')->first()->id
],

['name' => 'Villitas',
'city_id' => DB::table('cities')->where('name','Fortín')->first()->id
],

['name' => 'Bugambilias',
'city_id' => DB::table('cities')->where('name','Fortín')->first()->id
],

['name' => 'Fortín Viejo',
'city_id' => DB::table('cities')->where('name','Fortín')->first()->id
],

['name' => 'Terminal',
'city_id' => DB::table('cities')->where('name','Fortín')->first()->id
],

['name' => 'Fortín',
'city_id' => DB::table('cities')->where('name','Fortín')->first()->id
],

['name' => 'Bosques del Fortín',
'city_id' => DB::table('cities')->where('name','Fortín')->first()->id
],

['name' => 'San Jose',
'city_id' => DB::table('cities')->where('name','Fortín')->first()->id
],

['name' => 'San Pablo',
'city_id' => DB::table('cities')->where('name','Fortín')->first()->id
],

['name' => 'Melesio Portillo',
'city_id' => DB::table('cities')->where('name','Fortín')->first()->id
],

['name' => 'Jacarandas',
'city_id' => DB::table('cities')->where('name','Fortín')->first()->id
],

['name' => 'Las Gardenias',
'city_id' => DB::table('cities')->where('name','Fortín')->first()->id
],

['name' => 'Linda Vista',
'city_id' => DB::table('cities')->where('name','Fortín')->first()->id
],

['name' => 'Rincón de Linda Vista',
'city_id' => DB::table('cities')->where('name','Fortín')->first()->id
],

['name' => 'Tres Ríos',
'city_id' => DB::table('cities')->where('name','Fortín')->first()->id
],

['name' => 'Unidad Delfina',
'city_id' => DB::table('cities')->where('name','Fortín')->first()->id
],

['name' => 'Rincón de San Marcial',
'city_id' => DB::table('cities')->where('name','Fortín')->first()->id
],

['name' => 'Ampliación Rincón de San Marcial',
'city_id' => DB::table('cities')->where('name','Fortín')->first()->id
],

['name' => 'FOVISSSTE 2001',
'city_id' => DB::table('cities')->where('name','Fortín')->first()->id
],

['name' => 'Los Álamos',
'city_id' => DB::table('cities')->where('name','Fortín')->first()->id
],

['name' => 'San Marcial',
'city_id' => DB::table('cities')->where('name','Fortín')->first()->id
],

['name' => 'Santo Domingo',
'city_id' => DB::table('cities')->where('name','Fortín')->first()->id
],

['name' => 'Santa Leticia',
'city_id' => DB::table('cities')->where('name','Fortín')->first()->id
],

['name' => 'Las Fuentes',
'city_id' => DB::table('cities')->where('name','Fortín')->first()->id
],

['name' => 'Jardín',
'city_id' => DB::table('cities')->where('name','Fortín')->first()->id
],

['name' => 'Las Palmas',
'city_id' => DB::table('cities')->where('name','Fortín')->first()->id
],

['name' => 'Los Tulipanes',
'city_id' => DB::table('cities')->where('name','Fortín')->first()->id
],

['name' => 'El Pedregal',
'city_id' => DB::table('cities')->where('name','Fortín')->first()->id
],

['name' => 'Lomas de San Marcial',
'city_id' => DB::table('cities')->where('name','Fortín')->first()->id
],

['name' => 'Victoria',
'city_id' => DB::table('cities')->where('name','Fortín')->first()->id
],

['name' => 'El Bosque',
'city_id' => DB::table('cities')->where('name','Fortín')->first()->id
],

['name' => 'Los Pinos',
'city_id' => DB::table('cities')->where('name','Fortín')->first()->id
],

['name' => 'La Herradura',
'city_id' => DB::table('cities')->where('name','Fortín')->first()->id
],

['name' => 'El Portal',
'city_id' => DB::table('cities')->where('name','Fortín')->first()->id
],

['name' => 'Sama de Grado',
'city_id' => DB::table('cities')->where('name','Fortín')->first()->id
],

['name' => 'El Rosario',
'city_id' => DB::table('cities')->where('name','Fortín')->first()->id
],

['name' => 'FSTSE',
'city_id' => DB::table('cities')->where('name','Fortín')->first()->id
],

['name' => 'Arboledas',
'city_id' => DB::table('cities')->where('name','Fortín')->first()->id
],

['name' => 'INDECO Shangri-La',
'city_id' => DB::table('cities')->where('name','Fortín')->first()->id
],

['name' => 'Alberto Rosales',
'city_id' => DB::table('cities')->where('name','Fortín')->first()->id
],

['name' => 'La Salle 1ra. Sección',
'city_id' => DB::table('cities')->where('name','Fortín')->first()->id
],

['name' => 'La Salle 2da. Sección',
'city_id' => DB::table('cities')->where('name','Fortín')->first()->id
],

['name' => 'Residencial Bambues',
'city_id' => DB::table('cities')->where('name','Fortín')->first()->id
],

['name' => 'Residencial Los Ángeles',
'city_id' => DB::table('cities')->where('name','Fortín')->first()->id
],

['name' => 'Villas del Bosque',
'city_id' => DB::table('cities')->where('name','Fortín')->first()->id
],

['name' => 'Residencial Cortijo de San Antonio',
'city_id' => DB::table('cities')->where('name','Fortín')->first()->id
],

['name' => 'Silvestre Aguilar',
'city_id' => DB::table('cities')->where('name','Fortín')->first()->id
],

['name' => 'Yuliana II',
'city_id' => DB::table('cities')->where('name','Fortín')->first()->id
],

['name' => 'La Esperanza',
'city_id' => DB::table('cities')->where('name','Fortín')->first()->id
],

['name' => 'San Basilio',
'city_id' => DB::table('cities')->where('name','Fortín')->first()->id
],

['name' => 'San Camilo',
'city_id' => DB::table('cities')->where('name','Fortín')->first()->id
],

['name' => 'Santa Martina',
'city_id' => DB::table('cities')->where('name','Fortín')->first()->id
],

['name' => 'Las Flores',
'city_id' => DB::table('cities')->where('name','Fortín')->first()->id
],

['name' => 'Las Flores',
'city_id' => DB::table('cities')->where('name','Fortín')->first()->id
],

['name' => 'Los Naranjos',
'city_id' => DB::table('cities')->where('name','Fortín')->first()->id
],

['name' => 'Yuliana I',
'city_id' => DB::table('cities')->where('name','Fortín')->first()->id
],

['name' => 'Hacienda San Marcial',
'city_id' => DB::table('cities')->where('name','Fortín')->first()->id
],

['name' => 'Palma Real',
'city_id' => DB::table('cities')->where('name','Fortín')->first()->id
],

['name' => 'San Paulino',
'city_id' => DB::table('cities')->where('name','Fortín')->first()->id
],

['name' => 'Los Lienzos',
'city_id' => DB::table('cities')->where('name','Fortín')->first()->id
],

['name' => 'Villa de las Flores',
'city_id' => DB::table('cities')->where('name','Fortín')->first()->id
],

['name' => 'Cervantes y Lozada (Santa Rosa)',
'city_id' => DB::table('cities')->where('name','Córdoba')->first()->id
],

['name' => 'San Aparicio Buena Vista',
'city_id' => DB::table('cities')->where('name','Córdoba')->first()->id
],

['name' => 'Miguel Aguilar',
'city_id' => DB::table('cities')->where('name','Córdoba')->first()->id
],

['name' => 'San Rafael Calería',
'city_id' => DB::table('cities')->where('name','Córdoba')->first()->id
],

['name' => 'Tecama Caleria',
'city_id' => DB::table('cities')->where('name','Córdoba')->first()->id
],

['name' => 'Cosaltepec',
'city_id' => DB::table('cities')->where('name','Córdoba')->first()->id
],

['name' => 'Agustin Millán',
'city_id' => DB::table('cities')->where('name','Córdoba')->first()->id
],

['name' => 'El Porvenir',
'city_id' => DB::table('cities')->where('name','Córdoba')->first()->id
],

['name' => 'Francisco I. Madero',
'city_id' => DB::table('cities')->where('name','Córdoba')->first()->id
],

['name' => 'Residencial Tulipanes',
'city_id' => DB::table('cities')->where('name','Córdoba')->first()->id
],

['name' => 'Zacatepec',
'city_id' => DB::table('cities')->where('name','Córdoba')->first()->id
],

['name' => 'Tranca de Tubo',
'city_id' => DB::table('cities')->where('name','Córdoba')->first()->id
],

['name' => '20 de Noviembre',
'city_id' => DB::table('cities')->where('name','Córdoba')->first()->id
],

['name' => 'Colinas de San José',
'city_id' => DB::table('cities')->where('name','Córdoba')->first()->id
],

['name' => 'San José de Tapia',
'city_id' => DB::table('cities')->where('name','Córdoba')->first()->id
],

['name' => 'Quinta Manzana Barreal',
'city_id' => DB::table('cities')->where('name','Córdoba')->first()->id
],

['name' => 'Margarita Morán Véliz',
'city_id' => DB::table('cities')->where('name','Córdoba')->first()->id
],

['name' => 'Ampliación Aquiles Córdoba Morán',
'city_id' => DB::table('cities')->where('name','Córdoba')->first()->id
],

['name' => 'La Palma (Tercera Manzana del Barreal)',
'city_id' => DB::table('cities')->where('name','Córdoba')->first()->id
],

['name' => 'Los Lienzos II',
'city_id' => DB::table('cities')->where('name','Córdoba')->first()->id
],

['name' => 'La Lagunilla',
'city_id' => DB::table('cities')->where('name','Córdoba')->first()->id
],

['name' => 'San José Loma Grande',
'city_id' => DB::table('cities')->where('name','Córdoba')->first()->id
],

['name' => 'Matlaquiáhuitl',
'city_id' => DB::table('cities')->where('name','Córdoba')->first()->id
],

['name' => 'Agrícola Santa María',
'city_id' => DB::table('cities')->where('name','Córdoba')->first()->id
],

['name' => 'El Bajío',
'city_id' => DB::table('cities')->where('name','Córdoba')->first()->id
],

['name' => 'Córdoba Centro',
'city_id' => DB::table('cities')->where('name','Córdoba')->first()->id
],

['name' => 'El Pedregal',
'city_id' => DB::table('cities')->where('name','Córdoba')->first()->id
],

['name' => 'Residencial Finca Real',
'city_id' => DB::table('cities')->where('name','Córdoba')->first()->id
],

['name' => 'Cordobeses Ilustres',
'city_id' => DB::table('cities')->where('name','Córdoba')->first()->id
],

['name' => 'Los Cedros',
'city_id' => DB::table('cities')->where('name','Córdoba')->first()->id
],

['name' => 'Los Filtros',
'city_id' => DB::table('cities')->where('name','Córdoba')->first()->id
],

['name' => 'La Luz y Trinidad Palotal',
'city_id' => DB::table('cities')->where('name','Córdoba')->first()->id
],

['name' => 'San Francisco Toxpan',
'city_id' => DB::table('cities')->where('name','Córdoba')->first()->id
],

['name' => 'La Fortaleza',
'city_id' => DB::table('cities')->where('name','Córdoba')->first()->id
],

['name' => 'El Manantial',
'city_id' => DB::table('cities')->where('name','Córdoba')->first()->id
],

['name' => 'Los Cafetales',
'city_id' => DB::table('cities')->where('name','Córdoba')->first()->id
],

['name' => 'Los Anturios',
'city_id' => DB::table('cities')->where('name','Córdoba')->first()->id
],

['name' => 'Valle de Córdoba',
'city_id' => DB::table('cities')->where('name','Córdoba')->first()->id
],

['name' => 'Las Brisas',
'city_id' => DB::table('cities')->where('name','Córdoba')->first()->id
],

['name' => 'Las Araucarias',
'city_id' => DB::table('cities')->where('name','Córdoba')->first()->id
],

['name' => 'El Cipres',
'city_id' => DB::table('cities')->where('name','Córdoba')->first()->id
],

['name' => 'Alameda Toxpan',
'city_id' => DB::table('cities')->where('name','Córdoba')->first()->id
],

['name' => 'Toxpan Beisborama',
'city_id' => DB::table('cities')->where('name','Córdoba')->first()->id
],

['name' => 'Nuevo Toxpan',
'city_id' => DB::table('cities')->where('name','Córdoba')->first()->id
],

['name' => 'Los Carriles',
'city_id' => DB::table('cities')->where('name','Córdoba')->first()->id
],

['name' => 'Berlín',
'city_id' => DB::table('cities')->where('name','Córdoba')->first()->id
],

['name' => 'San Antonio de Padua',
'city_id' => DB::table('cities')->where('name','Córdoba')->first()->id
],

['name' => 'La Nueva Reforma',
'city_id' => DB::table('cities')->where('name','Córdoba')->first()->id
],

['name' => 'Fernando Gutiérrez Barrios',
'city_id' => DB::table('cities')->where('name','Córdoba')->first()->id
],

['name' => 'El Porvenir',
'city_id' => DB::table('cities')->where('name','Córdoba')->first()->id
],

['name' => 'Dante Delgado (30 Caballeros)',
'city_id' => DB::table('cities')->where('name','Córdoba')->first()->id
],

['name' => 'San Matías (Los Mangos)',
'city_id' => DB::table('cities')->where('name','Córdoba')->first()->id
],

['name' => 'Deportes',
'city_id' => DB::table('cities')->where('name','Córdoba')->first()->id
],

['name' => 'San Francisco Toxpan INDECO',
'city_id' => DB::table('cities')->where('name','Córdoba')->first()->id
],

['name' => 'México',
'city_id' => DB::table('cities')->where('name','Córdoba')->first()->id
],

['name' => 'Fuentes Residencial Campestre',
'city_id' => DB::table('cities')->where('name','Córdoba')->first()->id
],

['name' => 'Club Residencial Campestre',
'city_id' => DB::table('cities')->where('name','Córdoba')->first()->id
],

['name' => 'Venustiano Carranza',
'city_id' => DB::table('cities')->where('name','Córdoba')->first()->id
],

['name' => 'Cecadys',
'city_id' => DB::table('cities')->where('name','Córdoba')->first()->id
],

['name' => 'Santa Teresita (Segunda Manzana del Barreal)',
'city_id' => DB::table('cities')->where('name','Córdoba')->first()->id
],

['name' => 'Santa Clara',
'city_id' => DB::table('cities')->where('name','Córdoba')->first()->id
],

['name' => 'Circuito Campestre',
'city_id' => DB::table('cities')->where('name','Córdoba')->first()->id
],

['name' => 'Los Cerezos',
'city_id' => DB::table('cities')->where('name','Córdoba')->first()->id
],

['name' => 'La Trinidad Chica',
'city_id' => DB::table('cities')->where('name','Córdoba')->first()->id
],

['name' => 'Miraflores',
'city_id' => DB::table('cities')->where('name','Córdoba')->first()->id
],

['name' => 'Petrolera',
'city_id' => DB::table('cities')->where('name','Córdoba')->first()->id
],

['name' => 'Rafael Murillo Vidal',
'city_id' => DB::table('cities')->where('name','Córdoba')->first()->id
],

['name' => 'San Nicolás',
'city_id' => DB::table('cities')->where('name','Córdoba')->first()->id
],

['name' => 'Lomas de los Angeles',
'city_id' => DB::table('cities')->where('name','Córdoba')->first()->id
],

['name' => 'Miraflores',
'city_id' => DB::table('cities')->where('name','Córdoba')->first()->id
],

['name' => 'Santa Cecilia',
'city_id' => DB::table('cities')->where('name','Córdoba')->first()->id
],

['name' => 'Miraflores Fracción II-B',
'city_id' => DB::table('cities')->where('name','Córdoba')->first()->id
],

['name' => 'Álamos',
'city_id' => DB::table('cities')->where('name','Córdoba')->first()->id
],

['name' => 'Acción y Servicio',
'city_id' => DB::table('cities')->where('name','Córdoba')->first()->id
],

['name' => 'Antorchista Secc A',
'city_id' => DB::table('cities')->where('name','Córdoba')->first()->id
],

['name' => 'El Pueblito',
'city_id' => DB::table('cities')->where('name','Córdoba')->first()->id
],

['name' => 'Fredepo',
'city_id' => DB::table('cities')->where('name','Córdoba')->first()->id
],

['name' => 'La Joyita',
'city_id' => DB::table('cities')->where('name','Córdoba')->first()->id
],

['name' => 'San Román INFONAVIT',
'city_id' => DB::table('cities')->where('name','Córdoba')->first()->id
],

['name' => 'Antorchista Unidad',
'city_id' => DB::table('cities')->where('name','Córdoba')->first()->id
],

['name' => 'Fraternidad',
'city_id' => DB::table('cities')->where('name','Córdoba')->first()->id
],

['name' => 'Las Cañas',
'city_id' => DB::table('cities')->where('name','Córdoba')->first()->id
],

['name' => 'Álamos INFONAVIT',
'city_id' => DB::table('cities')->where('name','Córdoba')->first()->id
],

['name' => 'La Luz Francisco I Madero',
'city_id' => DB::table('cities')->where('name','Córdoba')->first()->id
],

['name' => 'Fundadores de Córdoba',
'city_id' => DB::table('cities')->where('name','Córdoba')->first()->id
],

['name' => 'Córdoba 2000',
'city_id' => DB::table('cities')->where('name','Córdoba')->first()->id
],

['name' => 'Antorchista Secc B',
'city_id' => DB::table('cities')->where('name','Córdoba')->first()->id
],

['name' => 'Antorchista Secc C',
'city_id' => DB::table('cities')->where('name','Córdoba')->first()->id
],

['name' => 'La Antorcha',
'city_id' => DB::table('cities')->where('name','Córdoba')->first()->id
],

['name' => 'El Trébol',
'city_id' => DB::table('cities')->where('name','Córdoba')->first()->id
],

['name' => 'El Jazmín',
'city_id' => DB::table('cities')->where('name','Córdoba')->first()->id
],

['name' => 'Betania',
'city_id' => DB::table('cities')->where('name','Córdoba')->first()->id
],

['name' => 'San Luis',
'city_id' => DB::table('cities')->where('name','Córdoba')->first()->id
],

['name' => 'Villas de la Luz',
'city_id' => DB::table('cities')->where('name','Córdoba')->first()->id
],

['name' => 'Las Quintas',
'city_id' => DB::table('cities')->where('name','Córdoba')->first()->id
],

['name' => 'Los Colorines',
'city_id' => DB::table('cities')->where('name','Córdoba')->first()->id
],

['name' => 'Santa Cecilia',
'city_id' => DB::table('cities')->where('name','Córdoba')->first()->id
],

['name' => 'San Nicolás INFONAVIT',
'city_id' => DB::table('cities')->where('name','Córdoba')->first()->id
],

['name' => 'Santa Isabel',
'city_id' => DB::table('cities')->where('name','Córdoba')->first()->id
],

['name' => 'Las Flores',
'city_id' => DB::table('cities')->where('name','Córdoba')->first()->id
],

['name' => 'Agrícola La Palma Barreal',
'city_id' => DB::table('cities')->where('name','Córdoba')->first()->id
],

['name' => 'Del Maestro',
'city_id' => DB::table('cities')->where('name','Córdoba')->first()->id
],

['name' => '2 Caminos',
'city_id' => DB::table('cities')->where('name','Córdoba')->first()->id
],

['name' => 'Nuevo Córdoba',
'city_id' => DB::table('cities')->where('name','Córdoba')->first()->id
],

['name' => 'Villas de San Isidro',
'city_id' => DB::table('cities')->where('name','Córdoba')->first()->id
],

['name' => 'San Isidro',
'city_id' => DB::table('cities')->where('name','Córdoba')->first()->id
],

['name' => 'Guadalupe Barreal',
'city_id' => DB::table('cities')->where('name','Córdoba')->first()->id
],

['name' => 'Santa Elena',
'city_id' => DB::table('cities')->where('name','Córdoba')->first()->id
],

['name' => 'Las Margaritas',
'city_id' => DB::table('cities')->where('name','Córdoba')->first()->id
],

['name' => 'Palenque Patotal',
'city_id' => DB::table('cities')->where('name','Córdoba')->first()->id
],

['name' => 'Reforma El Barreral',
'city_id' => DB::table('cities')->where('name','Córdoba')->first()->id
],

['name' => 'Santa Mónica',
'city_id' => DB::table('cities')->where('name','Córdoba')->first()->id
],

['name' => 'San José de Abajo',
'city_id' => DB::table('cities')->where('name','Córdoba')->first()->id
],

['name' => 'Las Arboledas',
'city_id' => DB::table('cities')->where('name','Córdoba')->first()->id
],

['name' => 'Divina Morales',
'city_id' => DB::table('cities')->where('name','Córdoba')->first()->id
],

['name' => 'Lomas Verdes',
'city_id' => DB::table('cities')->where('name','Córdoba')->first()->id
],

['name' => 'La Esmeralda',
'city_id' => DB::table('cities')->where('name','Córdoba')->first()->id
],

['name' => 'Valle Del Sol',
'city_id' => DB::table('cities')->where('name','Córdoba')->first()->id
],

['name' => 'Nardos',
'city_id' => DB::table('cities')->where('name','Córdoba')->first()->id
],

['name' => 'Riveras de Huilango',
'city_id' => DB::table('cities')->where('name','Córdoba')->first()->id
],

['name' => 'El Dorado',
'city_id' => DB::table('cities')->where('name','Córdoba')->first()->id
],

['name' => 'Santa Fe',
'city_id' => DB::table('cities')->where('name','Córdoba')->first()->id
],

['name' => 'El Sol',
'city_id' => DB::table('cities')->where('name','Córdoba')->first()->id
],

['name' => 'La Esmeralda 2a Secc',
'city_id' => DB::table('cities')->where('name','Córdoba')->first()->id
],

['name' => 'Bugambilias',
'city_id' => DB::table('cities')->where('name','Córdoba')->first()->id
],

['name' => 'Pueblo Quieto',
'city_id' => DB::table('cities')->where('name','Córdoba')->first()->id
],

['name' => 'Azucenas',
'city_id' => DB::table('cities')->where('name','Córdoba')->first()->id
],

['name' => 'Huilango 3000',
'city_id' => DB::table('cities')->where('name','Córdoba')->first()->id
],

['name' => 'Nuevo Elizabeth',
'city_id' => DB::table('cities')->where('name','Córdoba')->first()->id
],

['name' => 'Rincón Del Bosque',
'city_id' => DB::table('cities')->where('name','Córdoba')->first()->id
],

['name' => 'Shangrila',
'city_id' => DB::table('cities')->where('name','Córdoba')->first()->id
],

['name' => 'Emaus',
'city_id' => DB::table('cities')->where('name','Córdoba')->first()->id
],

['name' => 'Nuevo San Jose',
'city_id' => DB::table('cities')->where('name','Córdoba')->first()->id
],

['name' => 'San José',
'city_id' => DB::table('cities')->where('name','Córdoba')->first()->id
],

['name' => 'Federal',
'city_id' => DB::table('cities')->where('name','Córdoba')->first()->id
],

['name' => 'Lomas',
'city_id' => DB::table('cities')->where('name','Córdoba')->first()->id
],

['name' => 'San Dimas',
'city_id' => DB::table('cities')->where('name','Córdoba')->first()->id
],

['name' => 'Jardines de San Dimas',
'city_id' => DB::table('cities')->where('name','Córdoba')->first()->id
],

['name' => 'Alianza Popular',
'city_id' => DB::table('cities')->where('name','Córdoba')->first()->id
],

['name' => 'El Girasol',
'city_id' => DB::table('cities')->where('name','Córdoba')->first()->id
],

['name' => 'Villa Real',
'city_id' => DB::table('cities')->where('name','Córdoba')->first()->id
],

['name' => 'La Posta',
'city_id' => DB::table('cities')->where('name','Córdoba')->first()->id
],

['name' => 'Popular La Posta',
'city_id' => DB::table('cities')->where('name','Córdoba')->first()->id
],

['name' => 'Virginia',
'city_id' => DB::table('cities')->where('name','Córdoba')->first()->id
],

['name' => 'Nueva Alameda',
'city_id' => DB::table('cities')->where('name','Córdoba')->first()->id
],

['name' => 'Alameda',
'city_id' => DB::table('cities')->where('name','Córdoba')->first()->id
],

['name' => 'Bellavista',
'city_id' => DB::table('cities')->where('name','Córdoba')->first()->id
],

['name' => 'Brillante Crucero',
'city_id' => DB::table('cities')->where('name','Córdoba')->first()->id
],

['name' => 'Caracas',
'city_id' => DB::table('cities')->where('name','Córdoba')->first()->id
],

['name' => 'Del Carmen',
'city_id' => DB::table('cities')->where('name','Córdoba')->first()->id
],

['name' => 'Villas de La Alameda',
'city_id' => DB::table('cities')->where('name','Córdoba')->first()->id
],

['name' => 'Joyas de La Alameda',
'city_id' => DB::table('cities')->where('name','Córdoba')->first()->id
],

['name' => 'Las Palmas',
'city_id' => DB::table('cities')->where('name','Córdoba')->first()->id
],

['name' => 'Los Olivos',
'city_id' => DB::table('cities')->where('name','Córdoba')->first()->id
],

['name' => 'San Cristóbal',
'city_id' => DB::table('cities')->where('name','Córdoba')->first()->id
],

['name' => 'Elizabeth',
'city_id' => DB::table('cities')->where('name','Córdoba')->first()->id
],

['name' => 'Esperanza',
'city_id' => DB::table('cities')->where('name','Córdoba')->first()->id
],

['name' => 'Guadalupe',
'city_id' => DB::table('cities')->where('name','Córdoba')->first()->id
],

['name' => 'Juárez',
'city_id' => DB::table('cities')->where('name','Córdoba')->first()->id
],

['name' => 'Rancho Miranda',
'city_id' => DB::table('cities')->where('name','Córdoba')->first()->id
],

['name' => 'INFONAVIT Santa Margarita',
'city_id' => DB::table('cities')->where('name','Córdoba')->first()->id
],

['name' => 'La Nueva',
'city_id' => DB::table('cities')->where('name','Córdoba')->first()->id
],

['name' => 'El Refugio',
'city_id' => DB::table('cities')->where('name','Córdoba')->first()->id
],

['name' => 'Pablo Sidar',
'city_id' => DB::table('cities')->where('name','Córdoba')->first()->id
],

['name' => 'Praxedis Guerrero',
'city_id' => DB::table('cities')->where('name','Córdoba')->first()->id
],

['name' => 'Mirador',
'city_id' => DB::table('cities')->where('name','Córdoba')->first()->id
],

['name' => 'El Guayabal',
'city_id' => DB::table('cities')->where('name','Córdoba')->first()->id
],

['name' => 'Agustin Millán',
'city_id' => DB::table('cities')->where('name','Córdoba')->first()->id
],

['name' => 'Las Flores',
'city_id' => DB::table('cities')->where('name','Córdoba')->first()->id
],

['name' => 'Miguel Alemán',
'city_id' => DB::table('cities')->where('name','Córdoba')->first()->id
],

['name' => 'San Pedro',
'city_id' => DB::table('cities')->where('name','Córdoba')->first()->id
],

['name' => 'De San Miguel',
'city_id' => DB::table('cities')->where('name','Córdoba')->first()->id
],

['name' => 'Flores Magón',
'city_id' => DB::table('cities')->where('name','Córdoba')->first()->id
],

['name' => 'Miguel Hidalgo',
'city_id' => DB::table('cities')->where('name','Córdoba')->first()->id
],

['name' => 'Rodriguez Clara',
'city_id' => DB::table('cities')->where('name','Córdoba')->first()->id
],

['name' => 'Úrsulo Galvan',
'city_id' => DB::table('cities')->where('name','Córdoba')->first()->id
],

['name' => 'Los Naranjos',
'city_id' => DB::table('cities')->where('name','Córdoba')->first()->id
],

['name' => 'Unidad Jardín',
'city_id' => DB::table('cities')->where('name','Córdoba')->first()->id
],

['name' => 'Huilango',
'city_id' => DB::table('cities')->where('name','Córdoba')->first()->id
],

['name' => 'Moderna',
'city_id' => DB::table('cities')->where('name','Córdoba')->first()->id
],

['name' => 'Pardo',
'city_id' => DB::table('cities')->where('name','Córdoba')->first()->id
],

['name' => 'San Cayetano',
'city_id' => DB::table('cities')->where('name','Córdoba')->first()->id
],

['name' => 'La Sidra',
'city_id' => DB::table('cities')->where('name','Córdoba')->first()->id
],

['name' => 'Las Arboledas INFONAVIT',
'city_id' => DB::table('cities')->where('name','Córdoba')->first()->id
],

['name' => 'Gómez Morin',
'city_id' => DB::table('cities')->where('name','Córdoba')->first()->id
],

['name' => 'Independencia',
'city_id' => DB::table('cities')->where('name','Córdoba')->first()->id
],

['name' => 'Loma Linda INFONAVIT',
'city_id' => DB::table('cities')->where('name','Córdoba')->first()->id
],

['name' => 'Aguillon Guzmán',
'city_id' => DB::table('cities')->where('name','Córdoba')->first()->id
],

['name' => 'Emilio Carranza',
'city_id' => DB::table('cities')->where('name','Córdoba')->first()->id
],

['name' => 'Las Estaciones',
'city_id' => DB::table('cities')->where('name','Córdoba')->first()->id
],

['name' => 'Paraíso',
'city_id' => DB::table('cities')->where('name','Córdoba')->first()->id
],

['name' => 'Los Robles',
'city_id' => DB::table('cities')->where('name','Córdoba')->first()->id
],

['name' => 'Rancho Morales',
'city_id' => DB::table('cities')->where('name','Córdoba')->first()->id
],

['name' => 'Unidad Electricistas',
'city_id' => DB::table('cities')->where('name','Córdoba')->first()->id
],

['name' => 'Villa Verde',
'city_id' => DB::table('cities')->where('name','Córdoba')->first()->id
],

['name' => 'Las Fuentes',
'city_id' => DB::table('cities')->where('name','Córdoba')->first()->id
],

['name' => 'Alejandra Rodriguez Salazar',
'city_id' => DB::table('cities')->where('name','Córdoba')->first()->id
],

['name' => 'Jardines de La Alameda',
'city_id' => DB::table('cities')->where('name','Córdoba')->first()->id
],

['name' => 'Los Robles',
'city_id' => DB::table('cities')->where('name','Córdoba')->first()->id
],

['name' => 'Los Cedros Residencial',
'city_id' => DB::table('cities')->where('name','Córdoba')->first()->id
],

['name' => 'Residencial El Brillante',
'city_id' => DB::table('cities')->where('name','Córdoba')->first()->id
],

['name' => 'José María Morelos',
'city_id' => DB::table('cities')->where('name','Córdoba')->first()->id
],

['name' => 'Marquez Hoyos',
'city_id' => DB::table('cities')->where('name','Córdoba')->first()->id
],

['name' => 'Jardines Del Sur',
'city_id' => DB::table('cities')->where('name','Córdoba')->first()->id
],

['name' => 'El Zopilote',
'city_id' => DB::table('cities')->where('name','Córdoba')->first()->id
],

['name' => 'López Arias',
'city_id' => DB::table('cities')->where('name','Córdoba')->first()->id
],

['name' => 'San Martín de Porres',
'city_id' => DB::table('cities')->where('name','Córdoba')->first()->id
],

['name' => 'Vicente Lombardo Toledano',
'city_id' => DB::table('cities')->where('name','Córdoba')->first()->id
],

['name' => 'Villa de las Flores',
'city_id' => DB::table('cities')->where('name','Córdoba')->first()->id
],

['name' => 'El Diamante',
'city_id' => DB::table('cities')->where('name','Córdoba')->first()->id
],

['name' => 'Los Ángeles',
'city_id' => DB::table('cities')->where('name','Córdoba')->first()->id
],

['name' => 'Vista Hermosa',
'city_id' => DB::table('cities')->where('name','Córdoba')->first()->id
],

['name' => 'Los Arcos',
'city_id' => DB::table('cities')->where('name','Córdoba')->first()->id
],

['name' => 'Santa Rosalía',
'city_id' => DB::table('cities')->where('name','Córdoba')->first()->id
],

['name' => 'Cheel',
'city_id' => DB::table('cities')->where('name','Córdoba')->first()->id
],

['name' => 'Sauce',
'city_id' => DB::table('cities')->where('name','Córdoba')->first()->id
],

['name' => 'Olmo',
'city_id' => DB::table('cities')->where('name','Córdoba')->first()->id
],

['name' => 'Tratados de Córdoba',
'city_id' => DB::table('cities')->where('name','Córdoba')->first()->id
],

['name' => 'Lázaro Cárdenas',
'city_id' => DB::table('cities')->where('name','Córdoba')->first()->id
],

['name' => 'Pénjamo',
'city_id' => DB::table('cities')->where('name','Córdoba')->first()->id
],

['name' => 'Pino Suárez',
'city_id' => DB::table('cities')->where('name','Córdoba')->first()->id
],

['name' => 'San Miguelito',
'city_id' => DB::table('cities')->where('name','Córdoba')->first()->id
],

['name' => 'El Cañaveral',
'city_id' => DB::table('cities')->where('name','Córdoba')->first()->id
],

['name' => 'La Selva',
'city_id' => DB::table('cities')->where('name','Córdoba')->first()->id
],

['name' => 'Erasto Portilla',
'city_id' => DB::table('cities')->where('name','Córdoba')->first()->id
],

['name' => 'Candido Aguilar',
'city_id' => DB::table('cities')->where('name','Córdoba')->first()->id
],

['name' => 'San Ignacio',
'city_id' => DB::table('cities')->where('name','Córdoba')->first()->id
],

['name' => 'Santa Cruz Buenavista',
'city_id' => DB::table('cities')->where('name','Córdoba')->first()->id
],

['name' => 'Zona industrial',
'city_id' => DB::table('cities')->where('name','Córdoba')->first()->id
],

['name' => 'Cuauhtémoc',
'city_id' => DB::table('cities')->where('name','Córdoba')->first()->id
],

['name' => 'Riveras de Buena Vista',
'city_id' => DB::table('cities')->where('name','Córdoba')->first()->id
],

['name' => 'Buenavista',
'city_id' => DB::table('cities')->where('name','Córdoba')->first()->id
],

['name' => 'Rancho Nuevo',
'city_id' => DB::table('cities')->where('name','Córdoba')->first()->id
],

['name' => 'Los Fresnos',
'city_id' => DB::table('cities')->where('name','Córdoba')->first()->id
],

['name' => 'La Luz Del Mundo',
'city_id' => DB::table('cities')->where('name','Córdoba')->first()->id
],

['name' => 'Maltrata',
'city_id' => DB::table('cities')->where('name','Maltrata')->first()->id
],

['name' => 'Xuchil',
'city_id' => DB::table('cities')->where('name','Maltrata')->first()->id
],

['name' => 'Rodolfo Lozada Vallejo',
'city_id' => DB::table('cities')->where('name','Maltrata')->first()->id
],

['name' => 'Aquiles Serdán',
'city_id' => DB::table('cities')->where('name','Nogales')->first()->id
],

['name' => 'Aurora',
'city_id' => DB::table('cities')->where('name','Nogales')->first()->id
],

['name' => 'Carmen Serdán',
'city_id' => DB::table('cities')->where('name','Nogales')->first()->id
],

['name' => 'El Águila',
'city_id' => DB::table('cities')->where('name','Nogales')->first()->id
],

['name' => 'Emilio Carranza',
'city_id' => DB::table('cities')->where('name','Nogales')->first()->id
],

['name' => 'Petrolera',
'city_id' => DB::table('cities')->where('name','Nogales')->first()->id
],

['name' => 'Salvador Gonzalo García',
'city_id' => DB::table('cities')->where('name','Nogales')->first()->id
],

['name' => 'San Lorenzo',
'city_id' => DB::table('cities')->where('name','Nogales')->first()->id
],

['name' => 'Unión y Progreso',
'city_id' => DB::table('cities')->where('name','Nogales')->first()->id
],

['name' => 'Vista Hermosa',
'city_id' => DB::table('cities')->where('name','Nogales')->first()->id
],

['name' => 'Nogales Centro',
'city_id' => DB::table('cities')->where('name','Nogales')->first()->id
],

['name' => 'La Carbonera',
'city_id' => DB::table('cities')->where('name','Nogales')->first()->id
],

['name' => 'El Cerrito',
'city_id' => DB::table('cities')->where('name','Nogales')->first()->id
],

['name' => 'Anáhuac',
'city_id' => DB::table('cities')->where('name','Nogales')->first()->id
],

['name' => 'Chapultepec',
'city_id' => DB::table('cities')->where('name','Nogales')->first()->id
],

['name' => 'Felipe Carrillo Puerto',
'city_id' => DB::table('cities')->where('name','Nogales')->first()->id
],

['name' => '7 de Enero',
'city_id' => DB::table('cities')->where('name','Nogales')->first()->id
],

['name' => '2000',
'city_id' => DB::table('cities')->where('name','Nogales')->first()->id
],

['name' => 'Corregidora',
'city_id' => DB::table('cities')->where('name','Nogales')->first()->id
],

['name' => 'Emiliano Zapata',
'city_id' => DB::table('cities')->where('name','Nogales')->first()->id
],

['name' => 'Villas de Santa Aida',
'city_id' => DB::table('cities')->where('name','Nogales')->first()->id
],

['name' => 'Cecilio Terán (Balastrera)',
'city_id' => DB::table('cities')->where('name','Nogales')->first()->id
],

['name' => 'Álamos',
'city_id' => DB::table('cities')->where('name','Nogales')->first()->id
],

['name' => 'Hermenegildo Galeana',
'city_id' => DB::table('cities')->where('name','Nogales')->first()->id
],

['name' => 'Ojo Zarco',
'city_id' => DB::table('cities')->where('name','Nogales')->first()->id
],

['name' => 'Paseo Nuevo',
'city_id' => DB::table('cities')->where('name','Nogales')->first()->id
],

['name' => 'Proquina',
'city_id' => DB::table('cities')->where('name','Nogales')->first()->id
],

['name' => 'San Isidro',
'city_id' => DB::table('cities')->where('name','Nogales')->first()->id
],

['name' => 'Nueva Rosita',
'city_id' => DB::table('cities')->where('name','Nogales')->first()->id
],

['name' => 'Petróleos',
'city_id' => DB::table('cities')->where('name','Nogales')->first()->id
],

['name' => 'Arboledas',
'city_id' => DB::table('cities')->where('name','Nogales')->first()->id
],

['name' => 'Rincón de las Doncellas',
'city_id' => DB::table('cities')->where('name','Nogales')->first()->id
],

['name' => 'López Arias',
'city_id' => DB::table('cities')->where('name','Nogales')->first()->id
],

['name' => 'Encinar',
'city_id' => DB::table('cities')->where('name','Nogales')->first()->id
],

['name' => 'Reforma',
'city_id' => DB::table('cities')->where('name','Nogales')->first()->id
],

['name' => 'Arboledas',
'city_id' => DB::table('cities')->where('name','Nogales')->first()->id
],

['name' => 'Provincia',
'city_id' => DB::table('cities')->where('name','Nogales')->first()->id
],

['name' => 'Los Fresnos',
'city_id' => DB::table('cities')->where('name','Nogales')->first()->id
],

['name' => 'Guerrero',
'city_id' => DB::table('cities')->where('name','Nogales')->first()->id
],

['name' => 'El Arenal',
'city_id' => DB::table('cities')->where('name','Nogales')->first()->id
],

['name' => 'El Pedregal',
'city_id' => DB::table('cities')->where('name','Nogales')->first()->id
],

['name' => 'Azueta',
'city_id' => DB::table('cities')->where('name','Nogales')->first()->id
],

['name' => 'Paseo Nuevo',
'city_id' => DB::table('cities')->where('name','Nogales')->first()->id
],

['name' => 'Libertad',
'city_id' => DB::table('cities')->where('name','Nogales')->first()->id
],

['name' => 'Mirador',
'city_id' => DB::table('cities')->where('name','Nogales')->first()->id
],

['name' => 'Taza de Agua Ojo Zarco',
'city_id' => DB::table('cities')->where('name','Nogales')->first()->id
],

['name' => 'Lázaro Cárdenas (Los Colorines)',
'city_id' => DB::table('cities')->where('name','Nogales')->first()->id
],

['name' => 'Nueva Jerusalén',
'city_id' => DB::table('cities')->where('name','Nogales')->first()->id
],

['name' => 'Salvador Gonzalez Garcia',
'city_id' => DB::table('cities')->where('name','Río Blanco')->first()->id
],

['name' => '28 de Agosto',
'city_id' => DB::table('cities')->where('name','Río Blanco')->first()->id
],

['name' => 'Tenango de Rio Blanco Centro',
'city_id' => DB::table('cities')->where('name','Río Blanco')->first()->id
],

['name' => 'Villas San Javier',
'city_id' => DB::table('cities')->where('name','Río Blanco')->first()->id
],

['name' => 'Villas de San Pablo',
'city_id' => DB::table('cities')->where('name','Río Blanco')->first()->id
],

['name' => 'Agraria',
'city_id' => DB::table('cities')->where('name','Río Blanco')->first()->id
],

['name' => 'Álvaro Obregón',
'city_id' => DB::table('cities')->where('name','Río Blanco')->first()->id
],

['name' => 'Azteca',
'city_id' => DB::table('cities')->where('name','Río Blanco')->first()->id
],

['name' => 'Benito Juárez',
'city_id' => DB::table('cities')->where('name','Río Blanco')->first()->id
],

['name' => 'Galán',
'city_id' => DB::table('cities')->where('name','Río Blanco')->first()->id
],

['name' => 'Hospitalito',
'city_id' => DB::table('cities')->where('name','Río Blanco')->first()->id
],

['name' => 'Libertad',
'city_id' => DB::table('cities')->where('name','Río Blanco')->first()->id
],

['name' => 'Ricardo Flores Magón',
'city_id' => DB::table('cities')->where('name','Río Blanco')->first()->id
],

['name' => 'Santa Catarina',
'city_id' => DB::table('cities')->where('name','Río Blanco')->first()->id
],

['name' => 'Unidad Fovissste',
'city_id' => DB::table('cities')->where('name','Río Blanco')->first()->id
],

['name' => 'Unión Obrera Campesina',
'city_id' => DB::table('cities')->where('name','Río Blanco')->first()->id
],

['name' => 'Venustiano Carranza',
'city_id' => DB::table('cities')->where('name','Río Blanco')->first()->id
],

['name' => 'San Buenaventura',
'city_id' => DB::table('cities')->where('name','Río Blanco')->first()->id
],

['name' => 'San Jorge',
'city_id' => DB::table('cities')->where('name','Río Blanco')->first()->id
],

['name' => 'Lopez Mateos',
'city_id' => DB::table('cities')->where('name','Río Blanco')->first()->id
],

['name' => 'Los Pinos',
'city_id' => DB::table('cities')->where('name','Río Blanco')->first()->id
],

['name' => 'San Nicolás',
'city_id' => DB::table('cities')->where('name','Río Blanco')->first()->id
],

['name' => 'Soaiccc',
'city_id' => DB::table('cities')->where('name','Río Blanco')->first()->id
],

['name' => 'Santa Mónica',
'city_id' => DB::table('cities')->where('name','Río Blanco')->first()->id
],

['name' => 'Xicotepec',
'city_id' => DB::table('cities')->where('name','Río Blanco')->first()->id
],

['name' => 'Villas de Tenango',
'city_id' => DB::table('cities')->where('name','Río Blanco')->first()->id
],

['name' => 'Jardines de San Buenaventura',
'city_id' => DB::table('cities')->where('name','Río Blanco')->first()->id
],

['name' => 'Villas de Río Blanco',
'city_id' => DB::table('cities')->where('name','Río Blanco')->first()->id
],

['name' => 'Cuauhtémoc',
'city_id' => DB::table('cities')->where('name','Río Blanco')->first()->id
],

['name' => 'Chapultepec',
'city_id' => DB::table('cities')->where('name','Río Blanco')->first()->id
],

['name' => 'Modelo',
'city_id' => DB::table('cities')->where('name','Río Blanco')->first()->id
],

['name' => 'Las Palmas',
'city_id' => DB::table('cities')->where('name','Río Blanco')->first()->id
],

['name' => 'Lázaro Cárdenas',
'city_id' => DB::table('cities')->where('name','Río Blanco')->first()->id
],

['name' => 'San Cristóbal',
'city_id' => DB::table('cities')->where('name','Río Blanco')->first()->id
],

['name' => '7 de Enero',
'city_id' => DB::table('cities')->where('name','Río Blanco')->first()->id
],

['name' => 'Jardín',
'city_id' => DB::table('cities')->where('name','Río Blanco')->first()->id
],

['name' => 'Reforma',
'city_id' => DB::table('cities')->where('name','Río Blanco')->first()->id
],

['name' => 'Los Lirios',
'city_id' => DB::table('cities')->where('name','Río Blanco')->first()->id
],

['name' => 'Anáhuac',
'city_id' => DB::table('cities')->where('name','Río Blanco')->first()->id
],

['name' => 'Barrio Nuevo',
'city_id' => DB::table('cities')->where('name','Río Blanco')->first()->id
],

['name' => 'Felipe Carrillo Puerto',
'city_id' => DB::table('cities')->where('name','Río Blanco')->first()->id
],

['name' => 'Francisco I Madero',
'city_id' => DB::table('cities')->where('name','Río Blanco')->first()->id
],

['name' => 'Unión Progreso',
'city_id' => DB::table('cities')->where('name','Río Blanco')->first()->id
],

['name' => 'Primavera de Velasco',
'city_id' => DB::table('cities')->where('name','Río Blanco')->first()->id
],

['name' => 'Ciudad Mendoza Centro',
'city_id' => DB::table('cities')->where('name','Camerino Z. Mendoza')->first()->id
],

['name' => 'Jardín',
'city_id' => DB::table('cities')->where('name','Camerino Z. Mendoza')->first()->id
],

['name' => 'Unión Moderna',
'city_id' => DB::table('cities')->where('name','Camerino Z. Mendoza')->first()->id
],

['name' => 'Santa Cruz',
'city_id' => DB::table('cities')->where('name','Camerino Z. Mendoza')->first()->id
],

['name' => 'El Bosque',
'city_id' => DB::table('cities')->where('name','Camerino Z. Mendoza')->first()->id
],

['name' => 'Benito Juárez',
'city_id' => DB::table('cities')->where('name','Camerino Z. Mendoza')->first()->id
],

['name' => 'Prado',
'city_id' => DB::table('cities')->where('name','Camerino Z. Mendoza')->first()->id
],

['name' => 'El Águila',
'city_id' => DB::table('cities')->where('name','Camerino Z. Mendoza')->first()->id
],

['name' => 'Benito Juárez',
'city_id' => DB::table('cities')->where('name','Camerino Z. Mendoza')->first()->id
],

['name' => 'Civer',
'city_id' => DB::table('cities')->where('name','Camerino Z. Mendoza')->first()->id
],

['name' => 'Los Cuartos',
'city_id' => DB::table('cities')->where('name','Camerino Z. Mendoza')->first()->id
],

['name' => 'Hogar',
'city_id' => DB::table('cities')->where('name','Camerino Z. Mendoza')->first()->id
],

['name' => 'Unión y Progreso',
'city_id' => DB::table('cities')->where('name','Camerino Z. Mendoza')->first()->id
],

['name' => 'Santa Rosita',
'city_id' => DB::table('cities')->where('name','Camerino Z. Mendoza')->first()->id
],

['name' => 'Rincón Santa Rosa',
'city_id' => DB::table('cities')->where('name','Camerino Z. Mendoza')->first()->id
],

['name' => 'Los Sauces',
'city_id' => DB::table('cities')->where('name','Camerino Z. Mendoza')->first()->id
],

['name' => 'Madero',
'city_id' => DB::table('cities')->where('name','Camerino Z. Mendoza')->first()->id
],

['name' => 'Nueva Lucha',
'city_id' => DB::table('cities')->where('name','Camerino Z. Mendoza')->first()->id
],

['name' => 'Pablo Sidar',
'city_id' => DB::table('cities')->where('name','Camerino Z. Mendoza')->first()->id
],

['name' => 'Obrera',
'city_id' => DB::table('cities')->where('name','Camerino Z. Mendoza')->first()->id
],

['name' => 'Liberación',
'city_id' => DB::table('cities')->where('name','Camerino Z. Mendoza')->first()->id
],

['name' => 'Central Obrera',
'city_id' => DB::table('cities')->where('name','Camerino Z. Mendoza')->first()->id
],

['name' => 'Reforma',
'city_id' => DB::table('cities')->where('name','Camerino Z. Mendoza')->first()->id
],

['name' => 'Necoxtla',
'city_id' => DB::table('cities')->where('name','Camerino Z. Mendoza')->first()->id
],

['name' => 'La Cuesta',
'city_id' => DB::table('cities')->where('name','Camerino Z. Mendoza')->first()->id
],

['name' => 'Aquila',
'city_id' => DB::table('cities')->where('name','Aquila')->first()->id
],

['name' => 'Atiopan',
'city_id' => DB::table('cities')->where('name','Aquila')->first()->id
],

['name' => 'El Mirador',
'city_id' => DB::table('cities')->where('name','Acultzingo')->first()->id
],

['name' => 'Acultzingo',
'city_id' => DB::table('cities')->where('name','Acultzingo')->first()->id
],

['name' => 'El Potrero',
'city_id' => DB::table('cities')->where('name','Acultzingo')->first()->id
],

['name' => 'Coatepec de Abajo',
'city_id' => DB::table('cities')->where('name','Acultzingo')->first()->id
],

['name' => 'Tlapextitla',
'city_id' => DB::table('cities')->where('name','Acultzingo')->first()->id
],

['name' => 'Aguaxinola',
'city_id' => DB::table('cities')->where('name','Acultzingo')->first()->id
],

['name' => 'Tecamalucan',
'city_id' => DB::table('cities')->where('name','Acultzingo')->first()->id
],

['name' => 'Linda Vista',
'city_id' => DB::table('cities')->where('name','Acultzingo')->first()->id
],

['name' => 'Vaquería',
'city_id' => DB::table('cities')->where('name','Acultzingo')->first()->id
],

['name' => 'Puente de Guadalupe',
'city_id' => DB::table('cities')->where('name','Acultzingo')->first()->id
],

['name' => 'Atitla',
'city_id' => DB::table('cities')->where('name','Acultzingo')->first()->id
],

['name' => 'Coxolitla',
'city_id' => DB::table('cities')->where('name','Acultzingo')->first()->id
],

['name' => 'Puerto del Aire',
'city_id' => DB::table('cities')->where('name','Acultzingo')->first()->id
],

['name' => 'Vista Hermosa',
'city_id' => DB::table('cities')->where('name','Acultzingo')->first()->id
],

['name' => 'Ojo de Agua de Abaja',
'city_id' => DB::table('cities')->where('name','Acultzingo')->first()->id
],

['name' => 'Barrio Morastitla',
'city_id' => DB::table('cities')->where('name','Soledad Atzompa')->first()->id
],

['name' => 'Atzompa',
'city_id' => DB::table('cities')->where('name','Soledad Atzompa')->first()->id
],

['name' => 'Tepaxapa',
'city_id' => DB::table('cities')->where('name','Soledad Atzompa')->first()->id
],

['name' => 'Villa Nueva',
'city_id' => DB::table('cities')->where('name','Soledad Atzompa')->first()->id
],

['name' => 'Porvenir',
'city_id' => DB::table('cities')->where('name','Soledad Atzompa')->first()->id
],

['name' => 'Acultzinapa',
'city_id' => DB::table('cities')->where('name','Soledad Atzompa')->first()->id
],

['name' => 'Ahuacuitlapa',
'city_id' => DB::table('cities')->where('name','Soledad Atzompa')->first()->id
],

['name' => 'Barrio Nuevo',
'city_id' => DB::table('cities')->where('name','Soledad Atzompa')->first()->id
],

['name' => 'Monterrey',
'city_id' => DB::table('cities')->where('name','Soledad Atzompa')->first()->id
],

['name' => 'Soledad Atzompa',
'city_id' => DB::table('cities')->where('name','Soledad Atzompa')->first()->id
],

['name' => 'Buena Vista',
'city_id' => DB::table('cities')->where('name','Soledad Atzompa')->first()->id
],

['name' => 'San Juan de los Lagos',
'city_id' => DB::table('cities')->where('name','Soledad Atzompa')->first()->id
],

['name' => 'Huixtitla',
'city_id' => DB::table('cities')->where('name','Soledad Atzompa')->first()->id
],

['name' => 'Ahuatempa',
'city_id' => DB::table('cities')->where('name','Soledad Atzompa')->first()->id
],

['name' => 'Tlalpan',
'city_id' => DB::table('cities')->where('name','Soledad Atzompa')->first()->id
],

['name' => 'Xonotla',
'city_id' => DB::table('cities')->where('name','Soledad Atzompa')->first()->id
],

['name' => 'Benito Juárez',
'city_id' => DB::table('cities')->where('name','Soledad Atzompa')->first()->id
],

['name' => 'Tepexpan',
'city_id' => DB::table('cities')->where('name','Soledad Atzompa')->first()->id
],

['name' => 'Texmoltitla',
'city_id' => DB::table('cities')->where('name','Soledad Atzompa')->first()->id
],

['name' => 'Tetla (Ixtacahuatitla)',
'city_id' => DB::table('cities')->where('name','Soledad Atzompa')->first()->id
],

['name' => 'Exoquila',
'city_id' => DB::table('cities')->where('name','Soledad Atzompa')->first()->id
],

['name' => 'Huitzila',
'city_id' => DB::table('cities')->where('name','Soledad Atzompa')->first()->id
],

['name' => 'Atexcalco',
'city_id' => DB::table('cities')->where('name','Soledad Atzompa')->first()->id
],

['name' => 'Tlatilpa',
'city_id' => DB::table('cities')->where('name','Soledad Atzompa')->first()->id
],

['name' => 'Tlatzala',
'city_id' => DB::table('cities')->where('name','Soledad Atzompa')->first()->id
],

['name' => 'Capulines',
'city_id' => DB::table('cities')->where('name','Soledad Atzompa')->first()->id
],

['name' => 'Las Porfiadas',
'city_id' => DB::table('cities')->where('name','Soledad Atzompa')->first()->id
],

['name' => 'El Rincón',
'city_id' => DB::table('cities')->where('name','Soledad Atzompa')->first()->id
],

['name' => 'Tetlatzinga',
'city_id' => DB::table('cities')->where('name','Soledad Atzompa')->first()->id
],

['name' => 'Atempa',
'city_id' => DB::table('cities')->where('name','Soledad Atzompa')->first()->id
],

['name' => 'Mexcala',
'city_id' => DB::table('cities')->where('name','Soledad Atzompa')->first()->id
],

['name' => 'Xiquila',
'city_id' => DB::table('cities')->where('name','Soledad Atzompa')->first()->id
],

['name' => 'Acuapa',
'city_id' => DB::table('cities')->where('name','Soledad Atzompa')->first()->id
],

['name' => 'Teotlalco',
'city_id' => DB::table('cities')->where('name','Soledad Atzompa')->first()->id
],

['name' => 'Zacatepec',
'city_id' => DB::table('cities')->where('name','Soledad Atzompa')->first()->id
],

['name' => 'Linda Vista',
'city_id' => DB::table('cities')->where('name','Soledad Atzompa')->first()->id
],

['name' => 'Huiloapan de Cuauhtémoc Centro',
'city_id' => DB::table('cities')->where('name','Huiloapan de Cuauhtémoc')->first()->id
],

['name' => 'San Lorenzo',
'city_id' => DB::table('cities')->where('name','Huiloapan de Cuauhtémoc')->first()->id
],

['name' => 'Cuauhtémoc',
'city_id' => DB::table('cities')->where('name','Huiloapan de Cuauhtémoc')->first()->id
],

['name' => 'Emancipación Obrera',
'city_id' => DB::table('cities')->where('name','Huiloapan de Cuauhtémoc')->first()->id
],

['name' => 'Potrerillo',
'city_id' => DB::table('cities')->where('name','Huiloapan de Cuauhtémoc')->first()->id
],

['name' => 'Paredón Viejo',
'city_id' => DB::table('cities')->where('name','Huiloapan de Cuauhtémoc')->first()->id
],

['name' => 'Peña Blanca',
'city_id' => DB::table('cities')->where('name','Huiloapan de Cuauhtémoc')->first()->id
],

['name' => 'San Cristóbal',
'city_id' => DB::table('cities')->where('name','Huiloapan de Cuauhtémoc')->first()->id
],

['name' => 'Donato Guerra',
'city_id' => DB::table('cities')->where('name','Huiloapan de Cuauhtémoc')->first()->id
],

['name' => 'Tlaquilpa',
'city_id' => DB::table('cities')->where('name','Tlaquilpa')->first()->id
],

['name' => 'Tetlistaka',
'city_id' => DB::table('cities')->where('name','Tlaquilpa')->first()->id
],

['name' => 'Eyitepec',
'city_id' => DB::table('cities')->where('name','Tlaquilpa')->first()->id
],

['name' => 'El Carril (Monera)',
'city_id' => DB::table('cities')->where('name','Tlaquilpa')->first()->id
],

['name' => 'Tlaquetzaltitla',
'city_id' => DB::table('cities')->where('name','Tlaquilpa')->first()->id
],

['name' => 'Quetzaltótotl',
'city_id' => DB::table('cities')->where('name','Tlaquilpa')->first()->id
],

['name' => 'Astacinga',
'city_id' => DB::table('cities')->where('name','Astacinga')->first()->id
],

['name' => 'Huapango',
'city_id' => DB::table('cities')->where('name','Astacinga')->first()->id
],

['name' => 'Acatitla',
'city_id' => DB::table('cities')->where('name','Astacinga')->first()->id
],

['name' => 'Macuilquila',
'city_id' => DB::table('cities')->where('name','Astacinga')->first()->id
],

['name' => 'Xoxocotla',
'city_id' => DB::table('cities')->where('name','Xoxocotla')->first()->id
],

['name' => 'Tlicalco',
'city_id' => DB::table('cities')->where('name','Xoxocotla')->first()->id
],

['name' => 'Atlahuilco',
'city_id' => DB::table('cities')->where('name','Atlahuilco')->first()->id
],

['name' => 'Tlalmorado',
'city_id' => DB::table('cities')->where('name','Atlahuilco')->first()->id
],

['name' => 'Loma los Pinos',
'city_id' => DB::table('cities')->where('name','Atlahuilco')->first()->id
],

['name' => 'Terrero',
'city_id' => DB::table('cities')->where('name','Atlahuilco')->first()->id
],

['name' => 'Acultzinapa (San Miguelito)',
'city_id' => DB::table('cities')->where('name','Atlahuilco')->first()->id
],

['name' => 'El Rincón',
'city_id' => DB::table('cities')->where('name','Atlahuilco')->first()->id
],

['name' => 'Vista Hermosa',
'city_id' => DB::table('cities')->where('name','Atlahuilco')->first()->id
],

['name' => 'Ameyala',
'city_id' => DB::table('cities')->where('name','Atlahuilco')->first()->id
],

['name' => 'Loma Linda',
'city_id' => DB::table('cities')->where('name','Atlahuilco')->first()->id
],

['name' => 'Tequila',
'city_id' => DB::table('cities')->where('name','Tequila')->first()->id
],

['name' => 'Los Tlaxcas',
'city_id' => DB::table('cities')->where('name','Tequila')->first()->id
],

['name' => 'Xalxocotla',
'city_id' => DB::table('cities')->where('name','Tequila')->first()->id
],

['name' => 'Cortezca',
'city_id' => DB::table('cities')->where('name','Tequila')->first()->id
],

['name' => 'Tlazololapan',
'city_id' => DB::table('cities')->where('name','Tequila')->first()->id
],

['name' => 'Chapultepec',
'city_id' => DB::table('cities')->where('name','Tequila')->first()->id
],

['name' => 'Yoloxochititla',
'city_id' => DB::table('cities')->where('name','Tequila')->first()->id
],

['name' => 'San Andres Tenejapa',
'city_id' => DB::table('cities')->where('name','San Andrés Tenejapan')->first()->id
],

['name' => 'La Cumbre',
'city_id' => DB::table('cities')->where('name','San Andrés Tenejapan')->first()->id
],

['name' => 'Tlilapan',
'city_id' => DB::table('cities')->where('name','Tlilapan')->first()->id
],

['name' => 'Barrio la Presa',
'city_id' => DB::table('cities')->where('name','Tlilapan')->first()->id
],

['name' => 'Tonalixco',
'city_id' => DB::table('cities')->where('name','Tlilapan')->first()->id
],

['name' => 'Tepetzingo',
'city_id' => DB::table('cities')->where('name','Magdalena')->first()->id
],

['name' => 'Tepetlaxitla',
'city_id' => DB::table('cities')->where('name','Magdalena')->first()->id
],

['name' => 'Magdalena',
'city_id' => DB::table('cities')->where('name','Magdalena')->first()->id
],

['name' => 'Naranjal',
'city_id' => DB::table('cities')->where('name','Naranjal')->first()->id
],

['name' => 'Xochitla',
'city_id' => DB::table('cities')->where('name','Naranjal')->first()->id
],

['name' => 'Agrícola Úrsulo Galván',
'city_id' => DB::table('cities')->where('name','Naranjal')->first()->id
],

['name' => 'Nexca Naranjal',
'city_id' => DB::table('cities')->where('name','Naranjal')->first()->id
],

['name' => 'Coetzala',
'city_id' => DB::table('cities')->where('name','Coetzala')->first()->id
],

['name' => 'La Concepción',
'city_id' => DB::table('cities')->where('name','Coetzala')->first()->id
],

['name' => 'Solidaridad',
'city_id' => DB::table('cities')->where('name','Omealca')->first()->id
],

['name' => 'Las Palmas',
'city_id' => DB::table('cities')->where('name','Omealca')->first()->id
],

['name' => 'Omealca',
'city_id' => DB::table('cities')->where('name','Omealca')->first()->id
],

['name' => 'Tecoloteplán (Estación Omealca)',
'city_id' => DB::table('cities')->where('name','Omealca')->first()->id
],

['name' => 'Kilómetro G 29',
'city_id' => DB::table('cities')->where('name','Omealca')->first()->id
],

['name' => 'Paso Amapa',
'city_id' => DB::table('cities')->where('name','Omealca')->first()->id
],

['name' => 'Rincón de Buena Vista',
'city_id' => DB::table('cities')->where('name','Omealca')->first()->id
],

['name' => 'Suchiles',
'city_id' => DB::table('cities')->where('name','Omealca')->first()->id
],

['name' => 'Tenejapan de Mata',
'city_id' => DB::table('cities')->where('name','Omealca')->first()->id
],

['name' => 'Atolka',
'city_id' => DB::table('cities')->where('name','Omealca')->first()->id
],

['name' => 'Cruz Tetela',
'city_id' => DB::table('cities')->where('name','Omealca')->first()->id
],

['name' => 'San Pablo Ojo de Agua',
'city_id' => DB::table('cities')->where('name','Omealca')->first()->id
],

['name' => 'Matatenatito',
'city_id' => DB::table('cities')->where('name','Omealca')->first()->id
],

['name' => 'Dos Caminos',
'city_id' => DB::table('cities')->where('name','Omealca')->first()->id
],

['name' => 'Benito Juárez',
'city_id' => DB::table('cities')->where('name','Omealca')->first()->id
],

['name' => 'El Maguey',
'city_id' => DB::table('cities')->where('name','Cuitláhuac')->first()->id
],

['name' => 'El Tamarindo',
'city_id' => DB::table('cities')->where('name','Cuitláhuac')->first()->id
],

['name' => 'Mata Clara',
'city_id' => DB::table('cities')->where('name','Cuitláhuac')->first()->id
],

['name' => 'Rincón Zapote',
'city_id' => DB::table('cities')->where('name','Cuitláhuac')->first()->id
],

['name' => 'Mata de Caña',
'city_id' => DB::table('cities')->where('name','Cuitláhuac')->first()->id
],

['name' => 'Dos Caminos',
'city_id' => DB::table('cities')->where('name','Cuitláhuac')->first()->id
],

['name' => 'El Coyol',
'city_id' => DB::table('cities')->where('name','Cuitláhuac')->first()->id
],

['name' => 'Mata Naranjo',
'city_id' => DB::table('cities')->where('name','Cuitláhuac')->first()->id
],

['name' => 'La Quebradora',
'city_id' => DB::table('cities')->where('name','Cuitláhuac')->first()->id
],

['name' => 'San José de Abajo',
'city_id' => DB::table('cities')->where('name','Cuitláhuac')->first()->id
],

['name' => 'Cuitlahuac Centro',
'city_id' => DB::table('cities')->where('name','Cuitláhuac')->first()->id
],

['name' => 'Linda vista',
'city_id' => DB::table('cities')->where('name','Cuitláhuac')->first()->id
],

['name' => 'El Jovito',
'city_id' => DB::table('cities')->where('name','Cuitláhuac')->first()->id
],

['name' => 'Oaxaca',
'city_id' => DB::table('cities')->where('name','Cuitláhuac')->first()->id
],

['name' => '30 de Abril',
'city_id' => DB::table('cities')->where('name','Cuitláhuac')->first()->id
],

['name' => 'Cuauhtémoc Cárdenas',
'city_id' => DB::table('cities')->where('name','Cuitláhuac')->first()->id
],

['name' => 'San Pedro',
'city_id' => DB::table('cities')->where('name','Cuitláhuac')->first()->id
],

['name' => 'San Francisco',
'city_id' => DB::table('cities')->where('name','Cuitláhuac')->first()->id
],

['name' => 'El Polvorín',
'city_id' => DB::table('cities')->where('name','Cuitláhuac')->first()->id
],

['name' => 'Concordia',
'city_id' => DB::table('cities')->where('name','Cuitláhuac')->first()->id
],

['name' => 'Arboledas',
'city_id' => DB::table('cities')->where('name','Cuitláhuac')->first()->id
],

['name' => 'El Mirador',
'city_id' => DB::table('cities')->where('name','Cuichapa')->first()->id
],

['name' => 'Cobos García (San Nicolás)',
'city_id' => DB::table('cities')->where('name','Cuichapa')->first()->id
],

['name' => 'Cuichapa',
'city_id' => DB::table('cities')->where('name','Cuichapa')->first()->id
],

['name' => 'Loma del Carmen',
'city_id' => DB::table('cities')->where('name','Cuichapa')->first()->id
],

['name' => 'La Aguja',
'city_id' => DB::table('cities')->where('name','Cuichapa')->first()->id
],

['name' => 'Antorcha Campesina',
'city_id' => DB::table('cities')->where('name','Cuichapa')->first()->id
],

['name' => 'La Laja',
'city_id' => DB::table('cities')->where('name','Cuichapa')->first()->id
],

['name' => 'Providencia',
'city_id' => DB::table('cities')->where('name','Cuichapa')->first()->id
],

['name' => 'El Carril',
'city_id' => DB::table('cities')->where('name','Yanga')->first()->id
],

['name' => 'El Palmar',
'city_id' => DB::table('cities')->where('name','Yanga')->first()->id
],

['name' => 'Negro Yanga',
'city_id' => DB::table('cities')->where('name','Yanga')->first()->id
],

['name' => 'Paraíso',
'city_id' => DB::table('cities')->where('name','Yanga')->first()->id
],

['name' => 'Progreso',
'city_id' => DB::table('cities')->where('name','Yanga')->first()->id
],

['name' => 'Triangulito',
'city_id' => DB::table('cities')->where('name','Yanga')->first()->id
],

['name' => 'San Miguel el Grande (Doctor Vértiz)',
'city_id' => DB::table('cities')->where('name','Yanga')->first()->id
],

['name' => 'La Concepción',
'city_id' => DB::table('cities')->where('name','Yanga')->first()->id
],

['name' => 'Yanga Centro',
'city_id' => DB::table('cities')->where('name','Yanga')->first()->id
],

['name' => 'Oriente',
'city_id' => DB::table('cities')->where('name','Yanga')->first()->id
],

['name' => 'La Cancha',
'city_id' => DB::table('cities')->where('name','Yanga')->first()->id
],

['name' => 'Barrio Maceda',
'city_id' => DB::table('cities')->where('name','Yanga')->first()->id
],

['name' => 'Barrio Guadalupe',
'city_id' => DB::table('cities')->where('name','Yanga')->first()->id
],

['name' => 'Campo Deportivo',
'city_id' => DB::table('cities')->where('name','Yanga')->first()->id
],

['name' => 'Río Seco',
'city_id' => DB::table('cities')->where('name','Yanga')->first()->id
],

['name' => 'Valle Dorado',
'city_id' => DB::table('cities')->where('name','Yanga')->first()->id
],

['name' => 'El Cerrito',
'city_id' => DB::table('cities')->where('name','Yanga')->first()->id
],

['name' => 'El Pedregal',
'city_id' => DB::table('cities')->where('name','Yanga')->first()->id
],

['name' => 'Calzada del Panteón',
'city_id' => DB::table('cities')->where('name','Yanga')->first()->id
],

['name' => 'Los Pocitos',
'city_id' => DB::table('cities')->where('name','Yanga')->first()->id
],

['name' => 'General Alatriste (San Joaquín)',
'city_id' => DB::table('cities')->where('name','Yanga')->first()->id
],

['name' => 'Adolfo Lopez Mateos',
'city_id' => DB::table('cities')->where('name','Yanga')->first()->id
],

['name' => 'Gral. Francisco Paz',
'city_id' => DB::table('cities')->where('name','Yanga')->first()->id
],

['name' => 'Gral. Juan Jose Baez',
'city_id' => DB::table('cities')->where('name','Yanga')->first()->id
],

['name' => 'El Mirador',
'city_id' => DB::table('cities')->where('name','Yanga')->first()->id
],

['name' => 'Palmillas',
'city_id' => DB::table('cities')->where('name','Yanga')->first()->id
],

['name' => 'California',
'city_id' => DB::table('cities')->where('name','Amatlán de los Reyes')->first()->id
],

['name' => 'Paraje Nuevo Centro',
'city_id' => DB::table('cities')->where('name','Amatlán de los Reyes')->first()->id
],

['name' => 'Guadalupe',
'city_id' => DB::table('cities')->where('name','Amatlán de los Reyes')->first()->id
],

['name' => 'San Isidro',
'city_id' => DB::table('cities')->where('name','Amatlán de los Reyes')->first()->id
],

['name' => '24 de Febrero',
'city_id' => DB::table('cities')->where('name','Amatlán de los Reyes')->first()->id
],

['name' => 'Santa Cecilia',
'city_id' => DB::table('cities')->where('name','Amatlán de los Reyes')->first()->id
],

['name' => 'Ojo de Agua Chico',
'city_id' => DB::table('cities')->where('name','Amatlán de los Reyes')->first()->id
],

['name' => 'El Clarín',
'city_id' => DB::table('cities')->where('name','Amatlán de los Reyes')->first()->id
],

['name' => 'Cañada Blanca',
'city_id' => DB::table('cities')->where('name','Amatlán de los Reyes')->first()->id
],

['name' => 'Las Palmas',
'city_id' => DB::table('cities')->where('name','Amatlán de los Reyes')->first()->id
],

['name' => 'Peñuela',
'city_id' => DB::table('cities')->where('name','Amatlán de los Reyes')->first()->id
],

['name' => 'El Tejar',
'city_id' => DB::table('cities')->where('name','Amatlán de los Reyes')->first()->id
],

['name' => 'San Rafael Rio Seco',
'city_id' => DB::table('cities')->where('name','Amatlán de los Reyes')->first()->id
],

['name' => 'Colonia las Gardenias',
'city_id' => DB::table('cities')->where('name','Amatlán de los Reyes')->first()->id
],

['name' => 'Dos Ríos',
'city_id' => DB::table('cities')->where('name','Amatlán de los Reyes')->first()->id
],

['name' => 'Amatlán de los Reyes',
'city_id' => DB::table('cities')->where('name','Amatlán de los Reyes')->first()->id
],

['name' => 'Zacatipan',
'city_id' => DB::table('cities')->where('name','Amatlán de los Reyes')->first()->id
],

['name' => 'Concordia',
'city_id' => DB::table('cities')->where('name','Amatlán de los Reyes')->first()->id
],

['name' => 'La Ermita',
'city_id' => DB::table('cities')->where('name','Amatlán de los Reyes')->first()->id
],

['name' => 'Puente de los Aguacates',
'city_id' => DB::table('cities')->where('name','Amatlán de los Reyes')->first()->id
],

['name' => 'El Crucero',
'city_id' => DB::table('cities')->where('name','Amatlán de los Reyes')->first()->id
],

['name' => 'San Francisco',
'city_id' => DB::table('cities')->where('name','Amatlán de los Reyes')->first()->id
],

['name' => 'La Desviación',
'city_id' => DB::table('cities')->where('name','Amatlán de los Reyes')->first()->id
],

['name' => 'Ameyalco',
'city_id' => DB::table('cities')->where('name','Amatlán de los Reyes')->first()->id
],

['name' => 'Quimiapan',
'city_id' => DB::table('cities')->where('name','Amatlán de los Reyes')->first()->id
],

['name' => 'San Martín',
'city_id' => DB::table('cities')->where('name','Amatlán de los Reyes')->first()->id
],

['name' => 'Potrerillo',
'city_id' => DB::table('cities')->where('name','Amatlán de los Reyes')->first()->id
],

['name' => 'Santa Isabel',
'city_id' => DB::table('cities')->where('name','Amatlán de los Reyes')->first()->id
],

['name' => 'Aquiojapa',
'city_id' => DB::table('cities')->where('name','Amatlán de los Reyes')->first()->id
],

['name' => 'Altepetzinatl',
'city_id' => DB::table('cities')->where('name','Amatlán de los Reyes')->first()->id
],

['name' => 'Manuel León (San José de Gracia)',
'city_id' => DB::table('cities')->where('name','Amatlán de los Reyes')->first()->id
],

['name' => 'Venta Parada',
'city_id' => DB::table('cities')->where('name','Amatlán de los Reyes')->first()->id
],

['name' => 'Fraternidad',
'city_id' => DB::table('cities')->where('name','Amatlán de los Reyes')->first()->id
],

['name' => 'Cacahuatal',
'city_id' => DB::table('cities')->where('name','Amatlán de los Reyes')->first()->id
],

['name' => 'El Otate',
'city_id' => DB::table('cities')->where('name','Amatlán de los Reyes')->first()->id
],

['name' => 'Los Angeles',
'city_id' => DB::table('cities')->where('name','Amatlán de los Reyes')->first()->id
],

['name' => 'El Saltillo',
'city_id' => DB::table('cities')->where('name','Amatlán de los Reyes')->first()->id
],

['name' => 'Guadalupe (La Patrona)',
'city_id' => DB::table('cities')->where('name','Amatlán de los Reyes')->first()->id
],

['name' => 'El Porvenir',
'city_id' => DB::table('cities')->where('name','Amatlán de los Reyes')->first()->id
],

['name' => 'Trapiche Viejo',
'city_id' => DB::table('cities')->where('name','Amatlán de los Reyes')->first()->id
],

['name' => 'Atoyac Centro',
'city_id' => DB::table('cities')->where('name','Atoyac')->first()->id
],

['name' => 'Conzatti',
'city_id' => DB::table('cities')->where('name','Atoyac')->first()->id
],

['name' => 'La Lagunilla',
'city_id' => DB::table('cities')->where('name','Atoyac')->first()->id
],

['name' => 'Hidalgo',
'city_id' => DB::table('cities')->where('name','Atoyac')->first()->id
],

['name' => 'Guamúchil',
'city_id' => DB::table('cities')->where('name','Atoyac')->first()->id
],

['name' => 'Mercado Viejo',
'city_id' => DB::table('cities')->where('name','Atoyac')->first()->id
],

['name' => 'Sección 23',
'city_id' => DB::table('cities')->where('name','Atoyac')->first()->id
],

['name' => 'Gral. Miguel Alemán Centro',
'city_id' => DB::table('cities')->where('name','Atoyac')->first()->id
],

['name' => 'Los Pinos',
'city_id' => DB::table('cities')->where('name','Atoyac')->first()->id
],

['name' => 'Chamizal',
'city_id' => DB::table('cities')->where('name','Atoyac')->first()->id
],

['name' => 'Unión y Progreso',
'city_id' => DB::table('cities')->where('name','Atoyac')->first()->id
],

['name' => 'Pozo Colorado',
'city_id' => DB::table('cities')->where('name','Atoyac')->first()->id
],

['name' => '5 de Mayo',
'city_id' => DB::table('cities')->where('name','Atoyac')->first()->id
],

['name' => 'Cortina',
'city_id' => DB::table('cities')->where('name','Atoyac')->first()->id
],

['name' => 'Cruz Verde',
'city_id' => DB::table('cities')->where('name','Atoyac')->first()->id
],

['name' => 'Chapultepec',
'city_id' => DB::table('cities')->where('name','Atoyac')->first()->id
],

['name' => 'Obrera',
'city_id' => DB::table('cities')->where('name','Atoyac')->first()->id
],

['name' => 'Sixto Gonzalez',
'city_id' => DB::table('cities')->where('name','Atoyac')->first()->id
],

['name' => 'La Loma',
'city_id' => DB::table('cities')->where('name','Atoyac')->first()->id
],

['name' => 'Guadalupe',
'city_id' => DB::table('cities')->where('name','Atoyac')->first()->id
],

['name' => 'El Pedregal',
'city_id' => DB::table('cities')->where('name','Atoyac')->first()->id
],

['name' => 'Rancho Frío',
'city_id' => DB::table('cities')->where('name','Atoyac')->first()->id
],

['name' => 'Buenos Aires',
'city_id' => DB::table('cities')->where('name','Atoyac')->first()->id
],

['name' => 'Transbordo',
'city_id' => DB::table('cities')->where('name','Atoyac')->first()->id
],

['name' => 'Emiliano Zapata',
'city_id' => DB::table('cities')->where('name','Atoyac')->first()->id
],

['name' => 'Arroyo Hondo',
'city_id' => DB::table('cities')->where('name','Atoyac')->first()->id
],

['name' => 'Corral de Piedra',
'city_id' => DB::table('cities')->where('name','Atoyac')->first()->id
],

['name' => 'La Germanía',
'city_id' => DB::table('cities')->where('name','Atoyac')->first()->id
],

['name' => 'Caballo Blanco',
'city_id' => DB::table('cities')->where('name','Atoyac')->first()->id
],

['name' => 'La Esperanza',
'city_id' => DB::table('cities')->where('name','Atoyac')->first()->id
],

['name' => 'Portezuelos',
'city_id' => DB::table('cities')->where('name','Atoyac')->first()->id
],

['name' => 'Los Leones',
'city_id' => DB::table('cities')->where('name','Atoyac')->first()->id
],

['name' => 'Mata Larga (San Sebastian Mata Larga)',
'city_id' => DB::table('cities')->where('name','Atoyac')->first()->id
],

['name' => 'Peña Blanca',
'city_id' => DB::table('cities')->where('name','Atoyac')->first()->id
],

['name' => 'La Palma (Rancho Vivián)',
'city_id' => DB::table('cities')->where('name','Atoyac')->first()->id
],

['name' => 'El Albión',
'city_id' => DB::table('cities')->where('name','Atoyac')->first()->id
],

['name' => 'La Palma (Las Carolinas)',
'city_id' => DB::table('cities')->where('name','Atoyac')->first()->id
],

['name' => 'Rancho Fermín',
'city_id' => DB::table('cities')->where('name','Atoyac')->first()->id
],

['name' => 'Rancho Brenis',
'city_id' => DB::table('cities')->where('name','Atoyac')->first()->id
],

['name' => 'La Palma',
'city_id' => DB::table('cities')->where('name','Atoyac')->first()->id
],

['name' => 'San Ricardo',
'city_id' => DB::table('cities')->where('name','Atoyac')->first()->id
],

['name' => 'Boca del Monte',
'city_id' => DB::table('cities')->where('name','Atoyac')->first()->id
],

['name' => 'Chiquihuite',
'city_id' => DB::table('cities')->where('name','Atoyac')->first()->id
],

['name' => 'Rancho María',
'city_id' => DB::table('cities')->where('name','Atoyac')->first()->id
],

['name' => 'Alta Luz',
'city_id' => DB::table('cities')->where('name','Atoyac')->first()->id
],

['name' => 'Buenos Aires',
'city_id' => DB::table('cities')->where('name','Atoyac')->first()->id
],

['name' => 'Nuevo Miraflores',
'city_id' => DB::table('cities')->where('name','Atoyac')->first()->id
],

['name' => 'Santa Anita',
'city_id' => DB::table('cities')->where('name','Atoyac')->first()->id
],

['name' => 'Buenavista',
'city_id' => DB::table('cities')->where('name','Atoyac')->first()->id
],

['name' => 'Zapotecas',
'city_id' => DB::table('cities')->where('name','Atoyac')->first()->id
],

['name' => 'Vara Negra',
'city_id' => DB::table('cities')->where('name','Atoyac')->first()->id
],

['name' => 'Vista Hermosa',
'city_id' => DB::table('cities')->where('name','Atoyac')->first()->id
],

['name' => 'Pazimaro (Santa Brígida)',
'city_id' => DB::table('cities')->where('name','Atoyac')->first()->id
],

['name' => 'La Purísima',
'city_id' => DB::table('cities')->where('name','Atoyac')->first()->id
],

['name' => 'El Faro',
'city_id' => DB::table('cities')->where('name','Atoyac')->first()->id
],

['name' => 'La Providencia',
'city_id' => DB::table('cities')->where('name','Atoyac')->first()->id
],

['name' => 'La Perla',
'city_id' => DB::table('cities')->where('name','Atoyac')->first()->id
],

['name' => 'El Mirador',
'city_id' => DB::table('cities')->where('name','Atoyac')->first()->id
],

['name' => 'Canaletas',
'city_id' => DB::table('cities')->where('name','Atoyac')->first()->id
],

['name' => 'San Antonio (Canaletas)',
'city_id' => DB::table('cities')->where('name','Atoyac')->first()->id
],

['name' => 'El Rosario',
'city_id' => DB::table('cities')->where('name','Atoyac')->first()->id
],

['name' => 'San José Buenos Aires',
'city_id' => DB::table('cities')->where('name','Atoyac')->first()->id
],

['name' => 'Miraflores',
'city_id' => DB::table('cities')->where('name','Atoyac')->first()->id
],

['name' => 'Tenextel',
'city_id' => DB::table('cities')->where('name','Atoyac')->first()->id
],

['name' => 'Garibaldi',
'city_id' => DB::table('cities')->where('name','Atoyac')->first()->id
],

['name' => 'La Cuchilla',
'city_id' => DB::table('cities')->where('name','Atoyac')->first()->id
],

['name' => 'La Edna',
'city_id' => DB::table('cities')->where('name','Atoyac')->first()->id
],

['name' => 'El Cedro',
'city_id' => DB::table('cities')->where('name','Atoyac')->first()->id
],

['name' => 'La Unión',
'city_id' => DB::table('cities')->where('name','Atoyac')->first()->id
],

['name' => 'La Charca',
'city_id' => DB::table('cities')->where('name','Atoyac')->first()->id
],

['name' => 'Cafetal Colón',
'city_id' => DB::table('cities')->where('name','Atoyac')->first()->id
],

['name' => 'Nogales',
'city_id' => DB::table('cities')->where('name','Atoyac')->first()->id
],

['name' => 'La Parra',
'city_id' => DB::table('cities')->where('name','Atoyac')->first()->id
],

['name' => 'El Aguaje',
'city_id' => DB::table('cities')->where('name','Atoyac')->first()->id
],

['name' => 'La Reforma',
'city_id' => DB::table('cities')->where('name','Atoyac')->first()->id
],

['name' => 'Guadalupe',
'city_id' => DB::table('cities')->where('name','Atoyac')->first()->id
],

['name' => 'Rancho Nuevo',
'city_id' => DB::table('cities')->where('name','Atoyac')->first()->id
],

['name' => 'El Águila',
'city_id' => DB::table('cities')->where('name','Atoyac')->first()->id
],

['name' => 'La Aurora',
'city_id' => DB::table('cities')->where('name','Atoyac')->first()->id
],

['name' => 'Agrícola Tlacorancho',
'city_id' => DB::table('cities')->where('name','Atoyac')->first()->id
],

['name' => 'Ejido Tlacorancho',
'city_id' => DB::table('cities')->where('name','Atoyac')->first()->id
],

['name' => 'Los Pérez',
'city_id' => DB::table('cities')->where('name','Atoyac')->first()->id
],

['name' => 'Cañada Azul',
'city_id' => DB::table('cities')->where('name','Atoyac')->first()->id
],

['name' => 'El Zapote',
'city_id' => DB::table('cities')->where('name','Atoyac')->first()->id
],

['name' => 'Progreso',
'city_id' => DB::table('cities')->where('name','Atoyac')->first()->id
],

['name' => 'Manzanillo',
'city_id' => DB::table('cities')->where('name','Atoyac')->first()->id
],

['name' => 'Paso Del Macho Centro',
'city_id' => DB::table('cities')->where('name','Paso del Macho')->first()->id
],

['name' => 'Reforma',
'city_id' => DB::table('cities')->where('name','Paso del Macho')->first()->id
],

['name' => 'San Antonio',
'city_id' => DB::table('cities')->where('name','Paso del Macho')->first()->id
],

['name' => 'Benito Juárez',
'city_id' => DB::table('cities')->where('name','Paso del Macho')->first()->id
],

['name' => 'Loma Linda',
'city_id' => DB::table('cities')->where('name','Paso del Macho')->first()->id
],

['name' => 'Moreno',
'city_id' => DB::table('cities')->where('name','Paso del Macho')->first()->id
],

['name' => 'Manlio Fabio Altamirano',
'city_id' => DB::table('cities')->where('name','Paso del Macho')->first()->id
],

['name' => '12 de Octubre',
'city_id' => DB::table('cities')->where('name','Paso del Macho')->first()->id
],

['name' => 'Emiliano Zapata',
'city_id' => DB::table('cities')->where('name','Paso del Macho')->first()->id
],

['name' => '12 de Marzo',
'city_id' => DB::table('cities')->where('name','Paso del Macho')->first()->id
],

['name' => 'El Naranjito',
'city_id' => DB::table('cities')->where('name','Paso del Macho')->first()->id
],

['name' => 'Salvador Esquer Apodaca',
'city_id' => DB::table('cities')->where('name','Paso del Macho')->first()->id
],

['name' => 'El Porvenir',
'city_id' => DB::table('cities')->where('name','Paso del Macho')->first()->id
],

['name' => 'Mata de Varas',
'city_id' => DB::table('cities')->where('name','Paso del Macho')->first()->id
],

['name' => 'Paso Gavilán',
'city_id' => DB::table('cities')->where('name','Paso del Macho')->first()->id
],

['name' => 'Paso Azúcar',
'city_id' => DB::table('cities')->where('name','Paso del Macho')->first()->id
],

['name' => 'Loma Pelada',
'city_id' => DB::table('cities')->where('name','Paso del Macho')->first()->id
],

['name' => 'Tlanamacoyan',
'city_id' => DB::table('cities')->where('name','Paso del Macho')->first()->id
],

['name' => 'El Angostillo',
'city_id' => DB::table('cities')->where('name','Paso del Macho')->first()->id
],

['name' => 'Paso Frijol',
'city_id' => DB::table('cities')->where('name','Paso del Macho')->first()->id
],

['name' => 'Potrero Grande (Remudadero Rancho Nuevo)',
'city_id' => DB::table('cities')->where('name','Paso del Macho')->first()->id
],

['name' => 'La Gloria',
'city_id' => DB::table('cities')->where('name','Paso del Macho')->first()->id
],

['name' => 'Mata Tejón',
'city_id' => DB::table('cities')->where('name','Paso del Macho')->first()->id
],

['name' => 'Paso del Burro',
'city_id' => DB::table('cities')->where('name','Paso del Macho')->first()->id
],

['name' => 'El Cedro',
'city_id' => DB::table('cities')->where('name','Paso del Macho')->first()->id
],

['name' => 'Paso Limón',
'city_id' => DB::table('cities')->where('name','Paso del Macho')->first()->id
],

['name' => 'Cerro Azul',
'city_id' => DB::table('cities')->where('name','Paso del Macho')->first()->id
],

['name' => 'Actopan',
'city_id' => DB::table('cities')->where('name','Paso del Macho')->first()->id
],

['name' => 'El Zapotal',
'city_id' => DB::table('cities')->where('name','Paso del Macho')->first()->id
],

['name' => 'La Víbora',
'city_id' => DB::table('cities')->where('name','Paso del Macho')->first()->id
],

['name' => 'Cañamazo',
'city_id' => DB::table('cities')->where('name','Paso del Macho')->first()->id
],

['name' => 'La Peña',
'city_id' => DB::table('cities')->where('name','Paso del Macho')->first()->id
],

['name' => 'San José Balsa Camarón (La Colmena)',
'city_id' => DB::table('cities')->where('name','Paso del Macho')->first()->id
],

['name' => 'Corral de Piedra',
'city_id' => DB::table('cities')->where('name','Paso del Macho')->first()->id
],

['name' => 'Pocitos y Cañamazo',
'city_id' => DB::table('cities')->where('name','Paso del Macho')->first()->id
],

['name' => 'Tamarindo',
'city_id' => DB::table('cities')->where('name','Carrillo Puerto')->first()->id
],

['name' => 'Loma Acatlán',
'city_id' => DB::table('cities')->where('name','Carrillo Puerto')->first()->id
],

['name' => 'Loma de Enmedio',
'city_id' => DB::table('cities')->where('name','Carrillo Puerto')->first()->id
],

['name' => 'El Lagartillo',
'city_id' => DB::table('cities')->where('name','Carrillo Puerto')->first()->id
],

['name' => 'Arroyo Azul',
'city_id' => DB::table('cities')->where('name','Carrillo Puerto')->first()->id
],

['name' => 'Mata Gallina',
'city_id' => DB::table('cities')->where('name','Carrillo Puerto')->first()->id
],

['name' => 'Trinidad Sánchez Santos',
'city_id' => DB::table('cities')->where('name','Carrillo Puerto')->first()->id
],

['name' => 'El Cristo',
'city_id' => DB::table('cities')->where('name','Carrillo Puerto')->first()->id
],

['name' => 'Loma Tigra (Mata la Tigra)',
'city_id' => DB::table('cities')->where('name','Carrillo Puerto')->first()->id
],

['name' => 'Loma Angosta',
'city_id' => DB::table('cities')->where('name','Carrillo Puerto')->first()->id
],

['name' => 'El Palmar',
'city_id' => DB::table('cities')->where('name','Carrillo Puerto')->first()->id
],

['name' => 'Las Cuadras',
'city_id' => DB::table('cities')->where('name','Carrillo Puerto')->first()->id
],

['name' => 'Paso del Potro',
'city_id' => DB::table('cities')->where('name','Carrillo Puerto')->first()->id
],

['name' => 'El Organo',
'city_id' => DB::table('cities')->where('name','Carrillo Puerto')->first()->id
],

['name' => 'La Quebracha',
'city_id' => DB::table('cities')->where('name','Carrillo Puerto')->first()->id
],

['name' => 'Mata Domingo',
'city_id' => DB::table('cities')->where('name','Carrillo Puerto')->first()->id
],

['name' => 'La Providencia',
'city_id' => DB::table('cities')->where('name','Carrillo Puerto')->first()->id
],

['name' => 'Rincón Vainilla',
'city_id' => DB::table('cities')->where('name','Carrillo Puerto')->first()->id
],

['name' => 'Rancho Nuevo',
'city_id' => DB::table('cities')->where('name','Carrillo Puerto')->first()->id
],

['name' => 'El Mirador',
'city_id' => DB::table('cities')->where('name','Carrillo Puerto')->first()->id
],

['name' => 'La Laguna',
'city_id' => DB::table('cities')->where('name','Carrillo Puerto')->first()->id
],

['name' => 'El Tamarindo',
'city_id' => DB::table('cities')->where('name','Carrillo Puerto')->first()->id
],

['name' => 'Cotaxtla',
'city_id' => DB::table('cities')->where('name','Cotaxtla')->first()->id
],

['name' => 'Ejidal',
'city_id' => DB::table('cities')->where('name','Cotaxtla')->first()->id
],

['name' => 'La Capilla',
'city_id' => DB::table('cities')->where('name','Cotaxtla')->first()->id
],

['name' => 'Santa Lucía (Las Playas)',
'city_id' => DB::table('cities')->where('name','Cotaxtla')->first()->id
],

['name' => 'San Francisco',
'city_id' => DB::table('cities')->where('name','Cotaxtla')->first()->id
],

['name' => 'Santa Lucía',
'city_id' => DB::table('cities')->where('name','Cotaxtla')->first()->id
],

['name' => 'El Tamarindo',
'city_id' => DB::table('cities')->where('name','Cotaxtla')->first()->id
],

['name' => 'La Cebadilla',
'city_id' => DB::table('cities')->where('name','Cotaxtla')->first()->id
],

['name' => 'La Palma',
'city_id' => DB::table('cities')->where('name','Cotaxtla')->first()->id
],

['name' => 'Cruz de Quintero',
'city_id' => DB::table('cities')->where('name','Cotaxtla')->first()->id
],

['name' => 'La Burrera (Paso del Fierro)',
'city_id' => DB::table('cities')->where('name','Cotaxtla')->first()->id
],

['name' => 'Las Guacamayas',
'city_id' => DB::table('cities')->where('name','Cotaxtla')->first()->id
],

['name' => 'Mata Arriero',
'city_id' => DB::table('cities')->where('name','Cotaxtla')->first()->id
],

['name' => 'Los Tamarindos',
'city_id' => DB::table('cities')->where('name','Cotaxtla')->first()->id
],

['name' => 'Paso Acahual',
'city_id' => DB::table('cities')->where('name','Cotaxtla')->first()->id
],

['name' => 'Los Carriles',
'city_id' => DB::table('cities')->where('name','Cotaxtla')->first()->id
],

['name' => 'Loma del Manantial',
'city_id' => DB::table('cities')->where('name','Cotaxtla')->first()->id
],

['name' => 'Molino de Agua',
'city_id' => DB::table('cities')->where('name','Cotaxtla')->first()->id
],

['name' => 'La Laguna',
'city_id' => DB::table('cities')->where('name','Cotaxtla')->first()->id
],

['name' => 'La Tinaja',
'city_id' => DB::table('cities')->where('name','Cotaxtla')->first()->id
],

['name' => 'Bajo Grande',
'city_id' => DB::table('cities')->where('name','Cotaxtla')->first()->id
],

['name' => 'Mata Espino',
'city_id' => DB::table('cities')->where('name','Cotaxtla')->first()->id
],

['name' => 'Paso Espuela',
'city_id' => DB::table('cities')->where('name','Cotaxtla')->first()->id
],

['name' => 'El Picadero',
'city_id' => DB::table('cities')->where('name','Cotaxtla')->first()->id
],

['name' => 'Bajos de Tlachiconal',
'city_id' => DB::table('cities')->where('name','Cotaxtla')->first()->id
],

['name' => 'Paso Faisán',
'city_id' => DB::table('cities')->where('name','Cotaxtla')->first()->id
],

['name' => 'Zongolica',
'city_id' => DB::table('cities')->where('name','Zongolica')->first()->id
],

['name' => 'Nepopoalco',
'city_id' => DB::table('cities')->where('name','Zongolica')->first()->id
],

['name' => 'Ixpalcuahutla (Moxala)',
'city_id' => DB::table('cities')->where('name','Zongolica')->first()->id
],

['name' => 'Loma de los Dolores',
'city_id' => DB::table('cities')->where('name','Zongolica')->first()->id
],

['name' => 'Tepetlitlanapa',
'city_id' => DB::table('cities')->where('name','Zongolica')->first()->id
],

['name' => 'Atlicpac',
'city_id' => DB::table('cities')->where('name','Zongolica')->first()->id
],

['name' => 'El Mirador',
'city_id' => DB::table('cities')->where('name','Zongolica')->first()->id
],

['name' => 'Huixtla',
'city_id' => DB::table('cities')->where('name','Zongolica')->first()->id
],

['name' => 'Vicente Guerrero',
'city_id' => DB::table('cities')->where('name','Zongolica')->first()->id
],

['name' => 'Adolfo Ruiz Cortines',
'city_id' => DB::table('cities')->where('name','Zongolica')->first()->id
],

['name' => 'Temaxcalapa',
'city_id' => DB::table('cities')->where('name','Zongolica')->first()->id
],

['name' => 'Ixpaluca',
'city_id' => DB::table('cities')->where('name','Zongolica')->first()->id
],

['name' => 'Xochiojca',
'city_id' => DB::table('cities')->where('name','Zongolica')->first()->id
],

['name' => 'Tepepa I',
'city_id' => DB::table('cities')->where('name','Zongolica')->first()->id
],

['name' => 'Huaxtécatl Uno',
'city_id' => DB::table('cities')->where('name','Zongolica')->first()->id
],

['name' => 'El Porvenir',
'city_id' => DB::table('cities')->where('name','Zongolica')->first()->id
],

['name' => 'San Sebastián',
'city_id' => DB::table('cities')->where('name','Zongolica')->first()->id
],

['name' => 'Tlanelpaquilla',
'city_id' => DB::table('cities')->where('name','Zongolica')->first()->id
],

['name' => 'San José Independencia',
'city_id' => DB::table('cities')->where('name','Zongolica')->first()->id
],

['name' => 'Tlacuiloltécatl Chico (Nogales)',
'city_id' => DB::table('cities')->where('name','Zongolica')->first()->id
],

['name' => 'Zomajapa',
'city_id' => DB::table('cities')->where('name','Zongolica')->first()->id
],

['name' => 'Teocotla',
'city_id' => DB::table('cities')->where('name','Zongolica')->first()->id
],

['name' => 'Palapa',
'city_id' => DB::table('cities')->where('name','Zongolica')->first()->id
],

['name' => 'Tezizapa',
'city_id' => DB::table('cities')->where('name','Zongolica')->first()->id
],

['name' => 'Xochiotepec',
'city_id' => DB::table('cities')->where('name','Zongolica')->first()->id
],

['name' => 'Zapatecatl',
'city_id' => DB::table('cities')->where('name','Zongolica')->first()->id
],

['name' => 'Choapa',
'city_id' => DB::table('cities')->where('name','Zongolica')->first()->id
],

['name' => 'Ochitla',
'city_id' => DB::table('cities')->where('name','Zongolica')->first()->id
],

['name' => 'Totolacatla',
'city_id' => DB::table('cities')->where('name','Zongolica')->first()->id
],

['name' => 'Piedras Blancas',
'city_id' => DB::table('cities')->where('name','Zongolica')->first()->id
],

['name' => 'Modelo',
'city_id' => DB::table('cities')->where('name','Zongolica')->first()->id
],

['name' => 'Comalapa',
'city_id' => DB::table('cities')->where('name','Zongolica')->first()->id
],

['name' => 'La Palma',
'city_id' => DB::table('cities')->where('name','Zongolica')->first()->id
],

['name' => 'Macuilca',
'city_id' => DB::table('cities')->where('name','Zongolica')->first()->id
],

['name' => 'Apanga',
'city_id' => DB::table('cities')->where('name','Zongolica')->first()->id
],

['name' => 'Tehuipango',
'city_id' => DB::table('cities')->where('name','Tehuipango')->first()->id
],

['name' => 'Tlalchichilco',
'city_id' => DB::table('cities')->where('name','Tehuipango')->first()->id
],

['name' => 'Tepeica',
'city_id' => DB::table('cities')->where('name','Tehuipango')->first()->id
],

['name' => 'Achichipico',
'city_id' => DB::table('cities')->where('name','Tehuipango')->first()->id
],

['name' => 'Opotzinga',
'city_id' => DB::table('cities')->where('name','Tehuipango')->first()->id
],

['name' => 'Ticoma',
'city_id' => DB::table('cities')->where('name','Tehuipango')->first()->id
],

['name' => 'Tepecuitlapa',
'city_id' => DB::table('cities')->where('name','Tehuipango')->first()->id
],

['name' => 'Apipizactitla',
'city_id' => DB::table('cities')->where('name','Tehuipango')->first()->id
],

['name' => 'Xopilapa',
'city_id' => DB::table('cities')->where('name','Tehuipango')->first()->id
],

['name' => 'Tlalchichicaspa',
'city_id' => DB::table('cities')->where('name','Tehuipango')->first()->id
],

['name' => 'Loma de los Pinos',
'city_id' => DB::table('cities')->where('name','Tehuipango')->first()->id
],

['name' => 'Xiujtempa',
'city_id' => DB::table('cities')->where('name','Tehuipango')->first()->id
],

['name' => 'Tzacuala Primero',
'city_id' => DB::table('cities')->where('name','Tehuipango')->first()->id
],

['name' => 'Mixtla de Altamirano',
'city_id' => DB::table('cities')->where('name','Mixtla de Altamirano')->first()->id
],

['name' => 'Segundo',
'city_id' => DB::table('cities')->where('name','Mixtla de Altamirano')->first()->id
],

['name' => 'Ocotempa (Barrio Primero)',
'city_id' => DB::table('cities')->where('name','Mixtla de Altamirano')->first()->id
],

['name' => 'Tercero',
'city_id' => DB::table('cities')->where('name','Mixtla de Altamirano')->first()->id
],

['name' => 'Cuarto',
'city_id' => DB::table('cities')->where('name','Mixtla de Altamirano')->first()->id
],

['name' => 'Xometla',
'city_id' => DB::table('cities')->where('name','Mixtla de Altamirano')->first()->id
],

['name' => 'Ayahualulco',
'city_id' => DB::table('cities')->where('name','Mixtla de Altamirano')->first()->id
],

['name' => 'Matlatecoya',
'city_id' => DB::table('cities')->where('name','Mixtla de Altamirano')->first()->id
],

['name' => 'Tecolotla',
'city_id' => DB::table('cities')->where('name','Mixtla de Altamirano')->first()->id
],

['name' => 'Axoxohuilco',
'city_id' => DB::table('cities')->where('name','Mixtla de Altamirano')->first()->id
],

['name' => 'Reyes',
'city_id' => DB::table('cities')->where('name','Los Reyes')->first()->id
],

['name' => 'Tlaquetzala',
'city_id' => DB::table('cities')->where('name','Los Reyes')->first()->id
],

['name' => 'Atlanca',
'city_id' => DB::table('cities')->where('name','Los Reyes')->first()->id
],

['name' => 'Zoquiapa',
'city_id' => DB::table('cities')->where('name','Los Reyes')->first()->id
],

['name' => 'Cuacaballo',
'city_id' => DB::table('cities')->where('name','Los Reyes')->first()->id
],

['name' => 'Tlanestla',
'city_id' => DB::table('cities')->where('name','Los Reyes')->first()->id
],

['name' => 'Texhuacan',
'city_id' => DB::table('cities')->where('name','Texhuacán')->first()->id
],

['name' => 'Atzingo',
'city_id' => DB::table('cities')->where('name','Texhuacán')->first()->id
],

['name' => 'Barrio Cuauhtempa',
'city_id' => DB::table('cities')->where('name','Texhuacán')->first()->id
],

['name' => 'Tzatzaca',
'city_id' => DB::table('cities')->where('name','Texhuacán')->first()->id
],

['name' => 'Texutzingo',
'city_id' => DB::table('cities')->where('name','Texhuacán')->first()->id
],

['name' => 'Palulca',
'city_id' => DB::table('cities')->where('name','Texhuacán')->first()->id
],

['name' => 'Tlalca',
'city_id' => DB::table('cities')->where('name','Texhuacán')->first()->id
],

['name' => 'El Mirador',
'city_id' => DB::table('cities')->where('name','Texhuacán')->first()->id
],

['name' => 'Barrio Nuevo',
'city_id' => DB::table('cities')->where('name','Tezonapa')->first()->id
],

['name' => 'Colonia Agrícola Independencia',
'city_id' => DB::table('cities')->where('name','Tezonapa')->first()->id
],

['name' => 'Colonia Ignacio Escobar Contreras',
'city_id' => DB::table('cities')->where('name','Tezonapa')->first()->id
],

['name' => 'Colonia Santa María',
'city_id' => DB::table('cities')->where('name','Tezonapa')->first()->id
],

['name' => 'El Manguito (El Valle)',
'city_id' => DB::table('cities')->where('name','Tezonapa')->first()->id
],

['name' => 'Joya Honda',
'city_id' => DB::table('cities')->where('name','Tezonapa')->first()->id
],

['name' => 'Lomas Verdes',
'city_id' => DB::table('cities')->where('name','Tezonapa')->first()->id
],

['name' => 'Maravillas (Los Quiaguas)',
'city_id' => DB::table('cities')->where('name','Tezonapa')->first()->id
],

['name' => 'Primera Ampliación San Gabriel',
'city_id' => DB::table('cities')->where('name','Tezonapa')->first()->id
],

['name' => 'San José Buenavista',
'city_id' => DB::table('cities')->where('name','Tezonapa')->first()->id
],

['name' => 'El Cedro',
'city_id' => DB::table('cities')->where('name','Tezonapa')->first()->id
],

['name' => 'Laguna Chica (Pueblo Nuevo)',
'city_id' => DB::table('cities')->where('name','Tezonapa')->first()->id
],

['name' => 'San Agustín del Palmar',
'city_id' => DB::table('cities')->where('name','Tezonapa')->first()->id
],

['name' => 'San Jerónimo Manzanares',
'city_id' => DB::table('cities')->where('name','Tezonapa')->first()->id
],

['name' => 'Los Montieles',
'city_id' => DB::table('cities')->where('name','Tezonapa')->first()->id
],

['name' => 'Cuajilote',
'city_id' => DB::table('cities')->where('name','Tezonapa')->first()->id
],

['name' => 'Altotonga',
'city_id' => DB::table('cities')->where('name','Tezonapa')->first()->id
],

['name' => 'El Palmar [Campo Agrícola Experimental]',
'city_id' => DB::table('cities')->where('name','Tezonapa')->first()->id
],

['name' => 'La Unión',
'city_id' => DB::table('cities')->where('name','Tezonapa')->first()->id
],

['name' => 'Paso Tigre (La Unión)',
'city_id' => DB::table('cities')->where('name','Tezonapa')->first()->id
],

['name' => 'San Gabriel',
'city_id' => DB::table('cities')->where('name','Tezonapa')->first()->id
],

['name' => 'Las Maravillas',
'city_id' => DB::table('cities')->where('name','Tezonapa')->first()->id
],

['name' => 'El Triunfo',
'city_id' => DB::table('cities')->where('name','Tezonapa')->first()->id
],

['name' => 'Úrsulo Galván',
'city_id' => DB::table('cities')->where('name','Tezonapa')->first()->id
],

['name' => 'Rancho Chico',
'city_id' => DB::table('cities')->where('name','Tezonapa')->first()->id
],

['name' => 'La Luisa',
'city_id' => DB::table('cities')->where('name','Tezonapa')->first()->id
],

['name' => 'El Aguapinole',
'city_id' => DB::table('cities')->where('name','Tezonapa')->first()->id
],

['name' => 'La Pochota',
'city_id' => DB::table('cities')->where('name','Tezonapa')->first()->id
],

['name' => 'El Filete (El Calvario)',
'city_id' => DB::table('cities')->where('name','Tezonapa')->first()->id
],

['name' => 'Cafetera Veracruzana (La Joya)',
'city_id' => DB::table('cities')->where('name','Tezonapa')->first()->id
],

['name' => 'Cerro Seco',
'city_id' => DB::table('cities')->where('name','Tezonapa')->first()->id
],

['name' => 'Los Chacones',
'city_id' => DB::table('cities')->where('name','Tezonapa')->first()->id
],

['name' => 'Tobón',
'city_id' => DB::table('cities')->where('name','Tezonapa')->first()->id
],

['name' => 'Tepetzingo',
'city_id' => DB::table('cities')->where('name','Tezonapa')->first()->id
],

['name' => 'Puente Chilapa',
'city_id' => DB::table('cities')->where('name','Tezonapa')->first()->id
],

['name' => 'Rancho Chilapa',
'city_id' => DB::table('cities')->where('name','Tezonapa')->first()->id
],

['name' => 'El Suspiro',
'city_id' => DB::table('cities')->where('name','Tezonapa')->first()->id
],

['name' => 'Las Palomas',
'city_id' => DB::table('cities')->where('name','Tezonapa')->first()->id
],

['name' => 'Cedro Quemado',
'city_id' => DB::table('cities')->where('name','Tezonapa')->first()->id
],

['name' => 'Atlizacuapan',
'city_id' => DB::table('cities')->where('name','Tezonapa')->first()->id
],

['name' => 'El Progreso',
'city_id' => DB::table('cities')->where('name','Tezonapa')->first()->id
],

['name' => 'Las Limas',
'city_id' => DB::table('cities')->where('name','Tezonapa')->first()->id
],

['name' => 'Guía del Porvenir',
'city_id' => DB::table('cities')->where('name','Tezonapa')->first()->id
],

['name' => 'Los García',
'city_id' => DB::table('cities')->where('name','Tezonapa')->first()->id
],

['name' => 'El Vado',
'city_id' => DB::table('cities')->where('name','Tezonapa')->first()->id
],

['name' => 'Las Josefinas',
'city_id' => DB::table('cities')->where('name','Tezonapa')->first()->id
],

['name' => 'Palmarito',
'city_id' => DB::table('cities')->where('name','Tezonapa')->first()->id
],

['name' => 'Ixtacapa el Chico',
'city_id' => DB::table('cities')->where('name','Tezonapa')->first()->id
],

['name' => 'La Galera San Miguel',
'city_id' => DB::table('cities')->where('name','Tezonapa')->first()->id
],

['name' => 'Galera Chica',
'city_id' => DB::table('cities')->where('name','Tezonapa')->first()->id
],

['name' => 'Yohualtepec',
'city_id' => DB::table('cities')->where('name','Tezonapa')->first()->id
],

['name' => 'Xocoapa',
'city_id' => DB::table('cities')->where('name','Tezonapa')->first()->id
],

['name' => 'Santa Cruz (Cachalapa)',
'city_id' => DB::table('cities')->where('name','Tezonapa')->first()->id
],

['name' => 'Atlipozonia Viejo',
'city_id' => DB::table('cities')->where('name','Tezonapa')->first()->id
],

['name' => 'Juan Pablo II',
'city_id' => DB::table('cities')->where('name','Tezonapa')->first()->id
],

['name' => 'Caxapa',
'city_id' => DB::table('cities')->where('name','Tezonapa')->first()->id
],

['name' => 'Raya Caracol',
'city_id' => DB::table('cities')->where('name','Tezonapa')->first()->id
],

['name' => 'El Sol',
'city_id' => DB::table('cities')->where('name','Tezonapa')->first()->id
],

['name' => 'La Luna',
'city_id' => DB::table('cities')->where('name','Tezonapa')->first()->id
],

['name' => 'Monte Alto (Emiliano Zapata)',
'city_id' => DB::table('cities')->where('name','Tezonapa')->first()->id
],

['name' => 'La Gloria',
'city_id' => DB::table('cities')->where('name','Tezonapa')->first()->id
],

['name' => 'Ixtacapa el Grande',
'city_id' => DB::table('cities')->where('name','Tezonapa')->first()->id
],

['name' => 'Atlipozonia',
'city_id' => DB::table('cities')->where('name','Tezonapa')->first()->id
],

['name' => 'Rancho Alegre',
'city_id' => DB::table('cities')->where('name','Tezonapa')->first()->id
],

['name' => 'Adolfo Ruiz Cortines',
'city_id' => DB::table('cities')->where('name','Tezonapa')->first()->id
],

['name' => 'Buenavista (Las Josefinas)',
'city_id' => DB::table('cities')->where('name','Tezonapa')->first()->id
],

['name' => 'Adolfo López Mateos',
'city_id' => DB::table('cities')->where('name','Tezonapa')->first()->id
],

['name' => 'El Crucero (Colonia las Josefinas)',
'city_id' => DB::table('cities')->where('name','Tezonapa')->first()->id
],

['name' => 'El Mirador',
'city_id' => DB::table('cities')->where('name','Tezonapa')->first()->id
],

['name' => 'San José las Lajas (Villa Nueva)',
'city_id' => DB::table('cities')->where('name','Tezonapa')->first()->id
],

['name' => 'San Miguel Tenejapa',
'city_id' => DB::table('cities')->where('name','Tezonapa')->first()->id
],

['name' => 'Cesekapa',
'city_id' => DB::table('cities')->where('name','Tezonapa')->first()->id
],

['name' => 'Rancho Nuevo',
'city_id' => DB::table('cities')->where('name','Tezonapa')->first()->id
],

['name' => 'El Palmar Grande',
'city_id' => DB::table('cities')->where('name','Tezonapa')->first()->id
],

['name' => 'Tilica',
'city_id' => DB::table('cities')->where('name','Tezonapa')->first()->id
],

['name' => 'Almilinga (Santo Domingo Manzanares)',
'city_id' => DB::table('cities')->where('name','Tezonapa')->first()->id
],

['name' => 'Vista Hermosa',
'city_id' => DB::table('cities')->where('name','Tezonapa')->first()->id
],

['name' => 'Ejecatépetl',
'city_id' => DB::table('cities')->where('name','Tezonapa')->first()->id
],

['name' => 'Tepetlampa',
'city_id' => DB::table('cities')->where('name','Tezonapa')->first()->id
],

['name' => 'Limonestitla',
'city_id' => DB::table('cities')->where('name','Tezonapa')->first()->id
],

['name' => 'Xinicuila (Paso Viejo)',
'city_id' => DB::table('cities')->where('name','Tezonapa')->first()->id
],

['name' => 'La Victoria (San Joaquín)',
'city_id' => DB::table('cities')->where('name','Tezonapa')->first()->id
],

['name' => 'Soyatla (Tenexapa)',
'city_id' => DB::table('cities')->where('name','Tezonapa')->first()->id
],

['name' => 'Tecuanapa',
'city_id' => DB::table('cities')->where('name','Tezonapa')->first()->id
],

['name' => 'Altamira',
'city_id' => DB::table('cities')->where('name','Tezonapa')->first()->id
],

['name' => 'Libertad Cerro de Agua',
'city_id' => DB::table('cities')->where('name','Tezonapa')->first()->id
],

['name' => 'San Juan (Villa Nueva)',
'city_id' => DB::table('cities')->where('name','Tezonapa')->first()->id
],

['name' => 'Agrícola Marco Antonio Muñoz',
'city_id' => DB::table('cities')->where('name','Tezonapa')->first()->id
],

['name' => 'San Isidro (San Isidro Villa Nueva)',
'city_id' => DB::table('cities')->where('name','Tezonapa')->first()->id
],

['name' => 'Campo Villa Nueva',
'city_id' => DB::table('cities')->where('name','Tezonapa')->first()->id
],

['name' => 'El Aguaje',
'city_id' => DB::table('cities')->where('name','Tezonapa')->first()->id
],

['name' => 'El Tigre',
'city_id' => DB::table('cities')->where('name','Tezonapa')->first()->id
],

['name' => 'Manantiales de los Altos',
'city_id' => DB::table('cities')->where('name','Tezonapa')->first()->id
],

['name' => 'Villa Nueva Panteón',
'city_id' => DB::table('cities')->where('name','Tezonapa')->first()->id
],

['name' => 'Yololtepec',
'city_id' => DB::table('cities')->where('name','Tezonapa')->first()->id
],

['name' => 'Vázquez Vela',
'city_id' => DB::table('cities')->where('name','Tezonapa')->first()->id
],

['name' => 'Villa Nueva (Primera Manzana)',
'city_id' => DB::table('cities')->where('name','Tezonapa')->first()->id
],

['name' => 'Loma Buenavista',
'city_id' => DB::table('cities')->where('name','Tezonapa')->first()->id
],

['name' => 'Francisco Villa Segunda Fracción',
'city_id' => DB::table('cities')->where('name','Tezonapa')->first()->id
],

['name' => 'Potrerillo',
'city_id' => DB::table('cities')->where('name','Tezonapa')->first()->id
],

['name' => 'Villa Hermosa (Villa Nueva)',
'city_id' => DB::table('cities')->where('name','Tezonapa')->first()->id
],

['name' => 'Unión y Progreso (Villa Nueva)',
'city_id' => DB::table('cities')->where('name','Tezonapa')->first()->id
],

['name' => 'Colonia Ignacio Allende',
'city_id' => DB::table('cities')->where('name','Tezonapa')->first()->id
],

['name' => 'San José Atitla',
'city_id' => DB::table('cities')->where('name','Tezonapa')->first()->id
],

['name' => 'Santa Cruz Olintzi',
'city_id' => DB::table('cities')->where('name','Tezonapa')->first()->id
],

['name' => 'Ojo de Agua Grande',
'city_id' => DB::table('cities')->where('name','Tezonapa')->first()->id
],

['name' => 'Xonotla',
'city_id' => DB::table('cities')->where('name','Tezonapa')->first()->id
],

['name' => 'Carrizal',
'city_id' => DB::table('cities')->where('name','Tezonapa')->first()->id
],

['name' => 'San Antonio',
'city_id' => DB::table('cities')->where('name','Tezonapa')->first()->id
],

['name' => 'Agrícola Rincón de las Flores',
'city_id' => DB::table('cities')->where('name','Tezonapa')->first()->id
],

['name' => 'Ojo de Agua Chico',
'city_id' => DB::table('cities')->where('name','Tezonapa')->first()->id
],

['name' => 'Tepecoxtla',
'city_id' => DB::table('cities')->where('name','Tezonapa')->first()->id
],

['name' => 'La Soledad',
'city_id' => DB::table('cities')->where('name','Tezonapa')->first()->id
],

['name' => 'Agua Escondida',
'city_id' => DB::table('cities')->where('name','Tezonapa')->first()->id
],

['name' => 'María Loma San Miguel',
'city_id' => DB::table('cities')->where('name','Tezonapa')->first()->id
],

['name' => 'Tres Cruces',
'city_id' => DB::table('cities')->where('name','Tezonapa')->first()->id
],

['name' => 'Colonia San Bernardo Segunda Fracción',
'city_id' => DB::table('cities')->where('name','Tezonapa')->first()->id
],

['name' => 'Paraíso la Reforma',
'city_id' => DB::table('cities')->where('name','Tezonapa')->first()->id
],

['name' => 'San Bernardo',
'city_id' => DB::table('cities')->where('name','Tezonapa')->first()->id
],

['name' => 'Xometla',
'city_id' => DB::table('cities')->where('name','Tezonapa')->first()->id
],

['name' => 'Presidio (Plan de Libres)',
'city_id' => DB::table('cities')->where('name','Tezonapa')->first()->id
],

['name' => 'Pocitos',
'city_id' => DB::table('cities')->where('name','Tezonapa')->first()->id
],

['name' => 'La Joya (Congregación Paraíso Reforma)',
'city_id' => DB::table('cities')->where('name','Tezonapa')->first()->id
],

['name' => 'El Astillero',
'city_id' => DB::table('cities')->where('name','Tezonapa')->first()->id
],

['name' => 'La Caseta',
'city_id' => DB::table('cities')->where('name','Tezonapa')->first()->id
],

['name' => 'Pozo Blanco (El Retiro)',
'city_id' => DB::table('cities')->where('name','Tezonapa')->first()->id
],

['name' => 'La Roma Chica',
'city_id' => DB::table('cities')->where('name','Tezonapa')->first()->id
],

['name' => 'Francisco Villa Primera Fracción (San Bernardo)',
'city_id' => DB::table('cities')->where('name','Tezonapa')->first()->id
],

['name' => 'Unión Agrícola',
'city_id' => DB::table('cities')->where('name','Tezonapa')->first()->id
],

['name' => 'Paraíso Viejo',
'city_id' => DB::table('cities')->where('name','Tezonapa')->first()->id
],

['name' => 'Morelos (Congregación Vázquez Vela)',
'city_id' => DB::table('cities')->where('name','Tezonapa')->first()->id
],

['name' => 'La Toma',
'city_id' => DB::table('cities')->where('name','Tezonapa')->first()->id
],

['name' => 'La Paz',
'city_id' => DB::table('cities')->where('name','Tezonapa')->first()->id
],

['name' => 'El Otate',
'city_id' => DB::table('cities')->where('name','Tezonapa')->first()->id
],

['name' => 'Nicoxcotla',
'city_id' => DB::table('cities')->where('name','Tezonapa')->first()->id
],

['name' => 'Los Alfaro',
'city_id' => DB::table('cities')->where('name','Tezonapa')->first()->id
],

['name' => 'Miramar',
'city_id' => DB::table('cities')->where('name','Tezonapa')->first()->id
],

['name' => 'Paso Rayón',
'city_id' => DB::table('cities')->where('name','Tezonapa')->first()->id
],

['name' => 'Motzorongo',
'city_id' => DB::table('cities')->where('name','Tezonapa')->first()->id
],

['name' => 'Empleados',
'city_id' => DB::table('cities')->where('name','Tezonapa')->first()->id
],

['name' => 'Cerro Azul',
'city_id' => DB::table('cities')->where('name','Tezonapa')->first()->id
],

['name' => 'San Isidro',
'city_id' => DB::table('cities')->where('name','Tezonapa')->first()->id
],

['name' => 'La Esperanza',
'city_id' => DB::table('cities')->where('name','Tezonapa')->first()->id
],

['name' => 'Las Flores',
'city_id' => DB::table('cities')->where('name','Tezonapa')->first()->id
],

['name' => 'Tezonapa Centro',
'city_id' => DB::table('cities')->where('name','Tezonapa')->first()->id
],

['name' => 'Barranca Seca',
'city_id' => DB::table('cities')->where('name','Tezonapa')->first()->id
],

['name' => 'El Mirador',
'city_id' => DB::table('cities')->where('name','Tezonapa')->first()->id
],

['name' => 'Las Flores',
'city_id' => DB::table('cities')->where('name','Tezonapa')->first()->id
],

['name' => 'La Herradura',
'city_id' => DB::table('cities')->where('name','Tezonapa')->first()->id
],

['name' => 'El Naranjal',
'city_id' => DB::table('cities')->where('name','Tezonapa')->first()->id
],

['name' => 'Benito Juárez',
'city_id' => DB::table('cities')->where('name','Tezonapa')->first()->id
],

['name' => 'Obrera Vieja',
'city_id' => DB::table('cities')->where('name','Tezonapa')->first()->id
],

['name' => 'El Progreso',
'city_id' => DB::table('cities')->where('name','Tezonapa')->first()->id
],

['name' => 'Madero',
'city_id' => DB::table('cities')->where('name','Tezonapa')->first()->id
],

['name' => 'Santa Cruz',
'city_id' => DB::table('cities')->where('name','Tezonapa')->first()->id
],

['name' => 'El Silbato',
'city_id' => DB::table('cities')->where('name','Tezonapa')->first()->id
],

['name' => 'Tierra Blanca Centro',
'city_id' => DB::table('cities')->where('name','Tierra Blanca')->first()->id
],

['name' => 'Hojas de Maíz',
'city_id' => DB::table('cities')->where('name','Tierra Blanca')->first()->id
],

['name' => 'Luis Echeverría Alvarez',
'city_id' => DB::table('cities')->where('name','Tierra Blanca')->first()->id
],

['name' => 'Ugocep',
'city_id' => DB::table('cities')->where('name','Tierra Blanca')->first()->id
],

['name' => 'Infonavit Quechuleño',
'city_id' => DB::table('cities')->where('name','Tierra Blanca')->first()->id
],

['name' => 'Infonavit Quechuleño II',
'city_id' => DB::table('cities')->where('name','Tierra Blanca')->first()->id
],

['name' => 'Unidad Deportiva',
'city_id' => DB::table('cities')->where('name','Tierra Blanca')->first()->id
],

['name' => 'El Recreo',
'city_id' => DB::table('cities')->where('name','Tierra Blanca')->first()->id
],

['name' => 'Loma del Carmen',
'city_id' => DB::table('cities')->where('name','Tierra Blanca')->first()->id
],

['name' => 'Miraflores',
'city_id' => DB::table('cities')->where('name','Tierra Blanca')->first()->id
],

['name' => 'Lomas de Tierra Blanca',
'city_id' => DB::table('cities')->where('name','Tierra Blanca')->first()->id
],

['name' => 'Fonhapo',
'city_id' => DB::table('cities')->where('name','Tierra Blanca')->first()->id
],

['name' => 'Federal',
'city_id' => DB::table('cities')->where('name','Tierra Blanca')->first()->id
],

['name' => 'Fredepo',
'city_id' => DB::table('cities')->where('name','Tierra Blanca')->first()->id
],

['name' => 'Segundo Verde',
'city_id' => DB::table('cities')->where('name','Tierra Blanca')->first()->id
],

['name' => 'Infonavit',
'city_id' => DB::table('cities')->where('name','Tierra Blanca')->first()->id
],

['name' => 'Jesús Garcia Coronado',
'city_id' => DB::table('cities')->where('name','Tierra Blanca')->first()->id
],

['name' => 'Los Chilangos',
'city_id' => DB::table('cities')->where('name','Tierra Blanca')->first()->id
],

['name' => 'Lomas Verdes',
'city_id' => DB::table('cities')->where('name','Tierra Blanca')->first()->id
],

['name' => 'Del Valle',
'city_id' => DB::table('cities')->where('name','Tierra Blanca')->first()->id
],

['name' => 'El Nanche',
'city_id' => DB::table('cities')->where('name','Tierra Blanca')->first()->id
],

['name' => 'Puerta Negra',
'city_id' => DB::table('cities')->where('name','Tierra Blanca')->first()->id
],

['name' => 'Torreón',
'city_id' => DB::table('cities')->where('name','Tierra Blanca')->first()->id
],

['name' => 'Elvira',
'city_id' => DB::table('cities')->where('name','Tierra Blanca')->first()->id
],

['name' => 'Roma',
'city_id' => DB::table('cities')->where('name','Tierra Blanca')->first()->id
],

['name' => 'Rancho Grande',
'city_id' => DB::table('cities')->where('name','Tierra Blanca')->first()->id
],

['name' => 'Emiliano Zapata',
'city_id' => DB::table('cities')->where('name','Tierra Blanca')->first()->id
],

['name' => 'Benito Juárez',
'city_id' => DB::table('cities')->where('name','Tierra Blanca')->first()->id
],

['name' => 'Lomas Del Jazmín',
'city_id' => DB::table('cities')->where('name','Tierra Blanca')->first()->id
],

['name' => 'Lomas de Sotelo',
'city_id' => DB::table('cities')->where('name','Tierra Blanca')->first()->id
],

['name' => 'Nuevo Zapata',
'city_id' => DB::table('cities')->where('name','Tierra Blanca')->first()->id
],

['name' => 'Las Flores',
'city_id' => DB::table('cities')->where('name','Tierra Blanca')->first()->id
],

['name' => 'Cojinillo',
'city_id' => DB::table('cities')->where('name','Tierra Blanca')->first()->id
],

['name' => 'Nueva',
'city_id' => DB::table('cities')->where('name','Tierra Blanca')->first()->id
],

['name' => 'Las Colmenas',
'city_id' => DB::table('cities')->where('name','Tierra Blanca')->first()->id
],

['name' => 'La Arenera',
'city_id' => DB::table('cities')->where('name','Tierra Blanca')->first()->id
],

['name' => '12 de Noviembre',
'city_id' => DB::table('cities')->where('name','Tierra Blanca')->first()->id
],

['name' => 'Ampliación Cojinillo',
'city_id' => DB::table('cities')->where('name','Tierra Blanca')->first()->id
],

['name' => 'Santa Lucrecia',
'city_id' => DB::table('cities')->where('name','Tierra Blanca')->first()->id
],

['name' => 'Terraplen',
'city_id' => DB::table('cities')->where('name','Tierra Blanca')->first()->id
],

['name' => 'PEMEX',
'city_id' => DB::table('cities')->where('name','Tierra Blanca')->first()->id
],

['name' => 'Tierra Blanca El Viejo',
'city_id' => DB::table('cities')->where('name','Tierra Blanca')->first()->id
],

['name' => 'Lomas de Guadalupe',
'city_id' => DB::table('cities')->where('name','Tierra Blanca')->first()->id
],

['name' => 'Lázaro Cárdenas',
'city_id' => DB::table('cities')->where('name','Tierra Blanca')->first()->id
],

['name' => 'Obrera',
'city_id' => DB::table('cities')->where('name','Tierra Blanca')->first()->id
],

['name' => '20 de Noviembre',
'city_id' => DB::table('cities')->where('name','Tierra Blanca')->first()->id
],

['name' => 'San Rosendo',
'city_id' => DB::table('cities')->where('name','Tierra Blanca')->first()->id
],

['name' => 'Flores Magón',
'city_id' => DB::table('cities')->where('name','Tierra Blanca')->first()->id
],

['name' => 'Primero de Mayo',
'city_id' => DB::table('cities')->where('name','Tierra Blanca')->first()->id
],

['name' => '6 de Enero',
'city_id' => DB::table('cities')->where('name','Tierra Blanca')->first()->id
],

['name' => '20 de Junio',
'city_id' => DB::table('cities')->where('name','Tierra Blanca')->first()->id
],

['name' => 'Las Lajitas',
'city_id' => DB::table('cities')->where('name','Tierra Blanca')->first()->id
],

['name' => 'Nopiloa',
'city_id' => DB::table('cities')->where('name','Tierra Blanca')->first()->id
],

['name' => 'El Contento',
'city_id' => DB::table('cities')->where('name','Tierra Blanca')->first()->id
],

['name' => 'Joachin',
'city_id' => DB::table('cities')->where('name','Tierra Blanca')->first()->id
],

['name' => 'Paso Escondido (Rincón Escondido)',
'city_id' => DB::table('cities')->where('name','Tierra Blanca')->first()->id
],

['name' => 'La Angostura',
'city_id' => DB::table('cities')->where('name','Tierra Blanca')->first()->id
],

['name' => 'Paso Coyote',
'city_id' => DB::table('cities')->where('name','Tierra Blanca')->first()->id
],

['name' => 'El Coyote',
'city_id' => DB::table('cities')->where('name','Tierra Blanca')->first()->id
],

['name' => 'Los Cedros',
'city_id' => DB::table('cities')->where('name','Tierra Blanca')->first()->id
],

['name' => 'Las Conchas',
'city_id' => DB::table('cities')->where('name','Tierra Blanca')->first()->id
],

['name' => 'San Rafael',
'city_id' => DB::table('cities')->where('name','Tierra Blanca')->first()->id
],

['name' => 'El Amate',
'city_id' => DB::table('cities')->where('name','Tierra Blanca')->first()->id
],

['name' => 'Serenilla de Abajo',
'city_id' => DB::table('cities')->where('name','Tierra Blanca')->first()->id
],

['name' => 'Quechuleño',
'city_id' => DB::table('cities')->where('name','Tierra Blanca')->first()->id
],

['name' => 'Santa Rosa',
'city_id' => DB::table('cities')->where('name','Tierra Blanca')->first()->id
],

['name' => 'Santa Elena',
'city_id' => DB::table('cities')->where('name','Tierra Blanca')->first()->id
],

['name' => 'La Tepetaca',
'city_id' => DB::table('cities')->where('name','Tierra Blanca')->first()->id
],

['name' => 'Roberto Barrios',
'city_id' => DB::table('cities')->where('name','Tierra Blanca')->first()->id
],

['name' => 'Quechuleño',
'city_id' => DB::table('cities')->where('name','Tierra Blanca')->first()->id
],

['name' => 'Las Prietas',
'city_id' => DB::table('cities')->where('name','Tierra Blanca')->first()->id
],

['name' => 'Buena Vista',
'city_id' => DB::table('cities')->where('name','Tierra Blanca')->first()->id
],

['name' => 'Primero de Mayo',
'city_id' => DB::table('cities')->where('name','Tierra Blanca')->first()->id
],

['name' => 'Paso Nuevo',
'city_id' => DB::table('cities')->where('name','Tierra Blanca')->first()->id
],

['name' => 'Loma del Izote (Mata Planta)',
'city_id' => DB::table('cities')->where('name','Tierra Blanca')->first()->id
],

['name' => 'Paso Magueyitos',
'city_id' => DB::table('cities')->where('name','Tierra Blanca')->first()->id
],

['name' => 'Salvador Gonzalo García',
'city_id' => DB::table('cities')->where('name','Tierra Blanca')->first()->id
],

['name' => 'Los Mangos',
'city_id' => DB::table('cities')->where('name','Tierra Blanca')->first()->id
],

['name' => 'Mata Redonda',
'city_id' => DB::table('cities')->where('name','Tierra Blanca')->first()->id
],

['name' => 'Rodriguez Tejeda',
'city_id' => DB::table('cities')->where('name','Tierra Blanca')->first()->id
],

['name' => 'Pitalillo (Pinolillo)',
'city_id' => DB::table('cities')->where('name','Tierra Blanca')->first()->id
],

['name' => 'La Campana',
'city_id' => DB::table('cities')->where('name','Tierra Blanca')->first()->id
],

['name' => 'Mata Borrego',
'city_id' => DB::table('cities')->where('name','Tierra Blanca')->first()->id
],

['name' => 'Enrique Rodríguez Cano',
'city_id' => DB::table('cities')->where('name','Tierra Blanca')->first()->id
],

['name' => 'Los Horcones',
'city_id' => DB::table('cities')->where('name','Tierra Blanca')->first()->id
],

['name' => 'Huixcolotla',
'city_id' => DB::table('cities')->where('name','Tierra Blanca')->first()->id
],

['name' => 'Paso del Ganado',
'city_id' => DB::table('cities')->where('name','Tierra Blanca')->first()->id
],

['name' => 'Gral. Marquez Galindo',
'city_id' => DB::table('cities')->where('name','Tierra Blanca')->first()->id
],

['name' => 'Ejido las Flores',
'city_id' => DB::table('cities')->where('name','Tierra Blanca')->first()->id
],

['name' => 'Nuevo Villa de Ojitlán',
'city_id' => DB::table('cities')->where('name','Tierra Blanca')->first()->id
],

['name' => 'Ideal de Arriba',
'city_id' => DB::table('cities')->where('name','Tierra Blanca')->first()->id
],

['name' => 'El Codo',
'city_id' => DB::table('cities')->where('name','Tierra Blanca')->first()->id
],

['name' => 'San Nicolás (La Burrera)',
'city_id' => DB::table('cities')->where('name','Tierra Blanca')->first()->id
],

['name' => 'Arroyo Hondo',
'city_id' => DB::table('cities')->where('name','Tierra Blanca')->first()->id
],

['name' => 'El Moral',
'city_id' => DB::table('cities')->where('name','Tierra Blanca')->first()->id
],

['name' => 'Paso Canoa',
'city_id' => DB::table('cities')->where('name','Tierra Blanca')->first()->id
],

['name' => 'Moreno Sur',
'city_id' => DB::table('cities')->where('name','Tierra Blanca')->first()->id
],

['name' => 'Jicaro',
'city_id' => DB::table('cities')->where('name','Tierra Blanca')->first()->id
],

['name' => 'Loma del Caballo',
'city_id' => DB::table('cities')->where('name','Tierra Blanca')->first()->id
],

['name' => 'La Cruz del Cedro',
'city_id' => DB::table('cities')->where('name','Tierra Blanca')->first()->id
],

['name' => 'San José del Cacao',
'city_id' => DB::table('cities')->where('name','Tierra Blanca')->first()->id
],

['name' => 'La Barahunda',
'city_id' => DB::table('cities')->where('name','Tierra Blanca')->first()->id
],

['name' => 'Palma Sola',
'city_id' => DB::table('cities')->where('name','Tierra Blanca')->first()->id
],

['name' => 'Atalaya',
'city_id' => DB::table('cities')->where('name','Tierra Blanca')->first()->id
],

['name' => 'La Victoria (San Joaquín)',
'city_id' => DB::table('cities')->where('name','Tierra Blanca')->first()->id
],

['name' => 'San Joaquín',
'city_id' => DB::table('cities')->where('name','Tierra Blanca')->first()->id
],

['name' => 'Loma Alta',
'city_id' => DB::table('cities')->where('name','Tierra Blanca')->first()->id
],

['name' => 'El Progreso',
'city_id' => DB::table('cities')->where('name','Tierra Blanca')->first()->id
],

['name' => 'El Palenque',
'city_id' => DB::table('cities')->where('name','Tierra Blanca')->first()->id
],

['name' => 'Tlalixcoyan',
'city_id' => DB::table('cities')->where('name','Tlalixcoyan')->first()->id
],

['name' => 'La Víbora (La Reforma)',
'city_id' => DB::table('cities')->where('name','Tlalixcoyan')->first()->id
],

['name' => 'Pozuelo',
'city_id' => DB::table('cities')->where('name','Tlalixcoyan')->first()->id
],

['name' => 'Santa Guillermina (La Parada Nueva)',
'city_id' => DB::table('cities')->where('name','Tlalixcoyan')->first()->id
],

['name' => 'El Manguito',
'city_id' => DB::table('cities')->where('name','Tlalixcoyan')->first()->id
],

['name' => 'Tatuano',
'city_id' => DB::table('cities')->where('name','Tlalixcoyan')->first()->id
],

['name' => 'Hawai',
'city_id' => DB::table('cities')->where('name','Tlalixcoyan')->first()->id
],

['name' => 'La Báscula',
'city_id' => DB::table('cities')->where('name','Tlalixcoyan')->first()->id
],

['name' => 'El Paseo',
'city_id' => DB::table('cities')->where('name','Tlalixcoyan')->first()->id
],

['name' => 'El Rubí',
'city_id' => DB::table('cities')->where('name','Tlalixcoyan')->first()->id
],

['name' => 'Joluca',
'city_id' => DB::table('cities')->where('name','Tlalixcoyan')->first()->id
],

['name' => 'La Tuna Morelos',
'city_id' => DB::table('cities')->where('name','Tlalixcoyan')->first()->id
],

['name' => 'Santa Guillermina',
'city_id' => DB::table('cities')->where('name','Tlalixcoyan')->first()->id
],

['name' => 'El Mirador',
'city_id' => DB::table('cities')->where('name','Tlalixcoyan')->first()->id
],

['name' => 'Los Jobitos',
'city_id' => DB::table('cities')->where('name','Tlalixcoyan')->first()->id
],

['name' => 'El Guamichal',
'city_id' => DB::table('cities')->where('name','Tlalixcoyan')->first()->id
],

['name' => 'El Buey',
'city_id' => DB::table('cities')->where('name','Tlalixcoyan')->first()->id
],

['name' => 'Los Negritos',
'city_id' => DB::table('cities')->where('name','Tlalixcoyan')->first()->id
],

['name' => 'Tamarindo',
'city_id' => DB::table('cities')->where('name','Tlalixcoyan')->first()->id
],

['name' => 'El Ojochal',
'city_id' => DB::table('cities')->where('name','Tlalixcoyan')->first()->id
],

['name' => 'La Breña',
'city_id' => DB::table('cities')->where('name','Tlalixcoyan')->first()->id
],

['name' => 'Recreo Segundo',
'city_id' => DB::table('cities')->where('name','Tlalixcoyan')->first()->id
],

['name' => 'Puente de la Boca',
'city_id' => DB::table('cities')->where('name','Tlalixcoyan')->first()->id
],

['name' => 'El Papayal',
'city_id' => DB::table('cities')->where('name','Tlalixcoyan')->first()->id
],

['name' => 'El Palmar',
'city_id' => DB::table('cities')->where('name','Tlalixcoyan')->first()->id
],

['name' => 'Los Tonalmiles',
'city_id' => DB::table('cities')->where('name','Tlalixcoyan')->first()->id
],

['name' => 'La Camacha',
'city_id' => DB::table('cities')->where('name','Tlalixcoyan')->first()->id
],

['name' => 'Cerro de las Conchas',
'city_id' => DB::table('cities')->where('name','Tlalixcoyan')->first()->id
],

['name' => 'Laguna de Rojas (Pueblo Nuevo)',
'city_id' => DB::table('cities')->where('name','Tlalixcoyan')->first()->id
],

['name' => 'Rojas',
'city_id' => DB::table('cities')->where('name','Tlalixcoyan')->first()->id
],

['name' => 'El Ojoche',
'city_id' => DB::table('cities')->where('name','Tlalixcoyan')->first()->id
],

['name' => 'El Moste',
'city_id' => DB::table('cities')->where('name','Tlalixcoyan')->first()->id
],

['name' => 'Yucatán',
'city_id' => DB::table('cities')->where('name','Tlalixcoyan')->first()->id
],

['name' => 'La Isleta',
'city_id' => DB::table('cities')->where('name','Tlalixcoyan')->first()->id
],

['name' => 'El Picho',
'city_id' => DB::table('cities')->where('name','Tlalixcoyan')->first()->id
],

['name' => 'La Yagua',
'city_id' => DB::table('cities')->where('name','Tlalixcoyan')->first()->id
],

['name' => 'El Coyol',
'city_id' => DB::table('cities')->where('name','Tlalixcoyan')->first()->id
],

['name' => 'Los Yeguales',
'city_id' => DB::table('cities')->where('name','Tlalixcoyan')->first()->id
],

['name' => 'Tarcuaya',
'city_id' => DB::table('cities')->where('name','Tlalixcoyan')->first()->id
],

['name' => 'La Pita',
'city_id' => DB::table('cities')->where('name','Tlalixcoyan')->first()->id
],

['name' => 'El Piñal',
'city_id' => DB::table('cities')->where('name','Tlalixcoyan')->first()->id
],

['name' => 'Los Cerros',
'city_id' => DB::table('cities')->where('name','Tlalixcoyan')->first()->id
],

['name' => 'Cerro Galán',
'city_id' => DB::table('cities')->where('name','Tlalixcoyan')->first()->id
],

['name' => 'El Recreo',
'city_id' => DB::table('cities')->where('name','Tlalixcoyan')->first()->id
],

['name' => 'El Zapote',
'city_id' => DB::table('cities')->where('name','Tlalixcoyan')->first()->id
],

['name' => 'Tuzales',
'city_id' => DB::table('cities')->where('name','Tlalixcoyan')->first()->id
],

['name' => 'Los Amatones',
'city_id' => DB::table('cities')->where('name','Tlalixcoyan')->first()->id
],

['name' => 'La Victoria',
'city_id' => DB::table('cities')->where('name','Tlalixcoyan')->first()->id
],

['name' => 'El Cristo',
'city_id' => DB::table('cities')->where('name','Tlalixcoyan')->first()->id
],

['name' => 'Las Cruces',
'city_id' => DB::table('cities')->where('name','Tlalixcoyan')->first()->id
],

['name' => 'Loma del Carmen Dos',
'city_id' => DB::table('cities')->where('name','Tlalixcoyan')->first()->id
],

['name' => 'El Dorado',
'city_id' => DB::table('cities')->where('name','Tlalixcoyan')->first()->id
],

['name' => 'Ramón Vargas',
'city_id' => DB::table('cities')->where('name','Tlalixcoyan')->first()->id
],

['name' => 'El Triunfo (La Providencia)',
'city_id' => DB::table('cities')->where('name','Tlalixcoyan')->first()->id
],

['name' => 'Mata de Lázaro',
'city_id' => DB::table('cities')->where('name','Tlalixcoyan')->first()->id
],

['name' => 'Piedras Negras',
'city_id' => DB::table('cities')->where('name','Tlalixcoyan')->first()->id
],

['name' => 'El Ahijadero',
'city_id' => DB::table('cities')->where('name','Tlalixcoyan')->first()->id
],

['name' => 'Cuyucuenda',
'city_id' => DB::table('cities')->where('name','Tlalixcoyan')->first()->id
],

['name' => 'La Gloria',
'city_id' => DB::table('cities')->where('name','Tlalixcoyan')->first()->id
],

['name' => 'Rancho Karla',
'city_id' => DB::table('cities')->where('name','Tlalixcoyan')->first()->id
],

['name' => 'La Tranca',
'city_id' => DB::table('cities')->where('name','Tlalixcoyan')->first()->id
],

['name' => 'La Ica',
'city_id' => DB::table('cities')->where('name','Tlalixcoyan')->first()->id
],

['name' => 'Los Tubos',
'city_id' => DB::table('cities')->where('name','Tlalixcoyan')->first()->id
],

['name' => 'La Ponderosa',
'city_id' => DB::table('cities')->where('name','Tlalixcoyan')->first()->id
],

['name' => 'El Cardón',
'city_id' => DB::table('cities')->where('name','Tlalixcoyan')->first()->id
],

['name' => 'Mata de los Dos Toros',
'city_id' => DB::table('cities')->where('name','Tlalixcoyan')->first()->id
],

['name' => 'La Cananga',
'city_id' => DB::table('cities')->where('name','Tlalixcoyan')->first()->id
],

['name' => 'La Florida',
'city_id' => DB::table('cities')->where('name','Tlalixcoyan')->first()->id
],

['name' => 'Rincón Perdido',
'city_id' => DB::table('cities')->where('name','Tlalixcoyan')->first()->id
],

['name' => 'Plan de Villa',
'city_id' => DB::table('cities')->where('name','Tlalixcoyan')->first()->id
],

['name' => 'Mata del Cedro',
'city_id' => DB::table('cities')->where('name','Tlalixcoyan')->first()->id
],

['name' => 'La Camelia',
'city_id' => DB::table('cities')->where('name','Tlalixcoyan')->first()->id
],

['name' => 'El Avión',
'city_id' => DB::table('cities')->where('name','Tlalixcoyan')->first()->id
],

['name' => 'El Roblito',
'city_id' => DB::table('cities')->where('name','Tlalixcoyan')->first()->id
],

['name' => 'San Simón',
'city_id' => DB::table('cities')->where('name','Tlalixcoyan')->first()->id
],

['name' => 'San José',
'city_id' => DB::table('cities')->where('name','Tlalixcoyan')->first()->id
],

['name' => 'Siete Becerros',
'city_id' => DB::table('cities')->where('name','Tlalixcoyan')->first()->id
],

['name' => 'Bote en Bote',
'city_id' => DB::table('cities')->where('name','Tlalixcoyan')->first()->id
],

['name' => 'El Guayabo',
'city_id' => DB::table('cities')->where('name','Tlalixcoyan')->first()->id
],

['name' => 'Palma Sola',
'city_id' => DB::table('cities')->where('name','Tlalixcoyan')->first()->id
],

['name' => 'El Callejón',
'city_id' => DB::table('cities')->where('name','Tlalixcoyan')->first()->id
],

['name' => 'El Rodeo (Boca del Costal)',
'city_id' => DB::table('cities')->where('name','Tlalixcoyan')->first()->id
],

['name' => 'La India',
'city_id' => DB::table('cities')->where('name','Tlalixcoyan')->first()->id
],

['name' => 'San Antonio',
'city_id' => DB::table('cities')->where('name','Tlalixcoyan')->first()->id
],

['name' => 'Mata Cabestro',
'city_id' => DB::table('cities')->where('name','Tlalixcoyan')->first()->id
],

['name' => 'San Pedro',
'city_id' => DB::table('cities')->where('name','Tlalixcoyan')->first()->id
],

['name' => 'Mata Naranjo (El Muchite)',
'city_id' => DB::table('cities')->where('name','Tlalixcoyan')->first()->id
],

['name' => 'La Selva',
'city_id' => DB::table('cities')->where('name','Tlalixcoyan')->first()->id
],

['name' => 'El Jicaral',
'city_id' => DB::table('cities')->where('name','Tlalixcoyan')->first()->id
],

['name' => 'La Caballera',
'city_id' => DB::table('cities')->where('name','Tlalixcoyan')->first()->id
],

['name' => 'La Rosalía',
'city_id' => DB::table('cities')->where('name','Tlalixcoyan')->first()->id
],

['name' => 'Mundo Nuevo',
'city_id' => DB::table('cities')->where('name','Tlalixcoyan')->first()->id
],

['name' => 'La Tepehua',
'city_id' => DB::table('cities')->where('name','Tlalixcoyan')->first()->id
],

['name' => 'Paso de la Boca',
'city_id' => DB::table('cities')->where('name','Tlalixcoyan')->first()->id
],

['name' => 'El Cocuite',
'city_id' => DB::table('cities')->where('name','Tlalixcoyan')->first()->id
],

['name' => 'Loma Marcial',
'city_id' => DB::table('cities')->where('name','Tlalixcoyan')->first()->id
],

['name' => 'El Edén',
'city_id' => DB::table('cities')->where('name','Tlalixcoyan')->first()->id
],

['name' => 'Nuevo Arroyo Caracol',
'city_id' => DB::table('cities')->where('name','Tlalixcoyan')->first()->id
],

['name' => 'La Josefina',
'city_id' => DB::table('cities')->where('name','Tlalixcoyan')->first()->id
],

['name' => 'Ampliación Isla de Pajaritos',
'city_id' => DB::table('cities')->where('name','Tlalixcoyan')->first()->id
],

['name' => 'Isla de Pajaritos',
'city_id' => DB::table('cities')->where('name','Tlalixcoyan')->first()->id
],

['name' => 'El Jinicuil',
'city_id' => DB::table('cities')->where('name','Tlalixcoyan')->first()->id
],

['name' => 'Cerro Alto',
'city_id' => DB::table('cities')->where('name','Tlalixcoyan')->first()->id
],

['name' => 'Ampliación de Ojochal',
'city_id' => DB::table('cities')->where('name','Tlalixcoyan')->first()->id
],

['name' => 'Balajú',
'city_id' => DB::table('cities')->where('name','Tlalixcoyan')->first()->id
],

['name' => 'Yerba Dulzal',
'city_id' => DB::table('cities')->where('name','Tlalixcoyan')->first()->id
],

['name' => 'El Cedral',
'city_id' => DB::table('cities')->where('name','Tlalixcoyan')->first()->id
],

['name' => 'La Breña',
'city_id' => DB::table('cities')->where('name','Tlalixcoyan')->first()->id
],

['name' => 'La Esperanza (Ramón Ávalos)',
'city_id' => DB::table('cities')->where('name','Tlalixcoyan')->first()->id
],

['name' => 'El Paraíso',
'city_id' => DB::table('cities')->where('name','Tlalixcoyan')->first()->id
],

['name' => 'Los Mora',
'city_id' => DB::table('cities')->where('name','Tlalixcoyan')->first()->id
],

['name' => 'El Tauro',
'city_id' => DB::table('cities')->where('name','Tlalixcoyan')->first()->id
],

['name' => 'El Rodeano',
'city_id' => DB::table('cities')->where('name','Tlalixcoyan')->first()->id
],

['name' => 'La Isleta',
'city_id' => DB::table('cities')->where('name','Tlalixcoyan')->first()->id
],

['name' => 'La Esperanza',
'city_id' => DB::table('cities')->where('name','Tlalixcoyan')->first()->id
],

['name' => 'Paso del Bote',
'city_id' => DB::table('cities')->where('name','Tlalixcoyan')->first()->id
],

['name' => 'El Muchital',
'city_id' => DB::table('cities')->where('name','Tlalixcoyan')->first()->id
],

['name' => 'Calderas',
'city_id' => DB::table('cities')->where('name','Tlalixcoyan')->first()->id
],

['name' => 'Teodoro Valdez',
'city_id' => DB::table('cities')->where('name','Tlalixcoyan')->first()->id
],

['name' => 'El Sauce (Cerro Grande)',
'city_id' => DB::table('cities')->where('name','Tlalixcoyan')->first()->id
],

['name' => 'Paso Carretas',
'city_id' => DB::table('cities')->where('name','Tlalixcoyan')->first()->id
],

['name' => 'El Palotal',
'city_id' => DB::table('cities')->where('name','Tlalixcoyan')->first()->id
],

['name' => 'Santa Ana (Mata de Caña)',
'city_id' => DB::table('cities')->where('name','Tlalixcoyan')->first()->id
],

['name' => 'Loma Blanca',
'city_id' => DB::table('cities')->where('name','Tlalixcoyan')->first()->id
],

['name' => 'Loma Prieta',
'city_id' => DB::table('cities')->where('name','Tlalixcoyan')->first()->id
],

['name' => 'Cucharo',
'city_id' => DB::table('cities')->where('name','Tlalixcoyan')->first()->id
],

['name' => 'El Nuevo Despertar',
'city_id' => DB::table('cities')->where('name','Tlalixcoyan')->first()->id
],

['name' => 'La Noria',
'city_id' => DB::table('cities')->where('name','Tlalixcoyan')->first()->id
],

['name' => 'Otapan',
'city_id' => DB::table('cities')->where('name','Tlalixcoyan')->first()->id
],

['name' => 'Cospalapan',
'city_id' => DB::table('cities')->where('name','Tlalixcoyan')->first()->id
],

['name' => 'La Peineta',
'city_id' => DB::table('cities')->where('name','Tlalixcoyan')->first()->id
],

['name' => 'El Dinámico',
'city_id' => DB::table('cities')->where('name','Tlalixcoyan')->first()->id
],

['name' => 'Nicho Moreno',
'city_id' => DB::table('cities')->where('name','Tlalixcoyan')->first()->id
],

['name' => 'Rancho Morales',
'city_id' => DB::table('cities')->where('name','Tlalixcoyan')->first()->id
],

['name' => 'Loma Alta',
'city_id' => DB::table('cities')->where('name','Tlalixcoyan')->first()->id
],

['name' => 'Loma de Enmedio',
'city_id' => DB::table('cities')->where('name','Tlalixcoyan')->first()->id
],

['name' => 'Mata Verde',
'city_id' => DB::table('cities')->where('name','Tlalixcoyan')->first()->id
],

['name' => 'El Moralillo',
'city_id' => DB::table('cities')->where('name','Tlalixcoyan')->first()->id
],

['name' => 'El Limonal',
'city_id' => DB::table('cities')->where('name','Tlalixcoyan')->first()->id
],

['name' => 'El Remolino',
'city_id' => DB::table('cities')->where('name','Tlalixcoyan')->first()->id
],

['name' => 'Torrecillas',
'city_id' => DB::table('cities')->where('name','Tlalixcoyan')->first()->id
],

['name' => 'Rafael Moreno Lagunes',
'city_id' => DB::table('cities')->where('name','Tlalixcoyan')->first()->id
],

['name' => 'La Magdalena',
'city_id' => DB::table('cities')->where('name','Tlalixcoyan')->first()->id
],

['name' => 'Madereros',
'city_id' => DB::table('cities')->where('name','Tlalixcoyan')->first()->id
],

['name' => 'La Torcaza',
'city_id' => DB::table('cities')->where('name','Tlalixcoyan')->first()->id
],

['name' => 'Llano del Crucero',
'city_id' => DB::table('cities')->where('name','Tlalixcoyan')->first()->id
],

['name' => 'El Bridón',
'city_id' => DB::table('cities')->where('name','Tlalixcoyan')->first()->id
],

['name' => 'El Trapiche',
'city_id' => DB::table('cities')->where('name','Tlalixcoyan')->first()->id
],

['name' => 'Mata Cabestro (La Víbora)',
'city_id' => DB::table('cities')->where('name','Tlalixcoyan')->first()->id
],

['name' => 'Santa Rosalía',
'city_id' => DB::table('cities')->where('name','Tlalixcoyan')->first()->id
],

['name' => 'El Súchil',
'city_id' => DB::table('cities')->where('name','Tlalixcoyan')->first()->id
],

['name' => 'Tres Marías',
'city_id' => DB::table('cities')->where('name','Tlalixcoyan')->first()->id
],

['name' => 'Palo Seco',
'city_id' => DB::table('cities')->where('name','Tlalixcoyan')->first()->id
],

['name' => 'La Esperanza',
'city_id' => DB::table('cities')->where('name','Tlalixcoyan')->first()->id
],

['name' => 'San Andrés',
'city_id' => DB::table('cities')->where('name','Tlalixcoyan')->first()->id
],

['name' => 'San Ruperto',
'city_id' => DB::table('cities')->where('name','Tlalixcoyan')->first()->id
],

['name' => 'Los Pinos',
'city_id' => DB::table('cities')->where('name','Tlalixcoyan')->first()->id
],

['name' => 'Tilcampos',
'city_id' => DB::table('cities')->where('name','Tlalixcoyan')->first()->id
],

['name' => 'Canal Veintiséis',
'city_id' => DB::table('cities')->where('name','Tlalixcoyan')->first()->id
],

['name' => 'Cerro Bartolo',
'city_id' => DB::table('cities')->where('name','Tlalixcoyan')->first()->id
],

['name' => 'La Pochota',
'city_id' => DB::table('cities')->where('name','Tlalixcoyan')->first()->id
],

['name' => 'San Joaquín Limón',
'city_id' => DB::table('cities')->where('name','Tlalixcoyan')->first()->id
],

['name' => 'El Espinal',
'city_id' => DB::table('cities')->where('name','Tlalixcoyan')->first()->id
],

['name' => 'Canal Veintinueve',
'city_id' => DB::table('cities')->where('name','Tlalixcoyan')->first()->id
],

['name' => 'Las Dos Puertas',
'city_id' => DB::table('cities')->where('name','Tlalixcoyan')->first()->id
],

['name' => 'El Águila',
'city_id' => DB::table('cities')->where('name','Tlalixcoyan')->first()->id
],

['name' => 'Plan Sexenal (El Limoncito)',
'city_id' => DB::table('cities')->where('name','Tlalixcoyan')->first()->id
],

['name' => 'San Francisco',
'city_id' => DB::table('cities')->where('name','Tlalixcoyan')->first()->id
],

['name' => 'Cerro la Palma',
'city_id' => DB::table('cities')->where('name','Tlalixcoyan')->first()->id
],

['name' => 'El Limoncito',
'city_id' => DB::table('cities')->where('name','Tlalixcoyan')->first()->id
],

['name' => 'El Manguito',
'city_id' => DB::table('cities')->where('name','Tlalixcoyan')->first()->id
],

['name' => 'La Galera',
'city_id' => DB::table('cities')->where('name','Tlalixcoyan')->first()->id
],

['name' => 'La Higuerita',
'city_id' => DB::table('cities')->where('name','Tlalixcoyan')->first()->id
],

['name' => 'El Roblito',
'city_id' => DB::table('cities')->where('name','Tlalixcoyan')->first()->id
],

['name' => 'San José (Las Flores)',
'city_id' => DB::table('cities')->where('name','Tlalixcoyan')->first()->id
],

['name' => 'Paso Nuevo',
'city_id' => DB::table('cities')->where('name','Tlalixcoyan')->first()->id
],

['name' => 'El Porvenir',
'city_id' => DB::table('cities')->where('name','Tlalixcoyan')->first()->id
],

['name' => 'El Capricho',
'city_id' => DB::table('cities')->where('name','Tlalixcoyan')->first()->id
],

['name' => 'Cerro Coyote',
'city_id' => DB::table('cities')->where('name','Tlalixcoyan')->first()->id
],

['name' => 'Dos Arroyos (Las Mulas)',
'city_id' => DB::table('cities')->where('name','Tlalixcoyan')->first()->id
],

['name' => 'El Pedregal',
'city_id' => DB::table('cities')->where('name','Tlalixcoyan')->first()->id
],

['name' => 'Paso Grillo',
'city_id' => DB::table('cities')->where('name','Tlalixcoyan')->first()->id
],

['name' => 'El Francés',
'city_id' => DB::table('cities')->where('name','Tlalixcoyan')->first()->id
],

['name' => 'La Rosalía',
'city_id' => DB::table('cities')->where('name','Tlalixcoyan')->first()->id
],

['name' => 'Verde Maduro',
'city_id' => DB::table('cities')->where('name','Tlalixcoyan')->first()->id
],

['name' => 'El Venado',
'city_id' => DB::table('cities')->where('name','Tlalixcoyan')->first()->id
],

['name' => 'Las Mesillas',
'city_id' => DB::table('cities')->where('name','Tlalixcoyan')->first()->id
],

['name' => 'El Almendro',
'city_id' => DB::table('cities')->where('name','Tlalixcoyan')->first()->id
],

['name' => 'Santa Eulalia',
'city_id' => DB::table('cities')->where('name','Tlalixcoyan')->first()->id
],

['name' => 'La Ermita',
'city_id' => DB::table('cities')->where('name','Tlalixcoyan')->first()->id
],

['name' => 'Palo Gordo',
'city_id' => DB::table('cities')->where('name','Tlalixcoyan')->first()->id
],

['name' => 'Los Pinos',
'city_id' => DB::table('cities')->where('name','Tlalixcoyan')->first()->id
],

['name' => 'Los Ángeles',
'city_id' => DB::table('cities')->where('name','Tlalixcoyan')->first()->id
],

['name' => 'Casa Blanca',
'city_id' => DB::table('cities')->where('name','Tlalixcoyan')->first()->id
],

['name' => 'San Pedro',
'city_id' => DB::table('cities')->where('name','Tlalixcoyan')->first()->id
],

['name' => 'Mata Guitarra',
'city_id' => DB::table('cities')->where('name','Tlalixcoyan')->first()->id
],

['name' => 'Mata Prieto',
'city_id' => DB::table('cities')->where('name','Tlalixcoyan')->first()->id
],

['name' => 'El Anzuelo',
'city_id' => DB::table('cities')->where('name','Tlalixcoyan')->first()->id
],

['name' => 'El Mirador',
'city_id' => DB::table('cities')->where('name','Tlalixcoyan')->first()->id
],

['name' => 'El Nido del Águila',
'city_id' => DB::table('cities')->where('name','Tlalixcoyan')->first()->id
],

['name' => 'Tenacalco',
'city_id' => DB::table('cities')->where('name','Tlalixcoyan')->first()->id
],

['name' => 'Garrapata',
'city_id' => DB::table('cities')->where('name','Tlalixcoyan')->first()->id
],

['name' => 'Loma del Carmen',
'city_id' => DB::table('cities')->where('name','Tlalixcoyan')->first()->id
],

['name' => 'Los Peladeros',
'city_id' => DB::table('cities')->where('name','Tlalixcoyan')->first()->id
],

['name' => 'Loma Bonita',
'city_id' => DB::table('cities')->where('name','Tlalixcoyan')->first()->id
],

['name' => 'Los Limos',
'city_id' => DB::table('cities')->where('name','Tlalixcoyan')->first()->id
],

['name' => 'El Remolino San Joaquín',
'city_id' => DB::table('cities')->where('name','Tlalixcoyan')->first()->id
],

['name' => 'Mata Cocuite',
'city_id' => DB::table('cities')->where('name','Tlalixcoyan')->first()->id
],

['name' => 'El Arenal',
'city_id' => DB::table('cities')->where('name','Tlalixcoyan')->first()->id
],

['name' => 'Las Palmitas',
'city_id' => DB::table('cities')->where('name','Tlalixcoyan')->first()->id
],

['name' => 'San Joachín',
'city_id' => DB::table('cities')->where('name','Tlalixcoyan')->first()->id
],

['name' => 'Los Jabalines',
'city_id' => DB::table('cities')->where('name','Tlalixcoyan')->first()->id
],

['name' => 'La Laja',
'city_id' => DB::table('cities')->where('name','Tlalixcoyan')->first()->id
],

['name' => 'Palo Gacho',
'city_id' => DB::table('cities')->where('name','Tlalixcoyan')->first()->id
],

['name' => 'Rancho Nuevo',
'city_id' => DB::table('cities')->where('name','Tlalixcoyan')->first()->id
],

['name' => 'Ignacio de La Llave',
'city_id' => DB::table('cities')->where('name','Ignacio de la Llave')->first()->id
],

['name' => 'El Zapote',
'city_id' => DB::table('cities')->where('name','Ignacio de la Llave')->first()->id
],

['name' => 'Palma de Coco',
'city_id' => DB::table('cities')->where('name','Ignacio de la Llave')->first()->id
],

['name' => 'El Candadillo',
'city_id' => DB::table('cities')->where('name','Ignacio de la Llave')->first()->id
],

['name' => 'Punta Limón',
'city_id' => DB::table('cities')->where('name','Ignacio de la Llave')->first()->id
],

['name' => 'Santa Gertrudis',
'city_id' => DB::table('cities')->where('name','Ignacio de la Llave')->first()->id
],

['name' => 'El Huracán',
'city_id' => DB::table('cities')->where('name','Ignacio de la Llave')->first()->id
],

['name' => 'El Vainillal',
'city_id' => DB::table('cities')->where('name','Ignacio de la Llave')->first()->id
],

['name' => 'Tarcazalapa',
'city_id' => DB::table('cities')->where('name','Ignacio de la Llave')->first()->id
],

['name' => 'Piedra de Azucar',
'city_id' => DB::table('cities')->where('name','Ignacio de la Llave')->first()->id
],

['name' => 'Emiliano Zapata',
'city_id' => DB::table('cities')->where('name','Ignacio de la Llave')->first()->id
],

['name' => 'La Cerquilla',
'city_id' => DB::table('cities')->where('name','Ignacio de la Llave')->first()->id
],

['name' => 'Laguna San Marcos',
'city_id' => DB::table('cities')->where('name','Ignacio de la Llave')->first()->id
],

['name' => 'La Isleta de Panamá (Punta Isleta)',
'city_id' => DB::table('cities')->where('name','Ignacio de la Llave')->first()->id
],

['name' => 'Pozo de Arena',
'city_id' => DB::table('cities')->where('name','Ignacio de la Llave')->first()->id
],

['name' => 'Lobato y Totulco (Rancho Nuevo)',
'city_id' => DB::table('cities')->where('name','Ignacio de la Llave')->first()->id
],

['name' => 'Cerro de La Palma',
'city_id' => DB::table('cities')->where('name','Ignacio de la Llave')->first()->id
],

['name' => 'El Obispo',
'city_id' => DB::table('cities')->where('name','Ignacio de la Llave')->first()->id
],

['name' => 'El Juile',
'city_id' => DB::table('cities')->where('name','Ignacio de la Llave')->first()->id
],

['name' => 'El Camarón',
'city_id' => DB::table('cities')->where('name','Ignacio de la Llave')->first()->id
],

['name' => 'Los Tonamiles',
'city_id' => DB::table('cities')->where('name','Ignacio de la Llave')->first()->id
],

['name' => 'Nuevo Zapotal',
'city_id' => DB::table('cities')->where('name','Ignacio de la Llave')->first()->id
],

['name' => 'Nuevo Santa Rosa',
'city_id' => DB::table('cities')->where('name','Ignacio de la Llave')->first()->id
],

['name' => 'Nuevo Paso Limón',
'city_id' => DB::table('cities')->where('name','Ignacio de la Llave')->first()->id
],

['name' => 'Zacate Colorado 1ro El Moral',
'city_id' => DB::table('cities')->where('name','Ignacio de la Llave')->first()->id
],

['name' => 'El Salto',
'city_id' => DB::table('cities')->where('name','Ignacio de la Llave')->first()->id
],

['name' => 'Caño Lagarto',
'city_id' => DB::table('cities')->where('name','Ignacio de la Llave')->first()->id
],

['name' => 'Salitral',
'city_id' => DB::table('cities')->where('name','Ignacio de la Llave')->first()->id
],

['name' => 'Ampliación Palma Cuata',
'city_id' => DB::table('cities')->where('name','Ignacio de la Llave')->first()->id
],

['name' => 'Potrero Nuevo',
'city_id' => DB::table('cities')->where('name','Ignacio de la Llave')->first()->id
],

['name' => 'Palma Cuata',
'city_id' => DB::table('cities')->where('name','Ignacio de la Llave')->first()->id
],

['name' => 'Zacate Colorado 2da Fraternidad',
'city_id' => DB::table('cities')->where('name','Ignacio de la Llave')->first()->id
],

['name' => 'La Encantada',
'city_id' => DB::table('cities')->where('name','Ignacio de la Llave')->first()->id
],

['name' => 'El Zapotal 1ro',
'city_id' => DB::table('cities')->where('name','Ignacio de la Llave')->first()->id
],

['name' => 'Moyotla',
'city_id' => DB::table('cities')->where('name','Ignacio de la Llave')->first()->id
],

['name' => 'Sabaneta',
'city_id' => DB::table('cities')->where('name','Ignacio de la Llave')->first()->id
],

['name' => 'Villanueva',
'city_id' => DB::table('cities')->where('name','Ignacio de la Llave')->first()->id
],

['name' => 'El Aguacate',
'city_id' => DB::table('cities')->where('name','Ignacio de la Llave')->first()->id
],

['name' => 'Zanja del Barro',
'city_id' => DB::table('cities')->where('name','Ignacio de la Llave')->first()->id
],

['name' => 'Rincón del Tigre',
'city_id' => DB::table('cities')->where('name','Ignacio de la Llave')->first()->id
],

['name' => 'Paso de Las Mulas',
'city_id' => DB::table('cities')->where('name','Ignacio de la Llave')->first()->id
],

['name' => 'La Campana',
'city_id' => DB::table('cities')->where('name','Ignacio de la Llave')->first()->id
],

['name' => 'El Mangal',
'city_id' => DB::table('cities')->where('name','Ignacio de la Llave')->first()->id
],

['name' => 'Moral y Mosquitero',
'city_id' => DB::table('cities')->where('name','Alvarado')->first()->id
],

['name' => 'El Nanchal',
'city_id' => DB::table('cities')->where('name','Alvarado')->first()->id
],

['name' => 'Rincón de la Palma',
'city_id' => DB::table('cities')->where('name','Alvarado')->first()->id
],

['name' => 'Los Médanos de Buena Vista',
'city_id' => DB::table('cities')->where('name','Alvarado')->first()->id
],

['name' => 'Punta de Arenas',
'city_id' => DB::table('cities')->where('name','Alvarado')->first()->id
],

['name' => 'Ciénega del Sur',
'city_id' => DB::table('cities')->where('name','Alvarado')->first()->id
],

['name' => 'Monte Alto',
'city_id' => DB::table('cities')->where('name','Alvarado')->first()->id
],

['name' => 'Costa de la Palma',
'city_id' => DB::table('cities')->where('name','Alvarado')->first()->id
],

['name' => 'Arbolillo',
'city_id' => DB::table('cities')->where('name','Alvarado')->first()->id
],

['name' => 'Buen País',
'city_id' => DB::table('cities')->where('name','Alvarado')->first()->id
],

['name' => 'Salinas',
'city_id' => DB::table('cities')->where('name','Alvarado')->first()->id
],

['name' => 'Camaronera',
'city_id' => DB::table('cities')->where('name','Alvarado')->first()->id
],

['name' => 'Paso Salinas',
'city_id' => DB::table('cities')->where('name','Alvarado')->first()->id
],

['name' => 'El Martillo',
'city_id' => DB::table('cities')->where('name','Alvarado')->first()->id
],

['name' => 'El Zapote',
'city_id' => DB::table('cities')->where('name','Alvarado')->first()->id
],

['name' => 'La Piedra',
'city_id' => DB::table('cities')->where('name','Alvarado')->first()->id
],

['name' => 'Punta Tiburón, Residencial, Marina y Golf',
'city_id' => DB::table('cities')->where('name','Alvarado')->first()->id
],

['name' => 'Las Lomas Residencial',
'city_id' => DB::table('cities')->where('name','Alvarado')->first()->id
],

['name' => 'El Sendero Residencial',
'city_id' => DB::table('cities')->where('name','Alvarado')->first()->id
],

['name' => 'Dos Riberas Residencial y Club de Golf',
'city_id' => DB::table('cities')->where('name','Alvarado')->first()->id
],

['name' => 'El Conchal',
'city_id' => DB::table('cities')->where('name','Alvarado')->first()->id
],

['name' => 'Playas del Conchal',
'city_id' => DB::table('cities')->where('name','Alvarado')->first()->id
],

['name' => 'Rincón del Conchal',
'city_id' => DB::table('cities')->where('name','Alvarado')->first()->id
],

['name' => 'Playa de la Libertad',
'city_id' => DB::table('cities')->where('name','Alvarado')->first()->id
],

['name' => 'Cormorán',
'city_id' => DB::table('cities')->where('name','Alvarado')->first()->id
],

['name' => 'Isla del Amor',
'city_id' => DB::table('cities')->where('name','Alvarado')->first()->id
],

['name' => 'Club de Golf Villa Rica',
'city_id' => DB::table('cities')->where('name','Alvarado')->first()->id
],

['name' => 'Vista Bella',
'city_id' => DB::table('cities')->where('name','Alvarado')->first()->id
],

['name' => 'Paraíso del Estero (La Burbuja)',
'city_id' => DB::table('cities')->where('name','Alvarado')->first()->id
],

['name' => 'La Matoza (Acapulquito)',
'city_id' => DB::table('cities')->where('name','Alvarado')->first()->id
],

['name' => 'Lomas Diamante',
'city_id' => DB::table('cities')->where('name','Alvarado')->first()->id
],

['name' => 'Kilómetro Cuatro',
'city_id' => DB::table('cities')->where('name','Alvarado')->first()->id
],

['name' => 'Lomas del Sol',
'city_id' => DB::table('cities')->where('name','Alvarado')->first()->id
],

['name' => 'Residencial Playa Dorada',
'city_id' => DB::table('cities')->where('name','Alvarado')->first()->id
],

['name' => 'El Bayo',
'city_id' => DB::table('cities')->where('name','Alvarado')->first()->id
],

['name' => 'Las Barrancas',
'city_id' => DB::table('cities')->where('name','Alvarado')->first()->id
],

['name' => 'Los Chivos (Mate Guayabo)',
'city_id' => DB::table('cities')->where('name','Alvarado')->first()->id
],

['name' => 'Lomas de la Rioja',
'city_id' => DB::table('cities')->where('name','Alvarado')->first()->id
],

['name' => 'Mandinga de Agua',
'city_id' => DB::table('cities')->where('name','Alvarado')->first()->id
],

['name' => 'La Aguada',
'city_id' => DB::table('cities')->where('name','Alvarado')->first()->id
],

['name' => 'Banus',
'city_id' => DB::table('cities')->where('name','Alvarado')->first()->id
],

['name' => 'Real Mandinga',
'city_id' => DB::table('cities')->where('name','Alvarado')->first()->id
],

['name' => 'Mandinga y Cardón',
'city_id' => DB::table('cities')->where('name','Alvarado')->first()->id
],

['name' => 'Huayín (La Granja)',
'city_id' => DB::table('cities')->where('name','Alvarado')->first()->id
],

['name' => 'Antón Lizardo',
'city_id' => DB::table('cities')->where('name','Alvarado')->first()->id
],

['name' => 'Heroica Escuela Naval Militar',
'city_id' => DB::table('cities')->where('name','Alvarado')->first()->id
],

['name' => 'ISSFAM',
'city_id' => DB::table('cities')->where('name','Alvarado')->first()->id
],

['name' => 'Viveros',
'city_id' => DB::table('cities')->where('name','Alvarado')->first()->id
],

['name' => 'Alvarado Centro',
'city_id' => DB::table('cities')->where('name','Alvarado')->first()->id
],

['name' => 'Las Escolleras',
'city_id' => DB::table('cities')->where('name','Alvarado')->first()->id
],

['name' => 'Paso Nacional',
'city_id' => DB::table('cities')->where('name','Alvarado')->first()->id
],

['name' => 'El Guayabal',
'city_id' => DB::table('cities')->where('name','Alvarado')->first()->id
],

['name' => 'La Fuente',
'city_id' => DB::table('cities')->where('name','Alvarado')->first()->id
],

['name' => 'Las Aneas',
'city_id' => DB::table('cities')->where('name','Alvarado')->first()->id
],

['name' => '21 de Abril',
'city_id' => DB::table('cities')->where('name','Alvarado')->first()->id
],

['name' => 'El Pantanal',
'city_id' => DB::table('cities')->where('name','Alvarado')->first()->id
],

['name' => 'Los Aguacates',
'city_id' => DB::table('cities')->where('name','Alvarado')->first()->id
],

['name' => 'Los Framboyanes',
'city_id' => DB::table('cities')->where('name','Alvarado')->first()->id
],

['name' => 'Vista Hermosa',
'city_id' => DB::table('cities')->where('name','Alvarado')->first()->id
],

['name' => 'INFONAVIT Adolfo López Mateos (Magisterial)',
'city_id' => DB::table('cities')->where('name','Alvarado')->first()->id
],

['name' => 'Hogares del Pescador',
'city_id' => DB::table('cities')->where('name','Alvarado')->first()->id
],

['name' => 'Villas de Alvarado',
'city_id' => DB::table('cities')->where('name','Alvarado')->first()->id
],

['name' => 'Marigalante',
'city_id' => DB::table('cities')->where('name','Alvarado')->first()->id
],

['name' => 'Luz Del Carmen',
'city_id' => DB::table('cities')->where('name','Alvarado')->first()->id
],

['name' => 'Valente Cruz',
'city_id' => DB::table('cities')->where('name','Alvarado')->first()->id
],

['name' => 'La Trocha',
'city_id' => DB::table('cities')->where('name','Alvarado')->first()->id
],

['name' => 'Lomas del Rosario',
'city_id' => DB::table('cities')->where('name','Alvarado')->first()->id
],

['name' => 'Santa Teresa',
'city_id' => DB::table('cities')->where('name','Alvarado')->first()->id
],

['name' => 'La Playa',
'city_id' => DB::table('cities')->where('name','Alvarado')->first()->id
],

['name' => 'Lerdo de Tejada Centro',
'city_id' => DB::table('cities')->where('name','Lerdo de Tejada')->first()->id
],

['name' => 'Santa Gertrudis Zacatal',
'city_id' => DB::table('cities')->where('name','Lerdo de Tejada')->first()->id
],

['name' => 'Ampliación Santa Gertrudis',
'city_id' => DB::table('cities')->where('name','Lerdo de Tejada')->first()->id
],

['name' => 'Santa Teresa',
'city_id' => DB::table('cities')->where('name','Lerdo de Tejada')->first()->id
],

['name' => 'Jose Maria Martinez',
'city_id' => DB::table('cities')->where('name','Lerdo de Tejada')->first()->id
],

['name' => '1o de Mayo',
'city_id' => DB::table('cities')->where('name','Lerdo de Tejada')->first()->id
],

['name' => 'La Guadalupe',
'city_id' => DB::table('cities')->where('name','Lerdo de Tejada')->first()->id
],

['name' => '12 de Diciembre',
'city_id' => DB::table('cities')->where('name','Lerdo de Tejada')->first()->id
],

['name' => 'Magisterial',
'city_id' => DB::table('cities')->where('name','Lerdo de Tejada')->first()->id
],

['name' => 'UGOCEP',
'city_id' => DB::table('cities')->where('name','Lerdo de Tejada')->first()->id
],

['name' => 'C. Palacios',
'city_id' => DB::table('cities')->where('name','Lerdo de Tejada')->first()->id
],

['name' => 'Paulino Ortiz',
'city_id' => DB::table('cities')->where('name','Lerdo de Tejada')->first()->id
],

['name' => 'Lago de los Ríos',
'city_id' => DB::table('cities')->where('name','Lerdo de Tejada')->first()->id
],

['name' => 'Obrera San Pedro',
'city_id' => DB::table('cities')->where('name','Lerdo de Tejada')->first()->id
],

['name' => 'Lázaro Cárdenas',
'city_id' => DB::table('cities')->where('name','Lerdo de Tejada')->first()->id
],

['name' => 'Ejidal',
'city_id' => DB::table('cities')->where('name','Lerdo de Tejada')->first()->id
],

['name' => 'Guillermo Ramirez Gonzalez',
'city_id' => DB::table('cities')->where('name','Lerdo de Tejada')->first()->id
],

['name' => 'Ampliación Nueva Lerdo',
'city_id' => DB::table('cities')->where('name','Lerdo de Tejada')->first()->id
],

['name' => 'San Miguelito',
'city_id' => DB::table('cities')->where('name','Lerdo de Tejada')->first()->id
],

['name' => 'Canal 4',
'city_id' => DB::table('cities')->where('name','Lerdo de Tejada')->first()->id
],

['name' => 'Poza Rica',
'city_id' => DB::table('cities')->where('name','Lerdo de Tejada')->first()->id
],

['name' => 'Santa Lucia',
'city_id' => DB::table('cities')->where('name','Lerdo de Tejada')->first()->id
],

['name' => 'Vicente Guerrero',
'city_id' => DB::table('cities')->where('name','Lerdo de Tejada')->first()->id
],

['name' => 'Árbol Del Pan',
'city_id' => DB::table('cities')->where('name','Lerdo de Tejada')->first()->id
],

['name' => 'San Francisco',
'city_id' => DB::table('cities')->where('name','Lerdo de Tejada')->first()->id
],

['name' => 'El Chamizal',
'city_id' => DB::table('cities')->where('name','Lerdo de Tejada')->first()->id
],

['name' => 'Benito Juárez',
'city_id' => DB::table('cities')->where('name','Lerdo de Tejada')->first()->id
],

['name' => 'Dulce Maria',
'city_id' => DB::table('cities')->where('name','Lerdo de Tejada')->first()->id
],

['name' => 'Bajada de los Apompos',
'city_id' => DB::table('cities')->where('name','Lerdo de Tejada')->first()->id
],

['name' => 'Santa Teresa Ejido Pocheta',
'city_id' => DB::table('cities')->where('name','Lerdo de Tejada')->first()->id
],

['name' => 'Fidel Herrera Beltrán',
'city_id' => DB::table('cities')->where('name','Tres Valles')->first()->id
],

['name' => 'Tres Valles Centro',
'city_id' => DB::table('cities')->where('name','Tres Valles')->first()->id
],

['name' => 'Campo Veracruz',
'city_id' => DB::table('cities')->where('name','Tres Valles')->first()->id
],

['name' => 'Carlos A Carrillo Centro',
'city_id' => DB::table('cities')->where('name','Carlos A. Carrillo')->first()->id
],

['name' => 'Las Yacas',
'city_id' => DB::table('cities')->where('name','Carlos A. Carrillo')->first()->id
],

['name' => 'Los Pinos',
'city_id' => DB::table('cities')->where('name','Carlos A. Carrillo')->first()->id
],

['name' => 'Hidalgo',
'city_id' => DB::table('cities')->where('name','Carlos A. Carrillo')->first()->id
],

['name' => 'Luis Donaldo Colosio',
'city_id' => DB::table('cities')->where('name','Carlos A. Carrillo')->first()->id
],

['name' => 'Paso Real',
'city_id' => DB::table('cities')->where('name','Carlos A. Carrillo')->first()->id
],

['name' => 'Carriles',
'city_id' => DB::table('cities')->where('name','Carlos A. Carrillo')->first()->id
],

['name' => 'Batey',
'city_id' => DB::table('cities')->where('name','Carlos A. Carrillo')->first()->id
],

['name' => 'La Paz',
'city_id' => DB::table('cities')->where('name','Carlos A. Carrillo')->first()->id
],

['name' => 'Zaragoza',
'city_id' => DB::table('cities')->where('name','Carlos A. Carrillo')->first()->id
],

['name' => 'Petrolera O Campo Deportivo',
'city_id' => DB::table('cities')->where('name','Carlos A. Carrillo')->first()->id
],

['name' => 'Campo Agrario',
'city_id' => DB::table('cities')->where('name','Carlos A. Carrillo')->first()->id
],

['name' => 'Guadalupe',
'city_id' => DB::table('cities')->where('name','Carlos A. Carrillo')->first()->id
],

['name' => 'Enrique Ramos Rodríguez',
'city_id' => DB::table('cities')->where('name','Carlos A. Carrillo')->first()->id
],

['name' => 'Jose Lopez Portillo',
'city_id' => DB::table('cities')->where('name','Carlos A. Carrillo')->first()->id
],

['name' => 'Monte Alto',
'city_id' => DB::table('cities')->where('name','Carlos A. Carrillo')->first()->id
],

['name' => 'Carlos Salinas de Gortari',
'city_id' => DB::table('cities')->where('name','Carlos A. Carrillo')->first()->id
],

['name' => 'La Granja',
'city_id' => DB::table('cities')->where('name','Carlos A. Carrillo')->first()->id
],

['name' => 'Papelera',
'city_id' => DB::table('cities')->where('name','Carlos A. Carrillo')->first()->id
],

['name' => 'Mario Moreno Cantinflas',
'city_id' => DB::table('cities')->where('name','Carlos A. Carrillo')->first()->id
],

['name' => 'Juan Diaz Montalvo',
'city_id' => DB::table('cities')->where('name','Carlos A. Carrillo')->first()->id
],

['name' => 'Pancho Villa',
'city_id' => DB::table('cities')->where('name','Carlos A. Carrillo')->first()->id
],

['name' => 'San Cristóbal',
'city_id' => DB::table('cities')->where('name','Carlos A. Carrillo')->first()->id
],

['name' => 'Candayoa',
'city_id' => DB::table('cities')->where('name','Carlos A. Carrillo')->first()->id
],

['name' => 'Vicente Guerrero',
'city_id' => DB::table('cities')->where('name','Carlos A. Carrillo')->first()->id
],

['name' => 'Venustiano Carranza',
'city_id' => DB::table('cities')->where('name','Carlos A. Carrillo')->first()->id
],

['name' => 'Cerro de Torres Dos',
'city_id' => DB::table('cities')->where('name','Carlos A. Carrillo')->first()->id
],

['name' => 'Cerro de Torres Uno (San Martín de la Barranca)',
'city_id' => DB::table('cities')->where('name','Carlos A. Carrillo')->first()->id
],

['name' => 'El Mostalillo (El Mostelo)',
'city_id' => DB::table('cities')->where('name','Carlos A. Carrillo')->first()->id
],

['name' => 'La Barranca',
'city_id' => DB::table('cities')->where('name','Carlos A. Carrillo')->first()->id
],

['name' => 'La Loma',
'city_id' => DB::table('cities')->where('name','Carlos A. Carrillo')->first()->id
],

['name' => 'Los Cocos',
'city_id' => DB::table('cities')->where('name','Carlos A. Carrillo')->first()->id
],

['name' => 'Playa Medina (Mata de Agua)',
'city_id' => DB::table('cities')->where('name','Carlos A. Carrillo')->first()->id
],

['name' => 'Tilapa',
'city_id' => DB::table('cities')->where('name','Carlos A. Carrillo')->first()->id
],

['name' => 'Yorca Boca del Paite',
'city_id' => DB::table('cities')->where('name','Carlos A. Carrillo')->first()->id
],

['name' => 'Guasimal',
'city_id' => DB::table('cities')->where('name','Carlos A. Carrillo')->first()->id
],

['name' => 'Buena Vista',
'city_id' => DB::table('cities')->where('name','Carlos A. Carrillo')->first()->id
],

['name' => 'Durán',
'city_id' => DB::table('cities')->where('name','Carlos A. Carrillo')->first()->id
],

['name' => 'Ejido la Primavera',
'city_id' => DB::table('cities')->where('name','Carlos A. Carrillo')->first()->id
],

['name' => 'El Azuzul',
'city_id' => DB::table('cities')->where('name','Carlos A. Carrillo')->first()->id
],

['name' => 'El Nanche',
'city_id' => DB::table('cities')->where('name','Carlos A. Carrillo')->first()->id
],

['name' => 'Jobo Chico',
'city_id' => DB::table('cities')->where('name','Carlos A. Carrillo')->first()->id
],

['name' => 'La Alondra',
'city_id' => DB::table('cities')->where('name','Carlos A. Carrillo')->first()->id
],

['name' => 'La Guadalupe',
'city_id' => DB::table('cities')->where('name','Carlos A. Carrillo')->first()->id
],

['name' => 'La Pajita',
'city_id' => DB::table('cities')->where('name','Carlos A. Carrillo')->first()->id
],

['name' => 'La Palmita',
'city_id' => DB::table('cities')->where('name','Carlos A. Carrillo')->first()->id
],

['name' => 'San Benito',
'city_id' => DB::table('cities')->where('name','Carlos A. Carrillo')->first()->id
],

['name' => 'Uluapeño',
'city_id' => DB::table('cities')->where('name','Carlos A. Carrillo')->first()->id
],

['name' => 'El Rincón (La Herradura)',
'city_id' => DB::table('cities')->where('name','Carlos A. Carrillo')->first()->id
],

['name' => 'La Herradura',
'city_id' => DB::table('cities')->where('name','Carlos A. Carrillo')->first()->id
],

['name' => 'La Zanja del Bajo',
'city_id' => DB::table('cities')->where('name','Carlos A. Carrillo')->first()->id
],

['name' => 'Las Carretas',
'city_id' => DB::table('cities')->where('name','Carlos A. Carrillo')->first()->id
],

['name' => 'Los Corralillos',
'city_id' => DB::table('cities')->where('name','Carlos A. Carrillo')->first()->id
],

['name' => 'Amatepec de Vázquez (Los Pionches)',
'city_id' => DB::table('cities')->where('name','Carlos A. Carrillo')->first()->id
],

['name' => 'Casa Blanca',
'city_id' => DB::table('cities')->where('name','Carlos A. Carrillo')->first()->id
],

['name' => 'El Palmichal',
'city_id' => DB::table('cities')->where('name','Carlos A. Carrillo')->first()->id
],

['name' => 'Loma Larga (Las Trojas)',
'city_id' => DB::table('cities')->where('name','Carlos A. Carrillo')->first()->id
],

['name' => 'Paso Ancho Amatepec (Laguna Amatepec)',
'city_id' => DB::table('cities')->where('name','Carlos A. Carrillo')->first()->id
],

['name' => 'Adolfo Ruiz Cortines (Colonia Obrera)',
'city_id' => DB::table('cities')->where('name','Tres Valles')->first()->id
],

['name' => 'La Guadalupe',
'city_id' => DB::table('cities')->where('name','Tres Valles')->first()->id
],

['name' => 'Campo Nuevo',
'city_id' => DB::table('cities')->where('name','Tres Valles')->first()->id
],

['name' => 'Santo Domingo',
'city_id' => DB::table('cities')->where('name','Tres Valles')->first()->id
],

['name' => 'El Renacimiento',
'city_id' => DB::table('cities')->where('name','Tres Valles')->first()->id
],

['name' => 'Novara',
'city_id' => DB::table('cities')->where('name','Tres Valles')->first()->id
],

['name' => 'Los Naranjos',
'city_id' => DB::table('cities')->where('name','Tres Valles')->first()->id
],

['name' => 'Agrícola Independencia',
'city_id' => DB::table('cities')->where('name','Tres Valles')->first()->id
],

['name' => 'Nuevo San José Independencia',
'city_id' => DB::table('cities')->where('name','Tres Valles')->first()->id
],

['name' => 'Vista Hermosa',
'city_id' => DB::table('cities')->where('name','Tres Valles')->first()->id
],

['name' => 'La Granja',
'city_id' => DB::table('cities')->where('name','Tres Valles')->first()->id
],

['name' => 'Las Mesillas',
'city_id' => DB::table('cities')->where('name','Tres Valles')->first()->id
],

['name' => 'Las Yaguas',
'city_id' => DB::table('cities')->where('name','Tres Valles')->first()->id
],

['name' => 'Poblado Tres',
'city_id' => DB::table('cities')->where('name','Tres Valles')->first()->id
],

['name' => 'Nuevo Mondongo',
'city_id' => DB::table('cities')->where('name','Tres Valles')->first()->id
],

['name' => 'Adalberto Tejeda Olivarez',
'city_id' => DB::table('cities')->where('name','Cosamaloapan de Carpio')->first()->id
],

['name' => 'Manlio Fabio Altamirano',
'city_id' => DB::table('cities')->where('name','Cosamaloapan de Carpio')->first()->id
],

['name' => 'San Felipe',
'city_id' => DB::table('cities')->where('name','Cosamaloapan de Carpio')->first()->id
],

['name' => 'Ferrocarril (Basurero)',
'city_id' => DB::table('cities')->where('name','Cosamaloapan de Carpio')->first()->id
],

['name' => 'Empalme',
'city_id' => DB::table('cities')->where('name','Cosamaloapan de Carpio')->first()->id
],

['name' => 'Nora Quintana de Velázquez',
'city_id' => DB::table('cities')->where('name','Cosamaloapan de Carpio')->first()->id
],

['name' => 'Del Rosario',
'city_id' => DB::table('cities')->where('name','Cosamaloapan de Carpio')->first()->id
],

['name' => 'Rafael Murillo',
'city_id' => DB::table('cities')->where('name','Cosamaloapan de Carpio')->first()->id
],

['name' => 'Las Mariposas',
'city_id' => DB::table('cities')->where('name','Cosamaloapan de Carpio')->first()->id
],

['name' => 'Los Angeles',
'city_id' => DB::table('cities')->where('name','Cosamaloapan de Carpio')->first()->id
],

['name' => 'Cerro Grande',
'city_id' => DB::table('cities')->where('name','Cosamaloapan de Carpio')->first()->id
],

['name' => 'Villa Rica',
'city_id' => DB::table('cities')->where('name','Cosamaloapan de Carpio')->first()->id
],

['name' => 'Tres Generaciones',
'city_id' => DB::table('cities')->where('name','Cosamaloapan de Carpio')->first()->id
],

['name' => 'Emiliano Zapata',
'city_id' => DB::table('cities')->where('name','Cosamaloapan de Carpio')->first()->id
],

['name' => 'Mártires de Veracruz',
'city_id' => DB::table('cities')->where('name','Cosamaloapan de Carpio')->first()->id
],

['name' => 'Hidalgo',
'city_id' => DB::table('cities')->where('name','Cosamaloapan de Carpio')->first()->id
],

['name' => 'Manuel Carpio',
'city_id' => DB::table('cities')->where('name','Cosamaloapan de Carpio')->first()->id
],

['name' => 'Jardines Del Sol',
'city_id' => DB::table('cities')->where('name','Cosamaloapan de Carpio')->first()->id
],

['name' => 'Benito Juárez',
'city_id' => DB::table('cities')->where('name','Cosamaloapan de Carpio')->first()->id
],

['name' => 'Las Maravillas',
'city_id' => DB::table('cities')->where('name','Cosamaloapan de Carpio')->first()->id
],

['name' => 'El Cocal',
'city_id' => DB::table('cities')->where('name','Cosamaloapan de Carpio')->first()->id
],

['name' => 'Ocampo',
'city_id' => DB::table('cities')->where('name','Cosamaloapan de Carpio')->first()->id
],

['name' => 'El Laurel',
'city_id' => DB::table('cities')->where('name','Cosamaloapan de Carpio')->first()->id
],

['name' => 'Cipriano Villasama',
'city_id' => DB::table('cities')->where('name','Cosamaloapan de Carpio')->first()->id
],

['name' => 'San Isidro',
'city_id' => DB::table('cities')->where('name','Cosamaloapan de Carpio')->first()->id
],

['name' => 'El Mirador',
'city_id' => DB::table('cities')->where('name','Cosamaloapan de Carpio')->first()->id
],

['name' => 'Rafael Arreola Molina',
'city_id' => DB::table('cities')->where('name','Cosamaloapan de Carpio')->first()->id
],

['name' => 'Emma Senties de Alfonsín',
'city_id' => DB::table('cities')->where('name','Cosamaloapan de Carpio')->first()->id
],

['name' => 'El Mirador II',
'city_id' => DB::table('cities')->where('name','Cosamaloapan de Carpio')->first()->id
],

['name' => 'Cosamaloapan de Carpio Centro',
'city_id' => DB::table('cities')->where('name','Cosamaloapan de Carpio')->first()->id
],

['name' => 'Camino a Cerro de Torres',
'city_id' => DB::table('cities')->where('name','Cosamaloapan de Carpio')->first()->id
],

['name' => 'El Laurel',
'city_id' => DB::table('cities')->where('name','Cosamaloapan de Carpio')->first()->id
],

['name' => 'Marco Antonio',
'city_id' => DB::table('cities')->where('name','Cosamaloapan de Carpio')->first()->id
],

['name' => 'Pichoapa',
'city_id' => DB::table('cities')->where('name','Cosamaloapan de Carpio')->first()->id
],

['name' => 'Playa Chiquita',
'city_id' => DB::table('cities')->where('name','Cosamaloapan de Carpio')->first()->id
],

['name' => 'Colonia el Espinal',
'city_id' => DB::table('cities')->where('name','Cosamaloapan de Carpio')->first()->id
],

['name' => 'El Amarillo',
'city_id' => DB::table('cities')->where('name','Cosamaloapan de Carpio')->first()->id
],

['name' => 'El Espiadero',
'city_id' => DB::table('cities')->where('name','Cosamaloapan de Carpio')->first()->id
],

['name' => 'El Mirador',
'city_id' => DB::table('cities')->where('name','Cosamaloapan de Carpio')->first()->id
],

['name' => 'Dos Hermanos',
'city_id' => DB::table('cities')->where('name','Cosamaloapan de Carpio')->first()->id
],

['name' => 'Las Hojas',
'city_id' => DB::table('cities')->where('name','Cosamaloapan de Carpio')->first()->id
],

['name' => 'El Coyote',
'city_id' => DB::table('cities')->where('name','Cosamaloapan de Carpio')->first()->id
],

['name' => 'El Doce',
'city_id' => DB::table('cities')->where('name','Cosamaloapan de Carpio')->first()->id
],

['name' => 'La Laja',
'city_id' => DB::table('cities')->where('name','Cosamaloapan de Carpio')->first()->id
],

['name' => 'Panaloya',
'city_id' => DB::table('cities')->where('name','Cosamaloapan de Carpio')->first()->id
],

['name' => 'El Pedregal',
'city_id' => DB::table('cities')->where('name','Cosamaloapan de Carpio')->first()->id
],

['name' => 'La Palma',
'city_id' => DB::table('cities')->where('name','Cosamaloapan de Carpio')->first()->id
],

['name' => 'Loma del Pedregal',
'city_id' => DB::table('cities')->where('name','Cosamaloapan de Carpio')->first()->id
],

['name' => 'Nuevo Calatepec (El Once)',
'city_id' => DB::table('cities')->where('name','Cosamaloapan de Carpio')->first()->id
],

['name' => 'Calatepec (La Herradura)',
'city_id' => DB::table('cities')->where('name','Cosamaloapan de Carpio')->first()->id
],

['name' => 'El Coyol (Kilómetro 11)',
'city_id' => DB::table('cities')->where('name','Cosamaloapan de Carpio')->first()->id
],

['name' => 'Lázaro Cárdenas (Tierra Alta)',
'city_id' => DB::table('cities')->where('name','Cosamaloapan de Carpio')->first()->id
],

['name' => 'San Isidro',
'city_id' => DB::table('cities')->where('name','Cosamaloapan de Carpio')->first()->id
],

['name' => 'Nopaltepec',
'city_id' => DB::table('cities')->where('name','Cosamaloapan de Carpio')->first()->id
],

['name' => 'Cocuite Nuevo',
'city_id' => DB::table('cities')->where('name','Cosamaloapan de Carpio')->first()->id
],

['name' => 'Diez de Abril',
'city_id' => DB::table('cities')->where('name','Cosamaloapan de Carpio')->first()->id
],

['name' => 'El Guayabo',
'city_id' => DB::table('cities')->where('name','Cosamaloapan de Carpio')->first()->id
],

['name' => 'Estación Cocuite',
'city_id' => DB::table('cities')->where('name','Cosamaloapan de Carpio')->first()->id
],

['name' => 'Ex-Carolina (Paso Chacaltianguis)',
'city_id' => DB::table('cities')->where('name','Cosamaloapan de Carpio')->first()->id
],

['name' => 'Francisco Palacios García',
'city_id' => DB::table('cities')->where('name','Cosamaloapan de Carpio')->first()->id
],

['name' => 'Palenque',
'city_id' => DB::table('cities')->where('name','Cosamaloapan de Carpio')->first()->id
],

['name' => 'Rodeo Nuevo',
'city_id' => DB::table('cities')->where('name','Cosamaloapan de Carpio')->first()->id
],

['name' => 'Cerro Colorado',
'city_id' => DB::table('cities')->where('name','Cosamaloapan de Carpio')->first()->id
],

['name' => 'Benito Juárez',
'city_id' => DB::table('cities')->where('name','Cosamaloapan de Carpio')->first()->id
],

['name' => 'San Francisco (Oyozontle)',
'city_id' => DB::table('cities')->where('name','Cosamaloapan de Carpio')->first()->id
],

['name' => 'El Bosque',
'city_id' => DB::table('cities')->where('name','Cosamaloapan de Carpio')->first()->id
],

['name' => 'El Roble',
'city_id' => DB::table('cities')->where('name','Cosamaloapan de Carpio')->first()->id
],

['name' => 'El Saladero',
'city_id' => DB::table('cities')->where('name','Cosamaloapan de Carpio')->first()->id
],

['name' => 'Estación Tuxtilla',
'city_id' => DB::table('cities')->where('name','Cosamaloapan de Carpio')->first()->id
],

['name' => 'La Lima',
'city_id' => DB::table('cities')->where('name','Cosamaloapan de Carpio')->first()->id
],

['name' => 'Laguna Larga',
'city_id' => DB::table('cities')->where('name','Cosamaloapan de Carpio')->first()->id
],

['name' => 'Plan Bonito',
'city_id' => DB::table('cities')->where('name','Cosamaloapan de Carpio')->first()->id
],

['name' => 'Paraíso Novillero',
'city_id' => DB::table('cities')->where('name','Cosamaloapan de Carpio')->first()->id
],

['name' => 'Los Bálsamos',
'city_id' => DB::table('cities')->where('name','Cosamaloapan de Carpio')->first()->id
],

['name' => 'Kilómetro Veinte',
'city_id' => DB::table('cities')->where('name','Cosamaloapan de Carpio')->first()->id
],

['name' => 'Fernando López Arias',
'city_id' => DB::table('cities')->where('name','Cosamaloapan de Carpio')->first()->id
],

['name' => 'El Chicozapote',
'city_id' => DB::table('cities')->where('name','Cosamaloapan de Carpio')->first()->id
],

['name' => 'La Isleta',
'city_id' => DB::table('cities')->where('name','Cosamaloapan de Carpio')->first()->id
],

['name' => 'Las Limas',
'city_id' => DB::table('cities')->where('name','Cosamaloapan de Carpio')->first()->id
],

['name' => 'Las Lomas del Chico (San Agustín)',
'city_id' => DB::table('cities')->where('name','Cosamaloapan de Carpio')->first()->id
],

['name' => 'San Antonio Texas',
'city_id' => DB::table('cities')->where('name','Cosamaloapan de Carpio')->first()->id
],

['name' => 'Las Peñitas',
'city_id' => DB::table('cities')->where('name','Cosamaloapan de Carpio')->first()->id
],

['name' => 'La Sayulita',
'city_id' => DB::table('cities')->where('name','Cosamaloapan de Carpio')->first()->id
],

['name' => 'Poblado Cosamaloapan (El Retiro)',
'city_id' => DB::table('cities')->where('name','Cosamaloapan de Carpio')->first()->id
],

['name' => 'Gloria de Coapa (El Jobo)',
'city_id' => DB::table('cities')->where('name','Cosamaloapan de Carpio')->first()->id
],

['name' => 'Veinte de Noviembre',
'city_id' => DB::table('cities')->where('name','Cosamaloapan de Carpio')->first()->id
],

['name' => 'Poblado Dos (Ampliación Piedras Negras)',
'city_id' => DB::table('cities')->where('name','Cosamaloapan de Carpio')->first()->id
],

['name' => 'Ampliación Raúl Saturnino',
'city_id' => DB::table('cities')->where('name','Cosamaloapan de Carpio')->first()->id
],

['name' => 'Colonia Veinte de Noviembre (Nueva Jerusalén)',
'city_id' => DB::table('cities')->where('name','Cosamaloapan de Carpio')->first()->id
],

['name' => 'El Guayabo',
'city_id' => DB::table('cities')->where('name','Cosamaloapan de Carpio')->first()->id
],

['name' => 'Paso Nuevo',
'city_id' => DB::table('cities')->where('name','Cosamaloapan de Carpio')->first()->id
],

['name' => 'Paso Real Otatitlán (La Filipina)',
'city_id' => DB::table('cities')->where('name','Cosamaloapan de Carpio')->first()->id
],

['name' => 'Playa de Vaca (Agua Dulce)',
'city_id' => DB::table('cities')->where('name','Cosamaloapan de Carpio')->first()->id
],

['name' => 'Santa Cruz',
'city_id' => DB::table('cities')->where('name','Cosamaloapan de Carpio')->first()->id
],

['name' => 'Ciudad Gral. Miguel Alemán',
'city_id' => DB::table('cities')->where('name','Cosamaloapan de Carpio')->first()->id
],

['name' => 'Gabino Barreda',
'city_id' => DB::table('cities')->where('name','Cosamaloapan de Carpio')->first()->id
],

['name' => 'Chicalpextle',
'city_id' => DB::table('cities')->where('name','Ixmatlahuacan')->first()->id
],

['name' => 'Ixmatlahuacan',
'city_id' => DB::table('cities')->where('name','Ixmatlahuacan')->first()->id
],

['name' => 'Mozapa',
'city_id' => DB::table('cities')->where('name','Ixmatlahuacan')->first()->id
],

['name' => 'Pachuca',
'city_id' => DB::table('cities')->where('name','Ixmatlahuacan')->first()->id
],

['name' => 'San José Nueva Estancia (El Púlpito)',
'city_id' => DB::table('cities')->where('name','Ixmatlahuacan')->first()->id
],

['name' => 'Majapa (Mata Lagarto)',
'city_id' => DB::table('cities')->where('name','Ixmatlahuacan')->first()->id
],

['name' => 'Peje Puerco',
'city_id' => DB::table('cities')->where('name','Ixmatlahuacan')->first()->id
],

['name' => 'Tío Anthón',
'city_id' => DB::table('cities')->where('name','Ixmatlahuacan')->first()->id
],

['name' => 'Charco de la Peña',
'city_id' => DB::table('cities')->where('name','Ixmatlahuacan')->first()->id
],

['name' => 'Acula',
'city_id' => DB::table('cities')->where('name','Acula')->first()->id
],

['name' => 'San Miguel Buenavista',
'city_id' => DB::table('cities')->where('name','Acula')->first()->id
],

['name' => 'Vista Hermosa',
'city_id' => DB::table('cities')->where('name','Acula')->first()->id
],

['name' => 'Cerro de las Flores',
'city_id' => DB::table('cities')->where('name','Acula')->first()->id
],

['name' => 'Abrevadero',
'city_id' => DB::table('cities')->where('name','Acula')->first()->id
],

['name' => 'Amatitlán',
'city_id' => DB::table('cities')->where('name','Amatitlán')->first()->id
],

['name' => 'Dos Bocas',
'city_id' => DB::table('cities')->where('name','Amatitlán')->first()->id
],

['name' => 'El Corte',
'city_id' => DB::table('cities')->where('name','Amatitlán')->first()->id
],

['name' => 'San José Papaloapan',
'city_id' => DB::table('cities')->where('name','Amatitlán')->first()->id
],

['name' => 'Rancho Nuevo (Los Cerros)',
'city_id' => DB::table('cities')->where('name','Amatitlán')->first()->id
],

['name' => 'Juan de la Luz Enríquez (Los Tenates)',
'city_id' => DB::table('cities')->where('name','Amatitlán')->first()->id
],

['name' => 'Zacapexco',
'city_id' => DB::table('cities')->where('name','Amatitlán')->first()->id
],

['name' => 'Tlacotalpan',
'city_id' => DB::table('cities')->where('name','Tlacotalpan')->first()->id
],

['name' => 'Cuauhtemoc',
'city_id' => DB::table('cities')->where('name','Tlacotalpan')->first()->id
],

['name' => 'Nueva',
'city_id' => DB::table('cities')->where('name','Tlacotalpan')->first()->id
],

['name' => 'SAHOP',
'city_id' => DB::table('cities')->where('name','Tlacotalpan')->first()->id
],

['name' => 'El Retiro',
'city_id' => DB::table('cities')->where('name','Tlacotalpan')->first()->id
],

['name' => 'Flor del Campo',
'city_id' => DB::table('cities')->where('name','Tlacotalpan')->first()->id
],

['name' => 'Popular',
'city_id' => DB::table('cities')->where('name','Tlacotalpan')->first()->id
],

['name' => 'San Francisco los Cocos',
'city_id' => DB::table('cities')->where('name','Tlacotalpan')->first()->id
],

['name' => 'San Mateo',
'city_id' => DB::table('cities')->where('name','Tlacotalpan')->first()->id
],

['name' => 'Los Pinos',
'city_id' => DB::table('cities')->where('name','Tlacotalpan')->first()->id
],

['name' => 'Miguel Alemán Valdez',
'city_id' => DB::table('cities')->where('name','Tlacotalpan')->first()->id
],

['name' => 'Salvador Díaz Mirón',
'city_id' => DB::table('cities')->where('name','Tlacotalpan')->first()->id
],

['name' => 'Santa Cruz',
'city_id' => DB::table('cities')->where('name','Tlacotalpan')->first()->id
],

['name' => 'De Los Maestros',
'city_id' => DB::table('cities')->where('name','Tlacotalpan')->first()->id
],

['name' => 'El Gas',
'city_id' => DB::table('cities')->where('name','Tlacotalpan')->first()->id
],

['name' => 'Palmira',
'city_id' => DB::table('cities')->where('name','Tlacotalpan')->first()->id
],

['name' => 'Arroyo de la Barranca (Colonia los Cobos)',
'city_id' => DB::table('cities')->where('name','Tlacotalpan')->first()->id
],

['name' => 'El Rincón de Gertrudis',
'city_id' => DB::table('cities')->where('name','Tlacotalpan')->first()->id
],

['name' => 'La Providencia',
'city_id' => DB::table('cities')->where('name','Tlacotalpan')->first()->id
],

['name' => 'La Punta del Dormido',
'city_id' => DB::table('cities')->where('name','Tlacotalpan')->first()->id
],

['name' => 'Playa Martínez',
'city_id' => DB::table('cities')->where('name','Tlacotalpan')->first()->id
],

['name' => 'Tierra Nueva',
'city_id' => DB::table('cities')->where('name','Tlacotalpan')->first()->id
],

['name' => 'Boca de Martintela',
'city_id' => DB::table('cities')->where('name','Tlacotalpan')->first()->id
],

['name' => 'Consolación',
'city_id' => DB::table('cities')->where('name','Tlacotalpan')->first()->id
],

['name' => 'Playa de la Gloria',
'city_id' => DB::table('cities')->where('name','Tlacotalpan')->first()->id
],

['name' => 'Playa de las Águilas (La Vuelta del Águila)',
'city_id' => DB::table('cities')->where('name','Tlacotalpan')->first()->id
],

['name' => 'Santa Rita',
'city_id' => DB::table('cities')->where('name','Tlacotalpan')->first()->id
],

['name' => 'Buenos Aires',
'city_id' => DB::table('cities')->where('name','Tlacotalpan')->first()->id
],

['name' => 'Bugambilia',
'city_id' => DB::table('cities')->where('name','Tlacotalpan')->first()->id
],

['name' => 'Ejido el Saladito',
'city_id' => DB::table('cities')->where('name','Tlacotalpan')->first()->id
],

['name' => 'El Ciruelo',
'city_id' => DB::table('cities')->where('name','Tlacotalpan')->first()->id
],

['name' => 'El Nacaste',
'city_id' => DB::table('cities')->where('name','Tlacotalpan')->first()->id
],

['name' => 'El Pájaro',
'city_id' => DB::table('cities')->where('name','Tlacotalpan')->first()->id
],

['name' => 'La Barranca',
'city_id' => DB::table('cities')->where('name','Tlacotalpan')->first()->id
],

['name' => 'La Guadalupe',
'city_id' => DB::table('cities')->where('name','Tlacotalpan')->first()->id
],

['name' => 'La Magdalena',
'city_id' => DB::table('cities')->where('name','Tlacotalpan')->first()->id
],

['name' => 'Linda Vista',
'city_id' => DB::table('cities')->where('name','Tlacotalpan')->first()->id
],

['name' => 'Mano Perdida (La Nueva Reforma)',
'city_id' => DB::table('cities')->where('name','Tlacotalpan')->first()->id
],

['name' => 'Nueva Era',
'city_id' => DB::table('cities')->where('name','Tlacotalpan')->first()->id
],

['name' => 'Pérez y Jiménez',
'city_id' => DB::table('cities')->where('name','Tlacotalpan')->first()->id
],

['name' => 'San Antonio',
'city_id' => DB::table('cities')->where('name','Tlacotalpan')->first()->id
],

['name' => 'San Jerónimo',
'city_id' => DB::table('cities')->where('name','Tlacotalpan')->first()->id
],

['name' => 'Tres Bocas',
'city_id' => DB::table('cities')->where('name','Tlacotalpan')->first()->id
],

['name' => 'Santa Fe',
'city_id' => DB::table('cities')->where('name','Tlacotalpan')->first()->id
],

['name' => 'El Volantín',
'city_id' => DB::table('cities')->where('name','Tlacotalpan')->first()->id
],

['name' => 'El Espinal',
'city_id' => DB::table('cities')->where('name','Tlacotalpan')->first()->id
],

['name' => 'La Palmita',
'city_id' => DB::table('cities')->where('name','Tlacotalpan')->first()->id
],

['name' => 'Los Amates',
'city_id' => DB::table('cities')->where('name','Tlacotalpan')->first()->id
],

['name' => 'Mundo Nuevo',
'city_id' => DB::table('cities')->where('name','Tlacotalpan')->first()->id
],

['name' => 'San Joaquín',
'city_id' => DB::table('cities')->where('name','Tlacotalpan')->first()->id
],

['name' => 'San Ruperto',
'city_id' => DB::table('cities')->where('name','Tlacotalpan')->first()->id
],

['name' => 'Boca de San Miguel',
'city_id' => DB::table('cities')->where('name','Tlacotalpan')->first()->id
],

['name' => 'El Jarocho (El Hatillo)',
'city_id' => DB::table('cities')->where('name','Tlacotalpan')->first()->id
],

['name' => 'Loma de Chumiapa',
'city_id' => DB::table('cities')->where('name','Tlacotalpan')->first()->id
],

['name' => 'Mata de Chile',
'city_id' => DB::table('cities')->where('name','Tlacotalpan')->first()->id
],

['name' => 'Casas Viejas',
'city_id' => DB::table('cities')->where('name','Tlacotalpan')->first()->id
],

['name' => 'Chinalco',
'city_id' => DB::table('cities')->where('name','Tlacotalpan')->first()->id
],

['name' => 'Palo Alto (Barranca del Limón)',
'city_id' => DB::table('cities')->where('name','Tlacotalpan')->first()->id
],

['name' => 'San Agustín',
'city_id' => DB::table('cities')->where('name','Tlacotalpan')->first()->id
],

['name' => 'El Ciruelo',
'city_id' => DB::table('cities')->where('name','Tlacotalpan')->first()->id
],

['name' => 'El Limón (San José de Cházaro)',
'city_id' => DB::table('cities')->where('name','Tlacotalpan')->first()->id
],

['name' => 'El Zapote',
'city_id' => DB::table('cities')->where('name','Tlacotalpan')->first()->id
],

['name' => 'La Patrona',
'city_id' => DB::table('cities')->where('name','Tlacotalpan')->first()->id
],

['name' => 'Los Jobos Altos (Sal si Puedes)',
'city_id' => DB::table('cities')->where('name','Tlacotalpan')->first()->id
],

['name' => 'Santa Julia',
'city_id' => DB::table('cities')->where('name','Tlacotalpan')->first()->id
],

['name' => 'Chapultepec (Chapultes)',
'city_id' => DB::table('cities')->where('name','Tlacotalpan')->first()->id
],

['name' => 'El Vergel (La Berenjena)',
'city_id' => DB::table('cities')->where('name','Tlacotalpan')->first()->id
],

['name' => 'Las Amapolas',
'city_id' => DB::table('cities')->where('name','Tlacotalpan')->first()->id
],

['name' => 'Los Zapotillos',
'city_id' => DB::table('cities')->where('name','Tlacotalpan')->first()->id
],

['name' => 'San José de Cházaro',
'city_id' => DB::table('cities')->where('name','Tlacotalpan')->first()->id
],

['name' => 'San Pedro',
'city_id' => DB::table('cities')->where('name','Tlacotalpan')->first()->id
],

['name' => 'Remolino de Paván',
'city_id' => DB::table('cities')->where('name','Tlacotalpan')->first()->id
],

['name' => 'San Modesto',
'city_id' => DB::table('cities')->where('name','Tlacotalpan')->first()->id
],

['name' => 'Santa Rosalía',
'city_id' => DB::table('cities')->where('name','Tlacotalpan')->first()->id
],

['name' => 'Tierra Nueva (Ejido el Zapotal)',
'city_id' => DB::table('cities')->where('name','Tlacotalpan')->first()->id
],

['name' => 'El Marqués',
'city_id' => DB::table('cities')->where('name','Tlacotalpan')->first()->id
],

['name' => 'Hacienda Vieja',
'city_id' => DB::table('cities')->where('name','Tlacotalpan')->first()->id
],

['name' => 'La Gallarda',
'city_id' => DB::table('cities')->where('name','Tlacotalpan')->first()->id
],

['name' => 'La Paz (Poblado Grupo la Paz)',
'city_id' => DB::table('cities')->where('name','Tlacotalpan')->first()->id
],

['name' => 'San Isidro',
'city_id' => DB::table('cities')->where('name','Tlacotalpan')->first()->id
],

['name' => 'Seis de Enero',
'city_id' => DB::table('cities')->where('name','Tlacotalpan')->first()->id
],

['name' => 'El Súchil Dos',
'city_id' => DB::table('cities')->where('name','Tlacotalpan')->first()->id
],

['name' => 'El Súchil Uno',
'city_id' => DB::table('cities')->where('name','Tlacotalpan')->first()->id
],

['name' => 'La Candelaria',
'city_id' => DB::table('cities')->where('name','Tlacotalpan')->first()->id
],

['name' => 'La Carbonera',
'city_id' => DB::table('cities')->where('name','Tlacotalpan')->first()->id
],

['name' => 'Remolino de Aguilera',
'city_id' => DB::table('cities')->where('name','Tlacotalpan')->first()->id
],

['name' => 'El Hornero (Francisco J. Moreno)',
'city_id' => DB::table('cities')->where('name','Tlacotalpan')->first()->id
],

['name' => 'La Cerquilla',
'city_id' => DB::table('cities')->where('name','Tlacotalpan')->first()->id
],

['name' => 'La Corriente',
'city_id' => DB::table('cities')->where('name','Tlacotalpan')->first()->id
],

['name' => 'Laguna Verde',
'city_id' => DB::table('cities')->where('name','Tlacotalpan')->first()->id
],

['name' => 'Vuelta de Piotitán',
'city_id' => DB::table('cities')->where('name','Tlacotalpan')->first()->id
],

['name' => 'El Jobo',
'city_id' => DB::table('cities')->where('name','Tlacotalpan')->first()->id
],

['name' => 'Boca del Barco (Boca de San Juan)',
'city_id' => DB::table('cities')->where('name','Tlacotalpan')->first()->id
],

['name' => 'Bodeguillas',
'city_id' => DB::table('cities')->where('name','Tlacotalpan')->first()->id
],

['name' => 'Cerro de la Gallarda',
'city_id' => DB::table('cities')->where('name','Tlacotalpan')->first()->id
],

['name' => 'La Puente',
'city_id' => DB::table('cities')->where('name','Tlacotalpan')->first()->id
],

['name' => 'Las Canillas',
'city_id' => DB::table('cities')->where('name','Tlacotalpan')->first()->id
],

['name' => 'Palma Sola',
'city_id' => DB::table('cities')->where('name','Tlacotalpan')->first()->id
],

['name' => 'San Felipe',
'city_id' => DB::table('cities')->where('name','Tlacotalpan')->first()->id
],

['name' => 'Guadalupe',
'city_id' => DB::table('cities')->where('name','Saltabarranca')->first()->id
],

['name' => 'Miramar',
'city_id' => DB::table('cities')->where('name','Saltabarranca')->first()->id
],

['name' => 'Obrera',
'city_id' => DB::table('cities')->where('name','Saltabarranca')->first()->id
],

['name' => 'Saltabarranca Centro',
'city_id' => DB::table('cities')->where('name','Saltabarranca')->first()->id
],

['name' => 'El Zapote',
'city_id' => DB::table('cities')->where('name','Saltabarranca')->first()->id
],

['name' => 'El Canelar',
'city_id' => DB::table('cities')->where('name','Saltabarranca')->first()->id
],

['name' => 'La Laja',
'city_id' => DB::table('cities')->where('name','Saltabarranca')->first()->id
],

['name' => 'El Remolino',
'city_id' => DB::table('cities')->where('name','Saltabarranca')->first()->id
],

['name' => 'El Capulinar',
'city_id' => DB::table('cities')->where('name','Saltabarranca')->first()->id
],

['name' => 'El Milagro',
'city_id' => DB::table('cities')->where('name','Saltabarranca')->first()->id
],

['name' => 'San Diego',
'city_id' => DB::table('cities')->where('name','Saltabarranca')->first()->id
],

['name' => 'Zamora Caleton',
'city_id' => DB::table('cities')->where('name','Saltabarranca')->first()->id
],

['name' => 'La Piedra',
'city_id' => DB::table('cities')->where('name','Saltabarranca')->first()->id
],

['name' => 'Tres Piedras',
'city_id' => DB::table('cities')->where('name','Saltabarranca')->first()->id
],

['name' => 'El Cardón',
'city_id' => DB::table('cities')->where('name','Saltabarranca')->first()->id
],

['name' => 'El Berraco',
'city_id' => DB::table('cities')->where('name','Saltabarranca')->first()->id
],

['name' => 'Paso Saltabarranca',
'city_id' => DB::table('cities')->where('name','Saltabarranca')->first()->id
],

['name' => 'Las Blancas',
'city_id' => DB::table('cities')->where('name','Saltabarranca')->first()->id
],

['name' => 'La Carolina',
'city_id' => DB::table('cities')->where('name','Saltabarranca')->first()->id
],

['name' => 'San Ramón',
'city_id' => DB::table('cities')->where('name','Saltabarranca')->first()->id
],

['name' => 'El Remolino',
'city_id' => DB::table('cities')->where('name','Saltabarranca')->first()->id
],

['name' => 'El Lirio',
'city_id' => DB::table('cities')->where('name','Saltabarranca')->first()->id
],

['name' => 'El Zopilote',
'city_id' => DB::table('cities')->where('name','Saltabarranca')->first()->id
],

['name' => 'La Soledad',
'city_id' => DB::table('cities')->where('name','Saltabarranca')->first()->id
],

['name' => 'El Mirador',
'city_id' => DB::table('cities')->where('name','Saltabarranca')->first()->id
],

['name' => 'Caro Huerta Masera',
'city_id' => DB::table('cities')->where('name','Saltabarranca')->first()->id
],

['name' => 'El Acuyal',
'city_id' => DB::table('cities')->where('name','Saltabarranca')->first()->id
],

['name' => 'La Margarita (La Pepetaca)',
'city_id' => DB::table('cities')->where('name','Saltabarranca')->first()->id
],

['name' => 'Rincón',
'city_id' => DB::table('cities')->where('name','Saltabarranca')->first()->id
],

['name' => 'El Uveral',
'city_id' => DB::table('cities')->where('name','Saltabarranca')->first()->id
],

['name' => 'San Luis',
'city_id' => DB::table('cities')->where('name','Saltabarranca')->first()->id
],

['name' => 'El Macuile',
'city_id' => DB::table('cities')->where('name','Saltabarranca')->first()->id
],

['name' => 'Boca de La Sierra',
'city_id' => DB::table('cities')->where('name','Saltabarranca')->first()->id
],

['name' => 'Otatitlan',
'city_id' => DB::table('cities')->where('name','Otatitlán')->first()->id
],

['name' => 'Jesús Urueta',
'city_id' => DB::table('cities')->where('name','Otatitlán')->first()->id
],

['name' => 'El Zapote',
'city_id' => DB::table('cities')->where('name','Otatitlán')->first()->id
],

['name' => 'Tlacojalpan Centro',
'city_id' => DB::table('cities')->where('name','Tlacojalpan')->first()->id
],

['name' => 'Gertrudis Valles',
'city_id' => DB::table('cities')->where('name','Tlacojalpan')->first()->id
],

['name' => '20 de Noviembre',
'city_id' => DB::table('cities')->where('name','Tlacojalpan')->first()->id
],

['name' => 'Alcalde Ambrosio',
'city_id' => DB::table('cities')->where('name','Tlacojalpan')->first()->id
],

['name' => 'Playa Maria',
'city_id' => DB::table('cities')->where('name','Tlacojalpan')->first()->id
],

['name' => 'Tuxtilla',
'city_id' => DB::table('cities')->where('name','Tuxtilla')->first()->id
],

['name' => 'Chacaltianguis',
'city_id' => DB::table('cities')->where('name','Chacaltianguis')->first()->id
],

['name' => 'La Gloria',
'city_id' => DB::table('cities')->where('name','Chacaltianguis')->first()->id
],

['name' => 'Moyota',
'city_id' => DB::table('cities')->where('name','Chacaltianguis')->first()->id
],

['name' => 'Laguna de Lagarto',
'city_id' => DB::table('cities')->where('name','Chacaltianguis')->first()->id
],

['name' => 'Las Sabanetas',
'city_id' => DB::table('cities')->where('name','Chacaltianguis')->first()->id
],

['name' => 'Joachín',
'city_id' => DB::table('cities')->where('name','Chacaltianguis')->first()->id
],

['name' => 'Torno Largo',
'city_id' => DB::table('cities')->where('name','Chacaltianguis')->first()->id
],

['name' => 'Mata de Caña',
'city_id' => DB::table('cities')->where('name','Chacaltianguis')->first()->id
],

['name' => 'Del Bosque',
'city_id' => DB::table('cities')->where('name','José Azueta')->first()->id
],

['name' => 'Tejeda',
'city_id' => DB::table('cities')->where('name','José Azueta')->first()->id
],

['name' => 'Vázquez Vela',
'city_id' => DB::table('cities')->where('name','José Azueta')->first()->id
],

['name' => 'Venecia',
'city_id' => DB::table('cities')->where('name','José Azueta')->first()->id
],

['name' => 'Curazao',
'city_id' => DB::table('cities')->where('name','José Azueta')->first()->id
],

['name' => 'El Maguey',
'city_id' => DB::table('cities')->where('name','José Azueta')->first()->id
],

['name' => 'Villa Azueta',
'city_id' => DB::table('cities')->where('name','José Azueta')->first()->id
],

['name' => 'Nueva',
'city_id' => DB::table('cities')->where('name','José Azueta')->first()->id
],

['name' => 'Valle Dorado',
'city_id' => DB::table('cities')->where('name','José Azueta')->first()->id
],

['name' => 'Veracrucito',
'city_id' => DB::table('cities')->where('name','José Azueta')->first()->id
],

['name' => 'Lindavista',
'city_id' => DB::table('cities')->where('name','José Azueta')->first()->id
],

['name' => 'San Luis',
'city_id' => DB::table('cities')->where('name','José Azueta')->first()->id
],

['name' => 'San Jerónimo',
'city_id' => DB::table('cities')->where('name','José Azueta')->first()->id
],

['name' => 'Dobladero',
'city_id' => DB::table('cities')->where('name','José Azueta')->first()->id
],

['name' => 'La Esperanza',
'city_id' => DB::table('cities')->where('name','José Azueta')->first()->id
],

['name' => 'Manzanillo',
'city_id' => DB::table('cities')->where('name','José Azueta')->first()->id
],

['name' => 'Vicente Guerrero (El Aguacate)',
'city_id' => DB::table('cities')->where('name','José Azueta')->first()->id
],

['name' => 'Cujuliapan',
'city_id' => DB::table('cities')->where('name','José Azueta')->first()->id
],

['name' => 'Tenejapan (Tenejapan de Mata)',
'city_id' => DB::table('cities')->where('name','José Azueta')->first()->id
],

['name' => 'Tesechoacán',
'city_id' => DB::table('cities')->where('name','José Azueta')->first()->id
],

['name' => 'Pueblo Nuevo',
'city_id' => DB::table('cities')->where('name','José Azueta')->first()->id
],

['name' => 'Jobo Grande',
'city_id' => DB::table('cities')->where('name','José Azueta')->first()->id
],

['name' => 'Agua Fría',
'city_id' => DB::table('cities')->where('name','José Azueta')->first()->id
],

['name' => 'Las Hojas',
'city_id' => DB::table('cities')->where('name','José Azueta')->first()->id
],

['name' => 'Tres Lagunas',
'city_id' => DB::table('cities')->where('name','José Azueta')->first()->id
],

['name' => 'El Pedregoso',
'city_id' => DB::table('cities')->where('name','Playa Vicente')->first()->id
],

['name' => 'Solidaridad',
'city_id' => DB::table('cities')->where('name','Playa Vicente')->first()->id
],

['name' => 'La Concepción',
'city_id' => DB::table('cities')->where('name','Playa Vicente')->first()->id
],

['name' => 'Chapultepec',
'city_id' => DB::table('cities')->where('name','Playa Vicente')->first()->id
],

['name' => 'La Florida',
'city_id' => DB::table('cities')->where('name','Playa Vicente')->first()->id
],

['name' => 'La Guadalupe',
'city_id' => DB::table('cities')->where('name','Playa Vicente')->first()->id
],

['name' => 'La Loma',
'city_id' => DB::table('cities')->where('name','Playa Vicente')->first()->id
],

['name' => 'Las Palmas',
'city_id' => DB::table('cities')->where('name','Playa Vicente')->first()->id
],

['name' => 'Playa Vicente Centro',
'city_id' => DB::table('cities')->where('name','Playa Vicente')->first()->id
],

['name' => 'Emiliano Zapata',
'city_id' => DB::table('cities')->where('name','Playa Vicente')->first()->id
],

['name' => 'Zorrillo',
'city_id' => DB::table('cities')->where('name','Playa Vicente')->first()->id
],

['name' => 'Lomas Verdes',
'city_id' => DB::table('cities')->where('name','Playa Vicente')->first()->id
],

['name' => 'Lealtad de Muñoz',
'city_id' => DB::table('cities')->where('name','Playa Vicente')->first()->id
],

['name' => 'Miguel López',
'city_id' => DB::table('cities')->where('name','Playa Vicente')->first()->id
],

['name' => 'Mata de Caña',
'city_id' => DB::table('cities')->where('name','Playa Vicente')->first()->id
],

['name' => 'La Victoria',
'city_id' => DB::table('cities')->where('name','Playa Vicente')->first()->id
],

['name' => 'Arroyo Bermejo',
'city_id' => DB::table('cities')->where('name','Playa Vicente')->first()->id
],

['name' => 'El Ramie',
'city_id' => DB::table('cities')->where('name','Playa Vicente')->first()->id
],

['name' => 'Juan Enríquez',
'city_id' => DB::table('cities')->where('name','Playa Vicente')->first()->id
],

['name' => 'La Petronila',
'city_id' => DB::table('cities')->where('name','Playa Vicente')->first()->id
],

['name' => 'Arroyo Colorado',
'city_id' => DB::table('cities')->where('name','Playa Vicente')->first()->id
],

['name' => 'San Ramón Segundo',
'city_id' => DB::table('cities')->where('name','Playa Vicente')->first()->id
],

['name' => 'Ruiz Cortines Revolución',
'city_id' => DB::table('cities')->where('name','Playa Vicente')->first()->id
],

['name' => 'Tierra Nueva',
'city_id' => DB::table('cities')->where('name','Playa Vicente')->first()->id
],

['name' => 'Nuevo Ojitlán',
'city_id' => DB::table('cities')->where('name','Playa Vicente')->first()->id
],

['name' => 'Arroyo Dehesa',
'city_id' => DB::table('cities')->where('name','Playa Vicente')->first()->id
],

['name' => 'El Mirador',
'city_id' => DB::table('cities')->where('name','Playa Vicente')->first()->id
],

['name' => 'Rancho Grande',
'city_id' => DB::table('cities')->where('name','Playa Vicente')->first()->id
],

['name' => 'Arroyo Seco',
'city_id' => DB::table('cities')->where('name','Playa Vicente')->first()->id
],

['name' => 'Monte Verde',
'city_id' => DB::table('cities')->where('name','Playa Vicente')->first()->id
],

['name' => 'General Hermenegildo Galeana',
'city_id' => DB::table('cities')->where('name','Playa Vicente')->first()->id
],

['name' => 'Chilapa del Carmen',
'city_id' => DB::table('cities')->where('name','Playa Vicente')->first()->id
],

['name' => 'Arenal Santa Ana',
'city_id' => DB::table('cities')->where('name','Playa Vicente')->first()->id
],

['name' => 'El Nigromante',
'city_id' => DB::table('cities')->where('name','Playa Vicente')->first()->id
],

['name' => 'La Sabana Carame',
'city_id' => DB::table('cities')->where('name','Playa Vicente')->first()->id
],

['name' => 'El Zapotal',
'city_id' => DB::table('cities')->where('name','Playa Vicente')->first()->id
],

['name' => 'San José Chilapa',
'city_id' => DB::table('cities')->where('name','Playa Vicente')->first()->id
],

['name' => 'El Serrano',
'city_id' => DB::table('cities')->where('name','Playa Vicente')->first()->id
],

['name' => 'Benito Juárez',
'city_id' => DB::table('cities')->where('name','Playa Vicente')->first()->id
],

['name' => 'Arroyo Zacate',
'city_id' => DB::table('cities')->where('name','Playa Vicente')->first()->id
],

['name' => 'Tomatillo',
'city_id' => DB::table('cities')->where('name','Playa Vicente')->first()->id
],

['name' => 'La Nueva Era',
'city_id' => DB::table('cities')->where('name','Playa Vicente')->first()->id
],

['name' => 'Santa Rosa',
'city_id' => DB::table('cities')->where('name','Playa Vicente')->first()->id
],

['name' => 'Tomate Río Manso',
'city_id' => DB::table('cities')->where('name','Playa Vicente')->first()->id
],

['name' => 'Cuauhtémoc',
'city_id' => DB::table('cities')->where('name','Playa Vicente')->first()->id
],

['name' => 'Abasolo Del Valle',
'city_id' => DB::table('cities')->where('name','Playa Vicente')->first()->id
],

['name' => 'San Isidro',
'city_id' => DB::table('cities')->where('name','Playa Vicente')->first()->id
],

['name' => 'El Naranjo',
'city_id' => DB::table('cities')->where('name','Playa Vicente')->first()->id
],

['name' => 'Úrsulo Galván (La Primavera)',
'city_id' => DB::table('cities')->where('name','Playa Vicente')->first()->id
],

['name' => 'Arroyo San Pedro',
'city_id' => DB::table('cities')->where('name','Playa Vicente')->first()->id
],

['name' => 'El Vergel',
'city_id' => DB::table('cities')->where('name','Playa Vicente')->first()->id
],

['name' => 'General Guadalupe Victoria',
'city_id' => DB::table('cities')->where('name','Playa Vicente')->first()->id
],

['name' => 'Nuevo Arroyo del Tigre',
'city_id' => DB::table('cities')->where('name','Playa Vicente')->first()->id
],

['name' => 'Nuevo San Martín',
'city_id' => DB::table('cities')->where('name','Playa Vicente')->first()->id
],

['name' => 'Nuevo Raya Caracol (Zanja Seca)',
'city_id' => DB::table('cities')->where('name','Playa Vicente')->first()->id
],

['name' => 'Vega del Joval',
'city_id' => DB::table('cities')->where('name','Playa Vicente')->first()->id
],

['name' => 'Nuevo Cosolapa Sarmiento',
'city_id' => DB::table('cities')->where('name','Playa Vicente')->first()->id
],

['name' => 'Nuevo Ixcatlan',
'city_id' => DB::table('cities')->where('name','Playa Vicente')->first()->id
],

['name' => 'Andrés Gómez Alemán',
'city_id' => DB::table('cities')->where('name','Playa Vicente')->first()->id
],

['name' => 'Xochiapan',
'city_id' => DB::table('cities')->where('name','Santiago Sochiapan')->first()->id
],

['name' => 'El Trébol',
'city_id' => DB::table('cities')->where('name','Santiago Sochiapan')->first()->id
],

['name' => 'La Providencia',
'city_id' => DB::table('cities')->where('name','Santiago Sochiapan')->first()->id
],

['name' => 'Niños Héroes',
'city_id' => DB::table('cities')->where('name','Santiago Sochiapan')->first()->id
],

['name' => 'Santa Teresa',
'city_id' => DB::table('cities')->where('name','Santiago Sochiapan')->first()->id
],

['name' => 'Alfredo V Bonfil',
'city_id' => DB::table('cities')->where('name','Santiago Sochiapan')->first()->id
],

['name' => 'Arroyo Santa Maria',
'city_id' => DB::table('cities')->where('name','Santiago Sochiapan')->first()->id
],

['name' => 'El Paraíso',
'city_id' => DB::table('cities')->where('name','Santiago Sochiapan')->first()->id
],

['name' => 'San Cristóbal',
'city_id' => DB::table('cities')->where('name','Santiago Sochiapan')->first()->id
],

['name' => 'La Unión Progreso Tatahuicapa',
'city_id' => DB::table('cities')->where('name','Santiago Sochiapan')->first()->id
],

['name' => 'La Ceiba Nueva',
'city_id' => DB::table('cities')->where('name','Santiago Sochiapan')->first()->id
],

['name' => 'El Nuevo Progreso Tatahuicapan',
'city_id' => DB::table('cities')->where('name','Santiago Sochiapan')->first()->id
],

['name' => 'Arroyo de Hojas',
'city_id' => DB::table('cities')->where('name','Santiago Sochiapan')->first()->id
],

['name' => 'Santa Margarita Yogopi',
'city_id' => DB::table('cities')->where('name','Santiago Sochiapan')->first()->id
],

['name' => 'Ruben Ortiz',
'city_id' => DB::table('cities')->where('name','Santiago Sochiapan')->first()->id
],

['name' => 'Hermanos Uscanga',
'city_id' => DB::table('cities')->where('name','Santiago Sochiapan')->first()->id
],

['name' => 'Nuevo Ideal de Arriba',
'city_id' => DB::table('cities')->where('name','Santiago Sochiapan')->first()->id
],

['name' => 'Mundo Nuevo',
'city_id' => DB::table('cities')->where('name','Santiago Sochiapan')->first()->id
],

['name' => 'El Zapote',
'city_id' => DB::table('cities')->where('name','Santiago Sochiapan')->first()->id
],

['name' => 'El Tauro',
'city_id' => DB::table('cities')->where('name','Santiago Sochiapan')->first()->id
],

['name' => 'Boca Del Monte',
'city_id' => DB::table('cities')->where('name','Santiago Sochiapan')->first()->id
],

['name' => 'Emiliano Zapata',
'city_id' => DB::table('cities')->where('name','Santiago Sochiapan')->first()->id
],

['name' => 'Tatahuicapa',
'city_id' => DB::table('cities')->where('name','Santiago Sochiapan')->first()->id
],

['name' => 'La Laguna',
'city_id' => DB::table('cities')->where('name','Santiago Sochiapan')->first()->id
],

['name' => 'Margarito Montes Parra',
'city_id' => DB::table('cities')->where('name','Santiago Sochiapan')->first()->id
],

['name' => 'Rio de Lana',
'city_id' => DB::table('cities')->where('name','Santiago Sochiapan')->first()->id
],

['name' => 'El Medellin',
'city_id' => DB::table('cities')->where('name','Santiago Sochiapan')->first()->id
],

['name' => 'Sergio Vera Cervantes',
'city_id' => DB::table('cities')->where('name','Santiago Sochiapan')->first()->id
],

['name' => 'Benito Juárez',
'city_id' => DB::table('cities')->where('name','Santiago Sochiapan')->first()->id
],

['name' => 'Arroyo Colorado Cruz Verde',
'city_id' => DB::table('cities')->where('name','Santiago Sochiapan')->first()->id
],

['name' => 'Augusto Gómez Villanueva',
'city_id' => DB::table('cities')->where('name','Santiago Sochiapan')->first()->id
],

['name' => 'La Guadalupe',
'city_id' => DB::table('cities')->where('name','Santiago Sochiapan')->first()->id
],

['name' => 'Arenalito',
'city_id' => DB::table('cities')->where('name','Santiago Sochiapan')->first()->id
],

['name' => 'Vista Hermosa',
'city_id' => DB::table('cities')->where('name','Santiago Sochiapan')->first()->id
],

['name' => 'Nuevo Boca Del Monte',
'city_id' => DB::table('cities')->where('name','Santiago Sochiapan')->first()->id
],

['name' => 'Puebla',
'city_id' => DB::table('cities')->where('name','Santiago Sochiapan')->first()->id
],

['name' => 'Los Hernández',
'city_id' => DB::table('cities')->where('name','Santiago Sochiapan')->first()->id
],

['name' => 'General Lázaro Cárdenas',
'city_id' => DB::table('cities')->where('name','Santiago Sochiapan')->first()->id
],

['name' => 'San Gabriel de La Chinantla',
'city_id' => DB::table('cities')->where('name','Santiago Sochiapan')->first()->id
],

['name' => 'Isla Centro',
'city_id' => DB::table('cities')->where('name','Isla')->first()->id
],

['name' => 'Cetis',
'city_id' => DB::table('cities')->where('name','Isla')->first()->id
],

['name' => 'El Paraíso',
'city_id' => DB::table('cities')->where('name','Isla')->first()->id
],

['name' => 'Benito Juárez',
'city_id' => DB::table('cities')->where('name','Isla')->first()->id
],

['name' => 'Lázaro Cárdenas',
'city_id' => DB::table('cities')->where('name','Isla')->first()->id
],

['name' => 'San Jose',
'city_id' => DB::table('cities')->where('name','Isla')->first()->id
],

['name' => 'San Juan de Dios',
'city_id' => DB::table('cities')->where('name','Isla')->first()->id
],

['name' => 'Emiliano Zapata',
'city_id' => DB::table('cities')->where('name','Isla')->first()->id
],

['name' => 'La Loma',
'city_id' => DB::table('cities')->where('name','Isla')->first()->id
],

['name' => 'Mariano Aguirre Uscanga',
'city_id' => DB::table('cities')->where('name','Isla')->first()->id
],

['name' => 'La Luz',
'city_id' => DB::table('cities')->where('name','Isla')->first()->id
],

['name' => 'Naranjo',
'city_id' => DB::table('cities')->where('name','Isla')->first()->id
],

['name' => 'La Gravera',
'city_id' => DB::table('cities')->where('name','Isla')->first()->id
],

['name' => 'Luis Donaldo Colosio',
'city_id' => DB::table('cities')->where('name','Isla')->first()->id
],

['name' => 'Chamizal',
'city_id' => DB::table('cities')->where('name','Isla')->first()->id
],

['name' => 'Agropista',
'city_id' => DB::table('cities')->where('name','Isla')->first()->id
],

['name' => 'Fernando López Arias',
'city_id' => DB::table('cities')->where('name','Isla')->first()->id
],

['name' => 'Limón de Guerrero',
'city_id' => DB::table('cities')->where('name','Isla')->first()->id
],

['name' => 'Santa Fe',
'city_id' => DB::table('cities')->where('name','Isla')->first()->id
],

['name' => 'Victor M Aguirre',
'city_id' => DB::table('cities')->where('name','Isla')->first()->id
],

['name' => 'Obrera',
'city_id' => DB::table('cities')->where('name','Isla')->first()->id
],

['name' => 'San Simón II',
'city_id' => DB::table('cities')->where('name','Isla')->first()->id
],

['name' => 'San Simón Segundo (Las Águilas)',
'city_id' => DB::table('cities')->where('name','Isla')->first()->id
],

['name' => 'San Nicolás Zacapexco',
'city_id' => DB::table('cities')->where('name','Isla')->first()->id
],

['name' => 'Nuevo Canton',
'city_id' => DB::table('cities')->where('name','Isla')->first()->id
],

['name' => 'El Chancarro',
'city_id' => DB::table('cities')->where('name','Isla')->first()->id
],

['name' => 'Nuevo Viloria',
'city_id' => DB::table('cities')->where('name','Isla')->first()->id
],

['name' => 'Las Tunas',
'city_id' => DB::table('cities')->where('name','Isla')->first()->id
],

['name' => 'Palmarillo',
'city_id' => DB::table('cities')->where('name','Isla')->first()->id
],

['name' => 'Garro',
'city_id' => DB::table('cities')->where('name','Isla')->first()->id
],

['name' => 'El Nanche',
'city_id' => DB::table('cities')->where('name','Isla')->first()->id
],

['name' => 'Raudal',
'city_id' => DB::table('cities')->where('name','Isla')->first()->id
],

['name' => 'Vista Hermosa',
'city_id' => DB::table('cities')->where('name','Isla')->first()->id
],

['name' => 'Viloria Viejo',
'city_id' => DB::table('cities')->where('name','Isla')->first()->id
],

['name' => 'Las Hojas (Las Hojitas)',
'city_id' => DB::table('cities')->where('name','Isla')->first()->id
],

['name' => 'Montecristo',
'city_id' => DB::table('cities')->where('name','Isla')->first()->id
],

['name' => 'Las Playas',
'city_id' => DB::table('cities')->where('name','Isla')->first()->id
],

['name' => 'Cañada',
'city_id' => DB::table('cities')->where('name','Isla')->first()->id
],

['name' => 'Agua Fría',
'city_id' => DB::table('cities')->where('name','Isla')->first()->id
],

['name' => 'Rodolfo Fierro',
'city_id' => DB::table('cities')->where('name','Isla')->first()->id
],

['name' => 'Totoloche',
'city_id' => DB::table('cities')->where('name','Isla')->first()->id
],

['name' => 'San Anastasio',
'city_id' => DB::table('cities')->where('name','Isla')->first()->id
],

['name' => 'San Pedro Jalpa',
'city_id' => DB::table('cities')->where('name','Isla')->first()->id
],

['name' => 'San Pedro Mártir',
'city_id' => DB::table('cities')->where('name','Isla')->first()->id
],

['name' => 'Licenciado Alfredo V. Bonfil',
'city_id' => DB::table('cities')->where('name','Isla')->first()->id
],

['name' => 'El Maguial (La Laguna)',
'city_id' => DB::table('cities')->where('name','Isla')->first()->id
],

['name' => 'Ignacio Ramirez',
'city_id' => DB::table('cities')->where('name','Isla')->first()->id
],

['name' => 'Las Golondrinas',
'city_id' => DB::table('cities')->where('name','Isla')->first()->id
],

['name' => 'Los Dos Hermanos',
'city_id' => DB::table('cities')->where('name','Isla')->first()->id
],

['name' => 'El Paraíso',
'city_id' => DB::table('cities')->where('name','Isla')->first()->id
],

['name' => 'El Paisaje',
'city_id' => DB::table('cities')->where('name','Isla')->first()->id
],

['name' => 'Cerro Colorado',
'city_id' => DB::table('cities')->where('name','Isla')->first()->id
],

['name' => 'La Granja',
'city_id' => DB::table('cities')->where('name','Isla')->first()->id
],

['name' => 'Palma de Oro',
'city_id' => DB::table('cities')->where('name','Isla')->first()->id
],

['name' => 'Chiltepec',
'city_id' => DB::table('cities')->where('name','Isla')->first()->id
],

['name' => 'El Pozon',
'city_id' => DB::table('cities')->where('name','Isla')->first()->id
],

['name' => 'Macuile',
'city_id' => DB::table('cities')->where('name','Isla')->first()->id
],

['name' => 'Loma Alta',
'city_id' => DB::table('cities')->where('name','Isla')->first()->id
],

['name' => 'Garza Blanca',
'city_id' => DB::table('cities')->where('name','Isla')->first()->id
],

['name' => 'La Peña',
'city_id' => DB::table('cities')->where('name','Isla')->first()->id
],

['name' => 'Francisco Villa',
'city_id' => DB::table('cities')->where('name','Isla')->first()->id
],

['name' => 'El Cedral (Palo Gacho)',
'city_id' => DB::table('cities')->where('name','Isla')->first()->id
],

['name' => 'Oro Verde',
'city_id' => DB::table('cities')->where('name','Isla')->first()->id
],

['name' => 'San Luis',
'city_id' => DB::table('cities')->where('name','Isla')->first()->id
],

['name' => 'El Marcial',
'city_id' => DB::table('cities')->where('name','Isla')->first()->id
],

['name' => 'Santa María',
'city_id' => DB::table('cities')->where('name','Isla')->first()->id
],

['name' => 'Coapa',
'city_id' => DB::table('cities')->where('name','Isla')->first()->id
],

['name' => 'Las Garzas',
'city_id' => DB::table('cities')->where('name','Isla')->first()->id
],

['name' => 'San Ramón',
'city_id' => DB::table('cities')->where('name','Isla')->first()->id
],

['name' => 'Rancho Nuevo',
'city_id' => DB::table('cities')->where('name','Isla')->first()->id
],

['name' => 'Mazoco',
'city_id' => DB::table('cities')->where('name','Isla')->first()->id
],

['name' => 'El Mosquito',
'city_id' => DB::table('cities')->where('name','Isla')->first()->id
],

['name' => 'Nuevo Potrero',
'city_id' => DB::table('cities')->where('name','Isla')->first()->id
],

['name' => 'El Ñape',
'city_id' => DB::table('cities')->where('name','Isla')->first()->id
],

['name' => 'Cujuluapan (El Guayabo)',
'city_id' => DB::table('cities')->where('name','Isla')->first()->id
],

['name' => 'Mata Limones',
'city_id' => DB::table('cities')->where('name','Isla')->first()->id
],

['name' => 'Leyes de Reforma',
'city_id' => DB::table('cities')->where('name','Isla')->first()->id
],

['name' => 'El Tesoro',
'city_id' => DB::table('cities')->where('name','Isla')->first()->id
],

['name' => 'Balboa',
'city_id' => DB::table('cities')->where('name','Isla')->first()->id
],

['name' => 'Potrerillos',
'city_id' => DB::table('cities')->where('name','Isla')->first()->id
],

['name' => 'Las Macayas',
'city_id' => DB::table('cities')->where('name','Isla')->first()->id
],

['name' => 'Palo Blanco',
'city_id' => DB::table('cities')->where('name','Isla')->first()->id
],

['name' => 'Solerilla',
'city_id' => DB::table('cities')->where('name','Isla')->first()->id
],

['name' => 'Las Cruces',
'city_id' => DB::table('cities')->where('name','Isla')->first()->id
],

['name' => 'La Soledad',
'city_id' => DB::table('cities')->where('name','Juan Rodríguez Clara')->first()->id
],

['name' => 'Los Villas (El Penco)',
'city_id' => DB::table('cities')->where('name','Juan Rodríguez Clara')->first()->id
],

['name' => 'La Unión',
'city_id' => DB::table('cities')->where('name','Juan Rodríguez Clara')->first()->id
],

['name' => 'Pedro Mauleón',
'city_id' => DB::table('cities')->where('name','Juan Rodríguez Clara')->first()->id
],

['name' => 'Rincón Chiquito',
'city_id' => DB::table('cities')->where('name','Juan Rodríguez Clara')->first()->id
],

['name' => 'El Jatillo (El Hatillo)',
'city_id' => DB::table('cities')->where('name','Juan Rodríguez Clara')->first()->id
],

['name' => 'Teocalli',
'city_id' => DB::table('cities')->where('name','Juan Rodríguez Clara')->first()->id
],

['name' => 'Palo Miguel',
'city_id' => DB::table('cities')->where('name','Juan Rodríguez Clara')->first()->id
],

['name' => 'Antonio M. Quirasco',
'city_id' => DB::table('cities')->where('name','Juan Rodríguez Clara')->first()->id
],

['name' => 'La Isleta',
'city_id' => DB::table('cities')->where('name','Juan Rodríguez Clara')->first()->id
],

['name' => 'El Tular',
'city_id' => DB::table('cities')->where('name','Juan Rodríguez Clara')->first()->id
],

['name' => 'San Benito',
'city_id' => DB::table('cities')->where('name','Juan Rodríguez Clara')->first()->id
],

['name' => 'Paso del Ganado',
'city_id' => DB::table('cities')->where('name','Juan Rodríguez Clara')->first()->id
],

['name' => 'Nuevo Remolino (El Cincuenta)',
'city_id' => DB::table('cities')->where('name','Juan Rodríguez Clara')->first()->id
],

['name' => 'Paso del Ganado (La Loma)',
'city_id' => DB::table('cities')->where('name','Juan Rodríguez Clara')->first()->id
],

['name' => 'Monte Rosa',
'city_id' => DB::table('cities')->where('name','Juan Rodríguez Clara')->first()->id
],

['name' => 'La Asunción',
'city_id' => DB::table('cities')->where('name','Juan Rodríguez Clara')->first()->id
],

['name' => 'Santa Teresa',
'city_id' => DB::table('cities')->where('name','Juan Rodríguez Clara')->first()->id
],

['name' => 'El Blanco',
'city_id' => DB::table('cities')->where('name','Juan Rodríguez Clara')->first()->id
],

['name' => 'Nopalapan',
'city_id' => DB::table('cities')->where('name','Juan Rodríguez Clara')->first()->id
],

['name' => 'La Cañada',
'city_id' => DB::table('cities')->where('name','Juan Rodríguez Clara')->first()->id
],

['name' => 'El Ciruelo',
'city_id' => DB::table('cities')->where('name','Juan Rodríguez Clara')->first()->id
],

['name' => 'Matilla de Conejo',
'city_id' => DB::table('cities')->where('name','Juan Rodríguez Clara')->first()->id
],

['name' => 'Las Tuzas',
'city_id' => DB::table('cities')->where('name','Juan Rodríguez Clara')->first()->id
],

['name' => 'El Marquesillo',
'city_id' => DB::table('cities')->where('name','Juan Rodríguez Clara')->first()->id
],

['name' => 'Loma de los Changos',
'city_id' => DB::table('cities')->where('name','Juan Rodríguez Clara')->first()->id
],

['name' => 'Loma de Hujuapan',
'city_id' => DB::table('cities')->where('name','Juan Rodríguez Clara')->first()->id
],

['name' => 'Casas Viejas',
'city_id' => DB::table('cities')->where('name','Juan Rodríguez Clara')->first()->id
],

['name' => 'Cerro del Indio (Mata Verde)',
'city_id' => DB::table('cities')->where('name','Juan Rodríguez Clara')->first()->id
],

['name' => 'Ojo de Agua',
'city_id' => DB::table('cities')->where('name','Juan Rodríguez Clara')->first()->id
],

['name' => 'La Soledad',
'city_id' => DB::table('cities')->where('name','Juan Rodríguez Clara')->first()->id
],

['name' => 'El Atorón',
'city_id' => DB::table('cities')->where('name','Juan Rodríguez Clara')->first()->id
],

['name' => 'Los Domínguez',
'city_id' => DB::table('cities')->where('name','Juan Rodríguez Clara')->first()->id
],

['name' => 'San Martín',
'city_id' => DB::table('cities')->where('name','Juan Rodríguez Clara')->first()->id
],

['name' => 'Domínguez',
'city_id' => DB::table('cities')->where('name','Juan Rodríguez Clara')->first()->id
],

['name' => 'El Zorral',
'city_id' => DB::table('cities')->where('name','Juan Rodríguez Clara')->first()->id
],

['name' => 'Nueva Esperanza',
'city_id' => DB::table('cities')->where('name','Juan Rodríguez Clara')->first()->id
],

['name' => 'Vicente Guerrero',
'city_id' => DB::table('cities')->where('name','Juan Rodríguez Clara')->first()->id
],

['name' => 'Chacamaloya (Pancho Prieto)',
'city_id' => DB::table('cities')->where('name','Juan Rodríguez Clara')->first()->id
],

['name' => 'Dos Arbolitos',
'city_id' => DB::table('cities')->where('name','Juan Rodríguez Clara')->first()->id
],

['name' => 'Los Peña (La Luisita)',
'city_id' => DB::table('cities')->where('name','Juan Rodríguez Clara')->first()->id
],

['name' => 'Las Flores',
'city_id' => DB::table('cities')->where('name','Juan Rodríguez Clara')->first()->id
],

['name' => 'La Luisa',
'city_id' => DB::table('cities')->where('name','Juan Rodríguez Clara')->first()->id
],

['name' => 'La Luisa Antigua',
'city_id' => DB::table('cities')->where('name','Juan Rodríguez Clara')->first()->id
],

['name' => 'La Floreadora (La Bodega)',
'city_id' => DB::table('cities')->where('name','Juan Rodríguez Clara')->first()->id
],

['name' => 'Rancho Nuevo',
'city_id' => DB::table('cities')->where('name','Juan Rodríguez Clara')->first()->id
],

['name' => 'Pedro Delgado',
'city_id' => DB::table('cities')->where('name','Juan Rodríguez Clara')->first()->id
],

['name' => 'Los Tigres',
'city_id' => DB::table('cities')->where('name','Juan Rodríguez Clara')->first()->id
],

['name' => 'Jimba',
'city_id' => DB::table('cities')->where('name','Juan Rodríguez Clara')->first()->id
],

['name' => 'San Antonio',
'city_id' => DB::table('cities')->where('name','Juan Rodríguez Clara')->first()->id
],

['name' => 'Pablo L. Sidar',
'city_id' => DB::table('cities')->where('name','Juan Rodríguez Clara')->first()->id
],

['name' => 'Nuevo Paso Novillo (Libertad y Progreso)',
'city_id' => DB::table('cities')->where('name','Juan Rodríguez Clara')->first()->id
],

['name' => 'Alto Lucero',
'city_id' => DB::table('cities')->where('name','Juan Rodríguez Clara')->first()->id
],

['name' => 'El Porvenir',
'city_id' => DB::table('cities')->where('name','Juan Rodríguez Clara')->first()->id
],

['name' => 'El Milagro (El Cuchillo)',
'city_id' => DB::table('cities')->where('name','Juan Rodríguez Clara')->first()->id
],

['name' => 'Las Canoas',
'city_id' => DB::table('cities')->where('name','Juan Rodríguez Clara')->first()->id
],

['name' => 'Huayacanes',
'city_id' => DB::table('cities')->where('name','Juan Rodríguez Clara')->first()->id
],

['name' => 'El Coyolito',
'city_id' => DB::table('cities')->where('name','Juan Rodríguez Clara')->first()->id
],

['name' => 'Angostura',
'city_id' => DB::table('cities')->where('name','Juan Rodríguez Clara')->first()->id
],

['name' => 'San Pedro del Llano',
'city_id' => DB::table('cities')->where('name','Juan Rodríguez Clara')->first()->id
],

['name' => 'San José Tulapan (San Isidro)',
'city_id' => DB::table('cities')->where('name','Juan Rodríguez Clara')->first()->id
],

['name' => 'San Sebastián',
'city_id' => DB::table('cities')->where('name','Juan Rodríguez Clara')->first()->id
],

['name' => 'Cinco de Mayo',
'city_id' => DB::table('cities')->where('name','Juan Rodríguez Clara')->first()->id
],

['name' => 'Veinte de Noviembre (Pancho Villa)',
'city_id' => DB::table('cities')->where('name','Juan Rodríguez Clara')->first()->id
],

['name' => 'Independencia',
'city_id' => DB::table('cities')->where('name','Juan Rodríguez Clara')->first()->id
],

['name' => 'Miguel Hidalgo',
'city_id' => DB::table('cities')->where('name','Juan Rodríguez Clara')->first()->id
],

['name' => 'El Cedro (Rancho Alegre)',
'city_id' => DB::table('cities')->where('name','Juan Rodríguez Clara')->first()->id
],

['name' => 'El Mirador',
'city_id' => DB::table('cities')->where('name','Juan Rodríguez Clara')->first()->id
],

['name' => 'Emiliano Zapata',
'city_id' => DB::table('cities')->where('name','Juan Rodríguez Clara')->first()->id
],

['name' => 'El Cafetal',
'city_id' => DB::table('cities')->where('name','Juan Rodríguez Clara')->first()->id
],

['name' => 'San Lorenzo',
'city_id' => DB::table('cities')->where('name','Juan Rodríguez Clara')->first()->id
],

['name' => 'Paso Limón',
'city_id' => DB::table('cities')->where('name','Juan Rodríguez Clara')->first()->id
],

['name' => 'Mata de Caña',
'city_id' => DB::table('cities')->where('name','Juan Rodríguez Clara')->first()->id
],

['name' => 'Santa Rosa',
'city_id' => DB::table('cities')->where('name','Juan Rodríguez Clara')->first()->id
],

['name' => 'Un Rincón de Santiago',
'city_id' => DB::table('cities')->where('name','Juan Rodríguez Clara')->first()->id
],

['name' => 'Gloria de Cuapa (Cartagena)',
'city_id' => DB::table('cities')->where('name','Juan Rodríguez Clara')->first()->id
],

['name' => 'Guadalupe Castro Moreno',
'city_id' => DB::table('cities')->where('name','Juan Rodríguez Clara')->first()->id
],

['name' => 'El Milagro',
'city_id' => DB::table('cities')->where('name','Juan Rodríguez Clara')->first()->id
],

['name' => 'Juan Rodriguez Clara Centro',
'city_id' => DB::table('cities')->where('name','Juan Rodríguez Clara')->first()->id
],

['name' => 'Juana Huerta (Tierra Colorada)',
'city_id' => DB::table('cities')->where('name','Juan Rodríguez Clara')->first()->id
],

['name' => 'Benito Juárez',
'city_id' => DB::table('cities')->where('name','Juan Rodríguez Clara')->first()->id
],

['name' => 'Las Mercedes',
'city_id' => DB::table('cities')->where('name','Juan Rodríguez Clara')->first()->id
],

['name' => 'Feliciano Ceballos',
'city_id' => DB::table('cities')->where('name','Juan Rodríguez Clara')->first()->id
],

['name' => 'La Bomba',
'city_id' => DB::table('cities')->where('name','Juan Rodríguez Clara')->first()->id
],

['name' => 'Del Panteón',
'city_id' => DB::table('cities')->where('name','Juan Rodríguez Clara')->first()->id
],

['name' => 'Mata Bejuco',
'city_id' => DB::table('cities')->where('name','Juan Rodríguez Clara')->first()->id
],

['name' => 'San Pablo',
'city_id' => DB::table('cities')->where('name','Juan Rodríguez Clara')->first()->id
],

['name' => 'Lomas del Serrano',
'city_id' => DB::table('cities')->where('name','Juan Rodríguez Clara')->first()->id
],

['name' => 'Díaz Mirón',
'city_id' => DB::table('cities')->where('name','Juan Rodríguez Clara')->first()->id
],

['name' => 'Alfonso Román',
'city_id' => DB::table('cities')->where('name','Juan Rodríguez Clara')->first()->id
],

['name' => 'San Andres Tuxtla Centro',
'city_id' => DB::table('cities')->where('name','San Andrés Tuxtla')->first()->id
],

['name' => 'Francisco J. Moreno',
'city_id' => DB::table('cities')->where('name','San Andrés Tuxtla')->first()->id
],

['name' => 'El Cocal',
'city_id' => DB::table('cities')->where('name','San Andrés Tuxtla')->first()->id
],

['name' => 'El Cocal 2a Parte',
'city_id' => DB::table('cities')->where('name','San Andrés Tuxtla')->first()->id
],

['name' => 'Primero de Mayo',
'city_id' => DB::table('cities')->where('name','San Andrés Tuxtla')->first()->id
],

['name' => 'San Francisco',
'city_id' => DB::table('cities')->where('name','San Andrés Tuxtla')->first()->id
],

['name' => 'Las Torres',
'city_id' => DB::table('cities')->where('name','San Andrés Tuxtla')->first()->id
],

['name' => 'Fernando Hernández Carrasco',
'city_id' => DB::table('cities')->where('name','San Andrés Tuxtla')->first()->id
],

['name' => 'Progreso Tepanca',
'city_id' => DB::table('cities')->where('name','San Andrés Tuxtla')->first()->id
],

['name' => 'Progreso Tepáncan',
'city_id' => DB::table('cities')->where('name','San Andrés Tuxtla')->first()->id
],

['name' => 'El Jardín',
'city_id' => DB::table('cities')->where('name','San Andrés Tuxtla')->first()->id
],

['name' => 'Hidalgo o Fracc. Los Almendros',
'city_id' => DB::table('cities')->where('name','San Andrés Tuxtla')->first()->id
],

['name' => 'Los Manguitos',
'city_id' => DB::table('cities')->where('name','San Andrés Tuxtla')->first()->id
],

['name' => 'Teresita de Hernández Ochoa',
'city_id' => DB::table('cities')->where('name','San Andrés Tuxtla')->first()->id
],

['name' => 'Barrio Campeche',
'city_id' => DB::table('cities')->where('name','San Andrés Tuxtla')->first()->id
],

['name' => 'El Jardín',
'city_id' => DB::table('cities')->where('name','San Andrés Tuxtla')->first()->id
],

['name' => 'Las Lomas',
'city_id' => DB::table('cities')->where('name','San Andrés Tuxtla')->first()->id
],

['name' => '6 de Enero',
'city_id' => DB::table('cities')->where('name','San Andrés Tuxtla')->first()->id
],

['name' => 'El Cebollal',
'city_id' => DB::table('cities')->where('name','San Andrés Tuxtla')->first()->id
],

['name' => 'Abezcoma',
'city_id' => DB::table('cities')->where('name','San Andrés Tuxtla')->first()->id
],

['name' => 'Los Maestros',
'city_id' => DB::table('cities')->where('name','San Andrés Tuxtla')->first()->id
],

['name' => 'Banrural',
'city_id' => DB::table('cities')->where('name','San Andrés Tuxtla')->first()->id
],

['name' => 'San Pedro',
'city_id' => DB::table('cities')->where('name','San Andrés Tuxtla')->first()->id
],

['name' => '3 de Mayo',
'city_id' => DB::table('cities')->where('name','San Andrés Tuxtla')->first()->id
],

['name' => 'San Andres 2000',
'city_id' => DB::table('cities')->where('name','San Andrés Tuxtla')->first()->id
],

['name' => 'Las Margaritas',
'city_id' => DB::table('cities')->where('name','San Andrés Tuxtla')->first()->id
],

['name' => 'Los Dagames',
'city_id' => DB::table('cities')->where('name','San Andrés Tuxtla')->first()->id
],

['name' => 'San Andrés',
'city_id' => DB::table('cities')->where('name','San Andrés Tuxtla')->first()->id
],

['name' => 'José Artiga',
'city_id' => DB::table('cities')->where('name','San Andrés Tuxtla')->first()->id
],

['name' => 'La Granja',
'city_id' => DB::table('cities')->where('name','San Andrés Tuxtla')->first()->id
],

['name' => 'Lopez Lara',
'city_id' => DB::table('cities')->where('name','San Andrés Tuxtla')->first()->id
],

['name' => 'La Concepción',
'city_id' => DB::table('cities')->where('name','San Andrés Tuxtla')->first()->id
],

['name' => 'El Arenal',
'city_id' => DB::table('cities')->where('name','San Andrés Tuxtla')->first()->id
],

['name' => 'Pueblo Nuevo',
'city_id' => DB::table('cities')->where('name','San Andrés Tuxtla')->first()->id
],

['name' => 'San Andres',
'city_id' => DB::table('cities')->where('name','San Andrés Tuxtla')->first()->id
],

['name' => 'Chichipilco',
'city_id' => DB::table('cities')->where('name','San Andrés Tuxtla')->first()->id
],

['name' => 'San Juan',
'city_id' => DB::table('cities')->where('name','San Andrés Tuxtla')->first()->id
],

['name' => 'Benito Juárez',
'city_id' => DB::table('cities')->where('name','San Andrés Tuxtla')->first()->id
],

['name' => 'Haro',
'city_id' => DB::table('cities')->where('name','San Andrés Tuxtla')->first()->id
],

['name' => 'Laguna Encantada',
'city_id' => DB::table('cities')->where('name','San Andrés Tuxtla')->first()->id
],

['name' => 'Silva',
'city_id' => DB::table('cities')->where('name','San Andrés Tuxtla')->first()->id
],

['name' => 'San Martin',
'city_id' => DB::table('cities')->where('name','San Andrés Tuxtla')->first()->id
],

['name' => 'Santa Cruz',
'city_id' => DB::table('cities')->where('name','San Andrés Tuxtla')->first()->id
],

['name' => '10 de Mayo',
'city_id' => DB::table('cities')->where('name','San Andrés Tuxtla')->first()->id
],

['name' => 'Juan de La Barrera',
'city_id' => DB::table('cities')->where('name','San Andrés Tuxtla')->first()->id
],

['name' => 'El Bosque Fovissste',
'city_id' => DB::table('cities')->where('name','San Andrés Tuxtla')->first()->id
],

['name' => 'Emiliano Zapata',
'city_id' => DB::table('cities')->where('name','San Andrés Tuxtla')->first()->id
],

['name' => 'Palzoquiapa',
'city_id' => DB::table('cities')->where('name','San Andrés Tuxtla')->first()->id
],

['name' => 'El Paraíso',
'city_id' => DB::table('cities')->where('name','San Andrés Tuxtla')->first()->id
],

['name' => 'Ixbiapan',
'city_id' => DB::table('cities')->where('name','San Andrés Tuxtla')->first()->id
],

['name' => 'Ampliación Emiliano Zapata',
'city_id' => DB::table('cities')->where('name','San Andrés Tuxtla')->first()->id
],

['name' => 'Santa Elena',
'city_id' => DB::table('cities')->where('name','San Andrés Tuxtla')->first()->id
],

['name' => 'El Choco',
'city_id' => DB::table('cities')->where('name','San Andrés Tuxtla')->first()->id
],

['name' => 'Villa San Andrés',
'city_id' => DB::table('cities')->where('name','San Andrés Tuxtla')->first()->id
],

['name' => 'La Perla',
'city_id' => DB::table('cities')->where('name','San Andrés Tuxtla')->first()->id
],

['name' => 'El Rodeo',
'city_id' => DB::table('cities')->where('name','San Andrés Tuxtla')->first()->id
],

['name' => 'Cedros',
'city_id' => DB::table('cities')->where('name','San Andrés Tuxtla')->first()->id
],

['name' => 'Álvaro Obregón',
'city_id' => DB::table('cities')->where('name','San Andrés Tuxtla')->first()->id
],

['name' => 'El Mirador',
'city_id' => DB::table('cities')->where('name','San Andrés Tuxtla')->first()->id
],

['name' => 'Ferrocarrilera',
'city_id' => DB::table('cities')->where('name','San Andrés Tuxtla')->first()->id
],

['name' => 'Jorge L Tamayo',
'city_id' => DB::table('cities')->where('name','San Andrés Tuxtla')->first()->id
],

['name' => 'Chapan',
'city_id' => DB::table('cities')->where('name','San Andrés Tuxtla')->first()->id
],

['name' => 'Juan Escutia',
'city_id' => DB::table('cities')->where('name','San Andrés Tuxtla')->first()->id
],

['name' => '20 de Noviembre',
'city_id' => DB::table('cities')->where('name','San Andrés Tuxtla')->first()->id
],

['name' => 'La Ceiba',
'city_id' => DB::table('cities')->where('name','San Andrés Tuxtla')->first()->id
],

['name' => 'Belén Chico',
'city_id' => DB::table('cities')->where('name','San Andrés Tuxtla')->first()->id
],

['name' => 'Los Valles de Belén Grande',
'city_id' => DB::table('cities')->where('name','San Andrés Tuxtla')->first()->id
],

['name' => 'Esperanza',
'city_id' => DB::table('cities')->where('name','San Andrés Tuxtla')->first()->id
],

['name' => 'San Miguel',
'city_id' => DB::table('cities')->where('name','San Andrés Tuxtla')->first()->id
],

['name' => 'Belén Grande Ejidal',
'city_id' => DB::table('cities')->where('name','San Andrés Tuxtla')->first()->id
],

['name' => 'Belén Grande',
'city_id' => DB::table('cities')->where('name','San Andrés Tuxtla')->first()->id
],

['name' => 'El Palmar',
'city_id' => DB::table('cities')->where('name','San Andrés Tuxtla')->first()->id
],

['name' => 'Buenavista',
'city_id' => DB::table('cities')->where('name','San Andrés Tuxtla')->first()->id
],

['name' => 'Buenavista',
'city_id' => DB::table('cities')->where('name','San Andrés Tuxtla')->first()->id
],

['name' => 'La Morera',
'city_id' => DB::table('cities')->where('name','San Andrés Tuxtla')->first()->id
],

['name' => 'Tetila',
'city_id' => DB::table('cities')->where('name','San Andrés Tuxtla')->first()->id
],

['name' => 'Miguel Alemán',
'city_id' => DB::table('cities')->where('name','San Andrés Tuxtla')->first()->id
],

['name' => 'Habitat',
'city_id' => DB::table('cities')->where('name','San Andrés Tuxtla')->first()->id
],

['name' => 'Villas Ranchoapan',
'city_id' => DB::table('cities')->where('name','San Andrés Tuxtla')->first()->id
],

['name' => 'Joyas',
'city_id' => DB::table('cities')->where('name','San Andrés Tuxtla')->first()->id
],

['name' => 'Ranchoapan',
'city_id' => DB::table('cities')->where('name','San Andrés Tuxtla')->first()->id
],

['name' => 'Militar',
'city_id' => DB::table('cities')->where('name','San Andrés Tuxtla')->first()->id
],

['name' => 'Bella Vista',
'city_id' => DB::table('cities')->where('name','San Andrés Tuxtla')->first()->id
],

['name' => 'Los Pinos',
'city_id' => DB::table('cities')->where('name','San Andrés Tuxtla')->first()->id
],

['name' => 'José María Morelos y Pavón',
'city_id' => DB::table('cities')->where('name','San Andrés Tuxtla')->first()->id
],

['name' => 'Buenos Aires Xoteapan',
'city_id' => DB::table('cities')->where('name','San Andrés Tuxtla')->first()->id
],

['name' => 'Calería',
'city_id' => DB::table('cities')->where('name','San Andrés Tuxtla')->first()->id
],

['name' => 'Cerro Amarillo de Arriba',
'city_id' => DB::table('cities')->where('name','San Andrés Tuxtla')->first()->id
],

['name' => 'Texcaltitán Xoteapan (Texcaltitán)',
'city_id' => DB::table('cities')->where('name','San Andrés Tuxtla')->first()->id
],

['name' => 'Texalpan de Arriba',
'city_id' => DB::table('cities')->where('name','San Andrés Tuxtla')->first()->id
],

['name' => 'Ohuilapan',
'city_id' => DB::table('cities')->where('name','San Andrés Tuxtla')->first()->id
],

['name' => 'El Polvorín',
'city_id' => DB::table('cities')->where('name','San Andrés Tuxtla')->first()->id
],

['name' => 'Arroyo de Limón',
'city_id' => DB::table('cities')->where('name','San Andrés Tuxtla')->first()->id
],

['name' => 'Benito Juárez',
'city_id' => DB::table('cities')->where('name','San Andrés Tuxtla')->first()->id
],

['name' => 'Casa Blanca',
'city_id' => DB::table('cities')->where('name','San Andrés Tuxtla')->first()->id
],

['name' => 'Cerro Amarillo de Abajo',
'city_id' => DB::table('cities')->where('name','San Andrés Tuxtla')->first()->id
],

['name' => 'Colonia Benito Juárez',
'city_id' => DB::table('cities')->where('name','San Andrés Tuxtla')->first()->id
],

['name' => 'Colonia Francisco López Lara',
'city_id' => DB::table('cities')->where('name','San Andrés Tuxtla')->first()->id
],

['name' => 'El Nopal',
'city_id' => DB::table('cities')->where('name','San Andrés Tuxtla')->first()->id
],

['name' => 'Francisco I. Madero',
'city_id' => DB::table('cities')->where('name','San Andrés Tuxtla')->first()->id
],

['name' => 'Kilómetro Tres',
'city_id' => DB::table('cities')->where('name','San Andrés Tuxtla')->first()->id
],

['name' => 'Miltepec',
'city_id' => DB::table('cities')->where('name','San Andrés Tuxtla')->first()->id
],

['name' => 'Progreso Tepánca',
'city_id' => DB::table('cities')->where('name','San Andrés Tuxtla')->first()->id
],

['name' => 'Puerta Nueva',
'city_id' => DB::table('cities')->where('name','San Andrés Tuxtla')->first()->id
],

['name' => 'Rancho Nuevo',
'city_id' => DB::table('cities')->where('name','San Andrés Tuxtla')->first()->id
],

['name' => 'Real de San Andrés',
'city_id' => DB::table('cities')->where('name','San Andrés Tuxtla')->first()->id
],

['name' => 'San Isidro Texcaltitan',
'city_id' => DB::table('cities')->where('name','San Andrés Tuxtla')->first()->id
],

['name' => 'Texalpan de Abajo',
'city_id' => DB::table('cities')->where('name','San Andrés Tuxtla')->first()->id
],

['name' => 'Xoteapan',
'city_id' => DB::table('cities')->where('name','San Andrés Tuxtla')->first()->id
],

['name' => 'Enrique López Huitrón',
'city_id' => DB::table('cities')->where('name','San Andrés Tuxtla')->first()->id
],

['name' => 'La Nueva Victoria',
'city_id' => DB::table('cities')->where('name','San Andrés Tuxtla')->first()->id
],

['name' => 'La Aurora',
'city_id' => DB::table('cities')->where('name','San Andrés Tuxtla')->first()->id
],

['name' => 'Salinas Roca Partida',
'city_id' => DB::table('cities')->where('name','San Andrés Tuxtla')->first()->id
],

['name' => 'Los Pocitos (Artemio Arroyo)',
'city_id' => DB::table('cities')->where('name','San Andrés Tuxtla')->first()->id
],

['name' => 'Toro Prieto',
'city_id' => DB::table('cities')->where('name','San Andrés Tuxtla')->first()->id
],

['name' => 'Úrsulo Galván',
'city_id' => DB::table('cities')->where('name','San Andrés Tuxtla')->first()->id
],

['name' => 'El Diamante',
'city_id' => DB::table('cities')->where('name','San Andrés Tuxtla')->first()->id
],

['name' => 'Revolución',
'city_id' => DB::table('cities')->where('name','San Andrés Tuxtla')->first()->id
],

['name' => 'Los Órganos',
'city_id' => DB::table('cities')->where('name','San Andrés Tuxtla')->first()->id
],

['name' => 'El Parque',
'city_id' => DB::table('cities')->where('name','San Andrés Tuxtla')->first()->id
],

['name' => 'El Salto',
'city_id' => DB::table('cities')->where('name','San Andrés Tuxtla')->first()->id
],

['name' => 'Tepáncan',
'city_id' => DB::table('cities')->where('name','San Andrés Tuxtla')->first()->id
],

['name' => 'Tonalapan',
'city_id' => DB::table('cities')->where('name','San Andrés Tuxtla')->first()->id
],

['name' => 'Cuauhtémoc',
'city_id' => DB::table('cities')->where('name','San Andrés Tuxtla')->first()->id
],

['name' => 'Matacapan',
'city_id' => DB::table('cities')->where('name','San Andrés Tuxtla')->first()->id
],

['name' => 'Santa Rosa Abata',
'city_id' => DB::table('cities')->where('name','San Andrés Tuxtla')->first()->id
],

['name' => 'Arroyo Seco',
'city_id' => DB::table('cities')->where('name','San Andrés Tuxtla')->first()->id
],

['name' => 'Calería',
'city_id' => DB::table('cities')->where('name','San Andrés Tuxtla')->first()->id
],

['name' => 'El Cebollal',
'city_id' => DB::table('cities')->where('name','San Andrés Tuxtla')->first()->id
],

['name' => 'Miguel Hidalgo y Costilla',
'city_id' => DB::table('cities')->where('name','San Andrés Tuxtla')->first()->id
],

['name' => 'Porfirio Díaz',
'city_id' => DB::table('cities')->where('name','San Andrés Tuxtla')->first()->id
],

['name' => 'Ignacio Zaragoza',
'city_id' => DB::table('cities')->where('name','San Andrés Tuxtla')->first()->id
],

['name' => 'San Marcos',
'city_id' => DB::table('cities')->where('name','San Andrés Tuxtla')->first()->id
],

['name' => 'Fidelidad',
'city_id' => DB::table('cities')->where('name','San Andrés Tuxtla')->first()->id
],

['name' => 'Comoapan',
'city_id' => DB::table('cities')->where('name','San Andrés Tuxtla')->first()->id
],

['name' => 'Chuniapan de Arriba',
'city_id' => DB::table('cities')->where('name','San Andrés Tuxtla')->first()->id
],

['name' => 'El Salto de Eyipantla',
'city_id' => DB::table('cities')->where('name','San Andrés Tuxtla')->first()->id
],

['name' => 'El Huidero',
'city_id' => DB::table('cities')->where('name','San Andrés Tuxtla')->first()->id
],

['name' => 'Chilapan',
'city_id' => DB::table('cities')->where('name','San Andrés Tuxtla')->first()->id
],

['name' => 'San Miguel',
'city_id' => DB::table('cities')->where('name','San Andrés Tuxtla')->first()->id
],

['name' => 'Roberto Enríquez Ruiz',
'city_id' => DB::table('cities')->where('name','San Andrés Tuxtla')->first()->id
],

['name' => 'Barrio La Huerta',
'city_id' => DB::table('cities')->where('name','San Andrés Tuxtla')->first()->id
],

['name' => 'San Gumersindo',
'city_id' => DB::table('cities')->where('name','San Andrés Tuxtla')->first()->id
],

['name' => 'Santa Cecilia',
'city_id' => DB::table('cities')->where('name','San Andrés Tuxtla')->first()->id
],

['name' => 'Xalapa',
'city_id' => DB::table('cities')->where('name','San Andrés Tuxtla')->first()->id
],

['name' => 'Bezuapan',
'city_id' => DB::table('cities')->where('name','San Andrés Tuxtla')->first()->id
],

['name' => 'Cebadilla Chica',
'city_id' => DB::table('cities')->where('name','San Andrés Tuxtla')->first()->id
],

['name' => 'Cebadilla Grande',
'city_id' => DB::table('cities')->where('name','San Andrés Tuxtla')->first()->id
],

['name' => 'El Paraíso',
'city_id' => DB::table('cities')->where('name','San Andrés Tuxtla')->first()->id
],

['name' => 'San Andrés Apóstol [Seminario Mayor Diosesano]',
'city_id' => DB::table('cities')->where('name','San Andrés Tuxtla')->first()->id
],

['name' => 'San Antonio',
'city_id' => DB::table('cities')->where('name','San Andrés Tuxtla')->first()->id
],

['name' => 'Primero de Mayo',
'city_id' => DB::table('cities')->where('name','San Andrés Tuxtla')->first()->id
],

['name' => 'El Encanto',
'city_id' => DB::table('cities')->where('name','San Andrés Tuxtla')->first()->id
],

['name' => 'Abrevadero',
'city_id' => DB::table('cities')->where('name','San Andrés Tuxtla')->first()->id
],

['name' => 'Adolfo Ruiz Cortines',
'city_id' => DB::table('cities')->where('name','San Andrés Tuxtla')->first()->id
],

['name' => 'Nacimientos de Xogapan (Francisco I. Madero)',
'city_id' => DB::table('cities')->where('name','San Andrés Tuxtla')->first()->id
],

['name' => 'Xoteapan',
'city_id' => DB::table('cities')->where('name','San Andrés Tuxtla')->first()->id
],

['name' => 'Buenos Aires Texalpan',
'city_id' => DB::table('cities')->where('name','San Andrés Tuxtla')->first()->id
],

['name' => 'Balzapote',
'city_id' => DB::table('cities')->where('name','San Andrés Tuxtla')->first()->id
],

['name' => 'Montepío',
'city_id' => DB::table('cities')->where('name','San Andrés Tuxtla')->first()->id
],

['name' => 'Adolfo Ruiz Cortines (La Floreña)',
'city_id' => DB::table('cities')->where('name','San Andrés Tuxtla')->first()->id
],

['name' => 'Dos de Abril',
'city_id' => DB::table('cities')->where('name','San Andrés Tuxtla')->first()->id
],

['name' => 'Laguna Escondida',
'city_id' => DB::table('cities')->where('name','San Andrés Tuxtla')->first()->id
],

['name' => 'Lázaro Cárdenas',
'city_id' => DB::table('cities')->where('name','San Andrés Tuxtla')->first()->id
],

['name' => 'Montepío (Los Palacios)',
'city_id' => DB::table('cities')->where('name','San Andrés Tuxtla')->first()->id
],

['name' => 'Sihuapan Centro',
'city_id' => DB::table('cities')->where('name','San Andrés Tuxtla')->first()->id
],

['name' => 'El Porvenir',
'city_id' => DB::table('cities')->where('name','San Andrés Tuxtla')->first()->id
],

['name' => 'Filemón Chang',
'city_id' => DB::table('cities')->where('name','San Andrés Tuxtla')->first()->id
],

['name' => 'Zacatal',
'city_id' => DB::table('cities')->where('name','San Andrés Tuxtla')->first()->id
],

['name' => 'Guadalupe',
'city_id' => DB::table('cities')->where('name','San Andrés Tuxtla')->first()->id
],

['name' => 'Lindavista',
'city_id' => DB::table('cities')->where('name','San Andrés Tuxtla')->first()->id
],

['name' => 'Modesto Canela',
'city_id' => DB::table('cities')->where('name','San Andrés Tuxtla')->first()->id
],

['name' => 'El Crucero de Matacapan',
'city_id' => DB::table('cities')->where('name','San Andrés Tuxtla')->first()->id
],

['name' => 'Del Puente',
'city_id' => DB::table('cities')->where('name','San Andrés Tuxtla')->first()->id
],

['name' => 'El Laurel',
'city_id' => DB::table('cities')->where('name','San Andrés Tuxtla')->first()->id
],

['name' => 'Nompita',
'city_id' => DB::table('cities')->where('name','San Andrés Tuxtla')->first()->id
],

['name' => 'El Progreso',
'city_id' => DB::table('cities')->where('name','San Andrés Tuxtla')->first()->id
],

['name' => 'Victoria Olin',
'city_id' => DB::table('cities')->where('name','San Andrés Tuxtla')->first()->id
],

['name' => 'San Miguel',
'city_id' => DB::table('cities')->where('name','San Andrés Tuxtla')->first()->id
],

['name' => 'San Isidro',
'city_id' => DB::table('cities')->where('name','San Andrés Tuxtla')->first()->id
],

['name' => 'La Finca',
'city_id' => DB::table('cities')->where('name','San Andrés Tuxtla')->first()->id
],

['name' => 'Esperanza 2',
'city_id' => DB::table('cities')->where('name','San Andrés Tuxtla')->first()->id
],

['name' => 'Gertrudis',
'city_id' => DB::table('cities')->where('name','San Andrés Tuxtla')->first()->id
],

['name' => 'Esperanza 1',
'city_id' => DB::table('cities')->where('name','San Andrés Tuxtla')->first()->id
],

['name' => 'Chamizal',
'city_id' => DB::table('cities')->where('name','San Andrés Tuxtla')->first()->id
],

['name' => 'Miguel Turrent',
'city_id' => DB::table('cities')->where('name','San Andrés Tuxtla')->first()->id
],

['name' => 'Sihuapan',
'city_id' => DB::table('cities')->where('name','San Andrés Tuxtla')->first()->id
],

['name' => 'Cerro las Iguanas',
'city_id' => DB::table('cities')->where('name','San Andrés Tuxtla')->first()->id
],

['name' => 'El Paraíso',
'city_id' => DB::table('cities')->where('name','San Andrés Tuxtla')->first()->id
],

['name' => 'Colonia Proviva',
'city_id' => DB::table('cities')->where('name','San Andrés Tuxtla')->first()->id
],

['name' => 'Santa Elena',
'city_id' => DB::table('cities')->where('name','San Andrés Tuxtla')->first()->id
],

['name' => 'La Boca',
'city_id' => DB::table('cities')->where('name','San Andrés Tuxtla')->first()->id
],

['name' => 'Santa Clara',
'city_id' => DB::table('cities')->where('name','San Andrés Tuxtla')->first()->id
],

['name' => 'Villas de Santa María',
'city_id' => DB::table('cities')->where('name','San Andrés Tuxtla')->first()->id
],

['name' => 'San Rafael',
'city_id' => DB::table('cities')->where('name','San Andrés Tuxtla')->first()->id
],

['name' => 'Prolongación Primitivo R. Valencia',
'city_id' => DB::table('cities')->where('name','San Andrés Tuxtla')->first()->id
],

['name' => 'Caravaca',
'city_id' => DB::table('cities')->where('name','San Andrés Tuxtla')->first()->id
],

['name' => 'Caravaca (Kilómetro 30)',
'city_id' => DB::table('cities')->where('name','San Andrés Tuxtla')->first()->id
],

['name' => 'Cerro Venado Laguna Encantada',
'city_id' => DB::table('cities')->where('name','San Andrés Tuxtla')->first()->id
],

['name' => 'La Finca',
'city_id' => DB::table('cities')->where('name','San Andrés Tuxtla')->first()->id
],

['name' => 'La Loma',
'city_id' => DB::table('cities')->where('name','San Andrés Tuxtla')->first()->id
],

['name' => 'El Chorro',
'city_id' => DB::table('cities')->where('name','San Andrés Tuxtla')->first()->id
],

['name' => 'Tilapan',
'city_id' => DB::table('cities')->where('name','San Andrés Tuxtla')->first()->id
],

['name' => 'Axochio',
'city_id' => DB::table('cities')->where('name','San Andrés Tuxtla')->first()->id
],

['name' => 'Ahuacapan',
'city_id' => DB::table('cities')->where('name','San Andrés Tuxtla')->first()->id
],

['name' => 'Coyoltepec',
'city_id' => DB::table('cities')->where('name','San Andrés Tuxtla')->first()->id
],

['name' => 'El Bebedero',
'city_id' => DB::table('cities')->where('name','San Andrés Tuxtla')->first()->id
],

['name' => 'El Nacaxtle',
'city_id' => DB::table('cities')->where('name','San Andrés Tuxtla')->first()->id
],

['name' => 'San Leopoldo',
'city_id' => DB::table('cities')->where('name','San Andrés Tuxtla')->first()->id
],

['name' => 'Vista Hermosa',
'city_id' => DB::table('cities')->where('name','San Andrés Tuxtla')->first()->id
],

['name' => 'Francisco J. Moreno',
'city_id' => DB::table('cities')->where('name','San Andrés Tuxtla')->first()->id
],

['name' => 'Ocelota',
'city_id' => DB::table('cities')->where('name','San Andrés Tuxtla')->first()->id
],

['name' => 'Estación Ohuilapan',
'city_id' => DB::table('cities')->where('name','San Andrés Tuxtla')->first()->id
],

['name' => 'Los Méridas',
'city_id' => DB::table('cities')->where('name','San Andrés Tuxtla')->first()->id
],

['name' => 'Pizapan',
'city_id' => DB::table('cities')->where('name','San Andrés Tuxtla')->first()->id
],

['name' => 'Ricardo Flores Magón',
'city_id' => DB::table('cities')->where('name','San Andrés Tuxtla')->first()->id
],

['name' => 'San Juan',
'city_id' => DB::table('cities')->where('name','San Andrés Tuxtla')->first()->id
],

['name' => 'Soyata',
'city_id' => DB::table('cities')->where('name','San Andrés Tuxtla')->first()->id
],

['name' => 'La Redonda',
'city_id' => DB::table('cities')->where('name','San Andrés Tuxtla')->first()->id
],

['name' => 'Tulapan',
'city_id' => DB::table('cities')->where('name','San Andrés Tuxtla')->first()->id
],

['name' => 'Cuesta Amarilla',
'city_id' => DB::table('cities')->where('name','San Andrés Tuxtla')->first()->id
],

['name' => 'Ejido el Salto de Eyipantla',
'city_id' => DB::table('cities')->where('name','San Andrés Tuxtla')->first()->id
],

['name' => 'Los Naranjos',
'city_id' => DB::table('cities')->where('name','San Andrés Tuxtla')->first()->id
],

['name' => 'Matalapan de Arriba',
'city_id' => DB::table('cities')->where('name','San Andrés Tuxtla')->first()->id
],

['name' => 'Ojo de Agua',
'city_id' => DB::table('cities')->where('name','San Andrés Tuxtla')->first()->id
],

['name' => 'Paso de la Vía',
'city_id' => DB::table('cities')->where('name','San Andrés Tuxtla')->first()->id
],

['name' => 'Laguneta',
'city_id' => DB::table('cities')->where('name','San Andrés Tuxtla')->first()->id
],

['name' => 'Cuesta de Laja',
'city_id' => DB::table('cities')->where('name','San Andrés Tuxtla')->first()->id
],

['name' => 'Juan Jacobo Torres [Bodega de Totontepec]',
'city_id' => DB::table('cities')->where('name','San Andrés Tuxtla')->first()->id
],

['name' => 'Cobaltepec',
'city_id' => DB::table('cities')->where('name','San Andrés Tuxtla')->first()->id
],

['name' => 'Tres Zapotes',
'city_id' => DB::table('cities')->where('name','San Andrés Tuxtla')->first()->id
],

['name' => 'San José',
'city_id' => DB::table('cities')->where('name','San Andrés Tuxtla')->first()->id
],

['name' => 'El Laurel',
'city_id' => DB::table('cities')->where('name','San Andrés Tuxtla')->first()->id
],

['name' => 'Mazumiapan',
'city_id' => DB::table('cities')->where('name','San Andrés Tuxtla')->first()->id
],

['name' => 'Chuniapan de Abajo',
'city_id' => DB::table('cities')->where('name','San Andrés Tuxtla')->first()->id
],

['name' => 'El Popotal',
'city_id' => DB::table('cities')->where('name','San Andrés Tuxtla')->first()->id
],

['name' => 'Apixita',
'city_id' => DB::table('cities')->where('name','San Andrés Tuxtla')->first()->id
],

['name' => 'Dos Aguajes',
'city_id' => DB::table('cities')->where('name','San Andrés Tuxtla')->first()->id
],

['name' => 'Río de Tuxtla',
'city_id' => DB::table('cities')->where('name','San Andrés Tuxtla')->first()->id
],

['name' => 'Lauchapan',
'city_id' => DB::table('cities')->where('name','San Andrés Tuxtla')->first()->id
],

['name' => 'El Laurel Viejo',
'city_id' => DB::table('cities')->where('name','San Andrés Tuxtla')->first()->id
],

['name' => 'Las Galeras',
'city_id' => DB::table('cities')->where('name','San Andrés Tuxtla')->first()->id
],

['name' => 'Arroyo Seco',
'city_id' => DB::table('cities')->where('name','San Andrés Tuxtla')->first()->id
],

['name' => 'Matalapan Monterrey',
'city_id' => DB::table('cities')->where('name','San Andrés Tuxtla')->first()->id
],

['name' => 'Nuevo Progreso',
'city_id' => DB::table('cities')->where('name','San Andrés Tuxtla')->first()->id
],

['name' => 'Vista Hermosa II',
'city_id' => DB::table('cities')->where('name','San Andrés Tuxtla')->first()->id
],

['name' => 'El Remolino',
'city_id' => DB::table('cities')->where('name','San Andrés Tuxtla')->first()->id
],

['name' => 'Matalapan de Abajo (Ex-Hacienda de Matalapan)',
'city_id' => DB::table('cities')->where('name','San Andrés Tuxtla')->first()->id
],

['name' => 'Santiago Tuxtla Centro',
'city_id' => DB::table('cities')->where('name','Santiago Tuxtla')->first()->id
],

['name' => 'Revolución',
'city_id' => DB::table('cities')->where('name','Santiago Tuxtla')->first()->id
],

['name' => 'Angel Carbajal',
'city_id' => DB::table('cities')->where('name','Santiago Tuxtla')->first()->id
],

['name' => 'Xogoyo',
'city_id' => DB::table('cities')->where('name','Santiago Tuxtla')->first()->id
],

['name' => 'El Marquez',
'city_id' => DB::table('cities')->where('name','Santiago Tuxtla')->first()->id
],

['name' => 'Alcaldía',
'city_id' => DB::table('cities')->where('name','Santiago Tuxtla')->first()->id
],

['name' => 'El Dagamal',
'city_id' => DB::table('cities')->where('name','Santiago Tuxtla')->first()->id
],

['name' => 'La Piedra de Cal',
'city_id' => DB::table('cities')->where('name','Santiago Tuxtla')->first()->id
],

['name' => 'Dos Cuestas',
'city_id' => DB::table('cities')->where('name','Santiago Tuxtla')->first()->id
],

['name' => 'La Cruz',
'city_id' => DB::table('cities')->where('name','Santiago Tuxtla')->first()->id
],

['name' => 'La Guadalupe',
'city_id' => DB::table('cities')->where('name','Santiago Tuxtla')->first()->id
],

['name' => 'Lomas del Márquez',
'city_id' => DB::table('cities')->where('name','Santiago Tuxtla')->first()->id
],

['name' => 'Los Pinos',
'city_id' => DB::table('cities')->where('name','Santiago Tuxtla')->first()->id
],

['name' => 'Palenque',
'city_id' => DB::table('cities')->where('name','Santiago Tuxtla')->first()->id
],

['name' => 'El Pilar',
'city_id' => DB::table('cities')->where('name','Santiago Tuxtla')->first()->id
],

['name' => 'Pénjamo',
'city_id' => DB::table('cities')->where('name','Santiago Tuxtla')->first()->id
],

['name' => 'Sexta',
'city_id' => DB::table('cities')->where('name','Santiago Tuxtla')->first()->id
],

['name' => 'Pedregal',
'city_id' => DB::table('cities')->where('name','Santiago Tuxtla')->first()->id
],

['name' => 'Francisco A Gómez',
'city_id' => DB::table('cities')->where('name','Santiago Tuxtla')->first()->id
],

['name' => 'Axochio',
'city_id' => DB::table('cities')->where('name','Santiago Tuxtla')->first()->id
],

['name' => 'Buena Vista',
'city_id' => DB::table('cities')->where('name','Santiago Tuxtla')->first()->id
],

['name' => 'Independencia',
'city_id' => DB::table('cities')->where('name','Santiago Tuxtla')->first()->id
],

['name' => 'Magda Moreno de Carbajal',
'city_id' => DB::table('cities')->where('name','Santiago Tuxtla')->first()->id
],

['name' => 'Magisterial',
'city_id' => DB::table('cities')->where('name','Santiago Tuxtla')->first()->id
],

['name' => 'Pedregal 2',
'city_id' => DB::table('cities')->where('name','Santiago Tuxtla')->first()->id
],

['name' => 'San Diego',
'city_id' => DB::table('cities')->where('name','Santiago Tuxtla')->first()->id
],

['name' => 'El Bosque',
'city_id' => DB::table('cities')->where('name','Santiago Tuxtla')->first()->id
],

['name' => 'El Jardín',
'city_id' => DB::table('cities')->where('name','Santiago Tuxtla')->first()->id
],

['name' => 'El Edén',
'city_id' => DB::table('cities')->where('name','Santiago Tuxtla')->first()->id
],

['name' => 'Emiliano Zapata',
'city_id' => DB::table('cities')->where('name','Santiago Tuxtla')->first()->id
],

['name' => 'El Paraíso',
'city_id' => DB::table('cities')->where('name','Santiago Tuxtla')->first()->id
],

['name' => 'El Cedral',
'city_id' => DB::table('cities')->where('name','Santiago Tuxtla')->first()->id
],

['name' => 'La Huerta',
'city_id' => DB::table('cities')->where('name','Santiago Tuxtla')->first()->id
],

['name' => 'Las Flores',
'city_id' => DB::table('cities')->where('name','Santiago Tuxtla')->first()->id
],

['name' => 'Nueva Ampliación El Bosque',
'city_id' => DB::table('cities')->where('name','Santiago Tuxtla')->first()->id
],

['name' => 'Predio Las Lomas',
'city_id' => DB::table('cities')->where('name','Santiago Tuxtla')->first()->id
],

['name' => 'Pitalúa',
'city_id' => DB::table('cities')->where('name','Santiago Tuxtla')->first()->id
],

['name' => 'El Arenal',
'city_id' => DB::table('cities')->where('name','Santiago Tuxtla')->first()->id
],

['name' => 'Suriano',
'city_id' => DB::table('cities')->where('name','Santiago Tuxtla')->first()->id
],

['name' => 'Río Grande',
'city_id' => DB::table('cities')->where('name','Santiago Tuxtla')->first()->id
],

['name' => 'Sehualaca',
'city_id' => DB::table('cities')->where('name','Santiago Tuxtla')->first()->id
],

['name' => 'Texcochapan de Abajo',
'city_id' => DB::table('cities')->where('name','Santiago Tuxtla')->first()->id
],

['name' => 'Vista Hermosa',
'city_id' => DB::table('cities')->where('name','Santiago Tuxtla')->first()->id
],

['name' => 'Tapalapan',
'city_id' => DB::table('cities')->where('name','Santiago Tuxtla')->first()->id
],

['name' => 'El Cocal',
'city_id' => DB::table('cities')->where('name','Santiago Tuxtla')->first()->id
],

['name' => 'Colonia la Huerta (El Balneario)',
'city_id' => DB::table('cities')->where('name','Santiago Tuxtla')->first()->id
],

['name' => 'Álvaro Castellanos',
'city_id' => DB::table('cities')->where('name','Santiago Tuxtla')->first()->id
],

['name' => 'Alta Luz',
'city_id' => DB::table('cities')->where('name','Santiago Tuxtla')->first()->id
],

['name' => 'Arenal',
'city_id' => DB::table('cities')->where('name','Santiago Tuxtla')->first()->id
],

['name' => 'Axochio',
'city_id' => DB::table('cities')->where('name','Santiago Tuxtla')->first()->id
],

['name' => 'Ayotzintla',
'city_id' => DB::table('cities')->where('name','Santiago Tuxtla')->first()->id
],

['name' => 'Baixtepe',
'city_id' => DB::table('cities')->where('name','Santiago Tuxtla')->first()->id
],

['name' => 'Barrio de San Diego',
'city_id' => DB::table('cities')->where('name','Santiago Tuxtla')->first()->id
],

['name' => 'Bonanza',
'city_id' => DB::table('cities')->where('name','Santiago Tuxtla')->first()->id
],

['name' => 'Cerro del Vigía de Abajo (Vigía Cooperativa)',
'city_id' => DB::table('cities')->where('name','Santiago Tuxtla')->first()->id
],

['name' => 'Chachalacapan',
'city_id' => DB::table('cities')->where('name','Santiago Tuxtla')->first()->id
],

['name' => 'Chama Martínez (Tagala)',
'city_id' => DB::table('cities')->where('name','Santiago Tuxtla')->first()->id
],

['name' => 'Chigalapa',
'city_id' => DB::table('cities')->where('name','Santiago Tuxtla')->first()->id
],

['name' => 'Chilchutiuca',
'city_id' => DB::table('cities')->where('name','Santiago Tuxtla')->first()->id
],

['name' => 'Chininiapan',
'city_id' => DB::table('cities')->where('name','Santiago Tuxtla')->first()->id
],

['name' => 'Chininiapan de Arriba',
'city_id' => DB::table('cities')->where('name','Santiago Tuxtla')->first()->id
],

['name' => 'Cinco Hermanos',
'city_id' => DB::table('cities')->where('name','Santiago Tuxtla')->first()->id
],

['name' => 'Colonia el Palenque',
'city_id' => DB::table('cities')->where('name','Santiago Tuxtla')->first()->id
],

['name' => 'Colonia el Rosario',
'city_id' => DB::table('cities')->where('name','Santiago Tuxtla')->first()->id
],

['name' => 'Miguel Alemán',
'city_id' => DB::table('cities')->where('name','Santiago Tuxtla')->first()->id
],

['name' => 'Colonia Oteapan',
'city_id' => DB::table('cities')->where('name','Santiago Tuxtla')->first()->id
],

['name' => 'Cotija',
'city_id' => DB::table('cities')->where('name','Santiago Tuxtla')->first()->id
],

['name' => 'Crustitán',
'city_id' => DB::table('cities')->where('name','Santiago Tuxtla')->first()->id
],

['name' => 'Cuyuapan',
'city_id' => DB::table('cities')->where('name','Santiago Tuxtla')->first()->id
],

['name' => 'Cuyuapan de Abajo',
'city_id' => DB::table('cities')->where('name','Santiago Tuxtla')->first()->id
],

['name' => 'Diente de León',
'city_id' => DB::table('cities')->where('name','Santiago Tuxtla')->first()->id
],

['name' => 'Dos Caminos',
'city_id' => DB::table('cities')->where('name','Santiago Tuxtla')->first()->id
],

['name' => 'El Amate (Tepesiluapan)',
'city_id' => DB::table('cities')->where('name','Santiago Tuxtla')->first()->id
],

['name' => 'El Berral (Raúl Vargas)',
'city_id' => DB::table('cities')->where('name','Santiago Tuxtla')->first()->id
],

['name' => 'El Encanto',
'city_id' => DB::table('cities')->where('name','Santiago Tuxtla')->first()->id
],

['name' => 'El Jiote',
'city_id' => DB::table('cities')->where('name','Santiago Tuxtla')->first()->id
],

['name' => 'El Mirador',
'city_id' => DB::table('cities')->where('name','Santiago Tuxtla')->first()->id
],

['name' => 'El Mirador',
'city_id' => DB::table('cities')->where('name','Santiago Tuxtla')->first()->id
],

['name' => 'El Picayo',
'city_id' => DB::table('cities')->where('name','Santiago Tuxtla')->first()->id
],

['name' => 'El Plantel (Mario Carvajal)',
'city_id' => DB::table('cities')->where('name','Santiago Tuxtla')->first()->id
],

['name' => 'El Quico',
'city_id' => DB::table('cities')->where('name','Santiago Tuxtla')->first()->id
],

['name' => 'El Sacrificio',
'city_id' => DB::table('cities')->where('name','Santiago Tuxtla')->first()->id
],

['name' => 'El Soñador',
'city_id' => DB::table('cities')->where('name','Santiago Tuxtla')->first()->id
],

['name' => 'El Soñador (Zapata)',
'city_id' => DB::table('cities')->where('name','Santiago Tuxtla')->first()->id
],

['name' => 'El Zapote',
'city_id' => DB::table('cities')->where('name','Santiago Tuxtla')->first()->id
],

['name' => 'Fernando Bustamante',
'city_id' => DB::table('cities')->where('name','Santiago Tuxtla')->first()->id
],

['name' => 'Finca Villa la Gallarda',
'city_id' => DB::table('cities')->where('name','Santiago Tuxtla')->first()->id
],

['name' => 'Flor del Ejido',
'city_id' => DB::table('cities')->where('name','Santiago Tuxtla')->first()->id
],

['name' => 'Flor María',
'city_id' => DB::table('cities')->where('name','Santiago Tuxtla')->first()->id
],

['name' => 'Hermanos Camino',
'city_id' => DB::table('cities')->where('name','Santiago Tuxtla')->first()->id
],

['name' => 'José Castellanos',
'city_id' => DB::table('cities')->where('name','Santiago Tuxtla')->first()->id
],

['name' => 'José Castellanos',
'city_id' => DB::table('cities')->where('name','Santiago Tuxtla')->first()->id
],

['name' => 'José María Migueles',
'city_id' => DB::table('cities')->where('name','Santiago Tuxtla')->first()->id
],

['name' => 'La Aurora',
'city_id' => DB::table('cities')->where('name','Santiago Tuxtla')->first()->id
],

['name' => 'La Ceiba',
'city_id' => DB::table('cities')->where('name','Santiago Tuxtla')->first()->id
],

['name' => 'La Concahua',
'city_id' => DB::table('cities')->where('name','Santiago Tuxtla')->first()->id
],

['name' => 'La Cuesta',
'city_id' => DB::table('cities')->where('name','Santiago Tuxtla')->first()->id
],

['name' => 'La Guadalupe',
'city_id' => DB::table('cities')->where('name','Santiago Tuxtla')->first()->id
],

['name' => 'La Joya',
'city_id' => DB::table('cities')->where('name','Santiago Tuxtla')->first()->id
],

['name' => 'La Purificadora',
'city_id' => DB::table('cities')->where('name','Santiago Tuxtla')->first()->id
],

['name' => 'La Vaina',
'city_id' => DB::table('cities')->where('name','Santiago Tuxtla')->first()->id
],

['name' => 'Las Quince Letras',
'city_id' => DB::table('cities')->where('name','Santiago Tuxtla')->first()->id
],

['name' => 'Loma Quemada',
'city_id' => DB::table('cities')->where('name','Santiago Tuxtla')->first()->id
],

['name' => 'Los Chaneques',
'city_id' => DB::table('cities')->where('name','Santiago Tuxtla')->first()->id
],

['name' => 'Los Diez Hermanos',
'city_id' => DB::table('cities')->where('name','Santiago Tuxtla')->first()->id
],

['name' => 'Mario Carvajal',
'city_id' => DB::table('cities')->where('name','Santiago Tuxtla')->first()->id
],

['name' => 'Maxyapán',
'city_id' => DB::table('cities')->where('name','Santiago Tuxtla')->first()->id
],

['name' => 'Nancinapan (Casa de Teja)',
'city_id' => DB::table('cities')->where('name','Santiago Tuxtla')->first()->id
],

['name' => 'Palo Blanco',
'city_id' => DB::table('cities')->where('name','Santiago Tuxtla')->first()->id
],

['name' => 'Pollinapan',
'city_id' => DB::table('cities')->where('name','Santiago Tuxtla')->first()->id
],

['name' => 'Popoctépetl',
'city_id' => DB::table('cities')->where('name','Santiago Tuxtla')->first()->id
],

['name' => 'Raúl Carvajal',
'city_id' => DB::table('cities')->where('name','Santiago Tuxtla')->first()->id
],

['name' => 'Raúl Sosa',
'city_id' => DB::table('cities')->where('name','Santiago Tuxtla')->first()->id
],

['name' => 'Rancho de la Maza',
'city_id' => DB::table('cities')->where('name','Santiago Tuxtla')->first()->id
],

['name' => 'Rancho la Cuchilla',
'city_id' => DB::table('cities')->where('name','Santiago Tuxtla')->first()->id
],

['name' => 'Rancho la Guadalupe',
'city_id' => DB::table('cities')->where('name','Santiago Tuxtla')->first()->id
],

['name' => 'Rancho Oliveros',
'city_id' => DB::table('cities')->where('name','Santiago Tuxtla')->first()->id
],

['name' => 'Rancho Oliveros',
'city_id' => DB::table('cities')->where('name','Santiago Tuxtla')->first()->id
],

['name' => 'Rancho Vargas',
'city_id' => DB::table('cities')->where('name','Santiago Tuxtla')->first()->id
],

['name' => 'San Armando',
'city_id' => DB::table('cities')->where('name','Santiago Tuxtla')->first()->id
],

['name' => 'San Martín',
'city_id' => DB::table('cities')->where('name','Santiago Tuxtla')->first()->id
],

['name' => 'San Matías',
'city_id' => DB::table('cities')->where('name','Santiago Tuxtla')->first()->id
],

['name' => 'San Rafael',
'city_id' => DB::table('cities')->where('name','Santiago Tuxtla')->first()->id
],

['name' => 'Santa Elena',
'city_id' => DB::table('cities')->where('name','Santiago Tuxtla')->first()->id
],

['name' => 'Santa Elena',
'city_id' => DB::table('cities')->where('name','Santiago Tuxtla')->first()->id
],

['name' => 'Santa Elena',
'city_id' => DB::table('cities')->where('name','Santiago Tuxtla')->first()->id
],

['name' => 'Santa Isabel',
'city_id' => DB::table('cities')->where('name','Santiago Tuxtla')->first()->id
],

['name' => 'Sesecapan',
'city_id' => DB::table('cities')->where('name','Santiago Tuxtla')->first()->id
],

['name' => 'Sinapán',
'city_id' => DB::table('cities')->where('name','Santiago Tuxtla')->first()->id
],

['name' => 'Tamaniapa',
'city_id' => DB::table('cities')->where('name','Santiago Tuxtla')->first()->id
],

['name' => 'Tanabalapa',
'city_id' => DB::table('cities')->where('name','Santiago Tuxtla')->first()->id
],

['name' => 'Tapalcapan',
'city_id' => DB::table('cities')->where('name','Santiago Tuxtla')->first()->id
],

['name' => 'Tatocapan',
'city_id' => DB::table('cities')->where('name','Santiago Tuxtla')->first()->id
],

['name' => 'Tepozapan',
'city_id' => DB::table('cities')->where('name','Santiago Tuxtla')->first()->id
],

['name' => 'Tetax Sesecapan',
'city_id' => DB::table('cities')->where('name','Santiago Tuxtla')->first()->id
],

['name' => 'Texcochapan de Arriba',
'city_id' => DB::table('cities')->where('name','Santiago Tuxtla')->first()->id
],

['name' => 'Tierra Colorada',
'city_id' => DB::table('cities')->where('name','Santiago Tuxtla')->first()->id
],

['name' => 'Totocapan',
'city_id' => DB::table('cities')->where('name','Santiago Tuxtla')->first()->id
],

['name' => 'Trapiche de Xinagambasca',
'city_id' => DB::table('cities')->where('name','Santiago Tuxtla')->first()->id
],

['name' => 'Un Recuerdo',
'city_id' => DB::table('cities')->where('name','Santiago Tuxtla')->first()->id
],

['name' => 'Xogapan',
'city_id' => DB::table('cities')->where('name','Santiago Tuxtla')->first()->id
],

['name' => 'Medellin de las Mercedes',
'city_id' => DB::table('cities')->where('name','Santiago Tuxtla')->first()->id
],

['name' => 'Boca del Monte',
'city_id' => DB::table('cities')->where('name','Santiago Tuxtla')->first()->id
],

['name' => 'Rincón de Sosa',
'city_id' => DB::table('cities')->where('name','Santiago Tuxtla')->first()->id
],

['name' => 'Rincón de Zapateros',
'city_id' => DB::table('cities')->where('name','Santiago Tuxtla')->first()->id
],

['name' => 'Salto de Agua de los Islaba',
'city_id' => DB::table('cities')->where('name','Santiago Tuxtla')->first()->id
],

['name' => 'Rincón de Lucia',
'city_id' => DB::table('cities')->where('name','Santiago Tuxtla')->first()->id
],

['name' => 'Arroyo de Piedra',
'city_id' => DB::table('cities')->where('name','Santiago Tuxtla')->first()->id
],

['name' => 'Arroyo Salado (El Porvenir)',
'city_id' => DB::table('cities')->where('name','Santiago Tuxtla')->first()->id
],

['name' => 'Cerro del Vigía de Enmedio',
'city_id' => DB::table('cities')->where('name','Santiago Tuxtla')->first()->id
],

['name' => 'Cruz de Vidaña',
'city_id' => DB::table('cities')->where('name','Santiago Tuxtla')->first()->id
],

['name' => 'El Aguaje',
'city_id' => DB::table('cities')->where('name','Santiago Tuxtla')->first()->id
],

['name' => 'El Cañalito',
'city_id' => DB::table('cities')->where('name','Santiago Tuxtla')->first()->id
],

['name' => 'El Nanchital',
'city_id' => DB::table('cities')->where('name','Santiago Tuxtla')->first()->id
],

['name' => 'El Palmar',
'city_id' => DB::table('cities')->where('name','Santiago Tuxtla')->first()->id
],

['name' => 'El Platanar',
'city_id' => DB::table('cities')->where('name','Santiago Tuxtla')->first()->id
],

['name' => 'El Potrero',
'city_id' => DB::table('cities')->where('name','Santiago Tuxtla')->first()->id
],

['name' => 'El Rincón',
'city_id' => DB::table('cities')->where('name','Santiago Tuxtla')->first()->id
],

['name' => 'El Vikingo (El Gringo)',
'city_id' => DB::table('cities')->where('name','Santiago Tuxtla')->first()->id
],

['name' => 'El Zapote',
'city_id' => DB::table('cities')->where('name','Santiago Tuxtla')->first()->id
],

['name' => 'El Zapote',
'city_id' => DB::table('cities')->where('name','Santiago Tuxtla')->first()->id
],

['name' => 'La Ceiba',
'city_id' => DB::table('cities')->where('name','Santiago Tuxtla')->first()->id
],

['name' => 'La Florida',
'city_id' => DB::table('cities')->where('name','Santiago Tuxtla')->first()->id
],

['name' => 'La Guadalupe',
'city_id' => DB::table('cities')->where('name','Santiago Tuxtla')->first()->id
],

['name' => 'La Mechuda',
'city_id' => DB::table('cities')->where('name','Santiago Tuxtla')->first()->id
],

['name' => 'La Soledad',
'city_id' => DB::table('cities')->where('name','Santiago Tuxtla')->first()->id
],

['name' => 'Los Pinos',
'city_id' => DB::table('cities')->where('name','Santiago Tuxtla')->first()->id
],

['name' => 'Mazatán',
'city_id' => DB::table('cities')->where('name','Santiago Tuxtla')->first()->id
],

['name' => 'Miguel Hidalgo y Costilla',
'city_id' => DB::table('cities')->where('name','Santiago Tuxtla')->first()->id
],

['name' => 'Ojo de Agua',
'city_id' => DB::table('cities')->where('name','Santiago Tuxtla')->first()->id
],

['name' => 'Omeapan',
'city_id' => DB::table('cities')->where('name','Santiago Tuxtla')->first()->id
],

['name' => 'Palo Gacho (La Piedra)',
'city_id' => DB::table('cities')->where('name','Santiago Tuxtla')->first()->id
],

['name' => 'Pepetaca',
'city_id' => DB::table('cities')->where('name','Santiago Tuxtla')->first()->id
],

['name' => 'Rolando Victorio',
'city_id' => DB::table('cities')->where('name','Santiago Tuxtla')->first()->id
],

['name' => 'Salto de Agua de Pío (Dos Caminos)',
'city_id' => DB::table('cities')->where('name','Santiago Tuxtla')->first()->id
],

['name' => 'San Agustín',
'city_id' => DB::table('cities')->where('name','Santiago Tuxtla')->first()->id
],

['name' => 'San Lorenzo',
'city_id' => DB::table('cities')->where('name','Santiago Tuxtla')->first()->id
],

['name' => 'San Marcos',
'city_id' => DB::table('cities')->where('name','Santiago Tuxtla')->first()->id
],

['name' => 'San Miguel',
'city_id' => DB::table('cities')->where('name','Santiago Tuxtla')->first()->id
],

['name' => 'Tenejapan',
'city_id' => DB::table('cities')->where('name','Santiago Tuxtla')->first()->id
],

['name' => 'Tepetapan',
'city_id' => DB::table('cities')->where('name','Santiago Tuxtla')->first()->id
],

['name' => 'Totogal',
'city_id' => DB::table('cities')->where('name','Santiago Tuxtla')->first()->id
],

['name' => 'Xaltepec',
'city_id' => DB::table('cities')->where('name','Santiago Tuxtla')->first()->id
],

['name' => 'Xigüipilincan',
'city_id' => DB::table('cities')->where('name','Santiago Tuxtla')->first()->id
],

['name' => 'Tibernal',
'city_id' => DB::table('cities')->where('name','Santiago Tuxtla')->first()->id
],

['name' => 'Francisco I. Madero',
'city_id' => DB::table('cities')->where('name','Santiago Tuxtla')->first()->id
],

['name' => 'El Zapotal',
'city_id' => DB::table('cities')->where('name','Santiago Tuxtla')->first()->id
],

['name' => 'Abelino Lagunes',
'city_id' => DB::table('cities')->where('name','Santiago Tuxtla')->first()->id
],

['name' => 'Abelino Lagunes',
'city_id' => DB::table('cities')->where('name','Santiago Tuxtla')->first()->id
],

['name' => 'Banco de Grava',
'city_id' => DB::table('cities')->where('name','Santiago Tuxtla')->first()->id
],

['name' => 'Camacho',
'city_id' => DB::table('cities')->where('name','Santiago Tuxtla')->first()->id
],

['name' => 'El Embarcadero',
'city_id' => DB::table('cities')->where('name','Santiago Tuxtla')->first()->id
],

['name' => 'El Laurel',
'city_id' => DB::table('cities')->where('name','Santiago Tuxtla')->first()->id
],

['name' => 'El Morillo',
'city_id' => DB::table('cities')->where('name','Santiago Tuxtla')->first()->id
],

['name' => 'El Sacrificio',
'city_id' => DB::table('cities')->where('name','Santiago Tuxtla')->first()->id
],

['name' => 'El Yuale Chico',
'city_id' => DB::table('cities')->where('name','Santiago Tuxtla')->first()->id
],

['name' => 'Entrada al Banco de Grava',
'city_id' => DB::table('cities')->where('name','Santiago Tuxtla')->first()->id
],

['name' => 'Francisco I. Madero',
'city_id' => DB::table('cities')->where('name','Santiago Tuxtla')->first()->id
],

['name' => 'Francisco Isidoro Huatzozón',
'city_id' => DB::table('cities')->where('name','Santiago Tuxtla')->first()->id
],

['name' => 'Guinda',
'city_id' => DB::table('cities')->where('name','Santiago Tuxtla')->first()->id
],

['name' => 'Kilómetro Diecinueve',
'city_id' => DB::table('cities')->where('name','Santiago Tuxtla')->first()->id
],

['name' => 'La Encantada',
'city_id' => DB::table('cities')->where('name','Santiago Tuxtla')->first()->id
],

['name' => 'La Esmeralda',
'city_id' => DB::table('cities')->where('name','Santiago Tuxtla')->first()->id
],

['name' => 'La Granja',
'city_id' => DB::table('cities')->where('name','Santiago Tuxtla')->first()->id
],

['name' => 'La Loma',
'city_id' => DB::table('cities')->where('name','Santiago Tuxtla')->first()->id
],

['name' => 'La Nueva Esperanza',
'city_id' => DB::table('cities')->where('name','Santiago Tuxtla')->first()->id
],

['name' => 'Los Mangos',
'city_id' => DB::table('cities')->where('name','Santiago Tuxtla')->first()->id
],

['name' => 'Los Naranjos',
'city_id' => DB::table('cities')->where('name','Santiago Tuxtla')->first()->id
],

['name' => 'Mario Flores',
'city_id' => DB::table('cities')->where('name','Santiago Tuxtla')->first()->id
],

['name' => 'Palmira',
'city_id' => DB::table('cities')->where('name','Santiago Tuxtla')->first()->id
],

['name' => 'Pueblo Nuevo',
'city_id' => DB::table('cities')->where('name','Santiago Tuxtla')->first()->id
],

['name' => 'Raúl Vargas',
'city_id' => DB::table('cities')->where('name','Santiago Tuxtla')->first()->id
],

['name' => 'San Diego',
'city_id' => DB::table('cities')->where('name','Santiago Tuxtla')->first()->id
],

['name' => 'San José',
'city_id' => DB::table('cities')->where('name','Santiago Tuxtla')->first()->id
],

['name' => 'San Simón',
'city_id' => DB::table('cities')->where('name','Santiago Tuxtla')->first()->id
],

['name' => 'Cinco de Mayo',
'city_id' => DB::table('cities')->where('name','Santiago Tuxtla')->first()->id
],

['name' => 'La Pitahaya',
'city_id' => DB::table('cities')->where('name','Santiago Tuxtla')->first()->id
],

['name' => 'Nuevo del Mostal',
'city_id' => DB::table('cities')->where('name','Santiago Tuxtla')->first()->id
],

['name' => 'El Amate',
'city_id' => DB::table('cities')->where('name','Santiago Tuxtla')->first()->id
],

['name' => 'El Coyol',
'city_id' => DB::table('cities')->where('name','Santiago Tuxtla')->first()->id
],

['name' => 'Arroyo Largo',
'city_id' => DB::table('cities')->where('name','Santiago Tuxtla')->first()->id
],

['name' => 'Arturo Jiadan',
'city_id' => DB::table('cities')->where('name','Santiago Tuxtla')->first()->id
],

['name' => 'Bella Vista',
'city_id' => DB::table('cities')->where('name','Santiago Tuxtla')->first()->id
],

['name' => 'Boca las Carolinas',
'city_id' => DB::table('cities')->where('name','Santiago Tuxtla')->first()->id
],

['name' => 'Bodegas de Otapan',
'city_id' => DB::table('cities')->where('name','Santiago Tuxtla')->first()->id
],

['name' => 'Cerro Castro',
'city_id' => DB::table('cities')->where('name','Santiago Tuxtla')->first()->id
],

['name' => 'Cerro Colorado',
'city_id' => DB::table('cities')->where('name','Santiago Tuxtla')->first()->id
],

['name' => 'Cosoltiapa',
'city_id' => DB::table('cities')->where('name','Santiago Tuxtla')->first()->id
],

['name' => 'El Campanario',
'city_id' => DB::table('cities')->where('name','Santiago Tuxtla')->first()->id
],

['name' => 'El Chiflón',
'city_id' => DB::table('cities')->where('name','Santiago Tuxtla')->first()->id
],

['name' => 'El Hato',
'city_id' => DB::table('cities')->where('name','Santiago Tuxtla')->first()->id
],

['name' => 'El Hato',
'city_id' => DB::table('cities')->where('name','Santiago Tuxtla')->first()->id
],

['name' => 'El Macuile',
'city_id' => DB::table('cities')->where('name','Santiago Tuxtla')->first()->id
],

['name' => 'El Mostal',
'city_id' => DB::table('cities')->where('name','Santiago Tuxtla')->first()->id
],

['name' => 'El Paraíso',
'city_id' => DB::table('cities')->where('name','Santiago Tuxtla')->first()->id
],

['name' => 'El Pretil',
'city_id' => DB::table('cities')->where('name','Santiago Tuxtla')->first()->id
],

['name' => 'El Treviso',
'city_id' => DB::table('cities')->where('name','Santiago Tuxtla')->first()->id
],

['name' => 'El Tular',
'city_id' => DB::table('cities')->where('name','Santiago Tuxtla')->first()->id
],

['name' => 'El Volcán',
'city_id' => DB::table('cities')->where('name','Santiago Tuxtla')->first()->id
],

['name' => 'El Yuale Grande',
'city_id' => DB::table('cities')->where('name','Santiago Tuxtla')->first()->id
],

['name' => 'Guasimal',
'city_id' => DB::table('cities')->where('name','Santiago Tuxtla')->first()->id
],

['name' => 'Isletilla',
'city_id' => DB::table('cities')->where('name','Santiago Tuxtla')->first()->id
],

['name' => 'La Ceibilla',
'city_id' => DB::table('cities')->where('name','Santiago Tuxtla')->first()->id
],

['name' => 'La Cerca',
'city_id' => DB::table('cities')->where('name','Santiago Tuxtla')->first()->id
],

['name' => 'La Laguna',
'city_id' => DB::table('cities')->where('name','Santiago Tuxtla')->first()->id
],

['name' => 'La Piedad',
'city_id' => DB::table('cities')->where('name','Santiago Tuxtla')->first()->id
],

['name' => 'La Soledad',
'city_id' => DB::table('cities')->where('name','Santiago Tuxtla')->first()->id
],

['name' => 'La Soledad (El Tamani)',
'city_id' => DB::table('cities')->where('name','Santiago Tuxtla')->first()->id
],

['name' => 'Las Lajas',
'city_id' => DB::table('cities')->where('name','Santiago Tuxtla')->first()->id
],

['name' => 'Las Margaritas',
'city_id' => DB::table('cities')->where('name','Santiago Tuxtla')->first()->id
],

['name' => 'Las Palmas',
'city_id' => DB::table('cities')->where('name','Santiago Tuxtla')->first()->id
],

['name' => 'Las Pochotas',
'city_id' => DB::table('cities')->where('name','Santiago Tuxtla')->first()->id
],

['name' => 'Loma la Gravera',
'city_id' => DB::table('cities')->where('name','Santiago Tuxtla')->first()->id
],

['name' => 'Lomas de Alonso Lázaro (El Burro)',
'city_id' => DB::table('cities')->where('name','Santiago Tuxtla')->first()->id
],

['name' => 'Los Cañales',
'city_id' => DB::table('cities')->where('name','Santiago Tuxtla')->first()->id
],

['name' => 'Los Chivos (El Hato)',
'city_id' => DB::table('cities')->where('name','Santiago Tuxtla')->first()->id
],

['name' => 'Los Naranjos (Los Bravo)',
'city_id' => DB::table('cities')->where('name','Santiago Tuxtla')->first()->id
],

['name' => 'Los Pérez',
'city_id' => DB::table('cities')->where('name','Santiago Tuxtla')->first()->id
],

['name' => 'Mata de Caña',
'city_id' => DB::table('cities')->where('name','Santiago Tuxtla')->first()->id
],

['name' => 'Nayo Carballo',
'city_id' => DB::table('cities')->where('name','Santiago Tuxtla')->first()->id
],

['name' => 'Nuevo Totlalli',
'city_id' => DB::table('cities')->where('name','Santiago Tuxtla')->first()->id
],

['name' => 'Pixixiapan',
'city_id' => DB::table('cities')->where('name','Santiago Tuxtla')->first()->id
],

['name' => 'Rancho Barrientos',
'city_id' => DB::table('cities')->where('name','Santiago Tuxtla')->first()->id
],

['name' => 'Rancho de Parra',
'city_id' => DB::table('cities')->where('name','Santiago Tuxtla')->first()->id
],

['name' => 'Rancho Nuevo',
'city_id' => DB::table('cities')->where('name','Santiago Tuxtla')->first()->id
],

['name' => 'Sabaneta',
'city_id' => DB::table('cities')->where('name','Santiago Tuxtla')->first()->id
],

['name' => 'San Antonio de la Huerta',
'city_id' => DB::table('cities')->where('name','Santiago Tuxtla')->first()->id
],

['name' => 'San Fernando',
'city_id' => DB::table('cities')->where('name','Santiago Tuxtla')->first()->id
],

['name' => 'San Isidro',
'city_id' => DB::table('cities')->where('name','Santiago Tuxtla')->first()->id
],

['name' => 'San Rafael',
'city_id' => DB::table('cities')->where('name','Santiago Tuxtla')->first()->id
],

['name' => 'San Simón',
'city_id' => DB::table('cities')->where('name','Santiago Tuxtla')->first()->id
],

['name' => 'Santa Teresa',
'city_id' => DB::table('cities')->where('name','Santiago Tuxtla')->first()->id
],

['name' => 'Tamoanchan Totlalli',
'city_id' => DB::table('cities')->where('name','Santiago Tuxtla')->first()->id
],

['name' => 'Tres de Mayo',
'city_id' => DB::table('cities')->where('name','Santiago Tuxtla')->first()->id
],

['name' => 'Trinidad Huesca Hernández',
'city_id' => DB::table('cities')->where('name','Santiago Tuxtla')->first()->id
],

['name' => 'Zacatal (San José Buena Vista)',
'city_id' => DB::table('cities')->where('name','Santiago Tuxtla')->first()->id
],

['name' => 'Catemaco',
'city_id' => DB::table('cities')->where('name','Santiago Tuxtla')->first()->id
],

['name' => 'Texas',
'city_id' => DB::table('cities')->where('name','Santiago Tuxtla')->first()->id
],

['name' => 'Tlapacoyan',
'city_id' => DB::table('cities')->where('name','Santiago Tuxtla')->first()->id
],

['name' => 'El Espinal',
'city_id' => DB::table('cities')->where('name','Santiago Tuxtla')->first()->id
],

['name' => '3 Zapotes',
'city_id' => DB::table('cities')->where('name','Santiago Tuxtla')->first()->id
],

['name' => 'Alonso Lázaro',
'city_id' => DB::table('cities')->where('name','Santiago Tuxtla')->first()->id
],

['name' => 'Ampliación Cobata (Vigía Ladera)',
'city_id' => DB::table('cities')->where('name','Santiago Tuxtla')->first()->id
],

['name' => 'Arroyo Grande',
'city_id' => DB::table('cities')->where('name','Santiago Tuxtla')->first()->id
],

['name' => 'Arroyo San Isidro',
'city_id' => DB::table('cities')->where('name','Santiago Tuxtla')->first()->id
],

['name' => 'Bella Vista',
'city_id' => DB::table('cities')->where('name','Santiago Tuxtla')->first()->id
],

['name' => 'Boca de Tecomate',
'city_id' => DB::table('cities')->where('name','Santiago Tuxtla')->first()->id
],

['name' => 'Cedral',
'city_id' => DB::table('cities')->where('name','Santiago Tuxtla')->first()->id
],

['name' => 'Cerro Azul',
'city_id' => DB::table('cities')->where('name','Santiago Tuxtla')->first()->id
],

['name' => 'Cerro Blanco',
'city_id' => DB::table('cities')->where('name','Santiago Tuxtla')->first()->id
],

['name' => 'Cerro de los Vázquez',
'city_id' => DB::table('cities')->where('name','Santiago Tuxtla')->first()->id
],

['name' => 'Cerro del Cubilete',
'city_id' => DB::table('cities')->where('name','Santiago Tuxtla')->first()->id
],

['name' => 'Chicozapotal',
'city_id' => DB::table('cities')->where('name','Santiago Tuxtla')->first()->id
],

['name' => 'Cobata',
'city_id' => DB::table('cities')->where('name','Santiago Tuxtla')->first()->id
],

['name' => 'El Cerro',
'city_id' => DB::table('cities')->where('name','Santiago Tuxtla')->first()->id
],

['name' => 'El Charrito',
'city_id' => DB::table('cities')->where('name','Santiago Tuxtla')->first()->id
],

['name' => 'El Ciruelo',
'city_id' => DB::table('cities')->where('name','Santiago Tuxtla')->first()->id
],

['name' => 'El Espinalito (Puente el Espinal)',
'city_id' => DB::table('cities')->where('name','Santiago Tuxtla')->first()->id
],

['name' => 'El Mirador (San Marquitos)',
'city_id' => DB::table('cities')->where('name','Santiago Tuxtla')->first()->id
],

['name' => 'El Moral',
'city_id' => DB::table('cities')->where('name','Santiago Tuxtla')->first()->id
],

['name' => 'El Predio de los Ixhuápam',
'city_id' => DB::table('cities')->where('name','Santiago Tuxtla')->first()->id
],

['name' => 'El Sitio',
'city_id' => DB::table('cities')->where('name','Santiago Tuxtla')->first()->id
],

['name' => 'El Transbordador',
'city_id' => DB::table('cities')->where('name','Santiago Tuxtla')->first()->id
],

['name' => 'Emiliano Zapata',
'city_id' => DB::table('cities')->where('name','Santiago Tuxtla')->first()->id
],

['name' => 'Gregorio González',
'city_id' => DB::table('cities')->where('name','Santiago Tuxtla')->first()->id
],

['name' => 'Hidalgo (Salto de los Islaba Dos)',
'city_id' => DB::table('cities')->where('name','Santiago Tuxtla')->first()->id
],

['name' => 'Hueyapan de Mimendi (Salto de Islaba)',
'city_id' => DB::table('cities')->where('name','Santiago Tuxtla')->first()->id
],

['name' => 'La Comisión',
'city_id' => DB::table('cities')->where('name','Santiago Tuxtla')->first()->id
],

['name' => 'La Esmeralda (El Trapiche)',
'city_id' => DB::table('cities')->where('name','Santiago Tuxtla')->first()->id
],

['name' => 'La Florida',
'city_id' => DB::table('cities')->where('name','Santiago Tuxtla')->first()->id
],

['name' => 'Laguna la Lagartera',
'city_id' => DB::table('cities')->where('name','Santiago Tuxtla')->first()->id
],

['name' => 'Licenciado Ángel Carvajal (Providencia II)',
'city_id' => DB::table('cities')->where('name','Santiago Tuxtla')->first()->id
],

['name' => 'Los Jarochos',
'city_id' => DB::table('cities')->where('name','Santiago Tuxtla')->first()->id
],

['name' => 'Los Xolos',
'city_id' => DB::table('cities')->where('name','Santiago Tuxtla')->first()->id
],

['name' => 'Narciso Victorino Marrero (Palo Herrado)',
'city_id' => DB::table('cities')->where('name','Santiago Tuxtla')->first()->id
],

['name' => 'Olapa',
'city_id' => DB::table('cities')->where('name','Santiago Tuxtla')->first()->id
],

['name' => 'Paso del Amate',
'city_id' => DB::table('cities')->where('name','Santiago Tuxtla')->first()->id
],

['name' => 'Rodolfo Martínez',
'city_id' => DB::table('cities')->where('name','Santiago Tuxtla')->first()->id
],

['name' => 'San Marquitos',
'city_id' => DB::table('cities')->where('name','Santiago Tuxtla')->first()->id
],

['name' => 'San Pablo',
'city_id' => DB::table('cities')->where('name','Santiago Tuxtla')->first()->id
],

['name' => 'Tagala (Yuyu)',
'city_id' => DB::table('cities')->where('name','Santiago Tuxtla')->first()->id
],

['name' => 'Tlapacoyan de Abajo',
'city_id' => DB::table('cities')->where('name','Santiago Tuxtla')->first()->id
],

['name' => 'Tres Zapotes Dos a (Palo Herrado)',
'city_id' => DB::table('cities')->where('name','Santiago Tuxtla')->first()->id
],

['name' => 'Tres Zapotes Dos B',
'city_id' => DB::table('cities')->where('name','Santiago Tuxtla')->first()->id
],

['name' => 'Tres Zapotes Uno',
'city_id' => DB::table('cities')->where('name','Santiago Tuxtla')->first()->id
],

['name' => 'Vigía Corona',
'city_id' => DB::table('cities')->where('name','Santiago Tuxtla')->first()->id
],

['name' => 'Villa Rica',
'city_id' => DB::table('cities')->where('name','Santiago Tuxtla')->first()->id
],

['name' => 'Angel R. Cabada',
'city_id' => DB::table('cities')->where('name','Angel R. Cabada')->first()->id
],

['name' => 'Peralvillo',
'city_id' => DB::table('cities')->where('name','Angel R. Cabada')->first()->id
],

['name' => 'Barrio Nuevo',
'city_id' => DB::table('cities')->where('name','Angel R. Cabada')->first()->id
],

['name' => 'El Mesón',
'city_id' => DB::table('cities')->where('name','Angel R. Cabada')->first()->id
],

['name' => 'José López Portillo',
'city_id' => DB::table('cities')->where('name','Angel R. Cabada')->first()->id
],

['name' => 'Luis Donaldo Colosio',
'city_id' => DB::table('cities')->where('name','Angel R. Cabada')->first()->id
],

['name' => 'Barrio Sur',
'city_id' => DB::table('cities')->where('name','Angel R. Cabada')->first()->id
],

['name' => 'Rafael Hernández Ochoa',
'city_id' => DB::table('cities')->where('name','Angel R. Cabada')->first()->id
],

['name' => 'Lechería',
'city_id' => DB::table('cities')->where('name','Angel R. Cabada')->first()->id
],

['name' => 'Articulo 27',
'city_id' => DB::table('cities')->where('name','Angel R. Cabada')->first()->id
],

['name' => 'Brujo',
'city_id' => DB::table('cities')->where('name','Angel R. Cabada')->first()->id
],

['name' => 'Tulapilla (Ejido Tulapilla)',
'city_id' => DB::table('cities')->where('name','Angel R. Cabada')->first()->id
],

['name' => 'La Alianza',
'city_id' => DB::table('cities')->where('name','Angel R. Cabada')->first()->id
],

['name' => 'La Florida',
'city_id' => DB::table('cities')->where('name','Angel R. Cabada')->first()->id
],

['name' => 'San Rafael',
'city_id' => DB::table('cities')->where('name','Angel R. Cabada')->first()->id
],

['name' => 'El Progreso Majahual',
'city_id' => DB::table('cities')->where('name','Angel R. Cabada')->first()->id
],

['name' => 'El Porvenir',
'city_id' => DB::table('cities')->where('name','Angel R. Cabada')->first()->id
],

['name' => 'Laguna de Majahual (Río de Cañas)',
'city_id' => DB::table('cities')->where('name','Angel R. Cabada')->first()->id
],

['name' => 'El Panatlán',
'city_id' => DB::table('cities')->where('name','Angel R. Cabada')->first()->id
],

['name' => 'Tula',
'city_id' => DB::table('cities')->where('name','Angel R. Cabada')->first()->id
],

['name' => 'La Mojarra',
'city_id' => DB::table('cities')->where('name','Angel R. Cabada')->first()->id
],

['name' => 'Paso del Ingenio',
'city_id' => DB::table('cities')->where('name','Angel R. Cabada')->first()->id
],

['name' => 'Chonegal',
'city_id' => DB::table('cities')->where('name','Angel R. Cabada')->first()->id
],

['name' => 'Tecolapan',
'city_id' => DB::table('cities')->where('name','Angel R. Cabada')->first()->id
],

['name' => 'El Pital',
'city_id' => DB::table('cities')->where('name','Angel R. Cabada')->first()->id
],

['name' => 'El Saltillo Caracolar',
'city_id' => DB::table('cities')->where('name','Angel R. Cabada')->first()->id
],

['name' => 'Los Lirios',
'city_id' => DB::table('cities')->where('name','Angel R. Cabada')->first()->id
],

['name' => 'El Escobillal',
'city_id' => DB::table('cities')->where('name','Angel R. Cabada')->first()->id
],

['name' => 'Ixhuapan',
'city_id' => DB::table('cities')->where('name','Angel R. Cabada')->first()->id
],

['name' => 'La Providencia',
'city_id' => DB::table('cities')->where('name','Angel R. Cabada')->first()->id
],

['name' => 'San Juan de los Reyes (Luis Valenzuela)',
'city_id' => DB::table('cities')->where('name','Angel R. Cabada')->first()->id
],

['name' => 'Zanja Grande de Abajo',
'city_id' => DB::table('cities')->where('name','Angel R. Cabada')->first()->id
],

['name' => 'La Esperanza',
'city_id' => DB::table('cities')->where('name','Angel R. Cabada')->first()->id
],

['name' => 'Aarón Sáenz',
'city_id' => DB::table('cities')->where('name','Hueyapan de Ocampo')->first()->id
],

['name' => 'Benito Juárez',
'city_id' => DB::table('cities')->where('name','Hueyapan de Ocampo')->first()->id
],

['name' => 'Obrera',
'city_id' => DB::table('cities')->where('name','Hueyapan de Ocampo')->first()->id
],

['name' => 'San Juan Bosco',
'city_id' => DB::table('cities')->where('name','Hueyapan de Ocampo')->first()->id
],

['name' => 'Juan Díaz Covarrubias Centro',
'city_id' => DB::table('cities')->where('name','Hueyapan de Ocampo')->first()->id
],

['name' => 'Chicago',
'city_id' => DB::table('cities')->where('name','Hueyapan de Ocampo')->first()->id
],

['name' => 'Los Empleados',
'city_id' => DB::table('cities')->where('name','Hueyapan de Ocampo')->first()->id
],

['name' => 'Chapala',
'city_id' => DB::table('cities')->where('name','Hueyapan de Ocampo')->first()->id
],

['name' => 'La Plaza',
'city_id' => DB::table('cities')->where('name','Hueyapan de Ocampo')->first()->id
],

['name' => 'Progreso',
'city_id' => DB::table('cities')->where('name','Hueyapan de Ocampo')->first()->id
],

['name' => 'Covarrubias [Gasolinera]',
'city_id' => DB::table('cities')->where('name','Hueyapan de Ocampo')->first()->id
],

['name' => 'La Gloria',
'city_id' => DB::table('cities')->where('name','Hueyapan de Ocampo')->first()->id
],

['name' => 'Alto Lucero',
'city_id' => DB::table('cities')->where('name','Hueyapan de Ocampo')->first()->id
],

['name' => 'Palmarillo',
'city_id' => DB::table('cities')->where('name','Hueyapan de Ocampo')->first()->id
],

['name' => 'El Palmarillo (La Virgen)',
'city_id' => DB::table('cities')->where('name','Hueyapan de Ocampo')->first()->id
],

['name' => 'La Palma (El Guásimo)',
'city_id' => DB::table('cities')->where('name','Hueyapan de Ocampo')->first()->id
],

['name' => 'Río Blanco',
'city_id' => DB::table('cities')->where('name','Hueyapan de Ocampo')->first()->id
],

['name' => 'El Palmar',
'city_id' => DB::table('cities')->where('name','Hueyapan de Ocampo')->first()->id
],

['name' => 'Rancho Marlene',
'city_id' => DB::table('cities')->where('name','Hueyapan de Ocampo')->first()->id
],

['name' => 'San Rafael',
'city_id' => DB::table('cities')->where('name','Hueyapan de Ocampo')->first()->id
],

['name' => 'Zacatal',
'city_id' => DB::table('cities')->where('name','Hueyapan de Ocampo')->first()->id
],

['name' => 'Santa Catalina',
'city_id' => DB::table('cities')->where('name','Hueyapan de Ocampo')->first()->id
],

['name' => 'La Guadalupe',
'city_id' => DB::table('cities')->where('name','Hueyapan de Ocampo')->first()->id
],

['name' => 'Meapan de Caldelas',
'city_id' => DB::table('cities')->where('name','Hueyapan de Ocampo')->first()->id
],

['name' => 'Colonia San Rafael',
'city_id' => DB::table('cities')->where('name','Hueyapan de Ocampo')->first()->id
],

['name' => 'La Concepción',
'city_id' => DB::table('cities')->where('name','Hueyapan de Ocampo')->first()->id
],

['name' => 'La Laja',
'city_id' => DB::table('cities')->where('name','Hueyapan de Ocampo')->first()->id
],

['name' => 'Loma de los Ingleses',
'city_id' => DB::table('cities')->where('name','Hueyapan de Ocampo')->first()->id
],

['name' => 'Agapito Mexicano',
'city_id' => DB::table('cities')->where('name','Hueyapan de Ocampo')->first()->id
],

['name' => 'Aldana',
'city_id' => DB::table('cities')->where('name','Hueyapan de Ocampo')->first()->id
],

['name' => 'Alonso Navarrete',
'city_id' => DB::table('cities')->where('name','Hueyapan de Ocampo')->first()->id
],

['name' => 'Aurelio Santiago',
'city_id' => DB::table('cities')->where('name','Hueyapan de Ocampo')->first()->id
],

['name' => 'Beto Delfino',
'city_id' => DB::table('cities')->where('name','Hueyapan de Ocampo')->first()->id
],

['name' => 'Campo Nuevo',
'city_id' => DB::table('cities')->where('name','Hueyapan de Ocampo')->first()->id
],

['name' => 'Campo Nuevo',
'city_id' => DB::table('cities')->where('name','Hueyapan de Ocampo')->first()->id
],

['name' => 'Casa Blanca',
'city_id' => DB::table('cities')->where('name','Hueyapan de Ocampo')->first()->id
],

['name' => 'Catalina Salas',
'city_id' => DB::table('cities')->where('name','Hueyapan de Ocampo')->first()->id
],

['name' => 'Don Ausencio',
'city_id' => DB::table('cities')->where('name','Hueyapan de Ocampo')->first()->id
],

['name' => 'Don Elías',
'city_id' => DB::table('cities')->where('name','Hueyapan de Ocampo')->first()->id
],

['name' => 'El Estribo',
'city_id' => DB::table('cities')->where('name','Hueyapan de Ocampo')->first()->id
],

['name' => 'El Mirador',
'city_id' => DB::table('cities')->where('name','Hueyapan de Ocampo')->first()->id
],

['name' => 'El Pedregal',
'city_id' => DB::table('cities')->where('name','Hueyapan de Ocampo')->first()->id
],

['name' => 'El Progreso',
'city_id' => DB::table('cities')->where('name','Hueyapan de Ocampo')->first()->id
],

['name' => 'El Tamarindo',
'city_id' => DB::table('cities')->where('name','Hueyapan de Ocampo')->first()->id
],

['name' => 'Guadalupe Soto Gómez',
'city_id' => DB::table('cities')->where('name','Hueyapan de Ocampo')->first()->id
],

['name' => 'Joaquín González Ortiz',
'city_id' => DB::table('cities')->where('name','Hueyapan de Ocampo')->first()->id
],

['name' => 'José Humberto Delfín Castro',
'city_id' => DB::table('cities')->where('name','Hueyapan de Ocampo')->first()->id
],

['name' => 'José Soto Molina',
'city_id' => DB::table('cities')->where('name','Hueyapan de Ocampo')->first()->id
],

['name' => 'Juan Gómez Velázquez',
'city_id' => DB::table('cities')->where('name','Hueyapan de Ocampo')->first()->id
],

['name' => 'Kareli',
'city_id' => DB::table('cities')->where('name','Hueyapan de Ocampo')->first()->id
],

['name' => 'La Bomba',
'city_id' => DB::table('cities')->where('name','Hueyapan de Ocampo')->first()->id
],

['name' => 'La Galera',
'city_id' => DB::table('cities')->where('name','Hueyapan de Ocampo')->first()->id
],

['name' => 'La Gaviota',
'city_id' => DB::table('cities')->where('name','Hueyapan de Ocampo')->first()->id
],

['name' => 'Leo Gómez Gómez',
'city_id' => DB::table('cities')->where('name','Hueyapan de Ocampo')->first()->id
],

['name' => 'Los Manantiales',
'city_id' => DB::table('cities')->where('name','Hueyapan de Ocampo')->first()->id
],

['name' => 'Los Sietes',
'city_id' => DB::table('cities')->where('name','Hueyapan de Ocampo')->first()->id
],

['name' => 'Nanaltika [Hotel]',
'city_id' => DB::table('cities')->where('name','Hueyapan de Ocampo')->first()->id
],

['name' => 'Naranjo (Wenceslao Molina González)',
'city_id' => DB::table('cities')->where('name','Hueyapan de Ocampo')->first()->id
],

['name' => 'Olegario Montalvo',
'city_id' => DB::table('cities')->where('name','Hueyapan de Ocampo')->first()->id
],

['name' => 'Plan Bonito',
'city_id' => DB::table('cities')->where('name','Hueyapan de Ocampo')->first()->id
],

['name' => 'Raúl Navarrete',
'city_id' => DB::table('cities')->where('name','Hueyapan de Ocampo')->first()->id
],

['name' => 'Rancho Afore',
'city_id' => DB::table('cities')->where('name','Hueyapan de Ocampo')->first()->id
],

['name' => 'Rancho Alegre',
'city_id' => DB::table('cities')->where('name','Hueyapan de Ocampo')->first()->id
],

['name' => 'Rancho Viejo',
'city_id' => DB::table('cities')->where('name','Hueyapan de Ocampo')->first()->id
],

['name' => 'San Isidro',
'city_id' => DB::table('cities')->where('name','Hueyapan de Ocampo')->first()->id
],

['name' => 'Santa Julia',
'city_id' => DB::table('cities')->where('name','Hueyapan de Ocampo')->first()->id
],

['name' => 'Trinidad Navarrete Camacho',
'city_id' => DB::table('cities')->where('name','Hueyapan de Ocampo')->first()->id
],

['name' => 'Víctor Cárdenas Velázquez',
'city_id' => DB::table('cities')->where('name','Hueyapan de Ocampo')->first()->id
],

['name' => 'Los Acahuales',
'city_id' => DB::table('cities')->where('name','Hueyapan de Ocampo')->first()->id
],

['name' => 'La Alegría',
'city_id' => DB::table('cities')->where('name','Hueyapan de Ocampo')->first()->id
],

['name' => 'Revolución',
'city_id' => DB::table('cities')->where('name','Hueyapan de Ocampo')->first()->id
],

['name' => 'La Pluma',
'city_id' => DB::table('cities')->where('name','Hueyapan de Ocampo')->first()->id
],

['name' => 'Las Maravillas',
'city_id' => DB::table('cities')->where('name','Hueyapan de Ocampo')->first()->id
],

['name' => 'Cuatotolapan Estación',
'city_id' => DB::table('cities')->where('name','Hueyapan de Ocampo')->first()->id
],

['name' => 'Cuatotolapan Viejo',
'city_id' => DB::table('cities')->where('name','Hueyapan de Ocampo')->first()->id
],

['name' => 'Lucía Octavo Callejas',
'city_id' => DB::table('cities')->where('name','Hueyapan de Ocampo')->first()->id
],

['name' => 'Santa Rita',
'city_id' => DB::table('cities')->where('name','Hueyapan de Ocampo')->first()->id
],

['name' => 'El Sauzal',
'city_id' => DB::table('cities')->where('name','Hueyapan de Ocampo')->first()->id
],

['name' => 'Cuatotolapan Viejo (Pueblo Nuevo)',
'city_id' => DB::table('cities')->where('name','Hueyapan de Ocampo')->first()->id
],

['name' => 'La Palma',
'city_id' => DB::table('cities')->where('name','Hueyapan de Ocampo')->first()->id
],

['name' => 'Aristeo Bencomo Cruz',
'city_id' => DB::table('cities')->where('name','Hueyapan de Ocampo')->first()->id
],

['name' => 'Boca la Negra',
'city_id' => DB::table('cities')->where('name','Hueyapan de Ocampo')->first()->id
],

['name' => 'Campo Burgoa',
'city_id' => DB::table('cities')->where('name','Hueyapan de Ocampo')->first()->id
],

['name' => 'El Berenjenal',
'city_id' => DB::table('cities')->where('name','Hueyapan de Ocampo')->first()->id
],

['name' => 'El Marino',
'city_id' => DB::table('cities')->where('name','Hueyapan de Ocampo')->first()->id
],

['name' => 'La Gravera',
'city_id' => DB::table('cities')->where('name','Hueyapan de Ocampo')->first()->id
],

['name' => 'Los Higos',
'city_id' => DB::table('cities')->where('name','Hueyapan de Ocampo')->first()->id
],

['name' => 'Los Limones',
'city_id' => DB::table('cities')->where('name','Hueyapan de Ocampo')->first()->id
],

['name' => 'San Antonio',
'city_id' => DB::table('cities')->where('name','Hueyapan de Ocampo')->first()->id
],

['name' => 'San Rafael',
'city_id' => DB::table('cities')->where('name','Hueyapan de Ocampo')->first()->id
],

['name' => 'Chacalapan',
'city_id' => DB::table('cities')->where('name','Hueyapan de Ocampo')->first()->id
],

['name' => 'Norma',
'city_id' => DB::table('cities')->where('name','Hueyapan de Ocampo')->first()->id
],

['name' => 'La Esperanza',
'city_id' => DB::table('cities')->where('name','Hueyapan de Ocampo')->first()->id
],

['name' => 'El Laurel',
'city_id' => DB::table('cities')->where('name','Hueyapan de Ocampo')->first()->id
],

['name' => 'El Tecolote',
'city_id' => DB::table('cities')->where('name','Hueyapan de Ocampo')->first()->id
],

['name' => 'Don Faustino',
'city_id' => DB::table('cities')->where('name','Hueyapan de Ocampo')->first()->id
],

['name' => 'El Palmar',
'city_id' => DB::table('cities')->where('name','Hueyapan de Ocampo')->first()->id
],

['name' => 'La Hulera',
'city_id' => DB::table('cities')->where('name','Hueyapan de Ocampo')->first()->id
],

['name' => 'La Perla',
'city_id' => DB::table('cities')->where('name','Hueyapan de Ocampo')->first()->id
],

['name' => 'Santa María',
'city_id' => DB::table('cities')->where('name','Hueyapan de Ocampo')->first()->id
],

['name' => 'Loma de Sogotegoyo',
'city_id' => DB::table('cities')->where('name','Hueyapan de Ocampo')->first()->id
],

['name' => 'El Aguacate',
'city_id' => DB::table('cities')->where('name','Hueyapan de Ocampo')->first()->id
],

['name' => 'Hueyapan de Soconusco',
'city_id' => DB::table('cities')->where('name','Hueyapan de Ocampo')->first()->id
],

['name' => 'Campo la Palma',
'city_id' => DB::table('cities')->where('name','Hueyapan de Ocampo')->first()->id
],

['name' => 'Cerro de Castro',
'city_id' => DB::table('cities')->where('name','Hueyapan de Ocampo')->first()->id
],

['name' => 'Colonia Hermosa',
'city_id' => DB::table('cities')->where('name','Hueyapan de Ocampo')->first()->id
],

['name' => 'Ejido Horno de Cal',
'city_id' => DB::table('cities')->where('name','Hueyapan de Ocampo')->first()->id
],

['name' => 'Nacaxtlito',
'city_id' => DB::table('cities')->where('name','Hueyapan de Ocampo')->first()->id
],

['name' => 'Ozuluama',
'city_id' => DB::table('cities')->where('name','Hueyapan de Ocampo')->first()->id
],

['name' => 'Beto Zavalza',
'city_id' => DB::table('cities')->where('name','Hueyapan de Ocampo')->first()->id
],

['name' => 'El Mirador',
'city_id' => DB::table('cities')->where('name','Hueyapan de Ocampo')->first()->id
],

['name' => 'El Palmar',
'city_id' => DB::table('cities')->where('name','Hueyapan de Ocampo')->first()->id
],

['name' => 'Juan Jiménez',
'city_id' => DB::table('cities')->where('name','Hueyapan de Ocampo')->first()->id
],

['name' => 'Sierra de Agua',
'city_id' => DB::table('cities')->where('name','Hueyapan de Ocampo')->first()->id
],

['name' => 'Zapoapan de Amapan',
'city_id' => DB::table('cities')->where('name','Hueyapan de Ocampo')->first()->id
],

['name' => 'Santa Rosa Cintepec',
'city_id' => DB::table('cities')->where('name','Hueyapan de Ocampo')->first()->id
],

['name' => 'Loma de Oro',
'city_id' => DB::table('cities')->where('name','Hueyapan de Ocampo')->first()->id
],

['name' => 'El Chamizal',
'city_id' => DB::table('cities')->where('name','Hueyapan de Ocampo')->first()->id
],

['name' => 'La Esperanza',
'city_id' => DB::table('cities')->where('name','Hueyapan de Ocampo')->first()->id
],

['name' => 'La Gloria Hueitépetl',
'city_id' => DB::table('cities')->where('name','Hueyapan de Ocampo')->first()->id
],

['name' => 'La Nueva Esperanza',
'city_id' => DB::table('cities')->where('name','Hueyapan de Ocampo')->first()->id
],

['name' => 'Soncoavital',
'city_id' => DB::table('cities')->where('name','Hueyapan de Ocampo')->first()->id
],

['name' => 'Zanja del Perico',
'city_id' => DB::table('cities')->where('name','Hueyapan de Ocampo')->first()->id
],

['name' => 'Siete',
'city_id' => DB::table('cities')->where('name','Hueyapan de Ocampo')->first()->id
],

['name' => 'Cuatro',
'city_id' => DB::table('cities')->where('name','Hueyapan de Ocampo')->first()->id
],

['name' => 'Tres',
'city_id' => DB::table('cities')->where('name','Hueyapan de Ocampo')->first()->id
],

['name' => 'Uno',
'city_id' => DB::table('cities')->where('name','Hueyapan de Ocampo')->first()->id
],

['name' => 'Los Mangos',
'city_id' => DB::table('cities')->where('name','Hueyapan de Ocampo')->first()->id
],

['name' => 'Diez',
'city_id' => DB::table('cities')->where('name','Hueyapan de Ocampo')->first()->id
],

['name' => 'Barrosa',
'city_id' => DB::table('cities')->where('name','Hueyapan de Ocampo')->first()->id
],

['name' => 'El Fincalunia',
'city_id' => DB::table('cities')->where('name','Hueyapan de Ocampo')->first()->id
],

['name' => 'Paso del Gachupín',
'city_id' => DB::table('cities')->where('name','Hueyapan de Ocampo')->first()->id
],

['name' => 'Playa Iguana',
'city_id' => DB::table('cities')->where('name','Hueyapan de Ocampo')->first()->id
],

['name' => 'Santísima Trinidad [Monasterio]',
'city_id' => DB::table('cities')->where('name','Hueyapan de Ocampo')->first()->id
],

['name' => 'Hueyapan de Ocampo',
'city_id' => DB::table('cities')->where('name','Hueyapan de Ocampo')->first()->id
],

['name' => 'Dante Delgado Ranauro',
'city_id' => DB::table('cities')->where('name','Hueyapan de Ocampo')->first()->id
],

['name' => 'Dos Caños',
'city_id' => DB::table('cities')->where('name','Hueyapan de Ocampo')->first()->id
],

['name' => 'El Cerrito',
'city_id' => DB::table('cities')->where('name','Hueyapan de Ocampo')->first()->id
],

['name' => 'El Rincón',
'city_id' => DB::table('cities')->where('name','Hueyapan de Ocampo')->first()->id
],

['name' => 'Paso de la Carreta',
'city_id' => DB::table('cities')->where('name','Hueyapan de Ocampo')->first()->id
],

['name' => 'Unidad Deportiva',
'city_id' => DB::table('cities')->where('name','Hueyapan de Ocampo')->first()->id
],

['name' => '21 de Marzo',
'city_id' => DB::table('cities')->where('name','Hueyapan de Ocampo')->first()->id
],

['name' => 'Miguel Alemán',
'city_id' => DB::table('cities')->where('name','Hueyapan de Ocampo')->first()->id
],

['name' => 'Buenos Aires',
'city_id' => DB::table('cities')->where('name','Hueyapan de Ocampo')->first()->id
],

['name' => 'Coyolito',
'city_id' => DB::table('cities')->where('name','Hueyapan de Ocampo')->first()->id
],

['name' => 'Sabaneta',
'city_id' => DB::table('cities')->where('name','Hueyapan de Ocampo')->first()->id
],

['name' => 'Coyol de González',
'city_id' => DB::table('cities')->where('name','Hueyapan de Ocampo')->first()->id
],

['name' => 'Nacaxtle',
'city_id' => DB::table('cities')->where('name','Hueyapan de Ocampo')->first()->id
],

['name' => 'Ejido General Emiliano Zapata',
'city_id' => DB::table('cities')->where('name','Hueyapan de Ocampo')->first()->id
],

['name' => 'El Porvenir',
'city_id' => DB::table('cities')->where('name','Hueyapan de Ocampo')->first()->id
],

['name' => 'El Porvenir',
'city_id' => DB::table('cities')->where('name','Hueyapan de Ocampo')->first()->id
],

['name' => 'Emiliano Zapata',
'city_id' => DB::table('cities')->where('name','Hueyapan de Ocampo')->first()->id
],

['name' => 'Loma del Tigre',
'city_id' => DB::table('cities')->where('name','Hueyapan de Ocampo')->first()->id
],

['name' => 'Los Aguacates',
'city_id' => DB::table('cities')->where('name','Hueyapan de Ocampo')->first()->id
],

['name' => 'Palo Blanco',
'city_id' => DB::table('cities')->where('name','Hueyapan de Ocampo')->first()->id
],

['name' => 'El Balsón',
'city_id' => DB::table('cities')->where('name','Hueyapan de Ocampo')->first()->id
],

['name' => 'Finca de los Ríos',
'city_id' => DB::table('cities')->where('name','Hueyapan de Ocampo')->first()->id
],

['name' => 'Genaro Ríos',
'city_id' => DB::table('cities')->where('name','Hueyapan de Ocampo')->first()->id
],

['name' => 'Horno de Cal',
'city_id' => DB::table('cities')->where('name','Hueyapan de Ocampo')->first()->id
],

['name' => 'La Hormiga',
'city_id' => DB::table('cities')->where('name','Hueyapan de Ocampo')->first()->id
],

['name' => 'Loma del Gallo',
'city_id' => DB::table('cities')->where('name','Hueyapan de Ocampo')->first()->id
],

['name' => 'Mata de Caña',
'city_id' => DB::table('cities')->where('name','Hueyapan de Ocampo')->first()->id
],

['name' => 'Miguel Ángel Ríos Errasqui',
'city_id' => DB::table('cities')->where('name','Hueyapan de Ocampo')->first()->id
],

['name' => 'Santa Catarina de Jara',
'city_id' => DB::table('cities')->where('name','Hueyapan de Ocampo')->first()->id
],

['name' => 'Tierra Nueva',
'city_id' => DB::table('cities')->where('name','Hueyapan de Ocampo')->first()->id
],

['name' => 'Cinco de Febrero',
'city_id' => DB::table('cities')->where('name','Hueyapan de Ocampo')->first()->id
],

['name' => 'Cinco de Mayo',
'city_id' => DB::table('cities')->where('name','Hueyapan de Ocampo')->first()->id
],

['name' => 'Ejido Miguel Alemán',
'city_id' => DB::table('cities')->where('name','Hueyapan de Ocampo')->first()->id
],

['name' => 'Agustina Cruz Pascual',
'city_id' => DB::table('cities')->where('name','Hueyapan de Ocampo')->first()->id
],

['name' => 'Dos Hermanos',
'city_id' => DB::table('cities')->where('name','Hueyapan de Ocampo')->first()->id
],

['name' => 'Dos Reyes',
'city_id' => DB::table('cities')->where('name','Hueyapan de Ocampo')->first()->id
],

['name' => 'La Batalla',
'city_id' => DB::table('cities')->where('name','Hueyapan de Ocampo')->first()->id
],

['name' => 'Loma de la Palma',
'city_id' => DB::table('cities')->where('name','Hueyapan de Ocampo')->first()->id
],

['name' => 'Luis González García',
'city_id' => DB::table('cities')->where('name','Hueyapan de Ocampo')->first()->id
],

['name' => 'Paso del Mango',
'city_id' => DB::table('cities')->where('name','Hueyapan de Ocampo')->first()->id
],

['name' => '20 de Noviembre',
'city_id' => DB::table('cities')->where('name','Hueyapan de Ocampo')->first()->id
],

['name' => 'Santa Rosa Loma Larga',
'city_id' => DB::table('cities')->where('name','Hueyapan de Ocampo')->first()->id
],

['name' => 'El Burrero',
'city_id' => DB::table('cities')->where('name','Hueyapan de Ocampo')->first()->id
],

['name' => 'Rancho la Lagunita',
'city_id' => DB::table('cities')->where('name','Hueyapan de Ocampo')->first()->id
],

['name' => 'Rancho los Ocotes',
'city_id' => DB::table('cities')->where('name','Hueyapan de Ocampo')->first()->id
],

['name' => 'La Perla de Hueyapan',
'city_id' => DB::table('cities')->where('name','Hueyapan de Ocampo')->first()->id
],

['name' => 'La Nueva Esperanza',
'city_id' => DB::table('cities')->where('name','Hueyapan de Ocampo')->first()->id
],

['name' => 'Samaria',
'city_id' => DB::table('cities')->where('name','Hueyapan de Ocampo')->first()->id
],

['name' => 'Veinte de Noviembre',
'city_id' => DB::table('cities')->where('name','Hueyapan de Ocampo')->first()->id
],

['name' => 'Francisco I. Madero',
'city_id' => DB::table('cities')->where('name','Hueyapan de Ocampo')->first()->id
],

['name' => '6 de Enero',
'city_id' => DB::table('cities')->where('name','Catemaco')->first()->id
],

['name' => 'Agaltepec',
'city_id' => DB::table('cities')->where('name','Catemaco')->first()->id
],

['name' => 'Don Pedro',
'city_id' => DB::table('cities')->where('name','Catemaco')->first()->id
],

['name' => 'El Mirador',
'city_id' => DB::table('cities')->where('name','Catemaco')->first()->id
],

['name' => 'El Panteón',
'city_id' => DB::table('cities')->where('name','Catemaco')->first()->id
],

['name' => 'El Puente',
'city_id' => DB::table('cities')->where('name','Catemaco')->first()->id
],

['name' => 'El Rodeo',
'city_id' => DB::table('cities')->where('name','Catemaco')->first()->id
],

['name' => 'Rafael Hernández Ochoa',
'city_id' => DB::table('cities')->where('name','Catemaco')->first()->id
],

['name' => 'Granja',
'city_id' => DB::table('cities')->where('name','Catemaco')->first()->id
],

['name' => 'Lindavista',
'city_id' => DB::table('cities')->where('name','Catemaco')->first()->id
],

['name' => 'Nixtamalapa',
'city_id' => DB::table('cities')->where('name','Catemaco')->first()->id
],

['name' => 'San José',
'city_id' => DB::table('cities')->where('name','Catemaco')->first()->id
],

['name' => 'San Miguel',
'city_id' => DB::table('cities')->where('name','Catemaco')->first()->id
],

['name' => 'Villa Flores',
'city_id' => DB::table('cities')->where('name','Catemaco')->first()->id
],

['name' => 'Catemaco Centro',
'city_id' => DB::table('cities')->where('name','Catemaco')->first()->id
],

['name' => 'Los Sauces',
'city_id' => DB::table('cities')->where('name','Catemaco')->first()->id
],

['name' => 'Los Prados',
'city_id' => DB::table('cities')->where('name','Catemaco')->first()->id
],

['name' => 'Norte',
'city_id' => DB::table('cities')->where('name','Catemaco')->first()->id
],

['name' => 'Las Araucarias',
'city_id' => DB::table('cities')->where('name','Catemaco')->first()->id
],

['name' => 'Santa Rosa',
'city_id' => DB::table('cities')->where('name','Catemaco')->first()->id
],

['name' => 'Catemaco',
'city_id' => DB::table('cities')->where('name','Catemaco')->first()->id
],

['name' => 'El Carmen',
'city_id' => DB::table('cities')->where('name','Catemaco')->first()->id
],

['name' => 'Tío Julito',
'city_id' => DB::table('cities')->where('name','Catemaco')->first()->id
],

['name' => 'La Candelaria',
'city_id' => DB::table('cities')->where('name','Catemaco')->first()->id
],

['name' => 'Los Pinos',
'city_id' => DB::table('cities')->where('name','Catemaco')->first()->id
],

['name' => 'Tío Tin',
'city_id' => DB::table('cities')->where('name','Catemaco')->first()->id
],

['name' => 'Tepeyac',
'city_id' => DB::table('cities')->where('name','Catemaco')->first()->id
],

['name' => 'San Juan',
'city_id' => DB::table('cities')->where('name','Catemaco')->first()->id
],

['name' => 'Tepetapan',
'city_id' => DB::table('cities')->where('name','Catemaco')->first()->id
],

['name' => 'Prolongación Tepetapan',
'city_id' => DB::table('cities')->where('name','Catemaco')->first()->id
],

['name' => 'Tepetapan',
'city_id' => DB::table('cities')->where('name','Catemaco')->first()->id
],

['name' => 'Santa Rosa',
'city_id' => DB::table('cities')->where('name','Catemaco')->first()->id
],

['name' => 'Cerro Canseco',
'city_id' => DB::table('cities')->where('name','Catemaco')->first()->id
],

['name' => 'El Recuerdo',
'city_id' => DB::table('cities')->where('name','Catemaco')->first()->id
],

['name' => 'La Poza',
'city_id' => DB::table('cities')->where('name','Catemaco')->first()->id
],

['name' => 'Los Carriles',
'city_id' => DB::table('cities')->where('name','Catemaco')->first()->id
],

['name' => 'Tebanca',
'city_id' => DB::table('cities')->where('name','Catemaco')->first()->id
],

['name' => 'Temolapan',
'city_id' => DB::table('cities')->where('name','Catemaco')->first()->id
],

['name' => 'San Antonio',
'city_id' => DB::table('cities')->where('name','Catemaco')->first()->id
],

['name' => 'Matalcalcinta',
'city_id' => DB::table('cities')->where('name','Catemaco')->first()->id
],

['name' => 'Maxacapan',
'city_id' => DB::table('cities')->where('name','Catemaco')->first()->id
],

['name' => 'Miguel Hidalgo (El Apompal)',
'city_id' => DB::table('cities')->where('name','Catemaco')->first()->id
],

['name' => 'Ahuatepec',
'city_id' => DB::table('cities')->where('name','Catemaco')->first()->id
],

['name' => 'San Juan Seco de Valencia',
'city_id' => DB::table('cities')->where('name','Catemaco')->first()->id
],

['name' => 'San Antonio de Padua',
'city_id' => DB::table('cities')->where('name','Catemaco')->first()->id
],

['name' => 'San Juan Diego',
'city_id' => DB::table('cities')->where('name','Catemaco')->first()->id
],

['name' => 'La Victoria',
'city_id' => DB::table('cities')->where('name','Catemaco')->first()->id
],

['name' => 'Pozolapan (Cartagena)',
'city_id' => DB::table('cities')->where('name','Catemaco')->first()->id
],

['name' => 'La Providencia',
'city_id' => DB::table('cities')->where('name','Catemaco')->first()->id
],

['name' => 'Colonia el Águila',
'city_id' => DB::table('cities')->where('name','Catemaco')->first()->id
],

['name' => 'Zapoapan de Cabañas',
'city_id' => DB::table('cities')->where('name','Catemaco')->first()->id
],

['name' => 'La Candelaria',
'city_id' => DB::table('cities')->where('name','Catemaco')->first()->id
],

['name' => 'Bajos de Mimiahua',
'city_id' => DB::table('cities')->where('name','Catemaco')->first()->id
],

['name' => 'Benito Juárez',
'city_id' => DB::table('cities')->where('name','Catemaco')->first()->id
],

['name' => 'Dos Amates',
'city_id' => DB::table('cities')->where('name','Catemaco')->first()->id
],

['name' => 'Sontecomapan',
'city_id' => DB::table('cities')->where('name','Catemaco')->first()->id
],

['name' => 'Adalberto Tejeda',
'city_id' => DB::table('cities')->where('name','Catemaco')->first()->id
],

['name' => 'Península de Moreno',
'city_id' => DB::table('cities')->where('name','Catemaco')->first()->id
],

['name' => 'Coxcoapan',
'city_id' => DB::table('cities')->where('name','Catemaco')->first()->id
],

['name' => 'Calpultéolt (El Morro)',
'city_id' => DB::table('cities')->where('name','Catemaco')->first()->id
],

['name' => 'Coyame',
'city_id' => DB::table('cities')->where('name','Catemaco')->first()->id
],

['name' => 'Teotepec',
'city_id' => DB::table('cities')->where('name','Catemaco')->first()->id
],

['name' => 'Chichiguesa',
'city_id' => DB::table('cities')->where('name','Catemaco')->first()->id
],

['name' => 'Perla de San Martín',
'city_id' => DB::table('cities')->where('name','Catemaco')->first()->id
],

['name' => 'Mario Souza',
'city_id' => DB::table('cities')->where('name','Catemaco')->first()->id
],

['name' => 'Olotepec',
'city_id' => DB::table('cities')->where('name','Catemaco')->first()->id
],

['name' => 'Gustavo Díaz Ordaz',
'city_id' => DB::table('cities')->where('name','Catemaco')->first()->id
],

['name' => 'La Palma',
'city_id' => DB::table('cities')->where('name','Catemaco')->first()->id
],

['name' => 'Cinco',
'city_id' => DB::table('cities')->where('name','Soteapan')->first()->id
],

['name' => 'Seis',
'city_id' => DB::table('cities')->where('name','Soteapan')->first()->id
],

['name' => 'Morelos',
'city_id' => DB::table('cities')->where('name','Soteapan')->first()->id
],

['name' => 'Soteapan',
'city_id' => DB::table('cities')->where('name','Soteapan')->first()->id
],

['name' => 'El Tulín',
'city_id' => DB::table('cities')->where('name','Soteapan')->first()->id
],

['name' => 'El Platanillo',
'city_id' => DB::table('cities')->where('name','Soteapan')->first()->id
],

['name' => 'Huazuntlán [Planta Eléctrica]',
'city_id' => DB::table('cities')->where('name','Soteapan')->first()->id
],

['name' => 'Mazumiapan Chico',
'city_id' => DB::table('cities')->where('name','Soteapan')->first()->id
],

['name' => 'General Hilario C. Salas',
'city_id' => DB::table('cities')->where('name','Soteapan')->first()->id
],

['name' => 'Buena Vista',
'city_id' => DB::table('cities')->where('name','Soteapan')->first()->id
],

['name' => 'San Fernando',
'city_id' => DB::table('cities')->where('name','Soteapan')->first()->id
],

['name' => 'Ocozotepec',
'city_id' => DB::table('cities')->where('name','Soteapan')->first()->id
],

['name' => 'Benito Juárez',
'city_id' => DB::table('cities')->where('name','Soteapan')->first()->id
],

['name' => 'Pop-Sojnas',
'city_id' => DB::table('cities')->where('name','Soteapan')->first()->id
],

['name' => 'Las Palomas (Rutilo García)',
'city_id' => DB::table('cities')->where('name','Soteapan')->first()->id
],

['name' => 'San Martín',
'city_id' => DB::table('cities')->where('name','Soteapan')->first()->id
],

['name' => 'La Magdalena',
'city_id' => DB::table('cities')->where('name','Soteapan')->first()->id
],

['name' => 'Ocotal Chico',
'city_id' => DB::table('cities')->where('name','Soteapan')->first()->id
],

['name' => 'Ocotal Grande',
'city_id' => DB::table('cities')->where('name','Soteapan')->first()->id
],

['name' => 'Cuilonia',
'city_id' => DB::table('cities')->where('name','Soteapan')->first()->id
],

['name' => 'Cuilonia Nueva',
'city_id' => DB::table('cities')->where('name','Soteapan')->first()->id
],

['name' => 'Kilómetro Diez',
'city_id' => DB::table('cities')->where('name','Soteapan')->first()->id
],

['name' => 'Mirador Saltillo',
'city_id' => DB::table('cities')->where('name','Soteapan')->first()->id
],

['name' => 'Amamaloya',
'city_id' => DB::table('cities')->where('name','Soteapan')->first()->id
],

['name' => 'Cerro Colorado',
'city_id' => DB::table('cities')->where('name','Soteapan')->first()->id
],

['name' => 'La Estribera',
'city_id' => DB::table('cities')->where('name','Soteapan')->first()->id
],

['name' => 'Arrecifes',
'city_id' => DB::table('cities')->where('name','Mecayapan')->first()->id
],

['name' => 'Ixhuapan',
'city_id' => DB::table('cities')->where('name','Mecayapan')->first()->id
],

['name' => 'Mecayapan',
'city_id' => DB::table('cities')->where('name','Mecayapan')->first()->id
],

['name' => 'El Rubí',
'city_id' => DB::table('cities')->where('name','Mecayapan')->first()->id
],

['name' => 'San Andres Chamilpa',
'city_id' => DB::table('cities')->where('name','Mecayapan')->first()->id
],

['name' => 'Huazuntlán',
'city_id' => DB::table('cities')->where('name','Mecayapan')->first()->id
],

['name' => 'Yuribia',
'city_id' => DB::table('cities')->where('name','Mecayapan')->first()->id
],

['name' => 'Paraíso',
'city_id' => DB::table('cities')->where('name','Mecayapan')->first()->id
],

['name' => 'Encino Amarillo',
'city_id' => DB::table('cities')->where('name','Mecayapan')->first()->id
],

['name' => 'Vicente Guerrero',
'city_id' => DB::table('cities')->where('name','Mecayapan')->first()->id
],

['name' => 'El Paraíso (San Francisco)',
'city_id' => DB::table('cities')->where('name','Mecayapan')->first()->id
],

['name' => 'El Salado',
'city_id' => DB::table('cities')->where('name','Mecayapan')->first()->id
],

['name' => 'Cuarto',
'city_id' => DB::table('cities')->where('name','Tatahuicapan de Juárez')->first()->id
],

['name' => 'Primero',
'city_id' => DB::table('cities')->where('name','Tatahuicapan de Juárez')->first()->id
],

['name' => 'Segundo',
'city_id' => DB::table('cities')->where('name','Tatahuicapan de Juárez')->first()->id
],

['name' => 'Tercero',
'city_id' => DB::table('cities')->where('name','Tatahuicapan de Juárez')->first()->id
],

['name' => 'Benigno Mendoza',
'city_id' => DB::table('cities')->where('name','Tatahuicapan de Juárez')->first()->id
],

['name' => 'Tatahuicapan Centro',
'city_id' => DB::table('cities')->where('name','Tatahuicapan de Juárez')->first()->id
],

['name' => 'Ocotal Texizapan',
'city_id' => DB::table('cities')->where('name','Tatahuicapan de Juárez')->first()->id
],

['name' => 'El Vigía',
'city_id' => DB::table('cities')->where('name','Tatahuicapan de Juárez')->first()->id
],

['name' => 'Hipolito Landero',
'city_id' => DB::table('cities')->where('name','Tatahuicapan de Juárez')->first()->id
],

['name' => 'Magallanes',
'city_id' => DB::table('cities')->where('name','Tatahuicapan de Juárez')->first()->id
],

['name' => 'Santanón Rodríguez',
'city_id' => DB::table('cities')->where('name','Tatahuicapan de Juárez')->first()->id
],

['name' => 'Peña Hermosa',
'city_id' => DB::table('cities')->where('name','Tatahuicapan de Juárez')->first()->id
],

['name' => 'Guadalupe Victoria',
'city_id' => DB::table('cities')->where('name','Tatahuicapan de Juárez')->first()->id
],

['name' => 'Zapoapan',
'city_id' => DB::table('cities')->where('name','Tatahuicapan de Juárez')->first()->id
],

['name' => 'San Francisco (Agua Fría)',
'city_id' => DB::table('cities')->where('name','Tatahuicapan de Juárez')->first()->id
],

['name' => 'El Valor',
'city_id' => DB::table('cities')->where('name','Tatahuicapan de Juárez')->first()->id
],

['name' => 'Zapotitlán',
'city_id' => DB::table('cities')->where('name','Tatahuicapan de Juárez')->first()->id
],

['name' => 'Batajapán',
'city_id' => DB::table('cities')->where('name','Pajapan')->first()->id
],

['name' => 'Pajapan',
'city_id' => DB::table('cities')->where('name','Pajapan')->first()->id
],

['name' => 'San Juan Volador',
'city_id' => DB::table('cities')->where('name','Pajapan')->first()->id
],

['name' => 'Tecolapa',
'city_id' => DB::table('cities')->where('name','Pajapan')->first()->id
],

['name' => 'El Pescador (El Moral)',
'city_id' => DB::table('cities')->where('name','Pajapan')->first()->id
],

['name' => 'Jicacal',
'city_id' => DB::table('cities')->where('name','Pajapan')->first()->id
],

['name' => 'El Naranjal',
'city_id' => DB::table('cities')->where('name','Pajapan')->first()->id
],

['name' => 'Las Palomas',
'city_id' => DB::table('cities')->where('name','Pajapan')->first()->id
],

['name' => 'Minzapan',
'city_id' => DB::table('cities')->where('name','Pajapan')->first()->id
],

['name' => 'José María Morelos',
'city_id' => DB::table('cities')->where('name','Pajapan')->first()->id
],

['name' => 'Lorenzo Azua Torres',
'city_id' => DB::table('cities')->where('name','Pajapan')->first()->id
],

['name' => 'Lázaro Cárdenas del Río',
'city_id' => DB::table('cities')->where('name','Pajapan')->first()->id
],

['name' => 'La Victoria del Maíz (General Emiliano Zapata)',
'city_id' => DB::table('cities')->where('name','Pajapan')->first()->id
],

['name' => 'San Miguel Temoloapan',
'city_id' => DB::table('cities')->where('name','Pajapan')->first()->id
],

['name' => 'Chinameca',
'city_id' => DB::table('cities')->where('name','Chinameca')->first()->id
],

['name' => 'Nuevo',
'city_id' => DB::table('cities')->where('name','Chinameca')->first()->id
],

['name' => 'El Naranjal',
'city_id' => DB::table('cities')->where('name','Chinameca')->first()->id
],

['name' => 'La Ceiba',
'city_id' => DB::table('cities')->where('name','Chinameca')->first()->id
],

['name' => 'La Estación',
'city_id' => DB::table('cities')->where('name','Chinameca')->first()->id
],

['name' => 'Agua Fría',
'city_id' => DB::table('cities')->where('name','Chinameca')->first()->id
],

['name' => 'Los Cerritos',
'city_id' => DB::table('cities')->where('name','Chinameca')->first()->id
],

['name' => 'San Vicente',
'city_id' => DB::table('cities')->where('name','Chinameca')->first()->id
],

['name' => 'Barrio Deportivo',
'city_id' => DB::table('cities')->where('name','Chinameca')->first()->id
],

['name' => 'Chacalapa',
'city_id' => DB::table('cities')->where('name','Chinameca')->first()->id
],

['name' => 'Rancho Viejo',
'city_id' => DB::table('cities')->where('name','Chinameca')->first()->id
],

['name' => 'San José Tilapa',
'city_id' => DB::table('cities')->where('name','Chinameca')->first()->id
],

['name' => 'Acayucan Centro',
'city_id' => DB::table('cities')->where('name','Acayucan')->first()->id
],

['name' => 'Villas Acayucan',
'city_id' => DB::table('cities')->where('name','Acayucan')->first()->id
],

['name' => 'José María Morelos',
'city_id' => DB::table('cities')->where('name','Acayucan')->first()->id
],

['name' => 'Rincón del Bosque',
'city_id' => DB::table('cities')->where('name','Acayucan')->first()->id
],

['name' => 'La Joya',
'city_id' => DB::table('cities')->where('name','Acayucan')->first()->id
],

['name' => 'Las Arboledas',
'city_id' => DB::table('cities')->where('name','Acayucan')->first()->id
],

['name' => 'Fredepo',
'city_id' => DB::table('cities')->where('name','Acayucan')->first()->id
],

['name' => 'Francisco Villa',
'city_id' => DB::table('cities')->where('name','Acayucan')->first()->id
],

['name' => 'Lindavista',
'city_id' => DB::table('cities')->where('name','Acayucan')->first()->id
],

['name' => 'El Fénix',
'city_id' => DB::table('cities')->where('name','Acayucan')->first()->id
],

['name' => 'Villa Alta',
'city_id' => DB::table('cities')->where('name','Acayucan')->first()->id
],

['name' => 'Chichihua',
'city_id' => DB::table('cities')->where('name','Acayucan')->first()->id
],

['name' => 'Chichihua II',
'city_id' => DB::table('cities')->where('name','Acayucan')->first()->id
],

['name' => 'Vicente Lombardo Toledano',
'city_id' => DB::table('cities')->where('name','Acayucan')->first()->id
],

['name' => 'Santa Rosa',
'city_id' => DB::table('cities')->where('name','Acayucan')->first()->id
],

['name' => 'Malinche',
'city_id' => DB::table('cities')->where('name','Acayucan')->first()->id
],

['name' => 'La Palma',
'city_id' => DB::table('cities')->where('name','Acayucan')->first()->id
],

['name' => 'Miguel Alemán',
'city_id' => DB::table('cities')->where('name','Acayucan')->first()->id
],

['name' => 'Hilario C. Salas',
'city_id' => DB::table('cities')->where('name','Acayucan')->first()->id
],

['name' => 'Zapotal',
'city_id' => DB::table('cities')->where('name','Acayucan')->first()->id
],

['name' => 'Artículo 123',
'city_id' => DB::table('cities')->where('name','Acayucan')->first()->id
],

['name' => 'Progreso',
'city_id' => DB::table('cities')->where('name','Acayucan')->first()->id
],

['name' => 'Tamarindo',
'city_id' => DB::table('cities')->where('name','Acayucan')->first()->id
],

['name' => 'Benito Juárez',
'city_id' => DB::table('cities')->where('name','Acayucan')->first()->id
],

['name' => 'Ateopan',
'city_id' => DB::table('cities')->where('name','Acayucan')->first()->id
],

['name' => 'El Chancarrillo',
'city_id' => DB::table('cities')->where('name','Acayucan')->first()->id
],

['name' => 'Las Cruces',
'city_id' => DB::table('cities')->where('name','Acayucan')->first()->id
],

['name' => 'San Diego',
'city_id' => DB::table('cities')->where('name','Acayucan')->first()->id
],

['name' => 'La Palma',
'city_id' => DB::table('cities')->where('name','Acayucan')->first()->id
],

['name' => 'Taxistas',
'city_id' => DB::table('cities')->where('name','Acayucan')->first()->id
],

['name' => 'Salvador Allende',
'city_id' => DB::table('cities')->where('name','Acayucan')->first()->id
],

['name' => 'Emiliano Zapata',
'city_id' => DB::table('cities')->where('name','Acayucan')->first()->id
],

['name' => 'Magisterial',
'city_id' => DB::table('cities')->where('name','Acayucan')->first()->id
],

['name' => 'Tres Encinos',
'city_id' => DB::table('cities')->where('name','Acayucan')->first()->id
],

['name' => 'Ramones I',
'city_id' => DB::table('cities')->where('name','Acayucan')->first()->id
],

['name' => 'Lázaro Cárdenas',
'city_id' => DB::table('cities')->where('name','Acayucan')->first()->id
],

['name' => 'Ramones II',
'city_id' => DB::table('cities')->where('name','Acayucan')->first()->id
],

['name' => 'Revolución',
'city_id' => DB::table('cities')->where('name','Acayucan')->first()->id
],

['name' => 'Gutiérrez Barrios',
'city_id' => DB::table('cities')->where('name','Acayucan')->first()->id
],

['name' => 'Nuevo',
'city_id' => DB::table('cities')->where('name','Acayucan')->first()->id
],

['name' => 'Cruz Verde',
'city_id' => DB::table('cities')->where('name','Acayucan')->first()->id
],

['name' => 'Hidalgo',
'city_id' => DB::table('cities')->where('name','Acayucan')->first()->id
],

['name' => 'Michapan',
'city_id' => DB::table('cities')->where('name','Acayucan')->first()->id
],

['name' => 'Dehesa',
'city_id' => DB::table('cities')->where('name','Acayucan')->first()->id
],

['name' => 'Esperanza Malota',
'city_id' => DB::table('cities')->where('name','Acayucan')->first()->id
],

['name' => 'Ixhuapan',
'city_id' => DB::table('cities')->where('name','Acayucan')->first()->id
],

['name' => 'Michapan Paso Real',
'city_id' => DB::table('cities')->where('name','Acayucan')->first()->id
],

['name' => 'Quiamoloapan',
'city_id' => DB::table('cities')->where('name','Acayucan')->first()->id
],

['name' => 'San Ángel',
'city_id' => DB::table('cities')->where('name','Acayucan')->first()->id
],

['name' => 'Santa Rita Laurel',
'city_id' => DB::table('cities')->where('name','Acayucan')->first()->id
],

['name' => 'Campo de Águila',
'city_id' => DB::table('cities')->where('name','Acayucan')->first()->id
],

['name' => 'Cirilo Vázquez Lagunes',
'city_id' => DB::table('cities')->where('name','Acayucan')->first()->id
],

['name' => 'Nuevo Poblado Vista Hermosa',
'city_id' => DB::table('cities')->where('name','Acayucan')->first()->id
],

['name' => 'Tecuanapa',
'city_id' => DB::table('cities')->where('name','Acayucan')->first()->id
],

['name' => 'San Martín',
'city_id' => DB::table('cities')->where('name','Acayucan')->first()->id
],

['name' => 'Nuevo Quiamoloapan',
'city_id' => DB::table('cities')->where('name','Acayucan')->first()->id
],

['name' => 'Hidalgo',
'city_id' => DB::table('cities')->where('name','Acayucan')->first()->id
],

['name' => 'Emiliano Zapata',
'city_id' => DB::table('cities')->where('name','Acayucan')->first()->id
],

['name' => 'Monte Grande',
'city_id' => DB::table('cities')->where('name','Acayucan')->first()->id
],

['name' => 'Comején',
'city_id' => DB::table('cities')->where('name','Acayucan')->first()->id
],

['name' => 'La Bomba',
'city_id' => DB::table('cities')->where('name','Acayucan')->first()->id
],

['name' => 'Corral Nuevo',
'city_id' => DB::table('cities')->where('name','Acayucan')->first()->id
],

['name' => 'Cascajal del Río (Cascajalillo)',
'city_id' => DB::table('cities')->where('name','Acayucan')->first()->id
],

['name' => 'Aguapinole (Cuapinole)',
'city_id' => DB::table('cities')->where('name','Acayucan')->first()->id
],

['name' => 'Ixtagapa',
'city_id' => DB::table('cities')->where('name','Acayucan')->first()->id
],

['name' => 'Los Lagunes',
'city_id' => DB::table('cities')->where('name','Acayucan')->first()->id
],

['name' => 'Tierra Colorada',
'city_id' => DB::table('cities')->where('name','Acayucan')->first()->id
],

['name' => 'El Zapote',
'city_id' => DB::table('cities')->where('name','Acayucan')->first()->id
],

['name' => 'San Juan Evangelista Centro',
'city_id' => DB::table('cities')->where('name','San Juan Evangelista')->first()->id
],

['name' => 'Ampliación San Juan Evangelista',
'city_id' => DB::table('cities')->where('name','San Juan Evangelista')->first()->id
],

['name' => 'Sabaneta',
'city_id' => DB::table('cities')->where('name','San Juan Evangelista')->first()->id
],

['name' => 'Rancho Nuevo',
'city_id' => DB::table('cities')->where('name','San Juan Evangelista')->first()->id
],

['name' => 'Chapopoapán',
'city_id' => DB::table('cities')->where('name','San Juan Evangelista')->first()->id
],

['name' => 'Cascajal Grande',
'city_id' => DB::table('cities')->where('name','San Juan Evangelista')->first()->id
],

['name' => 'Cascajalito',
'city_id' => DB::table('cities')->where('name','San Juan Evangelista')->first()->id
],

['name' => 'Cartagena de Michapan',
'city_id' => DB::table('cities')->where('name','San Juan Evangelista')->first()->id
],

['name' => 'Vista Hermosa',
'city_id' => DB::table('cities')->where('name','San Juan Evangelista')->first()->id
],

['name' => 'Michapan de Osorio',
'city_id' => DB::table('cities')->where('name','San Juan Evangelista')->first()->id
],

['name' => 'La Fortuna',
'city_id' => DB::table('cities')->where('name','San Juan Evangelista')->first()->id
],

['name' => 'La Cerquilla',
'city_id' => DB::table('cities')->where('name','San Juan Evangelista')->first()->id
],

['name' => 'Aguacatillo',
'city_id' => DB::table('cities')->where('name','San Juan Evangelista')->first()->id
],

['name' => 'Miguel Alemán',
'city_id' => DB::table('cities')->where('name','San Juan Evangelista')->first()->id
],

['name' => 'Jalapilla',
'city_id' => DB::table('cities')->where('name','San Juan Evangelista')->first()->id
],

['name' => 'San Isidro',
'city_id' => DB::table('cities')->where('name','San Juan Evangelista')->first()->id
],

['name' => 'Hato Nuevo',
'city_id' => DB::table('cities')->where('name','San Juan Evangelista')->first()->id
],

['name' => 'Las Carolinas',
'city_id' => DB::table('cities')->where('name','San Juan Evangelista')->first()->id
],

['name' => 'Bajo las Palmas',
'city_id' => DB::table('cities')->where('name','San Juan Evangelista')->first()->id
],

['name' => 'La Lima',
'city_id' => DB::table('cities')->where('name','San Juan Evangelista')->first()->id
],

['name' => 'San Luis',
'city_id' => DB::table('cities')->where('name','San Juan Evangelista')->first()->id
],

['name' => 'Zacatal',
'city_id' => DB::table('cities')->where('name','San Juan Evangelista')->first()->id
],

['name' => 'Tizamar',
'city_id' => DB::table('cities')->where('name','San Juan Evangelista')->first()->id
],

['name' => 'Lázaro Cárdenas (El Saladero)',
'city_id' => DB::table('cities')->where('name','San Juan Evangelista')->first()->id
],

['name' => 'Achotal',
'city_id' => DB::table('cities')->where('name','San Juan Evangelista')->first()->id
],

['name' => 'Campo Nuevo',
'city_id' => DB::table('cities')->where('name','San Juan Evangelista')->first()->id
],

['name' => 'La Caudalosa',
'city_id' => DB::table('cities')->where('name','San Juan Evangelista')->first()->id
],

['name' => 'Cuauhtémoc',
'city_id' => DB::table('cities')->where('name','San Juan Evangelista')->first()->id
],

['name' => 'El Manantial',
'city_id' => DB::table('cities')->where('name','San Juan Evangelista')->first()->id
],

['name' => 'Mata de Caña',
'city_id' => DB::table('cities')->where('name','San Juan Evangelista')->first()->id
],

['name' => 'Quetzalapa (El Refugio)',
'city_id' => DB::table('cities')->where('name','San Juan Evangelista')->first()->id
],

['name' => 'Nuevo México',
'city_id' => DB::table('cities')->where('name','San Juan Evangelista')->first()->id
],

['name' => 'Unión Campo Nuevo',
'city_id' => DB::table('cities')->where('name','San Juan Evangelista')->first()->id
],

['name' => 'Guadalupe Victoria',
'city_id' => DB::table('cities')->where('name','San Juan Evangelista')->first()->id
],

['name' => 'Gral. Nicolás Bravo',
'city_id' => DB::table('cities')->where('name','San Juan Evangelista')->first()->id
],

['name' => 'Loma Bonita',
'city_id' => DB::table('cities')->where('name','San Juan Evangelista')->first()->id
],

['name' => 'Lázaro Cárdenas (La Gloria)',
'city_id' => DB::table('cities')->where('name','San Juan Evangelista')->first()->id
],

['name' => 'Francisco Villa',
'city_id' => DB::table('cities')->where('name','San Juan Evangelista')->first()->id
],

['name' => 'Benito Juárez',
'city_id' => DB::table('cities')->where('name','San Juan Evangelista')->first()->id
],

['name' => 'Nuevo Saltillo',
'city_id' => DB::table('cities')->where('name','San Juan Evangelista')->first()->id
],

['name' => 'Nuevo Paraíso',
'city_id' => DB::table('cities')->where('name','San Juan Evangelista')->first()->id
],

['name' => 'Monte Verde',
'city_id' => DB::table('cities')->where('name','San Juan Evangelista')->first()->id
],

['name' => 'Caobal',
'city_id' => DB::table('cities')->where('name','San Juan Evangelista')->first()->id
],

['name' => 'Villa Alta',
'city_id' => DB::table('cities')->where('name','San Juan Evangelista')->first()->id
],

['name' => 'Villa Guerrero',
'city_id' => DB::table('cities')->where('name','San Juan Evangelista')->first()->id
],

['name' => 'Villa Hermosa',
'city_id' => DB::table('cities')->where('name','San Juan Evangelista')->first()->id
],

['name' => 'Reforma Agraria',
'city_id' => DB::table('cities')->where('name','San Juan Evangelista')->first()->id
],

['name' => 'La Soledad',
'city_id' => DB::table('cities')->where('name','San Juan Evangelista')->first()->id
],

['name' => 'Francisci J. Moreno',
'city_id' => DB::table('cities')->where('name','San Juan Evangelista')->first()->id
],

['name' => 'Los Ángeles',
'city_id' => DB::table('cities')->where('name','San Juan Evangelista')->first()->id
],

['name' => 'El Cautivo',
'city_id' => DB::table('cities')->where('name','San Juan Evangelista')->first()->id
],

['name' => 'José María Pino Suárez',
'city_id' => DB::table('cities')->where('name','San Juan Evangelista')->first()->id
],

['name' => 'Juanita',
'city_id' => DB::table('cities')->where('name','San Juan Evangelista')->first()->id
],

['name' => 'Bellaco',
'city_id' => DB::table('cities')->where('name','San Juan Evangelista')->first()->id
],

['name' => 'Francisco I. Madero (Plan de la Gloria)',
'city_id' => DB::table('cities')->where('name','San Juan Evangelista')->first()->id
],

['name' => 'Emiliano Zapata',
'city_id' => DB::table('cities')->where('name','San Juan Evangelista')->first()->id
],

['name' => 'Francisco I. Madero (Plan de la Gloria)',
'city_id' => DB::table('cities')->where('name','San Juan Evangelista')->first()->id
],

['name' => 'San Felipe de Jesús',
'city_id' => DB::table('cities')->where('name','San Juan Evangelista')->first()->id
],

['name' => 'Poblado los Arco Iris',
'city_id' => DB::table('cities')->where('name','San Juan Evangelista')->first()->id
],

['name' => 'El Porvenir',
'city_id' => DB::table('cities')->where('name','San Juan Evangelista')->first()->id
],

['name' => 'Pozole',
'city_id' => DB::table('cities')->where('name','San Juan Evangelista')->first()->id
],

['name' => 'Nuevo Lázaro Cárdenas',
'city_id' => DB::table('cities')->where('name','San Juan Evangelista')->first()->id
],

['name' => 'San Pedro Tulapán',
'city_id' => DB::table('cities')->where('name','San Juan Evangelista')->first()->id
],

['name' => 'Nueva Esperanza',
'city_id' => DB::table('cities')->where('name','Sayula de Alemán')->first()->id
],

['name' => 'Comunal',
'city_id' => DB::table('cities')->where('name','Sayula de Alemán')->first()->id
],

['name' => 'Sayula de Alemán',
'city_id' => DB::table('cities')->where('name','Sayula de Alemán')->first()->id
],

['name' => 'Belem',
'city_id' => DB::table('cities')->where('name','Sayula de Alemán')->first()->id
],

['name' => 'Canapa',
'city_id' => DB::table('cities')->where('name','Sayula de Alemán')->first()->id
],

['name' => 'Pobre',
'city_id' => DB::table('cities')->where('name','Sayula de Alemán')->first()->id
],

['name' => 'Cruz del Milagro',
'city_id' => DB::table('cities')->where('name','Sayula de Alemán')->first()->id
],

['name' => 'Alfredo V. Bonfil',
'city_id' => DB::table('cities')->where('name','Sayula de Alemán')->first()->id
],

['name' => 'Almagres',
'city_id' => DB::table('cities')->where('name','Sayula de Alemán')->first()->id
],

['name' => 'El Jícaro',
'city_id' => DB::table('cities')->where('name','Sayula de Alemán')->first()->id
],

['name' => 'Aguilera',
'city_id' => DB::table('cities')->where('name','Sayula de Alemán')->first()->id
],

['name' => 'El Juile',
'city_id' => DB::table('cities')->where('name','Sayula de Alemán')->first()->id
],

['name' => 'Gelacia Ceballos Gómez (El Azufre)',
'city_id' => DB::table('cities')->where('name','Sayula de Alemán')->first()->id
],

['name' => 'General Miguel Alemán',
'city_id' => DB::table('cities')->where('name','Sayula de Alemán')->first()->id
],

['name' => 'San Isidro',
'city_id' => DB::table('cities')->where('name','Sayula de Alemán')->first()->id
],

['name' => 'Medias Aguas',
'city_id' => DB::table('cities')->where('name','Sayula de Alemán')->first()->id
],

['name' => 'Adolfo López Mateos',
'city_id' => DB::table('cities')->where('name','Sayula de Alemán')->first()->id
],

['name' => 'Lázaro Cárdenas (Adolfo Ruiz Cortines)',
'city_id' => DB::table('cities')->where('name','Sayula de Alemán')->first()->id
],

['name' => 'Macaya',
'city_id' => DB::table('cities')->where('name','Sayula de Alemán')->first()->id
],

['name' => 'Romero Rubio',
'city_id' => DB::table('cities')->where('name','Sayula de Alemán')->first()->id
],

['name' => 'Paraíso Naranjo',
'city_id' => DB::table('cities')->where('name','Sayula de Alemán')->first()->id
],

['name' => 'Palma Morena',
'city_id' => DB::table('cities')->where('name','Sayula de Alemán')->first()->id
],

['name' => 'El Progreso Mixe',
'city_id' => DB::table('cities')->where('name','Sayula de Alemán')->first()->id
],

['name' => 'San José del Palmar',
'city_id' => DB::table('cities')->where('name','Sayula de Alemán')->first()->id
],

['name' => 'Encanto Número Dos',
'city_id' => DB::table('cities')->where('name','Sayula de Alemán')->first()->id
],

['name' => 'Nuevo Centro de Población',
'city_id' => DB::table('cities')->where('name','Sayula de Alemán')->first()->id
],

['name' => 'El Alicante',
'city_id' => DB::table('cities')->where('name','Sayula de Alemán')->first()->id
],

['name' => 'Veintisiete de Septiembre',
'city_id' => DB::table('cities')->where('name','Sayula de Alemán')->first()->id
],

['name' => 'Olmeca',
'city_id' => DB::table('cities')->where('name','Oluta')->first()->id
],

['name' => 'Oluta',
'city_id' => DB::table('cities')->where('name','Oluta')->first()->id
],

['name' => 'Tenejapa',
'city_id' => DB::table('cities')->where('name','Oluta')->first()->id
],

['name' => 'Los Laureles',
'city_id' => DB::table('cities')->where('name','Oluta')->first()->id
],

['name' => 'Ojapa',
'city_id' => DB::table('cities')->where('name','Oluta')->first()->id
],

['name' => 'San Judas Tadeo',
'city_id' => DB::table('cities')->where('name','Oluta')->first()->id
],

['name' => 'Los Amigos [Granja Avícola]',
'city_id' => DB::table('cities')->where('name','Oluta')->first()->id
],

['name' => 'El Campero',
'city_id' => DB::table('cities')->where('name','Oluta')->first()->id
],

['name' => 'Correa',
'city_id' => DB::table('cities')->where('name','Oluta')->first()->id
],

['name' => 'Lealtad',
'city_id' => DB::table('cities')->where('name','Soconusco')->first()->id
],

['name' => 'Santa Ana',
'city_id' => DB::table('cities')->where('name','Soconusco')->first()->id
],

['name' => 'Soconusco',
'city_id' => DB::table('cities')->where('name','Soconusco')->first()->id
],

['name' => 'San Pedro y San Pablo',
'city_id' => DB::table('cities')->where('name','Soconusco')->first()->id
],

['name' => 'Chalcomulco',
'city_id' => DB::table('cities')->where('name','Soconusco')->first()->id
],

['name' => 'El Pedregal',
'city_id' => DB::table('cities')->where('name','Soconusco')->first()->id
],

['name' => 'Consogueapa',
'city_id' => DB::table('cities')->where('name','Soconusco')->first()->id
],

['name' => 'Santa Cruz',
'city_id' => DB::table('cities')->where('name','Soconusco')->first()->id
],

['name' => 'La Virgen',
'city_id' => DB::table('cities')->where('name','Soconusco')->first()->id
],

['name' => 'Benito Juárez',
'city_id' => DB::table('cities')->where('name','Soconusco')->first()->id
],

['name' => 'Palmarillo',
'city_id' => DB::table('cities')->where('name','Soconusco')->first()->id
],

['name' => 'La Cebadilla',
'city_id' => DB::table('cities')->where('name','Soconusco')->first()->id
],

['name' => 'Zacatal Uno (Centro Avícola)',
'city_id' => DB::table('cities')->where('name','Soconusco')->first()->id
],

['name' => 'Texistepec',
'city_id' => DB::table('cities')->where('name','Texistepec')->first()->id
],

['name' => 'Las Lomas',
'city_id' => DB::table('cities')->where('name','Texistepec')->first()->id
],

['name' => 'Encinal de Ojapa',
'city_id' => DB::table('cities')->where('name','Texistepec')->first()->id
],

['name' => 'Loma Central',
'city_id' => DB::table('cities')->where('name','Texistepec')->first()->id
],

['name' => 'Emiliano Zapata',
'city_id' => DB::table('cities')->where('name','Texistepec')->first()->id
],

['name' => 'Las Mesas',
'city_id' => DB::table('cities')->where('name','Texistepec')->first()->id
],

['name' => 'Las Camelias',
'city_id' => DB::table('cities')->where('name','Texistepec')->first()->id
],

['name' => 'La Cal',
'city_id' => DB::table('cities')->where('name','Texistepec')->first()->id
],

['name' => 'Francisco I Madero',
'city_id' => DB::table('cities')->where('name','Texistepec')->first()->id
],

['name' => 'Colombia',
'city_id' => DB::table('cities')->where('name','Texistepec')->first()->id
],

['name' => 'Buenavista (El Corpal)',
'city_id' => DB::table('cities')->where('name','Texistepec')->first()->id
],

['name' => 'Loma Bonita',
'city_id' => DB::table('cities')->where('name','Texistepec')->first()->id
],

['name' => 'Zacatal',
'city_id' => DB::table('cities')->where('name','Texistepec')->first()->id
],

['name' => 'José María Pino Suárez',
'city_id' => DB::table('cities')->where('name','Texistepec')->first()->id
],

['name' => 'Predio la Alegría',
'city_id' => DB::table('cities')->where('name','Texistepec')->first()->id
],

['name' => 'San Lorenzo Potrero Nuevo',
'city_id' => DB::table('cities')->where('name','Texistepec')->first()->id
],

['name' => 'San Lorenzo Tenochtitlán',
'city_id' => DB::table('cities')->where('name','Texistepec')->first()->id
],

['name' => 'Peña Blanca',
'city_id' => DB::table('cities')->where('name','Texistepec')->first()->id
],

['name' => 'Lázaro Cárdenas',
'city_id' => DB::table('cities')->where('name','Texistepec')->first()->id
],

['name' => 'Guadalupe Victoria',
'city_id' => DB::table('cities')->where('name','Texistepec')->first()->id
],

['name' => 'Yatepec',
'city_id' => DB::table('cities')->where('name','Texistepec')->first()->id
],

['name' => 'Villa Alta',
'city_id' => DB::table('cities')->where('name','Texistepec')->first()->id
],

['name' => 'Jaltipan de Morelos Centro',
'city_id' => DB::table('cities')->where('name','Jáltipan')->first()->id
],

['name' => 'Ferrocarrilera',
'city_id' => DB::table('cities')->where('name','Jáltipan')->first()->id
],

['name' => 'Santa Isabel',
'city_id' => DB::table('cities')->where('name','Jáltipan')->first()->id
],

['name' => 'Ferrocarrilera Norte',
'city_id' => DB::table('cities')->where('name','Jáltipan')->first()->id
],

['name' => 'Las Tinas',
'city_id' => DB::table('cities')->where('name','Jáltipan')->first()->id
],

['name' => 'Los 7 Pozos',
'city_id' => DB::table('cities')->where('name','Jáltipan')->first()->id
],

['name' => 'Obrera',
'city_id' => DB::table('cities')->where('name','Jáltipan')->first()->id
],

['name' => 'Oloxochita',
'city_id' => DB::table('cities')->where('name','Jáltipan')->first()->id
],

['name' => 'Cardenista',
'city_id' => DB::table('cities')->where('name','Jáltipan')->first()->id
],

['name' => 'Las Conchitas',
'city_id' => DB::table('cities')->where('name','Jáltipan')->first()->id
],

['name' => 'Doctores',
'city_id' => DB::table('cities')->where('name','Jáltipan')->first()->id
],

['name' => 'El Mirador',
'city_id' => DB::table('cities')->where('name','Jáltipan')->first()->id
],

['name' => 'San Cristóbal',
'city_id' => DB::table('cities')->where('name','Jáltipan')->first()->id
],

['name' => 'San Miguel',
'city_id' => DB::table('cities')->where('name','Jáltipan')->first()->id
],

['name' => 'Héroes Mexicanos',
'city_id' => DB::table('cities')->where('name','Jáltipan')->first()->id
],

['name' => 'Murillo Vidal',
'city_id' => DB::table('cities')->where('name','Jáltipan')->first()->id
],

['name' => 'Benemérito de las Américas',
'city_id' => DB::table('cities')->where('name','Jáltipan')->first()->id
],

['name' => 'El Manantial',
'city_id' => DB::table('cities')->where('name','Jáltipan')->first()->id
],

['name' => 'Las Flores',
'city_id' => DB::table('cities')->where('name','Jáltipan')->first()->id
],

['name' => 'Miguel Alemán',
'city_id' => DB::table('cities')->where('name','Jáltipan')->first()->id
],

['name' => 'Primero de Mayo',
'city_id' => DB::table('cities')->where('name','Jáltipan')->first()->id
],

['name' => 'Xochitanapa',
'city_id' => DB::table('cities')->where('name','Jáltipan')->first()->id
],

['name' => 'Adolfo López Mateos',
'city_id' => DB::table('cities')->where('name','Jáltipan')->first()->id
],

['name' => 'Deportiva',
'city_id' => DB::table('cities')->where('name','Jáltipan')->first()->id
],

['name' => 'Deportiva Este',
'city_id' => DB::table('cities')->where('name','Jáltipan')->first()->id
],

['name' => 'Ampliación Murillo Vidal',
'city_id' => DB::table('cities')->where('name','Jáltipan')->first()->id
],

['name' => 'Fernando López Arias (El Chorrito)',
'city_id' => DB::table('cities')->where('name','Jáltipan')->first()->id
],

['name' => 'Agraria',
'city_id' => DB::table('cities')->where('name','Jáltipan')->first()->id
],

['name' => 'Emiliano Zapata Salazar',
'city_id' => DB::table('cities')->where('name','Jáltipan')->first()->id
],

['name' => 'El Chorrito',
'city_id' => DB::table('cities')->where('name','Jáltipan')->first()->id
],

['name' => 'Niños Héroes',
'city_id' => DB::table('cities')->where('name','Jáltipan')->first()->id
],

['name' => 'Los Tulipanes',
'city_id' => DB::table('cities')->where('name','Jáltipan')->first()->id
],

['name' => 'Alberto Sánchez',
'city_id' => DB::table('cities')->where('name','Jáltipan')->first()->id
],

['name' => 'Camino a Conchiniapa',
'city_id' => DB::table('cities')->where('name','Jáltipan')->first()->id
],

['name' => 'Fidel Herrera',
'city_id' => DB::table('cities')->where('name','Jáltipan')->first()->id
],

['name' => 'Dos Porvenir',
'city_id' => DB::table('cities')->where('name','Jáltipan')->first()->id
],

['name' => 'El Basurero',
'city_id' => DB::table('cities')->where('name','Jáltipan')->first()->id
],

['name' => 'El Betel',
'city_id' => DB::table('cities')->where('name','Jáltipan')->first()->id
],

['name' => 'El Chorrito',
'city_id' => DB::table('cities')->where('name','Jáltipan')->first()->id
],

['name' => 'El Grillo Tres',
'city_id' => DB::table('cities')->where('name','Jáltipan')->first()->id
],

['name' => 'El Mango (Sabas Lemarroy)',
'city_id' => DB::table('cities')->where('name','Jáltipan')->first()->id
],

['name' => 'El Piñal',
'city_id' => DB::table('cities')->where('name','Jáltipan')->first()->id
],

['name' => 'El Recreo',
'city_id' => DB::table('cities')->where('name','Jáltipan')->first()->id
],

['name' => 'El Regalo',
'city_id' => DB::table('cities')->where('name','Jáltipan')->first()->id
],

['name' => 'Finca el Arenal',
'city_id' => DB::table('cities')->where('name','Jáltipan')->first()->id
],

['name' => 'Finca Melina',
'city_id' => DB::table('cities')->where('name','Jáltipan')->first()->id
],

['name' => 'Gabriela Durán Florente',
'city_id' => DB::table('cities')->where('name','Jáltipan')->first()->id
],

['name' => 'Gerónimo Torres de la Cruz',
'city_id' => DB::table('cities')->where('name','Jáltipan')->first()->id
],

['name' => 'Inés Rodríguez',
'city_id' => DB::table('cities')->where('name','Jáltipan')->first()->id
],

['name' => 'Isabel',
'city_id' => DB::table('cities')->where('name','Jáltipan')->first()->id
],

['name' => 'Jorge Pérez Torres',
'city_id' => DB::table('cities')->where('name','Jáltipan')->first()->id
],

['name' => 'Julián Escribano Dionicio',
'city_id' => DB::table('cities')->where('name','Jáltipan')->first()->id
],

['name' => 'La Esperanza',
'city_id' => DB::table('cities')->where('name','Jáltipan')->first()->id
],

['name' => 'La Guadalupe',
'city_id' => DB::table('cities')->where('name','Jáltipan')->first()->id
],

['name' => 'La Joya',
'city_id' => DB::table('cities')->where('name','Jáltipan')->first()->id
],

['name' => 'La Noria',
'city_id' => DB::table('cities')->where('name','Jáltipan')->first()->id
],

['name' => 'La Sabana',
'city_id' => DB::table('cities')->where('name','Jáltipan')->first()->id
],

['name' => 'La Victoria',
'city_id' => DB::table('cities')->where('name','Jáltipan')->first()->id
],

['name' => 'Largavista',
'city_id' => DB::table('cities')->where('name','Jáltipan')->first()->id
],

['name' => 'Leonardo Lara García',
'city_id' => DB::table('cities')->where('name','Jáltipan')->first()->id
],

['name' => 'Los Framboyanes',
'city_id' => DB::table('cities')->where('name','Jáltipan')->first()->id
],

['name' => 'Los Reyes',
'city_id' => DB::table('cities')->where('name','Jáltipan')->first()->id
],

['name' => 'Mi Ranchito',
'city_id' => DB::table('cities')->where('name','Jáltipan')->first()->id
],

['name' => 'Mi Ranchito',
'city_id' => DB::table('cities')->where('name','Jáltipan')->first()->id
],

['name' => 'Primero de Mayo',
'city_id' => DB::table('cities')->where('name','Jáltipan')->first()->id
],

['name' => 'Quinta los Sauces',
'city_id' => DB::table('cities')->where('name','Jáltipan')->first()->id
],

['name' => 'Rafael Domínguez Gómez',
'city_id' => DB::table('cities')->where('name','Jáltipan')->first()->id
],

['name' => 'Rancho del Carmen',
'city_id' => DB::table('cities')->where('name','Jáltipan')->first()->id
],

['name' => 'San Fernando',
'city_id' => DB::table('cities')->where('name','Jáltipan')->first()->id
],

['name' => 'San Jorge',
'city_id' => DB::table('cities')->where('name','Jáltipan')->first()->id
],

['name' => 'San Lorenzo',
'city_id' => DB::table('cities')->where('name','Jáltipan')->first()->id
],

['name' => 'San Lorenzo',
'city_id' => DB::table('cities')->where('name','Jáltipan')->first()->id
],

['name' => 'San Pedro',
'city_id' => DB::table('cities')->where('name','Jáltipan')->first()->id
],

['name' => 'San Rafael Dos [Granja]',
'city_id' => DB::table('cities')->where('name','Jáltipan')->first()->id
],

['name' => 'San Rafael Tres [Granja]',
'city_id' => DB::table('cities')->where('name','Jáltipan')->first()->id
],

['name' => 'Santa Rosa',
'city_id' => DB::table('cities')->where('name','Jáltipan')->first()->id
],

['name' => 'Boca de Mozapan',
'city_id' => DB::table('cities')->where('name','Jáltipan')->first()->id
],

['name' => 'Boquiapan',
'city_id' => DB::table('cities')->where('name','Jáltipan')->first()->id
],

['name' => 'Brisa del Río',
'city_id' => DB::table('cities')->where('name','Jáltipan')->first()->id
],

['name' => 'Casas Viejas',
'city_id' => DB::table('cities')->where('name','Jáltipan')->first()->id
],

['name' => 'Diego Zúñiga',
'city_id' => DB::table('cities')->where('name','Jáltipan')->first()->id
],

['name' => 'El Girasol',
'city_id' => DB::table('cities')->where('name','Jáltipan')->first()->id
],

['name' => 'Genaro de la O. Hernández',
'city_id' => DB::table('cities')->where('name','Jáltipan')->first()->id
],

['name' => 'La Ciénega',
'city_id' => DB::table('cities')->where('name','Jáltipan')->first()->id
],

['name' => 'La Escollera',
'city_id' => DB::table('cities')->where('name','Jáltipan')->first()->id
],

['name' => 'La Esperanza',
'city_id' => DB::table('cities')->where('name','Jáltipan')->first()->id
],

['name' => 'La Estación',
'city_id' => DB::table('cities')->where('name','Jáltipan')->first()->id
],

['name' => 'Paso de Boquiapan',
'city_id' => DB::table('cities')->where('name','Jáltipan')->first()->id
],

['name' => 'San Silvestre',
'city_id' => DB::table('cities')->where('name','Jáltipan')->first()->id
],

['name' => 'El Arenal',
'city_id' => DB::table('cities')->where('name','Jáltipan')->first()->id
],

['name' => 'El Cedro',
'city_id' => DB::table('cities')->where('name','Jáltipan')->first()->id
],

['name' => 'El Chileancho',
'city_id' => DB::table('cities')->where('name','Jáltipan')->first()->id
],

['name' => 'El Norteño',
'city_id' => DB::table('cities')->where('name','Jáltipan')->first()->id
],

['name' => 'El Vergel',
'city_id' => DB::table('cities')->where('name','Jáltipan')->first()->id
],

['name' => 'La Horqueta',
'city_id' => DB::table('cities')->where('name','Jáltipan')->first()->id
],

['name' => 'La Puerta',
'city_id' => DB::table('cities')->where('name','Jáltipan')->first()->id
],

['name' => 'Los Capulines',
'city_id' => DB::table('cities')->where('name','Jáltipan')->first()->id
],

['name' => 'Ana María Lemarroy Ventura',
'city_id' => DB::table('cities')->where('name','Jáltipan')->first()->id
],

['name' => 'Chiquipixta',
'city_id' => DB::table('cities')->where('name','Jáltipan')->first()->id
],

['name' => 'El Chico',
'city_id' => DB::table('cities')->where('name','Jáltipan')->first()->id
],

['name' => 'El Frutal',
'city_id' => DB::table('cities')->where('name','Jáltipan')->first()->id
],

['name' => 'El Kilómetro Cuarenta y Seis (Rancho Uriel)',
'city_id' => DB::table('cities')->where('name','Jáltipan')->first()->id
],

['name' => 'El Naranjito',
'city_id' => DB::table('cities')->where('name','Jáltipan')->first()->id
],

['name' => 'El Plan Apepecho',
'city_id' => DB::table('cities')->where('name','Jáltipan')->first()->id
],

['name' => 'El Progreso',
'city_id' => DB::table('cities')->where('name','Jáltipan')->first()->id
],

['name' => 'El Ranchito',
'city_id' => DB::table('cities')->where('name','Jáltipan')->first()->id
],

['name' => 'Gerónimo Francisco',
'city_id' => DB::table('cities')->where('name','Jáltipan')->first()->id
],

['name' => 'Kilómetro Cincuenta',
'city_id' => DB::table('cities')->where('name','Jáltipan')->first()->id
],

['name' => 'Kilómetro Cuarenta y Nueve',
'city_id' => DB::table('cities')->where('name','Jáltipan')->first()->id
],

['name' => 'La Curva (Alajuela)',
'city_id' => DB::table('cities')->where('name','Jáltipan')->first()->id
],

['name' => 'La Esperanza (Kilómetro 51)',
'city_id' => DB::table('cities')->where('name','Jáltipan')->first()->id
],

['name' => 'La Gloria',
'city_id' => DB::table('cities')->where('name','Jáltipan')->first()->id
],

['name' => 'La Reata',
'city_id' => DB::table('cities')->where('name','Jáltipan')->first()->id
],

['name' => 'Los Pinos',
'city_id' => DB::table('cities')->where('name','Jáltipan')->first()->id
],

['name' => 'Los Robles',
'city_id' => DB::table('cities')->where('name','Jáltipan')->first()->id
],

['name' => 'Oscar Villarreal',
'city_id' => DB::table('cities')->where('name','Jáltipan')->first()->id
],

['name' => 'Petapa',
'city_id' => DB::table('cities')->where('name','Jáltipan')->first()->id
],

['name' => 'Pérez',
'city_id' => DB::table('cities')->where('name','Jáltipan')->first()->id
],

['name' => 'Rancho Chico',
'city_id' => DB::table('cities')->where('name','Jáltipan')->first()->id
],

['name' => 'San Cirilo',
'city_id' => DB::table('cities')->where('name','Jáltipan')->first()->id
],

['name' => 'San Juan',
'city_id' => DB::table('cities')->where('name','Jáltipan')->first()->id
],

['name' => 'Zoila Martínez',
'city_id' => DB::table('cities')->where('name','Jáltipan')->first()->id
],

['name' => 'Juan de la Barrera',
'city_id' => DB::table('cities')->where('name','Jáltipan')->first()->id
],

['name' => 'Acapulco',
'city_id' => DB::table('cities')->where('name','Jáltipan')->first()->id
],

['name' => 'Anáhuac',
'city_id' => DB::table('cities')->where('name','Jáltipan')->first()->id
],

['name' => 'Chacalapa',
'city_id' => DB::table('cities')->where('name','Jáltipan')->first()->id
],

['name' => 'El Aguacate',
'city_id' => DB::table('cities')->where('name','Jáltipan')->first()->id
],

['name' => 'El Doscientos Cuarenta',
'city_id' => DB::table('cities')->where('name','Jáltipan')->first()->id
],

['name' => 'El Manguito',
'city_id' => DB::table('cities')->where('name','Jáltipan')->first()->id
],

['name' => 'El Negro',
'city_id' => DB::table('cities')->where('name','Jáltipan')->first()->id
],

['name' => 'El Pijul',
'city_id' => DB::table('cities')->where('name','Jáltipan')->first()->id
],

['name' => 'Emiliano Zapata',
'city_id' => DB::table('cities')->where('name','Jáltipan')->first()->id
],

['name' => 'Emiliano Zapata Salazar',
'city_id' => DB::table('cities')->where('name','Jáltipan')->first()->id
],

['name' => 'Isabel Ortiz Sánchez',
'city_id' => DB::table('cities')->where('name','Jáltipan')->first()->id
],

['name' => 'José Luis Aguilar',
'city_id' => DB::table('cities')->where('name','Jáltipan')->first()->id
],

['name' => 'Juan Reyes',
'city_id' => DB::table('cities')->where('name','Jáltipan')->first()->id
],

['name' => 'Juan Rosario Ruiz',
'city_id' => DB::table('cities')->where('name','Jáltipan')->first()->id
],

['name' => 'La Virgen',
'city_id' => DB::table('cities')->where('name','Jáltipan')->first()->id
],

['name' => 'Las Bugambilias',
'city_id' => DB::table('cities')->where('name','Jáltipan')->first()->id
],

['name' => 'Los Primos',
'city_id' => DB::table('cities')->where('name','Jáltipan')->first()->id
],

['name' => 'Los Rosarios',
'city_id' => DB::table('cities')->where('name','Jáltipan')->first()->id
],

['name' => 'Lote Veintiuno',
'city_id' => DB::table('cities')->where('name','Jáltipan')->first()->id
],

['name' => 'Luisa Hernández Gerónimo',
'city_id' => DB::table('cities')->where('name','Jáltipan')->first()->id
],

['name' => 'Mafia',
'city_id' => DB::table('cities')->where('name','Jáltipan')->first()->id
],

['name' => 'Miguel Gómez',
'city_id' => DB::table('cities')->where('name','Jáltipan')->first()->id
],

['name' => 'Oscar Luna',
'city_id' => DB::table('cities')->where('name','Jáltipan')->first()->id
],

['name' => 'Poblado Cocuital',
'city_id' => DB::table('cities')->where('name','Jáltipan')->first()->id
],

['name' => 'Providencia',
'city_id' => DB::table('cities')->where('name','Jáltipan')->first()->id
],

['name' => 'Raúl Corona',
'city_id' => DB::table('cities')->where('name','Jáltipan')->first()->id
],

['name' => 'San Andrés',
'city_id' => DB::table('cities')->where('name','Jáltipan')->first()->id
],

['name' => 'San Pedro',
'city_id' => DB::table('cities')->where('name','Jáltipan')->first()->id
],

['name' => 'Santa Elena',
'city_id' => DB::table('cities')->where('name','Jáltipan')->first()->id
],

['name' => 'Tierra Blanca',
'city_id' => DB::table('cities')->where('name','Jáltipan')->first()->id
],

['name' => 'Unimisur',
'city_id' => DB::table('cities')->where('name','Jáltipan')->first()->id
],

['name' => 'Xochitanapa',
'city_id' => DB::table('cities')->where('name','Jáltipan')->first()->id
],

['name' => 'Chinameca [Granja]',
'city_id' => DB::table('cities')->where('name','Jáltipan')->first()->id
],

['name' => 'El Conde',
'city_id' => DB::table('cities')->where('name','Jáltipan')->first()->id
],

['name' => 'El Malacate',
'city_id' => DB::table('cities')->where('name','Jáltipan')->first()->id
],

['name' => 'El Potrerillo',
'city_id' => DB::table('cities')->where('name','Jáltipan')->first()->id
],

['name' => 'El Sarazil',
'city_id' => DB::table('cities')->where('name','Jáltipan')->first()->id
],

['name' => 'Eleuterio Gómez Fernández',
'city_id' => DB::table('cities')->where('name','Jáltipan')->first()->id
],

['name' => 'Finca la Malinche',
'city_id' => DB::table('cities')->where('name','Jáltipan')->first()->id
],

['name' => 'La Jaiba',
'city_id' => DB::table('cities')->where('name','Jáltipan')->first()->id
],

['name' => 'Las Tinajas',
'city_id' => DB::table('cities')->where('name','Jáltipan')->first()->id
],

['name' => 'Las Torres',
'city_id' => DB::table('cities')->where('name','Jáltipan')->first()->id
],

['name' => 'Los Encinos (El Sarasil)',
'city_id' => DB::table('cities')->where('name','Jáltipan')->first()->id
],

['name' => 'Molina',
'city_id' => DB::table('cities')->where('name','Jáltipan')->first()->id
],

['name' => 'Patricia Isabel (El Petrolero)',
'city_id' => DB::table('cities')->where('name','Jáltipan')->first()->id
],

['name' => 'Potrerillo',
'city_id' => DB::table('cities')->where('name','Jáltipan')->first()->id
],

['name' => 'Remonta',
'city_id' => DB::table('cities')->where('name','Jáltipan')->first()->id
],

['name' => 'San Judas Tadeo',
'city_id' => DB::table('cities')->where('name','Jáltipan')->first()->id
],

['name' => 'Santiago Braido Rodríguez',
'city_id' => DB::table('cities')->where('name','Jáltipan')->first()->id
],

['name' => 'Sub-Estación de Bombeo [PEMEX]',
'city_id' => DB::table('cities')->where('name','Jáltipan')->first()->id
],

['name' => 'Ahuatepec',
'city_id' => DB::table('cities')->where('name','Jáltipan')->first()->id
],

['name' => 'Ayotota',
'city_id' => DB::table('cities')->where('name','Jáltipan')->first()->id
],

['name' => 'Buenavista de la Asunción',
'city_id' => DB::table('cities')->where('name','Jáltipan')->first()->id
],

['name' => 'El Mangal',
'city_id' => DB::table('cities')->where('name','Jáltipan')->first()->id
],

['name' => 'El Palmar',
'city_id' => DB::table('cities')->where('name','Jáltipan')->first()->id
],

['name' => 'Finca la Esperanza',
'city_id' => DB::table('cities')->where('name','Jáltipan')->first()->id
],

['name' => 'Hermanos Soto',
'city_id' => DB::table('cities')->where('name','Jáltipan')->first()->id
],

['name' => 'Los Naranjos (El Apompal)',
'city_id' => DB::table('cities')->where('name','Jáltipan')->first()->id
],

['name' => 'Mata de Palma',
'city_id' => DB::table('cities')->where('name','Jáltipan')->first()->id
],

['name' => 'Vista Hermosa',
'city_id' => DB::table('cities')->where('name','Jáltipan')->first()->id
],

['name' => 'Arroyo Blanco',
'city_id' => DB::table('cities')->where('name','Jáltipan')->first()->id
],

['name' => 'Los Martínez',
'city_id' => DB::table('cities')->where('name','Jáltipan')->first()->id
],

['name' => 'El Mirador',
'city_id' => DB::table('cities')->where('name','Jáltipan')->first()->id
],

['name' => 'La Gloria',
'city_id' => DB::table('cities')->where('name','Jáltipan')->first()->id
],

['name' => 'Malota',
'city_id' => DB::table('cities')->where('name','Jáltipan')->first()->id
],

['name' => 'Mixtán',
'city_id' => DB::table('cities')->where('name','Jáltipan')->first()->id
],

['name' => 'San Rafael',
'city_id' => DB::table('cities')->where('name','Jáltipan')->first()->id
],

['name' => 'San Soles',
'city_id' => DB::table('cities')->where('name','Jáltipan')->first()->id
],

['name' => 'Crispín Primo Blanco',
'city_id' => DB::table('cities')->where('name','Jáltipan')->first()->id
],

['name' => 'El Nueve',
'city_id' => DB::table('cities')->where('name','Jáltipan')->first()->id
],

['name' => 'Ixpuchapan',
'city_id' => DB::table('cities')->where('name','Jáltipan')->first()->id
],

['name' => 'La Esperanza',
'city_id' => DB::table('cities')->where('name','Jáltipan')->first()->id
],

['name' => 'La Gimba',
'city_id' => DB::table('cities')->where('name','Jáltipan')->first()->id
],

['name' => 'Miguel Rivera Muñoz',
'city_id' => DB::table('cities')->where('name','Jáltipan')->first()->id
],

['name' => 'Rancho Gutiérrez',
'city_id' => DB::table('cities')->where('name','Jáltipan')->first()->id
],

['name' => 'Sabaneta',
'city_id' => DB::table('cities')->where('name','Jáltipan')->first()->id
],

['name' => 'Vicente Dionisio Rosas',
'city_id' => DB::table('cities')->where('name','Jáltipan')->first()->id
],

['name' => 'Las Cañas',
'city_id' => DB::table('cities')->where('name','Jáltipan')->first()->id
],

['name' => 'Mata de Caña',
'city_id' => DB::table('cities')->where('name','Jáltipan')->first()->id
],

['name' => 'Tecolapa',
'city_id' => DB::table('cities')->where('name','Jáltipan')->first()->id
],

['name' => 'Tres Sitios (Tecolapa)',
'city_id' => DB::table('cities')->where('name','Jáltipan')->first()->id
],

['name' => 'Vargas (Tecolapa)',
'city_id' => DB::table('cities')->where('name','Jáltipan')->first()->id
],

['name' => 'Yancuigapan',
'city_id' => DB::table('cities')->where('name','Jáltipan')->first()->id
],

['name' => 'Las Galeras',
'city_id' => DB::table('cities')->where('name','Jáltipan')->first()->id
],

['name' => 'Ahuacatepec',
'city_id' => DB::table('cities')->where('name','Jáltipan')->first()->id
],

['name' => 'El Amate',
'city_id' => DB::table('cities')->where('name','Jáltipan')->first()->id
],

['name' => 'Las Lajas',
'city_id' => DB::table('cities')->where('name','Jáltipan')->first()->id
],

['name' => 'Lomas Cuatas',
'city_id' => DB::table('cities')->where('name','Jáltipan')->first()->id
],

['name' => 'Los Colorines',
'city_id' => DB::table('cities')->where('name','Jáltipan')->first()->id
],

['name' => 'La Lajilla',
'city_id' => DB::table('cities')->where('name','Jáltipan')->first()->id
],

['name' => 'Las Lomas de Tacamichapan',
'city_id' => DB::table('cities')->where('name','Jáltipan')->first()->id
],

['name' => 'Boca de Monzapan',
'city_id' => DB::table('cities')->where('name','Jáltipan')->first()->id
],

['name' => 'Catemaco',
'city_id' => DB::table('cities')->where('name','Jáltipan')->first()->id
],

['name' => 'El Carrizal',
'city_id' => DB::table('cities')->where('name','Jáltipan')->first()->id
],

['name' => 'El Comalcahuite',
'city_id' => DB::table('cities')->where('name','Jáltipan')->first()->id
],

['name' => 'El Mariscal',
'city_id' => DB::table('cities')->where('name','Jáltipan')->first()->id
],

['name' => 'El Nacaste',
'city_id' => DB::table('cities')->where('name','Jáltipan')->first()->id
],

['name' => 'El Palmar',
'city_id' => DB::table('cities')->where('name','Jáltipan')->first()->id
],

['name' => 'El Remolino Chico de Mesguaya',
'city_id' => DB::table('cities')->where('name','Jáltipan')->first()->id
],

['name' => 'El Robalo',
'city_id' => DB::table('cities')->where('name','Jáltipan')->first()->id
],

['name' => 'Las Pozas',
'city_id' => DB::table('cities')->where('name','Jáltipan')->first()->id
],

['name' => 'Los Mangos',
'city_id' => DB::table('cities')->where('name','Jáltipan')->first()->id
],

['name' => 'Los Pérez',
'city_id' => DB::table('cities')->where('name','Jáltipan')->first()->id
],

['name' => 'Los Reyes',
'city_id' => DB::table('cities')->where('name','Jáltipan')->first()->id
],

['name' => 'Ranchoapan',
'city_id' => DB::table('cities')->where('name','Jáltipan')->first()->id
],

['name' => 'Agua Azul',
'city_id' => DB::table('cities')->where('name','Jáltipan')->first()->id
],

['name' => 'Antonio Hernández',
'city_id' => DB::table('cities')->where('name','Jáltipan')->first()->id
],

['name' => 'El Progreso',
'city_id' => DB::table('cities')->where('name','Jáltipan')->first()->id
],

['name' => 'Esta Cabron',
'city_id' => DB::table('cities')->where('name','Jáltipan')->first()->id
],

['name' => 'La Gravera',
'city_id' => DB::table('cities')->where('name','Jáltipan')->first()->id
],

['name' => 'Las Flores',
'city_id' => DB::table('cities')->where('name','Jáltipan')->first()->id
],

['name' => 'Las Praderas',
'city_id' => DB::table('cities')->where('name','Jáltipan')->first()->id
],

['name' => 'Los Castaños',
'city_id' => DB::table('cities')->where('name','Jáltipan')->first()->id
],

['name' => 'San Antonio',
'city_id' => DB::table('cities')->where('name','Jáltipan')->first()->id
],

['name' => 'Tierra Colorada',
'city_id' => DB::table('cities')->where('name','Jáltipan')->first()->id
],

['name' => 'Zaragoza',
'city_id' => DB::table('cities')->where('name','Zaragoza')->first()->id
],

['name' => 'San Miguel',
'city_id' => DB::table('cities')->where('name','Zaragoza')->first()->id
],

['name' => 'Mangos Salinas',
'city_id' => DB::table('cities')->where('name','Zaragoza')->first()->id
],

['name' => 'El Rincón',
'city_id' => DB::table('cities')->where('name','Oteapan')->first()->id
],

['name' => 'Oteapan',
'city_id' => DB::table('cities')->where('name','Oteapan')->first()->id
],

['name' => 'La Tina',
'city_id' => DB::table('cities')->where('name','Oteapan')->first()->id
],

['name' => 'Tierra Colorada',
'city_id' => DB::table('cities')->where('name','Oteapan')->first()->id
],

['name' => 'San Francisco Tierra Nueva',
'city_id' => DB::table('cities')->where('name','Cosoleacaque')->first()->id
],

['name' => 'El Paraíso',
'city_id' => DB::table('cities')->where('name','Cosoleacaque')->first()->id
],

['name' => 'Las Palmas',
'city_id' => DB::table('cities')->where('name','Cosoleacaque')->first()->id
],

['name' => 'Canticas',
'city_id' => DB::table('cities')->where('name','Cosoleacaque')->first()->id
],

['name' => 'Estero del Pantano',
'city_id' => DB::table('cities')->where('name','Cosoleacaque')->first()->id
],

['name' => 'Calzadas (Kilómetro 14)',
'city_id' => DB::table('cities')->where('name','Cosoleacaque')->first()->id
],

['name' => 'Residencial las Olas',
'city_id' => DB::table('cities')->where('name','Cosoleacaque')->first()->id
],

['name' => 'El Kilómetro Diecisiete',
'city_id' => DB::table('cities')->where('name','Cosoleacaque')->first()->id
],

['name' => 'Villas Ana María',
'city_id' => DB::table('cities')->where('name','Cosoleacaque')->first()->id
],

['name' => 'Punta Verde',
'city_id' => DB::table('cities')->where('name','Cosoleacaque')->first()->id
],

['name' => 'Congreso Constituyente',
'city_id' => DB::table('cities')->where('name','Cosoleacaque')->first()->id
],

['name' => 'Agustín Acosta Lagunes',
'city_id' => DB::table('cities')->where('name','Cosoleacaque')->first()->id
],

['name' => 'Emiliano Zapata',
'city_id' => DB::table('cities')->where('name','Cosoleacaque')->first()->id
],

['name' => '10 de Mayo',
'city_id' => DB::table('cities')->where('name','Cosoleacaque')->first()->id
],

['name' => 'La Oaxaqueña',
'city_id' => DB::table('cities')->where('name','Cosoleacaque')->first()->id
],

['name' => 'Gustavo Díaz Ordaz',
'city_id' => DB::table('cities')->where('name','Cosoleacaque')->first()->id
],

['name' => 'Agustin Melgar',
'city_id' => DB::table('cities')->where('name','Cosoleacaque')->first()->id
],

['name' => 'Azteca',
'city_id' => DB::table('cities')->where('name','Cosoleacaque')->first()->id
],

['name' => 'Carlos Salinas de Gortari',
'city_id' => DB::table('cities')->where('name','Cosoleacaque')->first()->id
],

['name' => 'José F. Gutiérrez',
'city_id' => DB::table('cities')->where('name','Cosoleacaque')->first()->id
],

['name' => 'La Esperanza',
'city_id' => DB::table('cities')->where('name','Cosoleacaque')->first()->id
],

['name' => 'Niños Héroes',
'city_id' => DB::table('cities')->where('name','Cosoleacaque')->first()->id
],

['name' => '8 de Mayo',
'city_id' => DB::table('cities')->where('name','Cosoleacaque')->first()->id
],

['name' => '7 de Mayo',
'city_id' => DB::table('cities')->where('name','Cosoleacaque')->first()->id
],

['name' => 'Infonavit Paquital',
'city_id' => DB::table('cities')->where('name','Cosoleacaque')->first()->id
],

['name' => 'México',
'city_id' => DB::table('cities')->where('name','Cosoleacaque')->first()->id
],

['name' => 'Agustin Melgar',
'city_id' => DB::table('cities')->where('name','Cosoleacaque')->first()->id
],

['name' => 'Encinal',
'city_id' => DB::table('cities')->where('name','Cosoleacaque')->first()->id
],

['name' => 'Francisco I. Madero',
'city_id' => DB::table('cities')->where('name','Cosoleacaque')->first()->id
],

['name' => 'La Bomba',
'city_id' => DB::table('cities')->where('name','Cosoleacaque')->first()->id
],

['name' => 'Cerro Blanco',
'city_id' => DB::table('cities')->where('name','Cosoleacaque')->first()->id
],

['name' => 'Barrancas (Buenos Aires)',
'city_id' => DB::table('cities')->where('name','Cosoleacaque')->first()->id
],

['name' => 'Hibueras',
'city_id' => DB::table('cities')->where('name','Cosoleacaque')->first()->id
],

['name' => 'Fernando Gutiérrez Barrios',
'city_id' => DB::table('cities')->where('name','Cosoleacaque')->first()->id
],

['name' => 'Zacatal Victoria',
'city_id' => DB::table('cities')->where('name','Cosoleacaque')->first()->id
],

['name' => 'Hato Nuevo',
'city_id' => DB::table('cities')->where('name','Cosoleacaque')->first()->id
],

['name' => 'Patria Libre',
'city_id' => DB::table('cities')->where('name','Cosoleacaque')->first()->id
],

['name' => 'Solidaridad El Naranjito',
'city_id' => DB::table('cities')->where('name','Cosoleacaque')->first()->id
],

['name' => 'Los Encinos',
'city_id' => DB::table('cities')->where('name','Cosoleacaque')->first()->id
],

['name' => 'Hermenegildo J Aldana',
'city_id' => DB::table('cities')->where('name','Cosoleacaque')->first()->id
],

['name' => 'Las Jacarandas',
'city_id' => DB::table('cities')->where('name','Cosoleacaque')->first()->id
],

['name' => 'Las Rosas',
'city_id' => DB::table('cities')->where('name','Cosoleacaque')->first()->id
],

['name' => 'Luis Donaldo Colosio',
'city_id' => DB::table('cities')->where('name','Cosoleacaque')->first()->id
],

['name' => 'Veracruz',
'city_id' => DB::table('cities')->where('name','Cosoleacaque')->first()->id
],

['name' => 'Las Arboledas',
'city_id' => DB::table('cities')->where('name','Cosoleacaque')->first()->id
],

['name' => 'Minatitlán (Minatitlán)',
'city_id' => DB::table('cities')->where('name','Cosoleacaque')->first()->id
],

['name' => 'Los Prados',
'city_id' => DB::table('cities')->where('name','Cosoleacaque')->first()->id
],

['name' => 'Los Limones',
'city_id' => DB::table('cities')->where('name','Cosoleacaque')->first()->id
],

['name' => 'Cascajal I',
'city_id' => DB::table('cities')->where('name','Cosoleacaque')->first()->id
],

['name' => 'Loma de Achota',
'city_id' => DB::table('cities')->where('name','Cosoleacaque')->first()->id
],

['name' => 'Villas del Vergel',
'city_id' => DB::table('cities')->where('name','Cosoleacaque')->first()->id
],

['name' => 'Lomas de Camalotal',
'city_id' => DB::table('cities')->where('name','Cosoleacaque')->first()->id
],

['name' => 'Cajiapan',
'city_id' => DB::table('cities')->where('name','Cosoleacaque')->first()->id
],

['name' => 'Temoloapan',
'city_id' => DB::table('cities')->where('name','Cosoleacaque')->first()->id
],

['name' => 'Los Arcos',
'city_id' => DB::table('cities')->where('name','Cosoleacaque')->first()->id
],

['name' => 'Cerro Alto',
'city_id' => DB::table('cities')->where('name','Cosoleacaque')->first()->id
],

['name' => 'FOVISSSTE Cerro Alto',
'city_id' => DB::table('cities')->where('name','Cosoleacaque')->first()->id
],

['name' => 'Las Piedritas',
'city_id' => DB::table('cities')->where('name','Cosoleacaque')->first()->id
],

['name' => 'José F. Gutiérrez',
'city_id' => DB::table('cities')->where('name','Cosoleacaque')->first()->id
],

['name' => 'San Pedro Mártir',
'city_id' => DB::table('cities')->where('name','Cosoleacaque')->first()->id
],

['name' => 'Monte Alto',
'city_id' => DB::table('cities')->where('name','Cosoleacaque')->first()->id
],

['name' => 'Coacotla',
'city_id' => DB::table('cities')->where('name','Cosoleacaque')->first()->id
],

['name' => 'San Antonio',
'city_id' => DB::table('cities')->where('name','Cosoleacaque')->first()->id
],

['name' => 'El Naranjo',
'city_id' => DB::table('cities')->where('name','Cosoleacaque')->first()->id
],

['name' => 'Martin Lancero',
'city_id' => DB::table('cities')->where('name','Cosoleacaque')->first()->id
],

['name' => 'Sección 32',
'city_id' => DB::table('cities')->where('name','Cosoleacaque')->first()->id
],

['name' => 'Jardines del Bosque',
'city_id' => DB::table('cities')->where('name','Cosoleacaque')->first()->id
],

['name' => 'Predio Jardín de las Flores',
'city_id' => DB::table('cities')->where('name','Cosoleacaque')->first()->id
],

['name' => 'Los Mangos',
'city_id' => DB::table('cities')->where('name','Cosoleacaque')->first()->id
],

['name' => 'Paso la Lajilla',
'city_id' => DB::table('cities')->where('name','Cosoleacaque')->first()->id
],

['name' => 'Lomas de San Agustín',
'city_id' => DB::table('cities')->where('name','Cosoleacaque')->first()->id
],

['name' => 'Cosoleacaque Centro',
'city_id' => DB::table('cities')->where('name','Cosoleacaque')->first()->id
],

['name' => 'Primero',
'city_id' => DB::table('cities')->where('name','Cosoleacaque')->first()->id
],

['name' => 'Rincón de la Colmena',
'city_id' => DB::table('cities')->where('name','Cosoleacaque')->first()->id
],

['name' => 'Segundo',
'city_id' => DB::table('cities')->where('name','Cosoleacaque')->first()->id
],

['name' => 'Cuarto',
'city_id' => DB::table('cities')->where('name','Cosoleacaque')->first()->id
],

['name' => 'Tercero',
'city_id' => DB::table('cities')->where('name','Cosoleacaque')->first()->id
],

['name' => 'Los Pinos',
'city_id' => DB::table('cities')->where('name','Nanchital de Lázaro Cárdenas del Río')->first()->id
],

['name' => 'Campo Nuevo',
'city_id' => DB::table('cities')->where('name','Nanchital de Lázaro Cárdenas del Río')->first()->id
],

['name' => 'Nuestra Señora del Carmen',
'city_id' => DB::table('cities')->where('name','Nanchital de Lázaro Cárdenas del Río')->first()->id
],

['name' => 'La Cangrejera',
'city_id' => DB::table('cities')->where('name','Nanchital de Lázaro Cárdenas del Río')->first()->id
],

['name' => 'Nanchital de Lázaro Cárdenas del Rio',
'city_id' => DB::table('cities')->where('name','Nanchital de Lázaro Cárdenas del Río')->first()->id
],

['name' => 'Benito Juárez',
'city_id' => DB::table('cities')->where('name','Nanchital de Lázaro Cárdenas del Río')->first()->id
],

['name' => 'Brunet',
'city_id' => DB::table('cities')->where('name','Nanchital de Lázaro Cárdenas del Río')->first()->id
],

['name' => 'Factoría de PEMEX',
'city_id' => DB::table('cities')->where('name','Nanchital de Lázaro Cárdenas del Río')->first()->id
],

['name' => 'Guadalupe Tepeyac',
'city_id' => DB::table('cities')->where('name','Nanchital de Lázaro Cárdenas del Río')->first()->id
],

['name' => 'Jardín',
'city_id' => DB::table('cities')->where('name','Nanchital de Lázaro Cárdenas del Río')->first()->id
],

['name' => 'La Noria',
'city_id' => DB::table('cities')->where('name','Nanchital de Lázaro Cárdenas del Río')->first()->id
],

['name' => 'Los Coquitos',
'city_id' => DB::table('cities')->where('name','Nanchital de Lázaro Cárdenas del Río')->first()->id
],

['name' => 'Los Mangos',
'city_id' => DB::table('cities')->where('name','Nanchital de Lázaro Cárdenas del Río')->first()->id
],

['name' => 'Manuel Ramirez Romero',
'city_id' => DB::table('cities')->where('name','Nanchital de Lázaro Cárdenas del Río')->first()->id
],

['name' => '1° de Mayo',
'city_id' => DB::table('cities')->where('name','Nanchital de Lázaro Cárdenas del Río')->first()->id
],

['name' => 'Principal',
'city_id' => DB::table('cities')->where('name','Nanchital de Lázaro Cárdenas del Río')->first()->id
],

['name' => 'San Agustin',
'city_id' => DB::table('cities')->where('name','Nanchital de Lázaro Cárdenas del Río')->first()->id
],

['name' => 'San Miguel Arcángel',
'city_id' => DB::table('cities')->where('name','Nanchital de Lázaro Cárdenas del Río')->first()->id
],

['name' => 'San Nicolás',
'city_id' => DB::table('cities')->where('name','Nanchital de Lázaro Cárdenas del Río')->first()->id
],

['name' => 'Señora de Lourdes',
'city_id' => DB::table('cities')->where('name','Nanchital de Lázaro Cárdenas del Río')->first()->id
],

['name' => 'La Candelaria',
'city_id' => DB::table('cities')->where('name','Nanchital de Lázaro Cárdenas del Río')->first()->id
],

['name' => 'Gustavo Díaz Ordaz',
'city_id' => DB::table('cities')->where('name','Nanchital de Lázaro Cárdenas del Río')->first()->id
],

['name' => 'San Regino',
'city_id' => DB::table('cities')->where('name','Nanchital de Lázaro Cárdenas del Río')->first()->id
],

['name' => 'Tanque 12',
'city_id' => DB::table('cities')->where('name','Nanchital de Lázaro Cárdenas del Río')->first()->id
],

['name' => 'Obrera',
'city_id' => DB::table('cities')->where('name','Nanchital de Lázaro Cárdenas del Río')->first()->id
],

['name' => 'Nahualapa',
'city_id' => DB::table('cities')->where('name','Nanchital de Lázaro Cárdenas del Río')->first()->id
],

['name' => 'El Pollo de Oro',
'city_id' => DB::table('cities')->where('name','Nanchital de Lázaro Cárdenas del Río')->first()->id
],

['name' => 'Lázaro Cárdenas del Río',
'city_id' => DB::table('cities')->where('name','Nanchital de Lázaro Cárdenas del Río')->first()->id
],

['name' => 'Predio San Regino',
'city_id' => DB::table('cities')->where('name','Nanchital de Lázaro Cárdenas del Río')->first()->id
],

['name' => 'La Nueva Esperanza',
'city_id' => DB::table('cities')->where('name','Ixhuatlán del Sureste')->first()->id
],

['name' => 'Los Encinos',
'city_id' => DB::table('cities')->where('name','Ixhuatlán del Sureste')->first()->id
],

['name' => 'Centro Ixhuatlán del Sureste',
'city_id' => DB::table('cities')->where('name','Ixhuatlán del Sureste')->first()->id
],

['name' => 'Las Palmas',
'city_id' => DB::table('cities')->where('name','Ixhuatlán del Sureste')->first()->id
],

['name' => 'Amatitán',
'city_id' => DB::table('cities')->where('name','Ixhuatlán del Sureste')->first()->id
],

['name' => 'Cadete Juan de la Barrera',
'city_id' => DB::table('cities')->where('name','Ixhuatlán del Sureste')->first()->id
],

['name' => 'Paso Nuevo',
'city_id' => DB::table('cities')->where('name','Ixhuatlán del Sureste')->first()->id
],

['name' => 'Guayabal',
'city_id' => DB::table('cities')->where('name','Ixhuatlán del Sureste')->first()->id
],

['name' => 'El Chapo',
'city_id' => DB::table('cities')->where('name','Ixhuatlán del Sureste')->first()->id
],

['name' => 'El Zapotal',
'city_id' => DB::table('cities')->where('name','Ixhuatlán del Sureste')->first()->id
],

['name' => 'Emiliano Zapata (La Paz Camalote)',
'city_id' => DB::table('cities')->where('name','Ixhuatlán del Sureste')->first()->id
],

['name' => 'Cuichapa',
'city_id' => DB::table('cities')->where('name','Moloacán')->first()->id
],

['name' => 'Aviación',
'city_id' => DB::table('cities')->where('name','Moloacán')->first()->id
],

['name' => 'Comercial',
'city_id' => DB::table('cities')->where('name','Moloacán')->first()->id
],

['name' => '18 de Marzo',
'city_id' => DB::table('cities')->where('name','Moloacán')->first()->id
],

['name' => 'El Macayo',
'city_id' => DB::table('cities')->where('name','Moloacán')->first()->id
],

['name' => 'La Bomba',
'city_id' => DB::table('cities')->where('name','Moloacán')->first()->id
],

['name' => 'Nueva Esperanza',
'city_id' => DB::table('cities')->where('name','Moloacán')->first()->id
],

['name' => 'Obrera',
'city_id' => DB::table('cities')->where('name','Moloacán')->first()->id
],

['name' => 'Ejidal',
'city_id' => DB::table('cities')->where('name','Moloacán')->first()->id
],

['name' => 'Petrolera',
'city_id' => DB::table('cities')->where('name','Moloacán')->first()->id
],

['name' => 'Cuichapa Viejo',
'city_id' => DB::table('cities')->where('name','Moloacán')->first()->id
],

['name' => 'Agraria',
'city_id' => DB::table('cities')->where('name','Moloacán')->first()->id
],

['name' => 'Lázaro Cárdenas',
'city_id' => DB::table('cities')->where('name','Moloacán')->first()->id
],

['name' => 'Moloacan',
'city_id' => DB::table('cities')->where('name','Moloacán')->first()->id
],

['name' => 'San Lorenzo Mezcalapa',
'city_id' => DB::table('cities')->where('name','Moloacán')->first()->id
],

['name' => 'Tacomango',
'city_id' => DB::table('cities')->where('name','Moloacán')->first()->id
],

['name' => 'Arroyo Blanco',
'city_id' => DB::table('cities')->where('name','Moloacán')->first()->id
],

['name' => 'La Guadalupe',
'city_id' => DB::table('cities')->where('name','Moloacán')->first()->id
],

['name' => 'Nueva Palma Sola',
'city_id' => DB::table('cities')->where('name','Moloacán')->first()->id
],

['name' => 'Kilómetro Veinte',
'city_id' => DB::table('cities')->where('name','Moloacán')->first()->id
],

['name' => 'Trancas Viejas',
'city_id' => DB::table('cities')->where('name','Moloacán')->first()->id
],

['name' => 'Acalapa Dos (Kilómetro 17)',
'city_id' => DB::table('cities')->where('name','Moloacán')->first()->id
],

['name' => 'Tlacuilolapan',
'city_id' => DB::table('cities')->where('name','Moloacán')->first()->id
],

['name' => 'San Juan de los Reyes (Los Caimanes)',
'city_id' => DB::table('cities')->where('name','Moloacán')->first()->id
],

['name' => 'Nuevo Teapa',
'city_id' => DB::table('cities')->where('name','Moloacán')->first()->id
],

['name' => 'Allende Centro',
'city_id' => DB::table('cities')->where('name','Coatzacoalcos')->first()->id
],

['name' => 'Rabon Grande',
'city_id' => DB::table('cities')->where('name','Coatzacoalcos')->first()->id
],

['name' => 'El Faro',
'city_id' => DB::table('cities')->where('name','Coatzacoalcos')->first()->id
],

['name' => 'El Olvido',
'city_id' => DB::table('cities')->where('name','Coatzacoalcos')->first()->id
],

['name' => 'Escolleras',
'city_id' => DB::table('cities')->where('name','Coatzacoalcos')->first()->id
],

['name' => 'FONHAPO',
'city_id' => DB::table('cities')->where('name','Coatzacoalcos')->first()->id
],

['name' => 'Guillermo Prieto',
'city_id' => DB::table('cities')->where('name','Coatzacoalcos')->first()->id
],

['name' => 'Libertad',
'city_id' => DB::table('cities')->where('name','Coatzacoalcos')->first()->id
],

['name' => 'Vicente Lombardo Toledano',
'city_id' => DB::table('cities')->where('name','Coatzacoalcos')->first()->id
],

['name' => 'Miramar',
'city_id' => DB::table('cities')->where('name','Coatzacoalcos')->first()->id
],

['name' => 'PEMEX',
'city_id' => DB::table('cities')->where('name','Coatzacoalcos')->first()->id
],

['name' => 'Pescadores',
'city_id' => DB::table('cities')->where('name','Coatzacoalcos')->first()->id
],

['name' => 'Villas del Mar',
'city_id' => DB::table('cities')->where('name','Coatzacoalcos')->first()->id
],

['name' => 'Bellavista',
'city_id' => DB::table('cities')->where('name','Coatzacoalcos')->first()->id
],

['name' => 'Ejidal',
'city_id' => DB::table('cities')->where('name','Coatzacoalcos')->first()->id
],

['name' => 'Nueva Pajaritos',
'city_id' => DB::table('cities')->where('name','Coatzacoalcos')->first()->id
],

['name' => 'El Colorado',
'city_id' => DB::table('cities')->where('name','Coatzacoalcos')->first()->id
],

['name' => 'Gavilán Norte',
'city_id' => DB::table('cities')->where('name','Coatzacoalcos')->first()->id
],

['name' => 'Rincón Grande',
'city_id' => DB::table('cities')->where('name','Coatzacoalcos')->first()->id
],

['name' => 'Pajaritos',
'city_id' => DB::table('cities')->where('name','Coatzacoalcos')->first()->id
],

['name' => 'Cangrejera',
'city_id' => DB::table('cities')->where('name','Coatzacoalcos')->first()->id
],

['name' => 'Mundo Nuevo',
'city_id' => DB::table('cities')->where('name','Coatzacoalcos')->first()->id
],

['name' => 'Francisco Villa',
'city_id' => DB::table('cities')->where('name','Coatzacoalcos')->first()->id
],

['name' => 'La Esperanza',
'city_id' => DB::table('cities')->where('name','Coatzacoalcos')->first()->id
],

['name' => 'El Peñón',
'city_id' => DB::table('cities')->where('name','Coatzacoalcos')->first()->id
],

['name' => 'Las Barrillas',
'city_id' => DB::table('cities')->where('name','Coatzacoalcos')->first()->id
],

['name' => 'Tonalá',
'city_id' => DB::table('cities')->where('name','Agua Dulce')->first()->id
],

['name' => 'Las Palmitas',
'city_id' => DB::table('cities')->where('name','Agua Dulce')->first()->id
],

['name' => 'Punta Gorda',
'city_id' => DB::table('cities')->where('name','Agua Dulce')->first()->id
],

['name' => 'El Tortuguero',
'city_id' => DB::table('cities')->where('name','Agua Dulce')->first()->id
],

['name' => 'El Burro',
'city_id' => DB::table('cities')->where('name','Agua Dulce')->first()->id
],

['name' => 'El Faisán',
'city_id' => DB::table('cities')->where('name','Agua Dulce')->first()->id
],

['name' => 'Lealtad Gregorio Méndez',
'city_id' => DB::table('cities')->where('name','Agua Dulce')->first()->id
],

['name' => 'Ingeniero Mario Hernández Posada',
'city_id' => DB::table('cities')->where('name','Agua Dulce')->first()->id
],

['name' => 'La Gloria',
'city_id' => DB::table('cities')->where('name','Agua Dulce')->first()->id
],

['name' => 'Miguel Alemán Valdés (Colonia Agrícola Ganadera)',
'city_id' => DB::table('cities')->where('name','Agua Dulce')->first()->id
],

['name' => 'Quince de Agosto',
'city_id' => DB::table('cities')->where('name','Agua Dulce')->first()->id
],

['name' => 'Gustavo Díaz Ordaz',
'city_id' => DB::table('cities')->where('name','Agua Dulce')->first()->id
],

['name' => 'La Arena',
'city_id' => DB::table('cities')->where('name','Agua Dulce')->first()->id
],

['name' => 'El Corosal',
'city_id' => DB::table('cities')->where('name','Agua Dulce')->first()->id
],

['name' => 'El Porvenir',
'city_id' => DB::table('cities')->where('name','Agua Dulce')->first()->id
],

['name' => 'Gilberto Flores Muñoz',
'city_id' => DB::table('cities')->where('name','Agua Dulce')->first()->id
],

['name' => 'El Encanto (Ejido el Encanto Pesquero)',
'city_id' => DB::table('cities')->where('name','Agua Dulce')->first()->id
],

['name' => 'Agua Dulce',
'city_id' => DB::table('cities')->where('name','Agua Dulce')->first()->id
],

['name' => 'Campo el Panal (El Palmar)',
'city_id' => DB::table('cities')->where('name','Agua Dulce')->first()->id
],

['name' => 'El Cedral',
'city_id' => DB::table('cities')->where('name','Agua Dulce')->first()->id
],

['name' => 'Los Soldados',
'city_id' => DB::table('cities')->where('name','Agua Dulce')->first()->id
],

['name' => 'Los Manantiales',
'city_id' => DB::table('cities')->where('name','Agua Dulce')->first()->id
],

['name' => 'Coatzacoalcos Centro',
'city_id' => DB::table('cities')->where('name','Coatzacoalcos')->first()->id
],

['name' => 'Gerencia de Petroleos Mexicanos Zona Sur',
'city_id' => DB::table('cities')->where('name','Coatzacoalcos')->first()->id
],

['name' => 'Maria de La Piedad',
'city_id' => DB::table('cities')->where('name','Coatzacoalcos')->first()->id
],

['name' => 'Manuel Avila Camacho',
'city_id' => DB::table('cities')->where('name','Coatzacoalcos')->first()->id
],

['name' => 'Esfuerzo de los Hermanos Del Trabajo',
'city_id' => DB::table('cities')->where('name','Coatzacoalcos')->first()->id
],

['name' => 'Lic. Luis Echeverría Álvarez',
'city_id' => DB::table('cities')->where('name','Coatzacoalcos')->first()->id
],

['name' => 'Astilleros de Marina',
'city_id' => DB::table('cities')->where('name','Coatzacoalcos')->first()->id
],

['name' => 'ISSSFAM',
'city_id' => DB::table('cities')->where('name','Coatzacoalcos')->first()->id
],

['name' => '23 de Noviembre',
'city_id' => DB::table('cities')->where('name','Coatzacoalcos')->first()->id
],

['name' => 'Lázaro Cárdenas',
'city_id' => DB::table('cities')->where('name','Coatzacoalcos')->first()->id
],

['name' => 'Frutos de La Revolución',
'city_id' => DB::table('cities')->where('name','Coatzacoalcos')->first()->id
],

['name' => 'Las Américas',
'city_id' => DB::table('cities')->where('name','Coatzacoalcos')->first()->id
],

['name' => 'Adolfo López Mateos',
'city_id' => DB::table('cities')->where('name','Coatzacoalcos')->first()->id
],

['name' => 'Dos Ríos',
'city_id' => DB::table('cities')->where('name','Coatzacoalcos')->first()->id
],

['name' => 'Ejidal',
'city_id' => DB::table('cities')->where('name','Coatzacoalcos')->first()->id
],

['name' => 'Elvira Ochoa de Hernández',
'city_id' => DB::table('cities')->where('name','Coatzacoalcos')->first()->id
],

['name' => 'Tierra Nueva',
'city_id' => DB::table('cities')->where('name','Coatzacoalcos')->first()->id
],

['name' => 'Ejidal',
'city_id' => DB::table('cities')->where('name','Coatzacoalcos')->first()->id
],

['name' => 'Villas de La Rivera',
'city_id' => DB::table('cities')->where('name','Coatzacoalcos')->first()->id
],

['name' => 'Electricistas',
'city_id' => DB::table('cities')->where('name','Coatzacoalcos')->first()->id
],

['name' => 'Adolfo López Mateos',
'city_id' => DB::table('cities')->where('name','Coatzacoalcos')->first()->id
],

['name' => 'Coatzacoalcos',
'city_id' => DB::table('cities')->where('name','Coatzacoalcos')->first()->id
],

['name' => 'Petrolera',
'city_id' => DB::table('cities')->where('name','Coatzacoalcos')->first()->id
],

['name' => 'Puerto México',
'city_id' => DB::table('cities')->where('name','Coatzacoalcos')->first()->id
],

['name' => 'Playa Sol',
'city_id' => DB::table('cities')->where('name','Coatzacoalcos')->first()->id
],

['name' => 'Petroquímica',
'city_id' => DB::table('cities')->where('name','Coatzacoalcos')->first()->id
],

['name' => 'Guadalupe Victoria',
'city_id' => DB::table('cities')->where('name','Coatzacoalcos')->first()->id
],

['name' => 'Playa de Oro',
'city_id' => DB::table('cities')->where('name','Coatzacoalcos')->first()->id
],

['name' => 'Paraíso Coatzacoalcos',
'city_id' => DB::table('cities')->where('name','Coatzacoalcos')->first()->id
],

['name' => 'Infonavit Vista al Mar',
'city_id' => DB::table('cities')->where('name','Coatzacoalcos')->first()->id
],

['name' => 'Brisas del Sur',
'city_id' => DB::table('cities')->where('name','Coatzacoalcos')->first()->id
],

['name' => 'Balcones Del Mar',
'city_id' => DB::table('cities')->where('name','Coatzacoalcos')->first()->id
],

['name' => 'Playeros',
'city_id' => DB::table('cities')->where('name','Coatzacoalcos')->first()->id
],

['name' => 'Pensiones Del Estado',
'city_id' => DB::table('cities')->where('name','Coatzacoalcos')->first()->id
],

['name' => 'Villas Odnalor',
'city_id' => DB::table('cities')->where('name','Coatzacoalcos')->first()->id
],

['name' => 'La Jolla Residencial',
'city_id' => DB::table('cities')->where('name','Coatzacoalcos')->first()->id
],

['name' => 'Veracruz',
'city_id' => DB::table('cities')->where('name','Coatzacoalcos')->first()->id
],

['name' => 'Fraternidad Antorchista',
'city_id' => DB::table('cities')->where('name','Coatzacoalcos')->first()->id
],

['name' => 'Popular Morelos',
'city_id' => DB::table('cities')->where('name','Coatzacoalcos')->first()->id
],

['name' => 'Barrillas',
'city_id' => DB::table('cities')->where('name','Coatzacoalcos')->first()->id
],

['name' => 'Lomas de Barrillas',
'city_id' => DB::table('cities')->where('name','Coatzacoalcos')->first()->id
],

['name' => 'Ciudad Olmeca',
'city_id' => DB::table('cities')->where('name','Coatzacoalcos')->first()->id
],

['name' => 'Empleados Municipales',
'city_id' => DB::table('cities')->where('name','Coatzacoalcos')->first()->id
],

['name' => 'El Manantial',
'city_id' => DB::table('cities')->where('name','Coatzacoalcos')->first()->id
],

['name' => 'Solidaridad',
'city_id' => DB::table('cities')->where('name','Coatzacoalcos')->first()->id
],

['name' => 'El Paraíso',
'city_id' => DB::table('cities')->where('name','Coatzacoalcos')->first()->id
],

['name' => 'Villas de San Martín',
'city_id' => DB::table('cities')->where('name','Coatzacoalcos')->first()->id
],

['name' => 'Las Dunas',
'city_id' => DB::table('cities')->where('name','Coatzacoalcos')->first()->id
],

['name' => 'Maradunas',
'city_id' => DB::table('cities')->where('name','Coatzacoalcos')->first()->id
],

['name' => 'Las Reinas',
'city_id' => DB::table('cities')->where('name','Coatzacoalcos')->first()->id
],

['name' => 'El Tesoro',
'city_id' => DB::table('cities')->where('name','Coatzacoalcos')->first()->id
],

['name' => 'Transportistas',
'city_id' => DB::table('cities')->where('name','Coatzacoalcos')->first()->id
],

['name' => 'Divina Providencia',
'city_id' => DB::table('cities')->where('name','Coatzacoalcos')->first()->id
],

['name' => 'Guadalupana',
'city_id' => DB::table('cities')->where('name','Coatzacoalcos')->first()->id
],

['name' => 'Las Gaviotas',
'city_id' => DB::table('cities')->where('name','Coatzacoalcos')->first()->id
],

['name' => 'Nueva Imagen',
'city_id' => DB::table('cities')->where('name','Coatzacoalcos')->first()->id
],

['name' => 'Peloteros',
'city_id' => DB::table('cities')->where('name','Coatzacoalcos')->first()->id
],

['name' => 'San Silverio',
'city_id' => DB::table('cities')->where('name','Coatzacoalcos')->first()->id
],

['name' => 'Teresa Morales Delgado',
'city_id' => DB::table('cities')->where('name','Coatzacoalcos')->first()->id
],

['name' => 'Punta Del Mar',
'city_id' => DB::table('cities')->where('name','Coatzacoalcos')->first()->id
],

['name' => 'Santa Maria',
'city_id' => DB::table('cities')->where('name','Coatzacoalcos')->first()->id
],

['name' => 'Jardines de California',
'city_id' => DB::table('cities')->where('name','Coatzacoalcos')->first()->id
],

['name' => 'La Victoria',
'city_id' => DB::table('cities')->where('name','Coatzacoalcos')->first()->id
],

['name' => 'Los Almendros',
'city_id' => DB::table('cities')->where('name','Coatzacoalcos')->first()->id
],

['name' => 'Brisas Del Golfo',
'city_id' => DB::table('cities')->where('name','Coatzacoalcos')->first()->id
],

['name' => 'Santa María',
'city_id' => DB::table('cities')->where('name','Coatzacoalcos')->first()->id
],

['name' => 'Santa María',
'city_id' => DB::table('cities')->where('name','Coatzacoalcos')->first()->id
],

['name' => 'Paso a Desnivel',
'city_id' => DB::table('cities')->where('name','Coatzacoalcos')->first()->id
],

['name' => '24 de Octubre',
'city_id' => DB::table('cities')->where('name','Coatzacoalcos')->first()->id
],

['name' => 'Puerto Esmeralda',
'city_id' => DB::table('cities')->where('name','Coatzacoalcos')->first()->id
],

['name' => 'Las Gaviotas II',
'city_id' => DB::table('cities')->where('name','Coatzacoalcos')->first()->id
],

['name' => 'Bahía de San Martín',
'city_id' => DB::table('cities')->where('name','Coatzacoalcos')->first()->id
],

['name' => 'Antonio Luna',
'city_id' => DB::table('cities')->where('name','Coatzacoalcos')->first()->id
],

['name' => 'Punta Caracol',
'city_id' => DB::table('cities')->where('name','Coatzacoalcos')->first()->id
],

['name' => 'El Triángulo',
'city_id' => DB::table('cities')->where('name','Coatzacoalcos')->first()->id
],

['name' => 'Lomas del Bosque',
'city_id' => DB::table('cities')->where('name','Coatzacoalcos')->first()->id
],

['name' => 'FOVISSSTE',
'city_id' => DB::table('cities')->where('name','Coatzacoalcos')->first()->id
],

['name' => 'Santa Isabel I',
'city_id' => DB::table('cities')->where('name','Coatzacoalcos')->first()->id
],

['name' => 'Santa Rosa',
'city_id' => DB::table('cities')->where('name','Coatzacoalcos')->first()->id
],

['name' => 'Bugambilias',
'city_id' => DB::table('cities')->where('name','Coatzacoalcos')->first()->id
],

['name' => 'Santa Cecilia',
'city_id' => DB::table('cities')->where('name','Coatzacoalcos')->first()->id
],

['name' => 'Santa Isabel II',
'city_id' => DB::table('cities')->where('name','Coatzacoalcos')->first()->id
],

['name' => 'Santa Isabel III',
'city_id' => DB::table('cities')->where('name','Coatzacoalcos')->first()->id
],

['name' => 'Santa Isabel IV',
'city_id' => DB::table('cities')->where('name','Coatzacoalcos')->first()->id
],

['name' => 'Celanese',
'city_id' => DB::table('cities')->where('name','Coatzacoalcos')->first()->id
],

['name' => 'Iquisa',
'city_id' => DB::table('cities')->where('name','Coatzacoalcos')->first()->id
],

['name' => 'Rafael Hernández Ochoa',
'city_id' => DB::table('cities')->where('name','Coatzacoalcos')->first()->id
],

['name' => 'La Esperanza',
'city_id' => DB::table('cities')->where('name','Coatzacoalcos')->first()->id
],

['name' => 'Sector Popular',
'city_id' => DB::table('cities')->where('name','Coatzacoalcos')->first()->id
],

['name' => 'Independencia',
'city_id' => DB::table('cities')->where('name','Coatzacoalcos')->first()->id
],

['name' => 'Santa Rosa',
'city_id' => DB::table('cities')->where('name','Coatzacoalcos')->first()->id
],

['name' => 'Miguel Hidalgo',
'city_id' => DB::table('cities')->where('name','Coatzacoalcos')->first()->id
],

['name' => 'Rancho Alegre I',
'city_id' => DB::table('cities')->where('name','Coatzacoalcos')->first()->id
],

['name' => 'Rancho Alegre II',
'city_id' => DB::table('cities')->where('name','Coatzacoalcos')->first()->id
],

['name' => 'Las Palmas',
'city_id' => DB::table('cities')->where('name','Coatzacoalcos')->first()->id
],

['name' => 'Emiliano Zapata',
'city_id' => DB::table('cities')->where('name','Coatzacoalcos')->first()->id
],

['name' => 'FERTIMEX',
'city_id' => DB::table('cities')->where('name','Coatzacoalcos')->first()->id
],

['name' => 'Constituyentes',
'city_id' => DB::table('cities')->where('name','Coatzacoalcos')->first()->id
],

['name' => 'Progreso y Paz',
'city_id' => DB::table('cities')->where('name','Coatzacoalcos')->first()->id
],

['name' => 'San Juan',
'city_id' => DB::table('cities')->where('name','Coatzacoalcos')->first()->id
],

['name' => 'Bethel',
'city_id' => DB::table('cities')->where('name','Coatzacoalcos')->first()->id
],

['name' => 'Francisco Villa',
'city_id' => DB::table('cities')->where('name','Coatzacoalcos')->first()->id
],

['name' => 'Villas del Norte',
'city_id' => DB::table('cities')->where('name','Coatzacoalcos')->first()->id
],

['name' => 'Villas del Sur',
'city_id' => DB::table('cities')->where('name','Coatzacoalcos')->first()->id
],

['name' => 'Francisco Villa Norte',
'city_id' => DB::table('cities')->where('name','Coatzacoalcos')->first()->id
],

['name' => 'Nueva Calzadas',
'city_id' => DB::table('cities')->where('name','Coatzacoalcos')->first()->id
],

['name' => 'Trópico de La Rivera',
'city_id' => DB::table('cities')->where('name','Coatzacoalcos')->first()->id
],

['name' => 'Emiliano Zapata',
'city_id' => DB::table('cities')->where('name','Coatzacoalcos')->first()->id
],

['name' => 'FOVISSSTE III',
'city_id' => DB::table('cities')->where('name','Coatzacoalcos')->first()->id
],

['name' => 'FOVISSSTE IV',
'city_id' => DB::table('cities')->where('name','Coatzacoalcos')->first()->id
],

['name' => 'Cuauhtémoc',
'city_id' => DB::table('cities')->where('name','Coatzacoalcos')->first()->id
],

['name' => 'Esperanza Azcón de Acosta Lagunes',
'city_id' => DB::table('cities')->where('name','Coatzacoalcos')->first()->id
],

['name' => 'Alor Procoro',
'city_id' => DB::table('cities')->where('name','Coatzacoalcos')->first()->id
],

['name' => '20 de Noviembre',
'city_id' => DB::table('cities')->where('name','Coatzacoalcos')->first()->id
],

['name' => 'Úrsulo Galvan',
'city_id' => DB::table('cities')->where('name','Coatzacoalcos')->first()->id
],

['name' => 'Benito Juárez Norte',
'city_id' => DB::table('cities')->where('name','Coatzacoalcos')->first()->id
],

['name' => '5 de Febrero',
'city_id' => DB::table('cities')->where('name','Coatzacoalcos')->first()->id
],

['name' => 'Sotavento',
'city_id' => DB::table('cities')->where('name','Coatzacoalcos')->first()->id
],

['name' => 'Palma Sola',
'city_id' => DB::table('cities')->where('name','Coatzacoalcos')->first()->id
],

['name' => 'Benito Juárez Sur',
'city_id' => DB::table('cities')->where('name','Coatzacoalcos')->first()->id
],

['name' => 'Tierra y Libertad',
'city_id' => DB::table('cities')->where('name','Coatzacoalcos')->first()->id
],

['name' => 'El Mirador',
'city_id' => DB::table('cities')->where('name','Coatzacoalcos')->first()->id
],

['name' => 'Primero de Mayo',
'city_id' => DB::table('cities')->where('name','Coatzacoalcos')->first()->id
],

['name' => 'Kilometro 5',
'city_id' => DB::table('cities')->where('name','Coatzacoalcos')->first()->id
],

['name' => 'Nueva Obrera',
'city_id' => DB::table('cities')->where('name','Coatzacoalcos')->first()->id
],

['name' => 'Héroe de Nacozari',
'city_id' => DB::table('cities')->where('name','Coatzacoalcos')->first()->id
],

['name' => 'Agua Dulce Centro',
'city_id' => DB::table('cities')->where('name','Agua Dulce')->first()->id
],

['name' => 'El Chorrito',
'city_id' => DB::table('cities')->where('name','Agua Dulce')->first()->id
],

['name' => 'El Muelle Veracruz',
'city_id' => DB::table('cities')->where('name','Agua Dulce')->first()->id
],

['name' => 'El Suspiro',
'city_id' => DB::table('cities')->where('name','Agua Dulce')->first()->id
],

['name' => 'El Bosque Primera Sección',
'city_id' => DB::table('cities')->where('name','Agua Dulce')->first()->id
],

['name' => 'Bellavista',
'city_id' => DB::table('cities')->where('name','Agua Dulce')->first()->id
],

['name' => 'Emiliano Zapata',
'city_id' => DB::table('cities')->where('name','Agua Dulce')->first()->id
],

['name' => 'Lázaro Cárdenas',
'city_id' => DB::table('cities')->where('name','Agua Dulce')->first()->id
],

['name' => 'Magisterial',
'city_id' => DB::table('cities')->where('name','Agua Dulce')->first()->id
],

['name' => 'Km. 2',
'city_id' => DB::table('cities')->where('name','Agua Dulce')->first()->id
],

['name' => 'Agraria',
'city_id' => DB::table('cities')->where('name','Agua Dulce')->first()->id
],

['name' => 'Allende',
'city_id' => DB::table('cities')->where('name','Agua Dulce')->first()->id
],

['name' => 'México',
'city_id' => DB::table('cities')->where('name','Agua Dulce')->first()->id
],

['name' => 'Las Piedras',
'city_id' => DB::table('cities')->where('name','Agua Dulce')->first()->id
],

['name' => 'Naranjal',
'city_id' => DB::table('cities')->where('name','Agua Dulce')->first()->id
],

['name' => 'Niños Héroes',
'city_id' => DB::table('cities')->where('name','Agua Dulce')->first()->id
],

['name' => 'El Bosque Segunda Sección',
'city_id' => DB::table('cities')->where('name','Agua Dulce')->first()->id
],

['name' => 'El Papayal',
'city_id' => DB::table('cities')->where('name','Agua Dulce')->first()->id
],

['name' => 'Los Pinos',
'city_id' => DB::table('cities')->where('name','Agua Dulce')->first()->id
],

['name' => 'Cuauhtémoc',
'city_id' => DB::table('cities')->where('name','Agua Dulce')->first()->id
],

['name' => 'Uno y Medio',
'city_id' => DB::table('cities')->where('name','Agua Dulce')->first()->id
],

['name' => '4 Caminos',
'city_id' => DB::table('cities')->where('name','Agua Dulce')->first()->id
],

['name' => 'Los Pingüinos',
'city_id' => DB::table('cities')->where('name','Agua Dulce')->first()->id
],

['name' => 'Obrera',
'city_id' => DB::table('cities')->where('name','Agua Dulce')->first()->id
],

['name' => 'Puebla',
'city_id' => DB::table('cities')->where('name','Agua Dulce')->first()->id
],

['name' => 'Benito Juárez',
'city_id' => DB::table('cities')->where('name','Agua Dulce')->first()->id
],

['name' => 'Mil 5',
'city_id' => DB::table('cities')->where('name','Agua Dulce')->first()->id
],

['name' => 'Nueva Del Rio',
'city_id' => DB::table('cities')->where('name','Agua Dulce')->first()->id
],

['name' => 'Alborada',
'city_id' => DB::table('cities')->where('name','Agua Dulce')->first()->id
],

['name' => 'Solidaridad',
'city_id' => DB::table('cities')->where('name','Agua Dulce')->first()->id
],

['name' => 'El Palmar',
'city_id' => DB::table('cities')->where('name','Agua Dulce')->first()->id
],

['name' => '18 de Marzo',
'city_id' => DB::table('cities')->where('name','Agua Dulce')->first()->id
],

['name' => 'El Abulon',
'city_id' => DB::table('cities')->where('name','Agua Dulce')->first()->id
],

['name' => 'Miguel Hidalgo',
'city_id' => DB::table('cities')->where('name','Agua Dulce')->first()->id
],

['name' => 'Diaz Ordaz',
'city_id' => DB::table('cities')->where('name','Agua Dulce')->first()->id
],

['name' => 'PEMEX',
'city_id' => DB::table('cities')->where('name','Agua Dulce')->first()->id
],

['name' => 'Minatitlan Centro',
'city_id' => DB::table('cities')->where('name','Minatitlán')->first()->id
],

['name' => 'Insurgentes Norte',
'city_id' => DB::table('cities')->where('name','Minatitlán')->first()->id
],

['name' => 'Insurgentes Sur',
'city_id' => DB::table('cities')->where('name','Minatitlán')->first()->id
],

['name' => 'Rosalinda',
'city_id' => DB::table('cities')->where('name','Minatitlán')->first()->id
],

['name' => 'Dante Delgado',
'city_id' => DB::table('cities')->where('name','Minatitlán')->first()->id
],

['name' => 'Plaza Cristal',
'city_id' => DB::table('cities')->where('name','Minatitlán')->first()->id
],

['name' => 'Cristal',
'city_id' => DB::table('cities')->where('name','Minatitlán')->first()->id
],

['name' => '16 de Septiembre',
'city_id' => DB::table('cities')->where('name','Minatitlán')->first()->id
],

['name' => 'Las Delicias',
'city_id' => DB::table('cities')->where('name','Minatitlán')->first()->id
],

['name' => 'El Mangal',
'city_id' => DB::table('cities')->where('name','Minatitlán')->first()->id
],

['name' => 'Sector Framboyanes',
'city_id' => DB::table('cities')->where('name','Minatitlán')->first()->id
],

['name' => 'Benito Juárez',
'city_id' => DB::table('cities')->where('name','Minatitlán')->first()->id
],

['name' => 'Luis Echeverría Alvarez',
'city_id' => DB::table('cities')->where('name','Minatitlán')->first()->id
],

['name' => 'La Esmeralda',
'city_id' => DB::table('cities')->where('name','Minatitlán')->first()->id
],

['name' => 'La Fuente',
'city_id' => DB::table('cities')->where('name','Minatitlán')->first()->id
],

['name' => 'Cualipan',
'city_id' => DB::table('cities')->where('name','Minatitlán')->first()->id
],

['name' => 'Tlalcualoya',
'city_id' => DB::table('cities')->where('name','Minatitlán')->first()->id
],

['name' => 'Jardines de Tlalcualeya',
'city_id' => DB::table('cities')->where('name','Minatitlán')->first()->id
],

['name' => 'Nueva Mina Sur',
'city_id' => DB::table('cities')->where('name','Minatitlán')->first()->id
],

['name' => 'Buenavista Sur',
'city_id' => DB::table('cities')->where('name','Minatitlán')->first()->id
],

['name' => 'Santa Clara',
'city_id' => DB::table('cities')->where('name','Minatitlán')->first()->id
],

['name' => 'Nueva Mina Norte',
'city_id' => DB::table('cities')->where('name','Minatitlán')->first()->id
],

['name' => 'El Triángulo',
'city_id' => DB::table('cities')->where('name','Minatitlán')->first()->id
],

['name' => 'Nueva Tacoteno',
'city_id' => DB::table('cities')->where('name','Minatitlán')->first()->id
],

['name' => 'Bohemia',
'city_id' => DB::table('cities')->where('name','Minatitlán')->first()->id
],

['name' => 'Chapala',
'city_id' => DB::table('cities')->where('name','Minatitlán')->first()->id
],

['name' => 'Santo Domingo',
'city_id' => DB::table('cities')->where('name','Minatitlán')->first()->id
],

['name' => 'La Bomba',
'city_id' => DB::table('cities')->where('name','Minatitlán')->first()->id
],

['name' => 'San Carlos',
'city_id' => DB::table('cities')->where('name','Minatitlán')->first()->id
],

['name' => '18 de Marzo',
'city_id' => DB::table('cities')->where('name','Minatitlán')->first()->id
],

['name' => 'Obrera',
'city_id' => DB::table('cities')->where('name','Minatitlán')->first()->id
],

['name' => 'Guayabal',
'city_id' => DB::table('cities')->where('name','Minatitlán')->first()->id
],

['name' => 'Playón Sur',
'city_id' => DB::table('cities')->where('name','Minatitlán')->first()->id
],

['name' => 'Nueva Mina',
'city_id' => DB::table('cities')->where('name','Minatitlán')->first()->id
],

['name' => 'Central de Abastos',
'city_id' => DB::table('cities')->where('name','Minatitlán')->first()->id
],

['name' => 'Los Laureles',
'city_id' => DB::table('cities')->where('name','Minatitlán')->first()->id
],

['name' => 'Residencial Floresta',
'city_id' => DB::table('cities')->where('name','Minatitlán')->first()->id
],

['name' => 'El Casino',
'city_id' => DB::table('cities')->where('name','Minatitlán')->first()->id
],

['name' => 'Jagüey',
'city_id' => DB::table('cities')->where('name','Minatitlán')->first()->id
],

['name' => 'Miguel Hidalgo',
'city_id' => DB::table('cities')->where('name','Minatitlán')->first()->id
],

['name' => 'Francisco I Madero',
'city_id' => DB::table('cities')->where('name','Minatitlán')->first()->id
],

['name' => 'Nueva Esperanza',
'city_id' => DB::table('cities')->where('name','Minatitlán')->first()->id
],

['name' => 'Vicente Guerrero',
'city_id' => DB::table('cities')->where('name','Minatitlán')->first()->id
],

['name' => 'Liberación',
'city_id' => DB::table('cities')->where('name','Minatitlán')->first()->id
],

['name' => 'Miguel Hidalgo',
'city_id' => DB::table('cities')->where('name','Minatitlán')->first()->id
],

['name' => 'Martires de Chicago',
'city_id' => DB::table('cities')->where('name','Minatitlán')->first()->id
],

['name' => 'Misantla',
'city_id' => DB::table('cities')->where('name','Minatitlán')->first()->id
],

['name' => 'Villas del Sol',
'city_id' => DB::table('cities')->where('name','Minatitlán')->first()->id
],

['name' => 'Praderas del Jagüey',
'city_id' => DB::table('cities')->where('name','Minatitlán')->first()->id
],

['name' => 'Ejido El Jagüey',
'city_id' => DB::table('cities')->where('name','Minatitlán')->first()->id
],

['name' => 'Un Paso a La Gloria',
'city_id' => DB::table('cities')->where('name','Minatitlán')->first()->id
],

['name' => 'Guayacanal',
'city_id' => DB::table('cities')->where('name','Minatitlán')->first()->id
],

['name' => 'Adolfo Ruiz Cortines',
'city_id' => DB::table('cities')->where('name','Minatitlán')->first()->id
],

['name' => 'Miguel Alemán Valdez',
'city_id' => DB::table('cities')->where('name','Minatitlán')->first()->id
],

['name' => 'Palmar',
'city_id' => DB::table('cities')->where('name','Minatitlán')->first()->id
],

['name' => 'Nuevo Palmar',
'city_id' => DB::table('cities')->where('name','Minatitlán')->first()->id
],

['name' => 'Aurora',
'city_id' => DB::table('cities')->where('name','Minatitlán')->first()->id
],

['name' => 'Nueva Aurora',
'city_id' => DB::table('cities')->where('name','Minatitlán')->first()->id
],

['name' => '20 de Noviembre',
'city_id' => DB::table('cities')->where('name','Minatitlán')->first()->id
],

['name' => 'Buenavista Norte',
'city_id' => DB::table('cities')->where('name','Minatitlán')->first()->id
],

['name' => 'Gravera 2da Sección',
'city_id' => DB::table('cities')->where('name','Minatitlán')->first()->id
],

['name' => 'Del Maestro',
'city_id' => DB::table('cities')->where('name','Minatitlán')->first()->id
],

['name' => 'Petrolera',
'city_id' => DB::table('cities')->where('name','Minatitlán')->first()->id
],

['name' => 'Nueva Primero de Mayo',
'city_id' => DB::table('cities')->where('name','Minatitlán')->first()->id
],

['name' => 'Salubridad',
'city_id' => DB::table('cities')->where('name','Minatitlán')->first()->id
],

['name' => 'Diana Laura',
'city_id' => DB::table('cities')->where('name','Minatitlán')->first()->id
],

['name' => 'Ex Aeropuerto',
'city_id' => DB::table('cities')->where('name','Minatitlán')->first()->id
],

['name' => 'Tacoteno',
'city_id' => DB::table('cities')->where('name','Minatitlán')->first()->id
],

['name' => 'Guadalupana',
'city_id' => DB::table('cities')->where('name','Minatitlán')->first()->id
],

['name' => 'Alondra de La 29a Zona Militar',
'city_id' => DB::table('cities')->where('name','Minatitlán')->first()->id
],

['name' => 'Eduardo Soto Innes',
'city_id' => DB::table('cities')->where('name','Minatitlán')->first()->id
],

['name' => 'Cuauhtémoc',
'city_id' => DB::table('cities')->where('name','Minatitlán')->first()->id
],

['name' => 'Gravera',
'city_id' => DB::table('cities')->where('name','Minatitlán')->first()->id
],

['name' => 'Potrero Grande',
'city_id' => DB::table('cities')->where('name','Minatitlán')->first()->id
],

['name' => 'Plan de la Ceiba',
'city_id' => DB::table('cities')->where('name','Minatitlán')->first()->id
],

['name' => 'Las Lomas',
'city_id' => DB::table('cities')->where('name','Minatitlán')->first()->id
],

['name' => 'Ixhuatepec (Paso del Chipile)',
'city_id' => DB::table('cities')->where('name','Minatitlán')->first()->id
],

['name' => 'La Victoria',
'city_id' => DB::table('cities')->where('name','Minatitlán')->first()->id
],

['name' => 'Las Ánimas',
'city_id' => DB::table('cities')->where('name','Minatitlán')->first()->id
],

['name' => 'Otapa',
'city_id' => DB::table('cities')->where('name','Minatitlán')->first()->id
],

['name' => 'Coachapa',
'city_id' => DB::table('cities')->where('name','Minatitlán')->first()->id
],

['name' => 'Cafetal',
'city_id' => DB::table('cities')->where('name','Minatitlán')->first()->id
],

['name' => 'Emilio Carranza (Salinas)',
'city_id' => DB::table('cities')->where('name','Minatitlán')->first()->id
],

['name' => 'Las Limas',
'city_id' => DB::table('cities')->where('name','Minatitlán')->first()->id
],

['name' => 'Boca de Oro',
'city_id' => DB::table('cities')->where('name','Minatitlán')->first()->id
],

['name' => 'El Tabasqueño',
'city_id' => DB::table('cities')->where('name','Minatitlán')->first()->id
],

['name' => 'La Esperanza',
'city_id' => DB::table('cities')->where('name','Minatitlán')->first()->id
],

['name' => 'Arroyo Cinta',
'city_id' => DB::table('cities')->where('name','Minatitlán')->first()->id
],

['name' => 'El Jimbal',
'city_id' => DB::table('cities')->where('name','Minatitlán')->first()->id
],

['name' => 'Villa de las Flores',
'city_id' => DB::table('cities')->where('name','Minatitlán')->first()->id
],

['name' => 'San Cristóbal',
'city_id' => DB::table('cities')->where('name','Minatitlán')->first()->id
],

['name' => 'Ojochapa',
'city_id' => DB::table('cities')->where('name','Minatitlán')->first()->id
],

['name' => 'Poblado Cinco de Mayo Dos',
'city_id' => DB::table('cities')->where('name','Minatitlán')->first()->id
],

['name' => 'Antonio Plaza',
'city_id' => DB::table('cities')->where('name','Minatitlán')->first()->id
],

['name' => 'Zamorana',
'city_id' => DB::table('cities')->where('name','Minatitlán')->first()->id
],

['name' => 'Francisco de Garay (Ampliación Colorado)',
'city_id' => DB::table('cities')->where('name','Minatitlán')->first()->id
],

['name' => 'Romita',
'city_id' => DB::table('cities')->where('name','Minatitlán')->first()->id
],

['name' => 'San Cristóbal',
'city_id' => DB::table('cities')->where('name','Minatitlán')->first()->id
],

['name' => 'La Nueva Concepción',
'city_id' => DB::table('cities')->where('name','Minatitlán')->first()->id
],

['name' => 'El Rubio',
'city_id' => DB::table('cities')->where('name','Minatitlán')->first()->id
],

['name' => 'Chancarral',
'city_id' => DB::table('cities')->where('name','Minatitlán')->first()->id
],

['name' => 'Francisco de Garay (Tacoacinta)',
'city_id' => DB::table('cities')->where('name','Minatitlán')->first()->id
],

['name' => 'Rancho Nuevo Carrizal',
'city_id' => DB::table('cities')->where('name','Minatitlán')->first()->id
],

['name' => 'Capoacan',
'city_id' => DB::table('cities')->where('name','Minatitlán')->first()->id
],

['name' => 'Chichigapa',
'city_id' => DB::table('cities')->where('name','Minatitlán')->first()->id
],

['name' => 'Mapachapa',
'city_id' => DB::table('cities')->where('name','Minatitlán')->first()->id
],

['name' => 'El Remolino',
'city_id' => DB::table('cities')->where('name','Minatitlán')->first()->id
],

['name' => 'Boca de Uxpanapa',
'city_id' => DB::table('cities')->where('name','Minatitlán')->first()->id
],

['name' => 'Tacomango',
'city_id' => DB::table('cities')->where('name','Minatitlán')->first()->id
],

['name' => 'El Iguanero',
'city_id' => DB::table('cities')->where('name','Minatitlán')->first()->id
],

['name' => 'San Carlos',
'city_id' => DB::table('cities')->where('name','Minatitlán')->first()->id
],

['name' => 'Buena Vista',
'city_id' => DB::table('cities')->where('name','Minatitlán')->first()->id
],

['name' => 'El Arenal',
'city_id' => DB::table('cities')->where('name','Minatitlán')->first()->id
],

['name' => 'Ojo de Agua',
'city_id' => DB::table('cities')->where('name','Minatitlán')->first()->id
],

['name' => 'El Progreso',
'city_id' => DB::table('cities')->where('name','Minatitlán')->first()->id
],

['name' => 'Monte Obscuro',
'city_id' => DB::table('cities')->where('name','Minatitlán')->first()->id
],

['name' => 'El Cedral',
'city_id' => DB::table('cities')->where('name','Minatitlán')->first()->id
],

['name' => 'Magareños',
'city_id' => DB::table('cities')->where('name','Minatitlán')->first()->id
],

['name' => 'Emiliano Zapata Dos',
'city_id' => DB::table('cities')->where('name','Minatitlán')->first()->id
],

['name' => 'La Concepción',
'city_id' => DB::table('cities')->where('name','Minatitlán')->first()->id
],

['name' => 'Filisola',
'city_id' => DB::table('cities')->where('name','Minatitlán')->first()->id
],

['name' => 'El Arenal',
'city_id' => DB::table('cities')->where('name','Minatitlán')->first()->id
],

['name' => 'El Rubí',
'city_id' => DB::table('cities')->where('name','Minatitlán')->first()->id
],

['name' => 'La Pera',
'city_id' => DB::table('cities')->where('name','Minatitlán')->first()->id
],

['name' => 'Cadete Agustín Melgar',
'city_id' => DB::table('cities')->where('name','Minatitlán')->first()->id
],

['name' => 'Yucatecal',
'city_id' => DB::table('cities')->where('name','Minatitlán')->first()->id
],

['name' => 'Tecuanapilla',
'city_id' => DB::table('cities')->where('name','Minatitlán')->first()->id
],

['name' => 'Antigua Uxpana',
'city_id' => DB::table('cities')->where('name','Minatitlán')->first()->id
],

['name' => 'Francita',
'city_id' => DB::table('cities')->where('name','Minatitlán')->first()->id
],

['name' => 'Pueblo Viejo (Kilómetro 4)',
'city_id' => DB::table('cities')->where('name','Minatitlán')->first()->id
],

['name' => 'San Antonio',
'city_id' => DB::table('cities')->where('name','Minatitlán')->first()->id
],

['name' => 'Los Cabritos',
'city_id' => DB::table('cities')->where('name','Minatitlán')->first()->id
],

['name' => 'San Cándido',
'city_id' => DB::table('cities')->where('name','Minatitlán')->first()->id
],

['name' => 'Cuauhtémoc',
'city_id' => DB::table('cities')->where('name','Minatitlán')->first()->id
],

['name' => 'Miguel Alemán',
'city_id' => DB::table('cities')->where('name','Minatitlán')->first()->id
],

['name' => 'El Carrizal',
'city_id' => DB::table('cities')->where('name','Minatitlán')->first()->id
],

['name' => 'José María Morelos',
'city_id' => DB::table('cities')->where('name','Minatitlán')->first()->id
],

['name' => 'El Encanto',
'city_id' => DB::table('cities')->where('name','Minatitlán')->first()->id
],

['name' => 'La Nueva Reforma',
'city_id' => DB::table('cities')->where('name','Minatitlán')->first()->id
],

['name' => 'Nuevo Zaragoza',
'city_id' => DB::table('cities')->where('name','Minatitlán')->first()->id
],

['name' => 'La Providencia',
'city_id' => DB::table('cities')->where('name','Minatitlán')->first()->id
],

['name' => 'Rancho Nuevo de Morelos',
'city_id' => DB::table('cities')->where('name','Minatitlán')->first()->id
],

['name' => 'San Andrés Loma Encerrada',
'city_id' => DB::table('cities')->where('name','Minatitlán')->first()->id
],

['name' => 'Agua Fría',
'city_id' => DB::table('cities')->where('name','Minatitlán')->first()->id
],

['name' => 'San Plácido',
'city_id' => DB::table('cities')->where('name','Minatitlán')->first()->id
],

['name' => 'Enrique Rodríguez Cano',
'city_id' => DB::table('cities')->where('name','Minatitlán')->first()->id
],

['name' => 'Ampliación el Deposito',
'city_id' => DB::table('cities')->where('name','Minatitlán')->first()->id
],

['name' => 'San José Pochitoque',
'city_id' => DB::table('cities')->where('name','Minatitlán')->first()->id
],

['name' => 'Las Carmelitas',
'city_id' => DB::table('cities')->where('name','Minatitlán')->first()->id
],

['name' => 'El Diamante',
'city_id' => DB::table('cities')->where('name','Minatitlán')->first()->id
],

['name' => 'Nueva Reforma',
'city_id' => DB::table('cities')->where('name','Minatitlán')->first()->id
],

['name' => 'Gustavo Díaz Ordaz',
'city_id' => DB::table('cities')->where('name','Minatitlán')->first()->id
],

['name' => 'Crucero Arroyo de Chichigapan',
'city_id' => DB::table('cities')->where('name','Minatitlán')->first()->id
],

['name' => 'Adalberto Tejeda [Sección Dos]',
'city_id' => DB::table('cities')->where('name','Minatitlán')->first()->id
],

['name' => 'El Tortuguero',
'city_id' => DB::table('cities')->where('name','Minatitlán')->first()->id
],

['name' => 'La Michoacana',
'city_id' => DB::table('cities')->where('name','Minatitlán')->first()->id
],

['name' => 'Moctezuma',
'city_id' => DB::table('cities')->where('name','Minatitlán')->first()->id
],

['name' => 'Gustavo Díaz Ordaz (San Felipe)',
'city_id' => DB::table('cities')->where('name','Minatitlán')->first()->id
],

['name' => 'Las Palmas',
'city_id' => DB::table('cities')->where('name','Minatitlán')->first()->id
],

['name' => 'Los Manantiales',
'city_id' => DB::table('cities')->where('name','Minatitlán')->first()->id
],

['name' => 'Adolfo López Mateos',
'city_id' => DB::table('cities')->where('name','Minatitlán')->first()->id
],

['name' => 'La Fortuna',
'city_id' => DB::table('cities')->where('name','Minatitlán')->first()->id
],

['name' => 'Adalberto Tejeda (Sección Cuatro)',
'city_id' => DB::table('cities')->where('name','Minatitlán')->first()->id
],

['name' => 'Fernando López Arias',
'city_id' => DB::table('cities')->where('name','Minatitlán')->first()->id
],

['name' => 'Progreso del Mirador',
'city_id' => DB::table('cities')->where('name','Minatitlán')->first()->id
],

['name' => 'Francisco Villa',
'city_id' => DB::table('cities')->where('name','Minatitlán')->first()->id
],

['name' => 'Alto de Uxpanapa',
'city_id' => DB::table('cities')->where('name','Minatitlán')->first()->id
],

['name' => 'José Cardel',
'city_id' => DB::table('cities')->where('name','Minatitlán')->first()->id
],

['name' => 'Palancares (Primera Sección)',
'city_id' => DB::table('cities')->where('name','Minatitlán')->first()->id
],

['name' => 'Adalberto Tejeda (Sección Cinco)',
'city_id' => DB::table('cities')->where('name','Minatitlán')->first()->id
],

['name' => 'Tenochtitlán',
'city_id' => DB::table('cities')->where('name','Minatitlán')->first()->id
],

['name' => 'Carolino Anaya Ramírez',
'city_id' => DB::table('cities')->where('name','Minatitlán')->first()->id
],

['name' => 'La Breña',
'city_id' => DB::table('cities')->where('name','Minatitlán')->first()->id
],

['name' => 'La Reforma',
'city_id' => DB::table('cities')->where('name','Minatitlán')->first()->id
],

['name' => 'Norberto Aguirre Palancares',
'city_id' => DB::table('cities')->where('name','Minatitlán')->first()->id
],

['name' => 'Adalberto Tejeda (Sección Tres)',
'city_id' => DB::table('cities')->where('name','Minatitlán')->first()->id
],

['name' => 'Aquiles Serdán (Filosola)',
'city_id' => DB::table('cities')->where('name','Minatitlán')->first()->id
],

['name' => 'Plan de Limones',
'city_id' => DB::table('cities')->where('name','Minatitlán')->first()->id
],

['name' => 'El Valedor',
'city_id' => DB::table('cities')->where('name','Minatitlán')->first()->id
],

['name' => 'El Chiflado',
'city_id' => DB::table('cities')->where('name','Minatitlán')->first()->id
],

['name' => 'Chichonal Nopalapa',
'city_id' => DB::table('cities')->where('name','Minatitlán')->first()->id
],

['name' => 'San Vicente',
'city_id' => DB::table('cities')->where('name','Minatitlán')->first()->id
],

['name' => 'El Roble',
'city_id' => DB::table('cities')->where('name','Minatitlán')->first()->id
],

['name' => 'Lázaro Cárdenas',
'city_id' => DB::table('cities')->where('name','Minatitlán')->first()->id
],

['name' => 'Emiliano Zapata',
'city_id' => DB::table('cities')->where('name','Minatitlán')->first()->id
],

['name' => 'Nuevo Atoyac',
'city_id' => DB::table('cities')->where('name','Minatitlán')->first()->id
],

['name' => 'Niño Artillero',
'city_id' => DB::table('cities')->where('name','Minatitlán')->first()->id
],

['name' => 'Josefa Ortiz de Domínguez',
'city_id' => DB::table('cities')->where('name','Minatitlán')->first()->id
],

['name' => 'Cándido Aguilar',
'city_id' => DB::table('cities')->where('name','Minatitlán')->first()->id
],

['name' => 'El Chamizal',
'city_id' => DB::table('cities')->where('name','Minatitlán')->first()->id
],

['name' => 'José Guadalupe Rodríguez (La Jota)',
'city_id' => DB::table('cities')->where('name','Minatitlán')->first()->id
],

['name' => 'Carrizal Cinco de Febrero',
'city_id' => DB::table('cities')->where('name','Minatitlán')->first()->id
],

['name' => 'Ignacio Aldama (El Tereso)',
'city_id' => DB::table('cities')->where('name','Minatitlán')->first()->id
],

['name' => 'El Monal',
'city_id' => DB::table('cities')->where('name','Minatitlán')->first()->id
],

['name' => 'Cahuapan',
'city_id' => DB::table('cities')->where('name','Minatitlán')->first()->id
],

['name' => 'La Esmeralda',
'city_id' => DB::table('cities')->where('name','Minatitlán')->first()->id
],

['name' => 'Sehualaca',
'city_id' => DB::table('cities')->where('name','Minatitlán')->first()->id
],

['name' => 'La Abundancia',
'city_id' => DB::table('cities')->where('name','Minatitlán')->first()->id
],

['name' => 'El Faisán',
'city_id' => DB::table('cities')->where('name','Minatitlán')->first()->id
],

['name' => 'Benito Juárez (Cocuite)',
'city_id' => DB::table('cities')->where('name','Minatitlán')->first()->id
],

['name' => 'La Nueva Rosita',
'city_id' => DB::table('cities')->where('name','Minatitlán')->first()->id
],

['name' => 'Buena Vista',
'city_id' => DB::table('cities')->where('name','Minatitlán')->first()->id
],

['name' => 'Nuevo Zaragoza Tercera Fracción',
'city_id' => DB::table('cities')->where('name','Minatitlán')->first()->id
],

['name' => 'Hidalgotitlan',
'city_id' => DB::table('cities')->where('name','Hidalgotitlán')->first()->id
],

['name' => 'El Arrozal',
'city_id' => DB::table('cities')->where('name','Hidalgotitlán')->first()->id
],

['name' => 'Las Palomas',
'city_id' => DB::table('cities')->where('name','Hidalgotitlán')->first()->id
],

['name' => 'Galapata',
'city_id' => DB::table('cities')->where('name','Hidalgotitlán')->first()->id
],

['name' => 'Los Laureles',
'city_id' => DB::table('cities')->where('name','Hidalgotitlán')->first()->id
],

['name' => 'Chichonal',
'city_id' => DB::table('cities')->where('name','Hidalgotitlán')->first()->id
],

['name' => 'San Carlos',
'city_id' => DB::table('cities')->where('name','Hidalgotitlán')->first()->id
],

['name' => 'Cerro Pelón (El Retorno)',
'city_id' => DB::table('cities')->where('name','Hidalgotitlán')->first()->id
],

['name' => 'La Esperanza',
'city_id' => DB::table('cities')->where('name','Hidalgotitlán')->first()->id
],

['name' => 'Fortuño y Potrero Largo',
'city_id' => DB::table('cities')->where('name','Hidalgotitlán')->first()->id
],

['name' => 'Licenciado Gabriel Ramos Millán',
'city_id' => DB::table('cities')->where('name','Hidalgotitlán')->first()->id
],

['name' => 'Ignacio Allende Chico (El Robalito)',
'city_id' => DB::table('cities')->where('name','Hidalgotitlán')->first()->id
],

['name' => 'Arroyo de la Palma',
'city_id' => DB::table('cities')->where('name','Hidalgotitlán')->first()->id
],

['name' => 'Adalberto Tejeda',
'city_id' => DB::table('cities')->where('name','Hidalgotitlán')->first()->id
],

['name' => 'La Tropical',
'city_id' => DB::table('cities')->where('name','Hidalgotitlán')->first()->id
],

['name' => 'El Progreso',
'city_id' => DB::table('cities')->where('name','Hidalgotitlán')->first()->id
],

['name' => 'Primero de Mayo',
'city_id' => DB::table('cities')->where('name','Hidalgotitlán')->first()->id
],

['name' => 'Vicente Guerrero',
'city_id' => DB::table('cities')->where('name','Hidalgotitlán')->first()->id
],

['name' => 'Benito Juárez',
'city_id' => DB::table('cities')->where('name','Hidalgotitlán')->first()->id
],

['name' => 'Las Conchas (La Colonia)',
'city_id' => DB::table('cities')->where('name','Hidalgotitlán')->first()->id
],

['name' => 'Miguel Hidalgo',
'city_id' => DB::table('cities')->where('name','Hidalgotitlán')->first()->id
],

['name' => 'La Nueva Victoria',
'city_id' => DB::table('cities')->where('name','Hidalgotitlán')->first()->id
],

['name' => 'La Arena',
'city_id' => DB::table('cities')->where('name','Hidalgotitlán')->first()->id
],

['name' => 'General Ignacio Zaragoza (Las Quinientas)',
'city_id' => DB::table('cities')->where('name','Hidalgotitlán')->first()->id
],

['name' => 'La Concepción (La Unión)',
'city_id' => DB::table('cities')->where('name','Hidalgotitlán')->first()->id
],

['name' => 'San José',
'city_id' => DB::table('cities')->where('name','Hidalgotitlán')->first()->id
],

['name' => 'El Robalo',
'city_id' => DB::table('cities')->where('name','Hidalgotitlán')->first()->id
],

['name' => 'Urbina',
'city_id' => DB::table('cities')->where('name','Hidalgotitlán')->first()->id
],

['name' => 'La Guadalupe',
'city_id' => DB::table('cities')->where('name','Hidalgotitlán')->first()->id
],

['name' => 'Ignacio Allende el Grande',
'city_id' => DB::table('cities')->where('name','Hidalgotitlán')->first()->id
],

['name' => 'Mata de Plátano',
'city_id' => DB::table('cities')->where('name','Hidalgotitlán')->first()->id
],

['name' => 'El Higo',
'city_id' => DB::table('cities')->where('name','Hidalgotitlán')->first()->id
],

['name' => 'Colonia Rodolfo Sánchez Taboada (Primera Sección)',
'city_id' => DB::table('cities')->where('name','Hidalgotitlán')->first()->id
],

['name' => 'General Rodolfo Sánchez Taboada (Los Juanes)',
'city_id' => DB::table('cities')->where('name','Hidalgotitlán')->first()->id
],

['name' => 'Jesús Carranza',
'city_id' => DB::table('cities')->where('name','Jesús Carranza')->first()->id
],

['name' => 'La Cruz',
'city_id' => DB::table('cities')->where('name','Jesús Carranza')->first()->id
],

['name' => 'Nazario Ortiz Garza (El Veintidós)',
'city_id' => DB::table('cities')->where('name','Jesús Carranza')->first()->id
],

['name' => 'El Súchil',
'city_id' => DB::table('cities')->where('name','Jesús Carranza')->first()->id
],

['name' => 'Brecha Numero 18',
'city_id' => DB::table('cities')->where('name','Jesús Carranza')->first()->id
],

['name' => 'Brecha Número 17',
'city_id' => DB::table('cities')->where('name','Jesús Carranza')->first()->id
],

['name' => 'Cuauhtémoc',
'city_id' => DB::table('cities')->where('name','Jesús Carranza')->first()->id
],

['name' => 'El Redentor',
'city_id' => DB::table('cities')->where('name','Jesús Carranza')->first()->id
],

['name' => 'Las Limas',
'city_id' => DB::table('cities')->where('name','Jesús Carranza')->first()->id
],

['name' => 'San Martín',
'city_id' => DB::table('cities')->where('name','Jesús Carranza')->first()->id
],

['name' => 'Santo Domingo',
'city_id' => DB::table('cities')->where('name','Jesús Carranza')->first()->id
],

['name' => 'La Jarochita',
'city_id' => DB::table('cities')->where('name','Jesús Carranza')->first()->id
],

['name' => 'Boca Arenales',
'city_id' => DB::table('cities')->where('name','Jesús Carranza')->first()->id
],

['name' => 'Coapiloloyita',
'city_id' => DB::table('cities')->where('name','Jesús Carranza')->first()->id
],

['name' => 'Cuauhtémoc Dos',
'city_id' => DB::table('cities')->where('name','Jesús Carranza')->first()->id
],

['name' => 'El Tehuacán',
'city_id' => DB::table('cities')->where('name','Jesús Carranza')->first()->id
],

['name' => 'El Totoloche',
'city_id' => DB::table('cities')->where('name','Jesús Carranza')->first()->id
],

['name' => 'Las Perlas',
'city_id' => DB::table('cities')->where('name','Jesús Carranza')->first()->id
],

['name' => 'Nuevo Zacatepec',
'city_id' => DB::table('cities')->where('name','Jesús Carranza')->first()->id
],

['name' => 'Nuevo Zacualpan',
'city_id' => DB::table('cities')->where('name','Jesús Carranza')->first()->id
],

['name' => 'Profesor Roberto Barrios',
'city_id' => DB::table('cities')->where('name','Jesús Carranza')->first()->id
],

['name' => 'Tepachillo',
'city_id' => DB::table('cities')->where('name','Jesús Carranza')->first()->id
],

['name' => 'Colombia Land',
'city_id' => DB::table('cities')->where('name','Jesús Carranza')->first()->id
],

['name' => 'Fernando López Arias',
'city_id' => DB::table('cities')->where('name','Jesús Carranza')->first()->id
],

['name' => 'La Candelaria',
'city_id' => DB::table('cities')->where('name','Jesús Carranza')->first()->id
],

['name' => 'La Desviación San Miguel del Río',
'city_id' => DB::table('cities')->where('name','Jesús Carranza')->first()->id
],

['name' => 'Palo Dulce',
'city_id' => DB::table('cities')->where('name','Jesús Carranza')->first()->id
],

['name' => 'Eugenio Méndez Docurro',
'city_id' => DB::table('cities')->where('name','Jesús Carranza')->first()->id
],

['name' => 'Brecha Número 22',
'city_id' => DB::table('cities')->where('name','Jesús Carranza')->first()->id
],

['name' => 'Brecha Número 21',
'city_id' => DB::table('cities')->where('name','Jesús Carranza')->first()->id
],

['name' => 'Chicaján',
'city_id' => DB::table('cities')->where('name','Jesús Carranza')->first()->id
],

['name' => 'Santa Amalia',
'city_id' => DB::table('cities')->where('name','Jesús Carranza')->first()->id
],

['name' => 'Buena Vista 1',
'city_id' => DB::table('cities')->where('name','Jesús Carranza')->first()->id
],

['name' => 'Colonia Nuevo Morelos',
'city_id' => DB::table('cities')->where('name','Jesús Carranza')->first()->id
],

['name' => 'Desviación a Paraíso',
'city_id' => DB::table('cities')->where('name','Jesús Carranza')->first()->id
],

['name' => 'El Paraíso',
'city_id' => DB::table('cities')->where('name','Jesús Carranza')->first()->id
],

['name' => 'Hidalguense',
'city_id' => DB::table('cities')->where('name','Jesús Carranza')->first()->id
],

['name' => 'Puente la Gloria',
'city_id' => DB::table('cities')->where('name','Jesús Carranza')->first()->id
],

['name' => 'San Martín',
'city_id' => DB::table('cities')->where('name','Jesús Carranza')->first()->id
],

['name' => 'Cuauhtémoc',
'city_id' => DB::table('cities')->where('name','Jesús Carranza')->first()->id
],

['name' => 'El Manantial',
'city_id' => DB::table('cities')->where('name','Jesús Carranza')->first()->id
],

['name' => 'El Teniente',
'city_id' => DB::table('cities')->where('name','Jesús Carranza')->first()->id
],

['name' => 'Jaltepec',
'city_id' => DB::table('cities')->where('name','Jesús Carranza')->first()->id
],

['name' => 'La Guadalupana',
'city_id' => DB::table('cities')->where('name','Jesús Carranza')->first()->id
],

['name' => 'Palo Dulce',
'city_id' => DB::table('cities')->where('name','Jesús Carranza')->first()->id
],

['name' => 'Suchilapan Cardenas',
'city_id' => DB::table('cities')->where('name','Jesús Carranza')->first()->id
],

['name' => 'Nuevo Morelos',
'city_id' => DB::table('cities')->where('name','Jesús Carranza')->first()->id
],

['name' => 'Adalberto Tejeda',
'city_id' => DB::table('cities')->where('name','Jesús Carranza')->first()->id
],

['name' => 'El Naranjo',
'city_id' => DB::table('cities')->where('name','Jesús Carranza')->first()->id
],

['name' => 'Santa Cecilia',
'city_id' => DB::table('cities')->where('name','Jesús Carranza')->first()->id
],

['name' => 'Domingo Arenas',
'city_id' => DB::table('cities')->where('name','Jesús Carranza')->first()->id
],

['name' => 'El Mirador',
'city_id' => DB::table('cities')->where('name','Jesús Carranza')->first()->id
],

['name' => 'Francisco I. Madero',
'city_id' => DB::table('cities')->where('name','Jesús Carranza')->first()->id
],

['name' => 'Francisco Villa (Tres Gardenias)',
'city_id' => DB::table('cities')->where('name','Jesús Carranza')->first()->id
],

['name' => 'Ojo de Agua',
'city_id' => DB::table('cities')->where('name','Jesús Carranza')->first()->id
],

['name' => 'Adrián Castrejón',
'city_id' => DB::table('cities')->where('name','Jesús Carranza')->first()->id
],

['name' => 'Adrián Castrejón Viejo',
'city_id' => DB::table('cities')->where('name','Jesús Carranza')->first()->id
],

['name' => 'Buenavista 2',
'city_id' => DB::table('cities')->where('name','Jesús Carranza')->first()->id
],

['name' => 'Iturbide II',
'city_id' => DB::table('cities')->where('name','Jesús Carranza')->first()->id
],

['name' => 'Progreso Veracruzano',
'city_id' => DB::table('cities')->where('name','Jesús Carranza')->first()->id
],

['name' => 'Nuevo Paraíso',
'city_id' => DB::table('cities')->where('name','Jesús Carranza')->first()->id
],

['name' => 'Cascajal Uno',
'city_id' => DB::table('cities')->where('name','Jesús Carranza')->first()->id
],

['name' => 'Desviación a Vasconcelos',
'city_id' => DB::table('cities')->where('name','Jesús Carranza')->first()->id
],

['name' => 'José Vasconcelos',
'city_id' => DB::table('cities')->where('name','Jesús Carranza')->first()->id
],

['name' => 'San Luis',
'city_id' => DB::table('cities')->where('name','Jesús Carranza')->first()->id
],

['name' => 'Santa Rosa',
'city_id' => DB::table('cities')->where('name','Jesús Carranza')->first()->id
],

['name' => 'Tecolotepec',
'city_id' => DB::table('cities')->where('name','Jesús Carranza')->first()->id
],

['name' => 'Vista Hermosa (Colorado)',
'city_id' => DB::table('cities')->where('name','Jesús Carranza')->first()->id
],

['name' => 'El Tepache',
'city_id' => DB::table('cities')->where('name','Jesús Carranza')->first()->id
],

['name' => 'Desviación Oaxaqueña',
'city_id' => DB::table('cities')->where('name','Jesús Carranza')->first()->id
],

['name' => 'El Palmar',
'city_id' => DB::table('cities')->where('name','Jesús Carranza')->first()->id
],

['name' => 'El Paraíso',
'city_id' => DB::table('cities')->where('name','Jesús Carranza')->first()->id
],

['name' => 'La Ceiba',
'city_id' => DB::table('cities')->where('name','Jesús Carranza')->first()->id
],

['name' => 'Nueva Tapatía',
'city_id' => DB::table('cities')->where('name','Jesús Carranza')->first()->id
],

['name' => 'Iturbide I',
'city_id' => DB::table('cities')->where('name','Jesús Carranza')->first()->id
],

['name' => 'La Laguna Iturbide',
'city_id' => DB::table('cities')->where('name','Jesús Carranza')->first()->id
],

['name' => 'La Oaxaqueña',
'city_id' => DB::table('cities')->where('name','Jesús Carranza')->first()->id
],

['name' => 'Las Perlas',
'city_id' => DB::table('cities')->where('name','Jesús Carranza')->first()->id
],

['name' => 'Chalchijapan (Anexo el Paraíso)',
'city_id' => DB::table('cities')->where('name','Jesús Carranza')->first()->id
],

['name' => 'La Boca del Chalchijapan',
'city_id' => DB::table('cities')->where('name','Jesús Carranza')->first()->id
],

['name' => 'Macaya',
'city_id' => DB::table('cities')->where('name','Jesús Carranza')->first()->id
],

['name' => 'Madamita',
'city_id' => DB::table('cities')->where('name','Jesús Carranza')->first()->id
],

['name' => 'Modelo Dos Ríos (Las Flores)',
'city_id' => DB::table('cities')->where('name','Jesús Carranza')->first()->id
],

['name' => 'Suchilapan del Río',
'city_id' => DB::table('cities')->where('name','Jesús Carranza')->first()->id
],

['name' => 'Lic. Fernando López Arias',
'city_id' => DB::table('cities')->where('name','Jesús Carranza')->first()->id
],

['name' => 'El Veintidós',
'city_id' => DB::table('cities')->where('name','Jesús Carranza')->first()->id
],

['name' => 'Adolfo López Mateos (Zacatal)',
'city_id' => DB::table('cities')->where('name','Jesús Carranza')->first()->id
],

['name' => 'Nueva Esperanza',
'city_id' => DB::table('cities')->where('name','Jesús Carranza')->first()->id
],

['name' => 'Cascajal Dos',
'city_id' => DB::table('cities')->where('name','Jesús Carranza')->first()->id
],

['name' => 'Graciano Sánchez',
'city_id' => DB::table('cities')->where('name','Jesús Carranza')->first()->id
],

['name' => 'Heriberto Jara Corona',
'city_id' => DB::table('cities')->where('name','Jesús Carranza')->first()->id
],

['name' => 'Josefa Ortiz de Domínguez (Tronconada)',
'city_id' => DB::table('cities')->where('name','Jesús Carranza')->first()->id
],

['name' => 'Nuevo Progreso (Las Huertas Medina)',
'city_id' => DB::table('cities')->where('name','Jesús Carranza')->first()->id
],

['name' => 'Plan de Pericos',
'city_id' => DB::table('cities')->where('name','Jesús Carranza')->first()->id
],

['name' => 'Arroyo Azul',
'city_id' => DB::table('cities')->where('name','Jesús Carranza')->first()->id
],

['name' => 'Carolino Anaya',
'city_id' => DB::table('cities')->where('name','Jesús Carranza')->first()->id
],

['name' => 'Cuauhtémoc de Tierra Blanca (Amatal)',
'city_id' => DB::table('cities')->where('name','Jesús Carranza')->first()->id
],

['name' => 'Enrique Rodríguez Cano',
'city_id' => DB::table('cities')->where('name','Jesús Carranza')->first()->id
],

['name' => 'General Vicente Guerrero',
'city_id' => DB::table('cities')->where('name','Jesús Carranza')->first()->id
],

['name' => 'Ricardo Flores Magón',
'city_id' => DB::table('cities')->where('name','Jesús Carranza')->first()->id
],

['name' => 'El Tesoro',
'city_id' => DB::table('cities')->where('name','Jesús Carranza')->first()->id
],

['name' => 'Niños Héroes de Chapultepec (Zetina)',
'city_id' => DB::table('cities')->where('name','Jesús Carranza')->first()->id
],

['name' => 'San Cristóbal',
'city_id' => DB::table('cities')->where('name','Jesús Carranza')->first()->id
],

['name' => 'Suchilapilla',
'city_id' => DB::table('cities')->where('name','Jesús Carranza')->first()->id
],

['name' => 'Juan de la Luz Enríquez',
'city_id' => DB::table('cities')->where('name','Jesús Carranza')->first()->id
],

['name' => 'Casa Blanca (Entrada a Veinticuatro de Febrero)',
'city_id' => DB::table('cities')->where('name','Jesús Carranza')->first()->id
],

['name' => 'Vista Hermosa de Hidalgo',
'city_id' => DB::table('cities')->where('name','Jesús Carranza')->first()->id
],

['name' => 'Juan Escutia',
'city_id' => DB::table('cities')->where('name','Jesús Carranza')->first()->id
],

['name' => 'Veinticuatro de Febrero',
'city_id' => DB::table('cities')->where('name','Jesús Carranza')->first()->id
],

['name' => 'Dieciséis de Septiembre',
'city_id' => DB::table('cities')->where('name','Jesús Carranza')->first()->id
],

['name' => 'El Nopal',
'city_id' => DB::table('cities')->where('name','Jesús Carranza')->first()->id
],

['name' => 'Francisco Villa Nuevo',
'city_id' => DB::table('cities')->where('name','Jesús Carranza')->first()->id
],

['name' => 'Francisco Villa Viejo',
'city_id' => DB::table('cities')->where('name','Jesús Carranza')->first()->id
],

['name' => 'La Providencia',
'city_id' => DB::table('cities')->where('name','Jesús Carranza')->first()->id
],

['name' => 'Nipojpolíhuitl',
'city_id' => DB::table('cities')->where('name','Jesús Carranza')->first()->id
],

['name' => 'Cinco de Mayo',
'city_id' => DB::table('cities')->where('name','Jesús Carranza')->first()->id
],

['name' => 'Cuaclán',
'city_id' => DB::table('cities')->where('name','Jesús Carranza')->first()->id
],

['name' => 'Suchilapan',
'city_id' => DB::table('cities')->where('name','Jesús Carranza')->first()->id
],

['name' => 'Guadalupe Piedra Bola Castillito',
'city_id' => DB::table('cities')->where('name','Jesús Carranza')->first()->id
],

['name' => 'La Esperanza',
'city_id' => DB::table('cities')->where('name','Jesús Carranza')->first()->id
],

['name' => 'Lázaro Cárdenas',
'city_id' => DB::table('cities')->where('name','Jesús Carranza')->first()->id
],

['name' => 'Nuevo Progreso',
'city_id' => DB::table('cities')->where('name','Jesús Carranza')->first()->id
],

['name' => 'Revolución',
'city_id' => DB::table('cities')->where('name','Jesús Carranza')->first()->id
],

['name' => 'San Miguel del Río',
'city_id' => DB::table('cities')->where('name','Jesús Carranza')->first()->id
],

['name' => 'Las Choapas Centro',
'city_id' => DB::table('cities')->where('name','Las Choapas')->first()->id
],

['name' => 'San José del Carmen',
'city_id' => DB::table('cities')->where('name','Las Choapas')->first()->id
],

['name' => 'Agraria',
'city_id' => DB::table('cities')->where('name','Las Choapas')->first()->id
],

['name' => 'Anáhuac',
'city_id' => DB::table('cities')->where('name','Las Choapas')->first()->id
],

['name' => 'Aviación',
'city_id' => DB::table('cities')->where('name','Las Choapas')->first()->id
],

['name' => 'Campo Nuevo',
'city_id' => DB::table('cities')->where('name','Las Choapas')->first()->id
],

['name' => 'Hollywood',
'city_id' => DB::table('cities')->where('name','Las Choapas')->first()->id
],

['name' => 'Huapacal',
'city_id' => DB::table('cities')->where('name','Las Choapas')->first()->id
],

['name' => 'Ignacio Zaragoza',
'city_id' => DB::table('cities')->where('name','Las Choapas')->first()->id
],

['name' => 'J. Mario Rosado 1a Sección',
'city_id' => DB::table('cities')->where('name','Las Choapas')->first()->id
],

['name' => 'La Sabana',
'city_id' => DB::table('cities')->where('name','Las Choapas')->first()->id
],

['name' => 'Las Flores',
'city_id' => DB::table('cities')->where('name','Las Choapas')->first()->id
],

['name' => 'México',
'city_id' => DB::table('cities')->where('name','Las Choapas')->first()->id
],

['name' => 'Nazareth',
'city_id' => DB::table('cities')->where('name','Las Choapas')->first()->id
],

['name' => 'Olmeca',
'city_id' => DB::table('cities')->where('name','Las Choapas')->first()->id
],

['name' => 'Reforma',
'city_id' => DB::table('cities')->where('name','Las Choapas')->first()->id
],

['name' => 'Tancochapa',
'city_id' => DB::table('cities')->where('name','Las Choapas')->first()->id
],

['name' => 'Tepito',
'city_id' => DB::table('cities')->where('name','Las Choapas')->first()->id
],

['name' => 'El Huapacalito',
'city_id' => DB::table('cities')->where('name','Las Choapas')->first()->id
],

['name' => 'J. Mario Rosado 2a Sección',
'city_id' => DB::table('cities')->where('name','Las Choapas')->first()->id
],

['name' => 'La Cuevita',
'city_id' => DB::table('cities')->where('name','Las Choapas')->first()->id
],

['name' => 'La Aurora',
'city_id' => DB::table('cities')->where('name','Las Choapas')->first()->id
],

['name' => 'Carmen Romano de López Portillo',
'city_id' => DB::table('cities')->where('name','Las Choapas')->first()->id
],

['name' => 'Francisco Villa',
'city_id' => DB::table('cities')->where('name','Las Choapas')->first()->id
],

['name' => 'Solidaridad',
'city_id' => DB::table('cities')->where('name','Las Choapas')->first()->id
],

['name' => 'Los Pinos',
'city_id' => DB::table('cities')->where('name','Las Choapas')->first()->id
],

['name' => 'El Rabon',
'city_id' => DB::table('cities')->where('name','Las Choapas')->first()->id
],

['name' => 'Hidalgo',
'city_id' => DB::table('cities')->where('name','Las Choapas')->first()->id
],

['name' => 'La Hacienda',
'city_id' => DB::table('cities')->where('name','Las Choapas')->first()->id
],

['name' => 'Santa Elena',
'city_id' => DB::table('cities')->where('name','Las Choapas')->first()->id
],

['name' => 'El Plan',
'city_id' => DB::table('cities')->where('name','Las Choapas')->first()->id
],

['name' => 'Los Robles',
'city_id' => DB::table('cities')->where('name','Las Choapas')->first()->id
],

['name' => 'Casa Blanca',
'city_id' => DB::table('cities')->where('name','Las Choapas')->first()->id
],

['name' => 'Choapas I, II',
'city_id' => DB::table('cities')->where('name','Las Choapas')->first()->id
],

['name' => 'Choapas III y IV',
'city_id' => DB::table('cities')->where('name','Las Choapas')->first()->id
],

['name' => 'El Polvorín',
'city_id' => DB::table('cities')->where('name','Las Choapas')->first()->id
],

['name' => 'Las Choapas',
'city_id' => DB::table('cities')->where('name','Las Choapas')->first()->id
],

['name' => 'Los Gavilanes',
'city_id' => DB::table('cities')->where('name','Las Choapas')->first()->id
],

['name' => 'Maravillas',
'city_id' => DB::table('cities')->where('name','Las Choapas')->first()->id
],

['name' => 'Venustiano Carranza',
'city_id' => DB::table('cities')->where('name','Las Choapas')->first()->id
],

['name' => 'Tecuanapa (Vicente Guerrero)',
'city_id' => DB::table('cities')->where('name','Las Choapas')->first()->id
],

['name' => 'El Chichón',
'city_id' => DB::table('cities')->where('name','Las Choapas')->first()->id
],

['name' => 'Las Palmas',
'city_id' => DB::table('cities')->where('name','Las Choapas')->first()->id
],

['name' => 'Acapulco',
'city_id' => DB::table('cities')->where('name','Las Choapas')->first()->id
],

['name' => 'Alejandro Luna Hernández',
'city_id' => DB::table('cities')->where('name','Las Choapas')->first()->id
],

['name' => 'El Diamante',
'city_id' => DB::table('cities')->where('name','Las Choapas')->first()->id
],

['name' => 'El Faisán',
'city_id' => DB::table('cities')->where('name','Las Choapas')->first()->id
],

['name' => 'El Huasteco',
'city_id' => DB::table('cities')->where('name','Las Choapas')->first()->id
],

['name' => 'El Mazate',
'city_id' => DB::table('cities')->where('name','Las Choapas')->first()->id
],

['name' => 'El Nuevo Tesoro',
'city_id' => DB::table('cities')->where('name','Las Choapas')->first()->id
],

['name' => 'El Rodeo',
'city_id' => DB::table('cities')->where('name','Las Choapas')->first()->id
],

['name' => 'Gibraltar',
'city_id' => DB::table('cities')->where('name','Las Choapas')->first()->id
],

['name' => 'La Coquera (El Hulefante)',
'city_id' => DB::table('cities')->where('name','Las Choapas')->first()->id
],

['name' => 'La Florida',
'city_id' => DB::table('cities')->where('name','Las Choapas')->first()->id
],

['name' => 'Las Maravillas',
'city_id' => DB::table('cities')->where('name','Las Choapas')->first()->id
],

['name' => 'Las Palmas',
'city_id' => DB::table('cities')->where('name','Las Choapas')->first()->id
],

['name' => 'Luis Munguía Madrigal',
'city_id' => DB::table('cities')->where('name','Las Choapas')->first()->id
],

['name' => 'Poblado las Palmas',
'city_id' => DB::table('cities')->where('name','Las Choapas')->first()->id
],

['name' => 'Rafael Tecuapetla',
'city_id' => DB::table('cities')->where('name','Las Choapas')->first()->id
],

['name' => 'Rivera del Carmen',
'city_id' => DB::table('cities')->where('name','Las Choapas')->first()->id
],

['name' => 'Wenceslao Mafara Huesca',
'city_id' => DB::table('cities')->where('name','Las Choapas')->first()->id
],

['name' => 'Xicoténcatl',
'city_id' => DB::table('cities')->where('name','Las Choapas')->first()->id
],

['name' => 'Las Piedras (El Cinco)',
'city_id' => DB::table('cities')->where('name','Las Choapas')->first()->id
],

['name' => 'Agua Dulcita',
'city_id' => DB::table('cities')->where('name','Las Choapas')->first()->id
],

['name' => 'El Centenario',
'city_id' => DB::table('cities')->where('name','Las Choapas')->first()->id
],

['name' => 'El Pinolillo',
'city_id' => DB::table('cities')->where('name','Las Choapas')->first()->id
],

['name' => 'El Sahuayo',
'city_id' => DB::table('cities')->where('name','Las Choapas')->first()->id
],

['name' => 'La Luz',
'city_id' => DB::table('cities')->where('name','Las Choapas')->first()->id
],

['name' => 'Los Pericos',
'city_id' => DB::table('cities')->where('name','Las Choapas')->first()->id
],

['name' => 'Paso Bodegas',
'city_id' => DB::table('cities')->where('name','Las Choapas')->first()->id
],

['name' => 'Plaza Verde',
'city_id' => DB::table('cities')->where('name','Las Choapas')->first()->id
],

['name' => 'La Báscula (Los Framboyanes)',
'city_id' => DB::table('cities')->where('name','Las Choapas')->first()->id
],

['name' => 'Santa Teresa',
'city_id' => DB::table('cities')->where('name','Las Choapas')->first()->id
],

['name' => 'Los Mangos',
'city_id' => DB::table('cities')->where('name','Las Choapas')->first()->id
],

['name' => 'Linda Vista (El Cura)',
'city_id' => DB::table('cities')->where('name','Las Choapas')->first()->id
],

['name' => 'Ceiba Blanca',
'city_id' => DB::table('cities')->where('name','Las Choapas')->first()->id
],

['name' => 'Choapas V, VI, VII',
'city_id' => DB::table('cities')->where('name','Las Choapas')->first()->id
],

['name' => 'Cuatro Hermanos',
'city_id' => DB::table('cities')->where('name','Las Choapas')->first()->id
],

['name' => 'Las Choapas',
'city_id' => DB::table('cities')->where('name','Las Choapas')->first()->id
],

['name' => 'El Cocoital',
'city_id' => DB::table('cities')->where('name','Las Choapas')->first()->id
],

['name' => 'El Pajaral (Bajo Grande)',
'city_id' => DB::table('cities')->where('name','Las Choapas')->first()->id
],

['name' => 'El Sacrificio',
'city_id' => DB::table('cities')->where('name','Las Choapas')->first()->id
],

['name' => 'El Tepeyac',
'city_id' => DB::table('cities')->where('name','Las Choapas')->first()->id
],

['name' => 'Laguna el Pajaral',
'city_id' => DB::table('cities')->where('name','Las Choapas')->first()->id
],

['name' => 'Chucuapa',
'city_id' => DB::table('cities')->where('name','Las Choapas')->first()->id
],

['name' => 'Niños Héroes',
'city_id' => DB::table('cities')->where('name','Las Choapas')->first()->id
],

['name' => 'Chicuapilla',
'city_id' => DB::table('cities')->where('name','Las Choapas')->first()->id
],

['name' => 'Elena Gutiérrez Martínez',
'city_id' => DB::table('cities')->where('name','Las Choapas')->first()->id
],

['name' => 'La Porfía Número Cuatro',
'city_id' => DB::table('cities')->where('name','Las Choapas')->first()->id
],

['name' => 'La Porfía Número Dos (El Canutillo)',
'city_id' => DB::table('cities')->where('name','Las Choapas')->first()->id
],

['name' => 'La Porfia Número Tres',
'city_id' => DB::table('cities')->where('name','Las Choapas')->first()->id
],

['name' => 'La Porfía Número Uno',
'city_id' => DB::table('cities')->where('name','Las Choapas')->first()->id
],

['name' => 'Laguna Perdida',
'city_id' => DB::table('cities')->where('name','Las Choapas')->first()->id
],

['name' => 'Rancho Callejas',
'city_id' => DB::table('cities')->where('name','Las Choapas')->first()->id
],

['name' => 'Benito Juárez',
'city_id' => DB::table('cities')->where('name','Las Choapas')->first()->id
],

['name' => 'La Cordobesa',
'city_id' => DB::table('cities')->where('name','Las Choapas')->first()->id
],

['name' => 'Cascajal',
'city_id' => DB::table('cities')->where('name','Las Choapas')->first()->id
],

['name' => 'Crescencio Bonilla Olivo',
'city_id' => DB::table('cities')->where('name','Las Choapas')->first()->id
],

['name' => 'El Bajío',
'city_id' => DB::table('cities')->where('name','Las Choapas')->first()->id
],

['name' => 'Fernando López Arias (El Zapote)',
'city_id' => DB::table('cities')->where('name','Las Choapas')->first()->id
],

['name' => 'Guadalupe Victoria (Rancho Nuevo)',
'city_id' => DB::table('cities')->where('name','Las Choapas')->first()->id
],

['name' => 'Kilómetro Ocho',
'city_id' => DB::table('cities')->where('name','Las Choapas')->first()->id
],

['name' => 'La Ceiba',
'city_id' => DB::table('cities')->where('name','Las Choapas')->first()->id
],

['name' => 'La Sal',
'city_id' => DB::table('cities')->where('name','Las Choapas')->first()->id
],

['name' => 'Los Laureles',
'city_id' => DB::table('cities')->where('name','Las Choapas')->first()->id
],

['name' => 'Rancho Alegre',
'city_id' => DB::table('cities')->where('name','Las Choapas')->first()->id
],

['name' => 'Rancho Nuevo',
'city_id' => DB::table('cities')->where('name','Las Choapas')->first()->id
],

['name' => 'Salsipuedes',
'city_id' => DB::table('cities')->where('name','Las Choapas')->first()->id
],

['name' => 'Santa Rosa',
'city_id' => DB::table('cities')->where('name','Las Choapas')->first()->id
],

['name' => 'General Miguel Alemán',
'city_id' => DB::table('cities')->where('name','Las Choapas')->first()->id
],

['name' => 'Úrsulo Galván',
'city_id' => DB::table('cities')->where('name','Las Choapas')->first()->id
],

['name' => 'La Gravera',
'city_id' => DB::table('cities')->where('name','Las Choapas')->first()->id
],

['name' => 'San Pedro',
'city_id' => DB::table('cities')->where('name','Las Choapas')->first()->id
],

['name' => 'El Naranjo',
'city_id' => DB::table('cities')->where('name','Las Choapas')->first()->id
],

['name' => 'Alto Uxpanapa',
'city_id' => DB::table('cities')->where('name','Las Choapas')->first()->id
],

['name' => 'Alfredo Quiroga Cabrera',
'city_id' => DB::table('cities')->where('name','Las Choapas')->first()->id
],

['name' => 'El Capricho',
'city_id' => DB::table('cities')->where('name','Las Choapas')->first()->id
],

['name' => 'El Gran Chaparral (Mario Lendechi)',
'city_id' => DB::table('cities')->where('name','Las Choapas')->first()->id
],

['name' => 'El Grillo',
'city_id' => DB::table('cities')->where('name','Las Choapas')->first()->id
],

['name' => 'El Jobo',
'city_id' => DB::table('cities')->where('name','Las Choapas')->first()->id
],

['name' => 'El Nuevo Progreso',
'city_id' => DB::table('cities')->where('name','Las Choapas')->first()->id
],

['name' => 'El Suspiro (Enrique Callejas)',
'city_id' => DB::table('cities')->where('name','Las Choapas')->first()->id
],

['name' => 'El Ventarrón',
'city_id' => DB::table('cities')->where('name','Las Choapas')->first()->id
],

['name' => 'Nuevo Progreso',
'city_id' => DB::table('cities')->where('name','Las Choapas')->first()->id
],

['name' => 'San Pablo',
'city_id' => DB::table('cities')->where('name','Las Choapas')->first()->id
],

['name' => 'Ignacio Zaragoza (Tronconada)',
'city_id' => DB::table('cities')->where('name','Las Choapas')->first()->id
],

['name' => 'Nueva Esperanza',
'city_id' => DB::table('cities')->where('name','Las Choapas')->first()->id
],

['name' => 'Gustavo Díaz Ordaz',
'city_id' => DB::table('cities')->where('name','Las Choapas')->first()->id
],

['name' => 'Nueva Esperanza (Cerro Nanchital)',
'city_id' => DB::table('cities')->where('name','Las Choapas')->first()->id
],

['name' => 'Tierra Morada',
'city_id' => DB::table('cities')->where('name','Las Choapas')->first()->id
],

['name' => 'Alfonso Medina',
'city_id' => DB::table('cities')->where('name','Las Choapas')->first()->id
],

['name' => 'Alto Uxpanapa (El Amate)',
'city_id' => DB::table('cities')->where('name','Las Choapas')->first()->id
],

['name' => 'Arroyo Marín',
'city_id' => DB::table('cities')->where('name','Las Choapas')->first()->id
],

['name' => 'Calipan de López',
'city_id' => DB::table('cities')->where('name','Las Choapas')->first()->id
],

['name' => 'El Arbolito',
'city_id' => DB::table('cities')->where('name','Las Choapas')->first()->id
],

['name' => 'El Esfuerzo',
'city_id' => DB::table('cities')->where('name','Las Choapas')->first()->id
],

['name' => 'El Mulato',
'city_id' => DB::table('cities')->where('name','Las Choapas')->first()->id
],

['name' => 'Emiliano Zapata Misantla',
'city_id' => DB::table('cities')->where('name','Las Choapas')->first()->id
],

['name' => 'Francisco I. Madero (Agua Fría)',
'city_id' => DB::table('cities')->where('name','Las Choapas')->first()->id
],

['name' => 'Francisco Villa',
'city_id' => DB::table('cities')->where('name','Las Choapas')->first()->id
],

['name' => 'La Azteca',
'city_id' => DB::table('cities')->where('name','Las Choapas')->first()->id
],

['name' => 'La Canoa',
'city_id' => DB::table('cities')->where('name','Las Choapas')->first()->id
],

['name' => 'Las Cruces',
'city_id' => DB::table('cities')->where('name','Las Choapas')->first()->id
],

['name' => 'Licenciado Trinidad García de la Cadena',
'city_id' => DB::table('cities')->where('name','Las Choapas')->first()->id
],

['name' => 'Luis Echeverría',
'city_id' => DB::table('cities')->where('name','Las Choapas')->first()->id
],

['name' => 'Nuevo Castrejón',
'city_id' => DB::table('cities')->where('name','Las Choapas')->first()->id
],

['name' => 'Ramos Millán',
'city_id' => DB::table('cities')->where('name','Las Choapas')->first()->id
],

['name' => 'Vicente Guerrero (Las Cholinas)',
'city_id' => DB::table('cities')->where('name','Las Choapas')->first()->id
],

['name' => 'El Ideal',
'city_id' => DB::table('cities')->where('name','Las Choapas')->first()->id
],

['name' => 'Nuevo Paraíso',
'city_id' => DB::table('cities')->where('name','Las Choapas')->first()->id
],

['name' => 'Nuevo Sacrificio',
'city_id' => DB::table('cities')->where('name','Las Choapas')->first()->id
],

['name' => 'Guadalupe Victoria',
'city_id' => DB::table('cities')->where('name','Las Choapas')->first()->id
],

['name' => 'El Cedro',
'city_id' => DB::table('cities')->where('name','Las Choapas')->first()->id
],

['name' => 'Ignacio López Rayón',
'city_id' => DB::table('cities')->where('name','Las Choapas')->first()->id
],

['name' => 'Francisco Sarabia',
'city_id' => DB::table('cities')->where('name','Las Choapas')->first()->id
],

['name' => 'Vista Hermosa',
'city_id' => DB::table('cities')->where('name','Las Choapas')->first()->id
],

['name' => 'Privilegio',
'city_id' => DB::table('cities')->where('name','Las Choapas')->first()->id
],

['name' => 'Las Cruces',
'city_id' => DB::table('cities')->where('name','Las Choapas')->first()->id
],

['name' => 'Arroyo las Cholinas',
'city_id' => DB::table('cities')->where('name','Las Choapas')->first()->id
],

['name' => 'Cerro Pelón',
'city_id' => DB::table('cities')->where('name','Las Choapas')->first()->id
],

['name' => 'Constitución Mexicana',
'city_id' => DB::table('cities')->where('name','Las Choapas')->first()->id
],

['name' => 'El Amate',
'city_id' => DB::table('cities')->where('name','Las Choapas')->first()->id
],

['name' => 'El Arroyo de Enmedio',
'city_id' => DB::table('cities')->where('name','Las Choapas')->first()->id
],

['name' => 'El Nacimiento',
'city_id' => DB::table('cities')->where('name','Las Choapas')->first()->id
],

['name' => 'Emiliano Zapata',
'city_id' => DB::table('cities')->where('name','Las Choapas')->first()->id
],

['name' => 'Enrique López Huitrón',
'city_id' => DB::table('cities')->where('name','Las Choapas')->first()->id
],

['name' => 'Francisco I. Madero',
'city_id' => DB::table('cities')->where('name','Las Choapas')->first()->id
],

['name' => 'Graciano Sánchez',
'city_id' => DB::table('cities')->where('name','Las Choapas')->first()->id
],

['name' => 'La Libertad',
'city_id' => DB::table('cities')->where('name','Las Choapas')->first()->id
],

['name' => 'La Nueva Esperanza',
'city_id' => DB::table('cities')->where('name','Las Choapas')->first()->id
],

['name' => 'Las Mañanitas',
'city_id' => DB::table('cities')->where('name','Las Choapas')->first()->id
],

['name' => 'Lázaro Cárdenas',
'city_id' => DB::table('cities')->where('name','Las Choapas')->first()->id
],

['name' => 'Licenciado José López Portillo',
'city_id' => DB::table('cities')->where('name','Las Choapas')->first()->id
],

['name' => 'Linda Tarde',
'city_id' => DB::table('cities')->where('name','Las Choapas')->first()->id
],

['name' => 'Lindavista',
'city_id' => DB::table('cities')->where('name','Las Choapas')->first()->id
],

['name' => 'Los Aztecas',
'city_id' => DB::table('cities')->where('name','Las Choapas')->first()->id
],

['name' => 'Nueva Tabasqueña',
'city_id' => DB::table('cities')->where('name','Las Choapas')->first()->id
],

['name' => 'Rafael Murillo Vidal',
'city_id' => DB::table('cities')->where('name','Las Choapas')->first()->id
],

['name' => 'Río Playas (Los Robles)',
'city_id' => DB::table('cities')->where('name','Las Choapas')->first()->id
],

['name' => 'San Lorenzo',
'city_id' => DB::table('cities')->where('name','Las Choapas')->first()->id
],

['name' => 'San Miguel de Allende',
'city_id' => DB::table('cities')->where('name','Las Choapas')->first()->id
],

['name' => 'Tecozautla',
'city_id' => DB::table('cities')->where('name','Las Choapas')->first()->id
],

['name' => 'Malpaso (Malpasito)',
'city_id' => DB::table('cities')->where('name','Las Choapas')->first()->id
],

['name' => 'El Remolino',
'city_id' => DB::table('cities')->where('name','Las Choapas')->first()->id
],

['name' => 'Río Playas',
'city_id' => DB::table('cities')->where('name','Las Choapas')->first()->id
],

['name' => 'Francisco I. Madero',
'city_id' => DB::table('cities')->where('name','Las Choapas')->first()->id
],

['name' => 'Vicente Guerrero',
'city_id' => DB::table('cities')->where('name','Las Choapas')->first()->id
],

['name' => 'La Guadalupe (El Milagro)',
'city_id' => DB::table('cities')->where('name','Las Choapas')->first()->id
],

['name' => 'Adolfo Ramos Venegas',
'city_id' => DB::table('cities')->where('name','Las Choapas')->first()->id
],

['name' => 'Amatán',
'city_id' => DB::table('cities')->where('name','Las Choapas')->first()->id
],

['name' => 'Aquiles Serdán',
'city_id' => DB::table('cities')->where('name','Las Choapas')->first()->id
],

['name' => 'Barrosa',
'city_id' => DB::table('cities')->where('name','Las Choapas')->first()->id
],

['name' => 'Cebadilla',
'city_id' => DB::table('cities')->where('name','Las Choapas')->first()->id
],

['name' => 'Cerro del Horcón',
'city_id' => DB::table('cities')->where('name','Las Choapas')->first()->id
],

['name' => 'El Satélite',
'city_id' => DB::table('cities')->where('name','Las Choapas')->first()->id
],

['name' => 'Felipe Ángeles',
'city_id' => DB::table('cities')->where('name','Las Choapas')->first()->id
],

['name' => 'Las Brujas',
'city_id' => DB::table('cities')->where('name','Las Choapas')->first()->id
],

['name' => 'Las Isabeles',
'city_id' => DB::table('cities')->where('name','Las Choapas')->first()->id
],

['name' => 'Licenciado Benito Juárez',
'city_id' => DB::table('cities')->where('name','Las Choapas')->first()->id
],

['name' => 'Licenciado Luis Echeverría Álvarez (Playa Santa)',
'city_id' => DB::table('cities')->where('name','Las Choapas')->first()->id
],

['name' => 'Constituyentes II',
'city_id' => DB::table('cities')->where('name','Las Choapas')->first()->id
],

['name' => 'Los Constituyentes Uno (Sumidero)',
'city_id' => DB::table('cities')->where('name','Las Choapas')->first()->id
],

['name' => 'Nuevo Caletón',
'city_id' => DB::table('cities')->where('name','Las Choapas')->first()->id
],

['name' => 'Nuevo Ixtacomitán',
'city_id' => DB::table('cities')->where('name','Las Choapas')->first()->id
],

['name' => 'Plutarco Elías Calles',
'city_id' => DB::table('cities')->where('name','Las Choapas')->first()->id
],

['name' => 'Pueblo Viejo',
'city_id' => DB::table('cities')->where('name','Las Choapas')->first()->id
],

['name' => 'Revolución',
'city_id' => DB::table('cities')->where('name','Las Choapas')->first()->id
],

['name' => 'Unión y Progreso',
'city_id' => DB::table('cities')->where('name','Las Choapas')->first()->id
],

['name' => 'Xochitlán',
'city_id' => DB::table('cities')->where('name','Las Choapas')->first()->id
],

['name' => 'Tierra Nueva',
'city_id' => DB::table('cities')->where('name','Las Choapas')->first()->id
],

['name' => 'La Nueva Independencia',
'city_id' => DB::table('cities')->where('name','Las Choapas')->first()->id
],

['name' => 'Cuauhtémoc Pedregal',
'city_id' => DB::table('cities')->where('name','Las Choapas')->first()->id
],

['name' => 'Yucateco el Pedregal',
'city_id' => DB::table('cities')->where('name','Las Choapas')->first()->id
],

['name' => 'Coronel Adalberto Tejeda (La Reforma)',
'city_id' => DB::table('cities')->where('name','Las Choapas')->first()->id
],

['name' => 'Nuevo Progreso',
'city_id' => DB::table('cities')->where('name','Las Choapas')->first()->id
],

['name' => 'Arroyo Grande',
'city_id' => DB::table('cities')->where('name','Las Choapas')->first()->id
],

['name' => 'Cinco de Mayo',
'city_id' => DB::table('cities')->where('name','Las Choapas')->first()->id
],

['name' => 'Cinco de Mayo (La Isla)',
'city_id' => DB::table('cities')->where('name','Las Choapas')->first()->id
],

['name' => 'Cinco de Mayo (Segunda Sección)',
'city_id' => DB::table('cities')->where('name','Las Choapas')->first()->id
],

['name' => 'Dionisio Sánchez Vázquez',
'city_id' => DB::table('cities')->where('name','Las Choapas')->first()->id
],

['name' => 'Dos Hermanos',
'city_id' => DB::table('cities')->where('name','Las Choapas')->first()->id
],

['name' => 'El Izquierdo',
'city_id' => DB::table('cities')->where('name','Las Choapas')->first()->id
],

['name' => 'Las Marías',
'city_id' => DB::table('cities')->where('name','Las Choapas')->first()->id
],

['name' => 'El Castaño',
'city_id' => DB::table('cities')->where('name','Las Choapas')->first()->id
],

['name' => 'El Cuerno',
'city_id' => DB::table('cities')->where('name','Las Choapas')->first()->id
],

['name' => 'El Encanto',
'city_id' => DB::table('cities')->where('name','Las Choapas')->first()->id
],

['name' => 'El Macayo',
'city_id' => DB::table('cities')->where('name','Las Choapas')->first()->id
],

['name' => 'El Momal',
'city_id' => DB::table('cities')->where('name','Las Choapas')->first()->id
],

['name' => 'El Pedregal',
'city_id' => DB::table('cities')->where('name','Las Choapas')->first()->id
],

['name' => 'El Pijón',
'city_id' => DB::table('cities')->where('name','Las Choapas')->first()->id
],

['name' => 'El Zapote',
'city_id' => DB::table('cities')->where('name','Las Choapas')->first()->id
],

['name' => 'Escuadrón 201',
'city_id' => DB::table('cities')->where('name','Las Choapas')->first()->id
],

['name' => 'Escuadrón Doscientos Uno (El Aserradero)',
'city_id' => DB::table('cities')->where('name','Las Choapas')->first()->id
],

['name' => 'Fernando Gutiérrez Barrios',
'city_id' => DB::table('cities')->where('name','Las Choapas')->first()->id
],

['name' => 'Francisco Villa',
'city_id' => DB::table('cities')->where('name','Las Choapas')->first()->id
],

['name' => 'La Fortuna',
'city_id' => DB::table('cities')->where('name','Las Choapas')->first()->id
],

['name' => 'La Preferida (Río Nuevo)',
'city_id' => DB::table('cities')->where('name','Las Choapas')->first()->id
],

['name' => 'Laguna Nueva',
'city_id' => DB::table('cities')->where('name','Las Choapas')->first()->id
],

['name' => 'Las Marías',
'city_id' => DB::table('cities')->where('name','Las Choapas')->first()->id
],

['name' => 'Lázaro Olán Hernández',
'city_id' => DB::table('cities')->where('name','Las Choapas')->first()->id
],

['name' => 'Llano Verde',
'city_id' => DB::table('cities')->where('name','Las Choapas')->first()->id
],

['name' => 'Framboyanes',
'city_id' => DB::table('cities')->where('name','Las Choapas')->first()->id
],

['name' => 'Nueva Esperanza',
'city_id' => DB::table('cities')->where('name','Las Choapas')->first()->id
],

['name' => 'Nuevo Progreso (Nuevo León)',
'city_id' => DB::table('cities')->where('name','Las Choapas')->first()->id
],

['name' => 'Plan de Iguala',
'city_id' => DB::table('cities')->where('name','Las Choapas')->first()->id
],

['name' => 'Ricardo Flores Magón',
'city_id' => DB::table('cities')->where('name','Las Choapas')->first()->id
],

['name' => 'Río Pedregal',
'city_id' => DB::table('cities')->where('name','Las Choapas')->first()->id
],

['name' => 'Sacrificio',
'city_id' => DB::table('cities')->where('name','Las Choapas')->first()->id
],

['name' => 'San Juan de Ulúa',
'city_id' => DB::table('cities')->where('name','Las Choapas')->first()->id
],

['name' => 'Tres Peanas',
'city_id' => DB::table('cities')->where('name','Las Choapas')->first()->id
],

['name' => 'Las Flores',
'city_id' => DB::table('cities')->where('name','Las Choapas')->first()->id
],

['name' => 'Once de Febrero',
'city_id' => DB::table('cities')->where('name','Las Choapas')->first()->id
],

['name' => 'San Martín',
'city_id' => DB::table('cities')->where('name','Las Choapas')->first()->id
],

['name' => 'Primitivo R. Valencia',
'city_id' => DB::table('cities')->where('name','Las Choapas')->first()->id
],

['name' => 'El Azufre',
'city_id' => DB::table('cities')->where('name','Las Choapas')->first()->id
],

['name' => 'El Desengaño',
'city_id' => DB::table('cities')->where('name','Las Choapas')->first()->id
],

['name' => 'Hueyapan de Mimendi',
'city_id' => DB::table('cities')->where('name','Las Choapas')->first()->id
],

['name' => 'Samaria (Río Playas)',
'city_id' => DB::table('cities')->where('name','Las Choapas')->first()->id
],

['name' => 'Agustín Melgar',
'city_id' => DB::table('cities')->where('name','Uxpanapa')->first()->id
],

['name' => 'Misantla Segundo',
'city_id' => DB::table('cities')->where('name','Uxpanapa')->first()->id
],

['name' => 'El Rincón',
'city_id' => DB::table('cities')->where('name','Uxpanapa')->first()->id
],

['name' => 'La Laguna (Poblado Seis Almanza)',
'city_id' => DB::table('cities')->where('name','Uxpanapa')->first()->id
],

['name' => 'Francisco Villa Dos',
'city_id' => DB::table('cities')->where('name','Uxpanapa')->first()->id
],

['name' => 'Río Uxpanapa (Poblado Catorce)',
'city_id' => DB::table('cities')->where('name','Uxpanapa')->first()->id
],

['name' => 'Plan de Arroyo',
'city_id' => DB::table('cities')->where('name','Uxpanapa')->first()->id
],

['name' => 'Carolino Anaya',
'city_id' => DB::table('cities')->where('name','Uxpanapa')->first()->id
],

['name' => 'Hermanos Cedillo (Poblado Dos A)',
'city_id' => DB::table('cities')->where('name','Uxpanapa')->first()->id
],

['name' => 'Los Amarillos (Poblado Quince)',
'city_id' => DB::table('cities')->where('name','Uxpanapa')->first()->id
],

['name' => 'La Horqueta (Poblado Doce)',
'city_id' => DB::table('cities')->where('name','Uxpanapa')->first()->id
],

['name' => 'Antonio Rodríguez Martín',
'city_id' => DB::table('cities')->where('name','Uxpanapa')->first()->id
],

['name' => 'Paso del Moral',
'city_id' => DB::table('cities')->where('name','Uxpanapa')->first()->id
],

['name' => 'Benito Juárez (Poblado Uno)',
'city_id' => DB::table('cities')->where('name','Uxpanapa')->first()->id
],

['name' => 'Bajo Grande',
'city_id' => DB::table('cities')->where('name','Uxpanapa')->first()->id
],

['name' => 'Progreso Chapultepec (Linda Estrella)',
'city_id' => DB::table('cities')->where('name','Uxpanapa')->first()->id
],

['name' => 'La Fortaleza',
'city_id' => DB::table('cities')->where('name','Uxpanapa')->first()->id
],

['name' => 'El Luchador',
'city_id' => DB::table('cities')->where('name','Uxpanapa')->first()->id
],

['name' => 'Las Joyas',
'city_id' => DB::table('cities')->where('name','Uxpanapa')->first()->id
],

['name' => 'General Valerio Trujano',
'city_id' => DB::table('cities')->where('name','Uxpanapa')->first()->id
],

['name' => 'Benito Juárez Segundo (La Raya)',
'city_id' => DB::table('cities')->where('name','Uxpanapa')->first()->id
],

['name' => 'El Arenal',
'city_id' => DB::table('cities')->where('name','Uxpanapa')->first()->id
],

['name' => 'Lázaro Cárdenas',
'city_id' => DB::table('cities')->where('name','Uxpanapa')->first()->id
],

['name' => 'General de División Cándido Aguilar',
'city_id' => DB::table('cities')->where('name','Uxpanapa')->first()->id
],

['name' => 'Chuniapan de Arriba',
'city_id' => DB::table('cities')->where('name','Uxpanapa')->first()->id
],

['name' => 'Los Pinos (Las Brujas)',
'city_id' => DB::table('cities')->where('name','Uxpanapa')->first()->id
],

['name' => 'La Nueva Pitahaya',
'city_id' => DB::table('cities')->where('name','Uxpanapa')->first()->id
],

['name' => 'El Faisán',
'city_id' => DB::table('cities')->where('name','Uxpanapa')->first()->id
],

['name' => 'Francisco Villa Dos (Poblado Tres)',
'city_id' => DB::table('cities')->where('name','Uxpanapa')->first()->id
],

['name' => 'Primitivo R. Valencia',
'city_id' => DB::table('cities')->where('name','Uxpanapa')->first()->id
],

['name' => 'Colonia Agrícola M.',
'city_id' => DB::table('cities')->where('name','Uxpanapa')->first()->id
],

['name' => 'Belisario Domínguez',
'city_id' => DB::table('cities')->where('name','Uxpanapa')->first()->id
],

['name' => 'El Progreso',
'city_id' => DB::table('cities')->where('name','Uxpanapa')->first()->id
],

['name' => 'Emiliano Zapata (Anexo Niños Héroes)',
'city_id' => DB::table('cities')->where('name','Uxpanapa')->first()->id
],

['name' => 'Francisco I. Madero',
'city_id' => DB::table('cities')->where('name','Uxpanapa')->first()->id
],

['name' => 'Río Azul (Licenciado Rafael Murillo Vidal)',
'city_id' => DB::table('cities')->where('name','Uxpanapa')->first()->id
],

['name' => 'Rafael Murillo Vidal',
'city_id' => DB::table('cities')->where('name','Uxpanapa')->first()->id
],

['name' => 'Vidal Díaz Muñoz',
'city_id' => DB::table('cities')->where('name','Uxpanapa')->first()->id
],

['name' => 'El Sabino',
'city_id' => DB::table('cities')->where('name','Uxpanapa')->first()->id
],

['name' => 'Jorge L. Tamayo (Poblado Dos)',
'city_id' => DB::table('cities')->where('name','Uxpanapa')->first()->id
],

['name' => 'Carolino Anaya Uno (Poblado Uno)',
'city_id' => DB::table('cities')->where('name','Uxpanapa')->first()->id
],

['name' => 'Poblado 10 (La Chinantla)',
'city_id' => DB::table('cities')->where('name','Uxpanapa')->first()->id
],

['name' => 'Hidalgo Amajac',
'city_id' => DB::table('cities')->where('name','Uxpanapa')->first()->id
],

['name' => 'Las Carolinas (Poblado Nueve)',
'city_id' => DB::table('cities')->where('name','Uxpanapa')->first()->id
],

['name' => 'Helio García Alfaro (Poblado Once)',
'city_id' => DB::table('cities')->where('name','Uxpanapa')->first()->id
],

['name' => 'Buena Vista',
'city_id' => DB::table('cities')->where('name','Uxpanapa')->first()->id
],

['name' => 'Niños Héroes (Los Juanes)',
'city_id' => DB::table('cities')->where('name','Uxpanapa')->first()->id
],

['name' => 'Benito Juárez Primero (Polígono Noventa y Siete)',
'city_id' => DB::table('cities')->where('name','Uxpanapa')->first()->id
],

['name' => 'El Cafetal',
'city_id' => DB::table('cities')->where('name','Uxpanapa')->first()->id
],

['name' => 'El Aguacate',
'city_id' => DB::table('cities')->where('name','Uxpanapa')->first()->id
],

['name' => 'La Esperanza',
'city_id' => DB::table('cities')->where('name','Uxpanapa')->first()->id
],

['name' => 'La Tortuga',
'city_id' => DB::table('cities')->where('name','Uxpanapa')->first()->id
],

['name' => 'La Nueva Vida',
'city_id' => DB::table('cities')->where('name','Uxpanapa')->first()->id
],

['name' => 'Nuevo Acapulco',
'city_id' => DB::table('cities')->where('name','Uxpanapa')->first()->id
],

['name' => 'Adolfo Ruiz Cortines',
'city_id' => DB::table('cities')->where('name','Uxpanapa')->first()->id
],

['name' => 'Nuevo Cantón (Poblado Siete)',
'city_id' => DB::table('cities')->where('name','Uxpanapa')->first()->id
],

['name' => 'Nuevo Córdoba',
'city_id' => DB::table('cities')->where('name','Uxpanapa')->first()->id
],

['name' => 'Juan Rodríguez Clara (Álvaro Obregón)',
'city_id' => DB::table('cities')->where('name','Uxpanapa')->first()->id
],

['name' => 'Colonia del Valle (Poblado Trece)',
'city_id' => DB::table('cities')->where('name','Uxpanapa')->first()->id
],

['name' => 'Poblado Cinco',
'city_id' => DB::table('cities')->where('name','Uxpanapa')->first()->id
]
        ]);
    }
}
