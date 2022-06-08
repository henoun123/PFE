<?php

namespace App\Http\Controllers;

use App\Models\examen;
use App\Models\Patient;
use Illuminate\Http\Request;

class ExamenController extends Controller
{
   
    public function index()
    {
        $examen = Examen::latest()->paginate(5);
        return view('Backend.list_examen',compact('examen'));
    }


    public function create()
    {
        $patients = Patient::all();
        return view('Backend.create_examen',compact('patients'));
    }

    public function store(Request $request)
    {
        
        $request->validate([
            'nom'=>'required'
         
       
        ]);
        // dd($request->all());
        $examen = examen::create($request->all());
        return redirect()->route('examen.index')
        ->with('success','examen est ajouter');
    
}
    public function show(examen $examen)
    {
        return view('Backend.show_examen',compact('examen'));   
    }
    public function edit(examen $examen)
    {
        return view('Backend.edit_examen', compact('examen'));  

    }

    public function update(Request $request, examen $examen)
    {
        $request->validate([
            'nom'=>'required'
           
        ]); 
 
        $examen->update($request->all());

        return redirect()->route('examen.index')
        ->with('success','examen est modiffier');
    }
    public function destroy(examen $examen)
    {
        $examen ->delete();
        return redirect()->route('examen.index')
        ->with('success','examen est supprimer');
    }
}
