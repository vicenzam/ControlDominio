<?php

namespace Appdominio;

use Illuminate\Database\Eloquent\Model;

class Account extends Model
{
    protected $table = "accounts";

    protected $fillable = [
        'nombre', 'email'
    ];

    //uuna cuenta tiene muchos proveedores
    public function providers()
    {
        return $this->belongsToMany('Appdominio\Provider');
    }

    //una cuenta tiene muchos dominios
    public function domains()
    {
        return $this->hasMany('Appdominio\Domain');
    }   
}
