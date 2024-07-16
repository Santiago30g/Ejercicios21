<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class journey extends Model
{
    use HasFactory;
    // de uno a muchos 
    public function destination(){
        return $this->belongsTo('App\Models\Destination');

}
public function traveler(){
    return $this->belongsTo('App\Models\Traveler');

}

    
    // de uno a muchos 
    public function origin(){
        return $this->belongsTo('App\Models\Origin');

}

}