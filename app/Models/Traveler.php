<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Traveler extends Model
{
    use HasFactory;
     // relacion de 1 viajero a muchos viajes
    public function journey(){
        return $this->hasMany('App\Models\Journey');
    }
}
