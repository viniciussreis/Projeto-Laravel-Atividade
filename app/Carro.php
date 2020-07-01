<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Carro extends Model
{
    protected $fillable = ['placa','modelo','ano','cor'];

    public function clientes(){
        return $this->belongsTo('App\Cliente');
    }

    public function mecanicos(){
        return $this->belongsTo('App\Mecanico');
    }

    public function problemas(){
        return $this->hasMany('App\Problema');
    }
}
