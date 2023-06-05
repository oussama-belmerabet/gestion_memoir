<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use App\Models\Enseignant;

class RA extends Model
{
    use HasFactory;

    public function enseignant(){
        return $this->belongsTo(Enseignant::class);
    }

}
