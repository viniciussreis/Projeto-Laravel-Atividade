<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Mecanico extends Model
{
    protected $fillable = ['nome','cpf'];

    public function carros(){
        return $this->hasMany('App\Carro');
    }
}
