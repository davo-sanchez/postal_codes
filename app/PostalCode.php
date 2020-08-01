<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Facades\DB;

class PostalCode extends Model
{

    protected $table = 'postal_codes';

    private $code = '';

    private $data = [
            'codigo_postal' => '',
            'ciudad' => '',
            'estado' => '',
            'colonias' => []
        ];

    public function __construct($code){

        $this->code = $code;

        $this->isFrom();

    }

    private function isFrom(){

        $code_info =  DB::table('neighborhood_postal_codes')
                ->select(
                    'states.name as state_name',
                    'cities.name as city_name',
                    'neighborhoods.name as neighborhood_name',
                    'postal_codes.code as postal_code'
                    )
                ->join('neighborhoods','neighborhood_postal_codes.neighborhood_id','=','neighborhoods.id')
                ->join('postal_codes','neighborhood_postal_codes.postal_code_id','=','postal_codes.id')
                ->join('cities','neighborhoods.city_id','=','cities.id')
                ->join('states','cities.state_id','=','states.id')
                ->where('code',$this->code)
                ->get();

                $this->data['codigo_postal'] = $code_info[0]->postal_code;
                $this->data['ciudad']        = $code_info[0]->city_name;
                $this->data['estado']        = $code_info[0]->state_name;

                foreach($code_info as $info){

                    array_push($this->data['colonias'], $info->neighborhood_name);
        
                }
    }


    public function showInfo(){
        return $this->data;
    }

}
