<?php

namespace App\Http\Controllers;

use App\Models\patologie;
use App\Models\service;
use Illuminate\Http\Request;

class PatologieController extends Controller
{
   
    public function index()
    {
        $patologie = Patologie::latest()->paginate(5);
        return view('Backend.list_patologie',compact('patologie'));
    }
    public function create()
    {
        $services = service::all();
        return view('Backend.create_patologie',compact('services'));

    }

    public function store(Request $request)
    {
        
        $request->validate([
            'nom'=>'required'
         
       
        ]);

        // dd($request->all());
        $patologie = Patologie::create($request->all());
        
        return redirect()->route('patologie.index')
        ->with('success','patologie est ajouter');
    
}
    public function show(patologie $patologie)
    {
        return view('Backend.show_patologie',compact('patologie'));   

    }
    public function edit(patologie $patologie)
    {
        $services = service::all();
        return view('Backend.edit_patologie', compact('patologie','services'));  
    }
    public function update(Request $request, patologie $patologie)
    {
        $request->validate([
            'nom'=>'required'
           
        ]); 
 
        $patologie->update($request->all());

        return redirect()->route('patologie.index')
        ->with('success','patologie est modiffier');
    }
    public function destroy(patologie $patologie)
    {
        $patologie ->delete();
        return redirect()->route('patologie.index')
        ->with('success','patologie est supprimer');
    }
}
