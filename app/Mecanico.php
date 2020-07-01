<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Mecanico extends Model
{
    protected $fillable = ['nome','cpf','telefone'];

    public function carros(){
        return $this->hasMany('App\Carros');
    }
}
