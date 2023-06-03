<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use App\Models\Enseignant;
use App\Models\les_etudiants;

use App\Models\Encadrement;
use App\Models\Choisir_sujet_examin;
use App\Models\Classement;
use App\Models\Commentaire;
use App\Models\Jury;
use App\Models\RA;
use App\Models\reclamation;
use App\Models\RSM;

use App\Models\État_avancement;

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

    public function les_etudiants()
    {
        return $this->hasMany(Les_etudiants::class);
    }

    public function etatAvancements()
    {
        return $this->hasMany(État_avancement::class);
    }

    public function juries()
    {
        return $this->belongsToMany(Jury::class);
    }

    public function choisirSujetExamins()
    {
        return $this->belongsToMany(Choisir_sujet_examin::class);
    }

    public function classements()
    {
        return $this->belongsTo(Classement::class);
    }
}
