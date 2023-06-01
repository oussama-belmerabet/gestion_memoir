<?php

namespace App\Models;
use app\Models\Choisir_sujet_examin;

use app\Models\Encadrement;
use app\Models\Enseignant;
use app\Models\Jury;
use app\Models\les_etudiants;
use app\Models\RA;
use app\Models\reclamation;
use app\Models\RSM;
use app\Models\Sujet;
use app\Models\User;
use app\Models\État_avancement;
use app\Models\Commentaire;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Classement extends Model
{
    use HasFactory;
    protected $fillable = [
        'num_et', 'num_sujet', 'num_clsmn'
    ];

    public function etudiant()
    {
        return $this->belongsTo(les_etudiants::class, 'num_et');
    }

    public function sujet()
    {
        return $this->belongsTo(Sujet::class, 'num_sujet');
    }
}
