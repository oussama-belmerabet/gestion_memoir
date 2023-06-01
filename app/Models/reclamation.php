<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use app\Models\Choisir_sujet_examin;
use app\Models\Classement;
use app\Models\Encadrement;
use app\Models\Enseignant;
use app\Models\Jury;
use app\Models\les_etudiants;
use app\Models\RA;
use app\Models\RSM;
use app\Models\Sujet;
use app\Models\User;
use app\Models\État_avancement;
use app\Models\Commentaire;

class reclamation extends Model
{
    use HasFactory;

    protected $fillable = [
        'message', 'num_et'
    ];

    public function les_etudiant()
    {
        return $this->belongsTo(les_etudiants::class, 'num_et');
    }
}
