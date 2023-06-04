<?php

namespace App\Models;

// use Illuminate\Contracts\Auth\MustVerifyEmail;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Foundation\Auth\User as Authenticatable;
use Illuminate\Notifications\Notifiable;
use Laravel\Sanctum\HasApiTokens;
use App\Models\les_etudiants;
use App\Models\Enseignant;
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

class User extends Authenticatable
{
    use HasApiTokens, HasFactory, Notifiable;


    protected $fillable = [
        'name',
        'email',
        'password',
    ];

    protected $hidden = [
        'password',
        'remember_token',
    ];


    protected $casts = [
        'email_verified_at' => 'datetime',
        'password' => 'hashed',
    ];


    public function enseignant(){
        return $this->hasOne(Enseignant::class);
    }

    public function les_etudiant(){
        return $this->hasMany(les_etudiants::class);
    }

    public function rsm()
    {
        return $this->hasOne(RSM::class, 'id_RSM');
    }
}
