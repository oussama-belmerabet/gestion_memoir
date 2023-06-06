<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;


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


class les_etudiants extends Model
{
    use HasFactory;
    protected $primaryKey = 'num_et';

    protected $fillable = [
        'nom',
        'prenom',
        'spécialité',
        'id_user'
    ];

    public function les_etudiant(){
        return $this->hasOne(les_etudiants::class,'num_binome','num_et');
    }

    public function binome()
    {
        return $this->belongsTo(les_etudiants::class,'num_et');
    }

    
    public function user()
    {
        return $this->belongsTo(User::class);
    }

    public function sujet()
    {
        return $this->belongsTo(Sujet::class);
    }



    public function reclamation()
    {
        return $this->hasMany(Reclamation::class);
    }

    public function classements()
    {
        return $this->belongsTo(Classement::class);
    }
}
