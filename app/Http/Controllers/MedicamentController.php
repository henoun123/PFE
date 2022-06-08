<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Medicament;

class MedicamentController extends Controller
{
    public function index()
    {
        $medicaments = Medicament::latest()->paginate(5);
        return view('Backend.list_medicament',compact('medicaments'));
    }

    public function create()
    {
       
         $medicaments = Medicament::all();
       
        return view('Backend.create_medicament',compact('medicaments'));

    }
  
    public function store(Request $request)
    {

       
           
      

        $medicaments = Medicament::create($request->all());
        return redirect()->route('medicament.index')
        ->with('success','sercice est ajouter');


        // apprer ajouet transfere a autre fenetre
        return redirect()->route('medecin.index')
        ->with('success','medecin est ajouter');

    }

   
    public function show(Medicament $medicament)
    {
        return view('Backend.show_medicament',compact('medicaments'));   

    }

    public function edit(Medicament $medicament)
    {

        return view('Backend.edit_medicament', compact('medicament'));  
    }

    public function update(Request $request, Medicament $medicament)
    {
        $request->validate([
            'nom'=>'required',
            'abrv'=>'required',
            'dateproduction'=>'required',
            'dateexpiration'=>'required'
        ]); 
 
        $medicament->update($request->all());
        // apprer ajouet transfere a autre fenetre
        return redirect()->route('medicament.index')
        ->with('success','medicament est modiffier');
    }

    public function destroy(Medicament $medicament)
    {
        $medicament->delete();
        return redirect()->route('medicament.index')
        ->with('success','medicament est supprimer');
    }
}
