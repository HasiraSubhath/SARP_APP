<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Training extends Model
{
    use HasFactory;
    protected $table = 'training_program';

    public function beneficiary()
    {
        return $this->belongsTo(Beneficiary::class);
       // return $this->belongsToMany(Beneficiary::class, 'beneficiary_training');
    }
   
}
