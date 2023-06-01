<?php

namespace App\Models;

// use Illuminate\Contracts\Auth\MustVerifyEmail;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Foundation\Auth\User as Authenticatable;
use Illuminate\Notifications\Notifiable;
use Laravel\Sanctum\HasApiTokens;
use app\Models\Choisir_sujet_examin;
use app\Models\Classement;
use app\Models\Encadrement;
use app\Models\Enseignant;
use app\Models\Jury;
use app\Models\les_etudiants;
use app\Models\RA;
use app\Models\reclamation;
use app\Models\RSM;
use app\Models\Sujet;
use app\Models\État_avancement;
use app\Models\Commentaire;

class User extends Authenticatable
{
    use HasApiTokens, HasFactory, Notifiable;

    /**
     * The attributes that are mass assignable.
     *
     * @var array<int, string>
     */

    protected $fillable = [
        'name', 'email', 'password', 'état'
    ];

    public function enseignant()
    {
        return $this->hasOne(Enseignant::class, 'id_user');
    }

    public function etudiant()
    {
        return $this->hasOne(les_etudiants::class, 'id_user');
    }

    /**
     * The attributes that should be hidden for serialization.
     *
     * @var array<int, string>
     */
    protected $hidden = [
        'password',
        'remember_token',
    ];

    /**
     * The attributes that should be cast.
     *
     * @var array<string, string>
     */
    protected $casts = [
        'email_verified_at' => 'datetime',
        'password' => 'hashed',
    ];

}
