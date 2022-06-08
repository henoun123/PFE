<?php

namespace App\Http\Controllers;

use App\Models\Patient;
use App\Models\patologie;
use App\Models\examen;
use Illuminate\Http\Request;


class PatientController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $patient = Patient::latest()->paginate(5);
        return view('Backend.list_patient',compact('patient'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $patologies = patologie::all();
        $examens = Examen::all();
        return view('Backend.create',compact('patologies','examens'));
    }

    public function store(Request $request)
    {
        $request->validate([
            'nom'=>'required',
            'prenom'=>'required',
            'telephone'=>'required',
            'genre'=>'required',
            'date_naissance'=>'required',
            'date_reception'=>'required'
       
        ]);
       
        // ------------------------
        $patient = Patient::create($request->all());
        $patientId = patient::find($patient -> id);
        $patientId -> patologies() -> attach($request -> patologie_id);
        // apprer ajouet transfere a autre fenetre
        return redirect()->route('patient.index')
        ->with('success','patient est ajouter');
    }
    public function show(Patient $patient)
    {
        return view('Backend.show',compact('patient'));   
    }

    public function edit(Patient $patient)
    {
        return view('Backend.edit', compact('patient'));  
    }

    
    public function update(Request $request, Patient $patient)
    {
        $request->validate([
            'nom'=>'required',
            'prenom'=>'required',
            'telephone'=>'required',
            'genre'=>'required',
            'date_naissance'=>'required',
            'date_reception'=>'required'
        ]); 
 
        $patient->update($request->all());
        // apprer ajouet transfere a autre fenetre
        return redirect()->route('patient.index')
        ->with('success','patient est modiffier');
    }


    public function destroy(Patient $patient)
    {
        $patient ->delete();
        return redirect()->route('patient.index')
        ->with('success','patient est supprimer');
    }
}
