<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

use app\Models\Choisir_sujet_examin;
use app\Models\Classement;
use app\Models\Encadrement;

use app\Models\Jury;
use app\Models\les_etudiants;
use app\Models\RA;
use app\Models\reclamation;
use app\Models\RSM;
use app\Models\Sujet;
use app\Models\User;
use app\Models\État_avancement;
use app\Models\Commentaire;

class Enseignant extends Model
{
    use HasFactory;


    protected $fillable = [
        'nom', 'prenom', 'grade', 'domaine', 'année_r', 'nbr_sujet', 'id_user'
    ];

    public function user()
    {
        return $this->belongsTo(User::class, 'id_user');
    }
}
