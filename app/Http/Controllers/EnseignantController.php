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


    public function update(Request $request, string $id)
    {
        //
    }


    public function destroy(string $id)
    {
        //
    }
}
