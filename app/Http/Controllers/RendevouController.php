<?php

namespace App\Http\Controllers;

use App\Models\rendevou;
use Illuminate\Http\Request;

class RendevouController extends Controller
{
   
    public function index()
    {
        $rendevous = Rendevou::latest()->paginate(5);
        return view('Backend.list_rendevous',compact('rendevous'));
    }

    public function create()
    {
        return view('Backend.create_rendevou');
    }

    // return 'ok';
    public function store(Request $request)
    {
        
            $request->validate([
                'date_rendvous'=>'required'
             
           
            ]);
    
            $rendevous = Rendevou::create($request->all());
            // apprer ajouet transfere a autre fenetre
            return redirect()->route('rendevou.index')
            ->with('success','rendevou est ajouter');
        
    }

    public function show(rendevou $rendevou)
    {
        return view('Backend.show_rendevous',compact('rendevou'));   

    }

 
    public function edit(rendevou $rendevou)
    {
        return view('Backend.edit_rendevous', compact('rendevou'));  
    }

    public function update(Request $request, rendevou $rendevou)
    {
        $request->validate([
            'date_rendvous'=>'required'
           
        ]); 
 
        $rendevou->update($request->all());
        // apprer ajouet transfere a autre fenetre
        return redirect()->route('rendevou.index')
        ->with('success','rendevou est modiffier');
    }


    public function destroy(rendevou $rendevou)
    {
        $rendevou ->delete();
        return redirect()->route('rendevou.index')
        ->with('success','rendevou est supprimer');
    }
}
