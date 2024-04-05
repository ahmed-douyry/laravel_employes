<?php

namespace App\Http\Controllers;

use App\Models\Employe;
use App\Models\Manager;
use Illuminate\Http\Request;

class EmployeController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
       $employes =Employe::all();
       return view('employes.index',compact('employes'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $managers = Manager::all();
        return view('employes\create',compact('managers'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {

        $validate = $request->validate([
            'key' => 'required',
            'code_theme' => 'required',
            'Mle' => 'required',
            'Nom_Prenom' => 'required',
            'JCM' => 'required',
            'Metier' => 'required',
            'Service' => 'required',
            'Entite' => 'required',
            'manager' => 'required',
            'duree' => 'required',
            'date_debut' => 'required|date',
            'date_fin' => 'required|date|after_or_equal:date_debut',            
            'presence' => 'required',
            'programe' => 'required',
            'groupe' => 'required',
        ]);
        $plageOccupee = Employe::where('date_debut', '<=', $request->input('date_fin'))
        ->where('date_fin', '>=', $request->input('date_debut'))
        ->where('manager', $request->input('manager'))
        ->exists();
        
    
        // Si la plage de dates est occupée, rediriger avec un message d'erreur
        if ($plageOccupee) {
            return redirect()->back()->with('error', 'La plage de dates est déjà occupée.');
        }
        Employe::create($validate);
        return redirect()->route('employes.index')->with('success', 'La nouvelle entrée a été ajoutée avec succès.');

        
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($key)
    {
        $managers = Manager::all();
        $employe = Employe::find($key);
        return view('employes.edit',['managers'=>$managers,'employe'=>$employe]);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $key)
    {
        // Valider les données entrées par l'utilisateur
        $validatedData = $request->validate([
            'key' => 'required',
            'code_theme' => 'required',
            'Mle' => 'required',
            'nom_prenom' => 'required',
            'JCM' => 'required',
            'Metier' => 'required',
            'Service' => 'required',
            'Entite' => 'required',
            'manager' => 'required',
            'duree' => 'required',
            'date_debut' => 'required|date',
            'date_fin' => 'required|date|after_or_equal:date_debut',
            'presence' => 'required',
            'programe' => 'required',
            'groupe' => 'required',
        ]);
        $plageOccupee = Employe::where('date_debut', '<=', $request->input('date_fin'))
        ->where('date_fin', '>=', $request->input('date_debut'))
        ->where('manager', $request->input('manager'))
        ->exists();
        
    
        // Si la plage de dates est occupée, rediriger avec un message d'erreur
        if ($plageOccupee) {
            return redirect()->back()->with('error', 'La plage de dates est déjà occupée.');
        }
        // Trouver l'employé à mettre à jour
        $employe = Employe::find($key);

        // Mettre à jour les données de l'employé
        $employe->update($validatedData);

        return redirect()->route('employes.index')->with('success', 'L\'employé a été mis à jour avec succès.');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($key)
    {
        $employe = Employe::find($key);
        $employe->delete();
        return redirect()->route('employes.index');
    }
}
