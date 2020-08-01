<?php

use Illuminate\Database\Seeder;

class CitySeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $veracruz = DB::table('states')->where('name','Veracruz de Ignacio de la Llave')->first()->id;

        DB::table('cities')->insert([            
['name' => 'Tlalnelhuayocan', 'state_id' => $veracruz],
['name' => 'Xico', 'state_id' => $veracruz],
['name' => 'Ixhuacán de los Reyes', 'state_id' => $veracruz],
['name' => 'Ayahualulco', 'state_id' => $veracruz],
['name' => 'Perote', 'state_id' => $veracruz],
['name' => 'Banderilla', 'state_id' => $veracruz],
['name' => 'Rafael Lucio', 'state_id' => $veracruz],
['name' => 'Acajete', 'state_id' => $veracruz],
['name' => 'Las Vigas de Ramírez', 'state_id' => $veracruz],
['name' => 'Villa Aldama', 'state_id' => $veracruz],
['name' => 'Tlacolulan', 'state_id' => $veracruz],
['name' => 'Tonayán', 'state_id' => $veracruz],
['name' => 'Coacoatzintla', 'state_id' => $veracruz],
['name' => 'Jilotepec', 'state_id' => $veracruz],
['name' => 'Naolinco', 'state_id' => $veracruz],
['name' => 'Miahuatlán', 'state_id' => $veracruz],
['name' => 'Acatlán', 'state_id' => $veracruz],
['name' => 'Tepetlán', 'state_id' => $veracruz],
['name' => 'Juchique de Ferrer', 'state_id' => $veracruz],
['name' => 'Alto Lucero de Gutiérrez Barrios', 'state_id' => $veracruz],
['name' => 'Actopan', 'state_id' => $veracruz],
['name' => 'Coatepec', 'state_id' => $veracruz],
['name' => 'Teocelo', 'state_id' => $veracruz],
['name' => 'Cosautlán de Carvajal', 'state_id' => $veracruz],
['name' => 'Emiliano Zapata', 'state_id' => $veracruz],
['name' => 'Apazapan', 'state_id' => $veracruz],
['name' => 'Puente Nacional', 'state_id' => $veracruz],
['name' => 'Ursulo Galván', 'state_id' => $veracruz],
['name' => 'Paso de Ovejas', 'state_id' => $veracruz],
['name' => 'La Antigua', 'state_id' => $veracruz],
['name' => 'Veracruz', 'state_id' => $veracruz],
['name' => 'Pánuco', 'state_id' => $veracruz],
['name' => 'Pueblo Viejo', 'state_id' => $veracruz],
['name' => 'Tampico Alto', 'state_id' => $veracruz],
['name' => 'Tempoal', 'state_id' => $veracruz],
['name' => 'Ozuluama de Mascareñas', 'state_id' => $veracruz],
['name' => 'Tantoyuca', 'state_id' => $veracruz],
['name' => 'Platón Sánchez', 'state_id' => $veracruz],
['name' => 'Chiconamel', 'state_id' => $veracruz],
['name' => 'Chalma', 'state_id' => $veracruz],
['name' => 'Chontla', 'state_id' => $veracruz],
['name' => 'Citlaltépetl', 'state_id' => $veracruz],
['name' => 'Ixcatepec', 'state_id' => $veracruz],
['name' => 'Naranjos Amatlán', 'state_id' => $veracruz],
['name' => 'El Higo', 'state_id' => $veracruz],
['name' => 'Chinampa de Gorostiza', 'state_id' => $veracruz],
['name' => 'Tantima', 'state_id' => $veracruz],
['name' => 'Tamalín', 'state_id' => $veracruz],
['name' => 'Cerro Azul', 'state_id' => $veracruz],
['name' => 'Tepetzintla', 'state_id' => $veracruz],
['name' => 'Tancoco', 'state_id' => $veracruz],
['name' => 'Tamiahua', 'state_id' => $veracruz],
['name' => 'Huayacocotla', 'state_id' => $veracruz],
['name' => 'Ilamatlán', 'state_id' => $veracruz],
['name' => 'Zontecomatlán de López y Fuentes', 'state_id' => $veracruz],
['name' => 'Texcatepec', 'state_id' => $veracruz],
['name' => 'Zacualpan', 'state_id' => $veracruz],
['name' => 'Benito Juárez', 'state_id' => $veracruz],
['name' => 'Tlachichilco', 'state_id' => $veracruz],
['name' => 'Ixhuatlán de Madero', 'state_id' => $veracruz],
['name' => 'Chicontepec', 'state_id' => $veracruz],
['name' => 'Álamo Temapache', 'state_id' => $veracruz],
['name' => 'Tuxpan', 'state_id' => $veracruz],
['name' => 'Tihuatlán', 'state_id' => $veracruz],
['name' => 'Castillo de Teayo', 'state_id' => $veracruz],
['name' => 'Cazones de Herrera', 'state_id' => $veracruz],
['name' => 'Zozocolco de Hidalgo', 'state_id' => $veracruz],
['name' => 'Chumatlán', 'state_id' => $veracruz],
['name' => 'Coxquihui', 'state_id' => $veracruz],
['name' => 'Mecatlán', 'state_id' => $veracruz],
['name' => 'Filomeno Mata', 'state_id' => $veracruz],
['name' => 'Coahuitlán', 'state_id' => $veracruz],
['name' => 'Coyutla', 'state_id' => $veracruz],
['name' => 'Coatzintla', 'state_id' => $veracruz],
['name' => 'Espinal', 'state_id' => $veracruz],
['name' => 'Poza Rica de Hidalgo', 'state_id' => $veracruz],
['name' => 'Papantla', 'state_id' => $veracruz],
['name' => 'Gutiérrez Zamora', 'state_id' => $veracruz],
['name' => 'Tecolutla', 'state_id' => $veracruz],
['name' => 'Martínez de la Torre', 'state_id' => $veracruz],
['name' => 'San Rafael', 'state_id' => $veracruz],
['name' => 'Tlapacoyan', 'state_id' => $veracruz],
['name' => 'Jalacingo', 'state_id' => $veracruz],
['name' => 'Atzalan', 'state_id' => $veracruz],
['name' => 'Altotonga', 'state_id' => $veracruz],
['name' => 'Las Minas', 'state_id' => $veracruz],
['name' => 'Tatatila', 'state_id' => $veracruz],
['name' => 'Tenochtitlán', 'state_id' => $veracruz],
['name' => 'Nautla', 'state_id' => $veracruz],
['name' => 'Misantla', 'state_id' => $veracruz],
['name' => 'Landero y Coss', 'state_id' => $veracruz],
['name' => 'Chiconquiaco', 'state_id' => $veracruz],
['name' => 'Yecuatla', 'state_id' => $veracruz],
['name' => 'Colipa', 'state_id' => $veracruz],
['name' => 'Vega de Alatorre', 'state_id' => $veracruz],
['name' => 'Jalcomulco', 'state_id' => $veracruz],
['name' => 'Tlaltetela', 'state_id' => $veracruz],
['name' => 'Tenampa', 'state_id' => $veracruz],
['name' => 'Totutla', 'state_id' => $veracruz],
['name' => 'Sochiapa', 'state_id' => $veracruz],
['name' => 'Tlacotepec de Mejía', 'state_id' => $veracruz],
['name' => 'Huatusco', 'state_id' => $veracruz],
['name' => 'Calcahualco', 'state_id' => $veracruz],
['name' => 'Alpatláhuac', 'state_id' => $veracruz],
['name' => 'Coscomatepec', 'state_id' => $veracruz],
['name' => 'La Perla', 'state_id' => $veracruz],
['name' => 'Chocamán', 'state_id' => $veracruz],
['name' => 'Tomatlán', 'state_id' => $veracruz],
['name' => 'Ixhuatlán del Café', 'state_id' => $veracruz],
['name' => 'Tepatlaxco', 'state_id' => $veracruz],
['name' => 'Comapa', 'state_id' => $veracruz],
['name' => 'Zentla', 'state_id' => $veracruz],
['name' => 'Camarón de Tejeda', 'state_id' => $veracruz],
['name' => 'Soledad de Doblado', 'state_id' => $veracruz],
['name' => 'Manlio Fabio Altamirano', 'state_id' => $veracruz],
['name' => 'Jamapa', 'state_id' => $veracruz],
['name' => 'Medellín de Bravo', 'state_id' => $veracruz],
['name' => 'Boca del Río', 'state_id' => $veracruz],
['name' => 'Orizaba', 'state_id' => $veracruz],
['name' => 'Rafael Delgado', 'state_id' => $veracruz],
['name' => 'Mariano Escobedo', 'state_id' => $veracruz],
['name' => 'Ixhuatlancillo', 'state_id' => $veracruz],
['name' => 'Atzacan', 'state_id' => $veracruz],
['name' => 'Ixtaczoquitlán', 'state_id' => $veracruz],
['name' => 'Fortín', 'state_id' => $veracruz],
['name' => 'Córdoba', 'state_id' => $veracruz],
['name' => 'Maltrata', 'state_id' => $veracruz],
['name' => 'Nogales', 'state_id' => $veracruz],
['name' => 'Río Blanco', 'state_id' => $veracruz],
['name' => 'Camerino Z. Mendoza', 'state_id' => $veracruz],
['name' => 'Aquila', 'state_id' => $veracruz],
['name' => 'Acultzingo', 'state_id' => $veracruz],
['name' => 'Soledad Atzompa', 'state_id' => $veracruz],
['name' => 'Huiloapan de Cuauhtémoc', 'state_id' => $veracruz],
['name' => 'Tlaquilpa', 'state_id' => $veracruz],
['name' => 'Astacinga', 'state_id' => $veracruz],
['name' => 'Xoxocotla', 'state_id' => $veracruz],
['name' => 'Atlahuilco', 'state_id' => $veracruz],
['name' => 'Tequila', 'state_id' => $veracruz],
['name' => 'San Andrés Tenejapan', 'state_id' => $veracruz],
['name' => 'Tlilapan', 'state_id' => $veracruz],
['name' => 'Magdalena', 'state_id' => $veracruz],
['name' => 'Naranjal', 'state_id' => $veracruz],
['name' => 'Coetzala', 'state_id' => $veracruz],
['name' => 'Omealca', 'state_id' => $veracruz],
['name' => 'Cuitláhuac', 'state_id' => $veracruz],
['name' => 'Cuichapa', 'state_id' => $veracruz],
['name' => 'Yanga', 'state_id' => $veracruz],
['name' => 'Amatlán de los Reyes', 'state_id' => $veracruz],
['name' => 'Atoyac', 'state_id' => $veracruz],
['name' => 'Paso del Macho', 'state_id' => $veracruz],
['name' => 'Carrillo Puerto', 'state_id' => $veracruz],
['name' => 'Cotaxtla', 'state_id' => $veracruz],
['name' => 'Zongolica', 'state_id' => $veracruz],
['name' => 'Tehuipango', 'state_id' => $veracruz],
['name' => 'Mixtla de Altamirano', 'state_id' => $veracruz],
['name' => 'Los Reyes', 'state_id' => $veracruz],
['name' => 'Texhuacán', 'state_id' => $veracruz],
['name' => 'Tezonapa', 'state_id' => $veracruz],
['name' => 'Tierra Blanca', 'state_id' => $veracruz],
['name' => 'Tlalixcoyan', 'state_id' => $veracruz],
['name' => 'Ignacio de la Llave', 'state_id' => $veracruz],
['name' => 'Alvarado', 'state_id' => $veracruz],
['name' => 'Lerdo de Tejada', 'state_id' => $veracruz],
['name' => 'Tres Valles', 'state_id' => $veracruz],
['name' => 'Carlos A. Carrillo', 'state_id' => $veracruz],
['name' => 'Cosamaloapan de Carpio', 'state_id' => $veracruz],
['name' => 'Ixmatlahuacan', 'state_id' => $veracruz],
['name' => 'Acula', 'state_id' => $veracruz],
['name' => 'Amatitlán', 'state_id' => $veracruz],
['name' => 'Tlacotalpan', 'state_id' => $veracruz],
['name' => 'Saltabarranca', 'state_id' => $veracruz],
['name' => 'Otatitlán', 'state_id' => $veracruz],
['name' => 'Tlacojalpan', 'state_id' => $veracruz],
['name' => 'Tuxtilla', 'state_id' => $veracruz],
['name' => 'Chacaltianguis', 'state_id' => $veracruz],
['name' => 'José Azueta', 'state_id' => $veracruz],
['name' => 'Playa Vicente', 'state_id' => $veracruz],
['name' => 'Santiago Sochiapan', 'state_id' => $veracruz],
['name' => 'Isla', 'state_id' => $veracruz],
['name' => 'Juan Rodríguez Clara', 'state_id' => $veracruz],
['name' => 'San Andrés Tuxtla', 'state_id' => $veracruz],
['name' => 'Santiago Tuxtla', 'state_id' => $veracruz],
['name' => 'Angel R. Cabada', 'state_id' => $veracruz],
['name' => 'Hueyapan de Ocampo', 'state_id' => $veracruz],
['name' => 'Catemaco', 'state_id' => $veracruz],
['name' => 'Soteapan', 'state_id' => $veracruz],
['name' => 'Mecayapan', 'state_id' => $veracruz],
['name' => 'Tatahuicapan de Juárez', 'state_id' => $veracruz],
['name' => 'Pajapan', 'state_id' => $veracruz],
['name' => 'Chinameca', 'state_id' => $veracruz],
['name' => 'Acayucan', 'state_id' => $veracruz],
['name' => 'San Juan Evangelista', 'state_id' => $veracruz],
['name' => 'Sayula de Alemán', 'state_id' => $veracruz],
['name' => 'Oluta', 'state_id' => $veracruz],
['name' => 'Soconusco', 'state_id' => $veracruz],
['name' => 'Texistepec', 'state_id' => $veracruz],
['name' => 'Jáltipan', 'state_id' => $veracruz],
['name' => 'Zaragoza', 'state_id' => $veracruz],
['name' => 'Oteapan', 'state_id' => $veracruz],
['name' => 'Cosoleacaque', 'state_id' => $veracruz],
['name' => 'Nanchital de Lázaro Cárdenas del Río', 'state_id' => $veracruz],
['name' => 'Ixhuatlán del Sureste', 'state_id' => $veracruz],
['name' => 'Moloacán', 'state_id' => $veracruz],
['name' => 'Coatzacoalcos', 'state_id' => $veracruz],
['name' => 'Agua Dulce', 'state_id' => $veracruz],
['name' => 'Minatitlán', 'state_id' => $veracruz],
['name' => 'Hidalgotitlán', 'state_id' => $veracruz],
['name' => 'Jesús Carranza', 'state_id' => $veracruz],
['name' => 'Las Choapas', 'state_id' => $veracruz],
['name' => 'Uxpanapa', 'state_id' => $veracruz],
['name' => 'Xalapa', 'state_id' => $veracruz]
        ]);
    }
}

    