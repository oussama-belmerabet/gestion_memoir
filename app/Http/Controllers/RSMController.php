<?php

namespace App\Http\Controllers;

use Illuminate\Support\Facades\DB;
use Illuminate\Http\Request;
use App\Models\User;
use App\Models\RA;
use App\Models\LesEtudiants;
use App\Models\Enseignant;
use App\Models\les_etudiants;
use Illuminate\Support\Facades\Validator;

class RSMController extends Controller
{
    /**
     * Display a listing of the resource.
     */

    public function createRA(Request $request)
    {
        // Validate the request data
        $validator = Validator::make($request->all(), [
            'name' => 'required',
            'email' => 'required|unique:users',
            'password' => 'required',
            'num_es' => 'required|unique',
        ]);

        // Check if validation fails
        if ($validator->fails()) {
            return redirect()->back()->withErrors($validator)->withInput();;
        }

        // Retrieve the validated data
        $data = $validator->validated();

        // Create a new user account for RA
        $user = User::create($data);

        // Create a new RA entry in the 'r_a_s' table
        $ra = DB::insert('insert into r_a_s (id_RA, num_es) values (?, ?)', [$user->id, $data['num_es']]);



        // Return a success response
        return back();
    }

    public function supremeEm($id){
        DB::delete('delete  FROM  les_etudiants where num_et = ?', [$id]);
        return back();
    }

    public function modifierEm($num_et){
        $em = les_etudiants::find($num_et);
        dd($em);
        return back();
    }

    public function EM()
    {
        // Create account logic
        return view('addEm');
    }

    public function createEM(Request $request)
    {
        $data = $request->all();


        // Create a new user account for EM
        $user = User::create($data);

        // Create a new LesEtudiants entry in the 'les_etudiants' table
        $em = les_etudiants::create([
            'nom' => $data['nom'],
            'prenom' => $data['prenom'],
            'spécialité' => $data['spécialité'],
            'id_user' => $user->id
        ]);
        return redirect()->back();
    }

    public function enseignant()
    {
        return view('enseignant');
    }



}
