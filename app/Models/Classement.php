<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use App\Models\Sujet;
use App\Models\les_etudiants;


class Classement extends Model
{
    use HasFactory;
    protected $fillable=[
        'num_et',
        'num_sujet',
    ];
    public function sujet(){
        return $this->belongsTo(Sujet::class,'num_sujet','num_sujet');
    }

    public function les_etudiant(){
        return $this->hasMany(les_etudiants::class,'num_et','num_et');
    }


}
