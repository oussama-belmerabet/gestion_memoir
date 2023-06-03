<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class RAController extends Controller
{
    public function show(){
        return view('addRa');
    }


    public function viewProposedSubjects()
    {
        // View proposed subjects logic
    }

    public function selectEncadrementTeachers(Request $request)
    {
        // Select encadrement teachers logic
    }

    public function viewSubjects()
    {
        // View subjects logic
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


    public function index()
    {
        //
    }



    public function store(Request $request)
    {
        //
    }



    public function destroy(string $id)
    {
        //
    }
}
