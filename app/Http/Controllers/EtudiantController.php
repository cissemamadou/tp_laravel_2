<?php

namespace App\Http\Controllers;

use App\Etudiant;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Validator;

class EtudiantController extends Controller
{
    //
    public function add(Request $request)
    {
//        $requestEtudiants = new EtudiantRequest();
//        $validator = \validator($request->all(), $requestEtudiants->rules());
//        if ($validator->fails()){
//            return back();
//        }
        Etudiant::create($request->all());
        return back()->with('status', trans('etudiant.msgenregistrementok'));
    }

    public function show($id)
    {
        $etudiant = Etudiant::findorfail($id);
        return view('etudiant.show', compact('etudiant'));
    }

    public function edit($id)
    {
        $etudiant = Etudiant::findorfail($id);
        return view('etudiant.edit', compact('etudiant'));
    }

    public function update(Request $request, $id)
    {
        $etudiant = Etudiant::findorfail($id);
        $etudiant->nom = $request->input('nom');
        $etudiant->prenom = $request->input('prenom');
        $etudiant->save();
        return back()->with('status', trans('etudiant.miseajourok'));
    }

    public function delete($id)
    {
        $etudiant = Etudiant::findorfail($id);
        $etudiant->remove();
        return back()->with('status', trans('etudiant.etudiantdeleted'));
    }

}
