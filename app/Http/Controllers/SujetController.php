<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Sujet;

class SujetController extends Controller
{

    public function proposeSubject(Request $request)
    {

        $request->validate([
            'intitulé' => 'required',
            'description' => 'required',
            'num_es' => 'required|exists:enseignants,num_es',
            'num_com_accepter' => 'integer',
            'num_com_refuser' => 'integer',
        ]);


        $sujet = Sujet::create([
            'intitulé' => $request->input('intitulé'),
            'description' => $request->input('description'),
            'num_es' => $request->input('num_es'),
            'num_com_accepter' => $request->input('num_com_accepter', 0),
            'num_com_refuser' => $request->input('num_com_refuser', 0),
        ]);

        return redirect()->back()->with('success', 'Subject proposed successfully.');
    }

    public function propose(){
        return view('sujets.proposerSujet');
    }
    public function index(){
            $sujets = sujet::all();
            return view('sujets.index',compact('sujets'));
    }

    public function show($id)
    {

        $sujet = Sujet::findOrFail($id);

        return view('sujets.show', compact('sujet'));
    }

    public function edit($id)
    {

        $sujet = Sujet::findOrFail($id);

        return view('sujets.edit', compact('sujet'));
    }

    public function update(Request $request, $id)
    {

        $request->validate([
            'intitulé' => 'required',
            'description' => 'required',
            'num_es' => 'required|exists:enseignants,num_es',
            'num_com_accepter' => 'integer',
            'num_com_refuser' => 'integer',
        ]);

        $sujet = Sujet::findOrFail($id);

        $sujet->update([
            'intitulé' => $request->input('intitulé'),
            'description' => $request->input('description'),
            'num_es' => $request->input('num_es'),
            'num_com_accepter' => $request->input('num_com_accepter', 0),
            'num_com_refuser' => $request->input('num_com_refuser', 0),
        ]);
        return redirect()->route('sujet.show', $sujet->id)->with('success', 'Sujet updated successfully!');
    }

    public function getModifiedList()
    {
        $modifiedSujets = Sujet::whereNotNull('updated_at')->get();
        return response()->json($modifiedSujets);
    }

    public function assignSubjects(Request $request)
    {
        $category = $request->input('category');
        $sujetIds = $request->input('sujet_ids');
        Sujet::whereIn('id', $sujetIds)->update(['category' => $category]);
        return redirect()->back()->with('success', 'Subjects assigned successfully.');
    }

    public function destroy($id)
    {

        $sujet = Sujet::findOrFail($id);
        $sujet->delete();
        return redirect()->route('sujet.index')->with('success', 'Sujet deleted successfully!');
    }

    public function getValidatedList()
    {
        $validatedSujets = Sujet::whereNotNull('validated_at')->get();

        // Optionally, you can perform additional operations or data manipulation here.

        // Return the response with the validated sujets
        return view('sujets.validated', ['sujets' => $validatedSujets]);
    }
}
