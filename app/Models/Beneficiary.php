<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

use App\Models\Family;


class Beneficiary extends Model
{
    use HasFactory;


    public function family()
    {
        return $this->hasMany(Family::class, 'beneficiary_id', 'id');
    }

    public function training()
    {
        return $this->hasMany(Training::class, 'beneficiary_id', 'id');
       // return $this->belongsToMany(Training::class, 'beneficiary_training');


    }
}
