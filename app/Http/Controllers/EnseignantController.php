<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Enseignant;

class EnseignantController extends Controller
{
    /**
     * Display a listing of the resource.
     */

    public function selectTeachers(Request $request)
{

    $data = $request->all();
    $selectedTeachers = $data;

    return view('enseignant.selected', ['teachers' => $selectedTeachers]);
}

public function index()
{
    $teachers = Enseignant::all();

    return view('enseignant.index', ['teachers' => $teachers]);
}


     public function proposeSubject(Request $request)
     {

     }

     public function viewEncadrementTeachers()
     {

     }

     public function viewValidatedSubjects()
     {

     }

     public function updateProjectProgress(Request $request)
     {

     }

     public function viewSubjectsToExamine()
     {

     }

     public function viewExaminationResult(Request $request)
     {

     }



    public function create()
    {
        //
    }


    public function store(Request $request)
    {
        //
    }


    public function show(string $id)
    {
        //
    }


    public function edit(string $id)
    {
        //
    }


    public function update(Request $request, string $id)
    {
        //
    }


    public function destroy(string $id)
    {
        //
    }
}
