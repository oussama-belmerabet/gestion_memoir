<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class RSMController extends Controller
{
    /**
     * Display a listing of the resource.
     */


     public function createAccount(Request $request)
    {
        // Create account logic

    }

    public function viewAccounts()
    {
        // View accounts logic
        return view('layouts.app');
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
