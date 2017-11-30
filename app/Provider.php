<?php

namespace Appdominio;

use Illuminate\Database\Eloquent\Model;

class Provider extends Model
{
    protected $table = "providers";

    protected $fillable = [
        'nombre', 'website'
    ];
    
    //un proveedor tiene muchos dominios
    public function domains()
    {
        return $this->hasMany('Appdominio\Domain');
    }

    //un proveedor tiene muchas cuentas
    public function accounts()
    {
        return $this->belongsToMany('Appdominio\Account');
    }   
}
