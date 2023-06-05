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
            user::destroy($enseignant->id_user);
            return back();
        } else {
            return back();
        }
    }


    public function block($id)
    {
        $account = User::find($id);

        if (!$account) {
            abort(404, 'Account not found');
        }
        $account->blocked = true;
        dd($account);
        //$account->save();
        return redirect()->back()->with('success', 'Account blocked successfully');
    }

    public function show()
    {
        $em = les_etudiants::all();
        //$rsm = RSM::all();
        $rsm = RSM::with('User')->with('Enseignant')->get();
        $ra = RA::all();
        $sujets =  Sujet::with('les_etudiants')->with('Enseignant')->get();
        $enseignants = Enseignant::all();

        if (!$rsm->isNotEmpty()) {
            $user = User::all();

            $enseignant = Enseignant::create([
                'grade' => 'info',
                'prenom' => 'prenom',
                'domaine' => 'domaine',
                'année_r' => 2022,
                'nbr_sujet' => 0,
                'id_user' => $user[0]->id
            ]);
            $ra = DB::insert('insert into r_a_s (id_RA, num_es) values (?, ?)', [$user[0]->id, $enseignant->id]);
            $rsm = DB::insert('insert into r_s_m_s (id_RSM, id_RA) values (?, ?)', [$user[0]->id, $enseignant->id]);

            $em = les_etudiants::all();
            $rsm = RSM::all();
            $rsm = RSM::with('User')->with('Enseignant')->get();
            $ra = RA::all();
            $sujets = Sujet::all();
            $enseignants = Enseignant::all();
            return view('users.index', [
                'em' => $em,
                'rsm' => $rsm[0],
                'ra' => $ra,
                'sujets' => $sujets,
                'enseignants' => $enseignants
            ]);
        }


        return view('users.index', [
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
            'prenom' => $data['prenom'],
            'domaine' => $data['domaine'],
            'année_r' => $data['année_r'],
            'nbr_sujet' => $data['nbr_sujet'],
            'id_user' => $user->id
        ]);

        return back();
    }
}
