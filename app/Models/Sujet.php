<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use App\Models\Enseignant;
use App\Models\les_etudiants;

class Sujet extends Model
{
    use HasFactory;

    protected $fillable = [
        'intitulé',
        'description',
        'num_es',
        'num_com_accepter',
        'num_com_refuser',
    ];

    public function enseignant()
    {
        return $this->belongsTo(Enseignant::class, 'num_es');
    }

    /**
     * Get the les_etudiants that have chosen this sujet.
     */
    public function les_etudiants()
    {
        return $this->hasMany(Les_etudiants::class, 'sujet_id');
    }
}
