<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Problema extends Model
{
    protected $fillable = ['descricao', 'carro_id'];

    public function carros(){
        return $this->belongsTo('App\Carro');
    }
}
