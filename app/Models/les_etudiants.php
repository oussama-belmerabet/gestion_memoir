<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

use app\Models\Choisir_sujet_examin;
use app\Models\Classement;
use app\Models\Encadrement;
use app\Models\Enseignant;
use app\Models\Jury;
use app\Models\RA;
use app\Models\reclamation;
use app\Models\RSM;
use app\Models\Sujet;
use app\Models\User;
use app\Models\État_avancement;
use app\Models\Commentaire;

class les_etudiants extends Model
{
    use HasFactory;


    protected $fillable = [
        'nom', 'prenom', 'spécialité', 'sujet_id', 'num_binome', 'id_user'
    ];

    public function user()
    {
        return $this->belongsTo(User::class, 'id_user');
    }

    public function sujet()
    {
        return $this->belongsTo(Sujet::class, 'sujet_id');
    }
}
