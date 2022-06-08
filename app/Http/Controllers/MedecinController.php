<?php

namespace App\Http\Controllers;

use App\Models\medecin;
use App\Models\service;
use Illuminate\Http\Request;

class MedecinController extends Controller
{
    public function __construct()
    {
        $this->middleware('auth');
    }
    
    public function index()
    {
        $medecin = Medecin::latest()->paginate(5);
        return view('Backend.list_medecin',compact('medecin'));
    }

    public function create()
    {
       
         $services = Service::all();
       
        if ($services->count() == 0) {
            return   redirect()->route('service.create');
        }
        return view('Backend.create_medecin',compact('services'));

    }
  
    public function store(Request $request)
    {

       
           
      

        $medecin = Medecin::create($request->all());

        $medecinId = Medecin::find($medecin -> id);
        
        $medecinId -> services() -> syncWithoutDetaching($request -> service_id);
        return redirect()->route('medecin.index')
        ->with('success','sercice est ajouter');


        // apprer ajouet transfere a autre fenetre
        return redirect()->route('medecin.index')
        ->with('success','medecin est ajouter');

    }

   
    public function show(medecin $medecin)
    {
        return view('Backend.show_medecin',compact('medecin'));   

    }

    public function edit(medecin $medecin)
    {
        $services = Service::all();
        return view('Backend.edit_medecin', compact('medecin','services'));  
    }

    public function update(Request $request, medecin $medecin)
    {

        $input['nom']=$request->nom;
        $input['prenom']=$request->prenom;
        $input['telephone']=$request ->telephone;
        $input['date_recritement']=$request->date_recritement;

        $medecin ->update($input);
        $medecin -> services()->sync($request->services);
        $medecin->update($request->all());
        // apprer ajouet transfere a autre fenetre
        return redirect()->route('medecin.index')
        ->with('success','medecin est modiffier');
    }

    public function destroy(medecin $medecin)
    {
        $medecin->delete();
        return redirect()->route('medecin.index')
        ->with('success','medecin est supprimer');
    }
}
