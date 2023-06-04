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
use App\Models\User;
use App\Models\Enseignant;



class RSM extends Model
{
    use HasFactory;
    protected $table = 'r_s_m_s';

    public function user()
    {
        return $this->belongsTo(User::class, 'id_RSM');
    }

    public function enseignant()
    {
        return $this->belongsTo(Enseignant::class,'id_RA','num_es');
    }
}
