<?php

namespace Appdominio;

use Illuminate\Database\Eloquent\Model;

class Client extends Model
{
	protected $table = "clients";
    
    protected $fillable = [
        'nombre', 'ruc', 'email', 'telefono'
    ];

    //un cliente tiene muchos dominios
    public function domains()
    {
        return $this->hasMany('Appdominio\Domain');
    }   
}
