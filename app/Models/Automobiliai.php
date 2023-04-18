<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Automobiliai extends Model
{
    
    use HasFactory;
    public function savininkai(){
        return $this->hasMany(Savininkai::class);
    }

}