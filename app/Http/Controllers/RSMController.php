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
            'name' => 'required|unique:users',
            'email' => 'required|unique:users',
            'password' => 'required',
            'num_es' => 'required|exists:enseignants,num_es',
        ]);

        // Check if validation fails
        if ($validator->fails()) {
            return response()->json(['errors' => $validator->errors()], 400);
        }

        // Retrieve the validated data
        $data = $validator->validated();

        // Create a new user account for RA
        $user = User::create($data);

        // Create a new RA entry in the 'r_a_s' table
        $ra = DB::insert('insert into r_a_s (id_RA, num_es) values (?, ?)', [$user->id, $data['num_es']]);



        // Return a success response
        return view('users.index');
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


    public function createEnseignant(Request $request)
    {
        // Retrieve the request data
        $data = $request->all();

        // Create a new user account for Enseignant
        $user = User::create($data);

        // Create a new Enseignants entry in the 'enseignants' table
        $enseignant = Enseignant::create([
            'nom' => $data['nom'],
            'prenom' => $data['prenom'],
            'grade' => $data['grade'],
            'domaine' => $data['domaine'],
            'année_r' => $data['année_r'],
            'nbr_sujet' => $data['nbr_sujet'],
            'id_user' => $user->id
        ]);

        return redirect()->back();
    }
    public function viewProposedSubjects()
    {
        // View proposed subjects logic
    }

    public function selectEncadrementTeachers(Request $request)
    {
        // Select encadrement teachers logic
    }

    public function viewModifiedSubjects()
    {
        // View modified subjects logic
    }

    public function assignInitialSubjects(Request $request)
    {
        // Assign initial subjects logic
    }

    public function viewProjectProgress()
    {
        // View project progress logic
    }

    public function viewReclamations()
    {
        // View reclamations logic
    }

    public function viewExaminationChoices()
    {
        // View examination choices logic
    }

    public function proposeSubject(Request $request)
    {
        // Propose subject logic
    }


    public function index()
    {
        //
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        //
    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        //
    }
}
