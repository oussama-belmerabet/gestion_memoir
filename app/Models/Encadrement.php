<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use app\Models\Choisir_sujet_examin;
use app\Models\Classement;

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

class Encadrement extends Model
{
    use HasFactory;

    protected $fillable = [
        'année', 'état', 'num_es'
    ];

    public function enseignant()
    {
        return $this->belongsTo(Enseignant::class, 'num_es');
    }


}
