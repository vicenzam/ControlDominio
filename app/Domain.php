<?php

namespace Appdominio;

use Illuminate\Database\Eloquent\Model;

class Domain extends Model
{
    protected $table = "domains";

    protected $fillable = [
        'client_id', 'provider_id', 'account_id', 'nombre', 'registro', 'vence', 'observacion', 'estado'
    ];

    protected $dates = [
        'registro', 'vence'
    ];

    //muchos dominio perteneces a un cliente
    public function client()
    {
        return $this->belongsTo('Appdominio\Client');
    }

    //muchos dominios pertenecen a un proveedor
    public function provider()
    {
        return $this->belongsTo('Appdominio\Provider');
    }

    //muchos dominios pertenecen a una cuenta
    public function account()
    {
        return $this->belongsTo('Appdominio\Account');
    }
     
}
