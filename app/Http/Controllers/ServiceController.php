<?php

namespace App\Http\Controllers;

use App\Models\service;
use App\Models\medecin;
use App\Models\patologie;
use Illuminate\Http\Request;

class ServiceController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $service = Service::latest()->paginate(5);
        return view('Backend.list_service',compact('service'));
    }

    public function create()
    {
       
        return view('Backend.create_service');
    }

    public function store(Request $request)
    {
       
        $request->validate([
            'nom'=>'required',
            'date_creation'=>'required'
           
       
        ]);

        $service = Service::create($request->all());
        // apprer ajouet transfere a autre fenetre
        return redirect()->route('service.index')
        ->with('success','sercice est ajouter');

    }

    public function show(service $service)
    {
        return view('Backend.show_service',compact('service'));   

    }

    public function edit(service $service)
    {
        return view('Backend.edit_service', compact('service'));  

    }

    public function update(Request $request, service $service)
    {
        $request->validate([
            'nom'=>'required',
            'date_creation'=>'required'
            
        ]); 
 
        $service->update($request->all());
        // apprer ajouet transfere a autre fenetre
        return redirect()->route('service.index')
        ->with('success','service est modiffier');
    }

    public function destroy(service $service)
    {
        $service ->delete();
        return redirect()->route('service.index')
        ->with('success','service est supprimer');
    }
}
