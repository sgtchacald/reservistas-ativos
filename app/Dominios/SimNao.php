<?php
namespace App\Dominios;

use Illuminate\Database\Eloquent\Model;

class SimNao extends Model
{

    public static function getDominio()
    {
        return array(
            "S" => "Sim",
            "N" => "Não",
        );
    }
}