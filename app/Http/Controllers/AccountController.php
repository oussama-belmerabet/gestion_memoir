<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\User;
use App\Models\RA;
use App\Models\les_etudiants;
use App\Models\Enseignant;


class AccountController extends Controller
{

public function createRA(Request $request)
{
    $data = $request->all();
    $user = User::create($data);
    $ra = RA::create([
        'id_RA' => $user->id,
        'num_es' => $data['num_es']
    ]);

    return response()->json(['message' => 'RA account created successfully']);
}

public function createEM(Request $request)
{
    $data = $request->all();
    $user = User::create($data);

    $em = les_etudiants::create([
        'nom' => $data['nom'],
        'prenom' => $data['prenom'],
        'spécialité' => $data['spécialité'],
        'id_user' => $user->id
    ]);

    return response()->json(['message' => 'EM account created successfully']);
}

public function createEnseignant(Request $request)
{
    $data = $request->all();
    $user = User::create($data);

    $enseignant = Enseignant::create([
        'nom' => $data['nom'],
        'prenom' => $data['prenom'],
        'grade' => $data['grade'],
        'domaine' => $data['domaine'],
        'année_r' => $data['année_r'],
        'nbr_sujet' => $data['nbr_sujet'],
        'id_user' => $user->id
    ]);

    return response()->json(['message' => 'Enseignant account created successfully']);
}

}
