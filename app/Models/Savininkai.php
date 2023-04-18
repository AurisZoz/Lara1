<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Builder;

class Savininkai extends Model
{

    use HasFactory;

    public function automobiliai(){
        return $this->belongsTo(Savininkai::class);
    }

    public function scopeFilter(Builder $query, $filter)
    {
        if ($filter->vardas!=null)
        {
            $query->where('vardas','like', "%$filter->vardas%");
        }
        if ($filter->pavarde!=null)
        {
            $query->where('pavarde','like', "%$filter->pavarde%");
        }
    }

}