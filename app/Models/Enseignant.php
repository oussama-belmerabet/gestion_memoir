<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

use App\Models\les_etudiants;

use App\Models\Encadrement;
use App\Models\Choisir_sujet_examin;
use App\Models\Classement;
use App\Models\Commentaire;
use App\Models\Jury;
use App\Models\RA;
use App\Models\reclamation;
use App\Models\RSM;
use App\Models\Sujet;
use App\Models\État_avancement;

class Enseignant extends Model
{
    use HasFactory;
    protected $fillable = [
        'grade',
        'prenom',
        'domaine',
        'année_r',
        'nbr_sujet',
        'id_user',
    ];


    public function user()
    {
        return $this->belongsTo(User::class, 'id_user');
    }

    public function sujets()
    {
        return $this->hasMany(Sujet::class);
    }

    public function encadrements()
    {
        return $this->hasMany(Encadrement::class);
    }

    public function rAs()
    {
        return $this->hasOne(RA::class);
    }

    public function juries()
    {
        return $this->belongsToMany(Jury::class);
    }

    public function choisirSujetExamins()
    {
        return $this->belongsToMany(Choisir_sujet_examin::class);
    }

    public function rsm()
    {
        return $this->hasOne(RSM::class);
    }
}
