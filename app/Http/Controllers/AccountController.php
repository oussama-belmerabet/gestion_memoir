<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\User;
use App\Models\RA;
use App\Models\les_etudiants;
use App\Models\Enseignant;
use App\Models\RSM;
use App\Models\Sujet;
use Illuminate\Support\Facades\DB;




class AccountController extends Controller
{



    public function deleteEnseignant($numEs)
{
    $enseignant = Enseignant::where('num_es', $numEs)->first();
    if ($enseignant) {
        DB::delete('delete  FROM enseignants where num_es = ?', [$numEs]);
        return back();
    } else {
        return back();
    }
}


    public function show(){
    $em = les_etudiants::all();
    //$rsm = RSM::all();
    $rsm = RSM::with('User')->with('Enseignant')->get();
    $ra = RA::all();
    $sujets = Sujet::all();
    $enseignants = Enseignant::all();

        return view('users.index',[
            'em' => $em,
            'rsm' => $rsm[0],
            'ra' => $ra,
            'sujets' => $sujets,
            'enseignants' => $enseignants
        ]);
    }

public function createEnseignant(Request $request)
{
    $data = $request->all();
    $user = User::create($data);

    $enseignant = Enseignant::create([
        'grade' => $data['grade'],
        'prenom'=>$data['prenom'],
        'domaine' => $data['domaine'],
        'année_r' => $data['année_r'],
        'nbr_sujet' => $data['nbr_sujet'],
        'id_user' => $user->id
    ]);

    return back();
}

}
